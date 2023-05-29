@extends('admin.front.app')
@section('content')
@php
$index=1;
@endphp
<main id="main" class="main">

    <div class="Stylecss">
      <div class="csss">
        <h1> Danh mục</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý</li>
            <li class="breadcrumb-item active">Danh mục</li>
          </ol>
        </nav>

      </div>
    </div>
    {{-- <section class="section">
      <div class="khung">
        <div class="khung-con">
          <form
            style=" background-color: rgb(255, 255, 255); padding: 20px; border-bottom: 1px solid rgb(172, 169, 169);">
            <div class="div-chung">
              <div class="khung-nd">
                <label for="inputText" class="dong">Tên sản phẩm</label>
                <div class="khung-nd-con">
                  <input type="text" class="form-control" ng-model="TenSanPham">
                </div>
              </div>


              <div class="khung-nd">
                <label for="inputText" class="dong">Mô tả</label>
                <div class="khung-nd-con">
                  <input type="text" class="form-control" ng-model="MoTaSanPham">
                </div>

              </div>

              <div class="khung-nd">
                <label for="inputText" class="dong"> Loại sp</label>
                <div class="khung-nd-con">
                  <input type="text" class="form-control" ng-model="MaDanhMuc">
                </div>

              </div>
              <div class="khung-nd">
                <label for="inputText" class="dong">Nhà sản xuất</label>
                <div class="khung-nd-con">
                  <input type="text" class="form-control" ng-model="MaNhaSanXuat">
                </div>

              </div>
              
              
              <div class="khung-nd">
                <label for="inputText" class="dong"> Ngày tạo</label>
                <div class="khung-nd-con" style="margin-top: 10px;">
                  <input type="datetime-local" ng-model="NgayTao">
                </div>
              </div>
              <!-- <div class="khung-nd">
                                      <label for="inputText" class="dong">Nội dung</label>
                                      <div class="khung-nd-con">
                                          <input type="text" class="form-control "ng-model="Detail">
                                      </div>

                                  </div>                                   -->
            </div>
            <div class="sub">

              <button class="btn btn-primary" ng-click="save()">Hoàn tất</button>

            </div>
          </form>
        </div>

      </div>
    </section> --}}
    {{-- <form method="get" action="{{route('admin.index')}}">
      
      <div class="form-group">
          <label for="name">Tên sản phẩm:</label>
          <input type="text" name="TenSanPham" id="TenSanPham" class="form-control" >
          
      </div>
      <div class="form-group">
          <label for="AnhDaiDien">Ảnh:</label>
          <input type="file" name="AnhDaiDien" id="AnhDaiDien" class="form-control">
          
      </div>
      <div class="form-group">
          <label for="MoTaSanPham">Mô tả:</label>
          <textarea name="MoTaSanPham" id="MoTaSanPham" class="form-control"></textarea>
          
      </div>
      <div class="form-group">
          <label for="Mausac">Màu sắc:</label>
          <input type="text" name="Mausac" id="Mausac" class="form-control" >
          
      </div>
      <div class="form-group">
          <label for="Size">Size:</label>
          <input type="text" name="Size" id="Size" class="form-control">
          
      </div>
      <div class="form-group">
        <label for="NgayTao">Ngày tạo:</label>
        <input type="date" name="NgayTao" id="NgayTao" class="form-control" >
        
    </div>
      <button type="submit" class="btn btn-primary">Add Product</button>
  </form> --}}

    
    <div class="card shadow mb-4" style="margin-top: 20px;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý sản phẩm</h6>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        
        <a href="{{route('admin.Danhmuc.create')}}" style="background-color: blue; color: white;margin-left: 20px; padding: 5px; border-radius: 5px">Thêm mới</a>
        <form  action=""class="form-inline" style="display: flex; width: 300px;">
          <div class="form-group">
              <input name="key" class="form-control" placeholder="Tìm kiếm..." >
          </div>
          <button type="submit" class="btn btn-primary " style="margin-left: 10px;">Submit</button>
        </form>
    </div>
    <div style="margin-left: 2%;margin-top: 1%;" class="select">
        <select ng-model="pageSize" ng-change="getPage(1)" class="limitShow">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        
    </div>
      <div class="card-body">
        @if(Session::has('thongbao'))
        <div class="alert alert-success">
          {{Session::get('thongbao')}}
        </div>
        @endif
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                
                <th>
                  
                </th>
                <th>
                  
                </th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($danhmuc as $sp)
              <tr>
                <td>{{$index++}}</td>
                
                
                <td>{{$sp->TenDanhMuc}}</td>
                
                {{-- <td>{{$sp->Size}}</td> --}}
                
               <td> <a  href="{{route('admin.Danhmuc.edit',$sp->MaDanhMuc)}}"><i class="bi bi-pencil-square" style="color: rgb(0, 255, 174)"></i></a>
               <td> <a onclick="return confirm('ban co muon xoa khong');"  href="{{route('admin.Danhmuc.destroy',$sp->MaDanhMuc)}}"><i class="bi bi-trash" style="color: red"></i></a></td>
                
              </tr>
               
                @endforeach
                  
                
              </tr>
            </tbody>
          </table>
          {{$danhmuc->appends(request()->all())->links()}}
        </div>
      </div>




      
      
      
@endsection