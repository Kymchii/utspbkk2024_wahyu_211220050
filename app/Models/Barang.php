<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'id_barang', 'nama_barang', 'merk_barang', 'harga', 'satuan', 'stok'
    ];

    protected $primaryKey = 'id_barang';
}
