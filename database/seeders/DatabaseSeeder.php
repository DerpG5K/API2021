<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
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
        User::factory(10)->create();
        $this->call(EmployeesTableSeeder::class);
        $this->call(PackagesTableSeeder::class);

        Customer::factory()->count(30)->create()->each(function ($customer) {
            // Seed the relation with 5 orders/customer
            $orders = Order::factory()->count(5)->make();
            $customer->orders()->saveMany($orders);
        });
    }
}
