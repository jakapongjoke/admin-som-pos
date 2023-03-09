<?php
namespace App\Services\Company\StoreCreator\Inventory; 
use App\Repositories\Company\StoreCreator\Inventory\CompanyMasterInventoryRepository;
class CompanyMasterInventoryService {
    private CompanyMasterInventoryRepository $CompanyMasterInventoryRepo;
    
    public function __construct(CompanyMasterInventoryRepository $CompanyMasterInventoryRepo){
        $this->CompanyMasterInventoryRepo = $CompanyMasterInventoryRepo;
    } 

    public function CreateCompanyMasterInventory(string $company_store_name){
        tap($this->CompanyMasterInventoryRepository->CreateMasterInventory($company_store_name),function($r){
            return true;
        });
  
        
    }
    public function GetMasterInventory($company_id,$master_type){

         return $this->CompanyMasterInventoryRepo->GetMaster($company_id,$master_type);
    }

}
?>