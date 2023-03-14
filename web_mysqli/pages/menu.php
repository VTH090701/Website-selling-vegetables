<!-- <?php
$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY Id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?> -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<nav id="navigate" class="navbar navbar-expand-md navbar-light  sticky-top">
  <div class="container-fluid ">
    <!-- Nút btn khi renponse -->
    <a class="navbar-branch" href="#">
      <img id="img-nav" src="imgae/logo-removebg-preview.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a id="nav-a" class="nav-link active" href="index.php">Trang Chủ</a>
        </li>

        <li class="nav-item">
          <a id="nav-a" class="nav-link" href="index.php?quanly=sanpham1&id=1">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a id="nav-a" class="nav-link" href="index.php?quanly=gioithieu">Giới Thiệu</a>
        </li>
        <li class="nav-item">
          <a id="nav-a" class="nav-link" href="index.php?quanly=giohang">Giỏ Hàng</a>
        </li>
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
          <li class="nav-item"><a id="nav-a" class="nav-link" href="index.php?dangxuat=1"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng Xuất</a></li>
        <?php
        } else {
        ?>
          <li class="nav-item"><a id="nav-a" class="nav-link" href="index.php?quanly=dangky">Đăng Ký</a></li>
        <?php
        }
        ?>


      </ul>
      <p>
      <form action="index.php?quanly=timkiem" method="POST" style="display: flex;">
        <input style="border-radius: 5px;" class="nav-link" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
        <input style="border-radius: 5px;" class="nav-link" type="submit" name="timkiem" value="Tìm kiếm">
      </form>
      </p>
    </div>
</nav>