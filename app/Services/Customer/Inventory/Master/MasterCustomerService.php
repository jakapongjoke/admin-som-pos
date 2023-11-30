<?php
namespace App\Services\Customer\Inventory\Master;

use Request;

class MasterCustomerService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    public function GetMasterCustomer($company_name,$perpage,$page){
       return $this->GetMasterCodeByTypeJson($company_name,"master_account_customer",$perpage,$page);

    }
    public function GetCustomerMaster($company_name,$master_id){

    }

    public  function generateRandomNumber($digits) {
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;
        return mt_rand($min, $max);
    }
    public function generateCode() {
        $prefix = "mc-";
        $date = date("Ymd");
        $randomNumber = $this->generateRandomNumber(6);
    
        $code = $prefix . $date . "-" . $randomNumber;
    
        return $code;
    }
    
    public function CreateCustomerMaster($company_name,$data){

        $master_info = [
            "first_name"=>$data['master_infomation']['first_name'],
            "middle_name"=>$data['master_infomation']['middle_name'],
            "last_name"=>$data['master_infomation']['last_name'],
            "gender"=>$data['master_infomation']['gender'],
            "birthdate"=>$data['master_infomation']['birthdate'],
            "birthmonth"=>$data['master_infomation']['birthmonth'],
            "birthyear"=>$data['master_infomation']['birthyear'],
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
        $this->addMasterCode($company_name,[
            "master_code"=>$this->generateCode(),
            "running_number"=>1,
            "master_name"=>$data['master_infomation']['first_name']." ".$data['master_infomation']['middle_name']." ".$data['master_infomation']['last_name'],
            "master_status"=>"active",
            "master_type"=>"master_account_customer",
            "master_description"=>"",
            "master_infomation"=>json_encode($master_info ,JSON_FORCE_OBJECT)
    
        ]);
    }

}
?>


