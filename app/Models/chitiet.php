<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiet extends Model
{
    use HasFactory;
    //to turn of just one field
    const UPDATED_AT = null;
    //to turn off timestamp completely

    public $timestamps = false;
    protected $primaryKey = 'Mabaiviet';
    protected $table ='baiviet';
    protected $filltable=['Maloai','Mabaiviet', 'Tenbaivet', 'Chitiet', 'Anh', 'ngaytao'];

    public function loaibaiviet()
    {

        return $this->hasone(baiviet::class, 'Maloaibaiviet', 'Maloai');
    }
}
