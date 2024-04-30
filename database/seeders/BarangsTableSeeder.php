<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Sepatu', 'jumlah'=> 10],
            ['nama'=>'Tas', 'jumlah'=> 25],
            ['nama'=>'Baju', 'jumlah'=> 75]
            ];
            // masukkan data ke database
            DB::table('barangs')->insert($barangs);
    }
}
