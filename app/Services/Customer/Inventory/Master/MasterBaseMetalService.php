<?php
namespace App\Services\Customer\Inventory\Master;

use Request;
use Illuminate\Http\UploadedFile as UploadFile;
class MasterBaseMetalService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    public function GetMasterBaseMetal($company_name,$master_type,$perpage,$page){
      
       return $this->GetMasterCodeByTypeJson($company_name,$master_type,$perpage,$page);

    }

    
    public function getMasterBaseMetalPrice($company_name,$master_id){

    return $this->getMasterCodeById($company_name,$master_id,["master_price"]);

    }

    public  function generateRandomNumber($digits) {
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;
        return mt_rand($min, $max);
    }
    public function generateCode() {
        $prefix = "MBM-";
        $date = date("Ymd");
    
        $code = $prefix . $date . "-" . time();
    
        return $code;
    }
    public function GetBaseMetalMasterByid($company_name,$master_id){
   
        return $this->GetMasterCodeById($company_name,$master_id,["id","master_code","master_description","master_name","master_status",'master_price']);
    }
    
    public function CreateBaseMetalMaster($company_name,$data){



     return $this->addMasterCodeJson($company_name,[
            "master_code"=>$this->generateCode(),
            "running_number"=>1,
            "master_name"=>$data['master_name'],
            "master_price"=>$data['master_price']?$data['master_price']:0,
            "master_status"=>$data['master_status'],
            "master_type"=>$data['master_type'],
            "master_description"=>$data['master_description'],
            "master_infomation"=>NULL , 
            "master_available_for"=>NULL
        ]);

      

    }


    public function UpdateMasterBaseMetal($company_name,$data){
       
        if($data['master_code']!=""&&$data['master_id']!=""){
              return $this->updateMasterCode($company_name,[
            "running_number"=>1,
            "master_code"=>$data['master_code'],
            "master_name"=>$data['master_name'],
            "master_price"=>$data['master_price']?$data['master_price']:0,
            // "master_type"=>"master_item",
            "master_status"=>$data['master_status'],
            "master_description"=>$data['master_description'],
        ],$data['master_id']);
        }
      



            

    }

}
?>


