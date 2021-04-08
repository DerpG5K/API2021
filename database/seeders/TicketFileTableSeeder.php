<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\TicketFile;
use Illuminate\Database\Seeder;

class TicketFileTableSeeder extends Seeder
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
        for ($i = 0; $i < 30; $i++) {
            TicketFile::create([
                'ticketId' => $faker->randomElement($tickets),
                'userId' => $faker->randomElement($customers),
                'isCustomer' => true,
                'fileSource' => '/' . implode('/', $faker->words($faker->numberBetween(0, 4))),
                'fileName' => $faker->word,
                'fileType' => $faker->fileExtension,
                'fileSize' => $faker->numberBetween(0, 1000000),
                'timestamp' => $faker->dateTime('now'),
            ]);
        }
    }
}
