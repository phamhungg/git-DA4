<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\chitietdathang;
use App\Models\dathang;
use App\Models\khachhang;
use Illuminate\Http\Request;

class thanhtoanController extends Controller
{
    public function checkout(Request $request){
        // dd($request);
        $kh = new khachhang();
        $kh->Tenkhachhang = $request->input('Tenkhachhang');
        $kh->email  = $request->input('email');
        $kh->diachi  = $request->input('diachi');
        $kh->SoDienThoai  = $request->input('SoDienThoai');
        $kh->save();
        $post = new dathang();
        $post->Makhachhang = $kh->Makhachhang; 
        $post->	NgayDat  = date('Y-m-d H:i:s');
        $post->	Ngaygiao  = Carbon::now()->addDay(10)->toDateString();
        $post->	Tongtien  = $request->input('Tongtien');
        $post->Soluong = $request->input('Soluong');
        $post->TrangThaiDonHang = $request->input('TrangThaiDonHang');
        $post->save();
        $order = session()->get('order',[]);
        if($order != null){
            foreach($order as $item)
            {
                // dd($order);
                $orderdetail = new chitietdathang();
                $orderdetail->MaDonHang = $post-> MaDonHang;
                $orderdetail-> MaSanPham = $item['MaSanPham'];
                $orderdetail-> TenSanPham = $item['TenSanPham'];
                $orderdetail-> hinhanh = $item['AnhDaiDien'];
                $orderdetail->GiaMua = $item['Giaban'];
                $orderdetail->SoLuong = $item['soluong'];
                $orderdetail->save();
                $request->session()->forget('order');
                
            }   
        }
        return redirect()->route('home.thanhtoan')->with('dathangthanhcong','Đặt hàng thành công!');

    }
    public function thanhtoan(){
        return view('thanhtoan');
    }
}
