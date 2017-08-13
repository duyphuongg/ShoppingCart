-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 13, 2017 lúc 06:41 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(19, 20, '2017-06-28', 77800000, 'Thanh toán khi nhận hàng', 'Giao hàng sớm', '2017-06-28 03:34:05', '2017-06-28 03:31:21'),
(18, 19, '2017-06-28', 54900000, 'Chuyển khoản', 'Ko có', '2017-06-28 03:33:17', '2017-06-28 03:09:54'),
(17, 18, '2017-06-28', 74000000, 'Thanh toán khi nhận hàng', 'Giao hàng sớm', '2017-06-28 03:33:34', '2017-06-28 02:56:55'),
(16, 17, '2017-06-21', 23900000, 'Thanh toán khi nhận hàng', 'Ko có', '2017-06-28 03:33:42', '2017-06-21 14:43:45'),
(15, 16, '2017-06-21', 27800000, 'Thanh toán khi nhận hàng', 'Giao hàng sớm', '2017-06-28 03:33:48', '2017-06-21 13:53:46'),
(20, 21, '2017-06-29', 31900000, 'Chuyển khoản', 'Ok', '2017-06-29 06:54:43', '2017-06-29 06:54:43'),
(21, 22, '2017-07-01', 71000000, 'Chuyển khoản', 'Ko có', '2017-07-01 02:57:43', '2017-07-01 02:57:43'),
(22, 23, '2017-07-02', 80900000, 'Thanh toán khi nhận hàng', 'Ko', '2017-07-02 03:17:47', '2017-07-02 03:17:47'),
(23, 24, '2017-07-02', 25900000, 'Thanh toán khi nhận hàng', 'Giao hàng sớm', '2017-07-02 03:21:59', '2017-07-02 03:21:59'),
(24, 25, '2017-07-05', 31900000, 'Thanh toán khi nhận hàng', 'Ko có', '2017-07-05 03:16:21', '2017-07-05 03:16:21'),
(25, 26, '2017-07-06', 72000000, 'Thanh toán khi nhận hàng', 'Giao hàng sớm', '2017-07-06 01:54:16', '2017-07-06 01:54:16'),
(26, 27, '2017-07-06', 10000000, 'Thanh toán khi nhận hàng', 'hki', '2017-07-06 02:38:33', '2017-07-06 02:38:33'),
(27, 28, '2017-07-07', 39000000, 'Thanh toán khi nhận hàng', 'nhập cho hết', '2017-07-07 01:27:59', '2017-07-07 01:27:59'),
(28, 29, '2017-07-11', 47800000, 'Thanh toán khi nhận hàng', 'ko co', '2017-07-11 07:11:30', '2017-07-11 07:11:30'),
(29, 30, '2017-07-28', 16000000, 'Thanh toán khi nhận hàng', 'Ko có', '2017-07-28 03:50:14', '2017-07-28 03:50:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(30, 19, 41, 1, 65000000, '2017-06-28 03:31:21', '2017-06-28 03:31:21'),
(29, 19, 38, 1, 11900000, '2017-06-28 03:31:21', '2017-06-28 03:31:21'),
(28, 18, 46, 1, 39000000, '2017-06-28 03:09:54', '2017-06-28 03:09:54'),
(27, 18, 32, 1, 15900000, '2017-06-28 03:09:54', '2017-06-28 03:09:54'),
(26, 17, 56, 1, 19000000, '2017-06-28 02:56:55', '2017-06-28 02:56:55'),
(25, 17, 54, 1, 39000000, '2017-06-28 02:56:55', '2017-06-28 02:56:55'),
(24, 17, 31, 1, 16000000, '2017-06-28 02:56:55', '2017-06-28 02:56:55'),
(23, 16, 38, 1, 11900000, '2017-06-21 14:43:45', '2017-06-21 14:43:45'),
(22, 16, 36, 1, 12000000, '2017-06-21 14:43:45', '2017-06-21 14:43:45'),
(21, 15, 38, 1, 11900000, '2017-06-21 13:53:46', '2017-06-21 13:53:46'),
(20, 15, 32, 1, 15900000, '2017-06-21 13:53:46', '2017-06-21 13:53:46'),
(31, 19, 57, 1, 900000, '2017-06-28 03:31:21', '2017-06-28 03:31:21'),
(32, 20, 31, 1, 16000000, '2017-06-29 06:54:43', '2017-06-29 06:54:43'),
(33, 20, 33, 1, 15900000, '2017-06-29 06:54:43', '2017-06-29 06:54:43'),
(34, 21, 37, 1, 11000000, '2017-07-01 02:57:43', '2017-07-01 02:57:43'),
(35, 21, 44, 1, 60000000, '2017-07-01 02:57:43', '2017-07-01 02:57:43'),
(36, 22, 33, 1, 15900000, '2017-07-02 03:17:47', '2017-07-02 03:17:47'),
(37, 22, 41, 1, 65000000, '2017-07-02 03:17:47', '2017-07-02 03:17:47'),
(38, 23, 34, 1, 16000000, '2017-07-02 03:21:59', '2017-07-02 03:21:59'),
(39, 23, 35, 1, 9900000, '2017-07-02 03:21:59', '2017-07-02 03:21:59'),
(40, 24, 33, 1, 15900000, '2017-07-05 03:16:21', '2017-07-05 03:16:21'),
(41, 24, 34, 1, 16000000, '2017-07-05 03:16:21', '2017-07-05 03:16:21'),
(42, 25, 37, 1, 11000000, '2017-07-06 01:54:16', '2017-07-06 01:54:16'),
(43, 25, 50, 1, 61000000, '2017-07-06 01:54:16', '2017-07-06 01:54:16'),
(44, 26, 39, 1, 10000000, '2017-07-06 02:38:33', '2017-07-06 02:38:33'),
(45, 27, 54, 1, 39000000, '2017-07-07 01:27:59', '2017-07-07 01:27:59'),
(46, 28, 33, 2, 15900000, '2017-07-11 07:11:30', '2017-07-11 07:11:30'),
(47, 28, 34, 1, 16000000, '2017-07-11 07:11:30', '2017-07-11 07:11:30'),
(48, 29, 34, 1, 16000000, '2017-07-28 03:50:14', '2017-07-28 03:50:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietloai`
--

CREATE TABLE `chitietloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietloai`
--

INSERT INTO `chitietloai` (`id`, `id_type`, `name`) VALUES
(1, 1, 'Apple'),
(2, 1, 'Samsung'),
(3, 1, 'Sony'),
(4, 1, 'HTC'),
(5, 1, 'OPPO'),
(6, 2, 'Apple'),
(7, 2, 'Dell'),
(8, 2, 'Asus'),
(9, 2, 'Acer'),
(10, 2, 'Lenovo'),
(11, 3, 'iPad'),
(12, 3, 'Microsoft'),
(13, 3, 'Samsung'),
(14, 3, 'Lenovo'),
(15, 3, 'Huawei'),
(16, 4, 'Máy MP3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(21, 'Dương Ngọc Tâm', 'nam', 'tam@gmail.com', 'Quang NAm', '012346655', 'Ok', '2017-06-29 06:54:43', '2017-06-29 06:54:43'),
(20, 'Bùi Duy Phương', 'nam', 'phuong1@gmail.com', 'Quang Tri', '091423456', 'Giao hàng sớm', '2017-06-28 03:31:21', '2017-06-28 03:31:21'),
(16, 'Duy Phương', 'nam', 'buiduyphuong95@gmail.com', 'Đà Nẵng', '0123456789', 'Giao hàng sớm', '2017-06-21 13:53:46', '2017-06-21 13:53:46'),
(17, 'Nguyễn Văn A', 'nam', 'a@gmail.com', 'Quang Nam', '21548484848', 'Ko có', '2017-06-21 14:43:45', '2017-06-21 14:43:45'),
(18, 'Trịnh Thị Ly Ly', 'nữ', 'ly@gmail.com', 'Da Nang', '0156425554', 'Giao hàng sớm', '2017-06-28 02:56:54', '2017-06-28 02:56:54'),
(19, 'Trần Văn B', 'nam', 'b@gmail.com', 'Quang Ngai', '0165894212', 'Ko có', '2017-06-28 03:09:54', '2017-06-28 03:09:54'),
(22, 'Cao Toàn Mỹ', 'nam', 'my@gmail.com', 'HCM', '012345678', 'Ko có', '2017-07-01 02:57:43', '2017-07-01 02:57:43'),
(23, 'Duy Phương', 'nam', 'phuong1@gmail.com', 'Da Nang', '123456789', 'Ko', '2017-07-02 03:17:47', '2017-07-02 03:17:47'),
(24, 'Bùi Duy Phương', 'nam', 'phuong2@gmail.com', 'Da Nang', '0123456789', 'Giao hàng sớm', '2017-07-02 03:21:59', '2017-07-02 03:21:59'),
(25, 'Trịnh Bảo Ngọc', 'nữ', 'ngoc@gmail.com', 'Da Nang', '123456789', 'Ko có', '2017-07-05 03:16:21', '2017-07-05 03:16:21'),
(26, 'Thuc', 'nam', 'thuc@gmail.com', 'HCM', '0123456789', 'Giao hàng sớm', '2017-07-06 01:54:16', '2017-07-06 01:54:16'),
(27, 'phuong', 'nam', 'buiduyphuong@gmail.com', 'Da Nang', '0123456789', 'hki', '2017-07-06 02:38:33', '2017-07-06 02:38:33'),
(28, 'khach h ang', 'nam', 'vonhatquang100@gmail.com', 'đà nắng', '123458', 'nhập cho hết', '2017-07-07 01:27:59', '2017-07-07 01:27:59'),
(29, 'ph', 'nam', 'phuong1@gmail.com', 'Da Nang', '123458', 'ko co', '2017-07-11 07:11:30', '2017-07-11 07:11:30'),
(30, 'Na Trần', 'nữ', 'na@gmail.com', 'Da Nang', '012346788', 'Ko có', '2017-07-28 03:50:14', '2017-07-28 03:50:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `quyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `quyen`) VALUES
(1, 'admin'),
(2, 'nhanvien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_chitietloai` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_chitietloai`, `description`, `unit_price`, `promotion_price`, `image`, `soluong`, `created_at`, `updated_at`) VALUES
(33, 'APPLE IPHONE 7', 1, 'Apple A10 fusion 4 nhân, 5.5inch IPS LCD, khả năng chống nước theo chuẩn IP67., IOS 10, 256gb, camera sau 12MP f1.8; camera trước 7MP, full hd 1080p, LTE 4g, wifi 402.11a/b/g/n/ac 2 dải tần., Loa ngoài/Game/FM/MP4,3GP/Mp3,WAV,WMV, 14h đàm thoại LTE. 16 ngày ở chế độ chờ, 14h đàm thoại LTE. 16 ngày ở chế độ chờ., 158,2 x 77,9 x 7,3 mm, 188g, tai nghe airpod kết nối cổng lightning, không có cổng 3.5mm. Nút home cảm ứng touch 3D. Trang bị loa kép stereo.', 16000000, 15900000, '3.jpg', 20, NULL, NULL),
(34, 'APPLE IPHONE 7', 1, 'Apple A10 fusion 4 nhân, 5.5inch IPS LCD, khả năng chống nước theo chuẩn IP67., IOS 10, 256gb, camera sau 12MP f1.8; camera trước 7MP, full hd 1080p, LTE 4g, wifi 402.11a/b/g/n/ac 2 dải tần., Loa ngoài/Game/FM/MP4,3GP/Mp3,WAV,WMV, 14h đàm thoại LTE. 16 ngày ở chế độ chờ, 14h đàm thoại LTE. 16 ngày ở chế độ chờ., 158,2 x 77,9 x 7,3 mm, 188g, tai nghe airpod kết nối cổng lightning, không có cổng 3.5mm. Nút home cảm ứng touch 3D. Trang bị loa kép stereo.', 16000000, 16000000, '4.jpg', 1, NULL, NULL),
(35, 'APPLE IPHONE 6S', 1, 'Apple A9, 5.5-inch (diagonal) widescreen Multi-Touch display, 1920x1080(401ppi), IOS 9.0, 64Gb, 12-megapixel iSight, 2LED flash, f2.2, Apple EarPods with Remote and Mic, 802.11a/b/g/n, Bluetooth 4.2, Audio formats supported: AAC (8 to 320 Kbps), Protected AAC ..., Standard battery, Li-Po 2915 mAh, call Up to 24 h / Stand-by 200 h, 158,1x 77,8 x 7,1 mm, 172 g', 10000000, 9900000, '5.jpg', 20, NULL, NULL),
(36, 'SAMSUNG GALAXY S7', 2, 'Exynos 8890, Octa core (2.3GHz Quad + 1.6GHz Quad), 64 bit, 5.5 , Super AMOLED, 1440 x 2560 pixels, Corning Gorilla Glass 4, Android 6.0 (Marshmallow), RAM 4GB, ROM 128GB, hỗ trợ thẻ nhớ lên đến 200GB, chính 12MP, phụ 5MP, Quay phim 4K 2160p@30fps, Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot, Đọc báo , Xem phim , lướt web , soạn văn bản ...., 3600mAH, 2G GSM 850/900/1800/1900, 3G HSDPA 850/900/1900/2100, 4G LTE cat9, MP3, WAV, eAAC+, FLAC, 150.9 x 72.6 x 7.7mm, 157g, Mở khóa vân tay, chống nước, chống bụi và sạc nhanh', 12000000, 12000000, '6.jpg', 20, NULL, NULL),
(37, 'SAMSUNG GALAXY S7 EDGE', 2, 'Exynos 8890, Octa core (2.3GHz Quad + 1.6GHz Quad), 64 bit, 5.5 , Super AMOLED, 1440 x 2560 pixels, Corning Gorilla Glass 4, Android 6.0 (Marshmallow), RAM 4GB, ROM 128GB, hỗ trợ thẻ nhớ lên đến 200GB, chính 12MP, phụ 5MP, Quay phim 4K 2160p@30fps, Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot, Đọc báo , Xem phim , lướt web , soạn văn bản ...., 3600mAH, 2G GSM 850/900/1800/1900, 3G HSDPA 850/900/1900/2100, 4G LTE cat9, MP3, WAV, eAAC+, FLAC, 150.9 x 72.6 x 7.7mm, 157g, Mở khóa vân tay, chống nước, chống bụi và sạc nhanh', 11000000, 11000000, '7.jpg', 20, NULL, NULL),
(38, 'SAMSUNG GALAXY NOTE 5', 2, 'Exynos 8890, Octa core (2.3GHz Quad + 1.6GHz Quad), 64 bit, 5.5 , Super AMOLED, 1440 x 2560 pixels, Corning Gorilla Glass 4, Android 6.0 (Marshmallow), RAM 4GB, ROM 32GB, hỗ trợ thẻ nhớ lên đến 200GB, chính 12MP, phụ 5MP, Quay phim 4K 2160p@30fps, Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot, Đọc báo , Xem phim , lướt web , soạn văn bản ...., 3600mAH, 2G GSM 850/900/1800/1900, 3G HSDPA 850/900/1900/2100, 4G LTE cat9, MP3, WAV, eAAC+, FLAC, 150.9 x 72.6 x 7.7mm, 157g, Mở khóa vân tay, chống nước, chống bụi và sạc nhanh', 12000000, 11900000, '8.jpg', 20, NULL, NULL),
(39, 'SAMSUNG GALAXY A9 PRO', 2, 'Exynos 8890, Octa core (2.3GHz Quad + 1.6GHz Quad), 64 bit, 5.5 , Super AMOLED, 1440 x 2560 pixels, Corning Gorilla Glass 4, Android 6.0 (Marshmallow), RAM 4GB, ROM 32GB, hỗ trợ thẻ nhớ lên đến 200GB, chính 12MP, phụ 5MP, Quay phim 4K 2160p@30fps, Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot, Đọc báo , Xem phim , lướt web , soạn văn bản ...., 3600mAH, 2G GSM 850/900/1800/1900, 3G HSDPA 850/900/1900/2100, 4G LTE cat9, MP3, WAV, eAAC+, FLAC, 150.9 x 72.6 x 7.7mm, 157g, Mở khóa vân tay, chống nước, chống bụi và sạc nhanh', 10000000, 10000000, '9.jpg', 20, NULL, NULL),
(40, 'SAMSUNG GALAXY S7 EDGE', 2, 'Exynos 8890, Octa core (2.3GHz Quad + 1.6GHz Quad), 64 bit, 5.5 , Super AMOLED, 1440 x 2560 pixels, Corning Gorilla Glass 4, Android 6.0 (Marshmallow), RAM 4GB, ROM 32GB, hỗ trợ thẻ nhớ lên đến 200GB, chính 12MP, phụ 5MP, Quay phim 4K 2160p@30fps, Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot, Đọc báo , Xem phim , lướt web , soạn văn bản ...., 3600mAH, 2G GSM 850/900/1800/1900, 3G HSDPA 850/900/1900/2100, 4G LTE cat9, MP3, WAV, eAAC+, FLAC, 150.9 x 72.6 x 7.7mm, 157g, Mở khóa vân tay, chống nước, chống bụi và sạc nhanh', 9000000, 8600000, '10.jpg', 20, NULL, NULL),
(41, 'APPLE MACBOOK PRO', 6, 'Core i7, 4 x 2.7GHz, 16GB 2133MHz, SSD 512GB, 15.4 with Retina Display 2.880 x 1.800, Radeon Pro 455 2GB, Touchbar. TouchID, 4 port USB-C, 1.83kg, MacOS, Build-in Battery (10 hours with Web)', 65000000, 65000000, '11.jpg', 10, NULL, NULL),
(42, 'APPLE MACBOOK PRO Black', 6, 'Core i7, 4 x 2.7GHz, 16GB 2133MHz, SSD 512GB, 15.4 with Retina Display 2.880 x 1.800, Radeon Pro 455 2GB, Touchbar. TouchID, 4 port USB-C, 1.83kg, MacOS, Build-in Battery (10 hours with Web)', 64000000, 64000000, '12.jpg', 10, NULL, NULL),
(43, 'APPLE MACBOOK PRO ', 6, '2.5GHz quad-core Intel Core i7 processor (Turbo Boost up to 3.7GHz), 16 GB of 1600MHz DDR6L. onboard memory, 512GB SSD, 15.4-INCH (DIAGONAL) LED-BACKLIT, IPS, 2880 x 1800, Intel Iris Pro Graphics, 802.11n Wi-Fi wireless networking; IEEE 802.11a/b/g compatible, 2 cổng USB 3.0, 2 Thunderbolt, Khe thẻ nhớ SDXC card, HDMI, Bluetooth 4.0 wireless technology, 2.02 kg, MAC OS Mavericks, Up to 9 hours wireless web, Force Touch trackpad', 63000000, 62900000, '13.jpg', 10, NULL, NULL),
(44, 'APPLE MACBOOK PRO RETINA', 6, '2.5GHz quad-core Intel Core i7 processor (Turbo Boost up to 3.7GHz), 16 GB of 1600MHz DDR6L. onboard memory, 512GB SSD, 15.4-INCH (DIAGONAL) LED-BACKLIT, IPS, 2880 x 1800, Intel Iris Pro Graphics, 802.11n Wi-Fi wireless networking; IEEE 802.11a/b/g compatible, 2 cổng USB 3.0, 2 Thunderbolt, Khe thẻ nhớ SDXC card, HDMI, Bluetooth 4.0 wireless technology, 2.02 kg, MAC OS Mavericks, Up to 9 hours wireless web, Force Touch trackpad', 60000000, 60000000, '14.jpg', 2, NULL, NULL),
(45, 'DELL INSPIRON N3467', 7, 'Intel Core i5 7200U(4*2.5Ghz,Turbo 3.1 Ghz, 3MB cache smart,14nm, 15W), intel CORE i5 7th Gen, 1 x 4GB DDR4, 2400MHz (2 slots), 1TB SATA3 (5400rpm), DVD-RW SMT Double Layer, 14-inch HD (1366x768) anti-glare LED-backlit display, Intel HD Graphics 620, Wireless 802.11b/g/n, 1.0MP Integrated 1280x720 native HD Webcam + Digital microphone (1), Bluetooth 4.1, USB 3.0, Finger, 2.1Kg, Pin 4 Cell 40wh, DOS, Màu: đen, 2 x USB 3.0 ; 1 x USB 2.0 ; 1 x VGA ; 1 x HDMI ; 1 x headphone/microphone Combo', 40000000, 40000000, '15.jpg', 2, NULL, NULL),
(46, 'DELL INSPIRON N3467', 7, 'Intel Core i5 7200U(4*2.5Ghz,Turbo 3.1 Ghz, 3MB cache smart,14nm, 15W), intel CORE i5 7th Gen, 1 x 4GB DDR4, 2400MHz (2 slots), 1TB SATA3 (5400rpm), DVD-RW SMT Double Layer, 14-inch HD (1366x768) anti-glare LED-backlit display, Intel HD Graphics 620, Wireless 802.11b/g/n, 1.0MP Integrated 1280x720 native HD Webcam + Digital microphone (1), Bluetooth 4.1, USB 3.0, Finger, 2.1Kg, Pin 4 Cell 40wh, DOS, Màu: đen, 2 x USB 3.0 ; 1 x USB 2.0 ; 1 x VGA ; 1 x HDMI ; 1 x headphone/microphone Combo', 40000000, 39000000, '16.jpg', 1, NULL, NULL),
(47, 'NOTEBOOK DELL VOSTRO V3468', 7, 'Intel Core i5 7200U(4*2.5Ghz,Turbo 3.1 Ghz, 3MB cache smart,14nm, 15W), intel CORE i5 7th Gen, 1 x 4GB DDR4, 2400MHz (2 slots), 1TB SATA3 (5400rpm), DVD-RW SMT Double Layer, 14-inch HD (1366x768) anti-glare LED-backlit display, Intel HD Graphics 620, Wireless 802.11b/g/n, 1.0MP Integrated 1280x720 native HD Webcam + Digital microphone (1), Bluetooth 4.1, USB 3.0, Finger, 2.1Kg, Pin 4 Cell 40wh, DOS, Màu: đen, 2 x USB 3.0 ; 1 x USB 2.0 ; 1 x VGA ; 1 x HDMI', 20000000, 19000000, '17.jpg', 2, NULL, NULL),
(48, 'DELL VOSTRO V3468', 7, 'Intel Core i5 7200U(4*2.5Ghz,Turbo 3.1 Ghz, 3MB cache smart,14nm, 15W), intel CORE i5 7th Gen, 1 x 4GB DDR4, 2400MHz (2 slots), 1TB SATA3 (5400rpm), DVD-RW SMT Double Layer, 14-inch HD (1366x768) anti-glare LED-backlit display, Intel HD Graphics 620, Wireless 802.11b/g/n, 1.0MP Integrated 1280x720 native HD Webcam + Digital microphone (1), Bluetooth 4.1, USB 3.0, Finger, 2.1Kg, Pin 4 Cell 40wh, DOS, Màu: đen, 2 x USB 3.0 ; 1 x USB 2.0 ; 1 x VGA ; 1 x HDMI', 20000000, 20000000, '18.jpg', 3, NULL, NULL),
(49, 'MICROSOFT SURFACE PRO 4 ', 12, 'Intel Core i5 6300U(4*2.4Ghz, 3MB L3cache, 14nm, 15W), Intel 8 Series Express, 4GB DDR3L BUS 1600Mhz, 128GB SSD, NO, 12.3 INPixelSense Display Resolution: 2736 x 1824 (267 PPI) Aspec, Intel HD Graphics 520, IEEE 802.11a/b/g/n, 5.0 megapixel front-facing HD camera8.0 megapixel rear-facing autofoc, Full-size USB 3.0, Bluetooth 4.0, 766g, Windows 10 Pro, Pin Up to 9 hours of video playback1, microSD Card reader, Mini-Display Port, headset jack', 61000000, 60900000, '20.jpg', 10, NULL, NULL),
(50, 'MICROSOFT SURFACE PRO 4 ', 12, 'Intel Core i5 6300U(4*2.4Ghz, 3MB L3cache, 14nm, 15W), Intel 8 Series Express, 4GB DDR3L BUS 1600Mhz, 128GB SSD, NO, 12.3 INPixelSense Display Resolution: 2736 x 1824 (267 PPI) Aspec, Intel HD Graphics 520, IEEE 802.11a/b/g/n, 5.0 megapixel front-facing HD camera8.0 megapixel rear-facing autofoc, Full-size USB 3.0, Bluetooth 4.0, 766g, Windows 10 Pro, Pin Up to 9 hours of video playback1, microSD Card reader, Mini-Display Port, headset jack', 61000000, 61000000, '19.jpg', 10, NULL, NULL),
(51, 'MICROSOFT SURFACE PRO 3 ', 12, 'Intel Core i7 4650U(4*1.70Ghz, 4MB L3 cache, 22nm, 15W), Intel 8 Series Express, 8GB DDR3L BUS 1600Mhz, 256GB SSD, NO, 12 inch ClearType Full HD Display, Resolution: 2160 x 1440, Intel HD 5000 Graphics, Wireless 802.11 b/g/n, NIC 1 Gbps, HD camera, Bluetooth , USB3.0,Cover port, 0.79KG (292.10 x 201.42 x 9.14 mm), Windows 8.1 Pro, Kèm bút Spen, 1 x Mini DisplayPort. Pin có thể lên đến 8h', 45000000, 45000000, '21.jpg', 10, NULL, NULL),
(52, 'MICROSOFT SURFACE PRO 3 ', 12, 'Intel Core i7 4650U(4*1.70Ghz, 4MB L3 cache, 22nm, 15W), Intel 8 Series Express, 8GB DDR3L BUS 1600Mhz, 256GB SSD, NO, 12 inch ClearType Full HD Display, Resolution: 2160 x 1440, Intel HD 5000 Graphics, Wireless 802.11 b/g/n, NIC 1 Gbps, HD camera, Bluetooth , USB3.0,Cover port, 0.79KG (292.10 x 201.42 x 9.14 mm), Windows 8.1 Pro, Kèm bút Spen, 1 x Mini DisplayPort. Pin có thể lên đến 8h', 45000000, 44000000, '22.jpg', 10, NULL, NULL),
(53, 'APPLE IPAD PRO 9.7INCH', 11, 'X Dual-core 2.16 GHz, Apple A9, 2GB, 128 GB, 4 loa ngoài;, 9.7-inch (2048-by-1536-pixel), 3G, Wi-Fi (802.11a/b/g/n) and Bluetooth 2.1, Bluetooth 4.2, 437g, Pin Lithium Polymer; dày 6.1mm, Camera chính: 12MP f/2.2, quay video 4K, True Tone Flash, Live Photos Camera phụ: 5MP f/2.2, Retina Flash', 40000000, 40000000, '23.jpg', 2, NULL, NULL),
(54, 'APPLE IPAD PRO 9.7INCH', 11, 'X Dual-core 2.16 GHz, Apple A9, 2GB, 128 GB, 4 loa ngoài;, 9.7-inch (2048-by-1536-pixel), 3G, Wi-Fi (802.11a/b/g/n) and Bluetooth 2.1, Bluetooth 4.2, 437g, Pin Lithium Polymer; dày 6.1mm, Camera chính: 12MP f/2.2, quay video 4K, True Tone Flash, Live Photos Camera phụ: 5MP f/2.2, Retina Flash', 40000000, 39000000, '24.jpg', 3, NULL, NULL),
(55, 'APPLE IPAD AIR 2 ', 11, 'Apple 64 bit A8 + m8, 2 Gb, 128Gb, Camera trước 1.2MP, Camera sau 8MP, quay phim HD, TFT LCD, 2048-by-1536-pixels, 9.7 inch, Cảm ứng Đa điểm, Wi-Fi + 4G model, GPS,, Lightning connector, 3.5-mm stereo, Microphone, Bluetooth 4.0 wireless technology, 444 gram, iOS 8, Touch ID,mỏng 6,1 mm', 20000000, 20000000, '25.jpg', 0, NULL, NULL),
(56, 'APPLE IPAD AIR 2 ', 11, 'Apple 64 bit A8 + m8, 2 Gb, 128Gb, Camera trước 1.2MP, Camera sau 8MP, quay phim HD, TFT LCD, 2048-by-1536-pixels, 9.7 inch, Cảm ứng Đa điểm, Wi-Fi + 4G model, GPS,, Lightning connector, 3.5-mm stereo, Microphone, Bluetooth 4.0 wireless technology, 444 gram, iOS 8, Touch ID,mỏng 6,1 mm', 20000000, 19000000, '26.jpg', 20, NULL, NULL),
(57, 'MAY NGHE NHAC SONY NWZ-WH505', 16, 'Tích hợp sẵn loa trên máy Phát nhạc không dây Headphones Màng lo với âm thanh Bass mạnh mẽ Phát nhiều định dạng âm thanh Thời lượng Pin được mở rộng 2 giờ sạc đầy , sạc nhanh : 3 phút nghe được 60 phút', 900000, 900000, '27.jpg', 5, NULL, NULL),
(58, 'MAY NGHE NHAC SONY NWZ', 16, 'Tích hợp sẵn loa trên máy Phát nhạc không dây Headphones Màng lo với âm thanh Bass mạnh mẽ Phát nhiều định dạng âm thanh Thời lượng Pin được mở rộng 2 giờ sạc đầy , sạc nhanh : 3 phút nghe được 60 phút', 900000, 900000, '28.jpg', 5, NULL, NULL),
(59, 'MAY NGHE NHAC MP4 8GB SONY', 16, 'Tích hợp sẵn loa trên máy Phát nhạc không dây Headphones Màng lo với âm thanh Bass mạnh mẽ Phát nhiều định dạng âm thanh Thời lượng Pin được mở rộng 2 giờ sạc đầy , sạc nhanh : 3 phút nghe được 60 phút', 500000, 500000, '29.jpg', 5, NULL, NULL),
(60, 'MAY NGHE NHAC MP4 8GB SONY', 16, 'Tích hợp sẵn loa trên máy Phát nhạc không dây Headphones Màng lo với âm thanh Bass mạnh mẽ Phát nhiều định dạng âm thanh Thời lượng Pin được mở rộng 2 giờ sạc đầy , sạc nhanh : 3 phút nghe được 60 phút', 500000, 400000, '30.jpg', 5, NULL, NULL),
(61, 'APPLE IPHONE 7 PLUS', 1, 'Apple A10 fusion 4 nhân, 5.5inch IPS LCD, khả năng chống nước theo chuẩn IP67., IOS 10, 256gb, camera sau 12MP f1.8; camera trước 7MP, full hd 1080p, LTE 4g, wifi 402.11a/b/g/n/ac 2 dải tần., Loa ngoài/Game/FM/MP4,3GP/Mp3,WAV,WMV, 14h đàm thoại LTE. 16 ngày ở chế độ chờ, 14h đàm thoại LTE. 16 ngày ở chế độ chờ., 158,2 x 77,9 x 7,3 mm, 188g, tai nghe airpod kết nối cổng lightning, không có cổng 3.5mm. Nút home cảm ứng touch 3D. Trang bị loa kép stereo.', 16000000, 15900000, '1.jpg', 20, NULL, NULL),
(62, 'APPLE IPHONE 7', 1, 'Apple A10 fusion 4 nhân, 5.5inch IPS LCD, khả năng chống nước theo chuẩn IP67., IOS 10, 256gb, camera sau 12MP f1.8; camera trước 7MP, full hd 1080p, LTE 4g, wifi 402.11a/b/g/n/ac 2 dải tần., Loa ngoài/Game/FM/MP4,3GP/Mp3,WAV,WMV, 14h đàm thoại LTE. 16 ngày ở chế độ chờ, 14h đàm thoại LTE. 16 ngày ở chế độ chờ., 158,2 x 77,9 x 7,3 mm, 188g, tai nghe airpod kết nối cổng lightning, không có cổng 3.5mm. Nút home cảm ứng touch 3D. Trang bị loa kép stereo.', 16000000, 15900000, '2.jpg', 20, NULL, NULL),
(63, 'iphone', NULL, '1', 1, 1, 'pf6z_5.jpg', 1, '2017-07-07 01:29:51', '2017-07-07 01:29:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.png'),
(2, '', 'banner2.png\r\n'),
(3, '', 'banner3.png'),
(4, '', 'banner4.png'),
(6, '', 'banner6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Smart Phone', NULL, NULL),
(2, 'Laptop', NULL, NULL),
(3, 'Tablet', NULL, NULL),
(4, 'Phụ kiện', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phanquyen` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `id_phanquyen`, `remember_token`) VALUES
(1, 'admin', '$2y$10$GhE22wlQdA7z0MnO.5EB9umwWNogQjWEDA7jgTOM44XaWBJgoMqma', 1, '4UGRsK1Ba2x9scEelNhqqsqrUxalVQXP5WgwbUjTLQMjfJsIL3iGqPX9XNrB'),
(4, 'phuong', '$2y$10$UZ/pUIH8aL73GHcnmW9yautR.G8CSlnlX0I8mDPycpQnfKnHXtVmm', 2, 'S6TT0WNiKhNS6XHsyySuwzaqggq37lCqPVI8b15BgKGGO9F5ED0yvrYOmDkT'),
(5, 'phong', '$2y$10$VBrIP/9EgNTATfQD6qmboeccSFZrAJ2JeAvXH8STmi/g5UqZhgjC6', 2, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `chitietloai`
--
ALTER TABLE `chitietloai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietloai_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_chitietloai`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id_phanquyen_foreign` (`id_phanquyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT cho bảng `chitietloai`
--
ALTER TABLE `chitietloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietloai`
--
ALTER TABLE `chitietloai`
  ADD CONSTRAINT `chitietloai_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_chitietloai_foreign` FOREIGN KEY (`id_chitietloai`) REFERENCES `chitietloai` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_phanquyen_foreign` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
