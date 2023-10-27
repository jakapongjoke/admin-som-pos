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


trait BranchTrait{
    public function getBranchData($company_name,$branchType){


        $model = $this->setBranchTable($company_name);
        if($model->where("branch_type","=",$branchType)->get()->count()<=0){
            return [];
        }else{
            return $model->where("branch_type","=",$branchType)->get()->toArray();
        }

    }
    
    public function setBranchTable($company_name){
        $table = $company_name."_branch";
        $branch = new Branch();
   
        $model = $branch->setTable($table);
   
        return $model;
    }
}
?>