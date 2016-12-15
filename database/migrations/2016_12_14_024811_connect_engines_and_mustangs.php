<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEnginesAndMustangs extends Migration
{
  public function up()
{
          Schema::table('mustangs', function (Blueprint $table) {
            //Adding engine_id field
          $table->integer('engine_id')->unsigned();

           // This field `engine_id` is a foreign key that connects to the `id` field in the `engines` table
          $table->foreign('engine_id')->references('id')->on('engines');

      });
    }

    public function down()
    {
      Schema::table('mustangs', function (Blueprint $table) {

          # ref: http://laravel.com/docs/migrations#dropping-indexes
          # combine tablename + fk field name + the word "foreign"
          $table->dropForeign('mustangs_engine_id_foreign');

          $table->dropColumn('engine_id');
      });
    }
}
