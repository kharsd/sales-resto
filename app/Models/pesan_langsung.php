<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_langsung extends Model
{
    use HasFactory;

    protected $table = 'pesan_langsung';

    protected $fillable = [
        'id',
    ];
}
