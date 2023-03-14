<?php
include('../../config/config.php');
    $tenloaisp = $_POST['tendanhmuc'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO danhmuc(tendanhmuc) VALUE('".$tenloaisp."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }else if(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisp."' WHERE Id_danhmuc='$_GET[iddanhmuc]' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }else {
        $id=$_GET['iddanhmuc'];
        $sql_xoa= "DELETE FROM danhmuc WHERE Id_danhmuc= '".$id."' ";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }
?>