<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\TicketLog;
use Illuminate\Database\Seeder;

class TicketLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $customers = Customer::all()->pluck('id')->toArray();
        $tickets = Ticket::all()->pluck('id')->toArray();
        for ($i = 0; $i < 200; $i++) {
            TicketLog::create([
                'ticketId' => $faker->randomElement($tickets),
                'userId' => $faker->randomElement($customers),
                'isCustomer' => true,
                'description' => $faker->sentence,
                'logType' => "NEW",
                'lastChanged' => $faker->dateTime('now'),
                'timestamp' => $faker->dateTime('now'),
            ]);
        }
    }
}
