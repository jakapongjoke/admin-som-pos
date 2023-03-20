<?php
namespace App\Repositories\Customer\Inventory\Master;
use App\Abstracts\Customer\Inventory\Master\MasterCodeAbstract;
class MasterCodeRepository extends MasterCodeAbstract{


    public function all($company_name){
        return $this->GetAllMasterCode($company_name);
    }
    public function FindByMasterType(string $company_name,string $master_type){
        return $this->GetMasterCodeByType($company_name,$master_type);
    }
    public function create($company_name,$data){
        // print_r($data);
        // return true;
         $this->createMasterCode($company_name,$data);
    }
}
?>