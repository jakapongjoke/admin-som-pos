<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $expiredate = fake()->dateTimeBetween('2022-01-01', '2023-03-01');

        return [
            'company_id' => fake()->rand(1,100),
            'username' => fake()->unique()->userName(),
            'role_id' => fake()->rand(1,10),
            'remember_email' => fake()->unique()->safeEmail(),
            'password' => Hash::make("123456"), // password
            'expire_date' =>   $expiredate , // password
            'remember_token' => Str::random(10),
        ];
    }
}
