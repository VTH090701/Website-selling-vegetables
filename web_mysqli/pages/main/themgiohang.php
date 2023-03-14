<?php
session_start();
include('../../admincp/config/config.php');

//xoa san pham
if (isset($_SESSION['cart']) &&	isset($_GET['xoa'])) {
	$id = $_GET['xoa'];
	foreach ($_SESSION['cart'] as $cart_item) {
		if ($cart_item['id'] != $id) {
			$product[] = array(
				'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'],
				'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']
			);
		}
		$_SESSION['cart'] = $product;
		header('Location:../../index.php?quanly=giohang');
	}
}
//xoa tat ca
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=giohang');
}
//them san pham vao gio hang
if (isset($_POST['themgiohang'])) {
	// session_destroy();
	$id = $_GET['idsanpham'];
	$soluong = $_POST['soluong'];
	$sql = "SELECT * FROM sanpham where Id_sanpham='" . $id . "' LIMIT 1";

	$query = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_array($query);
	if ($row) {
		$new_product = array(array('tensanpham' => $row['tensanpham'], 'id' => $id, 'soluong' => $soluong, 'giasp' => $row['giasp'], 'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
		//kiem tra session gio hang ton tai
		if (isset($_SESSION['cart'])) {
			$found = false;
			foreach ($_SESSION['cart'] as $cart_item) {
				//neu du lieu trung
				if ($cart_item['id'] == $id) {			
					$product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $soluong +  $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
					$found = true;
				} else {
					//neu du lieu khong trung
					$product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
				}
			}
			if ($found == false) {
				//lien ket du lieu new_product voi product
				$_SESSION['cart'] = array_merge($product, $new_product);
			} else {
				$_SESSION['cart'] = $product;
			}
		} else {
			$_SESSION['cart'] = $new_product;
		}
	}
	header('Location:../../index.php?quanly=giohang');
	// header('Location:../../index.php?quanly=sanpham1&id=1');
	// print_r($_SESSION['cart']);
}


