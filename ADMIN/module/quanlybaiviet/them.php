<p>Thêm bài viết</p>
<table border="1px" width="100%" style="border-collapse: collapse;">
	<form method="POST" action="module/quanlybaiviet/xuly.php" enctype="multipart/form-data">
		<tr>
			<td>Tên Bài Viết</td>
			<td><input type="text" name="tenbaiviet" value=""></td>
		</tr>
		<tr>
			<td>Hình Ảnh</td>
			<td><input type="file" name="hinhanh" value=""></td>
		</tr>
		<tr>
			<td>Tóm Tắt</td>
			<td><textarea rows="10" name="tomtat" id="tomtat"></textarea></td>
		</tr>
		<tr>
			<td>Nội Dung</td>
			<td><textarea rows="10" name="noidung" id="noidung"></textarea></td>
		</tr>
		<tr>
			<td>Danh Mục Bài Viết</td>
			<td>
				<select name="danhmuc">
					<?php
					$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
					$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
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
			<td colspan="2"><input type="submit" name="thembaiviet" value="Thêm Bài Viết"></td>
		</tr>
	</form>
</table>