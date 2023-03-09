<?php
namespace App\Abstracts\Company\StoreCreator;
use App\Interfaces\Company\StoreCreator\StoreCreatorInterface;

abstract class StoreCreatorAbstract implements StoreCreatorInterface{
    use \App\Traits\Company\Inventory\Master\MasterCodeTableTrait;
    use \App\Traits\Company\Inventory\Master\ProductMasterTableTrait;

    abstract public function CreateStore(string $company_store_name):bool;

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