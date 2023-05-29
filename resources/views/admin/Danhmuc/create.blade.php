@extends('admin.front.app')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                     <h3>Thêm danh mục</h3>
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('admin.Danhmuc.danhmuc')}} " class="btn btn-primry float-end" style="background-color: blue; color: white">Danh sách danh mục</a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.Danhmuc.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    
                    <div class="form-group" >
                        <strong>Tên danh mục</strong>
                        <input type="text" name="TenDanhMuc" class="form-control" id="TenSanPham" ">
                    </div>
                    

                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
