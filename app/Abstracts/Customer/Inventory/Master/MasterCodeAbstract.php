<?php
namespace App\Abstracts\Customer\Inventory\Master;
use App\Interfaces\Customer\Inventory\Master\MasterCodeInterface;

abstract class MasterCodeAbstract implements MasterCodeInterface{

    use \App\Traits\Customer\Inventory\Master\MasterCodeTrait;
    public abstract function FindByMasterType(string $company_name,string $master_type);


    protected $companyId;
    protected $companyName;
    
    public function setCompanyId($key){
        $this->companyId = $key;

        return $this;
    }
    
    public function getCompanyId(){
        return   $this->companyId;
    }
    public function setCompanyName($key){
        $this->companyName = $key;

        return $this;
    }
    
    public function getCompanyName(){
        return   $this->companyName;
    }
    
}

?>
