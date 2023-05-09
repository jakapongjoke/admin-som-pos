<?php
namespace App\Traits\Company\StoreCreator\Inventory;
use App\Models\Customer\Inventory\MasterCode;

trait MasterCodeTrait {

    public  function findMasterBeforeSeed(string $company_name,string $master_code){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
        $model = $MasterCode->fillable(['master_code','master_name','running_number','master_tag','master_type','master_price','master_description','master_status','master_image','addional_infomation','master_addional_infomation','master_available_for']);
        
        $master_count =  $model->where("master_code","=",$master_code)->get()->count();

        return $master_count;
    }

    public  function getRunningNumber(string $company_name){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
        $model = $MasterCode->fillable(['master_code','master_name','running_number','master_tag','master_type','master_price','master_description','master_status','master_image','addional_infomation','master_addional_infomation','master_available_for']);
        
        $lastRecord =  $model->latest()->first()->id+1;
        return $lastRecord;
    }
}

?>