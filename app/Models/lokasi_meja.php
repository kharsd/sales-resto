<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi_meja extends Model
{
    use HasFactory;

    protected $table = 'lokasi_meja';

    protected $fillable = [
        'id',
        'mo_meja',
    ];
}