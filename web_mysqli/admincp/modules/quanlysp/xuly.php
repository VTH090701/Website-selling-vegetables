<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
//xu ly anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];


if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO sanpham(tensanpham,masp,giasp,hinhanh,tomtat,noidung,,Id_danhmuc) VALUE('" . $tensanpham . "',
        '" . $masp . "','" . $giasp . "','" . $hinhanh . "','" . $tomtat . "','" . $noidung . "','" . $danhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=lietke');
} else if (isset($_POST['suasanpham'])) {
    if (!empty($_FILES['hinhanh']['name'])) {
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);

        $sql_update = "UPDATE sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',hinhanh='".$hinhanh."',tomtat='".$tomtat."'
        ,noidung='".$noidung."',Id_danhmuc='".$danhmuc."' WHERE Id_sanpham='$_GET[idsanpham]'";
        //xoa hinh anh cũ
        $sql = "SELECT * FROM sanpham WHERE Id_sanpham = '$_GET[idsanpham]' LIMIT 1 ";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
        }
    } else {
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "',masp='" . $masp . "',giasp='" . $giasp . "',tomtat='".$tomtat."'
            ,noidung='" . $noidung . "',Id_danhmuc='" . $danhmuc . "' WHERE Id_sanpham='$_GET[idsanpham]' ";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysp&query=lietke');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE Id_sanpham = '$id' LIMIT 1 ";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }

    $sql_xoa = "DELETE FROM sanpham WHERE Id_sanpham = '" . $id . "' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysp&query=lietke');
}




?>