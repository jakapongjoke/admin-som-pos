<?php
namespace App\Traits\Customer\Inventory\ProductMaster;
use App\Models\Customer\Inventory\ProductGroupInfo;

trait ProductGroupInfoTrait{
    use \App\Traits\Customer\Inventory\Master\MasterCodeTrait;

    public function getInfoSizeSalePriceOnce(string $company_name,int $product_master_id){
        $productGroupInfo = new ProductGroupInfo();


        $model = $productGroupInfo->newInstance([], true);
        $tb = $company_name."_product_group_info";
        $model->setTable($tb);  
        $data = $model->where("product_master_id","=",$product_master_id)->get()->first();
        $first_size = $data->size;
        $size_name =  $this->getMasterNameById($company_name,$first_size);
        $result = [
            "size_name"=>$size_name,
            "sale_price"=>$data->sale_price
        ];
        return  $result;

    }
    
    public function getInfoSizePrice(string $company_name,int $product_master_id,$limit=1){
        $productGroupInfo = new ProductGroupInfo();

        $size_name = [];
        $model = $productGroupInfo->newInstance([], true);
        $tb = $company_name."_product_group_info";
        $model->setTable($tb);  
        $size = $model->where("id","=",$product_master_id)->limit($limit)->get();

        foreach($size as $infosize){
            $arrSizeData = [
                "size"=>$infosize->master_name,
                "sale_price"=>$infosize->sale_price
            ];
            array_push($size_name,$arrSizeData);
        }
        return  $this->getMasterNameById($company_name,$first_size);

    }
 
    public function list(string $company_name,int $product_master_id){

    }
}

?>