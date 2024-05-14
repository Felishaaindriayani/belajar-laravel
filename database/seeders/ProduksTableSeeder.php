<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Midnight In December','jumlah'=> 17,'tanggal_produksi'=>'2024-03-31','merek_id'=> 1],
            ['nama_produk'=>'Halemora','jumlah'=> 16,'tanggal_produksi'=>'2024-04-03','merek_id'=> 1],
            ['nama_produk'=>'Sastra Indonesia','jumlah'=> 19,'tanggal_produksi'=>'2019-04-01','merek_id'=> 2],
            ['nama_produk'=>'Sastra Inggris','jumlah'=> 21,'tanggal_produksi'=>'2008-12-29','merek_id'=> 2],
            ['nama_produk'=>'Bazar','jumlah'=> 15,'tanggal_produksi'=>'2024-01-05','merek_id'=> 3],
            ['nama_produk'=>'Loowe','jumlah'=> 10,'tanggal_produksi'=>'2024-02-19','merek_id'=> 3]
            ];
            // masukkan data ke database
            DB::table('produks')->insert($produks);
    }
}
