<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User::class);
        $this->call(BahanSeeder::class);
        $this->call(JenisBahanSeeder::class);
        $this->call(MesinSeeder::class);
    }
}
