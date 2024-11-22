-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 05:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subfolder_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `user_id`, `folder_id`, `created_at`, `updated_at`, `subfolder_id`) VALUES
(1, '{85303F18-7C14-494F-A7FC-FB42409F2BFF}.png', 'files/world/mXHN6Fq7aLMuNs3JQYYhGzSig7tX9MUnetA3IviH.png', 1, 4, '2024-11-06 15:54:09', '2024-11-06 15:54:09', NULL),
(2, '{A733A644-6F86-4065-BC7F-11E07CE8EF60}.png', 'files/zubair/IL3z41b0VPxewQtcGT0kbjGFpHO4EIgSGmJYAYpf.png', 1, 5, '2024-11-06 15:56:17', '2024-11-06 15:56:17', NULL),
(4, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/TLS79YVovBXuxqMZQDzO1RglHjXnq6dRnKhxYeM9.png', 7, 21, '2024-11-16 07:55:53', '2024-11-16 07:55:53', 32),
(5, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/IjvQZkmyZ00kydqwsXVyRKY2reO0BWnOiqwVUxqV.png', 7, 21, '2024-11-16 08:00:27', '2024-11-16 08:00:27', 32),
(6, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/kTiVQnukeAIoaUjOHVBeskIOAxSggMn655SQJGGh.png', 7, 21, '2024-11-16 08:03:02', '2024-11-16 08:03:02', 32),
(7, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/C8oVtUi1FQNA0TTHwOaoWPcrglcGD6dffpmwzx8Z.png', 7, 21, '2024-11-16 08:03:24', '2024-11-16 08:03:24', 32),
(8, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/EafIuVQ6sRNiHhTTS6qWegxhsixI4I6yaGZyU2me.png', 7, 21, '2024-11-16 08:05:29', '2024-11-16 08:05:29', 32),
(9, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/0eR5o2Poj8J8OF6bcQpmCZ0jxrJElUDayA0cIdf8.png', 7, 21, '2024-11-16 08:08:15', '2024-11-16 08:08:15', 32),
(10, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/fF7IJbIzU0ASowkaoMV5O2SD4n8mDBV0inr04en1.png', 7, 21, '2024-11-16 08:11:33', '2024-11-16 08:11:33', 32),
(11, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/aMLVC1cibLIfayIUjgsrXD67J7XBoEaUfk5Lt2A4.png', 7, 21, '2024-11-16 08:13:36', '2024-11-16 08:13:36', 32),
(12, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/DTQoCMit3sGrTqn4NN2xxrM2gADtm9CdxVTflFn8.png', 7, 21, '2024-11-16 08:16:21', '2024-11-16 08:16:21', 32),
(13, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/W8Fvb8FPffyIfr9OAsKYDvm3FVoxkGlVAnhC0PXV.png', 7, 21, '2024-11-16 08:19:22', '2024-11-16 08:19:22', 32),
(14, 'balls.png', 'files/7_John_Doe/Bookkeeping/2024/dPEs15nE0ceGlKELAo54XMPt1enz9Dhi4my7unZo.png', 7, 21, '2024-11-16 08:23:51', '2024-11-16 08:23:51', 32),
(15, 'Asset 4 - 150 x 119.png', 'files/7_John_Doe/Bookkeeping/2024/KTNjlAJfaNrQT2Nl7fko5104dUfQyvCjjVT2LMT8.png', 7, 21, '2024-11-19 06:16:30', '2024-11-19 06:16:30', 32),
(16, 'Asset 3 - 150 x 150.png', 'files/8_John_Doe/Bookkeeping/2024/fxkYkPdGDJqPU4VwzAeUmncf8ycsgdmS4ZUSDjhQ.png', 8, 25, '2024-11-20 05:56:28', '2024-11-20 05:56:28', 49),
(17, 'Asset 4 - 150 x 119.png', 'files/8_John_Doe/Bookkeeping/2024/DEC/PYiWgijewdrv9tuzWmbDAorb5106Pqv0zBSs6Buo.png', 8, 25, '2024-11-20 05:56:44', '2024-11-20 05:56:44', 50),
(18, 'Asset 4 - 150 x 119.png', 'files/8_John_Doe/Taxes/HI/g9l53LdqDCvYlND56qhaHHgIMmd18JRLAsjDFoVS.png', 8, 26, '2024-11-20 05:57:19', '2024-11-20 05:57:19', 51),
(19, 'Asset 4 - 150 x 119.png', 'files/8_John_Doe/Bookkeeping/DEC/1/QEE8XppKLnPPQCVxSrq8cTbzwMrNQhaGu4ON1Epu.png', 8, 25, '2024-11-20 06:06:27', '2024-11-20 06:06:27', 52),
(20, 'Asset 3 - 150 x 150.png', 'files/8_John_Doe/Bookkeeping/DEC/1/H7ET4B5OwOzHiQpK1DgzvFMrSKedeGwYRbu8GP3M.png', 8, 25, '2024-11-20 06:08:29', '2024-11-20 06:08:29', 52),
(21, 'Asset 1 - 1000 x 673.png', 'files/8_John_Doe/Bookkeeping/DEC/1/N8NhoOgiEJaaMM95j4TVEbJFWokLTQ4Gi7RYy3p2.png', 8, 25, '2024-11-20 06:09:57', '2024-11-20 06:09:57', 52),
(22, 'Asset 2 - 150 x 160.png', 'files/8_John_Doe/Bookkeeping/DEC/1/0KnHKBbEXYWKbejenIy0vdePOPzQ1Pktujhqye5o.png', 8, 25, '2024-11-20 06:11:20', '2024-11-20 06:11:20', 52),
(23, 'Asset 4 - 150 x 119.png', 'files/8_John_Doe/Bookkeeping/book/book2/ftC7HKFcfEVC1dNbkfrUU3RqCXArfQj6pgq6mygB.png', 8, 25, '2024-11-20 06:15:58', '2024-11-20 06:15:58', 56),
(24, 'Asset 4 - 150 x 119.png', 'files/8_John_Doe/Bookkeeping/adad/book/m6lNVtmAtuPvIcFCvIGr6Vzps1B203UedWH0RzNd.png', 8, 25, '2024-11-04 06:31:32', '2024-11-20 06:31:32', 55),
(25, 'Invoice-igeneral=11-19-24.pdf', 'files/8_John_Doe/Bookkeeping/1/test/UCq5Lz4vyP27Y2nWqMVo35DqBLCGtWY8sjGfUmFG.pdf', 8, 25, '2024-11-20 06:54:40', '2024-11-20 06:54:40', 53),
(26, 'Projects  Igeneral Task Manager.xlsx', 'files/8_John_Doe/Bookkeeping/2024/1zq1eoSkFRCIh5s44dGrX1c6zJNZlsKSSWXPwH0m.xlsx', 8, 25, '2024-11-20 07:01:14', '2024-11-20 07:01:14', 49),
(27, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/book main 2/2024/77nRSQWuIWreaMYBClmnSzZkFflaFzloVqjIP2dL.pdf', 8, 25, '2024-11-20 10:48:42', '2024-11-20 10:48:42', 67),
(28, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/2024/march/ChlkVrvT2KMOwC2mQ6MUpBPSXJe7yfC0VgjyaqmM.pdf', 8, 25, '2024-11-20 10:56:01', '2024-11-20 10:56:01', 70),
(29, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/2024/march/TG78lvygt8NrDXaSM2Jsmo41uTqbrr6Khrs1pgT5.pdf', 8, 25, '2024-11-20 11:06:18', '2024-11-20 11:06:18', 70),
(30, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/2024/feb/mofg2AzGC6TO0x206r5GBcyBcMVw7sgUha9IiHpc.pdf', 8, 25, '2024-11-20 11:06:38', '2024-11-20 11:06:38', 69),
(31, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/bookmain2/3QcJXTw1uFR6k1HppwMCWrfqHTS7envKeIp2MPmw.pdf', 8, 25, '2024-11-21 03:57:33', '2024-11-21 03:57:33', 63),
(32, 'Invoice-igeneral=11-19-24.pdf', 'files/8_JohnDoe/Bookkeeping/test/25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 8, 25, '2024-11-21 05:11:22', '2024-11-21 05:11:22', 72),
(33, 'Invoice igeneral 11-19-24.pdf', 'files/9_Constance/Bookkeeping/2024/39rclOar1pWkNYzcXPKGTcN3suuvv76S6JSRzc73.pdf', 9, 29, '2024-11-21 07:34:11', '2024-11-21 07:34:11', 73),
(34, 'Invoice-igeneral=11-19-24.pdf', 'files/9_Constance/Bookkeeping/2024/UpD7WFCPvHHBKfLIpxac94ikGNFV2QI6t26VDNvT.pdf', 9, 29, '2024-11-21 07:34:27', '2024-11-21 07:34:27', 73);

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) DEFAULT 'fa fa-folder'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `name`, `user_id`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'home', 1, '2024-11-06 15:39:40', '2024-11-06 15:39:40', 'fa fa-folder'),
(2, 'HELLO', 2, '2024-11-06 15:43:05', '2024-11-06 15:43:05', 'fa fa-folder'),
(3, 'hello', 1, '2024-11-06 15:45:11', '2024-11-06 15:45:11', 'fa fa-folder'),
(4, 'world', 2, '2024-11-06 15:45:22', '2024-11-06 15:45:22', 'fa fa-folder'),
(5, 'zubair', 2, '2024-11-06 15:55:54', '2024-11-06 15:55:54', 'fa fa-folder'),
(6, 'Bookkeeping', 4, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'fa fa-folder'),
(7, 'Taxes', 4, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'fa fa-folder'),
(8, 'Payroll', 4, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'fa fa-folder'),
(9, 'ITIN', 4, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'fa fa-folder'),
(10, 'EIN', 4, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'fa fa-folder'),
(11, 'Bookkeeping', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder'),
(12, 'Taxes', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder'),
(13, 'Payroll', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder'),
(14, 'ITIN', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder'),
(15, 'EIN', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder'),
(16, 'Bookkeeping', 6, '2024-11-12 05:40:03', '2024-11-12 05:40:03', 'fa fa-folder'),
(17, 'Taxes', 6, '2024-11-12 05:40:03', '2024-11-12 05:40:03', 'fa fa-folder'),
(18, 'Payroll', 6, '2024-11-12 05:40:03', '2024-11-12 05:40:03', 'fa fa-folder'),
(19, 'ITIN', 6, '2024-11-12 05:40:03', '2024-11-12 05:40:03', 'fa fa-folder'),
(20, 'EIN', 6, '2024-11-12 05:40:03', '2024-11-12 05:40:03', 'fa fa-folder'),
(21, 'Bookkeeping', 7, '2024-11-12 05:55:50', '2024-11-12 05:55:50', 'fa fa-folder'),
(22, 'Taxes', 7, '2024-11-12 05:55:50', '2024-11-12 05:55:50', 'fa fa-folder'),
(23, 'Payroll', 7, '2024-11-12 05:55:50', '2024-11-12 05:55:50', 'fa fa-folder'),
(24, 'Business Formation', 7, '2024-11-12 05:55:50', '2024-11-12 05:55:50', 'fa fa-folder'),
(25, 'Bookkeeping', 8, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'fa fa-folder'),
(26, 'Taxes', 8, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'fa fa-folder'),
(27, 'Payroll', 8, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'fa fa-folder'),
(28, 'Business Formation', 8, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'fa fa-folder'),
(29, 'Bookkeeping', 9, '2024-11-21 07:27:34', '2024-11-21 07:27:34', 'fa fa-folder'),
(30, 'Taxes', 9, '2024-11-21 07:27:34', '2024-11-21 07:27:34', 'fa fa-folder'),
(31, 'Payroll', 9, '2024-11-21 07:27:34', '2024-11-21 07:27:34', 'fa fa-folder'),
(32, 'Business Formation', 9, '2024-11-21 07:27:34', '2024-11-21 07:27:34', 'fa fa-folder');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_06_194250_add_role_to_users_table', 2),
(5, '2024_11_06_203048_create_folders_table', 3),
(6, '2024_11_06_203117_create_files_table', 3),
(7, '2024_11_08_115519_add_icon_to_folders_table', 4),
(8, '2024_11_08_162758_create_sub_folder_table', 5),
(11, '2024_11_16_122502_add_subfolder_id_to_files_table', 6),
(12, '2024_11_21_105515_create_packages_table', 7),
(13, '2024_11_21_121552_add_columns_to_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `quota` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `quota`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Default', 1024, 0.00, '2024-11-21 06:09:58', '2024-11-21 07:29:02'),
(3, 'Basic', 2048, 10.00, '2024-11-21 07:56:04', '2024-11-21 07:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('zubairayub@hotamil.com', '$2y$12$FV.jTdjHiPwoChQehMjS7.iU12vp5fMFyDlF1K3yN/1n3ZnjVmCzW', '2024-11-06 15:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('O1DEuastH9Xy3MoEWcNlxXbu2yS7GykWujrB0vM4', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTUNTak8wYlFmUUdwVVlIWDR6REUxTFV4TnNpeXhSTHBLUUlWTEZmZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7fQ==', 1732274415);

-- --------------------------------------------------------

--
-- Table structure for table `sub_folder`
--

CREATE TABLE `sub_folder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_folder_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_folder`
--

INSERT INTO `sub_folder` (`id`, `name`, `user_id`, `parent_folder_id`, `parent_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'zubair', 4, 6, NULL, '/zubair', '2024-11-08 12:07:29', '2024-11-08 12:07:29'),
(2, 'test', 4, 6, NULL, '/test', '2024-11-08 12:13:41', '2024-11-08 12:13:41'),
(3, 'test', 4, 6, NULL, '/test', '2024-11-08 12:14:21', '2024-11-08 12:14:21'),
(4, 'helo', 4, 6, NULL, '/helo', '2024-11-08 12:22:57', '2024-11-08 12:22:57'),
(5, 'helos', 4, 6, NULL, '/helos', '2024-11-08 12:27:31', '2024-11-08 12:27:31'),
(6, 'sadsa', 4, 6, NULL, '/sadsa', '2024-11-08 12:28:34', '2024-11-08 12:28:34'),
(7, 'sadsasa', 4, 6, NULL, 'files/4_John_Doe/sadsasa', '2024-11-08 12:36:04', '2024-11-08 12:36:04'),
(8, 'sadsasa', 4, 6, NULL, 'files/4_John_Doe/sadsasa', '2024-11-08 12:36:34', '2024-11-08 12:36:34'),
(9, 'asas', 4, 6, NULL, 'files/4_John_Doe/Bookkeeping/asas', '2024-11-08 12:38:48', '2024-11-08 12:38:48'),
(10, 'ss', 4, 7, NULL, 'files/4_John_Doe/Taxes/ss', '2024-11-08 12:39:01', '2024-11-08 12:39:01'),
(11, 'aa', 4, 7, NULL, 'files/4_John_Doe/Taxes/aa', '2024-11-08 12:41:26', '2024-11-08 12:41:26'),
(12, 'a', 4, 7, NULL, 'files/4_John_Doe/Taxes/a', '2024-11-08 12:41:51', '2024-11-08 12:41:51'),
(13, 'ss', 4, 7, NULL, 'files/4_John_Doe/Taxes/ss', '2024-11-08 12:42:45', '2024-11-08 12:42:45'),
(14, 'aa', 4, 7, NULL, 'files/4_John_Doe/Taxes/aa', '2024-11-08 12:42:57', '2024-11-08 12:42:57'),
(15, '2024', 4, 7, NULL, 'files/4_John_Doe/Taxes/2024', '2024-11-09 09:30:16', '2024-11-09 09:30:16'),
(16, '2024', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/2024', '2024-11-09 09:32:46', '2024-11-09 09:32:46'),
(17, '2023', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/2023', '2024-11-09 10:09:36', '2024-11-09 10:09:36'),
(18, '2024', 5, 12, NULL, 'files/5_John_Doe/Taxes/2024', '2024-11-09 10:09:46', '2024-11-09 10:09:46'),
(19, 'test24', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/test24', '2024-11-09 10:31:54', '2024-11-09 10:31:54'),
(20, 'testing', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/testing', '2024-11-09 10:42:45', '2024-11-09 10:42:45'),
(21, 'check', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/check', '2024-11-09 10:42:53', '2024-11-09 10:42:53'),
(22, 'a', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/a', '2024-11-09 10:44:36', '2024-11-09 10:44:36'),
(23, 'as', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/as', '2024-11-09 10:46:07', '2024-11-09 10:46:07'),
(24, 'asds', 5, 13, NULL, 'files/5_John_Doe/Payroll/asds', '2024-11-09 10:46:27', '2024-11-09 10:46:27'),
(25, 'ss', 5, 13, NULL, 'files/5_John_Doe/Payroll/ss', '2024-11-09 10:48:35', '2024-11-09 10:48:35'),
(26, 'as', 5, 13, NULL, 'files/5_John_Doe/Payroll/as', '2024-11-09 10:53:35', '2024-11-09 10:53:35'),
(27, 'a', 5, 13, NULL, 'files/5_John_Doe/Payroll/a', '2024-11-09 10:53:45', '2024-11-09 10:53:45'),
(28, 'sda', 5, 13, NULL, 'files/5_John_Doe/Payroll/sda', '2024-11-09 10:57:44', '2024-11-09 10:57:44'),
(29, 'aas', 5, 13, NULL, 'files/5_John_Doe/Payroll/aas', '2024-11-09 10:57:58', '2024-11-09 10:57:58'),
(30, '2024', 6, 16, NULL, 'files/6_John_Doe/Bookkeeping/2024', '2024-11-12 05:42:52', '2024-11-12 05:42:52'),
(31, 'hello', 6, 16, NULL, 'files/6_John_Doe/Bookkeeping/hello', '2024-11-12 05:43:20', '2024-11-12 05:43:20'),
(32, '2024', 7, 21, NULL, 'files/7_John_Doe/Bookkeeping/2024', '2024-11-13 09:56:48', '2024-11-13 09:56:48'),
(33, '1', 7, 21, NULL, 'files/7_John_Doe/Bookkeeping/1', '2024-11-13 10:17:05', '2024-11-13 10:17:05'),
(35, 'asd', 7, 21, 32, 'files/7_John_Doe/Bookkeeping/2024/asd', '2024-11-13 10:27:36', '2024-11-13 10:27:36'),
(36, '123', 7, 21, 32, 'files/7_John_Doe/Bookkeeping/2024/123', '2024-11-13 10:28:50', '2024-11-13 10:28:50'),
(37, '321', 7, 21, 35, 'files/7_John_Doe/Bookkeeping/asd/321', '2024-11-13 10:32:03', '2024-11-13 10:32:03'),
(38, 'sfds', 7, 11, 22, 'files/7_John_Doe/Bookkeeping/a/sfds', '2024-11-13 10:38:31', '2024-11-13 10:38:31'),
(39, 'fodler', 7, 11, 22, 'files/7_John_Doe/Bookkeeping/a/fodler', '2024-11-13 10:39:03', '2024-11-13 10:39:03'),
(40, 'final', 7, 15, 22, 'files/7_John_Doe/Taxes/final', '2024-11-13 10:43:27', '2024-11-13 10:43:27'),
(41, 'test', 7, 22, 22, 'files/7_John_Doe/Taxes/test', '2024-11-13 10:46:31', '2024-11-13 10:46:31'),
(42, 'ASDSA', 7, 22, 41, 'files/7_John_Doe/Taxes/test/ASDSA', '2024-11-13 10:54:06', '2024-11-13 10:54:06'),
(43, 'SDASD', 7, 22, 41, 'files/7_John_Doe/Taxes/test/SDASD', '2024-11-13 10:55:45', '2024-11-13 10:55:45'),
(44, 'DFSDF', 7, 22, 43, 'files/7_John_Doe/Taxes/SDASD/DFSDF', '2024-11-13 10:56:00', '2024-11-13 10:56:00'),
(45, 'DSFSD', 7, 23, 23, 'files/7_John_Doe/Payroll/DSFSD', '2024-11-13 10:56:12', '2024-11-13 10:56:12'),
(46, 'aaa', 7, 24, 24, 'files/7_John_Doe/Business Formation/aaa', '2024-11-13 10:58:31', '2024-11-13 10:58:31'),
(47, 'bbb', 7, 24, 46, 'files/7_John_Doe/Business Formation/aaa/bbb', '2024-11-13 10:58:39', '2024-11-13 10:58:39'),
(48, 'aaaddd', 7, 21, 33, 'files/7_John_Doe/Bookkeeping/1/aaaddd', '2024-11-16 06:00:55', '2024-11-16 06:00:55'),
(49, '2024', 8, 25, 25, 'files/8_John_Doe/Bookkeeping/2024', '2024-11-19 08:08:50', '2024-11-19 08:08:50'),
(50, 'DEC', 8, 25, 49, 'files/8_John_Doe/Bookkeeping/2024/DEC', '2024-11-20 05:55:48', '2024-11-20 05:55:48'),
(51, 'HI', 8, 26, 26, 'files/8_John_Doe/Taxes/HI', '2024-11-20 05:57:05', '2024-11-20 05:57:05'),
(52, '1', 8, 25, 50, 'files/8_John_Doe/Bookkeeping/DEC/1', '2024-11-20 06:05:25', '2024-11-20 06:05:25'),
(53, 'test', 8, 25, 52, 'files/8_John_Doe/Bookkeeping/1/test', '2024-11-20 06:12:15', '2024-11-20 06:12:15'),
(54, 'adad', 8, 25, 53, 'files/8_John_Doe/Bookkeeping/test/adad', '2024-11-20 06:12:35', '2024-11-20 06:12:35'),
(55, 'book', 8, 25, 54, 'files/8_John_Doe/Bookkeeping/adad/book', '2024-11-20 06:13:06', '2024-11-20 06:13:06'),
(56, 'book2', 8, 25, 55, 'files/8_John_Doe/Bookkeeping/book/book2', '2024-11-20 06:13:27', '2024-11-20 06:13:27'),
(57, 'book3', 8, 25, 56, 'files/8_John_Doe/Bookkeeping/book2/book3', '2024-11-20 06:16:08', '2024-11-20 06:16:08'),
(58, '33', 8, 25, 55, 'files/8_John_Doe/Bookkeeping/book/33', '2024-11-20 06:24:18', '2024-11-20 06:24:18'),
(59, 'helo', 8, 25, 25, 'files/8_JohnDoe/Bookkeeping/helo', '2024-11-20 09:55:53', '2024-11-20 09:55:53'),
(60, '222', 8, 25, 49, 'files/8_JohnDoe/Bookkeeping/2024/222', '2024-11-20 10:02:44', '2024-11-20 10:02:44'),
(61, 'gh', 8, 25, 49, 'files/8_JohnDoe/Bookkeeping/2024/gh', '2024-11-20 10:29:28', '2024-11-20 10:29:28'),
(62, 'bookmain', 8, 25, 25, 'files/8_JohnDoe/Bookkeeping/bookmain', '2024-11-20 10:35:50', '2024-11-20 10:35:50'),
(63, 'bookmain2', 8, 25, NULL, 'files/8_JohnDoe/Bookkeeping/bookmain2', '2024-11-20 10:37:24', '2024-11-20 10:37:24'),
(64, 'book main 2', 8, 25, NULL, 'files/8_JohnDoe/Bookkeeping/book main 2', '2024-11-20 10:37:35', '2024-11-20 10:37:35'),
(65, '2024', 8, 25, 63, 'files/8_JohnDoe/Bookkeeping/bookmain2/2024', '2024-11-20 10:40:16', '2024-11-20 10:40:16'),
(66, '2023', 8, 25, 63, 'files/8_JohnDoe/Bookkeeping/bookmain2/2023', '2024-11-20 10:40:21', '2024-11-20 10:40:21'),
(67, '2024', 8, 25, 64, 'files/8_JohnDoe/Bookkeeping/book main 2/2024', '2024-11-20 10:40:29', '2024-11-20 10:40:29'),
(68, 'jan', 8, 25, 67, 'files/8_JohnDoe/Bookkeeping/2024/jan', '2024-11-20 10:40:35', '2024-11-20 10:40:35'),
(69, 'feb', 8, 25, 67, 'files/8_JohnDoe/Bookkeeping/2024/feb', '2024-11-20 10:40:39', '2024-11-20 10:40:39'),
(70, 'march', 8, 25, 67, 'files/8_JohnDoe/Bookkeeping/2024/march', '2024-11-20 10:41:08', '2024-11-20 10:41:08'),
(71, '2024', 8, 26, NULL, 'files/8_JohnDoe/Taxes/2024', '2024-11-21 04:40:39', '2024-11-21 04:40:39'),
(72, 'test', 8, 25, NULL, 'files/8_JohnDoe/Bookkeeping/test', '2024-11-21 05:11:15', '2024-11-21 05:11:15'),
(73, '2024', 9, 29, NULL, 'files/9_Constance/Bookkeeping/2024', '2024-11-21 07:34:00', '2024-11-21 07:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('customer','admin','staff') NOT NULL DEFAULT 'customer',
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quota_used` decimal(10,2) NOT NULL DEFAULT 0.00,
  `prefix` varchar(10) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `package_id`, `quota_used`, `prefix`, `last_name`, `phone_number`) VALUES
(1, 'zubair', 'zubairayub@hotamil.com', NULL, '$2y$12$vSze8QI5O1ad7XbTK.4x0.K2yvUwZIAGqcIkQUWAPYOvpox8g9c0y', NULL, '2024-11-06 15:06:10', '2024-11-06 15:06:10', 'customer', NULL, 0.00, NULL, NULL, NULL),
(2, 'John Doe', 'admin@gmail.com', NULL, '$2y$12$aVTeJkYDjbxM.CwYuQDjse.5Z9p09PZlc9Pin5yqMgyVrWcTl2ajS', NULL, '2024-11-07 12:23:06', '2024-11-07 12:23:06', 'admin', NULL, 0.00, NULL, NULL, NULL),
(3, 'John Doe', 'abc@gmail.com', NULL, '$2y$12$0YnR2Z.YuExKHF/N1Q8zUuJfIG7jo3lNexnBqLJu0isTawov3aHE2', NULL, '2024-11-08 11:04:37', '2024-11-08 11:04:37', 'customer', NULL, 0.00, NULL, NULL, NULL),
(4, 'John Doe', 'abcd@gamil.com', NULL, '$2y$12$XgX4Qb7z9PgDUL.YRY/93OetcS6ET7QsKyERcKFqzvfBcwJKQmL.O', NULL, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'customer', NULL, 0.00, NULL, NULL, NULL),
(5, 'John Doe', 'hello@gmail.com', NULL, '$2y$12$FOk7dxPYAJstYqAPZevUuepv63Vi3NWuELbAGHqJrJjAjYgnLPFIO', NULL, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'customer', NULL, 0.00, NULL, NULL, NULL),
(6, 'John Doe', 'farukh@gmail.com', NULL, '$2y$12$LXAbvdBoMxrlbY4MtBlndue2ylJfKmZ3Tj2AKYVf/4pibpL6XNsDy', NULL, '2024-11-12 05:40:01', '2024-11-12 05:40:01', 'customer', NULL, 0.00, NULL, NULL, NULL),
(7, 'John Doe', 'farukh@gamail.com', NULL, '$2y$12$6nVktzTeA/pwf7719Id9Cu5BkrFMnYSCVooO.Tfx.NrUpexqNPUyi', NULL, '2024-11-12 05:55:50', '2024-11-12 05:55:50', 'customer', NULL, 0.00, NULL, NULL, NULL),
(8, 'JohnDoe', 'brandless@gmail.com', NULL, '$2y$12$K/3XOJh5YdcV04m.xgFrve2B/0Q8uCpzHEXb0jHK9Y5NNwympMp4u', NULL, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'customer', NULL, 0.00, NULL, NULL, NULL),
(9, 'Constance', 'lyzy@mailinator.com', NULL, '$2y$12$/DzF/ATYWHuvTt7WK9RRGOjxtX/vi6l/KfGP9PnP51PhMYtZDceJq', NULL, '2024-11-21 07:27:33', '2024-11-21 07:34:27', 'customer', 1, 245.72, 'Mrs', 'Snow', '+17235273568');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_user_id_foreign` (`user_id`),
  ADD KEY `files_folder_id_foreign` (`folder_id`),
  ADD KEY `files_subfolder_id_foreign` (`subfolder_id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_folder`
--
ALTER TABLE `sub_folder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_folder_user_id_foreign` (`user_id`),
  ADD KEY `sub_folder_parent_folder_id_foreign` (`parent_folder_id`),
  ADD KEY `sub_folder_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_package_id_foreign` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_folder`
--
ALTER TABLE `sub_folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `files_subfolder_id_foreign` FOREIGN KEY (`subfolder_id`) REFERENCES `sub_folder` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `files_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `folders`
--
ALTER TABLE `folders`
  ADD CONSTRAINT `folders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_folder`
--
ALTER TABLE `sub_folder`
  ADD CONSTRAINT `sub_folder_parent_folder_id_foreign` FOREIGN KEY (`parent_folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_folder_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `sub_folder` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_folder_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
