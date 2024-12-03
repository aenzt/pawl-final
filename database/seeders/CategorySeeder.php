<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data manual
        $categories = [
            [
                'name' => 'Makanan Pembuka',
                'description' => 'Makanan ringan untuk pembuka selera',
            ],
            [
                'name' => 'Makanan Utama',
                'description' => 'Makanan pokok yang mengenyangkan',
            ],
            [
                'name' => 'Minuman',
                'description' => 'Minuman segar dan nikmat',
            ],
            [
                'name' => 'Makanan Penutup',
                'description' => 'Makan terakhir yang manis',
            ],
        ];

        // Masukkan data manual
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
