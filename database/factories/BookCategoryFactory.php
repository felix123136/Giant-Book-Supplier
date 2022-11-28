<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $books = Book::all()->pluck('id')->toArray();
        $categories = Category::all()->pluck('id')->toArray();
        return [
            'book_id' => $this->faker->randomElement($books),
            'category_id' => $this->faker->randomElement($categories)
        ];
    }
}
