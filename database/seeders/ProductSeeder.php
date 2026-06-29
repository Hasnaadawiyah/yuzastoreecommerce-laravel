<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Kategori Dummy
        $categories = [
            'Anniversary',

        ];

        $categoryIds = [];

        foreach ($categories as $cat) {
            $id = DB::table('categories')->insertGetId([
                'name'        => $cat,
                'slug'        => Str::slug($cat),
                'description' => 'Kategori ' . $cat,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);

            $categoryIds[$cat] = $id;
        }

        // 2. Buat Produk Dummy (sesuai data UI)
        $products = [
            [
                'name'     => 'Florits',
                'price'    => 170000,
                'category' => 'Anniversary',
                'image'    => 'https://i.pinimg.com/736x/04/fe/8d/04fe8d39f4b885decda6f82d03f4a2cd.jpg'
            ],
            [
                'name'     => 'Flora',
                'price'    => 189000,
                'category' => 'Fashion',
                'image'    => 'https://i1-e.pinimg.com/1200x/15/00/40/150040c28bf58fa98cb406786be4ab1a.jpg'
            ],
            [
                'name'     => 'Lunar Royale',
                'price'    => 190000,
                'category' => 'Fashion',
                'image'    => 'https://i.pinimg.com/736x/59/99/66/5999663f8ee5260a88caf07a1335d953.jpg'
            ],
            [
                'name'     => 'Sakura Bliss',
                'price'    => 187000,
                'category' => 'Fashion',
                'image'    => 'https://i1-e.pinimg.com/1200x/c3/20/dd/c320dda6906647159f409c13de87d68a.jpg'
            ],
            [
                'name'     => 'Obsidian Noir',
                'price'    => 189000,
                'category' => 'Fashion',
                'image'    => 'https://i1-e.pinimg.com/1200x/4e/75/40/4e75403a45ad22cc614bf975b618f0e3.jpg'
            ],
            [
                'name'     => 'Argentum Eclipse',
                'price'    => 185000,
                'category' => 'Fashion',
                'image'    => 'https://i1-e.pinimg.com/1200x/13/16/a6/1316a6cd56f9bd01f97144fd6cc2e8f8.jpg'
            ],
            [
                'name'     => 'Serene Moss',
                'price'    => 200000,
                'category' => 'Fashion',
                'image'    => 'https://i.pinimg.com/736x/13/75/0a/13750a06a59388703fe345b2cb22c0d3.jpg'
            ],
            [
                'name'     => 'Aura de Jouy',
                'price'    => 240000,
                'category' => 'Fashion',
                'image'    => 'https://i1-e.pinimg.com/1200x/85/08/62/850862f0dea970d2bb27b6cfbee88ee7.jpg'
            ],
            
        ];

        foreach ($products as $i => $p) {
            DB::table('products')->insert([
                'category_id' => $categoryIds[$p['category']],
                'name'        => $p['name'],
                'slug'        => Str::slug($p['name']),
                'sku'         => 'SKU-' . strtoupper(Str::random(6)),
                'price'       => $p['price'],
                'image'       => $p['image'],
                'stock'       => 50,
                'description' => 'Ini adalah deskripsi produk ' . $p['name'] . '. Sangat cocok untuk kebutuhan gaming dan produktivitas Anda.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}