@extends('front.app')
@section('content')
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <div style="background-color: bisque;height: 300px"></div>
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>TIN TỨC</h2>
         <ol class="breadcrumb">
           <li><a href="{{route('home.trangchu')}}">Trang chủ</a></li>         
           <li class="active">Tin tức thời trang</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
   <!-- Blog Archive -->
   <section id="aa-blog-archive">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-blog-archive-area">
             <div class="row">
               <div class="col-md-9">
                 <div class="aa-blog-content">
                   <div class="row" style="width: 1200px;">
                    @foreach ( $bv_theoloai as $bv)
                    
                       <div class="col-md-1 col-sm-10" style="width: 300px;">
                       <article class="aa-blog-content-single">                        
                         
                         <figure class="aa-blog-img">
                           <a href="{{route('home.baiviet.get_chitietbv',$bv->Mabaiviet)}}"><img src="/asset/fronts/dailyShop/img/Baiviet/{{$bv->Anh}}" alt="fashion img" style="height: 250px"></a>
                         </figure>
                         <p><a href="{{route('home.baiviet.get_chitietbv',$bv->Mabaiviet)}}">{{$bv->Tenbaivet}}</a> </p>
                         <div class="aa-article-bottom">
                           <div class="aa-post-author">
                             Đăng bởi<a href="#"> Phạm hùng</a>
                           </div>
                           <div class="aa-post-date">
                            {{ \Carbon\Carbon::parse($bv->ngaytao)->formatLocalized(' %d/%m/%Y') }}
                           </div>
                         </div>
                       </article>
                     </div> 
                    @endforeach
                     
                     
 
                   </div>
                 </div>
                 <!-- Blog Pagination -->
                 {{-- <div class="aa-blog-archive-pagination">
                   <nav>
                     <ul class="pagination">
                       <li>
                         <a aria-label="Previous" href="#">
                           <span aria-hidden="true">«</span>
                         </a>
                       </li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li>
                         <a aria-label="Next" href="#">
                           <span aria-hidden="true">»</span>
                         </a>
                       </li>
                     </ul>
                   </nav>
                 </div> --}}
               </div>
               {{-- <div class="col-md-3">
                 <aside class="aa-blog-sidebar">
                   <div class="aa-sidebar-widget">
                     <h3>Category</h3>
                     <ul class="aa-catg-nav">
                       <li><a href="#">Men</a></li>
                       <li><a href="">Women</a></li>
                       <li><a href="">Kids</a></li>
                       <li><a href="">Electornics</a></li>
                       <li><a href="">Sports</a></li>
                     </ul>
                   </div>
                   <div class="aa-sidebar-widget">
                     <h3>Tags</h3>
                     <div class="tag-cloud">
                       <a href="#">Fashion</a>
                       <a href="#">Ecommerce</a>
                       <a href="#">Shop</a>
                       <a href="#">Hand Bag</a>
                       <a href="#">Laptop</a>
                       <a href="#">Head Phone</a>
                       <a href="#">Pen Drive</a>
                     </div>
                   </div>
                   <div class="aa-sidebar-widget">
                     <h3>Recent Post</h3>
                     <div class="aa-recently-views">
                       <ul>
                         <li>
                           <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                           <div class="aa-cartbox-info">
                             <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                             <p>March 26th 2016</p>
                           </div>                    
                         </li>
                         <li>
                           <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                           <div class="aa-cartbox-info">
                             <h4><a href="#">Lorem ipsum dolor.</a></h4>
                             <p>March 26th 2016</p>
                           </div>                    
                         </li>
                          <li>
                           <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                           <div class="aa-cartbox-info">
                             <h4><a href="#">Lorem ipsum dolor.</a></h4>
                             <p>March 26th 2016</p>
                           </div>                    
                         </li>                                      
                       </ul>
                     </div>                            
                   </div>
                 </aside>
               </div> --}}
             </div>
            
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / Blog Archive -->
@endsection