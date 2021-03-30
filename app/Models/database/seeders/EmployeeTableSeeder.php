<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Employee::truncate();
        
        $password = Hash::make('password123');
    
        $faker = \Faker\Factory::create();

        for ($I1 = 0; $I1 < 100; $I1++){
            Employee::create([
                'employeeFirstName' => $faker->firstName,
                'employeeLastName' => $faker->lastName,
                'employeeMailAddress' => $faker->email,
                'employeePhoneNumber' => $faker->numerify('+32 ########'),
                'employeePassword' => $password,
                'employeeSalary' => $faker->numberBetween($min = 1000, $max = 5000),
                'employeeJobID' => $faker->randomNumber(5),
                'employeeBirthDate' => $faker->dateTimeBetween($startDate = '-70 years', $endDate = '-30 years', $timezone = null),
                'employeeIsAdmin' => $faker->boolean
            ]);
        }

        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

