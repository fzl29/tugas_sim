<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Pendidikan',
            'Teknologi',
            'Romance',
            'Komik',
            'Sejarah',
            'Sains',
            'Lainnya',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
