<?php
namespace App\Abstracts\Company\Inventory\Master;
use App\Interfaces\Company\Inventory\Master\MasterCodeInterface;

abstract class MasterCodeAbstract implements MasterCodeInterface{

    use \App\Traits\Company\Inventory\Master\MasterCodeTrait;
    use \App\Traits\Company\Inventory\Master\MasterCodeTableTrait;


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
