<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahans')->insert([
            [
                'nama' => 'Baja Ringan',
                'ukuran_x' => 100,
                'ukuran_y' => 50,
                'ukuran_z' => 10,
                'harga_bahan' => 12000,
                'id_jenis' => 1, // Logam
            ],
            [
                'nama' => 'Aluminium',
                'ukuran_x' => 200,
                'ukuran_y' => 100,
                'ukuran_z' => 5,
                'harga_bahan' => 15000,
                'id_jenis' => 1, // Logam
            ],
            [
                'nama' => 'PVC',
                'ukuran_x' => 50,
                'ukuran_y' => 50,
                'ukuran_z' => 100,
                'harga_bahan' => 8000,
                'id_jenis' => 2, // Plastik
            ],
            [
                'nama' => 'ABS',
                'ukuran_x' => 100,
                'ukuran_y' => 100,
                'ukuran_z' => 50,
                'harga_bahan' => 10000,
                'id_jenis' => 2, // Plastik
            ],
            [
                'nama' => 'Kaca Tempered',
                'ukuran_x' => 100,
                'ukuran_y' => 100,
                'ukuran_z' => 10,
                'harga_bahan' => 20000,
                'id_jenis' => 3, // Kaca
            ],
            [
                'nama' => 'Tripleks',
                'ukuran_x' => 120,
                'ukuran_y' => 240,
                'ukuran_z' => 18,
                'harga_bahan' => 30000,
                'id_jenis' => 4, // Kayu
            ],
            [
                'nama' => 'Kain Katun',
                'ukuran_x' => 100,
                'ukuran_y' => 100,
                'ukuran_z' => 0.5,
                'harga_bahan' => 15000,
                'id_jenis' => 5, // Kain
            ],
            [
                'nama' => 'Karet Ban',
                'ukuran_x' => 200,
                'ukuran_y' => 200,
                'ukuran_z' => 50,
                'harga_bahan' => 25000,
                'id_jenis' => 6, // Karet
            ],
            [
                'nama' => 'Serat Karbon',
                'ukuran_x' => 100,
                'ukuran_y' => 100,
                'ukuran_z' => 1,
                'harga_bahan' => 40000,
                'id_jenis' => 7, // Komposit
            ],
        ]);
    }
}
