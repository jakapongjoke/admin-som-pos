<?php
namespace App\Traits\Company\Inventory\Master;  
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


trait ProductMasterTableTrait{

    public function CreateProductMasterTable($company_data){
        $this->tb_name = $company_data['company_store_name'].'_product_master';
        $this->tb_index_name =  $company_data['company_store_name'].'_product_master_idx';


  
            if(!Schema::hasTable($this->tb_name)){
                try {
                Schema::create($this->tb_name, function (Blueprint $table) {
                    
                    $table->bigIncrements('id');
                    $table->string("product_stone_code")->unique();
                    $table->unsignedBigInteger("running_number")->unique();
                    $table->string("product_master_caption")->nullable();
                    $table->unsignedBigInteger("collection")->nullable();
                    $table->unsignedBigInteger("metal")->nullable();
                    $table->unsignedBigInteger("size")->nullable();
                    $table->unsignedBigInteger("stone_color")->nullable();
                    $table->unsignedBigInteger("stone_group")->nullable();
                    $table->unsignedBigInteger("stone_name")->nullable();
                    $table->unsignedBigInteger("stone_clarity")->nullable();
                    $table->unsignedBigInteger("stone_cutting")->nullable();
                    $table->unsignedBigInteger("stone_shape")->nullable();
                    $table->longText('master_description')->nullable();
                    $table->string("master_certificate")->nullable();
                    $table->string("master_certificate_image")->nullable();

                    $table->unsignedBigInteger("stone")->nullable();
                    $table->float('net_weight',5,2)->nullable();
                    $table->float('gross_weight',5,2)->nullable();
                    $table->unsignedDouble('sale_price',10,2)->nullable();
                    $table->unsignedDouble('master_price',10,2)->nullable();
                    $table->unsignedBigInteger('item');
                    $table->text('master_image')->nullable();
                    $table->string("master_tag");
    
                    $table->enum('master_type', ['product_master_stone', 'product_master_component','product_master_jewelry']);
                    $table->enum('master_status', ['active','inactive']);
    
    
                    $table->timestamps();
            
                    // $table->index(['id', 'company_id','master_tag','master_type'],$this->tb_index_name);
            
            
                });
                return true;
            } catch (QueryException $e) {
         
                return $e;
        
            }
            }
         
        

        
        }
        public function CreateProductGroupInfoTable($company_data){

            $this->tb_name = $company_data['company_store_name'].'_product_group_info';
            $this->tb_index_name =  $company_data['company_store_name'].'_product_group_info_idx';
            // $this->tb_foreign =   $company_data['company_store_name'].'_product_master';
    
    
            try {
                if(!Schema::hasTable($this->tb_name)){
                         
    
                    Schema::create($this->tb_name, function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->unsignedBigInteger("product_master_id")->nullable();
                        $table->string("product_stone_code")->nullable();
                        $table->unsignedBigInteger("product_stone_code_id")->nullable();
                        $table->unsignedBigInteger("product_stone_group_id")->nullable();
                        $table->string("group_name")->nullable();
                        $table->unsignedBigInteger('size')->nullable();
                        $table->float('standard_weight',5,2)->nullable();
                        $table->string("unit")->nullable();
                        $table->unsignedInteger("quantity")->nullable();
                        $table->unsignedBigInteger("shape")->nullable();
                        $table->float('weight',5,2)->nullable();
                        $table->float("unit_weight",5,2)->nullable();
                        $table->unsignedDouble('amount',10,2)->nullable();
                        $table->unsignedDouble('sale_price',10,2)->nullable();
                        $table->unsignedDouble('price',10,2)->nullable();
                        $table->string("sale_price_unit")->nullable();
                        $table->text("process_labour")->nullable();
                        $table->enum('product_group_info_type', ['stone','component','process_labour']);
                        $table->timestamps();
                
                        $table->index(['id', 'product_master_id', 'product_stone_id','product_group_info_type','group_name'],$this->tb_index_name);

                
                    });
                    return true;
                }
                } catch (QueryException $e) {
             
                    return $e;
            
                }

    
            
        }
    
        
}

?>