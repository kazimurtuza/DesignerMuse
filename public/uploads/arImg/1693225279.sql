-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 12:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designernew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `is_authentic` varchar(191) DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `is_authentic`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$taL6s0Tif8jAqnz2VkacCuZhTUkpC0ITg0ky5jheOLUL3S7pXMik.', '2023-06-16 23:57:41', '2023-06-16 23:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_charge_rate` decimal(11,2) NOT NULL,
  `meeting_charge_rate` decimal(11,2) NOT NULL,
  `product_charge_rate` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `project_charge_rate`, `meeting_charge_rate`, `product_charge_rate`, `created_at`, `updated_at`) VALUES
(2, 30.00, 2.00, 3.00, '2023-08-20 07:05:59', '2023-08-20 08:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `ar_wish_lists`
--

CREATE TABLE `ar_wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `ar_img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ar_wish_lists`
--

INSERT INTO `ar_wish_lists` (`id`, `user_id`, `product_id`, `ar_img`, `created_at`, `updated_at`) VALUES
(1, 6, 73, 'public/uploads/arImg1692354735.glb', '2023-08-18 11:21:09', '2023-08-18 11:21:09'),
(3, 6, 72, 'public/uploads/arImg1692354735.glb', '2023-08-21 13:37:22', '2023-08-21 13:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector` varchar(191) NOT NULL COMMENT '1=designer,2=shopkeeper',
  `user_id` bigint(20) NOT NULL,
  `bank_name` varchar(191) NOT NULL,
  `acc_name` varchar(191) NOT NULL,
  `acc_number` varchar(191) NOT NULL,
  `routing_number` varchar(191) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not active,1=active',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `sector`, `user_id`, `bank_name`, `acc_name`, `acc_number`, `routing_number`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 'sooii', 'Account Name:', 'Account Number:', 'Routing Number:', 0, 0, '2023-08-02 07:42:21', '2023-08-02 07:42:21'),
(2, '1', 1, 'sdf', 'sdf', 'sdf', '345', 0, 0, '2023-08-02 07:43:46', '2023-08-02 07:43:46'),
(3, '1', 10, 'City', 'Saving', '809983', NULL, 0, 0, '2023-08-09 10:04:30', '2023-08-09 10:04:30'),
(4, '1', 10, 'City', 'Saving', '809983', NULL, 0, 0, '2023-08-09 10:05:38', '2023-08-09 10:05:38'),
(5, '1', 1, 'City', 'Saving', '809983', NULL, 0, 0, '2023-08-09 11:48:09', '2023-08-09 11:48:09'),
(6, '1', 1, 'City', 'Saving', '809982', 'r', 0, 0, '2023-08-21 10:21:52', '2023-08-21 10:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` text DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `rating` decimal(11,2) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `meeting_charge_rate` decimal(11,2) DEFAULT NULL,
  `project_charge_rate` decimal(11,2) DEFAULT NULL,
  `product_charge_rate` decimal(11,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `is_authentic` varchar(191) DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `id_no`, `name`, `rating`, `email`, `meeting_charge_rate`, `project_charge_rate`, `product_charge_rate`, `status`, `is_deleted`, `is_authentic`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, NULL, 'designer', 2.80, 'designer@gmail.com', 30.00, 30.00, NULL, 1, 0, '1', '2023-06-16 09:11:27', '$2y$10$bhq0c251RZ25MkvWf59d7Oyd22n62s.hL/XlqrKritLJjJO0qHMwy', '2023-06-16 09:04:50', '2023-08-24 08:58:09'),
(2, NULL, 'kazi', NULL, 'designer22@gmail.com', 2.00, 10.00, NULL, 1, 0, '1', '2023-08-01 22:02:37', '$2y$10$sOY4QeG56Lo4NQIHgO6lZelfL3XMO2.jgR.w7NHwQoCB9J9Ysg3hO', '2023-08-01 22:02:14', '2023-08-20 11:36:06'),
(3, NULL, 'deisgner500', NULL, 'deisgner500@gmail.com', NULL, NULL, NULL, 1, 0, '1', '2023-08-02 08:10:33', '$2y$10$6ZPMXWB6hEkvgtZWafX21.MyaFgNiZrzWMiOIwqrakYbVwfej7Hom', '2023-08-02 08:10:16', '2023-08-20 07:51:48'),
(4, NULL, 'Designer', NULL, 'designer99@gmail.com', NULL, NULL, NULL, 1, 0, '0', NULL, '$2y$10$N02fiKn.eHNpHNr1IMd0s.fkWMU3.XkoSus/b28JFvXeYi/W.zide', '2023-08-03 22:26:59', '2023-08-20 07:51:48'),
(5, NULL, 'jim', NULL, 'designerJim@gmail.com', NULL, NULL, NULL, 1, 0, '0', NULL, '$2y$10$Q9NJs7iuo175RSx/zuyKnu5i98/6IDzHKfTz36aDWwBND1j2tsIoO', '2023-08-03 22:37:38', '2023-08-20 07:51:48'),
(6, '10006', 'deisg333', NULL, 'deisgner33@gmail.com', NULL, NULL, NULL, 1, 0, '1', NULL, '$2y$10$yCWpMYWk7p0M084DFA1souzN.9sn/hZRsNW.1dPpW8Wq5IZyEahWG', '2023-08-03 23:06:40', '2023-08-20 07:51:48'),
(7, '10007', 'deisgner@gmail.com', NULL, 'deisgner@gmail.com', NULL, NULL, NULL, 1, 0, '1', NULL, '$2y$10$uR078S5xHxqJCz2ZIQo6q.w1OJQjO0XS4.g2YE7lNO4.zfTkMDDOi', '2023-08-03 23:06:52', '2023-08-20 07:51:48'),
(8, '10008', 'deisgner600', NULL, 'designer600@gmail.com', NULL, 40.00, 3.00, 1, 0, '1', NULL, '$2y$10$HdFfmT/7c.TQ0a8/dwJeQuiahtbkyQBlnrY/I./HAyKFo2BIahnRS', '2023-08-03 23:16:41', '2023-08-20 07:51:48'),
(9, '10009', 'Designer Name', NULL, 'designer6916@gmail.com', 2.00, 40.00, 3.00, 1, 0, '0', NULL, '$2y$10$13igctEENJqgGs0lAJ3O3uVLXgUVOYP.iUye13xrU2Me0hqLESDea', '2023-08-09 06:59:13', '2023-08-20 07:51:48'),
(10, '10010', 'Designer Name', NULL, 'designer991@gmail.com', NULL, NULL, NULL, 1, 0, '0', NULL, '$2y$10$lW8iQQPbDipNetrsENdMMeroIDwb.6i31ZQVK6RBryFDawp8fHzqe', '2023-08-09 08:05:34', '2023-08-20 07:51:48'),
(11, '10011', 'dhaka', NULL, 'dhaka@gmail.com', NULL, NULL, NULL, 1, 0, '1', NULL, '$2y$10$oqDWd3n4Gm4BSyzAe9xJsOkhSTAFbL5ZFj.j9xKTPzQyAjv68dc0W', '2023-08-20 07:06:49', '2023-08-20 07:51:48'),
(12, '10012', 'gb', NULL, 'bg@gmail.com', NULL, NULL, NULL, 1, 0, '1', NULL, '$2y$10$d12T.ye5oGuyKtcrYapXO.JgkkgyTNstllDaul.G5XtBvFP9b6ECi', '2023-08-20 08:43:12', '2023-08-20 08:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `designer_appointment_lists`
--

CREATE TABLE `designer_appointment_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_no` text DEFAULT NULL,
  `service_time_id` bigint(20) DEFAULT NULL,
  `designer_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_date` date NOT NULL,
  `time_slot_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_type` varchar(191) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=completed',
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=Consultation only  2=start project 3=project Completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_appointment_lists`
--

INSERT INTO `designer_appointment_lists` (`id`, `user_id`, `id_no`, `service_time_id`, `designer_id`, `appointment_date`, `time_slot_id`, `appointment_type`, `payment_status`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, '2324', NULL, 1, '2023-07-25', 487, 'video', 0, 0, 2, '2023-07-23 23:16:00', '2023-07-28 02:28:52'),
(2, 6, '987', NULL, 1, '2023-07-25', 448, 'voice', 0, 0, 2, '2023-07-24 02:36:14', '2023-07-28 07:07:21'),
(3, 6, '333', NULL, 1, '2023-07-25', 461, 'video', 0, 0, 1, '2023-07-25 04:11:16', '2023-08-08 12:12:37'),
(4, 6, '1234', NULL, 1, '2023-09-05', 560, 'voice', 0, 0, 1, '2023-07-26 08:11:21', '2023-07-28 01:59:49'),
(5, 6, '6677', NULL, 1, '2023-07-05', 486, 'video', 0, 0, 2, '2023-07-31 03:33:16', '2023-08-23 06:43:33'),
(6, 6, '555', NULL, 1, '2023-09-08', 560, 'office', 0, 0, 2, '2023-07-31 03:54:48', '2023-08-23 06:40:46'),
(7, 6, '123456', 3, 1, '2023-07-04', 486, 'voice', 0, 0, 2, '2023-08-02 00:03:06', '2023-08-23 06:44:07'),
(8, 6, '4332', 3, 1, '2023-07-04', 455, 'voice', 0, 0, 1, '2023-08-02 01:58:47', '2023-08-08 12:12:28'),
(9, 6, '1112', 2, 1, '2023-07-03', 506, 'voice', 0, 0, 2, '2023-08-02 02:00:53', '2023-08-07 04:17:07'),
(11, 6, '10011', 3, 1, '2023-07-04', 470, 'video', 0, 0, 2, '2023-08-08 08:44:39', '2023-08-23 06:46:23'),
(12, 6, NULL, 3, 1, '2023-07-02', 448, 'voice', 0, 0, 2, '2023-08-09 04:45:16', '2023-08-23 08:12:58'),
(13, 6, '10013', 3, 1, '2023-07-04', 454, 'voice', 0, 0, 2, '2023-08-17 09:44:09', '2023-08-23 08:14:42'),
(14, 6, '10014', 3, 1, '2023-07-04', 454, 'voice', 0, 0, 0, '2023-08-17 09:44:24', '2023-08-17 09:44:24'),
(15, 6, '10015', 3, 1, '2023-07-04', 454, 'voice', 0, 0, 0, '2023-08-17 09:45:06', '2023-08-17 09:45:06'),
(16, 6, '10016', 4, 1, '2023-07-05', 506, 'voice', 0, 0, 0, '2023-08-17 09:46:35', '2023-08-17 09:46:35'),
(17, 6, '10017', 5, 1, '2023-07-06', 506, 'voice', 0, 0, 0, '2023-08-17 09:51:11', '2023-08-17 09:51:11'),
(18, 6, '10018', 8, 1, '2023-07-26', 588, 'voice', 0, 0, 0, '2023-08-17 09:56:40', '2023-08-17 09:56:40'),
(19, 6, '10019', 8, 1, '2023-07-26', 588, 'voice', 0, 0, 0, '2023-08-17 09:58:10', '2023-08-17 09:58:10'),
(20, 6, '10020', 8, 1, '2023-07-26', 598, 'voice', 0, 0, 0, '2023-08-17 09:59:24', '2023-08-17 09:59:24'),
(21, 6, '10021', 8, 1, '2023-07-26', 594, 'voice', 1, 9, 0, '2023-08-17 10:01:04', '2023-08-17 11:35:17'),
(22, 6, '10022', 8, 1, '2023-07-26', 582, 'voice', 1, 10, 0, '2023-08-17 10:42:33', '2023-08-17 10:47:38'),
(23, 6, '10023', 8, 1, '2023-07-26', 602, 'video', 0, 0, 0, '2023-08-17 11:54:22', '2023-08-17 11:54:22'),
(24, 6, '10024', 8, 1, '2023-07-26', 592, 'video', 1, 14, 1, '2023-08-17 12:06:08', '2023-08-25 10:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `designer_chats`
--

CREATE TABLE `designer_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `meeting_id` bigint(20) NOT NULL,
  `message` varchar(191) NOT NULL,
  `seen_status` tinyint(4) NOT NULL DEFAULT 0,
  `is_sender_client` tinyint(4) NOT NULL COMMENT '0=yes,1=yes',
  `type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>message,1=file',
  `deliver_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>not delivered  ,1=delivered',
  `date_time` time NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_chats`
--

INSERT INTO `designer_chats` (`id`, `customer_id`, `seller_id`, `meeting_id`, `message`, `seen_status`, `is_sender_client`, `type`, `deliver_status`, `date_time`, `date`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 1, 'sdfjhb', 0, 1, 0, 1, '06:23:59', '2023-08-08', '2023-08-08 00:23:59', '2023-08-08 00:23:59'),
(2, 6, 1, 1, 'asdfkjh asdf', 0, 1, 0, 1, '06:25:27', '2023-08-08', '2023-08-08 00:25:27', '2023-08-08 00:25:27'),
(3, 6, 1, 1, 'asdfkjh asdf', 0, 1, 0, 1, '06:25:28', '2023-08-08', '2023-08-08 00:25:28', '2023-08-08 00:25:28'),
(4, 6, 1, 1, 'asdfasdk asdkfjh', 0, 1, 0, 1, '06:25:44', '2023-08-08', '2023-08-08 00:25:44', '2023-08-08 00:25:44'),
(5, 6, 1, 9, 'sjdfg', 0, 1, 0, 1, '06:31:39', '2023-08-08', '2023-08-08 00:31:39', '2023-08-08 00:31:39'),
(6, 6, 1, 9, 'hlw', 0, 1, 0, 1, '06:34:02', '2023-08-08', '2023-08-08 00:34:02', '2023-08-08 00:34:02'),
(7, 6, 1, 9, 'sdfdsf', 0, 1, 0, 1, '06:35:45', '2023-08-08', '2023-08-08 00:35:45', '2023-08-08 00:35:45'),
(8, 6, 1, 9, 'dsdfas', 0, 1, 0, 1, '06:39:03', '2023-08-08', '2023-08-08 00:39:03', '2023-08-08 00:39:03'),
(9, 6, 1, 9, 'sdfsf', 0, 1, 0, 1, '12:45:00', '2023-08-08', '2023-08-08 06:45:00', '2023-08-08 06:45:00'),
(10, 6, 1, 9, 'kkuu', 0, 1, 0, 1, '12:45:11', '2023-08-08', '2023-08-08 06:45:11', '2023-08-08 06:45:11'),
(11, 6, 1, 9, 'sdfds sdf', 0, 1, 0, 1, '13:00:42', '2023-08-08', '2023-08-08 07:00:42', '2023-08-08 07:00:42'),
(12, 6, 1, 9, 'sdafas asdf', 0, 1, 0, 1, '13:01:39', '2023-08-08', '2023-08-08 07:01:39', '2023-08-08 07:01:39'),
(13, 6, 1, 9, 'sdfsd', 0, 1, 0, 1, '13:02:58', '2023-08-08', '2023-08-08 07:02:58', '2023-08-08 07:02:58'),
(14, 6, 1, 9, 'sdf', 0, 1, 0, 1, '13:04:38', '2023-08-08', '2023-08-08 07:04:38', '2023-08-08 07:04:38'),
(15, 6, 1, 9, 'dfg', 0, 1, 0, 1, '13:05:38', '2023-08-08', '2023-08-08 07:05:38', '2023-08-08 07:05:38'),
(16, 6, 1, 9, 'sdf', 0, 1, 0, 1, '13:05:45', '2023-08-08', '2023-08-08 07:05:45', '2023-08-08 07:05:45'),
(17, 6, 1, 9, 'sdf', 0, 1, 0, 1, '13:06:53', '2023-08-08', '2023-08-08 07:06:53', '2023-08-08 07:06:53'),
(18, 6, 1, 9, 'sdf', 0, 0, 0, 1, '13:39:07', '2023-08-08', '2023-08-08 07:39:07', '2023-08-08 07:39:07'),
(19, 6, 1, 9, 'hi', 0, 1, 0, 1, '13:39:14', '2023-08-08', '2023-08-08 07:39:14', '2023-08-08 07:39:14'),
(20, 6, 1, 9, 'what are you doing', 0, 0, 0, 1, '13:40:20', '2023-08-08', '2023-08-08 07:40:20', '2023-08-08 07:40:20'),
(21, 6, 1, 9, 'warking', 0, 0, 0, 1, '13:40:54', '2023-08-08', '2023-08-08 07:40:54', '2023-08-08 07:40:54'),
(22, 6, 1, 9, 'sdkfjh', 0, 1, 0, 1, '13:41:16', '2023-08-08', '2023-08-08 07:41:16', '2023-08-08 07:41:17'),
(23, 6, 1, 9, 'dfasasd', 0, 0, 0, 1, '13:41:26', '2023-08-08', '2023-08-08 07:41:26', '2023-08-08 07:41:26'),
(24, 6, 1, 9, 'kshdf', 0, 1, 0, 1, '13:41:30', '2023-08-08', '2023-08-08 07:41:30', '2023-08-08 07:41:30'),
(25, 6, 1, 9, 'sdfsdf', 0, 0, 0, 1, '13:41:35', '2023-08-08', '2023-08-08 07:41:35', '2023-08-08 07:41:35'),
(26, 6, 1, 2, 'dfsd', 0, 0, 0, 1, '13:44:28', '2023-08-08', '2023-08-08 07:44:28', '2023-08-08 07:44:29'),
(27, 6, 1, 9, 'ksdfh', 0, 0, 0, 1, '13:44:48', '2023-08-08', '2023-08-08 07:44:48', '2023-08-08 07:44:48'),
(28, 6, 1, 9, 'sdjkfhsadf', 0, 0, 0, 1, '13:44:57', '2023-08-08', '2023-08-08 07:44:57', '2023-08-08 07:44:57'),
(29, 6, 1, 9, 'ksdjhfkasd', 0, 1, 0, 1, '13:45:02', '2023-08-08', '2023-08-08 07:45:02', '2023-08-08 07:45:02'),
(30, 6, 1, 1, 'sdfjhg', 0, 0, 0, 1, '14:09:23', '2023-08-08', '2023-08-08 08:09:23', '2023-08-08 08:09:23'),
(31, 6, 1, 9, 'dfkjsd lkjhasdflkj slkadfjh kkksd flkhsdkf', 0, 0, 0, 1, '15:01:25', '2023-08-08', '2023-08-08 09:01:25', '2023-08-08 09:01:25'),
(32, 6, 1, 11, 'dfg', 0, 1, 0, 1, '18:13:17', '2023-08-08', '2023-08-08 12:13:17', '2023-08-08 12:13:17'),
(33, 6, 1, 9, 'd', 0, 0, 0, 1, '11:43:07', '2023-08-11', '2023-08-11 05:43:07', '2023-08-11 05:43:07'),
(34, 6, 1, 23, 'dfgdf dfg', 0, 1, 0, 1, '13:47:53', '2023-08-24', '2023-08-24 07:47:53', '2023-08-24 07:47:53'),
(35, 6, 1, 23, 'h', 0, 1, 0, 1, '13:48:04', '2023-08-24', '2023-08-24 07:48:04', '2023-08-24 07:48:04'),
(36, 6, 1, 23, 'hlw', 0, 1, 0, 1, '13:50:08', '2023-08-24', '2023-08-24 07:50:08', '2023-08-24 07:50:08'),
(37, 6, 1, 3, 'sdf', 0, 0, 0, 1, '16:29:32', '2023-08-25', '2023-08-25 10:29:32', '2023-08-25 10:29:32'),
(38, 6, 1, 3, 'rfg', 0, 1, 0, 1, '16:29:40', '2023-08-25', '2023-08-25 10:29:40', '2023-08-25 10:29:40'),
(39, 6, 1, 3, 'sdd', 0, 0, 0, 1, '16:30:31', '2023-08-25', '2023-08-25 10:30:31', '2023-08-25 10:30:31'),
(40, 6, 1, 3, 'fg', 0, 1, 0, 1, '16:30:34', '2023-08-25', '2023-08-25 10:30:34', '2023-08-25 10:30:34'),
(41, 6, 1, 3, 'sdf', 0, 0, 0, 1, '16:33:01', '2023-08-25', '2023-08-25 10:33:01', '2023-08-25 10:33:01'),
(42, 6, 1, 3, 'hlw', 0, 1, 0, 1, '16:33:08', '2023-08-25', '2023-08-25 10:33:08', '2023-08-25 10:33:08'),
(43, 6, 1, 3, 'fff', 0, 0, 0, 1, '16:33:22', '2023-08-25', '2023-08-25 10:33:22', '2023-08-25 10:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `designer_education`
--

CREATE TABLE `designer_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) NOT NULL,
  `pass_date` date DEFAULT NULL,
  `institution_name` varchar(191) NOT NULL,
  `graduation_name` varchar(191) NOT NULL,
  `certificate_file` varchar(191) DEFAULT NULL,
  `details` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_education`
--

INSERT INTO `designer_education` (`id`, `designer_id`, `pass_date`, `institution_name`, `graduation_name`, `certificate_file`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-12', 'Institution Name', 'Degree', NULL, 'Description', '2023-07-24 07:01:13', '2023-07-25 03:34:44'),
(2, 1, '2023-07-13', 'Institution Name', 'Degree', NULL, 'Description', '2023-07-24 07:01:58', '2023-07-25 03:35:01'),
(3, 1, '2023-07-25', 'sdfsdf sdfsdf sdf', 'sdfdsfsd', NULL, 'asdfga asdf asdf', '2023-07-24 07:04:13', '2023-07-24 07:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `designer_experiences`
--

CREATE TABLE `designer_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `company_name` varchar(191) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `responsibility` text NOT NULL,
  `is_continue` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_experiences`
--

INSERT INTO `designer_experiences` (`id`, `designer_id`, `title`, `company_name`, `start_date`, `end_date`, `responsibility`, `is_continue`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dolor sit, amet consectetur adipisicing elit. Distinctio, praesentium', 'Techno', '2023-07-14', '2023-07-14', 'kazi', 0, '2023-07-24 06:37:45', '2023-07-25 02:54:05'),
(2, 1, 'facebook like', 'sdfs', '2023-07-07', '2023-07-22', 'sdfds', 0, '2023-07-25 02:27:37', '2023-07-25 02:27:37'),
(3, 1, 'facebook like', 'walton', '2023-07-26', '2023-07-21', 'sdfsdf', 0, '2023-07-25 02:27:59', '2023-07-25 02:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `designer_portfolios`
--

CREATE TABLE `designer_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) NOT NULL,
  `img` varchar(191) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_portfolios`
--

INSERT INTO `designer_portfolios` (`id`, `designer_id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/designer_images/designer_images-16902609736692.jpeg', 'yy', NULL, '2023-07-24 22:56:13', '2023-08-21 08:16:09'),
(2, 1, 'storage/designer_images/designer_images-16902777832304.jpeg', 'sdf', 'dfsdf', '2023-07-25 03:36:23', '2023-07-25 03:36:30'),
(3, 1, 'storage/designer_images/designer_images-16908106518800.jpeg', 'sdfs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit', '2023-07-31 07:37:31', '2023-07-31 07:37:31'),
(4, 1, NULL, 'sd', 'dd', '2023-08-21 07:50:09', '2023-08-21 07:50:09'),
(5, 1, NULL, 'sd', 'dd', '2023-08-21 08:04:40', '2023-08-21 08:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `designer_profiles`
--

CREATE TABLE `designer_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `education_exprience` text DEFAULT NULL,
  `designer_id` bigint(20) UNSIGNED NOT NULL,
  `profile_img` varchar(191) DEFAULT NULL,
  `designer_img` varchar(191) DEFAULT NULL,
  `cover_img` varchar(191) DEFAULT NULL,
  `job_title` varchar(191) DEFAULT NULL,
  `about_me` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_profiles`
--

INSERT INTO `designer_profiles` (`id`, `education_exprience`, `designer_id`, `profile_img`, `designer_img`, `cover_img`, `job_title`, `about_me`, `status`, `created_at`, `updated_at`) VALUES
(5, 'about me', 1, 'storage/designer_images/designer_images-16902644368465.jpeg', 'storage/designer_images/designer_images-16921643956364.avif', 'storage/designer_images/designer_images-16921643691502.jpeg', 'hlw', 'about me', 0, '2023-07-24 23:30:51', '2023-08-21 07:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `designer_projects`
--

CREATE TABLE `designer_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `agreement_details` text DEFAULT NULL,
  `description` text NOT NULL,
  `dateline` date NOT NULL,
  `project_rate` decimal(11,2) NOT NULL,
  `client_id` bigint(20) NOT NULL,
  `is_milestone` bigint(20) NOT NULL DEFAULT 0,
  `total_paid` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=accept,2=completed,3=>reject',
  `designer_id` bigint(20) NOT NULL,
  `meeting_id` bigint(20) NOT NULL,
  `project_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>pending 2=>reject 1=accept',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_projects`
--

INSERT INTO `designer_projects` (`id`, `title`, `agreement_details`, `description`, `dateline`, `project_rate`, `client_id`, `is_milestone`, `total_paid`, `payment_status`, `designer_id`, `meeting_id`, `project_status`, `created_at`, `updated_at`) VALUES
(11, 'sdf', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id\n                        cumque provident a eos aliquid. Dolorum, dolorem, repellat\n                        asperiores, reiciendis dignissimos quis at omnis repellendus\n                        animi doloremque esse quibusdam saepe sed. Neque vero laudantium\n                        rerum placeat eos incidunt cumque suscipit provident accusantium\n                        accusamus recusandae aliquid nemo quibusdam aperiam veniam,\n                        voluptas unde.', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id\n                        cumque provident a eos aliquid. Dolorum, dolorem, repellat\n                        asperiores, reiciendis dignissimos quis at omnis repellendus\n                        animi doloremque esse quibusdam saepe sed. Neque vero laudantium\n                        rerum placeat eos incidunt cumque suscipit provident accusantium\n                        accusamus recusandae aliquid nemo quibusdam aperiam veniam,\n                        voluptas unde.', '2023-07-27', 345.00, 6, 0, 0.00, 0, 1, 3, 1, '2023-07-26 01:55:02', '2023-07-26 05:56:59'),
(12, 'Project Title', 'Project Title\r\nProject Title\r\nDescription\r\nDescription\r\nProject fileuser2.jpg\r\nProject Date Line\r\n07/27/2023\r\nNEXT\r\nAgreement Info', 'Description', '2023-07-27', 3454.00, 6, 0, 0.00, 0, 1, 4, 1, '2023-07-26 08:22:23', '2023-07-26 08:23:43'),
(13, 'Project Title', 'sdf', 'Description', '2023-07-22', 345.00, 6, 0, 0.00, 0, 1, 1, 0, '2023-07-28 02:28:52', '2023-07-28 02:28:52'),
(14, 'Project Title', 'Project Title\r\nProject Title\r\nDescription\r\nDescription\r\nProject filedefault-profile-picture-avatar-user-avatar-icon-person-icon-head-icon-profile-picture-icons-default-anonymous-user-male-and-female-businessman-photo-placeholder-social-network-avatar-portrait-free-vector.jpg\r\nProject Date Line\r\n07/28/2023\r\nNEXT\r\nAgreement Info', 'Description', '2023-07-28', 500.00, 6, 0, 0.00, 0, 1, 2, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(27, '\'title 1\'', 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 04:17:07', '2023-08-07 04:17:07'),
(28, '\'title 1\'', 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 04:20:29', '2023-08-07 04:20:29'),
(29, '\'title 1\'', 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 05:17:36', '2023-08-07 05:17:36'),
(30, '\'title 1\'', 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 05:18:57', '2023-08-07 05:18:57'),
(31, 'dfg', 'sdf', 'dfg', '2023-08-18', 34.00, 6, 0, 0.00, 0, 1, 24, 0, '2023-08-23 05:31:34', '2023-08-23 05:31:34'),
(32, 'fdg', 'dfg', 'dfg', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 6, 0, '2023-08-23 06:40:46', '2023-08-23 06:40:46'),
(33, 'df', 'wer', 'wer', '2023-08-18', 345.00, 6, 0, 0.00, 0, 1, 5, 0, '2023-08-23 06:43:33', '2023-08-23 06:43:33'),
(34, '345', '345', '345', '2023-08-25', 34.00, 6, 0, 0.00, 0, 1, 7, 0, '2023-08-23 06:44:06', '2023-08-23 06:44:06'),
(35, 'ert', 'ert', 'ert', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 11, 0, '2023-08-23 06:46:23', '2023-08-23 06:46:23'),
(36, 'dfg', 'dfh', 'dfg', '2023-08-23', 45.00, 6, 0, 0.00, 0, 1, 12, 0, '2023-08-23 08:12:58', '2023-08-23 08:12:58'),
(37, 'sdfs', 'dfgdfg', 'sdf', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 13, 0, '2023-08-23 08:14:42', '2023-08-23 08:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `designer_project_files`
--

CREATE TABLE `designer_project_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `is_client_upload` tinyint(4) NOT NULL DEFAULT 0 COMMENT '	1=client 2=designer',
  `file` varchar(191) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_project_files`
--

INSERT INTO `designer_project_files` (`id`, `project_id`, `is_client_upload`, `file`, `file_name`, `is_delete`, `created_at`, `updated_at`) VALUES
(6, 11, 1, 'public/uploads/1690357271.jpg', 'No_Image_Available.jpg', 0, '2023-07-26 01:55:02', '2023-07-26 01:55:02'),
(7, 11, 2, 'public/uploads/project/1690375002.jpg', 'images.jpg', 0, '2023-07-26 06:36:42', '2023-07-26 06:36:42'),
(8, 11, 2, 'public/uploads/project/1690378711.jpg', 'download.jpg', 1, '2023-07-26 07:38:31', '2023-07-26 07:38:31'),
(9, 12, 0, 'public/uploads/project/1690381343.jpg', 'user2.jpg', 1, '2023-07-26 08:22:23', '2023-07-26 08:22:23'),
(10, 12, 2, 'public/uploads/project/1690381459.jpg', 'images.jpg', 1, '2023-07-26 08:24:19', '2023-07-26 08:24:19'),
(11, 12, 2, 'public/uploads/project/1690382355.jpg', 'user2.jpg', 1, '2023-07-26 08:39:15', '2023-07-26 08:39:15'),
(12, 13, 0, 'public/uploads/project/1690532932.jpg', 'default-profile-picture-avatar-user-avatar-icon-person-icon-head-icon-profile-picture-icons-default-anonymous-user-male-and-female-businessman-photo-placeholder-social-network-avatar-portrait-free-vector.jpg', 1, '2023-07-28 02:28:52', '2023-07-28 02:28:52'),
(13, 14, 0, 'public/uploads/project/1690549641.jpg', 'default-profile-picture-avatar-user-avatar-icon-person-icon-head-icon-profile-picture-icons-default-anonymous-user-male-and-female-businessman-photo-placeholder-social-network-avatar-portrait-free-vector.jpg', 1, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(14, 11, 2, 'public/uploads/project/1692608419.jpg', 'kelly-sikkema-v9FQR4tbIq8-unsplash.jpg', 1, '2023-08-21 09:00:19', '2023-08-21 09:00:19'),
(15, 31, 0, 'public/uploads/project/1692768694.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 05:31:34', '2023-08-23 05:31:34'),
(16, 32, 0, 'public/uploads/project/1692772846.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 06:40:46', '2023-08-23 06:40:46'),
(17, 35, 0, 'public/uploads/project/1692773183.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 06:46:23', '2023-08-23 06:46:23'),
(18, 36, 0, 'public/uploads/project/1692778378.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 08:12:58', '2023-08-23 08:12:58'),
(19, 37, 0, 'public/uploads/project/1692778482.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 08:14:42', '2023-08-23 08:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `designer_project_milestone_payments`
--

CREATE TABLE `designer_project_milestone_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `paid_date` date DEFAULT NULL,
  `payable_date` date DEFAULT NULL,
  `payment_id` bigint(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>uncompleted 1=>completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_project_milestone_payments`
--

INSERT INTO `designer_project_milestone_payments` (`id`, `project_id`, `title`, `amount`, `paid_date`, `payable_date`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 11, 'dfsf', 345.00, '2023-07-26', '2023-07-26', NULL, 1, '2023-07-26 01:55:02', '2023-07-26 04:19:38'),
(7, 11, 'dffgdf', 456.00, '2023-07-26', '2023-07-26', NULL, 1, '2023-07-26 01:55:02', '2023-07-26 05:01:02'),
(8, 12, 'dxcfvsd', 3453.00, '2023-07-28', '2023-07-26', NULL, 1, '2023-07-26 08:22:23', '2023-07-28 03:02:48'),
(9, 12, 'werwe', 454.00, '2023-07-26', '2023-07-26', NULL, 1, '2023-07-26 08:22:23', '2023-07-26 08:24:59'),
(10, 13, 'dxcfvsd', 300.00, '2023-07-28', '2023-07-28', NULL, 1, '2023-07-28 02:28:52', '2023-07-28 04:30:49'),
(11, 14, 'dxcfvsd', 100.00, NULL, '2023-07-28', NULL, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(12, 14, 'dfg', 100.00, NULL, '2023-07-28', NULL, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(13, 14, 'dfgdfg', 100.00, '2023-07-31', '2023-07-28', NULL, 1, '2023-07-28 07:07:21', '2023-07-31 03:59:31'),
(14, 14, 'sdfsdf', 200.00, '2023-07-31', '2023-07-28', NULL, 1, '2023-07-28 07:07:21', '2023-07-31 03:12:54'),
(15, 12, 'erte', 400.00, '2023-08-02', '2023-08-02', NULL, 1, '2023-08-02 03:34:58', '2023-08-02 03:54:35'),
(16, 11, 'sdf', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 02:54:41', '2023-08-07 02:54:41'),
(17, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, '2023-08-07 02:55:45', '2023-08-07 02:55:45'),
(18, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, '2023-08-07 02:57:42', '2023-08-07 02:57:42'),
(19, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, '2023-08-07 02:59:36', '2023-08-07 02:59:36'),
(20, 25, '\'title\'', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 04:14:50', '2023-08-07 04:14:50'),
(21, 26, '\'title\'', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 04:15:57', '2023-08-07 04:15:57'),
(22, 27, 'title', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 04:17:07', '2023-08-07 04:17:07'),
(23, 28, 'title', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 04:20:29', '2023-08-07 04:20:29'),
(24, 29, 'title', 100.00, NULL, '2023-08-07', NULL, 0, '2023-08-07 05:17:36', '2023-08-07 05:17:36'),
(25, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, '2023-08-07 05:17:39', '2023-08-07 05:17:39'),
(26, 30, 'title', 100.00, '2023-08-17', '2023-08-07', 11, 1, '2023-08-07 05:18:57', '2023-08-17 11:38:42'),
(27, 30, 'milestone 2', 200.00, '2023-08-17', '2023-08-17', 12, 1, '2023-08-17 11:41:10', '2023-08-17 11:42:09'),
(28, 30, 'title 3', 300.00, '2023-08-17', '2023-08-17', 15, 1, '2023-08-17 12:08:59', '2023-08-17 12:10:29'),
(29, 30, 'title 4', 10.00, '2023-08-23', '2023-08-17', NULL, 0, '2023-08-17 12:16:12', '2023-08-23 05:03:53'),
(30, 31, 'new', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 05:31:34', '2023-08-23 05:31:34'),
(31, 32, 'sdfs', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 06:40:46', '2023-08-23 06:40:46'),
(32, 33, 'new', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 06:43:33', '2023-08-23 06:43:33'),
(33, 34, 'sdfs', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 06:44:06', '2023-08-23 06:44:06'),
(34, 35, 'new', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 06:46:23', '2023-08-23 06:46:23'),
(35, 36, 'new', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 08:12:58', '2023-08-23 08:12:58'),
(36, 37, 'new', 45.00, NULL, '2023-08-23', NULL, 0, '2023-08-23 08:14:42', '2023-08-23 08:14:42'),
(37, 11, 'sdf', 100.50, NULL, '2023-08-24', NULL, 0, '2023-08-24 07:32:47', '2023-08-24 07:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `designer_rating_reviews`
--

CREATE TABLE `designer_rating_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) NOT NULL,
  `project_name` text DEFAULT NULL,
  `meeting_name` text DEFAULT NULL,
  `customer_id` bigint(20) NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `meeting_id` bigint(20) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_rating_reviews`
--

INSERT INTO `designer_rating_reviews` (`id`, `designer_id`, `project_name`, `meeting_name`, `customer_id`, `project_id`, `meeting_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(3, 1, 'Project 101', NULL, 6, 11, NULL, 2, 'sdfs', '2023-08-09 13:25:11', '2023-08-09 13:25:11'),
(4, 1, 'Project Title', '', 6, 12, NULL, 3, 'Review', '2023-08-10 09:37:47', '2023-08-10 09:37:47'),
(5, 1, 'Project Title', '', 6, 12, NULL, 4, 'Review', '2023-08-10 09:38:54', '2023-08-10 09:38:54'),
(16, 1, 'Project Title', '', 6, 13, NULL, 2, 'sdfsd', '2023-08-10 10:05:27', '2023-08-10 10:05:27'),
(18, 1, 'sdfs', '', 6, 37, NULL, 3, 'dfg', '2023-08-24 08:58:09', '2023-08-24 08:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `designer_service_rates`
--

CREATE TABLE `designer_service_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(10) UNSIGNED NOT NULL,
  `call_rate` decimal(11,2) NOT NULL DEFAULT 0.00,
  `video_rate` decimal(11,2) NOT NULL DEFAULT 0.00,
  `online_rate` decimal(11,2) NOT NULL DEFAULT 0.00,
  `active_time_schedule` text NOT NULL DEFAULT '15',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_service_rates`
--

INSERT INTO `designer_service_rates` (`id`, `designer_id`, `call_rate`, `video_rate`, `online_rate`, `active_time_schedule`, `created_at`, `updated_at`) VALUES
(2, 1, 34.00, 347.00, 676.00, '30', '2023-07-18 22:17:44', '2023-08-21 11:36:00'),
(3, 2, 0.00, 0.00, 0.00, '30', '2023-08-01 22:02:14', '2023-08-01 22:02:14'),
(4, 3, 0.00, 0.00, 0.00, '30', '2023-08-02 08:10:16', '2023-08-02 08:10:16'),
(5, 4, 0.00, 0.00, 0.00, '30', '2023-08-03 22:26:59', '2023-08-03 22:26:59'),
(6, 5, 0.00, 0.00, 0.00, '30', '2023-08-03 22:37:38', '2023-08-03 22:37:38'),
(7, 6, 0.00, 0.00, 0.00, '30', '2023-08-03 23:06:40', '2023-08-03 23:06:40'),
(8, 7, 0.00, 0.00, 0.00, '30', '2023-08-03 23:06:52', '2023-08-03 23:06:52'),
(9, 8, 0.00, 0.00, 0.00, '30', '2023-08-03 23:16:41', '2023-08-03 23:16:41'),
(10, 10, 34.00, 347.00, 676.00, '60', '2023-08-09 08:05:34', '2023-08-09 09:02:13'),
(11, 11, 0.00, 0.00, 0.00, '30', '2023-08-20 07:06:49', '2023-08-20 07:06:49'),
(12, 12, 0.00, 0.00, 0.00, '30', '2023-08-20 08:43:12', '2023-08-20 08:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `designer_service_times`
--

CREATE TABLE `designer_service_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `slot_duration` varchar(191) NOT NULL,
  `active_slot_id` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_service_times`
--

INSERT INTO `designer_service_times` (`id`, `designer_id`, `date`, `slot_duration`, `active_slot_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-02', '15', '[\"455\",\"486\",\"506\"]', '2023-07-18 05:38:53', '2023-07-18 05:38:53'),
(2, 1, '2023-07-03', '15', '[\"450\",\"453\"]', '2023-07-18 05:38:53', '2023-08-22 06:26:14'),
(3, 1, '2023-07-04', '15', '[\"454\",\"455\",\"464\",\"470\",\"482\",\"486\"]', '2023-07-18 05:38:53', '2023-08-02 02:51:39'),
(4, 1, '2023-07-05', '15', '[\"455\",\"486\",\"506\"]', '2023-07-18 05:38:53', '2023-07-18 05:38:53'),
(5, 1, '2023-07-06', '15', '[\"455\",\"486\",\"506\"]', '2023-07-18 05:38:53', '2023-07-18 05:38:53'),
(6, 1, '2023-07-25', '15', '[\"448\",\"457\",\"459\",\"461\",\"463\",\"466\",\"471\",\"473\",\"475\",\"483\",\"485\",\"487\",\"499\",\"503\",\"507\",\"509\",\"511\",\"519\",\"528\",\"529\",\"531\"]', '2023-07-23 22:41:07', '2023-07-23 22:41:07'),
(7, 1, '2023-07-25', '60', '[\"582\",\"586\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-07-23 22:51:54'),
(8, 1, '2023-07-26', '60', '[\"582\",\"585\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-08-21 11:03:18'),
(9, 1, '2023-07-27', '60', '[\"582\",\"586\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-07-23 22:51:54'),
(10, 1, '2023-07-28', '60', '[\"582\",\"586\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-07-23 22:51:54'),
(11, 1, '2023-07-29', '60', '[\"582\",\"586\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-07-23 22:51:54'),
(12, 1, '2023-07-30', '60', '[\"582\",\"586\",\"587\",\"588\",\"592\",\"594\",\"595\",\"598\",\"602\",\"605\",\"606\"]', '2023-07-23 22:51:54', '2023-07-23 22:51:54'),
(13, 1, '2023-09-02', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(14, 1, '2023-09-03', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(15, 1, '2023-09-04', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(16, 1, '2023-09-05', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(17, 1, '2023-09-06', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(18, 1, '2023-09-07', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(19, 1, '2023-09-08', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\"]', '2023-07-26 08:07:41', '2023-07-26 08:07:41'),
(20, 1, '2023-09-09', '30', '[\"545\",\"546\",\"558\",\"560\",\"567\",\"580\"]', '2023-07-26 08:07:41', '2023-08-09 04:14:29'),
(119, 1, '2023-09-10', '15', '[\"450\",\"451\"]', '2023-08-22 06:24:29', '2023-08-22 06:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_16_064002_create_designers_table', 1),
(6, '2023_06_16_065721_create_shopkeepers_table', 1),
(7, '2023_06_16_084721_create_admins_table', 1),
(8, '2023_06_17_094130_create_product_colors_table', 2),
(9, '2023_06_17_132959_create_product_categories_table', 3),
(14, '2023_06_17_205755_create_shop_products_table', 6),
(11, '2023_06_17_205944_create_product_color_variants_table', 4),
(13, '2023_06_18_165259_create_shop_product_images_table', 5),
(15, '2023_06_19_090353_create_shopkeeper_details_table', 7),
(16, '2023_06_24_050122_create_orders_table', 8),
(17, '2023_06_24_051131_create_order_details_table', 8),
(18, '2023_06_24_075037_create_shop_orders_table', 8),
(19, '2023_07_18_063118_create_time_slots_table', 9),
(20, '2023_07_18_080145_create_designer_service_times_table', 10),
(22, '2023_07_18_120920_create_designer_service_rates_table', 11),
(24, '2023_07_19_103130_create_designer_appointment_lists_table', 12),
(25, '2023_07_24_091617_create_designer_profiles_table', 13),
(26, '2023_07_24_091717_create_designer_education_table', 13),
(27, '2023_07_24_092029_create_designer_portfolios_table', 13),
(28, '2023_07_24_092914_create_designer_experiences_table', 13),
(29, '2023_07_25_104711_create_designer_projects_table', 14),
(30, '2023_07_25_105106_create_designer_project_milestone_payments_table', 14),
(31, '2023_07_25_105128_create_designer_project_files_table', 14),
(40, '2023_07_28_094910_create_payments_table', 21),
(34, '2023_07_28_104020_create_withdrawals_table', 16),
(36, '2023_08_02_125758_create_bank_accounts_table', 17),
(37, '2023_08_07_125826_create_designer_chats_table', 18),
(38, '2023_08_08_161437_create_shop_product_rating_reviews_table', 19),
(39, '2023_08_09_183946_create_designer_rating_reviews_table', 20),
(41, '2023_08_18_164001_create_product_wish_lists_table', 22),
(42, '2023_08_18_164257_create_ar_wish_lists_table', 22),
(43, '2023_08_18_185049_create_admin_settings_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `total_price` decimal(11,2) NOT NULL,
  `shipping_price` decimal(11,2) DEFAULT 0.00,
  `total_discount` decimal(11,2) DEFAULT 0.00,
  `total_payable` decimal(11,2) NOT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `pay_by` varchar(191) DEFAULT NULL,
  `card` varchar(191) DEFAULT NULL,
  `trn_id` varchar(191) DEFAULT NULL,
  `card_last_digits` varchar(191) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `zip_code` varchar(191) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>uncompleted,1=>completed',
  `status` tinyint(4) DEFAULT 0 COMMENT '0=pending,1=processing-2=completed',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `payment_id`, `total_price`, `shipping_price`, `total_discount`, `total_payable`, `invoice_id`, `pay_by`, `card`, `trn_id`, `card_last_digits`, `first_name`, `last_name`, `address`, `city`, `state`, `zip_code`, `payment_status`, `status`, `date`, `created_at`, `updated_at`) VALUES
(7, 6, NULL, 39068.00, 0.00, 0.00, 39068.00, '34343435353', '1', '', '', '', 'kazi', 'murtuza', 'South Bypass, Shitakunda, Chittagong', 'Chittagong', 'GU', '4310', 1, 0, '2024-06-23', '2023-06-24 04:33:28', '2023-06-24 04:33:28'),
(6, 6, NULL, 112670.00, 0.00, 0.00, 112670.00, '3344554er', '1', '', '', '', 'Asak', 'khan', 'South Bypass, Shitakunda, Chittagong', 'Chittagong', 'CT', '4310', 1, 0, '2024-06-23', '2023-06-24 04:31:41', '2023-06-24 04:31:41'),
(8, 7, NULL, 39068.00, 0.00, 0.00, 39068.00, '222222222', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'GU', '6300', 1, 0, '2024-06-23', '2023-06-24 08:17:29', '2023-06-24 08:17:29'),
(9, 6, NULL, 39068.00, 0.00, 0.00, 39068.00, '1687631930', '1', '', '', '', NULL, NULL, 'South Bypass, Shitakunda, Chittagong', 'Chittagong', 'AS', '4310', 1, 0, '2024-06-23', '2023-06-24 12:38:50', '2023-06-24 12:38:50'),
(12, 6, NULL, 12000.00, 0.00, 0.00, 12000.00, '1690890546', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 1, 0, '2001-08-23', '2023-08-01 05:49:06', '2023-08-01 05:49:06'),
(13, 6, NULL, 8000.00, 0.00, 0.00, 8000.00, '1690949165', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AZ', '1207', 1, 0, '2002-08-23', '2023-08-01 22:06:05', '2023-08-01 22:06:05'),
(14, 6, NULL, 4000.00, 0.00, 0.00, 4000.00, '1690949498', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 1, 0, '2002-08-23', '2023-08-01 22:11:38', '2023-08-01 22:11:38'),
(15, 6, NULL, 4000.00, 0.00, 0.00, 4000.00, '1690950351', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AS', '6300', 1, 0, '2023-08-02', '2023-08-01 22:25:51', '2023-08-01 22:25:51'),
(16, 6, NULL, 4000.00, 0.00, 0.00, 4000.00, '1690951171', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GA', '1207', 1, 0, '2023-08-02', '2023-08-01 22:39:31', '2023-08-01 22:39:31'),
(17, 6, NULL, 200.00, 0.00, 0.00, 200.00, '1690977510', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AZ', '1207', 1, 0, '2023-08-02', '2023-08-02 05:58:30', '2023-08-02 05:58:30'),
(18, 6, NULL, 200.00, 0.00, 0.00, 200.00, '1690977541', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AZ', '1207', 1, 0, '2023-08-02', '2023-08-02 05:59:01', '2023-08-02 05:59:01'),
(19, 6, NULL, 200.00, 0.00, 0.00, 200.00, '1690977580', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AZ', '1207', 1, 0, '2023-08-02', '2023-08-02 05:59:40', '2023-08-02 05:59:40'),
(20, 6, NULL, 69148.00, 0.00, 0.00, 69148.00, '1690977674', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 1, 0, '2023-08-02', '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(21, 6, NULL, 40.00, 0.00, 0.00, 40.00, '1690977793', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AR', '1207', 1, 0, '2023-08-02', '2023-08-02 06:03:13', '2023-08-02 06:03:13'),
(22, 6, NULL, 40.00, 0.00, 0.00, 40.00, '1690977894', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AR', '1207', 1, 0, '2023-08-02', '2023-08-02 06:04:54', '2023-08-02 06:04:54'),
(23, 6, NULL, 80.00, 0.00, 0.00, 80.00, '1690977933', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'CO', '1207', 1, 0, '2023-08-02', '2023-08-02 06:05:33', '2023-08-02 06:05:33'),
(24, 6, NULL, 40.00, 0.00, 0.00, 40.00, '1690977982', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AZ', '1207', 1, 0, '2023-08-02', '2023-08-02 06:06:22', '2023-08-02 06:06:22'),
(25, 6, NULL, 100.00, 0.00, 0.00, 100.00, '1690978239', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'GA', '6300', 1, 0, '2023-08-02', '2023-08-02 06:10:39', '2023-08-02 06:10:39'),
(26, 6, NULL, 120.00, 0.00, 0.00, 120.00, '1691048004', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'FM', 'sdfsd', 1, 0, '2023-08-03', '2023-08-03 01:33:24', '2023-08-03 01:33:24'),
(27, 6, NULL, 145.00, 0.00, 0.00, 145.00, '1691050313', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'ID', 'sdfsd', 1, 0, '2023-08-03', '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(28, 6, NULL, 5000.00, 0.00, 0.00, 5000.00, '1691052522', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'AS', 'sdfsd', 1, 0, '2023-08-03', '2023-08-03 02:48:42', '2023-08-03 02:48:42'),
(29, 6, NULL, 22000.00, 0.00, 0.00, 22000.00, '1691067292', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 1, 0, '2023-08-03', '2023-08-03 06:54:52', '2023-08-03 06:54:52'),
(30, 6, 18, 675.00, 0.00, 0.00, 675.00, '1692278418', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 1, 0, '2023-08-17', '2023-08-17 13:20:18', '2023-08-17 13:21:36'),
(31, 6, 19, 675.00, 0.00, 0.00, 675.00, '1692278722', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GA', '1207', 1, 0, '2023-08-17', '2023-08-17 13:25:22', '2023-08-17 13:26:44'),
(32, 6, 20, 675.00, 0.00, 0.00, 675.00, '1692278865', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GA', '1207', 1, 0, '2023-08-17', '2023-08-17 13:27:45', '2023-08-17 13:28:59'),
(33, 6, NULL, 170.00, 21.00, 0.00, 191.00, '1692596856', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GA', 'sdfsd', 0, 0, '2023-08-21', '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(34, 6, NULL, 170.00, 21.00, 0.00, 191.00, '1692608588', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AZ', 'sdfsd', 0, 0, '2023-08-21', '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(35, 6, NULL, 170.00, 21.00, 0.00, 191.00, '1692608922', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'GU', 'sdfsd', 0, 0, '2023-08-21', '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(36, 6, NULL, 170.00, 21.00, 0.00, 191.00, '1692625822', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-08-21', '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(37, 6, NULL, 79.00, 3.00, 0.00, 82.00, '1692679291', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AK', 'sdfsd', 0, 0, '2023-08-22', '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(38, 6, NULL, 79.00, 3.00, 0.00, 82.00, '1692679328', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AK', 'sdfsd', 0, 0, '2023-08-22', '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(39, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10039', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:43:26', '2023-08-22 10:43:26'),
(40, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10040', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:44:13', '2023-08-22 10:44:13'),
(41, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10041', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:45:15', '2023-08-22 10:45:15'),
(42, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10042', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(43, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10043', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(44, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10044', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(45, 6, NULL, 119.00, 6.00, 0.00, 119.00, '10045', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GA', 'sdfsd', 0, 0, '2023-08-22', '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(46, 6, NULL, 110.00, 20.00, 0.00, 110.00, '10046', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip', 0, 0, '2023-08-22', '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(47, 6, NULL, 94.00, 4.00, 0.00, 94.00, '10047', '0', '', '', '', NULL, NULL, 'address', 'city', 'state', 'zip_code', 0, 0, '2023-08-22', '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(48, 6, NULL, 119.00, 6.00, 0.00, 119.00, '10048', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'sdfsd', 0, 0, '2023-08-22', '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(49, 6, NULL, 45.00, 0.00, 0.00, 45.00, '10049', '1', '', '', '', NULL, NULL, 'sdf', 'sdaf', 'DE', 'sdfsd', 0, 0, '2023-08-23', '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(50, 6, NULL, 90.00, 0.00, 0.00, 90.00, '10050', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AS', '6300', 0, 0, '2023-08-23', '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(51, 6, 41, 90.00, 0.00, 0.00, 90.00, '10051', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AS', '6300', 1, 0, '2023-08-23', '2023-08-23 06:57:47', '2023-08-23 06:59:08'),
(52, 6, 42, 45.00, 0.00, 0.00, 45.00, '10052', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GA', '6300', 1, 0, '2023-08-23', '2023-08-23 07:10:48', '2023-08-23 07:21:47'),
(53, 6, NULL, 124.00, 0.00, 0.00, 124.00, '10053', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AK', 'sdfsd', 0, 0, '2023-08-25', '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(54, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10054', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GU', '1207', 0, 0, '2023-08-25', '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(55, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10055', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 0, 0, '2023-08-25', '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(56, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10056', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 0, 0, '2023-08-25', '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(57, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10057', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'AK', '1207', 0, 0, '2023-08-25', '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(58, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10058', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-25', '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(59, 6, NULL, 124.00, 0.00, 0.00, 124.00, '10059', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AK', 'sdfsd', 0, 0, '2023-08-25', '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(60, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10060', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-08-25', '2023-08-25 08:53:49', '2023-08-25 08:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `shop_order_id` int(11) NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `unit_price` decimal(11,2) NOT NULL,
  `total_payable` decimal(11,2) NOT NULL,
  `unit_cost` decimal(11,2) NOT NULL,
  `service_charge` decimal(11,2) DEFAULT NULL,
  `quantity` decimal(11,2) NOT NULL,
  `discount` decimal(11,2) NOT NULL,
  `shipping_price` decimal(11,2) NOT NULL,
  `color_variant_id` bigint(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `shop_order_id`, `shop_id`, `product_id`, `unit_price`, `total_payable`, `unit_cost`, `service_charge`, `quantity`, `discount`, `shipping_price`, `color_variant_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 6, 5, 12, 39, 4534.00, 3784.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:31:41', '2023-06-24 04:31:41'),
(3, 6, 5, 12, 38, 34534.00, 2334.00, 0.00, NULL, 3.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:31:41', '2023-06-24 04:31:41'),
(5, 7, 6, 12, 38, 34534.00, 38774.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:33:28', '2023-06-24 04:33:28'),
(6, 7, 6, 12, 39, 4534.00, 309.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:33:28', '2023-06-24 04:33:28'),
(7, 8, 7, 12, 38, 34534.00, 34534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 08:17:29', '2023-06-24 08:17:29'),
(8, 8, 7, 12, 39, 4534.00, 4534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 08:17:29', '2023-06-24 08:17:29'),
(9, 9, 8, 12, 38, 34534.00, 34534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 12:38:50', '2023-06-24 12:38:50'),
(10, 9, 8, 12, 39, 4534.00, 4534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 12:38:50', '2023-06-24 12:38:50'),
(11, 10, 9, 10, 41, 34.00, 34.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:37:41', '2023-08-01 05:37:41'),
(12, 11, 10, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:38:45', '2023-08-01 05:38:45'),
(13, 12, 11, 10, 43, 4000.00, 12000.00, 0.00, NULL, 3.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:49:06', '2023-08-01 05:49:06'),
(14, 13, 12, 10, 43, 4000.00, 8000.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:06:05', '2023-08-01 22:06:05'),
(15, 14, 13, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:11:38', '2023-08-01 22:11:38'),
(16, 15, 14, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:25:51', '2023-08-01 22:25:51'),
(17, 16, 15, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:39:31', '2023-08-01 22:39:31'),
(18, 19, 18, 10, 43, 50.00, 200.00, 0.00, NULL, 4.00, 0.00, 0.00, 0, NULL, '2023-08-02 05:59:40', '2023-08-02 05:59:40'),
(19, 20, 19, 10, 43, 40.00, 80.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(20, 20, 20, 12, 38, 34534.00, 69068.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(21, 22, 22, 10, 43, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:04:54', '2023-08-02 06:04:54'),
(22, 23, 23, 10, 43, 40.00, 80.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:05:33', '2023-08-02 06:05:33'),
(23, 24, 24, 10, 43, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:06:22', '2023-08-02 06:06:22'),
(24, 25, 25, 10, 43, 50.00, 100.00, 0.00, NULL, 2.00, 0.00, 0.00, 37, NULL, '2023-08-02 06:10:39', '2023-08-02 06:10:39'),
(25, 26, 26, 10, 63, 40.00, 120.00, 0.00, NULL, 3.00, 0.00, 0.00, NULL, NULL, '2023-08-03 01:33:24', '2023-08-03 01:33:24'),
(26, 27, 27, 10, 63, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, NULL, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(27, 27, 27, 10, 56, 45.00, 45.00, 0.00, NULL, 1.00, 0.00, 0.00, 46, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(28, 27, 27, 10, 52, 30.00, 60.00, 0.00, NULL, 2.00, 0.00, 0.00, NULL, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(29, 28, 28, 10, 64, 5000.00, 5000.00, 0.00, NULL, 1.00, 0.00, 0.00, 54, NULL, '2023-08-03 02:48:42', '2023-08-03 02:48:42'),
(30, 29, 29, 10, 60, 3000.00, 21000.00, 0.00, NULL, 7.00, 0.00, 0.00, 49, NULL, '2023-08-03 06:54:52', '2023-08-03 06:54:52'),
(31, 29, 29, 10, 60, 1000.00, 1000.00, 0.00, NULL, 1.00, 0.00, 0.00, 51, NULL, '2023-08-03 06:54:52', '2023-08-03 06:54:52'),
(32, 30, 30, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:20:18', '2023-08-17 13:20:18'),
(33, 31, 31, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:25:22', '2023-08-17 13:25:22'),
(34, 32, 32, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:27:45', '2023-08-17 13:27:45'),
(35, 33, 33, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(36, 33, 33, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(37, 34, 34, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(38, 34, 34, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(39, 35, 35, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(40, 35, 35, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(41, 36, 36, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(42, 36, 36, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(43, 37, 37, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(44, 37, 37, 10, 74, 34.00, 37.00, 0.00, 1.11, 1.00, 0.00, 3.00, 79, NULL, '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(45, 38, 38, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(46, 38, 38, 10, 74, 34.00, 37.00, 0.00, 1.11, 1.00, 0.00, 3.00, 79, NULL, '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(47, 42, 41, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(48, 43, 42, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(49, 44, 43, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(50, 45, 44, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(51, 45, 44, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(52, 46, 45, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(53, 47, 46, 10, 40, 45.00, 94.00, 0.00, 2.82, 2.00, 0.00, 4.00, 68, NULL, '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(54, 48, 47, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(55, 48, 47, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(56, 49, 48, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(57, 50, 49, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(58, 51, 50, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:57:47', '2023-08-23 06:57:47'),
(59, 52, 51, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-23 07:10:48', '2023-08-23 07:10:48'),
(60, 53, 52, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(61, 53, 52, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(62, 54, 53, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(63, 54, 53, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(64, 55, 54, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(65, 55, 54, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(66, 56, 55, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(67, 56, 55, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(68, 57, 56, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(69, 57, 56, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(70, 58, 57, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(71, 58, 57, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(72, 59, 58, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(73, 59, 58, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(74, 60, 59, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:53:49', '2023-08-25 08:53:49'),
(75, 60, 59, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:53:49', '2023-08-25 08:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector_type` tinyint(4) NOT NULL COMMENT '0=designer 1=shop',
  `payment_for` tinyint(4) NOT NULL COMMENT '0=shop 1=meeting 2=project',
  `shop_order_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `designer_id` bigint(20) DEFAULT NULL,
  `meeting_id` bigint(20) DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `project_milestone_id` bigint(20) DEFAULT NULL,
  `id_no` varchar(191) DEFAULT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `trn_charge_amount` decimal(8,2) DEFAULT NULL,
  `service_charge_amount` decimal(8,2) DEFAULT NULL,
  `trn_id` varchar(191) DEFAULT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `result` varchar(191) DEFAULT NULL,
  `post_date` varchar(191) DEFAULT NULL,
  `card_type` varchar(191) DEFAULT NULL,
  `ref` varchar(191) DEFAULT NULL,
  `track_id` varchar(191) DEFAULT NULL,
  `order_id` varchar(191) DEFAULT NULL,
  `cust_ref` varchar(191) DEFAULT NULL,
  `trn_udf` varchar(191) DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `sector_type`, `payment_for`, `shop_order_id`, `user_id`, `designer_id`, `meeting_id`, `project_id`, `project_milestone_id`, `id_no`, `total_amount`, `trn_charge_amount`, `service_charge_amount`, `trn_id`, `payment_id`, `result`, `post_date`, `card_type`, `ref`, `track_id`, `order_id`, `cust_ref`, `trn_udf`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 6, 1, 13, NULL, NULL, '10001', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:44:09', '2023-08-17 09:44:09'),
(2, 1, 2, NULL, 6, 1, 14, NULL, NULL, '10002', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:44:24', '2023-08-17 09:44:24'),
(3, 1, 2, NULL, 6, 1, 15, NULL, NULL, '10003', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:45:06', '2023-08-17 09:45:06'),
(4, 1, 2, NULL, 6, 1, 16, NULL, NULL, '10004', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:46:35', '2023-08-17 09:46:35'),
(5, 1, 2, NULL, 6, 1, 17, NULL, NULL, '10005', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:51:11', '2023-08-17 09:51:11'),
(6, 1, 2, NULL, 6, 1, 18, NULL, NULL, '10006', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:56:40', '2023-08-17 09:56:40'),
(7, 1, 2, NULL, 6, 1, 19, NULL, NULL, '10007', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:58:10', '2023-08-17 09:58:10'),
(8, 1, 2, NULL, 6, 1, 20, NULL, NULL, '10008', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:59:24', '2023-08-17 09:59:24'),
(9, 1, 2, NULL, 6, 1, 21, NULL, NULL, '10009', 23.00, NULL, 0.00, NULL, '100322901000007160', 'CANCELED', NULL, NULL, NULL, '3b403ad212e1276573cd49426a719e8d', '10009', NULL, NULL, '2023-08-17', '2023-08-17 10:01:04', '2023-08-17 10:32:36'),
(10, 1, 2, NULL, 6, 1, 22, NULL, NULL, '10010', 23.00, NULL, 0.00, NULL, '100322901000008142', 'CANCELED', NULL, NULL, NULL, '692a94613dc8e232ddd1f8df474b1004', '10010', NULL, NULL, '2023-08-17', '2023-08-17 10:42:33', '2023-08-17 10:43:25'),
(11, 1, 3, NULL, 6, 1, NULL, 30, 26, '10011', 100.00, NULL, 100.00, NULL, '100322901000009491', 'CANCELED', NULL, NULL, NULL, '2cd6887a01fdb3753c1d8589faa8bfd1', '10011', NULL, NULL, '2023-08-17', '2023-08-17 11:22:17', '2023-08-17 11:32:25'),
(12, 1, 3, NULL, 6, 1, NULL, 30, 27, '10012', 200.00, NULL, 200.00, NULL, '100322901000009896', 'CANCELED', NULL, NULL, NULL, 'ef641c5adc1f5cbe2097f4557eba743a', '10012', NULL, NULL, '2023-08-17', '2023-08-17 11:41:20', '2023-08-17 11:42:09'),
(13, 1, 2, NULL, 6, 1, 23, NULL, NULL, '10013', 80.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 11:54:22', '2023-08-17 11:54:22'),
(14, 1, 2, NULL, 6, 1, 24, NULL, NULL, '10014', 80.00, NULL, 0.00, '322901000696472', '100322901000010906', 'CAPTURED', '0818', NULL, '322901000514', 'ddc54478c34ac61dc74c02393573e54f', '10014', NULL, NULL, '2023-08-17', '2023-08-17 12:06:08', '2023-08-17 12:08:06'),
(15, 1, 3, NULL, 6, 1, NULL, 30, 28, '10015', 300.00, NULL, 300.00, '322901000698447', '100322901000010988', 'CAPTURED', '0818', NULL, '322901000515', 'acfcf178178530916f1256c0a3036ff1', '10015', NULL, NULL, '2023-08-17', '2023-08-17 12:09:13', '2023-08-17 12:10:29'),
(16, 1, 3, NULL, 6, 1, NULL, 30, 29, '10016', 10.00, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 12:16:18', '2023-08-17 12:16:18'),
(17, 1, 3, NULL, 6, 1, NULL, 30, 29, '10017', 10.00, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 12:24:29', '2023-08-17 12:24:29'),
(18, 2, 1, 30, 6, NULL, NULL, NULL, NULL, '10018', 675.00, NULL, 0.00, '322901000767341', '100322901000012888', 'CAPTURED', '0818', NULL, '322901000609', '789bd6096c0a2d2f0e281dab3e8d6a2b', '10018', NULL, NULL, '2023-08-17', '2023-08-17 13:20:18', '2023-08-17 13:21:36'),
(19, 2, 1, 31, 6, NULL, NULL, NULL, NULL, '10019', 675.00, NULL, 0.00, '322901000772559', '100322901000013036', 'CAPTURED', '0818', NULL, '322901000618', '5cbbfd1ca5198dc9a1f4f1c7f334eb32', '10019', NULL, NULL, '2023-08-17', '2023-08-17 13:25:22', '2023-08-17 13:26:44'),
(20, 2, 1, 32, 6, NULL, NULL, NULL, NULL, '10020', 675.00, NULL, 0.00, '322901000774256', '100322901000013087', 'CAPTURED', '0818', NULL, '322901000622', 'a6f76b5d03dd62b8bc1dff84ec721185', '10020', NULL, NULL, '2023-08-17', '2023-08-17 13:27:45', '2023-08-17 13:28:59'),
(21, 1, 3, NULL, 6, 1, NULL, 30, 29, '10021', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 11:56:37', '2023-08-20 11:56:37'),
(22, 1, 3, NULL, 6, 1, NULL, 30, 29, '10022', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 11:57:34', '2023-08-20 11:57:34'),
(23, 1, 3, NULL, 6, 1, NULL, 30, 29, '10023', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 12:02:56', '2023-08-20 12:02:56'),
(24, 1, 3, NULL, 6, 1, NULL, 30, 29, '10024', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 12:10:07', '2023-08-20 12:10:07'),
(25, 2, 1, 33, 6, NULL, NULL, NULL, NULL, '10025', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(26, 2, 1, 34, 6, NULL, NULL, NULL, NULL, '10026', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(27, 2, 1, 35, 6, NULL, NULL, NULL, NULL, '10027', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(28, 2, 1, 36, 6, NULL, NULL, NULL, NULL, '10028', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(29, 2, 1, 37, 6, NULL, NULL, NULL, NULL, '10029', 82.00, NULL, 2.46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(30, 2, 1, 38, 6, NULL, NULL, NULL, NULL, '10030', 82.00, NULL, 2.46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(31, 2, 1, 42, 6, NULL, NULL, NULL, NULL, '10031', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(32, 2, 1, 43, 6, NULL, NULL, NULL, NULL, '10032', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(33, 2, 1, 44, 6, NULL, NULL, NULL, NULL, '10033', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(34, 2, 1, 45, 6, NULL, NULL, NULL, NULL, '10034', 119.00, NULL, 3.57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(35, 2, 1, 46, 6, NULL, NULL, NULL, NULL, '10035', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(36, 2, 1, 47, 6, NULL, NULL, NULL, NULL, '10036', 94.00, NULL, 2.82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(37, 2, 1, 48, 6, NULL, NULL, NULL, NULL, '10037', 119.00, NULL, 3.57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(38, 1, 3, NULL, 6, 1, NULL, 30, 29, '10038', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 05:03:53', '2023-08-23 05:03:53'),
(39, 2, 1, 49, 6, NULL, NULL, NULL, NULL, '10039', 45.00, NULL, 1.35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(40, 2, 1, 50, 6, NULL, NULL, NULL, NULL, '10040', 90.00, NULL, 2.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(41, 2, 1, 51, 6, NULL, NULL, NULL, NULL, '10041', 90.00, NULL, 2.70, '323501001210320', '100323501000003182', 'CAPTURED', '0823', NULL, '323501000184', 'a9ee08817e20d43429c412116e47673d', '10041', NULL, NULL, '2023-08-23', '2023-08-23 06:57:47', '2023-08-23 06:59:08'),
(42, 2, 1, 52, 6, NULL, NULL, NULL, NULL, '10042', 45.00, NULL, 1.35, '323501001242658', '100323501000003543', 'CAPTURED', '0823', NULL, '323501000214', '80c2cf35fbe2fc8fa29094708bb60395', '10042', NULL, NULL, '2023-08-23', '2023-08-23 07:10:48', '2023-08-23 07:21:47'),
(43, 2, 1, 53, 6, NULL, NULL, NULL, NULL, '10043', 124.00, NULL, 3.72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(44, 2, 1, 54, 6, NULL, NULL, NULL, NULL, '10044', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(45, 2, 1, 55, 6, NULL, NULL, NULL, NULL, '10045', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(46, 2, 1, 56, 6, NULL, NULL, NULL, NULL, '10046', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(47, 2, 1, 57, 6, NULL, NULL, NULL, NULL, '10047', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(48, 2, 1, 58, 6, NULL, NULL, NULL, NULL, '10048', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(49, 2, 1, 59, 6, NULL, NULL, NULL, NULL, '10049', 124.00, NULL, 3.72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(50, 2, 1, 60, 6, NULL, NULL, NULL, NULL, '10050', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:53:49', '2023-08-25 08:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(31, 'App\\Models\\Designer', 1, 'mobile', '6382b8237cb4da9a71a4cf122f4817d1c910df66c6d8503d9bedad1a9ebb50fc', '[\"role:designer\"]', NULL, NULL, '2023-08-22 06:05:04', '2023-08-22 06:05:04'),
(30, 'App\\Models\\Shopkeeper', 10, 'mobile', '643f3dde16970d43b6e85ac91c300d63b353ab1ea6476ee2fc2656ab307812b7', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-22 04:31:33', '2023-08-22 04:31:33'),
(29, 'App\\Models\\User', 6, 'mobile', '7ae910e74a8e32010880c457b64904d68cfbfe45f96bba9d3108776f307b0c15', '[\"role:generalUser\"]', '2023-08-22 06:12:23', NULL, '2023-08-21 11:37:19', '2023-08-22 06:12:23'),
(28, 'App\\Models\\Designer', 1, 'mobile', '683eee278fc752aeadf00de6f17677cc1aed135206931a5f3522c696e26f34b3', '[\"role:designer\"]', '2023-08-21 11:36:53', NULL, '2023-08-20 10:56:48', '2023-08-21 11:36:53'),
(27, 'App\\Models\\User', 6, 'mobile', '3f0ce682695cabaebde0cb90658587160109d996205d3c8524ae850a2f780a82', '[\"role:generalUser\"]', '2023-08-20 10:56:11', NULL, '2023-08-18 12:03:11', '2023-08-20 10:56:11'),
(26, 'App\\Models\\User', 6, 'mobile', '7b58df168f154a4cc054fd6fb7119bc1b6cec93f6d0edeb51473d82208fba749', '[\"role:generalUser\"]', NULL, NULL, '2023-08-18 12:03:10', '2023-08-18 12:03:10'),
(25, 'App\\Models\\User', 6, 'mobile', '04306426380fec4bcdfa88c64133082db88cc0624b98bf9e53c4a1764d44a506', '[\"role:generalUser\"]', '2023-08-18 12:02:31', NULL, '2023-08-18 12:01:14', '2023-08-18 12:02:31'),
(24, 'App\\Models\\User', 6, 'mobile', '9202579a525ac9f7a481c20835d8ef40653b46f46fc459f8b1694422867858cc', '[\"role:generalUser\"]', NULL, NULL, '2023-08-11 05:53:12', '2023-08-11 05:53:12'),
(23, 'App\\Models\\Shopkeeper', 10, 'mobile', '48eefd502d7129b59847ec04bb4103aac757a9a28f81df2fb7e138bd5829fa06', '[\"role:shopkeeper\"]', '2023-08-18 12:01:08', NULL, '2023-08-10 13:15:32', '2023-08-18 12:01:08'),
(22, 'App\\Models\\Shopkeeper', 18, 'mobile', '379d6660fc498937db5d5490d6bd0c99d741bb50a92c026432b1202f59be20b3', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-10 12:16:27', '2023-08-10 12:16:27'),
(21, 'App\\Models\\Shopkeeper', 18, 'mobile', 'bc7c6fe7898e8c5a664a4dd45328326340fcf548ca164add56a5a265d51c777a', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-10 12:15:22', '2023-08-10 12:15:22'),
(20, 'App\\Models\\Shopkeeper', 17, 'mobile', 'ae7743fa7e21f0c1d06b82723cf43c4f83a501b5a48ea13b851df407337a1910', '[\"role:shopkeeper\"]', '2023-08-10 13:14:37', NULL, '2023-08-10 11:52:38', '2023-08-10 13:14:37'),
(19, 'App\\Models\\Designer', 1, 'mobile', '4646d4c1e9e7dbcb8c55e2d8ffa9062fa1f8e1f7a4bc2f2e2e8ba7f386682d57', '[\"role:designer\"]', '2023-08-10 12:12:05', NULL, '2023-08-09 11:47:26', '2023-08-10 12:12:05'),
(18, 'App\\Models\\Designer', 1, 'mobile', 'c36c240514b9387866c1fa53d22020b643071544b805cf2550a42ec1c1cb00d7', '[\"role:designer\"]', NULL, NULL, '2023-08-09 11:44:56', '2023-08-09 11:44:56'),
(32, 'App\\Models\\Designer', 1, 'mobile', 'b49fe91142c9a8de5698d638768ac0f2a7b234303e0edded6deae31d96431290', '[\"role:designer\"]', '2023-08-22 07:44:06', NULL, '2023-08-22 06:09:46', '2023-08-22 07:44:06'),
(33, 'App\\Models\\Shopkeeper', 10, 'mobile', '594c39d063258332168f8fe0e9a8683907fdab98ff778e5bfa0409c78bed9e94', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-22 06:36:04', '2023-08-22 06:36:04'),
(34, 'App\\Models\\Shopkeeper', 10, 'mobile', 'c60b5a5d111d3a5bb2469f29a949984b1d5593cce82398a77a22246f70290d23', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-22 06:37:34', '2023-08-22 06:37:34'),
(35, 'App\\Models\\Shopkeeper', 10, 'mobile', '60fcde23d9c1c66c71fa8747b00ef8ce72660c774130a08e1bc506c75471c42e', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-22 06:37:36', '2023-08-22 06:37:36'),
(36, 'App\\Models\\User', 6, 'mobile', '450ae4c2232e778f9ab735d01a8ecfa288da0717468381e2480a900a11dc8507', '[\"role:generalUser\"]', NULL, NULL, '2023-08-22 07:43:17', '2023-08-22 07:43:17'),
(37, 'App\\Models\\User', 6, 'mobile', '640ea048f7705b7459a14e728c85e2f538a8ce81ffbfc891d6cf1992f6285a43', '[\"role:generalUser\"]', '2023-08-25 07:51:15', NULL, '2023-08-22 07:45:06', '2023-08-25 07:51:15'),
(38, 'App\\Models\\Designer', 1, 'mobile', 'a6b137805a8ef1c9f1db2d943d41903042d622759630bb7cc738ba2d079c96cc', '[\"role:designer\"]', '2023-08-24 07:01:45', NULL, '2023-08-24 06:09:31', '2023-08-24 07:01:45'),
(39, 'App\\Models\\Designer', 1, 'mobile', 'e686a0d01c46b106fbb5e2b5f0a4e563a1be6506676256e5087da8dd6d5fd9f9', '[\"role:designer\"]', '2023-08-24 12:21:10', NULL, '2023-08-24 09:37:02', '2023-08-24 12:21:10'),
(40, 'App\\Models\\Designer', 1, 'mobile', 'c2e52ac8bc281b802f1e63ee0bad6a9946c7e543494f2d116513e07f9a92e6ae', '[\"role:designer\"]', '2023-08-24 12:29:52', NULL, '2023-08-24 12:22:07', '2023-08-24 12:29:52'),
(41, 'App\\Models\\User', 6, 'mobile', 'cb203ad57abc9f70cc1fffbd0d5deb9fef7cba01685878abbcfc5b5f3c891bff', '[\"role:generalUser\"]', '2023-08-25 08:06:09', NULL, '2023-08-24 12:30:12', '2023-08-25 08:06:09'),
(42, 'App\\Models\\User', 6, 'mobile', 'f3acf5703b58f544b407659328674f7d7961bca73bb5f2e6b6bff86da30e1dcd', '[\"role:generalUser\"]', '2023-08-25 06:07:01', NULL, '2023-08-25 06:06:27', '2023-08-25 06:07:01'),
(43, 'App\\Models\\User', 6, 'mobile', 'adbbae41928d41432d486f531ba6c45a9346f8cded0e3954586cf10764fe8701', '[\"role:generalUser\"]', '2023-08-25 10:11:43', NULL, '2023-08-25 08:12:14', '2023-08-25 10:11:43'),
(44, 'App\\Models\\Shopkeeper', 10, 'mobile', 'b55919a674c163c4bc9177da966507a220595105b9cf53bee5208cc2beb099cb', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-25 08:23:09', '2023-08-25 08:23:09'),
(45, 'App\\Models\\Shopkeeper', 10, 'mobile', 'f68a5380a8bc2429009e7d19013191f9634044178ee82706d068dbd1647a0d55', '[\"role:shopkeeper\"]', '2023-08-25 09:15:01', NULL, '2023-08-25 08:23:24', '2023-08-25 09:15:01'),
(46, 'App\\Models\\Shopkeeper', 10, 'mobile', 'fb8232ef714e6d901bdbd86555f7ab0745dffd57b74e0ce6df844ca47d423298', '[\"role:shopkeeper\"]', '2023-08-25 10:07:45', NULL, '2023-08-25 09:27:13', '2023-08-25 10:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home Furniture', 1, '2023-06-17 08:10:21', '2023-06-17 08:22:52'),
(2, 'Office Furniture', 1, '2023-06-17 08:10:21', '2023-06-17 08:23:05'),
(3, 'sdfsdf', 1, '2023-06-18 12:31:40', '2023-06-18 12:31:40'),
(4, 'sdf sdfsdf', 1, '2023-06-18 12:31:40', '2023-06-18 12:32:03'),
(5, 'sdfg', 1, '2023-07-31 07:12:20', '2023-07-31 07:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `color_code` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `name`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 'Red', '#ca6a1c', '2023-06-17 03:53:36', '2023-06-19 15:58:55'),
(2, 'Black', '#000000', '2023-06-17 03:53:36', '2023-06-17 04:45:43'),
(3, 'yellow', '#b1b27b', '2023-06-17 03:53:36', '2023-06-19 13:50:50'),
(4, 'sdfsdf', '#8f2d2d', '2023-06-17 04:33:39', '2023-06-17 04:33:39'),
(5, 'Blue', '#98acdd', '2023-06-17 04:40:13', '2023-06-19 13:51:32'),
(6, 'Green', '#a0fdd9', '2023-06-17 04:40:30', '2023-06-19 14:02:07'),
(7, 'blue', '#4fc9b5', '2023-06-18 12:30:57', '2023-06-18 12:30:57'),
(8, 'green', '#6bb878', '2023-06-18 12:30:57', '2023-06-18 12:30:57'),
(9, 'sdff', '#c23838', '2023-06-18 12:30:57', '2023-06-18 12:30:57'),
(10, 'light black', '#903131', '2023-06-18 12:30:57', '2023-06-18 12:31:29'),
(11, 'rr', '#000000', '2023-06-19 15:59:00', '2023-06-19 15:59:00'),
(12, 'nullColor', '#000000', '2023-08-11 10:07:24', '2023-08-11 10:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_color_variants`
--

CREATE TABLE `product_color_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `color_id` bigint(20) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color_variants`
--

INSERT INTO `product_color_variants` (`id`, `product_id`, `color_id`, `price`, `created_at`, `updated_at`) VALUES
(81, 75, 4, 34.00, '2023-08-22 13:49:03', '2023-08-22 13:49:03'),
(80, 75, 2, 34.00, '2023-08-22 13:49:03', '2023-08-22 13:49:03'),
(68, 40, 1, 45.00, '2023-08-18 06:53:55', '2023-08-18 06:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_wish_lists`
--

CREATE TABLE `product_wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wish_lists`
--

INSERT INTO `product_wish_lists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 6, 40, '2023-08-18 11:11:46', '2023-08-18 11:11:46'),
(2, 6, 41, '2023-08-18 11:20:58', '2023-08-18 11:20:58'),
(3, 6, 71, '2023-08-18 11:21:47', '2023-08-18 11:21:47'),
(4, 6, 64, '2023-08-18 11:21:52', '2023-08-18 11:21:52'),
(5, 6, 72, '2023-08-22 07:45:40', '2023-08-22 07:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeepers`
--

CREATE TABLE `shopkeepers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `avg_rating` decimal(11,2) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `project_charge_rate` decimal(11,2) DEFAULT NULL,
  `meeting_charge_rate` decimal(11,0) DEFAULT NULL,
  `product_charge_rate` decimal(11,0) DEFAULT NULL,
  `is_authentic` varchar(191) DEFAULT '0',
  `is_approved` tinyint(4) DEFAULT 0,
  `id_no` text DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `approved_data` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`id`, `name`, `avg_rating`, `email`, `project_charge_rate`, `meeting_charge_rate`, `product_charge_rate`, `is_authentic`, `is_approved`, `id_no`, `is_deleted`, `status`, `approved_data`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(10, 'shop', 3.25, 'shop@gmail.com', NULL, NULL, NULL, '1', 1, NULL, 0, 1, NULL, '2023-06-20 15:24:58', '$2y$10$zWpLY.8R7g95yBk.TYpkaeGIIZJgsk2tufyub8HoSktiLktk/.15u', '2023-06-20 15:23:13', '2023-08-21 12:26:12'),
(11, 'kazi', NULL, 'shop11@gmail.com', NULL, NULL, NULL, '0', 0, NULL, 0, 1, NULL, NULL, '$2y$10$cD.8ejkvpnpmQ2TPxBaqGuzCOcrHwy4cqPetcl7Jb9WjV5P62lNRa', '2023-06-23 13:12:39', '2023-08-20 07:51:48'),
(8, 'shop2', NULL, 'shop2@gmail.com', 30.00, 2, 3, '1', 1, NULL, 0, 1, '2023-06-28', NULL, '$2y$10$9nmXBjUUOH6RXn4.zWBgOumttNoCIBI62DOVHVKcgaiVaitjwRf7K', '2023-06-20 14:47:54', '2023-08-20 07:51:48'),
(12, 'kazi', NULL, 'shop11@gmail.com', 30.00, 2, 30, '1', 1, NULL, 0, 1, '2023-06-28', '2023-06-23 13:14:11', '$2y$10$ECMohNjbTSzGGzbxHox4yetCUdF0m4NAMJzIA1kzmCtWYh3SNb5cu', '2023-06-23 13:12:44', '2023-08-20 10:28:40'),
(13, 'shop400', NULL, 'shop400@gmail.com', NULL, NULL, NULL, '0', 0, NULL, 0, 1, NULL, NULL, '$2y$10$v.f8lPM8jef7Hu2vuGZFMOsheNtQF1it9CU/.H29q30HJhO0wnba.', '2023-06-23 13:50:10', '2023-08-20 07:51:48'),
(14, 'shop', NULL, 'shop400@gmail.com', NULL, NULL, NULL, '1', 0, NULL, 0, 1, NULL, '2023-06-23 13:51:43', '$2y$10$8WxDBpECniyVNCUlhL2No.C2bWn.Xpm0ujxNHzNmubegtlxdOk4Ii', '2023-06-23 13:51:06', '2023-08-20 07:51:48'),
(15, 'techno', NULL, 'techno@gmail.com', NULL, NULL, NULL, '1', 1, NULL, 0, 1, '2023-08-20', '2023-06-28 04:38:11', '$2y$10$qleqls.V7VGkGy6sGqq9Gu0vVXYD6vMLM.EPwFDHm39ZP4a4Dx8U6', '2023-06-28 04:37:40', '2023-08-20 07:51:48'),
(16, 'shop500', NULL, 'shop500@gmail.com', NULL, NULL, NULL, '1', 1, '10016', 0, 1, '2023-08-20', NULL, '$2y$10$tDX.PsmuIQEY.Pnb/8Uoeu4C//.Ou4zyxLE1RA/WpF6BptOpbi45a', '2023-08-03 23:15:24', '2023-08-20 07:51:48'),
(17, 'shop Name', NULL, 'shop991@gmail.com', NULL, NULL, NULL, '0', 0, '10017', 0, 1, NULL, NULL, '$2y$10$nFN2SJiFaV0HK5mMH1spN.qbazAikbXJXneMU9Ts8O0jvxEZJdfP6', '2023-08-10 11:52:25', '2023-08-20 07:51:48'),
(18, 'shop Name', NULL, 'shop44@gmail.com', NULL, NULL, NULL, '0', 0, '10018', 0, 1, NULL, NULL, '$2y$10$NaafRA7JSUEoqYFoIHKSb.lvWZsxHIB/.iIKLDIxqR56g1kEQYNyO', '2023-08-10 12:15:06', '2023-08-20 07:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper_details`
--

CREATE TABLE `shopkeeper_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `portfolio` text DEFAULT NULL,
  `top_img` varchar(191) DEFAULT NULL,
  `profile_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeeper_details`
--

INSERT INTO `shopkeeper_details` (`id`, `user_id`, `name`, `portfolio`, `top_img`, `profile_img`, `created_at`, `updated_at`) VALUES
(10, 11, 'kazi', NULL, NULL, NULL, '2023-06-23 13:12:39', '2023-06-23 13:12:39'),
(6, 8, 'shop2', '<p>sddsafds sadf asdfsadfsdf asdfsad sfda</p>', 'storage/profile_images/profile_images-16872958998049.png', 'storage/profile_images/profile_images-16872959009114.jpeg', '2023-06-20 14:47:54', '2023-06-20 15:18:20'),
(7, 9, 'shop3', NULL, NULL, NULL, '2023-06-20 15:14:03', '2023-06-20 15:14:03'),
(8, 10, 'shop 5 ggg hh', '<p>sdfsdf sdf sdfsdsdfsd&nbsp; dgfd</p>', 'storage/profile_images/profile_images-16927081916638.jpeg', 'storage/profile_images/profile_images-16908717672404.jpeg', '2023-06-20 15:23:13', '2023-08-22 12:43:12'),
(9, 10, 'shop', '<p><span style=\"color: rgb(77, 81, 86); font-family: Roboto, &quot;helvetica neue&quot;, helvetica, arial, sans-serif; font-size: 13px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows</span><br></p>', 'storage/profile_images/profile_images-16872968469341.png', 'storage/profile_images/profile_images-16872968469233.jpeg', '2023-06-20 15:34:06', '2023-06-20 15:34:06'),
(11, 12, 'kazi', NULL, 'storage/profile_images/profile_images-16876015934452.png', 'storage/profile_images/profile_images-16876015933841.jpeg', '2023-06-23 13:12:44', '2023-06-24 04:13:13'),
(12, 13, 'shop400', NULL, NULL, NULL, '2023-06-23 13:50:10', '2023-06-23 13:50:10'),
(13, 14, 'shop', NULL, NULL, NULL, '2023-06-23 13:51:06', '2023-06-23 13:51:06'),
(14, 15, 'techno', NULL, NULL, NULL, '2023-06-28 04:37:40', '2023-06-28 04:37:40'),
(15, 16, 'shop500', NULL, NULL, NULL, '2023-08-03 23:15:24', '2023-08-03 23:15:24'),
(16, 17, 'Shop', 'sdf', NULL, NULL, '2023-08-10 11:52:25', '2023-08-10 12:53:33'),
(17, 18, 'shop Name', NULL, NULL, NULL, '2023-08-10 12:15:06', '2023-08-10 12:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `shop_orders`
--

CREATE TABLE `shop_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=processing,2=completed',
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_orders`
--

INSERT INTO `shop_orders` (`id`, `shop_id`, `order_id`, `invoice_id`, `status`, `data`, `created_at`, `updated_at`) VALUES
(8, 12, 9, 1687631930, 0, '2024-06-23', '2023-06-24 12:38:50', '2023-06-24 12:38:50'),
(7, 12, 8, 121687616249, 2, '2024-06-23', '2023-06-24 08:17:29', '2023-06-24 09:04:51'),
(6, 12, 7, 121687602808, 1, '2024-06-23', '2023-06-24 04:33:28', '2023-06-24 08:58:56'),
(5, 12, 6, 121687602701, 0, '2024-06-23', '2023-06-24 04:31:41', '2023-06-24 04:31:41'),
(11, 10, 12, 1690890546, 2, '2001-08-23', '2023-08-01 05:49:06', '2023-08-10 13:42:53'),
(12, 10, 13, 1690949165, 0, '2002-08-23', '2023-08-01 22:06:05', '2023-08-01 22:06:05'),
(13, 10, 14, 1690949498, 1, '2002-08-23', '2023-08-01 22:11:38', '2023-08-10 13:42:19'),
(14, 10, 15, 1690950351, 2, '2002-08-23', '2023-08-01 22:25:51', '2023-08-10 13:42:50'),
(15, 10, 16, 1690951171, 2, '2002-08-23', '2023-08-01 22:39:31', '2023-08-10 13:42:48'),
(16, 10, 17, 1690977510, 1, '2002-08-23', '2023-08-02 05:58:30', '2023-08-10 13:42:22'),
(17, 10, 18, 1690977541, 0, '2002-08-23', '2023-08-02 05:59:01', '2023-08-02 05:59:01'),
(18, 10, 19, 1690977580, 1, '2002-08-23', '2023-08-02 05:59:40', '2023-08-10 13:42:25'),
(19, 10, 20, 1690977674, 0, '2002-08-23', '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(20, 12, 20, 1690977674, 0, '2002-08-23', '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(21, 10, 21, 1690977793, 2, '2002-08-23', '2023-08-02 06:03:13', '2023-08-25 09:30:41'),
(22, 10, 22, 1690977894, 0, '2002-08-23', '2023-08-02 06:04:54', '2023-08-02 06:04:54'),
(23, 10, 23, 1690977933, 0, '2002-08-23', '2023-08-02 06:05:33', '2023-08-02 06:05:33'),
(24, 10, 24, 1690977982, 0, '2002-08-23', '2023-08-02 06:06:22', '2023-08-02 06:06:22'),
(25, 10, 25, 1690978239, 0, '2002-08-23', '2023-08-02 06:10:39', '2023-08-02 06:10:39'),
(26, 10, 26, 1691048004, 0, '2003-08-23', '2023-08-03 01:33:24', '2023-08-03 01:33:24'),
(27, 10, 27, 1691050313, 0, '2003-08-23', '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(28, 10, 28, 1691052522, 0, '2003-08-23', '2023-08-03 02:48:42', '2023-08-03 02:48:42'),
(29, 10, 29, 1691067292, 0, '2003-08-23', '2023-08-03 06:54:52', '2023-08-03 06:54:52'),
(30, 10, 30, 1692278418, 0, '2017-08-23', '2023-08-17 13:20:18', '2023-08-17 13:20:18'),
(31, 10, 31, 1692278722, 0, '2017-08-23', '2023-08-17 13:25:22', '2023-08-17 13:25:22'),
(32, 10, 32, 1692278865, 0, '2017-08-23', '2023-08-17 13:27:45', '2023-08-17 13:27:45'),
(33, 10, 33, 1692596856, 0, '2021-08-23', '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(34, 10, 34, 1692608588, 0, '2021-08-23', '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(35, 10, 35, 1692608922, 0, '2021-08-23', '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(36, 10, 36, 1692625822, 0, '2021-08-23', '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(37, 10, 37, 1692679291, 0, '2022-08-23', '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(38, 10, 38, 1692679328, 0, '2022-08-23', '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(39, 10, 40, 10040, 0, '2022-08-23', '2023-08-22 10:44:13', '2023-08-22 10:44:13'),
(40, 10, 41, 10041, 0, '2022-08-23', '2023-08-22 10:45:15', '2023-08-22 10:45:15'),
(41, 10, 42, 10042, 0, '2022-08-23', '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(42, 10, 43, 10043, 0, '2022-08-23', '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(43, 10, 44, 10044, 0, '2022-08-23', '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(44, 10, 45, 10045, 0, '2022-08-23', '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(45, 10, 46, 10046, 0, '2022-08-23', '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(46, 10, 47, 10047, 0, '2022-08-23', '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(47, 10, 48, 10048, 0, '2022-08-23', '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(48, 10, 49, 10049, 0, '2023-08-23', '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(49, 10, 50, 10050, 0, '2023-08-23', '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(50, 10, 51, 10051, 0, '2023-08-23', '2023-08-23 06:57:47', '2023-08-23 06:57:47'),
(51, 10, 52, 10052, 0, '2023-08-23', '2023-08-23 07:10:48', '2023-08-23 07:10:48'),
(52, 10, 53, 10053, 0, '2025-08-23', '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(53, 10, 54, 10054, 0, '2025-08-23', '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(54, 10, 55, 10055, 0, '2025-08-23', '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(55, 10, 56, 10056, 0, '2025-08-23', '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(56, 10, 57, 10057, 0, '2025-08-23', '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(57, 10, 58, 10058, 0, '2025-08-23', '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(58, 10, 59, 10059, 0, '2025-08-23', '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(59, 10, 60, 10060, 2, '2025-08-23', '2023-08-25 08:53:49', '2023-08-25 09:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `avg_rating` decimal(11,2) DEFAULT NULL,
  `min_price` decimal(11,0) DEFAULT NULL,
  `max_price` decimal(11,0) DEFAULT NULL,
  `ar_img` text DEFAULT NULL,
  `product_code` text DEFAULT NULL,
  `is_variant` tinyint(4) NOT NULL COMMENT '0=no variant 1=variant',
  `category_id` bigint(20) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `cost` decimal(11,2) DEFAULT NULL,
  `shipping_cost` decimal(11,2) DEFAULT NULL,
  `discount_type` tinyint(4) DEFAULT NULL COMMENT '0=fixed,1=prc',
  `discount` decimal(11,1) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active,0=inactive',
  `description` text DEFAULT NULL,
  `measurement` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `user_id`, `name`, `avg_rating`, `min_price`, `max_price`, `ar_img`, `product_code`, `is_variant`, `category_id`, `price`, `cost`, `shipping_cost`, `discount_type`, `discount`, `status`, `description`, `measurement`, `created_at`, `updated_at`) VALUES
(38, '12', 'Walton 4300', 3.00, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 34534.00, NULL, NULL, 0, 34535.0, 1, '<p>zxczx</p>', NULL, '2023-06-24 04:12:36', '2023-08-08 11:16:56'),
(39, '12', 'Laptop', 3.50, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 4534.00, NULL, NULL, 0, 345.0, 1, '<p>sdfsdfsd</p>', NULL, '2023-06-24 04:13:57', '2023-08-08 11:17:25'),
(40, '10', 'itdealbd', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 0.00, NULL, NULL, 0, 34.0, 1, '<p>sdfsd</p>', NULL, '2023-07-24 22:25:21', '2023-08-22 12:54:35'),
(41, '10', 'itdealbd', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 34.00, NULL, NULL, 0, 34.0, 1, '<p>sdfsd</p>', NULL, '2023-07-24 22:27:18', '2023-07-24 22:27:18'),
(42, '10', 'itdealbd', NULL, NULL, NULL, NULL, NULL, 0, 1, 345.00, NULL, NULL, 1, 34.0, 1, NULL, NULL, '2023-07-24 22:53:00', '2023-07-24 22:53:00'),
(43, '10', 'product 440', 4.00, NULL, NULL, NULL, NULL, 0, 3, 0.00, NULL, NULL, 1, 40.0, 1, 'product 440 dfgdfgasdf', NULL, '2023-08-01 02:49:52', '2023-08-11 07:44:09'),
(44, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 2, 346.00, NULL, NULL, 1, 34.0, 1, '<p>sdf</p>', NULL, '2023-08-02 07:58:55', '2023-08-11 10:08:23'),
(45, '10', 'Product 199', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 1, 45.0, 1, '<p>sdf</p>', NULL, '2023-08-02 08:00:17', '2023-08-11 10:45:13'),
(46, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:11:35', '2023-08-02 22:11:35'),
(47, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 2, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:12:16', '2023-08-02 22:12:16'),
(48, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:33:02', '2023-08-02 22:33:02'),
(49, '10', 'deisgner@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:38:42', '2023-08-02 22:38:42'),
(50, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:42:18', '2023-08-02 22:42:18'),
(51, '10', 'deisgner500', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:42:54', '2023-08-02 22:42:54'),
(52, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 1, 30.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:50:01', '2023-08-02 22:50:01'),
(53, '10', 'dfsd', NULL, NULL, NULL, NULL, NULL, 0, 1, 34.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:55:21', '2023-08-02 22:55:21'),
(54, '10', 'ghhh', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-02 22:56:04', '2023-08-02 22:56:04'),
(55, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 0, 2, 460.00, NULL, NULL, 0, NULL, 1, '<div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"><span style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</span><br></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '<p><br></p><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" class=\"\"><span style=\"background-color: rgb(255, 0, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat</span>.</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '2023-08-02 22:57:55', '2023-08-02 22:57:55'),
(56, '10', 'deisgner@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 1, 456.0, 1, '<div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"><span style=\"text-align: justify;\">lutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</span><br></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '2023-08-02 22:59:17', '2023-08-02 22:59:17'),
(57, '10', 'gggg', NULL, NULL, NULL, NULL, NULL, 0, 1, 45.00, NULL, NULL, 0, NULL, 1, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '2023-08-02 23:00:27', '2023-08-02 23:00:27'),
(58, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 0, 3, 366.00, NULL, NULL, 1, 4600.0, 1, '<div><br></div><div><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CIPp4rrbv4ADFX4EgwMdVu4JXA\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div></div>', '<div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:05:23', '2023-08-02 23:05:23'),
(59, '10', 'sdfsdf', NULL, NULL, NULL, NULL, '10059', 0, 3, 366.00, NULL, NULL, 1, 4600.0, 1, '<div><br></div><div><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CIPp4rrbv4ADFX4EgwMdVu4JXA\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div></div>', '<div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:06:28', '2023-08-02 23:06:28'),
(60, '10', 'Lorem ipsum', 3.00, NULL, NULL, NULL, '10060', 1, 2, 0.00, NULL, NULL, 1, 300.0, 1, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><b>Lorem ipsum dolor <span style=\"background-color: rgb(255, 0, 255);\">sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis</span>. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugia</b></span><br></p>', '<p><br></p><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CPutuJXnv4ADFchNKwodLjkISw\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:58:27', '2023-08-11 08:31:33'),
(61, '10', 'dfg', NULL, NULL, NULL, NULL, '10061', 0, 1, 0.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-03 01:08:20', '2023-08-03 01:08:20'),
(62, '10', 'sdf', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10062', 0, 1, 40.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-03 01:29:10', '2023-08-03 01:29:10'),
(63, '10', 'sdf', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10063', 0, 1, 40.00, NULL, NULL, 0, NULL, 1, NULL, NULL, '2023-08-03 01:30:28', '2023-08-03 01:30:28'),
(64, '10', 'product 1022', 3.00, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10064', 1, 1, 0.00, NULL, NULL, 1, 30.0, 1, '<p><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 14px; white-space: pre; background-color: rgb(255, 255, 0);\"><font color=\"#000000\" style=\"\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos </font></span><br></p>', '<p><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 14px; white-space: pre; background-color: rgb(255, 255, 0);\"><font color=\"#ff0000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos </font></span><br></p>', '2023-08-03 02:47:50', '2023-08-08 11:39:40'),
(65, '10', 'product 3009', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 2, 0.00, NULL, NULL, 1, 30.0, 1, '<p>dddddddddddddddddddddddddd asfasdfdasfsddddddddddddddddddddddddddd</p>', NULL, '2023-08-03 07:57:52', '2023-08-03 07:57:52'),
(69, '10', 'sdf', NULL, 34, 34, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 0.00, NULL, NULL, 1, 6.0, 1, '<p>sdf asd asdf</p>', NULL, '2023-08-18 09:01:46', '2023-08-18 09:01:46'),
(70, '10', 'no variant', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 34.00, NULL, NULL, 1, 4.0, 1, '<p>asdf</p>', NULL, '2023-08-18 09:38:13', '2023-08-18 09:38:13'),
(71, '10', 'ar', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 345.00, NULL, NULL, 0, NULL, 1, '<p>sdf</p>', NULL, '2023-08-18 10:29:24', '2023-08-18 10:29:24'),
(72, '10', 'product', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 2, 45.00, NULL, NULL, 0, NULL, 1, '<p>sdfs</p>', NULL, '2023-08-18 10:31:19', '2023-08-18 10:31:19'),
(73, '10', 'img', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 34.00, NULL, 5.00, 0, NULL, 1, '<p>sdf</p>', NULL, '2023-08-18 10:32:15', '2023-08-18 10:32:15'),
(74, '10', 'gb 33', 3.00, 34, 34, NULL, NULL, 1, 1, 0.00, NULL, 3.00, 1, 10.0, 1, '<p>sdf</p>', NULL, '2023-08-20 13:03:37', '2023-08-21 12:26:12'),
(75, '10', 'sdfds', NULL, NULL, NULL, NULL, NULL, 0, 1, 34.00, NULL, NULL, 0, NULL, 1, '<p>sdf</p>', NULL, '2023-08-22 13:49:03', '2023-08-22 13:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_images`
--

CREATE TABLE `shop_product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_product_images`
--

INSERT INTO `shop_product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(26, 31, 'storage/product_images/product_images-16871512067896.png', '2023-06-18 23:06:47', '2023-06-18 23:06:47'),
(25, 30, 'storage/product_images/product_images-16871511078156.png', '2023-06-18 23:05:07', '2023-06-18 23:05:07'),
(24, 29, 'storage/product_images/product_images-16871507776422.png', '2023-06-18 22:59:38', '2023-06-18 22:59:38'),
(23, 28, 'storage/product_images/product_images-16871506977600.png', '2023-06-18 22:58:17', '2023-06-18 22:58:17'),
(22, 27, 'storage/product_images/product_images-16871506393146.png', '2023-06-18 22:57:19', '2023-06-18 22:57:19'),
(21, 26, 'storage/product_images/product_images-16871505088712.png', '2023-06-18 22:55:08', '2023-06-18 22:55:08'),
(20, 25, 'storage/product_images/product_images-16871503743535.png', '2023-06-18 22:52:55', '2023-06-18 22:52:55'),
(19, 24, 'storage/product_images/product_images-16871274049832.png', '2023-06-18 16:30:04', '2023-06-18 16:30:04'),
(18, 23, 'storage/product_images/product_images-16871273373896.png', '2023-06-18 16:28:57', '2023-06-18 16:28:57'),
(17, 22, 'storage/product_images/product_images-16871271644633.png', '2023-06-18 16:26:05', '2023-06-18 16:26:05'),
(16, 21, 'storage/product_images/product_images-16871269819978.png', '2023-06-18 16:23:02', '2023-06-18 16:23:02'),
(15, 20, 'storage/product_images/product_images-16871268917909.png', '2023-06-18 16:21:32', '2023-06-18 16:21:32'),
(14, 19, 'storage/product_images/product_images-16871245619909.png', '2023-06-18 15:42:42', '2023-06-18 15:42:42'),
(27, 32, 'storage/product_images/product_images-16871514276723.png', '2023-06-18 23:10:29', '2023-06-18 23:10:29'),
(28, 33, 'storage/product_images/product_images-16871516634929.png', '2023-06-18 23:14:23', '2023-06-18 23:14:23'),
(29, 34, 'storage/product_images/product_images-16871518055471.png', '2023-06-18 23:16:46', '2023-06-18 23:16:46'),
(30, 35, 'storage/product_images/product_images-16871978655085.png', '2023-06-19 12:04:26', '2023-06-19 12:04:26'),
(31, 36, 'storage/product_images/product_images-16873757192735.png', '2023-06-21 13:28:40', '2023-06-21 13:28:40'),
(32, 36, 'storage/product_images/product_images-16873757207155.png', '2023-06-21 13:28:40', '2023-06-21 13:28:40'),
(33, 37, 'storage/product_images/product_images-16873846248531.png', '2023-06-21 15:57:04', '2023-06-21 15:57:04'),
(34, 37, 'storage/product_images/product_images-16873846246569.png', '2023-06-21 15:57:06', '2023-06-21 15:57:06'),
(35, 37, 'storage/product_images/product_images-16873846262392.png', '2023-06-21 15:57:06', '2023-06-21 15:57:06'),
(36, 38, 'storage/product_images/product_images-16876015586855.png', '2023-06-24 04:12:38', '2023-06-24 04:12:38'),
(37, 38, 'storage/product_images/product_images-16876015595802.png', '2023-06-24 04:12:39', '2023-06-24 04:12:39'),
(38, 39, 'storage/product_images/product_images-16876016374323.png', '2023-06-24 04:13:57', '2023-06-24 04:13:57'),
(56, 67, 'storage/product_images/product_images-16923485242505.png', '2023-08-18 08:48:44', '2023-08-18 08:48:44'),
(41, 44, 'storage/product_images/product_images-16909847352276.png', '2023-08-02 07:58:56', '2023-08-02 07:58:56'),
(42, 45, 'storage/product_images/product_images-16909848176254.png', '2023-08-02 08:00:17', '2023-08-02 08:00:17'),
(43, 60, 'storage/product_images/product_images-16910423075641.png', '2023-08-02 23:58:27', '2023-08-02 23:58:27'),
(44, 64, 'storage/product_images/product_images-16910524708439.png', '2023-08-03 02:47:50', '2023-08-03 02:47:50'),
(45, 66, 'storage/product_images/product_images-16915558067684.png', '2023-08-09 04:36:46', '2023-08-09 04:36:46'),
(46, 66, 'storage/product_images/product_images-16915558061872.png', '2023-08-09 04:36:46', '2023-08-09 04:36:46'),
(47, 66, 'storage/product_images/product_images-16915558069036.png', '2023-08-09 04:36:47', '2023-08-09 04:36:47'),
(55, 40, 'storage/product_images/product_images-16923416137711.png', '2023-08-18 06:53:33', '2023-08-18 06:53:33'),
(50, 44, 'storage/product_images/product_images-16917482553319.png', '2023-08-11 10:04:15', '2023-08-11 10:04:15'),
(51, 44, 'storage/product_images/product_images-16917483703236.png', '2023-08-11 10:06:10', '2023-08-11 10:06:10'),
(52, 44, 'storage/product_images/product_images-16917483957756.png', '2023-08-11 10:06:36', '2023-08-11 10:06:36'),
(53, 44, 'storage/product_images/product_images-16917484447968.png', '2023-08-11 10:07:24', '2023-08-11 10:07:24'),
(57, 68, 'storage/product_images/product_images-16923487588265.png', '2023-08-18 08:52:38', '2023-08-18 08:52:38'),
(58, 70, 'storage/product_images/product_images-16923514935559.png', '2023-08-18 09:38:13', '2023-08-18 09:38:13'),
(59, 40, 'storage/product_images/product_images-16927088758664.png', '2023-08-22 12:54:36', '2023-08-22 12:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_rating_reviews`
--

CREATE TABLE `shop_product_rating_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_product_rating_reviews`
--

INSERT INTO `shop_product_rating_reviews` (`id`, `shop_id`, `customer_id`, `product_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 12, 6, 38, 3, NULL, '2023-08-08 10:47:08', '2023-08-08 10:47:08'),
(2, 12, 6, 39, 2, 'sdf', '2023-08-08 10:51:03', '2023-08-08 10:51:03'),
(3, 12, 6, 38, 3, 'dsf', '2023-08-08 11:16:56', '2023-08-08 11:16:56'),
(4, 12, 6, 39, 5, 'ds', '2023-08-08 11:17:25', '2023-08-08 11:17:25'),
(5, 10, 6, 64, 3, 'sdf', '2023-08-08 11:39:40', '2023-08-08 11:39:40'),
(6, 10, 6, 43, 4, 'sdf', '2023-08-08 11:40:22', '2023-08-08 11:40:22'),
(7, 10, 6, 60, 3, 'sdg', '2023-08-11 08:31:33', '2023-08-11 08:31:33'),
(8, 10, 6, 74, 3, 'dfg', '2023-08-21 12:26:12', '2023-08-21 12:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_time` varchar(191) NOT NULL,
  `end_time` varchar(191) NOT NULL,
  `duration_minutes` varchar(191) NOT NULL,
  `start_seconds` varchar(191) NOT NULL,
  `end_seconds` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`id`, `start_time`, `end_time`, `duration_minutes`, `start_seconds`, `end_seconds`, `status`, `created_at`, `updated_at`) VALUES
(436, '12:00 am', '12:15 am', '15', '0', '900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(437, '12:15 am', '12:30 am', '15', '900', '1800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(438, '12:30 am', '12:45 am', '15', '1800', '2700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(439, '12:45 am', '1:00 am', '15', '2700', '3600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(440, '1:00 am', '1:15 am', '15', '3600', '4500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(441, '1:15 am', '1:30 am', '15', '4500', '5400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(442, '1:30 am', '1:45 am', '15', '5400', '6300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(443, '1:45 am', '2:00 am', '15', '6300', '7200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(444, '2:00 am', '2:15 am', '15', '7200', '8100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(445, '2:15 am', '2:30 am', '15', '8100', '9000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(446, '2:30 am', '2:45 am', '15', '9000', '9900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(447, '2:45 am', '3:00 am', '15', '9900', '10800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(448, '3:00 am', '3:15 am', '15', '10800', '11700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(449, '3:15 am', '3:30 am', '15', '11700', '12600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(450, '3:30 am', '3:45 am', '15', '12600', '13500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(451, '3:45 am', '4:00 am', '15', '13500', '14400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(452, '4:00 am', '4:15 am', '15', '14400', '15300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(453, '4:15 am', '4:30 am', '15', '15300', '16200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(454, '4:30 am', '4:45 am', '15', '16200', '17100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(455, '4:45 am', '5:00 am', '15', '17100', '18000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(456, '5:00 am', '5:15 am', '15', '18000', '18900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(457, '5:15 am', '5:30 am', '15', '18900', '19800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(458, '5:30 am', '5:45 am', '15', '19800', '20700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(459, '5:45 am', '6:00 am', '15', '20700', '21600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(460, '6:00 am', '6:15 am', '15', '21600', '22500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(461, '6:15 am', '6:30 am', '15', '22500', '23400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(462, '6:30 am', '6:45 am', '15', '23400', '24300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(463, '6:45 am', '7:00 am', '15', '24300', '25200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(464, '7:00 am', '7:15 am', '15', '25200', '26100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(465, '7:15 am', '7:30 am', '15', '26100', '27000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(466, '7:30 am', '7:45 am', '15', '27000', '27900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(467, '7:45 am', '8:00 am', '15', '27900', '28800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(468, '8:00 am', '8:15 am', '15', '28800', '29700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(469, '8:15 am', '8:30 am', '15', '29700', '30600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(470, '8:30 am', '8:45 am', '15', '30600', '31500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(471, '8:45 am', '9:00 am', '15', '31500', '32400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(472, '9:00 am', '9:15 am', '15', '32400', '33300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(473, '9:15 am', '9:30 am', '15', '33300', '34200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(474, '9:30 am', '9:45 am', '15', '34200', '35100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(475, '9:45 am', '10:00 am', '15', '35100', '36000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(476, '10:00 am', '10:15 am', '15', '36000', '36900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(477, '10:15 am', '10:30 am', '15', '36900', '37800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(478, '10:30 am', '10:45 am', '15', '37800', '38700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(479, '10:45 am', '11:00 am', '15', '38700', '39600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(480, '11:00 am', '11:15 am', '15', '39600', '40500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(481, '11:15 am', '11:30 am', '15', '40500', '41400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(482, '11:30 am', '11:45 am', '15', '41400', '42300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(483, '11:45 am', '12:00 pm', '15', '42300', '43200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(484, '12:00 pm', '12:15 pm', '15', '43200', '44100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(485, '12:15 pm', '12:30 pm', '15', '44100', '45000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(486, '12:30 pm', '12:45 pm', '15', '45000', '45900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(487, '12:45 pm', '1:00 pm', '15', '45900', '46800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(488, '1:00 pm', '1:15 pm', '15', '46800', '47700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(489, '1:15 pm', '1:30 pm', '15', '47700', '48600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(490, '1:30 pm', '1:45 pm', '15', '48600', '49500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(491, '1:45 pm', '2:00 pm', '15', '49500', '50400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(492, '2:00 pm', '2:15 pm', '15', '50400', '51300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(493, '2:15 pm', '2:30 pm', '15', '51300', '52200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(494, '2:30 pm', '2:45 pm', '15', '52200', '53100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(495, '2:45 pm', '3:00 pm', '15', '53100', '54000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(496, '3:00 pm', '3:15 pm', '15', '54000', '54900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(497, '3:15 pm', '3:30 pm', '15', '54900', '55800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(498, '3:30 pm', '3:45 pm', '15', '55800', '56700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(499, '3:45 pm', '4:00 pm', '15', '56700', '57600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(500, '4:00 pm', '4:15 pm', '15', '57600', '58500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(501, '4:15 pm', '4:30 pm', '15', '58500', '59400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(502, '4:30 pm', '4:45 pm', '15', '59400', '60300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(503, '4:45 pm', '5:00 pm', '15', '60300', '61200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(504, '5:00 pm', '5:15 pm', '15', '61200', '62100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(505, '5:15 pm', '5:30 pm', '15', '62100', '63000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(506, '5:30 pm', '5:45 pm', '15', '63000', '63900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(507, '5:45 pm', '6:00 pm', '15', '63900', '64800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(508, '6:00 pm', '6:15 pm', '15', '64800', '65700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(509, '6:15 pm', '6:30 pm', '15', '65700', '66600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(510, '6:30 pm', '6:45 pm', '15', '66600', '67500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(511, '6:45 pm', '7:00 pm', '15', '67500', '68400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(512, '7:00 pm', '7:15 pm', '15', '68400', '69300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(513, '7:15 pm', '7:30 pm', '15', '69300', '70200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(514, '7:30 pm', '7:45 pm', '15', '70200', '71100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(515, '7:45 pm', '8:00 pm', '15', '71100', '72000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(516, '8:00 pm', '8:15 pm', '15', '72000', '72900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(517, '8:15 pm', '8:30 pm', '15', '72900', '73800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(518, '8:30 pm', '8:45 pm', '15', '73800', '74700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(519, '8:45 pm', '9:00 pm', '15', '74700', '75600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(520, '9:00 pm', '9:15 pm', '15', '75600', '76500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(521, '9:15 pm', '9:30 pm', '15', '76500', '77400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(522, '9:30 pm', '9:45 pm', '15', '77400', '78300', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(523, '9:45 pm', '10:00 pm', '15', '78300', '79200', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(524, '10:00 pm', '10:15 pm', '15', '79200', '80100', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(525, '10:15 pm', '10:30 pm', '15', '80100', '81000', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(526, '10:30 pm', '10:45 pm', '15', '81000', '81900', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(527, '10:45 pm', '11:00 pm', '15', '81900', '82800', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(528, '11:00 pm', '11:15 pm', '15', '82800', '83700', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(529, '11:15 pm', '11:30 pm', '15', '83700', '84600', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(530, '11:30 pm', '11:45 pm', '15', '84600', '85500', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(531, '11:45 pm', '12:00 am', '15', '85500', '86400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(532, '12:00 am', '12:00 am', '15', '86400', '86400', 1, '2023-07-18 01:37:17', '2023-07-18 01:37:17'),
(533, '12:00 am', '12:30 am', '30', '0', '1800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(534, '12:30 am', '1:00 am', '30', '1800', '3600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(535, '1:00 am', '1:30 am', '30', '3600', '5400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(536, '1:30 am', '2:00 am', '30', '5400', '7200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(537, '2:00 am', '2:30 am', '30', '7200', '9000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(538, '2:30 am', '3:00 am', '30', '9000', '10800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(539, '3:00 am', '3:30 am', '30', '10800', '12600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(540, '3:30 am', '4:00 am', '30', '12600', '14400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(541, '4:00 am', '4:30 am', '30', '14400', '16200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(542, '4:30 am', '5:00 am', '30', '16200', '18000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(543, '5:00 am', '5:30 am', '30', '18000', '19800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(544, '5:30 am', '6:00 am', '30', '19800', '21600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(545, '6:00 am', '6:30 am', '30', '21600', '23400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(546, '6:30 am', '7:00 am', '30', '23400', '25200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(547, '7:00 am', '7:30 am', '30', '25200', '27000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(548, '7:30 am', '8:00 am', '30', '27000', '28800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(549, '8:00 am', '8:30 am', '30', '28800', '30600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(550, '8:30 am', '9:00 am', '30', '30600', '32400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(551, '9:00 am', '9:30 am', '30', '32400', '34200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(552, '9:30 am', '10:00 am', '30', '34200', '36000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(553, '10:00 am', '10:30 am', '30', '36000', '37800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(554, '10:30 am', '11:00 am', '30', '37800', '39600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(555, '11:00 am', '11:30 am', '30', '39600', '41400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(556, '11:30 am', '12:00 pm', '30', '41400', '43200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(557, '12:00 pm', '12:30 pm', '30', '43200', '45000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(558, '12:30 pm', '1:00 pm', '30', '45000', '46800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(559, '1:00 pm', '1:30 pm', '30', '46800', '48600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(560, '1:30 pm', '2:00 pm', '30', '48600', '50400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(561, '2:00 pm', '2:30 pm', '30', '50400', '52200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(562, '2:30 pm', '3:00 pm', '30', '52200', '54000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(563, '3:00 pm', '3:30 pm', '30', '54000', '55800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(564, '3:30 pm', '4:00 pm', '30', '55800', '57600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(565, '4:00 pm', '4:30 pm', '30', '57600', '59400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(566, '4:30 pm', '5:00 pm', '30', '59400', '61200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(567, '5:00 pm', '5:30 pm', '30', '61200', '63000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(568, '5:30 pm', '6:00 pm', '30', '63000', '64800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(569, '6:00 pm', '6:30 pm', '30', '64800', '66600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(570, '6:30 pm', '7:00 pm', '30', '66600', '68400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(571, '7:00 pm', '7:30 pm', '30', '68400', '70200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(572, '7:30 pm', '8:00 pm', '30', '70200', '72000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(573, '8:00 pm', '8:30 pm', '30', '72000', '73800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(574, '8:30 pm', '9:00 pm', '30', '73800', '75600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(575, '9:00 pm', '9:30 pm', '30', '75600', '77400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(576, '9:30 pm', '10:00 pm', '30', '77400', '79200', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(577, '10:00 pm', '10:30 pm', '30', '79200', '81000', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(578, '10:30 pm', '11:00 pm', '30', '81000', '82800', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(579, '11:00 pm', '11:30 pm', '30', '82800', '84600', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(580, '11:30 pm', '12:00 am', '30', '84600', '86400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(581, '12:00 am', '12:00 am', '30', '86400', '86400', 1, '2023-07-18 03:26:00', '2023-07-18 03:26:00'),
(582, '12:00 am', '1:00 am', '60', '0', '3600', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(583, '1:00 am', '2:00 am', '60', '3600', '7200', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(584, '2:00 am', '3:00 am', '60', '7200', '10800', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(585, '3:00 am', '4:00 am', '60', '10800', '14400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(586, '4:00 am', '5:00 am', '60', '14400', '18000', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(587, '5:00 am', '6:00 am', '60', '18000', '21600', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(588, '6:00 am', '7:00 am', '60', '21600', '25200', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(589, '7:00 am', '8:00 am', '60', '25200', '28800', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(590, '8:00 am', '9:00 am', '60', '28800', '32400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(591, '9:00 am', '10:00 am', '60', '32400', '36000', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(592, '10:00 am', '11:00 am', '60', '36000', '39600', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(593, '11:00 am', '12:00 pm', '60', '39600', '43200', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(594, '12:00 pm', '1:00 pm', '60', '43200', '46800', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(595, '1:00 pm', '2:00 pm', '60', '46800', '50400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(596, '2:00 pm', '3:00 pm', '60', '50400', '54000', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(597, '3:00 pm', '4:00 pm', '60', '54000', '57600', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(598, '4:00 pm', '5:00 pm', '60', '57600', '61200', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(599, '5:00 pm', '6:00 pm', '60', '61200', '64800', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(600, '6:00 pm', '7:00 pm', '60', '64800', '68400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(601, '7:00 pm', '8:00 pm', '60', '68400', '72000', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(602, '8:00 pm', '9:00 pm', '60', '72000', '75600', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(603, '9:00 pm', '10:00 pm', '60', '75600', '79200', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(604, '10:00 pm', '11:00 pm', '60', '79200', '82800', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(605, '11:00 pm', '12:00 am', '60', '82800', '86400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07'),
(606, '12:00 am', '12:00 am', '60', '86400', '86400', 1, '2023-07-18 03:26:07', '2023-07-18 03:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `id_no` bigint(11) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `is_authentic` varchar(191) DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `id_no`, `email`, `is_authentic`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kazi', NULL, 'kazimurtuza1145@gmail.com', '0', NULL, '$2y$10$wsaSk62LFXC0Rk2dPUSGoer8r3niRc7Mp3hMkMDgxyBK19w4KN/oy', NULL, '2023-06-16 03:56:21', '2023-06-16 03:56:21'),
(2, 'kazi', NULL, 'kazi@gmail.com', '0', NULL, '$2y$10$tgGCIa57t79fSpj2A/WBI.PPgWzMC7KPJGQq7f.vZdjVhAeHOQ1Wi', NULL, '2023-06-16 04:24:14', '2023-06-16 04:24:14'),
(3, 'kazi2', NULL, 'kazi12@gmail.com', '0', NULL, '$2y$10$7AxVVQE6wT21tuxHtLsmReTULldMqen67LNRttoTUseSqej1NlCcq', NULL, '2023-06-16 04:26:00', '2023-06-16 04:26:00'),
(4, 'kazi2', NULL, 'kazi124@gmail.com', '0', NULL, '$2y$10$V8QhxDyNHYcLYNO/5xTuw.1PtU9d9DXldJ/l.jajsireVKcwESmfW', NULL, '2023-06-16 04:27:10', '2023-06-16 04:27:10'),
(5, 'kazi', NULL, 'kazi222@gmail.com', '0', NULL, '$2y$10$exd913qyVBfdr/qHaoBXE.Dg85Px8jeY6RRJoqxeT8dVEbufCSfFW', NULL, '2023-06-16 04:28:31', '2023-06-16 04:28:31'),
(6, 'user', NULL, 'user@gmail.com', '1', '2023-06-16 09:47:41', '$2y$10$5sgkEMXb2JqiSvtolXXHReY8b/plq.OhJtV3xUqsJPbhTPRuwVW0m', NULL, '2023-06-16 09:44:14', '2023-08-01 00:06:37'),
(7, 'user', NULL, 'user3344@gmail.com', '1', '2023-06-22 13:59:46', '$2y$10$FGQfIjgSroF4bstfh6.Md.0fB1GwId/foqtgAgX2qcrthwzwbZ8vq', NULL, '2023-06-22 13:53:07', '2023-06-22 13:59:46'),
(8, 'user200', NULL, 'user200@gmail.com', '0', NULL, '$2y$10$ACyjZc3h/Ilb44UiFEVOuuCO1GXqfQ0jGESsaPK4A1NSSVmEnDux2', NULL, '2023-08-03 22:54:45', '2023-08-03 22:54:45'),
(9, 'asad', 10009, 'asad@gmail.com', '0', NULL, '$2y$10$7XeoB4FUUz.nE3A/MaSE1.v89OP7X6JEOiyAq/w75boEMjPUppDIG', NULL, '2023-08-03 23:03:07', '2023-08-03 23:03:07'),
(10, 'User Name', 10010, 'user691@gmail.com', '0', NULL, '$2y$10$HIUUkOR1HP34kVTpRTDJMeNZYReDdMTvuIQjKNj4zqqtEiY2obBJS', NULL, '2023-08-04 06:06:43', '2023-08-04 06:06:43'),
(11, 'User Name', 10011, 'user6916@gmail.com', '0', NULL, '$2y$10$80W/TkgLLZpTIyeuXhY8uubxopW7Zvvl0OGeaGrUSrMw46pc07aym', NULL, '2023-08-07 07:52:33', '2023-08-07 07:52:33'),
(12, 'Designer Name', 10012, 'designer6916@gmail.com', '0', NULL, '$2y$10$WjI/42mhXQUdFGR2QPVK8eSoOz06Pt/ux68ugpgtLZ9zV.v40jXS.', NULL, '2023-08-09 06:56:10', '2023-08-09 06:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector_type` tinyint(4) NOT NULL COMMENT '1=designer 2=shop',
  `id_no` varchar(191) DEFAULT NULL,
  `bank_id` bigint(20) DEFAULT NULL,
  `acc_name` text DEFAULT NULL,
  `acc_number` text DEFAULT NULL,
  `routing_number` text DEFAULT NULL,
  `designer_id` bigint(20) DEFAULT NULL,
  `shopkeeper_id` bigint(20) DEFAULT NULL,
  `status` bigint(20) NOT NULL DEFAULT 0 COMMENT '0=withdrawal request,1=balance transfer completed ',
  `withdrawal_request_date` date DEFAULT NULL,
  `withdrawal_accept_date` date DEFAULT NULL,
  `withdrawal_accept_by` bigint(20) DEFAULT NULL,
  `withdrawal_amount` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `sector_type`, `id_no`, `bank_id`, `acc_name`, `acc_number`, `routing_number`, `designer_id`, `shopkeeper_id`, `status`, `withdrawal_request_date`, `withdrawal_accept_date`, `withdrawal_accept_by`, `withdrawal_amount`, `created_at`, `updated_at`) VALUES
(1, 1, '10001', NULL, 'Test', 'test 778', 'Account Name:', 1, NULL, 0, '2023-07-28', NULL, NULL, 50.00, '2023-07-28 06:18:58', '2023-07-28 06:18:58'),
(2, 1, '10002', NULL, 'Test', 'test 778', 'Account Name:', 1, NULL, 1, '2023-07-28', NULL, 1, 10.00, '2023-07-28 06:19:17', '2023-07-28 07:54:01'),
(3, 1, '10003', NULL, 'test', 'test 778', 'Account Name:', 1, NULL, 1, '2023-07-28', NULL, 1, 100.00, '2023-07-28 07:02:02', '2023-07-28 07:54:09'),
(4, 1, '10004', NULL, 'Test', 'test 778', 'Account Name:', 1, NULL, 0, '2023-07-31', NULL, NULL, 20.00, '2023-07-30 23:18:31', '2023-07-30 23:18:31'),
(5, 1, '10005', NULL, 'Test', 'test 778', 'Account Name:', 1, NULL, 0, '2023-07-31', NULL, NULL, 10.00, '2023-07-30 23:18:44', '2023-07-30 23:18:44'),
(6, 1, '10006', NULL, 'Test', 'test 404', 'Account Name:', 1, NULL, 1, '2023-07-31', '2023-07-31', 1, 10.00, '2023-07-31 05:32:42', '2023-07-31 05:41:42'),
(7, 1, '10007', NULL, 'Test', 'test 209', 'Account Name:', 1, NULL, 0, '2023-08-02', NULL, NULL, 3.00, '2023-08-02 07:54:38', '2023-08-02 07:54:38'),
(8, 1, '10008', NULL, 'test', 'test 101', 'Account Name:', 1, NULL, 0, '2023-08-09', NULL, NULL, 12.00, '2023-08-09 10:29:21', '2023-08-09 10:29:21'),
(9, 1, '10009', 1, 'sooii', 'Account Number:', 'Account Name:', 1, NULL, 0, '2023-08-09', NULL, NULL, 300.00, '2023-08-09 10:51:43', '2023-08-09 10:51:43'),
(10, 1, '10010', 1, 'sooii', 'Account Number:', 'Routing Number:', 1, NULL, 0, '2023-08-09', NULL, NULL, 1.00, '2023-08-09 10:53:22', '2023-08-09 10:53:22'),
(11, 1, '10011', 1, 'sooii', 'Account Number:', 'Routing Number:', 1, NULL, 0, '2023-08-09', NULL, NULL, 10.00, '2023-08-09 12:00:21', '2023-08-09 12:00:21'),
(12, 1, '10012', 1, 'sooii', 'Account Number:', 'Routing Number:', 1, NULL, 1, '2023-08-09', '2023-08-16', 1, 10.00, '2023-08-09 12:04:01', '2023-08-16 08:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ar_wish_lists`
--
ALTER TABLE `ar_wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_appointment_lists`
--
ALTER TABLE `designer_appointment_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_chats`
--
ALTER TABLE `designer_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_education`
--
ALTER TABLE `designer_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_experiences`
--
ALTER TABLE `designer_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_portfolios`
--
ALTER TABLE `designer_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_profiles`
--
ALTER TABLE `designer_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_projects`
--
ALTER TABLE `designer_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_project_files`
--
ALTER TABLE `designer_project_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_project_milestone_payments`
--
ALTER TABLE `designer_project_milestone_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_rating_reviews`
--
ALTER TABLE `designer_rating_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_service_rates`
--
ALTER TABLE `designer_service_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_service_times`
--
ALTER TABLE `designer_service_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_name_unique` (`name`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color_variants`
--
ALTER TABLE `product_color_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_wish_lists`
--
ALTER TABLE `product_wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopkeeper_details`
--
ALTER TABLE `shopkeeper_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_orders`
--
ALTER TABLE `shop_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_product_images`
--
ALTER TABLE `shop_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_product_rating_reviews`
--
ALTER TABLE `shop_product_rating_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ar_wish_lists`
--
ALTER TABLE `ar_wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designer_appointment_lists`
--
ALTER TABLE `designer_appointment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `designer_chats`
--
ALTER TABLE `designer_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `designer_education`
--
ALTER TABLE `designer_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designer_experiences`
--
ALTER TABLE `designer_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designer_portfolios`
--
ALTER TABLE `designer_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designer_profiles`
--
ALTER TABLE `designer_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designer_projects`
--
ALTER TABLE `designer_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `designer_project_files`
--
ALTER TABLE `designer_project_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `designer_project_milestone_payments`
--
ALTER TABLE `designer_project_milestone_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `designer_rating_reviews`
--
ALTER TABLE `designer_rating_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `designer_service_rates`
--
ALTER TABLE `designer_service_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designer_service_times`
--
ALTER TABLE `designer_service_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_color_variants`
--
ALTER TABLE `product_color_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `product_wish_lists`
--
ALTER TABLE `product_wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shopkeeper_details`
--
ALTER TABLE `shopkeeper_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shop_orders`
--
ALTER TABLE `shop_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `shop_product_images`
--
ALTER TABLE `shop_product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `shop_product_rating_reviews`
--
ALTER TABLE `shop_product_rating_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
