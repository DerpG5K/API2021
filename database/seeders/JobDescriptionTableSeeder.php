<?php

namespace Database\Seeders;

use App\Models\JobDescription;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        JobDescription::truncate();
            
        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            JobDescription::create([
                "degree" => $faker->text($maxNbChars = 10),
                "experience" => $faker->text($maxNbChars = 10),
                "general" => $faker->text($maxNbChars = 100),
                "benefits" => $faker->randomNumber(5)
            ]);
        }

        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
