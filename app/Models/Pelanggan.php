<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kodePelanggan','nama', 'noTelp', 'email', 'paket', 'alamat', 'kodeSales', 'statusPemasangan'
    ];
}
