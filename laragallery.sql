-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 06:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laragallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id_edited` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`, `created_at_ip`, `updated_at_ip`) VALUES
(1, 'ACNE', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(2, 'RONHILL', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(3, 'ALBIRO', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(4, 'ODDMOLLY', NULL, NULL, '192.168.10.136', '192.168.10.136');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `created_at_ip`, `updated_at_ip`) VALUES
(1, 'MENS', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(2, 'WOMENS', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(3, 'KIDS', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(4, 'FASHION', NULL, NULL, '192.168.10.136', '192.168.10.136'),
(5, 'CLOTHING', NULL, NULL, '192.168.10.136', '192.168.10.136');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `details`, `cover_image`, `created_at`, `updated_at`) VALUES
(10, 'Wedding Party', 'Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet, consectetur.', 'F2ub2Ogc_cover.jpg', '2017-01-16 01:23:26', '2017-01-16 01:23:26'),
(9, 'Wedding Ceremony', 'Lorem ipsum dolor sit amet, consectetur.', 'poge594R_cover.jpg', '2017-01-16 01:22:55', '2017-01-16 01:22:55'),
(17, 'test', 'testing', 'n5jpl3jy_cover.jpg', '2017-01-18 01:36:36', '2017-01-18 01:36:36'),
(16, 'Honeymoon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mi sapien, egestas ut consectetur et, consectetur et magna. Pellentesque consectetur dolor nulla, quis rhoncus lorem finibus at. Praesent ut ante leo. Maecenas in nunc pharetra, vulputate nisl eget, suscipit purus. Nam eget dolor fermentum, bibendum ligula in, pretium massa. Nunc nulla elit, sodales id nisl quis, aliquam convallis turpis. Morbi ante arcu, vehicula non faucibus ut, accumsan et magna. Mauris sed vehicula urna, eu efficitur enim. Praesent at risus volutpat, suscipit odio at, pretium nisl. Curabitur ac ante accumsan, ultrices nunc quis, sagittis ante. Vivamus ac mattis massa, sit amet porta elit. ', 'ylncYvBp_cover.jpg', '2017-01-17 02:01:02', '2017-01-17 02:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(4, 16, 'uY5WWW8S_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 01:55:55', '2017-01-17 01:55:55'),
(3, 16, 'YeDLpcnz_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', '2017-01-17 01:55:41', '2017-01-17 01:55:41'),
(5, 16, 'u3UtNf8o_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 01:56:04', '2017-01-17 01:56:04'),
(6, 16, '16VImxMf_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 01:57:42', '2017-01-17 01:57:42'),
(7, 16, 'NNiOHwmf_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 02:02:18', '2017-01-17 02:02:18'),
(8, 10, 'l1VEOKx2_cover.jpg', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 02:04:23', '2017-01-17 02:04:23'),
(9, 10, 'ojvu58ME_cover.gif', 'Lorem ipsum dolor sit amet, consectetur.', '2017-01-17 02:04:48', '2017-01-17 02:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `membership_type`
--

CREATE TABLE `membership_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `membership_type`
--

INSERT INTO `membership_type` (`id`, `uid`, `title`, `price`, `description`, `created_at`, `updated_at`) VALUES
(5, 1, 'Individual', '20.20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. test', '2017-02-06 00:13:06', '2017-02-06 03:27:21'),
(7, 1, 'Small', '30.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2017-02-06 00:14:01', '2017-02-06 00:14:01'),
(8, 1, 'Medium', '40.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2017-02-06 00:14:29', '2017-02-06 00:14:29'),
(9, 1, 'Large', '60.49', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2017-02-06 00:14:50', '2017-02-06 00:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_13_055742_create_gallery_table', 2),
(4, '2017_01_13_102240_add_coverimage_to_gallery', 3),
(5, '2017_01_13_133250_add_coverImage_to_gallery', 4),
(6, '2017_01_16_111133_create_images_table', 5),
(7, '2017_01_16_111133_create_role_table', 6),
(8, '2017_02_03_111133_create_membershiptype_table', 7),
(9, '2017_02_25_055057_create_products_table', 8),
(10, '2017_02_25_055353_create_categories_table', 8),
(11, '2017_02_25_055443_create_brands_table', 8),
(12, '2016_06_01_000001_create_oauth_auth_codes_table', 9),
(13, '2016_06_01_000002_create_oauth_access_tokens_table', 9),
(14, '2016_06_01_000003_create_oauth_refresh_tokens_table', 9),
(15, '2016_06_01_000004_create_oauth_clients_table', 9),
(16, '2016_06_01_000005_create_oauth_personal_access_clients_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('81bab3288e05f3f19babc5b269a5845e57c11d733e55a0cdfdb527a1f7676ba113952f8ab252b311', 1, 3, NULL, '["*"]', 0, '2017-02-25 05:02:11', '2017-02-25 05:02:11', '2017-03-12 10:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_auth_codes`
--

INSERT INTO `oauth_auth_codes` (`id`, `user_id`, `client_id`, `scopes`, `revoked`, `expires_at`) VALUES
('1', 1, 3, 'test', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'BDE3GjOsVl6ZWx7ODFVteRbCyp35YrRx0kpHQWPV', 'http://localhost', 1, 0, 0, '2017-02-25 01:34:06', '2017-02-25 01:34:06'),
(2, NULL, 'Laravel Password Grant Client', 'EvdPMKBILj2rWRczUe3skJa1XzcbKZngBvonmJTf', 'http://localhost', 0, 1, 0, '2017-02-25 01:34:06', '2017-02-25 01:34:06'),
(3, 1, 'admin', '7sAyjpXtbG2DKyeHxq7mp6e5JrJe7oOxsejPTF5o', 'http://localhost:8081/laragallery/oauth/clients', 1, 1, 0, '2017-02-25 02:29:37', '2017-02-25 02:29:37'),
(4, NULL, '123456', 'rHcvMa8pjpqVM6UVk1YRj1gEOQ7esFdA40t99K9X', 'http://localhost', 0, 1, 0, '2017-02-25 02:42:54', '2017-02-25 02:42:54'),
(5, NULL, '1', 'TAiPPpJA0ZfHLuXPyd1aaBFUIJ6enag0AHzSoqV6', 'http://localhost', 1, 0, 0, '2017-02-25 02:54:59', '2017-02-25 02:54:59'),
(6, 1, 'admin', 'VTic1kSS5sJoohN5HsH4f8R2Vo8u8Jq9wLFpR8Go', '/home', 0, 0, 0, '2017-02-25 03:58:53', '2017-02-25 03:58:53'),
(7, 2, 'test', 'oUK3oX7GqyHvJg8inD2a48XfhRMNz3Tki6cUfQ86', '/test', 0, 0, 0, '2017-02-25 04:28:46', '2017-02-25 04:28:46'),
(8, 2, 'test', 'ezF2d7iOI8hoaQdCcWuGB3Yon82IvBD7TTMwpTIa', '/test', 0, 0, 0, '2017-02-25 04:29:53', '2017-02-25 04:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2017-02-25 01:34:06', '2017-02-25 01:34:06'),
(2, 8, '2017-02-25 02:54:59', '2017-02-25 02:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('92efd603f6ebc264084d8eb67a1257bb0b65d895426a0db14ba4855556496d82b732fd3c58c79a3e', '81bab3288e05f3f19babc5b269a5845e57c11d733e55a0cdfdb527a1f7676ba113952f8ab252b311', 0, '2017-03-27 10:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `description`, `price`, `category_id`, `brand_id`, `created_at`, `updated_at`, `created_at_ip`, `updated_at_ip`) VALUES
(1, 'Mini skirt black edition', 'Mini skirt black edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 35, 1, 1, NULL, NULL, '192.168.10.136', '192.168.10.136'),
(2, 'T-shirt blue edition', 'T-shirt blue edition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 64, 2, 3, NULL, NULL, '192.168.10.136', '192.168.10.136'),
(3, 'Sleeveless Colorblock Scuba', 'Sleeveless Colorblock Scuba', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 13, 3, 2, NULL, NULL, '192.168.10.136', '192.168.10.136');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2017-02-03 06:04:04', '2017-02-03 06:04:04'),
(3, 'Subscriber', '2017-02-03 06:31:26', '2017-02-03 06:31:26'),
(4, 'Default User', '2017-02-03 06:34:37', '2017-02-03 06:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '4',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Rashmika Patel', 'rashmika@prakashinfotech.com', '$2y$10$6qON5v0JtjcMcMjuGzR1suMKcXSs7ByRfV.sY6nRmjsey8rsldtYC', 'OK9VcC51TUMypLjBthrjVBNotntqr4nTTYGkOHP00RghpdzoOOCAZa1R8D8g', 1, '2017-01-13 00:14:20', '2017-02-25 05:08:26'),
(2, 'test', 'test@gmail.com', '$2y$10$/zTdf.tCC639IjYhMEmnVummx3/BWpJx6D9BEjQR8cS5RmWiu3gni', 'MLJHpzj8JUewf6lKgWAltYU8F1AVPk0mAZ1Dvw0gdV2Bhqo2CiAdQFr3MQQU', 4, '2017-02-03 06:37:54', '2017-02-17 00:15:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_album_id_foreign` (`album_id`);

--
-- Indexes for table `membership_type`
--
ALTER TABLE `membership_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membership_type_title_unique` (`title`),
  ADD KEY `membership_type_uid_foreign` (`uid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
