<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $id = 1;

        for ($trx = 1; $trx <= 10; $trx++) {
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'detail_id' => $id++,
                    'penjualan_id' => $trx,
                    'barang_id' => rand(1, 15),
                    'harga' => rand(15000, 30000),
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
