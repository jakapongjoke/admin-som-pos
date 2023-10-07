<?php
namespace App\Traits\Company\Inventory\Master;

use Illuminate\Support\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\QueryException;
use StringHelper;
use DBTableHelper;
/*
Master Code Table Trait ไฟล์นี้เอาไว้จัดการ table master เวลามีการ add company
ประกอบด้วย Features
   1. CreateMasterCodeTable  สำหรับ สร้าง Table master code สำหรับเก็บข้อมูล Master
   2. CreateBaseMasterTable สำหรับ สร้าง Table สำหรับเก็บ รายละเอียด ของ Master
*/
trait MasterCodeTableTrait{
    
    public function CreateMasterCodeTable($company_data){

    $this->tb_name = $company_data['company_store_name'].'_master_code';
    $this->tb_index_name =  $company_data['company_store_name'].'master_code_idx';
  
       
 
    try {
        if(!Schema::hasTable($this->tb_name)){
            Schema::create($this->tb_name, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger("running_number");
                $table->bigInteger("parent_id");
                $table->string("master_code")->nullable();

                $table->string("master_name")->unique();
                $table->string("master_tag")->nullable();
                $table->enum('master_type', ['master_account_storage','master_account_customer','master_account_vendor','master_item','master_item_collection','master_item_size','master_base_metal','master_metal','master_stone_group','master_stone_name','master_stone_shape','master_stone_color','master_stone_clarity','master_stone_cutting','master_stone_size','master_certificate_type','master_labour_pricing']);
                $table->text('master_price');
                $table->text('master_description')->nullable();
                $table->enum('master_status', ['active','inactive']);
                $table->text('master_image')->nullable();
                $table->longText('master_infomation')->nullable();
                $table->longText('master_formula')->nullable(); 
                $table->longText('master_addional_infomation')->nullable();
                $table->longText('master_available_for')->nullable();
        
                $table->timestamps();

                $table->index(['id','parent_id', 'company_id','master_tag','master_type'],$this->tb_index_name);
            
        
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
                    $table->string("company_registration_number")->nullable()->unique();
                    $table->string("contact_citizen_id_number")->nullable();
                    $table->string("contact_firstname")->nullable();
                    $table->string("contact_middlename")->nullable();
                    $table->string("contact_lastname")->nullable();
                    $table->enum('gender', ['male','female','other','no_value']);
                    $table->date("contact_date_of_birth")->nullable();
                    $table->string("contact_email")->nullable();
                    $table->string("contact_phone")->nullable();
                    
                    $table->text("ship_address")->nullable();
                    $table->unsignedInteger("ship_district")->nullable()->default(0);
                    $table->unsignedInteger("ship_province")->nullable()->default(0);
                    $table->unsignedInteger("ship_country")->nullable()->default(0);
                    $table->string("ship_poscode")->nullable();

                    $table->text("tax_inv_address")->nullable();
                    $table->unsignedInteger("tax_inv_district")->nullable()->default(0);
                    $table->unsignedInteger("tax_inv_province")->nullable()->default(0);
                    $table->unsignedInteger("tax_inv_country")->nullable()->default(0);
                    $table->string("tax_inv_poscode")->nullable();


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