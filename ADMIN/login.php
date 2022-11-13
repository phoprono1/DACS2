<?php
session_start();
include('config/config.php');
//session_destroy();
if(isset($_POST['dangnhap'])){
	$taikhoan = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
	$row = mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if($count>0){
		$_SESSION['dangnhap'] = $taikhoan;
		header('Location:index.php');
	}else{
		echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
		header('Location:login.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập ADMIN</title>
	<style type="text/css">
		body{
			background: linear-gradient(to right, wheat, white);
		}
		.wrapper-login {
			width: 15%;
			margin: 0 auto;
		}
		.table-login{
			height: 200px;
		}
	</style>
</head>
<body>
	<div class="wrapper-login">
		<form action="" method="POST" autocomplete="off">
			<table border="1px" style="text-align: center; border-collapse: collapse; width: max-content;" class="table-login">
				<tr>
					<td colspan="2"><h3>Đăng Nhập ADMIN</h3></td>
				</tr>
				<tr>
					<td>Tài Khoản</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Mật Khẩu</td>
					<td><input type="password" name="password"></td>		
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
