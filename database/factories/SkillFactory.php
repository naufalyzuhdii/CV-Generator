<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'skill_name' => $this->faker->word(),
            'type' => $this->faker->randomElement(['Technical','Communication','Teamwork', 'Critical Thinking', 'Problem Solving', 'Public Speaking', 'Time Management', 'Leadership Skills', 'Organization', 'Language Skills']),
            'description' => $this->faker->paragraph(),
            'skill_level' => rand(1,10),
        ];
    }
}
