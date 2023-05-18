<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giamodel extends Model
{
    use HasFactory;
    protected $table ='giaban';
    protected $filltable =['MaGiaSanPham', 'MaSanPham', 'NgayBatDau', 'NgayKetThuc', 'Gia'];

    public function sanpham()
    {
        return $this->hasMany(Productmodels::class);
    }
}
