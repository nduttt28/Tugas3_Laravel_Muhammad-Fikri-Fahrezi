<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Book::create([
        'title' => 'Negeri Para Bedebah',
        'author_id' => 1,
        'price' => 88000
    ]);

    \App\Models\Book::create([
        'title' => 'Sang Pemimpi',
        'author_id' => 2,
        'price' => 77000
    ]);

    \App\Models\Book::create([
        'title' => 'Jejak Langkah',
        'author_id' => 3,
        'price' => 91000
    ]);

    \App\Models\Book::create([
        'title' => 'Ketika Cinta Bertasbih',
        'author_id' => 4,
        'price' => 86000
    ]);

    \App\Models\Book::create([
        'title' => 'Perahu Kertas',
        'author_id' => 5,
        'price' => 83000
    ]);
}
}
