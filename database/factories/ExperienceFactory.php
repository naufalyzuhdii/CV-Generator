<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Experience;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cv_id' => rand(1,10),
            'org_name' => $this->faker->word(),
            'type' => $this->faker->randomElement(['Part-time','Full-time','Contract','Self-employed','Seasonal','Intern']),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'link' => 'https://link/'.$this->faker->word(),
        ];
    }
}
