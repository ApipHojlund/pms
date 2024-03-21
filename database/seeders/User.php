<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('users')->insert([
            [
                'nama' => 'Apip Hojlund',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'level' => 'Admin',
                'no_telp' => '089612313',
                'foto' => '1789621817524113.jpg',
                'alamat' => 'Denmark kulon deket rumah pak jajang',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'nama' => 'Afif Xavi',
                'username' => 'worker',
                'password' => Hash::make('worker'),
                'level' => 'Petugas',
                'no_telp' => '02168941',
                'foto' => '1789621500386239.jpg',
                'alamat' => 'Spanyol barcelona deket camp nou',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'nama' => 'Gavi Escobar',
                'username' => 'customer',
                'password' => Hash::make('customer'),
                'level' => 'Customer',
                'no_telp' => '09218312',
                'foto' => '1789621487733115.jpg',
                'alamat' => 'Spanyol barcelona disamping rumahnya pak xavi',
                'created_at' => $today,
                'updated_at' => $today
            ],
        ]);
    }
}
