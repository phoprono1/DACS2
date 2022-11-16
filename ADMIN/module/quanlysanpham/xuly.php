<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$giasanpham = $_POST['giasanpham'];
//Xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$soluong = $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,masanpham,giasanpham,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUE('".$tensanpham."','".$masanpham."','".$giasanpham."','".$soluong."','".$hinhanh_time."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);
		header('Location:../../index.php?action=quanlysanpham&query=them');
	}elseif(isset($_POST['suasanpham'])){
	//sua
		if(!empty($_FILES['hinhanh']['name'])){
			move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);
			$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
			$sql_sua = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masanpham = '".$masanpham."', giasanpham = '".$giasanpham."', soluong = '".$soluong."', hinhanh = '".$hinhanh_time."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."', id_danhmuc = '".$danhmuc."' WHERE id_sanpham= '$_GET[idsanpham]'";
			//xoa hinh anh cu	
			$query = mysqli_query($mysqli,$sql);
			while($row = mysqli_fetch_array($query)){
				unlink('uploads/'.$row['hinhanh']);
			}
		}else{	
			$sql_sua = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masanpham = '".$masanpham."', giasanpham = '".$giasanpham."', soluong = '".$soluong."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."', id_danhmuc = '".$danhmuc."' WHERE id_sanpham= '$_GET[idsanpham]'";	
		}
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=quanlysanpham&query=them');	
	}else{
	//xoa
		$id = $_GET['idsanpham'];	
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row=mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}	
		$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '$id'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlysanpham&query=them');
	}
?>