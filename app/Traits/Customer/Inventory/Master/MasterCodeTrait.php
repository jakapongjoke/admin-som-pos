<?php
namespace App\Traits\Customer\Inventory\Master;
use StringHelper;
use App\Models\Customer\Inventory\MasterCode;
trait MasterCodeTrait{

    public  function GetMasterCodeByParentID(string $company_name , int $parent_id , string $master_type,$limit=100,$skip=0){
        $model = $this->setMasterCodeTable($company_name);
    return $model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get();
    
       }
    public function GetAllMasterCode($company_name){
        $model = $this->setMasterCodeTable($company_name);
        return   $model->get();
    }
    public function getMasterNameById(string $company_name , int $master_id){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        $result =  $model->where('id', $master_id)->first()->master_name;
        return $result;
    }

    

    public function GetMasterCodeByType($company_name,string $master_type,int $limit=100,$skip=0){
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
    public  function GetMasterCodeByTypeJson(string $company_name , string $master_type,$limit=100,$skip=0){
        $mastercode = new MasterCode();
   
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);
        return response()->json([
            "status"=>200,
            "data"=> $model->where("master_type","=",$master_type)->skip($skip)->take($limit)->get()->toArray()
        ], 200);
         
    }

    public function getMasterCodeById(string $company_name , int $master_id){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        $result =  $model->where('id', $master_id)->first();
 
        return $result; 
    
    }


    
    public function GetMasterCodeFromMasterID($company_name,$master_id){
    
        $model = $this->setMasterCodeTable($company_name);

     return   $model->where("id","=",$master_id)->first()->master_code;
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