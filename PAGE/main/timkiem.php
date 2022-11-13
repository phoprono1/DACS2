<?php
if(isset($_POST['timkiem'])){
	$tukhoa = $_POST['tukhoa'];
}
$sql_sanpham = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ";
$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
?>
<h3>Sản phẩm tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
<ul class="product_list">
	<?php
	while($row = mysqli_fetch_array($query_sanpham)){
		?>
		<li>
			<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
				<img src="ADMIN/module/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
				<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
				<p class="price_product">Giá: <?php echo number_format($row['giasanpham'],0,',','.').'vnd' ?></p>
				<p style="text-align: center;color: #d1d1d1;"><?php echo $row['tendanhmuc'] ?></p>
			</a>
		</li>
		<?php
	}
	?>
</ul>