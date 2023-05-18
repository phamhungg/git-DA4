var app = angular.module('AppBanHang', ['angularUtils.directives.dirPagination']); //Các mô-đun AngularJS xác định các ứng dụng:
app.controller("sp", function ($scope, $http) { //Bộ điều khiển AngularJS điều khiển các ứng dụng:

  $scope.TenSanPham
  $scope.MoTaSanPham  
  $scope.MaDanhMuc
  $scope.MaNhaSanXuat
  $scope.NgayTao
  $scope.ListSP
  $scope.save = function () {
    
    let model = {
      
      TenSanPham: $scope.TenSanPham,
      MoTaSanPham: $scope.MoTaSanPham,
      MaDanhMuc: $scope.MaDanhMuc,
      MaNhaSanXuat: $scope.MaNhaSanXuat,
      NgayTao: $scope.NgayTao,
    }

    $http({ 
      method: "POST",
      data: model,
      url: "https://localhost:7200/Product/create_Sanpham"
    }).then(function (response) {
      console.log(response)
      $scope.ListSP.push(response.data);
    })
  };


  $http.get("https://localhost:7200/Product/getall_Sanpham").then(function (res) {
    $scope.ListSP = res.data
  })

  $scope.sp
  let indexEdit = 0
  $scope.editDisplay = function (id, index) {
    indexEdit = index
    $http.get("https://localhost:7200/Product/get-Sanpham-by-id/" + id).then(function (res) {
      $scope.sp = res.data
      $scope.sp.MaSanPham = JSON.stringify($scope.sp.MaSanPham)
    })

  } 

  $scope.SaveEdit = function () {
    let model = {
      MaSanPham:$scope.sp.maSanPham,
      TenSanPham: $scope.sp.tenSanPham,
      MoTaSanPham: $scope.sp.moTaSanPham,
      MaDanhMuc: $scope.sp.maDanhMuc,
      MaNhaSanXuat: $scope.sp.maNhaSanXuat,
      NgayTao: $scope.sp.ngayTao,
    }
    $http({
      method: 'POST',
      data: model,
      url: "https://localhost:7200/Product/update_Sanpham"
    }).then(function (response) {
      $scope.ListSP[indexEdit] = model
      alert('sửa sản phẩm thành công!');
      window.location.href ="/Qly.html"
    });
  }

  $scope.ListSP
   $http.get("https://localhost:7200/Product/getall_Sanpham").then(function(res){
    $scope.ListSP = res.data
    console.log($scope.ListSP)
   })
   $http.get("https://localhost:7200/Productcategory/getall_Loaisanpham").then(function(res){
    $scope.ListLSP = res.data
   })
 
    $scope.Delete = function (id, index) {

      $http.get("https://localhost:7200/Product/delete_Sanpham/" + id).then(function (res) {
        $scope.ListSP.splice(index, 1)
      })
    }

    //search
$scope.totalCount = 0;
$scope.TENSPSearch = "";
$scope.pageSize = '5'

$scope.getPage = function (newPage) {
    $scope.pageNumber = newPage
    /** Lấy danh sách*/
    $http.get("https://localhost:7200/Product/search-sanpham", {
        params: { tenSanPham: $scope.TENSPSearch, page: $scope.pageNumber, pageSize: $scope.pageSize }
    }).then(function (res) {
        console.log(res)
        $scope.ListSP = res.data.data
        $scope.totalCount = res.data.totalItems
    })
}
$scope.getPage(1)
})
