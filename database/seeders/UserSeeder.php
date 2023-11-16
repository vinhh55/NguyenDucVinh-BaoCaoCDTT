<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => 'Tên danh mục' . $i,
                'phone' => 'Tên danh mục' . $i,
                'username' => 'ten-danh-muc-' . $i,
                'password' => 'ten-danh-muc-' . $i,
                'address' => 'ten-danh-muc-' . $i,
                'image' => 'hinhanh.jpg',
                'roles' => 'hinhanh.jpg',
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
