<?php

use App\Http\Controllers\BaivietController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\dangnhapController;
use App\Http\Controllers\dondathangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
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

Route::get("/baiviet/cre",[BaivietController::class,'create'])->name("admin.baiviet.create");

Route::post("/baiviet/sto",[BaivietController::class,'store'])->name("admin.baiviet.store");

Route::get("/baiviet/{id}/del",[BaivietController::class,'destroy'])->name("admin.baiviet.destroy");

Route::get("/baiviet/{id}/edit",[BaivietController::class,'edit'])->name("admin.baiviet.edit");

Route::post("/baiviet/{id}/save",[BaivietController::class,'save'])->name("admin.baiviet.save");

//



//admin đơn hàng//
Route::get("/donhang",[dondathangController::class,'donhang'])->name("admin.donhang.donhang");






//admin chi tiết đơn hàng//

Route::get("/ctdonhang/{id}",[dondathangController::class,'ctdonhang'])->name("admin.Chitietdonhang.Chitietdonhang");