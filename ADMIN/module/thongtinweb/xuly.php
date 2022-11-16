<?php
include('../../config/config.php');
$thongtinlienhe = $_POST['thongtinlienhe'];
	if(isset($_POST['submitlienhe'])){
	//sua
		$sql_update = "UPDATE tbl_lienhe SET thongtinlienhe = '".$thongtinlienhe."' WHERE id_lienhe=1";
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlyweb&query=capnhat');	

	}
?>