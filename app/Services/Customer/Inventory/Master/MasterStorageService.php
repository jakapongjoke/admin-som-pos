<?php
namespace App\Services\Customer\Inventory\Master;
use App\Models\Customer\Inventory\MasterCode;

class MasterStorageService {
use \App\Traits\Company\Inventory\Master\MasterCodeTrait;


public function CreateMasterStorage($company_name,$data){

    $this->addMasterCode($company_name,[
        "master_code"=>$data['master_code'],
        "running_number"=>1,
        "master_name"=>$data['master_name'],
        "master_status"=>$data['status'],
        "master_type"=>"master_account_storage",
        "master_description"=>$data['desctiption'],
        "master_infomation"=>json_encode(["branch_location"=>$data['branch_location']],JSON_FORCE_OBJECT)

    ]);
    return response()->json([
        "status"=>200,
        "message"=>"Add CreateMasterStorage complete"
    ], 200);
}



    public function GetStorageMaster($company_name,$limit=100,$skip=0){
        
        if($this->GetMasterCodeByType($company_name,"master_account_storage",$limit,$skip)->count()<=0){
            $data = [];
        }else{
            $field_select = ['id','master_description','master_code','master_name','master_status'];
            $data = $this->GetMasterCodeByType($company_name,"master_account_storage",$limit,$skip,$field_select)->toArray();
        }

        if(is_array($data)){
            return response()->json([
                "data"=> $data,
                "status"=>200,
            ], 200);
   
        }else{
            return response()->json([
                "status"=>500,
                "message"=> "Can not query branch",
            ], 500);

    
        }
        
    }

    public function GetByid($company_name,$master_id){
        $field_select = ['id','master_description','master_code','master_name','master_status','master_infomation'];
        return $this->getMasterCodeById($company_name,$master_id,$field_select);
    }
}

?>