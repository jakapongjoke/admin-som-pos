<?php
namespace App\Services\Customer\Inventory\ProductMaster;

class ProductStoneMasterService{
    use \App\Traits\Customer\Inventory\ProductMaster\ProductMasterStoneTrait;
    public function getStoneCode(){

    }
    public function list($company_name , $perPage  ,$page){
        $data = $this->listProductStoneMaster($company_name , $perPage  ,$page);
        return response()->json([
            "status"=>200,
            "list_data"=> $data
        ], 200);
    }
   
    

}



?>