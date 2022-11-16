<p>Chi Tiết Sản Phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = $_GET[id] LIMIT 1";
$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)){
	?>
	<div class="wrapper_chitiet">
		<div class="hinhanh_sanpham">
			<img width="100%" src="ADMIN/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
		</div>
		<form method="POST" action="PAGE/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
			<div class="chitiet_sanpham">
				<h3 style="margin: 0;">Tên Sản Phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
				<p>Mã Sản Phẩm: <?php echo $row_chitiet['masanpham'] ?></p>
				<p>Giá Sản Phẩm: <?php echo number_format($row_chitiet['giasanpham'],0,',','.'). "VND	" ?></p>
				<p>Số Lượng Sản Phẩm: <?php echo $row_chitiet['soluong'] ?></p>
				<p>Danh Mục Sản Phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
				<p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></p>
			</div>
		</form>
		
	</div>
	<div class="clear"></div>
	<div class="tabs">
		<ul id="tabs-nav">
			<li><a href="#tab1">Thông Số Kỹ Thuật</a></li>
			<li><a href="#tab2">Nội Dung Chi Tiết</a></li>
			<li><a href="#tab3">Hình Ảnh</a></li>
		</ul> <!-- END tabs-nav -->
		<div id="tabs-content">
			<div id="tab1" class="tab-content">
				<?php echo $row_chitiet['tomtat'] ?>
			</div>
			<div id="tab2" class="tab-content">
				<?php echo $row_chitiet['noidung'] ?>
			</div>
			<div id="tab3" class="tab-content">
				<img width="50%" src="ADMIN/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
			</div>
		</div> <!-- END tabs-content -->
	</div> <!-- END tabs -->

	<?php
}
?>
<script type="text/javascript" src="../../../app.js"></script>