<p>Quản lý Thông tin Website</p>
<?php
$sql_lh = "SELECT * FROM tbl_lienhe WHERE id_lienhe = 1";
$query_lh = mysqli_query($mysqli, $sql_lh);	
?>
<table border="1px" width="100%" style="border-collapse: collapse;">
	<?php
	while($dong = mysqli_fetch_array($query_lh)){
		?>
		<form method="POST" action="module/thongtinweb/xuly.php?id=<?php echo $dong['id_lienhe'] ?>" enctype="multipart/form-data">
			<tr>
				<td>Thông Tin Liên Hệ</td>
				<td><textarea rows="10" name="thongtinlienhe" id="thongtinlienhe"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submitlienhe" value="Cập Nhật"></td>
			</tr>
			<?php
		}
		?>
	</form>
</table>