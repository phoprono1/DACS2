<p>Thêm sản phẩm</p>
<table border="1px" width="100%" style="border-collapse: collapse;">
	<form method="POST" action="module/quanlysanpham/xuly.php" enctype="multipart/form-data">
		<tr>
			<td>Tên Sản Phẩm</td>
			<td><input type="text" name="tensanpham" value=""></td>
		</tr>
		<tr>
			<td>Mã Sản Phẩm</td>
			<td><input type="text" name="masanpham" value=""></td>
		</tr>
		<tr>
			<td>Giá Sản Phẩm</td>
			<td><input type="text" name="giasanpham" value=""></td>
		</tr>
		<tr>
			<td>Số Lượng</td>
			<td><input type="text" name="soluong" value=""></td>
		</tr>
		<tr>
			<td>Hình Ảnh</td>
			<td><input type="file" name="hinhanh" value=""></td>
		</tr>
		<tr>
			<td>Tóm Tắt</td>
			<td><textarea rows="10" name="tomtat" style="resize: none;"></textarea></td>
		</tr>
		<tr>
			<td>Nội Dung</td>
			<td><textarea rows="10" name="noidung" style="resize: none;"></textarea></td>
		</tr>
		<tr>
			<td>Danh Mục Sản Phẩm</td>
			<td>
				<select name="danhmuc">
					<?php
					$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
					$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tình Trạng</td>
			<td>
				<select name="tinhtrang">
					<option value="1">Kích Hoạt</option>
					<option value="0">Ẩn</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
		</tr>
	</form>
</table>