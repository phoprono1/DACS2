<?php
include('../../config/config.php');
$tenbaiviet = $_POST['tenbaiviet'];
//Xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;

$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['thembaiviet'])){
	//them
	$sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,hinhanh,tomtat,noidung,tinhtrang,id_baiviet) VALUE('".$tenbaiviet."','".$hinhanh_time."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);
		header('Location:../../index.php?action=quanlybaiviet&query=them');
	}elseif(isset($_POST['suabaiviet'])){
	//sua
		if(!empty($_FILES['hinhanh']['name'])){
			move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);
			$sql = "SELECT * FROM tbl_baiviet WHERE id_tenbaiviet = '$_GET[idtenbaiviet]' LIMIT 1";
			$sql_sua = "UPDATE tbl_baiviet SET tenbaiviet = '".$tenbaiviet."', hinhanh = '".$hinhanh_time."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."', id_baiviet = '".$danhmuc."' WHERE id_tenbaiviet= '$_GET[idtenbaiviet]'";
			//xoa hinh anh cu	
			$query = mysqli_query($mysqli,$sql);
			while($row = mysqli_fetch_array($query)){
				unlink('uploads/'.$row['hinhanh']);
			}
		}else{	
			$sql_sua = "UPDATE tbl_baiviet SET tenbaiviet = '".$tenbaiviet."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."', id_baiviet = '".$danhmuc."' WHERE id_tenbaiviet= '$_GET[idtenbaiviet]'";	
		}
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=quanlybaiviet&query=them');	
	}else{
	//xoa
		$id = $_GET['idtenbaiviet'];	
		$sql = "SELECT * FROM tbl_baiviet WHERE id_tenbaiviet = '$id' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row=mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}	
		$sql_xoa = "DELETE FROM tbl_baiviet WHERE id_tenbaiviet = '$id'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlybaiviet&query=them');
	}
?>