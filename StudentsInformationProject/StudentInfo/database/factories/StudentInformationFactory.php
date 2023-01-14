<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentInformation>
 */
class StudentInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_fname' => $this->faker->firstNameMale,
            'student_lname' => $this->faker->lastName,
            'student_age' => $this->faker->randomDigit,
            'student_course' => $this->faker->word,
            'student_address' => $this->faker->address
            
        ];
    }
}