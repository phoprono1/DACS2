<?php
session_start();
if(isset($_POST['dangky'])){
	$tenkhachhang = $_POST['hovaten'];
	$email = $_POST['email'];
	$matkhau = md5($_POST['matkhau']);
	$diachi = $_POST['diachi'];
	$dienthoai = $_POST['dienthoai'];
	$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_user(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công!</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			$_SESSION['email'] = $email;
			header('Location:index.php?quanly=giohang');
		}
	}
	?>
	<p>Đăng Ký Thành Viên</p>
	<style type="text/css">
		table.dangky tr td {
			padding: 10px;
		}
	</style>
	<form action="" method="POST">
		<table class="dangky" border="1" width="50%" style="border-collapse:collapse;">
			<tr>
				<td>Họ và Tên</td>
				<td><input type="text" size="50" name="hovaten"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" size="50" name="email"></td>
			</tr>
			<tr>
				<td>Mật Khẩu</td>
				<td><input type="password" size="50" name="matkhau"></td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td><input type="text" size="50" name="diachi"></td>
			</tr>
			<tr>
				<td>Điện Thoại</td>
				<td><input type="text" size="50" name="dienthoai"></td>
			</tr>
			<tr>
				<td><input type="submit" size="50" name="dangky" value="Đăng Ký"></td>
				<td><a href="index.php?quanly=dangnhap">Đăng Nhập</a></td>
			</tr>
		</table>
	</form>