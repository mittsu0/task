<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genre_ids = Genre::pluck('id');
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomNumber(3),
            'genre_id' => $this->faker->randomElement($genre_ids),
        ];
    }
}
