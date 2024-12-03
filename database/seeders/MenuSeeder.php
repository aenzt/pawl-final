<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data sebelumnya
        Menu::truncate();

        // Pastikan kategori sudah ada
        $categories = Category::count();
        if ($categories == 0) {
            $this->call(CategorySeeder::class);
        }

        // Contoh data manual
        $menus = [
            // Makanan Pembuka
            [
                'name' => 'Risoles',
                'description' => 'Risoles renyah isi sayur dan ayam',
                'price' => 15000,
                'image_url' => 'https://example.com/risoles.jpg',
                'category_id' => Category::where('name', 'Makanan Pembuka')->first()->id
            ],
            [
                'name' => 'Lumpia',
                'description' => 'Lumpia renyah dengan isi sayuran dan daging',
                'price' => 18000,
                'image_url' => 'https://example.com/lumpia.jpg',
                'category_id' => Category::where('name', 'Makanan Pembuka')->first()->id
            ],
        
            // Makanan Utama
            [
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng dengan tambahan telur dan ayam suwir',
                'price' => 35000,
                'image_url' => 'https://example.com/nasi-goreng.jpg',
                'category_id' => Category::where('name', 'Makanan Utama')->first()->id
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Sate ayam dengan bumbu kacang pilihan',
                'price' => 45000,
                'image_url' => 'https://example.com/sate-ayam.jpg',
                'category_id' => Category::where('name', 'Makanan Utama')->first()->id
            ],
            [
                'name' => 'Mie Goreng',
                'description' => 'Mie goreng dengan bumbu special',
                'price' => 27000,
                'image_url' => 'https://example.com/mie-goreng.jpg',
                'category_id' => Category::where('name', 'Makanan Utama')->first()->id
            ],
            [
                'name' => 'Nasi Uduk',
                'description' => 'Nasi uduk dengan lauk pilihan',
                'price' => 28000,
                'image_url' => 'https://example.com/nasi-uduk.jpg',
                'category_id' => Category::where('name', 'Makanan Utama')->first()->id
            ],
        
            // Minuman
            [
                'name' => 'Es Teh Manis',
                'description' => 'Minuman es teh segar dengan gula pasir',
                'price' => 10000,
                'image_url' => 'https://example.com/es-teh.jpg',
                'category_id' => Category::where('name', 'Minuman')->first()->id
            ],
            [
                'name' => 'Jus Jeruk',
                'description' => 'Jus jeruk segar diperas langsung',
                'price' => 15000,
                'image_url' => 'https://example.com/jus-jeruk.jpg',
                'category_id' => Category::where('name', 'Minuman')->first()->id
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'Kopi cappuccino dengan foam susu premium',
                'price' => 25000,
                'image_url' => 'https://example.com/cappuccino.jpg',
                'category_id' => Category::where('name', 'Minuman')->first()->id
            ],
        
            // Makanan Penutup
            [
                'name' => 'Puding Coklat',
                'description' => 'Puding coklat lembut dengan saus vanila',
                'price' => 20000,
                'image_url' => 'https://example.com/puding-coklat.jpg',
                'category_id' => Category::where('name', 'Makanan Penutup')->first()->id
            ],
            [
                'name' => 'Pisang Goreng',
                'description' => 'Pisang goreng krispy dengan tepung renyah',
                'price' => 15000,
                'image_url' => 'https://example.com/pisang-goreng.jpg',
                'category_id' => Category::where('name', 'Makanan Penutup')->first()->id
            ],
            [
                'name' => 'Cheese Cake',
                'description' => 'Kue keju lembut dengan basis graham crackers',
                'price' => 45000,
                'image_url' => 'https://example.com/cheese-cake.jpg',
                'category_id' => Category::where('name', 'Makanan Penutup')->first()->id
            ]
        ];

        // Masukkan data manual
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
