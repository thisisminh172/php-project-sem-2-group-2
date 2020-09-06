-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 03:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yesgear.vn`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`code`, `name`, `created_at`, `updated_at`) VALUES
('as', 'asus', NULL, NULL),
('cs', 'corsair', NULL, NULL),
('du', 'dareu', NULL, NULL),
('ed', 'e-dra', NULL, NULL),
('lt', 'logitech', NULL, NULL),
('rz', 'razor', NULL, NULL),
('ss', 'steelseries', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`code`, `name`, `created_at`, `updated_at`) VALUES
('bp', 'bàn phím', NULL, NULL),
('ch', 'chuột', NULL, NULL),
('tn', 'tai nghe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commenters`
--

CREATE TABLE `commenters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commenters`
--

INSERT INTO `commenters` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Lê Minh', 'minhl93172@gmail.com', 909080808, '2020-09-06 12:30:17', '2020-09-06 12:30:17'),
(2, 'Tuấn', 'tuan@gmail.com', 90910102, '2020-09-06 12:30:53', '2020-09-06 12:30:53'),
(3, 'Dương', 'duong@gmail.com', 123100311, '2020-09-06 12:31:31', '2020-09-06 12:31:31'),
(4, 'Quãn trị viên', 'minh@gmail.com', 908010102, '2020-09-06 12:32:22', '2020-09-06 12:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` tinyint(4) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `content`, `votes`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sản phẩm chất lượng', 5, 'Lê Minh', 8, '2020-09-06 12:30:17', '2020-09-06 12:30:17'),
(2, 2, 'Tệ...', 1, 'Tuấn', 5, '2020-09-06 12:30:53', '2020-09-06 12:30:53'),
(3, 3, 'Tạm được', 4, 'Dương', 9, '2020-09-06 12:31:31', '2020-09-06 12:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `comment_reps`
--

CREATE TABLE `comment_reps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_reps`
--

INSERT INTO `comment_reps` (`id`, `comment_id`, `commenter_id`, `content`, `created_at`, `updated_at`, `name`) VALUES
(1, 3, 4, 'cãm ơn', '2020-09-06 12:32:22', '2020-09-06 12:32:22', 'Quãn trị viên');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2020_09_04_002941_slider', 1),
(89, '2020_09_03_084818_create_news_table', 2),
(96, '2014_10_12_000000_create_users_table', 3),
(97, '2019_08_19_000000_create_failed_jobs_table', 3),
(98, '2020_08_11_143501_create_brands_table', 3),
(99, '2020_08_11_143549_create_categories_table', 3),
(100, '2020_08_12_113538_create_products_table', 3),
(101, '2020_08_12_151308_create_commenters_table', 3),
(102, '2020_08_18_014907_create_notification_registers_table', 3),
(103, '2020_09_03_123450_create_table_news', 3),
(104, '2020_09_04_021445_create_sliders_table', 3),
(105, '2020_09_12_113558_create_orders_table', 3),
(106, '2020_09_12_113617_create_order_details_table', 3),
(107, '2020_09_12_113641_create_comments_table', 3),
(108, '2020_09_12_113744_create_comment_reps_table', 3),
(109, '2020_09_13_014451_add_name_to_comment_reps_table', 3),
(110, '2020_09_05_112507_add_address_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(1, '\"Chính thức\" ra mắt ổ cắm điện kiêm sạc không dây, sạc nhanh 18W, giá chỉ từ 400 nghìn đồng', 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/tin-tuc-o-cam-dien-kiem-sac-khong-day-xiaomi-ava.jpg', '<p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Th&aacute;ng trước, Xiaomi đ&atilde; bắt đầu huy động vốn từ cộng đồng cho sản phẩm&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Ổ cắm ki&ecirc;m đế sạc kh&ocirc;ng d&acirc;y</strong>&nbsp;tr&ecirc;n Xiaomi Mall với mức gi&aacute; l&agrave; khoảng 109 NDT, tương đương 370.000 đồng. V&agrave; kết quả th&agrave;nh c&ocirc;ng ngo&agrave;i mong đợi với khoảng 35.000 người ủng hộ. Giờ đ&acirc;y, Đế sạc nhanh kh&ocirc;ng d&acirc;y ki&ecirc;m ổ cắm đang được b&aacute;n tr&ecirc;n trang Xiaomi Mall, Youpin với mức gi&aacute; 129NDT, tương đương 434.000 đồng.</span></span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3d3fM89GSeaEQDGpLF9naiLprt0rLqG868c6Z_dmbvVDqbRiMx0K-TkiCZM1tGeAX1g1Mgrj-NcVP2JICvVEHT5HP8dMgz4BLGM40M2qCv10YiLIhs7bnSM13Ygpt2nrH8APU3xEPZttwGL4If4R0MJqg=w833-h615-no?authuser=1\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 480px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3d3fM89GSeaEQDGpLF9naiLprt0rLqG868c6Z_dmbvVDqbRiMx0K-TkiCZM1tGeAX1g1Mgrj-NcVP2JICvVEHT5HP8dMgz4BLGM40M2qCv10YiLIhs7bnSM13Ygpt2nrH8APU3xEPZttwGL4If4R0MJqg=w833-h615-no?authuser=1\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Ổ cắm ki&ecirc;m sạc kh&ocirc;ng d&acirc;y Xiaomi&nbsp;</strong>sử dụng c&ocirc;ng nghệ&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">sạc kh&ocirc;ng d&acirc;y</span>&nbsp;cuộn k&eacute;p để sạc thiết bị một c&aacute;ch linh hoạt ở cả chiều dọc v&agrave; chiều ngang. Tốc độ sạc kh&ocirc;ng d&acirc;y tối đa l&agrave;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">&nbsp;10W</span>.</span></span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">B&ecirc;n cạnh đ&oacute;,&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/o-cam-dien-mijia-rubik-cube.html\" target=\"_blank\" rel=\"noopener\">ổ cắm</a>&nbsp;Xiaomi cũng được thiết kế để c&oacute; thể sử dụng như 1 đế đỡ điện thoại với g&oacute;c&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">nghi&ecirc;ng 20&deg;</span>. Ổ cắm được trang bị&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">3 cổng USB</span>&nbsp;với c&ocirc;ng suất mỗi đầu ra&nbsp;đơn l&agrave;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">18W</span>.</span></span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3eRCz7M7n1LV2t4wvl1YhcZWdE8nQ2drFtpbM4d3R2SCI_ofoq55WGXBWz9hfbrCQWltlMWAgJCwGxwwZrniCLK_Hfwv61klbcTwNZ4GSI6T8JDHJUvcUqEHaCQKVsdpqJ7DZGWqtzs-a2J7bAFSxJIiQ=w833-h615-no?authuser=1\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 480px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3eRCz7M7n1LV2t4wvl1YhcZWdE8nQ2drFtpbM4d3R2SCI_ofoq55WGXBWz9hfbrCQWltlMWAgJCwGxwwZrniCLK_Hfwv61klbcTwNZ4GSI6T8JDHJUvcUqEHaCQKVsdpqJ7DZGWqtzs-a2J7bAFSxJIiQ=w833-h615-no?authuser=1\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">C&ocirc;ng ty cũng cho biết sản phẩm đi k&egrave;m với 1 jack cắm ti&ecirc;u chuẩn v&agrave; 2 bộ hack kết hợp để đ&aacute;p ứng nhu cầu năng lượng của 2 ph&iacute;ch cắm tr&ecirc;n laptop. Ngo&agrave;i ra sản phẩm c&ograve;n c&oacute; 1 đ&egrave;n b&aacute;o m&agrave;u xanh l&aacute; để hiển thị trạng th&aacute;i sạc.</span></span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><em style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Ổ cắm ki&ecirc;m đế sạc Xiaomi&nbsp;</em>được trang bị&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">đệm silicone</span>&nbsp;chống trượt. Sản phẩm được thiết kế theo c&aacute;ch m&agrave; khi người d&ugrave;ng đặt smartphone v&agrave;o đế sạc, th&igrave; người d&ugrave;ng c&oacute; thể vừa&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/de-sac-nhanh-khong-day-xiaomi-mdy-10-ep-20w.html\" target=\"_blank\" rel=\"noopener\">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;cho điện thoại vừa c&oacute; thể nghe nhạc, chơi game, duyệt web, tr&ograve; chuyện một c&aacute;ch thoải m&aacute;i.</span></span></span></span></p> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', NULL, NULL),
(2, 'Xiaomi ra mắt đồng hồ để bàn thông minh kiêm nhiệt kế và ẩm kế, giá chỉ từ 500 ngàn đồng', 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/tin-tuc-xiaomi-smart-clock-1.jpg', '<p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">Xiaomi đ&atilde; ra mắt một sản phẩm th&ocirc;ng minh mới dưới nền tảng Youpin. Sản phẩm c&oacute; t&ecirc;n l&agrave;&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">đồng hồ để b&agrave;n th&ocirc;ng minh Xiaomi Seconds</strong>, ki&ecirc;m lu&ocirc;n&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">nhiệt kế</span>&nbsp;v&agrave;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">ẩm kế</span>. Mặc d&ugrave; được t&iacute;ch hợp nhiều chức năng nhưng mức gi&aacute; được b&aacute;n ra kh&aacute; phải chăng, chỉ&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">149 NDT</span>&nbsp;- tương đương&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">504 ng&agrave;n đồng</span>.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3eB5YPG_Rjz4N2EPiTrGqL9i-kW3XOF9YK6c_chW70kByj3CP86LWhxhqMBnTKurh8pSoNN8bNYYNKvAETtLuAChPzL0aHUQACPjRTesl7sWbF9Hx8EGR8zTELIKN1Sj0jLGmJm2z32dCvUBOXUTh4MOg=s800-no?authuser=0\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 471px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3eB5YPG_Rjz4N2EPiTrGqL9i-kW3XOF9YK6c_chW70kByj3CP86LWhxhqMBnTKurh8pSoNN8bNYYNKvAETtLuAChPzL0aHUQACPjRTesl7sWbF9Hx8EGR8zTELIKN1Sj0jLGmJm2z32dCvUBOXUTh4MOg=s800-no?authuser=0\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">Đ&uacute;ng như t&ecirc;n gọi của n&oacute;, sản phẩm vừa l&agrave; một chiếc đồng hồ để b&agrave;n, đồng thời cũng đ&oacute;ng vai tr&ograve; như một nhiệt kế, ẩm kế. Thiết bị sử dụng m&agrave;n h&igrave;nh&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">mực điện tử</span>&nbsp;n&ecirc;n khả năng hiển thị rất tốt kể cả dưới &aacute;nh nắng do độ tương phản của m&agrave;n h&igrave;nh n&agrave;y rất cao v&agrave; cũng ti&ecirc;u tốn &iacute;t năng lượng. B&ecirc;n cạnh đ&oacute;, n&oacute; cũng đảm bảo c&aacute;c chức năng cơ bản như b&aacute;o thức, hẹn giờ, gi&aacute;m s&aacute;t nhiệt độ v&agrave; độ ẩm,&hellip; Đặc biệt, n</span></span><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">hờ v&agrave;o cảm biến kỹ thuật số của&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">Swiss Sensirion</span>&nbsp;m&agrave;&nbsp;<em style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">chiếc đồng hồ</em>&nbsp;n&agrave;y c&oacute; thể ph&aacute;t hiện nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c những thay đổi về nhiệt độ v&agrave; độ ẩm.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3eF2HwDeNh1QXeEJRdaAh3VVYiCeZYW_BL85DyHD0wrnMJ-p7ipf8K7tx-wAw56M_KaNXs01jyeDwJAz2EZERiwUNrn4qZZsJ4mPyiJBMHWxdc0PYTgQXsQSvUL3CMtFR6icmhH-F_4--RH2JjurWjeXw=s750-no?authuser=0\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 393px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3eF2HwDeNh1QXeEJRdaAh3VVYiCeZYW_BL85DyHD0wrnMJ-p7ipf8K7tx-wAw56M_KaNXs01jyeDwJAz2EZERiwUNrn4qZZsJ4mPyiJBMHWxdc0PYTgQXsQSvUL3CMtFR6icmhH-F_4--RH2JjurWjeXw=s750-no?authuser=0\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Đồng hồ th&ocirc;ng minh</strong>&nbsp;n&agrave;y cũng hỗ trợ gh&eacute;p nối&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">Bluetooth</span>&nbsp;v&agrave; kết nối với ứng dụng&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">Mijia</span>. Nhờ đ&oacute;, n&oacute; c&oacute; thể được li&ecirc;n kết với c&aacute;c thiết bị th&ocirc;ng minh kh&aacute;c để người d&ugrave;ng tiện điều chỉnh hệ thống sưởi v&agrave; l&agrave;m m&aacute;t trong nh&agrave;, nhằm đem lại kh&ocirc;ng gian thoải m&aacute;i nhất cho ng&ocirc;i nh&agrave;. Với ứng dụng Mijia, bạn c&ograve;n c&oacute; thể t&ugrave;y chỉnh&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">18 nh&oacute;m đồng hồ b&aacute;o thức</span>&nbsp;kh&aacute;c nhau kh&aacute; tiện lợi.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">Sản phẩm c&ograve;n được t&iacute;ch hợp&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">chip xung nhịp RTC</span>&nbsp;gi&uacute;p hiển thị ch&iacute;nh x&aacute;c thời gian khi bật nguồn. Ngo&agrave;i ra,&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">pin dự ph&ograve;ng</span>&nbsp;đi k&egrave;m sản phẩm cũng gi&uacute;p người d&ugrave;ng dễ d&agrave;ng thay pin khi đồng hồ hết pin.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">Đồng hồ n&agrave;y cũng hỗ trợ chức năng&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">hẹn giờ</span>&nbsp;khởi động bằng một ph&iacute;m. Cụ thể, chức năng hẹn giờ c&oacute;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">2 c&aacute;ch đếm</span>: tiến v&agrave; l&ugrave;i, được thiết kế để đ&aacute;p ứng mọi nhu cầu về thời gian của người d&ugrave;ng trong cuộc sống.</span></span></p> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', NULL, NULL),
(3, 'Huami ra mắt đồng hồ thông minh Amazfit Neo thiết kế cổ điển với đầy đủ các tính năng...', 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/amazfit-neo.jpg', '<p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Huami vừa h&eacute; lộ về việc ra mắt c&aacute;c sản phẩm mới của m&igrave;nh. V&agrave; mới đ&acirc;y một trong số đ&oacute; l&agrave;&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Amazfit Neo</strong>&nbsp;chiếc&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">đồng hồ th&ocirc;ng minh</strong>&nbsp;c&oacute; thiết kế cổ điển những vẫn đầy đủ c&aacute;c t&iacute;nh năng hiện đại như theo d&otilde;i nhịp tim 24 giờ, đếm bước v&agrave; cảnh b&aacute;o ứng dụng với 3 m&agrave;u xanh lục, đen v&agrave; cam.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3dKlvaoBKKgA-QEuy7Grn6sG0VczIpqtcaQKsueW2jFasnaCV3-Qr76NJxjDBxGQ3jnJKpJGmLrLbSLVc9fj5K4ffj5R5xze9HRjI5ckDdL3OGlw39P6G4kCGdKe2xS_dvwfP6S0UCh3w4hQXDOwi_Nyg=s827\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 568px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3dKlvaoBKKgA-QEuy7Grn6sG0VczIpqtcaQKsueW2jFasnaCV3-Qr76NJxjDBxGQ3jnJKpJGmLrLbSLVc9fj5K4ffj5R5xze9HRjI5ckDdL3OGlw39P6G4kCGdKe2xS_dvwfP6S0UCh3w4hQXDOwi_Nyg=s827\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Đồng hồ th&ocirc;ng minh Amazfit Neo</strong>&nbsp;được trang bị m&agrave;n h&igrave;nh&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">STN 1.2 inch</span>&nbsp;với ngoại h&igrave;nh cổ điển. M&agrave;n h&igrave;nh c&oacute; thể được nh&igrave;n r&otilde; r&agrave;ng dưới &aacute;nh s&aacute;ng ch&oacute;i, hiển thị tiết kiệm năng lượng v&agrave; c&oacute; đ&egrave;n nền bật s&aacute;ng khi bạn nhấc cổ tay l&ecirc;n để kiểm tra m&agrave;n h&igrave;nh.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Ngo&agrave;i ra,&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">m&agrave;n h&igrave;nh Amazfit Neo</strong>&nbsp;c&ograve;n được t&iacute;ch hợp 4 cạnh v&agrave; được đặt trong th&acirc;n polycarbonate được gắn v&agrave;o d&acirc;y đeo PUR. C&oacute; 4 n&uacute;t gồm 2 n&uacute;t mỗi b&ecirc;n để vận h&agrave;nh điều khiển đồng hồ, một số chức năng thậm ch&iacute; y&ecirc;u cầu bạn nhấn 2 n&uacute;t c&ugrave;ng l&uacute;c.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3cUAyZideuWX8KU-WjpFxfbdjtX756nVJ2FqIBEWkV5qMt7p-PL7M2KiV4Hqlh6YYpaX2dCMJZgPMKEIgDQBftp5A0N6LtsYvUqcogbOVvq2QG3XdgH8VSRT6t9At-gGYnUi7BWlxdLwEMaIlCWOxSJTQ=s960\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 650px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3cUAyZideuWX8KU-WjpFxfbdjtX756nVJ2FqIBEWkV5qMt7p-PL7M2KiV4Hqlh6YYpaX2dCMJZgPMKEIgDQBftp5A0N6LtsYvUqcogbOVvq2QG3XdgH8VSRT6t9At-gGYnUi7BWlxdLwEMaIlCWOxSJTQ=s960\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Đặc biệt,&nbsp;<em style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">đồng hồ th&ocirc;ng minh Amazfit Neo</em>&nbsp;được trang bị cảm biến&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">BioTracker PPG</span>&nbsp;để theo d&otilde;i nhịp tim 24 giờ v&agrave; cảnh b&aacute;o khi ph&aacute;t hiện nhịp tim bất thường. Ngo&agrave;i việc theo d&otilde;i bước ch&acirc;n của bạn, c&ograve;n c&oacute; hệ thống đ&aacute;nh gi&aacute; sức khỏe PAI gi&uacute;p bạn theo d&otilde;i r&otilde; hơn về&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/xiaomi/thiet-bi-suc-khoe-xiaomi/\" target=\"_blank\" rel=\"noopener\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">sức khỏe</strong></a>&nbsp;của m&igrave;nh.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Smartwatch Amazfit Neo</strong>&nbsp;c&ograve;n c&oacute; t&iacute;nh năng theo d&otilde;i giấc ngủ, thậm ch&iacute; theo d&otilde;i từ giấc ngủ ngắn (11 giờ s&aacute;ng đến 6 giờ chiều) v&agrave; cả giấc ngủ REM. Amazfit c&ograve;n cho biết đồng hồ sẽ c&oacute; t&iacute;nh năng theo d&otilde;i thể thao chạy, đi bộ v&agrave; đạp xe. Tuy nhi&ecirc;n bạn phải v&agrave;o ứng dụng để chọn hoạt động cần theo d&otilde;i.&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/dong-ho-thong-minh-amazfit-gtr-47mm.html\" target=\"_blank\" rel=\"noopener\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Đồng hồ</strong></a>&nbsp;cũng sẽ th&ocirc;ng b&aacute;o khi bạn nhận được cuộc gọi, tin nhắn v&agrave; email.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3e_R9l-9Jt8bInLiXpveVJLT4jwibdMGZuuSfcjN6V8RaQbVlUwaETTPVwrkjNjtuV0DZj6JskFVh9bDbzw8hBkt2dBEaQH9nxk2s4_j1rDBnLb94vbuG9E7VaUqF_UXEuaMYsbNMOwdeqngTiO66kdow=w627-h578-no?authuser=1\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 578px; vertical-align: middle; font-size: 0px; width: 627px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3e_R9l-9Jt8bInLiXpveVJLT4jwibdMGZuuSfcjN6V8RaQbVlUwaETTPVwrkjNjtuV0DZj6JskFVh9bDbzw8hBkt2dBEaQH9nxk2s4_j1rDBnLb94vbuG9E7VaUqF_UXEuaMYsbNMOwdeqngTiO66kdow=w627-h578-no?authuser=1\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Ngo&agrave;i ra,&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; font-weight: normal; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/dong-ho-thong-minh-amazfit-t-rex.html\" target=\"_blank\" rel=\"noopener\">smartwatch Amazfit</a>&nbsp;</strong>mới n&agrave;y cũng bao gồm khả năng kh&aacute;ng nước đến 50m, pin 150mAh v&agrave; k&eacute;o d&agrave;i đến&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">28 ng&agrave;y&nbsp;</span>chỉ trong 1 lần sạc ở mức th&ocirc;ng thường v&agrave; bluetooth 5.0 LE. Đồng hồ hoạt động với ứng dụng Zepp v&agrave; tương th&iacute;ch với cả thiết bị Android v&agrave; iOS.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Đồng hồ Amazfit Neo&nbsp;</strong>đang được b&aacute;n với mức gi&aacute; $49.99 khoảng 1.1 triệu đồng.</span></span></span></p> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', NULL, NULL),
(4, 'Xiaomi ra mắt máy hút bụi cầm tay Mijia mới với công suất hút lên đến 13kPa, được bán...', 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/xiaomi-ra-mat-may-hut-bui-cam-tay-mijia-1.jpg', '<p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">M&aacute;y h&uacute;t bụi cầm tay Mijia</strong>&nbsp;sở hữu thiết kế h&igrave;nh trụ tr&ograve;n, nh&igrave;n c&oacute; vẻ kh&aacute; l&agrave; giống với một b&igrave;nh nước giữ nhiệt. B&ecirc;n cạnh đ&oacute;, trọng lượng nhẹ kh&ocirc;ng qu&aacute;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">550g</span>&nbsp;của thiết bị cho ph&eacute;p người d&ugrave;ng c&oacute; thể dễ d&agrave;ng mang theo để sử dụng bất cứ khi n&agrave;o cần.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3exYdwIGsCBcmcxYc5jwl9wVjj90joK2f0EtlH3Kxjf0kBt8n8tOVXNDPAWshbzm1IpwTZW620oCAlRw17A7SHD0wykBWYlI4ApfKQ0y4eE18_EcnJCIzkZsvlxIkNGucovlZxkyL6SafSHmzGYvniiyQ=s1024-no?authuser=0\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 424px; vertical-align: middle; font-size: 0px; width: 650px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3exYdwIGsCBcmcxYc5jwl9wVjj90joK2f0EtlH3Kxjf0kBt8n8tOVXNDPAWshbzm1IpwTZW620oCAlRw17A7SHD0wykBWYlI4ApfKQ0y4eE18_EcnJCIzkZsvlxIkNGucovlZxkyL6SafSHmzGYvniiyQ=s1024-no?authuser=0\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">Sản phẩm được trang bị động cơ&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">kh&ocirc;ng chổi than</span>&nbsp;hiện đại với tốc độ&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">88.000 v&ograve;ng/ph&uacute;t</span>&nbsp;c&ugrave;ng lực h&uacute;t mạnh mẽ l&ecirc;n đến&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">13kPa</span>, cho khả năng h&uacute;t v&agrave; l&agrave;m sạch một c&aacute;ch nhanh ch&oacute;ng bất kể bụi mịn hay c&aacute;c loại mảnh vụn kh&aacute;c nhau. Đặc biệt,&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">m&aacute;y h&uacute;t bụi Mijia</strong>&nbsp;c&ograve;n sở hữu thiết kế kh&ocirc;ng d&acirc;y, hoạt động bằng&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">pin</span>, kh&aacute; linh hoạt v&agrave; tiện lợi.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\">V&igrave; được gia c&ocirc;ng từ vật liệu nhẹ, chất lượng cao n&ecirc;n thiết bị c&oacute; k&iacute;ch thước kh&aacute; nhỏ gọn c&ugrave;ng cơ chế vận h&agrave;nh linh hoạt, ph&ugrave; hợp để sử dụng ở bất kỳ kh&ocirc;ng gian n&agrave;o. Sản phẩm cung cấp nhiều chế độ l&agrave;m sạch kh&aacute;c nhau với phần miệng h&uacute;t đa chức năng.</span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0px; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><em style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">M&aacute;y h&uacute;t bụi cầm tay Xiaomi Mijia</em>&nbsp;được ni&ecirc;m yết tr&ecirc;n&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">Giztop</span>&nbsp;với mức gi&aacute;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">59.9 USD</span>&nbsp;- tương đương&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">1.4 triệu đồng</span>. Ngo&agrave;i ra, Giztop c&ograve;n hỗ trợ khả năng giao h&agrave;ng tr&ecirc;n to&agrave;n thế giới, do đ&oacute; người d&ugrave;ng ở bất cứ nơi đ&acirc;u cũng đều c&oacute; thể đặt h&agrave;ng một c&aacute;ch dễ d&agrave;ng.</span></span></p> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', NULL, NULL),
(5, 'ZMI giới thiệu cốc sạc ZMI USB PD 65W, 3 cổng, giá 500 ngàn đồng', 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/zmi-65w-charger.jpg', '<p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Mới đ&acirc;y,&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/zmi/\" target=\"_blank\" rel=\"noopener\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">ZMI</strong></a>&nbsp;một c&ocirc;ng ty thuộc hệ sinh th&aacute;i Xiaomi lại tiếp tục ra mắt người d&ugrave;ng&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">cốc sạc</strong>&nbsp;mới với t&ecirc;n gọi&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">ZMI USB PD 65W</strong>&nbsp;tại thị trường Trung Quốc với thiết kế với một m&agrave;u đen tinh tế, 3 cổng ở mặt trước, đầu cắm c&oacute; thể được gập lại, linh hoạt hơn cho qu&aacute; tr&igrave;nh lưu trữ, mang theo.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3dHCkAl_Ks8qpdk2i1lLwDp5y_sfn8QlyhnCjZoOc72IFYYst18JU4ZdVLuzMr7Jot8rKS_qRIkk5Ul7BHU_MXhgLkivH8MHXYzky6WLS17mFE4Ay_htdtSvAxHyrOTAYMSl6wxbwFvs7iaoaw1T9TJDg=s723\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 723px; vertical-align: middle; font-size: 0px; width: 600px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3dHCkAl_Ks8qpdk2i1lLwDp5y_sfn8QlyhnCjZoOc72IFYYst18JU4ZdVLuzMr7Jot8rKS_qRIkk5Ul7BHU_MXhgLkivH8MHXYzky6WLS17mFE4Ay_htdtSvAxHyrOTAYMSl6wxbwFvs7iaoaw1T9TJDg=s723\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Cụ thể&nbsp;<strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Cốc sạc ZMI USB PD 65W</strong>&nbsp;được t&iacute;ch hợp c&ugrave;ng l&uacute;c 3 cổng gồm 1 cổng USB-C v&agrave; hai cổng USB-A. Khi 3 cổng được sử dụng c&ugrave;ng l&uacute;c, tổng c&ocirc;ng suất của&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/phu-kien-dien-thoai/sac/\" target=\"_blank\" rel=\"noopener\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">cốc sạc</strong></a>&nbsp;đạt&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">63W-45W</span>&nbsp;tr&ecirc;n USB-C v&agrave;&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">18W</span>&nbsp;cho hai cổng USB-A.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Đặc biệt, khi chỉ sử dụng 1 cổng USB Type-C,&nbsp;<a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; font-family: \'Roboto Condensed\', sans-serif; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"http://chiemtaimobile.vn/coc-sac-pd-usb-c-65w-zmi-ha712.html\" target=\"_blank\" rel=\"noopener\"><strong style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">cốc sạc ZMI</strong></a>&nbsp;c&oacute; thể cung cấp c&ocirc;ng suất sạc l&ecirc;n đến&nbsp;<span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #f39c12;\">65W&nbsp;</span>v&agrave; c&oacute; thể sạc đầy cho điện thoại Mi 10 Ultra mới ra mắt của Xiaomi chỉ trong 28 ph&uacute;t. Ch&iacute;nh v&igrave; vậy kh&ocirc;ng chỉ c&oacute; thể sạc cho smartphone m&agrave; bạn c&ograve;n c&oacute; thể sử dụng ZMI USB PD để sạc cho laptop.</span></span></span></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: center;\"><a style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); background: transparent; text-decoration-line: none; outline: none; color: #000000; cursor: pointer; border-bottom: 0px; transition: all 150ms ease 0s;\" href=\"https://lh3.googleusercontent.com/pw/ACtC-3cWfp3GrMohqVtDOr6cuIJaHU-QHWGkS2ocBDu60KQJmaPBPYoXC_8dkA1Mp43-lXt3myDxahdSRDj6wz91_3DD4OSGhiz4bqtYuqcnPZzzwaoS9qDOQiXhdVXq1BdcN8x0t6unlpZq6sx-6QfF8I_QDA=s808\" target=\"_blank\" rel=\"noopener\"><img style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 0px; max-width: 100%; height: 646px; vertical-align: middle; font-size: 0px; width: 600px;\" src=\"https://lh3.googleusercontent.com/pw/ACtC-3cWfp3GrMohqVtDOr6cuIJaHU-QHWGkS2ocBDu60KQJmaPBPYoXC_8dkA1Mp43-lXt3myDxahdSRDj6wz91_3DD4OSGhiz4bqtYuqcnPZzzwaoS9qDOQiXhdVXq1BdcN8x0t6unlpZq6sx-6QfF8I_QDA=s808\" alt=\"\" /></a></p> <p style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: #2e3a47; font-family: \'Roboto Condensed\', sans-serif; font-size: 14px; margin: 0cm 0cm 8pt; padding: 6px 0px; background-color: #ffffff; text-align: justify;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 14.98px;\">Về gi&aacute; cả,&nbsp;<em style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">cốc sạc ZMI USB PD 65W</em>&nbsp;được b&aacute;n với mức gi&aacute; 149NDT khoảng hơn 500 ng&agrave;n VND.</span></span></span></p> <div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification_registers`
--

CREATE TABLE `notification_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_content` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `payment_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lê Minh', 'thisisminh172@gmail.com', 901496630, '1200/30 Hoàng Sa, phường 4, quận Tân Bình, tp Hồ Chí Minh', 'JRPBDSHK', 'waiting', '2020-09-04 08:31:25', '2020-09-04 08:31:25'),
(2, 'Lê Minh', 'thisisminh172@gmail.com', 901496630, '1200/30 Hoàng Sa, phường 4, quận Tân Bình, tp Hồ Chí Minh', 'UMGFCIXY', 'waiting', '2020-09-04 08:32:44', '2020-09-04 08:32:44'),
(3, 'Lê Minh', 'thisisminh172@gmail.com', 901496630, '1200/30 Hoàng Sa, phường 4, quận Tân Bình, tp Hồ Chí Minh', '513V8MRW', 'waiting', '2020-09-06 12:25:26', '2020-09-06 12:25:26'),
(4, 'Lê Minh', 'minhl93172@gmail.com', 901496630, '1200/30 Hoàng Sa, phường 4, quận Tân Bình, tp Hồ Chí Minh', 'AODRE4JB', 'waiting', '2020-09-06 12:25:45', '2020-09-06 12:25:45'),
(5, 'Lê Minh', 'minh@gmail.com', 901496630, '1200/30 Hoàng Sa, phường 4, quận Tân Bình, tp Hồ Chí Minh', 'PYBYC1JB', 'waiting', '2020-09-06 12:26:11', '2020-09-06 12:26:11'),
(6, 'Công Dương', 'duong@gmail.com', 908012034, 'cmt8, quận 3', 'IYG1VNUI', 'waiting', '2020-09-06 12:26:58', '2020-09-06 12:26:58'),
(7, 'Dương', 'duong123@gmail.com', 909080808, 'Bành Văn Trân', 'JD8RPIXE', 'waiting', '2020-09-06 12:27:58', '2020-09-06 12:27:58'),
(8, 'Quốc Tuấn', 'tuan@gmail.com', 1023010123, 'Cách mạng tháng 8', 'SB9XCPZ8', 'waiting', '2020-09-06 12:28:39', '2020-09-06 12:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 1, 849000, '2020-09-04 08:31:25', '2020-09-04 08:31:25'),
(2, 2, 13, 1, 3949000, '2020-09-04 08:32:44', '2020-09-04 08:32:44'),
(3, 2, 3, 1, 5499000, '2020-09-04 08:32:44', '2020-09-04 08:32:44'),
(4, 2, 1, 1, 399000, '2020-09-04 08:32:44', '2020-09-04 08:32:44'),
(5, 2, 6, 1, 239000, '2020-09-04 08:32:44', '2020-09-04 08:32:44'),
(6, 3, 2, 1, 1189000, '2020-09-06 12:25:26', '2020-09-06 12:25:26'),
(7, 3, 7, 1, 939000, '2020-09-06 12:25:26', '2020-09-06 12:25:26'),
(8, 3, 16, 3, 4947000, '2020-09-06 12:25:26', '2020-09-06 12:25:26'),
(9, 4, 1, 1, 399000, '2020-09-06 12:25:45', '2020-09-06 12:25:45'),
(10, 5, 3, 1, 5499000, '2020-09-06 12:26:11', '2020-09-06 12:26:11'),
(11, 6, 8, 1, 849000, '2020-09-06 12:26:58', '2020-09-06 12:26:58'),
(12, 7, 1, 1, 399000, '2020-09-06 12:27:58', '2020-09-06 12:27:58'),
(13, 8, 13, 1, 3949000, '2020-09-06 12:28:39', '2020-09-06 12:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `brand_code`, `category_code`, `image_url`, `describe`, `tech_info`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Chuột chơi game ASUS Cerberus Optical Gaming Mouse', 'uploads/chuotas.jpg', 'as', 'ch', '[\"uploads\\/chuotas1.jpg\",\"uploads\\/chuotas2.jpg\",\"uploads\\/chuotas3.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: ASUS</li>\n                            <li>Tên sản phẩm: Ceberus</li>\n                            <li>Màu sắc: đen</li></ul>', 399000, 300, NULL, NULL),
(2, 'Bàn phím Gaming Asus TUF K1 RGB', 'uploads/phimas.jpg', 'as', 'bp', '[\"uploads\\/phimas1.jpg\",\"uploads\\/phimas2.jpg\",\"uploads\\/phimas3.jpg\",\"uploads\\/phimas4.jpg\"]', '\n            <div class=\"nd title_box_scroll_content_2019\">\n                  <h2 class=\"ddnb-title spct-title\">Đánh giá sản phẩm Bàn phím Gaming Asus TUF K1 RGB</h2>\n\n                     <h3><img src=\"https://hanoicomputercdn.com/media/lib/53482_gioi-thieu-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Giới thiệu Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></h3>\n<h3>Hiệu năng dành cho trò chơi</h3>\n<p>TUF Gaming K1 mang đến phản ứng xúc giác tuyệt vời với hành động&nbsp; vừa yên tĩnh vừa thoải mái. Nó cũng được thiết kế với công nghệ rollover 19 phím (NKRO), đảm bảo độ chính xác vượt trội và không bị bấm phím nhầm</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_switch-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Công nghệ NKRO của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Hiệu ứng RGB động và thanh ánh sáng</h3>\n<p>TUF Gaming K1 có năm vùng chiếu sáng riêng biệt và các thanh RGB nổi bật ở cả hai bên. Mỗi vùng được tùy chỉnh riêng từ toàn bộ phổ màu, cho phép bạn thể hiện cá tính. Ứng dụng ASUS Armory Crate cung cấp điều khiển RGB thế hệ tiếp theo, đồng bộ hóa cấu hình ánh sáng và trò chơi với nội dung của bạn.</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_den-led-rgb-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Các hiệu ứng đèn led RGB của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Núm chỉnh volume tiện lợi</h3>\n<p>Với núm chỉnh âm lượng chuyên dụng ở góc trên bên phải, TUF Gaming K1 giúp điều khiển âm thanh trò chơi của bạn nhanh chóng và dễ dàng. Bạn có thể tiếp cận và&nbsp;vặn bằng trực giác, giữ cho đôi mắt của bạn tập trung vào việc chơi game.</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_num-chinh-volume-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Núm chỉnh Volume của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Kê tay công thái học và chân chống có thể tuỳ chỉnh</h3>\n<p>Với kê tay có thể tháo rời và chân chống có thể điều chỉnh 2 mức độ chiều cao. TUF Gaming K1 có thiết kế công thái học cho sự thoải mái tuyệt đối</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_ke-tay-va-chan-chong-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Kê tay và chân chống của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Lớp vỏ đặc biệt chống tràn</h3>\n<p>Trong và ngoài, TUF Gaming K1 được thiết kế cho độ bền bỉ dài qua nhiều năm. Lớp vỏ bên ngoài được phủ 1 lớp phủ chuyên dụng có thể chịu được các bài kiểm tra về mài mòn, ma sát nghiêm ngặt. Và khả năng chống tràn đến 300ml đảm bảo rằng việc đổ nước sẽ không làm hỏng bản phím</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_tinh-nang-chong-nuoc-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Lớp vỏ đặc biệt của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Amoury Crate</h3>\n<p>ASUS Armory Crate&nbsp;hợp nhất các điều khiển hệ thống và ánh sáng để đặt các cài đặt thiết yếu trong tầm tay bạn trong một phần mềm duy nhất. Dễ dàng tạo và xác định và tùy chỉnh cấu hình kịch bản, keymap, ghi macro và hơn thế nữa. Bạn thậm chí có thể theo dõi các số liệu thống kê phần cứng trong khi chơi trò chơi để phân tích dữ liệu giải trí.</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_phan-mem-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Phần mềm của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<h3>Cấu hình với Memory Onboard</h3>\n<p>TUF Gaming K1 có tám phím lập trình được với hỗ trợ ghi macro nhanh chóng, giúp dễ dàng định cấu hình bàn phím của bạn để cá nhân hóa. Và ba tùy chỉnh cộng với một bộ nhớ trên bo mạch mặc định cho phép bạn&nbsp;mang bàn phím đi bất cứ đâu với cài đặt tuỳ chỉnh sẵn</p>\n<p><img src=\"https://hanoicomputercdn.com/media/lib/53482_memory-onboard-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg\" alt=\"Bộ nhớ trong của Bàn phím Gaming Asus TUF K1 RGB\" width=\"100%\"></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n\n                </div>\n\n            ', '<ul>\n                            <li>THương hiệu: ASUS</li>\n                            <li>Tên sản phẩm: TUF K1</li>\n                            <li>Màu sắc: đen nhám</li></ul>', 1189000, 100, NULL, NULL),
(3, 'Tai nghe không dây Gaming Corsair Virtuoso RGB SE Gunmetal', 'uploads/tainghecs.jpg', 'cs', 'tn', '[\"uploads\\/tainghecs1.jpg\",\"uploads\\/tainghecs2.jpg\",\"uploads\\/tainghecs3.jpg\",\"uploads\\/tainghecs4.jpg\"]', '<div>\n            <p><span class=\"notranslate\"><span id=\"product-name\">&nbsp;Trung thực cao của VIRTUOSO RGB WIRELESS SE - Gunmetal (AP)</span></span></p>\n            <h3 id=\"price\">&nbsp;</h3>\n            <p id=\"product-overview\"><span class=\"notranslate\">CORSAIR VIRTUOSO RGB Wireless SE mang đến trải nghiệm âm thanh độ trung thực cao, sự thoải mái cả ngày từ miếng đệm tai nghe bọt cao cấp và kết nối siêu nhanh với công nghệ SLIPSTREAM WIRELESS.</span></p>\n\n            </div>\n            <img src=\"https://cwsmgmt.corsair.com/pdp/virtuoso/img/carousel-se-01.jpg\" alt=\"\">\n            <img src=\"https://cwsmgmt.corsair.com/pdp/virtuoso/img/carousel-se-02.jpg\" alt=\"\">\n            <h3 class=\"h-bebas\"><span class=\"notranslate\">CHẤT LƯỢNG ÂM THANH KHÔNG THỎA HIỆP</span></h3>\n            <p><span class=\"notranslate\">Từ bước chân nhẹ nhất đến âm bass sâu nhất, bạn sẽ nghe thấy nhiều thứ hơn với VIRTUOSO RGB Wireless.</span>&nbsp;<span class=\"notranslate\">Một cặp trình điều khiển neodymium mật độ cao được điều chỉnh chính xác 50mm tự hào có dải tần số 20Hz-40.000Hz - gấp đôi những gì bạn nhận được từ hầu hết các tai nghe chơi game.</span></p>\n            ', '<ul>\n                            <li>THương hiệu: Consair</li>\n                            <li>Tên sản phẩm: VIRTUOSO RGB WIRELESS SE GUNMETAL</li>\n                            <li>Màu sắc: Gunmetal</li></ul>', 5499000, 300, NULL, NULL),
(4, 'Tai Nghe Dareu Over Ear EH925S PRO Led RGB', 'uploads/tainghedu.jpg', 'cs', 'tn', '[\"uploads\\/tainghedu1.jpg\",\"uploads\\/tainghedu2.jpg\"]', '<p>Tai nghe DareU EH925S Pro Led RGB</p>\n            <img src=\"https://hanoicomputercdn.com/media/lib/50404_Tai-Nghe-Dareu-EH925S-PRO-Led-RGB-4.png\" alt=\"\" width=\"100%\">\n            <h3>Thiết kế Ergonomic thoải mái khi đeo</h3>\n            <p>Tai nghe chơi game EH925s Pro có khung nhôm tích hợp vừa nhẹ vừa bền, củ tai có thể tinh chỉnh lên xuống, đảm bảo cho sự thoải mái khi đeo lâu, và được thiết kế cho sự cách âm tuyệt vời.</p>\n            <img src=\"https://hanoicomputercdn.com/media/lib/50404_Tai-Nghe-Dareu-EH925S-PRO-Led-RGB-3.png\" alt=\"\" width=\"100%\">\n            ', '<ul>\n                            <li>THương hiệu: Dareu</li>\n                            <li>Tên sản phẩm: EH925</li>\n                            <li>Màu sắc: Đen</li></ul>', 949000, 150, NULL, NULL),
(5, 'Bàn phím cơ Dareu EK169 Mechanical Red Switch Black', 'uploads/phimdu.jpg', 'du', 'bp', '[\"uploads\\/phimdu1.jpg\",\"uploads\\/phimdu2.jpg\",\"uploads\\/phimdu3.jpg\",\"uploads\\/phimdu4.jpg\"]', '\n            <h3><span>Bàn phím cơ Dareu EK169 Mechanical&nbsp;Red Switch Black</span></h3>\n            <p><img src=\"https://hanoicomputercdn.com/media/lib/46303_ban-phim-co-Dareu-EK169-Mechanical-Red-Switch-Black.png\" alt=\"\" width=\"100%\"></p>\n            <p><span>Đảm bảo độ bền lâu dài, DareU EK169 Black được thiết kế tương đối chắc chắn. Dây cáp được thiết kế bền bỉ chống rối, kèm theo đầu USB bọc chống nhiễu.</span></p>\n            <p><span style=\"font-size: medium;\"><img src=\"https://hanoicomputercdn.com/media/lib/46303_ban-phim-co-Dareu-EK169-Mechanical-Red-Switch-Black-1.jpg\" alt=\"\" width=\"100%\"></span></p>\n\n            ', '<ul>\n                            <li>THương hiệu: Dareu</li>\n                            <li>Tên sản phẩm: EK619 Black (Red Switch-TK582U08602G)</li>\n                            <li>Màu sắc: Đen</li></ul>', 689000, 50, NULL, NULL),
(6, 'Chuột chơi game E-Dra EMS612BK Optical USB Black', 'uploads/chuoted.jpg', 'ed', 'ch', '[\"uploads\\/chuoted1.jpg\",\"uploads\\/chuoted2.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: EDRA</li>\n                            <li>Tên sản phẩm: Chuột Edra EMS612BK</li>\n                            <li>Đèn chuột: Led RGB</li>\n                            <li>Màu sắc: Đen</li></ul>', 239000, 500, NULL, NULL),
(7, 'Bàn phím cơ E-Dra EK307 Mechanica Gaming', 'uploads/phimed.jpg', 'ed', 'bp', '[\"uploads\\/phimed1.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: EDRA</li>\n                            <li>Tên sản phẩm: EK307 </li>\n                            <li>Màu sắc: Đen</li></ul>', 939000, 100, NULL, NULL),
(8, 'Tai nghe E-Dra EH492 (7.1, Led vàng, USB)', 'uploads/taingheed.jpg', 'ed', 'tn', '[\"uploads\\/taingheed1.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: EDRA</li>\n                            <li>Tên sản phẩm: Tai nghe E-dra - EH492 - Tai nghe 7.1</li>\n                            <li>Màu sắc: Vàng</li></ul>', 849000, 100, NULL, NULL),
(9, 'Chuột chơi game Logitech G402 USB Black', 'uploads/chuotlt.jpg', 'lt', 'ch', '[\"uploads\\/chuotlt1.jpg\",\"uploads\\/chuotlt2.jpg\",\"uploads\\/chuotlt3.jpg\",\"uploads\\/chuotlt4.jpg\"]', '\n            <h3>Chuột chơi game Logitech G402</h3>\n            <p><img src=\"https://hanoicomputercdn.com/media/lib/29034_gioi-thieu-mouse-logitech-g402-usb-black.png\" alt=\"Giới thiệu Chuột chơi game Logitech G402\" width=\"100%\"></p>\n            <h3>TRACKING TỐC ĐỘ CAO VỚI FUSION ENGINE</h3>\n            <p>Công nghệ cảm biến tinh vi để chơi game siêu nhanh. Hyperion Fury kết hợp cảm biến quang học sử dụng công nghệ Logitech Delta Zero™ với cảm biến lai Fusion Engine™ độc quyền cho phép tốc độ&nbsp;tracking vượt quá 500 IPS.</p>\n            <p><img src=\"https://hanoicomputercdn.com/media/lib/29034_form-cam-cua-mouse-logitech-g402-usb-black.jpg\" alt=\"Chuột chơi game Logitech G402 có thiết kế cầm nắm thoải mái\" width=\"100%\"></p>\n            ', '<ul>\n                            <li>THương hiệu: Logitech</li>\n                            <li>Tên sản phẩm: G402 USB Black</li>\n                            <li>Đèn chuột: Xanh da trời</li>\n                            <li>Màu sắc: Đen</li></ul>', 699000, 300, NULL, NULL),
(10, 'Bàn phím cơ Logitech G610 Orion Blue', 'uploads/phimlt.jpg', 'lt', 'bp', '[\"uploads\\/phimlt1.jpg\",\"uploads\\/phimlt2.jpg\",\"uploads\\/phimlt3.jpg\",\"uploads\\/phimlt4.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: Logitech</li>\n                            <li>Tên sản phẩm: G610 Orion Mechanical</li>\n                            <li>Đèn phím: Xanh da trời</li>\n                            <li>Màu sắc: Đen</li></ul>', 1799000, 200, NULL, NULL),
(11, 'Tai nghe Logitech Astro A10 Gaming', 'uploads/tainghelt.jpg', 'lt', 'tn', '[\"uploads\\/tainghelt1.jpg\",\"uploads\\/tainghelt2.jpg\",\"uploads\\/tainghelt3.jpg\",\"uploads\\/tainghelt4.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: Logitech</li>\n                            <li>Tên sản phẩm: Astro</li>\n                            <li>Màu sắc: Đen</li></ul>', 999000, 299, NULL, NULL),
(12, 'Chuột chơi game Razer Basilisk FPS Gaming', 'uploads/chuotrz.jpg', 'rz', 'ch', '[\"uploads\\/chuotrz1.jpg\",\"uploads\\/chuotrz2.jpg\",\"uploads\\/chuotrz3.jpg\"]', '<p><img src=\"https://m.media-amazon.com/images/S/aplus-media/vc/522b3244-80ba-4be1-ab18-5f0a8e17cad7._SR970,300_.jpg\" alt=\"\"></p>', '<ul>\n                            <li>THương hiệu: Razor</li>\n                            <li>Tên sản phẩm: Basilisk </li>\n                            <li>Màu sắc: Đen</li></ul>', 1699000, 9, NULL, NULL),
(13, 'Bàn phím cơ Razer Blackwidow Elite Green switch', 'uploads/phimrz.jpg', 'rz', 'bp', '[\"uploads\\/phimrz1.jpg\",\"uploads\\/phimrz2.jpg\",\"uploads\\/phimrz3.jpg\",\"uploads\\/phimrz4.jpg\"]', '\n            <p><img src=\"/media/lib/44213_hnc-blackwidow-elite-razer-hnc3.jpg\" alt=\"\" width=\"100%\"><img src=\"/media/lib/44213_hnc-blackwidow-elite-razer-hnc1.jpg\" alt=\"\" width=\"100%\"><img src=\"/media/lib/44213_hnc-blackwidow-elite-razer-hnc2.jpg\" alt=\"\" width=\"100%\"></p>\n            ', '<ul>\n                            <li>THương hiệu: Razor</li>\n                            <li>Tên sản phẩm:  Blackwidow Elite </li>\n                            <li>Màu sắc: Đen</li></ul>', 3949000, 99, NULL, NULL),
(14, 'Tai nghe Razer Nari Ultimate Gaming Wireless', 'uploads/taingherz.jpg', 'rz', 'tn', '[\"uploads\\/taingherz1.jpg\",\"uploads\\/taingherz2.jpg\",\"uploads\\/taingherz3.jpg\",\"uploads\\/taingherz4.jpg\"]', '\n            <p><span>&nbsp;<img src=\"/media/lib/44204_nr1.png\" alt=\"\" width=\"100%\" height=\"100%\"></span></p>\n            <p><span>Razer Nari là những chiếc tai nghe chơi game không dây sắp được ra mắt tại Việt Nam. Hứa hẹn đem tới những sự lựa chọn tốt cho nhu cầu Wireless Gaming cùng những góc chơi game tối đa sự gọn gàng. Có 3 phiên bản Razer Nari được đưa tới các game thủ, Nari Essential, Nari và Nari Ultimate</span></p>\n            ', '<ul>\n                            <li>THương hiệu: Razor</li>\n                            <li>Tên sản phẩm:  Nari Ultimate </li>\n                            <li>Màu sắc: Đen</li></ul>', 4399000, 40, NULL, NULL),
(15, 'Chuột chơi game SteelSeries Rival 710', 'uploads/chuotss.jpg', 'ss', 'ch', '[\"uploads\\/chuotss1.jpg\",\"uploads\\/chuotss2.jpg\",\"uploads\\/chuotss3.jpg\",\"uploads\\/chuotss4.jpg\"]', '\n            <p><img src=\"/media/lib/45217_2ce9d188-8b75-4981-b649-e474c4f5d0f2._CR0038801200_PT0_SX970__.jpg\" alt=\"\"></p>\n            ', '<ul>\n                            <li>THương hiệu: Steelseries</li>\n                            <li>Tên sản phẩm:  Rival  </li>\n                            <li>Màu sắc: Đen</li></ul>', 2149000, 4, NULL, NULL),
(16, 'Bàn phím SteelSeries APEX 3 RGB Water Resistant Whisper-Quiet Switches Gaming Black', 'uploads/phimss.jpg', 'ss', 'bp', '[\"uploads\\/phimss1.jpg\",\"uploads\\/phimss2.jpg\",\"uploads\\/phimss3.jpg\",\"uploads\\/phimss4.jpg\"]', '<p>Đang cập nhật...</p>', '<ul>\r\n<li>THương hiệu: Steelseries</li>\r\n<li>T&ecirc;n sản phẩm:</li>\r\n<li>M&agrave;u sắc: Đen</li>\r\n</ul>', 1649000, 41, NULL, '2020-09-04 08:33:43'),
(17, 'Tai nghe Bluetooth SteelSeries Arctis 3 61509 - Phiên bản 2019', 'uploads/tainghess.jpg', 'ss', 'tn', '[\"uploads\\/tainghess1.jpg\",\"uploads\\/tainghess2.jpg\",\"uploads\\/tainghess3.jpg\",\"uploads\\/tainghess4.jpg\"]', 'Đang cập nhật...', '<ul>\n                            <li>THương hiệu: Steelseries</li>\n                            <li>Tên sản phẩm:  Arctis </li>\n                            <li>Màu sắc: Đen</li></ul>', 2799000, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `created_at`, `updated_at`) VALUES
(1, 'uploads/hinh-slider.jpg', 'uploads/hinh-slider1.jpg', 'uploads/hinh-slider2.png', 'uploads/hinh-slider3.jpg', 'uploads/hinh-slider4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`) VALUES
(1, 'Lê Minh', 'minh@gmail.com', NULL, '123', NULL, NULL, NULL, '1235/50 cmt8'),
(2, 'Công Dương', 'duong@gmail.com', NULL, '123', NULL, NULL, NULL, 'cmt8'),
(3, 'Quốc Tuấn', 'tuan@gmail.com', NULL, '123', NULL, NULL, NULL, 'cmt8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `commenters`
--
ALTER TABLE `commenters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_foreign` (`commenter_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `comment_reps`
--
ALTER TABLE `comment_reps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_reps_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_reps_commenter_id_foreign` (`commenter_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `notification_registers`
--
ALTER TABLE `notification_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_code_foreign` (`brand_code`),
  ADD KEY `products_category_code_foreign` (`category_code`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `commenters`
--
ALTER TABLE `commenters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_reps`
--
ALTER TABLE `comment_reps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification_registers`
--
ALTER TABLE `notification_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_commenter_id_foreign` FOREIGN KEY (`commenter_id`) REFERENCES `commenters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_reps`
--
ALTER TABLE `comment_reps`
  ADD CONSTRAINT `comment_reps_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_reps_commenter_id_foreign` FOREIGN KEY (`commenter_id`) REFERENCES `commenters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_code_foreign` FOREIGN KEY (`brand_code`) REFERENCES `brands` (`code`),
  ADD CONSTRAINT `products_category_code_foreign` FOREIGN KEY (`category_code`) REFERENCES `categories` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
