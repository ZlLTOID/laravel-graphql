<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Classic Literature',
        ]);

        Category::create([
            'name' => 'Historical Fiction',
        ]);

        Category::create([
            'name' => 'Science Fiction',
        ]);

        Category::create([
            'name' => 'Romance',
        ]);

        Category::create([
            'name' => 'Fantasy',
        ]);    }
}
