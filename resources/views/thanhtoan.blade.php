@extends('front.app')

@section('content')
{{-- <div class="container">
  @if(session('dathangthanhcong'))
  <div class="alert alert-success my-4" style="max-width: 500px; margin: 0 auto;">
      {{ session('dathangthanhcong') }}
  </div>
@endif
  <div class="form-section" style=" margin-top: 230px">
      <form action="{{ route('home.checkout') }}" method="post">
          @csrf
          <div class="form-group">
              <label for="hoTen">Họ và tên:</label>
              <input class="The"  type="text" id="hoTen" name="Tenkhachhang" required>
          </div>
          <div class="form-group">
            <label for="hoTen">Email(nếu có):</label>
            <input class="The"  type="text" id="hoTen" name="Tenkhachhang" required>
        </div>
        <div class="form-group">
            <label for="hoTen">Họ và tên:</label>
            <input class="The"  type="text" id="hoTen" name="Tenkhachhang" required>
        </div>
        <div class="form-group">
            <label for="hoTen">Họ và tên:</label>
            <input class="The"  type="text" id="hoTen" name="Tenkhachhang" required>
        </div>
          <div class="form-group">
              <label for="soDienThoai">Số điện thoại:</label>
              <input  style="width: 220px"  type="tel" id="soDienThoai" name="sdt" required>
          </div>
          <div class="form-group">
              <label for="soDienThoai">Số lượng:</label>
              <input  class="The"  type="tel" id="soluong" name="soluong" required>
          </div>
          <div class="form-group">
              <label for="thanhToan">Hình thức thanh toán:</label>
              <select id="thanhToan" name="thanhToan" required>
                  <option value="1">Tiền mặt</option>
                  <option value="2">Chuyển khoản</option>
              </select>
          </div>
          <button style="padding: 3px;background-color: brown;color: aliceblue;border: 0px;border-radius: 5px" type="submit">Hoàn tất thanh toán</button>
      </form>
  </div>
</div>

<div class="container">
  <div class="col-md-4">
      <div class="checkout-right">
          
          <div class="aa-order-summary-area">
              <table class="table table-responsive">
                  <thead>
                      <tr>
                          <th>Sản phẩm</th>
                          <th>Giá</th>
                      </tr>
                  </thead>
                  <tbody>
                      @php $total = 0 @endphp
                      @if(session('order'))
                          @foreach(session('order') as $id => $details)
                              @php
                                  // $sanpham = Productmodels::where('MaGiaSanPham', $details['MaGiaSanPham'])->first();
                                  // $gia = $sanpham->giaban->Gia;
                                  $total += $details['Giaban'] * $details['soluong'];
                              @endphp
                              <tr>
                                  <td>
                                      <h6 class="nomargin">{{ $details['TenSanPham'] }}<strong> x{{ $details['soluong'] }}</strong></h6>
                                  </td>
                                  <td>{{ number_format($details['Giaban']) }} đ</td>
                              </tr>
                          @endforeach
                      @endif
                      <tr>
                          <td colspan="2" class="text-right">
                              <h3><strong>Tổng tiền: {{ number_format($total) }}đ</strong></h3>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div> --}}



<!-- catg header banner section -->
<section id="aa-catg-head-banner">
   <div style="background-color: blanchedalmond;height: 300px"></div>
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>THANH TOÁN</h2>
        <ol class="breadcrumb">
          <li><a href="{{route('home.trangchu')}}">Trang chủ</a></li>                   
          <li class="active">Thanh toán</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
{{-- 
  @if(session('dathangthanhcong'))
  <div class="alert alert-success my-4" style="max-width: 500px; margin: 0 auto;">
      {{ session('dathangthanhcong') }}
  </div>
@endif --}}
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
        
@php

    $soLuongSanPham = 0;

    $tongtien = 0;

    if (session('order')) {

        foreach (session('order') as $details) {

            $soLuongSanPham += $details['soluong'];

            $tongtien += $details['soluong'] * $details['Giaban'];

        }

    }

@endphp
            <form action="{{ route('home.checkout') }}" method="post">
                @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Thanh toán
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                   
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                
                                <input  type="text" id="hoTen" placeholder="Họ tên" name="Tenkhachhang" required>
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                
                                <input  type="email"  placeholder="Email" id="email" name="email" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input  type="text"  placeholder="Sdt" id="Sdt" name="SoDienThoai" required>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input  type="text"  placeholder="Địa chỉ" id="diachi" name="diachi" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input  type="text"  placeholder="Ghi chú" id="ghichu" name="ghichu" required>
                                </div>
                              </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill fixed-div">
                              
                                <input  type="text" value="{{ $soLuongSanPham }}" name="Soluong" readonly>
                              </div>                             
                            </div> 
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill fixed-div">
                              
                                <input  type="text" value="{{ $tongtien }}" name="Tongtien" readonly>
                              </div>                             
                            </div>                           
                          </div>   
                          <button style="padding: 3px;background-color: brown;color: aliceblue;border: 0px;border-radius: 5px" type="submit">Hoàn tất thanh toán</button>
 
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @if(session('order'))
                                @foreach(session('order') as $id => $details)
                                    @php
                                        // $sanpham = Productmodels::where('MaGiaSanPham', $details['MaGiaSanPham'])->first();
                                        // $gia = $sanpham->giaban->Gia;
                                        $total += $details['Giaban'] * $details['soluong'];
                                    @endphp
                                    <tr>
                                        <td>
                                            <h6 class="nomargin">{{ $details['TenSanPham'] }}<strong> x{{ $details['soluong'] }}</strong></h6>
                                        </td>
                                        <td>{{ number_format($details['Giaban']) }} đ</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td colspan="2" class="text-right">
                                    <h3><strong>Tổng tiền: {{ number_format($total) }}đ</strong></h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                    <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                                 
                  </div>
                </div>
              </div>
            </div>
          
         </div>
        </form>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
@endsection