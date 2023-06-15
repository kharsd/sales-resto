<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'id',
        'nama_pelanggan',
        'no_struk',
        'harga_meja',
        'id_order_menu',
        'id_meja',
        'id_reservasi',
        'id_pesan_langsung',
        'id_pembayaran',
        'id_kasir',
    ];
}
