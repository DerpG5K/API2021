<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Employee::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Employee::create([
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'MailAdress' => $faker->email,
                'PhoneNumber' => $faker->phoneNumber,
                'Password' => $faker->passWord,
                'Salary' => $faker->numberBetween($min = 1000, $max = 5000),
                'Job' => $faker->numberBetween($min = 1, $max =69),
                'BirthDate' => $faker->dateTime($max = 'now', $timezone = null),
                'isAdmin' => $faker->boolean
            ]);
        }
    }
}
