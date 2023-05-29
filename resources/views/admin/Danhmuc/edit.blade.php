@extends('admin.front.app')
@section('content')
@php
$index=1;
@endphp


<main id="main" class="main">

    <div class="Stylecss">
      <div class="csss">
        <h1> Danh mục</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.baiviet.baiviet')}}">Trang chủ</a></li>
            <li class="breadcrumb-item">Quản lý</li>
            <li class="breadcrumb-item active">Danh mục</li>
          </ol>
        </nav>

      </div>
    </div>
    <section class="section">
        <form action="{{route('admin.Danhmuc.save',$sp->MaDanhMuc)}}" method="post">
            @csrf
            <div class="row">
             
              <div class="form-group" >
                  <strong>Tên danh mục</strong>
                  <input type="text" name="TenDanhMuc" class="form-control" id="Tenbaiviet" value="{{$sp->TenDanhMuc}}">
              </div>
              
         
            
            
           
          </div>
          <button type="submit" class="btn-btn-primary">Save</button>
            </form>
    </section>
  </main>   
@endsection
