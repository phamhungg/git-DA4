@extends('admin.front.app')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                     <h3>Thêm bài viết</h3>
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('admin.baiviet.baiviet')}} " class="btn btn-primry float-end" style="background-color: blue; color: white">Danh sách sản phẩm</a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.baiviet.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <strong>Loại bài viết</strong>
                        <input type="text" name="Maloai" class="form-control" id="Maloai" ">
                        {{-- <form action="" class="form-control"  type="text-arial">
                            <select name="" id="">
                              <option value="1" name="Maloai" selected="1">Tin tức thời trang</option>
                              <option value="2" name="Maloai">Bộ sưu tập thời trang </option>
                              <option value="3" name="Maloai"> </option>
                              <option value="4" name="Maloai"> </option>
                           
                            </select>
                          </form> --}}
                    </div>
                    <div class="form-group" >
                        <strong>Tên bài viết</strong>
                        <input type="text" name="Tenbaiviet" class="form-control" id="TenSanPham" ">
                    </div>
                    <div class="form-group">
                        <strong>Ảnh</strong>
                        <input type="file" name="Anh"class="form-control" id="AnhDaiDien" ">
                    </div>
                    <div class="form-group">
                        <strong>Mô tả</strong>
                        
                        <textarea id="ck" name="Chitiet" cols="30" rows="10"></textarea>
                    </div>
                    
                   
                    <div class="form-group">
                        <strong>Ngày tạo</strong>
                        <input type="date" name="Ngaytao"class="form-control" style="width: 150px" id="NgayTao" ">
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
@section('js-custom')
    <script>
        CKEDITOR.replace('ck')
    </script>
@endsection