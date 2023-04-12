<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'barang_id';
    protected $fillable = [
        'barang_id','harga_beli','harga_jual'
    ];
}
