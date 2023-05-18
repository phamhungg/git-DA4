@extends('admin.front.app')
@section('content')
@php
$index=1;
@endphp


<main id="main" class="main">

    <div class="Stylecss">
      <div class="csss">
        <h1> Sản phẩm</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý</li>
            <li class="breadcrumb-item active">Sản phẩm</li>
          </ol>
        </nav>

      </div>
    </div>
    <section class="section">
        <form action="{{route('admin.save',$sp->MaSanPham)}}" method="post">
            @csrf
            <div class="row">
              <div class="form-group" >
                  <strong>Mã danh mục</strong>
                  <input type="text" name="MaDanhMuc" class="form-control" id="MaDanhMuc" value="{{$sp->MaDanhMuc}}">
              </div>
              <div class="form-group" >
                  <strong>Tên sản phẩm</strong>
                  <input type="text" name="TenSanPham" class="form-control" id="TenSanPham" value="{{$sp->TenSanPham}}">
              </div>
              <div class="form-group">
                  <strong>Ảnh</strong>
                  <input type="file" name="AnhDaiDien"class="form-control" id="AnhDaiDien" value="{{$sp->AnhDaiDien}}">
              </div>
              <div class="form-group">
                  <strong>Mô tả</strong>
                  <input type="text-arial" name="MoTaSanPham"class="form-control" id="MoTaSanPham" value="{{$sp->MoTaSanPham}}">
              </div>
              <div class="form-group">
                  <strong>Màu sắc</strong>
                  <input type="text" name="Mausac"class="form-control" id="Mausac" value="{{$sp->Mausac}}">
              </div>
             
              <div class="form-group">
                  <strong>Ngày tạo</strong>
                  <input type="date" name="NgayTao"class="form-control" style="width: 150px" id="NgayTao" value="{{$sp->NgayTao}}">
              </div>
         
            
            
           
          </div>
          <button type="submit" class="btn-btn-primary">Save</button>
            </form>
    </section>
   
      

    
      
      
        

  </main>   
@endsection