<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTIKMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_i_k_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('npwp');
            $table->string('jenis');
            $table->string('alamat');
            $table->string('phone');
            $table->string('nama_pimpinan');
            $table->string('penanggung_jawab');
            $table->string('ijin_usaha');
            $table->date('waktu');
            $table->string('daerah');
            $table->string('jumlah');
            $table->unsignedSmallInteger('kecamatan_id');
            $table->string('kasus')->nullable();
            $table->string('background')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('tindakan_kejaksaan')->nullable();
            $table->string('tindakan_kepolisian')->nullable();
            $table->string('tindakan_kominfo')->nullable();
            $table->string('tindakan_pengadilan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('t_i_k_media');
    }
}
