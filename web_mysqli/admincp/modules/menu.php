<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>
<style>
    .leftMenu ul li a {
        text-decoration: none;
    }
</style>
<div class="leftSide">
    <div class="group-box">
        <h1 class="title">Admin Menu</h1>
        <div class="leftMenu">
            <ul>
                <li><a href="index.php"><i class="fa fa-pie-chart" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Thống kê</a></li>
                <li><a href="index.php?action=quanlydanhmucsanpham&query=lietke"><i class="fa fa-list-ul" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Quản lý danh mục sản phẩm</a></li>
                <li><a href="index.php?action=quanlysp&query=lietke"><i class="fa fa-bars" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Quản lý sản phẩm</a></li>
                <li><a href="index.php?action=quanlydonhang&query=lietke"><i class="fa fa-shopping-cart" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Quản lý đơn hàng</a></li>
                <li><a href="index.php?action=quanlykhachhang&query=lietke"><i class="fa fa-user" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Quản lý khách hàng</a></li>
                <li><a href="index.php?action=quanlykho&query=lietke"><i class="fa fa-cubes" style="color: #192b02 ;" aria-hidden="true"></i>&nbsp;Quản lý kho</a></li>
                
                <!-- <form class="form-inline my-2 my-lg-0">
                <a href="index.php?dangxuat=1"role="button" aria-pressed="true">Đăng xuất</a>
                </form> -->
            </ul>
        </div>
    </div>
</div>