<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Felisha'],
            ['nama'=>'Bareska'],
            ['nama'=>'Kalisa']
            ];
            // masukkan data ke database
            DB::table('penggunas')->insert($penggunas);
    }
}
