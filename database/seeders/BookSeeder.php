<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title'       => 'The Great Gatsby',
            'author'      => 'F. Scott Fitzgerald',
            'image'       => 'https://example.com/images/great-gatsby.jpg',
            'link'        => 'https://example.com/books/the-great-gatsby',
            'description' => 'A novel set in the Jazz Age that tells the story of Jay Gatsby\'s unrequited love for Daisy Buchanan.',
            'featured'    => true,
            'category_id' => 1, // Make sure this corresponds to an existing category ID in your database
        ]);

        Book::create([
            'title'       => 'To Kill a Mockingbird',
            'author'      => 'Harper Lee',
            'image'       => 'https://example.com/images/to-kill-a-mockingbird.jpg',
            'link'        => 'https://example.com/books/to-kill-a-mockingbird',
            'description' => 'A novel about the injustices of race and class in the Deep South, seen through the eyes of a young girl.',
            'featured'    => false,
            'category_id' => 2, // Ensure this matches an existing category ID
        ]);

        Book::create([
            'title'       => '1984',
            'author'      => 'George Orwell',
            'image'       => 'https://example.com/images/1984.jpg',
            'link'        => 'https://example.com/books/1984',
            'description' => 'A dystopian novel that explores the dangers of totalitarianism and extreme political ideology.',
            'featured'    => true,
            'category_id' => 1, // Make sure this ID is valid in your categories table
        ]);

        Book::create([
            'title'       => 'Pride and Prejudice',
            'author'      => 'Jane Austen',
            'image'       => 'https://example.com/images/pride-and-prejudice.jpg',
            'link'        => 'https://example.com/books/pride-and-prejudice',
            'description' => 'A classic romance novel that explores themes of love, class, and family dynamics in 19th-century England.',
            'featured'    => false,
            'category_id' => 3, // Adjust this ID to match an existing category
        ]);
    }
}
