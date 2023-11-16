<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) 
        {
            Contact::create([
                'user_id' => $i,
                'name' => 'Tên khách hàng' . $i,
                'email' => 'email' . $i,
                'phone' => 'key word',
                'title' => 'mô tả',
                'content' => 'content',
                'replay_id' => $i,
                'updated_by' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => '1'
            ]);
        }
    }
}
