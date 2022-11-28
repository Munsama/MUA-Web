<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenisriasan extends Model
{
    protected $table = 'jenisriasans';
    protected $fillable = ['id',
        'jenis_rias'
    ];
}
