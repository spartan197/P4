<?php

use Illuminate\Database\Seeder;

class EnginesTableSeeder extends Seeder
{
  public function run()
  {
      DB::table('engines')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'cylinders' => '4',
      'capacity' => '2.3',
      ]);

      DB::table('engines')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'cylinders' => '6',
      'capacity' => '3.7',
      ]);

      DB::table('engines')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'cylinders' => '8',
      'capacity' => '5',
      ]);
    }
}
