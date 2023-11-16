<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
   
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'category_id' => $i,
                'brand_id' => $i,
                'name' => 'ten-san-pham-' . $i,
                'slug' => 'ten-san-pham-' . $i,
                'image' => 'hinhanh.jpg',
                'qty' => 0,
                'detail' => 'ten-san-pham-',
                'metakey' => 'key word',
                'metadesc' => 'mô tả',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => '1',
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => '1',
                'status' => '1'
            ]);
        }

    }
}
