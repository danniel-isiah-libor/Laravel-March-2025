<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\WorkExperienceFactory;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function ($user) {
            WorkExperience::factory()
                ->create([
                    'user_id' => $user->id
                ]);
        });
    }
}
