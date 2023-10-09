-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 07:01 AM
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
  `user_type` text DEFAULT '\'admin\'',
  `android_device_token` text DEFAULT NULL,
  `ios_device_token` text DEFAULT NULL,
  `web_device_token` text DEFAULT NULL,
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

INSERT INTO `admins` (`id`, `name`, `user_type`, `android_device_token`, `ios_device_token`, `web_device_token`, `email`, `is_authentic`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '', '', 'driR0krOWKB7JC64bziotV:APA91bFuLzoekfyDIbZhawZqDAAqn61I8-lDmrsCglQUh1ewE9OMyJYDrRfbSiVd2wGznz2ypppTU0vdAVrlyt883kye-cTjSHlEXuI0t6M3fo6REm7JcOdvNb7mZHTwVaXGEYEZBIh9', 'admin@gmail.com', '1', NULL, '$2y$10$taL6s0Tif8jAqnz2VkacCuZhTUkpC0ITg0ky5jheOLUL3S7pXMik.', '2023-06-16 23:57:41', '2023-09-09 13:24:51');

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
(3, 6, 118, 'public/uploads/arImg1692354735.glb', '2023-08-21 13:37:22', '2023-08-21 13:37:22');

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
(6, '1', 1, 'City', 'Saving', '809982', 'r', 0, 0, '2023-08-21 10:21:52', '2023-08-21 10:21:52'),
(7, '2', 10, 'Islami Bank', 'saving', '24324', '3243', 1, 0, '2023-08-26 10:11:03', '2023-08-26 10:11:03'),
(8, '2', 10, 'Islami Bank', 'etre', 'wer', 'sdf', 1, 0, '2023-08-26 10:12:46', '2023-08-26 10:12:46'),
(9, '2', 10, 'Islami Bank', 'sdf', 'sdf', 'sdf', 1, 0, '2023-08-26 10:29:41', '2023-08-26 10:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'designer',
  `id_no` text DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `rating` decimal(11,2) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `meeting_charge_rate` decimal(11,2) DEFAULT NULL,
  `project_charge_rate` decimal(11,2) DEFAULT NULL,
  `product_charge_rate` decimal(11,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `web_device_token` text DEFAULT NULL,
  `android_device_token` text DEFAULT NULL,
  `ios_device_token` text DEFAULT NULL,
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

INSERT INTO `designers` (`id`, `user_type`, `id_no`, `name`, `rating`, `email`, `meeting_charge_rate`, `project_charge_rate`, `product_charge_rate`, `status`, `web_device_token`, `android_device_token`, `ios_device_token`, `is_deleted`, `is_authentic`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(13, 'designer', '10013', 'sdf', NULL, 'admin22@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$.6z/NVhrIXoVWp0vL9gkuOnRCV.aDl17n6eqdivompGn7EV8VU9sq', '2023-08-31 10:02:13', '2023-08-31 10:02:13'),
(1, 'designer', NULL, 'kazi', NULL, 'designer@gmail.com', 2.00, 10.00, NULL, 1, '', NULL, NULL, 0, '1', '2023-08-01 22:02:37', '$2y$10$sOY4QeG56Lo4NQIHgO6lZelfL3XMO2.jgR.w7NHwQoCB9J9Ysg3hO', '2023-08-01 22:02:14', '2023-09-09 14:47:18'),
(3, 'designer', NULL, 'deisgner500', NULL, 'deisgner500@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', '2023-08-02 08:10:33', '$2y$10$6ZPMXWB6hEkvgtZWafX21.MyaFgNiZrzWMiOIwqrakYbVwfej7Hom', '2023-08-02 08:10:16', '2023-08-20 07:51:48'),
(4, 'designer', NULL, 'Designer', NULL, 'designer99@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '0', NULL, '$2y$10$N02fiKn.eHNpHNr1IMd0s.fkWMU3.XkoSus/b28JFvXeYi/W.zide', '2023-08-03 22:26:59', '2023-08-20 07:51:48'),
(5, 'designer', NULL, 'jim', NULL, 'designerJim@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '0', NULL, '$2y$10$Q9NJs7iuo175RSx/zuyKnu5i98/6IDzHKfTz36aDWwBND1j2tsIoO', '2023-08-03 22:37:38', '2023-08-20 07:51:48'),
(6, 'designer', '10006', 'deisg333', NULL, 'deisgner33@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$yCWpMYWk7p0M084DFA1souzN.9sn/hZRsNW.1dPpW8Wq5IZyEahWG', '2023-08-03 23:06:40', '2023-08-20 07:51:48'),
(7, 'designer', '10007', 'deisgner@gmail.com', NULL, 'deisgner@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '1', NULL, '$2y$10$uR078S5xHxqJCz2ZIQo6q.w1OJQjO0XS4.g2YE7lNO4.zfTkMDDOi', '2023-08-03 23:06:52', '2023-09-01 06:30:28'),
(8, 'designer', '10008', 'deisgner600', NULL, 'designer600@gmail.com', NULL, 40.00, 3.00, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$HdFfmT/7c.TQ0a8/dwJeQuiahtbkyQBlnrY/I./HAyKFo2BIahnRS', '2023-08-03 23:16:41', '2023-08-20 07:51:48'),
(9, 'designer', '10009', 'Designer Name', NULL, 'designer6916@gmail.com', 2.00, 40.00, 3.00, 1, NULL, NULL, NULL, 0, '0', NULL, '$2y$10$13igctEENJqgGs0lAJ3O3uVLXgUVOYP.iUye13xrU2Me0hqLESDea', '2023-08-09 06:59:13', '2023-08-20 07:51:48'),
(10, 'designer', '10010', 'Designer Name', NULL, 'designer991@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '0', NULL, '$2y$10$lW8iQQPbDipNetrsENdMMeroIDwb.6i31ZQVK6RBryFDawp8fHzqe', '2023-08-09 08:05:34', '2023-08-20 07:51:48'),
(11, 'designer', '10011', 'dhaka', NULL, 'dhaka@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$oqDWd3n4Gm4BSyzAe9xJsOkhSTAFbL5ZFj.j9xKTPzQyAjv68dc0W', '2023-08-20 07:06:49', '2023-08-20 07:51:48'),
(12, 'designer', '10012', 'gb', NULL, 'bg@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$d12T.ye5oGuyKtcrYapXO.JgkkgyTNstllDaul.G5XtBvFP9b6ECi', '2023-08-20 08:43:12', '2023-08-20 08:43:12'),
(14, 'designer', '10014', 'kazi', NULL, 'adddmin@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$Gu4J7pAoRlCWTvBRiC9dkO0eOnqN87nULlk6kMGxnW89CGn9W7aMC', '2023-08-31 10:07:41', '2023-08-31 10:07:41'),
(15, 'designer', '10015', 'kazi11@gmail.com', NULL, 'kazi11@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, 0, '1', NULL, '$2y$10$pgZu8txiU6gWSgurNE6Nb.Xd0FcjZmrvfPCXBFiU8lDeYyNzwBMy6', '2023-09-07 10:32:14', '2023-09-07 10:32:14'),
(16, 'designer', '10016', 'designer@gmail.com', NULL, 'designer@gmail.com', NULL, NULL, NULL, 1, 'cfEAo2ex2kHUrxP_wlnGP8:APA91bFYVZmpdx1Xfenvrue_w6RUT35lCCdOp3-yIwkm5uK_16DmkYQ4pGIJS1k8MlmeI6oDsQr0md0LTaaYhAeElFgfsIARqNK0-Dp1JOvurwLrpdVTn_wrG9z-pN0BZfRPbn9DPY4v', NULL, NULL, 0, '1', NULL, '$2y$10$i0Qq1XpwN4aaWCe0pbutp.O3l5nbUdaPtQzsRf1qLcIY/Soitpudy', '2023-09-07 10:43:26', '2023-09-07 10:44:43');

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
(25, 6, '10025', 8, 1, '2023-07-26', 592, 'video', 1, 59, 2, '2023-08-30 03:53:29', '2023-08-31 05:26:09'),
(26, 6, '10026', 123, 16, '2023-09-04', 535, 'video', 1, 100, 2, '2023-09-07 10:47:14', '2023-09-13 13:43:01'),
(27, 6, '10027', 123, 16, '2023-09-04', 538, 'office', 0, 101, 2, '2023-09-07 11:04:27', '2023-09-13 11:43:28'),
(28, 6, '10028', 124, 16, '2023-09-05', 562, 'voice', 1, 112, 2, '2023-09-07 13:45:46', '2023-09-13 11:13:28');

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
(43, 6, 1, 3, 'fff', 0, 0, 0, 1, '16:33:22', '2023-08-25', '2023-08-25 10:33:22', '2023-08-25 10:33:22'),
(44, 6, 1, 3, 'dsdfsdf', 0, 0, 0, 1, '19:41:44', '2023-08-25', '2023-08-25 19:41:44', '2023-08-25 19:41:44'),
(45, 6, 1, 3, 'sdfsdfsd', 0, 0, 0, 1, '19:41:49', '2023-08-25', '2023-08-25 19:41:49', '2023-08-25 19:41:49');

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
(5, 'about me', 7, 'storage/designer_images/designer_images-16934728895159.png', 'storage/designer_images/designer_images-16921643956364.avif', 'storage/designer_images/designer_images-16921643691502.jpeg', 'hlw', 'about me', 0, '2023-07-24 23:30:51', '2023-08-31 09:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `designer_projects`
--

CREATE TABLE `designer_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `agreement_file` text DEFAULT NULL,
  `agreement_file_name` text DEFAULT NULL,
  `agreement_accepted` tinyint(4) NOT NULL DEFAULT 0,
  `agreement_details` text DEFAULT NULL,
  `description` text NOT NULL,
  `dateline` date NOT NULL,
  `project_rate` decimal(11,2) DEFAULT NULL,
  `client_id` bigint(20) NOT NULL,
  `is_milestone` bigint(20) NOT NULL DEFAULT 0,
  `total_paid` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>pending,1=>partial,2=>completed',
  `designer_id` bigint(20) NOT NULL,
  `meeting_id` bigint(20) NOT NULL,
  `project_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=accept,2=completed,3=>reject',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_projects`
--

INSERT INTO `designer_projects` (`id`, `title`, `agreement_file`, `agreement_file_name`, `agreement_accepted`, `agreement_details`, `description`, `dateline`, `project_rate`, `client_id`, `is_milestone`, `total_paid`, `payment_status`, `designer_id`, `meeting_id`, `project_status`, `created_at`, `updated_at`) VALUES
(11, 'sdf', 'public/uploads/project/1694613401.jpg', 'download.jpg', 1, '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id\n                        cumque provident a eos aliquid. Dolorum, dolorem, repellat\n                        asperiores, reiciendis dignissimos quis at omnis repellendus\n                        animi doloremque esse quibusdam saepe sed. Neque vero laudantium\n                        rerum placeat eos incidunt cumque suscipit provident accusantium\n                        accusamus recusandae aliquid nemo quibusdam aperiam veniam,\n                        voluptas unde.', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id\n                        cumque provident a eos aliquid. Dolorum, dolorem, repellat\n                        asperiores, reiciendis dignissimos quis at omnis repellendus\n                        animi doloremque esse quibusdam saepe sed. Neque vero laudantium\n                        rerum placeat eos incidunt cumque suscipit provident accusantium\n                        accusamus recusandae aliquid nemo quibusdam aperiam veniam,\n                        voluptas unde.', '2023-07-27', 99.00, 6, 0, 0.00, 0, 1, 3, 1, '2023-07-26 01:55:02', '2023-09-13 13:56:41'),
(12, 'Project Title', NULL, NULL, 0, 'Project Title\r\nProject Title\r\nDescription\r\nDescription\r\nProject fileuser2.jpg\r\nProject Date Line\r\n07/27/2023\r\nNEXT\r\nAgreement Info', 'Description', '2023-07-27', 3454.00, 6, 0, 0.00, 0, 1, 4, 3, '2023-07-26 08:22:23', '2023-08-31 06:28:30'),
(13, 'Project Title', NULL, NULL, 0, 'sdf', 'Description', '2023-07-22', 345.00, 6, 0, 0.00, 0, 1, 1, 0, '2023-07-28 02:28:52', '2023-07-28 02:28:52'),
(14, 'Project Title', NULL, NULL, 0, 'Project Title\r\nProject Title\r\nDescription\r\nDescription\r\nProject filedefault-profile-picture-avatar-user-avatar-icon-person-icon-head-icon-profile-picture-icons-default-anonymous-user-male-and-female-businessman-photo-placeholder-social-network-avatar-portrait-free-vector.jpg\r\nProject Date Line\r\n07/28/2023\r\nNEXT\r\nAgreement Info', 'Description', '2023-07-28', 500.00, 6, 0, 0.00, 0, 1, 2, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(27, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 04:17:07', '2023-08-07 04:17:07'),
(28, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 04:20:29', '2023-08-07 04:20:29'),
(29, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 05:17:36', '2023-08-07 05:17:36'),
(30, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 9, 0, '2023-08-07 05:18:57', '2023-08-07 05:18:57'),
(31, 'dfg', NULL, NULL, 0, 'sdf', 'dfg', '2023-08-18', 34.00, 6, 0, 0.00, 0, 1, 24, 0, '2023-08-23 05:31:34', '2023-08-23 05:31:34'),
(32, 'fdg', NULL, NULL, 0, 'dfg', 'dfg', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 6, 0, '2023-08-23 06:40:46', '2023-08-23 06:40:46'),
(33, 'df', NULL, NULL, 0, 'wer', 'wer', '2023-08-18', 345.00, 6, 0, 0.00, 0, 1, 5, 0, '2023-08-23 06:43:33', '2023-08-23 06:43:33'),
(34, '345', NULL, NULL, 0, '345', '345', '2023-08-25', 34.00, 6, 0, 0.00, 0, 1, 7, 0, '2023-08-23 06:44:06', '2023-08-23 06:44:06'),
(35, 'ert', NULL, NULL, 0, 'ert', 'ert', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 11, 0, '2023-08-23 06:46:23', '2023-08-23 06:46:23'),
(36, 'dfg', NULL, NULL, 0, 'dfh', 'dfg', '2023-08-23', 45.00, 6, 0, 0.00, 0, 1, 12, 0, '2023-08-23 08:12:58', '2023-08-23 08:12:58'),
(37, 'sdfs', NULL, NULL, 0, 'dfgdfg', 'sdf', '2023-08-24', 45.00, 6, 0, 0.00, 0, 1, 13, 0, '2023-08-23 08:14:42', '2023-08-23 08:14:42'),
(38, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-07-26', 40.00, 6, 0, 0.00, 0, 1, 91, 0, '2023-08-26 12:39:56', '2023-08-26 12:39:56'),
(39, '\'title 1\'', NULL, NULL, 0, 'sdf', 'sdf', '2023-09-26', 40.00, 6, 0, 0.00, 0, 1, 25, 0, '2023-08-30 03:58:49', '2023-08-30 03:58:49'),
(40, 'Designer muse project', NULL, NULL, 0, NULL, 'Designer muse project', '2023-09-14', NULL, 6, 0, 0.00, 0, 16, 28, 0, '2023-09-13 11:13:28', '2023-09-13 11:13:28'),
(41, 'sdf', NULL, NULL, 0, NULL, 'sdf', '2023-09-13', NULL, 6, 0, 0.00, 0, 16, 27, 0, '2023-09-13 11:43:28', '2023-09-13 11:43:28'),
(42, 'fd', NULL, NULL, 0, NULL, 'df', '2023-09-15', NULL, 6, 0, 0.00, 0, 16, 26, 0, '2023-09-13 13:43:01', '2023-09-13 13:43:01');

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
(19, 37, 0, 'public/uploads/project/1692778482.png', 'image_2023_08_17T12_02_57_466Z.png', 1, '2023-08-23 08:14:42', '2023-08-23 08:14:42'),
(20, 27, 2, 'public/uploads/project/1693031051.jpg', '1689413251283.jpg', 1, '2023-08-26 06:24:11', '2023-08-26 06:24:11'),
(21, 39, 0, 'public/uploads/project/1693367929.jpg', 'furnitureinstore-scott-grey-velvet-2-seater-sofa-p15027-64758_image.jpg', 1, '2023-08-30 03:58:49', '2023-08-30 03:58:49'),
(22, 40, 0, 'public/uploads/project/1694603608.docx', 'Designer Muse september 12.docx', 1, '2023-09-13 11:13:28', '2023-09-13 11:13:28'),
(23, 41, 0, 'public/uploads/project/1694605408.docx', '~$signer Muse september 12.docx', 1, '2023-09-13 11:43:28', '2023-09-13 11:43:28'),
(24, 42, 0, 'public/uploads/project/1694612581.docx', '~$signer Muse september 12.docx', 1, '2023-09-13 13:43:01', '2023-09-13 13:43:01');

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
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>uncompleted 1=>completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_project_milestone_payments`
--

INSERT INTO `designer_project_milestone_payments` (`id`, `project_id`, `title`, `amount`, `paid_date`, `payable_date`, `payment_id`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(6, 11, 'dfsf', 345.00, '2023-07-26', '2023-07-26', NULL, 0, 1, '2023-07-26 01:55:02', '2023-07-26 04:19:38'),
(7, 11, 'dffgdf', 456.00, '2023-07-26', '2023-07-26', NULL, 0, 1, '2023-07-26 01:55:02', '2023-07-26 05:01:02'),
(8, 12, 'dxcfvsd', 3453.00, '2023-07-28', '2023-07-26', NULL, 0, 1, '2023-07-26 08:22:23', '2023-07-28 03:02:48'),
(9, 12, 'werwe', 454.00, '2023-07-26', '2023-07-26', NULL, 0, 1, '2023-07-26 08:22:23', '2023-07-26 08:24:59'),
(10, 13, 'dxcfvsd', 300.00, '2023-07-28', '2023-07-28', NULL, 0, 1, '2023-07-28 02:28:52', '2023-07-28 04:30:49'),
(11, 14, 'dxcfvsd', 100.00, NULL, '2023-07-28', NULL, 0, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(12, 14, 'dfg', 100.00, NULL, '2023-07-28', NULL, 0, 0, '2023-07-28 07:07:21', '2023-07-28 07:07:21'),
(13, 14, 'dfgdfg', 100.00, '2023-07-31', '2023-07-28', NULL, 0, 1, '2023-07-28 07:07:21', '2023-07-31 03:59:31'),
(14, 14, 'sdfsdf', 200.00, '2023-07-31', '2023-07-28', NULL, 0, 1, '2023-07-28 07:07:21', '2023-07-31 03:12:54'),
(15, 12, 'erte', 400.00, '2023-08-02', '2023-08-02', NULL, 0, 1, '2023-08-02 03:34:58', '2023-08-02 03:54:35'),
(16, 11, 'sdf', 100.00, '2023-09-11', '2023-08-07', 121, 1, 1, '2023-08-07 02:54:41', '2023-09-11 14:42:59'),
(17, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 02:55:45', '2023-08-07 02:55:45'),
(18, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 02:57:42', '2023-08-07 02:57:42'),
(19, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 02:59:36', '2023-08-07 02:59:36'),
(20, 25, '\'title\'', 100.00, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 04:14:50', '2023-08-07 04:14:50'),
(21, 26, '\'title\'', 100.00, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 04:15:57', '2023-08-07 04:15:57'),
(22, 27, 'title', 100.00, '2023-09-07', '2023-08-07', 103, 1, 1, '2023-08-07 04:17:07', '2023-09-07 12:00:22'),
(23, 28, 'title', 100.00, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 04:20:29', '2023-08-07 04:20:29'),
(24, 29, 'title', 100.00, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 05:17:36', '2023-08-07 05:17:36'),
(25, 11, 'sdf', 100.50, NULL, '2023-08-07', NULL, 0, 0, '2023-08-07 05:17:39', '2023-08-07 05:17:39'),
(26, 30, 'title', 100.00, '2023-08-17', '2023-08-07', 11, 0, 1, '2023-08-07 05:18:57', '2023-08-17 11:38:42'),
(27, 30, 'milestone 2', 200.00, '2023-08-17', '2023-08-17', 12, 0, 1, '2023-08-17 11:41:10', '2023-08-17 11:42:09'),
(28, 30, 'title 3', 300.00, '2023-08-17', '2023-08-17', 15, 0, 1, '2023-08-17 12:08:59', '2023-08-17 12:10:29'),
(29, 30, 'title 4', 10.00, '2023-08-23', '2023-08-17', 16, 1, 1, '2023-08-17 12:16:12', '2023-09-11 15:17:11'),
(30, 31, 'new', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 05:31:34', '2023-08-23 05:31:34'),
(31, 32, 'sdfs', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 06:40:46', '2023-08-23 06:40:46'),
(32, 33, 'new', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 06:43:33', '2023-08-23 06:43:33'),
(33, 34, 'sdfs', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 06:44:06', '2023-08-23 06:44:06'),
(34, 35, 'new', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 06:46:23', '2023-08-23 06:46:23'),
(35, 36, 'new', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 08:12:58', '2023-08-23 08:12:58'),
(36, 37, 'new', 45.00, NULL, '2023-08-23', NULL, 0, 0, '2023-08-23 08:14:42', '2023-08-23 08:14:42'),
(37, 11, 'sdf', 100.50, '2023-09-08', '2023-08-24', 115, 1, 1, '2023-08-24 07:32:47', '2023-09-08 10:23:45'),
(38, 38, 'title', 100.00, NULL, '2023-08-26', NULL, 0, 0, '2023-08-26 12:39:56', '2023-08-26 12:39:56'),
(39, 39, 'title', 100.00, '2023-09-07', '2023-08-30', 106, 1, 1, '2023-08-30 03:58:49', '2023-09-07 12:16:16'),
(40, 39, 'title', 45.00, '2023-09-07', '2023-08-30', 104, 1, 1, '2023-08-30 03:58:49', '2023-09-07 12:12:52'),
(41, 27, 'new payment', 70.00, '2023-09-07', '2023-09-07', 102, 1, 1, '2023-09-07 11:56:00', '2023-09-07 11:57:09'),
(42, 39, '343', 400.00, '2023-09-07', '2023-09-07', 108, 1, 1, '2023-09-07 13:29:48', '2023-09-07 13:31:25'),
(43, 39, 'fsd', 34.00, '2023-09-07', '2023-09-07', 109, 1, 1, '2023-09-07 13:39:43', '2023-09-07 13:40:44'),
(44, 39, 'sdf', 23.00, '2023-09-07', '2023-09-07', 111, 1, 1, '2023-09-07 13:42:37', '2023-09-07 13:43:55');

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
  `active_time_schedule` text DEFAULT NULL,
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
(12, 12, 0.00, 0.00, 0.00, '30', '2023-08-20 08:43:12', '2023-08-20 08:43:12'),
(13, 13, 0.00, 0.00, 0.00, '30', '2023-08-31 10:02:13', '2023-08-31 10:02:13'),
(14, 14, 0.00, 0.00, 0.00, '30', '2023-08-31 10:07:41', '2023-08-31 10:07:41'),
(15, 15, 0.00, 0.00, 0.00, '30', '2023-09-07 10:32:14', '2023-09-07 10:32:14'),
(16, 16, 10.00, 20.00, 30.00, '30', '2023-09-07 10:43:26', '2023-09-07 10:45:05');

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
(2, 1, '2023-07-03', '15', '[\"450\",\"453\"]', '2023-07-18 05:38:53', '2023-08-30 04:40:29'),
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
(119, 1, '2023-09-10', '15', '[\"450\",\"451\"]', '2023-08-22 06:24:29', '2023-08-22 06:24:29'),
(120, 16, '2023-09-01', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(121, 16, '2023-09-02', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(122, 16, '2023-09-03', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(123, 16, '2023-09-04', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(124, 16, '2023-09-05', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(125, 16, '2023-09-06', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(126, 16, '2023-09-07', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(127, 16, '2023-09-08', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(128, 16, '2023-09-09', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(129, 16, '2023-09-10', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(130, 16, '2023-09-11', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(131, 16, '2023-09-12', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(132, 16, '2023-09-13', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(133, 16, '2023-09-14', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(134, 16, '2023-09-15', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(135, 16, '2023-09-16', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(136, 16, '2023-09-17', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(137, 16, '2023-09-18', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(138, 16, '2023-09-19', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(139, 16, '2023-09-20', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(140, 16, '2023-09-21', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(141, 16, '2023-09-22', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(142, 16, '2023-09-23', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(143, 16, '2023-09-24', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(144, 16, '2023-09-25', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(145, 16, '2023-09-26', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(146, 16, '2023-09-27', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(147, 16, '2023-09-28', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(148, 16, '2023-09-29', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(149, 16, '2023-09-30', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(150, 16, '2023-10-01', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(151, 16, '2023-10-02', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(152, 16, '2023-10-03', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(153, 16, '2023-10-04', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(154, 16, '2023-10-05', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(155, 16, '2023-10-06', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37'),
(156, 16, '2023-10-07', '30', '[\"533\",\"534\",\"535\",\"536\",\"537\",\"538\",\"545\",\"546\",\"549\",\"550\",\"551\",\"553\",\"554\",\"561\",\"562\",\"563\",\"564\",\"565\",\"575\",\"577\",\"578\",\"579\",\"580\"]', '2023-09-07 10:45:37', '2023-09-07 10:45:37');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'sdf sdfsd sdf', 'sdf sdfsd sdfsd', '2023-09-05 10:29:15', '2023-09-05 10:29:15');

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
(43, '2023_08_18_185049_create_admin_settings_table', 23),
(44, '2023_09_05_141747_create_supports_table', 24),
(45, '2023_09_05_151711_create_faqs_table', 25),
(46, '2023_09_08_150303_create_notifications_table', 26),
(48, '2023_09_11_162602_create_notification_device_tokens_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` tinyint(4) DEFAULT NULL COMMENT '1=admin,2=designer,3=shopkeeper,4=user',
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_type`, `user_id`, `title`, `body`, `date`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 'Designer Muse New Order', 'A new order has been created', NULL, '2023-09-08 10:21:02', '2023-09-08 10:21:02'),
(2, 2, 7, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-08 10:23:49', '2023-09-08 10:23:49'),
(3, 1, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-08 10:23:56', '2023-09-08 10:23:56'),
(4, 2, 16, 'Designer Muse New Meeting', 'A new Meeting has been created', NULL, '2023-09-08 13:38:57', '2023-09-08 13:38:57'),
(5, 2, 16, 'Designer Muse New Meeting', 'A new Meeting has been created', NULL, '2023-09-08 13:40:13', '2023-09-08 13:40:13'),
(6, 3, 8, 'Designer Muse New Order', 'A new order has been created', NULL, '2023-09-11 14:06:17', '2023-09-11 14:06:17'),
(7, 2, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 14:43:35', '2023-09-11 14:43:35'),
(8, 1, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 14:43:48', '2023-09-11 14:43:48'),
(9, 2, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 15:16:04', '2023-09-11 15:16:04'),
(10, 1, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 15:16:16', '2023-09-11 15:16:16'),
(11, 2, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 15:17:13', '2023-09-11 15:17:13'),
(12, 1, 1, 'Designer Muse New Project Milestone Payment', 'A new Project Milestone Payment Completed', NULL, '2023-09-11 15:17:20', '2023-09-11 15:17:20'),
(13, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 10:50:46', '2023-09-13 10:50:46'),
(14, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:08:08', '2023-09-13 13:08:08'),
(15, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:22:46', '2023-09-13 13:22:46'),
(16, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:23:11', '2023-09-13 13:23:11'),
(17, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:24:33', '2023-09-13 13:24:33'),
(18, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:25:11', '2023-09-13 13:25:11'),
(19, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:25:26', '2023-09-13 13:25:26'),
(20, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:44:59', '2023-09-13 13:44:59'),
(21, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:53:29', '2023-09-13 13:53:29'),
(22, 2, 6, 'Designer Muse Project Agreement Created', 'sdfAgreement Created', NULL, '2023-09-13 13:56:42', '2023-09-13 13:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `notification_device_tokens`
--

CREATE TABLE `notification_device_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` text DEFAULT NULL COMMENT 'generalUser,designer,shopKeeper,admin',
  `device_type` tinyint(4) NOT NULL COMMENT 'android=1,ios=2,web=3',
  `user_id` bigint(20) NOT NULL,
  `token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_device_tokens`
--

INSERT INTO `notification_device_tokens` (`id`, `user_type`, `device_type`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(9, 'generalUser', 1, 6, 'token', '2023-09-12 10:06:38', '2023-09-12 10:06:38'),
(10, 'generalUser', 1, 6, 'tokenrt', '2023-09-12 10:07:05', '2023-09-12 10:07:05'),
(12, 'gg', 1, 1, 'tokenrt', '2023-09-12 14:20:17', '2023-09-12 14:20:17'),
(13, 'generalUser', 3, 6, 'driR0krOWKB7JC64bziotV:APA91bFuLzoekfyDIbZhawZqDAAqn61I8-lDmrsCglQUh1ewE9OMyJYDrRfbSiVd2wGznz2ypppTU0vdAVrlyt883kye-cTjSHlEXuI0t6M3fo6REm7JcOdvNb7mZHTwVaXGEYEZBIh9', '2023-09-13 07:26:30', '2023-09-13 07:26:30'),
(14, 'designer', 3, 1, 'cfEAo2ex2kHUrxP_wlnGP8:APA91bFYVZmpdx1Xfenvrue_w6RUT35lCCdOp3-yIwkm5uK_16DmkYQ4pGIJS1k8MlmeI6oDsQr0md0LTaaYhAeElFgfsIARqNK0-Dp1JOvurwLrpdVTn_wrG9z-pN0BZfRPbn9DPY4v', '2023-09-13 07:32:05', '2023-09-13 07:32:05');

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
(60, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10060', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-08-25', '2023-08-25 08:53:49', '2023-08-25 08:53:49'),
(61, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10061', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'CO', '6300', 0, 0, '2023-08-26', '2023-08-26 12:29:20', '2023-08-26 12:29:20'),
(62, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10062', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'CO', '6300', 0, 0, '2023-08-26', '2023-08-26 12:29:49', '2023-08-26 12:29:49'),
(63, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10063', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-26', '2023-08-26 12:30:03', '2023-08-26 12:30:03'),
(64, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10064', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-26', '2023-08-26 12:30:10', '2023-08-26 12:30:10'),
(65, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10065', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-26', '2023-08-26 12:30:19', '2023-08-26 12:30:19'),
(66, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10066', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-26', '2023-08-26 12:30:33', '2023-08-26 12:30:33'),
(67, 6, NULL, 169.00, 0.00, 0.00, 169.00, '10067', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 0, 0, '2023-08-26', '2023-08-26 12:31:02', '2023-08-26 12:31:02'),
(68, 6, 58, 169.00, 0.00, 0.00, 169.00, '10068', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'GU', '6300', 1, 0, '2023-08-26', '2023-08-26 13:47:48', '2023-08-31 05:39:18'),
(69, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10069', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GU', 'sdfsd', 0, 0, '2023-09-01', '2023-09-01 13:47:14', '2023-09-01 13:47:14'),
(70, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10070', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GU', 'sdfsd', 0, 0, '2023-09-01', '2023-09-01 13:48:50', '2023-09-01 13:48:50'),
(71, 6, 65, 34.00, 0.00, 0.00, 34.00, '10071', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'sdfsd', 1, 0, '2023-09-01', '2023-09-01 13:49:30', '2023-09-01 13:51:39'),
(72, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10072', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GU', 'sdfsd', 0, 0, '2023-09-01', '2023-09-01 13:53:04', '2023-09-01 13:53:04'),
(73, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10073', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:49:16', '2023-09-04 09:49:16'),
(74, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10074', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:49:55', '2023-09-04 09:49:55'),
(75, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10075', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:51:17', '2023-09-04 09:51:17'),
(76, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10076', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:51:58', '2023-09-04 09:51:58'),
(77, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10077', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:52:05', '2023-09-04 09:52:05'),
(78, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10078', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'edr', 0, 0, '2023-09-04', '2023-09-04 09:52:37', '2023-09-04 09:52:37'),
(79, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10079', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:46:55', '2023-09-04 10:46:55'),
(80, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10080', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:48:09', '2023-09-04 10:48:09'),
(81, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10081', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-09-04', '2023-09-04 10:49:40', '2023-09-04 10:49:40'),
(82, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10082', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:50:25', '2023-09-04 10:50:25'),
(83, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10083', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:51:15', '2023-09-04 10:51:15'),
(84, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10084', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-09-04', '2023-09-04 10:51:29', '2023-09-04 10:51:29'),
(85, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10085', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:52:06', '2023-09-04 10:52:06'),
(86, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10086', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:52:12', '2023-09-04 10:52:12'),
(87, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10087', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:52:22', '2023-09-04 10:52:22'),
(88, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10088', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'PW', 'sdf', 0, 0, '2023-09-04', '2023-09-04 10:53:00', '2023-09-04 10:53:00'),
(89, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10089', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-09-04', '2023-09-04 10:53:10', '2023-09-04 10:53:10'),
(90, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10090', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-09-04', '2023-09-04 10:53:20', '2023-09-04 10:53:20'),
(91, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10091', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'AS', '6300', 0, 0, '2023-09-04', '2023-09-04 11:36:50', '2023-09-04 11:36:50'),
(92, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10092', '1', '', '', '', NULL, NULL, '162, BAGAN PARA, SHANKAR BATI', 'NAMASHANKARBATI', 'AS', '6300', 0, 0, '2023-09-04', '2023-09-04 11:37:02', '2023-09-04 11:37:02'),
(93, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10093', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GU', '1207', 0, 0, '2023-09-04', '2023-09-04 11:37:44', '2023-09-04 11:37:44'),
(94, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10094', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 0, 0, '2023-09-04', '2023-09-04 11:38:18', '2023-09-04 11:38:18'),
(95, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10095', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'GA', '1207', 0, 0, '2023-09-04', '2023-09-04 11:39:16', '2023-09-04 11:39:16'),
(96, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10096', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AZ', '6300', 0, 0, '2023-09-04', '2023-09-04 11:39:32', '2023-09-04 11:39:32'),
(97, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10097', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AS', '6300', 0, 0, '2023-09-04', '2023-09-04 11:46:22', '2023-09-04 11:46:22'),
(98, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10098', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AS', '6300', 0, 0, '2023-09-04', '2023-09-04 11:46:35', '2023-09-04 11:46:35'),
(99, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10099', '1', '', '', '', NULL, NULL, 'dhaka bosila', 'dhaka', 'HI', '1207', 0, 0, '2023-09-04', '2023-09-04 11:46:52', '2023-09-04 11:46:52'),
(100, 6, NULL, 34.00, 0.00, 0.00, 34.00, '10100', '1', '', '', '', NULL, NULL, 'line 1, line 2', 'NAMASHANKARBATI', 'AR', '6300', 0, 0, '2023-09-04', '2023-09-04 11:48:41', '2023-09-04 11:48:41'),
(101, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10101', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AK', 'sdfsd', 0, 0, '2023-09-04', '2023-09-04 11:50:32', '2023-09-04 11:50:32'),
(102, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10102', '1', '', '', '', NULL, NULL, 'asdf', 'sdf', 'AZ', 'sdfsd', 0, 0, '2023-09-04', '2023-09-04 11:51:23', '2023-09-04 11:51:23'),
(103, 6, NULL, 79.00, 0.00, 0.00, 79.00, '10103', '1', '', '', '', NULL, NULL, 'asdf', 'sdf', 'AZ', 'sdfsd', 0, 0, '2023-09-04', '2023-09-04 11:52:33', '2023-09-04 11:52:33'),
(104, 6, NULL, 20.00, 10.00, 0.00, 20.00, '10104', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AZ', 'sdfsd', 0, 0, '2023-09-07', '2023-09-07 09:36:46', '2023-09-07 09:36:46'),
(105, 6, 99, 20.00, 10.00, 0.00, 20.00, '10105', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AZ', 'sdfsd', 1, 0, '2023-09-07', '2023-09-07 09:53:07', '2023-09-07 09:54:30'),
(106, 6, 107, 30.00, 10.00, 0.00, 30.00, '10106', '1', '', '', '', NULL, NULL, 'line 1', 'NAMASHANKARBATI', 'AZ', '6300', 1, 0, '2023-09-07', '2023-09-07 13:01:32', '2023-09-07 13:02:37'),
(107, 6, 113, 20.00, 10.00, 0.00, 20.00, '10107', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'AS', 'sdf', 1, 0, '2023-09-08', '2023-09-08 10:07:13', '2023-09-08 10:08:27'),
(108, 6, 114, 20.00, 10.00, 0.00, 20.00, '10108', '1', '', '', '', NULL, NULL, 'sdf', 'sdf', 'HI', 'sdfsd', 1, 0, '2023-09-08', '2023-09-08 10:12:18', '2023-09-08 10:14:04'),
(109, 6, 119, 60.00, 30.00, 0.00, 60.00, '10109', '1', '', '', '', NULL, NULL, 'asdf', 'sdaf', 'GA', 'sdfsd', 1, 0, '2023-09-11', '2023-09-11 14:05:02', '2023-09-11 14:06:16');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `shop_order_id`, `shop_id`, `product_id`, `unit_price`, `total_payable`, `unit_cost`, `service_charge`, `quantity`, `discount`, `shipping_price`, `color_variant_id`, `status`, `created_at`, `updated_at`, `payment_status`) VALUES
(4, 6, 5, 12, 39, 4534.00, 3784.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:31:41', '2023-06-24 04:31:41', 0),
(3, 6, 5, 12, 38, 34534.00, 2334.00, 0.00, NULL, 3.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:31:41', '2023-06-24 04:31:41', 0),
(5, 7, 6, 12, 38, 34534.00, 38774.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:33:28', '2023-06-24 04:33:28', 0),
(6, 7, 6, 12, 39, 4534.00, 309.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 04:33:28', '2023-06-24 04:33:28', 0),
(7, 8, 7, 12, 38, 34534.00, 34534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 08:17:29', '2023-06-24 08:17:29', 0),
(8, 8, 7, 12, 39, 4534.00, 4534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 08:17:29', '2023-06-24 08:17:29', 0),
(9, 9, 8, 12, 38, 34534.00, 34534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 12:38:50', '2023-06-24 12:38:50', 0),
(10, 9, 8, 12, 39, 4534.00, 4534.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-06-24 12:38:50', '2023-06-24 12:38:50', 0),
(11, 10, 9, 10, 41, 34.00, 34.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:37:41', '2023-08-01 05:37:41', 0),
(12, 11, 10, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:38:45', '2023-08-01 05:38:45', 0),
(13, 12, 11, 10, 43, 4000.00, 12000.00, 0.00, NULL, 3.00, 0.00, 0.00, 0, NULL, '2023-08-01 05:49:06', '2023-08-01 05:49:06', 0),
(14, 13, 12, 10, 43, 4000.00, 8000.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:06:05', '2023-08-01 22:06:05', 0),
(15, 14, 13, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:11:38', '2023-08-01 22:11:38', 0),
(16, 15, 14, 10, 43, 4000.00, 4000.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:25:51', '2023-08-01 22:25:51', 0),
(17, 16, 15, 10, 43, 4000.00, 4000.00, 0.00, 1.40, 1.00, 0.00, 0.00, 0, NULL, '2023-08-01 22:39:31', '2023-08-01 22:39:31', 1),
(18, 19, 18, 10, 43, 50.00, 200.00, 0.00, NULL, 4.00, 0.00, 0.00, 0, NULL, '2023-08-02 05:59:40', '2023-08-02 05:59:40', 0),
(19, 20, 19, 10, 43, 40.00, 80.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:01:14', '2023-08-02 06:01:14', 0),
(20, 20, 20, 12, 38, 34534.00, 69068.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:01:14', '2023-08-02 06:01:14', 0),
(21, 22, 22, 10, 43, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:04:54', '2023-08-02 06:04:54', 0),
(22, 23, 23, 10, 43, 40.00, 80.00, 0.00, NULL, 2.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:05:33', '2023-08-02 06:05:33', 0),
(23, 24, 24, 10, 43, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, 0, NULL, '2023-08-02 06:06:22', '2023-08-02 06:06:22', 0),
(24, 25, 25, 10, 43, 50.00, 100.00, 0.00, NULL, 2.00, 0.00, 0.00, 37, NULL, '2023-08-02 06:10:39', '2023-08-02 06:10:39', 0),
(25, 26, 26, 10, 63, 40.00, 120.00, 0.00, NULL, 3.00, 0.00, 0.00, NULL, NULL, '2023-08-03 01:33:24', '2023-08-03 01:33:24', 0),
(26, 27, 27, 10, 63, 40.00, 40.00, 0.00, NULL, 1.00, 0.00, 0.00, NULL, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53', 0),
(27, 27, 27, 10, 56, 45.00, 45.00, 0.00, NULL, 1.00, 0.00, 0.00, 46, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53', 0),
(28, 27, 27, 10, 52, 30.00, 60.00, 0.00, NULL, 2.00, 0.00, 0.00, NULL, NULL, '2023-08-03 02:11:53', '2023-08-03 02:11:53', 0),
(29, 28, 28, 10, 64, 5000.00, 5000.00, 0.00, 2.00, 1.00, 0.00, 0.00, 54, NULL, '2023-08-03 02:48:42', '2023-08-03 02:48:42', 1),
(30, 29, 29, 10, 60, 3000.00, 21000.00, 0.00, NULL, 7.00, 0.00, 0.00, 49, NULL, '2023-08-03 06:54:52', '2023-08-03 06:54:52', 0),
(31, 29, 29, 10, 60, 1000.00, 1000.00, 0.00, NULL, 1.00, 0.00, 0.00, 51, NULL, '2023-08-03 06:54:52', '2023-08-03 06:54:52', 0),
(32, 30, 30, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:20:18', '2023-08-17 13:20:18', 0),
(33, 31, 31, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:25:22', '2023-08-17 13:25:22', 0),
(34, 32, 32, 10, 45, 45.00, 675.00, 0.00, NULL, 15.00, 0.00, 0.00, 66, NULL, '2023-08-17 13:27:45', '2023-08-17 13:27:45', 0),
(35, 33, 33, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 05:47:36', '2023-08-21 05:47:36', 0),
(36, 33, 33, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 05:47:36', '2023-08-21 05:47:36', 0),
(37, 34, 34, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 09:03:08', '2023-08-21 09:03:08', 0),
(38, 34, 34, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 09:03:08', '2023-08-21 09:03:08', 0),
(39, 35, 35, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 09:08:42', '2023-08-21 09:08:42', 0),
(40, 35, 35, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 09:08:42', '2023-08-21 09:08:42', 0),
(41, 36, 36, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-21 13:50:22', '2023-08-21 13:50:22', 0),
(42, 36, 36, 10, 73, 34.00, 117.00, 0.00, 3.51, 3.00, 0.00, 15.00, 78, NULL, '2023-08-21 13:50:22', '2023-08-21 13:50:22', 0),
(43, 37, 37, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 04:41:31', '2023-08-22 04:41:31', 0),
(44, 37, 37, 10, 74, 34.00, 37.00, 0.00, 1.11, 1.00, 0.00, 3.00, 79, NULL, '2023-08-22 04:41:31', '2023-08-22 04:41:31', 0),
(45, 38, 38, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 04:42:08', '2023-08-22 04:42:08', 0),
(46, 38, 38, 10, 74, 34.00, 37.00, 0.00, 1.11, 1.00, 0.00, 3.00, 79, NULL, '2023-08-22 04:42:08', '2023-08-22 04:42:08', 0),
(47, 42, 41, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:45:47', '2023-08-22 10:45:47', 0),
(48, 43, 42, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:48:43', '2023-08-22 10:48:43', 0),
(49, 44, 43, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 10:49:43', '2023-08-22 10:49:43', 0),
(50, 45, 44, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 10:51:22', '2023-08-22 10:51:22', 0),
(51, 45, 44, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-22 10:51:22', '2023-08-22 10:51:22', 0),
(52, 46, 45, 10, 40, 45.00, 110.00, 0.00, 3.30, 2.00, 0.00, 20.00, 68, NULL, '2023-08-22 11:41:33', '2023-08-22 11:41:33', 0),
(53, 47, 46, 10, 40, 45.00, 94.00, 0.00, 2.82, 2.00, 0.00, 4.00, 68, NULL, '2023-08-22 12:19:34', '2023-08-22 12:19:34', 0),
(54, 48, 47, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-22 12:20:04', '2023-08-22 12:20:04', 0),
(55, 48, 47, 10, 74, 34.00, 74.00, 0.00, 2.22, 2.00, 0.00, 6.00, 79, NULL, '2023-08-22 12:20:04', '2023-08-22 12:20:04', 0),
(56, 49, 48, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:50:39', '2023-08-23 06:50:39', 0),
(57, 50, 49, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:57:43', '2023-08-23 06:57:43', 0),
(58, 51, 50, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-23 06:57:47', '2023-08-23 06:57:47', 0),
(59, 52, 51, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-23 07:10:48', '2023-08-23 07:10:48', 0),
(60, 53, 52, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:43:43', '2023-08-25 08:43:43', 0),
(61, 53, 52, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:43:43', '2023-08-25 08:43:43', 0),
(62, 54, 53, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:08', '2023-08-25 08:49:08', 0),
(63, 54, 53, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:08', '2023-08-25 08:49:08', 0),
(64, 55, 54, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:23', '2023-08-25 08:49:23', 0),
(65, 55, 54, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:23', '2023-08-25 08:49:23', 0),
(66, 56, 55, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:49:52', '2023-08-25 08:49:52', 0),
(67, 56, 55, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:49:52', '2023-08-25 08:49:52', 0),
(68, 57, 56, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:50:05', '2023-08-25 08:50:05', 0),
(69, 57, 56, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:50:05', '2023-08-25 08:50:05', 0),
(70, 58, 57, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:51:03', '2023-08-25 08:51:03', 0),
(71, 58, 57, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:51:03', '2023-08-25 08:51:03', 0),
(72, 59, 58, 10, 40, 45.00, 90.00, 0.00, 2.70, 2.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:52:35', '2023-08-25 08:52:35', 0),
(73, 59, 58, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:52:35', '2023-08-25 08:52:35', 0),
(74, 60, 59, 10, 40, 45.00, 45.00, 0.00, 1.35, 1.00, 0.00, 0.00, 68, NULL, '2023-08-25 08:53:49', '2023-08-25 08:53:49', 0),
(75, 60, 59, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-25 08:53:49', '2023-08-25 08:53:49', 0),
(76, 61, 60, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:29:20', '2023-08-26 12:29:20', 0),
(77, 61, 60, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:29:20', '2023-08-26 12:29:20', 0),
(78, 62, 61, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:29:49', '2023-08-26 12:29:49', 0),
(79, 62, 61, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:29:49', '2023-08-26 12:29:49', 0),
(80, 63, 62, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:30:03', '2023-08-26 12:30:03', 0),
(81, 63, 62, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:30:03', '2023-08-26 12:30:03', 0),
(82, 64, 63, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:30:10', '2023-08-26 12:30:10', 0),
(83, 64, 63, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:30:10', '2023-08-26 12:30:10', 0),
(84, 65, 64, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:30:19', '2023-08-26 12:30:19', 0),
(85, 65, 64, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:30:19', '2023-08-26 12:30:19', 0),
(86, 66, 65, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:30:33', '2023-08-26 12:30:33', 0),
(87, 66, 65, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:30:33', '2023-08-26 12:30:33', 0),
(88, 67, 66, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 12:31:02', '2023-08-26 12:31:02', 0),
(89, 67, 66, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 12:31:02', '2023-08-26 12:31:02', 0),
(90, 68, 67, 10, 40, 45.00, 135.00, 0.00, 4.05, 3.00, 0.00, 0.00, 68, NULL, '2023-08-26 13:47:48', '2023-08-31 05:39:18', 1),
(91, 68, 67, 10, 75, 34.00, 34.00, 0.00, 1.02, 1.00, 0.00, 0.00, 81, NULL, '2023-08-26 13:47:48', '2023-08-31 05:39:18', 1),
(92, 69, 68, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-01 13:47:14', '2023-09-01 13:47:14', 0),
(93, 70, 69, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-01 13:48:50', '2023-09-01 13:48:50', 0),
(94, 71, 70, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-01 13:49:30', '2023-09-01 13:51:39', 1),
(95, 72, 71, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-01 13:53:04', '2023-09-01 13:53:04', 0),
(96, 73, 72, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:49:16', '2023-09-04 09:49:16', 0),
(97, 73, 72, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:49:16', '2023-09-04 09:49:16', 0),
(98, 74, 73, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:49:55', '2023-09-04 09:49:55', 0),
(99, 74, 73, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:49:55', '2023-09-04 09:49:55', 0),
(100, 75, 74, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:51:17', '2023-09-04 09:51:17', 0),
(101, 75, 74, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:51:17', '2023-09-04 09:51:17', 0),
(102, 76, 75, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:51:58', '2023-09-04 09:51:58', 0),
(103, 76, 75, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:51:58', '2023-09-04 09:51:58', 0),
(104, 77, 76, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:52:05', '2023-09-04 09:52:05', 0),
(105, 77, 76, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:52:05', '2023-09-04 09:52:05', 0),
(106, 78, 77, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 09:52:37', '2023-09-04 09:52:37', 0),
(107, 78, 77, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 09:52:37', '2023-09-04 09:52:37', 0),
(108, 79, 78, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:46:55', '2023-09-04 10:46:55', 0),
(109, 79, 78, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:46:55', '2023-09-04 10:46:55', 0),
(110, 80, 79, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:48:09', '2023-09-04 10:48:09', 0),
(111, 80, 79, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:48:09', '2023-09-04 10:48:09', 0),
(112, 81, 80, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:49:40', '2023-09-04 10:49:40', 0),
(113, 82, 81, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:50:25', '2023-09-04 10:50:25', 0),
(114, 82, 81, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:50:25', '2023-09-04 10:50:25', 0),
(115, 83, 82, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:51:15', '2023-09-04 10:51:15', 0),
(116, 83, 82, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:51:15', '2023-09-04 10:51:15', 0),
(117, 84, 83, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:51:30', '2023-09-04 10:51:30', 0),
(118, 85, 84, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:52:06', '2023-09-04 10:52:06', 0),
(119, 85, 84, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:52:06', '2023-09-04 10:52:06', 0),
(120, 86, 85, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:52:12', '2023-09-04 10:52:12', 0),
(121, 86, 85, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:52:12', '2023-09-04 10:52:12', 0),
(122, 87, 86, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:52:22', '2023-09-04 10:52:22', 0),
(123, 87, 86, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:52:22', '2023-09-04 10:52:22', 0),
(124, 88, 87, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:53:00', '2023-09-04 10:53:00', 0),
(125, 88, 87, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 10:53:00', '2023-09-04 10:53:00', 0),
(126, 89, 88, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:53:10', '2023-09-04 10:53:10', 0),
(127, 90, 89, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 10:53:20', '2023-09-04 10:53:20', 0),
(128, 91, 90, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:36:50', '2023-09-04 11:36:50', 0),
(129, 92, 91, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:37:02', '2023-09-04 11:37:02', 0),
(130, 93, 92, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:37:44', '2023-09-04 11:37:44', 0),
(131, 94, 93, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:38:18', '2023-09-04 11:38:18', 0),
(132, 95, 94, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:39:16', '2023-09-04 11:39:16', 0),
(133, 96, 95, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:39:32', '2023-09-04 11:39:32', 0),
(134, 97, 96, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:46:22', '2023-09-04 11:46:22', 0),
(135, 98, 97, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:46:35', '2023-09-04 11:46:35', 0),
(136, 99, 98, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:46:52', '2023-09-04 11:46:52', 0),
(137, 100, 99, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:48:41', '2023-09-04 11:48:41', 0),
(138, 101, 100, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:50:32', '2023-09-04 11:50:32', 0),
(139, 101, 100, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 11:50:32', '2023-09-04 11:50:32', 0),
(140, 102, 101, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:51:23', '2023-09-04 11:51:23', 0),
(141, 102, 101, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 11:51:23', '2023-09-04 11:51:23', 0),
(142, 103, 102, 12, 38, 34.00, 34.00, 0.00, 10.20, 1.00, 0.00, 0.00, 106, NULL, '2023-09-04 11:52:33', '2023-09-04 11:52:33', 0),
(143, 103, 102, 12, 38, 45.00, 45.00, 0.00, 13.50, 1.00, 0.00, 0.00, 107, NULL, '2023-09-04 11:52:33', '2023-09-04 11:52:33', 0),
(144, 104, 103, 8, 126, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, NULL, NULL, '2023-09-07 09:36:46', '2023-09-07 09:36:46', 0),
(145, 105, 104, 8, 126, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, NULL, NULL, '2023-09-07 09:53:07', '2023-09-07 09:57:55', 1),
(146, 106, 105, 8, 126, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, 118, NULL, '2023-09-07 13:01:32', '2023-09-07 13:02:37', 1),
(147, 106, 106, 12, 38, 10.00, 10.00, 0.00, 3.00, 1.00, 0.00, 0.00, NULL, NULL, '2023-09-07 13:01:32', '2023-09-07 13:02:37', 1),
(148, 107, 107, 8, 125, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, NULL, NULL, '2023-09-08 10:07:13', '2023-09-08 10:08:27', 1),
(149, 108, 108, 8, 125, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, NULL, NULL, '2023-09-08 10:12:18', '2023-09-08 10:20:58', 1),
(150, 109, 109, 8, 125, 10.00, 40.00, 0.00, 1.20, 2.00, 0.00, 20.00, NULL, NULL, '2023-09-11 14:05:02', '2023-09-11 14:06:16', 1),
(151, 109, 109, 8, 126, 10.00, 20.00, 0.00, 0.60, 1.00, 0.00, 10.00, 118, NULL, '2023-09-11 14:05:02', '2023-09-11 14:06:16', 1);

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
  `payment_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=completed',
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

INSERT INTO `payments` (`id`, `payment_status`, `sector_type`, `payment_for`, `shop_order_id`, `user_id`, `designer_id`, `meeting_id`, `project_id`, `project_milestone_id`, `id_no`, `total_amount`, `trn_charge_amount`, `service_charge_amount`, `trn_id`, `payment_id`, `result`, `post_date`, `card_type`, `ref`, `track_id`, `order_id`, `cust_ref`, `trn_udf`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 2, NULL, 6, 1, 13, NULL, NULL, '10001', 23.00, NULL, 4.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:44:09', '2023-08-17 09:44:09'),
(2, 1, 1, 2, NULL, 6, 1, 14, NULL, NULL, '10002', 23.00, NULL, 6.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:44:24', '2023-08-17 09:44:24'),
(3, 1, 0, 2, NULL, 6, 1, 15, NULL, NULL, '10003', 23.00, NULL, 2.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:45:06', '2023-08-17 09:45:06'),
(4, 1, 0, 2, NULL, 6, 1, 16, NULL, NULL, '10004', 23.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:46:35', '2023-08-17 09:46:35'),
(5, 0, 1, 2, NULL, 6, 1, 17, NULL, NULL, '10005', 23.00, NULL, 6.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:51:11', '2023-08-17 09:51:11'),
(6, 1, 1, 2, NULL, 6, 1, 18, NULL, NULL, '10006', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:56:40', '2023-08-17 09:56:40'),
(7, 0, 1, 2, NULL, 6, 1, 19, NULL, NULL, '10007', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:58:10', '2023-08-17 09:58:10'),
(8, 0, 1, 2, NULL, 6, 1, 20, NULL, NULL, '10008', 23.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 09:59:24', '2023-08-17 09:59:24'),
(9, 0, 1, 2, NULL, 6, 1, 21, NULL, NULL, '10009', 23.00, NULL, 0.00, NULL, '100322901000007160', 'CANCELED', NULL, NULL, NULL, '3b403ad212e1276573cd49426a719e8d', '10009', NULL, NULL, '2023-08-17', '2023-08-17 10:01:04', '2023-08-17 10:32:36'),
(10, 0, 1, 2, NULL, 6, 1, 22, NULL, NULL, '10010', 23.00, NULL, 0.00, NULL, '100322901000008142', 'CANCELED', NULL, NULL, NULL, '692a94613dc8e232ddd1f8df474b1004', '10010', NULL, NULL, '2023-08-17', '2023-08-17 10:42:33', '2023-08-17 10:43:25'),
(11, 0, 1, 3, NULL, 6, 1, NULL, 30, 26, '10011', 100.00, NULL, 100.00, NULL, '100322901000009491', 'CANCELED', NULL, NULL, NULL, '2cd6887a01fdb3753c1d8589faa8bfd1', '10011', NULL, NULL, '2023-08-17', '2023-08-17 11:22:17', '2023-08-17 11:32:25'),
(12, 0, 1, 3, NULL, 6, 1, NULL, 30, 27, '10012', 200.00, NULL, 200.00, NULL, '100322901000009896', 'CANCELED', NULL, NULL, NULL, 'ef641c5adc1f5cbe2097f4557eba743a', '10012', NULL, NULL, '2023-08-17', '2023-08-17 11:41:20', '2023-08-17 11:42:09'),
(13, 0, 1, 2, NULL, 6, 1, 23, NULL, NULL, '10013', 80.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 11:54:22', '2023-08-17 11:54:22'),
(14, 0, 1, 2, NULL, 6, 1, 24, NULL, NULL, '10014', 80.00, NULL, 0.00, '322901000696472', '100322901000010906', 'CAPTURED', '0818', NULL, '322901000514', 'ddc54478c34ac61dc74c02393573e54f', '10014', NULL, NULL, '2023-08-17', '2023-08-17 12:06:08', '2023-08-17 12:08:06'),
(15, 0, 1, 3, NULL, 6, 1, NULL, 30, 28, '10015', 300.00, NULL, 300.00, '322901000698447', '100322901000010988', 'CAPTURED', '0818', NULL, '322901000515', 'acfcf178178530916f1256c0a3036ff1', '10015', NULL, NULL, '2023-08-17', '2023-08-17 12:09:13', '2023-08-17 12:10:29'),
(16, 1, 1, 3, NULL, 6, 1, NULL, 30, 29, '10016', 10.00, NULL, 10.00, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '16', 'df', 'sdf', '2023-08-17', '2023-08-17 12:16:18', '2023-09-11 15:16:01'),
(17, 0, 1, 2, NULL, 6, 1, NULL, 30, 29, '10017', 10.00, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-17', '2023-08-17 12:24:29', '2023-08-17 12:24:29'),
(18, 1, 2, 1, 30, 6, NULL, NULL, NULL, NULL, '10018', 675.00, NULL, 0.00, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '18', 'df', 'sdf', '2023-08-17', '2023-08-17 13:20:18', '2023-08-31 05:22:02'),
(19, 0, 2, 1, 31, 6, NULL, NULL, NULL, NULL, '10019', 675.00, NULL, 0.00, '322901000772559', '100322901000013036', 'CAPTURED', '0818', NULL, '322901000618', '5cbbfd1ca5198dc9a1f4f1c7f334eb32', '10019', NULL, NULL, '2023-08-17', '2023-08-17 13:25:22', '2023-08-17 13:26:44'),
(20, 0, 2, 1, 32, 6, NULL, NULL, NULL, NULL, '10020', 675.00, NULL, 0.00, '322901000774256', '100322901000013087', 'CAPTURED', '0818', NULL, '322901000622', 'a6f76b5d03dd62b8bc1dff84ec721185', '10020', NULL, NULL, '2023-08-17', '2023-08-17 13:27:45', '2023-08-17 13:28:59'),
(21, 0, 1, 3, NULL, 6, 1, NULL, 30, 29, '10021', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 11:56:37', '2023-08-20 11:56:37'),
(22, 0, 1, 3, NULL, 6, 1, NULL, 30, 29, '10022', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 11:57:34', '2023-08-20 11:57:34'),
(23, 0, 1, 3, NULL, 6, 1, NULL, 30, 29, '10023', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 12:02:56', '2023-08-20 12:02:56'),
(24, 0, 1, 3, NULL, 6, 1, NULL, 30, 29, '10024', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-20', '2023-08-20 12:10:07', '2023-08-20 12:10:07'),
(25, 0, 2, 1, 33, 6, NULL, NULL, NULL, NULL, '10025', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(26, 0, 2, 1, 34, 6, NULL, NULL, NULL, NULL, '10026', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(27, 0, 2, 1, 35, 6, NULL, NULL, NULL, NULL, '10027', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(28, 0, 2, 1, 36, 6, NULL, NULL, NULL, NULL, '10028', 191.00, NULL, 5.73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21', '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(29, 0, 2, 1, 37, 6, NULL, NULL, NULL, NULL, '10029', 82.00, NULL, 2.46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(30, 0, 2, 1, 38, 6, NULL, NULL, NULL, NULL, '10030', 82.00, NULL, 2.46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(31, 0, 2, 1, 42, 6, NULL, NULL, NULL, NULL, '10031', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(32, 0, 2, 1, 43, 6, NULL, NULL, NULL, NULL, '10032', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(33, 0, 2, 1, 44, 6, NULL, NULL, NULL, NULL, '10033', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(34, 0, 2, 1, 45, 6, NULL, NULL, NULL, NULL, '10034', 119.00, NULL, 3.57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(35, 0, 2, 1, 46, 6, NULL, NULL, NULL, NULL, '10035', 110.00, NULL, 3.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(36, 0, 2, 1, 47, 6, NULL, NULL, NULL, NULL, '10036', 94.00, NULL, 2.82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(37, 0, 2, 1, 48, 6, NULL, NULL, NULL, NULL, '10037', 119.00, NULL, 3.57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-22', '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(38, 0, 1, 3, NULL, 6, 1, NULL, 30, 29, '10038', 10.00, NULL, 3.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 05:03:53', '2023-08-23 05:03:53'),
(39, 0, 2, 1, 49, 6, NULL, NULL, NULL, NULL, '10039', 45.00, NULL, 1.35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(40, 0, 2, 1, 50, 6, NULL, NULL, NULL, NULL, '10040', 90.00, NULL, 2.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23', '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(41, 0, 2, 1, 51, 6, NULL, NULL, NULL, NULL, '10041', 90.00, NULL, 2.70, '323501001210320', '100323501000003182', 'CAPTURED', '0823', NULL, '323501000184', 'a9ee08817e20d43429c412116e47673d', '10041', NULL, NULL, '2023-08-23', '2023-08-23 06:57:47', '2023-08-23 06:59:08'),
(42, 0, 2, 1, 52, 6, NULL, NULL, NULL, NULL, '10042', 45.00, NULL, 1.35, '323501001242658', '100323501000003543', 'CAPTURED', '0823', NULL, '323501000214', '80c2cf35fbe2fc8fa29094708bb60395', '10042', NULL, NULL, '2023-08-23', '2023-08-23 07:10:48', '2023-08-23 07:21:47'),
(43, 0, 2, 1, 53, 6, NULL, NULL, NULL, NULL, '10043', 124.00, NULL, 3.72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(44, 0, 2, 1, 54, 6, NULL, NULL, NULL, NULL, '10044', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(45, 0, 2, 1, 55, 6, NULL, NULL, NULL, NULL, '10045', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(46, 0, 2, 1, 56, 6, NULL, NULL, NULL, NULL, '10046', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(47, 0, 2, 1, 57, 6, NULL, NULL, NULL, NULL, '10047', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(48, 0, 2, 1, 58, 6, NULL, NULL, NULL, NULL, '10048', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(49, 0, 2, 1, 59, 6, NULL, NULL, NULL, NULL, '10049', 124.00, NULL, 3.72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(50, 0, 2, 1, 60, 6, NULL, NULL, NULL, NULL, '10050', 79.00, NULL, 2.37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-25', '2023-08-25 08:53:49', '2023-08-25 08:53:49'),
(51, 0, 2, 1, 61, 6, NULL, NULL, NULL, NULL, '10051', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:29:20', '2023-08-26 12:29:20'),
(52, 0, 2, 1, 62, 6, NULL, NULL, NULL, NULL, '10052', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:29:49', '2023-08-26 12:29:49'),
(53, 0, 2, 1, 63, 6, NULL, NULL, NULL, NULL, '10053', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:30:03', '2023-08-26 12:30:03'),
(54, 0, 2, 1, 64, 6, NULL, NULL, NULL, NULL, '10054', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:30:10', '2023-08-26 12:30:10'),
(55, 0, 2, 1, 65, 6, NULL, NULL, NULL, NULL, '10055', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:30:19', '2023-08-26 12:30:19'),
(56, 0, 2, 1, 66, 6, NULL, NULL, NULL, NULL, '10056', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:30:33', '2023-08-26 12:30:33'),
(57, 0, 2, 1, 67, 6, NULL, NULL, NULL, NULL, '10057', 169.00, NULL, 5.07, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26', '2023-08-26 12:31:02', '2023-08-26 12:31:02'),
(58, 1, 2, 1, 68, 6, NULL, NULL, NULL, NULL, '10058', 169.00, NULL, 5.07, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '58', 'df', 'sdf', '2023-08-26', '2023-08-26 13:47:48', '2023-08-31 05:39:18'),
(59, 1, 0, 1, NULL, 6, 1, 25, NULL, NULL, '10059', 347.00, NULL, 6.94, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '59', 'df', 'sdf', '2023-08-30', '2023-08-30 03:53:29', '2023-08-31 05:25:55'),
(60, 0, 0, 2, NULL, 6, 1, NULL, 11, 16, '10060', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30', '2023-08-30 10:02:11', '2023-08-30 10:02:11'),
(61, 0, 0, 2, NULL, 6, 11, NULL, 11, 16, '10061', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-31', '2023-08-31 08:53:26', '2023-08-31 08:53:26'),
(62, 0, 0, 2, NULL, 6, 11, NULL, 11, 16, '10062', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-31', '2023-08-31 08:54:13', '2023-08-31 08:54:13'),
(63, 0, 1, 0, 69, 6, NULL, NULL, NULL, NULL, '10063', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-01', '2023-09-01 13:47:14', '2023-09-01 13:47:14'),
(64, 0, 1, 0, 70, 6, NULL, NULL, NULL, NULL, '10064', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-01', '2023-09-01 13:48:50', '2023-09-01 13:48:50'),
(65, 1, 1, 0, 71, 6, NULL, NULL, NULL, NULL, '10065', 34.00, NULL, 10.20, '324401001023103', '100324401000007521', 'CAPTURED', '0902', NULL, '324401000497', '950a21af623c26f69932152252f31c51', '10065', NULL, NULL, '2023-09-01', '2023-09-01 13:49:30', '2023-09-01 13:51:39'),
(66, 0, 1, 0, 72, 6, NULL, NULL, NULL, NULL, '10066', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-01', '2023-09-01 13:53:04', '2023-09-01 13:53:04'),
(67, 0, 1, 0, 73, 6, NULL, NULL, NULL, NULL, '10067', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:49:16', '2023-09-04 09:49:16'),
(68, 0, 1, 0, 74, 6, NULL, NULL, NULL, NULL, '10068', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:49:55', '2023-09-04 09:49:55'),
(69, 0, 1, 0, 75, 6, NULL, NULL, NULL, NULL, '10069', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:51:17', '2023-09-04 09:51:17'),
(70, 0, 1, 0, 76, 6, NULL, NULL, NULL, NULL, '10070', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:51:58', '2023-09-04 09:51:58'),
(71, 0, 1, 0, 77, 6, NULL, NULL, NULL, NULL, '10071', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:52:05', '2023-09-04 09:52:05'),
(72, 0, 1, 0, 78, 6, NULL, NULL, NULL, NULL, '10072', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 09:52:37', '2023-09-04 09:52:37'),
(73, 0, 1, 0, 79, 6, NULL, NULL, NULL, NULL, '10073', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:46:55', '2023-09-04 10:46:55'),
(74, 0, 1, 0, 80, 6, NULL, NULL, NULL, NULL, '10074', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:48:09', '2023-09-04 10:48:09'),
(75, 0, 1, 0, 81, 6, NULL, NULL, NULL, NULL, '10075', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:49:40', '2023-09-04 10:49:40'),
(76, 0, 1, 0, 82, 6, NULL, NULL, NULL, NULL, '10076', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:50:25', '2023-09-04 10:50:25'),
(77, 0, 1, 0, 83, 6, NULL, NULL, NULL, NULL, '10077', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:51:15', '2023-09-04 10:51:15'),
(78, 1, 1, 0, 84, 6, NULL, NULL, NULL, NULL, '10078', 34.00, NULL, 10.20, '324801000454386', '100324801000004541', 'CAPTURED', '0905', NULL, '324801000334', '194b9f7a2b57330378cc7c5e5ba21fc7', '10078', NULL, NULL, '2023-09-04', '2023-09-04 10:51:30', '2023-09-05 08:03:08'),
(79, 0, 1, 0, 85, 6, NULL, NULL, NULL, NULL, '10079', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:52:06', '2023-09-04 10:52:06'),
(80, 0, 1, 0, 86, 6, NULL, NULL, NULL, NULL, '10080', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:52:12', '2023-09-04 10:52:12'),
(81, 0, 1, 0, 87, 6, NULL, NULL, NULL, NULL, '10081', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:52:22', '2023-09-04 10:52:22'),
(82, 0, 1, 0, 88, 6, NULL, NULL, NULL, NULL, '10082', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:53:00', '2023-09-04 10:53:00'),
(83, 0, 1, 0, 89, 6, NULL, NULL, NULL, NULL, '10083', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:53:10', '2023-09-04 10:53:10'),
(84, 0, 1, 0, 90, 6, NULL, NULL, NULL, NULL, '10084', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 10:53:20', '2023-09-04 10:53:20'),
(85, 0, 1, 0, 91, 6, NULL, NULL, NULL, NULL, '10085', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:36:50', '2023-09-04 11:36:50'),
(86, 0, 1, 0, 92, 6, NULL, NULL, NULL, NULL, '10086', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:37:02', '2023-09-04 11:37:02'),
(87, 0, 1, 0, 93, 6, NULL, NULL, NULL, NULL, '10087', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:37:44', '2023-09-04 11:37:44'),
(88, 0, 1, 0, 94, 6, NULL, NULL, NULL, NULL, '10088', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:38:18', '2023-09-04 11:38:18'),
(89, 0, 1, 0, 95, 6, NULL, NULL, NULL, NULL, '10089', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:39:16', '2023-09-04 11:39:16'),
(90, 0, 1, 0, 96, 6, NULL, NULL, NULL, NULL, '10090', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:39:32', '2023-09-04 11:39:32'),
(91, 0, 1, 0, 97, 6, NULL, NULL, NULL, NULL, '10091', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:46:22', '2023-09-04 11:46:22'),
(92, 0, 1, 0, 98, 6, NULL, NULL, NULL, NULL, '10092', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:46:35', '2023-09-04 11:46:35'),
(93, 0, 1, 0, 99, 6, NULL, NULL, NULL, NULL, '10093', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:46:52', '2023-09-04 11:46:52'),
(94, 0, 1, 0, 100, 6, NULL, NULL, NULL, NULL, '10094', 34.00, NULL, 10.20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:48:41', '2023-09-04 11:48:41'),
(95, 0, 1, 0, 101, 6, NULL, NULL, NULL, NULL, '10095', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:50:32', '2023-09-04 11:50:32'),
(96, 0, 1, 0, 102, 6, NULL, NULL, NULL, NULL, '10096', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:51:23', '2023-09-04 11:51:23'),
(97, 0, 1, 0, 103, 6, NULL, NULL, NULL, NULL, '10097', 79.00, NULL, 23.70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04', '2023-09-04 11:52:33', '2023-09-04 11:52:33'),
(98, 0, 1, 0, 104, 6, NULL, NULL, NULL, NULL, '10098', 20.00, NULL, 0.60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-07', '2023-09-07 09:36:46', '2023-09-07 09:36:46'),
(99, 1, 1, 0, 105, 6, NULL, NULL, NULL, NULL, '10099', 20.00, NULL, 0.60, '325001000550674', '100325001000008301', 'CAPTURED', '0907', NULL, '325001000499', '3a64596566dfb65e17496c24b8562c94', '10099', NULL, NULL, '2023-09-07', '2023-09-07 09:53:07', '2023-09-07 09:54:30'),
(100, 1, 0, 1, NULL, 6, 16, 26, NULL, NULL, '10100', 20.00, NULL, 0.40, '325001000598155', '100325001000010073', 'CAPTURED', '0908', NULL, '325001000630', '9ba8ab54592e621b7d425e813d2fede7', '10100', NULL, NULL, '2023-09-07', '2023-09-07 10:47:14', '2023-09-07 10:48:18'),
(101, 0, 0, 1, NULL, 6, 16, 27, NULL, NULL, '10101', 30.00, NULL, 0.60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-07', '2023-09-07 11:04:27', '2023-09-07 11:04:27'),
(102, 1, 0, 2, NULL, 6, 1, NULL, 27, 41, '10102', 70.00, NULL, 7.00, '325001000647064', '100325001000012028', 'CAPTURED', '0908', NULL, '325001000759', '2a67a88110f093ffa74acbb36102cd88', '10102', NULL, NULL, '2023-09-07', '2023-09-07 11:56:04', '2023-09-07 11:57:09'),
(103, 1, 0, 2, NULL, 6, 1, NULL, 27, 22, '10103', 100.00, NULL, 10.00, '325001000650086', '100325001000012145', 'CAPTURED', '0908', NULL, '325001000770', '926f2b8bf09ae346d922ed8d9cc644ef', '10103', NULL, NULL, '2023-09-07', '2023-09-07 11:59:22', '2023-09-07 12:00:22'),
(104, 1, 0, 2, NULL, 6, 1, NULL, 39, 40, '10104', 45.00, NULL, 4.50, '325001000662263', '100325001000012673', 'CAPTURED', '0908', NULL, '325001000800', 'c2dab55d8e5e6de05f1a812782b6904e', '10104', NULL, NULL, '2023-09-07', '2023-09-07 12:11:42', '2023-09-07 12:12:52'),
(105, 0, 0, 2, NULL, 6, 1, NULL, 39, 39, '10105', 100.00, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-07', '2023-09-07 12:13:59', '2023-09-07 12:13:59'),
(106, 1, 0, 2, NULL, 6, 1, NULL, 39, 39, '10106', 100.00, NULL, 10.00, '325001000665426', '100325001000012783', 'CAPTURED', '0908', NULL, '325001000810', 'a80dd4fda6a5b06228483dcfd5bddfd9', '10106', NULL, NULL, '2023-09-07', '2023-09-07 12:15:21', '2023-09-07 12:16:16'),
(107, 1, 1, 0, 106, 6, NULL, NULL, NULL, NULL, '10107', 30.00, NULL, 3.60, '325001000701640', '100325001000013818', 'CAPTURED', '0908', NULL, '325001000874', 'a73fd86ede156b0e1d7e0e5b1793db2f', '10107', NULL, NULL, '2023-09-07', '2023-09-07 13:01:32', '2023-09-07 13:02:37'),
(108, 1, 0, 2, NULL, 6, 1, NULL, 39, 42, '10108', 400.00, NULL, 40.00, '325001000720360', '100325001000014129', 'CAPTURED', '0908', NULL, '325001000888', 'cf77e1693333a5c4621fb6219e1c7315', '10108', NULL, NULL, '2023-09-07', '2023-09-07 13:29:52', '2023-09-07 13:31:25'),
(109, 1, 0, 2, NULL, 6, 1, NULL, 39, 43, '10109', 34.00, NULL, 3.40, '325001000728112', '100325001000014249', 'CAPTURED', '0908', NULL, '325001000894', 'a5a06d92eb5367bd4707d77d67e1d46a', '10109', NULL, NULL, '2023-09-07', '2023-09-07 13:39:44', '2023-09-07 13:40:44'),
(110, 0, 0, 2, NULL, 6, 1, NULL, 39, 44, '10110', 23.00, NULL, 2.30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-07', '2023-09-07 13:42:39', '2023-09-07 13:42:39'),
(111, 1, 0, 2, NULL, 6, 1, NULL, 39, 44, '10111', 23.00, NULL, 2.30, '325001000730318', '100325001000014280', 'CAPTURED', '0908', NULL, '325001000898', 'af2e731c19d494c0b446e04ddd785c0b', '10111', NULL, NULL, '2023-09-07', '2023-09-07 13:42:47', '2023-09-07 13:43:55'),
(112, 1, 0, 1, NULL, 6, 16, 28, NULL, NULL, '10112', 10.00, NULL, 0.20, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '112', 'df', 'sdf', '2023-09-07', '2023-09-07 13:45:46', '2023-09-08 13:40:09'),
(113, 1, 1, 0, 107, 6, NULL, NULL, NULL, NULL, '10113', 20.00, NULL, 0.60, '325101000523506', '100325101000004322', 'CAPTURED', '0908', NULL, '325101000231', 'aa02268bc3c048e17d4bdccd21495bd4', '10113', NULL, NULL, '2023-09-08', '2023-09-08 10:07:13', '2023-09-08 10:08:27'),
(114, 1, 1, 0, 108, 6, NULL, NULL, NULL, NULL, '10114', 20.00, NULL, 0.60, '325101000527502', '100325101000004376', 'CAPTURED', '0908', NULL, '325101000235', '65ead8cff17694d8e3eaa94a83e23026', '10114', NULL, NULL, '2023-09-08', '2023-09-08 10:12:18', '2023-09-08 10:14:04'),
(115, 1, 0, 2, NULL, 6, 1, NULL, 11, 37, '10115', 100.50, NULL, 10.05, '325101000533703', '100325101000004461', 'CAPTURED', '0908', NULL, '325101000239', '7e3fe84ee3c6c21094be063beb957823', '10115', NULL, NULL, '2023-09-08', '2023-09-08 10:22:27', '2023-09-08 10:23:45'),
(116, 0, 0, 2, NULL, 6, 11, NULL, 11, 16, '10116', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11', '2023-09-11 13:14:19', '2023-09-11 13:14:19'),
(117, 0, 0, 2, NULL, 6, 11, NULL, 11, 16, '10117', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11', '2023-09-11 13:14:22', '2023-09-11 13:14:22'),
(118, 0, 0, 2, NULL, 6, 11, NULL, 11, 16, '10118', 100.00, NULL, 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11', '2023-09-11 13:14:30', '2023-09-11 13:14:30'),
(119, 1, 1, 0, 109, 6, NULL, NULL, NULL, NULL, '10119', 60.00, NULL, 1.80, '325401002963160', '100325401000016249', 'CAPTURED', '0912', NULL, '325401001039', '734d16e13aba805b1f307f9577add3ad', '10119', NULL, NULL, '2023-09-11', '2023-09-11 14:05:02', '2023-09-11 14:06:16'),
(120, 0, 0, 2, NULL, 6, 1, NULL, 11, 16, '10120', 100.00, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11', '2023-09-11 14:42:33', '2023-09-11 14:42:33'),
(121, 1, 0, 2, NULL, 6, 1, NULL, 11, 16, '10121', 100.00, NULL, 10.00, 'cvg', 'sdf', 'CAPTURED', 'sdf', NULL, 'sdf', 'sdf', '121', 'df', 'sdf', '2023-09-11', '2023-09-11 14:42:37', '2023-09-11 14:42:59');

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
(37, 'App\\Models\\User', 6, 'mobile', '640ea048f7705b7459a14e728c85e2f538a8ce81ffbfc891d6cf1992f6285a43', '[\"role:generalUser\"]', '2023-08-26 17:44:37', NULL, '2023-08-22 07:45:06', '2023-08-26 17:44:37'),
(38, 'App\\Models\\Designer', 1, 'mobile', 'a6b137805a8ef1c9f1db2d943d41903042d622759630bb7cc738ba2d079c96cc', '[\"role:designer\"]', '2023-08-24 07:01:45', NULL, '2023-08-24 06:09:31', '2023-08-24 07:01:45'),
(39, 'App\\Models\\Designer', 1, 'mobile', 'e686a0d01c46b106fbb5e2b5f0a4e563a1be6506676256e5087da8dd6d5fd9f9', '[\"role:designer\"]', '2023-09-13 13:07:30', NULL, '2023-08-24 09:37:02', '2023-09-13 13:07:30'),
(40, 'App\\Models\\Designer', 1, 'mobile', 'c2e52ac8bc281b802f1e63ee0bad6a9946c7e543494f2d116513e07f9a92e6ae', '[\"role:designer\"]', '2023-08-24 12:29:52', NULL, '2023-08-24 12:22:07', '2023-08-24 12:29:52'),
(41, 'App\\Models\\User', 6, 'mobile', 'cb203ad57abc9f70cc1fffbd0d5deb9fef7cba01685878abbcfc5b5f3c891bff', '[\"role:generalUser\"]', '2023-08-25 08:06:09', NULL, '2023-08-24 12:30:12', '2023-08-25 08:06:09'),
(42, 'App\\Models\\User', 6, 'mobile', 'f3acf5703b58f544b407659328674f7d7961bca73bb5f2e6b6bff86da30e1dcd', '[\"role:generalUser\"]', '2023-08-25 06:07:01', NULL, '2023-08-25 06:06:27', '2023-08-25 06:07:01'),
(43, 'App\\Models\\User', 6, 'mobile', 'adbbae41928d41432d486f531ba6c45a9346f8cded0e3954586cf10764fe8701', '[\"role:generalUser\"]', '2023-08-25 10:11:43', NULL, '2023-08-25 08:12:14', '2023-08-25 10:11:43'),
(44, 'App\\Models\\Shopkeeper', 10, 'mobile', 'b55919a674c163c4bc9177da966507a220595105b9cf53bee5208cc2beb099cb', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-25 08:23:09', '2023-08-25 08:23:09'),
(45, 'App\\Models\\Shopkeeper', 10, 'mobile', 'f68a5380a8bc2429009e7d19013191f9634044178ee82706d068dbd1647a0d55', '[\"role:shopkeeper\"]', '2023-08-25 09:15:01', NULL, '2023-08-25 08:23:24', '2023-08-25 09:15:01'),
(46, 'App\\Models\\Shopkeeper', 10, 'mobile', 'fb8232ef714e6d901bdbd86555f7ab0745dffd57b74e0ce6df844ca47d423298', '[\"role:shopkeeper\"]', '2023-08-25 10:07:45', NULL, '2023-08-25 09:27:13', '2023-08-25 10:07:45'),
(47, 'App\\Models\\Shopkeeper', 10, 'mobile', 'a9138fbc4c178002ea1a768fe0499cf62f387a3ea257352f9da55ed7684be2eb', '[\"role:shopkeeper\"]', '2023-08-26 17:58:26', NULL, '2023-08-26 17:09:18', '2023-08-26 17:58:26'),
(48, 'App\\Models\\Designer', 1, 'mobile', '0fc6cc0d9bc040c416ec32853870ffb0603b5182389e038a085e931cbad28804', '[\"role:designer\"]', '2023-08-26 18:11:56', NULL, '2023-08-26 18:10:08', '2023-08-26 18:11:56'),
(49, 'App\\Models\\Shopkeeper', 10, 'mobile', 'eabeac51ae7d363db7182c34c74e408aba3c23f1ebea55e6e68f5e482adf34ae', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-28 12:09:29', '2023-08-28 12:09:29'),
(50, 'App\\Models\\Shopkeeper', 10, 'mobile', 'e4a8924d86afe8a2e2cb3d335071c22aaa98f231320eb7d2dea810612bbf1d46', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-28 12:16:09', '2023-08-28 12:16:09'),
(51, 'App\\Models\\Shopkeeper', 10, 'mobile', '242c2d63e7faaefba5a3cc3222081275c94bbc698bc09b2b474915364d931544', '[\"role:shopkeeper\"]', '2023-08-28 14:42:49', NULL, '2023-08-28 12:16:14', '2023-08-28 14:42:49'),
(52, 'App\\Models\\User', 6, 'mobile', '93b3925142f183d0f3ba88a2863d28e4ae550852076d35939ec637c6e56412fd', '[\"role:generalUser\"]', '2023-08-29 12:11:19', NULL, '2023-08-29 12:10:28', '2023-08-29 12:11:19'),
(53, 'App\\Models\\Shopkeeper', 10, 'mobile', '891194797c3ab9167bd05a7cab6bdfbee8ff42dc5c0f28755e1f7ddc2fc3d54d', '[\"role:shopkeeper\"]', '2023-08-29 12:20:45', NULL, '2023-08-29 12:11:48', '2023-08-29 12:20:45'),
(54, 'App\\Models\\Shopkeeper', 10, 'mobile', 'ae92b72e25a8a7adf529a50cfbf076c67c2854f21293ba6255304c6252e321bc', '[\"role:shopkeeper\"]', '2023-08-30 13:40:20', NULL, '2023-08-29 12:40:32', '2023-08-30 13:40:20'),
(55, 'App\\Models\\User', 6, 'mobile', '258a4920e78bca2f141596c96b97689503a44e0b23ea30d7405c11ef6c85f858', '[\"role:generalUser\"]', '2023-08-30 13:52:42', NULL, '2023-08-30 03:53:12', '2023-08-30 13:52:42'),
(56, 'App\\Models\\Designer', 1, 'mobile', 'a53e7b3dd2296e22e1c5a60e6fa38565982e98daa5cdf3692571841bd93cd930', '[\"role:designer\"]', '2023-08-30 05:31:06', NULL, '2023-08-30 04:40:08', '2023-08-30 05:31:06'),
(57, 'App\\Models\\User', 6, 'mobile', '577f8589dd10b35931bbac2af31604b950e73fb00c3dfec5d142e0fc53be190f', '[\"role:generalUser\"]', '2023-08-30 11:40:17', NULL, '2023-08-30 06:20:33', '2023-08-30 11:40:17'),
(58, 'App\\Models\\User', 6, 'mobile', '097e123b6b2c5423355cbd4fbc1bff4ceea53db6434116ca1139ae2ddce94aa5', '[\"role:generalUser\"]', '2023-08-31 08:29:54', NULL, '2023-08-30 09:59:57', '2023-08-31 08:29:54'),
(59, 'App\\Models\\Shopkeeper', 10, 'mobile', '7a6fbac799f7f319f726452e0497ad0167032d5a98cfced70bfcf8655a84acdd', '[\"role:shopkeeper\"]', '2023-08-30 11:54:40', NULL, '2023-08-30 11:54:21', '2023-08-30 11:54:40'),
(60, 'App\\Models\\User', 6, 'mobile', '6ae4338fa61088953ebb0523b5cd1fdafd2eaa58b56f69b0fa1f2470b8ccf1f4', '[\"role:generalUser\"]', '2023-08-30 13:04:49', NULL, '2023-08-30 13:04:32', '2023-08-30 13:04:49'),
(61, 'App\\Models\\Designer', 1, 'mobile', '1deaf5ecca4c56881fd363041146fd5a822637b97dc89b8c43c73865f81ea954', '[\"role:designer\"]', '2023-08-30 13:34:23', NULL, '2023-08-30 13:33:22', '2023-08-30 13:34:23'),
(62, 'App\\Models\\Designer', 7, 'mobile', 'f1e8062fff0c11cb0529968c2415512756423812795a16fe878a6f456c3f4eca', '[\"role:designer\"]', '2023-08-31 06:33:45', NULL, '2023-08-31 06:10:24', '2023-08-31 06:33:45'),
(63, 'App\\Models\\User', 6, 'mobile', '21063e80d8d035f3c5581e983e6da7a69c9f18eddb77fc371f6c2513e0e848fa', '[\"role:generalUser\"]', NULL, NULL, '2023-08-31 06:34:47', '2023-08-31 06:34:47'),
(64, 'App\\Models\\Shopkeeper', 11, 'mobile', '5618706296c9aa34aa04ec6131ff7135a0ad8e8a6a61ee883402e7b5ecf71c38', '[\"role:shopkeeper\"]', NULL, NULL, '2023-08-31 06:58:11', '2023-08-31 06:58:11'),
(65, 'App\\Models\\Designer', 7, 'mobile', '3f3e783ccb824f85239efac8e31c3b2ed6f3d2283b8fd5dfbd38a4d26f410c66', '[\"role:designer\"]', NULL, NULL, '2023-08-31 06:59:09', '2023-08-31 06:59:09'),
(66, 'App\\Models\\Designer', 7, 'mobile', '45ba58248c4ff92e525ba2d21947a6aec9f74ad8ab4f54402fbdad1983fe49c5', '[\"role:designer\"]', '2023-09-01 06:30:28', NULL, '2023-08-31 08:13:03', '2023-09-01 06:30:28'),
(67, 'App\\Models\\User', 6, 'mobile', '8402a8a28c3c1990ad1228b400a98387d845139817a72e252dde4d6c7dd27c2c', '[\"role:generalUser\"]', '2023-09-11 14:42:37', NULL, '2023-08-31 08:30:13', '2023-09-11 14:42:37'),
(68, 'App\\Models\\Designer', 7, 'mobile', '7143f5be0d019c62e0e213065bf6ef94657c663a35e2f1a90c9945f7b09687ab', '[\"role:designer\"]', NULL, NULL, '2023-08-31 09:04:26', '2023-08-31 09:04:26'),
(69, 'App\\Models\\Designer', 7, 'mobile', '8c2d55fa7f395164064db79994a2535db8adf9893f90cd6729d7571f1cdc4a94', '[\"role:designer\"]', '2023-08-31 09:08:09', NULL, '2023-08-31 09:04:28', '2023-08-31 09:08:09'),
(70, 'App\\Models\\Shopkeeper', 11, 'mobile', '644df19e14d369c9c6b69bb2ab3e253160759f6ac108cf657a887ab8cc89d150', '[\"role:shopkeeper\"]', '2023-09-07 10:58:02', NULL, '2023-09-01 04:44:38', '2023-09-07 10:58:02'),
(71, 'App\\Models\\Shopkeeper', 11, 'mobile', '612178e975097b7baa26b103acdb49854f447cb4a555bff0238f3c14e8da0cb6', '[\"role:shopkeeper\"]', '2023-09-01 06:20:46', NULL, '2023-09-01 04:46:44', '2023-09-01 06:20:46'),
(72, 'App\\Models\\Shopkeeper', 11, 'mobile', '893c447bfc4830974c47a0a1fa17e2f541d27afb663d51327d33106b099fbec7', '[\"role:shopkeeper\"]', NULL, NULL, '2023-09-01 06:35:10', '2023-09-01 06:35:10'),
(73, 'App\\Models\\Shopkeeper', 11, 'mobile', 'f6f2949178ea5b4e29df7bff9a57066792392490ffd981c66aa9c6a130addfa6', '[\"role:shopkeeper\"]', '2023-09-01 09:08:48', NULL, '2023-09-01 09:08:07', '2023-09-01 09:08:48'),
(74, 'App\\Models\\Shopkeeper', 11, 'mobile', '89badc0f85a8225526a3aa69b37cf9c2c531a34e685a52e1bae3996d08034f30', '[\"role:shopkeeper\"]', '2023-09-04 06:23:15', NULL, '2023-09-04 06:22:56', '2023-09-04 06:23:15'),
(75, 'App\\Models\\Shopkeeper', 8, 'mobile', '6f50c677d941201d222770549a808c94e24b6063e3e04d282331587a1fdbd41d', '[\"role:shopkeeper\"]', '2023-09-07 11:31:04', NULL, '2023-09-07 10:58:33', '2023-09-07 11:31:04'),
(76, 'App\\Models\\Shopkeeper', 8, 'mobile', 'fb379f066eb8aa093ae99133d2c03a88c260c225d3269b8719887455d1ec9b98', '[\"role:shopkeeper\"]', '2023-09-08 04:13:27', NULL, '2023-09-08 03:57:39', '2023-09-08 04:13:27'),
(77, 'App\\Models\\User', 6, 'mobile', '5a1b5ab1b6f9883d50adb061d40e8868621b811df2ba9c43853e60659bfc00be', '[\"role:generalUser\"]', '2023-09-08 08:48:42', NULL, '2023-09-08 07:58:01', '2023-09-08 08:48:42'),
(78, 'App\\Models\\Designer', 7, 'mobile', 'a46e3d13a902c072562c8d82b904a7d2541502eac6036cc676051e748f34e163', '[\"role:designer\"]', '2023-09-08 11:35:43', NULL, '2023-09-08 11:06:22', '2023-09-08 11:35:43'),
(79, 'App\\Models\\Shopkeeper', 8, 'mobile', '979d7270fce916f571aba6d4bb8bdb56dedf98fff03af8eea38fdf3d1c5768d8', '[\"role:shopkeeper\"]', '2023-09-08 11:35:32', NULL, '2023-09-08 11:34:14', '2023-09-08 11:35:32'),
(80, 'App\\Models\\User', 6, 'mobile', '0fabf15aef6d1f60998651865b0c9bb6723c0c2b17fd35b925b8cbc35d3021b2', '[\"role:generalUser\"]', '2023-09-08 12:44:13', NULL, '2023-09-08 12:11:59', '2023-09-08 12:44:13'),
(81, 'App\\Models\\Shopkeeper', 8, 'mobile', '609ab2d9582c9fb858fef3a3e87b2e925b290af3d570350d12e684ff6d2665d5', '[\"role:shopkeeper\"]', NULL, NULL, '2023-09-09 13:24:11', '2023-09-09 13:24:11'),
(82, 'App\\Models\\Shopkeeper', 19, 'mobile', '78b35e52d3aacc823ded5bb79de2a81f81f5e66f461cc5a86c85eeaf51ca3382', '[\"role:shopkeeper\"]', NULL, NULL, '2023-09-09 13:36:56', '2023-09-09 13:36:56'),
(83, 'App\\Models\\Designer', 7, 'mobile', '583ead9065c6bbefaa3d93e2d33f68b31376c0d32c275669042937bf1e68b7e3', '[\"role:designer\"]', NULL, NULL, '2023-09-09 13:38:06', '2023-09-09 13:38:06'),
(84, 'App\\Models\\Designer', 16, 'mobile', 'a8126638a20ad9ec1b588a4a525f9840dfe9a61901498f483c25c6861f09147c', '[\"role:designer\"]', NULL, NULL, '2023-09-09 13:40:16', '2023-09-09 13:40:16'),
(85, 'App\\Models\\Designer', 16, 'mobile', '3b882492d6839330c5c4c7c9ffe6c100bff4d7189db8bc42a43c6d1045516673', '[\"role:designer\"]', NULL, NULL, '2023-09-09 13:41:10', '2023-09-09 13:41:10'),
(86, 'App\\Models\\User', 21, 'mobile', '73ac69af61c743bd40958261d6742ea895efdafcb34fbd5e9504ae33734af242', '[\"role:generalUser\"]', NULL, NULL, '2023-09-09 13:44:16', '2023-09-09 13:44:16'),
(87, 'App\\Models\\Shopkeeper', 19, 'mobile', '11f8405ce502fbb00ce0705246d6027a41378ea8308e7262ab3c6333bc30500c', '[\"role:shopkeeper\"]', NULL, NULL, '2023-09-09 13:46:42', '2023-09-09 13:46:42'),
(88, 'App\\Models\\User', 6, 'mobile', '62c27373536cabf0fd3b0ef664c122e40f741d08083ddf4f813da638c0e60454', '[\"role:generalUser\"]', NULL, NULL, '2023-09-11 04:32:45', '2023-09-11 04:32:45'),
(89, 'App\\Models\\User', 6, 'mobile', 'f3540c1faf586da0f357a433e8e96da0ce61298039e34a9cb3ea9e89648c9634', '[\"role:generalUser\"]', NULL, NULL, '2023-09-11 04:41:02', '2023-09-11 04:41:02'),
(90, 'App\\Models\\User', 6, 'mobile', '5b7e158ad1113abec6491bf019ae18190b62ad242b2f680b935544fce9aaa162', '[\"role:generalUser\"]', NULL, NULL, '2023-09-11 04:41:05', '2023-09-11 04:41:05'),
(91, 'App\\Models\\User', 6, 'mobile', 'd57b251dbc9986d8035c7a8ca9f61761d19735f7723f0f9ed0ed6e6d88b15744', '[\"role:generalUser\"]', NULL, NULL, '2023-09-11 05:45:01', '2023-09-11 05:45:01'),
(92, 'App\\Models\\Designer', 1, 'mobile', '62b294d382ceebd726c5ef8b13946d3050543fea9eb62cbbec2acd6f4cb5868e', '[\"role:designer\"]', '2023-09-11 11:32:09', NULL, '2023-09-11 11:27:36', '2023-09-11 11:32:09'),
(93, 'App\\Models\\Shopkeeper', 19, 'mobile', 'b3220563f6d8764a9d86230b9160944397eb92aee6ef0d5a24f167a84acec7fc', '[\"role:shopkeeper\"]', '2023-09-11 12:08:24', NULL, '2023-09-11 11:42:32', '2023-09-11 12:08:24'),
(94, 'App\\Models\\User', 6, 'mobile', 'd5531fc83877ab3ddfa8d1d042c4d8159c000ed026a83633d8fa2f9c0742c2c4', '[\"role:generalUser\"]', NULL, NULL, '2023-09-12 09:39:20', '2023-09-12 09:39:20'),
(95, 'App\\Models\\Designer', 1, 'mobile', '7c216ccd82a7c61d2f0249620b7064d41eb0c3ccb1e363aa8f941a1e362e12fe', '[\"role:designer\"]', '2023-09-12 09:40:20', NULL, '2023-09-12 09:39:35', '2023-09-12 09:40:20'),
(96, 'App\\Models\\Designer', 1, 'mobile', '40b0193a1dd168eecf8b20e071a4a1e7a20d761c8e6fecb9083c70689fd04ec4', '[\"role:designer\"]', '2023-09-12 09:44:16', NULL, '2023-09-12 09:40:32', '2023-09-12 09:44:16'),
(97, 'App\\Models\\User', 6, 'mobile', 'a5578f86c32bbf1375ca80cf7a1d3c22a34c04703aaf871208b6e955c99af741', '[\"role:generalUser\"]', '2023-09-12 09:46:06', NULL, '2023-09-12 09:44:28', '2023-09-12 09:46:06'),
(98, 'App\\Models\\User', 6, 'mobile', '4de84c37d03b5e63af9e45ed61655e982cc06791ec4492bf6de20d8ed015eb8c', '[\"role:generalUser\"]', '2023-09-12 10:07:05', NULL, '2023-09-12 09:47:34', '2023-09-12 10:07:05'),
(99, 'App\\Models\\Designer', 1, 'mobile', '65cf020fddf2564fb68048be6c25f2ca87e5d926e2d502d1c0e2372e0a5770b0', '[\"role:designer\"]', '2023-09-13 13:56:41', NULL, '2023-09-13 13:22:09', '2023-09-13 13:56:41'),
(100, 'App\\Models\\User', 6, 'mobile', 'efaca7591301d6766939ade1837956a7b44e1cd5ac9effac5143c9ecda983263', '[\"role:generalUser\"]', '2023-09-13 13:57:52', NULL, '2023-09-13 13:36:31', '2023-09-13 13:57:52');

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
(117, 124, 1, 10.00, '2023-09-01 06:20:47', '2023-09-01 06:20:47'),
(116, 123, 1, 10.00, '2023-09-01 06:18:25', '2023-09-01 06:18:25'),
(109, 118, 1, 10.00, '2023-09-01 04:47:40', '2023-09-01 04:47:40'),
(115, 122, 1, 10.00, '2023-09-01 06:17:56', '2023-09-01 06:17:56'),
(114, 121, 1, 10.00, '2023-09-01 06:13:40', '2023-09-01 06:13:40'),
(113, 120, 1, 10.00, '2023-09-01 06:13:06', '2023-09-01 06:13:06'),
(112, 119, 1, 0.00, '2023-09-01 06:09:00', '2023-09-01 06:09:00'),
(111, 119, 1, 10.00, '2023-09-01 06:09:00', '2023-09-01 06:09:00'),
(110, 118, 1, 0.00, '2023-09-01 04:47:40', '2023-09-01 04:47:40'),
(107, 38, 3, 45.00, '2023-08-31 09:31:11', '2023-08-31 09:31:11'),
(106, 38, 1, 34.00, '2023-08-31 09:31:11', '2023-08-31 09:32:13'),
(108, 38, 12, 10.00, '2023-08-31 09:33:54', '2023-08-31 09:33:54'),
(118, 126, 12, 10.00, '2023-09-07 08:52:21', '2023-09-07 08:52:21');

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
  `user_type` varchar(255) NOT NULL DEFAULT 'shopKeeper',
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
  `android_device_token` text DEFAULT NULL,
  `ios_device_token` text DEFAULT NULL,
  `web_device_token` text DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`id`, `user_type`, `name`, `avg_rating`, `email`, `project_charge_rate`, `meeting_charge_rate`, `product_charge_rate`, `is_authentic`, `is_approved`, `id_no`, `is_deleted`, `status`, `approved_data`, `email_verified_at`, `android_device_token`, `ios_device_token`, `web_device_token`, `password`, `created_at`, `updated_at`) VALUES
(11, 'shopKeeper', 'kazi', NULL, 'shop11@gmail.com', NULL, NULL, NULL, '0', 0, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, '$2y$10$cD.8ejkvpnpmQ2TPxBaqGuzCOcrHwy4cqPetcl7Jb9WjV5P62lNRa', '2023-06-23 13:12:39', '2023-09-01 09:08:48'),
(8, 'shopKeeper', 'shop2', 3.00, 'shop@gmail.com', 30.00, 2, 3, '1', 1, NULL, 0, 1, '2023-06-28', NULL, NULL, NULL, '', '$2y$10$9nmXBjUUOH6RXn4.zWBgOumttNoCIBI62DOVHVKcgaiVaitjwRf7K', '2023-06-20 14:47:54', '2023-09-09 14:45:00'),
(12, 'shopKeeper', 'kazi', NULL, 'shop11@gmail.com', 30.00, 2, 30, '1', 1, NULL, 0, 1, '2023-06-28', '2023-06-23 13:14:11', NULL, NULL, NULL, '$2y$10$ECMohNjbTSzGGzbxHox4yetCUdF0m4NAMJzIA1kzmCtWYh3SNb5cu', '2023-06-23 13:12:44', '2023-08-20 10:28:40'),
(13, 'shopKeeper', 'shop400', NULL, 'shop400@gmail.com', NULL, NULL, NULL, '0', 0, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, '$2y$10$v.f8lPM8jef7Hu2vuGZFMOsheNtQF1it9CU/.H29q30HJhO0wnba.', '2023-06-23 13:50:10', '2023-08-20 07:51:48'),
(14, 'shopKeeper', 'shop', NULL, 'shop400@gmail.com', NULL, NULL, NULL, '1', 0, NULL, 0, 1, NULL, '2023-06-23 13:51:43', NULL, NULL, NULL, '$2y$10$8WxDBpECniyVNCUlhL2No.C2bWn.Xpm0ujxNHzNmubegtlxdOk4Ii', '2023-06-23 13:51:06', '2023-08-20 07:51:48'),
(15, 'shopKeeper', 'techno', NULL, 'techno@gmail.com', NULL, NULL, NULL, '1', 1, NULL, 0, 1, '2023-08-20', '2023-06-28 04:38:11', NULL, NULL, NULL, '$2y$10$qleqls.V7VGkGy6sGqq9Gu0vVXYD6vMLM.EPwFDHm39ZP4a4Dx8U6', '2023-06-28 04:37:40', '2023-08-20 07:51:48'),
(16, 'shopKeeper', 'shop500', NULL, 'shop500@gmail.com', NULL, NULL, NULL, '1', 1, '10016', 0, 1, '2023-08-20', NULL, NULL, NULL, NULL, '$2y$10$tDX.PsmuIQEY.Pnb/8Uoeu4C//.Ou4zyxLE1RA/WpF6BptOpbi45a', '2023-08-03 23:15:24', '2023-08-20 07:51:48'),
(17, 'shopKeeper', 'shop Name', NULL, 'shop991@gmail.com', NULL, NULL, NULL, '0', 0, '10017', 0, 1, NULL, NULL, NULL, NULL, NULL, '$2y$10$nFN2SJiFaV0HK5mMH1spN.qbazAikbXJXneMU9Ts8O0jvxEZJdfP6', '2023-08-10 11:52:25', '2023-08-20 07:51:48'),
(18, 'shopKeeper', 'shop Name', NULL, 'shop44@gmail.com', NULL, NULL, NULL, '0', 0, '10018', 0, 1, NULL, NULL, NULL, NULL, NULL, '$2y$10$NaafRA7JSUEoqYFoIHKSb.lvWZsxHIB/.iIKLDIxqR56g1kEQYNyO', '2023-08-10 12:15:06', '2023-08-20 07:51:48'),
(19, 'shopKeeper', 'Test', NULL, 'lipan.duta+30@gmail.com', NULL, NULL, NULL, '1', 1, '10019', 0, 1, NULL, NULL, NULL, NULL, 'cfEAo2ex2kHUrxP_wlnGP8:APA91bFYVZmpdx1Xfenvrue_w6RUT35lCCdOp3-yIwkm5uK_16DmkYQ4pGIJS1k8MlmeI6oDsQr0md0LTaaYhAeElFgfsIARqNK0-Dp1JOvurwLrpdVTn_wrG9z-pN0BZfRPbn9DPY4v', '$2y$10$WcV6Bk258TM1gmqkIi8vtu219zy7ZY9rK37/oppxEdaxSMFJVZP.K', '2023-09-09 12:09:05', '2023-09-09 12:09:27');

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
(6, 8, 'Shop', 'Shop', 'storage/profile_images/profile_images-16941464004777.png', 'storage/profile_images/profile_images-16941464001873.png', '2023-06-20 14:47:54', '2023-09-08 04:13:20'),
(7, 9, 'shop3', NULL, NULL, NULL, '2023-06-20 15:14:03', '2023-06-20 15:14:03'),
(8, 10, 'shop 5 ggg hh', '<p>sdfsdf sdf sdfsdsdfsd&nbsp; dgfd</p>', 'storage/profile_images/profile_images-16927081916638.jpeg', 'storage/profile_images/profile_images-16908717672404.jpeg', '2023-06-20 15:23:13', '2023-08-22 12:43:12'),
(9, 10, 'shop', '<p><span style=\"color: rgb(77, 81, 86); font-family: Roboto, &quot;helvetica neue&quot;, helvetica, arial, sans-serif; font-size: 13px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows</span><br></p>', 'storage/profile_images/profile_images-16872968469341.png', 'storage/profile_images/profile_images-16872968469233.jpeg', '2023-06-20 15:34:06', '2023-06-20 15:34:06'),
(11, 12, 'kazi', NULL, 'storage/profile_images/profile_images-16876015934452.png', 'storage/profile_images/profile_images-16876015933841.jpeg', '2023-06-23 13:12:44', '2023-06-24 04:13:13'),
(12, 13, 'shop400', NULL, NULL, NULL, '2023-06-23 13:50:10', '2023-06-23 13:50:10'),
(13, 14, 'shop', NULL, NULL, NULL, '2023-06-23 13:51:06', '2023-06-23 13:51:06'),
(14, 15, 'techno', NULL, NULL, NULL, '2023-06-28 04:37:40', '2023-06-28 04:37:40'),
(15, 16, 'shop500', NULL, NULL, NULL, '2023-08-03 23:15:24', '2023-08-03 23:15:24'),
(16, 17, 'Shop', 'sdf', NULL, NULL, '2023-08-10 11:52:25', '2023-08-10 12:53:33'),
(17, 18, 'shop Name', NULL, NULL, NULL, '2023-08-10 12:15:06', '2023-08-10 12:15:06'),
(18, 19, 'Test', NULL, NULL, NULL, '2023-09-09 12:09:05', '2023-09-09 12:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `shop_orders`
--

CREATE TABLE `shop_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=processing,2=completed',
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_orders`
--

INSERT INTO `shop_orders` (`id`, `shop_id`, `order_id`, `invoice_id`, `payment_status`, `status`, `data`, `created_at`, `updated_at`) VALUES
(8, 12, 9, 1687631930, 0, 0, '2024-06-23', '2023-06-24 12:38:50', '2023-06-24 12:38:50'),
(7, 12, 8, 121687616249, 0, 2, '2024-06-23', '2023-06-24 08:17:29', '2023-06-24 09:04:51'),
(6, 12, 7, 121687602808, 0, 1, '2024-06-23', '2023-06-24 04:33:28', '2023-06-24 08:58:56'),
(5, 12, 6, 121687602701, 0, 0, '2024-06-23', '2023-06-24 04:31:41', '2023-06-24 04:31:41'),
(11, 10, 12, 1690890546, 0, 2, '2001-08-23', '2023-08-01 05:49:06', '2023-08-10 13:42:53'),
(12, 10, 13, 1690949165, 0, 0, '2002-08-23', '2023-08-01 22:06:05', '2023-08-01 22:06:05'),
(13, 10, 14, 1690949498, 0, 1, '2002-08-23', '2023-08-01 22:11:38', '2023-08-10 13:42:19'),
(14, 10, 15, 1690950351, 0, 2, '2002-08-23', '2023-08-01 22:25:51', '2023-08-10 13:42:50'),
(15, 10, 16, 1690951171, 0, 2, '2002-08-23', '2023-08-01 22:39:31', '2023-08-10 13:42:48'),
(16, 10, 17, 1690977510, 0, 1, '2002-08-23', '2023-08-02 05:58:30', '2023-08-10 13:42:22'),
(17, 10, 18, 1690977541, 0, 0, '2002-08-23', '2023-08-02 05:59:01', '2023-08-02 05:59:01'),
(18, 10, 19, 1690977580, 0, 1, '2002-08-23', '2023-08-02 05:59:40', '2023-08-10 13:42:25'),
(19, 10, 20, 1690977674, 0, 0, '2002-08-23', '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(20, 12, 20, 1690977674, 0, 0, '2002-08-23', '2023-08-02 06:01:14', '2023-08-02 06:01:14'),
(21, 10, 21, 1690977793, 0, 2, '2002-08-23', '2023-08-02 06:03:13', '2023-08-25 09:30:41'),
(22, 10, 22, 1690977894, 0, 0, '2002-08-23', '2023-08-02 06:04:54', '2023-08-02 06:04:54'),
(23, 10, 23, 1690977933, 0, 0, '2002-08-23', '2023-08-02 06:05:33', '2023-08-02 06:05:33'),
(24, 10, 24, 1690977982, 0, 0, '2002-08-23', '2023-08-02 06:06:22', '2023-08-02 06:06:22'),
(25, 10, 25, 1690978239, 0, 0, '2002-08-23', '2023-08-02 06:10:39', '2023-08-02 06:10:39'),
(26, 10, 26, 1691048004, 0, 0, '2003-08-23', '2023-08-03 01:33:24', '2023-08-03 01:33:24'),
(27, 10, 27, 1691050313, 0, 0, '2003-08-23', '2023-08-03 02:11:53', '2023-08-03 02:11:53'),
(28, 10, 28, 1691052522, 0, 0, '2003-08-23', '2023-08-03 02:48:42', '2023-08-03 02:48:42'),
(29, 10, 29, 1691067292, 0, 0, '2003-08-23', '2023-08-03 06:54:52', '2023-08-03 06:54:52'),
(30, 10, 30, 1692278418, 0, 0, '2017-08-23', '2023-08-17 13:20:18', '2023-08-17 13:20:18'),
(31, 10, 31, 1692278722, 0, 0, '2017-08-23', '2023-08-17 13:25:22', '2023-08-17 13:25:22'),
(32, 10, 32, 1692278865, 0, 0, '2017-08-23', '2023-08-17 13:27:45', '2023-08-17 13:27:45'),
(33, 10, 33, 1692596856, 0, 0, '2021-08-23', '2023-08-21 05:47:36', '2023-08-21 05:47:36'),
(34, 10, 34, 1692608588, 0, 0, '2021-08-23', '2023-08-21 09:03:08', '2023-08-21 09:03:08'),
(35, 10, 35, 1692608922, 0, 0, '2021-08-23', '2023-08-21 09:08:42', '2023-08-21 09:08:42'),
(36, 10, 36, 1692625822, 0, 0, '2021-08-23', '2023-08-21 13:50:22', '2023-08-21 13:50:22'),
(37, 10, 37, 1692679291, 0, 0, '2022-08-23', '2023-08-22 04:41:31', '2023-08-22 04:41:31'),
(38, 10, 38, 1692679328, 0, 0, '2022-08-23', '2023-08-22 04:42:08', '2023-08-22 04:42:08'),
(39, 10, 40, 10040, 0, 0, '2022-08-23', '2023-08-22 10:44:13', '2023-08-22 10:44:13'),
(40, 10, 41, 10041, 0, 0, '2022-08-23', '2023-08-22 10:45:15', '2023-08-22 10:45:15'),
(41, 10, 42, 10042, 0, 0, '2022-08-23', '2023-08-22 10:45:47', '2023-08-22 10:45:47'),
(42, 10, 43, 10043, 0, 0, '2022-08-23', '2023-08-22 10:48:43', '2023-08-22 10:48:43'),
(43, 10, 44, 10044, 0, 0, '2022-08-23', '2023-08-22 10:49:43', '2023-08-22 10:49:43'),
(44, 10, 45, 10045, 0, 0, '2022-08-23', '2023-08-22 10:51:22', '2023-08-22 10:51:22'),
(45, 10, 46, 10046, 0, 0, '2022-08-23', '2023-08-22 11:41:33', '2023-08-22 11:41:33'),
(46, 10, 47, 10047, 0, 0, '2022-08-23', '2023-08-22 12:19:34', '2023-08-22 12:19:34'),
(47, 10, 48, 10048, 0, 0, '2022-08-23', '2023-08-22 12:20:04', '2023-08-22 12:20:04'),
(48, 10, 49, 10049, 0, 0, '2023-08-23', '2023-08-23 06:50:39', '2023-08-23 06:50:39'),
(49, 10, 50, 10050, 0, 0, '2023-08-23', '2023-08-23 06:57:43', '2023-08-23 06:57:43'),
(50, 10, 51, 10051, 0, 0, '2023-08-23', '2023-08-23 06:57:47', '2023-08-23 06:57:47'),
(51, 10, 52, 10052, 0, 0, '2023-08-23', '2023-08-23 07:10:48', '2023-08-23 07:10:48'),
(52, 10, 53, 10053, 0, 0, '2025-08-23', '2023-08-25 08:43:43', '2023-08-25 08:43:43'),
(53, 10, 54, 10054, 0, 0, '2025-08-23', '2023-08-25 08:49:08', '2023-08-25 08:49:08'),
(54, 10, 55, 10055, 0, 0, '2025-08-23', '2023-08-25 08:49:23', '2023-08-25 08:49:23'),
(55, 10, 56, 10056, 0, 0, '2025-08-23', '2023-08-25 08:49:52', '2023-08-25 08:49:52'),
(56, 10, 57, 10057, 0, 0, '2025-08-23', '2023-08-25 08:50:05', '2023-08-25 08:50:05'),
(57, 10, 58, 10058, 0, 0, '2025-08-23', '2023-08-25 08:51:03', '2023-08-25 08:51:03'),
(58, 10, 59, 10059, 0, 0, '2025-08-23', '2023-08-25 08:52:35', '2023-08-25 08:52:35'),
(59, 10, 60, 10060, 0, 2, '2025-08-23', '2023-08-25 08:53:49', '2023-08-25 09:33:19'),
(60, 10, 61, 10061, 0, 0, '2026-08-23', '2023-08-26 12:29:20', '2023-08-26 12:29:20'),
(61, 10, 62, 10062, 0, 0, '2026-08-23', '2023-08-26 12:29:49', '2023-08-26 12:29:49'),
(62, 10, 63, 10063, 0, 0, '2026-08-23', '2023-08-26 12:30:03', '2023-08-26 12:30:03'),
(63, 10, 64, 10064, 0, 0, '2026-08-23', '2023-08-26 12:30:10', '2023-08-26 12:30:10'),
(64, 10, 65, 10065, 0, 0, '2026-08-23', '2023-08-26 12:30:19', '2023-08-26 12:30:19'),
(65, 10, 66, 10066, 1, 0, '2026-08-23', '2023-08-26 12:30:33', '2023-08-26 12:30:33'),
(66, 10, 67, 10067, 1, 0, '2026-08-23', '2023-08-26 12:31:02', '2023-08-26 12:31:02'),
(67, 10, 68, 10068, 1, 0, '2026-08-23', '2023-08-26 13:47:48', '2023-08-31 05:39:18'),
(68, 12, 69, 10069, 0, 0, '2001-09-23', '2023-09-01 13:47:14', '2023-09-01 13:47:14'),
(69, 12, 70, 10070, 0, 0, '2001-09-23', '2023-09-01 13:48:50', '2023-09-01 13:48:50'),
(70, 12, 71, 10071, 1, 0, '2001-09-23', '2023-09-01 13:49:30', '2023-09-01 13:51:39'),
(71, 12, 72, 10072, 0, 0, '2001-09-23', '2023-09-01 13:53:04', '2023-09-01 13:53:04'),
(72, 12, 73, 10073, 0, 0, '2004-09-23', '2023-09-04 09:49:16', '2023-09-04 09:49:16'),
(73, 12, 74, 10074, 0, 0, '2004-09-23', '2023-09-04 09:49:55', '2023-09-04 09:49:55'),
(74, 12, 75, 10075, 0, 0, '2004-09-23', '2023-09-04 09:51:17', '2023-09-04 09:51:17'),
(75, 12, 76, 10076, 0, 0, '2004-09-23', '2023-09-04 09:51:58', '2023-09-04 09:51:58'),
(76, 12, 77, 10077, 0, 0, '2004-09-23', '2023-09-04 09:52:05', '2023-09-04 09:52:05'),
(77, 12, 78, 10078, 0, 0, '2004-09-23', '2023-09-04 09:52:37', '2023-09-04 09:52:37'),
(78, 12, 79, 10079, 0, 0, '2004-09-23', '2023-09-04 10:46:55', '2023-09-04 10:46:55'),
(79, 12, 80, 10080, 0, 0, '2004-09-23', '2023-09-04 10:48:09', '2023-09-04 10:48:09'),
(80, 12, 81, 10081, 0, 0, '2004-09-23', '2023-09-04 10:49:40', '2023-09-04 10:49:40'),
(81, 12, 82, 10082, 0, 0, '2004-09-23', '2023-09-04 10:50:25', '2023-09-04 10:50:25'),
(82, 12, 83, 10083, 0, 0, '2004-09-23', '2023-09-04 10:51:15', '2023-09-04 10:51:15'),
(83, 12, 84, 10084, 0, 0, '2004-09-23', '2023-09-04 10:51:29', '2023-09-04 10:51:29'),
(84, 12, 85, 10085, 0, 0, '2004-09-23', '2023-09-04 10:52:06', '2023-09-04 10:52:06'),
(85, 12, 86, 10086, 0, 0, '2004-09-23', '2023-09-04 10:52:12', '2023-09-04 10:52:12'),
(86, 12, 87, 10087, 0, 0, '2004-09-23', '2023-09-04 10:52:22', '2023-09-04 10:52:22'),
(87, 12, 88, 10088, 0, 0, '2004-09-23', '2023-09-04 10:53:00', '2023-09-04 10:53:00'),
(88, 12, 89, 10089, 0, 0, '2004-09-23', '2023-09-04 10:53:10', '2023-09-04 10:53:10'),
(89, 12, 90, 10090, 0, 0, '2004-09-23', '2023-09-04 10:53:20', '2023-09-04 10:53:20'),
(90, 12, 91, 10091, 0, 0, '2004-09-23', '2023-09-04 11:36:50', '2023-09-04 11:36:50'),
(91, 12, 92, 10092, 0, 0, '2004-09-23', '2023-09-04 11:37:02', '2023-09-04 11:37:02'),
(92, 12, 93, 10093, 0, 0, '2004-09-23', '2023-09-04 11:37:44', '2023-09-04 11:37:44'),
(93, 12, 94, 10094, 0, 0, '2004-09-23', '2023-09-04 11:38:18', '2023-09-04 11:38:18'),
(94, 12, 95, 10095, 0, 0, '2004-09-23', '2023-09-04 11:39:16', '2023-09-04 11:39:16'),
(95, 12, 96, 10096, 0, 0, '2004-09-23', '2023-09-04 11:39:32', '2023-09-04 11:39:32'),
(96, 12, 97, 10097, 0, 0, '2004-09-23', '2023-09-04 11:46:22', '2023-09-04 11:46:22'),
(97, 12, 98, 10098, 0, 0, '2004-09-23', '2023-09-04 11:46:35', '2023-09-04 11:46:35'),
(98, 12, 99, 10099, 0, 0, '2004-09-23', '2023-09-04 11:46:52', '2023-09-04 11:46:52'),
(99, 12, 100, 10100, 0, 0, '2004-09-23', '2023-09-04 11:48:41', '2023-09-04 11:48:41'),
(100, 12, 101, 10101, 0, 0, '2004-09-23', '2023-09-04 11:50:32', '2023-09-04 11:50:32'),
(101, 12, 102, 10102, 0, 0, '2004-09-23', '2023-09-04 11:51:23', '2023-09-04 11:51:23'),
(102, 12, 103, 10103, 0, 0, '2004-09-23', '2023-09-04 11:52:33', '2023-09-04 11:52:33'),
(103, 8, 104, 10104, 0, 0, '2007-09-23', '2023-09-07 09:36:46', '2023-09-07 09:36:46'),
(104, 8, 105, 10105, 1, 0, '2007-09-23', '2023-09-07 09:53:07', '2023-09-07 09:57:55'),
(105, 8, 106, 10106, 1, 0, '2007-09-23', '2023-09-07 13:01:32', '2023-09-07 13:02:37'),
(106, 12, 106, 10106, 1, 0, '2007-09-23', '2023-09-07 13:01:32', '2023-09-07 13:02:37'),
(107, 8, 107, 10107, 1, 0, '2008-09-23', '2023-09-08 10:07:13', '2023-09-08 10:08:27'),
(108, 8, 108, 10108, 1, 0, '2008-09-23', '2023-09-08 10:12:18', '2023-09-08 10:20:58'),
(109, 8, 109, 10109, 1, 0, '2011-09-23', '2023-09-11 14:05:02', '2023-09-11 14:06:16');

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
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `measurement` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `user_id`, `name`, `avg_rating`, `min_price`, `max_price`, `ar_img`, `product_code`, `is_variant`, `category_id`, `price`, `cost`, `shipping_cost`, `discount_type`, `discount`, `status`, `is_deleted`, `description`, `measurement`, `created_at`, `updated_at`) VALUES
(38, '12', 'Walton 4300', 3.00, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 10.00, NULL, NULL, 0, 34535.0, 1, 0, '<p>zxczx</p>', NULL, '2023-06-24 04:12:36', '2023-08-31 09:33:54'),
(39, '12', 'Laptop', 3.50, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 4534.00, NULL, NULL, 0, 345.0, 1, 0, '<p>sdfsdfsd</p>', NULL, '2023-06-24 04:13:57', '2023-08-08 11:17:25'),
(40, '10', 'itdealbd', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 0.00, NULL, NULL, 0, 34.0, 1, 1, '<p>sdfsd</p>', NULL, '2023-07-24 22:25:21', '2023-08-30 13:22:07'),
(41, '10', 'itdealbd', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 34.00, NULL, NULL, 0, 34.0, 1, 0, '<p>sdfsd</p>', NULL, '2023-07-24 22:27:18', '2023-07-24 22:27:18'),
(42, '10', 'itdealbd', NULL, NULL, NULL, NULL, NULL, 0, 1, 345.00, NULL, NULL, 1, 34.0, 1, 0, NULL, NULL, '2023-07-24 22:53:00', '2023-07-24 22:53:00'),
(43, '10', 'product 440', 4.00, NULL, NULL, NULL, NULL, 0, 3, 0.00, NULL, NULL, 1, 40.0, 1, 0, 'product 440 dfgdfgasdf', NULL, '2023-08-01 02:49:52', '2023-08-11 07:44:09'),
(44, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 2, 346.00, NULL, NULL, 1, 34.0, 1, 0, '<p>sdf</p>', NULL, '2023-08-02 07:58:55', '2023-08-11 10:08:23'),
(45, '10', 'Product 199', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 1, 45.0, 1, 0, '<p>sdf</p>', NULL, '2023-08-02 08:00:17', '2023-08-11 10:45:13'),
(46, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:11:35', '2023-08-02 22:11:35'),
(47, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 2, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:12:16', '2023-08-02 22:12:16'),
(48, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:33:02', '2023-08-02 22:33:02'),
(49, '10', 'deisgner@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:38:42', '2023-08-02 22:38:42'),
(50, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:42:18', '2023-08-02 22:42:18'),
(51, '10', 'deisgner500', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:42:54', '2023-08-02 22:42:54'),
(52, '10', 'sdf', NULL, NULL, NULL, NULL, NULL, 0, 1, 30.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:50:01', '2023-08-02 22:50:01'),
(53, '10', 'dfsd', NULL, NULL, NULL, NULL, NULL, 0, 1, 34.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:55:21', '2023-08-02 22:55:21'),
(54, '10', 'ghhh', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-02 22:56:04', '2023-08-02 22:56:04'),
(55, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 0, 2, 460.00, NULL, NULL, 0, NULL, 1, 0, '<div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"><span style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</span><br></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '<p><br></p><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" class=\"\"><span style=\"background-color: rgb(255, 0, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat</span>.</h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '2023-08-02 22:57:55', '2023-08-02 22:57:55'),
(56, '10', 'deisgner@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, NULL, 1, 456.0, 1, 0, '<div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CNrwpOXZv4ADFT4NgwMdPiwInQ\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"><span style=\"text-align: justify;\">lutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</span><br></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean aliquam, nibh volutpat dignissim fermentum, nulla tellus aliquam tortor, sit amet finibus libero ligula at neque. Etiam vitae mi a elit fringilla facilisis a ut quam. Nunc porta molestie felis. Aenean et leo dui. Nam eu velit elit. Maecenas semper mollis ipsum, at dictum lorem tincidunt et. Sed mollis porttitor diam ut pharetra. Praesent pharetra pretium metus sed ullamcorper. Nullam risus enim, egestas eu nisi eget, commodo accumsan ante. Vestibulum quis viverra arcu, pulvinar sollicitudin ligula. Aliquam commodo ligula nec nisl venenatis, a aliquet massa iaculis. In hac habitasse platea dictumst. Morbi libero lacus, posuere at dictum vestibulum, tempus a libero. Fusce sed eleifend sem. Morbi hendrerit, tortor non varius rutrum, quam augue interdum ligula, eu fringilla enim odio id quam.</p></div></div>', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '2023-08-02 22:59:17', '2023-08-02 22:59:17'),
(57, '10', 'gggg', NULL, NULL, NULL, NULL, NULL, 0, 1, 45.00, NULL, NULL, 0, NULL, 1, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam vo</span><br></p>', '2023-08-02 23:00:27', '2023-08-02 23:00:27'),
(58, '10', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, 0, 3, 366.00, NULL, NULL, 1, 4600.0, 1, 0, '<div><br></div><div><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CIPp4rrbv4ADFX4EgwMdVu4JXA\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div></div>', '<div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:05:23', '2023-08-02 23:05:23'),
(59, '10', 'sdfsdf', NULL, NULL, NULL, NULL, '10059', 0, 3, 366.00, NULL, NULL, 1, 4600.0, 1, 0, '<div><br></div><div><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CIPp4rrbv4ADFX4EgwMdVu4JXA\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div></div>', '<div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:06:28', '2023-08-02 23:06:28'),
(60, '10', 'Lorem ipsum', 3.00, NULL, NULL, NULL, '10060', 1, 2, 0.00, NULL, NULL, 1, 300.0, 1, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><b>Lorem ipsum dolor <span style=\"background-color: rgb(255, 0, 255);\">sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis</span>. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugia</b></span><br></p>', '<p><br></p><div id=\"bannerR\" style=\"margin: 0px -300px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CPutuJXnv4ADFchNKwodLjkISw\" style=\"margin: 0px; padding: 0px; height: 600px;\"><div id=\"google_ads_iframe_/15184186,22440292294/lipsumcom_right_siderail_0__container__\" style=\"margin: 0px; padding: 0px; border: 0pt none; width: 300px; height: 250px;\"></div></div></div><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam laoreet tincidunt felis. Morbi tincidunt lectus ac placerat congue. Duis tellus lectus, rhoncus quis mi in, molestie eleifend turpis. In dictum eleifend velit, et aliquet elit rhoncus vel. Quisque id dolor ipsum. Curabitur fringilla consequat sodales. Donec ut nisl magna. Integer sit amet imperdiet felis. Nunc nec eros libero. Integer vel sapien ac nibh lacinia mollis eu ut dolor. Fusce suscipit diam at felis ultrices scelerisque. Proin sit amet dolor iaculis, volutpat lorem id, condimentum mi. Nullam gravida ex quis metus bibendum imperdiet a eu dolor. Nullam volutpat, purus sed lobortis congue, tortor purus tempus metus, eget iaculis erat nisl vel mi. Mauris viverra arcu ac commodo feugiat.</p></div></div>', '2023-08-02 23:58:27', '2023-08-11 08:31:33'),
(61, '10', 'dfg', NULL, NULL, NULL, NULL, '10061', 0, 1, 0.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-03 01:08:20', '2023-08-03 01:08:20'),
(62, '10', 'sdf', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10062', 0, 1, 40.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-03 01:29:10', '2023-08-03 01:29:10'),
(63, '10', 'sdf', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10063', 0, 1, 40.00, NULL, NULL, 0, NULL, 1, 0, NULL, NULL, '2023-08-03 01:30:28', '2023-08-03 01:30:28'),
(64, '10', 'product 1022', 3.00, NULL, NULL, 'public/uploads/arImg1692354735.glb', '10064', 1, 1, 0.00, NULL, NULL, 1, 30.0, 1, 0, '<p><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 14px; white-space: pre; background-color: rgb(255, 255, 0);\"><font color=\"#000000\" style=\"\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos </font></span><br></p>', '<p><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 14px; white-space: pre; background-color: rgb(255, 255, 0);\"><font color=\"#ff0000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos </font></span><br></p>', '2023-08-03 02:47:50', '2023-08-08 11:39:40'),
(65, '10', 'product 3009', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 2, 0.00, NULL, NULL, 1, 30.0, 1, 0, '<p>dddddddddddddddddddddddddd asfasdfdasfsddddddddddddddddddddddddddd</p>', NULL, '2023-08-03 07:57:52', '2023-08-03 07:57:52'),
(69, '10', 'sdf', NULL, 34, 34, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 0.00, NULL, NULL, 1, 6.0, 1, 0, '<p>sdf asd asdf</p>', NULL, '2023-08-18 09:01:46', '2023-08-18 09:01:46'),
(70, '10', 'no variant', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 34.00, NULL, NULL, 1, 4.0, 1, 0, '<p>asdf</p>', NULL, '2023-08-18 09:38:13', '2023-08-18 09:38:13'),
(71, '10', 'ar', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 345.00, NULL, NULL, 0, NULL, 1, 0, '<p>sdf</p>', NULL, '2023-08-18 10:29:24', '2023-08-18 10:29:24'),
(72, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, 'ss', NULL, '2023-08-18 10:31:19', '2023-08-30 13:15:11'),
(73, '10', 'img', 3.00, NULL, NULL, 'public/uploads/arImg1692354735.glb', NULL, 0, 1, 34.00, NULL, 5.00, 0, NULL, 1, 0, '<p>sdf</p>', NULL, '2023-08-18 10:32:15', '2023-08-30 06:29:55'),
(74, '10', 'gb 33', 3.00, 34, 34, NULL, NULL, 1, 1, 0.00, NULL, 3.00, 1, 10.0, 1, 0, '<p>sdf</p>', NULL, '2023-08-20 13:03:37', '2023-08-21 12:26:12'),
(75, '10', 'sdfds', NULL, NULL, NULL, NULL, NULL, 0, 1, 34.00, NULL, NULL, 0, NULL, 1, 0, '<p>sdf</p>', NULL, '2023-08-22 13:49:03', '2023-08-22 13:49:03'),
(76, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1693224999.sql', NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:16:39', '2023-08-28 12:16:39'),
(77, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1693225021.sql', NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:17:01', '2023-08-28 12:17:01'),
(78, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1693225195.sql', NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:19:55', '2023-08-28 12:19:55'),
(79, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1693225215.sql', NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:20:15', '2023-08-28 12:20:15'),
(80, '10', 'product 22277', NULL, NULL, NULL, 'public/uploads/arImg1693225279.sql', NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:21:19', '2023-08-28 12:21:19'),
(81, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:31:13', '2023-08-28 12:31:13'),
(82, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:31:41', '2023-08-28 12:31:41'),
(83, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:32:11', '2023-08-28 12:32:11'),
(84, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:32:39', '2023-08-28 12:32:39'),
(85, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:33:30', '2023-08-28 12:33:30'),
(86, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:33:47', '2023-08-28 12:33:47'),
(87, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:34:11', '2023-08-28 12:34:11'),
(88, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:34:27', '2023-08-28 12:34:27'),
(89, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:34:39', '2023-08-28 12:34:39'),
(90, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:34:53', '2023-08-28 12:34:53'),
(91, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:35:08', '2023-08-28 12:35:08'),
(92, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:49:18', '2023-08-28 12:49:18'),
(93, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:50:55', '2023-08-28 12:50:55'),
(94, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:51:16', '2023-08-28 12:51:16'),
(95, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:51:37', '2023-08-28 12:51:37'),
(96, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:51:59', '2023-08-28 12:51:59'),
(97, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:52:49', '2023-08-28 12:52:49'),
(98, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:52:59', '2023-08-28 12:52:59'),
(99, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:54:02', '2023-08-28 12:54:02'),
(100, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:55:37', '2023-08-28 12:55:37'),
(101, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 12:59:11', '2023-08-28 12:59:11'),
(102, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 13:00:59', '2023-08-28 13:00:59'),
(103, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 13:01:29', '2023-08-28 13:01:29'),
(104, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 13:58:18', '2023-08-28 13:58:18'),
(105, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 13:58:31', '2023-08-28 13:58:31'),
(106, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 13:59:38', '2023-08-28 13:59:38'),
(107, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:00:00', '2023-08-28 14:00:00'),
(108, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:00:29', '2023-08-28 14:00:29'),
(109, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:00:35', '2023-08-28 14:00:35'),
(110, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:01:27', '2023-08-28 14:01:27'),
(111, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:03:11', '2023-08-28 14:03:11'),
(112, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 300.00, 30.00, NULL, 0, 1.0, 1, 0, NULL, NULL, '2023-08-28 14:03:46', '2023-08-28 14:03:46'),
(113, '10', 'product 22277', NULL, 3, 3, NULL, NULL, 1, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 14:19:48', '2023-08-28 14:19:48'),
(114, '10', 'product 22277', NULL, 3, 3, NULL, NULL, 1, 1, 10.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-28 14:21:18', '2023-08-28 14:21:18'),
(115, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 1, 1, 0.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-29 12:19:05', '2023-08-29 12:19:05'),
(116, '10', 'product 22277', NULL, 30, 30, NULL, NULL, 1, 1, 0.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-29 12:19:27', '2023-08-29 12:19:27'),
(117, '10', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-08-29 12:20:45', '2023-08-29 12:20:45'),
(118, '11', 'product 22277', NULL, 0, 10, NULL, NULL, 1, 1, 0.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', NULL, '2023-09-01 04:47:39', '2023-09-01 04:47:40'),
(119, '11', 'product 22277', NULL, 0, 10, NULL, NULL, 1, 1, 0.00, NULL, 76767.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:09:00', '2023-09-01 06:09:00'),
(120, '11', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, 20.00, 76.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:13:06', '2023-09-01 06:13:06'),
(121, '11', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, 20.00, 76.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:13:40', '2023-09-01 06:13:40'),
(122, '11', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, 20.00, 76.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:17:56', '2023-09-01 06:17:56'),
(123, '11', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 0.00, 20.00, 76.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:18:25', '2023-09-01 06:18:25'),
(124, '11', 'product 22277', NULL, NULL, NULL, NULL, NULL, 0, 1, 10.00, 20.00, 76.00, 0, 1.0, 1, 0, 'ytftyfty', 'yftyftyftyf', '2023-09-01 06:20:46', '2023-09-01 06:20:46'),
(125, '8', 'glb', NULL, NULL, NULL, 'public/uploads/arImg/1694076623.glb', NULL, 0, 1, 10.00, NULL, 10.00, 0, NULL, 1, 0, '<p>sdf</p>', NULL, '2023-09-07 08:50:23', '2023-09-07 08:50:23'),
(126, '8', 'glb', NULL, NULL, NULL, 'public/uploads/arImg/1694076741.glb', NULL, 0, 1, 10.00, NULL, 10.00, 0, NULL, 1, 0, '<p>sdf</p>', NULL, '2023-09-07 08:52:21', '2023-09-07 08:52:21');

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
(80, 118, 'storage/product_images/product_images-16935436599683.png', '2023-09-01 04:47:40', '2023-09-01 04:47:40'),
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
(59, 40, 'storage/product_images/product_images-16927088758664.png', '2023-08-22 12:54:36', '2023-08-22 12:54:36'),
(60, 103, 'storage/product_images/product_images-16932276896969.png', '2023-08-28 13:01:29', '2023-08-28 13:01:29'),
(61, 106, 'storage/product_images/product_images-16932311782873.png', '2023-08-28 13:59:39', '2023-08-28 13:59:39'),
(62, 107, 'storage/product_images/product_images-16932312004638.png', '2023-08-28 14:00:00', '2023-08-28 14:00:00'),
(63, 110, 'storage/product_images/product_images-16932312878886.png', '2023-08-28 14:01:27', '2023-08-28 14:01:27'),
(64, 111, 'storage/product_images/product_images-16932313913437.png', '2023-08-28 14:03:11', '2023-08-28 14:03:11'),
(65, 112, 'storage/product_images/product_images-16932314262654.png', '2023-08-28 14:03:46', '2023-08-28 14:03:46'),
(81, 119, 'storage/product_images/product_images-16935485409227.png', '2023-09-01 06:09:00', '2023-09-01 06:09:00'),
(67, 72, 'storage/product_images/product_images-16932316116859.png', '2023-08-28 14:06:52', '2023-08-28 14:06:52'),
(68, 72, 'storage/product_images/product_images-16932316297218.png', '2023-08-28 14:07:09', '2023-08-28 14:07:09'),
(69, 113, 'storage/product_images/product_images-16932323886376.png', '2023-08-28 14:19:48', '2023-08-28 14:19:48'),
(70, 114, 'storage/product_images/product_images-16932324788439.png', '2023-08-28 14:21:18', '2023-08-28 14:21:18'),
(71, 115, 'storage/product_images/product_images-16933115458138.png', '2023-08-29 12:19:06', '2023-08-29 12:19:06'),
(72, 72, 'storage/product_images/product_images-16933177998678.png', '2023-08-29 12:19:27', '2023-08-29 14:03:19'),
(73, 117, 'storage/product_images/product_images-16933116452070.png', '2023-08-29 12:20:45', '2023-08-29 12:20:45'),
(74, 72, 'storage/product_images/product_images-16933180579920.png', '2023-08-29 14:07:37', '2023-08-29 14:07:37'),
(76, 72, 'storage/product_images/product_images-16934009423959.png', '2023-08-30 13:09:02', '2023-08-30 13:09:02'),
(77, 72, 'storage/product_images/product_images-16934011747540.png', '2023-08-30 13:12:54', '2023-08-30 13:12:54'),
(78, 72, 'storage/product_images/product_images-16934012798076.png', '2023-08-30 13:14:39', '2023-08-30 13:14:39'),
(79, 72, 'storage/product_images/product_images-16934013112378.png', '2023-08-30 13:15:11', '2023-08-30 13:15:11'),
(82, 120, 'storage/product_images/product_images-16935487861301.png', '2023-09-01 06:13:06', '2023-09-01 06:13:06'),
(83, 121, 'storage/product_images/product_images-16935488205628.png', '2023-09-01 06:13:40', '2023-09-01 06:13:40'),
(84, 122, 'storage/product_images/product_images-16935490766959.png', '2023-09-01 06:17:56', '2023-09-01 06:17:56'),
(85, 123, 'storage/product_images/product_images-16935491051148.png', '2023-09-01 06:18:25', '2023-09-01 06:18:25'),
(86, 124, 'storage/product_images/product_images-16935492466389.png', '2023-09-01 06:20:47', '2023-09-01 06:20:47'),
(87, 125, 'storage/product_images/product_images-16940766247143.png', '2023-09-07 08:50:24', '2023-09-07 08:50:24'),
(88, 126, 'storage/product_images/product_images-16940767412745.png', '2023-09-07 08:52:21', '2023-09-07 08:52:21');

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
(8, 10, 6, 74, 3, 'dfg', '2023-08-21 12:26:12', '2023-08-21 12:26:12'),
(9, 10, 6, 73, 3, 'dfg', '2023-08-30 06:29:55', '2023-08-30 06:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_name` varchar(191) NOT NULL,
  `sender_email` varchar(191) NOT NULL,
  `support_id` int(11) DEFAULT NULL,
  `replied_by` int(11) DEFAULT NULL,
  `is_replied` tinyint(4) DEFAULT 0,
  `sender_message` text DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `sender_name`, `sender_email`, `support_id`, `replied_by`, `is_replied`, `sender_message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdf', 'sdf', NULL, NULL, 1, 'sdf sdfsd', NULL, '2023-09-05 09:54:55', '2023-09-13 06:38:22'),
(2, 'sdf', 'sdfsdf', NULL, NULL, 0, 'asd', NULL, '2023-09-05 09:55:10', '2023-09-05 09:55:10'),
(3, 'dfg', 'dfg', NULL, NULL, 0, 'g', NULL, '2023-09-05 11:17:48', '2023-09-05 11:17:48'),
(4, 'dfg', 'sdf@gmail.com', NULL, NULL, 0, 'gasdf s', NULL, '2023-09-05 11:45:52', '2023-09-05 11:45:52'),
(5, 'sdf', 'sdf', 1, NULL, 2, 'dfg', NULL, '2023-09-13 06:37:32', '2023-09-13 06:37:32'),
(6, 'sdf', 'sdf', 1, NULL, 2, 'dgsd', NULL, '2023-09-13 06:38:22', '2023-09-13 06:38:22'),
(7, 'sdf', 'sdf', 1, NULL, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', NULL, '2023-09-13 06:44:24', '2023-09-13 06:44:24');

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
  `user_type` varchar(255) NOT NULL DEFAULT 'generalUser',
  `name` varchar(191) NOT NULL,
  `country_name` text DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `id_no` bigint(11) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `is_authentic` varchar(191) DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ios_device_token` text DEFAULT NULL,
  `android_device_token` text DEFAULT NULL,
  `web_device_token` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `country_name`, `phone`, `id_no`, `email`, `is_authentic`, `email_verified_at`, `password`, `is_deleted`, `remember_token`, `created_at`, `updated_at`, `ios_device_token`, `android_device_token`, `web_device_token`) VALUES
(1, 'generalUser', 'kazi', NULL, NULL, NULL, 'kazimurtuza1145@gmail.com', '0', NULL, '$2y$10$wsaSk62LFXC0Rk2dPUSGoer8r3niRc7Mp3hMkMDgxyBK19w4KN/oy', 0, NULL, '2023-06-16 03:56:21', '2023-06-16 03:56:21', NULL, NULL, NULL),
(2, 'generalUser', 'kazi', NULL, NULL, NULL, 'kazi@gmail.com', '0', NULL, '$2y$10$tgGCIa57t79fSpj2A/WBI.PPgWzMC7KPJGQq7f.vZdjVhAeHOQ1Wi', 0, NULL, '2023-06-16 04:24:14', '2023-06-16 04:24:14', NULL, NULL, NULL),
(3, 'generalUser', 'kazi2', NULL, NULL, NULL, 'kazi12@gmail.com', '0', NULL, '$2y$10$7AxVVQE6wT21tuxHtLsmReTULldMqen67LNRttoTUseSqej1NlCcq', 0, NULL, '2023-06-16 04:26:00', '2023-06-16 04:26:00', NULL, NULL, NULL),
(4, 'generalUser', 'kazi2', NULL, NULL, NULL, 'kazi124@gmail.com', '0', NULL, '$2y$10$V8QhxDyNHYcLYNO/5xTuw.1PtU9d9DXldJ/l.jajsireVKcwESmfW', 0, NULL, '2023-06-16 04:27:10', '2023-06-16 04:27:10', NULL, NULL, NULL),
(5, 'generalUser', 'kazi', NULL, NULL, NULL, 'kazi222@gmail.com', '0', NULL, '$2y$10$exd913qyVBfdr/qHaoBXE.Dg85Px8jeY6RRJoqxeT8dVEbufCSfFW', 0, NULL, '2023-06-16 04:28:31', '2023-06-16 04:28:31', NULL, NULL, NULL),
(6, 'generalUser', 'General User', 'country', '0192', NULL, 'user@gmail.com', '1', '2023-06-16 09:47:41', '$2y$10$exd913qyVBfdr/qHaoBXE.Dg85Px8jeY6RRJoqxeT8dVEbufCSfFW', 1, NULL, '2023-06-16 09:44:14', '2023-09-09 14:43:47', NULL, NULL, ''),
(7, 'generalUser', 'user', NULL, NULL, NULL, 'user3344@gmail.com', '1', '2023-06-22 13:59:46', '$2y$10$FGQfIjgSroF4bstfh6.Md.0fB1GwId/foqtgAgX2qcrthwzwbZ8vq', 0, NULL, '2023-06-22 13:53:07', '2023-06-22 13:59:46', NULL, NULL, NULL),
(8, 'generalUser', 'user200', NULL, NULL, NULL, 'user200@gmail.com', '0', NULL, '$2y$10$ACyjZc3h/Ilb44UiFEVOuuCO1GXqfQ0jGESsaPK4A1NSSVmEnDux2', 0, NULL, '2023-08-03 22:54:45', '2023-08-03 22:54:45', NULL, NULL, NULL),
(9, 'generalUser', 'asad', NULL, NULL, 10009, 'asad@gmail.com', '0', NULL, '$2y$10$7XeoB4FUUz.nE3A/MaSE1.v89OP7X6JEOiyAq/w75boEMjPUppDIG', 0, NULL, '2023-08-03 23:03:07', '2023-08-03 23:03:07', NULL, NULL, NULL),
(10, 'generalUser', 'User Name', NULL, NULL, 10010, 'user691@gmail.com', '0', NULL, '$2y$10$HIUUkOR1HP34kVTpRTDJMeNZYReDdMTvuIQjKNj4zqqtEiY2obBJS', 0, NULL, '2023-08-04 06:06:43', '2023-08-04 06:06:43', NULL, NULL, NULL),
(11, 'generalUser', 'User Name', NULL, NULL, 10011, 'user6916@gmail.com', '0', NULL, '$2y$10$80W/TkgLLZpTIyeuXhY8uubxopW7Zvvl0OGeaGrUSrMw46pc07aym', 0, NULL, '2023-08-07 07:52:33', '2023-08-07 07:52:33', NULL, NULL, NULL),
(12, 'generalUser', 'Designer Name', NULL, NULL, 10012, 'designer6916@gmail.com', '0', NULL, '$2y$10$WjI/42mhXQUdFGR2QPVK8eSoOz06Pt/ux68ugpgtLZ9zV.v40jXS.', 0, NULL, '2023-08-09 06:56:10', '2023-08-09 06:56:10', NULL, NULL, NULL),
(13, 'generalUser', 'check Name', NULL, NULL, 10013, 'check@gmail.com', '0', NULL, '$2y$10$/AIM5bYh0BeTQJlp59P9gu4awCE0Bl0by1sK7VdT8cKpTGSFDXHOW', 0, NULL, '2023-08-31 06:38:12', '2023-08-31 06:38:12', NULL, NULL, NULL),
(19, 'generalUser', 'Test Kazi', NULL, NULL, 10019, 'kazimurtuza11@gmail.com', '1', '2023-08-31 08:00:58', '$2y$10$TD7g1U/FMPxmMlSNk1D9S.cN4O50ZdF4W/lPId8NnR7P6QNF1H3oK', 0, NULL, '2023-08-31 07:56:20', '2023-08-31 08:00:58', NULL, NULL, NULL),
(20, 'generalUser', 'kazi', NULL, NULL, 10020, 'kazi19@gmail.com', '1', NULL, '$2y$10$qbVtCf5e7wq2Sb1w4F9w2.1.iwSz.bThfKaERRl0qnvjd4I.AzO32', 0, NULL, '2023-09-05 06:10:59', '2023-09-05 06:13:41', NULL, NULL, NULL),
(21, 'generalUser', 'kazi11@gmail.com', NULL, NULL, 10021, 'lipan.duta+30@gmail.com', '1', NULL, '$2y$10$W0FpzXBPumn6L0P61O1w.ObrixHXFusO250AO.BhzUW8PvHBupC6q', 0, NULL, '2023-09-07 10:19:31', '2023-09-07 10:19:31', NULL, NULL, NULL);

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
(12, 1, '10012', 1, 'sooii', 'Account Number:', 'Routing Number:', 1, NULL, 1, '2023-08-09', '2023-08-16', 1, 10.00, '2023-08-09 12:04:01', '2023-08-16 08:21:48'),
(13, 2, '10013', 7, 'Islami Bank', '24324', '3243', NULL, 10, 0, '2023-08-26', NULL, NULL, 19.00, '2023-08-26 13:27:41', '2023-08-26 13:27:41'),
(14, 2, '10014', 9, 'Islami Bank', 'sdf', 'sdf', NULL, 10, 0, '2023-08-26', NULL, NULL, 11.00, '2023-08-26 17:37:24', '2023-08-26 17:37:24');

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_device_tokens`
--
ALTER TABLE `notification_device_tokens`
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
-- Indexes for table `supports`
--
ALTER TABLE `supports`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `designer_appointment_lists`
--
ALTER TABLE `designer_appointment_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `designer_chats`
--
ALTER TABLE `designer_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `designer_project_files`
--
ALTER TABLE `designer_project_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `designer_project_milestone_payments`
--
ALTER TABLE `designer_project_milestone_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `designer_rating_reviews`
--
ALTER TABLE `designer_rating_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `designer_service_rates`
--
ALTER TABLE `designer_service_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `designer_service_times`
--
ALTER TABLE `designer_service_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notification_device_tokens`
--
ALTER TABLE `notification_device_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `product_wish_lists`
--
ALTER TABLE `product_wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shopkeeper_details`
--
ALTER TABLE `shopkeeper_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shop_orders`
--
ALTER TABLE `shop_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `shop_product_images`
--
ALTER TABLE `shop_product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `shop_product_rating_reviews`
--
ALTER TABLE `shop_product_rating_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
