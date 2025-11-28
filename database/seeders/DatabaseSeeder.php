<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use Database\Seeders\CourseSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Student::factory(100)->create();
        
        $this->call([
            CourseSeeder::class,
        ]);
    }
}
