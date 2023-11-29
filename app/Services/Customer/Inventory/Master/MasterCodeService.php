<?php
namespace App\Services\Customer\Inventory\Master;

use Request;

class MasterCodeService {

use \App\Traits\Company\Inventory\Master\MasterCodeTrait;

    

    public function getProductStoneMasterCodeInfoByProductStoneId(string $company_name,int $stone_id){
        $master_name = $this->GetMasterCodeByParentID( $company_name ,  $stone_id , 'master_name',$limit=100,$skip=0,"array");
    }

}
?>


