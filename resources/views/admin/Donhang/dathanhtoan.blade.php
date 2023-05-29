@extends('admin.front.app')
@section('content')
@php
$index=1;
@endphp
<main id="main" class="main">

    <div class="Stylecss">
      <div class="csss">
        <h1>Đơn hàng</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Đơn đặt hàng</li>
            <li class="breadcrumb-item active">Đơn hàng</li>
          </ol>
        </nav>

      </div>
    </div>

    <div class="card shadow mb-4" style="margin-top: 20px;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quản lý Đơn hàng</h6>
      </div>
      <div class="d-flex align-items-center justify-content-between">
 
    </div>
   
      <div class="card-body">
       
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Ngày đặt</th>
                <th>Ngày giao</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>
                  Trạng thái đơn hàng
                </th>
                
                
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datt as $sp)
              <tr>
                <td>{{$index++}}</td>
                
                <td>
                {{$sp->donhang_khachhang->TenKhachHang}}
                </td>
                <td>{{$sp->NgayDat}}</td>
                <td>{{$sp->Ngaygiao}}</td>
                <td>{{$sp->Soluong}}</td>
                <td>{{number_format($sp->Tongtien)}}đ</td>
              <td>
                @if ($sp->TrangThaiDonHang == 0)
                Chưa xác thực
               @elseif ($sp->TrangThaiDonHang == 1)
                Đã xác thực
               @elseif ($sp->TrangThaiDonHang == 2)
                Chờ thanh toán
               @elseif ($sp->TrangThaiDonHang == 3)
                Đã thanh toán
               @endif
                @if ($sp->TrangThaiDonHang == 0)
                <a style="background-color: rgb(132, 132, 85);color: aliceblue;margin-left: 10px;margin-right: -50px;padding: 3px;border-radius: 5px" href="{{ route('confirmOrder', ['id' =>$sp->MaDonHang]) }}">Xác nhận</a>
            @endif
          </td>
                
               <td> <a  href="{{route('admin.Chitietdonhang.Chitietdonhang',$sp->MaDonHang)}}"><i class="bi bi-eye-fill" style="color: rgb(181, 13, 223)"></i></a>
              </tr>
                @endforeach
              
            </tbody>
          </table>
          {{$datt->links()}}
        </div>
      </div>




   
      
      
@endsection