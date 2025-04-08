<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task> */
class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'       => fake()->words(6, true),
            'description' => fake()->text(),
        ];
    }
}
