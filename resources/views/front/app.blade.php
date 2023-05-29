<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <i class="bi bi-shop-window"></i><title>Ivymoda | Trang chủ</title>

    <!-- Font awesome -->
    <link href="/asset/fronts/dailyShop/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/asset/fronts/dailyShop/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="/asset/fronts/dailyShop/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="/asset/fronts/dailyShop/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="/asset/fronts/dailyShop/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="/asset/fronts/dailyShop/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="/asset/fronts/dailyShop/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="/asset/fronts/dailyShop/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="/asset/fronts/dailyShop/css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->

                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                   
                                    <li><a href="{{ route('home.sanpham') }}">Sản phẩm</a></li>
                                   
                                    <li class="hidden-xs"><a href="{{ route('home.cart') }}">Giỏ hàng</a></li>
                                    <li class="hidden-xs"><a href="{{route('home.thanhtoan')}}">Thanh toán</a></li>
                                    {{-- @if (Auth::check())
                                        <li><a href="" data-toggle="modal" data-target="#login-modal">Chào bạn:{{Auth::user()->Email}}</a></li>   
                                    @else
                                    <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng nhập</a> </li>
                                    @endif   --}}
                                  
                                        {{-- <li><a href="" data-toggle="modal" data-target="#login-modal">Chào bạn:
                                                {{ request()->user()->tenkhachhang }}</a></li>
                                                <a href="{{ route('logout') }}">Đăng xuất</a>
                                    @else --}}
                                        <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng
                                                nhập</a></li>
                                 

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        @include('front.header')
        <!-- / header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    @include('front.menu')
    <!-- / menu -->
    <!-- Start slider -->

    <!-- / slider -->
    <!-- Start Promo section -->
    {{-- <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="asset/fronts/img/promo-banner-1.jpg" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">For Women</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="asset/fronts/img/promo-banner-3.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">For Men</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="asset/fronts/img/promo-banner-2.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Shoes</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="asset/fronts/img/promo-banner-4.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">For Kids</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="asset/fronts/img/promo-banner-5.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
    @yield('content')
    <!-- / Promo section -->


    <!-- Subscribe section -->

    <!-- / Subscribe section -->

    <!-- footer -->
    @include('front.footer')
    <!-- / footer -->

    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Đăng nhập & Đăng kí</h4>
                    <form class="aa-login-form" action="">
                        <label for="">Tài khoản<span>*</span></label>
                        <input type="text" placeholder="Username or email">
                        <label for="">Mật khẩu<span>*</span></label>
                        <input type="password" placeholder="Password">
                        <button class="aa-browse-btn" type="submit">Đăng nhập</button>
                        <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Ghi nhớ
                        </label>
                        <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                        <div class="aa-register-now">
                            Không có tài khoản?<a href="{{ route('home.dangnhap') }}">Đăng kí ngay!</a>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/asset/fronts/dailyShop/js/bootstrap.js"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/jquery.smartmenus.bootstrap.js"></script>
    <!-- To Slider JS -->
    <script src="/asset/fronts/dailyShop/js/sequence.js"></script>
    <script src="/asset/fronts/dailyShop/js/sequence-theme.modern-slide-in.js"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/jquery.simpleLens.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="/asset/fronts/dailyShop/js/nouislider.js"></script>
    <!-- Custom js -->
    <script src="/asset/fronts/dailyShop/js/custom.js"></script>
    @yield('js-main')
</body>

</html>
