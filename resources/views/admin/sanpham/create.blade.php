@extends('admin.front.app')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                     <h3>Thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('admin.index')}} " class="btn btn-primry float-end" style="background-color: blue; color: white">Danh sách sản phẩm</a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group" >
                        <strong>Mã danh mục</strong>
                        <input type="text" name="MaDanhMuc" class="form-control" id="MaDanhMuc" ">
                    </div>
                    <div class="form-group" >
                        <strong>Tên sản phẩm</strong>
                        <input type="text" name="TenSanPham" class="form-control" id="TenSanPham" ">
                    </div>
                    <div class="form-group">
                        <strong>Ảnh</strong>
                        <input type="file" name="AnhDaiDien"class="form-control" id="AnhDaiDien" ">
                    </div>
                    <div class="form-group">
                        <strong>Mô tả</strong>
                        <input type="text-arial" name="MoTaSanPham"class="form-control" id="MoTaSanPham" ">
                    </div>
                    <div class="form-group">
                        <strong>Màu sắc</strong>
                        <input type="text" name="Mausac"class="form-control" id="Mausac" ">
                    </div>
                   
                    <div class="form-group">
                        <strong>Ngày tạo</strong>
                        <input type="date" name="NgayTao"class="form-control" style="width: 150px" id="NgayTao" ">
                    </div>
               
                  
                  
                 
                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection