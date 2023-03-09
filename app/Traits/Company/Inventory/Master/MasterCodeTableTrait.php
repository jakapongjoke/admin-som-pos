<?php
namespace App\Traits\Company\Inventory\Master;  
use Illuminate\Support\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\QueryException;
use StringHelper;
use DBTableHelper;
trait MasterCodeTableTrait{
    
    public function CreateMasterCodeTable($company_data){

    $this->tb_name = $company_data['company_store_name'].'_master';
    $this->tb_index_name =  $company_data['company_store_name'].'master_idx';
  
       
 
    try {
        if(!Schema::hasTable($this->tb_name)){
            Schema::create($this->tb_name, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger("company_id");
                $table->unsignedBigInteger("running_number");
                $table->string("master_name")->unique();
                $table->string("master_tag");
                $table->enum('master_type', ['master_account_storage', 'master_account_customer','master_account_vendor','master_item_collection','master_item_size','master_metal_base','master_metal','master_stone_group','master_stone','master_stone_shape','master_stone_color','master_stone_clarity','master_stone_cutting','master_stone_size','master_certificate_type','master_labour_pricing']);
                $table->float('master_price',10,2);
                $table->text('master_description')->nullable();
                $table->enum('master_status', ['active','inactive']);
                $table->text('master_image')->nullable();
                $table->longText('addional_infomation')->nullable();
        
                $table->timestamps();

                $table->index(['id', 'company_id','master_tag','master_type'],$this->tb_index_name);
            
        
            });
            return true;
        }
    

    } catch (QueryException $e) {
         
        return $e;

    }
    
   
    
    }

    
}
?>