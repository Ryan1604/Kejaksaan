<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl');
            $table->unsignedSmallInteger('negara_id');
            $table->string('locus');
            $table->string('orang_asing');
            $table->unsignedSmallInteger('tinggal_sementara_id')->nullable();
            $table->string('ket_sementara')->nullable();
            $table->string('pendatang_ilegal')->nullable();
            $table->unsignedSmallInteger('kunjungan_id')->nullable();
            $table->string('ket_kunjungan')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('negara_id')->references('id')->on('negaras')->onDelete('cascade');
            $table->foreign('tinggal_sementara_id')->references('id')->on('tingga_sementara_w_n_a_s')->onDelete('cascade');
            $table->foreign('kunjungan_id')->references('id')->on('kunjungan_w_n_a_s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengawasans');
    }
}
