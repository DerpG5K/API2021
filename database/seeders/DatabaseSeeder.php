<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(DeliveryTypeTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ParcelTypeTableSeeder::class);
        $this->call(CustomTableSeeder::class);
        $this->call(FlightTableSeeder::class);
        $this->call(ParcelTableSeeder::class);
        $this->call(ParcelCheckTableSeeder::class);
        $this->call(BusinessTableSeeder::class);
        $this->call(CustomerTableSeeder::class);

    }
}
