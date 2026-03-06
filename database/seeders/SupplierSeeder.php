<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Sumber Jaya', 'supplier_alamat' => 'Malang'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Makmur Sentosa', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'UD Berkah Abadi', 'supplier_alamat' => 'Jakarta'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
