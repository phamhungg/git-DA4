<?php

use App\Http\Controllers\BaivietController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\dangnhapController;
use App\Http\Controllers\dondathangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\quantridanhmuc;
use App\Http\Controllers\sanphamcontroller;
use App\Http\Controllers\thanhtoanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/trangchu',[Homecontroller::class,'trangchu'])->name("home.trangchu");
Route::post('/timkiem',[Homecontroller::class,'timkiem'])->name("home.timkiem");
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/sp',[Homecontroller::class,'sanpham'])->name("home.sanpham");
// Route::get('/trangchu', function () {
//     return view('trangchu');
// })->name("home.trangchu");


//dangnhap
Route::get('/dangnhap',[dangnhapController::class,'dangnhap'])->name("home.dangnhap");
Route::post('/dangky',[dangnhapController::class,'postSignin'])->name('home.postSignin');
Route::post('/dangnhaptk',[dangnhapController::class,'postlogin'])->name('home.postlogin');


//dang xuat

Route::get('/logout', [dangnhapController::class,'logout'])->name('logout');

//sanpham
Route::get('/sp',[Homecontroller::class,'sanpham'])->name("home.sanpham");

Route::get("/sanpham/{type}",[Homecontroller::class,'get_loaisp'])->name("home.get_loaisp");
//

Route::get("/chitiet/{id}",[Homecontroller::class,'get_chitiet'])->name("home.get_chitiet");


//baiviet
Route::get("/bv",[Homecontroller::class,'baiviet'])->name("home.baiviet");

Route::get("/bv/{type}",[Homecontroller::class,'get_loaibv'])->name("home.baiviet.get_loaibv");

Route::get("/baiviet/{id}",[Homecontroller::class,'get_chitietbv'])->name("home.baiviet.get_chitietbv");

//


//gio hang
Route::get('/cart',[Homecontroller::class,'cart'] )->name("home.cart");
Route::delete('/delete_order',[CartController::class,'delete_order'] )->name("home.delete_order");
Route::patch('/update_order',[CartController::class,'update_order'] )->name("home.update_order");
Route::get('/add_to_Cart/{id}',[CartController::class,'addTocart'] )->name("home.addTocart");
//


//dathang
Route::get('/thanhtoan',[thanhtoanController::class,'thanhtoan'] )->name("home.thanhtoan");
Route::post('/thanhtoansp',[thanhtoanController::class,'checkout'] )->name("home.checkout");
//phan admin san pham
Route::get("/admin",[sanphamcontroller::class,'index'])->name("admin.index");

Route::get("/admin/cre",[sanphamcontroller::class,'create'])->name("admin.create");

Route::post("/admin/sto",[sanphamcontroller::class,'store'])->name("admin.store");

Route::get("/admin/{id}/del",[sanphamcontroller::class,'destroy'])->name("admin.destroy");

Route::get("/admin/{id}/edit",[sanphamcontroller::class,'edit'])->name("admin.edit");

Route::post("/admin/{id}/save",[sanphamcontroller::class,'save'])->name("admin.save");
//



//admin bai viet//
Route::get("/baiviet",[BaivietController::class,'baiviet'])->name("admin.baiviet.baiviet");

Route::get("/create",[BaivietController::class,'create'])->name("admin.baiviet.create");

Route::post("/baiviet/sto",[BaivietController::class,'store'])->name("admin.baiviet.store");

Route::get("/baiviet/{id}/del",[BaivietController::class,'destroy'])->name("admin.baiviet.destroy");

Route::get("/baiviet/{id}/edit",[BaivietController::class,'edit'])->name("admin.baiviet.edit");

Route::post("/baiviet/{id}/save",[BaivietController::class,'save'])->name("admin.baiviet.save");



//admin danh muc//
Route::get("/danhmuc",[quantridanhmuc::class,'danhmuc'])->name("admin.Danhmuc.danhmuc");

Route::get("/danhmuc/create",[quantridanhmuc::class,'create'])->name("admin.Danhmuc.create");

Route::post("/danhmuc/sto",[quantridanhmuc::class,'store'])->name("admin.Danhmuc.store");

Route::get("/danhmuc/{id}/del",[quantridanhmuc::class,'Destroy'])->name("admin.Danhmuc.destroy");

Route::get("/danhmuc/{id}/edit",[quantridanhmuc::class,'edit'])->name("admin.Danhmuc.edit");

Route::post("/danhmuc/{id}/save",[quantridanhmuc::class,'save'])->name("admin.Danhmuc.save");


//admin đơn hàng//
Route::get("/donhang",[dondathangController::class,'index_admin'])->name("admin.donhang.donhang");
Route::get("/xacthucdonhang",[dondathangController::class,'daxacthuc'])->name("admin.donhang.daxacthuc");
Route::get("/chuathanhtoan",[dondathangController::class,'chuathanhtoan'])->name("admin.donhang.chuathanhtoan");
Route::get("/dathanhtoan",[dondathangController::class,'dathanhtoan'])->name("admin.donhang.dathanhtoan");
Route::get('/confirm-order/{id}',[dondathangController::class,'confirmOrder'])->name('confirmOrder');
Route::get('/confirm-order1/{id}',[dondathangController::class,'confirmOrder1'])->name('confirmOrder1');
Route::get('/confirm-order2/{id}',[dondathangController::class,'confirmOrder2'])->name('confirmOrder2');
Route::get("/donhang/{id}/del",[dondathangController::class,'Destroy'])->name("admin.donhang.Destroy");
// Route::get("/xacthucdonhang/{id}/del",[dondathangController::class,'Destroy1'])->name("admin.baiviet.Destroy1");







//admin chi tiết đơn hàng//

Route::get("/ctdonhang/{id}",[dondathangController::class,'ctdonhang'])->name("admin.Chitietdonhang.Chitietdonhang");