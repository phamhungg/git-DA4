<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productmodels extends Model
{
    use HasFactory;
    protected $table ='sanpham';
    protected $filltable =['MaSanPham', 'MaDanhMuc', 'TenSanPham', 'MoTaSanPham', 'AnhDaiDien', 'MaNhaSanXuat', 'NgayTao'];
    
    public function danhMuc()
    {
        return $this->belongsTo(menu::class, 'MaDanhMuc', 'MaDanhMuc');
    }
}
