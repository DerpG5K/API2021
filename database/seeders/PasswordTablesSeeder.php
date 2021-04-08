<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerPassword;
use App\Models\PasswordReset;
use Illuminate\Database\Seeder;

class PasswordTablesSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $customers = Customer::all();
        foreach ($customers as $c) {
            CustomerPassword::create([
                'customerId' => $c->id,
                'password' => $faker->password,
            ]);

            PasswordReset::create([
                'email' => $faker->email,
                'selector' => $faker->asciify('**********'),
                'token' => $faker->uuid,
                'expires' => $faker->dateTime('now'),
                'customerId' => $c->id,
            ]);
        }
    }
}
