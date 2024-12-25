<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $category = ProductCategory::first();

        Product::create([
            'product_category_id' => $category->id,
            'name' => 'T-Shirt',
            'price' => 100000.00,
            'image' => 'path/to/sample_image.jpg'
        ],
        [
            'product_category_id' => $category->id,
            'name' => 'Jeans',
            'price' => 500000.00,
            'image' => 'path/to/sample_image.jpg'
        ],
        [
            'product_category_id' => $category->id,
            'name' => 'TV',
            'price' => 2000000.00,
            'image' => 'path/to/sample_image.jpg'
        ]);
    }
}
