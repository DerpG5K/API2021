<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobOfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        JobOffer::truncate();
            
        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            JobOffer::create([
                'jobID' => $faker->randomNumber(5),
                'creationDate' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
                'description' => $faker->text($maxNbChars = 100)
            ]);
        }

        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
