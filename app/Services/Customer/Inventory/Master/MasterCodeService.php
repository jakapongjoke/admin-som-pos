<?php
namespace App\Services\Customer\Inventory\Master;

use Request;

class MasterCodeService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    
    public function CreateMasterStorage($company_name,$data){

        $this->addMasterCode($company_name,[
            "master_code"=>$data['master_code'],
            "running_number"=>1,
            "master_name"=>$data['master_name'],
            "master_status"=>$data['status'],
            "master_type"=>$data['type'],
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


