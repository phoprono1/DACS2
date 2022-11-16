<?php
$sql_baiviet = "SELECT * FROM tbl_baiviet WHERE id_tenbaiviet = $_GET[id] LIMIT 1";
$query_baiviet = mysqli_query($mysqli,$sql_baiviet);
$query_baiviet_all = mysqli_query($mysqli,$sql_baiviet);
$row_bv_title = mysqli_fetch_array($query_baiviet);
?>
<h3>Bài viết: <span style="text-align:center;text-transform: uppercase;"><?php echo $row_bv_title['tenbaiviet'];?></span></h3>
<ul class="baiviet">
	<?php
	while($row_baiviet = mysqli_fetch_array($query_baiviet_all)){
		?>
		<li>
			<h4><?php echo $row_baiviet['tenbaiviet'] ?></h4>
			<div class="baiviet_hinhanh"><img src="ADMIN/module/quanlybaiviet/uploads/<?php echo $row_baiviet['hinhanh'] ?>"></div>
			<p class="baiviet_tomtat"><?php echo $row_baiviet['tomtat'] ?></p>	
			<p class="baiviet_noidung"><?php echo $row_baiviet['noidung'] ?></p>
		</li>
		<?php
	}
	?>
</ul>