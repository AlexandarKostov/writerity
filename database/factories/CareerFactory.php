<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = \App\Models\User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'header' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'location' => $this->faker->locale(),
            'requirement_one' => $this->faker->sentence(),
            'requirement_two' => $this->faker->sentence(),
            'preferred_one' => $this->faker->sentence(),
            'working_condition_one' => $this->faker->sentence(),
            'working_condition_two' => $this->faker->sentence(),
            'working_condition_three' => $this->faker->sentence(),
            'benefit_one' => $this->faker->sentence(),
            'benefit_two' => $this->faker->sentence(),
            'benefit_three' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'is_valid' => $this->faker->boolean(80),
        ];
    }
}
