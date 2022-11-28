<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'harga','nama_perias','jenis_rias','alamat', 'tanggal','uname'
    ];
}
