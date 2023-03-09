<?php
namespace App\Services;
use Illuminate\Support\Facades\Response as FacadeResponse;

use App\Repositories\Company\CompanyRepository;
use App\Services\Company\StoreCreator\StoreCreatorService as StoreCreatorService;
// use App\Services\Company\StoreCreator\Inventory\CompanyMasterInventoryService ;

class CompanyService{
    private CompanyRepository $company;
    private StoreCreatorService $StoreCreatorService;
    
    public function __construct(
        CompanyRepository $company,
        StoreCreatorService $StoreCreatorService
        )
    {
        $this->company = $company ;
        $this->StoreCreatorService = $StoreCreatorService ;
    }

    public function all(){
        $company = $this->company;
        return $company->all();
    }
  
    public function paginate($length){
        return $this->company->paginate($length);
    }
    public function getCompanyID($company_name){
        return $this->company->getCompanyID($company_name);
    }
   
}
?>