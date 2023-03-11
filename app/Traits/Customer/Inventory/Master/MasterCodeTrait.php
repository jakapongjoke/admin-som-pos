<?php
namespace App\Traits\Customer\Inventory\Master;
use StringHelper;
use App\Models\Customer\Inventory\MasterCode;
trait MasterCodeTrait{

    public function GetAllMasterCode($company_name){
        $model = $this->setMasterCodeTable($company_name);
        return   $model->get();
    }
    public function GetMasterCodeFromMasterID($company_name,$master_id){
    
        $model = $this->setMasterCodeTable($company_name);

     return   $model->where("master_id","=",$master_id)->get();
    }



    public function setMasterCodeTable($company_name){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
    
        return $model;
    }



}
?>