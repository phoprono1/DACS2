<?php
$sql_baiviet = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_baiviet = $_GET[id] ORDER BY tbl_baiviet.id_tenbaiviet DESC";
$query_baiviet = mysqli_query($mysqli,$sql_baiviet);
$sql_cate_bv = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet = $_GET[id] LIMIT 1";
$query_cate_bv = mysqli_query($mysqli,$sql_cate_bv);
$row_tieude_bv = mysqli_fetch_array($query_cate_bv);
?>
<h3>Danh mục bài viết: 
	<?php echo $row_tieude_bv['tendanhmuc_baiviet']; ?></h3>
	<ul class="product_list">
		<?php
		while($row_baiviet = mysqli_fetch_array($query_baiviet)){
			?>
			<li>
				<a href="index.php?quanly=baiviet&id=<?php echo $row_baiviet['id_tenbaiviet'] ?>">
					<img src="ADMIN/module/quanlybaiviet/uploads/<?php echo $row_baiviet['hinhanh'] ?>">
					<p class="title_product">Tên Bài Viết : <?php echo $row_baiviet['tenbaiviet'] ?></p>	
				</a>
				<p class="price_product">Tóm Tắt <?php echo $row_baiviet['tomtat'] ?></p>
			</li>
			<?php
		}
		?>
	</ul>