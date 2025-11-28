<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'courseName'  => $this->faker->sentence(3),
            'courseID'    => strtoupper($this->faker->bothify('CSE###')),
            'description' => $this->faker->text(100),
        ];
    }
}
