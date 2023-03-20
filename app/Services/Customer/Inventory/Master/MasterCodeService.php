<?php
namespace App\Services\Customer\Inventory\Master;


use App\Repositories\Customer\Inventory\Master\MasterCodeRepository;
use Request;

class MasterCodeService {
    private MasterCodeRepository $MasterCodeRepository;
    public function __construct(MasterCodeRepository $MasterCodeRepository)
    {
        $this->MasterCodeRepository = $MasterCodeRepository;
    }
    public function GetAllMasterCode($company_name){
        return $this->MasterCodeRepository->all($company_name);
    }

    
    public function GetMasterCodeByType(string $company_name , string $master_type){
        return $this->MasterCodeRepository->FindByMasterType($company_name,$master_type);
    }
    
    public function CreateMasterStorage($company_name,$data){
        $this->MasterCodeRepository->create($company_name,[
            "master_code"=>$data['master_code'],
            "running_number"=>1,
            "master_name"=>$data['master_name'],
            "master_status"=>$data['status'],
            "master_type"=>'master_account_storage',
            "master_description"=>$data['desctiption'],
            "addional_infomation"=>json_encode(["branch_location"=>$data['branch_location']],true)

        ]);
        return response()->json([
            "status"=>200,
            "message"=>"Add CreateMasterStorage complete"
        ], 200);
    }
}
?>


