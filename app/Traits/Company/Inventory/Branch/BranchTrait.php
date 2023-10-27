<?php
namespace App\Traits\Company\Inventory\Branch;

use Illuminate\Support\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\QueryException;
use StringHelper;
use DBTableHelper;

trait BranchTrait{
    
    public function CreateBranchTable($company_data){

    $this->tb_name = $company_data['company_store_name'].'_branch';
    $this->tb_index_name =  $company_data['company_store_name'].'_branch';
  
       
 
    try {
        if(!Schema::hasTable($this->tb_name)){
            Schema::create($this->tb_name, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string("branch_name")->nullable();
                $table->string("company_name")->nullable();
                $table->string("branch_code")->nullable();
                $table->string("branch_location")->nullable();
                $table->string("phone_number")->nullable();
                $table->string("fax_number")->nullable();
                $table->string("email")->nullable();
                $table->text('master_description')->nullable();

                $table->enum('business_type', ["retail","shop","wholesale"]);
                $table->text('branch_info');
                $table->text('branch_image');
                $table->enum('branch_type', ["head_office","branch"]);
        
                $table->timestamps();

                $table->index(['id','branch_name', 'company_name','phone_number','email','business_type','branch_type','branch_code'],$this->tb_index_name);
            
        
            });
            return true;
        }
    

    } catch (QueryException $e) {
         
        return $e;

    }
    
   
    
    }

    
}
?>