<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Address::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {


            Address::create([
                'addressName' => $faker->randomLetter,
                'addressStreet' => $faker->streetName,
                'addressNumber' => $faker->randomNumber(1),
                'addressZip' => $faker->postcode,
                'addressPlace' => $faker->city,
                'addressCountry' => $faker->country,
                'addressState' => $faker->state,
                'addressMailBoxNumber' => $faker->buildingNumber,
                'addressExtraInfo' => $faker->realText($maxNbChars = 30, $indexSize = 2),
                'loadingPresent' => $faker->boolean(50),
                'trailerAccess' => $faker->randomLetter
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
