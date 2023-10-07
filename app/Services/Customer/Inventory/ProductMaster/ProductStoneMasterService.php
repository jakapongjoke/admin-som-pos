<?php
namespace App\Services\Customer\Inventory\ProductMaster;

class ProductStoneMasterService{
    use \App\Traits\Customer\Inventory\ProductMaster\ProductMasterStoneTrait;
    use \App\Traits\Customer\Inventory\Master\MasterCodeTrait;
    public function genStoneCode($company_name ,$master_id_array=[]){
        $stone_group = $this->GetMasterCodeFromMasterID($company_name,$master_id_array['stone_group']);
        $stone_name = $this->GetMasterCodeFromMasterID($company_name,$master_id_array['stone_name']);
        $stone_shape = $this->GetMasterCodeFromMasterID($company_name,$master_id_array['stone_shape']);
        $stone_cutting = $this->GetMasterCodeFromMasterID($company_name,$master_id_array['stone_cutting']);
        $code = [$stone_group,$stone_name,$stone_shape,$stone_cutting];
        return $this->genProductMasterCode($company_name,$code);
    }
    public function list($company_name , $perPage  ,$page){
        $data = $this->listProductStoneMaster($company_name , $perPage  ,$page);
        return response()->json([
            "status"=>200,
            "list_data"=> $data
        ], 200);
    }

    public function getById(string $company_name,int $id){
        $data = $this->getProductMasterById($company_name,$id);
        return response()->json([
            "status"=>200,
            "master_data"=> $data
        ], 200);
    }
    public function getMasterInfoByProductStoneGroupId(string $company_name,int $master_stone_group_id){
        
        $master_stone_group = $this->GetMasterCodeByType($company_name,'master_stone_group',100,0);

        $master_stone_name = $this->GetMasterCodeByParentID($company_name,$master_stone_group_id,'master_stone_name',100,0);

        $master_stone_shape = $this->GetMasterCodeByType($company_name,'master_stone_shape',100,0);
        $master_stone_color = $this->GetMasterCodeByType($company_name,'master_stone_color',100,0);
        $master_stone_clarity = $this->GetMasterCodeByType($company_name,'master_stone_clarity',100,0);
        $master_stone_cutting = $this->GetMasterCodeByType($company_name,'master_stone_cutting',100,0);
        $master_certificate_type = $this->GetMasterCodeByType($company_name,'master_certificate_type',100,0);

        return response()->json([
            "status"=>200,
            "master_info"=> [
                "master_stone_group"=>$master_stone_group,
                "master_stone_name"=>$master_stone_name,
                "master_stone_shape"=>$master_stone_shape,
                "master_stone_color"=>$master_stone_color,
                "master_stone_clarity"=>$master_stone_clarity,
                "master_stone_cutting"=>$master_stone_cutting,
                "master_certificate_type"=>$master_certificate_type

            ]
        ], 200);
    }

   
    

}



?>