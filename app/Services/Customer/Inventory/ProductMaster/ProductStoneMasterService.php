<?php
namespace App\Services\Customer\Inventory\ProductMaster;

class ProductStoneMasterService{
    use \App\Traits\Customer\Inventory\ProductMaster\ProductMasterStoneTrait;
    public function getStoneCode(){

    }
    public function list($company_name , $perPage  ,$page){
        $data = $this->listProductStoneMaster($company_name , $perPage  ,$page);
        if($data->isEmpty()){
            return response()->json([
                "status"=>200,
                "list_data"=> []
            ], 200);
        }else{
            return response()->json([
                "status"=>200,
                "list_data"=> $data->toArray()
            ], 200);
        }
    }
   
    

}



?>