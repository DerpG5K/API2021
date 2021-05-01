<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Business;
use App\Models\Customer;
use App\Models\Parcel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Parcel::truncate();

        $faker = \Faker\Factory::create();
        $businesses = Business::all()->pluck('id')->toArray();
        $addresses = Address::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {
            Customer::create([
                'addressId' => $faker->randomElement($addresses),
                'businessId' => $faker->randomElement($businesses),
                'email' => $faker->email,
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'phoneNumber' => $faker->phoneNumber,
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
