<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajer extends Model
{
    use HasFactory;

    protected $table = 'manajer';

    protected $fillable = [
        'id',
        'id_users',
    ];
}
