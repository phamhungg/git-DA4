<?php

namespace App\Http\Controllers;

use App\Models\chitietdathang;
use App\Models\dathang;
use Illuminate\Http\Request;

class dondathangController extends Controller
{

    // public function donhang()
    // {
    //     $donhang = dathang::paginate(5);
    //     return view('admin.donhang.donhang', ['donhang' => $donhang],compact('donhang'))->with('1',(request()->input('page',1)-1)*5);
    // }

    public function index_admin()
    {
        $donhang = dathang::where('TrangThaiDonHang', 0)->paginate(5);
        return view('admin.Donhang.Donhang', ['donhang' => $donhang])->with('1', (request()->input('page', 1) - 1) * 5);
    }
    public function daxacthuc()
    {
        $xacthuc = dathang::where('TrangThaiDonHang', 1)->paginate(5);
        return view('admin.Donhang.daxacthuc', ['xacthuc' => $xacthuc])->with('1', (request()->input('page', 1) - 1) * 5);
    }
    public function chuathanhtoan()
    {
        $chuatt = dathang::where('TrangThaiDonHang', 2)->paginate(5);
        return view('admin.Donhang.chuathanhtoan', ['chuatt' => $chuatt])->with('1', (request()->input('page', 1) - 1) * 5);
    }
    public function dathanhtoan()
    {
        $datt = dathang::where('TrangThaiDonHang', 3)->paginate(5);
        return view('admin.Donhang.dathanhtoan', ['datt' => $datt])->with('1', (request()->input('page', 1) - 1) * 5);
    }
    public function confirmOrder($id)
    {
        $donhang = dathang::find($id);

        if ($donhang) {
            $donhang->TrangThaiDonHang = 1; // Đặt trạng thái đơn hàng thành "Đã xác thực"
            $donhang->save();
        }

        return redirect()->back();
    }

    public function confirmOrder1($id)
    {
        $chuatt = dathang::find($id);
        if ($chuatt) {
            $chuatt->TrangThaiDonHang = 2; // Đặt trạng thái đơn hàng thành "Chưa thanh toán"
            $chuatt->save();
        }
        return redirect()->back();
    }
    public function confirmOrder2($id)
    {
        $datt = dathang::find($id);
        if ($datt) {
            $datt->TrangThaiDonHang = 3; // Đặt trạng thái đơn hàng thành "Đã thanh toán"
            $datt->save();
        }

        return redirect()->back();
    }

    public function ctdonhang($id)
    {
        $ctdonhang = chitietdathang::where('MaDonHang', $id)->paginate(5);
        $donhang = dathang::where('MaDonHang', $id)->first();
        return view('admin.Chitietdonhang.Chitietdonhang', ['ctdonhang' => $ctdonhang], compact('ctdonhang', 'donhang'))->with('1', (request()->input('page', 1) - 1) * 5);
    }
    public function Destroy($id)
    {
            // Tìm đơn hàng cần xoá
            $order = dathang::findOrFail($id);
            // Xoá chi tiết đơn hàng
            $orderDetails = chitietdathang::where('MaDonHang', $order->id)->get();
            foreach ($orderDetails as $orderDetail) {
                $orderDetail->delete();
            }
            // Xoá đơn hàng
            $order->delete();
            // Chuyển hướng hoặc trả về thông báo thành công
            return view('admin.Donhang.Donhang');
    }
    
}
