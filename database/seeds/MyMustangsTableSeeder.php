<?php

use Illuminate\Database\Seeder;

class MyMustangsTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('mymustangs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Dark Knight',
        'color' => 'Black',
        'horsepower' => 500,
        'torque' => 600,
        'fuel_economy' => 15,
        'user_id' => 1,

    ]);

    DB::table('mymustangs')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Stallion',
      'color' => 'Grey',
      'horsepower' => 600,
      'torque' => 620,
      'fuel_economy' => 12,
      'user_id' => 2,
    ]);

    DB::table('mymustangs')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Hot Rod',
      'color' => 'Red',
      'horsepower' => 800,
      'torque' => 820,
      'fuel_economy' => 9,
      'user_id' => 1,

    ]);
  }
}
