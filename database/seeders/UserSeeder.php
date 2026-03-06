<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1, // Administrator
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('admin123'), // class untuk mengenkripsi password
            ],
            [
                'user_id' => 2,
                'level_id' => 2, // Manager
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('manager123'),
            ],
            [
                'user_id' => 3,
                'level_id' => 3, // Staff/Kasir
                'username' => 'staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('staff123'),
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
