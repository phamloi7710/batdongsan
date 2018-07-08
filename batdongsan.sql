-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2018 at 03:47 PM
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
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `du_an`
--

INSERT INTO `du_an` (`id`, `title`, `slug`, `image`, `cate_id`, `summary`, `description`, `status`, `sort`, `hot`, `new`, `noibat`, `SEO`, `created_at`, `updated_at`) VALUES
(5, 'MỸ SƠN TOWER', 'my-son-tower', '/uploads/hinh-anh/1/du-an/5b40b0666c1e8.png', 2, 'Căn hộ trung tâm Thủ Đức - Chỉ cần có 399 triệu, bạn sở hữu ngay căn hộ mặt tiền đường Lê Văn Chí - một vị trí đẹp nhất quận Thủ Đức, Emerald Apartment tọa lạc ngay khu vực có vị trí giao thông rất thuận lợi ngay ', '<p>ĐẤT NỀN GOLD HILL ĐỒNG NAI</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GOLD HILL CENTER - ĐẤT NỀN ĐỒNG NAI GI&Aacute; TỪ 290 TRIỆU/L&Ocirc;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu ngay đất nền sổ đỏ tại Đồng Nai chỉ với 70 triệu thanh to&aacute;n đợt 1. đ&oacute;ng 7 triệu/th&aacute;ng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chiết khấu l&ecirc;n đến 20%. Phần c&ograve;n lại được thanh to&aacute;n chậm KH&Ocirc;NG l&atilde;i suất trong 3, 6, 30 th&aacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LI&Ecirc;N HỆ: 0914.66.88.15</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; 10 l&yacute; do để kh&aacute;ch h&agrave;ng đầu tư v&agrave;o Gold Hill Center tại thời điểm n&agrave;y:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. C&oacute; VỊ TR&Iacute; tiềm năng, nằm trong trung t&acirc;m khu đ&ocirc; thị hiện hữu v&agrave; thừa hưởng những tiện &iacute;ch với ưu thế vượt trội: S&acirc;n Golf chuẩn 4 sao , Hồ S&ocirc;ng M&acirc;y điều tiết kh&iacute; hậu, trung t&acirc;m h&agrave;nh ch&iacute;nh của khu vực, hệ thống ng&acirc;n h&agrave;ng.</p>\r\n\r\n<p>2. PH&Aacute;P L&Yacute; r&otilde; r&agrave;ng &ndash; ĐẤT NỀN SỔ ĐỎ</p>\r\n\r\n<p>3. THIẾT KẾ theo ti&ecirc;u chuẩn khu đ&ocirc; thị hiện đại</p>\r\n\r\n<p>4. CHỦNG LOẠI sản phẩm đa dạng thuộc ph&acirc;n kh&uacute;c ĐẤT NỀN GI&Aacute; RẺ, chỉ từ 290 triệu/nền</p>\r\n\r\n<p>5. TIẾN ĐỘ thi c&ocirc;ng v&agrave; ho&agrave;n thiện hạ tầng nhanh ch&oacute;ng, được bảo đảm bởi Tập đo&agrave;n Đất Xanh</p>\r\n\r\n<p>6. ĐỊNH HƯỚNG PH&Aacute;T TRIỂN nằm trong hệ thống Khu đ&ocirc; thị Vệ tinh của Th&agrave;nh phố Hồ Ch&iacute; Minh</p>\r\n\r\n<p>7. QUY HOẠCH trở th&agrave;nh khu trung t&acirc;m thương mại phục vụ cho kh&aacute;ch h&agrave;ng c&oacute; nhu cầu sinh sống v&agrave; đầu tư khai th&aacute;c thương mại.</p>\r\n\r\n<p>8. Sở hữu khu C&ocirc;ng vi&ecirc;n trung t&acirc;m v&agrave; Khu phức hợp văn ho&aacute; thể thao lớn nhất trong khu vực</p>\r\n\r\n<p>9. Li&ecirc;n kết với c&aacute;c khu d&acirc;n cư hiện hữu, rất ph&ugrave; hợp cho việc kinh doanh thương mại</p>\r\n\r\n<p>10. Nằm liền kề c&aacute;c trường cao đẳng, đại học trong khu vực. Khu vực n&agrave;y hứa hẹn sẽ v&ocirc; c&ugrave;ng s&ocirc;i động v&agrave; sầm uất v&agrave;o năm 2014 &ndash; 2015</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TIỆN &Iacute;CH HIỆN ĐẠI B&Ecirc;N TRONG DỰ &Aacute;N:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center được thiết kế xứng tầm với một vị tr&iacute; đắc địa đầy tiềm năng, Gold Hill Centerhội tụ tất cả c&aacute;c tiện &iacute;ch vượt trội của một khu phố thương mại, mang đến cho cư d&acirc;n nơi đ&acirc;y một cuộc sống đẳng cấp v&agrave; ho&agrave;n hảo như: TTTM sầm uất, si&ecirc;u thị, c&aacute;c cụm nh&agrave; h&agrave;ng, hội qu&aacute;n,&hellip; Th&ecirc;m v&agrave;o đ&oacute; l&agrave; c&aacute;c khu an sinh cao cấp như trung t&acirc;m chăm s&oacute;c sức khỏe cộng đồng, trường học&hellip; đ&atilde; v&agrave; đang h&igrave;nh th&agrave;nh sẽ tạo cho cư d&acirc;n một cảm gi&aacute;c thật sự tiện nghi để tận hưởng cuộc sống đ&iacute;ch thực.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Con đường sầm uất sẽ được h&igrave;nh th&agrave;nh tại Gold Hill Center</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Những khu nh&agrave; h&agrave;ng, spa...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một điểm nhấn quan trọng kh&aacute;c l&agrave;m n&ecirc;n đẳng cấp của Gold Hill Center, đ&oacute; ch&iacute;nh l&agrave; cư d&acirc;n nơi đ&acirc;y sẽ được thừa hưởng một m&ocirc;i trường sống l&agrave;nh mạnh, hiện đại v&agrave; năng động khi liền kề với s&acirc;n Golf Đồng Nai &ndash; nơi được mệnh danh l&agrave; một trong Đồng Nai thập cảnh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tận hưởng cuộc sống xanh&hellip;với c&ocirc;ng vi&ecirc;n trung t&acirc;m</p>\r\n\r\n<p>Trong khung cảnh thi&ecirc;n nhi&ecirc;n xanh m&aacute;t, b&ecirc;n b&atilde;i cỏ xanh mướt thơm ng&aacute;t cỏ hoa h&atilde;y tận hưởng v&agrave; sẻ chia hạnh ph&uacute;c với người bạn y&ecirc;u thương. V&agrave; nơi đ&acirc;y, những sinh hoạt cộng đồng, vui chơi, giải tr&iacute;, vận động thể thao sẽ được diễn ra, gi&uacute;p gia tăng sức khỏe v&agrave; l&agrave;m phong ph&uacute; th&ecirc;m đời sống tinh thần cho tất cả mọi người. Hơn thế nữa, bạn c&oacute; thể y&ecirc;n t&acirc;m v&igrave; đ&acirc;y cũng l&agrave; nơi cho con bạn thỏa sức vui chơi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khu vui chơi d&agrave;nh cho trẻ em</p>\r\n\r\n<p>Cuộc sống năng động</p>\r\n\r\n<p>Với mảng xanh rộng lớn trong c&ocirc;ng vi&ecirc;n, kết hợp với nhiều dịch vụ tiện &iacute;ch, b&ecirc;n canh đ&oacute; l&agrave; một quần thể kiến tr&uacute;c hiện đại v&agrave; phức hợp bao gồm biệt thự v&agrave; nh&agrave; li&ecirc;n kế thương mại, H&atilde;y c&ugrave;ng khởi đầu một ng&agrave;y mới hứng khởi v&agrave; một cuộc sống năng động tại Gold Hill Center!&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center - Gi&aacute; trị tăng cao từng ng&agrave;y</p>\r\n\r\n<p>Với cảnh quan tổng thể đẹp như một bức tranh thủy mặc, c&ugrave;ng với một quần thể kiến tr&uacute;c được được thiết kế đặc biệt kết hợp với kinh doanh thương mại hiện đại v&agrave; đồng bộ, Gold Hill Center l&agrave; sự lựa chọn s&aacute;ng suốt để cuộc sống trở n&ecirc;n ho&agrave;n hảo hơn.</p>\r\n\r\n<p>Kh&ocirc;ng những thế, Gold Hill Center c&ograve;n l&agrave; v&ugrave;ng đất đầy tiềm năng, mang lại cơ hội đầu tư tốt nhất. Trong khi đ&oacute;, chỉ trong một thời gian ngắn nữa, thị trấn Trảng Bom sẽ ch&iacute;nh thức l&ecirc;n thị x&atilde; theo quy hoạch của ch&iacute;nh quyền địa phương, th&igrave; gi&aacute; đất sẽ nhanh ch&oacute;ng tăng tỷ lệ thuận với tốc độ ph&aacute;t triển của tỉnh. Điều n&agrave;y cho thấy, với những tiện nghi sở hữu c&ugrave;ng mức gi&aacute; cực kỳ hấp dẫn như vậy,Gold Hill Center đang mở ra rất nhiều cơ hội cho c&aacute;c nh&agrave; đầu tư v&agrave; những người c&oacute; nhu cầu sinh sống l&acirc;u d&agrave;i tại Đồng Nai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ban-do-quy-hoach-KT-khong-gian.png</p>\r\n\r\n<p>Sơ đồ li&ecirc;n kết v&ugrave;ng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tiện &iacute;ch khi nằm gần khu d&acirc;n cư hiện hữu</p>\r\n\r\n<p>Với d&acirc;n số gần 200.000 người đang tập trung sinh sống tại đ&acirc;y, Thị trấn Trảng Bom l&agrave; khu vực c&oacute; đầy đủ c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng cộng hiện hữu được x&acirc;y dựng tương đối c&oacute; quy m&ocirc; v&agrave; ki&ecirc;n cố như: trụ sở Huyện Uỷ, Hội Đồng Nh&acirc;n D&acirc;n v&agrave; Uỷ Ban Nh&acirc;n D&acirc;n của huyện, Nh&agrave; văn h&oacute;a, Trường PTTH, Trường dạy nghề, Bưu điện, Ng&acirc;n h&agrave;ng, Chợ, Khu d&acirc;n cư, Bệnh viện đa khoa, Khu thể thao li&ecirc;n hợp, S&acirc;n Golf Đồng Nai&hellip;Rất th&iacute;ch hợp ph&aacute;t triển c&aacute;c ng&agrave;nh dịch vụ như gi&aacute;o dục, y tế, văn h&oacute;a, thể thao, thương mại, giải tr&iacute; c&ocirc;ng cộng, t&agrave;i ch&iacute;nh, ng&acirc;n h&agrave;ng, bưu điện, du lịch, vận tải,&hellip; C&ugrave;ng với sự chuyển m&igrave;nh l&ecirc;n thị x&atilde; v&agrave;o năm 2014, thị trấn Trảng Bom đang l&agrave; t&acirc;m điểm thu h&uacute;t đại đa số d&acirc;n cư đến đ&acirc;y sinh sống v&agrave; l&agrave;m việc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TIỆN &Iacute;CH XUNG QUANH:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center thừa hưởng được c&aacute;c lợi thế từ khu d&acirc;n cư hiện hữu</p>\r\n\r\n<p>Gold Hill Center c&oacute; vị tr&iacute; v&ocirc; c&ugrave;ng thuận tiện về giao th&ocirc;ng khi c&aacute;ch quốc lộ 1A 700m, c&aacute;ch Trung T&acirc;m Tp. Bi&ecirc;n H&ograve;a 8km, c&aacute;ch Tp. HCM 45km. Hơn nữa, Gold Hill Center nằm trong khu vực v&agrave; c&aacute;ch dự &aacute;n trọng điểm như đường cao tốc Tp. Hồ Ch&iacute; Minh - Long Th&agrave;nh - Dầu Gi&acirc;y &nbsp;12km, s&acirc;n bay quốc tế Long Th&agrave;nh &nbsp;13km, đường v&agrave;nh đai 4 khoảng 6km.</p>\r\n\r\n<p>Xung quanh dự &aacute;n, đầy đủ c&aacute;c tiện &iacute;ch hiện hữu như: trường THPT Thống Nhất A l&agrave; trường điểm của huyện, c&aacute;c trường THPT tư thục như: THPT Trần Đại Nghĩa, THPT Trần Quốc Tuấn, THPT Văn Lang; UBND huyện Trảng Bom; Bệnh viện đa khoa Trảng Bom; Trung t&acirc;m TDTT; Khu thương mại dịch vụ; Nh&agrave; h&agrave;ng; Spa; Ng&acirc;n h&agrave;ng,&hellip;</p>\r\n\r\n<p>Gold Hill Center l&agrave; điểm nhấn ấn tượng trong tổng thể khu quy hoạch hiện đại n&agrave;y v&agrave; kh&ocirc;ng ngừng gia tăng gi&aacute; trị.</p>', 'active', 0, 'false', 'true', 'false', 'a:3:{s:5:\"title\";N;s:11:\"description\";N;s:8:\"keywords\";N;}', '2018-07-07 05:20:42', '2018-07-07 05:48:10'),
(6, '3S RIVERSSIDE LINH ĐÔNG', '3s-riversside-linh-dong', '/uploads/hinh-anh/1/du-an/5b40b0ad86516.jpg', 3, 'Sở hữu đất nền sổ đỏ tại Đồng Nai - dự án Gold Hill Center chỉ với 70 triệu thanh toán đợt 1, góp 7triệu/tháng. Tặng ngay 2 lượng vàng SJC khi ký hợp đồng. Phần còn lại được trả chậm 0% lãi suất từ 3, 6, ', NULL, 'active', 0, 'false', 'true', 'false', 'a:3:{s:5:\"title\";N;s:11:\"description\";N;s:8:\"keywords\";N;}', '2018-07-07 05:22:16', '2018-07-07 05:48:18'),
(7, '4S RIVERSSIDE LINH ĐÔNG', '4s-riversside-linh-dong', '/uploads/hinh-anh/1/du-an/my-son-tower.jpg', 2, 'Sở hữu đất nền sổ đỏ tại Đồng Nai - dự án Gold Hill Center chỉ với 70 triệu thanh toán đợt 1, góp 7triệu/tháng. Tặng ngay 2 lượng vàng SJC khi ký hợp đồng. Phần còn lại được trả chậm 0% lãi suất từ 3, 6, ', '<p>ĐẤT NỀN GOLD HILL ĐỒNG NAI</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GOLD HILL CENTER - ĐẤT NỀN ĐỒNG NAI GI&Aacute; TỪ 290 TRIỆU/L&Ocirc;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu ngay đất nền sổ đỏ tại Đồng Nai chỉ với 70 triệu thanh to&aacute;n đợt 1. đ&oacute;ng 7 triệu/th&aacute;ng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chiết khấu l&ecirc;n đến 20%. Phần c&ograve;n lại được thanh to&aacute;n chậm KH&Ocirc;NG l&atilde;i suất trong 3, 6, 30 th&aacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LI&Ecirc;N HỆ: 0914.66.88.15</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; 10 l&yacute; do để kh&aacute;ch h&agrave;ng đầu tư v&agrave;o Gold Hill Center tại thời điểm n&agrave;y:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. C&oacute; VỊ TR&Iacute; tiềm năng, nằm trong trung t&acirc;m khu đ&ocirc; thị hiện hữu v&agrave; thừa hưởng những tiện &iacute;ch với ưu thế vượt trội: S&acirc;n Golf chuẩn 4 sao , Hồ S&ocirc;ng M&acirc;y điều tiết kh&iacute; hậu, trung t&acirc;m h&agrave;nh ch&iacute;nh của khu vực, hệ thống ng&acirc;n h&agrave;ng.</p>\r\n\r\n<p>2. PH&Aacute;P L&Yacute; r&otilde; r&agrave;ng &ndash; ĐẤT NỀN SỔ ĐỎ</p>\r\n\r\n<p>3. THIẾT KẾ theo ti&ecirc;u chuẩn khu đ&ocirc; thị hiện đại</p>\r\n\r\n<p>4. CHỦNG LOẠI sản phẩm đa dạng thuộc ph&acirc;n kh&uacute;c ĐẤT NỀN GI&Aacute; RẺ, chỉ từ 290 triệu/nền</p>\r\n\r\n<p>5. TIẾN ĐỘ thi c&ocirc;ng v&agrave; ho&agrave;n thiện hạ tầng nhanh ch&oacute;ng, được bảo đảm bởi Tập đo&agrave;n Đất Xanh</p>\r\n\r\n<p>6. ĐỊNH HƯỚNG PH&Aacute;T TRIỂN nằm trong hệ thống Khu đ&ocirc; thị Vệ tinh của Th&agrave;nh phố Hồ Ch&iacute; Minh</p>\r\n\r\n<p>7. QUY HOẠCH trở th&agrave;nh khu trung t&acirc;m thương mại phục vụ cho kh&aacute;ch h&agrave;ng c&oacute; nhu cầu sinh sống v&agrave; đầu tư khai th&aacute;c thương mại.</p>\r\n\r\n<p>8. Sở hữu khu C&ocirc;ng vi&ecirc;n trung t&acirc;m v&agrave; Khu phức hợp văn ho&aacute; thể thao lớn nhất trong khu vực</p>\r\n\r\n<p>9. Li&ecirc;n kết với c&aacute;c khu d&acirc;n cư hiện hữu, rất ph&ugrave; hợp cho việc kinh doanh thương mại</p>\r\n\r\n<p>10. Nằm liền kề c&aacute;c trường cao đẳng, đại học trong khu vực. Khu vực n&agrave;y hứa hẹn sẽ v&ocirc; c&ugrave;ng s&ocirc;i động v&agrave; sầm uất v&agrave;o năm 2014 &ndash; 2015</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TIỆN &Iacute;CH HIỆN ĐẠI B&Ecirc;N TRONG DỰ &Aacute;N:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center được thiết kế xứng tầm với một vị tr&iacute; đắc địa đầy tiềm năng, Gold Hill Centerhội tụ tất cả c&aacute;c tiện &iacute;ch vượt trội của một khu phố thương mại, mang đến cho cư d&acirc;n nơi đ&acirc;y một cuộc sống đẳng cấp v&agrave; ho&agrave;n hảo như: TTTM sầm uất, si&ecirc;u thị, c&aacute;c cụm nh&agrave; h&agrave;ng, hội qu&aacute;n,&hellip; Th&ecirc;m v&agrave;o đ&oacute; l&agrave; c&aacute;c khu an sinh cao cấp như trung t&acirc;m chăm s&oacute;c sức khỏe cộng đồng, trường học&hellip; đ&atilde; v&agrave; đang h&igrave;nh th&agrave;nh sẽ tạo cho cư d&acirc;n một cảm gi&aacute;c thật sự tiện nghi để tận hưởng cuộc sống đ&iacute;ch thực.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Con đường sầm uất sẽ được h&igrave;nh th&agrave;nh tại Gold Hill Center</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Những khu nh&agrave; h&agrave;ng, spa...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một điểm nhấn quan trọng kh&aacute;c l&agrave;m n&ecirc;n đẳng cấp của Gold Hill Center, đ&oacute; ch&iacute;nh l&agrave; cư d&acirc;n nơi đ&acirc;y sẽ được thừa hưởng một m&ocirc;i trường sống l&agrave;nh mạnh, hiện đại v&agrave; năng động khi liền kề với s&acirc;n Golf Đồng Nai &ndash; nơi được mệnh danh l&agrave; một trong Đồng Nai thập cảnh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tận hưởng cuộc sống xanh&hellip;với c&ocirc;ng vi&ecirc;n trung t&acirc;m</p>\r\n\r\n<p>Trong khung cảnh thi&ecirc;n nhi&ecirc;n xanh m&aacute;t, b&ecirc;n b&atilde;i cỏ xanh mướt thơm ng&aacute;t cỏ hoa h&atilde;y tận hưởng v&agrave; sẻ chia hạnh ph&uacute;c với người bạn y&ecirc;u thương. V&agrave; nơi đ&acirc;y, những sinh hoạt cộng đồng, vui chơi, giải tr&iacute;, vận động thể thao sẽ được diễn ra, gi&uacute;p gia tăng sức khỏe v&agrave; l&agrave;m phong ph&uacute; th&ecirc;m đời sống tinh thần cho tất cả mọi người. Hơn thế nữa, bạn c&oacute; thể y&ecirc;n t&acirc;m v&igrave; đ&acirc;y cũng l&agrave; nơi cho con bạn thỏa sức vui chơi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khu vui chơi d&agrave;nh cho trẻ em</p>\r\n\r\n<p>Cuộc sống năng động</p>\r\n\r\n<p>Với mảng xanh rộng lớn trong c&ocirc;ng vi&ecirc;n, kết hợp với nhiều dịch vụ tiện &iacute;ch, b&ecirc;n canh đ&oacute; l&agrave; một quần thể kiến tr&uacute;c hiện đại v&agrave; phức hợp bao gồm biệt thự v&agrave; nh&agrave; li&ecirc;n kế thương mại, H&atilde;y c&ugrave;ng khởi đầu một ng&agrave;y mới hứng khởi v&agrave; một cuộc sống năng động tại Gold Hill Center!&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center - Gi&aacute; trị tăng cao từng ng&agrave;y</p>\r\n\r\n<p>Với cảnh quan tổng thể đẹp như một bức tranh thủy mặc, c&ugrave;ng với một quần thể kiến tr&uacute;c được được thiết kế đặc biệt kết hợp với kinh doanh thương mại hiện đại v&agrave; đồng bộ, Gold Hill Center l&agrave; sự lựa chọn s&aacute;ng suốt để cuộc sống trở n&ecirc;n ho&agrave;n hảo hơn.</p>\r\n\r\n<p>Kh&ocirc;ng những thế, Gold Hill Center c&ograve;n l&agrave; v&ugrave;ng đất đầy tiềm năng, mang lại cơ hội đầu tư tốt nhất. Trong khi đ&oacute;, chỉ trong một thời gian ngắn nữa, thị trấn Trảng Bom sẽ ch&iacute;nh thức l&ecirc;n thị x&atilde; theo quy hoạch của ch&iacute;nh quyền địa phương, th&igrave; gi&aacute; đất sẽ nhanh ch&oacute;ng tăng tỷ lệ thuận với tốc độ ph&aacute;t triển của tỉnh. Điều n&agrave;y cho thấy, với những tiện nghi sở hữu c&ugrave;ng mức gi&aacute; cực kỳ hấp dẫn như vậy,Gold Hill Center đang mở ra rất nhiều cơ hội cho c&aacute;c nh&agrave; đầu tư v&agrave; những người c&oacute; nhu cầu sinh sống l&acirc;u d&agrave;i tại Đồng Nai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ban-do-quy-hoach-KT-khong-gian.png</p>\r\n\r\n<p>Sơ đồ li&ecirc;n kết v&ugrave;ng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tiện &iacute;ch khi nằm gần khu d&acirc;n cư hiện hữu</p>\r\n\r\n<p>Với d&acirc;n số gần 200.000 người đang tập trung sinh sống tại đ&acirc;y, Thị trấn Trảng Bom l&agrave; khu vực c&oacute; đầy đủ c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng cộng hiện hữu được x&acirc;y dựng tương đối c&oacute; quy m&ocirc; v&agrave; ki&ecirc;n cố như: trụ sở Huyện Uỷ, Hội Đồng Nh&acirc;n D&acirc;n v&agrave; Uỷ Ban Nh&acirc;n D&acirc;n của huyện, Nh&agrave; văn h&oacute;a, Trường PTTH, Trường dạy nghề, Bưu điện, Ng&acirc;n h&agrave;ng, Chợ, Khu d&acirc;n cư, Bệnh viện đa khoa, Khu thể thao li&ecirc;n hợp, S&acirc;n Golf Đồng Nai&hellip;Rất th&iacute;ch hợp ph&aacute;t triển c&aacute;c ng&agrave;nh dịch vụ như gi&aacute;o dục, y tế, văn h&oacute;a, thể thao, thương mại, giải tr&iacute; c&ocirc;ng cộng, t&agrave;i ch&iacute;nh, ng&acirc;n h&agrave;ng, bưu điện, du lịch, vận tải,&hellip; C&ugrave;ng với sự chuyển m&igrave;nh l&ecirc;n thị x&atilde; v&agrave;o năm 2014, thị trấn Trảng Bom đang l&agrave; t&acirc;m điểm thu h&uacute;t đại đa số d&acirc;n cư đến đ&acirc;y sinh sống v&agrave; l&agrave;m việc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TIỆN &Iacute;CH XUNG QUANH:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold Hill Center thừa hưởng được c&aacute;c lợi thế từ khu d&acirc;n cư hiện hữu</p>\r\n\r\n<p>Gold Hill Center c&oacute; vị tr&iacute; v&ocirc; c&ugrave;ng thuận tiện về giao th&ocirc;ng khi c&aacute;ch quốc lộ 1A 700m, c&aacute;ch Trung T&acirc;m Tp. Bi&ecirc;n H&ograve;a 8km, c&aacute;ch Tp. HCM 45km. Hơn nữa, Gold Hill Center nằm trong khu vực v&agrave; c&aacute;ch dự &aacute;n trọng điểm như đường cao tốc Tp. Hồ Ch&iacute; Minh - Long Th&agrave;nh - Dầu Gi&acirc;y &nbsp;12km, s&acirc;n bay quốc tế Long Th&agrave;nh &nbsp;13km, đường v&agrave;nh đai 4 khoảng 6km.</p>\r\n\r\n<p>Xung quanh dự &aacute;n, đầy đủ c&aacute;c tiện &iacute;ch hiện hữu như: trường THPT Thống Nhất A l&agrave; trường điểm của huyện, c&aacute;c trường THPT tư thục như: THPT Trần Đại Nghĩa, THPT Trần Quốc Tuấn, THPT Văn Lang; UBND huyện Trảng Bom; Bệnh viện đa khoa Trảng Bom; Trung t&acirc;m TDTT; Khu thương mại dịch vụ; Nh&agrave; h&agrave;ng; Spa; Ng&acirc;n h&agrave;ng,&hellip;</p>\r\n\r\n<p>Gold Hill Center l&agrave; điểm nhấn ấn tượng trong tổng thể khu quy hoạch hiện đại n&agrave;y v&agrave; kh&ocirc;ng ngừng gia tăng gi&aacute; trị.</p>', 'active', 0, 'false', 'true', 'false', 'a:3:{s:5:\"title\";N;s:11:\"description\";N;s:8:\"keywords\";N;}', '2018-07-07 05:23:24', '2018-07-07 05:48:26');

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
(5, '2018_07_06_023706_create_nhom_san-giao-dich_table', 1),
(6, '2018_07_06_023730_create_san-giao-dich_table', 1),
(7, '2018_07_06_085740_create_config_table', 2),
(10, '2018_07_07_063829_create_news_category_table', 3),
(11, '2018_07_07_063920_crate_news_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `image`, `cate_id`, `summary`, `description`, `status`, `sort`, `SEO`, `user_id`, `hot`, `new`, `noibat`, `created_at`, `updated_at`) VALUES
(2, 'Mental Arithmetic', 'mental-arithmetic', '/uploads/hinh-anh/1/Tin Tức/5b406a2d39d19.png', 2, 'ddd', '<p>d</p>', 'inActive', 12, 'a:3:{s:5:\"title\";s:12:\"sdfevgbrhtnj\";s:11:\"description\";s:1:\"d\";s:8:\"keywords\";N;}', 1, 'false', 'true', 'false', '2018-07-07 00:39:44', '2018-07-07 01:00:05');

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

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `title`, `slug`, `description`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Tin Trong Nước', 'tin-trong-nuoc', NULL, 'active', 0, '2018-07-07 00:25:34', '2018-07-07 00:25:34'),
(2, 'Tin Quốc Tế', 'tin-quoc-te', NULL, 'active', 0, '2018-07-07 00:25:41', '2018-07-07 00:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_du_an`
--

CREATE TABLE `nhom_du_an` (
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
-- Dumping data for table `nhom_du_an`
--

INSERT INTO `nhom_du_an` (`id`, `title`, `slug`, `description`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Dự Án Đang Thực Hiện', 'du-an-dang-thuc-hien', NULL, 'active', 0, '2018-07-06 00:38:42', '2018-07-07 04:32:20'),
(2, 'Dự Án Đã Hoàn Thành', 'du-an-da-hoan-thanh', NULL, 'active', 0, '2018-07-07 04:32:35', '2018-07-07 04:32:35'),
(3, 'Dự Án Sắp Triển Khai', 'du-an-sap-trien-khai', NULL, 'active', 0, '2018-07-07 04:32:48', '2018-07-07 04:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_san-giao-dich`
--

CREATE TABLE `nhom_san-giao-dich` (
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
-- Dumping data for table `nhom_san-giao-dich`
--

INSERT INTO `nhom_san-giao-dich` (`id`, `title`, `slug`, `description`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Trọ', 'nha-tro', NULL, 'active', 0, '2018-07-06 01:28:36', '2018-07-06 01:28:36');

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
-- Table structure for table `san-giao-dich`
--

CREATE TABLE `san-giao-dich` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
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
-- Dumping data for table `san-giao-dich`
--

INSERT INTO `san-giao-dich` (`id`, `title`, `slug`, `image`, `cate_id`, `summary`, `description`, `status`, `sort`, `SEO`, `hot`, `new`, `noibat`, `created_at`, `updated_at`) VALUES
(1, 'Tiếng Việt', 'tieng-viet', '153086599921475.jpg', 1, 'ưdq', '<p>dưqw</p>', 'active', 0, 'a:3:{s:5:\"title\";s:3:\"dqw\";s:11:\"description\";s:3:\"dqw\";s:8:\"keywords\";s:4:\"qưd\";}', 'true', 'true', 'false', '2018-07-06 01:29:42', '2018-07-06 01:33:19');

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
(1, 'Phạm Lợi', 'admin', 'phamloi7710@gmail.com', '$2y$10$rliWTgR7f7L.JNgB0k1c2OZLRG5mW9sBJcWpo74nspDSO120qLa/q', 'true', 'FYIZc97JqS9v7VwJblgtGIagmnoqMdTMf20v1jLhfsHXtyLxeJ8PQoRcmflL', NULL, NULL);

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
-- Indexes for table `nhom_san-giao-dich`
--
ALTER TABLE `nhom_san-giao-dich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `san-giao-dich`
--
ALTER TABLE `san-giao-dich`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhom_du_an`
--
ALTER TABLE `nhom_du_an`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhom_san-giao-dich`
--
ALTER TABLE `nhom_san-giao-dich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `san-giao-dich`
--
ALTER TABLE `san-giao-dich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
