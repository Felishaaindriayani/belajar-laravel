<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Pintar', 'content'=>'lorem ipsum'],
            ['title'=>'Harus berpikir positif?', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Sukses', 'content'=>'lorem ipsum']
            ];
            // masukkan data ke database
            DB::table('posts')->insert($posts);
    }
}
