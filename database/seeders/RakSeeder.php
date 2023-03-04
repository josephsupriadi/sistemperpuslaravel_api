<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_rak')->insert([
            'rak' => 'A',
            'kategori' => 'Politik' 

        ]);
        DB::table('table_rak')->insert([
            'rak' => 'B',
            'kategori' => 'Teknologi' 

        ]);
         DB::table('table_rak')->insert([
            'rak' => 'C',
            'kategori' => 'Budaya' 

        ]);
    }
}
