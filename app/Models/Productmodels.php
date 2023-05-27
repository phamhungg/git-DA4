<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productmodels extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $primaryKey = 'MaSanPham';
    protected $fillable = ['MaSanPham', 'MaDanhMuc', 'TenSanPham', 'MoTaSanPham', 'AnhDaiDien', 'MaNhaSanXuat', 'Mausac', 'Size', 'NgayTao','soluong','MaGiaSanPham','Giaban'];

    public function danhMuc()
    {
        return $this->hasOne(menu::class, 'MaDanhMuc', 'MaDanhMuc');
    }

    public function sanpham_gia()
    {
        return $this->belongsTo(Giamodel::class, 'MaGiaSanPham', 'MaGiaSanPham');
    }
   
}
