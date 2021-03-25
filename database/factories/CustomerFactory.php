<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'date_of_birth' => $this->faker->date(),
            'type' => $this->faker->randomElement([
                Customer::TYPE_BUSINESS,
                Customer::TYPE_PRIVATE,
            ]),
            'phone_number' => $this->faker->phoneNumber
        ];
    }
}