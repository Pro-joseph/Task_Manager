<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['todo', 'in_progress', 'completed']),
            'progress' => $this->faker->numberBetween(0, 100),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'category_id' => Category::factory(),
        ];
    }
}