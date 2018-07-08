-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2018 at 12:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batdongsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `du_an`
--

CREATE TABLE `du_an` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `hot` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `new` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `noibat` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `SEO` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_05_134601_create_nhom_du_an_table', 1),
(4, '2018_07_05_143257_create_du_an_table', 1),
(5, '2018_07_06_023706_create_nhom_san_giao_dich_table', 1),
(6, '2018_07_06_023730_create_san_giao_dich_table', 1),
(7, '2018_07_06_085740_create_config_table', 1),
(8, '2018_07_07_063829_create_news_category_table', 1),
(9, '2018_07_07_063920_crate_news_table', 1),
(10, '2018_07_08_024016_update_san-giao-dich_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `SEO` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `hot` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `new` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `noibat` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhom_du_an`
--

CREATE TABLE `nhom_du_an` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhom_san_giao_dich`
--

CREATE TABLE `nhom_san_giao_dich` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhom_san_giao_dich`
--

INSERT INTO `nhom_san_giao_dich` (`id`, `title`, `slug`, `description`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Đất Nền', 'dat-nen', NULL, 'active', 1, '2018-07-07 20:18:21', '2018-07-07 20:18:21'),
(2, 'Đất Thổ Cư', 'dat-tho-cu', NULL, 'active', 2, '2018-07-07 20:18:31', '2018-07-07 20:18:31'),
(3, 'Chung Cư', 'chung-cu', NULL, 'active', 3, '2018-07-07 20:18:43', '2018-07-07 20:18:54'),
(4, 'Nhà Phố', 'nha-pho', NULL, 'active', 4, '2018-07-07 20:18:50', '2018-07-07 20:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_giao_dich`
--

CREATE TABLE `san_giao_dich` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `userPostAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPostPhone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPostEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPostName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('Mua Bán','Cho Thuê') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `sort` int(11) DEFAULT NULL,
  `SEO` longtext COLLATE utf8mb4_unicode_ci,
  `hot` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `new` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `noibat` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_giao_dich`
--

INSERT INTO `san_giao_dich` (`id`, `title`, `slug`, `image`, `cate_id`, `userPostAddress`, `userPostPhone`, `userPostEmail`, `userPostName`, `room`, `price`, `area`, `type`, `address`, `summary`, `description`, `status`, `sort`, `SEO`, `hot`, `new`, `noibat`, `created_at`, `updated_at`) VALUES
(1, 'CHO THUÊ TÒA NHÀ VĂN PHÒNG SỐ 8 PHỐ DUY TÂN - QUẬN CẦU GIẤY - HN', 'cho-thue-toa-nha-van-phong-so-8-pho-duy-tan---quan-cau-giay---hn', '/uploads/hinh-anh/1/san-giao-dich/5b41836e8914b.jpg', 2, 'Nghệ An', '963227710', 'loi.pham@novaweb.vn', 'Lợi Đẹp Trai', 4, '2100000000', 'Hà Nội', 'Mua Bán', 'Quận Cầu Giấy', 'Hotline: 0914-954-155, 0974-713-391 . Vị trí: Đường Trần Thái Tông khu ĐTM Yên Hòa, Cầu Giấy, đối diện KeangNam, MobiFone, dễ dàng kết nối với các tuyến đường trung tâm Phạm Hùng, Hồ Tùng Mậu, Lê Đức Thọ. Quy Mô: tòa nhà gồm 25 tầng nổi, 2 tầng hầm ....', '<p>Th&ocirc;ng tin m&ocirc; tả</p>\r\n\r\n<p>Hotline: 0914-954-155, 0974-713-391&nbsp;</p>\r\n\r\n<p>Vị tr&iacute;: Đường Trần Th&aacute;i T&ocirc;ng khu ĐTM Y&ecirc;n H&ograve;a, Cầu Giấy, đối diện KeangNam, MobiFone, dễ d&agrave;ng kết nối với c&aacute;c tuyến đường trung t&acirc;m Phạm H&ugrave;ng, Hồ T&ugrave;ng Mậu, L&ecirc; Đức Thọ</p>\r\n\r\n<p>Quy M&ocirc;: t&ograve;a nh&agrave; gồm 25 tầng nổi, 2 tầng hầm&nbsp;</p>\r\n\r\n<p>Chiều cao trần: 3m</p>\r\n\r\n<p>Thang m&aacute;y: 8 thang m&aacute;y hiệu Mitsubishi tốc độ cao</p>\r\n\r\n<p>Diện t&iacute;ch s&agrave;n: 2100m2</p>\r\n\r\n<p>Diện t&iacute;ch sử dụng: 1940 m2</p>\r\n\r\n<p>Gi&aacute; thu&ecirc;: 180.000đ/m2/th&aacute;ng</p>\r\n\r\n<p>Miễn ph&iacute; từ 01 th&aacute;ng tiền thu&ecirc;</p>\r\n\r\n<p>Diện t&iacute;ch trống:Tầng 1- 1950 m2,</p>\r\n\r\n<p>Tầng 2: 1950 m2</p>\r\n\r\n<p>Tầng 3: 272m2, 427 m2</p>\r\n\r\n<p>Tầng 4: 1725 m2</p>\r\n\r\n<p>B&agrave;n giao nội thất văn ph&ograve;ng: trần tấm thả khung xương nổi, s&agrave;n gạch gramic, hệ thống đ&egrave;n chiếu s&aacute;ng ti&ecirc;u chuẩn cho văn ph&ograve;ng,điều h&ograve;a trung t&acirc;m, v&aacute;ch ngăn chia khu vực thu&ecirc;,đầu chờ internet, ổ cắm</p>\r\n\r\n<p>Tiện &iacute;ch: Nh&agrave; h&agrave;ng, si&ecirc;u thị, s&acirc;n tennis, s&acirc;n b&oacute;ng đ&aacute;&hellip;&hellip;&hellip;.</p>\r\n\r\n<p>Thang bộ: 4 thang bộ tho&aacute;t hiểm.</p>\r\n\r\n<p>M&aacute;y ph&aacute;t điện dự ph&ograve;ng: C&oacute; m&aacute;y ph&aacute;t điện dự ph&ograve;ng phục vụ cho vận h&agrave;nh thang m&aacute;y, chiếu s&aacute;ng &hellip;. C&ocirc;ng suất dự ph&ograve;ng 100% khi xảy ra mất điện</p>\r\n\r\n<p>Hệ thống điện: hệ thống điện 3 pha.&nbsp;</p>\r\n\r\n<p>Hệ thống cảm biến nhiệt, cảnh b&aacute;o ch&aacute;y nổ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khu vệ sinh: gồm 2 khu trang thiết bị vệ sinh cao cấp&nbsp;</p>\r\n\r\n<p>Hệ thống camera văn ph&ograve;ng, camera h&agrave;nh lang</p>\r\n\r\n<p>Hệ thống an ninh: bảo vệ 24/24</p>\r\n\r\n<p>Hệ thống ph&ograve;ng ch&aacute;y chữa ch&aacute;y : ti&ecirc;u chuẩn an to&agrave;n việt nam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mọi th&ocirc;ng tin chi tiết vui l&ograve;ng li&ecirc;n hệ: C&ocirc;ng ty CP Dịch Vụ v&agrave; Địa Ốc Đất Xanh Miền Bắc</p>\r\n\r\n<p>Hotline: 0914-954-155, 0974-713-391</p>', 'active', 1, 'a:3:{s:5:\"title\";N;s:11:\"description\";N;s:8:\"keywords\";N;}', 'true', 'true', 'true', '2018-07-07 20:23:29', '2018-07-07 20:23:29'),
(2, 'Cần mua đất dự án Gia Hòa Quận 9 để ở', 'can-mua-dat-du-an-gia-hoa-quan-9-de-o', '/uploads/hinh-anh/1/san-giao-dich/5b41b58941e20.jpg', 1, 'Nghệ An', '0963227710', 'loi.pham@novaweb.vn', 'Lợi Đẹp Trai', 3, '2500000000', 'Hồ Chí Minh', 'Cho Thuê', 'Quận 7', 'Tôi là cá nhân cần tìm mua 01 lô đất để ở tại dự án Gia Hòa, Quận 9. DT: từ 120 - 150 m2. Hướng: Đông, ĐN, nam.', '<p>T&ocirc;i l&agrave; c&aacute; nh&acirc;n cần t&igrave;m mua 01 l&ocirc; đất để ở tại dự &aacute;n Gia H&ograve;a, Quận 9. DT: từ 120 - 150 m2. Hướng: Đ&ocirc;ng, ĐN, nam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gi&aacute; mong muốn: thấp hơn 1,8 tỷ.</p>\r\n\r\n<p>C&ocirc;ng ty m&ocirc;i giới hoặc c&aacute; nh&acirc;n nếu c&oacute; h&agrave;ng vui l&ograve;ng li&ecirc;n hệ cho t&ocirc;i. ĐT: 0919979144 (Mr. Ho&agrave;ng Anh) hoặc 0989985300 (Mrs. Mơ). Cảm ơn.</p>', 'active', 0, 'a:3:{s:5:\"title\";N;s:11:\"description\";N;s:8:\"keywords\";N;}', 'false', 'false', 'false', '2018-07-08 00:01:13', '2018-07-08 00:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Lợi', 'admin', 'phamloi7710@gmail.com', '$2y$10$kcQhuFZP2ta0MrLC020w6etLiJtGyX6DfBgg2tI3NC8RqyfkfW0hS', 'true', 'JP38OztfcuaMoKaYXfs6ijhwvKwKcKQv2qd3Xx4Jx8cBzhotJMFxq0ZZbLxn', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `config_key_unique` (`key`);

--
-- Indexes for table `du_an`
--
ALTER TABLE `du_an`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom_du_an`
--
ALTER TABLE `nhom_du_an`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom_san_giao_dich`
--
ALTER TABLE `nhom_san_giao_dich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `san_giao_dich`
--
ALTER TABLE `san_giao_dich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `du_an`
--
ALTER TABLE `du_an`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhom_du_an`
--
ALTER TABLE `nhom_du_an`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhom_san_giao_dich`
--
ALTER TABLE `nhom_san_giao_dich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_giao_dich`
--
ALTER TABLE `san_giao_dich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
