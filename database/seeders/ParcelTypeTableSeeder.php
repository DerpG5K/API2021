<?php

namespace Database\Seeders;

use App\Models\ParcelTpe;
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
                'name' => $faker->text(5),
                'minWidth' => $faker->numberBetween(10,100),
                'maxWidth' => $faker->numberBetween(10,100),
                'minDepth' => $faker->numberBetween(10,100),
                'maxDepth' => $faker->numberBetween(10,100),
                'minHeigt' => $faker->numberBetween(10,100),
                'maxHeight' => $faker->numberBetween(10,100),
                'maxWeight' => $faker->numberBetween(10,100)

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
