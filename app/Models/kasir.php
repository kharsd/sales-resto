<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;

    protected $table = 'kasir';

    protected $fillable = [
        'id',
        'id_users',
    ];
}
