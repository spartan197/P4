<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnginesTable extends Migration
{
     public function up()
     {
          Schema::create('engines', function (Blueprint $table) {

         $table->increments('id');
         $table->timestamps();

         $table->integer('cylinders');
         $table->integer('capacity');

     });
 }

 public function down()
 {
     Schema::drop('engines');
 }
}
