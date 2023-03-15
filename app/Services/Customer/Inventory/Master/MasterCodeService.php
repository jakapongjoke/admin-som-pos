<?php
namespace App\Services\Customer\Inventory\Master;


use App\Repositories\Customer\Inventory\Master\MasterCodeRepository;
class MasterCodeService {
    private MasterCodeRepository $MasterCodeRepository;
    public function __construct(MasterCodeRepository $MasterCodeRepository)
    {
        $this->MasterCodeRepository = $MasterCodeRepository;
    }
    public function GetAllMasterCode($company_name){
        return $this->MasterCodeRepository->all($company_name);
    }
    
    public function CreateMasterStorage($company_name,$data){
        $this->MasterCodeRepository->create([

        ]);
    }
}
?>


