<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'id',
        'status_pembayaran',
        'total_pembayaran',
        'tanggal_pembayaran',
        'id_metode_pembayaran',
    ];
}
