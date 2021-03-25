<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Model;
use App\database\factories\CustomersFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Customer & order relation seeder
        // Create 30 records of customers
        \App\Models\Customer::factory()->count(30)->create()->each(function ($customer) {
            // Seed the relation with 5 orders/customer
            $orders = \App\Models\Order::factory()->count(5)->make();
            $customer->orders()->saveMany($orders);
        });
    }
}
