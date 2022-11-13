<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEB GIÀY DÉP</title>
	<link rel="stylesheet" type="text/css" href="CSS\style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

	<div class="wrapper">
		<?php
		session_start();
		include("ADMIN/config/config.php");
		include("PAGE/header.php");
		include("PAGE/menu.php");
		include("PAGE/main.php");
		include("PAGE/footer.php");
		?>
	</div>

</body>
</html>