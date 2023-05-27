<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{

    use HasFactory;
    //to turn of just one field
    const UPDATED_AT = null;
    //to turn off timestamp completely

    public $timestamps = false;
    protected $primaryKey = 'Makhachhang';
    protected $table = 'khachhang';
    protected $fillable = ['Makhachhang', 'TenKhachHang', 'DiaChi', 'SoDienThoai', 'Email','Matkhau'];
    
}
