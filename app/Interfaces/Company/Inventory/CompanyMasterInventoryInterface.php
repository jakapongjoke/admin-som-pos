<?php
namespace App\Interfaces\Company\StoreCreator\Inventory ;

interface CompanyMasterInventoryInterface{
    public function CreateMasterInventoryTable(string $company_name):bool;

}
?>