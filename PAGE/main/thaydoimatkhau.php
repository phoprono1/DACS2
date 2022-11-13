<?php
//session_destroy();
if(isset($_POST['doimatkhau'])){
	$taikhoan = $_POST['email'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_user WHERE email = '".$taikhoan."' AND matkhau = '".$matkhau_cu."' LIMIT 1";
	$row = mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if($count>0){
		$sql_update = mysqli_query($mysqli,"UPDATE tbl_user SET matkhau = '".$matkhau_moi."'");
		echo '<p style="color:green">Mật Khẩu đã được thay đổi.</p>';
	}else{
		echo '<p style="color:red">Tài khoản hoặc Mật khẩu Cũ không đúng,vui lòng nhập lại.</p>';
	}
}
?>
<p>Thay đổi mật khẩu</p>
<form action="" method="POST" autocomplete="off">
	<table border="1px" style="text-align: center; border-collapse: collapse; width: max-content;" class="table-login">
		<tr>
			<td colspan="2"><h3>Đổi Mật Khẩu</h3></td>
		</tr>
		<tr>
			<td>Tài Khoản Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Mật Khẩu Cũ</td>
			<td><input type="text" name="password_cu"></td>
		</tr>
		<tr>
			<td>Mật Khẩu Mới</td>
			<td><input type="text" name="password_moi"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="doimatkhau" value="Đổi Mật Khẩu"></td>
		</tr>
	</table>
</form>