var app = angular.module('AppBanHang', ['angularUtils.directives.dirPagination']); //Các mô-đun AngularJS xác định các ứng dụng:
app.controller("tk", function ($scope, $http) { //Bộ điều khiển AngularJS điều khiển các ứng dụng:

  $scope.MaNguoiDung
  $scope.TaiKhoan
  $scope.MatKhau
  $scope.NgayBatDau
  $scope.NgayKetThuc
  $scope.TrangThai
  $scope.LoaiQuyen
  $scope.ListTK
  $scope.save = function () {

    let model = {

      MaNguoiDung: $scope.MaNguoiDung,
      TaiKhoan: $scope.TaiKhoan,
      MatKhau: $scope.MatKhau,
      NgayBatDau: $scope.NgayBatDau,
      NgayKetThuc: $scope.NgayKetThuc,
      TrangThai: $scope.TrangThai,
      LoaiQuyen: $scope.LoaiQuyen,

    }

    $http({
      method: "POST",
      data: model,
      url: "https://localhost:7200/api/Account/create_Account/"
    }).then(function (response) {
      console.log(response)
      $scope.ListTK.push(response.data);
    })
  };
  
  $http.get("https://localhost:7200/api/Account/getall_Account").then(function (res) {
    $scope.ListTK = res.data
  })

  $scope.tk
  let indexEdit = 0
  $scope.editDisplay = function (id, index) {
    indexEdit = index
    $http.get("https://localhost:7200/api/Account/get-Account-by-id/" + id).then(function (res) {
      $scope.tk = res.data
      $scope.tk.maTaiKhoan = JSON.stringify($scope.tk.maTaiKhoan)
    })

  }

  $scope.SaveEdit = function () {
    let model = {
      MaTaiKhoan: $scope.tk.maTaiKhoan,
      MaNguoiDung: $scope.tk.maNguoiDung,
      TaiKhoan: $scope.tk.taiKhoan,
      MatKhau: $scope.tk.matKhau,
      NgayBatDau: $scope.tk.ngayBatDau,
      NgayKetThuc: $scope.tk.ngayKetThuc,
      TrangThai: $scope.tk.trangThai,
      LoaiQuyen: $scope.tk.loaiQuyen,
    }
    $http({
      method: 'POST',
      data: model,
      url: "https://localhost:7200/api/Account/update_Account"
    }).then(function (response) {
      $scope.ListTK[indexEdit] = model
      alert('sửa sản phẩm thành công!');
      window.location.href = "/Dki.html"
    });
  }
  $scope.ListTK
  $http.get("https://localhost:7200/api/Account/getall_Account").then(function (res) {
    $scope.ListTK = res.data
    console.log($scope.ListTK)
  })
    $http.get("https://localhost:7200/api/Account/getall_Account").then(function(res){
     $scope.ListTK = res.data
    })

    $scope.Delete = function(id,index){
    
      $http.get("https://localhost:7200/api/Account/delete_Account/"+id).then(function(res){
          $scope.ListTK.splice(index,1)
         })
     }

$scope.totalCount = 0;
$scope.TENTKSearch = "";
$scope.LOAIQSearch = "";
$scope.pageSize = '5'

$scope.getPage = function (newPage) {
    $scope.pageNumber = newPage
    /** Lấy danh sách*/
    $http.get("https://localhost:7200/api/Account/search-taikhoan", {
        params: { taiKhoan: $scope.TENTKSearch,loaiQuyen:$scope.LOAIQSearch, page: $scope.pageNumber, pageSize: $scope.pageSize }
    }).then(function (res) {
        console.log(res)
        $scope.ListTK = res.data.data
        $scope.totalCount = res.data.totalItems
    })
}
$scope.getPage(1)
})