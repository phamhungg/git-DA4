<?php

namespace App\Http\Controllers;

use App\Models\sanpham;

use Illuminate\Http\Request;

use function Psy\debug;

class sanphamcontroller extends Controller
{
    public function Listsanpham()
    {
        $sanpham = sanpham::all();
        return view('sanpham', ['sanpham' => $sanpham]);
    }
    public function index()
    {
        $sanpham = sanpham::paginate(5);
        if($key=request()->key){
            $sanpham= sanpham::where('TenSanPham','like','%'.$key.'%')->paginate(5);
        }
        return view('admin.sanpham.index', ['sanpham' => $sanpham],compact('sanpham'))->with('1',(request()->input('page',1)-1)*5);
    }

    public function store(Request $req)
    {
        if ($req->has('AnhDaiDien')){
            $file = $req-> AnhDaiDien;
            $file_name = $file->getClientOriginalName();
            // dd($file_name);
            $file->move(public_path('/asset/fronts/dailyShop/img/women/'),$file_name);
        }
        $req-> merge(['AnhDaiDien'=> $file_name]);
           $tieude = new Sanpham();
            $tieude->TenSanPham = $req->input('TenSanPham');
            $tieude->MaDanhMuc = $req->input('MaDanhMuc');
            $tieude->AnhDaiDien = $req->input('AnhDaiDien');
            $tieude->MoTaSanPham = $req->input('MoTaSanPham');
            $tieude->NgayTao = $req->input('NgayTao');
            $tieude->Mausac = $req->input('Mausac');
            $tieude->Size = $req->input('Size');
            $tieude->NgayTao = date('Y-m-d H:i:s');
            $tieude->save();
    //    Sanpham::created($req->all());
       return redirect()->route('admin.index')->with('thongbao','them san pham thanh cong!');
    }

    public function create()
    {  
    return view('admin.sanpham.create');
    }

    public function Destroy($id)
    {
        sanpham::find($id)->delete();
        return redirect()->route('admin.index');
    }
    public function edit($id)
    {
       $db= sanpham::find($id);
        return view('admin.sanpham.edit',['sp'=>$db]);
    }
    public function save(Request $res, $id)
    {
        $pro =  sanpham::find($id);
        $pro->MaDanhMuc=$res-> MaDanhMuc;
        $pro->TenSanPham=$res-> TenSanPham;
        $pro->AnhDaiDien=$res-> AnhDaiDien;
        $pro->MoTaSanPham=$res-> MoTaSanPham;
        $pro->NgayTao=$res-> NgayTao;
        $pro->Mausac=$res-> Mausac;
        $pro->Size=$res-> Size;
        $pro->save();
       return redirect()->route('admin.index');
    }


    
}

