<?php

namespace Database\Seeders;

use App\Models\Packages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Str;
use DB;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Packages::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i <50; $i++){
            Packages::create([
                'id' => $faker->unique()->numberBetween($min = 10, $max = 100),
                'Tracking_Nr' => $faker->regexify('[A-Z][A-Z][A-Z][0-9][0-9][0-9]'),
                'weight' => $faker->randomfloat($nbMaxDecimals = 3, $min = 0, $max = 1000),
                'width' => $faker->randomfloat($nbMaxDecimals = 3, $min = 0, $max = 100),
                'height' => $faker->randomfloat($nbMaxDecimals = 3, $min = 0, $max = 100),
                'length' => $faker->randomfloat($nbMaxDecimals = 3, $min = 0, $max = 100),
                'FlightID' => $faker->numberbetween(1,100),
                'Dep_Address' => $faker->Name.'straat',
                'Dep_Nr' => $faker->numberbetween(1,1000),
                'Dep_zip' => $faker->numberbetween(1000,9999),
                'Dep_Country' => $faker->country(),
                'priority' => $faker->boolean(),
                'delivered' => $faker->boolean(),
            ]);
        }
    }
}
