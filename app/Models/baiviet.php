<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    //to turn of just one field
    const UPDATED_AT = null;
    //to turn off timestamp completely

    public $timestamps = false;
    use HasFactory;
    protected $table ='loaibaiviet';
    protected $primaryKey = 'Maloaibaiviet';
    protected $filltable=['Maloaibaiviet', 'Tenloaibaiviet', 'Trangthai'];
}
