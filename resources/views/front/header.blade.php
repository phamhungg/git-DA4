<div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!-- logo  -->
            <div class="aa-logo">
              <!-- Text based logo -->
              <a href="{{route('home.trangchu')}}">
                <span class="fa fa-shopping-cart"></span>
                <p>Ivy<strong>Moda</strong> <span>Thiên đường mua sắm cho bạn</span></p>
              </a>
              <!-- img based logo -->
              <!-- <a href="index.html"><img src="/asset/fronts/dailyShop/img/logo.jpg" alt="logo img"></a> -->
            </div>
            <!-- / logo  -->
             <!-- cart box -->
            <div class="aa-cartbox">
              <a class="aa-cart-link" href="{{route('home.cart')}}">
                <span style="color: rgb(217, 42, 42)" class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">GIỎ HÀNG</span>
               
                <span class="aa-cart-notify">{{ session('order') ? count(session('order')) : 0 }}</span>
              </a>
              {{-- <div class="aa-cartbox-summary">
                <ul>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="/asset/fronts/dailyShop/img/woman-small-2.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="/asset/fronts/dailyShop/img/woman-small-1.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>                    
                  <li>
                    <span class="aa-cartbox-total-title">
                      Total
                    </span>
                    <span class="aa-cartbox-total-price">
                      $500
                    </span>
                  </li>
                </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
              </div> --}}
            </div>
            <!-- / cart box -->
            <!-- search box -->
            <div class="aa-search-box">
              <form action="{{route('home.timkiem')}}" method="POST">
                @csrf
                <input type="text" name="tukhoa_1" id="tukhoa_1" placeholder="Tìm kiếm">
                <button type="submit" name="search"><span class="fa fa-search"></span></button>
              </form>
            </div>
            <!-- / search box -->             
          </div>
        </div>
      </div>
    </div>
  </div>