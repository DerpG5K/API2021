<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
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
        Order::truncate();

        $faker = \Faker\Factory::create();
        $customers = \App\Models\Customer::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyz';
            $numbers = '0123456789';
            $value = '';
            for ($j = 0; $j < 3; $j++) {
                $value .= substr($alphabet, rand(0, strlen($alphabet) - 1), 1);
            }
            Order::create([
                'customerId' => $faker->randomElement($customers),
                'totalPrice' => $faker->randomFloat(2, 1, 5000),
                'isPaid' => $faker->boolean($chanceOfGettingTrue = 50),
                'extraInfo' => $faker->boolean($chanceOfGettingTrue = 50),
                'orderNr' => 'B'.$faker->randomNumber(6),

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
