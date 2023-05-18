<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\sanphamcontroller;
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
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/sp',[Homecontroller::class,'sanpham'])->name("home.sanpham");
// Route::get('/trangchu', function () {
//     return view('trangchu');
// })->name("home.trangchu");
Route::get('/sp',[Homecontroller::class,'sanpham'])->name("home.sanpham");


Route::get("/sanpham/{type}",[Homecontroller::class,'get_loaisp'])->name("home.get_loaisp");

Route::get("/chitiet/{id}",[Homecontroller::class,'get_chitiet'])->name("home.get_chitiet");

Route::get('/chitiet/cate/{id}', [Homecontroller::class, 'show'])->name("home.show");

Route::get('/Cart', function () {
    return view('/cart');
})->name("home.cart");

Route::get("/admin",[sanphamcontroller::class,'index'])->name("admin.index");

Route::get("/admin/cre",[sanphamcontroller::class,'create'])->name("admin.create");



Route::post("/admin/sto",[sanphamcontroller::class,'store'])->name("admin.store");

Route::get("/admin/{id}/del",[sanphamcontroller::class,'destroy'])->name("admin.destroy");

Route::get("/admin/{id}/edit",[sanphamcontroller::class,'edit'])->name("admin.edit");

Route::post("/admin/{id}/save",[sanphamcontroller::class,'save'])->name("admin.save");



Route::get('/sanpham/{id}', [Homecontroller::class, 'show']);

