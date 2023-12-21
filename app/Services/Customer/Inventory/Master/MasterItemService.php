<?php
namespace App\Services\Customer\Inventory\Master;

use Request;
use Illuminate\Http\UploadedFile as UploadFile;
class MasterItemService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    public function GetMasterItem($company_name,$master_type,$perpage,$page){
      
       return $this->GetMasterCodeByTypeJson($company_name,$master_type,$perpage,$page);

    }
    public function GetItemMaster($company_name,$master_id){

    }

    public  function generateRandomNumber($digits) {
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;
        return mt_rand($min, $max);
    }
    public function generateCode() {
        $prefix = "MI-";
        $date = date("Ymd");
        $randomNumber = $this->generateRandomNumber(6);
    
        $code = $prefix . $date . "-" . $randomNumber;
    
        return $code;
    }
    public function GetItemMasterByid($company_name,$master_id){
   
        return $this->GetMasterCodeById($company_name,$master_id,["id","parent_id","master_code","master_description","master_name","master_image","master_status",'master_available_for']);
    }
    
    public function CreateItemMaster($company_name,$data){

        $file = isset($data['image_upload'])?$data['image_upload']:"";
        $create_status = false;
        $master_code = isset($data['master_code'])?$data['master_code']:NULL;
        $master_infomation = isset($data['master_infomation'])?$data['master_infomation']:NULL;


       


        $pathFile = "";
        if($file==""){
            $fileName ="";
        }else{
               $fileName = $company_name."-master-item-".strtolower($file->hashName());
               $pathFile = "storage/customer_images/$company_name/master/master-item/". $fileName;

        }
        $available_check = isset($data['available_check'])?$data['available_check']:"";

        if($available_check!=""){
            switch($available_check){
                case "selected_item" :
                    $master_available_for = json_encode($data['master_available_for'],true);
                break;

                case "all_item" :
                    $master_available_for = NULL;
                break;
                default :
                $master_available_for = NULL;
                break;
            }

            
        }else{
            $master_available_for = NULL;

        }
        

        $createdata =  $this->addMasterCode($company_name,[
            "master_code"=>$master_code,
            "running_number"=>1,
            "master_name"=>$data['master_name'],
            "master_image"=>$pathFile,
            "master_status"=>$data['master_status'],
            "master_type"=>$data['master_type'],
            "master_description"=>$data['master_description'],
            "master_infomation"=>$master_infomation , 
            "master_available_for"=>$master_available_for
        ]);

        $id =   $createdata->id;
       
        $createdata->save();
        $create_status = true;
        if($create_status==true){
            if($file!==""){
            $file->storeAs("public/customer_images/$company_name/master/master-item/", $fileName,'local');
                return   $id ;
        }else{
                            return   $id ;

            }
        }else{
            return false;
        }


    }


    public function UpdateMasterItem($company_name,$data){
       
        $file = isset($data['image_upload'])?$data['image_upload']:"";
        $master_code = isset($data['master_code'])?$data['master_code']:NULL;
        $update_status = false;
        $available_check = isset($data['available_check'])?$data['available_check']:"";

        if($available_check!=""){
            switch($data['available_check']){
                case "all_item" :
                    $master_available_for = NULL;
                break;
                case "selected_item" :
                    $master_available_for = json_encode($data['master_available_for'],true);
                break;
                default :
                $master_available_for = NULL;
                break;
            }
          
        }else{
            $master_available_for = NULL ;
        }



        $pathFile = "";



        $master_id = $data['master_id'];
     

        if($file instanceof UploadFile){

            $fileName = $company_name."-master-item-".strtolower($file->hashName());
  $pathFile = "storage/customer_images/$company_name/master/master-item/". $fileName;

          

 $this->updateMasterCode($company_name,[
    "master_code"=>$master_code,
    "running_number"=>1,
    "master_name"=>$data['master_name'],
    "master_image"=>$pathFile,
    // "master_type"=>"master_item",
    "master_status"=>$data['master_status'],
    "master_available_for"=>$master_available_for,
    "master_description"=>$data['master_description'],
    "master_infomation"=>NULL
],$master_id);

$update_status = true;


if($update_status==true){
$file->storeAs("public/customer_images/$company_name/master/master-item/", $fileName,'local');
return true;
}else{
    return false;
}



  }else{

    $update_data = $this->updateMasterCode($company_name,[
        "master_code"=>$master_code,
        "running_number"=>1,
        "master_name"=>$data['master_name'],
        // "master_type"=>"master_item",
        "master_available_for"=>$master_available_for,
        "master_status"=>$data['master_status'],
        "master_description"=>$data['master_description'],
        "master_infomation"=>NULL
    ],$master_id,"bool");


    return true;
  }



    }


    

}
?>


