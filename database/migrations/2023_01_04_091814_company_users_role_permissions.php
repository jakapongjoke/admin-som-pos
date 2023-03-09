<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_user_role_permissions', function (Blueprint $table) {

        $table->id();
        $table->integer('role_id');

        $table->json('sell');
        $table->json('repair');
        $table->json('custom');
        $table->json('pnd');
        $table->json('company');
        $table->json('master');
        $table->json('product_master');
        $table->json('stock');
        $table->json('addional_master_pemissions')->nullable();
        $table->json('addional_stock_pemissions')->nullable();
        $table->json('addional_product_pemissions')->nullable();
        $table->json('addional_user_pemissions')->nullable();
        $table->enum('status',['active','inactve'])->nullable();
        $table->foreign('role_id')->references('id')->on('company_user_roles'); 


        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
