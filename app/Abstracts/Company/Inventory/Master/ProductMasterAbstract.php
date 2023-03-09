<?php
namespace App\Abstracts\Company\Inventory\Master;

use App\Interfaces\Inventory\Master\ProductMasterInterface;

abstract class ProductMasterAbstract implements ProductMasterInterface{
    
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