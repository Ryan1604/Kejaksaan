<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehutanan extends Model
{
    protected $fillable = [
        'name',
        'locus',
        'kecamatan_id',
    ];

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }
}
