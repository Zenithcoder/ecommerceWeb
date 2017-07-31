-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2017 at 02:31 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deliziaf_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `addressline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressline`, `city`, `state`, `zip`, `country`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'fadf', 'dfadf', 'asfd', 12, 'fdfad', '6363', '2017-02-05 16:23:31', '2017-02-05 16:23:31', 2),
(2, 'fadf', 'dfadf', 'asfd', 12, 'fdfad', '6363', '2017-02-05 16:26:47', '2017-02-05 16:26:47', 2),
(3, 'fadf', 'dfadf', 'asfd', 12, 'fdfad', '6363', '2017-02-05 16:27:09', '2017-02-05 16:27:09', 2),
(4, 'asdgsadg', 'sdgag', 'sgd', 23, 'fadsf', '4644454', '2017-02-06 13:05:52', '2017-02-06 13:05:52', 1),
(5, 'etre', 'dga', 'dg', 34, 'fsg', 'agag', '2017-02-06 13:30:50', '2017-02-06 13:30:50', 1),
(6, '23 ghsgs', 'kgjg', 'sshs', 13, 'nigeria', '233123233', '2017-02-07 15:23:56', '2017-02-07 15:23:56', 1),
(7, '23 ghsgs', 'kgjg', 'sshs', 13, 'nigeria', '233123233', '2017-02-07 15:25:15', '2017-02-07 15:25:15', 1),
(8, '23 ghsgs', 'kgjg', 'sshs', 13, 'nigeria', '233123233', '2017-02-07 15:31:08', '2017-02-07 15:31:08', 1),
(9, '23 ghsgs', 'kgjg', 'sshs', 13, 'nigeria', '233123233', '2017-02-07 15:51:20', '2017-02-07 15:51:20', 1),
(10, '123', 'rg', 'ew', 34, 'rr', '7865', '2017-02-09 09:01:08', '2017-02-09 09:01:08', 1),
(11, '234', '243', '234', 52, 'hs', '865', '2017-02-09 09:19:00', '2017-02-09 09:19:00', 1),
(12, '234', '243', '234', 52, 'hs', '865', '2017-02-09 09:27:27', '2017-02-09 09:27:27', 1),
(13, '234', '243', '234', 52, 'hs', '865', '2017-02-09 09:29:48', '2017-02-09 09:29:48', 1),
(14, '234', '243', '234', 52, 'hs', '865', '2017-02-09 09:31:35', '2017-02-09 09:31:35', 1),
(15, 'etre', 'gw', 'wer', 23, 'ghq', '08053452', '2017-02-09 09:42:43', '2017-02-09 09:42:43', 1),
(16, 'etre', 'gw', 'wer', 23, 'ghq', '08053452', '2017-02-09 09:46:14', '2017-02-09 09:46:14', 1),
(17, 'asdgsadg', 'fffjj', 'sdgfa', 34, 'ng', '08885665', '2017-02-09 09:53:51', '2017-02-09 09:53:51', 1),
(18, 'asdgsadg', 'fffjj', 'sdgfa', 34, 'ng', '08885665', '2017-02-09 09:59:14', '2017-02-09 09:59:14', 1),
(19, 'asdgsadg', 'fffjj', 'sdgfa', 34, 'ng', '08885665', '2017-02-09 10:12:28', '2017-02-09 10:12:28', 1),
(20, 'asdgsadg', 'fffjj', 'sdgfa', 34, 'ng', '08885665', '2017-02-09 10:13:53', '2017-02-09 10:13:53', 1),
(21, 'afa', 'adf', 'dfa', 234, 'dfa', '08023', '2017-02-09 10:20:07', '2017-02-09 10:20:07', 1),
(22, 'afa', 'adf', 'dfa', 234, 'dfa', '08023', '2017-02-09 10:27:42', '2017-02-09 10:27:42', 1),
(23, 'afa', 'adf', 'dfa', 234, 'dfa', '08023', '2017-02-09 10:28:28', '2017-02-09 10:28:28', 1),
(24, 'afa', 'adf', 'dfa', 234, 'dfa', '08023', '2017-02-09 10:28:50', '2017-02-09 10:28:50', 1),
(25, 'afa', 'adf', 'dfa', 234, 'dfa', '08023', '2017-02-09 10:33:27', '2017-02-09 10:33:27', 1),
(26, 'ssdf', 'sdf', 'sfs', 234, 'wre', 'sdf', '2017-02-09 10:39:28', '2017-02-09 10:39:28', 1),
(27, 'ssdf', 'sdf', 'sfs', 234, 'wre', 'sdf', '2017-02-09 10:49:57', '2017-02-09 10:49:57', 1),
(28, 'fash', 'agg', 'dfaf', 343, 'gas', '996967', '2017-02-09 22:03:15', '2017-02-09 22:03:15', 1),
(29, 'fash', 'agg', 'dfaf', 343, 'gas', '996967', '2017-02-09 22:10:07', '2017-02-09 22:10:07', 1),
(30, 'frd;krok', 'dkrfrp;', 'ofjkd''dk;', 234, 'kfrpkfkff', '097t7548709', '2017-02-09 22:17:24', '2017-02-09 22:17:24', 1),
(31, 'fash', 'agg', 'dfaf', 343, 'gas', '996967', '2017-02-09 22:29:26', '2017-02-09 22:29:26', 1),
(32, 'ee', 'fd', 'dffdf', 34, 'adsg', '08987654', '2017-02-13 14:14:28', '2017-02-13 14:14:28', 1),
(33, 'ee', 'fd', 'dffdf', 34, 'adsg', '08987654', '2017-02-13 14:18:58', '2017-02-13 14:18:58', 1),
(34, 'ee', 'fd', 'dffdf', 34, 'adsg', '08987654', '2017-02-13 14:36:15', '2017-02-13 14:36:15', 1),
(35, 'ss', 'asdd', 'asd', 12, 'cung', '08023', '2017-02-13 21:21:06', '2017-02-13 21:21:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'china', NULL, NULL),
(3, 'Mexico', '2017-02-03 08:46:51', '2017-02-03 08:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_02_03_003539_create_products_table', 1),
(8, '2017_02_03_004003_create_categories_table', 1),
(10, '2017_02_03_032002_add_price_to_products_table', 2),
(11, '2017_02_05_151538_add_admin_column_to_users', 3),
(12, '2017_02_05_163536_create_addresses_table', 4),
(13, '2017_02_05_165744_add_user_id_to_address_table_new', 5),
(14, '2017_02_06_132228_create_orders_table', 6),
(15, '2017_02_06_132649_create_order_product_table', 7),
(16, '2017_02_09_122947_add_extra_field_to_user', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 2, 68.00, NULL, NULL),
(2, 6, 1, 2, 90.00, NULL, NULL),
(3, 7, 1, 1, 50.00, NULL, NULL),
(4, 6, 2, 1, 45.00, NULL, NULL),
(5, 6, 3, 1, 45.00, NULL, NULL),
(6, 6, 4, 1, 45.00, NULL, NULL),
(7, 6, 5, 1, 45.00, NULL, NULL),
(8, 6, 6, 1, 45.00, NULL, NULL),
(9, 6, 7, 1, 45.00, NULL, NULL),
(10, 6, 8, 1, 45.00, NULL, NULL),
(11, 6, 9, 1, 45.00, NULL, NULL),
(12, 6, 10, 1, 45.00, NULL, NULL),
(13, 6, 11, 1, 45.00, NULL, NULL),
(14, 6, 12, 1, 45.00, NULL, NULL),
(15, 6, 13, 1, 45.00, NULL, NULL),
(16, 6, 14, 1, 45.00, NULL, NULL),
(17, 6, 15, 1, 45.00, NULL, NULL),
(18, 6, 16, 1, 45.00, NULL, NULL),
(19, 6, 17, 1, 45.00, NULL, NULL),
(20, 6, 18, 1, 45.00, NULL, NULL),
(21, 6, 19, 1, 45.00, NULL, NULL),
(22, 6, 20, 1, 45.00, NULL, NULL),
(23, 6, 21, 1, 45.00, NULL, NULL),
(24, 7, 22, 1, 50.00, NULL, NULL),
(25, 7, 23, 1, 50.00, NULL, NULL),
(26, 7, 24, 1, 50.00, NULL, NULL),
(27, 7, 25, 1, 50.00, NULL, NULL),
(28, 7, 26, 1, 50.00, NULL, NULL),
(29, 7, 27, 1, 50.00, NULL, NULL),
(30, 7, 28, 1, 50.00, NULL, NULL),
(31, 7, 29, 1, 50.00, NULL, NULL),
(32, 7, 30, 1, 50.00, NULL, NULL),
(33, 7, 31, 1, 50.00, NULL, NULL),
(34, 7, 32, 1, 50.00, NULL, NULL),
(35, 7, 33, 1, 50.00, NULL, NULL),
(36, 7, 34, 1, 50.00, NULL, NULL),
(37, 7, 35, 1, 50.00, NULL, NULL),
(38, 7, 36, 1, 50.00, NULL, NULL),
(39, 7, 37, 1, 50.00, NULL, NULL),
(40, 7, 38, 2, 100.00, NULL, NULL),
(41, 5, 38, 1, 34.00, NULL, NULL),
(42, 7, 39, 2, 100.00, NULL, NULL),
(43, 5, 39, 1, 34.00, NULL, NULL),
(44, 7, 40, 2, 100.00, NULL, NULL),
(45, 5, 40, 1, 34.00, NULL, NULL),
(46, 7, 41, 2, 100.00, NULL, NULL),
(47, 5, 41, 1, 34.00, NULL, NULL),
(48, 7, 42, 2, 100.00, NULL, NULL),
(49, 5, 42, 1, 34.00, NULL, NULL),
(50, 7, 43, 2, 100.00, NULL, NULL),
(51, 5, 43, 1, 34.00, NULL, NULL),
(52, 7, 44, 2, 100.00, NULL, NULL),
(53, 5, 44, 1, 34.00, NULL, NULL),
(54, 7, 45, 2, 100.00, NULL, NULL),
(55, 5, 45, 1, 34.00, NULL, NULL),
(56, 7, 46, 2, 100.00, NULL, NULL),
(57, 5, 46, 1, 34.00, NULL, NULL),
(58, 7, 47, 2, 100.00, NULL, NULL),
(59, 5, 47, 1, 34.00, NULL, NULL),
(60, 7, 48, 2, 100.00, NULL, NULL),
(61, 5, 48, 1, 34.00, NULL, NULL),
(62, 5, 49, 2, 68.00, NULL, NULL),
(63, 6, 49, 1, 45.00, NULL, NULL),
(64, 5, 50, 2, 68.00, NULL, NULL),
(65, 6, 50, 1, 45.00, NULL, NULL),
(66, 5, 51, 2, 68.00, NULL, NULL),
(67, 6, 51, 1, 45.00, NULL, NULL),
(68, 5, 52, 1, 34.00, NULL, NULL),
(69, 5, 53, 2, 68.00, NULL, NULL),
(70, 6, 53, 1, 45.00, NULL, NULL),
(71, 5, 54, 1, 34.00, NULL, NULL),
(72, 5, 55, 1, 34.00, NULL, NULL),
(73, 5, 56, 1, 34.00, NULL, NULL),
(74, 5, 57, 1, 34.00, NULL, NULL),
(75, 5, 58, 1, 34.00, NULL, NULL),
(76, 5, 59, 1, 34.00, NULL, NULL),
(77, 5, 60, 1, 34.00, NULL, NULL),
(78, 5, 61, 1, 34.00, NULL, NULL),
(79, 5, 62, 1, 34.00, NULL, NULL),
(80, 5, 63, 1, 34.00, NULL, NULL),
(81, 5, 64, 1, 34.00, NULL, NULL),
(82, 6, 65, 1, 45.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `delivered` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `delivered`, `created_at`, `updated_at`) VALUES
(28, 1, 61, 0, '2017-02-09 09:42:44', '2017-02-09 09:42:44'),
(29, 1, 61, 0, '2017-02-09 09:43:51', '2017-02-09 09:43:51'),
(30, 1, 61, 0, '2017-02-09 09:46:15', '2017-02-09 09:46:15'),
(31, 1, 61, 0, '2017-02-09 09:53:52', '2017-02-09 09:53:52'),
(32, 1, 61, 0, '2017-02-09 09:55:54', '2017-02-09 09:55:54'),
(33, 1, 61, 0, '2017-02-09 09:59:15', '2017-02-09 09:59:15'),
(34, 1, 61, 0, '2017-02-09 10:00:27', '2017-02-09 10:00:27'),
(35, 1, 61, 0, '2017-02-09 10:12:29', '2017-02-09 10:12:29'),
(36, 1, 61, 0, '2017-02-09 10:13:54', '2017-02-09 10:13:54'),
(37, 1, 61, 0, '2017-02-09 10:15:10', '2017-02-09 10:15:10'),
(38, 1, 162, 0, '2017-02-09 10:20:07', '2017-02-09 10:20:07'),
(39, 1, 162, 0, '2017-02-09 10:27:43', '2017-02-09 10:27:43'),
(40, 1, 162, 0, '2017-02-09 10:28:29', '2017-02-09 10:28:29'),
(41, 1, 162, 0, '2017-02-09 10:28:51', '2017-02-09 10:28:51'),
(42, 1, 162, 0, '2017-02-09 10:33:28', '2017-02-09 10:33:28'),
(43, 1, 162, 0, '2017-02-09 10:39:28', '2017-02-09 10:39:28'),
(44, 1, 162, 0, '2017-02-09 10:40:33', '2017-02-09 10:40:33'),
(45, 1, 162, 0, '2017-02-09 10:43:49', '2017-02-09 10:43:49'),
(46, 1, 162, 0, '2017-02-09 10:45:21', '2017-02-09 10:45:21'),
(47, 1, 162, 0, '2017-02-09 10:49:58', '2017-02-09 10:49:58'),
(48, 1, 162, 0, '2017-02-09 10:50:50', '2017-02-09 10:50:50'),
(49, 1, 137, 0, '2017-02-09 22:03:52', '2017-02-09 22:03:52'),
(50, 1, 137, 0, '2017-02-09 22:10:07', '2017-02-09 22:10:07'),
(51, 1, 137, 0, '2017-02-09 22:10:49', '2017-02-09 22:10:49'),
(52, 1, 41, 0, '2017-02-09 22:17:25', '2017-02-09 22:17:25'),
(53, 1, 137, 0, '2017-02-09 22:29:27', '2017-02-09 22:29:27'),
(54, 1, 41, 0, '2017-02-13 14:14:29', '2017-02-13 14:14:29'),
(55, 1, 41, 0, '2017-02-13 14:16:57', '2017-02-13 14:16:57'),
(56, 1, 41, 0, '2017-02-13 14:19:00', '2017-02-13 14:19:00'),
(57, 1, 41, 0, '2017-02-13 14:30:48', '2017-02-13 14:30:48'),
(58, 1, 41, 0, '2017-02-13 14:35:53', '2017-02-13 14:35:53'),
(59, 1, 41, 0, '2017-02-13 14:36:15', '2017-02-13 14:36:15'),
(60, 1, 41, 0, '2017-02-13 14:37:20', '2017-02-13 14:37:20'),
(61, 1, 41, 0, '2017-02-13 14:37:40', '2017-02-13 14:37:40'),
(62, 1, 41, 0, '2017-02-13 14:38:42', '2017-02-13 14:38:42'),
(63, 1, 41, 0, '2017-02-13 14:39:56', '2017-02-13 14:39:56'),
(64, 1, 41, 0, '2017-02-13 14:47:09', '2017-02-13 14:47:09'),
(65, 1, 54, 0, '2017-02-13 21:21:07', '2017-02-13 21:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `size`, `price`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Chinese menu', 'sumptious', 'small', '34', 'chinese-menu.jpg', 2, '2017-02-06 09:25:32', '2017-02-06 09:25:32'),
(6, 'sushi', 'tyao', 'small', '45', 'thai-menu.jpg', 3, '2017-02-06 09:26:07', '2017-02-06 09:26:07'),
(7, 'tiffins', 'gyao', 'small', '50', 'veggies-menu.jpg', 3, '2017-02-06 09:26:44', '2017-02-06 09:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `address`, `city`, `state`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jane', 'jane@mail.com', '$2y$10$7z8nbP6K0ELilsBRZ7gnHOAqDX8Tgj19Zc0O/EQUUWFI.RSqPORdG', 1, '', '', '', '0', 'wKLPRM7IeCWBpAcmznAFOqyqeGMaBU5AsKDZ7XOiszejAtDTBBmTlpWeY5iq', '2017-02-03 01:40:57', '2017-02-09 22:15:54'),
(2, 'john', 'john@mail.com', '$2y$10$sYVoE.6TWDuE7erx3DFHAOVDbdkLSRRdpaUIfcNK.TgHn7a9LNPh2', NULL, '', '', '', '0', NULL, '2017-02-05 16:20:43', '2017-02-05 16:20:43'),
(3, 'rahman Alade', 'rahman@gmail.com', '$2y$10$ASKmt059fB3Vh2ee865tE.RXDdgVTlkklgoFk8BlmtM/vWks5vv9W', NULL, '43 gsdfd', 'csf', 'sdr', '080773', 'fybroWMOFd4lR2jXsYsDW8XQvlF7a7u2bT6cWVWUx30I7CSc3MHMQqu2Dqzq', '2017-02-09 12:05:28', '2017-02-09 12:31:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
