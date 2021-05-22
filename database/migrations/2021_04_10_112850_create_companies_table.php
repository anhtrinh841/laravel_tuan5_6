<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('companies_id',11);
            $table->string('company_name',55);
            $table->string('company_web',255);
            $table->string('company_address',500);
            $table->string('company_code',55);
            $table->string('company_phone',55);
            $table->integer('category_id',$auto_increment = false,55);
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
}
