<p>Tin tức Mới Nhất</p>
<?php
$sql_baiviet = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id_tenbaiviet DESC";
$query_baiviet = mysqli_query($mysqli,$sql_baiviet);
?>
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