<?php
session_start();
include("../../ADMIN/config/config.php");
require('../../Mail/sendmail.php');
require('../../Carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0,9999);
$insert_cart = "INSERT INTO tbl_cart(id_user,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	header('Location:../../index.php?quanly=camon');
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart, soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
				mysqli_query($mysqli,$insert_order_details);
			}
			$tieude = "Đặt hàng website Shopgiaydep.com thành công";
			$noidung1 = "<h3>Cảm ơn quý khách đã đặt hàng của chúng tôi với Mã đơn hàng: ".str_pad($code_order, 4, '0', STR_PAD_LEFT)."</h3>";
			$noidung2 = "<h4>Đơn hàng sẽ được xử lý trong thời gian sớm nhất</h4>";
			$noidung3 = "<h5>Mọi thắc mắc xin vui lòng liên hệ facebook: <a href='https://www.facebook.com/profile.php?id=100008711898122'>Rôn Hoàng</a></h5>";
			$maildathang = $_SESSION['email'];
			$mail = new Mailer();
			$mail->dathangmail($tieude,$noidung1,$noidung2,$noidung3,$maildathang);
		}
		unset($_SESSION['cart']);
	?>
