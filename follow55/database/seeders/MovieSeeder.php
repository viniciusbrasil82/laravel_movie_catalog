<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Movie::updateOrCreate(
            ['title' => 'Filme Legal'], 
            [
                'poster_url' => 'https://follow55.com.br/wp-content/uploads/2025/04/Capa-Nivea-768x479.png',
                'release_year' => 2020,
                'created_by' => 2,
                'author_id' => 1,
                'created_at' => now(), 'updated_at' => now()
            ]
        );    
        Movie::updateOrCreate(          
            ['title' => 'Filme Massa'], 
            [
                'poster_url' => 'https://follow55.com.br/wp-content/uploads/2025/04/Capa-Nivea-768x479.png',
                'release_year' => 2021,
                'created_by' => 1,
                'author_id' => 2,
                'created_at' => now(), 'updated_at' => now()
            ],            
        ); 
    }
}
