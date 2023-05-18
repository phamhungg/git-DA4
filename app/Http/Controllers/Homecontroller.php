<?php

namespace App\Http\Controllers;

use App\Models\Productmodels;
use App\Models\Giamodels;
use Illuminate\Http\Request;
use App\Models\menu;

class Homecontroller extends Controller
{
    public function trangchu(){
        $sanpham = Productmodels::limit(10)->get();
       $loaisp = menu::where('TrangThai',1)->orderBy('TenDanhMuc','ASC')->get();
        return view('trangchu',['sanpham'=> $sanpham],compact('loaisp'));
    }

    public function sanpham(){
        $sanpham = Productmodels::limit(10)->get();
        return view('sanpham',['sanpham'=> $sanpham]);
    }

    public function chitiet(){
        $sanpham = Productmodels::limit(10)->get();
        return view('chitiet',['sanpham'=> $sanpham]);
    }

    public function get_loaisp($type){
        // $sp_theoloai = Productmodels::where('MaDanhMuc',$type)->get();
        $loai_sp = menu::where('MaDanhMuc', $type)->first();
        $sp_theoloai = Productmodels::where('MaDanhMuc',$type)->get();
        
        return view('loaisanpham',compact('sp_theoloai', "loai_sp"));
    }

    public function get_chitiet($req){
        

        $sanPhams = Productmodels::with('danhmuc')->get();
        $get_sanpham = Productmodels::where('MaSanPham',$req)->first();
        $sp_khac=Productmodels::where('MaSanPham','<>',$req)->paginate(4);

        return view('chitiet', compact('get_sanpham','sp_khac','sanPhams'));
    }

    public function show($id)
    {
        $sanPham = Productmodels::with('danhmuc')->find($id);

        return view('show', compact('sanPham'));
    }
}
