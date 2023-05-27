@extends('admin.front.app')
@section('content')
@php
$index=1;
@endphp
<main id="main" class="main">

    <div class="Stylecss">
      <div class="csss">
        <h1>Chi tiết đơn hàng</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Đơn đặt hàng</li>
            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
          </ol>
        </nav>

      </div>
    </div>

    <div class="card shadow mb-4" style="margin-top: 20px;">
      <div class="card-header py-3">
       <a href="{{route('admin.donhang.donhang')}}"><h6 class="m-0 font-weight-bold text-primary">Quản lý  đơn hàng</h6></a> 
      </div>
      <div class="d-flex align-items-center justify-content-between">
 
    </div>
   
      <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Mã đơn hàng</th>
              <th>Tên khách hàng</th>
              <th>Địa chỉ</th>
              <th>Ngày mua</th>
              <th>Ngày giao(Dự đoán)</th>
              <th>Sdt</th>
              
             
             
            </tr>
          </thead>
          <tbody>
             
            <tr>
             
              
              <td>{{ $donhang->MaDonHang}} </td>
              <td>{{ $donhang->donhang_khachhang->TenKhachHang}} </td>
              <td>{{ $donhang->donhang_khachhang->DiaChi}}</td>
              
              <td>{{ $donhang->NgayDat}}</td>
              <td>{{ $donhang->Ngaygiao}}</td>
              <td>{{ $donhang->donhang_khachhang->SoDienThoai}} </td>
              
              
             
            </tr>
           
            
          </tbody>
        </table>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã chi tiết đơn hàng</th>
                <th>Tên Sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá mua</th>
                <th>
                  Tổng tiền
                </th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($ctdonhang as $sp)
              <tr>
                <td>{{$index++}}</td>
                
                <td>{{$sp->MaChiTietDonHang}} </td>
                <td>{{$sp->TenSanPham}} </td>
                <td><img src ='/asset/fronts/dailyShop/img/women/{{$sp->hinhanh}}' style="width: 100px"></td>
                
                <td>{{$sp->SoLuong}}</td>
                <td>{{number_format ($sp->GiaMua)}} <span>đ</span> </td>
                <td>
                   {{number_format($sp->SoLuong * $sp->GiaMua)}} <span>đ</span>
                </td>
                
             
              </tr>
                @endforeach
              
            </tbody>
          </table>
          {{$ctdonhang->links()}}
        </div>
      </div>
@endsection