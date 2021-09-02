<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasanMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasan_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('kecamatan_id');
            $table->date('tgl');
            $table->string('jenis_media');
            $table->string('tgl_publikasi');
            $table->string('pimpinan')->nullable();
            $table->string('konten')->nullable();
            $table->string('hasil')->nullable();
            $table->string('tindak_lanjut')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengawasan_media');
    }
}
