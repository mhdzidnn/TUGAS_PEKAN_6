<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
            'kode_satuan' => 'kg',
            'nama_satuan' => 'Kilogram',
            ],
            [
            'kode_satuan' => 'g',
            'nama_satuan' => 'Gram',
            ],
            [
            'kode_satuan' => 'inch',
            'nama_satuan' => 'Inchi',
            ],
            [
            'kode_satuan' => 'ton',
            'nama_satuan' => 'Ton',
            ],


            ]);
    }
}
