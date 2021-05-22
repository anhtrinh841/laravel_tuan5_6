<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('trainers_id',11);
            $table->string('trainers_name',55);
            $table->integer('companies_id',$auto_increment=false,11);
            $table->string('trainers_email',55);
            $table->string('trainers_phone',55);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
