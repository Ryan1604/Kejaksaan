<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengawasanBarang extends Model
{
    protected $fillable = [
        'kecamatan_id',
        'tgl',
        'barang',
        'tgl_penerbitan',
        'penulis',
        'judul',
        'hasil',
        'tindak_lannjut',
        'keterangan',
    ];

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }
}
