<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMymustangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('mymustangs', function (Blueprint $table) {

               # Increments method will make a Primary, Auto-Incrementing field.
               $table->increments('id');

               # This generates two columns: `created_at` and `updated_at` to
               # keep track of changes to a row
               $table->timestamps();

               # The rest of the fields...
               $table->string('name');
               $table->string('color');
               $table->integer('horsepower');
               $table->integer('torque');
               $table->integer('fuel_economy');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mymustangs');
    }
}
