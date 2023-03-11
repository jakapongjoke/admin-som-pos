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

    $this->tb_name = $company_data['company_store_name'].'_master_code';
    $this->tb_index_name =  $company_data['company_store_name'].'master_code_idx';
  
       
 
    try {
        if(!Schema::hasTable($this->tb_name)){
            Schema::create($this->tb_name, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger("running_number");
                $table->string("master_code");

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

    public function CreateBaseMasterTable($company_data){

        $this->tb_name = $company_data['company_store_name'].'_base_master';
        $this->tb_index_name =  $company_data['company_store_name'].'_base_master_idx';
      
           
     
        try {
            if(!Schema::hasTable($this->tb_name)){
                Schema::create($this->tb_name, function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->unsignedBigInteger("running_number");
                    $table->unsignedBigInteger("master_id");
                    $table->string("company_registration_number")->nullable();
                    $table->string("company_contact_firstname")->nullable();
                    $table->string("company_contact_middlename")->nullable();
                    $table->string("company_contact_lastname")->nullable();
                    $table->enum('master_type', ['male','female']);
                    $table->date("company_contact_date_of_birth")->nullable();
                    $table->string("company_contact_email")->nullable();
                    $table->text("company_ship_address")->nullable();
                    $table->unsignedInteger("company_ship_district")->nullable()->default(0);
                    $table->unsignedInteger("company_ship_province")->nullable()->default(0);
                    $table->string("company_ship_poscode")->nullable();
                    $table->string("branch_code")->nullable();
                    $table->string("branch_location")->nullable();
                    $table->string("branch_address")->nullable();
                    $table->string("branch_country")->nullable();
                    $table->string("branch_province")->nullable();
                    $table->string("branch_city")->nullable();
                    $table->string("branch_zipcode")->nullable();

                    $table->timestamps();
    
                    $table->index(['id', 'master_id','master_tag','company_contact_firstname','company_registration_number','company_ship_address'],$this->tb_index_name);
                
            
                });
                return true;
            }
        
    
        } catch (QueryException $e) {
             
            return $e;
    
        }
        
       
        
        }
    
}
?>