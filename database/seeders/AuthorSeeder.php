<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Author::create([
        'name' => 'Raditya Dika',
        'bio' => 'Penulis dan komedian Indonesia dengan gaya humor khas.'
    ]);

    \App\Models\Author::create([
        'name' => 'Eka Kurniawan',
        'bio' => 'Penulis novel sastra modern Indonesia.'
    ]);

    \App\Models\Author::create([
        'name' => 'Boy Candra',
        'bio' => 'Penulis yang dikenal dengan karya romantis dan puitis.'
    ]);

    \App\Models\Author::create([
        'name' => 'Fiersa Besari',
        'bio' => 'Penulis sekaligus musisi dengan karya bertema perjalanan dan kehidupan.'
    ]);

    \App\Models\Author::create([
        'name' => 'Pidi Baiq',
        'bio' => 'Penulis dengan gaya unik dan kreatif, dikenal lewat Dilan.'
    ]);
}
}
