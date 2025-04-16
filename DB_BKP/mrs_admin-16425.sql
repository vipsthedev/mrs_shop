-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2025 at 05:10 PM
-- Server version: 8.3.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrs_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
CREATE TABLE IF NOT EXISTS `accessories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint UNSIGNED DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'available=1',
  `warranty_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `restock_quantity` int NOT NULL DEFAULT '0',
  `purchase_cost` decimal(10,2) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) NOT NULL DEFAULT '0.00',
  `supplier_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accessories_category_id_foreign` (`category_id`),
  KEY `accessories_company_id_foreign` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `company_id`, `category_id`, `brand`, `description`, `supplier`, `status`, `warranty_period`, `purchase_date`, `quantity`, `restock_quantity`, `purchase_cost`, `selling_price`, `discount`, `supplier_contact`, `location`, `is_active`, `created_at`, `updated_at`) VALUES
(1, ';lkl', 2, 1, 'lkqjlde', 'lkjlk', 'asd', '1', 'wlkejfle', '2025-03-18', 140, 6, 6.00, 6.00, 6.00, '6', '6', 1, '2025-03-17 13:14:55', '2025-03-26 12:10:14'),
(2, ';lk', 3, 1, 'wdf', 'sdf', NULL, '1', 'wer', '2025-11-11', 125, 15, 132.00, 132.00, 12.00, '23', '23', 1, '2025-03-25 11:49:04', '2025-03-26 12:02:10'),
(4, 'cold', 2, 1, 'lkkjjkl', 'sdfsdf', NULL, '1', '22', '2025-03-12', 9, 1, 12.00, 121.00, 1.00, '2', '111', 1, '2025-03-26 12:03:13', '2025-03-26 12:43:58'),
(5, 'kjhjk', 2, 1, ';lk', 'edcef', NULL, '1', '12', '2023-09-12', 230, 4, 123.00, 12.00, 12.00, '123', '223', 1, '2025-03-30 06:23:41', '2025-03-30 06:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'EarPhone1', NULL, 'EarPhone12', '2025-03-21 13:02:54', '2025-03-21 13:32:14'),
(2, 'Ear phone', 1, 'sdfsdf', '2025-03-21 13:03:24', '2025-03-21 13:36:10'),
(3, 'sdfsd', 2, 'Adasd', '2025-03-21 13:04:11', '2025-03-21 13:04:11'),
(5, 'sdf', 1, 'sdfsd', '2025-03-26 12:44:23', '2025-03-26 12:44:23'),
(6, 'sd', NULL, 'sdf', '2025-03-26 12:44:56', '2025-03-26 12:44:56'),
(7, 'eas-1', 1, 'kejheher', '2025-03-30 06:11:24', '2025-03-30 06:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'MI', 'Mi111', '2025-03-18 12:03:31', '2025-03-21 12:45:57'),
(3, 'Nokia', 'Nokia12', '2025-03-18 12:19:59', '2025-03-21 12:46:06'),
(5, 'OnePluse', 'one 123123 123', '2025-03-30 05:56:34', '2025-03-30 05:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_17_165647_create_accessories_table', 2),
(6, '2025_03_17_171732_create_categories_table', 2),
(7, '2025_03_17_172810_create_companies_table', 2),
(10, '2025_03_27_163913_create_staff_table', 3),
(11, '2025_03_30_161824_create_mobile_repairings_table', 4),
(13, '2025_03_30_163654_create_mobile_repairing_images_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_repairings`
--

DROP TABLE IF EXISTS `mobile_repairings`;
CREATE TABLE IF NOT EXISTS `mobile_repairings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` bigint UNSIGNED DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 =Pending',
  `customer_mobile_problem` text COLLATE utf8mb4_unicode_ci,
  `customer_mobile_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_mobile_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `reapring_cost` decimal(10,2) DEFAULT NULL,
  `reapring_charge` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(5,2) NOT NULL DEFAULT '0.00',
  `receiver_person_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_contact_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `mobile_images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_repairings_customer_email_unique` (`customer_email`),
  KEY `mobile_repairings_company_id_foreign` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_repairings`
--

INSERT INTO `mobile_repairings` (`id`, `customer_name`, `customer_date`, `customer_email`, `company_id`, `customer_address`, `status`, `customer_mobile_problem`, `customer_mobile_name`, `customer_mobile_model`, `delivery_date`, `reapring_cost`, `reapring_charge`, `total_amount`, `receiver_person_name`, `reference_name`, `other_contact_details`, `comments`, `mobile_images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'vipul', NULL, 'vipul@gmail.com', 2, 'fgdfgkl1', '1', 'dfd', 'sdf', 'dfd', '2123-03-12', 12.00, 13.00, 124.00, 'sdl;kf', '13.00', '124.00', '2123-03-12', '133832971545023899.jpg', '2025-03-30 12:50:56', '2025-03-30 13:38:33', NULL),
(2, 'vipul12', NULL, NULL, 2, 'fgdfgkl', '0', 'dfd', 'sdf', 'dfd', '2123-03-12', 12.00, 13.00, 124.00, 'sdl;kf', '13.00', '124.00', '2123-03-12', '133832971545023899.jpg', '2025-03-30 12:52:49', '2025-03-30 13:28:02', '2025-03-30 13:28:02'),
(3, 's;lkwe1', NULL, 'v@gmail.com', 2, 'skdgm', '0', 'SDFLK', 'dskSDF;LK', 'SDFLK', '1232-12-12', 1.00, 1.00, 1.00, ';sdlfk', '1.00', '1.00', '1232-12-12', NULL, '2025-03-30 13:40:00', '2025-03-30 13:40:39', NULL),
(4, 'dsf', NULL, 'vipul12@gmail.com', 2, 'sdfs', '1', 'ssdf', '9684521545', 'sd', '1212-03-12', 2.00, 2.00, 12.00, 'qw3sdw', '2', '12', '1212-03-12', NULL, '2025-04-02 09:52:13', '2025-04-02 09:52:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_repairing_images`
--

DROP TABLE IF EXISTS `mobile_repairing_images`;
CREATE TABLE IF NOT EXISTS `mobile_repairing_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `mobile_repairings_id` bigint UNSIGNED DEFAULT NULL,
  `mobile_images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobile_repairing_images_mobile_repairings_id_foreign` (`mobile_repairings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_repairing_images`
--

INSERT INTO `mobile_repairing_images` (`id`, `mobile_repairings_id`, `mobile_images`, `created_at`, `updated_at`) VALUES
(1, 1, '133832971545023899.jpg', '2025-03-30 12:50:56', '2025-03-30 12:50:56'),
(2, 2, '133832971545023899.jpg', '2025-03-30 12:52:49', '2025-03-30 12:52:49'),
(3, 3, '133832971545023899.jpg', '2025-03-30 13:40:00', '2025-03-30 13:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vipul@gmail.com', '$2y$10$ODPdoUaW740Qffmp.uiZvev.4aukW.XbYJO8UrjHCjGkff5ZNoESe', '2025-03-05 12:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE IF NOT EXISTS `staffs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hire_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staffs_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `status`, `gender`, `date_of_birth`, `department`, `position`, `shift_name`, `hire_date`, `created_at`, `updated_at`) VALUES
(1, ';lk', ';lk12', 'vipul@gmail.com', '9685452152', 'kl;', 'active', 'male', '1652-10-19', 'k\';l', ';l;l', 'A', '2015-01-20', '2025-03-27 11:51:12', '2025-03-28 11:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vipul@gmail.com', 'vipul@gmail.com', NULL, '$2y$10$hvCNrBvz16miCIV65zN2Pe9Z/Lc6igGdyv.NDdyFIQ/7swPVm4Wl.', '2u5QCUHpxzadyXNY0PYjEreWi0NNkdXyF4cxJTNuBOggw76pwu5a5yLyNn9D', '2025-03-05 11:58:21', '2025-03-05 11:58:21'),
(2, 'vipulTest@gmail.com', 'vipulTest@gmail.com', NULL, '$2y$10$hLztd3tS16hyE64zulzFkOafYcTVBur.pjUHWVSYNOHUXqHn8jMpi', NULL, '2025-03-05 12:26:12', '2025-03-05 12:26:12'),
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$bC3xMhbHzkPrm5Esi9ggtuEuDI.0KfY5uI0LzJ35CuO1A7A.VkVdW', NULL, '2025-03-27 11:04:26', '2025-03-27 11:04:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
