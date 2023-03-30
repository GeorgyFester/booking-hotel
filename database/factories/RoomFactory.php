<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->text(100),
            'number_of_beds' => $this->faker->numberBetween(1, 5),
            'hotel_id' => Hotel::query()->get()->random()->id
        ];
    }
}
