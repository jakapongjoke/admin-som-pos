<?php
namespace App\Traits\Customer\Inventory\Master;
use StringHelper;
use App\Models\Customer\Inventory\MasterCode;
trait MasterCodeTrait{

    public function GetAllMasterCode($company_name){
        $model = $this->setMasterCodeTable($company_name);
        return   $model->get();
    }
    
    public function GetMasterCodeByType($company_name,string $master_type,int $limit=100){
        $model = $this->setMasterCodeTable($company_name);
        switch($limit){
    

            case $limit > 0;
            return   $model->where('master_type','=',$master_type)->skip(0)->take($limit)->get();

            break;

            case $limit < 0;
            return false;
            break;

            default:

            return   $model->where('master_type','=',$master_type)->skip(0)->take($limit)->get();
             break;

        }
    }
    public function GetMasterCodeFromMasterID($company_name,$master_id){
    
        $model = $this->setMasterCodeTable($company_name);

     return   $model->where("master_id","=",$master_id)->get();
    }



    public function setMasterCodeTable($company_name){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
        $model =$MasterCode->fillable(['master_code','master_name','running_number','master_tag','master_type','master_price','master_description','master_status','master_image','addional_infomation','master_addional_infomation','master_available_for']);
        return $model;
    }
    public function createMasterCode($company_name,$data){
        $model = $this->setMasterCodeTable($company_name);

        $model->create($data);
        return true;
    }



}
?>