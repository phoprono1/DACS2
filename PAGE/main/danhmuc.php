<?php
$sql_sanpham = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = $_GET[id] ORDER BY tbl_sanpham.id_sanpham DESC";
$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = $_GET[id] LIMIT 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_tieude = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục sản phẩm: 
	<?php echo $row_tieude['tendanhmuc']; ?></h3>
	<ul class="product_list">
		<?php
		while($row_sanpham = mysqli_fetch_array($query_sanpham)){
			?>
			<li>
				<a href="index.php?quanly=sanpham&id=<?php echo $row_sanpham['id_sanpham'] ?>">
					<img src="ADMIN/module/quanlysanpham/uploads/<?php echo $row_sanpham['hinhanh'] ?>">
					<p class="title_product">Tên sản phẩm : <?php echo $row_sanpham['tensanpham'] ?></p>
					<p class="price_product">Giá: <?php echo number_format($row_sanpham['giasanpham'],0,',','.').'vnd' ?></p>	
				</a>
			</li>
			<?php
		}
		?>
	</ul>