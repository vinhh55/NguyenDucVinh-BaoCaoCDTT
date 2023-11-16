<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Order::create([
                'user_id' => $i,
                'name' => 'Tên khách hàng' . $i,
                'phone' => 'phone' . $i,
                'email' => 'email' . $i,
                'address' => 'address' . $i,
                'note' => 'note' . $i,
                'updated_by' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1'
            ]);
        }
    }
}
