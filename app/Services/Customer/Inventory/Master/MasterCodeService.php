<?php
namespace App\Services\Customer\Inventory\Master;

use Request;

class MasterCodeService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    

    public function getProductStoneMasterCodeInfoByProductStoneId(string $company_name,int $stone_id){
        $master_name = $this->GetMasterCodeByParentID( $company_name ,  $stone_id , 'master_name',$limit=100,$skip=0,"array");
    }

    public function GetMasterVendor($company_name,$perpage,$page){
        return $this->GetMasterCodeByTypeJson($company_name,"master_account_vendor",$perpage,$page);
 
     }
     public function GetVendorMaster($company_name,$master_id){
 
     }
 
     public  function generateRandomNumber($digits) {
         $min = pow(10, $digits - 1);
         $max = pow(10, $digits) - 1;
         return mt_rand($min, $max);
     }
     public function generateCode() {
         $prefix = "MV-";
         $date = date("Ymd");
         $randomNumber = $this->generateRandomNumber(6);
     
         $code = $prefix . $date . "-" . $randomNumber;
     
         return $code;
     }
     public function GetVendorMasterByid($company_name,$master_id){
         return $this->GetMasterCodeById($company_name,$master_id,['id','master_infomation']);
     }
     
     public function CreateVendorMaster($company_name,$data){
 
         $this->addMasterCode($company_name,[
             "master_code"=>$this->generateCode(),
             "running_number"=>1,
             "master_name"=>$data['master_infomation']['company_name'],
             "master_status"=>"active",
             "master_type"=>$data['master_type'],
             "master_description"=>"",
             "master_infomation"=>json_encode($master_info ,JSON_FORCE_OBJECT)
     
         ]);
     }
 
 
     public function UpdateMasterVendor($company_name,$data){
   
         $master_info = [
             "company_registration_number"=>$data['master_infomation']['company_registration_number'],
             "company_name"=>$data['master_infomation']['company_name'],
             "email"=>$data['master_infomation']['email'],
             "phone_code"=>$data['master_infomation']['phone_code'],
             "phone_number"=>$data['master_infomation']['phone_number'],
             "ship_address"=>$data['master_infomation']['ship_address'],
             "ship_address_country"=>$data['master_infomation']['ship_address_country'],
             "ship_address_state"=>$data['master_infomation']['ship_address_state'],
             "ship_address_city"=>$data['master_infomation']['ship_address_city'],
             "ship_address_poscode"=>$data['master_infomation']['ship_address_poscode'],
             "tax_address"=>$data['master_infomation']['tax_address'],
             "tax_address_country"=>$data['master_infomation']['tax_address_country'],
             "tax_address_state"=>$data['master_infomation']['tax_address_state'],
             "tax_address_city"=>$data['master_infomation']['tax_address_city'],
             "tax_address_poscode"=>$data['master_infomation']['tax_address_poscode'],
         ];
         $master_id = $data['master_id'];
      
         $this->updateMasterCode($company_name,[
             "running_number"=>1,
             "master_name"=>$data['master_infomation']['company_name'],
             "master_status"=>"active",
             "master_type"=>"master_account_vendor",
             "master_description"=>"",
             "master_infomation"=>json_encode($master_info ,JSON_FORCE_OBJECT)
     
         ],$master_id);
 
     }
}
?>


