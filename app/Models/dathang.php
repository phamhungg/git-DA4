<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dathang extends Model
{
    use HasFactory;
     //to turn of just one field
     const UPDATED_AT = null;
     //to turn off timestamp completely
     public $timestamps = false;
     protected $primaryKey = 'MaDonHang';
    protected $table = 'donhang';
    protected $fillable = [ 'MaDonHang', 'Makhachhang', 'NgayDat', 'Ngaygiao', 'Soluong', 'Tongtien', 'TrangThaiDonHang'];
    public function donhang_khachhang(){
        return $this->belongsTo(khachhang::class,'Makhachhang','Makhachhang');   
    }
}
