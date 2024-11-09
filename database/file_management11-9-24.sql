-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 03:44 PM
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `user_id`, `folder_id`, `created_at`, `updated_at`) VALUES
(1, '{85303F18-7C14-494F-A7FC-FB42409F2BFF}.png', 'files/world/mXHN6Fq7aLMuNs3JQYYhGzSig7tX9MUnetA3IviH.png', 1, 4, '2024-11-06 15:54:09', '2024-11-06 15:54:09'),
(2, '{A733A644-6F86-4065-BC7F-11E07CE8EF60}.png', 'files/zubair/IL3z41b0VPxewQtcGT0kbjGFpHO4EIgSGmJYAYpf.png', 1, 5, '2024-11-06 15:56:17', '2024-11-06 15:56:17');

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
(15, 'EIN', 5, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'fa fa-folder');

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
(8, '2024_11_08_162758_create_sub_folder_table', 5);

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
('D9lQYKN0h9pqZyGaoeKfTZOZRF9yUPO9mbF6XokQ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTVwbTFDUHBkUFdsb2xWMFprbVhGRkNTSVZ3UUhCSk50Q1VBT093WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1731065511),
('fdpDLD49tArrmFWa9ZpYsL1ALZ9O3X1zd6tMWKFg', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGZ5M2tlamd3MTRXV1NzdVhwSzZxMWpiR1Izd3ZDWDU0cllFTGRTVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1731163339),
('gG98fT6Z3DyRfVP1wJOcAgLmof0BlJ91C8jlmJMk', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkZYNXZnUnJqV3lwQ1FDeVVBWDF5QUkyVm1md1FEQkNoZ1ZGZUduZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1731087948),
('mzbGmAgM1m5go7iYshKg2FvwrpxQRwpv1UJjy4bS', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUJzSU9BRHRDSnFsZHd2bVFkTnRkOWZQU2RVZ0RGd3BiUUhiUlhuQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1731071511),
('seA2NncR8MrckDNAJkuP2JChHwgBMRBuloFLCsJ5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGJQWW84SnU5dVpBVjNzM0lLb1pEVHlPWFR2SG1wRXZLamVHcFFIUSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731065522);

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
(16, '2024', 5, 11, NULL, 'files/5_John_Doe/Bookkeeping/2024', '2024-11-09 09:32:46', '2024-11-09 09:32:46');

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
  `role` enum('customer','admin','staff') NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'zubair', 'zubairayub@hotamil.com', NULL, '$2y$12$vSze8QI5O1ad7XbTK.4x0.K2yvUwZIAGqcIkQUWAPYOvpox8g9c0y', NULL, '2024-11-06 15:06:10', '2024-11-06 15:06:10', 'customer'),
(2, 'John Doe', 'z@gmail.com', NULL, '$2y$12$aVTeJkYDjbxM.CwYuQDjse.5Z9p09PZlc9Pin5yqMgyVrWcTl2ajS', NULL, '2024-11-07 12:23:06', '2024-11-07 12:23:06', 'admin'),
(3, 'John Doe', 'abc@gmail.com', NULL, '$2y$12$0YnR2Z.YuExKHF/N1Q8zUuJfIG7jo3lNexnBqLJu0isTawov3aHE2', NULL, '2024-11-08 11:04:37', '2024-11-08 11:04:37', 'customer'),
(4, 'John Doe', 'abcd@gamil.com', NULL, '$2y$12$XgX4Qb7z9PgDUL.YRY/93OetcS6ET7QsKyERcKFqzvfBcwJKQmL.O', NULL, '2024-11-08 11:06:54', '2024-11-08 11:06:54', 'customer'),
(5, 'John Doe', 'hello@gmail.com', NULL, '$2y$12$FOk7dxPYAJstYqAPZevUuepv63Vi3NWuELbAGHqJrJjAjYgnLPFIO', NULL, '2024-11-09 09:32:13', '2024-11-09 09:32:13', 'customer');

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
  ADD KEY `files_folder_id_foreign` (`folder_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_folder`
--
ALTER TABLE `sub_folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE,
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
