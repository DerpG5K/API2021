<?php

namespace Database\Seeders;

use App\Models\DeliveryType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DeliveryType::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {


            DeliveryType::create([
                'name' => $faker->name,
                'bookingBefore' => $faker->dateTime('now'),
                'info' => $faker->text(100),
                'priceFactor' => $faker->numberBetween(1, 100),

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
