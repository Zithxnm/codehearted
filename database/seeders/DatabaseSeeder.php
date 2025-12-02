<?php

namespace Database\Seeders;

use App\Models\Stat;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $subjects = [
            'Programming Fundamentals',
            'Digital Logic',
            'Fundamentals of Computing',
            'Differential Calculus'
        ];

        foreach ($subjects as $subjectName) {
            Subject::create(['Subject_name' => $subjectName]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '1',
        ]);

        $this->call([
            DiffCalSeeder::class,
            DigiLogicSeeder::class,
            FundCompSeeder::class,
            ProgFundSeeder::class,
        ]);
    }
}
