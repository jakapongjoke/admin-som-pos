<?php
namespace App\Repositories\Customer\Inventory\Master;
use App\Abstracts\Customer\Inventory\Master\MasterCodeAbstract;
class MasterCodeRepository extends MasterCodeAbstract{


    public function all($company_name){
        return $this->GetAllMasterCode($company_name);
    }

    public function FindByMasterType(string $company_name,string $master_type,int $limit=100){
        return $this->GetMasterCodeByType($company_name,$master_type,$limit);
        switch($limit){
    

            case $limit > 0:
            return $this->GetMasterCodeByType($company_name,$master_type,$limit)->skip(0)->take($limit)->get();
            break;

            case $limit < 0:
            return false;
            break;

            default:

            return $this->GetMasterCodeByType($company_name,$master_type,$limit)->skip(0)->take($limit)->get();

        }

    }
    public function create($company_name,$data){
        // print_r($data);
        // return true;
         $this->createMasterCode($company_name,$data);
    }
}
?>