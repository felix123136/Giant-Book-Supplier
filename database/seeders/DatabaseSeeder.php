<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Publisher::factory(10)->create();
        Book::factory(10)->create();

        for ($i = 1; $i <= 5; $i++) {
            Category::create([
                'name' => strval($i)
            ]);
        }

        BookCategory::factory(10)->create();
    }
}
