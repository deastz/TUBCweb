<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants',function(Blueprint $table){
          $table->integer('id');
          $table->primary('id');
          $table->string('c_name');
          $table->string('s_name');
          $table->string('img_src');
          $table->string('sum');
          $table->string('anatomy');
          $table->string('usage');
          $table->string('place');
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
}
