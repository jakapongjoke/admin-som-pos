<?php
namespace App\Services\Company\Inventory\Master;

use App\Repositories\Company\Inventory\Master\ProductMasterRepository;

class ProductMasterService {
private ProductMasterRepository $ProductMasterRepository;
public function __construct(ProductMasterRepository $ProductMasterRepository)
{
    $this->ProductMasterRepository = $ProductMasterRepository;
}

public function CreateProductMasterTable($company_store_name){
    $this->MasterCodeRepository->CreateProductMasterTable($company_store_name);
    return true;
}


}

?>