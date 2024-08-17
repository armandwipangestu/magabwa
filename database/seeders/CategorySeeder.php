<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Health'
        ]);

        Category::create([
            'name' => 'Business'
        ]);

        Category::create([
            'name' => 'Automotive'
        ]);

        Category::create([
            'name' => 'Entertainment'
        ]);

        Category::create([
            'name' => 'Foods'
        ]);

        Category::create([
            'name' => 'Politics'
        ]);

        Category::create([
            'name' => 'Sport'
        ]);
    }
}
