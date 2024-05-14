<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'nazwa amelia', 'jenis_kelamin'=>'perempuan', 'alamat'=>'bojong suren', 'agama'=>'islam', 'telepon'=> 69982, 'email'=>'nazwaamelia@gmail.com' ],
            ['nama'=>'felisha indriayani', 'jenis_kelamin'=>'perempuan','alamat'=>'bojong cilebak', 'agama'=>'islam', 'telepon'=> 62822, 'email'=>'felishaly@gmail.com'],
            ['nama'=>'sindy launa', 'jenis_kelamin'=>'perempuan','alamat'=>'tarate', 'agama'=>'islam', 'telepon'=> 62849, 'email'=>'sinlaa@gmail.com'],
            ['nama'=>'aisha rachmalia', 'jenis_kelamin'=>'perempuan','alamat'=>'kopo', 'agama'=>'islam', 'telepon'=> 62433, 'email'=>'aisharc@gmail.com'],
            ['nama'=>'zahran', 'jenis_kelamin'=>'laki - laki','alamat'=>'rancamanyar', 'agama'=>'islam', 'telepon'=> 62754, 'email'=>'zahranraifal@gmail.com'],
            ['nama'=>'radin', 'jenis_kelamin'=>'laki - laki','alamat'=>'rancamanyar', 'agama'=>'islam', 'telepon'=> 62664, 'email'=>'radinalkhalifi@gmail.com'],
            ['nama'=>'abdu', 'jenis_kelamin'=>'laki - laki','alamat'=>'rancamanyar', 'agama'=>'islam', 'telepon'=> 62753, 'email'=>'abdurifai@gmail.com'],
            ['nama'=>'zidni', 'jenis_kelamin'=>'laki - laki','alamat'=>'kopo', 'agama'=>'islam', 'telepon'=> 62534, 'email'=>'zidnizee@gmail.com'],
            ['nama'=>'wandi', 'jenis_kelamin'=>'laki - laki','alamat'=>'sayuran', 'agama'=>'islam', 'telepon'=> 62653, 'email'=>'wandiaryadi@gmail.com'],
            ['nama'=>'jelita', 'jenis_kelamin'=>'perempuan','alamat'=>'cangkuang', 'agama'=>'islam','telepon'=> 62633, 'email'=>'jelittaeka@gmail.com']
            ];
            // masukkan data ke database
            DB::table('siswas')->insert($siswas);
    }
}
