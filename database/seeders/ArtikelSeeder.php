<?php

namespace Database\Seeders;

use App\Models\artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        artikel::factory(5)->create()->each(
            function($artikel){
                artikel::create([
                    'title' => $title,
                    'body' => fake()->unique()
                ])
            }
        );
    }
}
