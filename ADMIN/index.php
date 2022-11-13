<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="CSS/styleadmincp.css">
</head>
<body>
	<h3 class="title_admin">Welcome to AdminCP</h3>
	<div class="wrapper">
		<?php
		include("config/config.php");
		include("module/header.php");
		include("module/menu.php");
		include("module/main.php");
		include("module/footer.php");
		?>	
	</div>
	
</body>
</html>