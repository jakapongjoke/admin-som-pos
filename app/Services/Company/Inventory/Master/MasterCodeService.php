<?php

namespace App\Services\Company\Inventory\Master;

use App\Repositories\Company\Inventory\Master\MasterCodeRepository;

class MasterCodeService{
private MasterCodeRepository $MasterCodeRepository;

public function __construct(MasterCodeRepository $MasterCodeRepository)
{
    $this->MasterCodeRepository = $MasterCodeRepository;

}

public function CreateMasterCodeTable($company_store_name){
    $this->MasterCodeRepository->CreateMasterCodeTable($company_store_name);
    return true;

}
}
?>