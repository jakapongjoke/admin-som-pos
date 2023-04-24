<?php
namespace App\Services\Customer\Inventory\Master;
use App\Models\Customer\Inventory\MasterCode;

class MasterStoneService {
use \App\Traits\Company\Inventory\Master\MasterCodeTrait;


    public  function GetStoneNameByStoneGroup ($company_name,$stone_group_id,$limit=50,$skip=0) {
           return $this->GetMasterCodeByParentID($company_name,$stone_group_id,'master_stone_name');
    }
}

?>