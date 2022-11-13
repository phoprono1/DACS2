		<?php
//session_destroy();
		if(isset($_POST['dangnhap'])){
			$email = $_POST['email'];
			$matkhau = md5($_POST['password']);
			$sql = "SELECT * FROM tbl_user WHERE email = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1";
			$row = mysqli_query($mysqli,$sql);
			$count = mysqli_num_rows($row);
			if($count>0){
				$row_data = mysqli_fetch_array($row);
				$_SESSION['dangky'] = $row_data['tenkhachhang'];
				$_SESSION['id_khachhang'] = $row_data['id_user'];
				header('Location:index.php?quanly=giohang');
			}else{
				echo '<p style="color:red">Mật Khẩu hoặc Email không chính xác, vui lòng nhập lại</p>';
			}
		}
		?>
		<form action="" method="POST" autocomplete="off">
			<table border="1px" width="50%" style="text-align: center; border-collapse: collapse;" class="table-login">
				<tr>
					<td colspan="2"><h3>Đăng Nhập Khách Hàng</h3></td>
				</tr>
				<tr>
					<td>Tài Khoản</td>
					<td><input type="text" size="50" name="email" placeholder="example@email.com"></td>
				</tr>
				<tr>
					<td>Mật Khẩu</td>
					<td><input type="password" size="50" name="password" placeholder="Mật Khẩu"></td>		
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
				</tr>
			</table>
		</form>