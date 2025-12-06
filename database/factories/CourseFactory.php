<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    public function definition(): array
    {
        
        $courseNames = [
            'Web Development',
            'Database Systems',
            'Software Engineering',
            'Mobile App Development',
            'UI UX Design',
            'PHP Programming',
            'Laravel Framework',
            'Cyber Security',
            'Cloud Computing',
            'Data Analytics',
        ];

        return [
            'courseName'  => $this->faker->randomElement($courseNames),
            'courseID'    => 'HTTP' . $this->faker->numberBetween(1000, 5999),
            'description'=> $this->faker->sentence(10),
        ];
    }
}
