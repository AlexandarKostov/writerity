<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $careers = \App\Models\Career::pluck('id')->toArray();
        $users = \App\Models\User::pluck('id')->toArray();

        return [
            'career_id' => $this->faker->randomElement($careers),
            'user_id' => $this->faker->randomElement($users),
            'is_accepted' => $this->faker->boolean(50),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cv' => $this->faker->text(),
            'motivational_letter' => $this->faker->text(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'phone_number'=> $this->faker->phoneNumber(),
            'birth_date' => $this->faker->date(),
        ];
    }
}
