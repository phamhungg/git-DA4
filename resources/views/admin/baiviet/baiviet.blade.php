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
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý</li>
            <li class="breadcrumb-item active">Sản phẩm</li>
          </ol>
        </nav>

      </div>
    </div>
    
    
    <div class="card shadow mb-4" style="margin-top: 20px;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý sản phẩm</h6>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        
        <a href="{{route('admin.baiviet.create')}}" style="background-color: blue; color: white;margin-left: 20px; padding: 5px; border-radius: 5px">Thêm mới</a>
        
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
                <th>Mã loại</th>
                <th>Ảnh</th>
                <th>Tên bài viết</th>
                {{-- <th>Mô tả</th> --}}
                
                <th>
                  NgayTao
                </th>
                <th>
                  
                </th>
                <th>
                  
                </th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($baiviet as $sp)
              <tr>
                <td>{{$index++}}</td>
                <td>{{$sp->Maloai}}</td>
                <td><img src ='/asset/fronts/dailyShop/img/Baiviet/{{$sp->Anh}}' style="width: 100px"> </td>
                <td>{{$sp->Tenbaivet}}</td>
                {{-- <td>{!!$sp->Chitiet!!}</td> --}}
            
                <td>{{$sp->ngaytao}}</td>
                {{-- <td>{{$sp->Size}}</td> --}}
                
               <td> <a  href="{{route('admin.baiviet.edit',$sp->Mabaiviet)}}"><i class="bi bi-pencil-square" style="color: rgb(0, 255, 174)"></i></a>
               <td> <a onclick="return confirm('ban co muon xoa khong');"  href="{{route('admin.baiviet.destroy',$sp->Mabaiviet)}}"><i class="bi bi-trash" style="color: red"></i></a></td>
                
              </tr>
               
                @endforeach
                  
               
              
            </tbody>
          </table>
          {{$baiviet->links()}}
        </div>
      </div>
@endsection