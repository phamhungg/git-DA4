@extends('admin.front.app')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                     <h3>Thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('admin.index')}} " class="btn btn-primry float-end" style="background-color: blue; color: white">Danh sách sản phẩm</a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection