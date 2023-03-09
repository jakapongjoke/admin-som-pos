<?php
namespace App\Interfaces\Company\StoreCreator\Inventory;
use Illuminate\Support\Facades\Schema;

interface CompanyInventoryInterface {
    public function create(int $company_id):bool;
    
}


?>