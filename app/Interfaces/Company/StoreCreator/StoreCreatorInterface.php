<?php
namespace App\Interfaces\Company\StoreCreator;

interface StoreCreatorInterface {
    public function CreateStore(string $company_store_name) :bool;
    
    
}


?>