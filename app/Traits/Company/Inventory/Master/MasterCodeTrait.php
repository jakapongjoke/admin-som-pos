<?php
namespace App\Traits\Company\Inventory\Master;  
use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\DB;
use DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Company\StoreCreator\Inventory\CompanyMasterInventory as CompanyMasterInventory;
use App\Models\Customer\Inventory\MasterCode;

/*
MasterCodeTrait เป็นไฟล์สำหรับ รวม ฟิวเจอร์ เพิ้ม ดึงข้อมูล แก้ไขข้อมูล ลบข้อมูล ของ master 
1. GetMasterCodeByType = ดึงข้อมูล Master ตาม type : Return Type Collection
2. addMasterCode =  เพิ่ม ข้อมูล Master Code

*/
trait MasterCodeTrait{

    public function GetMasterCodeByType(string $company_name , string $master_type,$perPage=10,$page=1,$field_select=[]){
        $mastercode = new MasterCode();
        $skip = ($page - 1) * $perPage;
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        if(is_array($field_select)&&count($field_select)>0){
            return $model->select($field_select)->where("master_type","=",$master_type)->skip($skip)->take($perPage)->get();
        }else{
                return $model->where("master_type","=",$master_type)->skip($skip)->take($perPage)->get();
        }
    
    
    }

    public function addMasterCode(string $company_name , $data =[]){
        $mastercode = new MasterCode();

        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
     

        return $model->create($data);
    }

    public function updateMasterCode(string $company_name , $data =[],$id,$returnType="json"){
        $mastercode = new MasterCode();

        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  





        $master =  $model->where("id",'=',$id);
        $master_code = isset($data['master_code'])?$data['master_code']:NULL;
        $master_available_for = isset($data['master_available_for'])?$data['master_available_for']:NULL;
        $master_infomation = isset($data['master_infomation'])?json_encode($data['master_infomation'],true):NULL;
        $parent_id = isset($data['parent_id'])?$data['parent_id']:0;

        

        if(isset($data['master_image'])){
            $updatedata = $master->update([
            
                "master_name"=>$data['master_name'],
                "master_status"=>$data['master_status']?$data['master_status']:"active",
                "parent_id"=>$parent_id,
                "master_image"=>$data['master_image'],
                "master_code"=> $master_code,
                "master_description"=>$data['master_description']?$data['master_description']:"",
                "master_infomation"=>$master_infomation,
                "master_available_for"=>$master_available_for,
            
            ]);
        }else{
            $updatedata = $master->update([
            
                "master_name"=>$data['master_name'],
                "master_status"=>$data['master_status']?$data['master_status']:"active",
                "parent_id"=>$parent_id,
                 "master_code"=> $master_code,
                "master_description"=>$data['master_description']?$data['master_description']:"",
                "master_infomation"=>$master_infomation,
                "master_available_for"=>$master_available_for
            
            ]);
        }
     


        switch($returnType){
            case "json" :
                if ($updatedata) {
                    return response()->json([
                        "status" => 200,
                        "message" =>"Updating Complete" ,
                    ], 200);
                } else {
                    return response()->json([
                        "status" => 500,
                        "message" => "Update Query Error",
                    ], 500);
                
                }

            break;
            case "bool":
                if ($updatedata) {
                    return true;
                } else {
                    return false;
                
                }
            break;

            case "object":
                return   $updatedata;
                
            break;

            default :

            if ($updatedata) {
                return response()->json([
                    "status" => 200,
                    "message" =>"Updating Complete" ,
                ], 200);
            } else {
                return response()->json([
                    "status" => 500,
                    "message" => "Update Query Error",
                ], 500);
            
            }

            break;
        }
      



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

    public function countMasterByMasterCode(string $company_name , string $master_code){
        $mastercode = new MasterCode();
   
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  
        $result =  $model->where('master_code','LIKE',"%{$master_code}%")->get()->count();
        if (!$result) {
            return response()->json([
                "status" => 200,
                "count" =>  0,
            ], 200);
        } else {
            return response()->json([
                "status" => 200,
                "count" => $result,
            ], 200);
        }
    }






    public function getMasterCodeById(string $company_name , int $master_id,$field_select=""){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);  


        if($master_id==""){
            return response()->json([
                "status" => 404,
                "message" => "please input master id",
            ], 404);
        }
        if(is_array($field_select)&&count($field_select)>0){
            $result =  $model->select($field_select)->where('id', $master_id)->first();


        }else{
            $result =  $model->where('id', $master_id)->first();

        }
       
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

    public  function GetMasterCodeByIdJson(string $company_name , int $master_id,$limit=100,$skip=0){
        $mastercode = new MasterCode();
   
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);

        return response()->json([
            "status"=>200,
            "data"=> $model->where("id","=",$master_id)->get()->first()
        ], 200);
         
    }

    

    public  function updateMasterStatus(string $company_name , int $master_id,string $master_status){
        $mastercode = new MasterCode();
   
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);
        $master_status_check_type = true;
        if($master_status!=="active"&&$master_status!=="inactive"){
            $master_status_check_type = false;
            return response()->json([
                "status"=>400,
                "message"=> "master status can be active or inactive"
            ], 400);
        }

        if(is_numeric($master_id)&&$master_status_check_type===true){

           $data =  $model->where('id',$master_id);
            $data->update([
                "master_status"=>$master_status
            ]);
            return response()->json([
                "status"=>200,
                "message"=> "change master status to $master_status"
            ], 200);
        }

    }

    public  function GetMasterCodeByTypeJson(string $company_name , string $master_type,$perPage=10,$page=1){
        $mastercode = new MasterCode();
        $skip = ($page - 1) * $perPage;
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);
 
        if($model->where("master_type","=",$master_type)->skip($skip)->take($perPage)->get()->count()==0){
            $data = [];
        }else{
            $data =  $model->where("master_type","=",$master_type)->skip($skip)->take($perPage)->get()->toArray();
        }


        if(is_array($data)||count($data)>0){
            return response()->json([
                "status"=>200,
                "data"=>  $data,
                "total_record"=> count($data)
    
                // "data"=> $model->where("master_type","=",$master_type)->where("master_status","=","active")->skip($skip)->take($limit)->get()->toArray()
            ], 200);
        }else{
            return response()->json([
                "status"=>500,
                "message"=>"query error" 
    
                // "data"=> $model->where("master_type","=",$master_type)->where("master_status","=","active")->skip($skip)->take($limit)->get()->toArray()
            ], 500);
        }
     
         
    }
 
    public function deleteMasterCode(string $company_name,$id){
        $mastercode = new MasterCode();
    
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb); 
        $deletedata = $model->where('id','=',$id)->delete();
        
        if ($deletedata) {
            return response()->json([
                "status" => 200,
                "message" =>"Deleted Complete" ,
            ], 200);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "Delete Query Error",
            ], 500);
        
        }

    }

    public  function GetMasterCodeByParentID(string $company_name , int $parent_id , string $master_type,$limit=100,$skip=0,$return_type="json"){

     if($company_name!==""&&$master_type!==""&&is_null($company_name)!==true&&is_null($master_type)!==true&&$parent_id>0&&is_null($parent_id)!==true){
        $mastercode = new MasterCode();
        $model = $mastercode->newInstance([], true);
        $tb = $company_name."_master_code";
        $model->setTable($tb);
        switch($return_type){
            case "json" : 
                return response()->json([
                    "status"=>200,
                    "data"=> $model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get()->toArray(),
                    "total_record"=>$model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get()->count()
                ], 200);
            break;
            case "array" : 
                return [
                    "data"=> $model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get()->toArray(),
                    "total_record"=>$model->where("master_type","=",$master_type)->where('parent_id','=',$parent_id)->skip($skip)->take($limit)->get()->count()
                ];
            break;   
            
        }


     }else{
        return false;
     }
     
         
    }

}
?>