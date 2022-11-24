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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->unique();
            $table->string('company_store_name')->unique();
            $table->string('company_business_type')->nullable();
            $table->string('company_tax_id')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_fax')->nullable();
            $table->string('company_email')->nullable();
            $table->integer('company_country')->nullable();
            $table->string('company_province')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_zipcode')->nullable();
            $table->mediumText('general_footer')->nullable();
            $table->mediumText('certificate_footer')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
