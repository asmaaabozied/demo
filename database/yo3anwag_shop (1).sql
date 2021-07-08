-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2021 at 10:16 AM
-- Server version: 5.7.33
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yo3anwag_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `governorate_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_price` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `governorate_id`, `shipping_price`, `created_at`, `updated_at`) VALUES
(1, 1, 2.000, '2021-02-21 04:16:54', '2021-02-21 04:16:54'),
(2, 3, 2.000, '2021-02-23 07:55:04', '2021-02-23 07:55:04'),
(3, 3, 2.000, '2021-02-23 07:55:25', '2021-02-23 07:55:25'),
(4, 3, 2.000, '2021-02-23 07:56:03', '2021-02-23 07:56:03'),
(5, 3, 2.000, '2021-02-23 07:56:31', '2021-02-23 07:56:31'),
(6, 3, 2.000, '2021-02-23 07:57:11', '2021-02-23 07:57:11'),
(7, 3, 2.000, '2021-02-23 07:58:08', '2021-02-23 07:58:08'),
(8, 3, 2.000, '2021-02-23 07:58:55', '2021-02-23 07:58:55'),
(9, 3, 2.000, '2021-02-23 07:59:39', '2021-02-23 07:59:39'),
(10, 3, 2.000, '2021-02-23 08:00:17', '2021-02-23 08:00:17'),
(11, 3, 2.000, '2021-02-23 08:01:05', '2021-02-23 08:01:05'),
(12, 3, 2.000, '2021-02-23 08:01:59', '2021-02-23 08:01:59'),
(13, 3, 2.000, '2021-02-23 08:03:45', '2021-02-23 08:03:45'),
(14, 3, 2.000, '2021-02-23 08:04:39', '2021-02-23 08:04:39'),
(15, 3, 2.000, '2021-02-23 08:05:31', '2021-02-23 08:05:31'),
(16, 3, 2.000, '2021-02-23 08:06:13', '2021-02-23 08:06:13'),
(17, 4, 2.000, '2021-02-23 08:13:48', '2021-02-23 08:13:48'),
(18, 4, 2.000, '2021-02-23 08:14:34', '2021-02-23 08:14:34'),
(19, 4, 2.000, '2021-02-23 08:15:28', '2021-02-23 08:15:28'),
(20, 4, 2.000, '2021-02-23 08:16:11', '2021-02-23 08:16:11'),
(21, 4, 2.000, '2021-02-23 08:17:11', '2021-02-23 08:17:11'),
(22, 4, 2.000, '2021-02-23 08:17:52', '2021-02-23 08:17:52'),
(23, 4, 2.000, '2021-02-23 08:18:40', '2021-02-23 08:18:40'),
(24, 4, 2.000, '2021-02-23 08:19:29', '2021-02-23 08:19:29'),
(25, 4, 2.000, '2021-02-23 08:22:22', '2021-02-23 08:22:22'),
(26, 4, 2.000, '2021-02-23 08:23:38', '2021-02-23 08:23:38'),
(27, 4, 2.000, '2021-02-23 08:24:30', '2021-02-23 08:24:30'),
(28, 4, 2.000, '2021-02-23 08:25:20', '2021-02-23 08:25:20'),
(29, 4, 2.000, '2021-02-23 08:26:02', '2021-02-23 08:26:02'),
(30, 4, 2.000, '2021-02-23 08:26:42', '2021-02-23 08:26:42'),
(31, 4, 2.000, '2021-02-23 08:27:29', '2021-02-23 08:27:29'),
(32, 4, 2.000, '2021-02-23 08:28:23', '2021-02-23 08:28:23'),
(33, 4, 2.000, '2021-02-23 08:29:15', '2021-02-23 08:29:15'),
(34, 4, 2.000, '2021-02-23 08:29:56', '2021-02-23 08:29:56'),
(35, 4, 2.000, '2021-02-23 08:31:09', '2021-02-23 08:31:09'),
(36, 4, 2.000, '2021-02-23 08:31:53', '2021-02-23 08:31:53'),
(37, 4, 2.000, '2021-02-23 08:32:38', '2021-02-23 08:32:38'),
(38, 4, 2.000, '2021-02-23 08:33:21', '2021-02-23 08:33:21'),
(39, 4, 2.000, '2021-02-23 08:34:12', '2021-02-23 08:34:12'),
(40, 4, 2.000, '2021-02-23 08:35:09', '2021-02-23 08:35:09'),
(41, 4, 2.000, '2021-02-23 08:35:55', '2021-02-23 08:35:55'),
(42, 4, 2.000, '2021-02-23 08:36:36', '2021-02-23 08:36:36'),
(43, 4, 2.000, '2021-02-23 08:37:35', '2021-02-23 08:37:35'),
(44, 4, 2.000, '2021-02-23 08:38:41', '2021-02-23 08:38:41'),
(45, 4, 2.000, '2021-02-23 08:41:17', '2021-02-23 08:41:17'),
(46, 4, 2.000, '2021-02-23 08:45:35', '2021-02-23 08:45:35'),
(47, 4, 2.000, '2021-02-23 08:46:34', '2021-02-23 08:46:34'),
(48, 5, 2.000, '2021-02-23 08:49:19', '2021-02-23 08:49:19'),
(49, 5, 2.000, '2021-02-23 08:50:10', '2021-02-23 08:50:10'),
(50, 5, 2.000, '2021-02-23 08:51:10', '2021-02-23 08:55:37'),
(51, 5, 2.000, '2021-02-23 08:51:57', '2021-02-23 08:55:49'),
(52, 5, 2.000, '2021-02-23 08:52:43', '2021-02-23 08:54:50'),
(53, 5, 2.000, '2021-02-23 08:53:31', '2021-02-23 08:53:31'),
(54, 5, 2.000, '2021-02-23 08:54:09', '2021-02-23 08:54:09'),
(55, 5, 2.000, '2021-02-23 08:55:24', '2021-02-23 08:55:24'),
(56, 5, 2.000, '2021-02-23 08:56:47', '2021-02-23 08:56:47'),
(57, 5, 2.000, '2021-02-23 08:57:14', '2021-02-23 08:57:14'),
(58, 5, 2.000, '2021-02-23 08:57:54', '2021-02-23 08:57:54'),
(59, 1, 2.000, '2021-02-23 08:59:43', '2021-02-23 08:59:43'),
(60, 1, 2.000, '2021-02-23 09:00:27', '2021-02-23 09:00:27'),
(61, 1, 2.000, '2021-02-23 09:01:07', '2021-02-23 09:01:07'),
(62, 1, 2.000, '2021-02-23 09:01:38', '2021-02-23 09:01:38'),
(63, 1, 2.000, '2021-02-23 09:02:31', '2021-02-23 09:02:31'),
(64, 1, 2.000, '2021-02-23 09:03:06', '2021-02-23 09:03:06'),
(65, 1, 2.000, '2021-02-23 09:03:42', '2021-02-23 09:03:42'),
(66, 1, 2.000, '2021-02-23 09:04:15', '2021-02-23 09:04:15'),
(67, 1, 2.000, '2021-02-23 09:04:39', '2021-02-23 09:04:39'),
(68, 1, 2.000, '2021-02-23 09:05:27', '2021-02-23 09:05:27'),
(69, 1, 2.000, '2021-02-23 09:06:20', '2021-02-23 09:06:20'),
(70, 1, 2.000, '2021-02-23 09:06:59', '2021-02-23 09:06:59'),
(71, 1, 2.000, '2021-02-23 09:07:36', '2021-02-23 09:07:36'),
(72, 1, 2.000, '2021-02-23 09:08:13', '2021-02-23 09:08:13'),
(73, 1, 2.000, '2021-02-23 09:08:46', '2021-02-23 09:08:46'),
(74, 1, 2.000, '2021-02-23 09:09:26', '2021-02-23 09:09:26'),
(75, 1, 2.000, '2021-02-23 09:09:59', '2021-02-23 09:09:59'),
(76, 1, 2.000, '2021-02-23 09:10:29', '2021-02-23 09:10:29'),
(77, 6, 2.000, '2021-02-23 12:00:54', '2021-02-23 12:00:54'),
(78, 6, 2.000, '2021-02-23 12:01:35', '2021-02-23 12:01:35'),
(79, 6, 2.000, '2021-02-23 12:02:10', '2021-02-23 12:02:10'),
(80, 6, 2.000, '2021-02-23 12:02:34', '2021-02-23 12:02:34'),
(81, 6, 2.000, '2021-02-23 12:03:08', '2021-02-23 12:03:08'),
(82, 6, 2.000, '2021-02-23 12:03:35', '2021-02-23 12:03:35'),
(83, 6, 2.000, '2021-02-23 12:04:12', '2021-02-23 12:04:12'),
(84, 6, 2.000, '2021-02-23 12:04:43', '2021-02-23 12:04:43'),
(85, 6, 2.000, '2021-02-23 12:05:17', '2021-02-23 12:05:17'),
(86, 6, 2.000, '2021-02-23 12:06:33', '2021-02-23 12:06:33'),
(87, 6, 2.000, '2021-02-23 12:06:55', '2021-02-23 12:06:55'),
(88, 6, 2.000, '2021-02-23 12:07:56', '2021-02-23 12:07:56'),
(89, 6, 2.000, '2021-02-23 12:12:49', '2021-02-23 12:12:49'),
(90, 6, 2.000, '2021-02-23 12:13:22', '2021-02-23 12:13:22'),
(91, 6, 2.000, '2021-02-23 12:13:53', '2021-02-23 12:13:53'),
(92, 6, 2.000, '2021-02-23 12:14:14', '2021-02-23 12:14:14'),
(93, 6, 2.000, '2021-02-23 12:14:40', '2021-03-01 08:35:16'),
(94, 2, 2.000, '2021-03-01 07:55:25', '2021-03-01 07:55:25'),
(95, 2, 2.000, '2021-03-01 07:56:22', '2021-03-01 07:56:22'),
(96, 2, 2.000, '2021-03-01 07:57:03', '2021-03-01 07:57:03'),
(97, 2, 2.000, '2021-03-01 07:58:57', '2021-03-01 07:58:57'),
(98, 2, 2.000, '2021-03-01 08:00:24', '2021-03-01 08:00:24'),
(99, 2, 2.000, '2021-03-01 08:03:07', '2021-03-01 08:03:07'),
(100, 2, 2.000, '2021-03-01 08:04:05', '2021-03-01 08:04:05'),
(101, 2, 2.000, '2021-03-01 08:05:11', '2021-03-01 08:05:11'),
(102, 2, 2.000, '2021-03-01 08:06:09', '2021-03-01 08:06:09'),
(103, 2, 2.000, '2021-03-01 08:07:18', '2021-03-01 08:07:18'),
(104, 2, 2.000, '2021-03-01 08:09:09', '2021-03-01 08:09:09'),
(105, 2, 2.000, '2021-03-01 08:11:11', '2021-03-01 08:11:11'),
(106, 2, 2.000, '2021-03-01 08:11:58', '2021-03-01 08:11:58'),
(107, 2, 2.000, '2021-03-01 08:13:06', '2021-03-01 08:13:06'),
(108, 2, 2.000, '2021-03-01 08:14:04', '2021-03-01 08:14:04'),
(109, 2, 2.000, '2021-03-01 08:15:21', '2021-03-01 08:15:21'),
(110, 2, 2.000, '2021-03-01 08:16:17', '2021-03-01 08:16:17'),
(111, 2, 2.000, '2021-03-01 08:17:01', '2021-03-01 08:17:01'),
(112, 2, 2.000, '2021-03-01 08:17:49', '2021-03-01 08:17:49'),
(113, 2, 2.000, '2021-03-01 08:18:32', '2021-03-01 08:18:32'),
(114, 6, 2.000, '2021-03-01 08:39:48', '2021-03-01 08:39:48'),
(115, 6, 2.000, '2021-03-01 08:41:43', '2021-03-01 08:41:43'),
(116, 6, 2.000, '2021-03-01 08:42:18', '2021-03-01 08:42:18'),
(117, 6, 2.000, '2021-03-01 08:42:49', '2021-03-01 08:42:49'),
(118, 6, 2.000, '2021-03-01 08:43:23', '2021-03-01 08:43:23'),
(119, 6, 2.000, '2021-03-01 08:44:20', '2021-03-01 08:44:20'),
(120, 6, 2.000, '2021-03-01 08:44:57', '2021-03-01 08:44:57'),
(121, 6, 2.000, '2021-03-01 08:45:43', '2021-03-01 08:45:43'),
(122, 6, 2.000, '2021-03-01 08:46:24', '2021-03-01 08:46:24'),
(123, 6, 2.000, '2021-03-01 08:46:50', '2021-03-01 08:46:50'),
(124, 6, 2.000, '2021-03-01 08:47:25', '2021-03-01 08:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `area_translations`
--

CREATE TABLE `area_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_translations`
--

INSERT INTO `area_translations` (`id`, `area_id`, `name`, `locale`) VALUES
(1, 1, 'الاندلس', 'ar'),
(2, 1, 'al andalas', 'en'),
(3, 2, 'السالمية', 'ar'),
(4, 2, 'Salmiya', 'en'),
(5, 3, 'حولي', 'ar'),
(6, 3, 'hawally', 'en'),
(7, 4, 'سلوى', 'ar'),
(8, 4, 'salwaa', 'en'),
(9, 5, 'الجابرية', 'ar'),
(10, 5, 'Jabriya', 'en'),
(11, 6, 'الرميثية', 'ar'),
(12, 6, 'Rumaithiya', 'en'),
(13, 7, 'بيان', 'ar'),
(14, 7, 'bayan', 'en'),
(15, 8, 'مشرف', 'ar'),
(16, 8, 'musharaf', 'en'),
(17, 9, 'الشعب', 'ar'),
(18, 9, 'alshaeb', 'en'),
(19, 10, 'السلام', 'ar'),
(20, 10, 'alsalam', 'en'),
(21, 11, 'حطين', 'ar'),
(22, 11, 'hatayn', 'en'),
(23, 12, 'الزهراء', 'ar'),
(24, 12, 'alzuhara', 'en'),
(25, 13, 'ضاحية مبارك العبد الله الجابر', 'ar'),
(26, 13, 'dahiat mubarak aleabd allah aljabir', 'en'),
(27, 14, 'الشهداء', 'ar'),
(28, 14, 'alshuhada', 'en'),
(29, 15, 'البدع', 'ar'),
(30, 15, 'albadae', 'en'),
(31, 16, 'الصديق', 'ar'),
(32, 16, 'alsadiq', 'en'),
(33, 17, 'العاصمه', 'ar'),
(34, 17, 'kuwait', 'en'),
(35, 18, 'دسمان', 'ar'),
(36, 18, 'dasman', 'en'),
(37, 19, 'الشرق', 'ar'),
(38, 19, 'alshrq', 'en'),
(39, 20, 'الصوابر', 'ar'),
(40, 20, 'alsawabir', 'en'),
(41, 21, 'المرقاب', 'ar'),
(42, 21, 'almaraqaab', 'en'),
(43, 22, 'القبلة', 'ar'),
(44, 22, 'alqibla', 'en'),
(45, 23, 'الصالحية', 'ar'),
(46, 23, 'alsalihia', 'en'),
(47, 24, 'الوطية', 'ar'),
(48, 24, 'alwatia', 'en'),
(49, 25, 'بنيد القار', 'ar'),
(50, 25, 'binid alqari', 'en'),
(51, 26, 'الدسمة', 'ar'),
(52, 26, 'aldasama', 'en'),
(53, 27, 'الدعية', 'ar'),
(54, 27, 'aldaeia', 'en'),
(55, 28, 'المنصورية', 'ar'),
(56, 28, 'almansuria', 'en'),
(57, 29, 'ضاحية عبد الله السالم', 'ar'),
(58, 29, 'Abdullah Al-Salem suburb', 'en'),
(59, 30, 'النزهة', 'ar'),
(60, 30, 'alnuzha', 'en'),
(61, 31, 'الفيحاء', 'ar'),
(62, 31, 'alfiha', 'en'),
(63, 32, 'الشامية والروضة', 'ar'),
(64, 32, 'alshshamiat walruwda', 'en'),
(65, 33, 'العديلية', 'ar'),
(66, 33, 'aleadilia', 'en'),
(67, 34, 'الخالدية', 'ar'),
(68, 34, 'alkhalidia', 'en'),
(69, 35, 'كيفان', 'ar'),
(70, 35, 'kayfan', 'en'),
(71, 36, 'القادسية', 'ar'),
(72, 36, 'alqadisia', 'en'),
(73, 37, 'قرطبة', 'ar'),
(74, 37, 'qartaba', 'en'),
(75, 38, 'السرة', 'ar'),
(76, 38, 'alsira', 'en'),
(77, 39, 'اليرموك', 'ar'),
(78, 39, 'alyarmuk', 'en'),
(79, 40, 'الشويخ', 'ar'),
(80, 40, 'alshawaykh', 'en'),
(81, 41, 'الري', 'ar'),
(82, 41, 'alry', 'en'),
(83, 42, 'غرناطة', 'ar'),
(84, 42, 'gharnata', 'en'),
(85, 43, 'الصليبيخات والدوحة', 'ar'),
(86, 43, 'alslybykhat waldawha', 'en'),
(87, 44, 'الدوحه', 'ar'),
(88, 44, 'alnahda', 'en'),
(89, 45, 'جابر الاحمد', 'ar'),
(90, 45, 'jabir al\'ahmad', 'en'),
(91, 46, 'النهضه', 'ar'),
(92, 46, 'alnahda', 'en'),
(93, 47, 'القيروان', 'ar'),
(94, 47, 'alqirwan', 'en'),
(95, 48, 'ضاحية صباح السالم.', 'ar'),
(96, 48, 'dahiat sabah alsaalim.', 'en'),
(97, 49, 'ضاحية مبارك الكبير.', 'ar'),
(98, 49, 'dahiat mubarak alkabiru.', 'en'),
(99, 50, 'المسيلة', 'ar'),
(100, 50, 'Messila area', 'en'),
(101, 51, 'المسايل', 'ar'),
(102, 51, 'mintaqat almasayl', 'en'),
(103, 52, 'العدان', 'ar'),
(104, 52, 'adan', 'en'),
(105, 53, 'ضاحية القصور', 'ar'),
(106, 53, 'dahiat alqusur', 'en'),
(107, 54, 'القرين', 'ar'),
(108, 54, 'alqarin', 'en'),
(109, 55, 'أبو الحصاني', 'ar'),
(110, 55, 'aboalhasany', 'en'),
(111, 56, 'أبو فطيرة', 'ar'),
(112, 56, '\'abu fatira', 'en'),
(113, 57, 'صبحان', 'ar'),
(114, 57, 'sabhaan', 'en'),
(115, 58, 'الفنيطيس', 'ar'),
(116, 58, 'alfnytys', 'en'),
(117, 59, 'أبرق خيطان', 'ar'),
(118, 59, '\'abraq khaytan', 'en'),
(119, 60, 'اشبيلية', 'ar'),
(120, 60, 'iishbilia', 'en'),
(121, 61, 'جليب الشيوخ', 'ar'),
(122, 61, 'jlyb alshuyukh', 'en'),
(123, 62, 'الضجيج', 'ar'),
(124, 62, 'aldajij', 'en'),
(125, 63, 'ضاحية عبد الله المبارك', 'ar'),
(126, 63, 'dahiat eabd allah almubarak', 'en'),
(127, 64, 'ضاحية صباح الناصر', 'ar'),
(128, 64, 'dahiat sabah alnnasir', 'en'),
(129, 65, 'الري الصناعية', 'ar'),
(130, 65, 'alry alsinaeia', 'en'),
(131, 66, 'الرقعي', 'ar'),
(132, 66, 'alraqei', 'en'),
(133, 67, 'الرحاب', 'ar'),
(134, 67, 'alrehaab', 'en'),
(135, 68, 'الرابيه', 'ar'),
(136, 68, 'alraabia', 'en'),
(137, 69, 'الشداديه', 'ar'),
(138, 69, 'alshadadia', 'en'),
(139, 70, 'الفروانيه', 'ar'),
(140, 70, 'alfirwania', 'en'),
(141, 71, 'غرب عبد الله المبارك', 'ar'),
(142, 71, 'gharb eabd allah almubarak', 'en'),
(143, 72, 'الفردوس', 'ar'),
(144, 72, 'alfirdaws', 'en'),
(145, 73, 'العارضية الصناعية', 'ar'),
(146, 73, 'alearidiat alsinaeia', 'en'),
(147, 74, 'العارضية', 'ar'),
(148, 74, 'Ardiya', 'en'),
(149, 75, 'العمريه', 'ar'),
(150, 75, 'aleimria', 'en'),
(151, 76, 'خيطان', 'ar'),
(152, 76, 'khaytan', 'en'),
(153, 77, 'الظهر', 'ar'),
(154, 77, 'alzuhr', 'en'),
(155, 78, 'الرقه', 'ar'),
(156, 78, 'alraquh', 'en'),
(157, 79, 'هديه', 'ar'),
(158, 79, 'hadia', 'en'),
(159, 80, 'المنقف', 'ar'),
(160, 80, 'almunaqaf', 'en'),
(161, 81, 'ابوحليفه', 'ar'),
(162, 81, '\'abu halifa', 'en'),
(163, 82, 'الفنطاس', 'ar'),
(164, 82, 'alfintas', 'en'),
(165, 83, 'العقيله', 'ar'),
(166, 83, 'aleaqila', 'en'),
(167, 84, 'الصباحيه', 'ar'),
(168, 84, 'alsabahia', 'en'),
(169, 85, 'الاحمدي', 'ar'),
(170, 85, 'al\'ahmadi', 'en'),
(171, 86, 'الفحاحيل', 'ar'),
(172, 86, 'alfhyhil', 'en'),
(173, 87, 'شرق الاحمدي', 'ar'),
(174, 87, 'shrq al\'ahmadii', 'en'),
(175, 88, 'ضاحيه صباح السالم', 'ar'),
(176, 88, 'dahiat eali sabah alssalim', 'en'),
(177, 89, 'ميناء عبد الله', 'ar'),
(178, 89, 'mina\' abd allah', 'en'),
(179, 90, 'الشعيبه', 'ar'),
(180, 90, 'alshaeiba', 'en'),
(181, 91, 'بنيدر', 'ar'),
(182, 91, 'bnydr', 'en'),
(183, 92, 'الزور', 'ar'),
(184, 92, 'alzuwr', 'en'),
(185, 93, 'الجليعه', 'ar'),
(186, 93, 'aljaliea', 'en'),
(187, 94, 'الصليبية', 'ar'),
(188, 94, 'alsalibia', 'en'),
(189, 95, 'أمغرة', 'ar'),
(190, 95, 'amghara', 'en'),
(191, 96, 'النعيم', 'ar'),
(192, 96, 'alnaeim', 'en'),
(193, 97, 'القصر', 'ar'),
(194, 97, 'alqasr', 'en'),
(195, 98, 'الواحة', 'ar'),
(196, 98, 'alwaha', 'en'),
(197, 99, 'تيماء', 'ar'),
(198, 99, 'tima', 'en'),
(199, 100, 'النسيم', 'ar'),
(200, 100, 'alnasim', 'en'),
(201, 101, 'العيون', 'ar'),
(202, 101, 'aleuyun', 'en'),
(203, 102, 'القيصرية', 'ar'),
(204, 102, 'alqaysaria', 'en'),
(205, 103, 'العبدلي', 'ar'),
(206, 103, 'aleabdaliu', 'en'),
(207, 104, 'الجهراء القديمة', 'ar'),
(208, 104, 'aljuhara\' alqadima', 'en'),
(209, 105, 'الجهراء الجديدة', 'ar'),
(210, 105, 'aljuhara\' aljadida', 'en'),
(211, 106, 'كاظمة', 'ar'),
(212, 106, 'kazm', 'en'),
(213, 107, 'سعد العبد الله', 'ar'),
(214, 107, 'saed aleabd allah', 'en'),
(215, 108, 'السالمي', 'ar'),
(216, 108, 'alsalimiu', 'en'),
(217, 109, 'المطلاع', 'ar'),
(218, 109, 'almitalae', 'en'),
(219, 110, 'الحرير', 'ar'),
(220, 110, 'alharir', 'en'),
(221, 111, 'كبد', 'ar'),
(222, 111, 'kabad', 'en'),
(223, 112, 'الروضتين', 'ar'),
(224, 112, 'alrawdatayn', 'en'),
(225, 113, 'الصبية', 'ar'),
(226, 113, 'alsibiya', 'en'),
(227, 114, 'الفحيحيل', 'ar'),
(228, 114, 'alfhyhil', 'en'),
(229, 115, 'المهبولة', 'ar'),
(230, 115, 'almahbula', 'en'),
(231, 116, 'النويصيب', 'ar'),
(232, 116, 'alnuwysib', 'en'),
(233, 117, 'الخيران', 'ar'),
(234, 117, 'alkhayran', 'en'),
(235, 118, 'الوفره', 'ar'),
(236, 118, 'alwafra', 'en'),
(237, 119, 'ضاحية فهد الأحمد', 'ar'),
(238, 119, 'dahiat fahd al\'ahmad', 'en'),
(239, 120, 'ضاحيه جابر العلي', 'ar'),
(240, 120, 'dahiat jabir aleali', 'en'),
(241, 121, 'صباح الأحمد السكنيه', 'ar'),
(242, 121, 'subah al\'ahmad alsiknayh', 'en'),
(243, 122, 'المقوع', 'ar'),
(244, 122, 'almaquae', 'en'),
(245, 123, 'ميناء الاحمدي', 'ar'),
(246, 123, 'mina\' al\'ahmadii', 'en'),
(247, 124, 'صوله', 'ar'),
(248, 124, 'sulah', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `created_at`, `updated_at`) VALUES
(6, '2020-12-02 16:24:43', '2020-12-02 16:24:43'),
(8, '2020-12-02 17:30:06', '2020-12-02 17:30:06'),
(9, '2020-12-02 17:38:49', '2020-12-02 17:38:49'),
(10, '2020-12-02 18:16:12', '2020-12-02 18:16:12'),
(11, '2020-12-03 09:53:32', '2020-12-03 09:53:32'),
(12, '2020-12-03 11:15:17', '2020-12-03 11:15:17'),
(14, '2020-12-03 19:07:05', '2020-12-03 19:07:05'),
(15, '2020-12-04 20:04:10', '2020-12-04 20:04:10'),
(16, '2020-12-04 20:33:54', '2020-12-04 20:33:54'),
(17, '2020-12-04 20:47:41', '2020-12-04 20:47:41'),
(18, '2020-12-04 20:51:33', '2020-12-04 20:51:33'),
(19, '2020-12-04 21:05:01', '2020-12-04 21:05:01'),
(20, '2020-12-05 03:33:32', '2020-12-05 03:33:32'),
(21, '2020-12-05 03:37:04', '2020-12-05 03:37:04'),
(22, '2020-12-05 03:56:30', '2020-12-05 03:56:30'),
(23, '2020-12-05 04:18:05', '2020-12-05 04:18:05'),
(24, '2020-12-05 04:26:29', '2020-12-05 04:26:29'),
(25, '2020-12-05 04:30:05', '2020-12-05 04:30:05'),
(26, '2020-12-05 04:50:40', '2020-12-05 04:50:40'),
(27, '2020-12-05 16:34:55', '2020-12-05 16:34:55'),
(28, '2020-12-05 16:55:45', '2020-12-05 16:55:45'),
(29, '2020-12-05 16:58:53', '2020-12-05 16:58:53'),
(30, '2020-12-05 17:13:29', '2020-12-05 17:13:29'),
(31, '2020-12-05 17:16:54', '2020-12-05 17:16:54'),
(32, '2020-12-05 17:43:38', '2020-12-05 17:43:38'),
(33, '2020-12-05 18:20:57', '2020-12-05 18:20:57'),
(34, '2020-12-05 21:27:47', '2020-12-05 21:27:47'),
(35, '2020-12-05 22:25:29', '2020-12-05 22:25:29'),
(36, '2020-12-05 23:27:16', '2020-12-05 23:27:16'),
(37, '2020-12-13 14:44:51', '2020-12-13 14:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `brand_translations`
--

CREATE TABLE `brand_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_translations`
--

INSERT INTO `brand_translations` (`id`, `brand_id`, `name`, `locale`) VALUES
(8, 6, 'طيف الامارات', 'ar'),
(9, 6, 'tif elemarat', 'en'),
(12, 8, 'امل الكويت', 'ar'),
(13, 8, 'Aml ELkuwait', 'en'),
(14, 9, 'دار الخليل', 'ar'),
(15, 9, 'Dar EL Khalil', 'en'),
(16, 10, 'تواق', 'ar'),
(17, 10, 'TWAAQ', 'en'),
(18, 11, 'كنوز الطيب', 'ar'),
(19, 11, 'kunooz alteeb', 'en'),
(20, 12, 'الرصاصي', 'ar'),
(21, 12, 'Rasasi', 'en'),
(24, 14, 'العفاسي', 'ar'),
(25, 14, 'al Afasy', 'en'),
(26, 15, 'كارولينا هيريرا', 'ar'),
(27, 15, 'CAROLINA HERRERA', 'en'),
(28, 16, 'ايجنر', 'ar'),
(29, 16, 'AIGNER', 'en'),
(30, 17, 'باكو رابان', 'ar'),
(31, 17, 'paco rabanne', 'en'),
(32, 18, 'مانسيرا باريس', 'ar'),
(33, 18, 'MANCERA PARIS', 'en'),
(34, 19, 'سانت لوران', 'ar'),
(35, 19, 'Saintlaurent', 'en'),
(36, 20, 'ميمو باريس', 'ar'),
(37, 20, 'MEMO PARIS', 'en'),
(38, 21, 'فيرساتشي', 'ar'),
(39, 21, 'VERSACE', 'en'),
(40, 22, 'روبرتو كافالي', 'ar'),
(41, 22, 'roberto cavalli', 'en'),
(42, 23, 'كارتيير', 'ar'),
(43, 23, 'Cartier', 'en'),
(44, 24, 'جوتشي', 'ar'),
(45, 24, 'GUCCI', 'en'),
(46, 25, 'فيرساتشي', 'ar'),
(47, 25, 'VERSACE', 'en'),
(48, 26, 'بووس', 'ar'),
(49, 26, 'BOSS', 'en'),
(50, 27, 'لانكوم', 'ar'),
(51, 27, 'LANCOME', 'en'),
(52, 28, 'ديور', 'ar'),
(53, 28, 'Dior', 'en'),
(54, 29, 'دنهل', 'ar'),
(55, 29, 'dunhil', 'en'),
(56, 30, 'فيرساتشي', 'ar'),
(57, 30, 'VERSACE', 'en'),
(58, 31, 'دولتشي غابانا', 'ar'),
(59, 31, 'DOLCE & GABBANA', 'en'),
(60, 32, 'مانسيرا باريس', 'ar'),
(61, 32, 'MANCERA PARIS', 'en'),
(62, 33, 'ألكسندر ج', 'ar'),
(63, 33, 'ALEXANDRE.J', 'en'),
(64, 34, 'شانيل', 'ar'),
(65, 34, 'CHANEL', 'en'),
(66, 35, 'كريد', 'ar'),
(67, 35, 'CREED', 'en'),
(68, 36, 'مونت بلانك', 'ar'),
(69, 36, 'MONT BLANK', 'en'),
(70, 37, 'مباخر', 'ar'),
(71, 37, 'Incense burners', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_in_navbar` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `display_in_navbar`, `order`, `parent_id`, `country_id`, `created_at`, `updated_at`) VALUES
(19, 1, NULL, NULL, 4, '2021-03-02 16:50:49', '2021-03-02 16:50:49'),
(20, 1, NULL, NULL, 4, '2021-03-02 16:52:16', '2021-03-02 16:52:16'),
(21, 1, NULL, NULL, 4, '2021-03-02 16:53:43', '2021-03-02 16:53:43'),
(22, 1, NULL, NULL, 4, '2021-03-02 16:55:02', '2021-03-02 16:55:02'),
(23, 1, NULL, NULL, 4, '2021-03-02 16:58:03', '2021-03-02 16:58:03'),
(24, 1, NULL, NULL, 4, '2021-03-02 16:59:27', '2021-03-02 16:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`) VALUES
(651, 28, 19),
(652, 29, 19),
(653, 30, 21),
(654, 31, 21),
(655, 32, 21),
(656, 33, 21),
(657, 34, 21),
(658, 35, 21),
(659, 36, 21),
(660, 37, 20),
(661, 38, 20),
(662, 39, 21),
(663, 40, 22),
(664, 41, 22),
(665, 42, 22),
(666, 43, 22);

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `name`, `description`, `meta_description`, `meta_keywords`, `locale`) VALUES
(37, 19, 'الوجبات', '<p>الوجبات<br></p>', NULL, NULL, 'ar'),
(38, 19, 'meals', '<p>meals<br></p>', NULL, NULL, 'en'),
(39, 20, 'وجبات  الاطفال', '<p>وجبات&nbsp; الاطفال<br></p>', NULL, NULL, 'ar'),
(40, 20, 'kids meal', '<p>kids meal<br></p>', NULL, NULL, 'en'),
(41, 21, 'الساندويشات', '<p>الساندويشات<br></p>', NULL, NULL, 'ar'),
(42, 21, 'sandwiches', '<p>sandwiches<br></p>', NULL, NULL, 'en'),
(43, 22, 'المرطبات', '<p>المرطبات<br></p>', NULL, NULL, 'ar'),
(44, 22, 'Drinks', '<p>drinks<br></p>', NULL, NULL, 'en'),
(45, 23, 'البطاطس', '<p>البطاطس<br></p>', NULL, NULL, 'ar'),
(46, 23, 'Fries', '<p>Fries<br></p>', NULL, NULL, 'en'),
(47, 24, 'الصلصات', '<p>الصلصات<br></p>', NULL, NULL, 'ar'),
(48, 24, 'Sauces', '<p>Sauces<br></p>', NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_price` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `shipping_price`, `created_at`, `updated_at`) VALUES
(28, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(29, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(30, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(31, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(32, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(33, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(34, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(35, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(36, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(37, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(38, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(39, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(40, 2, NULL, '2020-12-01 22:12:56', '2020-12-01 22:12:56'),
(58, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(59, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(60, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(61, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(62, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(63, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(64, 11, NULL, '2020-12-01 22:12:59', '2020-12-01 22:12:59'),
(65, 4, 5.000, '2020-12-13 14:50:57', '2020-12-13 14:50:57'),
(66, 4, 5.000, '2020-12-13 14:51:30', '2020-12-13 14:51:30'),
(67, 4, 10.000, '2021-01-27 09:54:05', '2021-01-27 09:54:05'),
(68, 4, 5.000, '2021-01-27 09:56:10', '2021-01-27 09:56:10'),
(69, 4, 5.000, '2021-01-27 09:57:21', '2021-01-27 09:57:21'),
(70, 4, 5.000, '2021-01-27 09:58:41', '2021-01-27 09:58:41'),
(71, 4, 2.000, '2021-01-27 11:10:31', '2021-01-27 11:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_translations`
--

INSERT INTO `city_translations` (`id`, `city_id`, `name`, `locale`) VALUES
(55, 28, 'الرياض', 'ar'),
(56, 28, 'Ar Riyad', 'en'),
(57, 29, 'عسير', 'ar'),
(58, 29, 'Asir', 'en'),
(59, 30, 'وايل', 'ar'),
(60, 30, 'Hai\'l', 'en'),
(61, 31, 'مكه', 'ar'),
(62, 31, 'Makkah', 'en'),
(63, 32, 'الحدود الشمالية', 'ar'),
(64, 32, 'Northern Borders', 'en'),
(65, 33, 'نجران', 'ar'),
(66, 33, 'Najran', 'en'),
(67, 34, 'جازان', 'ar'),
(68, 34, 'Jizan', 'en'),
(69, 35, 'تبوك', 'ar'),
(70, 35, 'Tabuk', 'en'),
(71, 36, 'الباحة', 'ar'),
(72, 36, 'Al Bahah', 'en'),
(73, 37, 'الجوف', 'ar'),
(74, 37, 'Al Jawf', 'en'),
(75, 38, 'المدينة المنورة', 'ar'),
(76, 38, 'Al Madinah al Munawwarah', 'en'),
(77, 39, 'المنطقة الشرقية', 'ar'),
(78, 39, 'Eastern Province', 'en'),
(79, 40, 'القصيم', 'ar'),
(80, 40, 'Al-Qassim', 'en'),
(115, 58, 'بلديات الضحى', 'ar'),
(116, 58, 'Baladiyat ad Dawhah', 'en'),
(117, 59, 'الوكرة', 'ar'),
(118, 59, 'Al Wakrah', 'en'),
(119, 60, 'بلدية الزعياين', 'ar'),
(120, 60, 'Baladiyat az Za`ayin', 'en'),
(121, 61, 'الخور', 'ar'),
(122, 61, 'Al Khawr', 'en'),
(123, 62, 'بلدية الريان', 'ar'),
(124, 62, 'Baladiyat ar Rayyan', 'en'),
(125, 63, 'مدينة الشمال', 'ar'),
(126, 63, 'Madinat ash Shamal', 'en'),
(127, 64, 'بلدية أم صلال', 'ar'),
(128, 64, 'Baladiyat Umm Salal', 'en'),
(129, 65, 'الفروانيه', 'ar'),
(130, 65, 'alfarwanya', 'en'),
(131, 66, 'الجهراء', 'ar'),
(132, 66, 'jahra', 'en'),
(133, 67, 'الاحمدي', 'ar'),
(134, 67, 'الاحمدي', 'en'),
(135, 68, 'الكويت', 'ar'),
(136, 68, 'kuwait', 'en'),
(137, 69, 'حولي', 'ar'),
(138, 69, 'hawally', 'en'),
(139, 70, 'مبارك الكبير', 'ar'),
(140, 70, 'mubark alkeber', 'en'),
(141, 71, 'الدوحة', 'ar'),
(142, 71, 'Doha', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `classifications`
--

CREATE TABLE `classifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_in_navbar` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classifications`
--

INSERT INTO `classifications` (`id`, `display_in_navbar`, `order`, `parent_id`, `country_id`, `created_at`, `updated_at`) VALUES
(5, 0, NULL, NULL, 4, '2021-01-28 08:01:41', '2021-01-28 08:01:41'),
(6, 0, NULL, 5, 4, '2021-01-28 08:05:35', '2021-01-28 08:05:35'),
(7, 0, NULL, 5, 4, '2021-01-28 08:25:08', '2021-01-28 08:25:08'),
(8, 0, NULL, 5, 4, '2021-01-28 08:50:41', '2021-01-28 08:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `classification_product`
--

CREATE TABLE `classification_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `classification_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classification_translations`
--

CREATE TABLE `classification_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classification_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classification_translations`
--

INSERT INTO `classification_translations` (`id`, `classification_id`, `name`, `description`, `meta_description`, `meta_keywords`, `locale`) VALUES
(8, 5, 'عطور', NULL, NULL, NULL, 'ar'),
(9, 5, 'عطور', NULL, NULL, NULL, 'en'),
(10, 6, 'عطور عربيه', NULL, NULL, NULL, 'ar'),
(11, 6, 'عطور عربيه', NULL, NULL, NULL, 'en'),
(12, 7, 'عطور فرنسيه', NULL, NULL, NULL, 'ar'),
(13, 7, 'عطور فرنسيه', NULL, NULL, NULL, 'en'),
(14, 8, 'دهن العود', NULL, NULL, NULL, 'ar'),
(15, 8, 'دهن العود', NULL, NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `price`, `active`, `created_at`, `updated_at`) VALUES
(1, 20.000, 1, '2020-12-06 06:55:46', '2020-12-22 04:59:16'),
(2, 15.000, 1, '2020-12-06 07:01:12', '2020-12-22 04:59:43'),
(3, 30.000, 0, '2020-12-06 07:02:50', '2020-12-22 04:00:17'),
(4, 15.000, 1, '2020-12-06 07:06:33', '2020-12-22 04:54:20'),
(5, 20.000, 0, '2020-12-06 07:07:41', '2020-12-15 13:42:33'),
(6, 18.000, 1, '2020-12-06 07:09:03', '2020-12-22 04:54:49'),
(7, 28.000, 0, '2020-12-06 07:12:45', '2020-12-22 03:59:54'),
(8, 20.000, 0, '2020-12-06 07:13:44', '2020-12-20 20:17:32'),
(9, 15.000, 0, '2020-12-06 07:15:27', '2020-12-22 03:59:33'),
(10, 15.000, 0, '2020-12-06 07:16:21', '2020-12-20 20:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `collection_product`
--

CREATE TABLE `collection_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collection_translations`
--

CREATE TABLE `collection_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_translations`
--

INSERT INTO `collection_translations` (`id`, `collection_id`, `name`, `locale`) VALUES
(1, 1, '3 عطور الشعر', 'ar'),
(2, 1, '3 hair perfumes', 'en'),
(3, 2, '3 مرشات فرنسية 250 ملي', 'ar'),
(4, 2, '3 French sprays 250 ml', 'en'),
(5, 3, 'خمرية - خمرية مسك العروس - خمرية كنوز', 'ar'),
(6, 3, 'Khmeria - Khamriya Bride’s muskaleurus  - Khamriya  kanooz', 'en'),
(7, 4, 'كنوز الطيب - معمول كولكشن', 'ar'),
(8, 4, 'kunuz altayib -  Maamoul Collection', 'en'),
(9, 5, 'كنوز الطيب - دهن العود كولكشن', 'ar'),
(10, 5, 'kunooz altyeeb - dahin oud Collection', 'en'),
(11, 6, 'مجموعة مسك', 'ar'),
(12, 6, 'Musk Group', 'en'),
(13, 7, 'مجموعة كلونيا', 'ar'),
(14, 7, 'Cologne group', 'en'),
(15, 8, 'مجموعة رشوش كنوز الطيب', 'ar'),
(16, 8, 'Rashush Group -  kunuz al Tyeeb', 'en'),
(17, 9, 'مجموعة نثير ، نفحات ، آمنة', 'ar'),
(18, 9, 'nathir group - nafahat - Safe', 'en'),
(19, 10, 'مجموعة هلا ، نازك ، رحيق', 'ar'),
(20, 10, 'Hala, Nazik, Raheeq group', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `key`, `is_default`, `created_at`, `updated_at`) VALUES
(4, 'kw', '؜+965', 1, '2020-12-01 22:12:57', '2020-12-03 08:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `country_id`, `name`, `currency`, `locale`) VALUES
(3, 2, 'السعودية', 'ر.س', 'ar'),
(4, 2, 'Saudi', 'SAR', 'en'),
(7, 4, 'الكويت', 'د.ك', 'ar'),
(8, 4, 'Kuwait', 'KWD', 'en'),
(13, 7, 'عُمان', 'ر.ع.', 'ar'),
(14, 7, 'Oman', 'OMR', 'en'),
(19, 10, 'الإمارات', 'د.إ', 'ar'),
(20, 10, 'United Arab Emirates', 'AED', 'en'),
(21, 11, 'قطر', 'ر.ق', 'ar'),
(22, 11, 'Qatar', 'QAR', 'en'),
(29, 15, 'البحرين', 'د.ب.', 'ar'),
(30, 15, 'Bahrain', 'BHD', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `discount_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `min_total` decimal(10,3) NOT NULL,
  `usage_count` int(10) UNSIGNED NOT NULL,
  `usage_per_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `value`, `discount_type`, `min_total`, `usage_count`, `usage_per_user`, `created_at`, `updated_at`) VALUES
(1, '564564', 10, 'percentage', 10.000, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_translations`
--

CREATE TABLE `coupon_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `is_default`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'KWD', 1, 4, '2020-12-01 22:12:55', '2020-12-01 22:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `currency_exchange_rates`
--

CREATE TABLE `currency_exchange_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` date NOT NULL,
  `currency_from` bigint(20) UNSIGNED NOT NULL,
  `currency_to` bigint(20) UNSIGNED NOT NULL,
  `rate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_exchange_rates`
--

INSERT INTO `currency_exchange_rates` (`id`, `day`, `currency_from`, `currency_to`, `rate`, `created_at`, `updated_at`) VALUES
(2, '2020-12-02', 1, 3, 12.27, '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(3, '2020-12-02', 1, 4, 3.27, '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(4, '2020-12-21', 1, 3, 12.31, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(5, '2020-12-21', 1, 4, 3.28, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(6, '2020-12-21', 1, 5, 12.05, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(7, '2020-12-21', 1, 6, 11.94, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(8, '2020-12-21', 1, 7, 1.24, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(9, '2020-12-21', 1, 8, 1.26, '2020-12-21 09:15:41', '2020-12-21 09:15:41'),
(12, '2021-02-05', 1, 3, 10.00, '2021-02-05 11:31:54', '2021-02-05 11:31:54'),
(13, '2021-02-05', 1, 4, 3.50, '2021-02-05 11:31:54', '2021-02-05 11:31:54'),
(14, '2021-02-05', 1, 5, 8.00, '2021-02-05 11:31:54', '2021-02-05 11:31:54'),
(15, '2021-02-05', 1, 6, 6.00, '2021-02-05 11:31:54', '2021-02-05 11:31:54'),
(16, '2021-02-05', 1, 7, 5.00, '2021-02-05 11:31:54', '2021-02-05 11:31:54'),
(17, '2021-02-05', 1, 8, 1.00, '2021-02-05 11:31:54', '2021-02-05 11:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `currency_translations`
--

CREATE TABLE `currency_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_translations`
--

INSERT INTO `currency_translations` (`id`, `currency_id`, `name`, `symbol`, `locale`) VALUES
(1, 1, 'دينار كويتي', 'د.ك', 'ar'),
(2, 1, 'Kuwaiti Dinar', 'KWD', 'en'),
(5, 3, 'ريال سعودي', 'ر.س', 'ar'),
(6, 3, 'Saudi Riyal', 'SAR', 'en'),
(7, 4, 'دولار امريكي', '$', 'ar'),
(8, 4, 'American dollar', '$', 'en'),
(9, 5, 'درهم اماراتي', 'د.م', 'ar'),
(10, 5, 'AED', 'AED', 'en'),
(11, 6, 'دينار قطري', 'د.قطري', 'ar'),
(12, 6, 'QAR', 'QAR', 'en'),
(13, 7, 'دينار بحريني', 'د.بحريني', 'ar'),
(14, 7, 'BD', 'BD', 'en'),
(15, 8, 'ريال عماني', 'ر.ع', 'ar'),
(16, 8, 'R.omany', 'R.omany', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 1, 322, '2020-12-11 17:21:00', '2020-12-11 17:21:00'),
(4, 1, 310, '2020-12-12 07:26:33', '2020-12-12 07:26:33'),
(5, 1, 314, '2020-12-14 06:49:37', '2020-12-14 06:49:37'),
(7, 1, 308, '2020-12-26 16:15:46', '2020-12-26 16:15:46'),
(8, 139, 308, '2020-12-27 10:34:46', '2020-12-27 10:34:46'),
(9, 155, 312, '2020-12-29 12:06:28', '2020-12-29 12:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `governorates`
--

CREATE TABLE `governorates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governorates`
--

INSERT INTO `governorates` (`id`, `created_at`, `updated_at`) VALUES
(1, '2021-02-21 04:15:47', '2021-02-21 04:15:47'),
(2, '2021-02-23 07:51:48', '2021-02-23 07:51:48'),
(3, '2021-02-23 07:54:19', '2021-02-23 07:54:19'),
(4, '2021-02-23 08:13:14', '2021-02-23 08:13:14'),
(5, '2021-02-23 08:48:24', '2021-02-23 08:48:24'),
(6, '2021-02-23 12:00:27', '2021-02-23 12:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `governorate_translations`
--

CREATE TABLE `governorate_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `governorate_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governorate_translations`
--

INSERT INTO `governorate_translations` (`id`, `governorate_id`, `name`, `locale`) VALUES
(1, 1, 'محافظة الفروانية', 'ar'),
(2, 1, 'Al Farwaniyah Governorate', 'en'),
(3, 2, 'محافظة الجهراء', 'ar'),
(4, 2, 'Al Jahra Governorate', 'en'),
(5, 3, 'محافظة حولي', 'ar'),
(6, 3, 'Hawally Governorate', 'en'),
(7, 4, 'محافظة العاصمة', 'ar'),
(8, 4, 'Al Assimah Governorate', 'en'),
(9, 5, 'محافظه مبارك الكبير', 'ar'),
(10, 5, 'Mubarak Al-Kabeer Governorate', 'en'),
(11, 6, 'محافظة الاحمدي', 'ar'),
(12, 6, 'Al Ahmadi Governorate', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `home_offers`
--

CREATE TABLE `home_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_offer_translations`
--

CREATE TABLE `home_offer_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_offer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_offer_translations`
--

INSERT INTO `home_offer_translations` (`id`, `home_offer_id`, `name`, `description`, `meta_description`, `meta_keywords`, `locale`) VALUES
(1, 1, 'صورة العرض 1', '<p>صورة العرض 1<br></p>', NULL, NULL, 'ar'),
(2, 1, 'Offer Image 1', '<p>Offer Image 1<br></p>', NULL, NULL, 'en'),
(3, 2, 'صورة العرض 2', '<p>صورة العرض 2<br></p>', NULL, NULL, 'ar'),
(4, 2, 'Offer Image 2', '<p>Offer Image 2<br></p>', NULL, NULL, 'en'),
(5, 3, 'صورة العرض 3', '<p>صورة العرض 3<br></p>', NULL, NULL, 'ar'),
(6, 3, 'Offer Image 3', '<p>Offer Image 3<br></p>', NULL, NULL, 'en'),
(7, 4, 'صورة العرض 4', '<p>صورة العرض 4<br></p>', NULL, NULL, 'ar'),
(8, 4, 'Offer Image 4', '<p>Offer Image 4<br></p>', NULL, NULL, 'en'),
(9, 5, 'صورة العرض 5', '<p>صورة العرض 5<br></p>', NULL, NULL, 'ar'),
(10, 5, 'Offer Image 5', '<p>Offer Image 5<br></p>', NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `created_at`, `updated_at`, `phone`, `whatsapp`, `lat`, `lng`) VALUES
(2, '2021-03-02 09:27:32', '2021-03-02 09:27:32', '+4973198099698', '+4973198099698', '29.312503575475528', '47.10511554953586'),
(3, '2021-03-02 09:29:00', '2021-03-02 09:29:00', '60962945', '60962945', 'klklkl', 'klkj');

-- --------------------------------------------------------

--
-- Table structure for table `location_translations`
--

CREATE TABLE `location_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_translations`
--

INSERT INTO `location_translations` (`id`, `location_id`, `name`, `address`, `locale`) VALUES
(1, 1, 'الفروانية', 'الفروانية, الفروانية, الفروانية', 'ar'),
(2, 1, 'Test', 'Test,Test,Test', 'en'),
(3, 2, 'الفروانية', 'الفروانية, الفروانية, الفروانية', 'ar'),
(4, 2, 'test', 'test', 'en'),
(5, 3, 'الجهراء', 'الجهراء قطعه ٤', 'ar'),
(6, 3, 'Jahra', 'Jahra block 4', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(792, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 613, 'fa3303f5-5b4b-49f6-8b21-13e9bdb9cf58', 'default', '138298153_3883198475065083_4168599139699550351_n', '138298153-3883198475065083-4168599139699550351-n.jpg', 'image/jpeg', 'public', 'public', 247451, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 759, '2021-02-08 10:25:02', '2021-02-08 10:25:05'),
(793, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 614, 'dc8e8c28-ae0b-4434-8eb5-e6dbbdaed5e4', 'default', '138298153_3883198475065083_4168599139699550351_n', '138298153-3883198475065083-4168599139699550351-n.jpg', 'image/jpeg', 'public', 'public', 247451, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 760, '2021-02-08 10:25:31', '2021-02-08 10:25:34'),
(794, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 615, '83ba1593-beb1-4af1-8be8-a5ad6f1b17e3', 'default', '138298153_3883198475065083_4168599139699550351_n', '138298153-3883198475065083-4168599139699550351-n.jpg', 'image/jpeg', 'public', 'public', 247451, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 761, '2021-02-08 10:26:11', '2021-02-08 10:26:13'),
(796, 'App\\Models\\Category', 1, '812a10ac-2bfb-4a7d-a967-5d0a26366cd3', 'default', 'chocolate', 'chocolate.png', 'image/png', 'public', 'public', 679538, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 763, '2021-02-09 03:30:52', '2021-02-09 03:30:56'),
(797, 'App\\Models\\Category', 2, 'dcaa5520-0863-40b6-9b6f-92289b0b00e8', 'default', 'om2', 'om2.png', 'image/png', 'public', 'public', 408921, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 764, '2021-02-09 03:32:45', '2021-02-09 03:32:49'),
(798, 'App\\Models\\Category', 3, '1626e615-73cf-4895-9dc2-4ab3f73fbf26', 'default', 'om3', 'om3.png', 'image/png', 'public', 'public', 465369, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 765, '2021-02-09 03:33:49', '2021-02-09 03:33:53'),
(800, 'App\\Models\\Product', 2, '1a73034c-c315-4479-b3e1-9a0d3f2490c8', 'default', '1', '1.png', 'image/png', 'public', 'public', 323989, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 767, '2021-02-09 04:34:50', '2021-02-09 04:35:11'),
(804, 'App\\Models\\Product', 4, 'b5c7d1ff-c975-40b0-a672-85445c5219ce', 'default', 'sp2', 'sp2.png', 'image/png', 'public', 'public', 220263, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 771, '2021-02-09 04:43:26', '2021-02-09 04:44:05'),
(806, 'App\\Models\\Product', 5, '4998e6de-bad0-4607-b1c2-f8e0e1bbadbe', 'default', 'sp3', 'sp3.png', 'image/png', 'public', 'public', 231876, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 773, '2021-02-09 04:54:00', '2021-02-09 04:54:32'),
(809, 'App\\Models\\Product', 6, 'bda2f68a-9130-4c5d-b1aa-337ebd90bace', 'default', 'sp4', 'sp4.png', 'image/png', 'public', 'public', 260790, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 776, '2021-02-09 04:57:34', '2021-02-09 04:58:05'),
(812, 'App\\Models\\Product', 7, '3fd2f36e-5f32-429b-a54a-7e105b03f524', 'default', 'chocoR2', 'chocor2.png', 'image/png', 'public', 'public', 181492, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 779, '2021-02-09 05:00:59', '2021-02-09 05:02:46'),
(814, 'App\\Models\\Product', 5, '897af193-e731-428c-8ff4-52d1e7c9067b', 'default', 'sp3', 'sp3.png', 'image/png', 'public', 'public', 231876, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 780, '2021-02-09 05:57:51', '2021-02-09 05:58:31'),
(815, 'App\\Models\\Product', 5, '2ae49f9c-cd3a-4fc6-8fa0-80b38a24699b', 'default', 'tro', 'tro.png', 'image/png', 'public', 'public', 206764, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 781, '2021-02-09 05:57:57', '2021-02-09 05:58:31'),
(816, 'App\\Models\\Product', 5, '9304151d-db4b-46d5-b5a3-90ba80133cb8', 'default', 'chocoR4', 'chocor4.png', 'image/png', 'public', 'public', 140702, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 782, '2021-02-09 05:58:03', '2021-02-09 05:58:31'),
(817, 'App\\Models\\Product', 5, '1cfad9b2-f60a-4e4c-bc34-1be1a81b0969', 'default', 'sp3', 'sp3.png', 'image/png', 'public', 'public', 231876, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 783, '2021-02-09 05:58:15', '2021-02-09 05:58:31'),
(818, 'App\\Models\\Product', 5, 'bd34ae8b-b97a-4ccc-b661-45e7029e37af', 'default', 'chocoR4', 'chocor4.png', 'image/png', 'public', 'public', 140702, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 784, '2021-02-09 05:58:27', '2021-02-09 05:58:31'),
(820, 'App\\Models\\Product', 5, '0f1663c9-59f6-4c09-9242-c76cc5fab393', 'default', 'sp3', 'sp3.png', 'image/png', 'public', 'public', 231876, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 786, '2021-02-09 08:11:46', '2021-02-09 08:12:22'),
(821, 'App\\Models\\Product', 5, '96133c7c-30c7-41f5-b925-65a42e4b12ed', 'default', 'sp4', 'sp4.png', 'image/png', 'public', 'public', 260790, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 787, '2021-02-09 08:11:53', '2021-02-09 08:12:22'),
(822, 'App\\Models\\Product', 5, 'ea42f460-c62a-4907-990a-ecf7caff3013', 'default', 'om3', 'om3.png', 'image/png', 'public', 'public', 465369, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 788, '2021-02-09 08:12:00', '2021-02-09 08:12:22'),
(823, 'App\\Models\\Product', 5, 'c1dfedee-63c8-4c4e-aa5c-1fd3a687f9a5', 'default', 'sp3', 'sp3.png', 'image/png', 'public', 'public', 231876, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 789, '2021-02-09 08:12:09', '2021-02-09 08:12:22'),
(824, 'App\\Models\\Product', 5, 'eedeaddc-ed36-4af7-8f96-67a6fa05f6ab', 'default', 'tera', 'tera.png', 'image/png', 'public', 'public', 294067, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 790, '2021-02-09 08:12:15', '2021-02-09 08:12:22'),
(825, 'App\\Models\\Product', 8, 'ae20cbbf-596d-4536-877b-a7ceb8ba70f3', 'default', '135492081_219516173166667_3544722890363821167_n', '135492081-219516173166667-3544722890363821167.png', 'image/png', 'public', 'public', 753507, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 791, '2021-02-09 09:41:53', '2021-02-09 09:42:10'),
(829, 'App\\Models\\Category', 6, '30221a86-9b07-4664-98e2-2553ea04f1b2', 'default', '2015_1402008574_880', '2015-1402008574-880.jpg', 'image/jpeg', 'public', 'public', 79899, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 793, '2021-02-23 06:23:34', '2021-02-23 06:23:36'),
(830, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 632, '51778cb3-e36e-4673-80c6-6a5257c6be77', 'default', '2015_1402008574_880', '2015-1402008574-880.jpg', 'image/jpeg', 'public', 'public', 79899, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 794, '2021-02-23 06:24:51', '2021-02-23 06:24:51'),
(835, 'App\\Models\\Category', 10, 'bfcd8668-0137-44c7-83a3-a8fc1fee8a05', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 795, '2021-02-24 15:21:11', '2021-02-24 15:21:14'),
(836, 'App\\Models\\Category', 11, '2e8bdd08-2d89-4348-884e-ab0a9318ceb7', 'default', '68f7f0f33a7526957da164ce8596db5df07d8b24', '68f7f0f33a7526957da164ce8596db5df07d8b24.jpg', 'image/jpeg', 'public', 'public', 112160, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 796, '2021-02-24 15:22:00', '2021-02-24 15:22:03'),
(837, 'App\\Models\\Category', 12, '8d3c39f4-37df-4337-a38b-104e41c89e8c', 'default', '68f7f0f33a7526957da164ce8596db5df07d8b24', '68f7f0f33a7526957da164ce8596db5df07d8b24.jpg', 'image/jpeg', 'public', 'public', 112160, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 797, '2021-02-24 15:22:58', '2021-02-24 15:23:00'),
(841, 'App\\Models\\Product', 12, 'db4aa0ca-bf36-4edd-b440-ca252bf78d5c', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 801, '2021-02-24 15:29:44', '2021-02-24 15:29:46'),
(842, 'App\\Models\\Product', 13, '686a5b4f-8c1a-4925-b7a2-7ad7a770243c', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 802, '2021-02-24 15:30:58', '2021-02-24 15:31:02'),
(843, 'App\\Models\\Product', 14, 'a6af31c1-965d-466a-b5aa-7719ca8b3be7', 'default', '68f7f0f33a7526957da164ce8596db5df07d8b24', '68f7f0f33a7526957da164ce8596db5df07d8b24.jpg', 'image/jpeg', 'public', 'public', 112160, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 803, '2021-02-24 15:31:56', '2021-02-24 15:32:36'),
(844, 'App\\Models\\Product', 14, '32a20d88-28af-4ad9-a4ff-4a3c359a92b1', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 804, '2021-02-24 15:32:29', '2021-02-24 15:32:36'),
(845, 'App\\Models\\Product', 14, '8fee10ce-5496-4d38-8d26-d470a903444e', 'default', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14.jpg', 'image/jpeg', 'public', 'public', 32897, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 805, '2021-02-24 15:32:34', '2021-02-24 15:32:36'),
(846, 'App\\Models\\Product', 15, 'a420a268-45d0-4d54-b047-42bb4cb4f6ba', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 806, '2021-02-24 15:33:16', '2021-02-24 15:33:47'),
(847, 'App\\Models\\Product', 15, '5b6f4f5b-8561-4e15-ad50-a0b9ea057704', 'default', '68f7f0f33a7526957da164ce8596db5df07d8b24', '68f7f0f33a7526957da164ce8596db5df07d8b24.jpg', 'image/jpeg', 'public', 'public', 112160, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 807, '2021-02-24 15:33:17', '2021-02-24 15:33:47'),
(848, 'App\\Models\\Product', 15, '24eb239f-b589-4e1a-a7d7-0388efbcc49e', 'default', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14.jpg', 'image/jpeg', 'public', 'public', 32897, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 808, '2021-02-24 15:33:18', '2021-02-24 15:33:47'),
(849, 'App\\Models\\Product', 16, 'db8592a2-0fc6-4921-a3e2-31b3ed6732c9', 'default', 'shof_04c868f7024eaaa-300x183', 'shof-04c868f7024eaaa-300x183.jpg', 'image/jpeg', 'public', 'public', 12192, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 809, '2021-02-24 15:34:26', '2021-02-24 15:34:36'),
(850, 'App\\Models\\Product', 16, '4853dfa0-ea04-497f-aae8-c01850929a29', 'default', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14.jpg', 'image/jpeg', 'public', 'public', 32897, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 810, '2021-02-24 15:34:33', '2021-02-24 15:34:36'),
(851, 'App\\Models\\Product', 17, '6dfd7e57-6642-477b-aeee-a19ba0c6258b', 'default', '1478', '1478.jpg', 'image/jpeg', 'public', 'public', 126107, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 811, '2021-02-24 15:51:49', '2021-02-24 15:51:54'),
(852, 'App\\Models\\Product', 18, '8587cee4-ac48-4b66-b742-226228b2ad67', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 812, '2021-02-24 15:52:44', '2021-02-24 15:53:13'),
(853, 'App\\Models\\Category', 16, 'b6c37c0a-6b36-4030-997f-0f11e3541358', 'default', '12', '12.jpg', 'image/jpeg', 'public', 'public', 14988, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 813, '2021-03-02 06:05:41', '2021-03-02 06:05:59'),
(854, 'App\\Models\\Product', 19, 'b84f860b-faaa-498a-b87f-98b889b23496', 'default', '13', '13.jpg', 'image/jpeg', 'public', 'public', 8866, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 814, '2021-03-02 06:07:15', '2021-03-02 06:07:51'),
(855, 'App\\Models\\Product', 20, '159d9fd7-3c04-4d4f-917b-61782c0259e9', 'default', '13', '13.jpg', 'image/jpeg', 'public', 'public', 8866, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 815, '2021-03-02 10:18:20', '2021-03-02 10:18:25'),
(857, 'App\\Models\\Product', 21, '39eb5ba1-b176-4c09-99f9-796b42bac41c', 'default', '68f7f0f33a7526957da164ce8596db5df07d8b24', '68f7f0f33a7526957da164ce8596db5df07d8b24.jpg', 'image/jpeg', 'public', 'public', 112160, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 816, '2021-03-02 10:20:03', '2021-03-02 10:20:06'),
(858, 'App\\Models\\Product', 22, '24fb432e-fe0d-4efc-90bd-a9ef822d3f1d', 'default', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14', '70e3fa5fb47cc18cdf66762f2045fb6cad62be14.jpg', 'image/jpeg', 'public', 'public', 32897, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 817, '2021-03-02 10:21:14', '2021-03-02 10:21:18'),
(859, 'App\\Models\\Category', 17, '6e197f67-d9a7-47b7-9818-0c8a684c29e4', 'default', '14', '14.jpg', 'image/jpeg', 'public', 'public', 39754, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 818, '2021-03-02 10:22:33', '2021-03-02 10:22:35'),
(860, 'App\\Models\\Category', 18, '9c7e21c6-a031-4e55-893e-a1f6edce1e6b', 'default', '1478', '1478.jpg', 'image/jpeg', 'public', 'public', 126107, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 819, '2021-03-02 10:24:25', '2021-03-02 10:24:30'),
(861, 'App\\Models\\Product', 23, '395263d1-0d25-4a9b-a2b6-044889db583c', 'default', '1478', '1478.jpg', 'image/jpeg', 'public', 'public', 126107, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 820, '2021-03-02 10:27:35', '2021-03-02 10:27:41'),
(862, 'App\\Models\\Product', 24, 'e643a773-9050-48c9-a85d-1b5e12e92e79', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 821, '2021-03-02 10:28:42', '2021-03-02 10:28:45'),
(863, 'App\\Models\\Product', 25, '5fe7421a-cefb-4471-9b2a-dc8b717822c3', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 822, '2021-03-02 10:29:53', '2021-03-02 10:29:56'),
(864, 'App\\Models\\Product', 26, '280591c9-8a95-4152-882b-c24c787dd5f3', 'default', 'اجمل-صور-عصائر-3', 'agml-sor-aasayr-3.jpg', 'image/jpeg', 'public', 'public', 55298, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 823, '2021-03-02 10:31:52', '2021-03-02 10:32:24'),
(865, 'App\\Models\\Product', 27, 'b0f60877-842d-4ef0-ab7b-8037e3b28436', 'default', 'بطيخ', 'btykh.jpg', 'image/jpeg', 'public', 'public', 32266, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 824, '2021-03-02 10:33:12', '2021-03-02 10:33:26'),
(866, 'App\\Models\\Product', 29, '2b8f8924-d869-434c-83aa-0a193777efb3', 'default', '14', '14.jpg', 'image/jpeg', 'public', 'public', 39754, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 825, '2021-03-03 04:03:31', '2021-03-03 04:03:40'),
(867, 'App\\Models\\Product', 30, 'a4ae4a38-d5a0-484b-9861-85a43aeb734c', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 826, '2021-03-03 04:18:51', '2021-03-03 04:20:18'),
(868, 'App\\Models\\Product', 31, '2b051a85-b32b-4f8d-af98-e6fa5b2580b1', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 827, '2021-03-03 04:24:15', '2021-03-03 04:25:05'),
(869, 'App\\Models\\Product', 32, '50227af1-71f3-4902-a212-dcf509b5b1a6', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 828, '2021-03-03 04:25:58', '2021-03-03 04:28:25'),
(870, 'App\\Models\\Product', 33, '105558a4-8af5-42fa-9c8f-8943e1afbc7b', 'default', '142', '142.jpg', 'image/jpeg', 'public', 'public', 54318, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 829, '2021-03-03 04:30:17', '2021-03-03 04:30:24'),
(871, 'App\\Models\\Product', 34, '227c31a8-36a8-44d4-8bde-851d953c3f1e', 'default', '1478', '1478.jpg', 'image/jpeg', 'public', 'public', 126107, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 830, '2021-03-03 04:33:12', '2021-03-03 04:33:20'),
(872, 'App\\Models\\Product', 35, 'eca5cd0e-941e-48ec-8588-5884e1435ac7', 'default', 'كباب', 'kbab.jpg', 'image/jpeg', 'public', 'public', 85745, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 831, '2021-03-03 04:35:21', '2021-03-03 04:35:25'),
(873, 'App\\Models\\Product', 36, 'e6d449f6-ed5a-4b01-8c29-82be9b99a209', 'default', 'شيش', 'shysh.jpg', 'image/jpeg', 'public', 'public', 75045, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 832, '2021-03-03 04:37:27', '2021-03-03 04:37:57'),
(874, 'App\\Models\\Product', 38, '7b66a304-4c38-4d44-9c73-4d426b26a31e', 'default', '', 'dgag.jpg', 'image/jpeg', 'public', 'public', 11863, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 833, '2021-03-03 04:40:17', '2021-03-03 04:41:58'),
(875, 'App\\Models\\Product', 39, '5b3b214b-a3a0-46dc-94d1-6e102d230ec6', 'default', '', 'dgag.jpg', 'image/jpeg', 'public', 'public', 11863, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 834, '2021-03-03 04:43:03', '2021-03-03 04:43:07'),
(876, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 678, '98d49027-cffc-41d2-ae00-b33f1adcccbe', 'default', 'كولا', 'kola.jpg', 'image/jpeg', 'public', 'public', 79542, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 835, '2021-03-03 04:51:07', '2021-03-03 04:51:07'),
(877, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 679, '12ebb6cc-3feb-4884-b7fd-e037a97367ec', 'default', '', 'byybsy.jpg', 'image/jpeg', 'public', 'public', 110883, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 836, '2021-03-03 04:53:38', '2021-03-03 04:53:39'),
(879, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 681, 'ca8d8766-bbae-43eb-b781-74f019563455', 'default', '', 'marnda.jpg', 'image/jpeg', 'public', 'public', 56345, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 837, '2021-03-03 04:56:04', '2021-03-03 04:56:04'),
(880, 'App\\Models\\User', 217, 'bd017f86-50c6-4236-8e3a-670524abdf89', 'avatars', 'Path 4352', 'path-4352.png', 'image/png', 'public', 'public', 14611, '[]', '{\"generated_conversions\":{\"thumb\":true,\"small\":true,\"medium\":true,\"large\":true}}', '[]', 838, '2021-03-09 03:49:43', '2021-03-09 03:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_02_10_194515_create_settings_table', 1),
(6, '2020_04_20_190357_create_countries_table', 1),
(7, '2020_04_20_190418_create_cities_table', 1),
(8, '2020_05_16_183059_create_reset_password_codes_table', 1),
(9, '2020_05_16_183114_create_reset_password_tokens_table', 1),
(10, '2020_05_19_000838_create_addresses_table', 1),
(11, '2020_06_03_131044_create_temporary_files_table', 1),
(12, '2020_06_03_164835_create_jobs_table', 1),
(13, '2020_09_20_214041_create_media_table', 1),
(14, '2020_09_23_232734_create_categories_table', 1),
(15, '2020_10_08_075926_create_products_table', 1),
(16, '2020_10_10_012609_create_category_product_table', 1),
(17, '2020_10_19_222233_create_offers_table', 1),
(18, '2020_10_21_212040_create_currencies_table', 1),
(19, '2020_10_27_222032_create_favorites_table', 1),
(20, '2020_11_01_002104_create_brands_table', 1),
(21, '2020_11_01_203538_create_orders_table', 1),
(22, '2020_11_01_203549_create_order_items_table', 1),
(23, '2020_11_04_002712_create_coupons_table', 1),
(24, '2020_11_08_230301_create_collections_table', 1),
(25, '2020_11_08_232524_create_testers_table', 1),
(26, '2020_11_09_020403_create_collection_product_table', 1),
(27, '2020_11_09_020429_create_product_tester_table', 1),
(28, '2020_11_14_022616_create_pages_table', 1),
(29, '2020_11_16_210323_create_sizes_table', 1),
(30, '2020_11_18_213018_create_shipping_companies_table', 1),
(31, '2020_11_19_000457_create_shipping_prices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `milks`
--

CREATE TABLE `milks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milks`
--

INSERT INTO `milks` (`id`, `price`, `created_at`, `updated_at`) VALUES
(1, 2.000, '2021-03-07 10:02:05', '2021-03-07 10:02:05'),
(2, 2.000, '2021-03-07 10:02:27', '2021-03-07 10:02:27'),
(3, 2.000, '2021-03-07 10:02:50', '2021-03-07 09:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `milk_translations`
--

CREATE TABLE `milk_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `milk_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milk_translations`
--

INSERT INTO `milk_translations` (`id`, `milk_id`, `name`, `locale`) VALUES
(1, 1, 'صغير', 'ar'),
(2, 1, 'Small', 'en'),
(3, 2, 'متوسط', 'ar'),
(4, 2, 'Medium', 'en'),
(5, 3, 'كبير', 'ar'),
(6, 3, 'Large', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `percent` int(10) UNSIGNED NOT NULL,
  `discount_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `from` datetime NOT NULL,
  `to` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_translations`
--

CREATE TABLE `offer_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avenue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `gift_message` text COLLATE utf8mb4_unicode_ci,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` decimal(10,3) DEFAULT '0.000',
  `discount` decimal(10,3) DEFAULT '0.000',
  `paid` decimal(10,3) NOT NULL DEFAULT '0.000',
  `sub_total` decimal(10,3) DEFAULT NULL,
  `total` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `opened_at` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shipping_company_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `name`, `phone`, `pickup`, `country`, `city`, `area`, `street`, `block`, `avenue`, `house`, `address`, `gift_message`, `payment_method`, `payment_id`, `shipping_price`, `discount`, `paid`, `sub_total`, `total`, `created_at`, `updated_at`, `opened_at`, `coupon_id`, `shipping_company_id`) VALUES
(46, 1, 'pending', 'Admin', '454-741-8214', NULL, 'الكويت', 'محافظة الفروانية', 'ضاحية عبد الله المبارك', 'kk', 'kk', 'kk', 'kk', 'kk', NULL, 'كاش', NULL, 2.000, NULL, 0.000, 1.500, 1.500, '2021-03-03 21:27:45', '2021-03-07 04:47:03', '2021-03-07 07:47:03', NULL, NULL),
(47, 213, 'pending', 'Admin', '454-555-8214', '3', 'الكويت', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'كاش', NULL, NULL, NULL, 0.000, 1.500, 1.500, '2021-03-07 06:27:34', '2021-03-07 06:28:04', '2021-03-07 09:28:04', NULL, NULL),
(48, 1, 'pending', 'Admin', '454-741-8214', '2', 'الكويت', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'كاش', NULL, NULL, NULL, 0.000, 2.500, 2.500, '2021-03-07 06:42:10', '2021-03-07 07:12:44', '2021-03-07 10:12:44', NULL, NULL),
(50, 1, 'pending', 'Admin', '454-741-8214', '3', 'Kuwait', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'benefit', NULL, NULL, NULL, 0.000, 4.250, 4.250, '2021-03-07 07:44:17', '2021-03-07 07:49:26', '2021-03-07 10:49:26', NULL, NULL),
(51, 1, 'pending', 'Admin', '454-741-8214', '3', 'Kuwait', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mada', NULL, NULL, NULL, 0.000, 4.250, 4.250, '2021-03-07 07:44:28', '2021-03-07 07:48:56', '2021-03-07 10:48:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `milk_size` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` decimal(10,3) GENERATED ALWAYS AS ((`price` * `qty`)) STORED,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_type`, `item_id`, `price`, `qty`, `milk_size`, `additional`, `created_at`, `updated_at`, `size_id`) VALUES
(15, 15, 'App\\Models\\Product', 9, 5.000, 1, 'medium', 'ggg', '2021-02-24 13:50:23', '2021-02-24 13:50:23', NULL),
(16, 16, 'App\\Models\\Product', 9, 5.000, 2, 'small', 'hbhjbhjbhj', '2021-02-24 15:08:17', '2021-02-24 15:08:17', NULL),
(17, 17, 'App\\Models\\Product', 13, 5.000, 1, NULL, NULL, '2021-02-28 06:39:46', '2021-02-28 06:39:46', 7),
(18, 18, 'App\\Models\\Product', 13, 5.000, 1, NULL, NULL, '2021-02-28 06:40:08', '2021-02-28 06:40:08', 7),
(19, 19, 'App\\Models\\Product', 13, 5.000, 1, NULL, NULL, '2021-02-28 06:41:36', '2021-02-28 06:41:36', 7),
(20, 20, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 06:42:31', '2021-02-28 06:42:31', 10),
(21, 21, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 06:44:57', '2021-02-28 06:44:57', 10),
(22, 22, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 06:47:29', '2021-02-28 06:47:29', 10),
(23, 23, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 07:02:56', '2021-02-28 07:02:56', 10),
(24, 24, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 07:03:35', '2021-02-28 07:03:35', 10),
(25, 25, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 07:04:14', '2021-02-28 07:04:14', 10),
(26, 26, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 07:04:34', '2021-02-28 07:04:34', 10),
(27, 27, 'App\\Models\\Product', 12, 5.000, 1, 'small', NULL, '2021-02-28 08:08:05', '2021-02-28 08:08:05', 4),
(28, 28, 'App\\Models\\Product', 12, 5.000, 1, NULL, NULL, '2021-02-28 09:18:30', '2021-02-28 09:18:30', 4),
(29, 29, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 09:18:55', '2021-02-28 09:18:55', 10),
(30, 30, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 09:20:50', '2021-02-28 09:20:50', 10),
(31, 31, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 09:26:26', '2021-02-28 09:26:26', 10),
(32, 32, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-02-28 09:28:20', '2021-02-28 09:28:20', 10),
(33, 33, 'App\\Models\\Product', 17, 5.000, 1, NULL, '17', '2021-03-01 08:05:10', '2021-03-01 08:05:10', 14),
(34, 34, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-03-01 08:06:07', '2021-03-01 08:06:07', 10),
(35, 35, 'App\\Models\\Product', 12, 5.000, 1, 'small', NULL, '2021-03-01 08:59:18', '2021-03-01 08:59:18', 4),
(36, 36, 'App\\Models\\Product', 12, 5.000, 1, 'small', NULL, '2021-03-01 09:02:37', '2021-03-01 09:02:37', 4),
(37, 37, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-03-01 09:17:29', '2021-03-01 09:17:29', 10),
(38, 38, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-03-01 09:19:38', '2021-03-01 09:19:38', 10),
(39, 39, 'App\\Models\\Product', 15, 5.000, 7, 'medium', NULL, '2021-03-01 09:20:29', '2021-03-01 09:20:29', 12),
(40, 40, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-03-01 09:20:59', '2021-03-01 09:20:59', 10),
(41, 41, 'App\\Models\\Product', 14, 5.000, 1, NULL, NULL, '2021-03-01 09:22:03', '2021-03-01 09:22:03', 10),
(42, 42, 'App\\Models\\Product', 25, 8.000, 6, 'small', '25', '2021-03-02 10:44:51', '2021-03-02 10:44:51', 31),
(43, 42, 'App\\Models\\Product', 22, 5.000, 2, NULL, '22', '2021-03-02 10:44:52', '2021-03-02 10:44:52', 25),
(44, 43, 'App\\Models\\Product', 25, 8.000, 6, 'small', '25', '2021-03-02 10:45:33', '2021-03-02 10:45:33', 31),
(45, 43, 'App\\Models\\Product', 22, 5.000, 2, NULL, '22', '2021-03-02 10:45:33', '2021-03-02 10:45:33', 25),
(46, 44, 'App\\Models\\Product', 20, 5.000, 24, NULL, '20', '2021-03-02 13:41:30', '2021-03-02 13:41:30', 19),
(47, 45, 'App\\Models\\Product', 20, 5.000, 1, NULL, NULL, '2021-03-02 13:55:52', '2021-03-02 13:55:52', 19),
(48, 46, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-03 21:27:45', '2021-03-03 21:27:45', NULL),
(49, 47, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 06:27:34', '2021-03-07 06:27:34', NULL),
(50, 48, 'App\\Models\\Product', 40, 0.250, 1, NULL, NULL, '2021-03-07 06:42:10', '2021-03-07 06:42:10', NULL),
(51, 48, 'App\\Models\\Product', 38, 1.500, 1, NULL, NULL, '2021-03-07 06:42:10', '2021-03-07 06:42:10', 43),
(52, 48, 'App\\Models\\Product', 30, 0.750, 1, NULL, NULL, '2021-03-07 06:42:10', '2021-03-07 06:42:10', 36),
(53, 49, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 07:42:47', '2021-03-07 07:42:47', NULL),
(54, 49, 'App\\Models\\Product', 29, 1.250, 1, NULL, NULL, '2021-03-07 07:42:47', '2021-03-07 07:42:47', 34),
(55, 49, 'App\\Models\\Product', 37, 1.500, 1, NULL, NULL, '2021-03-07 07:42:47', '2021-03-07 07:42:47', NULL),
(56, 50, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 07:44:17', '2021-03-07 07:44:17', NULL),
(57, 50, 'App\\Models\\Product', 29, 1.250, 1, NULL, NULL, '2021-03-07 07:44:17', '2021-03-07 07:44:17', 34),
(58, 50, 'App\\Models\\Product', 37, 1.500, 1, NULL, NULL, '2021-03-07 07:44:17', '2021-03-07 07:44:17', NULL),
(59, 51, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 07:44:28', '2021-03-07 07:44:28', NULL),
(60, 51, 'App\\Models\\Product', 29, 1.250, 1, NULL, NULL, '2021-03-07 07:44:28', '2021-03-07 07:44:28', 34),
(61, 51, 'App\\Models\\Product', 37, 1.500, 1, NULL, NULL, '2021-03-07 07:44:28', '2021-03-07 07:44:28', NULL),
(62, 52, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 07:45:06', '2021-03-07 07:45:06', NULL),
(63, 52, 'App\\Models\\Product', 29, 1.250, 1, NULL, NULL, '2021-03-07 07:45:07', '2021-03-07 07:45:07', 34),
(64, 52, 'App\\Models\\Product', 37, 1.500, 1, NULL, NULL, '2021-03-07 07:45:07', '2021-03-07 07:45:07', NULL),
(65, 53, 'App\\Models\\Product', 28, 1.500, 1, NULL, NULL, '2021-03-07 07:59:04', '2021-03-07 07:59:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`) VALUES
(1, '2020-12-06 21:15:22', '2020-12-06 21:15:22'),
(2, '2020-12-22 05:12:41', '2020-12-22 05:12:41'),
(3, '2020-12-22 05:14:52', '2020-12-22 05:14:52'),
(4, '2020-12-22 05:17:12', '2020-12-22 05:17:12'),
(5, '2020-12-22 05:21:13', '2020-12-22 05:21:13'),
(6, '2020-12-22 05:22:31', '2020-12-22 05:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `name`, `description`, `locale`) VALUES
(1, 1, 'من نحن', '<p><br>من نحن ؟ أحد أكبر المنصات للتسوق الإلكتروني في الكويت والخليج المختصة في منتجات العطور والبخور والمباخر وأكثر... <br>يمكنكم الاختيار من عشرات الماركات العالمية والتمتع &nbsp;بالتسوق من خلال موقعنا الإلكتروني و التطبيقات على الهواتف الذكية.<br>منتجاتنا تتضمن:<br>* العطور: تشكيلة تضم أكثر من 1500 عطر فرنسي <br>* العطور العربية وعطور الشعر&nbsp; ومعطرات المنزليه تضم تشكيلة متنوعة و واسعه <br>* المباخر : تصاميم جميلة وأشكال مميزة.<br>* البخور والمعمول : أجمل انواع البخور المتوفرة في العالم<br>بالإضافة الى الكثير من العروض، النصائح، المسابقات والجوائز على مدار السنة يمكنكم الاستمتاع بمتعة التسوق والمتابعة ، أكثر من مجرد موقع تسوق الكتروني . خدمة الدفع عند الاستلام في الكويت والدفع الإلكتروني الخليج والتغليف الحديث والمميز<br></p>', 'ar'),
(2, 1, 'about us', '<p>otoraty company<br></p>', 'en'),
(3, 2, 'سياسة الاستبدال والاسترجاع', '<p><br>تعرف على سياسة التبديل والاسترجاع<br>سياسية التبديل والاسترجاع في متجر عطوراتي ستور&nbsp; لجميع المشتريات يمكن إرجاعها أو استبدالها خلال 5 الى 14 يوما من تاريخ فاتورة الشراء.<br><br># المنتجات المرغوب إرجاعها أو استبدالها يجب أن تكون في نفس حالتها المصنعة من المصنع.<br>أي أن منتج مفتوح أو منزوع التغليف أو في حالة غير المقدم بها من الشركة يعتبر استبداله أو إرجاعه مرفوض أو ممنوع.<br><br># عطوراتي ستور سوف يضطر آسفا حجب أي عميل يتم التأكد أنه يكرر عمليات إرجاع واستبدال بطريقة مبالغ فيها.<br><br>البضائع ذات العيوب المصنعية<br>يجب إخطار البضائع ذات العيب المصنعي فور توصيل المنتج وخلال 24 ساعة.<br>إرسال صورة توضح جليا العيب المصنعي المشكو منه مع رقم الطلب.<br><br>سياسة استرجاع الأموال<br>المشتريات التي يتم إرجاعها سيتم إيداع المبلغ الذي تم استلامه في الحساب البنكي أو نقدا.<br>الأموال التي سيتك إرجاعها نقدا للعملاء سيتم خصم مبلغ التوصيل منها.<br>ويتم ارجاعها خلال مدة اقصاها ٥ ايام عمل.</p>', 'ar'),
(4, 2, 'Replacement and refund policy', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/2\">Replacement and refund policy</a>  <a href=\"http://otoraty.ecm.wna.net.kw/page/2\">Replacement and refund policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/2\">Replacement and refund policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/2\">Replacement and refund policy</a></p>', 'en'),
(5, 3, 'الشحن و التسليم', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">ا </a><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم </a><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم </a><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">الشحن و التسليم </a><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">لشحن و التسليم</a></p>', 'ar'),
(6, 3, 'Shipping and Handling', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/3\">Shipping and Handling</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">Shipping and Handling</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">Shipping and Handling</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">Shipping and Handling</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/3\">Shipping and Handling</a></p>', 'en'),
(7, 4, 'سياسة الخصوصية', '<p>سياسة الخصوصية&nbsp; سياسة الخصوصية&nbsp; سياسة الخصوصية <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">سياسة الخصوصية</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">سياسة الخصوصية</a></p>', 'ar'),
(8, 4, 'Privacy Policy', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/4\">Privacy Policy</a></p>', 'en'),
(9, 5, 'الشروط والأحكام', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> الشروط والأحكام <a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/5\">الشروط والأحكام</a> <br></p>', 'ar'),
(10, 5, 'Terms and Conditions', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">&nbsp;</a><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">Terms and Conditions </a><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">Terms and Conditions </a><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">Terms and Conditions</a><a href=\"http://otoraty.ecm.wna.net.kw/page/5\">Terms and Conditions</a></p>', 'en'),
(11, 6, 'اتصل بنا', '<p>اتصل بنا اتصل بنا اتصل بنا <br></p>', 'ar'),
(12, 6, 'Contact Us', '<p><a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a><a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a><a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a><a href=\"http://otoraty.ecm.wna.net.kw/page/6\">Contact Us</a> <br></p>', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adel.hamed335@yahoo.com', '$2y$10$pQZCPdtNSB2LtyNRVmoVg.Z9umVpNopJPitZ8JxUAvoLKr2b8fkWa', '2021-02-24 15:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 1, 'Unknown Device', 'a1e70dc4af7e095ad0275761d091023b02348ea407defe3ae1f881f2727052d6', '[\"*\"]', NULL, '2020-12-09 04:27:34', '2020-12-09 04:27:34'),
(3, 'App\\Models\\User', 135, 'Unknown Device', 'f5d6359226a9559eb0aea6452813718ea59fddb26fe67c465e3381d354fe7de1', '[\"*\"]', NULL, '2020-12-09 04:28:07', '2020-12-09 04:28:07'),
(8, 'App\\Models\\User', 136, 'Unknown Device', '80d4905fc81c0cd3b48673a5157d38f62e11d2d200ff1f977a20b95da62289df', '[\"*\"]', NULL, '2020-12-10 06:20:15', '2020-12-10 06:20:15'),
(12, 'App\\Models\\User', 138, 'Unknown Device', '82c2d3a4320c9bb1dcae263f3ccc32c58e6ba6294a1293fd94087bc9748ec0f5', '[\"*\"]', NULL, '2020-12-10 06:28:32', '2020-12-10 06:28:32'),
(14, 'App\\Models\\User', 137, 'Unknown Device', 'a2ee5ff1d6973c994e23d78504a79684653dea6428f16023975eadf333900a33', '[\"*\"]', NULL, '2020-12-13 03:45:22', '2020-12-13 03:45:22'),
(19, 'App\\Models\\User', 140, 'Unknown Device', 'c449892379ed9742d1402a7b4579f40d73fe02d19fabf62e3eebaa6a81692811', '[\"*\"]', NULL, '2020-12-13 06:06:01', '2020-12-13 06:06:01'),
(23, 'App\\Models\\User', 142, 'Unknown Device', '32324df1fe49e3e2e289cf3ad7061fb903029c43abd5b007ffc2a6a3b26e30a7', '[\"*\"]', NULL, '2020-12-15 07:10:42', '2020-12-15 07:10:42'),
(28, 'App\\Models\\User', 143, 'Unknown Device', 'de899797568dfcc09a9f742cc4284cfbce31ddd3123a4641a669736fe06fd631', '[\"*\"]', '2020-12-15 07:35:36', '2020-12-15 07:34:08', '2020-12-15 07:35:36'),
(32, 'App\\Models\\User', 144, 'Unknown Device', '756e1279830e5e3d0991a6c520228c8ab9d0d6548e5446a9fb81f050c05e50ac', '[\"*\"]', NULL, '2020-12-16 07:38:51', '2020-12-16 07:38:51'),
(33, 'App\\Models\\User', 145, 'Unknown Device', '40d3ee4718dec519341ef98de330fdea0ac6f1cf08bac08cfa1def469e0771f2', '[\"*\"]', NULL, '2020-12-16 07:42:40', '2020-12-16 07:42:40'),
(49, 'App\\Models\\User', 147, 'Unknown Device', 'b1b5fbeb9a514b68e41a215144d4f8fe1086cc51ae547088f36c80ca7e47c4df', '[\"*\"]', NULL, '2020-12-19 15:13:01', '2020-12-19 15:13:01'),
(51, 'App\\Models\\User', 148, 'Unknown Device', 'c92f35657b4da8170a995c0f5d2291b1d0a6d9993f0612d8cab2d1493a586e1e', '[\"*\"]', NULL, '2020-12-19 18:37:31', '2020-12-19 18:37:31'),
(69, 'App\\Models\\User', 149, 'Unknown Device', '42fbb0e50f8b89ece509c680e9cd9b305319c61f230d31c0e2abfc729d546c70', '[\"*\"]', NULL, '2020-12-21 18:26:40', '2020-12-21 18:26:40'),
(70, 'App\\Models\\User', 150, 'Unknown Device', 'dda380d69b0911779e96d5fa0d036184cd0833dafecfe8556373f83d2b98734e', '[\"*\"]', '2020-12-22 07:43:14', '2020-12-21 18:31:34', '2020-12-22 07:43:14'),
(75, 'App\\Models\\User', 151, 'Unknown Device', '024c16de314692f89c76cd3999ff9667f97d6f8831f576758d6345455079ed41', '[\"*\"]', NULL, '2020-12-23 07:55:13', '2020-12-23 07:55:13'),
(83, 'App\\Models\\User', 153, 'Unknown Device', '1897753f2478ea7e90fa911bf3e35843005df5fc1e4baf037661d8d6631d6ca0', '[\"*\"]', '2020-12-24 02:45:17', '2020-12-24 02:43:29', '2020-12-24 02:45:17'),
(91, 'App\\Models\\User', 159, 'Unknown Device', '177a5a6f5ec2b517e2e5b384675e7b20be0f648d2875314a33571804ac92da93', '[\"*\"]', NULL, '2021-01-03 15:14:53', '2021-01-03 15:14:53'),
(97, 'App\\Models\\User', 152, 'Unknown Device', '5b14a8204c6791152977eb5200d0dedd52b8227948c50a872403eed23846b7cf', '[\"*\"]', '2021-01-19 21:50:36', '2021-01-13 09:45:46', '2021-01-19 21:50:36'),
(103, 'App\\Models\\User', 164, 'Unknown Device', 'dfde6819960bfdc2f344aa9229ec9a65f83411d5e79528e7e7640122a05e065e', '[\"*\"]', NULL, '2021-01-13 11:03:18', '2021-01-13 11:03:18'),
(104, 'App\\Models\\User', 165, 'Unknown Device', 'e2aa1eaff6ecf39201b4807e2c81f4f0fd20ac29ea851286486da14a434b5644', '[\"*\"]', NULL, '2021-01-13 11:11:19', '2021-01-13 11:11:19'),
(122, 'App\\Models\\User', 170, 'Unknown Device', '454860f46922f89d91ee0a730df849a4fc83a4025e89656c94c0b32466feaa45', '[\"*\"]', NULL, '2021-01-24 06:01:31', '2021-01-24 06:01:31'),
(123, 'App\\Models\\User', 171, 'Unknown Device', '7bac053aafadba30cd18b4cbc251b60e9abf4e9ae5354ba0877b078bb44e85b1', '[\"*\"]', NULL, '2021-01-24 06:31:21', '2021-01-24 06:31:21'),
(124, 'App\\Models\\User', 172, 'Unknown Device', '46039812a4e16da8897ae86d78cb25bc84a0da90a596afd5fb6df0c384f5d03a', '[\"*\"]', NULL, '2021-01-24 06:31:39', '2021-01-24 06:31:39'),
(125, 'App\\Models\\User', 173, 'Unknown Device', '199c3cc60a94732b8e64d07af1960bf5245447b6632d82cfd1ab066662823585', '[\"*\"]', NULL, '2021-01-24 06:40:23', '2021-01-24 06:40:23'),
(126, 'App\\Models\\User', 174, 'Unknown Device', '74a8646ffb5b8d80f7025776ac6e0f2277320433d447bf4efd54618cd70c0dca', '[\"*\"]', '2021-01-27 11:20:08', '2021-01-27 09:27:14', '2021-01-27 11:20:08'),
(128, 'App\\Models\\User', 139, 'Unknown Device', '07f232af70a8f22a6c49fea7ac2a702579226b51c8d839b2acf5f1592748c71b', '[\"*\"]', '2021-01-28 09:17:10', '2021-01-28 09:13:53', '2021-01-28 09:17:10'),
(129, 'App\\Models\\User', 175, 'Unknown Device', '500213f460559997ea9561c84cbc157326e33905ac1adf5372400b0c94eac669', '[\"*\"]', NULL, '2021-01-31 10:03:40', '2021-01-31 10:03:40'),
(131, 'App\\Models\\User', 176, 'Unknown Device', '584b129eaf084bb0f988c20a79ea33e27da204763f03b94c20652689ce3ace4f', '[\"*\"]', NULL, '2021-01-31 10:11:40', '2021-01-31 10:11:40'),
(132, 'App\\Models\\User', 177, 'Unknown Device', '363d99484e740f9fb78b2118de849556df3ed85783f108d9633f5844d7d32707', '[\"*\"]', NULL, '2021-01-31 10:13:06', '2021-01-31 10:13:06'),
(133, 'App\\Models\\User', 139, '55555', '5263b0a2d35985affae854860fdcd05a838377a4d68d903b8272c10a24379aa6', '[\"*\"]', NULL, '2021-01-31 11:48:40', '2021-01-31 11:48:40'),
(135, 'App\\Models\\User', 178, 'Unknown Device', '9802f0feccbe6212b029c9fd13bda7587150ba998aa83bd4f171a7a3a88a857a', '[\"*\"]', NULL, '2021-01-31 11:59:35', '2021-01-31 11:59:35'),
(136, 'App\\Models\\User', 179, 'Unknown Device', '3f9d498629ab1b618f681c1ee83a725829483415a5c7f84555189e2ac941eab3', '[\"*\"]', '2021-02-01 03:22:58', '2021-02-01 03:22:15', '2021-02-01 03:22:58'),
(138, 'App\\Models\\User', 176, 'fxnoaWr_QEizmhYRtxBC1s:APA91bEB6jdy7bAZLV9MFpW619lqTTUukjo0O-IqhtsSsoscu-4OnTluuc2acqHtsMTFY5IgjOipNUiqX93G7wY5iOpSlSXHvnjhT_ZfMy08vB4krfxUaw0FSWHGiDvrAHJIF51ZM3RP', '6fda9bdbf3d3fae1e8fb8ea4b8467bfba5aaa94453a553a69e821da63e6a2c53', '[\"*\"]', NULL, '2021-02-01 04:44:46', '2021-02-01 04:44:46'),
(140, 'App\\Models\\User', 146, 'c6C3Pg9ET9ua7AvfEKT-qK:APA91bFh-YF81Nz2PTx77MkKJZFBs0H2AzrY1WOpj0FEd76jl-HnIbULYUfsFT4iWMUm8kQsC1bpwA-QZNiMGw2UspY5hnAoKiheaZh0zFjZWKyu6sRbOvQdaxdaGdqziKgNles0ccgY', 'dea5e0d24b70d64bb87181a72b2e165360185dd93a9a79ec5cddc656da496d38', '[\"*\"]', NULL, '2021-02-01 04:56:36', '2021-02-01 04:56:36'),
(146, 'App\\Models\\User', 196, '121212', '13874fd1293afae68b3ec81fe6c61865e51a7a46bd706cc44d919f4e1635fcbc', '[\"*\"]', NULL, '2021-03-02 08:22:35', '2021-03-02 08:22:35'),
(151, 'App\\Models\\User', 196, 'eLrzd_mndNM:APA91bHFbt9NN9rFFxsdBg2gg7Q5R1O1LhzcNAr-2iVCKX8gs0ZpTZFQRkEXScU8Q51CgY8WIn-AbPKK1nT3_qw5AWStB8Aik9YsCr7zYJdb7CLK9GC3yyuL_-yEw5XHpy5TZq8_ATAC', 'd40ca28ad05d4da4a9e09b6b0dd889dc55f3335c8f42c1c4e91e3a42f48084a0', '[\"*\"]', NULL, '2021-03-02 10:01:28', '2021-03-02 10:01:28'),
(152, 'App\\Models\\User', 196, '55555', '045ba643ab34216f8a3cc7d593b13d4acf1187026750a73f1f8887d929240dd0', '[\"*\"]', NULL, '2021-03-02 11:27:47', '2021-03-02 11:27:47'),
(153, 'App\\Models\\User', 215, 'gghghgh', '5285fcd6ce06851577e3477295849577c490cb4dd116017d41079b6eec08fe7a', '[\"*\"]', NULL, '2021-03-07 15:21:21', '2021-03-07 15:21:21'),
(155, 'App\\Models\\User', 216, '12345', 'abbc900471afb2496c8508deefbf49d4e96984b1bd01ce1503f94f46fce58e64', '[\"*\"]', NULL, '2021-03-07 16:50:33', '2021-03-07 16:50:33'),
(156, 'App\\Models\\User', 216, '55555', '5044da7341088939645cae686df9ffdf6f8797bf925ef67297f56206e38d7b8e', '[\"*\"]', NULL, '2021-03-07 16:51:23', '2021-03-07 16:51:23'),
(157, 'App\\Models\\User', 215, '55555', '9b240656b818c08daa0df8371ba2745b0844c5592239b134aa0957b500662ec9', '[\"*\"]', NULL, '2021-03-08 08:26:02', '2021-03-08 08:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT '1',
  `exclusive` tinyint(1) NOT NULL DEFAULT '0',
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `price`, `in_stock`, `exclusive`, `publish_at`, `created_at`, `updated_at`, `brand_id`) VALUES
(28, 19, 1.500, 1, 0, NULL, '2021-03-02 17:03:17', '2021-03-02 17:03:17', NULL),
(29, 19, 1.250, 1, 0, NULL, '2021-03-03 04:03:40', '2021-03-03 04:03:40', NULL),
(30, 21, 0.750, 1, 0, NULL, '2021-03-03 04:20:18', '2021-03-03 04:20:18', NULL),
(31, 21, 0.750, 1, 0, NULL, '2021-03-03 04:25:05', '2021-03-03 04:25:05', NULL),
(32, 21, 1.000, 1, 0, NULL, '2021-03-03 04:28:25', '2021-03-03 04:28:25', NULL),
(33, 21, 1.000, 1, 0, NULL, '2021-03-03 04:30:24', '2021-03-03 04:30:24', NULL),
(34, 21, 1.250, 1, 0, NULL, '2021-03-03 04:33:20', '2021-03-03 04:33:20', NULL),
(35, 21, 0.750, 1, 0, NULL, '2021-03-03 04:35:25', '2021-03-03 04:35:25', NULL),
(36, 21, 0.750, 1, 0, NULL, '2021-03-03 04:37:57', '2021-03-03 04:37:57', NULL),
(37, 20, 1.500, 1, 0, NULL, '2021-03-03 04:41:38', '2021-03-03 04:41:38', NULL),
(38, 20, 1.500, 1, 0, NULL, '2021-03-03 04:41:58', '2021-03-03 04:41:58', NULL),
(39, 21, 1.500, 1, 0, NULL, '2021-03-03 04:43:07', '2021-03-03 04:43:07', NULL),
(40, 22, 0.250, 1, 0, NULL, '2021-03-03 04:52:20', '2021-03-03 04:52:20', NULL),
(41, 22, 0.250, 1, 0, NULL, '2021-03-03 04:54:28', '2021-03-03 04:54:28', NULL),
(42, 22, 0.250, 1, 0, NULL, '2021-03-03 04:55:49', '2021-03-03 04:55:49', NULL),
(43, 22, 0.250, 1, 0, NULL, '2021-03-03 04:56:37', '2021-03-03 04:56:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `name`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 'Basic', 'test', 5, '2021-02-09 08:55:18', '2021-02-09 08:55:18'),
(2, 4, 'YASER MOHAMMAD', 'test', 5, '2021-02-09 08:56:37', '2021-02-09 08:56:37'),
(3, 4, 'عادل حامد', 'عادل حامد', 5, '2021-02-09 09:17:04', '2021-02-09 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_tester`
--

CREATE TABLE `product_tester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tester_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `name`, `description`, `meta_description`, `meta_keywords`, `locale`) VALUES
(1, 1, 'تجربة', '<p>تجربة<br></p>', NULL, NULL, 'ar'),
(2, 1, 'Test', '<p>Test<br></p>', NULL, NULL, 'en'),
(3, 2, 'CHOCOLATE BOX', '<p>pistachio truffle 19gr</p><p>coconuts  truffle 12gr</p><p>coffe praline10g</p><p>salt caramel praline12gr</p><p>BOX(40pc:10each)<br></p>', NULL, NULL, 'ar'),
(4, 2, 'CHOCOLATE BOX', '<p>pistachio truffle 19gr</p><p>coconuts  truffle 12gr</p><p>coffe praline10g</p>salt caramel praline12gr', NULL, NULL, 'en'),
(5, 3, 'CHOCOLATE BOX', '<p>pistachio truffle 19gr</p><p>coconuts&nbsp; truffle 12gr</p><p>coffe praline10g</p><p>salt caramel praline12gr<br></p>', NULL, NULL, 'ar'),
(6, 3, 'CHOCOLATE BOX', '<p>pistachio truffle 19gr</p><p>coconuts&nbsp; truffle 12gr</p><p>coffe praline10g</p>salt caramel praline12gr', NULL, NULL, 'en'),
(7, 4, 'SWEET BOX', '<p>fudge berownies 35gr</p><p>rockey roads 25gr</p><p>box(72pc:36-36)<br></p>', NULL, NULL, 'ar'),
(8, 4, 'SWEET BOX', '<p>fudge berownies 35gr</p><p>rockey roads 25gr</p>box(72pc:36-36)', NULL, NULL, 'en'),
(9, 5, 'tropical fruit triffle', '<p>tropical fruit triffle (1pc 2kg)<br></p>', NULL, NULL, 'ar'),
(10, 5, 'tropical fruit triffle', '<p>tropical fruit triffle (1pc 2kg)</p>', NULL, NULL, 'en'),
(11, 6, 'tiramisu triffle', '<p>tiramisu triffle (1pc 2kg)<br></p>', NULL, NULL, 'ar'),
(12, 6, 'tiramisu triffle', '<p>tiramisu triffle (1pc 2kg)</p>', NULL, NULL, 'en'),
(13, 7, 'salted caramel trifle', '<p>salted caramel trifle(1pc 2kg)</p>', NULL, NULL, 'ar'),
(14, 7, 'salted caramel trifle', '<p>salted caramel trifle(1pc 2kg)<br></p>', NULL, NULL, 'en'),
(15, 8, 'test', '<p>test<br></p>', NULL, NULL, 'ar'),
(16, 8, 'test', '<p>test<br></p>', NULL, NULL, 'en'),
(17, 9, 'ساندوتش', '<p>ساندوتش<br></p>', NULL, NULL, 'ar'),
(18, 9, 'ساندوتش', '<p>sh<br></p>', NULL, NULL, 'en'),
(19, 10, 'ساندوتش', '<p>ساندوتش<br></p>', NULL, NULL, 'ar'),
(20, 10, 'ساندوتش', '<p>sdddfdfsh<br></p>', NULL, NULL, 'en'),
(21, 11, 'jkkj', '<p>klklkl</p>', NULL, NULL, 'ar'),
(22, 11, 'kklkl', '<p>kkllk</p>', NULL, NULL, 'en'),
(23, 12, 'برجر', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(24, 12, 'burgar', '<p>burgar<br></p>', NULL, NULL, 'en'),
(25, 13, 'برجر', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(26, 13, 'burgar', '<p>burgar<br></p>', NULL, NULL, 'en'),
(27, 14, 'برجر', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(28, 14, 'burgar', '<p>burgar<br></p>', NULL, NULL, 'en'),
(29, 15, 'برجر', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(30, 15, 'burgar', '<p>burgar<br></p>', NULL, NULL, 'en'),
(31, 16, 'برجر', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(32, 16, 'burgar', '<p>burgar<br></p>', NULL, NULL, 'en'),
(33, 17, 'ساندوتش', '<p>burgar<br></p>', NULL, NULL, 'ar'),
(34, 17, 'ساندوتش', '<p>burgar<br></p>', NULL, NULL, 'en'),
(35, 18, 'برجر', '<p>jkkjhljj<br></p>', NULL, NULL, 'ar'),
(36, 18, 'burgar', '<p>jkhjk<br></p>', NULL, NULL, 'en'),
(37, 19, 'برجر', '<p>برجربرجربرجربرجربرجربرجربرجربرجر<br></p>', NULL, NULL, 'ar'),
(38, 19, 'burgar', '<p>burgarburgarburgarburgarburgarburgarburgar<br></p>', NULL, NULL, 'en'),
(39, 20, 'برجر', '<p>برجربرجربرجربرجربرجربرجر<br></p>', NULL, NULL, 'ar'),
(40, 20, 'burgar', '<p>burgarburgarburgarburgar<br></p>', NULL, NULL, 'en'),
(41, 21, 'برجر', '<p>برجربرجربرجربرجربرجربرجربرجر<br></p>', NULL, NULL, 'ar'),
(42, 21, 'burgar', '<p>burgarburgarburgarburgarburgarburgar<br></p>', NULL, NULL, 'en'),
(43, 22, 'برجر', '<p>برجربرجربرجربرجربرجربرجربرجر<br></p>', NULL, NULL, 'ar'),
(44, 22, 'burgar', '<p>burgarburgarburgarburgarburgarburgar<br></p>', NULL, NULL, 'en'),
(45, 23, 'شاورما', '<p>شاورما شاورما شاورما شاورما<br></p>', NULL, NULL, 'ar'),
(46, 23, 'shawarmaa', '<p>shawarmaashawarmaashawarmaashawarmaashawarmaa<br></p>', NULL, NULL, 'en'),
(47, 24, 'شاورما', '<p>شاورما شاورما شاورما<br></p>', NULL, NULL, 'ar'),
(48, 24, 'shawarmaa', '<p>shawarmaa shawarmaa shawarmaa shawarmaa<br></p>', NULL, NULL, 'en'),
(49, 25, 'شاورما', 'شاورما شاورما<br>', NULL, NULL, 'ar'),
(50, 25, 'shawarmaa', '<p>shawarmaa shawarmaa shawarmaa shawarmaa shawarmaa<br></p>', NULL, NULL, 'en'),
(51, 26, 'فروله', 'فرواله', NULL, NULL, 'ar'),
(52, 26, 'فروله', '<p>فروله<br></p>', NULL, NULL, 'en'),
(53, 27, 'عصير', '<p>عصير<br></p>', NULL, NULL, 'ar'),
(54, 27, 'عصير', '<p>عصير<br></p>', NULL, NULL, 'en'),
(55, 28, 'دجاج فيليه', '<p>دجاج فيليه<br></p>', NULL, NULL, 'ar'),
(56, 28, 'Chicken Fillet', '<p>Chicken Fillet<br></p>', NULL, NULL, 'en'),
(57, 29, 'ماعون شاورما', '<p>ماعون شاورما<br></p>', NULL, NULL, 'ar'),
(58, 29, 'Shawarma plate', '<p>Shawarma plate<br></p>', NULL, NULL, 'en'),
(59, 30, 'شاورما لحم خبز', '<p>شاورما لحم خبز<br></p>', NULL, NULL, 'ar'),
(60, 30, 'Shawarma Meat Bread', '<p>Shawarma Meat Bread<br></p>', NULL, NULL, 'en'),
(61, 31, 'شاورما دجاج حبز', '<p>شاورما دجاج حبز<br></p>', NULL, NULL, 'ar'),
(62, 31, 'Shawarma Chicken  Bread', '<p>Shawarma Chicken&nbsp; Bread<br></p>', NULL, NULL, 'en'),
(63, 32, 'شاورما لحم صاج', '<p>شاورما لحم صاج<br></p>', NULL, NULL, 'ar'),
(64, 32, 'Shawarma Meat Saaj', '<p>Shawarma Meat Saaj<br></p>', NULL, NULL, 'en'),
(65, 33, 'شاورما دجاج صاج', '<p>شاورما دجاج صاج<br></p>', NULL, NULL, 'ar'),
(66, 33, 'Shawarma Chicken Saaj', '<p>Shawarma Chicken Saaj<br></p>', NULL, NULL, 'en'),
(67, 34, 'شاورما دوريتوز', '<p>شاورما دوريتوز<br></p>', NULL, NULL, 'ar'),
(68, 34, 'Shawarma Dorritos', '<p>Shawarma Dorritos<br></p>', NULL, NULL, 'en'),
(69, 35, 'كباب', '<p>كباب<br></p>', NULL, NULL, 'ar'),
(70, 35, 'kebab', '<p>kebab<br></p>', NULL, NULL, 'en'),
(71, 36, 'شيش طاووق', '<p>شيش طاووق<br></p>', NULL, NULL, 'ar'),
(72, 36, 'Sheesh Tawooq', '<p>Sheesh Tawooq<br></p>', NULL, NULL, 'en'),
(73, 37, 'قطع دجاج 6', '<p>قطع دجاج 6<br></p>', NULL, NULL, 'ar'),
(74, 37, '6pieces Nuggest', '<p>6pieces Nuggest<br></p>', NULL, NULL, 'en'),
(75, 38, 'قطع دجاج 6', '<p>قطع دجاج 6<br></p>', NULL, NULL, 'ar'),
(76, 38, '6pieces Nuggest', '<p>6pieces Nuggest<br></p>', NULL, NULL, 'en'),
(77, 39, '8 قطع دجاج', '<p>8 قطع دجاج<br></p>', NULL, NULL, 'ar'),
(78, 39, '8pieces Nuggest', '<p>8pieces Nuggest<br></p>', NULL, NULL, 'en'),
(79, 40, 'كوكا كولا', '<p>كوكا كولا<br></p>', NULL, NULL, 'ar'),
(80, 40, 'Coca Cola', '<p>Coca Cola<br></p>', NULL, NULL, 'en'),
(81, 41, 'بيبسي', '<p>بيبسي<br></p>', NULL, NULL, 'ar'),
(82, 41, 'pepsi', '<p>pepsi<br></p>', NULL, NULL, 'en'),
(83, 42, 'شاني', 'شاني', NULL, NULL, 'ar'),
(84, 42, 'shany', '<p>shany<br></p>', NULL, NULL, 'en'),
(85, 43, 'مارندا', 'شاني', NULL, NULL, 'ar'),
(86, 43, 'marenda', 'marenda', NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_codes`
--

CREATE TABLE `reset_password_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_tokens`
--

CREATE TABLE `reset_password_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'name', 'ar', 's:6:\"dezato\";', '2020-12-01 22:12:55', '2021-02-09 06:03:08'),
(2, 'name', 'en', 's:7:\"Otoraty\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(3, 'slider', NULL, 'N;', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(4, 'block1', 'ar', 's:1397:\"<h4>ارسل هديتك والباقي علينا</h4>\r\n                        <p>مع خيارات الهدايا اللامتناهية، قد تسأل نفسك لماذا يتوجب عليك شراء العطر؟ حسنا، العطر ليس مجرد\r\n                            منتج متعدد الاستخدامات -\r\n                            مثل انتعاش الملابس أو اضفاء جو رائع داخل المنزل. انها هدية تخاطب الإحساس\r\n                        </p>\r\n                        <p>اهداء العطر لشخص ما هو دليل على أنكم قد فكرتم مليا في شخصية المتلقي و في أذواقه. كما انه منتج\r\n                            سوف\r\n                            يرتديه بشكل يومي – ما\r\n                            سيجعله يفكر فيكم باستمرار. لهذا فان إهداء شخص ما قارورة عطر هو دليل على المودة.\r\n                        </p>\r\n                        <p>أخيرا و ليس آخرا، تعتبر العطور من الهدايا الخاصة لأنها منتجات لا تشترى في الكثير من الأحيان.\r\n                            انها\r\n                            إشارة على قيمة المتلقي\r\n                            لديكم.\r\n                        </p>\";', '2020-12-01 22:12:55', '2020-12-06 21:24:37'),
(5, 'block1', 'en', 's:1114:\"<h4> Send your gift and the rest to us </h4>\r\n                        <p> With the endless gifting options, you might ask yourself why should you buy perfume? Well, just not perfume\r\n                            Versatile product -\r\n                            Like refreshing clothes or adding a wonderful atmosphere inside the house. It\'s a gift that speaks to emotion\r\n    </p>\r\n                        <p> Giving a perfume to someone is evidence that you have thought carefully about the recipient\'s personality and tastes. He is also a producer\r\n                            Will\r\n                            Wears it on a daily basis - what\r\n                            It will make him think of you constantly. This is why gifting someone a bottle of perfume is a sign of affection.\r\n                        </p>\r\n                        <p> Last, but not least, perfumes are a special gift because they are products that are not often bought.\r\n                            It\r\n                            Signal on the value of the receiver\r\n                            You have.\r\n                        </p>\";', '2020-12-01 22:12:55', '2020-12-06 21:24:37'),
(6, 'block1-img', NULL, 'N;', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(7, 'block2', 'ar', 's:439:\"<h4> اترك علامة </h4>\r\n                        <p> هذا النص هو مثال لن يستبدل في نفس المساحة ، لقد تم توليد هذا النص من مولد النص\r\n                            العربى ،\r\n                            حيث يمكنك أن تولد مثل هذا\r\n                            إضافة إلى زيادة عدد الحروف التي يولدها التطبيق. <p>\";', '2020-12-01 22:12:55', '2020-12-06 21:24:37'),
(8, 'block2', 'en', 's:386:\"<h4> Leave tag </h4>\r\n                         <p> This text is an example that will not be replaced in the same space. This text was generated from the text generator\r\n                             Arabi ,\r\n                             Where you can generate it like this\r\n                             In addition to increasing the number of characters generated by the application. <p>\";', '2020-12-01 22:12:55', '2020-12-06 21:24:37'),
(9, 'block2-img', NULL, 'N;', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(10, 'instagram', NULL, 's:28:\"http://dezato.ecm.wna.net.kw\";', '2020-12-01 22:12:55', '2021-02-09 06:03:08'),
(11, 'snapchat', NULL, 's:20:\"https://snapchat.com\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(12, 'twitter', NULL, 's:19:\"https://twitter.com\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(13, 'apple', NULL, 's:1:\"#\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(14, 'android', NULL, 's:1:\"#\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(15, 'phone', NULL, 's:6:\"123456\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(16, 'email', NULL, 's:16:\"support@demo.com\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(17, 'copyright', 'ar', 's:29:\"شركه ويب اند ابذ\";', '2020-12-01 22:12:55', '2020-12-26 16:15:14'),
(18, 'copyright', 'en', 's:31:\"All right received for Otoraty.\";', '2020-12-01 22:12:55', '2020-12-01 22:12:55'),
(21, 'files', NULL, 'N;', '2020-12-23 11:39:30', '2020-12-23 11:39:30'),
(22, 'slider_link1', NULL, 's:18:\"https://google.com\";', '2021-01-31 09:39:32', '2021-02-09 06:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_companies`
--

CREATE TABLE `shipping_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_companies`
--

INSERT INTO `shipping_companies` (`id`, `created_at`, `updated_at`) VALUES
(1, '2021-01-27 11:14:29', '2021-01-27 11:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_company_translations`
--

CREATE TABLE `shipping_company_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_company_translations`
--

INSERT INTO `shipping_company_translations` (`id`, `shipping_company_id`, `name`, `locale`) VALUES
(1, 1, 'شركة الجنديل', 'ar'),
(2, 1, 'Al-Jandeel', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_prices`
--

CREATE TABLE `shipping_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_company_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `first_price` decimal(10,3) DEFAULT NULL,
  `second_price` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_prices`
--

INSERT INTO `shipping_prices` (`id`, `shipping_company_id`, `country_id`, `first_price`, `second_price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 50.000, 50.000, '2021-01-27 11:14:29', '2021-01-27 11:14:29'),
(2, 1, 7, 10.000, 10.000, '2021-01-27 11:14:29', '2021-01-27 11:14:29'),
(3, 1, 10, 5.000, 5.000, '2021-01-27 11:14:29', '2021-01-27 11:14:29'),
(4, 1, 11, 10.000, 10.000, '2021-01-27 11:14:29', '2021-01-27 11:14:29'),
(5, 1, 15, 5.000, 5.000, '2021-01-27 11:14:29', '2021-01-27 11:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,3) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `price`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '50', 50.000, 8, '2021-02-09 09:42:10', '2021-02-09 09:42:10'),
(2, '5', 10.000, 11, '2021-02-23 12:02:15', '2021-02-23 12:02:15'),
(3, 'small', 7.000, 10, '2021-02-24 15:15:50', '2021-02-24 15:15:50'),
(4, 'small', 5.000, 12, '2021-02-24 15:29:46', '2021-02-24 15:29:46'),
(5, 'medium', 7.000, 12, '2021-02-24 15:29:46', '2021-02-24 15:29:46'),
(6, 'large', 9.000, 12, '2021-02-24 15:29:46', '2021-02-24 15:29:46'),
(7, 'small', 5.000, 13, '2021-02-24 15:31:02', '2021-02-24 15:31:02'),
(8, 'medium', 7.000, 13, '2021-02-24 15:31:02', '2021-02-24 15:31:02'),
(9, 'large', 9.000, 13, '2021-02-24 15:31:02', '2021-02-24 15:31:02'),
(10, 'small', 7.000, 14, '2021-02-24 15:32:36', '2021-02-24 15:32:36'),
(11, 'medium', 10.000, 14, '2021-02-24 15:32:36', '2021-02-24 15:32:36'),
(12, 'small', 5.000, 15, '2021-02-24 15:33:47', '2021-02-24 15:33:47'),
(13, 'small', 5.000, 16, '2021-02-24 15:34:36', '2021-02-24 15:34:36'),
(14, 'small', 5.000, 17, '2021-02-24 15:51:54', '2021-02-24 15:51:54'),
(15, 'small', 5.000, 18, '2021-02-24 15:53:13', '2021-02-24 15:53:13'),
(16, 'small', 5.000, 19, '2021-03-02 06:07:51', '2021-03-02 06:07:51'),
(17, 'medium', 5.000, 19, '2021-03-02 06:07:51', '2021-03-02 06:07:51'),
(18, 'large', 7.000, 19, '2021-03-02 06:07:51', '2021-03-02 06:07:51'),
(19, 'small', 3.000, 20, '2021-03-02 10:18:25', '2021-03-02 10:18:25'),
(20, 'medium', 5.000, 20, '2021-03-02 10:18:25', '2021-03-02 10:18:25'),
(21, 'large', 7.000, 20, '2021-03-02 10:18:25', '2021-03-02 10:18:25'),
(22, 'small', 3.000, 21, '2021-03-02 10:20:06', '2021-03-02 10:20:06'),
(23, 'medium', 5.000, 21, '2021-03-02 10:20:06', '2021-03-02 10:20:06'),
(24, 'large', 7.000, 21, '2021-03-02 10:20:06', '2021-03-02 10:20:06'),
(25, 'small', 2.000, 22, '2021-03-02 10:21:18', '2021-03-02 10:21:18'),
(26, 'medium', 3.000, 22, '2021-03-02 10:21:18', '2021-03-02 10:21:18'),
(27, 'large', 5.000, 22, '2021-03-02 10:21:18', '2021-03-02 10:21:18'),
(28, 'small', 4.000, 23, '2021-03-02 10:27:41', '2021-03-02 10:27:41'),
(29, 'medium', 7.000, 23, '2021-03-02 10:27:41', '2021-03-02 10:27:41'),
(30, 'small', 3.000, 24, '2021-03-02 10:28:45', '2021-03-02 10:28:45'),
(31, 'small', 3.000, 25, '2021-03-02 10:29:56', '2021-03-02 10:29:56'),
(32, 'small', 7.000, 26, '2021-03-02 10:32:24', '2021-03-02 10:32:24'),
(33, 'small', 5.000, 27, '2021-03-02 10:33:26', '2021-03-02 10:33:26'),
(34, 'small', 1.250, 29, '2021-03-03 04:03:40', '2021-03-03 04:03:40'),
(35, 'large', 1.500, 29, '2021-03-03 04:03:40', '2021-03-03 04:03:40'),
(36, 'small', 0.750, 30, '2021-03-03 04:20:18', '2021-03-03 04:20:18'),
(37, 'small', 0.750, 31, '2021-03-03 04:25:05', '2021-03-03 04:25:05'),
(38, 'small', 1.000, 32, '2021-03-03 04:28:25', '2021-03-03 04:28:25'),
(39, 'small', 1.000, 33, '2021-03-03 04:30:24', '2021-03-03 04:30:24'),
(40, 'small', 1.250, 34, '2021-03-03 04:33:20', '2021-03-03 04:33:20'),
(41, 'small', 0.750, 35, '2021-03-03 04:35:25', '2021-03-03 04:35:25'),
(42, 'small', 0.750, 36, '2021-03-03 04:37:57', '2021-03-03 04:37:57'),
(43, 'small', 1.500, 38, '2021-03-03 04:41:58', '2021-03-03 04:41:58'),
(44, 'small', 1.500, 39, '2021-03-03 04:43:07', '2021-03-03 04:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `country_id`, `active`, `created_at`, `updated_at`) VALUES
(2, 4, 1, '2020-12-23 15:03:48', '2020-12-23 15:03:48'),
(3, 4, 1, '2020-12-23 16:10:30', '2020-12-23 16:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `name`, `description`, `meta_description`, `meta_keywords`, `locale`) VALUES
(3, 2, 'بانر', '<p>بانر</p>', NULL, NULL, 'ar'),
(4, 2, 'banner', '<p>banner</p>', NULL, NULL, 'en'),
(5, 3, 'Adel', '<p><b>Fghgffd</b></p>', 'Ffjhgfffd', NULL, 'ar'),
(6, 3, 'Ghgf', '<p>Bggggg</p>', NULL, NULL, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_files`
--

CREATE TABLE `temporary_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temporary_files`
--

INSERT INTO `temporary_files` (`id`, `token`, `collection`, `created_at`, `updated_at`) VALUES
(23, 'er8Px3Y2J29EYqRJgr4Ya4eN7MBG8lLqMj6MAwNGZgjXUxzgEGINvbrmhdLq', 'default', '2020-12-02 17:10:20', '2020-12-02 17:10:20'),
(30, 'gXP0WuSCVYU31lowZqpRAVrYYJ3zmRuXiYaW6PkvfpgH54vMTpsVJCY2vOoW', 'default', '2020-12-02 17:40:31', '2020-12-02 17:40:31'),
(31, '22kvCSOhheP1obs3o04XminyqMK7A3N4qlaL4ZMoRKg2ktC20HZ00m4MzxSo', 'default', '2020-12-02 17:43:02', '2020-12-02 17:43:02'),
(34, 'KHr1RQpCXys0zbYOzhgf1HnoaLNpRPR5r8IoNFcBBrArExxjKx7VvkGM7Tfu', 'default', '2020-12-03 08:59:35', '2020-12-03 08:59:35'),
(35, 'DSOOdVPdCnGYQXnXToDWayoV2hVgqwnz9HwrIqzs5xafx8fprHqlmR8io2CS', 'default', '2020-12-03 09:03:06', '2020-12-03 09:03:06'),
(37, 'Yv3K7zEwyen6XZ89m9wRU9icFlDPyabqc9XqBQfImsD99ciX5pxt7USE8BE4', 'default', '2020-12-03 09:16:23', '2020-12-03 09:16:23'),
(38, '0SWTEGnYo7oMCSdolpmqgaJXpLUERkbYgQWwG2LpNAGnHS0bw57N9ge3uFMZ', 'default', '2020-12-03 09:19:57', '2020-12-03 09:19:57'),
(43, 'ZwSKFtUpn0Q8GBeWlDowLg5fCpZLZDAlz4INYxkR6hRYJC3nbwlcbZst7kIx', 'default', '2020-12-03 09:43:49', '2020-12-03 09:43:49'),
(54, 'cqlL4EozEheR42RNklMrJWUgciHHVk4mDGQE04DBxPMHVITmEvSr3seoiOei', 'default', '2020-12-03 11:25:44', '2020-12-03 11:25:44'),
(169, 'p1qyDnAHpVze88cqik4V4r7b4KKHNUYThQMeI16mPumJCj23J0pXKNPi1hlf', 'default', '2020-12-05 05:08:32', '2020-12-05 05:08:32'),
(240, 'jIYOuJp7vRco9uDciyoidnvg4kk5RDqfHCaDc6RO9aT3lwXD7bVahLZQYazj', 'default', '2020-12-05 22:19:30', '2020-12-05 22:19:30'),
(264, 'aR53s6stB9EuLmaIHbpC7uXTbq6wMcaUoBuZ8z6AanRnVUbHiXjRrnbIgpub', 'default', '2020-12-05 23:23:04', '2020-12-05 23:23:04'),
(293, 'GhZcCQ6uVEclGCCdroQa4x2SSbDKM8IXyLt1GHmdNPGQy7SdFJojYlY7pvoJ', 'default', '2020-12-10 18:01:22', '2020-12-10 18:01:22'),
(294, 'x2yTF9cIX1Wlco6pW31YmfaWel1Lz2OucU9MBcgJMUe3auZMGY28WuGZV1Rl', 'default', '2020-12-11 14:24:21', '2020-12-11 14:24:21'),
(295, '5fBGt4ej8lNOnKafShYtWASVaY7AhCNnHABfxNrIv7qDqK8o6dDhQ7ruK0MJ', 'default', '2020-12-11 14:26:45', '2020-12-11 14:26:45'),
(296, '37TsLLNhsK8XUlxUEAGs9i68bPsTP3Jf2OF50ST2Bv4pukrgQCJCDoknPbIL', 'default', '2020-12-11 14:37:45', '2020-12-11 14:37:45'),
(297, 'bbK82giLQMxvibrwB9XXXJkCv2J0oHH3qAQNk8HyE9EfZV92B1bSYNjmFjnQ', 'default', '2020-12-11 14:38:21', '2020-12-11 14:38:21'),
(299, 'SdXbV5PYCkp4o5SiQ52aOxVbEvwfq7tMbG7I5qdPzvmxQmh0LSSNZepbFYkx', 'default', '2020-12-11 15:01:34', '2020-12-11 15:01:34'),
(300, 'anqGcyJjffGfybzlylCp9dZh1PfyRdpECCuoGMMhNnAh4r5BoIYFQy4hfsjG', 'default', '2020-12-11 15:01:55', '2020-12-11 15:01:55'),
(301, 'PpBNXMH66txLAokK1Mlz3XIIN5yg8QvyEuquIV1BUeXDeMlGUTKW6t1gFKtZ', 'default', '2020-12-11 15:04:05', '2020-12-11 15:04:05'),
(302, 'hYJk2qKp99E9sResegU7iLkGeyF9gGd6xQoxAsu96p6zfmGs02NNODHIQoP2', 'default', '2020-12-11 15:04:25', '2020-12-11 15:04:25'),
(317, '6XDycadFwNAlAOTXSQ9iemOGkfh6i7mIwrOpXRk6Hzjn5RZfsvSVIJmEE0jp', 'default', '2020-12-11 16:26:27', '2020-12-11 16:26:27'),
(340, 'YZSRXurd6gTmTiYSG25oRcVLHVNfg2gnnKAwDIqfNarraWtmvqXf7BT22HuR', 'default', '2020-12-11 18:56:44', '2020-12-11 18:56:44'),
(363, 'GCHlhg0gg66EURtL8JexTEd97oLaUjFJosoe6MNt1lkpiRWAF7TZdVsXolVp', 'default', '2020-12-12 10:17:32', '2020-12-12 10:17:32'),
(449, 'n5lbx0qtAEqMpMJxocHoNGBJTPdCbf18UNsjEVwBFxNEAvGfw3Yjz4xkGg91', 'default', '2020-12-13 07:51:31', '2020-12-13 07:51:31'),
(450, '9dmdErryYnqixHttRnTdMmVWKKVralSguapmT7mVb1cjMkTgBEtYwwBur3Ei', 'default', '2020-12-13 07:52:31', '2020-12-13 07:52:31'),
(451, 'rpPv21Qhw9VFAutNi7RRAietINAv9VNc6n8KAlBfXCbeZXpebfSfbmKapzAy', 'default', '2020-12-13 07:53:36', '2020-12-13 07:53:36'),
(452, 'o5Ps1BaFsWclYcI3rzJ5OFnOcljzVsxk0KPaz4akNF9G8vtc1NlNnqhAroam', 'default', '2020-12-13 07:54:59', '2020-12-13 07:54:59'),
(453, 'rdsvsDfuwVQgigzD3GleezcEChOlmQxcaSfwcjNYis42jJk2VCfyrkJsABol', 'default', '2020-12-13 08:00:06', '2020-12-13 08:00:06'),
(574, 'gAMhNK6YrVCqqqPbAyBI3KPJ2dxYPZO5uk6ZUBzA5K2vxutFEcBiUw8UnWTC', 'default', '2020-12-13 20:40:56', '2020-12-13 20:40:56'),
(575, 'l1W08nyzj0tJrYZMXOwNgVoXMNeMvddJ9OBqZBywVxN8uMDOXo9ipRGoXdfr', 'default', '2020-12-13 20:41:02', '2020-12-13 20:41:02'),
(604, 'xNhTrghVPZfN8M1oXj9GLene0tzEk1K2kggeVeg54nShD2bnBiZ8Jj3hVIeP', 'default', '2020-12-14 10:14:37', '2020-12-14 10:14:37'),
(605, 'G94OOb189xNdREqu5Hvv8uJ9kyRQbbTEVLhUiGgH7Gk5JVzt0utycmGx76Bu', 'default', '2020-12-14 10:14:50', '2020-12-14 10:14:50'),
(606, 'kxUfdpSC6oec9eGHfWFNdh518l71osv3nUYvVmnzFaPpXwWYeTiF4BK9jrao', 'default', '2020-12-14 10:15:04', '2020-12-14 10:15:04'),
(607, 'Y7QNrIFT4mmh8gl01cwZjaaEbstT8yN2U32n7509f4CYNHkYsc3RelguaIYj', 'default', '2020-12-14 10:15:49', '2020-12-14 10:15:49'),
(612, 'mgwhVjj96sc1OapaDBnODZLLuqQ4SQeIHez9VT5zqjMvQ82bCxCcVWhvKHOa', 'slider', '2021-02-01 03:58:30', '2021-02-01 03:58:30'),
(613, 'ODadufweR6rWK4DVQLYRoegIABq3JZqCtSGOZpKTo1aOHxUwLm0wFo5MmDjb', 'default', '2021-02-08 10:25:02', '2021-02-08 10:25:02'),
(614, '9v9vorbTqC15cJaWutFWxtnKDIxnuxim2gMNUz59wjp3EpSsAEwoFV9j0Yxo', 'default', '2021-02-08 10:25:31', '2021-02-08 10:25:31'),
(615, 'rtFRRQUMjwGYY9AgVKBmU0IGFLgsoLzo6f01EmviO992ef4cy54xKYal9cF1', 'default', '2021-02-08 10:26:11', '2021-02-08 10:26:11'),
(632, 'rI2mTMgCbZ0byVfEZ1tPT1GJAsvgTC8ULYaPdYyzwkFZg1W5bjehZxySWKdx', 'default', '2021-02-23 06:24:51', '2021-02-23 06:24:51'),
(678, 'TB560ChJ3D677kDpUxzNcM0zFhdKky58oVh3nF7B1vnmXbmQ7T8sUphBaBww', 'default', '2021-03-03 04:51:07', '2021-03-03 04:51:07'),
(679, 'AMkKtuCMVWjhEqj84Z8iTza26TUTRSuLKzFKeUkTiaQdtC3SK8v3kKGqhHLQ', 'default', '2021-03-03 04:53:38', '2021-03-03 04:53:38'),
(680, 'FUtIRxHOc0LiLcwyvojhJEN1j5MHP0WtkvWNmHKb2Ih5GtMmQzvx0AI7RXoa', 'default', '2021-03-03 04:55:37', '2021-03-03 04:55:37'),
(681, 'Orzdynjx796HIA5CrJkMZOiwE159rPBBjcANdezEh5mSvowUtzKmID9ccwIV', 'default', '2021-03-03 04:56:04', '2021-03-03 04:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

CREATE TABLE `testers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tester_translations`
--

CREATE TABLE `tester_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tester_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `phone`, `phone_verified_at`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `country_id`) VALUES
(1, 'Admin', 'admin', 'admin@wna.net.kw', '62222012', NULL, '2020-12-01 22:12:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FzEcIQ92Qb0Ts5aVw9Pii6OZAEK2TqkLbR5TXNjWVW09vcyPWv05bJItUFY8', '2020-12-01 22:12:55', '2020-12-01 22:12:55', NULL),
(213, 'Admin', NULL, 'adin@adel.com', '454-555-8214', NULL, NULL, NULL, NULL, '2021-03-07 06:27:34', '2021-03-07 06:27:34', NULL),
(214, 'malak alid', 'customer', 'mm_alid@hotmail.com', NULL, NULL, NULL, '$2y$10$dfxBgZNvnE9NzDFp7UXj2eBbNF7GM5NXr0MWmSEvtbQ6C9MwW88ou', NULL, '2021-03-07 07:34:51', '2021-03-07 07:34:51', NULL),
(216, 'Ahmed Elenany', 'customer', 'a.showqy@gmail.com', '12345678', NULL, NULL, '$2y$10$7/4aM8m3LYGJecQHY2/OfedDHMdF2voShD3bHrRSgDl.yBoY6DLIq', NULL, '2021-03-07 16:50:33', '2021-03-07 16:50:33', NULL),
(217, 'yo3anwagef', 'admin', 'yo3anwagef@wna.net.kw', '00000000', NULL, NULL, '$2y$10$aS7zLfJJdZJVxzVqYeCLpuYmZOE8ieolUhiR37rJCP1.Ut7FxkSGC', NULL, '2021-03-09 03:49:46', '2021-03-09 03:49:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`),
  ADD KEY `addresses_city_id_foreign` (`city_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_governorate_id_unique` (`governorate_id`);

--
-- Indexes for table `area_translations`
--
ALTER TABLE `area_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `area_translations_area_id_locale_unique` (`area_id`,`locale`) USING BTREE,
  ADD KEY `area_translations_locale_index` (`locale`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_translations_brand_id_locale_unique` (`brand_id`,`locale`),
  ADD KEY `brand_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order` (`order`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_country_id_foreign` (`country_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_translations_city_id_locale_unique` (`city_id`,`locale`),
  ADD KEY `city_translations_locale_index` (`locale`);

--
-- Indexes for table `classifications`
--
ALTER TABLE `classifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order` (`order`),
  ADD KEY `classifications_parent_id_foreign` (`parent_id`),
  ADD KEY `classifications_country_id_foreign` (`country_id`);

--
-- Indexes for table `classification_product`
--
ALTER TABLE `classification_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classification_product_classification_id_foreign` (`classification_id`),
  ADD KEY `classification_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `classification_translations`
--
ALTER TABLE `classification_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classification_translations_locale_index` (`locale`) USING BTREE,
  ADD KEY `classification_translations_classification_id_locale_unique` (`classification_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection_product`
--
ALTER TABLE `collection_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_product_collection_id_foreign` (`collection_id`),
  ADD KEY `collection_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `collection_translations`
--
ALTER TABLE `collection_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `collection_translations_collection_id_locale_unique` (`collection_id`,`locale`),
  ADD KEY `collection_translations_locale_index` (`locale`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_is_default_unique` (`is_default`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_translations_country_id_locale_unique` (`country_id`,`locale`),
  ADD KEY `country_translations_locale_index` (`locale`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupon_translations_coupon_id_locale_unique` (`coupon_id`,`locale`),
  ADD KEY `coupon_translations_locale_index` (`locale`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currencies_is_default_unique` (`is_default`);

--
-- Indexes for table `currency_exchange_rates`
--
ALTER TABLE `currency_exchange_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_exchange_rates_currency_from_foreign` (`currency_from`),
  ADD KEY `currency_exchange_rates_currency_to_foreign` (`currency_to`);

--
-- Indexes for table `currency_translations`
--
ALTER TABLE `currency_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currency_translations_currency_id_locale_unique` (`currency_id`,`locale`),
  ADD KEY `currency_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governorate_translations`
--
ALTER TABLE `governorate_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `governorate_translations_governorate_id_locale_unique` (`governorate_id`,`locale`) USING BTREE,
  ADD KEY `governorate_translations_locale_index` (`locale`) USING BTREE;

--
-- Indexes for table `home_offers`
--
ALTER TABLE `home_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_offer_translations`
--
ALTER TABLE `home_offer_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_translations`
--
ALTER TABLE `location_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_translations_location_id_locale_unique` (`location_id`,`locale`) USING BTREE,
  ADD KEY `location_translations_locale_index` (`locale`) USING BTREE;

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milks`
--
ALTER TABLE `milks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_translations`
--
ALTER TABLE `milk_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `milk_translations_milk_id_locale_unique` (`milk_id`,`locale`) USING BTREE,
  ADD KEY `milk_translations_locale_index` (`locale`) USING BTREE;

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_target_type_target_id_index` (`target_type`,`target_id`);

--
-- Indexes for table `offer_translations`
--
ALTER TABLE `offer_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offer_translations_offer_id_locale_unique` (`offer_id`,`locale`),
  ADD KEY `offer_translations_locale_index` (`locale`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_coupon_id_foreign` (`coupon_id`),
  ADD KEY `orders_shipping_company_id_foreign` (`shipping_company_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_item_type_item_id_index` (`item_type`,`item_id`),
  ADD KEY `order_items_size_id_foreign` (`size_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tester`
--
ALTER TABLE `product_tester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tester_tester_id_foreign` (`tester_id`),
  ADD KEY `product_tester_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `reset_password_codes`
--
ALTER TABLE `reset_password_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_password_codes_username_index` (`username`);

--
-- Indexes for table `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_password_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_locale_unique` (`key`,`locale`),
  ADD KEY `settings_key_index` (`key`),
  ADD KEY `settings_locale_index` (`locale`);

--
-- Indexes for table `shipping_companies`
--
ALTER TABLE `shipping_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_company_translations`
--
ALTER TABLE `shipping_company_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipping_company_translations_shipping_company_id_locale_unique` (`shipping_company_id`,`locale`),
  ADD KEY `shipping_company_translations_locale_index` (`locale`);

--
-- Indexes for table `shipping_prices`
--
ALTER TABLE `shipping_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_prices_shipping_company_id_foreign` (`shipping_company_id`),
  ADD KEY `shipping_prices_country_id_foreign` (`country_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizes_product_id_foreign` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_files`
--
ALTER TABLE `temporary_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testers`
--
ALTER TABLE `testers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tester_translations`
--
ALTER TABLE `tester_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tester_translations_tester_id_locale_unique` (`tester_id`,`locale`),
  ADD KEY `tester_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `area_translations`
--
ALTER TABLE `area_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `brand_translations`
--
ALTER TABLE `brand_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `classifications`
--
ALTER TABLE `classifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `classification_product`
--
ALTER TABLE `classification_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classification_translations`
--
ALTER TABLE `classification_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `collection_product`
--
ALTER TABLE `collection_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_translations`
--
ALTER TABLE `collection_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `currency_exchange_rates`
--
ALTER TABLE `currency_exchange_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `currency_translations`
--
ALTER TABLE `currency_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `governorates`
--
ALTER TABLE `governorates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `governorate_translations`
--
ALTER TABLE `governorate_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_offers`
--
ALTER TABLE `home_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_offer_translations`
--
ALTER TABLE `home_offer_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location_translations`
--
ALTER TABLE `location_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=881;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `milks`
--
ALTER TABLE `milks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `milk_translations`
--
ALTER TABLE `milk_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offer_translations`
--
ALTER TABLE `offer_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_tester`
--
ALTER TABLE `product_tester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `reset_password_codes`
--
ALTER TABLE `reset_password_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shipping_companies`
--
ALTER TABLE `shipping_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_company_translations`
--
ALTER TABLE `shipping_company_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_prices`
--
ALTER TABLE `shipping_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temporary_files`
--
ALTER TABLE `temporary_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=683;

--
-- AUTO_INCREMENT for table `testers`
--
ALTER TABLE `testers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tester_translations`
--
ALTER TABLE `tester_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD CONSTRAINT `brand_translations_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
