<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $jsonPath = base_path('database/annunci.json');

        $json = file_get_contents($jsonPath);

        $products =  json_decode($json, true); 

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'category' => $product['category'],
                'price' => $product['price'],
                'image' => $product['image'],
            ]);
        }
    }
}
