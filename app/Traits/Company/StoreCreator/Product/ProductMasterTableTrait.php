<?php

namespace App\Traits\Company\Inventory; 

use App\Models\Inventory\CompanyMasterInventory;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


trait ProductMasterTableTrait{
    private $tb_name;
    private $company_store_name;
    private $tb_index_name;
    private $tb_foreign_tb_name;
    private $tb_foreign_tb_name_2;

    public function createTable($company_store_name){
        $this->company_store_name = $company_store_name;
       
    // create product_master_company
    $this->tb_name =  $this->company_store_name.'_product_master_company';
    $this->tb_index_name =  $this->company_store_name.'_product_master_company_idx';
if(Schema::hasTable($this->tb_name)){
 Schema::table($this->tb_name, function (Blueprint $table) {
        $table->dropForeign(['master_id']);
      });
      Schema::dropIfExists($this->tb_name);
}
   

    Schema::create($this->tb_name, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string("product_master_code")->unique();
        $table->unsignedBigInteger("running_number");
        $table->string("product_master_caption")->nullable();
        $table->unsignedBigInteger("collection")->nullable();
        $table->unsignedBigInteger("metal")->nullable();
        $table->unsignedBigInteger("size")->nullable();
        $table->unsignedBigInteger("stone_color")->nullable();
        $table->unsignedBigInteger("stone_name")->nullable();;
        $table->unsignedBigInteger("stone_clarity")->nullable();
        $table->unsignedBigInteger("stone_cutting")->nullable();
        $table->text("description")->nullable();
        $table->unsignedBigInteger("stone")->nullable();
        $table->unsignedFloat("net_weight")->nullable();
        $table->unsignedFloat("gross_weight")->nullable();
        $table->unsignedDouble("sale_price",10,2)->nullable();
        $table->unsignedDouble("master_price",10,2)->nullable();
        $table->unsignedBigInteger("item")->nullable();
        $table->text("product_master_image")->nullable();
        $table->enum("prodoct_master_type",['stone','component','jewelry']);
        $table->enum("status",['active','inactive']);



        $table->timestamps();

        $table->index(['id', 'master_code','stone_group','stone_color','size','stone_name','metal','net_weight','gross_weight','stone_clarity','stone_cutting','sale_price','master_price','product_master_type'],$this->tb_index_name);
      
        
    });
 
    // endpf product_master_company

       
    // create product_master_company
    $this->tb_name =  $this->company_store_name.'_product_master_company';
    $this->tb_index_name =  $this->company_store_name.'_product_master_company_idx';
if(Schema::hasTable($this->tb_name)){
 Schema::table($this->tb_name, function (Blueprint $table) {
        $table->dropForeign(['master_id']);
      });
      Schema::dropIfExists($this->tb_name);
}
   

    Schema::create($this->tb_name, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string("product_master_code")->unique();
        $table->string("group_name")->nullable();
        $table->unsignedDouble("sale_price",10,2)->nullable();
        $table->unsignedFloat("standard_weight")->nullable();
        $table->string("unit")->nullable();
        $table->unsignedBigInteger("quantity")->nullable();
        $table->unsignedBigInteger("shape")->nullable();
        $table->unsignedFloat("weight")->nullable();
        $table->string("unit_weight")->nullable();
        $table->unsignedDouble("amount",10,2)->nullable();
        $table->unsignedDouble("sale_price",10,2)->nullable();
        $table->unsignedDouble("price",10,2)->nullable();
        $table->text("process_labour")->nullable();
        $table->enum("prodoct_group_info_type",['stone','component','process_labour']);




        $table->timestamps();

        $this->tb_foreign_tb_name = $this->company_store_name.'product_master_company_relation';

        $table->foreign('master_id')->references('id')->on($this->tb_foreign_tb_name)->onDelete('cascade');
        
        $table->index(['id', 'product_master_code'],$this->tb_index_name);
      
        
    });
 
    // endpf product_master_company
    }


}
    ?>