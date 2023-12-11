<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $this->faker->word(),
            'password' => Hash::make('password'),
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'dob' => $this->faker->date(),
            'phone' => $this->faker->unique()->regexify('[0-9]{12}'),
            'address' => $this->faker->address(),
            'linked_in' => 'https://www.linkedin.com/'.$this->faker->word(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
