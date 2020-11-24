-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 07:25 AM
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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_foreign` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_foreign` FOREIGN KEY (`type`) REFERENCES `usertype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
