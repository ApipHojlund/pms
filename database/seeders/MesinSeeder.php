<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MesinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();

        DB::table('mesins')->insert([
            [
                'nama' => 'Pao Fong CNC Milling Machine PF-8SCNC',
                'jenis_mesin' => 'Mesin CNC Milling',
                'tgl_beli' => '2023-02-21',
                'harga_asli' => '300000000',
                'harga_buku' => '150000000',
                'umur' => '12',
                'inflansi' => '6',
                'jam_bln' => '200',
                'kebutuhan_ruang' => '8',
                'by_ruang' => '20000',
                'daya_mesin' => '12',
                'biaya_listrik' => '1000',
                'biaya_operator' => '20000',
                'total_biaya' => '45900',
                'pembulatan_biaya' => '50000',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'nama' => 'HAAS CNC Lathe ST-10Y',
                'jenis_mesin' => 'Mesin CNC Lathe (Bubut)',
                'tgl_beli' => '2022-06-13',
                'harga_asli' => '1300000000',
                'harga_buku' => '650000000',
                'umur' => '9',
                'inflansi' => '6',
                'jam_bln' => '190',
                'kebutuhan_ruang' => '3',
                'by_ruang' => '20000',
                'daya_mesin' => '2',
                'biaya_listrik' => '1000',
                'biaya_operator' => '20000',
                'total_biaya' => '107212',
                'pembulatan_biaya' => '110000',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'nama' => 'Kjellberg HiFocus 120i CNC Plasma Cutter',
                'jenis_mesin' => 'Mesin CNC Plasma Cutter',
                'tgl_beli' => '2023-02-07',
                'harga_asli' => '300000000',
                'harga_buku' => '150000000',
                'umur' => '11',
                'inflansi' => '6',
                'jam_bln' => '205',
                'kebutuhan_ruang' => '2',
                'by_ruang' => '20000',
                'daya_mesin' => '18',
                'biaya_listrik' => '1000',
                'biaya_operator' => '20000',
                'total_biaya' => '51349',
                'pembulatan_biaya' => '55000',
                'created_at' => $today,
                'updated_at' => $today
            ],
        ]);
    }
}
