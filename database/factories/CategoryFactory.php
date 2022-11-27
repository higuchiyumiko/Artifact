<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reviewpost;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviewpost>
 */
class ReviewpostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this ->faker->realText(10),
            'body' => $this ->faker->realText(100),
            'created_at' => $this ->faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $this ->faker->date('Y-m-d H:i:s', 'now'),
        ];
    }
}