<?php
include('../../config/config.php');
$idsp = $_POST['idspham'];
$tenspnhap = $_POST['tenspnhap'];
$nhacungcap = $_POST['nhacungcap'];
$soluongnhap = $_POST['soluongnhap'];
$gianhap = $_POST['gianhap'];
$donvitinh = $_POST['donvitinh'];
date_default_timezone_set('Asia/Ho_Chi_Minh');
// $now1 = date("Y-m-d H:i:s");
$ngaynhap= date("Y-m-d");
$ngaynhap1 = $_POST['ngaynhap'];

if (isset($_POST['themvaokho'])) {
    $sql_them = "INSERT INTO kho(Id_sanpham,tensanphamnhap,nhacungcap,soluongnhap,gianhap,donvitinh,ngaynhap) VALUE('" . $idsp . "','" . $tenspnhap . "','" . $nhacungcap . "','" . $soluongnhap . "','" . $gianhap . "','" . $donvitinh . "','" . $ngaynhap . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlykho&query=lietke');
} else if (isset($_POST['suaspkho'])) {
    $sql_update = "UPDATE kho SET Id_sanpham='" . $idsp . "',tensanphamnhap='" . $tenspnhap . "',nhacungcap='" . $nhacungcap . "',soluongnhap='" . $soluongnhap . "',gianhap='" . $gianhap . "',donvitinh='" . $donvitinh . "',ngaynhap='" . $ngaynhap1 . "' WHERE Id_sanpham='$_GET[idsanpham]' ";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlykho&query=lietke');
} else {
    $id = $_GET['idsanpham'];
    $sql_xoa = "DELETE FROM kho WHERE Id_sanpham= '" . $id . "' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlykho&query=lietke');
}
?>
