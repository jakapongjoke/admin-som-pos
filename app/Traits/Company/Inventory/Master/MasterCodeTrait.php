<?php
namespace App\Traits\Company\Inventory\Master;  
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Company\StoreCreator\Inventory\CompanyMasterInventory as CompanyMasterInventory;
use App\Models\Customer\Inventory\MasterCode;

trait MasterCodeTrait{

    public function GetMasterCodeByType(string $company_name , string $master_type,$limit=100,$skip=0){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
    
        return $model->where("master_type","=",$master_type)->skip($skip)->take($limit)->get();
    
    }

    public function getMasterNameById(string $company_name , int $master_id){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        $result =  $model->where('id', $master_id)->first()->master_name;
 
        if (!$result) {
            return response()->json([
                "status" => 404,
                "message" => "No data found.",
            ], 404);
        } else {
            return response()->json([
                "status" => 200,
                "data" => $result,
            ], 200);
        }
    }
    public function getMasterCodeById(string $company_name , int $master_id){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        $result =  $model->where('id', $master_id)->first();
 
        if (!$result) {
            return response()->json([
                "status" => 404,
                "message" => "No data found.",
            ], 404);
        } else {
            return response()->json([
                "status" => 200,
                "data" => $result->toArray(),
            ], 200);
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

    public  function GetMasterCodeByParentID(string $company_name , int $parent_id , string $master_type,$limit=100,$skip=0){

     if($company_name!==""&&$master_type!==""&&is_null($company_name)!==true&&is_null($master_type)!==true&&$parent_id>0&&is_null($parent_id)!==true){
        $mastercode = new MasterCode();
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);
        return response()->json([
            "status"=>200,
            "data"=> $model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get()->toArray()
        ], 200);
     }else{
        return false;
     }
     
         
    }
}
?>