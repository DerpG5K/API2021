<?php

namespace Database\Seeders;

use App\Models\Custom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Custom::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {


            Custom::create([
                'totalPrice' => $faker->numberBetween(20, 1000),
                'customName' => $faker->name,
                'customSize' => $faker->numberBetween(1, 20)

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
