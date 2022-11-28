<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publishers = Publisher::all()->pluck('id')->toArray();

        return [
            'publisher_id' => $this->faker->randomElement($publishers),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->paragraph(5),
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbXstIKKKk3bPtc7c663_LDU5cAdkSBSSZPoSP0zUHnbh0DAz8'
        ];
    }
}
