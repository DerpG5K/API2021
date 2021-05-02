<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Custom;
use App\Models\DeliveryType;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelTpe;
use App\Models\ParcelType;
use App\Models\Shipment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcelTableSeeder extends Seeder
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
        $shipments = Shipment::all()->pluck('id')->toArray();
        $flights = Flight::all()->pluck('id')->toArray();
        $parcelTypes = ParcelType::all()->pluck('id')->toArray();
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 500; $i++) {


            Parcel::create([
                'shipmentId' => $faker->randomElement($shipments),
                'parcelTypeId' => $faker->randomElement($parcelTypes),
                'trackingNumber' => 'ABC'.$faker->randomNumber(9, true).$i,
                'insurance' => $faker->boolean(50),
                'weight' => $faker->numberBetween(1, 100),
                'height' => $faker->numberBetween(1, 100),
                'width' => $faker->numberBetween(1, 100),
                'length' => $faker->numberBetween(1, 100),
                'priority' => $faker->text(5),
                'isAllocated' => $faker->boolean(50),
                'flightId' => $faker->randomElement($flights),

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
