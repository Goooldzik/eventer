<?php

namespace Database\Factories;

use App\Helpers\Randomizer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ticket_number' => Randomizer::generateString(12),
            'email' => $this->faker->email,
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName
        ];
    }
}
