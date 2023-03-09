<?php
namespace App\Abstracts\Company\StoreCreator\Inventory;
use App\Interfaces\Company\StoreCreator\Inventory\CompanyBaseInventoryInterface;

abstract class CompanyBaseInventoryAbstract implements CompanyBaseInventoryInterface{

    use \App\Traits\Company\StoreCreator\Inventory\CompanyBaseInventoryTrait;
    use \App\Traits\Company\Inventory\Master\MasterCodeTrait;
    abstract public function create($tb_name);
    protected $companyName;
    
    public function setCompanyName($key){
        $this->companyName = $key;

        return $this;
    }
    
    public function getCompanyName(){
        return   $this->companyName;
    }
    
}

?>
