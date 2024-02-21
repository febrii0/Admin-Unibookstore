<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_buku',
        'kategori',
        'nama_buku',
        'harga',
        'stok',
        'penerbit',
    ];
}