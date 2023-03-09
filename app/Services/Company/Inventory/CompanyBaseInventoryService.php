<?php
namespace App\Services\Company\StoreCreator\Inventory;

use App\Repositories\Company\StoreCreator\Inventory\CompanyBaseInventoryRepository;
use Illuminate\Support\Facades\Response as FacadeResponse;

class CompanyBaseInventoryService{
    private CompanyBaseInventoryRepository $CompanyBaseRepo;
    public function __construct(CompanyBaseInventoryRepository $CompanyBaseRepo){
        $this->CompanyBaseRepo =  $CompanyBaseRepo;
    }

    public function create(array $data = []){
         return $this->CompanyBaseRepo->create($data['company_store_name']);



    }



}

?>
