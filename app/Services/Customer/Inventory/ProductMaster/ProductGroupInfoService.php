<?php
namespace App\Services\Customer\Inventory\ProductMaster;


class ProductGroupInfoService{
    use \App\Traits\Customer\Inventory\ProductMaster\ProductGroupInfoTrait;
    public function getSizeSalePriceOnce(){
        $data =  $this->getInfoSizeSalePriceOnce($company_name,$product_master_id);
        if(count($data)==0){
            return response()->json([
                "status"=>200,
                "list_data"=> []
            ], 200);
        }else{
            return response()->json([
                "status"=>200,
                "list_data"=> [
                     "size_name"=>$data['size_name'],
                    "sale_price"=> $data['sale_price']
                ]
                   
            ], 200);
        }
       
    }

}


?>