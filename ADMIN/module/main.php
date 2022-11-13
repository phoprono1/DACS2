<div class="clear"></div>
<div class="main">
	<?php
	if(isset($_GET['action']) && isset($_GET['query'])){
		$tam = $_GET['action'];
		$query = $_GET['query'];
	}else{
		$tam = '';
		$query = '';
	}
	if($tam == 'quanlydanhmucsanpham' && $query=='them'){
		include("module/quanlydanhmucsanpham/them.php");
		include("module/quanlydanhmucsanpham/lietke.php");
	}elseif($tam == 'quanlydanhmucsanpham' && $query=='sua'){
		include("module/quanlydanhmucsanpham/sua.php");
	}elseif($tam == 'quanlysanpham' && $query=='them'){
		include("module/quanlysanpham/them.php");
		include("module/quanlysanpham/lietke.php");
	}elseif($tam == 'quanlysanpham' && $query=='sua'){
		include("module/quanlysanpham/sua.php");
	}elseif($tam == 'quanlydonhang' && $query=='lietke'){
		include("module/quanlydonhang/lietke.php");
	}elseif($tam == 'donhang' && $query=='xemdonhang'){
		include("module/quanlydonhang/xemdonhang.php");
	}else{
		include("module/dashboard.php");
	}
	?>
</div>