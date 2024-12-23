-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 04:25 PM
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('farrukh@test.com|127.0.0.1', 'i:1;', 1734006018),
('farrukh@test.com|127.0.0.1:timer', 'i:1734006018;', 1734006018),
('farukh@test.com|127.0.0.1', 'i:1;', 1734005974),
('farukh@test.com|127.0.0.1:timer', 'i:1734005974;', 1734005974),
('z@gmail.com|127.0.0.1', 'i:1;', 1733486033),
('z@gmail.com|127.0.0.1:timer', 'i:1733486033;', 1733486033);

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
(34, 'Invoice-igeneral=11-19-24.pdf', 'files/9_Constance/Bookkeeping/2024/UpD7WFCPvHHBKfLIpxac94ikGNFV2QI6t26VDNvT.pdf', 9, 29, '2024-11-21 07:34:27', '2024-11-21 07:34:27', 73),
(35, 'easy3.jpg', 'files/10_bilal/Bookkeeping/2024/8fNujvutob5vzJWeYm7SzsqprbR8G5bN3ttMLDzm.jpg', 10, 33, '2024-11-27 05:32:58', '2024-11-27 05:32:58', 74),
(36, 'fast4.jpg', 'gmO22LxobN01HTa09g7d2w8mF9Upfq42HAHisqGr.jpg', 10, NULL, '2024-11-27 05:36:41', '2024-11-27 05:36:41', NULL),
(37, 'mega6.jpg', 'files/13_Louis/Bookkeeping/2024/1N9wQdqoSoYfrQNWtjxqLjKrSPFa7t2XKeFVnkQQ.jpg', 13, 38, '2024-11-27 07:56:29', '2024-11-27 07:56:29', 77),
(38, 'fast4.jpg', 'files/16_Janna/Bookkeeping/2024/qTXJUzVVeG1cNzMBM6MbnFIdSli5E5ThpUfUak5Q.jpg', 16, 50, '2024-11-28 04:52:17', '2024-11-28 04:52:17', 113),
(39, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/kFjwpi5pHr8iTK3ndN192lNxRpNPLLLIgO6doZMH.pdf', 16, 50, '2024-11-28 05:35:19', '2024-11-28 05:35:19', 113),
(40, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/y8fO8A2YtSztoFy4wF6MhkXssdkB8LqdgwDgoHSi.pdf', 16, 50, '2024-11-28 05:42:26', '2024-11-28 05:42:26', 113),
(41, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/DHI5m35fFjHFYYMCuap3njPQQS4FVaVVt64U0sgZ.pdf', 16, 50, '2024-11-28 05:43:02', '2024-11-28 05:43:02', 113),
(42, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/PhnT4tH9w171xFxaAc7wlJrgm748gB1plw2xsumW.pdf', 16, 50, '2024-11-28 05:46:53', '2024-11-28 05:46:53', 113),
(43, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/e0PXggOztMDUcxuaA0COMCgt5bEZJEbusNelLrbQ.pdf', 16, 50, '2024-11-28 05:48:02', '2024-11-28 05:48:02', 113),
(44, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/16_Janna/Bookkeeping/2024/nTP6IKbnKI2Y60Hl9MEPpxIouldCjg4iFoREAVar.pdf', 16, 50, '2024-11-28 05:48:30', '2024-11-28 05:48:30', 113),
(45, 'Projects  Igeneral Task Manager.xlsx', 'files/16_Janna/Bookkeeping/2024/RThPu1JqQ696WhmxtJRMm3za2Nfcmv3hPsFS1oNe.xlsx', 16, 50, '2024-11-28 06:06:28', '2024-11-28 06:06:28', 113),
(46, 'Invoice-igeneral=11-19-24.pdf', 'files/18_Daniel/Business Formation/2024/lmtTAKW1Hx92BRN4AhNjKWCRFePICTgu4fxEHW1c.pdf', 18, 61, '2024-11-30 04:04:20', '2024-11-30 04:04:20', 146),
(47, 'Invoice igeneral 11-19-24.pdf', 'files/20_Jason/Business Formation/2024/tl78x1dfr762wpnc0cSybCF4UkJSzhYwNnG8EtGp.pdf', 20, 69, '2024-11-30 04:49:45', '2024-11-30 04:49:45', 170),
(48, '25W4QcRiyiFkHRM7B9thxrfuY6GvySO3Guqu2ozF.pdf', 'files/17_Christen/Business Formation/2024/njAoWDMlpwRD8J94Wu4L4jSMGeHa0ztLw23zDKfs.pdf', 17, 57, '2024-12-05 10:52:13', '2024-12-05 10:52:13', 134),
(49, 'png-01.png', 'files/23_Aurora/Business Formation/2024/1zwLMDvEDMOr9FwGTeW4cP8vcIXRHznP6oH0hdio.png', 23, 82, '2024-12-13 04:57:05', '2024-12-13 04:57:05', 252),
(50, 'joeg-01.jpg', 'files/23_Aurora/Business Formation/2024/JAN/FySIfnlTju7kdgrRFkrgMs5tFk6A28bMCRqD9SSG.jpg', 23, 82, '2024-12-13 04:57:34', '2024-12-13 04:57:34', 255),
(51, 'joeg-01.jpg', 'files/23_Aurora/Business Formation/2024/JAN/bLtzNjrfBg3aFm006D18GaHHvPu3mpBaqxHUm2WU.jpg', 23, 82, '2024-12-13 05:48:34', '2024-12-13 05:48:34', 255),
(52, 'joeg-01.jpg', 'files/23_Aurora/Business Formation/2024/CYO8cMr1SJ49Pb9dv3PNXwp2lSNMmoNykXn4BV9e.jpg', 23, 82, '2024-12-13 05:51:01', '2024-12-13 05:51:01', 252),
(53, 'png-01.png', 'files/23_Aurora/Bookkeeping/2024/iv43901JZ82W6jaWEcCcZuKZ2lLcQmQNUrBdvMQx.png', 23, 79, '2024-12-13 08:02:57', '2024-12-13 08:02:57', 243),
(54, 'joeg-01.jpg', 'files/23_Aurora/Bookkeeping/2024/jan/ByxmNtEVfq3V5e35hMCYTziFg4G8OpSwgYkj2K02.jpg', 23, 79, '2024-12-13 08:09:35', '2024-12-13 08:09:35', 256),
(55, 'png-01.png', 'files/23_Aurora/Bookkeeping/2024/jan/hello world/XrcoszHlXlWqN1xZYcl5CXiVWzNJpxuh2vXb9sEw.png', 23, 79, '2024-12-13 08:12:17', '2024-12-13 08:12:17', 257),
(56, 'joeg-01.jpg', 'files/23_Aurora/Bookkeeping/2024/jan/xLhc454rbqg5Eo76MCJtTiEIvzQV5Zza5dTQpMzM.jpg', 23, 79, '2024-12-13 08:19:51', '2024-12-13 08:19:51', 256),
(57, 'joeg-01.jpg', 'files/23_Aurora/Bookkeeping/hahahah/6cY1sMIwclNvpgu9vLuAiitzpChF41fNeT9q1Qnh.jpg', 23, 79, '2024-12-13 08:39:01', '2024-12-13 08:39:01', 262),
(58, 'joeg-01.jpg', 'files/23_Aurora/Bookkeeping/hahahah/7A21FpT3XYTL5IqOMx8MIYM7pRrvOAVnRiGGmHil.jpg', 23, 79, '2024-12-13 08:41:23', '2024-12-13 08:41:23', 262),
(59, 'Screenshot 2024-12-21 224201.png', 'files/18_Daniel/Business Formation/2024/hTS3L6HyaJcmVG0yezR4Gqa7GxyZpiIeSTkCViEi.png', 18, 61, '2024-12-23 09:16:51', '2024-12-23 09:16:51', 146),
(60, 'Screenshot 2024-11-04 210841.png', 'files/18_Daniel/Business Formation/2024/2025/fOYkd8liKLDw7Zsq1MgPLw9sGjh2u6YwJgt46XCM.png', 18, 61, '2024-12-23 09:17:22', '2024-12-23 09:17:22', 275);

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
(32, 'Business Formation', 9, '2024-11-21 07:27:34', '2024-11-21 07:27:34', 'fa fa-folder'),
(33, 'Bookkeeping', 10, '2024-11-27 04:54:58', '2024-11-27 04:54:58', 'fa fa-folder'),
(34, 'Taxes', 10, '2024-11-27 04:54:58', '2024-11-27 04:54:58', 'fa fa-folder'),
(35, 'Payroll', 10, '2024-11-27 04:54:58', '2024-11-27 04:54:58', 'fa fa-folder'),
(36, 'Business Formation', 10, '2024-11-27 04:54:58', '2024-11-27 04:54:58', 'fa fa-folder'),
(37, 'Bookkeeping', 12, '2024-11-27 07:25:59', '2024-11-27 07:25:59', 'fa fa-folder'),
(38, 'Bookkeeping', 13, '2024-11-27 07:26:44', '2024-11-27 07:26:44', 'fa fa-folder'),
(39, 'Taxes', 13, '2024-11-27 07:26:44', '2024-11-27 07:26:44', 'fa fa-folder'),
(40, 'Payroll', 13, '2024-11-27 07:26:44', '2024-11-27 07:26:44', 'fa fa-folder'),
(41, 'Business Formation', 13, '2024-11-27 07:26:44', '2024-11-27 07:26:44', 'fa fa-folder'),
(42, 'Bookkeeping', 14, '2024-11-28 04:47:17', '2024-11-28 04:47:17', 'fa fa-folder'),
(43, 'Taxes', 14, '2024-11-28 04:47:17', '2024-11-28 04:47:17', 'fa fa-folder'),
(44, 'Payroll', 14, '2024-11-28 04:47:17', '2024-11-28 04:47:17', 'fa fa-folder'),
(45, 'Business Formation', 14, '2024-11-28 04:47:17', '2024-11-28 04:47:17', 'fa fa-folder'),
(46, 'Bookkeeping', 15, '2024-11-28 04:48:23', '2024-11-28 04:48:23', 'fa fa-folder'),
(47, 'Taxes', 15, '2024-11-28 04:48:23', '2024-11-28 04:48:23', 'fa fa-folder'),
(48, 'Payroll', 15, '2024-11-28 04:48:23', '2024-11-28 04:48:23', 'fa fa-folder'),
(49, 'Business Formation', 15, '2024-11-28 04:48:23', '2024-11-28 04:48:23', 'fa fa-folder'),
(50, 'Bookkeeping', 16, '2024-11-28 04:50:38', '2024-11-28 04:50:38', 'fa fa-folder'),
(51, 'Taxes', 16, '2024-11-28 04:50:38', '2024-11-28 04:50:38', 'fa fa-folder'),
(52, 'Payroll', 16, '2024-11-28 04:50:38', '2024-11-28 04:50:38', 'fa fa-folder'),
(53, 'Business Formation', 16, '2024-11-28 04:50:38', '2024-11-28 04:50:38', 'fa fa-folder'),
(54, 'Bookkeeping', 17, '2024-11-30 03:48:46', '2024-11-30 03:48:46', 'fa fa-folder'),
(55, 'Taxes', 17, '2024-11-30 03:48:46', '2024-11-30 03:48:46', 'fa fa-folder'),
(56, 'Payroll', 17, '2024-11-30 03:48:46', '2024-11-30 03:48:46', 'fa fa-folder'),
(57, 'Business Formation', 17, '2024-11-30 03:48:46', '2024-11-30 03:48:46', 'fa fa-folder'),
(58, 'Bookkeeping', 18, '2024-11-30 04:02:30', '2024-11-30 04:02:30', 'fa fa-folder'),
(59, 'Taxes', 18, '2024-11-30 04:02:30', '2024-11-30 04:02:30', 'fa fa-folder'),
(60, 'Payroll', 18, '2024-11-30 04:02:30', '2024-11-30 04:02:30', 'fa fa-folder'),
(61, 'Business Formation', 18, '2024-11-30 04:02:30', '2024-11-30 04:02:30', 'fa fa-folder'),
(62, 'Bookkeeping', 19, '2024-11-30 04:07:49', '2024-11-30 04:07:49', 'fa fa-folder'),
(63, 'Taxes', 19, '2024-11-30 04:07:49', '2024-11-30 04:07:49', 'fa fa-folder'),
(64, 'Payroll', 19, '2024-11-30 04:07:49', '2024-11-30 04:07:49', 'fa fa-folder'),
(65, 'Business Formation', 19, '2024-11-30 04:07:49', '2024-11-30 04:07:49', 'fa fa-folder'),
(66, 'Bookkeeping', 20, '2024-11-30 04:42:24', '2024-11-30 04:42:24', 'fa fa-folder'),
(67, 'Taxes', 20, '2024-11-30 04:42:24', '2024-11-30 04:42:24', 'fa fa-folder'),
(68, 'Payroll', 20, '2024-11-30 04:42:24', '2024-11-30 04:42:24', 'fa fa-folder'),
(69, 'Business Formation', 20, '2024-11-30 04:42:24', '2024-11-30 04:42:24', 'fa fa-folder'),
(70, 'Bookkeeping', 21, '2024-12-06 07:33:22', '2024-12-06 07:33:22', 'fa fa-folder'),
(71, 'Taxes', 21, '2024-12-06 07:33:22', '2024-12-06 07:33:22', 'fa fa-folder'),
(72, 'Payroll', 21, '2024-12-06 07:33:22', '2024-12-06 07:33:22', 'fa fa-folder'),
(73, 'Business Formation', 21, '2024-12-06 07:33:22', '2024-12-06 07:33:22', 'fa fa-folder'),
(74, '2021', 21, '2024-12-11 00:32:05', '2024-12-11 00:32:05', 'fa fa-folder'),
(75, 'Bookkeeping', 22, '2024-12-12 07:25:12', '2024-12-12 07:25:12', 'fa fa-folder'),
(76, 'Taxes', 22, '2024-12-12 07:25:12', '2024-12-12 07:25:12', 'fa fa-folder'),
(77, 'Payroll', 22, '2024-12-12 07:25:12', '2024-12-12 07:25:12', 'fa fa-folder'),
(78, 'Business Formation', 22, '2024-12-12 07:25:12', '2024-12-12 07:25:12', 'fa fa-folder'),
(79, 'Bookkeeping', 23, '2024-12-13 04:54:54', '2024-12-13 04:54:54', 'fa fa-folder'),
(80, 'Taxes', 23, '2024-12-13 04:54:54', '2024-12-13 04:54:54', 'fa fa-folder'),
(81, 'Payroll', 23, '2024-12-13 04:54:54', '2024-12-13 04:54:54', 'fa fa-folder'),
(82, 'Business Formation', 23, '2024-12-13 04:54:54', '2024-12-13 04:54:54', 'fa fa-folder'),
(83, 'Bookkeeping', 24, '2024-12-23 06:56:07', '2024-12-23 06:56:07', 'fa fa-folder'),
(84, 'Taxes', 24, '2024-12-23 06:56:07', '2024-12-23 06:56:07', 'fa fa-folder'),
(85, 'Payroll', 24, '2024-12-23 06:56:07', '2024-12-23 06:56:07', 'fa fa-folder'),
(86, 'Business Formation', 24, '2024-12-23 06:56:07', '2024-12-23 06:56:07', 'fa fa-folder');

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
(13, '2024_11_21_121552_add_columns_to_users_table', 8),
(14, '2024_11_29_095631_create_orders_table', 9),
(15, '2024_11_29_100629_add_transaction_details_to_orders_table', 10),
(16, '2024_11_29_145822_add_columns_to_packages_table', 11),
(17, '2024_11_29_151419_update_validity_column_in_packages_table', 12),
(18, '2024_11_29_170047_create_user_packages_table', 13),
(19, '2024_12_05_124750_add_status_to_users_table', 14),
(20, '2024_12_23_142404_create_user_fields_table', 15);

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
(1, 16, 3, 'ORD-674992d0f38bc', 46.00, 'completed', 'credit_card', NULL, NULL, '2024-11-29 05:09:20', '2024-11-29 05:09:20'),
(2, 16, 3, 'ORD-6749932055ce7', 46.00, 'completed', 'credit_card', '120046680947', '7PGJ1D', '2024-11-29 05:10:40', '2024-11-29 05:10:40'),
(3, 16, 3, 'ORD-67499589388a7', 46.00, 'completed', 'credit_card', '120046681939', '6ZO02N', '2024-11-29 05:20:57', '2024-11-29 05:20:57'),
(4, 16, 3, 'ORD-6749a2703685c', 11.00, 'completed', 'credit_card', '120046684409', '24KV0T', '2024-11-29 06:16:00', '2024-11-29 06:16:00'),
(5, 16, 3, 'ORD-6749e2e4393eb', 100.00, 'completed', 'credit_card', '120046696243', 'H23W98', '2024-11-29 10:51:00', '2024-11-29 10:51:00'),
(6, 16, 3, 'ORD-6749f0844469d', 49.00, 'completed', 'credit_card', '120046697850', 'OPB5U7', '2024-11-29 11:49:08', '2024-11-29 11:49:08'),
(7, 16, 3, 'ORD-6749f1338ba04', 49.00, 'completed', 'credit_card', '120046697950', 'K4WEL7', '2024-11-29 11:52:03', '2024-11-29 11:52:03'),
(8, 16, 3, 'ORD-6749f15e3a541', 49.00, 'completed', 'credit_card', '120046697962', 'KR1IW3', '2024-11-29 11:52:46', '2024-11-29 11:52:46'),
(9, 16, 3, 'ORD-6749f1cb0649c', 49.00, 'completed', 'credit_card', '120046698031', 'IXCSI8', '2024-11-29 11:54:35', '2024-11-29 11:54:35'),
(10, 16, 3, 'ORD-6749f1e77e398', 49.00, 'completed', 'credit_card', '120046698042', 'WP8GHP', '2024-11-29 11:55:03', '2024-11-29 11:55:03'),
(11, 16, 3, 'ORD-6749f74b09301', 49.00, 'completed', 'credit_card', '120046698725', 'VT4H6E', '2024-11-29 12:18:03', '2024-11-29 12:18:03'),
(12, 16, 3, 'ORD-6749f76b6b62c', 49.00, 'completed', 'credit_card', '120046698749', 'HBJZJ1', '2024-11-29 12:18:35', '2024-11-29 12:18:35'),
(13, 16, 3, 'ORD-6749f7b053384', 49.00, 'completed', 'credit_card', '120046698781', 'ZAN5HV', '2024-11-29 12:19:44', '2024-11-29 12:19:44'),
(14, 16, 3, 'ORD-6749f7e10735d', 49.00, 'completed', 'credit_card', '120046698799', 'UZQN9K', '2024-11-29 12:20:33', '2024-11-29 12:20:33'),
(15, 16, 4, 'ORD-6749f8f4e3de6', 1000.00, 'completed', 'credit_card', '120046698901', 'BW106E', '2024-11-29 12:25:08', '2024-11-29 12:25:08'),
(16, 16, 6, 'ORD-6749ff14beb54', 92.00, 'completed', 'credit_card', '120046699726', 'G7SAE7', '2024-11-29 12:51:16', '2024-11-29 12:51:16'),
(17, 16, 1, 'ORD-674a0321c9522', 504.00, 'completed', 'credit_card', '120046700123', '6N7KGV', '2024-11-29 13:08:33', '2024-11-29 13:08:33'),
(18, 16, 7, 'ORD-674a049aaf9fc', 49.00, 'completed', 'credit_card', '120046700251', '20UC26', '2024-11-29 13:14:50', '2024-11-29 13:14:50'),
(19, 16, 7, 'ORD-674a04eda56b0', 49.00, 'completed', 'credit_card', '120046700297', 'KB3LGK', '2024-11-29 13:16:13', '2024-11-29 13:16:13'),
(20, 16, 6, 'ORD-674a053cc441f', 92.00, 'completed', 'credit_card', '120046700366', 'ZOTT5A', '2024-11-29 13:17:32', '2024-11-29 13:17:32'),
(21, 16, 7, 'ORD-674a110e2f16e', 49.00, 'completed', 'credit_card', '120046701875', '7K1X4J', '2024-11-29 14:07:58', '2024-11-29 14:07:58'),
(22, 17, 7, 'ORD-674ad19ce8c84', 49.00, 'completed', 'credit_card', '120046730469', 'T15X1D', '2024-11-30 03:49:32', '2024-11-30 03:49:32'),
(23, 18, 7, 'ORD-674ad4e254c63', 49.00, 'completed', 'credit_card', '120046731006', 'QQUBGB', '2024-11-30 04:03:30', '2024-11-30 04:03:30'),
(24, 18, 7, 'ORD-674ad50235d05', 49.00, 'completed', 'credit_card', '120046731023', 'TWG0MO', '2024-11-30 04:04:02', '2024-11-30 04:04:02'),
(25, 20, 7, 'ORD-674adef35b35e', 49.00, 'completed', 'credit_card', '120046731880', 'GA9RZF', '2024-11-30 04:46:27', '2024-11-30 04:46:27'),
(26, 20, 8, 'ORD-674ae075ceafd', 99.00, 'completed', 'credit_card', '120046731972', 'P1IRRI', '2024-11-30 04:52:53', '2024-11-30 04:52:53'),
(27, 6, 7, 'ORD-6751cbf59b2f4', 49.00, 'completed', 'credit_card', '120047529337', 'MNIDHT', '2024-12-05 10:51:17', '2024-12-05 10:51:17'),
(28, 6, 7, 'ORD-6751cbf7a9f9b', 49.00, 'completed', 'credit_card', '120047529338', 'S2MIKL', '2024-12-05 10:51:19', '2024-12-05 10:51:19'),
(29, 21, 6, 'ORD-6752ef3986952', 92.00, 'completed', 'credit_card', '120047591577', 'NM0AFL', '2024-12-06 07:34:01', '2024-12-06 07:34:01'),
(30, 23, 7, 'ORD-675c04a1364c6', 49.00, 'completed', 'credit_card', '120048522022', 'IQJXE7', '2024-12-13 04:55:45', '2024-12-13 04:55:45'),
(31, 2, 7, 'ORD-675c30095cdbf', 49.00, 'completed', 'credit_card', '120048558331', 'ZT0SBZ', '2024-12-13 08:00:57', '2024-12-13 08:00:57'),
(32, 23, 9, 'ORD-675c3ff579cca', 154.00, 'completed', 'credit_card', '120048582243', 'N7G783', '2024-12-13 09:08:53', '2024-12-13 09:08:53'),
(33, 23, 9, 'ORD-675c402a5d1dc', 154.00, 'completed', 'credit_card', '120048582521', 'UK5BSF', '2024-12-13 09:09:46', '2024-12-13 09:09:46'),
(34, 23, 9, 'ORD-675c403f86cf9', 154.00, 'completed', 'credit_card', '120048582631', 'WBZGIY', '2024-12-13 09:10:07', '2024-12-13 09:10:07'),
(35, 18, 6, 'ORD-6769721a01582', 92.00, 'completed', 'credit_card', '120049795254', '3MJSI3', '2024-12-23 09:22:18', '2024-12-23 09:22:18'),
(36, 18, 9, 'ORD-6769745607bf0', 124.00, 'completed', 'credit_card', '120049796395', 'OB2L65', '2024-12-23 09:31:50', '2024-12-23 09:31:50'),
(37, 18, 9, 'ORD-6769746ba0e99', 124.00, 'completed', 'credit_card', '120049796450', 'K7U106', '2024-12-23 09:32:11', '2024-12-23 09:32:11'),
(38, 18, 9, 'ORD-67697d056a4e3', 154.32, 'completed', 'credit_card', '120049798365', '6BBY4L', '2024-12-23 10:08:53', '2024-12-23 10:08:53');

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
(1, 'Ivy Hopkins', 1024, 504.00, '[]', '[\"Aliquip eos deleniti\"]', 'monthly', 'Magnam ad mollitia a', '2024-11-21 06:09:58', '2024-11-29 12:50:45'),
(3, 'Jolie Hancock', 53, 361.00, '[]', '[\"Maxime tempore aut\"]', 'one-time', 'Officia esse praese', '2024-11-21 07:56:04', '2024-11-29 12:50:15'),
(4, 'Amethyst Perry', 66, 681.00, '[]', '[\"Est libero voluptate\"]', 'one-time', 'Officia fuga Ducimu', '2024-11-29 06:24:08', '2024-11-29 12:49:57'),
(6, 'Rhea Richmond', 76, 92.00, '[\"Bookkeeping\",\"Taxes\"]', '[\"Ut molestias fugit \\r\",\"xyz\\r\",\"abc\\r\",\"helo\\r\",\"bye\"]', 'monthly', 'Sed ea dolorem ea un', '2024-11-29 10:39:03', '2024-11-29 12:48:36'),
(7, 'BUSINESS FORMATION', 1024, 49.00, '[\"Business Formation\"]', '[\"Prompt filing service\\r\",\"Compliance Service (free for 1 year)\\r\",\"Portal Access\"]', 'one-time', 'Ensure your business is officially registered and compliant with state regulations.', '2024-11-29 13:13:29', '2024-11-29 13:13:29'),
(8, 'TAX SOLUTION', 1024, 99.00, '[\"Taxes\"]', '[\"Personal Tax Preparation\\r\",\"\\r\",\"Business Tax preparation\\r\",\"\\r\",\"Quarterly Estimated Taxes\\r\",\"\\r\",\"Quarterly Estimated Taxes\\r\",\"\\r\",\"Tax Planning Sessions\"]', 'one-time', 'Easily manage your business documents & services through our secure online portal.', '2024-11-30 04:52:21', '2024-11-30 04:52:21'),
(9, 'boi', 1024, 124.00, NULL, NULL, 'one-time', NULL, NULL, NULL);

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
('0hiIuORCfmcSJQHE5QydtudbManwI3ZuSQXp00Jh', 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamphb2Nia3hXS1o4SEtIUkpqYTBnaE5keFNYZ096MGJnT2VDaHE2WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ib2kiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxODt9', 1734967306),
('eJwOIaPS0B2Hm9yYhsdI616fM4ijtcOJgDt8NXBv', 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRWJiUDRHQldJMTBhZGxYb2NSakxqRkJzekY1S3NoZXo3d3FoVFJ2SyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdXNlci9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxODt9', 1734962023);

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
(73, '2024', 9, 29, NULL, 'files/9_Constance/Bookkeeping/2024', '2024-11-21 07:34:00', '2024-11-21 07:34:00'),
(74, '2024', 10, 33, NULL, 'files/10_bilal/Bookkeeping/2024', '2024-11-27 05:32:19', '2024-11-27 05:32:19'),
(75, '2023', 10, 33, NULL, 'files/10_bilal/Bookkeeping/2023', '2024-11-27 05:32:27', '2024-11-27 05:32:27'),
(76, '2022', 10, 33, NULL, 'files/10_bilal/Bookkeeping/2022', '2024-11-27 05:32:37', '2024-11-27 05:32:37'),
(77, '2024', 13, 38, NULL, 'files/13_Louis/Bookkeeping/2024', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(78, '2023', 13, 38, NULL, 'files/13_Louis/Bookkeeping/2023', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(79, '2022', 13, 38, NULL, 'files/13_Louis/Bookkeeping/2022', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(80, '2024', 13, 39, NULL, 'files/13_Louis/Taxes/2024', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(81, '2023', 13, 39, NULL, 'files/13_Louis/Taxes/2023', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(82, '2022', 13, 39, NULL, 'files/13_Louis/Taxes/2022', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(83, '2024', 13, 40, NULL, 'files/13_Louis/Payroll/2024', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(84, '2023', 13, 40, NULL, 'files/13_Louis/Payroll/2023', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(85, '2022', 13, 40, NULL, 'files/13_Louis/Payroll/2022', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(86, '2024', 13, 41, NULL, 'files/13_Louis/Business Formation/2024', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(87, '2023', 13, 41, NULL, 'files/13_Louis/Business Formation/2023', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(88, '2022', 13, 41, NULL, 'files/13_Louis/Business Formation/2022', '2024-11-27 07:26:44', '2024-11-27 07:26:44'),
(89, '2024', 14, 42, NULL, 'files/14_Timon/Bookkeeping/2024', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(90, '2023', 14, 42, NULL, 'files/14_Timon/Bookkeeping/2023', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(91, '2022', 14, 42, NULL, 'files/14_Timon/Bookkeeping/2022', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(92, '2024', 14, 43, NULL, 'files/14_Timon/Taxes/2024', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(93, '2023', 14, 43, NULL, 'files/14_Timon/Taxes/2023', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(94, '2022', 14, 43, NULL, 'files/14_Timon/Taxes/2022', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(95, '2024', 14, 44, NULL, 'files/14_Timon/Payroll/2024', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(96, '2023', 14, 44, NULL, 'files/14_Timon/Payroll/2023', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(97, '2022', 14, 44, NULL, 'files/14_Timon/Payroll/2022', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(98, '2024', 14, 45, NULL, 'files/14_Timon/Business Formation/2024', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(99, '2023', 14, 45, NULL, 'files/14_Timon/Business Formation/2023', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(100, '2022', 14, 45, NULL, 'files/14_Timon/Business Formation/2022', '2024-11-28 04:47:17', '2024-11-28 04:47:17'),
(101, '2024', 15, 46, NULL, 'files/15_Kareem/Bookkeeping/2024', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(102, '2023', 15, 46, NULL, 'files/15_Kareem/Bookkeeping/2023', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(103, '2022', 15, 46, NULL, 'files/15_Kareem/Bookkeeping/2022', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(104, '2024', 15, 47, NULL, 'files/15_Kareem/Taxes/2024', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(105, '2023', 15, 47, NULL, 'files/15_Kareem/Taxes/2023', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(106, '2022', 15, 47, NULL, 'files/15_Kareem/Taxes/2022', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(107, '2024', 15, 48, NULL, 'files/15_Kareem/Payroll/2024', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(108, '2023', 15, 48, NULL, 'files/15_Kareem/Payroll/2023', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(109, '2022', 15, 48, NULL, 'files/15_Kareem/Payroll/2022', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(110, '2024', 15, 49, NULL, 'files/15_Kareem/Business Formation/2024', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(111, '2023', 15, 49, NULL, 'files/15_Kareem/Business Formation/2023', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(112, '2022', 15, 49, NULL, 'files/15_Kareem/Business Formation/2022', '2024-11-28 04:48:23', '2024-11-28 04:48:23'),
(113, '2024', 16, 50, NULL, 'files/16_Janna/Bookkeeping/2024', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(114, '2023', 16, 50, NULL, 'files/16_Janna/Bookkeeping/2023', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(115, '2022', 16, 50, NULL, 'files/16_Janna/Bookkeeping/2022', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(116, '2024', 16, 51, NULL, 'files/16_Janna/Taxes/2024', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(117, '2023', 16, 51, NULL, 'files/16_Janna/Taxes/2023', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(118, '2022', 16, 51, NULL, 'files/16_Janna/Taxes/2022', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(119, '2024', 16, 52, NULL, 'files/16_Janna/Payroll/2024', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(120, '2023', 16, 52, NULL, 'files/16_Janna/Payroll/2023', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(121, '2022', 16, 52, NULL, 'files/16_Janna/Payroll/2022', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(122, '2024', 16, 53, NULL, 'files/16_Janna/Business Formation/2024', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(123, '2023', 16, 53, NULL, 'files/16_Janna/Business Formation/2023', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(124, '2022', 16, 53, NULL, 'files/16_Janna/Business Formation/2022', '2024-11-28 04:50:38', '2024-11-28 04:50:38'),
(125, '2024', 17, 54, NULL, 'files/17_Christen/Bookkeeping/2024', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(126, '2023', 17, 54, NULL, 'files/17_Christen/Bookkeeping/2023', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(127, '2022', 17, 54, NULL, 'files/17_Christen/Bookkeeping/2022', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(128, '2024', 17, 55, NULL, 'files/17_Christen/Taxes/2024', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(129, '2023', 17, 55, NULL, 'files/17_Christen/Taxes/2023', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(130, '2022', 17, 55, NULL, 'files/17_Christen/Taxes/2022', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(131, '2024', 17, 56, NULL, 'files/17_Christen/Payroll/2024', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(132, '2023', 17, 56, NULL, 'files/17_Christen/Payroll/2023', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(133, '2022', 17, 56, NULL, 'files/17_Christen/Payroll/2022', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(134, '2024', 17, 57, NULL, 'files/17_Christen/Business Formation/2024', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(135, '2023', 17, 57, NULL, 'files/17_Christen/Business Formation/2023', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(136, '2022', 17, 57, NULL, 'files/17_Christen/Business Formation/2022', '2024-11-30 03:48:46', '2024-11-30 03:48:46'),
(137, '2024', 18, 58, NULL, 'files/18_Daniel/Bookkeeping/2024', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(138, '2023', 18, 58, NULL, 'files/18_Daniel/Bookkeeping/2023', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(139, '2022', 18, 58, NULL, 'files/18_Daniel/Bookkeeping/2022', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(140, '2024', 18, 59, NULL, 'files/18_Daniel/Taxes/2024', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(141, '2023', 18, 59, NULL, 'files/18_Daniel/Taxes/2023', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(142, '2022', 18, 59, NULL, 'files/18_Daniel/Taxes/2022', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(143, '2024', 18, 60, NULL, 'files/18_Daniel/Payroll/2024', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(144, '2023', 18, 60, NULL, 'files/18_Daniel/Payroll/2023', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(145, '2022', 18, 60, NULL, 'files/18_Daniel/Payroll/2022', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(146, '2024', 18, 61, NULL, 'files/18_Daniel/Business Formation/2024', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(147, '2023', 18, 61, NULL, 'files/18_Daniel/Business Formation/2023', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(148, '2022', 18, 61, NULL, 'files/18_Daniel/Business Formation/2022', '2024-11-30 04:02:30', '2024-11-30 04:02:30'),
(149, '2024', 19, 62, NULL, 'files/19_Laurel/Bookkeeping/2024', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(150, '2023', 19, 62, NULL, 'files/19_Laurel/Bookkeeping/2023', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(151, '2022', 19, 62, NULL, 'files/19_Laurel/Bookkeeping/2022', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(152, '2024', 19, 63, NULL, 'files/19_Laurel/Taxes/2024', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(153, '2023', 19, 63, NULL, 'files/19_Laurel/Taxes/2023', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(154, '2022', 19, 63, NULL, 'files/19_Laurel/Taxes/2022', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(155, '2024', 19, 64, NULL, 'files/19_Laurel/Payroll/2024', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(156, '2023', 19, 64, NULL, 'files/19_Laurel/Payroll/2023', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(157, '2022', 19, 64, NULL, 'files/19_Laurel/Payroll/2022', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(158, '2024', 19, 65, NULL, 'files/19_Laurel/Business Formation/2024', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(159, '2023', 19, 65, NULL, 'files/19_Laurel/Business Formation/2023', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(160, '2022', 19, 65, NULL, 'files/19_Laurel/Business Formation/2022', '2024-11-30 04:07:49', '2024-11-30 04:07:49'),
(161, '2024', 20, 66, NULL, 'files/20_Jason/Bookkeeping/2024', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(162, '2023', 20, 66, NULL, 'files/20_Jason/Bookkeeping/2023', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(163, '2022', 20, 66, NULL, 'files/20_Jason/Bookkeeping/2022', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(164, '2024', 20, 67, NULL, 'files/20_Jason/Taxes/2024', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(165, '2023', 20, 67, NULL, 'files/20_Jason/Taxes/2023', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(166, '2022', 20, 67, NULL, 'files/20_Jason/Taxes/2022', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(167, '2024', 20, 68, NULL, 'files/20_Jason/Payroll/2024', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(168, '2023', 20, 68, NULL, 'files/20_Jason/Payroll/2023', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(169, '2022', 20, 68, NULL, 'files/20_Jason/Payroll/2022', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(170, '2024', 20, 69, NULL, 'files/20_Jason/Business Formation/2024', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(171, '2023', 20, 69, NULL, 'files/20_Jason/Business Formation/2023', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(172, '2022', 20, 69, NULL, 'files/20_Jason/Business Formation/2022', '2024-11-30 04:42:24', '2024-11-30 04:42:24'),
(173, '2024', 21, 70, NULL, 'files/21_Seth/Bookkeeping/2024', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(174, '2023', 21, 70, NULL, 'files/21_Seth/Bookkeeping/2023', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(175, '2022', 21, 70, NULL, 'files/21_Seth/Bookkeeping/2022', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(176, '2024', 21, 71, NULL, 'files/21_Seth/Taxes/2024', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(177, '2023', 21, 71, NULL, 'files/21_Seth/Taxes/2023', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(178, '2022', 21, 71, NULL, 'files/21_Seth/Taxes/2022', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(179, '2024', 21, 72, NULL, 'files/21_Seth/Payroll/2024', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(180, '2023', 21, 72, NULL, 'files/21_Seth/Payroll/2023', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(181, '2022', 21, 72, NULL, 'files/21_Seth/Payroll/2022', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(182, '2024', 21, 73, NULL, 'files/21_Seth/Business Formation/2024', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(183, '2023', 21, 73, NULL, 'files/21_Seth/Business Formation/2023', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(184, '2022', 21, 73, NULL, 'files/21_Seth/Business Formation/2022', '2024-12-06 07:33:22', '2024-12-06 07:33:22'),
(192, '2021', 21, 70, NULL, 'files/21_Seth/Bookkeeping/2021', '2024-12-11 00:23:33', '2024-12-11 00:23:33'),
(193, '2021', 21, 71, NULL, 'files/21_Seth/Taxes/2021', '2024-12-11 00:23:53', '2024-12-11 00:23:53'),
(194, 'dec', 21, 70, NULL, 'files/21_Seth/Bookkeeping/dec', '2024-12-11 00:36:10', '2024-12-11 00:36:10'),
(195, 'dec', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/dec', '2024-12-11 00:36:55', '2024-12-11 00:36:55'),
(196, 'nov', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/nov', '2024-12-11 00:44:20', '2024-12-11 00:44:20'),
(197, 'jan', 21, 70, NULL, 'files/21_Seth/Bookkeeping/jan', '2024-12-11 00:44:49', '2024-12-11 00:44:49'),
(198, 'feb', 21, 70, NULL, 'files/21_Seth/Bookkeeping/feb', '2024-12-11 01:14:14', '2024-12-11 01:14:14'),
(199, '2002', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/2002', '2024-12-11 01:14:31', '2024-12-11 01:14:31'),
(200, 'qwerty', 21, 70, NULL, 'files/21_Seth/Bookkeeping/qwerty', '2024-12-11 05:47:54', '2024-12-11 05:47:54'),
(201, 'abcd', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/abcd', '2024-12-11 05:48:59', '2024-12-11 05:48:59'),
(202, 'efg', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/efg', '2024-12-11 05:56:13', '2024-12-11 05:56:13'),
(205, 'aaaa', 21, 70, 202, 'files/21_Seth/Bookkeeping/efg/aaaa', '2024-12-11 06:19:36', '2024-12-11 06:19:36'),
(206, 'zuu', 21, 70, 202, 'files/21_Seth/Bookkeeping/efg/zuu', '2024-12-11 06:20:05', '2024-12-11 06:20:05'),
(207, 'hello', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/hello', '2024-12-11 06:21:16', '2024-12-11 06:21:16'),
(208, 'wolrd', 21, 70, 207, 'files/21_Seth/Bookkeeping/hello/wolrd', '2024-12-11 06:22:09', '2024-12-11 06:22:09'),
(209, 'sheela', 21, 70, 195, 'files/21_Seth/Bookkeeping/2024/dec/sheela', '2024-12-11 06:32:33', '2024-12-11 06:32:33'),
(210, 'pakistan', 21, 70, 195, 'files/21_Seth/Bookkeeping/2024/dec/pakistan', '2024-12-11 06:33:09', '2024-12-11 06:33:09'),
(211, 'india', 21, 70, 210, 'files/21_Seth/Bookkeeping/2024/dec/pakistan/india', '2024-12-11 06:33:32', '2024-12-11 06:33:32'),
(212, 'jameela', 21, 70, 209, 'files/21_Seth/Bookkeeping/2024/dec/sheela/jameela', '2024-12-11 06:47:42', '2024-12-11 06:47:42'),
(213, 'shabana', 21, 70, 209, 'files/21_Seth/Bookkeeping/2024/dec/sheela/shabana', '2024-12-11 06:48:57', '2024-12-11 06:48:57'),
(214, 'hassan', 21, 70, 212, 'files/21_Seth/Bookkeeping/2024/dec/sheela/jameela/hassan', '2024-12-11 06:52:33', '2024-12-11 06:52:33'),
(215, 'kamran', 21, 70, 214, 'files/21_Seth/Bookkeeping/2024/dec/sheela/jameela/hassan/kamran', '2024-12-11 06:52:52', '2024-12-11 06:52:52'),
(216, '2002', 21, 70, NULL, 'files/21_Seth/Bookkeeping/2002', '2024-12-11 06:54:32', '2024-12-11 06:54:32'),
(217, 'january', 21, 70, 216, 'files/21_Seth/Bookkeeping/2002/january', '2024-12-11 06:55:22', '2024-12-11 06:55:22'),
(218, 'first week', 21, 70, 217, 'files/21_Seth/Bookkeeping/2002/january/first week', '2024-12-11 06:55:30', '2024-12-11 06:55:30'),
(219, '1 jan', 21, 70, 218, 'files/21_Seth/Bookkeeping/2002/january/first week/1 jan', '2024-12-11 06:55:39', '2024-12-11 06:55:39'),
(220, 'furstday', 21, 70, 219, 'files/21_Seth/Bookkeeping/2002/january/first week/1 jan/furstday', '2024-12-11 06:55:52', '2024-12-11 06:55:52'),
(221, 'helday', 21, 70, 220, 'files/21_Seth/Bookkeeping/2002/january/first week/1 jan/furstday/helday', '2024-12-11 06:57:40', '2024-12-11 06:57:40'),
(222, 'holiday', 21, 70, 221, 'files/21_Seth/Bookkeeping/2002/january/first week/1 jan/furstday/helday/holiday', '2024-12-11 06:57:47', '2024-12-11 06:57:47'),
(223, 'farukh', 21, 70, 218, 'files/21_Seth/Bookkeeping/2002/january/first week/farukh', '2024-12-12 04:24:06', '2024-12-12 04:24:06'),
(224, 'hello', 18, 58, 137, 'files/18_Daniel/Bookkeeping/2024/hello', '2024-12-12 04:35:12', '2024-12-12 04:35:12'),
(225, 'hi', 18, 58, 137, 'files/18_Daniel/Bookkeeping/2024/hi', '2024-12-12 04:35:19', '2024-12-12 04:35:19'),
(226, 'onetwo', 21, 71, NULL, 'files/21_Seth/Taxes/onetwo', '2024-12-12 04:44:26', '2024-12-12 04:44:26'),
(227, 'why', 21, 70, 173, 'files/21_Seth/Bookkeeping/2024/why', '2024-12-12 04:45:28', '2024-12-12 04:45:28'),
(228, 'jawani', 21, 70, 209, 'files/21_Seth/Bookkeeping/2024/dec/sheela/jawani', '2024-12-12 04:46:38', '2024-12-12 04:46:38'),
(229, '2024', 22, 75, NULL, 'files/22_Quentin/Bookkeeping/2024', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(230, '2023', 22, 75, NULL, 'files/22_Quentin/Bookkeeping/2023', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(231, '2022', 22, 75, NULL, 'files/22_Quentin/Bookkeeping/2022', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(232, '2024', 22, 76, NULL, 'files/22_Quentin/Taxes/2024', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(233, '2023', 22, 76, NULL, 'files/22_Quentin/Taxes/2023', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(234, '2022', 22, 76, NULL, 'files/22_Quentin/Taxes/2022', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(235, '2024', 22, 77, NULL, 'files/22_Quentin/Payroll/2024', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(236, '2023', 22, 77, NULL, 'files/22_Quentin/Payroll/2023', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(237, '2022', 22, 77, NULL, 'files/22_Quentin/Payroll/2022', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(238, '2024', 22, 78, NULL, 'files/22_Quentin/Business Formation/2024', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(239, '2023', 22, 78, NULL, 'files/22_Quentin/Business Formation/2023', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(240, '2022', 22, 78, NULL, 'files/22_Quentin/Business Formation/2022', '2024-12-12 07:25:12', '2024-12-12 07:25:12'),
(241, 'wolrd', 1, 1, NULL, 'files/1_zubair_ayub/home/wolrd', '2024-12-13 04:26:04', '2024-12-13 04:26:04'),
(242, 'WHY', 2, 2, NULL, 'files/2_John_Doe/HELLO/WHY', '2024-12-13 04:47:19', '2024-12-13 04:47:19'),
(243, '2024', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/2024', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(244, '2023', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/2023', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(245, '2022', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/2022', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(246, '2024', 23, 80, NULL, 'files/23_Aurora/Taxes/2024', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(247, '2023', 23, 80, NULL, 'files/23_Aurora/Taxes/2023', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(248, '2022', 23, 80, NULL, 'files/23_Aurora/Taxes/2022', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(249, '2024', 23, 81, NULL, 'files/23_Aurora/Payroll/2024', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(250, '2023', 23, 81, NULL, 'files/23_Aurora/Payroll/2023', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(251, '2022', 23, 81, NULL, 'files/23_Aurora/Payroll/2022', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(252, '2024', 23, 82, NULL, 'files/23_Aurora/Business Formation/2024', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(253, '2023', 23, 82, NULL, 'files/23_Aurora/Business Formation/2023', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(254, '2022', 23, 82, NULL, 'files/23_Aurora/Business Formation/2022', '2024-12-13 04:54:54', '2024-12-13 04:54:54'),
(255, 'JAN', 23, 82, 252, 'files/23_Aurora/Business Formation/2024/JAN', '2024-12-13 04:57:25', '2024-12-13 04:57:25'),
(256, 'jan', 23, 79, 243, 'files/23_Aurora/Bookkeeping/2024/jan', '2024-12-13 08:07:52', '2024-12-13 08:07:52'),
(257, 'hello world', 23, 79, 256, 'files/23_Aurora/Bookkeeping/2024/jan/hello world', '2024-12-13 08:11:58', '2024-12-13 08:11:58'),
(258, '456', 23, 79, 243, 'files/23_Aurora/Bookkeeping/2024/456', '2024-12-13 08:23:59', '2024-12-13 08:23:59'),
(259, '546', 1, 1, NULL, 'files/1_zubair_ayub/home/546', '2024-12-13 08:24:09', '2024-12-13 08:24:09'),
(260, '54646', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/54646', '2024-12-13 08:24:19', '2024-12-13 08:24:19'),
(261, 'sdsad', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/sdsad', '2024-12-13 08:38:30', '2024-12-13 08:38:30'),
(262, 'hahahah', 23, 79, NULL, 'files/23_Aurora/Bookkeeping/hahahah', '2024-12-13 08:38:34', '2024-12-13 08:38:34'),
(263, '2024', 24, 83, NULL, 'files/24_Zelenia/Bookkeeping/2024', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(264, '2023', 24, 83, NULL, 'files/24_Zelenia/Bookkeeping/2023', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(265, '2022', 24, 83, NULL, 'files/24_Zelenia/Bookkeeping/2022', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(266, '2024', 24, 84, NULL, 'files/24_Zelenia/Taxes/2024', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(267, '2023', 24, 84, NULL, 'files/24_Zelenia/Taxes/2023', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(268, '2022', 24, 84, NULL, 'files/24_Zelenia/Taxes/2022', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(269, '2024', 24, 85, NULL, 'files/24_Zelenia/Payroll/2024', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(270, '2023', 24, 85, NULL, 'files/24_Zelenia/Payroll/2023', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(271, '2022', 24, 85, NULL, 'files/24_Zelenia/Payroll/2022', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(272, '2024', 24, 86, NULL, 'files/24_Zelenia/Business Formation/2024', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(273, '2023', 24, 86, NULL, 'files/24_Zelenia/Business Formation/2023', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(274, '2022', 24, 86, NULL, 'files/24_Zelenia/Business Formation/2022', '2024-12-23 06:56:07', '2024-12-23 06:56:07'),
(275, '2025', 18, 61, 146, 'files/18_Daniel/Business Formation/2024/2025', '2024-12-23 09:17:10', '2024-12-23 09:17:10'),
(276, 'januray', 18, 61, 275, 'files/18_Daniel/Business Formation/2025/januray', '2024-12-23 09:17:53', '2024-12-23 09:17:53');

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
(1, 'zubair ayub', 'zubairayub@hotamil.com', 'active', NULL, '$2y$12$w2QtSl8k0tB2Eu8a7KmwWuY2uTxy5edZmJpVvmliVTdwYeTvgWoym', '6PPuD8VJk3IGpSRg6JxYku0ZL1pPOs6DSNCV5PP0Hx4Xr3VkvuSimatZTwX5', '2024-11-06 15:06:10', '2024-12-23 08:48:47', 'customer', NULL, 0.00, NULL, NULL, NULL),
(2, 'John Doe', 'admin@gmail.com', 'inactive', NULL, '$2y$12$aVTeJkYDjbxM.CwYuQDjse.5Z9p09PZlc9Pin5yqMgyVrWcTl2ajS', NULL, '2024-11-07 12:23:06', '2024-12-13 08:00:57', 'admin', 7, 0.00, NULL, NULL, NULL),
(3, 'John Doe', 'abc@gmail.com', 'active', NULL, '$2y$12$0YnR2Z.YuExKHF/N1Q8zUuJfIG7jo3lNexnBqLJu0isTawov3aHE2', NULL, '2024-11-08 11:04:37', '2024-12-06 06:41:29', 'customer', NULL, 0.00, NULL, NULL, NULL),
(4, 'John Doe', 'abcd@gamil.com', 'active', NULL, '$2y$12$XgX4Qb7z9PgDUL.YRY/93OetcS6ET7QsKyERcKFqzvfBcwJKQmL.O', NULL, '2024-11-08 11:06:54', '2024-12-06 06:46:10', 'customer', NULL, 0.00, NULL, NULL, NULL),
(5, 'John Doe', 'hello@gmail.com', 'inactive', NULL, '$2y$12$FOk7dxPYAJstYqAPZevUuepv63Vi3NWuELbAGHqJrJjAjYgnLPFIO', NULL, '2024-11-09 09:32:13', '2024-12-06 06:26:10', 'customer', NULL, 0.00, NULL, NULL, NULL),
(6, 'John Doe', 'farukh@gmail.com', 'active', NULL, '$2y$12$LXAbvdBoMxrlbY4MtBlndue2ylJfKmZ3Tj2AKYVf/4pibpL6XNsDy', NULL, '2024-11-12 05:40:01', '2024-12-06 06:29:49', 'customer', 7, 0.00, NULL, NULL, NULL),
(7, 'John Doe', 'farukh@gamail.com', 'inactive', NULL, '$2y$12$6nVktzTeA/pwf7719Id9Cu5BkrFMnYSCVooO.Tfx.NrUpexqNPUyi', NULL, '2024-11-12 05:55:50', '2024-12-06 06:29:45', 'customer', NULL, 0.00, NULL, NULL, NULL),
(8, 'JohnDoe', 'brandless@gmail.com', 'active', NULL, '$2y$12$K/3XOJh5YdcV04m.xgFrve2B/0Q8uCpzHEXb0jHK9Y5NNwympMp4u', NULL, '2024-11-19 06:28:39', '2024-11-19 06:28:39', 'customer', NULL, 0.00, NULL, NULL, NULL),
(9, 'Constance', 'lyzy@mailinator.com', 'active', NULL, '$2y$12$/DzF/ATYWHuvTt7WK9RRGOjxtX/vi6l/KfGP9PnP51PhMYtZDceJq', NULL, '2024-11-21 07:27:33', '2024-11-21 07:34:27', 'customer', 1, 245.72, 'Mrs', 'Snow', '+17235273568'),
(10, 'bilal', 'bilal@gmail.com', 'active', NULL, '$2y$12$7YK9br52HgnLUI3dp35x/uFZDlWejToTbDBMs8cSRMMGp8j7SzJZW', NULL, '2024-11-27 04:54:58', '2024-12-06 06:46:16', 'customer', 1, 27.97, 'Mr', 'khan', '123456789'),
(11, 'khan', 'khan@gmail.com', 'active', NULL, '$2y$12$SGIvtuSEXz9z.3w8p4kiVuvYpmcGEgmwUP4I2awmNpZMhhjJT/Xm.', NULL, '2024-11-27 07:24:42', '2024-11-27 07:24:42', 'customer', 1, 0.00, 'Mr', 'babar', '342342345434'),
(12, 'Guy', 'batyxafo@mailinator.com', 'active', NULL, '$2y$12$pYP0GHqM2yE5J2kN4DoYMeDhCXmJJ9ronk6SsbIft9hRDGY1b6bl.', NULL, '2024-11-27 07:25:59', '2024-11-27 07:25:59', 'customer', 1, 0.00, 'Prof', 'Barnett', '17641516758'),
(13, 'Louis', 'fipypi@mailinator.com', 'active', NULL, '$2y$12$7VaGtQGUYn1xP08iT5qI..ONQs6lpFEJhype32VScO870r/83.6LO', NULL, '2024-11-27 07:26:44', '2024-11-27 07:56:29', 'customer', 1, 44.06, 'Prof', 'Garrison', '15273986192'),
(14, 'Timon', 'pyji@mailinator.com', 'active', NULL, '$2y$12$XBmvltRifSBpf6pJ3IVpAOAYoT8DfN5iUoj0Z.7z/I/uQ3VFYmf12', NULL, '2024-11-28 04:47:17', '2024-11-28 04:47:17', 'customer', 1, 0.00, 'Prof', 'Castillo', '18175293345'),
(15, 'Kareem', 'xiqar@mailinator.com', 'active', NULL, '$2y$12$bBCFoPN44sNnXjJAqjoAD.aYIBID1AMmYfwtLQodL68j7VSJdLfjG', NULL, '2024-11-28 04:48:23', '2024-11-28 04:48:23', 'customer', 1, 0.00, 'Mr', 'Hampton', '14589421505'),
(16, 'Janna', 'mihyp@mailinator.com', 'active', NULL, '$2y$12$w0urk2ZBz0Mti.HzhqV8c.Bb5Mpzz25ixZooZ5NKKvFLEJa6u3.4u', NULL, '2024-11-28 04:50:38', '2024-11-28 06:06:28', 'customer', 1, 891.15, 'Prof', 'Caldwell', '12573543548'),
(17, 'Christen', 'pogatisisu@mailinator.com', 'active', NULL, '$2y$12$c7jYYBJ8Jem6.6wVZZ2KmujrWvV2WA54X1wZqjb2WuLXseuvrCQtq', NULL, '2024-11-30 03:48:46', '2024-12-05 10:52:13', 'customer', 1, 122.90, 'Ms', 'Tran', '12459759099'),
(18, 'Daniel', 'zonoguqen@mailinator.com', 'active', NULL, '$2y$12$INNrq6GbPSz/MVg8eEPGfuhlZ9pSWCuNyVRLaC9PmgMvKygq0E1iq', NULL, '2024-11-30 04:02:30', '2024-12-23 09:32:11', 'customer', 9, 502.07, 'Mr', 'Hines', '16547815395'),
(19, 'Laurel', 'vysywi@mailinator.com', 'active', NULL, '$2y$12$./tiZmL0QrQe.MKGshEBdOZttqpQteljXsVHbI04ykavaSdXY.xYC', NULL, '2024-11-30 04:07:49', '2024-11-30 04:07:49', 'customer', 1, 0.00, 'Dr', 'Whitley', '19028159166'),
(20, 'Jason', 'cetufomoq@mailinator.com', 'active', NULL, '$2y$12$DsHPalYgsGJXDM8AH04sgOsrfeOk8ar7piAS.PLqr7J54mVEAohzm', NULL, '2024-11-30 04:42:24', '2024-11-30 04:52:53', 'customer', 8, 122.82, 'Ms', 'Martin', '13164365906'),
(21, 'Seth', 'folija@mailinator.com', 'active', NULL, '$2y$12$8PjuaNte5gycbMRyGk7AjOygnZswLgPlr/EhacPCC/IWvS0ditQju', NULL, '2024-12-06 07:33:22', '2024-12-06 07:34:01', 'customer', 6, 0.00, 'Dr', 'Burch', '15899771356'),
(22, 'Quentin', 'zofacumup@mailinator.com', 'active', NULL, '$2y$12$tZjMMst5e2wvIG1Mfu6oVe/ZRjYN.kSehUVDzdfO7Ksao9bSyaJb.', NULL, '2024-12-12 07:25:12', '2024-12-12 07:25:12', 'customer', 1, 0.00, 'Ms', 'Blankenship', '+16075072604'),
(23, 'Aurora', 'jyfez@mailinator.com', 'active', NULL, '$2y$12$TXn2FixlDQ6rr2LODYiPfeAaenjWUZgPFY8RC4CrAsPX9NYl9Tv62', NULL, '2024-12-13 04:54:54', '2024-12-13 09:08:53', 'customer', 9, 1438.60, 'Ms', 'Mcguire', '1353315475'),
(24, 'Zelenia', 'helloworld@mailinator.com', 'active', NULL, '$2y$12$cedWUsC/kH8AFR6NSKg7MOKcYoWnvWnWE7icpEKKp5sxw78BvI8z6', NULL, '2024-12-23 06:56:06', '2024-12-23 07:26:51', 'customer', 1, 0.00, 'Mrs', 'Melendez', '18314428565');

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
(1, 18, 'Quasi voluptatem et', 'Saepe voluptatem Qu', 'Quia sunt exercitat', '29442', '2024-12-23 09:32:11', '2024-12-23 10:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `package_type` enum('one-time','monthly') NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `user_id`, `package_id`, `package_type`, `expiry_date`, `created_at`, `updated_at`) VALUES
(7, 16, 7, 'one-time', '2024-11-29', '2024-11-29 14:07:58', '2024-11-29 14:07:58'),
(8, 17, 7, 'one-time', '2024-11-30', '2024-11-30 03:49:32', '2024-11-30 03:49:32'),
(9, 18, 7, 'one-time', '2024-11-30', '2024-11-30 04:04:02', '2024-11-30 04:04:02'),
(14, 20, 7, 'monthly', '2025-01-05', '2024-12-05 08:00:13', '2024-12-05 08:00:13'),
(15, 20, 8, 'monthly', '2025-01-05', '2024-12-05 08:00:13', '2024-12-05 08:00:13'),
(89, 7, 3, 'monthly', '2025-01-05', '2024-12-05 10:48:44', '2024-12-05 10:48:44'),
(90, 7, 4, 'monthly', '2025-01-05', '2024-12-05 10:48:44', '2024-12-05 10:48:44'),
(91, 7, 6, 'monthly', '2025-01-05', '2024-12-05 10:48:44', '2024-12-05 10:48:44'),
(92, 7, 7, 'monthly', '2025-01-05', '2024-12-05 10:48:44', '2024-12-05 10:48:44'),
(93, 7, 8, 'monthly', '2025-01-05', '2024-12-05 10:48:44', '2024-12-05 10:48:44'),
(94, 6, 7, 'one-time', '2024-12-05', '2024-12-05 10:51:17', '2024-12-05 10:51:17'),
(95, 6, 7, 'one-time', '2024-12-05', '2024-12-05 10:51:19', '2024-12-05 10:51:19'),
(113, 19, 7, 'monthly', '2025-01-06', '2024-12-06 05:15:48', '2024-12-06 05:15:48'),
(115, 1, 3, 'monthly', '2025-01-06', '2024-12-06 05:16:43', '2024-12-06 05:16:43'),
(116, 1, 4, 'monthly', '2025-01-06', '2024-12-06 05:16:43', '2024-12-06 05:16:43'),
(117, 1, 6, 'monthly', '2025-01-06', '2024-12-06 05:16:43', '2024-12-06 05:16:43'),
(118, 1, 7, 'monthly', '2025-01-06', '2024-12-06 05:16:43', '2024-12-06 05:16:43'),
(119, 1, 8, 'monthly', '2025-01-06', '2024-12-06 05:16:43', '2024-12-06 05:16:43'),
(124, 8, 4, 'monthly', '2025-01-06', '2024-12-06 05:24:40', '2024-12-06 05:24:40'),
(125, 8, 6, 'monthly', '2025-01-06', '2024-12-06 05:24:40', '2024-12-06 05:24:40'),
(126, 8, 7, 'monthly', '2025-01-06', '2024-12-06 05:24:40', '2024-12-06 05:24:40'),
(127, 8, 8, 'monthly', '2025-01-06', '2024-12-06 05:24:40', '2024-12-06 05:24:40'),
(130, 21, 6, 'one-time', '2024-12-06', '2024-12-06 07:34:01', '2024-12-06 07:34:01'),
(131, 23, 7, 'one-time', '2024-12-13', '2024-12-13 04:55:45', '2024-12-13 04:55:45'),
(132, 2, 7, 'one-time', '2024-12-13', '2024-12-13 08:00:57', '2024-12-13 08:00:57'),
(133, 23, 9, 'one-time', '2024-12-13', '2024-12-13 09:10:07', '2024-12-13 09:10:07'),
(134, 18, 6, 'one-time', '2024-12-23', '2024-12-23 09:22:18', '2024-12-23 09:22:18'),
(135, 18, 9, 'one-time', '2024-12-23', '2024-12-23 09:32:11', '2024-12-23 09:32:11'),
(136, 18, 9, 'one-time', '2024-12-23', '2024-12-23 10:08:53', '2024-12-23 10:08:53');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_folder`
--
ALTER TABLE `sub_folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_fields`
--
ALTER TABLE `user_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

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
