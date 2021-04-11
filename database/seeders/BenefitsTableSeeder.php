<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Benefit::truncate();
            
        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            Benefit::create([
                'description' => $faker->text($maxNbChars = 20) 
            ]);
        }

        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
