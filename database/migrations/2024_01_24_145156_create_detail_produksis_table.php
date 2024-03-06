<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_produksis', function (Blueprint $table) {
            $table->id();
            $table->string('petugas');
            $table->string('status');
            $table->date('tanggal');
            $table->text('note');
            $table->biginteger('id_pemesan');
            $table->integer('jumlah_produksi');
            $table->biginteger('id_produksi');
            $table->biginteger('waktu');
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
        Schema::dropIfExists('detail_produksis');
    }
}
