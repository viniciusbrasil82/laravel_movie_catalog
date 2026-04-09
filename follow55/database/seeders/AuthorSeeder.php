<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::updateOrCreate(
            ['name' => 'Autor Fulano']
        );      
        
        Author::updateOrCreate(
            ['name' => 'Autor Beltrano']
        );        
    }
}
