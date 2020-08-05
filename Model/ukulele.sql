-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th8 05, 2020 lúc 04:24 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ukulele`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `phonenumber` varchar(225) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `phonenumber`, `role`) VALUES
(1, 'hung', 'hung', '76565564545', 0),
(2, 'admin', 'admin', '76565564545', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_account` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `payment` varchar(225) DEFAULT NULL,
  `comment` varchar(225) DEFAULT NULL,
  `listSp` varchar(225) DEFAULT NULL,
  `id_account` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `payment`, `comment`, `listSp`, `id_account`) VALUES
(1, 'hung', '1111111111232', 'hungsdasdasdsad', '315000', 'sdsadasdsadad', '2, 3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(220) DEFAULT NULL,
  `oldPrice` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(220) DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `oldPrice`, `price`, `quantity`, `description`, `image`, `type`) VALUES
(2, 'consert 2', 10000, 9000, 3, 'normal', 'Assets/Image/zim.jpg', 'ukulele'),
(3, 'consert 3', 10000, 90000, 4, 'normal', 'Assets/Image/tenor.jpg', 'ukulele'),
(4, 'consert 1', 10000, 90000, 5, 'normal', 'Assets/Image/tenor.jpg', 'ukulele'),
(5, 'consert 1', 10000, 90000, 5, 'normal', 'assets/image/tenor.jpg', 'accessory'),
(6, 'consert 2', 10000, 0, 4, 'normal', 'assets/image/tiki.jpg', 'accessory'),
(7, 'consert 3', 10000, 90000, 5, 'normal', 'assets/image/tenor.jpg', 'ukulele'),
(8, 'consert 1', 10000, 90000, 5, 'normal', 'assets/image/tiki.jpg', 'accessory'),
(9, 'ukulele hung', NULL, 12000, 1, 'spec', 'Assets/Image/cuu.jpg', 'ukulele');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
