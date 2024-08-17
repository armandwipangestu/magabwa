<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Junior Parrito',
            'occupation' => 'Mobile Developer'
        ]);

        Author::create([
            'name' => 'Sabrina Juli',
            'occupation' => 'UI Designer'
        ]);

        Author::create([
            'name' => 'Ijan Malawi',
            'occupation' => 'DevOps'
        ]);

        Author::create([
            'name' => 'Rita Putria',
            'occupation' => 'UX Researcher'
        ]);

        Author::create([
            'name' => 'Shayna Xin',
            'occupation' => 'Front End Developer'
        ]);

        Author::create([
            'name' => 'Dhi Pakao',
            'occupation' => 'Back End Developer'
        ]);
    }
}
