-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2022 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(9, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(10, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_tenbaiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_tenbaiviet`, `tenbaiviet`, `hinhanh`, `tomtat`, `noidung`, `id_baiviet`, `tinhtrang`) VALUES
(1, 'Giày Mới', '1668343145_baiviet2.png', 'Sắp có gì', 'Chưa có gì', 8, 1),
(3, 'Giày trẻ em mới ', '1668343974_banner.png', '<h2>Há Há</h2>', '<h2>Hố Hố</h2>', 6, 1),
(4, 'Dép mới', '1668347857_balo5.png', '<p>123123123</p>', '<p>123123123</p>', 9, 1),
(5, 'Tuyển dụng nhân viên mới', '1668478218_baiviet1.png', '<p>Cần tuyển nhân viên 1 nam 1 nữ</p>', '<p>Yêu cầu: Từng có kinh nghiệm trong việc bán hàng online</p>', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_user`, `code_cart`, `cart_status`, `cart_date`) VALUES
(26, 14, '5', 0, ''),
(27, 14, '3', 0, ''),
(28, 14, '2495', 0, ''),
(29, 14, '6523', 0, '2022-11-16 08:50:24'),
(30, 14, '2606', 0, '2022-11-16 10:46:22'),
(31, 14, '1525', 0, '2022-11-16 10:50:13'),
(32, 14, '1533', 0, '2022-11-16 10:56:36'),
(33, 14, '6476', 0, '2022-11-16 11:00:46'),
(34, 14, '1505', 0, '2022-11-16 11:05:21'),
(35, 14, '6394', 0, '2022-11-16 11:06:43'),
(36, 14, '763', 0, '2022-11-16 11:11:01'),
(37, 14, '2270', 0, '2022-11-16 11:15:15'),
(38, 14, '7563', 0, '2022-11-16 11:18:16'),
(39, 14, '7708', 0, '2022-11-16 11:21:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '8689', 10, 6),
(8, '8689', 8, 1),
(9, '6181', 10, 6),
(10, '6181', 8, 1),
(11, '8704', 10, 1),
(12, '8520', 11, 3),
(13, '8520', 8, 2),
(14, '6945', 11, 4),
(15, '6945', 9, 3),
(16, '1090', 12, 3),
(17, '1090', 11, 4),
(18, '3732', 12, 3),
(19, '8127', 12, 1),
(20, '8127', 10, 1),
(21, '2946', 10, 2),
(22, '3387', 12, 2),
(23, '3387', 9, 4),
(24, '1459', 12, 3),
(25, '1459', 9, 5),
(26, '5205', 12, 3),
(27, '5205', 10, 2),
(28, '5205', 9, 1),
(29, '404', 12, 3),
(30, '404', 9, 3),
(31, '404', 11, 1),
(32, '2791', 10, 4),
(33, '2791', 12, 3),
(34, '9607', 12, 3),
(35, '9607', 9, 3),
(36, '634', 12, 3),
(37, '634', 9, 2),
(38, '6715', 12, 3),
(39, '6715', 6, 3),
(40, '2831', 12, 4),
(41, '2831', 6, 3),
(42, '4223', 10, 3),
(43, '4223', 11, 3),
(44, '8189', 12, 3),
(45, '8189', 9, 3),
(46, '5', 12, 1),
(47, '5', 11, 1),
(48, '5', 10, 1),
(49, '3', 11, 2),
(50, '3', 10, 1),
(51, '3', 12, 1),
(52, '2495', 12, 1),
(53, '2495', 11, 1),
(54, '6523', 12, 1),
(55, '2606', 12, 3),
(56, '2606', 9, 3),
(57, '1525', 12, 3),
(58, '1525', 6, 3),
(59, '1533', 11, 3),
(60, '6476', 12, 4),
(61, '1505', 12, 3),
(62, '6394', 10, 4),
(63, '763', 11, 3),
(64, '2270', 12, 3),
(65, '2270', 9, 3),
(66, '7563', 12, 3),
(67, '7708', 12, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(9, 'Giày nam', 2),
(10, 'Giày nữ', 2),
(11, 'Giày trẻ em', 4),
(13, 'Giày bóng đá 123', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(6, 'Tin thời trang 45', 4),
(8, 'Tin thời trang 4', 4),
(9, 'Tin thời trang 2', 11),
(10, 'Tin tuyển dụng 123', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `thongtinlienhe`) VALUES
(1, '<figure class=\"image\"><img src=\"https://caodangsaigon.edu.vn/images/SEO/CNTT/e61df3c3768380ddd992.jpg\" alt=\"Bí Mật Nghề Hacker Mũ Trắng - Có “Nguy Hiểm” Như Tưởng Tượng?\"></figure><ul><li><strong>Tên chủ shop: Hoàng Phố</strong></li><li><strong>Số điện thoại: 0935649878</strong></li><li><strong>Địa Chỉ: Đà Nẵng</strong></li><li><strong>FB: </strong><a href=\"https://www.facebook.com/profile.php?id=100008711898122\"><strong>https://www.facebook.com/profile.php?id=100008711898122</strong></a></li><li><strong>Mail: </strong><a href=\"mailto:ronhoangdn1970@gmail.com\"><strong>ronhoangdn1970@gmail.com</strong></a></li></ul><p>Mong bạn liên hệ với chúng tôi để có những trải nghiệm tốt nhất.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(5, 'Giày Nike 5', 'Ni-004', '1500000', 10, '1666667972_banner.jpg', '123', '123', 0, 10),
(6, 'Giày Nike 6', 'Ni-005', '12112121', 12, '1666784766_giay1.jpg', '123', '123', 1, 11),
(7, 'Giày Nike 7', 'Ni-007', '123123123', 13, '1666785065_giay2.jpg', '2143345', '452345234', 1, 9),
(8, 'Giày Nike 8', 'Ni-008', '1500000', 13, '1666789680_giay1.jpg', '123', '123', 1, 10),
(9, 'Giày Nike', 'Ni-001', '1500000', 10, '1666789699_giay1.jpg', '123234', '21345234', 1, 11),
(10, 'Giày Nike 10', 'Ni-009', '30000000', 13, '1668343175_anh3.png', '2341234', '12345345', 1, 9),
(11, 'Giày Nike 2', 'Ni-002', '1500000', 10, '1668092836_balo3.png', '123', '123', 1, 11),
(12, 'Giày bóng đá 1', 'BA 01', '1200000', 3, '1668478110_capkeo2.png', '<p>Giày Bóng Đá nam</p>', '<p>Siêu bền siêu đẹp</p>', 1, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id_thongke` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id_thongke`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2022-11-10', 10, '1500000', 3),
(2, '2022-11-11', 123, '2000000', 8),
(3, '2022-11-12', 18, '1000000', 2),
(4, '2022-11-13', 456, '3000000', 9),
(5, '2022-11-14', 45, '5000000', 15),
(6, '2022-11-15', 246, '4000000', 10),
(7, '2022-11-16', 262, '20300000', 37),
(8, '2022-09-20', 2467, '3000000', 9),
(9, '2022-06-20', 2461, '3200000', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(12, 'Nguyễn Văn Sáng', 'sangnv@gmail.com', 'Đà Nẵng', '9c813ccee508d31af64390e4d4dff236', '012345678'),
(13, 'Hoàng Phố', 'ronhoangdn1970@gmail.com', 'Đà Nẵng', 'eada064e79f3078eedf2453bece972a3', '0935649878'),
(14, 'Tạ Thúy Vinh', 'thuyvinh0935@gmail.com', 'K90 H15/3 Đống Đa', '8ad43eb39f1b9ecc15990a276c700793', '0935285868');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_tenbaiviet`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id_thongke`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_tenbaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id_thongke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
