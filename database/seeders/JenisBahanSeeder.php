<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = carbon::today();
        DB::table('jenis_bahans')->insert([
            [
                'tipe' => 'Logam',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Plastik',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Kaca',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Kayu',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Kain',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Karet',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Komposit',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Keramik',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'tipe' => 'Serat Alam',
                'created_at' => $today,
                'updated_at' => $today
            ],
        ]);
    }
}
