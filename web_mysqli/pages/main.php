<?php
  if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
  }else{
    $tam= '';
  }if($tam=='sanpham1'){
    include("main/sanpham1.php");
  }else if($tam=='gioithieu'){
    include("main/gioithieu.php");
  }else if($tam=='chitietsanpham'){
    include("main/chitietsanpham.php");
  }elseif ($tam == 'giohang') {
    include("main/giohang.php");
  }elseif ($tam == 'dangky') {
    include("main/dangky.php");
  }elseif ($tam == 'thanhtoan') {
    include("main/thanhtoan.php");
  }elseif ($tam == 'dangnhap') {
    include("main/dangnhap.php");
  }elseif ($tam == 'timkiem') {
    include("main/timkiem.php");
  }elseif ($tam == 'camon') {
    include("main/camon.php");
  }else{
    include("main/index.php");
  }
