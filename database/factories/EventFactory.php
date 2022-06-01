<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(32),
            'places' => $this->faker->numberBetween(1, 2000),
            'description' => $this->faker->text,
            'start_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
