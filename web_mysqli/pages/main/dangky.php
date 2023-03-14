  <!-- main -->
  <?php
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO khachhang(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
        
        if($sql_dangky){
            $_SESSION['dangky'] = $tenkhachhang;
            // Lay id moi nhat
            $_SESSION['Id_khachhang'] = mysqli_insert_id($mysqli);
        
            echo '<script>alert("Đăng ký thành công.");</script>';
            header('Location:index.php?quanly=giohang');
           
        }

    }
  ?>
  <main>
    <marquee>
      <div class="text-center">Xin Chào Quý Khách</div>
    </marquee>
    <div id="section-index">
     
      <i></i>
      <span id="section-title-main">Đăng Ký</span>
      <i></i>
    </div>
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <form action="" method="POST" class="col-md-6 bg-light p-3 my-3">
                    <div class="form-group">
                        <label for="fullname">Họ và tên:</label>
                        <input type="text" name="hovaten" id="hovaten" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Điện thoại:</label>
                        <input type="text" name="dienthoai" id="dienthoai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ:</label>
                        <input type="text" name="diachi" id="diachi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" name="matkhau" id="matkhau" class="form-control" required>
                    </div>
                    <div class="form-group">
                       <a  href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a>
                    </div>
                    <input type="submit" name="dangky" value="Đăng ký"
                    class="btn btn-block" style="background-color: #192b02; color: white;" >

                </form>
            </div>
        </div>
    </div>
  </main>