-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2020 at 10:20 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`id`, `username`, `password`, `email`, `phone`, `name`, `birthday`, `sex`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'long.bk.khmt@gmail.com', '0938186100', 'Hoàng Long Lê', '12/12/1999', 'Nam'),
(2, 'phpmyadmin', 'c4ca4238a0b923820dcc509a6f75849b', 'long.bk.khmt@gmail.co', '0938186100', 'Hoàng Long Lê', '12/12/1999', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`id`, `name`, `img`) VALUES
(8, 'MEDICINE & HEALTH', '../upload/p-4.jpg'),
(10, 'VITAMINS & SUPPLEMENTS', '../upload/p-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `vote` binary(1) DEFAULT '3',
  `msg` text COLLATE utf8_unicode_ci,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `OP`
--

CREATE TABLE `OP` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OP`
--

INSERT INTO `OP` (`id_order`, `id_product`, `quantity`) VALUES
(9, 1, 3),
(10, 1, 5),
(10, 2, 4),
(11, 1, 1),
(11, 2, 1),
(12, 1, 1),
(13, 1, 3),
(13, 4, 1),
(13, 6, 1),
(14, 1, 1),
(14, 4, 1),
(14, 5, 1),
(14, 6, 1),
(14, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ORDERS`
--

CREATE TABLE `ORDERS` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `paid` binary(1) DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ORDERS`
--

INSERT INTO `ORDERS` (`id`, `date`, `paid`, `id_user`, `price`) VALUES
(9, '2020-07-09 01:52:57', 0x31, 3, '2100000.00'),
(10, '2020-07-09 02:41:48', 0x31, 3, '3540000.00'),
(11, '2020-07-09 02:47:30', 0x31, 3, '710000.00'),
(12, '2020-07-09 03:13:35', 0x31, 3, '700000.00'),
(13, '2020-07-09 09:58:57', 0x30, 3, '2515000.00'),
(14, '2020-07-09 09:59:38', 0x30, 3, '1245000.00');

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_productor` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`id`, `name`, `price`, `quantity`, `description`, `img`, `id_productor`, `id_category`) VALUES
(1, 'Alipas Platinum 30VQ', '700000.00', 23, '<blockquote><strong>1. C&Aacute;CH D&Ugrave;NG</strong></blockquote>\n\n<p>&nbsp;&nbsp; + Uống 1 vi&ecirc;n / ng&agrave;y trước hoặc trong bữa ăn.<br />\n&nbsp;&nbsp; + Uống 1 vi&ecirc;n x 2 lần/ng&agrave;y, (s&aacute;ng, chiều), uống trong hoặc sau bữa ăn.<br />\n&nbsp; &nbsp;+ N&ecirc;n d&ugrave;ng thường xuy&ecirc;n.</p>\n\n<blockquote><strong>2. ĐỐI TƯỢNG SỬ DỤNG</strong></blockquote>\n\n<p>Nam giới tr&ecirc;n 18 tuổi cần tăng cường c&aacute;c chức năng tr&ecirc;n</p>\n', '../upload/eco-alipasplatinum-500x500.jpg', 4, 8),
(2, 'Vitamin C', '10000.00', 15, '<p>asasdasdasadadadasaas</p>\n\n<p>adasasa</p>\n\n<p>&nbsp;</p>\n\n<p>adasdadad</p>\n\n<p>adadadas</p>\n', '../upload/about-medicine.png', 4, 10),
(3, 'Swiss Energy Multi Vitamins + Biotin', '78000.00', 10, '<p>Thực phẩm bảo vệ sức khỏe vi&ecirc;n sủi Swiss Energy Multi Vitamins + Biotin l&agrave; sản phẩm đến từ Thụy Sỹ với sự kết hợp Biotin tốt cho da t&oacute;c v&agrave; bổ sung c&aacute;c loại vitamin cần thiết gi&uacute;p cơ thể bạn lu&ocirc;n khỏe mạnh.</p>\n', '../upload/P12808_1_l.jpg', 4, 10),
(4, 'Vitamin E 400 IU', '400000.00', 10, '<p>- Vitamin E Kirkland Mỹ - Dưỡng Da Chống L&atilde;o H&oacute;a nhập khẩu từ Mỹ.<br />\n- Vi&ecirc;n uống vitamin Mỹ chứa th&agrave;nh phần ho&agrave;n to&agrave;n tự nhi&ecirc;n sẽ gi&uacute;p bổ sung dưỡng chất cho da, ngăn ngừa nếp nhăn da, gi&uacute;p da trắng s&aacute;ng v&agrave; ngăn ngừa bệnh tật.</p>\n', '../upload/Vitamin-E-Kirland.png', 4, 10),
(5, 'Mirrolla 270mg', '100000.00', 20, '<h1>Vitamin E Đỏ Của Nga Mirrolla 270mg Hộp 30 Vi&ecirc;n</h1>\n', '../upload/vitamin-e-do-cua-nga-mirrolla.jpg', 4, 10),
(6, 'Bromhexin 4mg', '15000.00', 20, '<p>L&agrave;m tan đ&agrave;m trong vi&ecirc;m kh&iacute; phế quản, vi&ecirc;m phế quản mạn t&iacute;nh, c&aacute;c bệnh phế quản - phổi mạn t&iacute;nh. Bromhexin thường được d&ugrave;ng như một chất bổ trợ với kh&aacute;ng sinh khi bị nhiễm khuẩn nặng đường h&ocirc; hấp.</p>\n', '../upload/P01526H_1_l.jpg', 4, 8),
(7, 'Strepsils Orange & Vita C', '30000.00', 20, '<p>Vi&ecirc;n ngậm Strepsils Orange &amp; Vitamin C gi&uacute;p kh&aacute;ng khuẩn l&agrave;m giảm đau họng d&ugrave;ng cho trẻ em v&agrave; người lớn.</p>\n\n<p>Mỗi vi&ecirc;n ngậm chứa sự kết hợp 2 chất kh&aacute;ng khuẩn th&iacute;ch hợp cho cả trẻ em v&agrave; người lớn.</p>\n\n<p>Vi&ecirc;n ngậm kh&aacute;ng khuẩn Strepsils Orange &amp; Vitamin C được bọc trong vỉ chắc chắn, dễ bảo quản, dễ sử dụng.</p>\n\n<p>Thuận tiện để mang theo khi đi c&ocirc;ng t&aacute;c xa.</p>\n', '../upload/P00475H_1_l.jpg', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTOR`
--

CREATE TABLE `PRODUCTOR` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `PRODUCTOR`
--

INSERT INTO `PRODUCTOR` (`id`, `name`, `description`, `img`) VALUES
(3, '123123HLASD', '<p><em>Aadadasdasdasd</em></p>\n\n<p><em>asdasd</em></p>\n', '../upload/Screenshot from 2020-06-17 22-24-08.png'),
(4, 'PRODUCTOR', '<p><strong>productor</strong></p>\n\n<p><strong><em>adsasdasd</em></strong></p>\n\n<p><strong><em><s>asdasdasd</s></em></strong></p>\n', '../upload/Screenshot from 2020-06-17 22-20-19.png'),
(5, 'Pharmacity', '<p>C&ocirc;ng ty Cổ phần Dược phẩm&nbsp;<em>Pharmacity</em>&nbsp;cung cấp sản phẩm điều trị bệnh, chăm s&oacute;c sức khỏe uy t&iacute;n qua nh&agrave; thuốc online v&agrave; hệ thống hiệu thuốc&nbsp;<em>Pharmacity</em></p>\n', '../upload/logo-pmc.png');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`id`, `username`, `password`, `email`, `phone`, `name`, `birthday`, `sex`, `address`) VALUES
(3, 'hoanglong', 'c81e728d9d4c2f636f067f89cc14862c', 'hoanglongle@gmail.com', '0938186100', 'Hoàng Long Lê', '12/12/1999', 'Nam', 'KTX Khu B DHQG TPHCM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `OP`
--
ALTER TABLE `OP`
  ADD PRIMARY KEY (`id_order`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_productor` (`id_productor`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `PRODUCTOR`
--
ALTER TABLE `PRODUCTOR`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ORDERS`
--
ALTER TABLE `ORDERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `PRODUCTOR`
--
ALTER TABLE `PRODUCTOR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD CONSTRAINT `COMMENT_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `USER` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `COMMENT_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `PRODUCT` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `OP`
--
ALTER TABLE `OP`
  ADD CONSTRAINT `OP_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `ORDERS` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `OP_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `PRODUCT` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD CONSTRAINT `ORDERS_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `USER` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD CONSTRAINT `PRODUCT_ibfk_1` FOREIGN KEY (`id_productor`) REFERENCES `PRODUCTOR` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PRODUCT_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `CATEGORY` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PRODUCT_ibfk_3` FOREIGN KEY (`id_productor`) REFERENCES `PRODUCTOR` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PRODUCT_ibfk_4` FOREIGN KEY (`id_category`) REFERENCES `CATEGORY` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PRODUCT_ibfk_5` FOREIGN KEY (`id_productor`) REFERENCES `PRODUCTOR` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `PRODUCT_ibfk_6` FOREIGN KEY (`id_category`) REFERENCES `CATEGORY` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
