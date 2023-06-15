<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi_meja extends Model
{
    use HasFactory;

    protected $table = 'lokasi_meja';

    protected $fillable = [
        'id',
        'mo_meja',
    ];
}
