<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id_transaksi'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_transaksi', 'barang_id');
    }

}
