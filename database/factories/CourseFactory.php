<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'descreption' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'img' => $this->faker->image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null, $gray = false),
            'rating' => $this->faker->numberBetween(0,10),
            'slide' => $this->faker->boolean(),
            'provider_id' => Provider::inRandomOrder()->first()->id,



        ];
    }
}
