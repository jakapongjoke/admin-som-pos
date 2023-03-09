<?php
namespace App\Traits\Company\Inventory\Master;  
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Company\StoreCreator\Inventory\CompanyMasterInventory as CompanyMasterInventory;

trait MasterCodeTrait{

    public function GetMasterInventory ($company_id,$master_type){

    $masterInventory = new CompanyMasterInventory();
    $a = $masterInventory;

    $model = $masterInventory->newInstance([], true);
    
    $model->setTable('ananta_master');

     return   $model->where("company_id","=",$company_id)->where("master_type","=",$master_type)->get();


    }


}
?>