<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Orderdetail::create([
                'order_id' => $i,
                'category_id' => $i,
                'product_id' => $i,
                'name' => 'Tên sản phẩm' . $i,
                'qty' => 0,
                'amount' => 0,
                
                
            ]);
        }
    }
}



