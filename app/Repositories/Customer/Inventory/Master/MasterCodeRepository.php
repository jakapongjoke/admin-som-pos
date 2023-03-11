<?php
namespace App\Repositories\Customer\Inventory\Master;
use App\Abstracts\Customer\Inventory\Master\MasterCodeAbstract;
class MasterCodeRepository extends MasterCodeAbstract{


    public function all($company_name){
        return $this->GetAllMasterCode($company_name);
    }
    public function find(int $master_id){
return true;
    }
}
?>