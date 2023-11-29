<?php
namespace App\Traits\Customer\GeneralInfo;
use App\Models\Customer\GeneralInfo\Branch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\QueryException;
use StringHelper;
use DBTableHelper;
use App\Helpers\Util;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use Response;
use Illuminate\Http\UploadedFile as UploadFile;

trait BranchTrait{
    public function getAllBranchData($company_name){
        
        $model = $this->setBranchTable($company_name);


        if($model->where("branch_type","=","head_office")->limit(2)->get()->count()<=0){
            $head_office = [];
        }else{
            $head_office = $model->where("branch_type","=","head_office")->limit(1)->get()->toArray();
        }

        if($model->where("branch_type","=","branch")->limit(2)->get()->count()<=0){
            $branch = [];
        }else{
            $branch = $model->where("branch_type","=","branch")->limit(100)->get()->toArray();
        }


        return  [
            "headBranch"=> $head_office,
            "branch"=>$branch,
        ];


    }
    public function getBranchData($company_name,$branchType){

        
        $model = $this->setBranchTable($company_name);

        if($model->where("branch_type","=","head_office")->limit(100)->get()->count()<=0){
            $head_office = [];
        }else{
            $head_office = $model->where("branch_type","=","head_office")->limit(1)->get()->toArray();
        }

        if($model->where("branch_type","=","branch")->get()->count()<=0){
            $branch = [];
        }else{
            $branch = $model->where("branch_type","=","branch")->limit(100)->get()->toArray();
        }


        return  [
            "headBranch"=> $head_office,
            "branch"=>$branch,
        ];
  

    }
    public function listAllBranchData($company_name){

        
        $model = $this->setBranchTable($company_name);

        if($model->get()->count()<=0){
            $branch = [];
        }else{
            $branch = $model->select(["id","branch_name"])->limit(100)->get()->toArray();
        }


        return   $branch;
  

    }
 
    public function createBranch($company_name,$branch_data){
        $model = $this->setBranchTable($company_name);
        $file = $branch_data['brand_logo']?$branch_data['brand_logo']:"";
        $create_status = false;
        $pathFile = "";
        // print_r($file);
        // exit();

        if($file==""){
            $fileName ="";
        }else{
               $fileName = $company_name."-branch-".$file->hashName();
               $pathFile = "public/customer_images/$company_name/branch/". $fileName;

        }
        
        
        $createdata =  $model->create([
            "company_name"=>$branch_data['company_name'],
            "form_id"=>$branch_data['form_id'],
            "branch_name"=>$branch_data['branch_name'],
            "branch_code"=>$branch_data['branch_code'],
            "tax_id"=>$branch_data['tax_id'],
            "branch_location"=>$branch_data['branch_location'],
            "branch_type"=>"branch",
            "brand_logo"=>$pathFile,
            "phone_code"=>$branch_data['phone_code'],
            "phone_number"=>$branch_data['phone_number'],
            "fax_number"=>$branch_data['fax_number'],
            "email"=>$branch_data['email'],
            "business_type"=>$branch_data['business_type'],
            "address"=>$branch_data['address'],
            "country"=>$branch_data['country'],
            "province"=>$branch_data['province'],
            "city"=>$branch_data['city'],
            "zipcode"=>$branch_data['zipcode'],
            "general_footer"=>$branch_data['general_footer'],
            "certificate_footer"=>$branch_data['certificate_footer'],
        ]);
        $id =   $createdata->id;
       
        $createdata->save();
        $create_status = true;
        if($create_status==true){
            if($file!==""){
            $file->storeAs("public/customer_images/$company_name/branch/", $fileName,'local');
                return   $id ;
        }else{
                            return   $id ;

            }
        }else{
            return false;
        }
        
    }
    public function getImageExists($branch_id){
        $model = $this->setBranchTable($company_name);
    }


    
    public function updateBranch($company_name,$branch_data,$form_id){
        
        $model = $this->setBranchTable($company_name);
        $file = $branch_data['brand_logo']?$branch_data['brand_logo']:"";
        $update_status = false;
        $pathFile = "";
        // print_r($file);
        // exit();
        if($file instanceof UploadFile){

                  $fileName = $company_name."-branch-".$file->hashName();
        $pathFile = "storage/customer_images/$company_name/branch/". $fileName;
     
      
        }else{
            $pathFile =  $branch_data['brand_logo'];
        }
  
        
        
        $updatedata =  $model->where("form_id",$form_id)->where("id",'=',$branch_data['id'])->update([
            "company_name"=>$branch_data['company_name'],
            "branch_name"=>$branch_data['branch_name'],
            "form_id"=>$branch_data['form_id'],
            "branch_code"=>$branch_data['branch_code'],
            "tax_id"=>$branch_data['tax_id'],
            "branch_location"=>$branch_data['branch_location'],
            "brand_logo"=>$pathFile,
            "phone_code"=>$branch_data['phone_code'],
            "phone_number"=>$branch_data['phone_number'],
            "fax_number"=>$branch_data['fax_number'],
            "email"=>$branch_data['email'],
            "business_type"=>$branch_data['business_type'],
            "address"=>$branch_data['address'],
            "country"=>$branch_data['country'],
            "province"=>$branch_data['province'],
            "city"=>$branch_data['city'],
            "zipcode"=>$branch_data['zipcode'],
            "general_footer"=>$branch_data['general_footer'],
            "certificate_footer"=>$branch_data['certificate_footer'],
        ]);
     
       
        $update_status = true;
        if($update_status==true){
            if($file instanceof UploadFile){
            $file->storeAs("public/customer_images/$company_name/branch/", $fileName,'local');
                return true;
        }else{
                            return true;

            }
        }else{
            return false;
        }
        
    }

    public function updateHeadBranch($company_name,$data,$form_id,$branch_id){
        $model = $this->setBranchTable($company_name);
        // echo "form_id".$form_id."id = ".$branch_id;
        // print_r($data);
   
      
        try{

            $head_branch =  $model->where("id","=",$branch_id)->where("form_id","=",$form_id);
           

            if($head_branch->get()->count()>0){
              
            $head_branch->update([
                "company_name"=>$data['company_name'],
                "branch_code"=>$data['branch_code'],
                "branch_name"=>$data['branch_name'],
                "tax_id"=>$data['tax_id'],
                "branch_location"=>$data['branch_location'],
                "phone_code"=>$data['phone_code'],
                "phone_number"=>$data['phone_number'],
                "fax_number"=>$data['fax_number'],
                "email"=>$data['email'],
                "business_type"=>$data['business_type'],
                "address"=>$data['address'],
                "country"=>$data['country'],
                "province"=>$data['province'],
                "city"=>$data['city'],
                "zipcode"=>$data['zipcode'],
                "general_footer"=>$data['general_footer'],
                "certificate_footer"=>$data['certificate_footer'],

       
                ]);
            }
            $head_branch->save();





           return true;
        }catch(\Exception $e){
            return $e;
        }
    
      
    }

    public function countHeadBranch($company_name){

    }

    
    public function setBranchTable($company_name){
        $table = $company_name."_branch";
        $branch = new Branch();
   
        $model = $branch->setTable($table);
   
        return $model;
    }
}
?>