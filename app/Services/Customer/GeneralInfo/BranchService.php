<?php
namespace App\Services\Customer\GeneralInfo;

class BranchService{
    use \App\Traits\Customer\GeneralInfo\BranchTrait;
    public function getBranch($company_name,$branchType){
        $branchData = $this->getBranchData($company_name,$branchType);
        return response()->json([
            "status" => 200,
            "data" => $branchData,
            "count" => count($branchData),
        ], 200);

    }
}


?>