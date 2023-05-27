<?php

namespace App\Http\Controllers;
use App\Models\Giamodel;
use App\Models\Productmodels;
use Illuminate\Http\Request;

class CartController extends Controller
{
   


    public function addTocart($id)
    {

        $sanpham = Productmodels::findOrFail($id);
        $order = session()->get('order', []);
        if (isset($order[$id])) {
            $order[$id]['soluong']++;
        } else {
            $order[$id] = [
                "MaSanPham" => $sanpham->MaSanPham,
                "TenSanPham" => $sanpham->TenSanPham,
                "AnhDaiDien" => $sanpham->AnhDaiDien,
                "Giaban" => $sanpham->Giaban,
                "soluong" => 1
            ];
        }
        session()->put('order', $order);

        return redirect()->back()->with('success', 'Thêm Thành công!');
    }

    public function update_order(Request $req)
    {
        if ($req->id && $req->soluong) {
            $order = session()->get('order');
            $order[$req->id]["soluong"] = $req->soluong;
            session()->put('order', $order);
            session()->flash('success', 'Đã cập nhập thành công!');
        }
    }

    public function delete_order(Request $req)
    {
        if ($req->id) {
            $order = session()->get('order');
            if (isset($order[$req->id])) {
                unset($order[$req->id]);
                session()->put('order', $order);
            }
            session()->flash('success', 'Đã xoá thành công !');
        }
    }
}
