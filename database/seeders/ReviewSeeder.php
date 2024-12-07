<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Menu;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'menu_id' => Menu::where('name', 'Risoles')->first()->id,
                'name' => 'Budi',
                'comment' => 'Risoles enak, renyah dan isinya pas',
                'rating' => 5
            ],
            [
                'menu_id' => Menu::where('name', 'Risoles')->first()->id,
                'name' => 'Ani',
                'comment' => 'Risolesnya biasa aja',
                'rating' => 3
            ],
            [
                'menu_id' => Menu::where('name', 'Lumpia')->first()->id,
                'name' => 'Budi',
                'comment' => 'Lumpia enak, renyah dan isinya pas',
                'rating' => 5
            ],
            [
                'menu_id' => Menu::where('name', 'Lumpia')->first()->id,
                'name' => 'Ani',
                'comment' => 'Lumpianya biasa aja',
                'rating' => 3
            ],
            [
                'menu_id' => Menu::where('name', 'Nasi Goreng Spesial')->first()->id,
                'name' => 'Budi',
                'comment' => 'Nasi gorengnya enak, bumbunya pas',
                'rating' => 5
            ],
            [
                'menu_id' => Menu::where('name', 'Nasi Goreng Spesial')->first()->id,
                'name' => 'Ani',
                'comment' => 'Nasi gorengnya biasa aja',
                'rating' => 3
            ],
            [
                'menu_id' => Menu::where('name', 'Sate Ayam')->first()->id,
                'name' => 'Budi',
                'comment' => 'Sate ayamnya enak, bumbunya pas',
                'rating' => 5
            ],
            [
                'menu_id' => Menu::where('name', 'Sate Ayam')->first()->id,
                'name' => 'Ani',
                'comment' => 'Sate ayamnya biasa aja',
                'rating' => 3
            ],
            [
                'menu_id' => Menu::where('name', 'Mie Goreng')->first()->id,
                'name' => 'Budi',
                'comment' => 'Mie gorengnya enak, bumbunya pas',
                'rating' => 5
            ],
        ];

        // Masukkan data manual
        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
