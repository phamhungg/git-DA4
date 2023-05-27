<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pages / F.A.Q - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/asset/fronts/admin/assets/img/favicon.png" rel="icon">
  <link href="/asset/fronts/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/asset/fronts/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/asset/fronts/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/asset/fronts/admin/assets/css/style.css" rel="stylesheet">
{{-- ckditor --}}
<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.front.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.front.navbar')
  <!-- End Sidebar-->
  @yield('content')

  <!-- ======= Footer ======= -->
  @include('admin.front.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/asset/fronts/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/quill/quill.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/asset/fronts/admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/asset/fronts/admin/assets/js/main.js"></script>
   <!-- Page level plugins -->
   <script src="/asset/fronts/admin/assets/vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="/asset/fronts/admin/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <script src="/asset/fronts/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
   <!-- Page level custom scripts -->
   <script src="/asset/fronts/admin/assets/js/demo/datatables-demo.js"></script>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
@yield('js-custom')
</body>

</html>