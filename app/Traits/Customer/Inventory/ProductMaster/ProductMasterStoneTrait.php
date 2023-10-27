<?php
namespace App\Traits\Customer\Inventory\ProductMaster;
use App\Models\Customer\Inventory\ProductMater;
use Illuminate\Support\Facades\DB;
use App\Helpers\Util;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use Response;

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

        $prefixCode = $code[0].'-'.$code[1].$code[2].$code[3];

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
        $prefixCode = $code[0].'-'.$code[1].$code[2].$code[3];
        $running_number  = $this->stoneRunningNumber($company_name,$code);
        return $prefixCode.$running_number;
    }
    public function checkMasterUsingInProductMaster($company_name,$field_name,$id ){
        $model = $this->setProductMasterTable($company_name);
        return $model->where($field_name,'=',$id)->get()->count();
    }
    public function listProductStoneMaster(string $company_name , int $perPage = 10 ,int $page=1){
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

        $productMasterData =  $model->select(["id","master_image","product_stone_code","stone_group","stone_name","stone_shape","master_description","created_at","updated_at"])->orderBy('id','desc')->skip($skip)->limit($perPage)->get()->toArray();


        // $productMasterData  = DB::table($table_data['productMasterTb'])->select(["id","master_image","product_stone_code","stone_group","stone_name","stone_shape","master_description","created_at","updated_at"]);

        // $productMasterData =  $model->select(["id","master_image","product_stone_code","stone_group","stone_name","stone_shape","master_description","updated_at"])->skip($skip)->limit($perPage)->orderByRaw("$table_data[productMasterTb].created_at DESC")->get()->toArray();

        
        // $masterData = $this->getMasterCodeForProductMasterPreset($company_name);

       
        $productMasterInfo = DB::table("$table_data[groupInfoTbName]")->select(['product_stone_code','product_master_id','size','sale_price'])->where('product_group_info_type','=','stone')->get(); 


        
        
        $productdata = [];
        for( $i = 0 ; $i<count($productMasterData) ; $i++){
            $date = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z',$productMasterData[$i]['updated_at']);
            $formattedDate = $date->format('d/m/Y');

            $productMasterData[$i]['stone_group'] = $this->getMasterNameForProductMasterPresetOnce($company_name,$productMasterData[$i]['stone_group'])  ;
            $productMasterData[$i]['stone_name'] = $this->getMasterNameForProductMasterPresetOnce($company_name,$productMasterData[$i]['stone_name'])  ;
            $productMasterData[$i]['stone_shape'] = $this->getMasterNameForProductMasterPresetOnce($company_name,$productMasterData[$i]['stone_shape'])  ;
            $productMasterData[$i]['updated_at'] = $formattedDate;

            $productMasterData[$i]['sale_price'] = [];
                $productMasterData[$i]['size'] = [];
            $infodata =  $productMasterInfo->filter(function ($item) use ($i,$productMasterData){
              
                return $item->product_stone_code == $productMasterData[$i]['product_stone_code'];
    

                   
            });    
            // print_r($masterData);
            foreach ($infodata as $item) {
               
                array_push($productMasterData[$i]['size'] , $this->getMasterNameForProductMasterPresetOnce($company_name,$item->size)  );
                array_push($productMasterData[$i]['sale_price'] , $item->sale_price);
             
            }
            
            }

        DB::disconnect();
        
         return  $productMasterData;
        
     
    }

    public function getProductMasterById(string $company_name,int $id){
        $productMater = new ProductMater();

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

        $productMasterData =  $model->select(["id","master_image","product_stone_code","stone_group","stone_name","stone_shape","stone_color","stone_clarity","stone_cutting","master_certificate","master_certificate_image","master_description","updated_at"])->where('id','=',$id)->orderByRaw("$table_data[productMasterTb].id desc")->get()->toArray();

        
        // $masterData = $this->getMasterCodeForProductMasterPreset($company_name);

       
        $productMasterInfo = DB::table("$table_data[groupInfoTbName]")->select(['product_stone_code','product_master_id','group_name','size','sale_price','standard_weight','unit','sale_price_unit'])->where('product_group_info_type','=','stone')->where('product_master_id','=',$id)->orderByRaw("$table_data[groupInfoTbName].group_name asc")->get()->toArray(); 

        $data = [
            "productMasterData"=>$productMasterData[0],
            "productMasterInfo"=>$productMasterInfo
        ];


        DB::disconnect();
        
         return  $data;
        
    }
    public function getProductMasterStoneById(string $company_name,int $id){
        $productMater = new ProductMater();

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

        $productMasterData =  $model->select(["id","master_image","product_stone_code","stone_group","stone_name","stone_shape","master_description","updated_at"])->where('id','=',$id)->get()->toArray();

        
        // $masterData = $this->getMasterCodeForProductMasterPreset($company_name);

       
        $productMasterInfo = DB::table("$table_data[groupInfoTbName]")->select(['product_stone_code','product_master_id','size','sale_price','standard_weight','unit','sale_price_unit'])->where('product_group_info_type','=','stone')->get(); 

        


        DB::disconnect();
        
         return  $productMasterData;
        
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

    public function insertProductMasterStone($company_name,$data){
        
          
    $table = $company_name."_product_master";
        $MasterCode = new ProductMater();
   
        $model = $MasterCode->setTable($table);

        DB::beginTransaction();
        $transactionSuccess = true;


        try {
            
            $product_master_id =   DB::table($table)->insertGetId($data['product_stone_data']);



            for($i=0;$i<count($data['product_group_info_data']);$i++){

            $groupdata = [
                "product_master_id"=>$product_master_id,
                "product_stone_code"=> $data['product_stone_data']['product_stone_code'] ,
                "group_name"=>  $data['product_group_info_data'][$i]['group'],
                "sale_price"=>  $data['product_group_info_data'][$i]['sale_price'],
                "sale_price_unit"=> $data['product_group_info_data'][$i]['unit_sale'] ,
                "size"=> $data['product_group_info_data'][$i]['size']  ,
                "standard_weight"=> $data['product_group_info_data'][$i]['std_weight']  ,
                "unit"=>  $data['product_group_info_data'][$i]['weight_unit']  ,
                "product_group_info_type"=> 'stone' ,
    
            ];

             $insertSuccess = DB::table('ananta_product_group_info')->insert( $groupdata );
             if (!$insertSuccess) {
                $transactionSuccess = false;
                break; // Exit the loop early
            }
            
            }

          
            if ($transactionSuccess) {
                DB::commit();
                return Response::json([
                    "status"=>200,
                    "message"=>"complete"
                ]);
            } else {
                DB::rollback();
                return Response::json([
                    "status"=>500,
                    "message"=>"error insert product group"
                ]);
            }
                
            
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollback();
            return Response::json([
                "status"=>500,
                "message"=>$e->getMessage()
            ]);
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