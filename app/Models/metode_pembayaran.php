<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode_pembayaran extends Model
{
    use HasFactory;

    protected $table = 'metode_pebayaran';

    protected $fillable = [
        'id',
        'cash',
        'cashless',
    ];
}
