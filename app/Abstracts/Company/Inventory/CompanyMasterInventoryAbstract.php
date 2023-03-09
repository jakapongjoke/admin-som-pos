<?php
namespace App\Abstracts\Company\StoreCreator\Inventory;
use App\Interfaces\Company\StoreCreator\Inventory\CompanyMasterInventoryInterface;

abstract class CompanyMasterInventoryAbstract implements CompanyMasterInventoryInterface{

    use \App\Traits\Company\StoreCreator\Inventory\MasterCodeTrait;
    abstract public function CreateMasterInventoryTable(string $company_store_name):bool;
    protected $companyId;
    
    public function setCompanyId($key){
        $this->companyId = $key;

        return $this;
    }
    
    public function getCompanyId(){
        return   $this->companyId;
    }
    
}

?>
