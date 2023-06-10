<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
            'kode_barang' => '01AAB',
            'nama_barang' => 'Camera Cannon DR45',
            'harga_barang' => 1000,
            'deskripsi_barang' => 'Toko Camera.com',
            'satuan_id' => 1
            ],
            [
            'kode_barang' => '02AZA',
            'nama_barang' => 'PS 5',
            'harga_barang' => 2000,
            'deskripsi_barang' => 'Toko Camera.com',
            'satuan_id' => 2
            ],
            [
            'kode_barang' => '03RAN',
            'nama_barang' => 'Mesin cuci',
            'harga_barang' => 3000 ,
            'deskripsi_barang' => 'Toko Gong Xi Facai',
            'satuan_id' => 3
            ],
            [
            'kode_barang' => '04BUD',
            'nama_barang' => 'Truk Tambang',
            'harga_barang' => 4000,
            'deskripsi_barang' => 'PT.Caterpillar',
            'satuan_id' => 4
            ],
            ]);
    }
}
