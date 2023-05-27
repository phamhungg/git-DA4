<?php

namespace App\Http\Controllers;

use App\Models\chitietdathang;
use App\Models\dathang;
use Illuminate\Http\Request;

class dondathangController extends Controller
{
    
    public function donhang()
    {
        $donhang = dathang::paginate(5);
        return view('admin.donhang.donhang', ['donhang' => $donhang],compact('donhang'))->with('1',(request()->input('page',1)-1)*5);
    }






    public function ctdonhang($id)
    {
        $ctdonhang = chitietdathang::where('MaDonHang',$id)->paginate(5);
        $donhang=dathang::where('MaDonHang',$id)->first();
        return view('admin.Chitietdonhang.Chitietdonhang', ['ctdonhang' => $ctdonhang],compact('ctdonhang','donhang'))->with('1',(request()->input('page',1)-1)*5);
    }
}
