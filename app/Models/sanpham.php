<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table ='sanpham';
    //to turn of just one field
    const UPDATED_AT = null;
    //to turn off timestamp completely
    public $timestamps = false;
    protected $primaryKey = 'MaSanPham';
    protected $filltable =['MaSanPham', 'MaDanhMuc', 'TenSanPham', 'MoTaSanPham', 'AnhDaiDien', 'MaNhaSanXuat', 'NgayTao'];
    protected $guarded = ['id'];

}
