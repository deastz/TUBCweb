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
          $table->string('title');
          $table->string('eng_name');
          $table->string('c_name');
          $table->string('s_name');
          $table->string('img_src');
          $table->text('anatomy');
          $table->text('usage');
          $table->text('trivia')->nullable();
          $table->text('area');
          $table->text('at_school');
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
