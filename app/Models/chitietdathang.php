<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdathang extends Model
{
    use HasFactory;
     //to turn of just one field
     const UPDATED_AT = null;
     //to turn off timestamp completely
     public $timestamps = false;
     protected $primaryKey = 'MaChiTietDonHang';
    protected $table = 'chitietdonhang';
    protected $fillable = ['MaChiTietDonHang', 'MaDonHang', 'MaSanPham','TenSanPham', 'soluong', 'GiaMua'];
}
