<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Electronics', 'Books', 'Clothing', 'Home & Kitchen'];

        foreach ($categories as $category) {
            ProductCategory::create(['name' => $category]);
        }
    }
}
