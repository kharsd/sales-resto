<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_menu extends Model
{
    use HasFactory;

    protected $table = 'order_menu';

    protected $fillable = [
        'id',
        'jumlah',
        'id_menu',
    ];
}