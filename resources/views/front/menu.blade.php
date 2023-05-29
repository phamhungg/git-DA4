<section id="menu" style="background-color: #f8f8f8">
    <div class="container">
      <div class="menu-area" >
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{route("home.trangchu")}}">Trang chủ</a></li>
              <li><a href="#">Danh mục <span class="caret"></span></a>
                 <ul class="dropdown-menu">    
                @foreach ($menu as $me)
                <li><a href=" {{route('home.get_loaisp',$me->MaDanhMuc)}}">{{$me->TenDanhMuc}}</a></li>
                @endforeach
                        {{-- {{route('home.loaisanpham',['slug'=>$menu->slug])}}   --}}
                 
                  
               </ul>
              </li>
              
             <li><a href="{{route('home.baiviet')}}">Blogs <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  @foreach ($baiviet as $me)
                  <li>
                    <a href="{{route('home.baiviet.get_loaibv',$me->Maloaibaiviet)}}">{{$me->Tenloaibaiviet}}
                    </a></li>
              @endforeach  
                               
                </ul>
              </li>
             
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>