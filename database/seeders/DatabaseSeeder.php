<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ClerkUser;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ClerkUser::factory(10)->create()->each(function ($clerkUser) {
            $clerkUser->tasks()->saveMany(Task::factory(5)->make());
        });
    }
}
