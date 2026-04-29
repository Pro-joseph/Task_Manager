<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Joseph Dira']
        );

        $categoryNames = ['Work', 'Personal', 'Shopping', 'Health', 'Education', 'Finance'];
        foreach ($categoryNames as $name) {
            Category::firstOrCreate(
                ['user_id' => $user->id, 'nom' => $name],
                ['user_id' => $user->id, 'nom' => $name]
            );
        }

        $categories = Category::where('user_id', $user->id)->get();

        Task::factory()
            ->count(15)
            ->create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
            ]);
    }
}
