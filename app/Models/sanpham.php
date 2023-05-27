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
    protected $fillable =['MaSanPham', 'MaDanhMuc', 'TenSanPham', 'MoTaSanPham', 'AnhDaiDien', 'MaNhaSanXuat','Mausac', 'Size', 'NgayTao'];
    protected $guarded = ['id'];
    
    public function sanpham_gia(){
        return $this->hasOne(Giamodel::class,'MaSanPham','MaSanPham');
    }
    public function danhMuc()
    {
        return $this->hasOne(menu::class, 'MaDanhMuc', 'MaDanhMuc');
    }
}
