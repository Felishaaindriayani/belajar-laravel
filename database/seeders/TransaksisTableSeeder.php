<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['barangdua_id'=>1,'pembeli_id'=>1,'jumlah'=> 17,'tanggal'=>'2024-03-31'],
            ['barangdua_id'=>1,'pembeli_id'=>1,'jumlah'=> 19,'tanggal'=>'2019-04-01'],
            ['barangdua_id'=>2,'pembeli_id'=>2,'jumlah'=> 21,'tanggal'=>'2008-12-29'],
            ['barangdua_id'=>2,'pembeli_id'=>2,'jumlah'=> 15,'tanggal'=>'2024-01-05'],
            ['barangdua_id'=>3,'pembeli_id'=>3,'jumlah'=> 10,'tanggal'=>'2024-02-19'],
            ['barangdua_id'=>3,'pembeli_id'=>3,'jumlah'=> 20,'tanggal'=>'2007-02-19']
            ];
            // masukkan data ke database
            DB::table('transaksis')->insert($transaksis);
    }
}
