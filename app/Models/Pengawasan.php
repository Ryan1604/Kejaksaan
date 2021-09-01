<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengawasan extends Model
{
    protected $fillable = [
        'tgl',
        'negara_id',
        'locus',
        'orang_asing',
        'tinggal_sementara_id',
        'ket_sementara',
        'pendatang_ilegal',
        'kunjungan_id',
        'ket_kunjungan',
        'keterangan',
    ];

    public function negara()
    {
        return $this->belongsTo('App\Models\Negara');
    }

    public function tinggalSementara()
    {
        return $this->belongsTo('App\Models\TinggaSementaraWNA');
    }

    public function kunjungan()
    {
        return $this->belongsTo('App\Models\KunjunganWNA');
    }
}
