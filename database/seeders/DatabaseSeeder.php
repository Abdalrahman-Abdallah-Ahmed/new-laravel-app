<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(JobSeeder::class);
        User::factory()->create([
            'first_name' => 'Abdo',
            'last_name' => 'Abdallah',
            'email' => 'test@example.com',
        ]);
    }
}
