<?php
namespace App\Repositories\Company\Inventory ;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;

use App\Abstracts\Company\StoreCreator\Inventory\CompanyMasterInventoryAbstract;

use App\Models\Company\CompanyMasterInventory as CompanyMasterInventory;

class CompanyMasterInventoryRepository extends CompanyMasterInventoryAbstract {
    private $tb_name;
    private $tb_index_name;
 
    public function CreateMasterInventoryTable ($tb_name):bool{
        
        Schema::create($tb_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("company_id");
            $table->string("master_name")->unique();
            $table->integer("inventory_id");
            $table->string("master_tag");
            $table->enum('master_type', ['master_account_storage', 'master_account_customer','master_account_vendor','master_item_collection','master_item_size','master_metal_base','master_metal','master_stone_group','master_stone','master_stone_shape','master_stone_color','master_stone_clarity','master_stone_cutting','master_stone_size','master_certificate_type','master_labour_pricing']);
            $table->text('master_detail')->nullable();

            $table->timestamps();

            $table->index(['id', 'company_id','master_tag','master_type'],$this->tb_index_name);

            
        });
        return true;
    }
    public function CreateMasterInventory(string $company_store_name){
        $this->tb_name = $company_store_name.'_master_inventory';
        $this->tb_index_name = $company_store_name.'_master_inventory_idx';
        if($this->CreateMasterInventoryTable($this->tb_name)===true){
                return true;
        }
    }


    public function GetMaster ($company_id,$master_type){
     return   $this->GetMasterInventory($company_id,$master_type);
    }


}

?>