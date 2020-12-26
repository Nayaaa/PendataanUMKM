<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_model extends Model
{
    protected $table = 'produk';
    protected $fillable =['nama_produk','stok','harga','kadaluwarsa'];
}
