<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesins', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_mesin');
            $table->date('tgl_beli');
            $table->integer('harga_asli');
            $table->integer('harga_buku');
            $table->integer('umur');
            $table->integer('inflansi');
            $table->integer('jam_bln');
            $table->integer('kebutuhan_ruang');
            $table->integer('by_ruang');
            $table->integer('daya_mesin');
            $table->integer('biaya_listrik');
            $table->bigInteger('biaya_operator');
            $table->bigInteger('total_biaya');
            $table->bigInteger('pembulatan_biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesins');
    }
}
