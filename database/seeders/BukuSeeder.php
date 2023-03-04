<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_buku')->insert([
            'judul' => 'Dampak pengunaan Handphone',
            'deskripsi' => 'penggunaan Handphone terlalu berlebihan bahaya',
            'harga' => '10000',
            'stok' => '20',
            'rak_id' => 1
        ]);
        DB::table('table_buku')->insert([
            'judul' => 'Issekai',
            'deskripsi' => 'Punya Skill memasak',
            'harga' => '20000',
            'stok' => '4',
            'rak_id' => 2
        ]);
        DB::table('table_buku')->insert([
            'judul' => 'Cara menjadi kaya',
            'deskripsi' => 'bagaiama anda dapat menjadi kaya',
            'harga' => '50000',
            'stok' => '2',
            'rak_id' => 3
        ]);
    }
}
