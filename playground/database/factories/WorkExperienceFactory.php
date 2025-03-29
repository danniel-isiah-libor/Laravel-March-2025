<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperience>
 */
class WorkExperienceFactory extends Factory
{
    protected $model = WorkExperience::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'company_name' => $this->faker->company(),
            'role' => $this->faker->jobTitle(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'responsibilities' => json_encode([
                'responsibility_1' => $this->faker->sentence(),
                'responsibility_2' => $this->faker->sentence(),
                'responsibility_3' => $this->faker->sentence(),
            ]),
        ];
    }
}