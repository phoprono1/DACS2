<p>Liệt kê đơn hàng</p>
<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_user WHERE tbl_cart.id_user=tbl_user.id_user ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);	
?>
<p>Liệt kê danh mục sản phẩm</p>
<table width="100%" border="1" style="border-collapse: collapse;">
	<tr>
		<th>ID</th>
		<th>Mã Đơn Hàng</th>
		<th>Tên Khách Hàng</th>
		<th>Địa Chỉ</th>
		<th>Email</th>
		<th>Số điện thoại</th>
		<th>Tình Trạng</th>
		<th>Ngày Đặt</th>
		<th>Quản lý</th>
	</tr>
	<?php
	$i=0;
	while ($row = mysqli_fetch_array($query_lietke_dh)) {
		$i++;
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['code_cart'] ?></td>
			<td><?php echo $row['tenkhachhang'] ?></td>
			<td><?php echo $row['diachi'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['dienthoai'] ?></td>
			<td>
				<?php
				if($row['cart_status']==1){
					echo '<a href="module/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'">Đơn Hàng Mới</a>';
				}else{
					echo 'Đã Xử Lý';
				}
				?>
			</td>
			<td><?php echo $row['cart_date'] ?></td>
			<td>
				<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>