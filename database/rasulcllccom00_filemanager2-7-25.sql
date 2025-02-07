-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 07:25 PM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasulcllccom00_filemanager`
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('zubzub@gmail.com|127.0.0.1', 'i:1;', 1738665278),
('zubzub@gmail.com|127.0.0.1:timer', 'i:1738665278;', 1738665278);

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
(1, 'CueBolt App Black Yellow-01.jpg', 'files/1_Zubair/Business Formation/2025/RdouLyYOCLlAvI0JXmwD39WK9GtsHPFOq9uiIzFi.jpg', 1, 4, '2025-02-04 07:54:21', '2025-02-04 07:54:21', 10),
(2, 'Business-Formation_040225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_040225.pdf', 1, 4, '2025-02-04 07:55:05', '2025-02-04 07:55:05', 10),
(3, 'CueBolt App Black Yellow-01.jpg', 'files/1_Zubair/Bookkeeping/2025/d33YLtfJNZBzN0gsLh44BmypxVKM6LK9b4BIylNw.jpg', 1, 1, '2025-02-04 09:14:51', '2025-02-04 09:14:51', 1),
(4, 'CueBolt App-01.jpg', 'files/1_Zubair/Bookkeeping/2025/dWq4LRSu00MU9urqdEUqbYhWHsoLgLNIh8HPyPpi.jpg', 1, 1, '2025-02-04 09:14:59', '2025-02-04 09:14:59', 1),
(5, 'Cuebolt Cap Table.pdf', 'files/1_Zubair/Bookkeeping/2025/HLMGpgCtf2Jy6gF6NP3WAeNj0xxLgZcRTnZFg4yl.pdf', 1, 1, '2025-02-04 09:15:26', '2025-02-04 09:15:26', 1),
(6, 'Cuebolt Cap Table.pdf', 'files/1_Zubair/Taxes/The Tax File Complete/tvwJMU1opL2ShpU87mANBxZN4T76byv9nPHD03De.pdf', 1, 2, '2025-02-04 09:19:45', '2025-02-04 09:19:45', 13),
(7, 'Cuebolt Cap Table.pdf', 'files/1_Zubair/Taxes/The Tax File Complete/ZsxeTyj80Ail1jMXtxDXWrO3rJgJCGXt14SYMgrw.pdf', 1, 2, '2025-02-04 09:23:03', '2025-02-04 09:23:03', 13),
(8, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 05:05:11', '2025-02-05 05:05:11', 10),
(9, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 05:10:43', '2025-02-05 05:10:43', 10),
(10, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 05:25:34', '2025-02-05 05:25:34', 10),
(11, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 05:30:54', '2025-02-05 05:30:54', 10),
(12, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 05:53:19', '2025-02-05 05:53:19', 10),
(13, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:47:44', '2025-02-05 06:47:44', 10),
(14, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:47:52', '2025-02-05 06:47:52', 10),
(15, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:48:03', '2025-02-05 06:48:03', 10),
(16, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:48:09', '2025-02-05 06:48:09', 10),
(17, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:48:38', '2025-02-05 06:48:38', 10),
(18, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:48:58', '2025-02-05 06:48:58', 10),
(19, 'Business-Formation_050225.pdf', 'files/1_Zubair/Business Formation/2025/Business-Formation_050225.pdf', 1, 4, '2025-02-05 06:51:05', '2025-02-05 06:51:05', 10),
(20, 'Business-Formation_070225.pdf', 'files/2_Admin/Business Formation/2025/Business-Formation_070225.pdf', 2, 8, '2025-02-07 09:12:48', '2025-02-07 09:12:48', 23),
(21, 'Business-Formation_070225.pdf', 'files/2_Admin/Business Formation/2025/Business-Formation_070225.pdf', 2, 8, '2025-02-07 09:15:50', '2025-02-07 09:15:50', 23),
(22, 'EIN-Application_070225.pdf', 'files/2_Admin/Business Formation/2025/EIN-Application_070225.pdf', 2, 8, '2025-02-07 09:16:09', '2025-02-07 09:16:09', 23),
(23, 'ITIN_070225.pdf', 'files/2_Admin/Business Formation/2025/ITIN_070225.pdf', 2, 8, '2025-02-07 09:16:37', '2025-02-07 09:16:37', 23),
(24, 'BOI-Reporting_070225.pdf', 'files/2_Admin/Business Formation/2025/BOI-Reporting_070225.pdf', 2, 8, '2025-02-07 09:17:16', '2025-02-07 09:17:16', 23),
(25, 'BOI-Reporting_070225.pdf', 'files/2_Admin/Business Formation/2025/BOI-Reporting_070225.pdf', 2, 8, '2025-02-07 09:23:48', '2025-02-07 09:23:48', 23);

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
(1, 'Bookkeeping', 1, '2025-02-04 05:37:05', '2025-02-04 05:37:05', 'fa fa-folder'),
(2, 'Taxes', 1, '2025-02-04 05:37:05', '2025-02-04 05:37:05', 'fa fa-folder'),
(3, 'Payroll', 1, '2025-02-04 05:37:05', '2025-02-04 05:37:05', 'fa fa-folder'),
(4, 'Business Formation', 1, '2025-02-04 05:37:05', '2025-02-04 05:37:05', 'fa fa-folder'),
(5, 'Bookkeeping', 2, '2025-02-07 08:48:28', '2025-02-07 08:48:28', 'fa fa-folder'),
(6, 'Taxes', 2, '2025-02-07 08:48:28', '2025-02-07 08:48:28', 'fa fa-folder'),
(7, 'Payroll', 2, '2025-02-07 08:48:28', '2025-02-07 08:48:28', 'fa fa-folder'),
(8, 'Business Formation', 2, '2025-02-07 08:48:28', '2025-02-07 08:48:28', 'fa fa-folder');

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
(4, '2024_11_06_194250_add_role_to_users_table', 1),
(5, '2024_11_06_203048_create_folders_table', 1),
(6, '2024_11_06_203117_create_files_table', 1),
(7, '2024_11_08_115519_add_icon_to_folders_table', 1),
(8, '2024_11_08_162758_create_sub_folder_table', 1),
(9, '2024_11_16_122502_add_subfolder_id_to_files_table', 1),
(10, '2024_11_21_105515_create_packages_table', 1),
(11, '2024_11_21_121552_add_columns_to_users_table', 1),
(12, '2024_11_29_095631_create_orders_table', 1),
(13, '2024_11_29_100629_add_transaction_details_to_orders_table', 1),
(14, '2024_11_29_145822_add_columns_to_packages_table', 1),
(15, '2024_11_29_151419_update_validity_column_in_packages_table', 1),
(16, '2024_11_29_170047_create_user_packages_table', 1),
(17, '2024_12_05_124750_add_status_to_users_table', 1),
(18, '2024_12_23_142404_create_user_fields_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_status` enum('pending','completed','failed') NOT NULL DEFAULT 'pending',
  `payment_method` enum('credit_card','paypal','crypto','other') NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `auth_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `package_id`, `order_number`, `amount`, `payment_status`, `payment_method`, `transaction_id`, `auth_code`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'ORD-67a209d4e4f64', 49.00, 'completed', 'credit_card', '120055931583', 'E9CGL4', '2025-02-04 07:36:36', '2025-02-04 07:36:36'),
(2, 1, 2, 'ORD-67a20c7c0d69b', 49.00, 'completed', 'credit_card', '120055932682', 'ZFX051', '2025-02-04 07:47:56', '2025-02-04 07:47:56'),
(5, 1, 1, 'ORD-67a21bdc7fdfc', 0.00, 'completed', 'credit_card', NULL, NULL, '2025-02-04 08:53:32', '2025-02-04 08:53:32'),
(6, 1, 2, 'ORD-67a21f88c3990', 49.00, 'completed', 'credit_card', '120055939573', '3X31FL', '2025-02-04 09:09:12', '2025-02-04 09:09:12'),
(7, 1, 1, 'ORD-67a21fb07aab6', 0.00, 'completed', 'credit_card', NULL, NULL, '2025-02-04 09:09:52', '2025-02-04 09:09:52'),
(9, 1, 3, 'ORD-67a339340cb8b', 987.00, 'completed', 'credit_card', '120056045195', '32H3SN', '2025-02-05 05:11:00', '2025-02-05 05:11:00'),
(10, 1, 3, 'ORD-67a34a73b0817', 987.00, 'completed', 'credit_card', '120056049652', 'WZSDHQ', '2025-02-05 06:24:35', '2025-02-05 06:24:35'),
(11, 1, 3, 'ORD-67a34c04610bc', 987.00, 'completed', 'credit_card', '120056049832', '736C4L', '2025-02-05 06:31:16', '2025-02-05 06:31:16'),
(12, 1, 3, 'ORD-67a34e556d32b', 987.00, 'completed', 'credit_card', '120056050197', 'ON99TJ', '2025-02-05 06:41:09', '2025-02-05 06:41:09'),
(13, 1, 3, 'ORD-67a34f1673e50', 987.00, 'completed', 'credit_card', '120056050288', 'GKLHXH', '2025-02-05 06:44:22', '2025-02-05 06:44:22'),
(16, 2, 9, 'ORD-67a6177fba00f', 154.32, 'completed', 'credit_card', '120056199564', 'HXF9LY', '2025-02-07 09:23:59', '2025-02-07 09:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `quota` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `services` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `validity` enum('one-time','monthly') NOT NULL DEFAULT 'one-time',
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `quota`, `price`, `services`, `features`, `validity`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 10240, 0.00, '[\"Taxes\"]', '[\"Efficient LLC Registration\\r\",\"Seamless Compliance\\r\",\"(1 year free) then\\r\",\"$149\\/yr**\\r\",\"Operating agreement +$79\\r\",\"Employer ID Number\\r\",\"(EIN) +$79\\r\",\"Fast-track your filing +$49\\r\",\"Business documents +$89\"]', 'monthly', 'Free package for demo user', NULL, '2025-02-07 09:09:42'),
(2, 'STANDARD', 10240, 49.00, '[\"Business Formation\"]', '[\"Efficient LLC Registration\\r\",\"Seamless Compliance\\r\",\"(1 year free) then\\r\",\"$149\\/yr**\\r\",\"Operating agreement +$79\\r\",\"Employer ID Number\\r\",\"(EIN) +$79\\r\",\"Fast-track your filing +$49\\r\",\"Business documents +$89\"]', 'one-time', 'Hello Description', '2025-02-04 07:25:03', '2025-02-04 07:25:03'),
(3, 'Business Formation Service', 1024, 0.00, '[\"Business Formation\"]', '[\"Efficient LLC Registration\\r\",\"Seamless Compliance\\r\",\"(1 year free) then\\r\",\"$149\\/yr**\\r\",\"Operating agreement +$79\\r\",\"Employer ID Number\\r\",\"(EIN) +$79\\r\",\"Fast-track your filing +$49\\r\",\"Business documents +$89\"]', 'one-time', 'Business Formation Description', '2025-02-05 10:07:05', '2025-02-05 10:07:08'),
(9, 'Services', 1024, 0.00, '[\"BOI Reporting\"]', '[\"Efficient LLC Registration\\r\",\"Seamless Compliance\\r\",\"(1 year free) then\\r\",\"$149\\/yr**\\r\",\"Operating agreement +$79\\r\",\"Employer ID Number\\r\",\"(EIN) +$79\\r\",\"Fast-track your filing +$49\\r\",\"Business documents +$89\"]', 'one-time', 'Business Formation Description', '2025-02-05 10:07:05', '2025-02-05 10:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('6dKvHae30JurVZiiZxcb5OqKakWlscgTAqoWYXNs', NULL, '38.7.177.218', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVgyb0JCUjJMWThtOEtLNW10YndvclRWSGdPaGdPdnh2NFJhaWdwcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738937777),
('DSzkMmrVR7n6jJMjXOtRpPiLmCTGZuiPN9qE7vK4', 2, '15.204.75.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieUtjUktGMjFjMkYyazlmQVZiM0dvNDFrS1lqZmFzck5zTUNWeE5sTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NToiaHR0cHM6Ly9hcHBzLnByb21wdGZpbGluZ3MuY29tL2VpbmFwcGxpY2F0aW9uIjt9fQ==', 1738937830),
('hYMPRWa07qaz0mqVVlFCl8ryL8bTCK4rOYUwqSpC', 2, '154.198.101.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMFJTWUw1NlRyelQwa0FWamd1OFRVd3EzVndpZ015ZnU1NVFTbHdjcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS91c2VyL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1738936349),
('HZDDuhLqY79SiiqC9kd1qXUDnA43iepDr1y0Jzpj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVEFDSVFzdENYbllNNndsZzJ0SDBPaFBnYlNoYWtKRndmRWtKdnY4SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idXNpbmVzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJ0ZW1wX2ZpbGUiO2E6Njp7czoxMjoiZmlsZU1pbWVUeXBlIjtzOjE1OiJhcHBsaWNhdGlvbi9wZGYiO3M6ODoiZmlsZU5hbWUiO3M6Mjk6IkJ1c2luZXNzLUZvcm1hdGlvbl8wNTAyMjUucGRmIjtzOjEwOiJmb2xkZXJQYXRoIjtzOjM4OiJmaWxlcy8xX1p1YmFpci9CdXNpbmVzcyBGb3JtYXRpb24vMjAyNSI7czoxMjoiZmlsZVNpemVJbktCIjtkOjM5NS42NDtzOjk6ImZvbGRlcl9pZCI7aTo0O3M6MTI6InN1YmZvbGRlcl9pZCI7aToxMDt9fQ==', 1738756749),
('SnMLkxoqbBdOFvsRrSGch0uL52qXbsc7U1xY75NW', NULL, '154.198.101.171', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3BRQjVaSVRlRjJGT1ZpZVcwY2dhcVVJMjdHc25uYlRnSlVnTDk5TSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cHM6Ly9hcHBzLnByb21wdGZpbGluZ3MuY29tL2VpbmFwcGxpY2F0aW9uIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738937785),
('st0V5qKOWGd4v7JzOSb4e8j2a1Cv8DK7KCO1PAPX', NULL, '51.222.253.20', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG9nNFVHVml6ZWxxNEVKd1BubDI3bFlxNUJCTjkydGhEWmg4U0t2bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738936566),
('ufS7MUmqnFks5coEXFdHP4lCwbf2DP0XjZN6Cd3c', NULL, '38.7.177.218', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEZpYnVaemNvblNvWklld1RUQng0dlBwMEw4TlU4V2JZb1BaZnBJSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS9yZWdpc3RlciI7fX0=', 1738938280),
('w0oFIpwQUEh4xPAOa370t9C8mFjqzoRWaf1nuFq2', NULL, '38.7.177.218', 'WhatsApp/2.23.20.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY21PM0ZUa2M0WU11ZWNlNWV6eHh2cjFJV2pKZDZqSTdNcW14V1d5aCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cHM6Ly9hcHBzLnByb21wdGZpbGluZ3MuY29tL2VpbmFwcGxpY2F0aW9uIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vYXBwcy5wcm9tcHRmaWxpbmdzLmNvbS9laW5hcHBsaWNhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738937776);

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
(1, '2025', 1, 1, NULL, 'files/1_Zubair/Bookkeeping/2025', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(2, '2024', 1, 1, NULL, 'files/1_Zubair/Bookkeeping/2024', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(3, '2023', 1, 1, NULL, 'files/1_Zubair/Bookkeeping/2023', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(4, '2025', 1, 2, NULL, 'files/1_Zubair/Taxes/2025', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(5, '2024', 1, 2, NULL, 'files/1_Zubair/Taxes/2024', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(6, '2023', 1, 2, NULL, 'files/1_Zubair/Taxes/2023', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(7, '2025', 1, 3, NULL, 'files/1_Zubair/Payroll/2025', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(8, '2024', 1, 3, NULL, 'files/1_Zubair/Payroll/2024', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(9, '2023', 1, 3, NULL, 'files/1_Zubair/Payroll/2023', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(10, '2025', 1, 4, NULL, 'files/1_Zubair/Business Formation/2025', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(11, '2024', 1, 4, NULL, 'files/1_Zubair/Business Formation/2024', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(12, '2023', 1, 4, NULL, 'files/1_Zubair/Business Formation/2023', '2025-02-04 05:37:05', '2025-02-04 05:37:05'),
(13, 'The Tax File Complete', 1, 2, NULL, 'files/1_Zubair/Taxes/The Tax File Complete', '2025-02-04 09:19:33', '2025-02-04 09:19:33'),
(14, '2025', 2, 5, NULL, 'files/2_Admin/Bookkeeping/2025', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(15, '2024', 2, 5, NULL, 'files/2_Admin/Bookkeeping/2024', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(16, '2023', 2, 5, NULL, 'files/2_Admin/Bookkeeping/2023', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(17, '2025', 2, 6, NULL, 'files/2_Admin/Taxes/2025', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(18, '2024', 2, 6, NULL, 'files/2_Admin/Taxes/2024', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(19, '2023', 2, 6, NULL, 'files/2_Admin/Taxes/2023', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(20, '2025', 2, 7, NULL, 'files/2_Admin/Payroll/2025', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(21, '2024', 2, 7, NULL, 'files/2_Admin/Payroll/2024', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(22, '2023', 2, 7, NULL, 'files/2_Admin/Payroll/2023', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(23, '2025', 2, 8, NULL, 'files/2_Admin/Business Formation/2025', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(24, '2024', 2, 8, NULL, 'files/2_Admin/Business Formation/2024', '2025-02-07 08:48:28', '2025-02-07 08:48:28'),
(25, '2023', 2, 8, NULL, 'files/2_Admin/Business Formation/2023', '2025-02-07 08:48:28', '2025-02-07 08:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
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

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `package_id`, `quota_used`, `prefix`, `last_name`, `phone_number`) VALUES
(1, 'Zubair', 'zubairayub@hotmail.com', 'active', NULL, '$2y$12$b/Ik1W9wZuD3.ZaqCMlKUuFAwe/S0w/Geu2IfDsprfxn5wzEqAZ9G', NULL, '2025-02-04 05:37:05', '2025-02-05 06:51:05', 'customer', 3, 5596.91, 'Mr', 'Ayub', '+923150234592'),
(2, 'Admin', 'admin@promptfillings.com', 'active', NULL, '$2y$12$0zpdFKpT/AFOL9WLmkLiiOuV7KlVmG7Q/2VT4FQG3G6bdRRipsyU2', NULL, '2025-02-07 08:48:28', '2025-02-07 09:23:59', 'admin', 9, 1172.12, 'Mr', 'Prompt Filling', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `user_fields`
--

CREATE TABLE `user_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_country` varchar(255) DEFAULT NULL,
  `billing_zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_fields`
--

INSERT INTO `user_fields` (`id`, `user_id`, `billing_address`, `billing_city`, `billing_country`, `billing_zip_code`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '1', '12', '1', '2025-02-04 07:36:36', '2025-02-05 06:31:16'),
(2, 2, NULL, NULL, NULL, NULL, '2025-02-07 09:23:59', '2025-02-07 09:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `package_type` enum('one_time','monthly') NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `user_id`, `package_id`, `package_type`, `expiry_date`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'one_time', '2025-02-04', '2025-02-04 09:09:12', '2025-02-04 09:09:12'),
(4, 1, 1, 'one_time', '2025-02-04', '2025-02-04 09:09:52', '2025-02-04 09:09:52'),
(5, 1, 3, 'one_time', '2025-02-05', '2025-02-05 05:11:00', '2025-02-05 05:11:00'),
(6, 1, 3, 'one_time', '2025-02-05', '2025-02-05 06:24:35', '2025-02-05 06:24:35'),
(7, 1, 3, 'one_time', '2025-02-05', '2025-02-05 06:31:16', '2025-02-05 06:31:16'),
(8, 1, 3, 'one_time', '2025-02-05', '2025-02-05 06:41:09', '2025-02-05 06:41:09'),
(9, 1, 3, 'one_time', '2025-02-05', '2025-02-05 06:44:22', '2025-02-05 06:44:22'),
(10, 2, 9, 'one_time', '2025-02-07', '2025-02-07 09:23:59', '2025-02-07 09:23:59');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_package_id_foreign` (`package_id`);

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
-- Indexes for table `user_fields`
--
ALTER TABLE `user_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fields_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_packages_user_id_foreign` (`user_id`),
  ADD KEY `user_packages_package_id_foreign` (`package_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_folder`
--
ALTER TABLE `sub_folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_fields`
--
ALTER TABLE `user_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `user_fields`
--
ALTER TABLE `user_fields`
  ADD CONSTRAINT `user_fields_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD CONSTRAINT `user_packages_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_packages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
