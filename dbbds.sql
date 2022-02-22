-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2021 lúc 08:02 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbbds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bds`
--

CREATE TABLE `bds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_district` bigint(20) UNSIGNED NOT NULL,
  `id_city` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `id_owner` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(18,2) NOT NULL,
  `dientich` decimal(8,1) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'onl',
  `loai` int(11) NOT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangdum_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangdum_phone` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bds`
--

INSERT INTO `bds` (`id`, `name`, `address`, `id_district`, `id_city`, `id_type`, `id_owner`, `info`, `price`, `dientich`, `status`, `loai`, `youtube`, `dangdum_name`, `dangdum_phone`, `created_at`, `updated_at`) VALUES
(1, 'Nhà mặt tiền đường', '169 Tôn Đản P10', 4, 1, 2, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\nbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb\r\ncccccccccc\r\nddddddddddeef\r\nghi\r\nfred\r\nmctominay', 1500000000.00, '10.2', 'off', 1, NULL, NULL, NULL, '2021-08-16 02:22:04', '2021-09-19 08:15:12'),
(2, 'nha mat tien 2 tang', '100 Trần Hưng Đạo P1', 5, 1, 2, 2, 'You are my fire\r\nThe one desire\r\nBelieve when I say\r\nI want it that way\r\nBut we are two worlds apart\r\nCan\'t reach to your heart\r\nWhen you say\r\nThat I want it that way', 5500000000.00, '8.5', 'off', 1, NULL, NULL, NULL, '2021-08-17 06:38:36', '2021-08-23 20:44:45'),
(4, 'Chung Cư Cao Cấp', '77 Phạm Thế Hiển', 8, 1, 1, 2, 'When your legs don\'t work like they used to before\r\nAnd I can\'t sweep you off of your feet\r\nWill your mouth still remember the taste of my love\r\nWill your eyes still smile from your cheeks', 6000000000.00, '8.8', 'onl', 1, NULL, NULL, NULL, '2021-08-19 20:18:48', '2021-09-09 03:02:17'),
(5, 'Chung Cư Dự Án Green Day', '50 Lê Văn Linh P2', 7, 1, 1, 2, 'Kiss me under the light of a thousand stars\r\nPlace your head on my beating heart\r\nI\'m thinking out loud\r\nMaybe we found love right where we are', 3200000000.00, '7.5', 'onl', 1, NULL, NULL, NULL, '2021-08-19 20:24:17', '2021-09-09 03:02:17'),
(6, 'Bán kho hàng', '80 Hoàng Hoa Thám, Phường 12', 17, 1, 4, 2, 'Enter text here...', 4700000000.00, '50.6', 'onl', 1, NULL, NULL, NULL, '2021-08-19 20:36:57', '2021-09-09 03:02:17'),
(7, 'CHÍNH CHỦ BÁN NHÀ 190M2, MT 12M PHỐ TRẦN HƯNG ĐẠO, HOÀN KIẾM', 'Đường Trần Hưng Đạo, Phường Phan Chu Trinh', 25, 2, 2, 1, 'Enter text here...', 15200000000.00, '190.0', 'onl', 1, NULL, NULL, NULL, '2021-08-19 21:05:43', '2021-08-19 21:10:49'),
(8, 'Chung cư gần chợ', '50 Tôn Thất Thuyết P2', 4, 1, 1, 1, 'Loving can hurt, loving can hurt sometimes\r\nBut it\'s the only thing that I know\r\nWhen it gets hard, you know it can get hard sometimes\r\nIt is the only thing makes us feel alive', 1000000000.00, '7.5', 'onl', 1, NULL, NULL, NULL, '2021-08-19 21:38:21', '2021-08-19 21:39:20'),
(10, 'Căn hộ Quận 1, The MarQ 2 phòng ngủ, 66m2 tầng 18', 'Đường Nguyễn Đình Chiểu, Phường Đa Kao', 1, 1, 1, 1, 'Kết cấu: 66m2 thông thủy, ban công hướng Đông Nam. View nhìn trực diện ra ngoài.\r\nBàn giao cao cấp, trần khá là cao như nhà phố.\r\nVị trí cách thang máy 1 căn, nên cũng không ồn, và thuận lợi cho việc chuyển đồ vô nhà.', 4300000000.00, '66.0', 'onl', 2, NULL, NULL, NULL, '2021-08-21 02:03:30', '2021-08-21 02:03:30'),
(11, 'testselect', 'test', 13, 1, 1, 2, 'Enter text here...', 5500000000.00, '10.0', 'off', 1, NULL, NULL, NULL, '2021-08-21 07:36:20', '2021-08-24 22:49:56'),
(12, 'Phòng trọ sv', 'Nguyễn Trãi P5', 5, 1, 6, 4, 'Enter text here...', 6000000.00, '5.0', 'lock', 2, NULL, NULL, NULL, '2021-08-27 23:47:08', '2021-09-19 08:01:40'),
(13, 'Cần thuê phòng trọ', 'CMT8', 3, 1, 6, 4, 'Enter text here...', 3000000.00, '5.0', 'lock', 3, NULL, NULL, NULL, '2021-09-08 02:22:02', '2021-09-19 08:01:40'),
(14, 'testforcustomer', '2950 Phạm Thế Hiển', 8, 1, 2, 3, 'adsgdsvfsvsc\r\nsdfgsfgsfgdf\r\nrtyoijrtknhklgf', 7800000000.00, '20.0', 'onl', 1, 'https://www.youtube.com/watch?v=BqBvUnZZtYo', 'Nguyễn Văn Tèo', '0774589632', '2021-09-08 02:36:56', '2021-09-13 01:23:00'),
(15, 'NHÀ ĐI MỸ CẦN BÁN GẤP ĐẤT MẶT HỒ TRỊ AN NÚI CÚI', 'Hồ Trị An', 29, 6, 3, 3, 'Vị trí đối diện đức mẹ núi Cúi\r\nDiện tích 3 mẫu mặt tiền hồ 200m\r\nMặt tiền đường nhựa gần 150m\r\nTrên đất có nhà 1 lầu', 1.00, '200.0', 'onl', 1, 'https://www.youtube.com/watch?v=doTNGaoQDX0', 'Ms. Hà', '0938966169', '2021-09-19 03:56:34', '2021-09-19 03:56:34'),
(16, 'CHUYỂN NHƯỢNG GẤP 63 HECTA ĐẤT KHU SINH THÁI NGHỈ DƯỠNG GẦN HỒ TRÀM', 'Xã Phước Thuận', 30, 4, 3, 3, 'Diện tích 63ha, khu sinh thái nghỉ dưỡng\r\nCách biển 500m\r\nMặt hồ 25ha\r\nĐường khoảng 1,5km\r\nChiều ngang mặt tiền 720m', 1.00, '63.0', 'onl', 1, 'https://www.youtube.com/watch?v=mPtQpa7DYto', 'Ms. Hà', '0938966169', '2021-09-19 04:02:57', '2021-09-19 04:02:57'),
(17, 'NƠI LÁNH DỊCH COVID BIẾN CHỦNG DELTA LÝ TƯỞNG TẠI VĨNH CỬU', 'Ấp 2, Mã Đà', 31, 6, 3, 3, 'Mặt tiền: đường đất 5m\r\nSổ sách riêng', 1.00, '2600.0', 'onl', 1, 'https://www.youtube.com/watch?v=VQ-Rx-sEM88', 'Ms. Hà', '0938966169', '2021-09-19 04:11:43', '2021-09-19 04:11:43'),
(18, 'BÁN VƯỜN VÀ AO CÁ, CÓ SẴN NHÀ CẤP 4 GIÁ HẠT DẺ', 'Xã Vĩnh Tân', 31, 6, 2, 3, 'Diện tích 1 mẫu\r\nAo cá đang nuôi 2600m2\r\nVườn sẵn: dừa và bonsai\r\nSuối chảy quanh năm\r\nVị trí KM8, cách đường 767 2km', 1.00, '2600.0', 'onl', 1, 'https://www.youtube.com/watch?v=XURzRpZYzk0', 'Ms. Hà', '0938966169', '2021-09-19 04:15:57', '2021-09-19 04:15:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Saigon', NULL, NULL),
(2, 'Hanoi', NULL, NULL),
(4, 'Bà Rịa - Vũng Tàu', '2021-08-22 08:47:27', '2021-09-19 03:40:44'),
(5, 'Đà Lạt', '2021-08-25 19:34:29', '2021-09-19 03:40:50'),
(6, 'Đồng Nai', '2021-09-19 03:40:26', '2021-09-19 03:40:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_city` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `id_city`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quận 1', NULL, NULL),
(2, 1, 'Quận 2', NULL, NULL),
(3, 1, 'Quận 3', NULL, NULL),
(4, 1, 'Quận 4', NULL, NULL),
(5, 1, 'Quận 5', NULL, NULL),
(6, 1, 'Quận 6', NULL, NULL),
(7, 1, 'Quận 7', NULL, NULL),
(8, 1, 'Quận 8', NULL, NULL),
(9, 1, 'Quận 9', NULL, NULL),
(10, 1, 'Quận 10', NULL, NULL),
(11, 1, 'Quận 11', NULL, NULL),
(12, 1, 'Quận 12', NULL, NULL),
(13, 1, 'Bình Tân', NULL, NULL),
(14, 1, 'Bình Thạnh', NULL, NULL),
(15, 1, 'Gò Vấp', NULL, NULL),
(16, 1, 'Phú Nhuận', NULL, NULL),
(17, 1, 'Tân Bình', NULL, NULL),
(18, 1, 'Tân Phú', NULL, NULL),
(19, 1, 'Thủ Đức', NULL, NULL),
(20, 1, 'Bình Chánh', NULL, NULL),
(21, 1, 'Cần Giờ', NULL, NULL),
(22, 1, 'Củ Chi', NULL, NULL),
(23, 1, 'Hóc Môn', NULL, NULL),
(24, 1, 'Nhà Bè', NULL, NULL),
(25, 2, 'Hoàn Kiếm', NULL, NULL),
(26, 2, 'Ba Đình', NULL, NULL),
(27, 5, 'Phường 3', '2021-08-22 09:16:36', '2021-08-25 19:55:15'),
(28, 5, 'Phường 51', '2021-08-25 19:52:07', '2021-09-14 01:44:24'),
(29, 6, 'Thống Nhất', '2021-09-19 03:41:20', '2021-09-19 03:41:20'),
(30, 4, 'Xuyên Mộc', '2021-09-19 03:43:21', '2021-09-19 03:43:21'),
(31, 6, 'Vĩnh Cửu', '2021-09-19 03:44:30', '2021-09-19 03:44:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bds` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `files`
--

INSERT INTO `files` (`id`, `id_bds`, `name`, `created_at`, `updated_at`) VALUES
(2, 1, '2.JPG', '2021-08-16 02:22:05', '2021-08-16 02:22:05'),
(3, 1, 'unnamed-4.jpg', '2021-08-17 05:13:32', '2021-08-17 05:13:32'),
(6, 2, 'house-happy-fb-icon.png', '2021-08-17 06:38:36', '2021-08-17 06:38:36'),
(7, 2, 'tx.jpg', '2021-08-17 06:38:36', '2021-08-17 06:38:36'),
(8, 2, '1629274901.png', '2021-08-18 01:21:41', '2021-08-18 01:21:41'),
(9, 4, '1629429528.jpg', '2021-08-19 20:18:48', '2021-08-19 20:18:48'),
(11, 5, '1629429857.jpg', '2021-08-19 20:24:17', '2021-08-19 20:24:17'),
(12, 6, '1629430617wabc.jpg.jpg', '2021-08-19 20:36:57', '2021-08-19 20:36:57'),
(13, 6, '1629430617wxun.jpg.jpg', '2021-08-19 20:36:57', '2021-08-19 20:36:57'),
(14, 7, '1629432343wphoto-1460317442991-0ec209397118.jpg.jpg', '2021-08-19 21:05:43', '2021-08-19 21:05:43'),
(15, 7, '1629432343wphoto-1595269187177-5cd8d901d1a0.jpg.jpg', '2021-08-19 21:05:43', '2021-08-19 21:05:43'),
(16, 8, '1629434301wphoto-1516156008625-3a9d6067fab5.jpg.jpg', '2021-08-19 21:38:21', '2021-08-19 21:38:21'),
(17, 8, '1629434301wphoto-1591170715502-fbc32adc4f52.jpg.jpg', '2021-08-19 21:38:21', '2021-08-19 21:38:21'),
(20, 10, '1629536610wphoto-1595269187177-5cd8d901d1a0.jpg.jpg', '2021-08-21 02:03:30', '2021-08-21 02:03:30'),
(21, 10, '1629536611wphoto-1600585154526-990dced4db0d.jpg.jpg', '2021-08-21 02:03:31', '2021-08-21 02:03:31'),
(22, 11, '1629556580w2012_6_8_757_001.jpg.jpg', '2021-08-21 07:36:20', '2021-08-21 07:36:20'),
(23, 12, '1630133228wronaldo2708.jpg.jpg', '2021-08-27 23:47:08', '2021-08-27 23:47:08'),
(24, 13, '1631092922whao.JPG.JPG', '2021-09-08 02:22:02', '2021-09-08 02:22:02'),
(25, 14, '1631093816wdiz.png.png', '2021-09-08 02:36:56', '2021-09-08 02:36:56'),
(26, 15, '1632048994wnc3bai-cc3bai-nhc3acn-te1bbab-nge1baa3-ba-thc3a1nh-tc3a2m.jpg.jpg', '2021-09-19 03:56:34', '2021-09-19 03:56:34'),
(27, 15, '1632048995wtrian1.jpg.jpg', '2021-09-19 03:56:35', '2021-09-19 03:56:35'),
(28, 16, '1632049377wCapture.JPG.JPG', '2021-09-19 04:02:57', '2021-09-19 04:02:57'),
(29, 17, '1632049903wCapture2.JPG.JPG', '2021-09-19 04:11:43', '2021-09-19 04:11:43'),
(30, 18, '1632050157wCapture3.JPG.JPG', '2021-09-19 04:15:57', '2021-09-19 04:15:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_10_183139_create_types_table', 1),
(5, '2021_08_10_183754_create_district_table', 1),
(6, '2021_08_10_183819_create_city_table', 1),
(7, '2021_08_10_183856_create_files_table', 1),
(8, '2021_08_10_184002_create_bds_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Văn Huỳnh', 'huuquynhit97@gmail.com', '0776478922', 'abcdefg', '2021-09-14 00:29:19', '2021-09-14 00:29:19'),
(4, 'Khiem Nguyen', 'cba@gmail.com', '0776478922', 'dfsdgsdgdf', '2021-10-19 23:51:04', '2021-10-19 23:51:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Căn hộ chung cư', NULL, NULL),
(2, 'Nhà riêng', NULL, NULL),
(3, 'Đất nền', NULL, NULL),
(4, 'Kho, xưởng', NULL, NULL),
(5, 'Đất Nông Nghiệp', '2021-08-22 09:39:23', '2021-08-22 09:39:23'),
(6, 'test1678', '2021-08-25 19:14:39', '2021-09-14 01:39:31'),
(7, 'test234', '2021-08-25 19:16:19', '2021-08-25 19:18:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agent Bruno Fernandes', '0774566458', 'bruno@gmail.com', NULL, '$2y$10$.Nz6bpuQHje2PIYcp/Y0PO46WsaOBtEbu3e2kzdc2y8ZOHIqQNMLS', 'user', NULL, '2021-08-14 23:00:52', '2021-09-14 01:26:39'),
(2, 'Nguyễn Văn B', '0774196833', 'pogba@gmail.com', NULL, '$2y$10$egECdyQlRJxcryQtHpwRHONj8V1vltDOWqCPa7DtUg7i3LLno1/fW', 'user', NULL, '2021-08-14 23:05:14', '2021-09-14 01:26:27'),
(3, 'admin', '0774186811', 'psp8199@gmail.com', NULL, '$2y$10$Jd/CqQgFwGMrZMqHJmHyM.R4cJgrEdoBazVCV6/Fkj5EF5rpKhocy', 'admin', NULL, '2021-08-21 19:36:17', '2021-08-21 19:36:17'),
(4, 'Wayne Rooney', '0774196822', 'rooney@gmail.com', NULL, '$2y$10$5J.YWIgDLNelFbd24g50V.9jLcEPoUVjtnJO5qgDIiq8DDOq7G1jO', 'suspended', NULL, '2021-08-25 06:21:13', '2021-09-19 08:01:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bds`
--
ALTER TABLE `bds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_owner` (`id_owner`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_district` (`id_district`),
  ADD KEY `id_city` (`id_city`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_city` (`id_city`),
  ADD KEY `id_city_2` (`id_city`),
  ADD KEY `id_city_3` (`id_city`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bds` (`id_bds`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bds`
--
ALTER TABLE `bds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bds`
--
ALTER TABLE `bds`
  ADD CONSTRAINT `bds_ibfk_1` FOREIGN KEY (`id_district`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `bds_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `bds_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `types` (`id`);

--
-- Các ràng buộc cho bảng `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
