-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 07:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PBS`
--

-- --------------------------------------------------------

--
-- Table structure for table `agetype`
--

CREATE TABLE `agetype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` enum('Under 18','Between 18 - 25','Above 25') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agetype`
--

INSERT INTO `agetype` (`id`, `age`, `created_at`, `updated_at`) VALUES
(1, 'Under 18', NULL, NULL),
(2, 'Between 18 - 25', NULL, NULL),
(3, 'Above 25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aprovels`
--

CREATE TABLE `aprovels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `projectID` bigint(20) UNSIGNED NOT NULL,
  `aprovel` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aprovels`
--

INSERT INTO `aprovels` (`id`, `userID`, `projectID`, `aprovel`, `created_at`, `updated_at`) VALUES
(35, 1, 27, 1, '2019-11-02 15:30:34', '2019-11-02 15:30:34'),
(36, 1, 3, 0, '2020-10-29 05:10:23', '2020-10-29 05:10:23'),
(37, 1, 9, 0, '2020-10-29 05:10:29', '2020-10-29 05:10:29'),
(38, 1, 33, 0, '2020-10-29 05:10:36', '2020-10-29 05:10:36'),
(39, 1, 32, 0, '2020-10-29 05:10:38', '2020-10-29 05:10:38'),
(40, 1, 31, 0, '2020-10-29 05:10:40', '2020-10-29 05:10:40'),
(41, 1, 28, 0, '2020-10-29 05:10:42', '2020-10-29 05:10:42'),
(42, 1, 26, 0, '2020-10-29 05:10:46', '2020-10-29 05:10:46'),
(43, 1, 25, 0, '2020-10-29 05:10:47', '2020-10-29 05:10:47'),
(44, 1, 24, 0, '2020-10-29 05:10:50', '2020-10-29 05:10:50'),
(45, 1, 23, 0, '2020-10-29 05:10:53', '2020-10-29 05:10:53'),
(46, 1, 21, 0, '2020-10-29 05:10:55', '2020-10-29 05:10:55'),
(47, 1, 19, 0, '2020-10-29 05:10:58', '2020-10-29 05:10:58'),
(48, 1, 16, 0, '2020-10-29 05:11:00', '2020-10-29 05:11:00'),
(49, 1, 15, 0, '2020-10-29 05:11:02', '2020-10-29 05:11:02'),
(50, 1, 14, 0, '2020-10-29 05:11:04', '2020-10-29 05:11:04'),
(51, 1, 10, 0, '2020-10-29 05:11:07', '2020-10-29 05:11:07'),
(52, 1, 13, 0, '2020-10-29 05:11:11', '2020-10-29 05:11:11'),
(53, 1, 12, 0, '2020-10-29 05:11:12', '2020-10-29 05:11:12'),
(54, 1, 1, 1, '2020-11-01 02:40:34', '2020-11-01 02:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projetID` bigint(20) UNSIGNED NOT NULL,
  `filetype` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `projetID`, `filetype`, `filename`, `created_at`, `updated_at`) VALUES
(38, 32, 1, '028faecf.pdf', '2019-12-03 12:11:58', '2019-12-03 12:11:58'),
(39, 33, 1, 'Online Application for painters.pdf', '2020-10-17 17:53:06', '2020-10-17 17:53:06'),
(40, 34, 2, 'wallpaper.jpg', '2020-10-29 05:15:55', '2020-10-29 05:15:55'),
(41, 34, 1, 'Screen Shot 2020-07-30 at 9.25.56 AM.png', '2020-10-29 05:16:04', '2020-10-29 05:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `attachmentstype`
--

CREATE TABLE `attachmentstype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('ID card','Presentation','Other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachmentstype`
--

INSERT INTO `attachmentstype` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'ID card', NULL, NULL),
(2, 'Presentation', NULL, NULL),
(3, 'Other', NULL, NULL);

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
(1, '2019_10_26_041421_create_usertype_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2019_10_25_172755_create_projects_table', 3),
(5, '2019_10_26_052711_create_rating_table', 4),
(6, '2019_10_25_172834_create_aprovels_table', 5),
(7, '2014_10_12_100000_create_password_resets_table', 6),
(8, '2019_10_26_133616_create_attachmentstype_table', 7),
(9, '2019_10_26_133526_create_attachments_table', 8),
(10, '2019_10_26_141030_add_filename_to_attachments', 9),
(11, '2019_10_31_081825_add_rate2_to_rating', 10),
(12, '2019_10_31_081834_add_rate3_to_rating', 10),
(13, '2019_10_31_081841_add_rate4_to_rating', 10),
(14, '2019_10_31_081848_add_rate5_to_rating', 10),
(15, '2019_11_02_015800_create_agetype_table', 11),
(16, '2019_11_02_020647_create__countries_table', 11),
(36, '2019_11_02_021259_add_patented_to_projects', 12),
(37, '2019_11_02_021410_add_specialization_to_projects', 13),
(38, '2019_11_02_050846_add_nationality_to_projects', 13),
(39, '2019_11_02_050911_add_contrary_to_projects', 13),
(40, '2019_11_02_063547_add_pbsid_to_projects', 13),
(41, '2019_11_02_150210_add_valuechange_to_projects', 13),
(42, '2019_11_02_151026_drop_projects_table', 13),
(43, '2020_11_08_043022_create_project2020_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project2020`
--

CREATE TABLE `project2020` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `govid` int(11) NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `saudi_owner` tinyint(1) NOT NULL,
  `employess_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incomes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropdown9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkbox1` tinyint(1) NOT NULL,
  `checkbox2` tinyint(1) NOT NULL,
  `checkbox3` tinyint(1) NOT NULL,
  `checkbox4` tinyint(1) NOT NULL,
  `checkbox5` tinyint(1) NOT NULL,
  `checkbox6` tinyint(1) NOT NULL,
  `checkbox7` tinyint(1) NOT NULL,
  `checkbox8` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project2020`
--

INSERT INTO `project2020` (`id`, `govid`, `name_ar`, `name_en`, `age`, `saudi_owner`, `employess_num`, `incomes`, `username`, `job_title`, `mobile`, `email`, `dropdown1`, `dropdown2`, `dropdown3`, `dropdown4`, `dropdown5`, `dropdown6`, `dropdown7`, `dropdown8`, `dropdown9`, `checkbox1`, `checkbox2`, `checkbox3`, `checkbox4`, `checkbox5`, `checkbox6`, `checkbox7`, `checkbox8`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2345678, 'تجربة', 'test', 3, 1, '5 موظفين أو أقل', 'من 40 مليون ريال إلى 200 مليون ريال', 'تجربة', 'تجربة', 123, 'mmamar@monshaat.gov.sa', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية حققت بعض الأرقام المالية المشجعة', 'تجربة', 1, 0, 0, 1, 0, 0, 0, 0, NULL, '2020-11-08 02:32:22', '2020-11-08 02:32:22'),
(2, 0, 'TEST', 'TEST', 3, 1, '5 موظفين أو أقل', '3 ملايين ريال أو أقل', '123', '123', 123, '1@hotmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', '123', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري لم يحقق أية أرقام مالية مثبتة حتى الآن', '1', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية لم تحقق أية أرقام مالية مثبتة حتى الآن', '1', 1, 0, 0, 0, 0, 0, 0, 0, NULL, '2020-11-08 02:32:22', '2020-11-08 02:32:22'),
(3, 1001, 'google', 'google', 3, 1, '5 موظفين أو أقل', 'من 3 ملايين إلى 40 مليون ريال', 'gooole', 'google', 123, 'yaser@gmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', 'ffff', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى جميع الأنشطة التجارية في السعودية', 'المنشأة لديها نموذج عمل تجاري زاد من ربحية المنشأة', 'ffff', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة ليس لديها ابتكار واضح في بيئة عملها و/أو عملياتها الداخلية', 'ffff', 1, 0, 0, 1, 0, 0, 0, 1, NULL, '2020-11-08 02:32:22', '2020-11-08 02:32:22'),
(4, 2345678, 'تجربة', 'test', 3, 1, '5 موظفين أو أقل', 'من 40 مليون ريال إلى 200 مليون ريال', 'تجربة', 'تجربة', 123, 'mmamar@monshaat.gov.sa', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية حققت بعض الأرقام المالية المشجعة', 'تجربة', 1, 0, 0, 1, 0, 0, 0, 0, NULL, '2020-11-08 08:41:18', '2020-11-08 08:41:18'),
(5, 0, 'TEST', 'TEST', 3, 1, '5 موظفين أو أقل', '3 ملايين ريال أو أقل', '123', '123', 123, '1@hotmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', '123', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري لم يحقق أية أرقام مالية مثبتة حتى الآن', '1', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية لم تحقق أية أرقام مالية مثبتة حتى الآن', '1', 1, 0, 0, 0, 0, 0, 0, 0, NULL, '2020-11-08 08:41:18', '2020-11-08 08:41:18'),
(6, 1001, 'google', 'google', 3, 1, '5 موظفين أو أقل', 'من 3 ملايين إلى 40 مليون ريال', 'gooole', 'google', 123, 'yaser@gmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', 'ffff', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى جميع الأنشطة التجارية في السعودية', 'المنشأة لديها نموذج عمل تجاري زاد من ربحية المنشأة', 'ffff', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة ليس لديها ابتكار واضح في بيئة عملها و/أو عملياتها الداخلية', 'ffff', 1, 0, 0, 1, 0, 0, 0, 1, NULL, '2020-11-08 08:41:18', '2020-11-08 08:41:18'),
(7, 2345678, 'تجربة', 'test', 3, 1, '5 موظفين أو أقل', 'من 40 مليون ريال إلى 200 مليون ريال', 'تجربة', 'تجربة', 123, 'mmamar@monshaat.gov.sa', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري حقق بعض الأرقام المالية المشجعة', 'تجربة', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية حققت بعض الأرقام المالية المشجعة', 'تجربة', 1, 0, 0, 1, 0, 0, 0, 0, NULL, '2020-11-09 04:08:18', '2020-11-09 04:08:18'),
(8, 0, 'TEST', 'TEST', 3, 1, '5 موظفين أو أقل', '3 ملايين ريال أو أقل', '123', '123', 123, '1@hotmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', '123', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها نموذج عمل تجاري لم يحقق أية أرقام مالية مثبتة حتى الآن', '1', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية لم تحقق أية أرقام مالية مثبتة حتى الآن', '1', 1, 0, 0, 0, 0, 0, 0, 0, NULL, '2020-11-09 04:08:18', '2020-11-09 04:08:18'),
(9, 1001, 'google', 'google', 3, 1, '5 موظفين أو أقل', 'من 3 ملايين إلى 40 مليون ريال', 'gooole', 'google', 123, 'yaser@gmail.com', 'المنشأة لديها ابتكار يعتبر جديداً بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة لديها ابتكار لم يحقق أية أرقام مالية مثبتة حتى الآن', 'ffff', 'المنشأة لديها نموذج عمل تجاري يعتبر جديداً بالنسبة إلى جميع الأنشطة التجارية في السعودية', 'المنشأة لديها نموذج عمل تجاري زاد من ربحية المنشأة', 'ffff', 'المنشأة لديها بيئة عمل و/أو عمليات داخلية تعتبر جديدة بالنسبة إلى النشاط الذي تعمل فيه المنشأة داخل السعودية', 'المنشأة ليس لديها ابتكار واضح في بيئة عملها و/أو عملياتها الداخلية', 'ffff', 1, 0, 0, 1, 0, 0, 0, 1, NULL, '2020-11-09 04:08:18', '2020-11-09 04:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProjectID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalID` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` bigint(20) UNSIGNED NOT NULL,
  `contrary` bigint(20) UNSIGNED NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patented` tinyint(1) NOT NULL DEFAULT 0,
  `createrID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ProjectID`, `name`, `nationalID`, `email`, `mobile`, `details`, `nationality`, `contrary`, `specialization`, `patented`, `createrID`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test', 1106206921, 'admin@admin.com', 559979198, 'a', 82, 82, 'NONE', 0, 1, '2019-10-28 08:37:16', '2019-10-28 08:37:16'),
(3, 3, 'افنان', 1097465387, 'afnan@gmail.com', 563256784, 'ابتكار في مجال التقنية', 82, 82, 'NONE', 0, 1, '2019-10-29 05:56:42', '2019-10-29 05:56:42'),
(9, 9, 'أمجاد حمدان الجهني', 1081613752, 'Amjad7amdan@gmail.com', 567766530, 'نظام مراقبة الأطفال المصابين بثقب القلب', 82, 82, 'NONE', 0, 1, '2019-10-29 06:36:22', '2019-10-29 06:36:22'),
(10, 10, 'عادل سعود سليمان البازعي', 1061624639, 'assb79@gmail.com', 547299667, 'نظام وطريقة لإصدار وتوثيق شيكات مصرفية مضمونة', 82, 82, 'NONE', 0, 1, '2019-10-29 06:47:31', '2019-10-29 06:47:31'),
(12, 12, 'عبدالعزيز محمد المحمادي', 1057250712, '4lmehmadi@gmail.com', 565299149, 'نظام تحديد مستوى الخطر عبر اكتشاف النوايا', 82, 82, 'NONE', 0, 1, '2019-10-29 07:15:44', '2019-10-29 07:15:44'),
(13, 13, 'فهد يوسف الشبيلي', 1006468217, 'mf3636688@gmail.com', 563636688, '(الافياش الذكية (التوافقية', 82, 82, 'NONE', 0, 1, '2019-10-29 07:20:34', '2019-10-29 07:20:34'),
(14, 14, 'فهد يوسف الشبيلي', 1006468217, 'mf3636688@gmail.com', 563636688, 'ساعدي', 82, 82, 'NONE', 0, 1, '2019-10-29 07:27:25', '2019-10-29 07:27:25'),
(15, 15, 'أ.د. طه بن عبد الله قمصاني', 1011649439, 't.kumosani@yahoo.com', 505671792, 'Composition containing essential oils and plant extracts for treating vaginal infection and inflammation', 82, 82, 'NONE', 0, 1, '2019-10-29 07:37:33', '2019-10-29 07:37:33'),
(16, 16, 'أ.د. طه بن عبد الله قمصاني', 1011649439, 't.kumosani@yahoo.com', 505671792, 'Anti-bacterial mouthwash', 82, 82, 'NONE', 0, 1, '2019-10-29 07:41:52', '2019-10-29 07:41:52'),
(19, 19, 'خالد سليمان الهلالي الحربي', 1099999623, 'alhilalikhaled@gmail.com', 594310745, 'نافورة المياه الطابعة', 82, 82, 'NONE', 0, 1, '2019-10-29 08:19:07', '2019-10-29 08:19:07'),
(21, 21, 'خالد بن حسان المالكي', 1006213209, 'kalmalki@ksu.edu.sa', 543300022, 'نظام كمامة الوجه', 82, 82, 'NONE', 0, 1, '2019-10-30 04:21:13', '2019-10-30 04:21:13'),
(23, 22, 'لمياء حسين الطلاسي', 1111354104, 'Lamia.h.t22@gmail.com', 593658846, 'تبريد الغرف باستخدام تقنية فيزيائية', 82, 82, 'NONE', 0, 1, '2019-10-30 07:13:30', '2019-10-30 07:13:30'),
(24, 23, 'خالد سليمان الهلالي الحربي', 1099999623, 'alhilalikhaled@gmail.com', 594310745, 'نافورة المياه الطابعة', 82, 82, 'NONE', 0, 1, '2019-10-30 07:20:10', '2019-10-30 07:20:10'),
(25, 24, 'حميد عواض عالي المطيري', 1050018025, 'a.r.s1111@hotmail.com', 593010011, 'نظام لرصد الزلازل قبل حدوثها', 82, 82, 'NONE', 0, 1, '2019-10-31 04:50:59', '2019-10-31 04:50:59'),
(26, 25, 'مطلق صنهات زويد العتيبي', 1015247297, 'alqadahmutlaq@gmail.com', 504130711, 'سيارة كهربائية لها نظام شحن ذاتي', 82, 82, 'NONE', 0, 1, '2019-10-31 05:03:53', '2019-10-31 05:03:53'),
(27, 26, 'خالد سليمان الهلالي الحربي', 1099999623, 'alhilalikhaled@gmail.com', 594310745, 'نافورة المياه الطابعة', 82, 82, 'NONE', 0, 1, '2019-10-31 05:17:22', '2019-10-31 05:17:22'),
(28, 27, 'خالد بن حسان المالكي', 1006213209, 'kalmalki@ksu.edu.sa', 543300022, 'نظام كمامة الوجه', 82, 82, 'NONE', 0, 1, '2019-10-31 05:22:38', '2019-10-31 05:22:38'),
(31, 2019, 'Yaser', 1106206921, 'yaserabdulrahman@outlook.com', 55997198, 'ahmed', 3, 1, '1', 1, 1, '2019-11-04 05:36:58', '2019-11-04 05:36:58'),
(32, 1, '559979192', 100605860, 'test@test.com', 559979198, 's', 3, 1, '1', 1, 1, '2019-12-03 12:11:49', '2019-12-03 12:11:49'),
(33, 123123, 'test', 1106206921, 'yaserabdulrahman@outlook.com', 559979198, '11', 3, 1, '1', 1, 1, '2020-10-17 17:52:47', '2020-10-17 17:52:47'),
(34, 1001, 'google', 1106206921, 'yaserabdulrahman@outlook.com', 559979198, 'test attachment', 82, 82, '1', 0, 1, '2020-10-29 05:15:43', '2020-10-29 05:15:43'),
(35, 100111, 'google', 1106206921, 'admin@admin.com', 559979198, 'gg', 82, 82, '1', 0, 1, '2020-11-01 03:30:05', '2020-11-01 03:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `projectID` bigint(20) UNSIGNED NOT NULL,
  `rate` enum('0','1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate2` enum('0','1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate3` enum('0','1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate4` enum('0','1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate5` enum('0','1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 1, NULL, '$2y$10$Q0Y5ud3kN/.G9kd3s5EDqOazaxFebaTR0XcqmGXtl4dj38C6c4Ijm', NULL, '2019-10-26 08:48:47', '2019-10-26 08:48:47'),
(6, 'user', 'alaa@outlook.com', 1, NULL, '$2y$10$GOcLu2SPb1/611AlH3Wj0e1/Jl.KbO8nmAYE.sNp.sai0vUrtIpkS', NULL, '2019-10-27 12:13:04', '2019-10-27 12:13:04'),
(7, 'test2', 'test2@gmail.com', 1, NULL, '$2y$10$Vucg/LVDlMpylvnQifmcV.PJnKLzCh2CkodNTdjpgdj.CElQ1TgQS', NULL, '2019-10-27 13:21:26', '2019-10-27 13:21:26'),
(8, 'Yaser', 'admin2@admin.com', 1, NULL, '$2y$10$JM1vsojRPNfGNxEa.WLJPe.NTk6.XexFb.uQFxDBdd/58UTWiXZkK', NULL, '2019-10-28 07:37:52', '2019-10-28 07:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('Admin','Supervisor','judge') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Supervisor', NULL, NULL),
(3, 'judge', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_countries`
--

CREATE TABLE `_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_countries`
--

INSERT INTO `_countries` (`id`, `Country`, `Nationality`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'Afghan', NULL, NULL),
(2, 'Albania', 'Albanian', NULL, NULL),
(3, 'Algeria', 'Algerian', NULL, NULL),
(4, 'Argentina', 'Argentine', NULL, NULL),
(5, 'Australia', 'Australian', NULL, NULL),
(6, 'Austria', 'Austrian', NULL, NULL),
(7, 'Bangladesh', 'Bangladeshi', NULL, NULL),
(8, 'Belgium', 'Belgian', NULL, NULL),
(9, 'Bolivia', 'Bolivian', NULL, NULL),
(10, 'Botswana', 'Batswana', NULL, NULL),
(11, 'Brazil', 'Brazilian', NULL, NULL),
(12, 'Bulgaria', 'Bulgarian', NULL, NULL),
(13, 'Cambodia', 'Cambodian', NULL, NULL),
(14, 'Cameroon', 'Cameroonian', NULL, NULL),
(15, 'Canada', 'Canadian', NULL, NULL),
(16, 'Chile', 'Chilean', NULL, NULL),
(17, 'China', 'Chinese', NULL, NULL),
(18, 'Colombia', 'Colombian', NULL, NULL),
(19, 'Costa Rica', 'Costa Rican', NULL, NULL),
(20, 'Croatia', 'Croatian', NULL, NULL),
(21, 'Cuba', 'Cuban', NULL, NULL),
(22, 'Czech Republic', 'Czech', NULL, NULL),
(23, 'Denmark', 'Danish', NULL, NULL),
(24, 'Dominican Republic', 'Dominican', NULL, NULL),
(25, 'Ecuador', 'Ecuadorian', NULL, NULL),
(26, 'Egypt', 'Egyptian', NULL, NULL),
(27, 'El Salvador', 'Salvadorian', NULL, NULL),
(28, 'England', 'English', NULL, NULL),
(29, 'Estonia', 'Estonian', NULL, NULL),
(30, 'Ethiopia', 'Ethiopian', NULL, NULL),
(31, 'Fiji', 'Fijian', NULL, NULL),
(32, 'Finland', 'Finnish', NULL, NULL),
(33, 'France', 'French', NULL, NULL),
(34, 'Germany', 'German', NULL, NULL),
(35, 'Ghana', 'Ghanaian', NULL, NULL),
(36, 'Greece', 'Greek', NULL, NULL),
(37, 'Guatemala', 'Guatemalan', NULL, NULL),
(38, 'Haiti', 'Haitian', NULL, NULL),
(39, 'Honduras', 'Honduran', NULL, NULL),
(40, 'Hungary', 'Hungarian', NULL, NULL),
(41, 'Iceland', 'Icelandic', NULL, NULL),
(42, 'India', 'Indian', NULL, NULL),
(43, 'Indonesia', 'Indonesian', NULL, NULL),
(44, 'Iran', 'Iranian', NULL, NULL),
(45, 'Iraq', 'Iraqi', NULL, NULL),
(46, 'Ireland', 'Irish', NULL, NULL),
(47, 'Israel', 'Israeli', NULL, NULL),
(48, 'Italy', 'Italian', NULL, NULL),
(49, 'Jamaica', 'Jamaican', NULL, NULL),
(50, 'Japan', 'Japanese', NULL, NULL),
(51, 'Jordan', 'Jordanian', NULL, NULL),
(52, 'Kenya', 'Kenyan', NULL, NULL),
(53, 'Kuwait', 'Kuwaiti', NULL, NULL),
(54, 'Laos', 'Lao', NULL, NULL),
(55, 'Latvia', 'Latvian', NULL, NULL),
(56, 'Lebanon', 'Lebanese', NULL, NULL),
(57, 'Libya', 'Libyan', NULL, NULL),
(58, 'Lithuania', 'Lithuanian', NULL, NULL),
(59, 'Malaysia', 'Malaysian', NULL, NULL),
(60, 'Mali', 'Malian', NULL, NULL),
(61, 'Malta', 'Maltese', NULL, NULL),
(62, 'Mexico', 'Mexican', NULL, NULL),
(63, 'Mongolia', 'Mongolian', NULL, NULL),
(64, 'Morocco', 'Moroccan', NULL, NULL),
(65, 'Mozambique', 'Mozambican', NULL, NULL),
(66, 'Namibia', 'Namibian', NULL, NULL),
(67, 'Nepal', 'Nepalese', NULL, NULL),
(68, 'Netherlands', 'Dutch', NULL, NULL),
(69, 'New Zealand', 'New Zealand', NULL, NULL),
(70, 'Nicaragua', 'Nicaraguan', NULL, NULL),
(71, 'Nigeria', 'Nigerian', NULL, NULL),
(72, 'Norway', 'Norwegian', NULL, NULL),
(73, 'Pakistan', 'Pakistani', NULL, NULL),
(74, 'Panama', 'Panamanian', NULL, NULL),
(75, 'Paraguay', 'Paraguayan', NULL, NULL),
(76, 'Peru', 'Peruvian', NULL, NULL),
(77, 'Philippines', 'Philippine', NULL, NULL),
(78, 'Poland', 'Polish', NULL, NULL),
(79, 'Portugal', 'Portuguese', NULL, NULL),
(80, 'Romania', 'Romanian', NULL, NULL),
(81, 'Russia', 'Russian', NULL, NULL),
(82, 'Saudi Arabia', 'Saudi', NULL, NULL),
(83, 'Scotland', 'Scottish', NULL, NULL),
(84, 'Senegal', 'Senegalese', NULL, NULL),
(85, 'Serbia', 'Serbian', NULL, NULL),
(86, 'Singapore', 'Singaporean', NULL, NULL),
(87, 'Slovakia', 'Slovak', NULL, NULL),
(88, 'South Africa', 'South African', NULL, NULL),
(89, 'South Korea', 'Korean', NULL, NULL),
(90, 'Spain', 'Spanish', NULL, NULL),
(91, 'Sri Lanka', 'Sri Lankan', NULL, NULL),
(92, 'Sudan', 'Sudanese', NULL, NULL),
(93, 'Sweden', 'Swedish', NULL, NULL),
(94, 'Switzerland', 'Swiss', NULL, NULL),
(95, 'Syria', 'Syrian', NULL, NULL),
(96, 'Taiwan', 'Taiwanese', NULL, NULL),
(97, 'Tajikistan', 'Tajikistani', NULL, NULL),
(98, 'Thailand', 'Thai', NULL, NULL),
(99, 'Tonga', 'Tongan', NULL, NULL),
(100, 'Tunisia', 'Tunisian', NULL, NULL),
(101, 'Turkey', 'Turkish', NULL, NULL),
(102, 'Ukraine', 'Ukrainian', NULL, NULL),
(103, 'United Arab Emirates', 'Emirati', NULL, NULL),
(104, '(The) United Kingdom', 'British', NULL, NULL),
(105, '(The) United States', 'American', NULL, NULL),
(106, 'Uruguay', 'Uruguayan', NULL, NULL),
(107, 'Venezuela', 'Venezuelan', NULL, NULL),
(108, 'Vietnam', 'Vietnamese', NULL, NULL),
(109, 'Zambia', 'Zambian', NULL, NULL),
(110, 'Zimbabwe', 'Zimbabwean', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agetype`
--
ALTER TABLE `agetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aprovels`
--
ALTER TABLE `aprovels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aprovels_userid_foreign` (`userID`),
  ADD KEY `aprovels_projectid_foreign` (`projectID`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_projetid_foreign` (`projetID`),
  ADD KEY `attachments_filetype_foreign` (`filetype`);

--
-- Indexes for table `attachmentstype`
--
ALTER TABLE `attachmentstype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project2020`
--
ALTER TABLE `project2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_createrid_foreign` (`createrID`),
  ADD KEY `projects_contrary_foreign` (`contrary`),
  ADD KEY `projects_nationality_foreign` (`nationality`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_userid_foreign` (`userID`),
  ADD KEY `rating_projectid_foreign` (`projectID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_foreign` (`type`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_countries`
--
ALTER TABLE `_countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agetype`
--
ALTER TABLE `agetype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aprovels`
--
ALTER TABLE `aprovels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `attachmentstype`
--
ALTER TABLE `attachmentstype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `project2020`
--
ALTER TABLE `project2020`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_countries`
--
ALTER TABLE `_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aprovels`
--
ALTER TABLE `aprovels`
  ADD CONSTRAINT `aprovels_projectid_foreign` FOREIGN KEY (`projectID`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `aprovels_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_filetype_foreign` FOREIGN KEY (`filetype`) REFERENCES `attachmentstype` (`id`),
  ADD CONSTRAINT `attachments_projetid_foreign` FOREIGN KEY (`projetID`) REFERENCES `projects` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_contrary_foreign` FOREIGN KEY (`contrary`) REFERENCES `_countries` (`id`),
  ADD CONSTRAINT `projects_createrid_foreign` FOREIGN KEY (`createrID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `projects_nationality_foreign` FOREIGN KEY (`nationality`) REFERENCES `_countries` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_projectid_foreign` FOREIGN KEY (`projectID`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `rating_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_foreign` FOREIGN KEY (`type`) REFERENCES `usertype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
