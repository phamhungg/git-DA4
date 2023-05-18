var app = angular.module('AppBanHang', []); //Các mô-đun AngularJS xác định các ứng dụng:
app.controller("lsp", function ($scope, $http){ //Bộ điều khiển AngularJS điều khiển các ứng dụng:
    
    $scope.TenDanhMuc 
    $scope.TrangThai 
    $scope.ListLSP
    
    $scope.save = function () 
    
    {
      let model = {
        TenDanhMuc: $scope.TenDanhMuc,
        TrangThai: $scope.TrangThai,
      }
        

       $http({
        method : "POST",
        data: model,
          url : "https://localhost:7200/Productcategory/create_ProductCategory"
      }).then(function(response) {
        console.log(response)
        $scope.ListLSP.push(response.data);
      })
   };

  
  $scope.lsp   
  let indexEdit = 0
  $scope.editDisplay = function (id, index) {
    indexEdit = index
    
    $http.get("https://localhost:7200/Productcategory/get-ProductCategory-by-id" + id).then(function (res) {
      $scope.lsp = res.data
      $scope.lsp.maDanhMuc = JSON.stringify($scope.lsp.maDanhMuc)
    })

  } 

  $scope.SaveEdit = function () 
  { 
    let model = {
      MaDanhMuc: $scope.lsp.maDanhMuc,
      TenDanhMuc: $scope.lsp.tenDanhMuc,
      TrangThai: $scope.lsp.trangThai,
    }
    $http
    (
      {
      
      method: 'POST',
      data: model,
      url: "https://localhost:7200/Productcategory/update_ProductCategory"
    }).then(function (response) {
      $scope.ListLSP[indexEdit] = model
      alert('sửa loại sản phẩm thành công!');
      window.location.href ="/Qly_Loaisp.html"
    });
  }

  $scope.ListLSP
   $http.get("https://localhost:7200/Productcategory/getall_Loaisanpham").then(function(res){
    $scope.ListLSP = res.data
    console.log($scope.ListLSP)
   })
   $http.get("https://localhost:7200/Productcategory/getall_Loaisanpham").then(function(res){
    $scope.ListLSP = res.data
   })

   




   $scope.Delete = function(id,index){
    
      $http.get("https://localhost:7200/Productcategory/delete_ProductCategory/"+id).then(function(res){
          $scope.ListLSP.splice(index,1)
         })
     }
})