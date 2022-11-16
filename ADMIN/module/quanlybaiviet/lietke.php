<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_baiviet=tbl_danhmucbaiviet.id_baiviet ORDER BY id_tenbaiviet DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);	
?>
<p>Liệt kê danh mục bài viết</p>
<table width="100%" border="1" style="border-collapse: collapse;">
	<tr>
		<th>ID</th>
		<th>Tên Bài Viết</th>
		<th>Danh Mục</th>
		<th>Hình Ảnh</th>
		<th>Nội Dung</th>
		<th>Tóm Tắt</th>
		<th>Trạng Thái</th>
		<th>Quản Lý</th>


	</tr>
	<?php
	$i=0;
	while ($row = mysqli_fetch_array($query_lietke_bv)) {
		$i++;
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['tenbaiviet'] ?></td>
			<td><?php echo $row['tendanhmuc_baiviet'] ?></td>
			<td><img width="150px" src="module/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>"></td>
			<td><?php echo $row['noidung'] ?></td>
			<td><?php echo $row['tomtat'] ?></td>
			<td><?php if($row['tinhtrang']==1){
				echo 'Kích Hoạt';				
			}else{
				echo 'Chưa Kích Hoạt';
			}
			?>

		</td>
		<td>
			<a href="module/quanlybaiviet/xuly.php?idtenbaiviet=<?php echo $row['id_tenbaiviet']?>">Xóa</a> | <a href="?action=quanlybaiviet&query=sua&idtenbaiviet=<?php echo $row['id_tenbaiviet']?>">Sửa</a> 
		</td>
	</tr>
	<?php
}
?>
</table>