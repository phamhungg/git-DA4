<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\khachhang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dangnhapController extends Controller
{

    public function dangnhap(){
        
        return view('dangnhap');
    }
    public function postSignin(Request $req)
    {
       $this->validate($req,
        [
            'Email'=>'required|Email|unique:khachhang,Email',
            'Matkhau'=>'required|min:6|max:20',
            'TenKhachHang'=>'required',
            'Matkhaumoi'=>'required|same:Matkhau'
        ],
       [
        'Email.required'=>'Vui lòng nhập Email',
        'TenKhachHang.required'=>'Vui lòng nhập tên',
        'Email.Email'=>'Không đúng định dạng Email',
        'Email.unique'=>'Email đã có người sử dụng',
        'Matkhau.required'=>'Vui lòng nhập mật khẩu',
        'Matkhaumoi.same'=>'Mật khẩu không trùng khớp',
        'Matkhau.min'=>'Mật khẩu ít nhất 6 ký tự'
       ]);
       $khachhang=new khachhang();
       $khachhang->TenKhachHang=$req->TenKhachHang;
       $khachhang->Email=$req->Email;
       $khachhang->DiaChi=$req->DiaChi;
       $khachhang->SoDienThoai=$req->SoDienThoai;
       $khachhang->Matkhau =$req->Matkhau;
       $khachhang->save();
       return redirect()->back()->with('thanhcong','Đã tạo tài khoản thành công');
    }
    public function postlogin(Request $req)
    {
        $khachhang = khachhang::where('Email', '=', $req->Email)->first();
        $this->validate($req,
        [
            'Email'=>'required|Email',
            'Matkhau'=>'required|min:6|max:20'
        ],
        [
            'Email.required'=>'Vui lòng nhập Email',
            'Email.Email'=>'Không đúng định dạng Email',
            'Matkhau.required'=>'Vui lòng nhập mật khẩu',
            'Matkhau.min'=>'Mật khẩu ít nhất 6 ký tự',
            'Matkhau.max'=>'Mật khẩu nhiều nhất 20 ký tự'
        ]);
        // $khachhang=array('Email'=>$req->Email,'Matkhau'=>$req->Matkhau);
        if($req->Matkhau == $khachhang->Matkhau){
            return redirect()->route('home.trangchu')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng Nhập Không Thành Công']);
        }
    }
    public function logout()
{
    Auth::logout();
    return redirect()->route('dangnhap');
}
}
