<?php
namespace App\Services\Customer\GeneralInfo;

class BranchService{
    use \App\Traits\Customer\GeneralInfo\BranchTrait;

    
    public function getAllBranch($company_name){
        $branchData = $this->getAllBranchData($company_name);

        return response()->json([
            "status" => 200,
            "company_name"=>$company_name,
            "data" => $branchData,
            "count" => count($branchData),
        ], 200);


    }
    public function getBranch($company_name,$branchType){
        $branchData = $this->getBranchData($company_name,$branchType);

        return response()->json([
            "status" => 200,
            "company_name"=>$company_name,
            "data" => $branchData,
            "count" => count($branchData),
        ], 200);


    }
    public function listBranch($company_name){
        // branch and headbranch are merge together

        $branchData = $this->listAllBranchData($company_name);

        return response()->json([
            "status" => 200,
            "data" => $branchData,
            "count" => count($branchData),
        ], 200);


    }

public function checkCanAddBranch($company_name,$returnType="json"){
    $countAllCompanyBranch =0;
    $limitedBranch = 10;
   
    if($countAllCompanyBranch<=$limitedBranch){
        switch($returnType){
            case "json":
                return response()->json([
                    "status" => 200,
                    "can_add"=>true,
                ], 200);
            break;
            case "bool":
                return true;
            break;
        }
    
    }else{
        switch($returnType){
            case "json":
                return response()->json([
                    "status" => 200,
                    "can_add"=>false,
                ], 200);
            break;
            case "bool":
                return false;
            break;
        }
    }
 

}
public function createBranchMockdata($company_name,$form_id){
    $branch_data = [
        "company_name"=>$company_name,
        "form_id"=>$form_id,
        "branch_code"=>"",
        "branch_name"=>"",
        "tax_id"=>"",
        "branch_location"=>"",
        "brand_logo"=>"",
        "phone_code"=>"",
        "phone_number"=>"",
        "fax_number"=>"",
        "email"=>"",
        "business_type"=>"retail",
        "address"=>"",
        "country"=>"",
        "province"=>"",
        "city"=>"",
        "zipcode"=>"",
        "general_footer"=>"",
        "certificate_footer"=>"",
    ];
    $created = $this->createBranch($company_name,$branch_data);
    if($created!==false){
        return response()->json([
            "status" => 200,
            "company_name"=>$company_name,
            "data" => $branch_data,
            "id" => $created,
            
        ], 200);
    }else{
        return response()->json([
            "status" => 500,
            "message"=> "Cannot create branch plaese check citeria"
        ], 500);
    }
   
}
    public function updateBranchInfomation($company_name,$head_branch_data,$branch){
        $completeBranchUpdate = false;
        $completeHeadBranchUpdate = false;

        if($head_branch_data['form_status']=="edit"){
             $updateHeadBranch =  $this->updateHeadBranch($company_name,$head_branch_data,$head_branch_data['form_id'],$head_branch_data['id']);
             if($updateHeadBranch){
                $completeHeadBranchUpdate = true;
             }
        }else{
            $completeHeadBranchUpdate = true;
        }


if($completeHeadBranchUpdate===true){
    
    foreach($branch as $k=>$v){
        
        $created = $this->updateBranch($company_name,$branch[$k],$v['form_id']);
            if($created!==false){

                $completeBranchUpdate = true;
            }
        
}

}




       if($completeHeadBranchUpdate===true&&$completeBranchUpdate===true){
        return response()->json([
            "status" => 200,
            "message"=>"update_complete",
        ], 200);
       }else{
        return response()->json([
            "status" => 500,
            "message"=>"cannot update branch",
        ], 500);
       }



      
       
    }


}


?>