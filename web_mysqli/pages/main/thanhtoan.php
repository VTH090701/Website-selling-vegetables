<?php
    session_start();

    include("../../admincp/config/config.php");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now1= date("Y-m-d H:i:s");
    
    $Id_khachhang = $_SESSION['Id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart ="INSERT INTO donhang(madonhang,Id_khachhang,tinhtrangdh,date_donhang) VALUE('".$code_order."','".$Id_khachhang."',1,'".$now1."')";
    $cart_query=mysqli_query($mysqli,$insert_cart);
    
    


    if($cart_query){
        foreach($_SESSION['cart'] as $value){
            $Id_sanpham = $value['id'];
            $soluongmua = $value['soluong'];
           
            $insert_donhang_details = "INSERT INTO chitietdonhang(Id_sanpham,madonhang,soluongmua) VALUE('".$Id_sanpham."','".$code_order."','".$soluongmua."')";
            mysqli_query($mysqli,$insert_donhang_details);

        
            
        }
    }
   

    
    unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=camon');


?>