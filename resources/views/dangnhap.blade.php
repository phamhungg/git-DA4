@extends('front.app')
@section('content')

 <section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-6">
                 <div class="aa-myaccount-login">
                    <div>@if (Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>    
                        @endif</div>
                 <h4>Đăng nhập</h4>
                  <form action="{{route('home.postlogin')}}" method="POST"  class="aa-login-form">
                    @csrf
                   <label for="">Tài khoản<span>*</span></label>
                    <input type="text" placeholder="Username or email" name="Email">
                    <label for="">Mật khẩu<span>*</span></label>
                     <input type="password" placeholder="Password" name="Matkhau">
                     <button type="submit" class="aa-browse-btn">Đăng nhập</button>
                     <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme">Ghi nhớ </label>
                     <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                   </form>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="aa-myaccount-register">     
                    <div>@if (count($errors ) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                    @if (Session::has('thanhcong'))
                        <div class="alert alert-success">{{ Session::get('thanhcong') }}</div>
                    @endif
                   </div>            
                  <h4>Đăng kí</h4>
                  <form action="{{route('home.postSignin')}}" method="POST" class="aa-login-form">
                    @csrf
                    <label for="">Họ tên<span>*</span></label>
                    <input type="text" placeholder="Họ tên" name="TenKhachHang">
                    <label for="">Sdt<span>*</span></label>
                    <input type="text" placeholder="Sdt" name="SoDienThoai">
                    <label for="">Địa chỉ<span>*</span></label>
                    <input type="text" placeholder="Địa chỉ" name="DiaChi">
                    <label for="">Email<span>*</span></label>
                    <input type="text" placeholder="Email" name="Email">
                     <label for="">Mật khẩu<span>*</span></label>
                     <input type="password" placeholder="Password" name="Matkhau">
                     <label for="">Nhập lại mật khẩu<span>*</span></label>
                     <input type="text" placeholder="Password" name="Matkhaumoi">
                     <button type="submit" class="aa-browse-btn">Đăng kí</button>                    
                   </form>
                 </div>
               </div>
             </div>          
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection