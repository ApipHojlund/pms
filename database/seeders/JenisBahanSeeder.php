<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class JenisBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_bahans')->insert([
            [
                'tipe' => 'Logam',
            ],
            [
                'tipe' => 'Plastik',
            ],
            [
                'tipe' => 'Kaca',
            ],
            [
                'tipe' => 'Kayu',
            ],
            [
                'tipe' => 'Kain',
            ],
            [
                'tipe' => 'Karet',
            ],
            [
                'tipe' => 'Komposit',
            ],
            [
                'tipe' => 'Keramik',
            ],
            [
                'tipe' => 'Serat Alam',
            ],
        ]);
    }
}
