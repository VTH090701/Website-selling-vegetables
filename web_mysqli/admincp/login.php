<?php
session_start();
include('config/config.php');

if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <title>Đăng nhập</title>
    <style>
 		@import url('https://fonts.googleapis.com/css?family=Numans');

 		html,
 		body {
 			background-image: url('https://getwallpapers.com/wallpaper/full/c/9/d/40082.jpg');
 			background-size: cover;
 			background-repeat: no-repeat;
 			height: 100%;
 			font-family: 'Numans', sans-serif;
 		}

 		.container {
 			height: 100%;
 			align-content: center;
 		}

 		.card {
 			height: 300px;
 			margin-top: auto;
 			margin-bottom: auto;
 			width: 400px;
 			background-color: rgba(0, 0, 0, 0.5) !important;
 		}

 		.card-header h3 {
 			color: white;
 			text-align: center;
 		}

 		.social_icon {
 			position: absolute;
 			right: 20px;
 			top: -45px;
 		}

 		.input-group-prepend span {
 			width: 50px;
 			background-color: #FFC312;
 			color: black;
 			border: 0 !important;
 		}

 		input:focus {
 			outline: 0 0 0 0 !important;
 			box-shadow: 0 0 0 0 !important;

 		}

 		.login_btn {
 			color: black;
 			background-color: #FFC312;
 			width: 100px;
 		}

 		.login_btn:hover {
 			color: black;
 			background-color: white;
 		}
 	</style>
</head>
<body>
 	<div class="container">
 		<div class="d-flex justify-content-center h-100">
 			<div class="card">
 				<div class="card-header m-3">
 					<h3>ADMIN LOGIN</h3>
 				</div>
 				<div class="card-body">
 					<form action="" autocomplete="off" method="POST">
 						<div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></i></span>
 							</div>
 							<input type="text" class="form-control" placeholder="username" name="username">

 						</div>
 						<div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
 							</div>
 							<input type="password" class="form-control" placeholder="password" name="password">
 						</div>
 						<div class="form-group">
 							<input input type="submit" name="dangnhap" value="Login" class="btn float-right login_btn">
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 	</div>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </body>

</html>