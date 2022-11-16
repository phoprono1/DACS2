<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="CSS/styleadmincp.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('Location:login.php');
}
?>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#tomtat' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#noidung' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<script>
		ClassicEditor
		.create( document.querySelector( '#thongtinlienhe' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			thongke();
			var char = new Morris.Area({
				element: 'chart',

				xkey: 'date',

				ykeys: ['date','order','sales','quantity'],

				labels: ['Ngày Đặt','Đơn Hàng', 'Doanh Thu', 'Số Lượng Bán Ra']
			});

			$('.select-date').change(function(){
				var thoigian = $(this).val();
				if(thoigian=='7ngay'){
					var text = '7 ngày qua';
				}else if(thoigian=='28ngay'){
					var text = '28 ngày qua';
				}else if(thoigian=='90ngay'){
					var text = '90 ngày qua';
				}else if(thoigian=='365ngay'){
					var text = '365 ngày qua';
				}
				$.ajax({
					url:"module/thongke.php",
					method:"POST",
					dataType:"JSON",
					data:{thoigian:thoigian},
					success:function(data){
						char.setData(data);
						$('#text-date').text(text);
					}
				});
			})

			function thongke(){
				var text = '365 ngày qua';
				$.ajax({
					url:"module/thongke.php",
					method:"POST",
					dataType:"JSON",
					success:function(data){
						char.setData(data);
						$('#text-date').text(text);
					}
				});
			}
		});
	</script>
</body>
</html>