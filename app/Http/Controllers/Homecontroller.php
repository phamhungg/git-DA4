<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use App\Models\chitiet;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
use App\Models\Productmodels;
use App\Models\Giamodels;
use Illuminate\Http\Request;
use App\Models\menu;

class Homecontroller extends Controller
{
    protected $db;
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function trangchu(){
        $san_pham_moi = DB::table('sanpham')->orderBy('NgayTao', 'desc')->take(4)->get();
        $sanpham = Productmodels::limit(10)->get();
    //    $loaisp = menu::where('TrangThai',1)->orderBy('TenDanhMuc','ASC')->get();
    //    $loaibv = baiviet::where('TrangThai',1)->orderBy('Tenloaibaiviet','ASC')->get();
        return view('trangchu',['sanpham'=> $sanpham], ['san_pham_moi' => $san_pham_moi] );
        
    }

    public function sanpham(){
        $sanpham = Productmodels::limit(10)->get();
        return view('sanpham',['sanpham'=> $sanpham]);
    }

    public function cart(){
       
        return view('cart');
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

    // public function show($id)
    // {
    //     $sanPham = Productmodels::with('danhmuc')->find($id);

    //     return view('show', compact('sanPham'));
    // }

    public function timkiem(Request $req){

        $tukhoa=$req->tukhoa_1;
        $tim_sp =  $this->db->connection()->table('sanpham')->where('TenSanPham', 'like', '%' . $tukhoa . '%')
        ->orWhere('Mausac', 'like', '%' . $tukhoa . '%')
        ->get(); 
        $loaisp = menu::where('TrangThai',1)->orderBy('TenDanhMuc','ASC')->get();
         return view('timkiem' ,['tim_sp'=> $tim_sp],compact('loaisp'));
        
    }


    public function Baiviet(){
        $baiviet = chitiet::limit(10)->get();
        return view('baiviet',['baiviet'=> $baiviet]);
    }

    public function get_loaibv($type)
    {
        // $sp_theoloai = Productmodels::where('MaDanhMuc',$type)->get();
        $loai_bv = baiviet::where('Maloaibaiviet', $type)->first();
        $bv_theoloai = chitiet::where('Maloai',$type)->get();      
        return view('loaibaiviet',compact('bv_theoloai',"loai_bv"));
    }
    public function get_chitietbv($req){

      $get_chitietbv = chitiet::where('Mabaiviet',$req)->first(); 
      return view('chitietbaiviet',compact('get_chitietbv'));  
    }

    


    
}
