<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM khachhang WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);

    $count = mysqli_num_rows($row);

    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['Id_khachhang'] = $row_data['Id_khachhang'];
        
        header("Location:index.php?quanly=giohang");
        // $_SESSION['email'] = $row_data['email'];
        // $_SESSION['id_khachhang'] = $row_data['id_dangky'];
    } else {
        echo '<p style="color:red;font-size:15pt;" class="text-center mt-3">Tài khoản hoặc mật khẩu của khách hàng đã sai, xin vui lòng nhập lại</p>';
        //header("Location:index.php?quanly=dangnhap");
    }
}
?>
<main>
    <!-- <marquee>
        <div class="text-center">Xin Chào Quý Khách</div>
    </marquee> -->

    <div id="section-index" class="mt-5">

        <i></i>
        <span id="section-title-main">Đăng nhập khách hàng</span>
        <i></i>
    </div>
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <form action="" method="POST" class="col-md-6 bg-light p-3 my-3">
                    <div class="form-group">
                        <label for="email">Tên đăng Nhập:</label>
                        <input type="text" name="email" id="email" placeholder="Email..." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <!-- <div class="form-group form-check" >
                            <input type="checkbox" class="form-check-input" name="remember-me" id="remember-me" >
                            <label for="remember-me" class="form-check-label">Remember me</label>
                        </div> -->
                    <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-block" style="background-color: #192b02; color: white;">
                </form>
            </div>
        </div>
    </div>
</main>