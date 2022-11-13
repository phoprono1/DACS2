<p>Giỏ hàng
	<?php
	if(isset($_SESSION['dangky'])){
		echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
		echo $_SESSION['id_khachhang'];
	}
	?>
</p>
<?php
if(isset($_SESSION['cart'])){
}
?>
<table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
	<tr>
		<th>ID</th>
		<th>Mã Sản Phẩm</th>
		<th>Tên Sản Phẩm</th>
		<th>Hình Ảnh</th>
		<th>Số Lượng</th>
		<th>Giá Sản Phẩm</th>
		<th>Thành Tiền</th>
		<th>Quản Lý</th>
	</tr>
	<?php
	if(isset($_SESSION['cart'])){
		$i = 0;
		$tongtien = 0;
		foreach($_SESSION['cart'] as $cart_item){
			$thanhtien = $cart_item['soluong']*$cart_item['giasanpham'];
			$tongtien+=$thanhtien;
			$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $cart_item['masanpham']; ?></td>
				<td><?php echo $cart_item['tensanpham']; ?></td>
				<td><img src="ADMIN/module/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
				<td>
					<a href="PAGE/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
					<?php echo $cart_item['soluong']; ?>
					<a href="PAGE/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
				</td>
				<td><?php echo number_format($cart_item['giasanpham'],0,',','.').'VND'; ?></td>
				<td><?php echo number_format($thanhtien,0,',','.').'VND'; ?></td>
				<td><a href="PAGE/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
			</tr>
			<?php
		}
		?>
		<tr>
			<td colspan="8">
				<p style="float: left;">Tổng Tiền: <?php echo number_format($tongtien,0,',','.').'VND' ?></p><br>
				<p style="float: right;"><a href="PAGE/main/themgiohang.php?xoatatca=1">Xóa Tất Cả</a></p>
				<div style="clear: both;"></div>
				<?php
				if(isset($_SESSION['dangky'])){
					?>
					<p><a href="PAGE/main/thanhtoan.php">Đặt Hàng</a></p>
					<?php
				}else{
					?>
					<p><a href="index.php?quanly=dangky">Đăng Ký Đặt Hàng</a></p>
					<?php
				}
				?>
			</td>
		</tr>
		<?php
	}else{
		?>
		<tr>
			<td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
		</tr>
		<?php
	}
	?>
</table>