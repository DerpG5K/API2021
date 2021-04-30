<?php

namespace Database\Seeders;

use App\Models\JobOffers;
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
        JobOffers::truncate();

        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            JobOffers::create([
                'jobID' => $faker->randomNumber(5),
                'creationDate' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
                'descriptionID' => $faker->numberBetween($min = 1, $max = 50),
            ]);
        }


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
