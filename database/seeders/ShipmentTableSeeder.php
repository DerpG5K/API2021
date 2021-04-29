<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\DeliveryType;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelTpe;
use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy;

class ShipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Shipment::truncate();

        $faker = \Faker\Factory::create();
        $orders = Order::all()->pluck('id')->toArray();
        $statuses = Status::all()->pluck('id')->toArray();
        $addresses = Address::all()->pluck('id')->toArray();
        $deliveryTypes = DeliveryType::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {


            Shipment::create([
                'orderId' => $faker->randomElement($orders),
                'statusId' => $faker->randomElement($statuses),
                'reason' => $faker->text(50),
                'depAddressId' => $faker->randomElement($addresses),
                'destAddressId' => $faker->randomElement($addresses),
                'deliveryTypeId' => $faker->randomElement($deliveryTypes),

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
