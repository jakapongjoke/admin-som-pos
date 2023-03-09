<?php
namespace App\Repositories\Company\StoreCreator\Inventory;

use App\Abstracts\Company\StoreCreator\Inventory\CompanyBaseInventoryAbstract;

class CompanyBaseInventoryRepository extends CompanyBaseInventoryAbstract {
    public function create($company_store_name){
       return  $this->CreateMasterCodeTable($company_store_name);
    }
}

?>