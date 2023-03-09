<?php
namespace App\Repositories\Company\StoreCreator\Inventory;
use App\Models\Inventory\CompanyInventory as CompanyInventory;
use App\Interfaces\Company\StoreCreator\Inventory\CompanyInventoryInterface;

class CompanyInventoryRepository implements CompanyInventoryInterface{

    private CompanyInventory $CompanyInventory;

    public function __construct(CompanyInventory $CompanyInventory){
        $this->CompanyInventory = $CompanyInventory;
}


        public function create(int $company_id):bool{
            if($this->CompanyInventory->create(["company_id"=>$company_id])){
                return true;
            }else{
                return false;
            }
        }

}

?>