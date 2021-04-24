<?php

namespace Database\Seeders;

use App\Models\Absences;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Absences::truncate();
            
        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            Absences::create([
                'employeeID' => $faker->randomNumber(5),
                'startDate' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
                'endDate' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
                'reason' => $faker->text($maxNbChars = 100)
            ]);
        }

        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}