-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2019 lúc 01:46 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `ma_dienthoai` int(10) UNSIGNED NOT NULL,
  `ma_hang` int(10) UNSIGNED NOT NULL,
  `ten_dienthoai` varchar(225) NOT NULL,
  `mau_sac` varchar(255) NOT NULL,
  `gia_dienthoai` float NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `trang_thai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`ma_dienthoai`, `ma_hang`, `ten_dienthoai`, `mau_sac`, `gia_dienthoai`, `mo_ta`, `ngay_dang`, `trang_thai`) VALUES
(1, 1, 'Iphone XS max', 'den', 1800, 'mau dien thoai moi nhat cua Iphone', '2019-01-22 19:15:00', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_dienthoai`
--

CREATE TABLE `hang_dienthoai` (
  `ma_hang` int(11) UNSIGNED NOT NULL,
  `ten_hang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hang_dienthoai`
--

INSERT INTO `hang_dienthoai` (`ma_hang`, `ten_hang`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'oppo'),
(4, 'lg'),
(5, 'sony'),
(6, 'xiaomi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`ma_dienthoai`),
  ADD KEY `ma_hang` (`ma_hang`);

--
-- Chỉ mục cho bảng `hang_dienthoai`
--
ALTER TABLE `hang_dienthoai`
  ADD PRIMARY KEY (`ma_hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `ma_dienthoai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hang_dienthoai`
--
ALTER TABLE `hang_dienthoai`
  MODIFY `ma_hang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`ma_hang`) REFERENCES `hang_dienthoai` (`ma_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
