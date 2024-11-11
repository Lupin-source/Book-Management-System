<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // Random title
            'author' => $this->faker->name, // Random author name
            'published_year' => $this->faker->year, // Random published year
            'genre' => $this->faker->word, // Random genre
            'description' => $this->faker->paragraph, // Random description
        ];
    }
}

