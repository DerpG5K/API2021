<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Job::truncate();

        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            Job::create([
                'name' => $faker->jobTitle,
                'departmentID' => $faker->randomNumber(5),
                'available' => $faker->boolean,
                'description' => $faker->randomNumber(5),
                //'hours',
                'pricePerHour' => $faker->randomFloat($nbMaxDecimals = 2, $min = 8, $max = 20)
            ]);
        }


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}


