<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotFound extends Seeder
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
                'id' => '404',
                'nama' => 'Mesin Tidak Ditemukan',
                'jenis_mesin' => '-',
                'tgl_beli' => '1000-10-10',
                'harga_asli' => '0',
                'harga_buku' => '0',
                'umur' => '0',
                'inflansi' => '0',
                'jam_bln' => '0',
                'kebutuhan_ruang' => '0',
                'by_ruang' => '0',
                'daya_mesin' => '0',
                'biaya_listrik' => '0',
                'biaya_operator' => '0',
                'total_biaya' => '0',
                'pembulatan_biaya' => '0',
                'created_at' => $today,
                'updated_at' => $today
            ],
        ]);
    }
}
