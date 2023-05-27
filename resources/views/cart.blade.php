@extends('front.app')
@section('content')
    <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <div style="background-color: blanchedalmond; height: 300px"></div>
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>GIỎ HÀNG</h2>
         <ol class="breadcrumb">
           <li><a href="{{route('home.trangchu')}}">Trang chủ</a></li>                   
           <li class="active">Giỏ hàng</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Sản phẩm</th>
                      <th scope="col">Hình Ảnh</th>
                      <th scope="col">Giá</th>
                      <th scope="col">Số Lượng</th>
                      <th scope="col">Tổng</th>
                      <th scope="col">Tác Vụ</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @php $stt = 1 @endphp
                      @php $total = 0 @endphp
                      @if(session('order'))
                      @foreach(session('order') as $id => $details)
                        @php 
                        // $sanpham = Productmodels::where('MaGiaSanPham', $details['MaGiaSanPham'])->first();
                        // $gia = $sanpham->giaban->Gia;
                      
                        $total +=   $details['Giaban'] *$details['soluong'] 
                        @endphp
                        <tr data-id="{{ $id }}">
                          <td scope="row">{{$stt++}}</td>
                          
                         
                          <td><h6 class="nomargin">{{ $details['TenSanPham'] }}</h6></td>
                          <td><img src="/asset/fronts/dailyShop/img/women/{{ $details['AnhDaiDien']}}" width="50" height="50" class="img-responsive"/></td>
                          <td >{{number_format ($details['Giaban'])}} đ</td>
                          
                          <td style="width:100px;">
                            <input type="number" value="{{ $details['soluong'] }}" class="form-control soluong order_update" min="1" />
                          </td>
                          
                          <td class="text-center">{{ number_format( $details['Giaban']* $details['soluong'])}} đ</td>
                          <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm order_delete"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="11" class="text-right"><h3><strong>Tổng tiền: {{number_format($total )}}đ</strong></h3></td>
                      </tr>
                      <tr>
                        <td colspan="11" class="text-right">
                          <a href="{{ url('/trangchu') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Tiếp tục thêm</a>
                          {{-- <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button> --}}
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                 </div>
              </form>
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                      <td>$450</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>$450</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{route('home.thanhtoan')}}" class="aa-cart-view-btn">Proced to Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- / Cart view section -->
  @section('js-main')
      <script>
    $(".order_update").change(function (e) {
        e.preventDefault();
        var ele = $(this);
			$.ajax({
				url: '{{route('home.update_order')}}',
				method: "patch",
				data: {
					_token: '{{ csrf_token() }}', 
					id: ele.parents("tr").attr("data-id"), 
					soluong: ele.parents("tr").find(".soluong").val()
				},
				success: function (response) {
				window.location.reload();
				}
			});
		});

      $(".order_delete").click(function (e) {
			e.preventDefault();
			var ele = $(this);
			if(confirm("Bạn có chắc chắn muốn xoá không ?")) {
				$.ajax({
					url: '{{ route('home.delete_order') }}',
					method: "DELETE",
					data: {
						_token: '{{ csrf_token() }}', 
						id: ele.parents("tr").attr("data-id")
					},
					success: function (response) {
						window.location.reload();
					}
				});
			}
	  });
      </script>
  @endsection
@endsection