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
            <li class="breadcrumb-item"><a href="{{route('admin.baiviet.baiviet')}}">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý</li>
            <li class="breadcrumb-item active">Sản phẩm</li>
          </ol>
        </nav>

      </div>
    </div>
    <section class="section">
        <form action="{{route('admin.baiviet.save',$sp->Mabaiviet)}}" method="post">
            @csrf
            <div class="row">
             
              <div class="form-group" >
                  <strong>Tên bài viết</strong>
                  <input type="text" name="Tenbaivet" class="form-control" id="Tenbaiviet" value="{{$sp->Tenbaivet}}">
              </div>
              <div class="form-group">
                  <strong>Ảnh</strong>
                  <input type="file" name="Anh"class="form-control" id="Anh" value="{{$sp->Anh}}">
              </div>
              <div class="form-group">
                  <strong>Mô tả</strong>
                  <textarea id="ck" name="Chitiet" cols="30" rows="10" ></textarea>
              </div>
              
             
              <div class="form-group">
                  <strong>Ngày tạo</strong>
                  <input type="date" name="ngaytao"class="form-control" style="width: 150px" id="NgayTao" value="{{$sp->ngaytao}}">
              </div>
         
            
            
           
          </div>
          <button type="submit" class="btn-btn-primary">Save</button>
            </form>
    </section>
   
      

    
      
      
        

  </main>   
@endsection
@section('js-custom')
    <script>
        CKEDITOR.replace('ck')
        CKEDITOR.instances['ck'].setData(`{!! $sp->Chitiet !!}`);
    </script>
@endsection