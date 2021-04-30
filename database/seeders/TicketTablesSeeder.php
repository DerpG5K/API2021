<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\TicketState;
use Illuminate\Database\Seeder;

class TicketTablesSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $customers = Customer::all()->pluck('id')->toArray();
        $categories = TicketCategory::all()->pluck('id')->toArray();
        $states = TicketState::all()->pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {
            Ticket::create([
                'userId' => $faker->randomElement($customers),
                'categoryId' => $faker->randomElement($categories),
                'stateId' => $faker->randomElement($states),
                'isCustomer' => true,
                'subject' => $faker->sentence,
                'description' => $faker->text,
                'priority' => "HIGH",
                'startDate' => $faker->dateTime('now'),
                'endDate' => $faker->dateTime('now'),
                'lockedUntil' => $faker->dateTime('now'),
                'lockedBy' => $faker->email
            ]);
        }
    }
}
