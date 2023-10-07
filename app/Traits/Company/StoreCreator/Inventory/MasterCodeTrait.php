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

    public function getMasterCodeByTypeArray(string $company_name,string $master_type){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
        $data =  $model->where("master_type","=",$master_type)->get()->toArray();
       return  $data;

    }
    public function getMasterCodeForProductMasterPreset(string $company_name){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
        $model = $MasterCode->setTable( $table);
        $data =  $model->where('master_type','=','master_stone_size')->orWhere('master_type','=','master_stone_name')->orWhere('master_type','=','master_stone_shape')->orWhere('master_type','=','master_stone_group')->get()->toArray();
       return  $data;
      
    }
    public function getMasterNameForProductMasterPresetOnce(string $company_name,$master_id){
        $table = $company_name."_master_code";
        $MasterCode = new MasterCode();
        $model = $MasterCode->setTable( $table);
        $data =  $model->where('id','=',$master_id)->get()->first()->master_name;
       return  $data;
      
    }
}

?>