<?php

use Illuminate\Database\Seeder;

class MustangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang Fastback',
            'year_of_manufacture' => 1965,
            'horsepower' => 200,
            'torque' => 220,
            'fuel_economy' => 15,
            'picture' => 'http://13252-presscdn-0-94.pagely.netdna-cdn.com/wp-content/uploads/2015/04/1965-Ford-Mustang-Fastback-GT-Red-For-Sale-Front-940x636.jpg',
        ]);

        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang Mach 1',
            'year_of_manufacture' => 1970,
            'horsepower' => 250,
            'torque' => 355,
            'fuel_economy' => 10,
            'picture' => 'https://ccpublic.blob.core.windows.net/cc-temp/listing/88/9417/2059562-1969-ford-mustang-mach-1-cobra-jet-std.jpg',
        ]);

        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang GT',
            'year_of_manufacture' => 1981,
            'horsepower' => 120,
            'torque' => 205,
            'fuel_economy' => 22,
            'picture' => 'http://www.mustangspecs.com/carpics/81cobra.jpg',
        ]);

        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang GT',
            'year_of_manufacture' => 1999,
            'horsepower' => 260,
            'torque' => 302,
            'fuel_economy' => 17,
            'picture' => 'http://www.stangnet.com/mustang-forums/attachments/american_racing_rebel_black_ford_mustang_gt-jpg.200850/',
        ]);

        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang GT',
            'year_of_manufacture' => 2007,
            'horsepower' => 300,
            'torque' => 320,
            'fuel_economy' => 17,
            'picture' => 'http://mustangattitude.com/mustang/2007/2007_00027_01.jpg',
        ]);

        DB::table('mustangs')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Ford Mustang GT',
            'year_of_manufacture' => 2016,
            'horsepower' => 435,
            'torque' => 400,
            'fuel_economy' => 16,
            'picture' => 'http://fordauthority.com/wp-content/uploads/2016/01/2015-Ford-Mustang-GT-Gray-Driving-Ford-Authority-720x340.jpg',
        ]);
    }
}
