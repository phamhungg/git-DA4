<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giamodel extends Model
{
    use HasFactory;
    protected $table = 'giaban';
    protected $primaryKey = 'MaGiaSanPham';
    protected $fillable = ['MaGiaSanPham', 'NgayBatDau', 'NgayKetThuc', 'Gia'];

    public function sanpham()
    {
        return $this->belongsTo(Productmodels::class, 'MaGiaSanPham', 'MaGiaSanPham');
    }
}
