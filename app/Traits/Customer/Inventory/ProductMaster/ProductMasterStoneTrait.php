<?php
namespace App\Traits\Customer\Inventory\ProductMaster;
use App\Models\Customer\Inventory\ProductMater;
use Illuminate\Support\Facades\DB;
use App\Helpers\Util;

trait ProductMasterStoneTrait{
use \App\Traits\Company\StoreCreator\Inventory\MasterCodeTrait;
    
    public function findStoneId(string $company_name,$stoneCode){
        $model = $this->setProductMasterTable($company_name);
          return $model->where('product_stone_code',"LIKE", '%'.$stoneCode.'%')->get();
    }  

    public function  getRunningNumber($company_name){
        $model = $this->setProductMasterTable($company_name);

        return $model->selectRaw('COUNT(*) as count')->value('count') ?? 1;
    }
    public function stoneRunningNumber(string $company_name,$code=[]){

        $prefixCode = $code[0].'-'.$code[1].$code[2];

       $numproduct =  $this->findStoneId($company_name,$prefixCode)->count();

        switch(strlen($numproduct)){
            case 1 :
                $product_id = Util::getValueWithZeroCode(1,$numproduct+1);
            break;
            default : 
            $product_id = $numproduct+1;
          
            
        }
        return $product_id;
       
    }
    public function genProductMasterCode(string $company_name,$code=[]){
        $prefixCode = $code[0].'-'.$code[1].$code[2];
        $running_number  = $this->stoneRunningNumber($company_name,$code);
        return $prefixCode.$running_number;
    }

    public function listProductStoneMaster(string $company_name , $perPage = 10 ,$page=1){
        $productMater = new ProductMater();
        $skip = ($page - 1) * $perPage;

        $model = $productMater->newInstance([], true);
        $productMasterTb = $company_name."_product_master";
        $groupInfoTbName =  $company_name."_product_group_info";
        $masterCodeTbName =  $company_name."_master_code";
        $table_data = [
            "productMasterTb"=> $productMasterTb,
            "groupInfoTbName"=> $groupInfoTbName,
            "masterCodeTbName"=> $masterCodeTbName,
        ];
        $model->setTable($table_data['productMasterTb']);  

     
        $subquery = DB::table($masterCodeTbName)->select('id','master_name')
    ->where('master_type', '=', 'master_stone_group')->orWhere('master_type', '=', 'master_stone_shape')->orWhere('master_type', '=', 'master_stone_name')->orWhere('master_type', '=', 'master_stone_size');
    $master_price =  DB::table("$table_data[groupInfoTbName]")->select('id','sale_price');

$data = DB::table( $table_data['productMasterTb'])

    ->join($table_data['groupInfoTbName'], "$table_data[productMasterTb].id", '=', "$table_data[groupInfoTbName].product_master_id")
  
    ->selectRaw("$table_data[productMasterTb].master_image")
    ->skip($skip)->take($perPage)
    ->get();



        return $data;
     
    }




    public function checkGroupSize($groupdata){
        return DB::table('ananta_product_group_info')->where('group_name','like','%'.$groupdata['group_name'].'%')->where('size','=',$groupdata['size'])->get()->count();
    }
    public function insertProductMaster(string $company_name,$data){
        $model = $this->setProductMasterTable($company_name);
        // print_r($data);


      
       $product_master_data = $data;
       $master_size = $this->getMasterCodeByTypeArray('ananta','master_stone_size');
    //    print_r($master_size);
        $product_stone_code = $data['product_stone_code'];
        $group = ["A","B","C"];
        $units = ['pcs','cts','g'];
       
        $price = [2966.75, 2888.57, 1549.01, 2391.43, 2184.54, 1411.72, 1354.34, 1353.15, 1807.63, 1971.69, 2146.33, 2718.88, 2122.89, 2223.37, 2165.38, 2675.11, 1595.5, 1275.11, 1379.62, 1501.53, 2234.4, 2664.06, 2384.91, 2079.08, 1842.31, 1312.15, 2236.21, 2381.97, 1491.33, 2149.52, 1609.47, 2672.19, 1883.11, 2571.63, 2456.52, 1309.11, 1567.8, 2593.95, 2172.79, 2838.43, 1447.08, 1279.6, 1986.06, 1377.23, 2697.26, 1351.57, 1629.05, 1258.14, 1844.08, 2824.12, 1663.45, 1993.9, 2387.43, 2703.38, 1511.29, 1318.77, 2583.07, 2042.31, 2845.38, 2225.52, 1667.98, 1391.86, 1434.43, 1373.48, 2113.07, 2951.64, 1936.04, 1424.23, 1916.08, 2677.17, 2421.25, 2781.71, 2431.47, 2487.13, 1565.07, 1779.47, 2918.08, 1427.53, 1271.14, 2435.5, 2035.52, 2115.79, 2705.09, 1935.26, 1901.88, 2847.07, 2289.75, 2103.27, 1623.71, 2077.8, 2379.7, 2859.36, 1708.08, 1227.91, 1611.57, 2712.92, 2362.44, 1607.58];
       
       
        DB::beginTransaction();
        $transactionSuccess = true;

        try {
            $product_master_id =   DB::table('ananta_product_master')->insertGetId($data);

            for($g = 0 ; $g<10; $g++){
              
                $unit = $units[rand(0,2)];
                $groupdata = [
                    "product_master_id"=>$product_master_id,
                    "product_stone_code"=> $product_stone_code ,
                    "group_name"=>  $group[rand(0,2)],
                    "sale_price"=>  $price[Util::getRandNumArray($price)],
                    "sale_price_unit"=>  $unit ,
                    "size"=> $master_size[Util::getRandNumArray($master_size)]['id'] ,
                    "standard_weight"=> null ,
                    "unit"=>  $unit  ,
                    "product_group_info_type"=> 'stone' ,
        
                ];


            if($this->checkGroupSize($groupdata)){
                $transactionSuccess = false;
                    throw new \Exception('Already have group and size');

                }else{
                    DB::table('ananta_product_group_info')->insert($groupdata);
                    DB::commit();
                }
    
          
                
            }
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollback();
            // Handle the exception or log the error
            // For example:
            // echo $e->getMessage();
        }
    }    
    public function setProductMasterTable($company_name){
        $table = $company_name."_product_master";
        $MasterCode = new ProductMater();
   
        $model = $MasterCode->setTable($table);
   
        return $model;
    }
}


?>