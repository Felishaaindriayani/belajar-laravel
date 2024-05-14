<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangduasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangduas = [
            ['nama_barang'=>'Pensil', 'harga'=> 1500,'stok'=>100],
            ['nama_barang'=>'Buku', 'harga'=> 2500,'stok'=>60],
            ['nama_barang'=>'Pulpen', 'harga'=> 2000,'stok'=>70]
            ];
            // masukkan data ke database
            DB::table('barangduas')->insert($barangduas);
    }
}
