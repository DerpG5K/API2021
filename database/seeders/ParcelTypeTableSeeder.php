<?php

namespace Database\Seeders;

use App\Models\ParcelType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcelTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ParcelType::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {


            ParcelType::create([
                'typeName' => $faker->creditCardType
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
