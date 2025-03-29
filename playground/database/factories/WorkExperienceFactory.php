<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperience>
 */
class WorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>03
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->randomDigit(),
            'company_name'=>fake()->company(),
            'role'=>fake()->JobTitle(),
            'start_date'=>fake()->date(),
            'end_date'=>fake()->date()
        ];
    }

}
