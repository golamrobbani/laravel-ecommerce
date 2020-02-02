-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 04:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summit`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `link`, `position`, `status`, `created_at`, `updated_at`) VALUES
(2, 'banners/May2019/zKNlIUVCIuBpXCENoHQE.jpg', 'http://localhost:8000/banner', 'top', 'yes', '2019-05-15 22:33:00', '2019-05-17 10:03:21'),
(3, 'banners/May2019/E7hXX1imetl1dQkdE9oz.jpg', 'http://localhost:8000/banner', 'top', 'yes', '2019-05-15 22:33:00', '2019-05-17 10:03:06'),
(4, 'banners/May2019/zxeRxXJul41goeVs3o9i.jpg', 'http://localhost:8000/banner', 'top', 'yes', '2019-05-15 22:33:00', '2019-05-17 10:02:54'),
(5, 'banners/May2019/oiHKt9T5P0LRfu2d9Tye.jpg', 'http://localhost:8000/banner', 'sidebar', 'yes', '2019-05-15 22:34:00', '2019-05-17 10:02:38'),
(6, 'banners/May2019/kmZbM12RdMzjVJh11eYQ.jpg', 'http://localhost:8000/banner', 'sidebar', 'yes', '2019-05-15 22:34:14', '2019-05-15 22:34:14'),
(7, 'banners/May2019/HI2CNTRJq3Wg8nCZzAtK.jpg', 'http://localhost:8000/banner', 'middle', 'yes', '2019-05-15 22:38:32', '2019-05-15 22:38:32'),
(8, 'banners/May2019/jJdZePgzVqE9UJbicESI.jpg', 'http://localhost:8000/banner', 'middle', 'yes', '2019-05-15 22:38:00', '2019-05-17 10:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'a', 'brands/May2019/ZHbJLShrEZHliGydt67z.png', '2019-05-15 10:44:31', '2019-05-15 10:44:31'),
(2, 'b', 'brands/May2019/LNdA6pB2wJniTaGy0DUa.png', '2019-05-15 10:44:40', '2019-05-15 10:44:40'),
(3, 'v', 'brands/May2019/BuXDE54BIjFokHlw9DIA.png', '2019-05-15 10:44:49', '2019-05-15 10:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(3, 1, 1, 'Water purifier', 'water-purifier', '2019-04-22 11:50:41', '2019-04-22 11:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fevicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_description` text COLLATE utf8mb4_unicode_ci,
  `tag_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_merchant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_merchant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_instruction_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_instruction_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `shop_title`, `shop_logo`, `shop_phone`, `shop_email`, `shop_address`, `facebook`, `twitter`, `google`, `rss`, `pinterest`, `linkedin`, `youtube`, `google_map`, `created_at`, `updated_at`, `fevicon`, `shop_description`, `tag_line`, `bkash_merchant`, `rocket_merchant`, `bkash_instruction_image`, `rocket_instruction_image`) VALUES
(1, 'Eco Safe Water', 'configurations/May2019/BPaOZ8nKTpkGuZ4jKQ6e.png', '01919-401564', 'donow247@gmail.com', 'Address: 2/21 Bordhan Bari, Mirpur, Dhaka. Contact: 01919401564, 01521257939', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'http://fb.com/ecosafewaterbd', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6060.9183997078535!2d90.41306725850816!3d23.7990197118054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4b57bb85b26fbff!2sLG-Butterfly+Gulshan-2+Showroom!5e0!3m2!1sen!2sbd!4v1566565911885!5m2!1sen!2sbd', '2019-04-22 01:24:00', '2019-08-23 07:13:16', 'configurations/April2019/vomkMg55mPJavlObb041.png', 'Welcome to Eco Safe Water', 'Drink pure water stay well, stay healthy', '01757236912', '01755555555', 'configurations/August2019/TgHIhANmJPLKMZc9j7jC.png', 'configurations/August2019/pjNoYIjnC6z9ihlhtdfZ.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 4),
(48, 6, 'body', 'rich_text_box', 'Body', 0, 0, 1, 1, 1, 1, '{}', 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, '{}', 12),
(56, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 8, 'shop_title', 'text', 'Shop Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 8, 'shop_logo', 'image', 'Shop Logo', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"144\",\"height\":\"90\"},\"quality\":\"70%\",\"upsize\":true}', 3),
(59, 8, 'shop_phone', 'text', 'Shop Phone', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 8, 'shop_email', 'text', 'Shop Email', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 8, 'shop_address', 'text_area', 'Shop Address', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 8, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, '{}', 7),
(63, 8, 'twitter', 'text', 'Twitter', 0, 0, 1, 1, 1, 1, '{}', 8),
(64, 8, 'google', 'text', 'Google', 0, 0, 1, 1, 1, 1, '{}', 9),
(65, 8, 'rss', 'text', 'Rss', 0, 0, 1, 1, 1, 1, '{}', 10),
(66, 8, 'pinterest', 'text', 'Pinterest', 0, 0, 1, 1, 1, 1, '{}', 11),
(67, 8, 'linkedin', 'text', 'Linkedin', 0, 0, 1, 1, 1, 1, '{}', 12),
(68, 8, 'youtube', 'text', 'Youtube', 0, 0, 1, 1, 1, 1, '{}', 13),
(69, 8, 'google_map', 'text', 'Google Map', 0, 0, 1, 1, 1, 1, '{}', 14),
(70, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 15),
(71, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(72, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(73, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(74, 9, 'menu_tag', 'text', 'Menu Tag', 0, 1, 1, 1, 1, 1, '{}', 3),
(75, 9, 'menu_order', 'text', 'Menu Order', 0, 1, 1, 1, 1, 1, '{\"default\":1}', 4),
(76, 9, 'category_image', 'image', 'Category Image', 0, 1, 1, 1, 1, 1, '{}', 5),
(77, 9, 'is_mainmenu', 'select_dropdown', 'Is Mainmenu', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 6),
(78, 9, 'is_sidemenu', 'select_dropdown', 'Is Sidemenu', 0, 0, 1, 1, 1, 1, '{\"default\":\"yes\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 7),
(79, 9, 'is_home', 'select_dropdown', 'Is Home', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 8),
(82, 9, 'category_description', 'text_area', 'Category Description', 0, 0, 1, 1, 1, 1, '{}', 11),
(83, 9, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 12),
(84, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 13),
(85, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(89, 9, 'product_category_id', 'select_dropdown', 'Parent Category', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 13),
(90, 9, 'has_parent', 'select_dropdown', 'Has Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 14),
(91, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 10, 'top_title', 'text', 'Top Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(93, 10, 'mid_title', 'text', 'Mid Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(94, 10, 'bottom_title', 'text', 'Bottom Title', 0, 0, 1, 1, 1, 1, '{}', 4),
(95, 10, 'button_title', 'text', 'Button Title', 0, 0, 1, 1, 1, 1, '{}', 5),
(96, 10, 'button_link', 'text', 'Button Link', 0, 0, 1, 1, 1, 1, '{}', 6),
(97, 10, 'slider_image', 'image', 'Slider Image', 0, 0, 1, 1, 1, 1, '{}', 7),
(98, 10, 'is_enabled', 'select_dropdown', 'Is Enabled', 0, 1, 1, 1, 1, 1, '{\"default\":\"yes\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 8),
(99, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(100, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(101, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 11, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(103, 11, 'image', 'image', 'Banner Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(104, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(105, 12, 'image', 'image', 'Banner Image', 0, 1, 1, 1, 1, 1, '{}', 2),
(106, 12, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 3),
(107, 12, 'position', 'select_dropdown', 'Position', 0, 1, 1, 1, 1, 1, '{\"default\":\"sidebar\",\"options\":{\"sidebar\":\"Sidebar\",\"top\":\"Home Top\",\"middle\":\"Home Middle\"}}', 4),
(108, 12, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"yes\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 5),
(109, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 6),
(110, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(111, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(112, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(113, 13, 'price', 'text', 'Price', 0, 1, 1, 1, 1, 1, '{}', 3),
(114, 13, 'discount', 'text', 'Discount', 0, 1, 1, 1, 1, 1, '{}', 4),
(115, 13, 'stock', 'text', 'Stock', 0, 1, 1, 1, 1, 1, '{}', 5),
(116, 13, 'short_description', 'text_area', 'Short Description', 0, 0, 1, 1, 1, 1, '{}', 6),
(117, 13, 'long_description', 'rich_text_box', 'Long Description', 0, 0, 1, 1, 1, 1, '{}', 7),
(118, 13, 'upper_text', 'text', 'Upper Text', 0, 0, 1, 1, 1, 1, '{}', 8),
(119, 13, 'images', 'multiple_images', 'Images', 0, 0, 1, 1, 1, 1, '{}', 9),
(120, 13, 'category_id', 'select_dropdown', 'Category', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 10),
(121, 13, 'is_special', 'select_dropdown', 'Is Special', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 11),
(122, 13, 'is_new', 'select_dropdown', 'Is New', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 12),
(123, 13, 'is_home', 'select_dropdown', 'Is Home', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 13),
(124, 13, 'is_hot', 'select_dropdown', 'Is Hot', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 14),
(125, 13, 'views', 'text', 'Views', 0, 0, 1, 0, 0, 1, '{}', 15),
(126, 13, 'sell', 'text', 'Sell', 0, 0, 1, 0, 0, 1, '{}', 16),
(127, 13, 'tags', 'text_area', 'Tags', 0, 0, 1, 1, 1, 1, '{}', 17),
(128, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 18),
(129, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 19),
(130, 8, 'fevicon', 'image', 'Fevicon', 0, 0, 1, 1, 1, 1, '{}', 17),
(131, 8, 'shop_description', 'text_area', 'Shop Description', 0, 0, 1, 1, 1, 1, '{}', 18),
(132, 8, 'tag_line', 'text', 'Tag Line', 0, 0, 1, 1, 1, 1, '{}', 19),
(133, 9, 'submenu_heading', 'text', 'Submenu Heading', 0, 1, 1, 1, 1, 1, '{}', 15),
(134, 9, 'icon_name', 'text', 'Icon Name', 0, 1, 0, 1, 1, 1, '{}', 16),
(135, 13, 'is_special_deal', 'text', 'Is Special Deal', 0, 1, 0, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 20),
(136, 13, 'product_order', 'number', 'Product Order', 0, 1, 0, 1, 1, 1, '{}', 21),
(137, 13, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 22),
(138, 13, 'is_promotion', 'select_dropdown', 'Is Promotion', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 23),
(139, 13, 'discount_percentage', 'number', 'Discount Percentage', 0, 0, 1, 1, 1, 1, '{}', 24),
(151, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(152, 17, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(153, 17, 'quality', 'text', 'Quality', 0, 0, 1, 1, 1, 1, '{}', 3),
(154, 17, 'price', 'text', 'Price', 0, 0, 1, 1, 1, 1, '{}', 4),
(155, 17, 'value', 'text', 'Value', 0, 0, 1, 1, 1, 1, '{}', 5),
(156, 17, 'summery', 'text', 'Summery', 0, 1, 1, 1, 1, 1, '{}', 6),
(157, 17, 'review_text', 'text', 'Review Text', 0, 0, 1, 1, 1, 1, '{}', 7),
(158, 17, 'is_enabled', 'select_dropdown', 'Is Enabled', 0, 1, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 8),
(159, 17, 'product_id', 'select_dropdown', 'Product', 0, 1, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 9),
(160, 17, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 10),
(161, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(162, 13, 'is_enabled', 'select_dropdown', 'Is Enabled', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 25),
(163, 9, 'stick_home', 'select_dropdown', 'Stick On Home Page', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 17),
(164, 13, 'brand', 'text', 'Brand Name', 0, 0, 1, 1, 1, 1, '{}', 26),
(165, 13, 'visitor', 'text', 'Visitor', 0, 0, 1, 0, 0, 1, '{}', 27),
(166, 13, 'sold', 'text', 'Sold', 0, 0, 1, 0, 0, 1, '{}', 28),
(167, 5, 'visit_count', 'text', 'Visit Count', 0, 0, 1, 1, 1, 1, '{}', 16),
(168, 6, 'position', 'select_dropdown', 'Position', 0, 0, 1, 1, 1, 1, '{\"default\":\"Customer_Service\",\"options\":{\"Customer_Service\":\"Customer Service\",\"Corporation\":\"Corporation\",\"Why_Choose_Us\":\"Why Choose Us\",\"Other\":\"Other\"}}', 13),
(169, 6, 'page_order', 'number', 'Page Order', 0, 0, 1, 1, 1, 1, '{}', 14),
(170, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(171, 18, 'user_id', 'text', 'User Id', 0, 0, 0, 0, 0, 0, '{}', 2),
(172, 18, 'user_city', 'text', 'User City', 0, 1, 1, 1, 1, 1, '{}', 3),
(173, 18, 'user_postcode', 'text', 'User Postcode', 0, 1, 1, 1, 1, 1, '{}', 4),
(174, 18, 'user_address', 'text', 'User Address', 0, 1, 1, 1, 1, 1, '{}', 5),
(175, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(176, 19, 'order_number', 'text', 'Order Number', 0, 1, 1, 1, 1, 1, '{}', 2),
(177, 19, 'order_status', 'select_dropdown', 'Order Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"2\",\"options\":{\"1\":\"Delivered\",\"2\":\"Pending\",\"3\":\"Delivering\",\"4\":\"Cancled\"}}', 3),
(178, 19, 'order_date', 'text', 'Order Submit Date', 0, 1, 1, 1, 1, 1, '{}', 4),
(179, 19, 'order_price_total', 'text', 'Order Price Total', 0, 1, 1, 1, 1, 1, '{}', 5),
(180, 19, 'order_payment_type', 'select_dropdown', 'Order Payment Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"cashondelivery\",\"options\":{\"cashondelivery\":\"Cash on Delivery\",\"bKash\":\"bKash\",\"Rocket\":\"Rocket\"}}', 6),
(181, 19, 'order_delivery_city', 'text', 'Order Delivery City', 0, 0, 0, 1, 1, 1, '{}', 7),
(182, 19, 'order_delivery_address', 'text', 'Order Delivery Address', 0, 0, 0, 1, 1, 1, '{}', 8),
(183, 19, 'order_delivery_postcode', 'text', 'Order Delivery Postcode', 0, 0, 0, 1, 1, 1, '{}', 9),
(184, 19, 'order_delivery_phone', 'text', 'Order Delivery Phone', 0, 0, 0, 1, 1, 1, '{}', 10),
(185, 19, 'order_discount', 'text', 'Order Discount', 0, 0, 0, 1, 1, 1, '{}', 11),
(186, 19, 'order_payment_status', 'select_dropdown', 'Order Payment Status', 0, 0, 0, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Paid\",\"2\":\"Not Paid\"}}', 12),
(187, 19, 'order_customer_id', 'text', 'Order Customer Id', 0, 0, 0, 1, 1, 1, '{}', 13),
(188, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 0),
(189, 20, 'order_id', 'text', 'Order Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(190, 20, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(191, 20, 'item_id', 'text', 'Item Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(192, 20, 'item_name', 'text', 'Item Name', 0, 1, 1, 1, 1, 1, '{}', 5),
(193, 20, 'item_qty', 'text', 'Item Qty', 0, 1, 1, 1, 1, 1, '{}', 6),
(194, 20, 'item_price', 'text', 'Item Price', 0, 1, 1, 1, 1, 1, '{}', 7),
(195, 20, 'item_price_total', 'text', 'Item Price Total', 0, 1, 1, 1, 1, 1, '{}', 8),
(196, 20, 'item_note', 'text', 'Item Note', 0, 1, 1, 1, 1, 1, '{}', 9),
(197, 19, 'created_at', 'text', 'Created At', 0, 0, 0, 1, 1, 1, '{}', 14),
(198, 19, 'deleted_at', 'text', 'Deleted At', 0, 0, 0, 1, 1, 1, '{}', 15),
(199, 20, 'created_at', 'text', 'Created At', 0, 1, 1, 1, 1, 1, '{}', 10),
(200, 20, 'deleted_at', 'text', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 11),
(201, 19, 'order_total_payable', 'text', 'Order Total Payable', 0, 0, 0, 1, 1, 1, '{}', 16),
(202, 19, 'order_paid', 'text', 'Order Paid', 0, 0, 0, 1, 1, 1, '{}', 17),
(203, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 0),
(204, 21, 'created_at', 'text', 'Created At', 0, 0, 1, 0, 0, 1, '{}', 2),
(205, 21, 'deleted_at', 'text', 'Deleted At', 0, 0, 1, 0, 0, 1, '{}', 3),
(206, 21, 'order_id', 'text', 'Order Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(207, 21, 'order_number', 'text', 'Order Number', 0, 1, 1, 1, 1, 1, '{}', 5),
(208, 21, 'payment_type', 'text', 'Payment Type', 0, 1, 1, 1, 1, 1, '{}', 6),
(209, 21, 'amount', 'text', 'Amount', 0, 1, 1, 1, 1, 1, '{}', 7),
(210, 21, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 8),
(211, 21, 'transaction_no', 'text', 'Transaction No', 0, 0, 1, 1, 1, 1, '{}', 9),
(212, 19, 'order_delivery_charge', 'text', 'Order Delivery Charge', 0, 0, 0, 1, 1, 1, '{}', 18),
(213, 8, 'bkash_merchant', 'text', 'Bkash Merchant', 0, 1, 1, 1, 1, 1, '{}', 20),
(214, 8, 'rocket_merchant', 'text', 'Rocket Merchant', 0, 1, 1, 1, 1, 1, '{}', 21),
(215, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(216, 22, 'created_at', 'text', 'Created At', 0, 0, 1, 0, 0, 1, '{}', 2),
(218, 22, 'coupon_name', 'text', 'Coupon Name', 0, 1, 1, 1, 1, 1, '{}', 4),
(219, 22, 'coupon_code', 'text', 'Coupon Code', 0, 1, 1, 1, 1, 1, '{}', 5),
(220, 22, 'coupon_value_type', 'text', 'Coupon Value Type', 0, 0, 1, 1, 1, 1, '{}', 6),
(221, 22, 'coupon_amount', 'text', 'Coupon Amount', 0, 1, 1, 1, 1, 1, '{}', 7),
(222, 22, 'coupon_minimum_price', 'text', 'Coupon Minimum Price', 0, 1, 1, 1, 1, 1, '{}', 8),
(223, 22, 'coupon_type', 'text', 'Coupon Type', 0, 1, 1, 1, 1, 1, '{}', 9),
(224, 22, 'coupon_number', 'text', 'Coupon Number', 0, 1, 1, 1, 1, 1, '{}', 10),
(225, 22, 'coupon_use', 'text', 'Coupon Use', 0, 1, 1, 1, 1, 1, '{}', 11),
(226, 22, 'coupon_isEnable', 'text', 'Coupon IsEnable', 0, 1, 1, 1, 1, 1, '{}', 12),
(227, 22, 'coupon_status', 'text', 'Coupon Status', 0, 1, 1, 1, 1, 1, '{}', 13),
(228, 22, 'coupon_expiry_date', 'text', 'Coupon Expiry Date', 0, 1, 1, 1, 1, 1, '{}', 14),
(229, 22, 'updated_at', 'text', 'Updated At', 0, 0, 1, 0, 0, 1, '{}', 3),
(230, 19, 'updated_at', 'text', 'Updated At', 0, 0, 0, 1, 1, 1, '{}', 19),
(231, 8, 'bkash_instruction_image', 'image', 'Bkash Instruction Image', 0, 0, 1, 1, 1, 1, '{}', 22),
(232, 8, 'rocket_instruction_image', 'image', 'Rocket Instruction Image', 0, 0, 1, 1, 1, 1, '{}', 23),
(233, 17, 'customer_id', 'text', 'Customer Id', 0, 0, 1, 1, 1, 1, '{}', 12),
(234, 9, 'display_item', 'select_dropdown', 'Display Item On Menu', 0, 0, 1, 1, 1, 1, '{\"default\":\"no\",\"options\":{\"yes\":\"Yes\",\"no\":\"No\"}}', 18);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-04-18 22:21:40', '2019-06-14 12:58:48'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-04-18 22:21:40', '2019-06-14 14:02:08'),
(7, 'configuration', 'configuration', 'Configuration', 'Configurations', 'voyager-hammer', 'App\\Configuration', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(8, 'configurations', 'configurations', 'Configuration', 'Configurations', 'voyager-hammer', 'App\\Configuration', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-04-22 01:00:04', '2019-08-22 23:21:54'),
(9, 'product_categories', 'product-categories', 'Product Category', 'Product Categories', 'voyager-group', 'App\\ProductCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-04-22 02:11:01', '2019-08-31 06:34:50'),
(10, 'sliders', 'sliders', 'Slider', 'Sliders', 'voyager-play', 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-04-22 12:59:36', '2019-04-22 13:00:34'),
(11, 'brands', 'brands', 'Brand', 'Brands', 'voyager-lifebuoy', 'App\\Brand', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-04-23 09:19:37', '2019-04-23 09:19:37'),
(12, 'banners', 'banners', 'Banner', 'Banners', 'voyager-umbrella', 'App\\Banner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-04-23 10:08:20', '2019-04-23 10:09:00'),
(13, 'products', 'products', 'Product', 'Products', 'voyager-list-add', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-04-23 11:37:45', '2019-05-19 09:17:44'),
(17, 'reviews', 'reviews', 'Review', 'Reviews', 'voyager-hammer', 'App\\Review', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-05-15 22:19:19', '2019-08-26 12:11:21'),
(18, 'user_details', 'user-details', 'User Detail', 'User Details', 'voyager-group', 'App\\UserDetail', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(19, 'orders', 'orders', 'Order', 'Orders', 'voyager-list', 'App\\Order', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":\"id\",\"scope\":null}', '2019-07-23 11:06:05', '2019-08-22 23:15:57'),
(20, 'order_items', 'order-items', 'Order Item', 'Order Items', 'voyager-list', 'App\\OrderItem', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-23 11:06:22', '2019-07-23 11:17:05'),
(21, 'transactions', 'transactions', 'Transaction', 'Transactions', 'voyager-activity', 'App\\Transaction', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-25 02:42:14', '2019-07-26 23:56:01'),
(22, 'offer_coupons', 'offer-coupons', 'Offer Coupon', 'Offer Coupons', 'voyager-star-half', 'App\\OfferCoupon', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-08-03 10:39:10', '2019-08-04 09:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-04-18 22:21:26', '2019-04-18 22:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-04-18 22:21:26', '2019-04-18 22:21:26', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 15, '2019-04-18 22:21:26', '2019-08-22 12:28:12', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 10, '2019-04-18 22:21:26', '2019-08-22 12:28:12', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 14, '2019-04-18 22:21:26', '2019-08-22 12:28:12', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 19, '2019-04-18 22:21:26', '2019-08-22 12:28:12', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-04-18 22:21:26', '2019-04-19 00:15:35', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-04-18 22:21:26', '2019-04-19 00:15:35', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-04-18 22:21:26', '2019-04-19 00:15:35', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-04-18 22:21:26', '2019-04-19 00:15:35', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2019-04-18 22:21:26', '2019-08-22 12:28:12', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-04-18 22:21:26', '2019-04-19 00:15:35', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 18, '2019-04-18 22:21:40', '2019-08-22 12:28:12', 'voyager.categories.index', NULL),
(13, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 16, '2019-04-18 22:21:40', '2019-08-22 12:28:12', 'voyager.posts.index', NULL),
(14, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 17, '2019-04-18 22:21:40', '2019-08-22 12:28:12', 'voyager.pages.index', NULL),
(16, 1, 'Configurations', '', '_self', 'voyager-hammer', NULL, NULL, 11, '2019-04-22 01:00:05', '2019-08-22 12:28:12', 'voyager.configurations.index', NULL),
(17, 1, 'Product Categories', '', '_self', 'voyager-group', NULL, NULL, 4, '2019-04-22 02:11:01', '2019-08-22 12:28:12', 'voyager.product-categories.index', NULL),
(18, 1, 'Sliders', '', '_self', 'voyager-play', NULL, NULL, 9, '2019-04-22 12:59:36', '2019-08-22 12:28:12', 'voyager.sliders.index', NULL),
(19, 1, 'Brands', '', '_self', 'voyager-lifebuoy', NULL, NULL, 8, '2019-04-23 09:19:38', '2019-08-22 12:28:12', 'voyager.brands.index', NULL),
(20, 1, 'Banners', '', '_self', 'voyager-umbrella', NULL, NULL, 7, '2019-04-23 10:08:20', '2019-08-22 12:28:12', 'voyager.banners.index', NULL),
(21, 1, 'Products', '', '_self', 'voyager-list-add', NULL, NULL, 3, '2019-04-23 11:37:45', '2019-08-22 12:28:12', 'voyager.products.index', NULL),
(23, 1, 'Reviews', '', '_self', 'voyager-hammer', NULL, NULL, 13, '2019-05-15 22:19:20', '2019-08-22 12:28:12', 'voyager.reviews.index', NULL),
(25, 1, 'Orders', '', '_self', 'voyager-news', NULL, NULL, 2, '2019-07-23 11:06:06', '2019-07-23 11:17:46', 'voyager.orders.index', NULL),
(27, 1, 'Transactions', '', '_self', 'voyager-activity', NULL, NULL, 5, '2019-07-25 02:42:14', '2019-08-22 12:28:12', 'voyager.transactions.index', NULL),
(28, 1, 'Offer Coupons', '', '_self', 'voyager-star-half', NULL, NULL, 6, '2019-08-03 10:39:10', '2019-08-22 12:28:12', 'voyager.offer-coupons.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offer_coupons`
--

CREATE TABLE `offer_coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `coupon_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_value_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` int(11) DEFAULT NULL,
  `coupon_minimum_price` int(11) DEFAULT NULL,
  `coupon_number` int(11) DEFAULT NULL,
  `coupon_use` int(11) DEFAULT NULL,
  `coupon_isEnable` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_expiry_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_coupons`
--

INSERT INTO `offer_coupons` (`id`, `created_at`, `updated_at`, `coupon_name`, `coupon_code`, `coupon_value_type`, `coupon_amount`, `coupon_minimum_price`, `coupon_number`, `coupon_use`, `coupon_isEnable`, `coupon_status`, `coupon_expiry_date`) VALUES
(1, '2019-08-04 15:51:42', '2019-08-04 15:51:42', 'Eid Offer', 'eid2019', 'fixed', 200, 500, 80, NULL, 'yes', 'using', '2019-08-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_price_total` float DEFAULT NULL,
  `order_payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_delivery_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_delivery_postcode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_delivery_phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_discount` float DEFAULT NULL,
  `order_payment_status` int(11) DEFAULT NULL,
  `order_customer_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `order_total_payable` float DEFAULT NULL,
  `order_paid` float DEFAULT NULL,
  `order_delivery_charge` float DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `order_status`, `order_date`, `order_price_total`, `order_payment_type`, `order_delivery_city`, `order_delivery_address`, `order_delivery_postcode`, `order_delivery_phone`, `order_discount`, `order_payment_status`, `order_customer_id`, `created_at`, `deleted_at`, `order_total_payable`, `order_paid`, `order_delivery_charge`, `updated_at`) VALUES
(47, '248424', 2, '2019-08-14 04:14:00', 88888, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-14 16:14:20', NULL, 88958, NULL, 70, '2019-08-14 16:14:20'),
(48, '839036', 2, '2019-08-14 04:17:00', 88888, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-14 16:17:16', NULL, 88958, NULL, 70, '2019-08-14 16:17:16'),
(49, '309652', 2, '2019-08-14 04:21:00', 88888, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-14 16:21:11', NULL, 88958, NULL, 70, '2019-08-14 16:21:11'),
(50, '599664', 2, '2019-08-14 04:41:00', 88888, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-14 16:41:59', NULL, 88958, NULL, 70, '2019-08-14 16:41:59'),
(51, '296148', 2, '2019-08-14 04:45:00', 88888, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-14 16:45:57', NULL, 88958, NULL, 70, '2019-08-14 16:45:57'),
(52, '733124', 2, '2019-08-21 04:59:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 16:59:17', NULL, 111180, NULL, 70, '2019-08-21 16:59:17'),
(53, '168475', 2, '2019-08-21 05:08:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:08:03', NULL, 111180, NULL, 70, '2019-08-21 17:08:03'),
(54, '543375', 2, '2019-08-21 05:10:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:10:04', NULL, 111180, NULL, 70, '2019-08-21 17:10:04'),
(55, '191164', 2, '2019-08-21 05:12:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:12:04', NULL, 111180, NULL, 70, '2019-08-21 17:12:04'),
(56, '920436', 2, '2019-08-21 05:14:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:14:05', NULL, 111180, NULL, 70, '2019-08-21 17:14:05'),
(57, '577805', 2, '2019-08-21 05:14:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:14:05', NULL, 111180, NULL, 70, '2019-08-21 17:14:05'),
(58, '354889', 2, '2019-08-21 05:14:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:14:05', NULL, 111180, NULL, 70, '2019-08-21 17:14:05'),
(59, '765318', 2, '2019-08-21 05:14:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:14:06', NULL, 111180, NULL, 70, '2019-08-21 17:14:06'),
(60, '454403', 2, '2019-08-21 05:14:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:14:43', NULL, 111180, NULL, 70, '2019-08-21 17:14:43'),
(61, '606945', 2, '2019-08-21 05:18:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:18:08', NULL, 111180, NULL, 70, '2019-08-21 17:18:08'),
(62, '629371', 2, '2019-08-21 05:21:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:21:08', NULL, 111180, NULL, 70, '2019-08-21 17:21:08'),
(63, '789033', 2, '2019-08-21 05:23:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:23:08', NULL, 111180, NULL, 70, '2019-08-21 17:23:08'),
(64, '238784', 2, '2019-08-21 05:26:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:26:41', NULL, 111180, NULL, 70, '2019-08-21 17:26:41'),
(65, '276465', 2, '2019-08-21 05:40:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:40:45', NULL, 111180, NULL, 70, '2019-08-21 17:40:45'),
(66, '516861', 2, '2019-08-21 05:44:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:44:03', NULL, 111180, NULL, 70, '2019-08-21 17:44:03'),
(67, '170848', 2, '2019-08-21 05:50:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:50:22', NULL, 111180, NULL, 70, '2019-08-21 17:50:22'),
(68, '312168', 2, '2019-08-21 05:50:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:50:48', NULL, 111180, NULL, 70, '2019-08-21 17:50:48'),
(69, '375377', 2, '2019-08-21 05:51:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:51:51', NULL, 111180, NULL, 70, '2019-08-21 17:51:51'),
(70, '751165', 2, '2019-08-21 05:54:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:54:55', NULL, 111180, NULL, 70, '2019-08-21 17:54:55'),
(71, '233321', 2, '2019-08-21 05:55:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:55:05', NULL, 111180, NULL, 70, '2019-08-21 17:55:05'),
(72, '668658', 2, '2019-08-21 05:56:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:56:15', NULL, 111180, NULL, 70, '2019-08-21 17:56:15'),
(73, '253028', 2, '2019-08-21 05:57:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:57:39', NULL, 111180, NULL, 70, '2019-08-21 17:57:39'),
(74, '347544', 2, '2019-08-21 05:58:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 17:58:21', NULL, 111180, NULL, 70, '2019-08-21 17:58:21'),
(75, '842515', 2, '2019-08-21 06:03:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:03:30', NULL, 111180, NULL, 70, '2019-08-21 18:03:30'),
(76, '492477', 2, '2019-08-21 06:04:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:04:27', NULL, 111180, NULL, 70, '2019-08-21 18:04:27'),
(77, '994077', 2, '2019-08-21 06:08:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:08:08', NULL, 111180, NULL, 70, '2019-08-21 18:08:08'),
(78, '687109', 2, '2019-08-21 06:09:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:09:34', NULL, 111180, NULL, 70, '2019-08-21 18:09:34'),
(79, '896797', 2, '2019-08-21 06:10:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:10:26', NULL, 111180, NULL, 70, '2019-08-21 18:10:26'),
(80, '927609', 2, '2019-08-21 06:17:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:17:52', NULL, 111180, NULL, 70, '2019-08-21 18:17:52'),
(81, '916247', 2, '2019-08-21 06:18:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:18:26', NULL, 111180, NULL, 70, '2019-08-21 18:18:26'),
(82, '436485', 2, '2019-08-21 06:24:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:24:05', NULL, 111180, NULL, 70, '2019-08-21 18:24:05'),
(83, '789438', 2, '2019-08-21 06:25:00', 111110, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-21 18:25:45', NULL, 111180, NULL, 70, '2019-08-21 18:25:45'),
(84, '673091', 2, '2019-08-23 01:52:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 13:52:26', NULL, 1724990, NULL, 70, '2019-08-23 13:52:26'),
(85, '509393', 2, '2019-08-23 01:52:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 13:52:36', NULL, 1724990, NULL, 70, '2019-08-23 13:52:36'),
(86, '600554', 2, '2019-08-23 01:53:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 13:53:38', NULL, 1724990, NULL, 70, '2019-08-23 13:53:38'),
(87, '554094', 2, '2019-08-23 01:57:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 13:57:31', NULL, 1724990, NULL, 70, '2019-08-23 13:57:31'),
(88, '832581', 2, '2019-08-23 02:02:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 14:02:39', NULL, 1724990, NULL, 70, '2019-08-23 14:02:39'),
(89, '504548', 2, '2019-08-23 02:04:00', 1724920, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 6, '2019-08-23 14:04:08', NULL, 1724990, NULL, 70, '2019-08-23 14:04:08'),
(90, '140238', 2, '2019-08-26 06:37:00', 133332, 'cashondelivery', 'Dhaka', 'Baridhara DOHS , Dhaka', '1212', '1757236912', 0, 2, 7, '2019-08-26 18:37:19', NULL, 133402, NULL, 70, '2019-08-26 18:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_qty` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_price_total` float DEFAULT NULL,
  `item_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `customer_id`, `item_id`, `item_name`, `item_qty`, `item_price`, `item_price_total`, `item_note`, `created_at`, `deleted_at`, `updated_at`) VALUES
(63, 47, 6, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-14 16:14:20', NULL, '2019-08-14 16:14:20'),
(64, 47, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-14 16:14:20', NULL, '2019-08-14 16:14:20'),
(65, 48, 6, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-14 16:17:16', NULL, '2019-08-14 16:17:16'),
(66, 48, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-14 16:17:16', NULL, '2019-08-14 16:17:16'),
(67, 49, 6, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-14 16:21:11', NULL, '2019-08-14 16:21:11'),
(68, 49, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-14 16:21:11', NULL, '2019-08-14 16:21:11'),
(69, 50, 6, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-14 16:41:59', NULL, '2019-08-14 16:41:59'),
(70, 50, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-14 16:41:59', NULL, '2019-08-14 16:41:59'),
(71, 51, 6, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-14 16:45:57', NULL, '2019-08-14 16:45:57'),
(72, 51, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-14 16:45:57', NULL, '2019-08-14 16:45:57'),
(73, 52, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 16:59:17', NULL, '2019-08-21 16:59:17'),
(74, 52, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 16:59:17', NULL, '2019-08-21 16:59:17'),
(75, 53, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:08:03', NULL, '2019-08-21 17:08:03'),
(76, 53, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:08:03', NULL, '2019-08-21 17:08:03'),
(77, 54, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:10:04', NULL, '2019-08-21 17:10:04'),
(78, 54, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:10:04', NULL, '2019-08-21 17:10:04'),
(79, 55, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:12:04', NULL, '2019-08-21 17:12:04'),
(80, 55, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:12:04', NULL, '2019-08-21 17:12:04'),
(81, 56, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(82, 56, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(83, 57, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(84, 57, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(85, 58, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(86, 58, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:14:05', NULL, '2019-08-21 17:14:05'),
(87, 59, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:14:06', NULL, '2019-08-21 17:14:06'),
(88, 59, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:14:06', NULL, '2019-08-21 17:14:06'),
(89, 60, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:14:43', NULL, '2019-08-21 17:14:43'),
(90, 60, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:14:43', NULL, '2019-08-21 17:14:43'),
(91, 61, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:18:08', NULL, '2019-08-21 17:18:08'),
(92, 61, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:18:08', NULL, '2019-08-21 17:18:08'),
(93, 62, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:21:08', NULL, '2019-08-21 17:21:08'),
(94, 62, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:21:08', NULL, '2019-08-21 17:21:08'),
(95, 63, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:23:08', NULL, '2019-08-21 17:23:08'),
(96, 63, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:23:08', NULL, '2019-08-21 17:23:08'),
(97, 64, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:26:41', NULL, '2019-08-21 17:26:41'),
(98, 64, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:26:41', NULL, '2019-08-21 17:26:41'),
(99, 65, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:40:45', NULL, '2019-08-21 17:40:45'),
(100, 65, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:40:45', NULL, '2019-08-21 17:40:45'),
(101, 66, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:44:03', NULL, '2019-08-21 17:44:03'),
(102, 66, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:44:03', NULL, '2019-08-21 17:44:03'),
(103, 67, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:50:22', NULL, '2019-08-21 17:50:22'),
(104, 67, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:50:22', NULL, '2019-08-21 17:50:22'),
(105, 68, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:50:48', NULL, '2019-08-21 17:50:48'),
(106, 68, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:50:48', NULL, '2019-08-21 17:50:48'),
(107, 69, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:51:51', NULL, '2019-08-21 17:51:51'),
(108, 69, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:51:51', NULL, '2019-08-21 17:51:51'),
(109, 70, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:54:55', NULL, '2019-08-21 17:54:55'),
(110, 70, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:54:55', NULL, '2019-08-21 17:54:55'),
(111, 71, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:55:05', NULL, '2019-08-21 17:55:05'),
(112, 71, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:55:05', NULL, '2019-08-21 17:55:05'),
(113, 72, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:56:15', NULL, '2019-08-21 17:56:15'),
(114, 72, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:56:15', NULL, '2019-08-21 17:56:15'),
(115, 73, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:57:39', NULL, '2019-08-21 17:57:39'),
(116, 73, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:57:39', NULL, '2019-08-21 17:57:39'),
(117, 74, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 17:58:21', NULL, '2019-08-21 17:58:21'),
(118, 74, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 17:58:21', NULL, '2019-08-21 17:58:21'),
(119, 75, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:03:30', NULL, '2019-08-21 18:03:30'),
(120, 75, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:03:30', NULL, '2019-08-21 18:03:30'),
(121, 76, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:04:27', NULL, '2019-08-21 18:04:27'),
(122, 76, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:04:27', NULL, '2019-08-21 18:04:27'),
(123, 77, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:08:08', NULL, '2019-08-21 18:08:08'),
(124, 77, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:08:08', NULL, '2019-08-21 18:08:08'),
(125, 78, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:09:34', NULL, '2019-08-21 18:09:34'),
(126, 78, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:09:34', NULL, '2019-08-21 18:09:34'),
(127, 79, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:10:26', NULL, '2019-08-21 18:10:26'),
(128, 79, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:10:26', NULL, '2019-08-21 18:10:26'),
(129, 80, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:17:52', NULL, '2019-08-21 18:17:52'),
(130, 80, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:17:52', NULL, '2019-08-21 18:17:52'),
(131, 81, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:18:26', NULL, '2019-08-21 18:18:26'),
(132, 81, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:18:26', NULL, '2019-08-21 18:18:26'),
(133, 82, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:24:05', NULL, '2019-08-21 18:24:05'),
(134, 82, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:24:05', NULL, '2019-08-21 18:24:05'),
(135, 83, 6, 1, 'Demo product', 2, 22222, 44444, NULL, '2019-08-21 18:25:45', NULL, '2019-08-21 18:25:45'),
(136, 83, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-21 18:25:45', NULL, '2019-08-21 18:25:45'),
(137, 84, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 13:52:26', NULL, '2019-08-23 13:52:26'),
(138, 84, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 13:52:26', NULL, '2019-08-23 13:52:26'),
(139, 84, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 13:52:26', NULL, '2019-08-23 13:52:26'),
(140, 84, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 13:52:26', NULL, '2019-08-23 13:52:26'),
(141, 85, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 13:52:36', NULL, '2019-08-23 13:52:36'),
(142, 85, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 13:52:36', NULL, '2019-08-23 13:52:36'),
(143, 85, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 13:52:36', NULL, '2019-08-23 13:52:36'),
(144, 85, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 13:52:36', NULL, '2019-08-23 13:52:36'),
(145, 86, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 13:53:38', NULL, '2019-08-23 13:53:38'),
(146, 86, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 13:53:38', NULL, '2019-08-23 13:53:38'),
(147, 86, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 13:53:38', NULL, '2019-08-23 13:53:38'),
(148, 86, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 13:53:38', NULL, '2019-08-23 13:53:38'),
(149, 87, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 13:57:31', NULL, '2019-08-23 13:57:31'),
(150, 87, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 13:57:31', NULL, '2019-08-23 13:57:31'),
(151, 87, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 13:57:31', NULL, '2019-08-23 13:57:31'),
(152, 87, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 13:57:31', NULL, '2019-08-23 13:57:31'),
(153, 88, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 14:02:39', NULL, '2019-08-23 14:02:39'),
(154, 88, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 14:02:39', NULL, '2019-08-23 14:02:39'),
(155, 88, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 14:02:39', NULL, '2019-08-23 14:02:39'),
(156, 88, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 14:02:39', NULL, '2019-08-23 14:02:39'),
(157, 89, 6, 1, 'Demo product', 7, 22222, 155554, NULL, '2019-08-23 14:04:08', NULL, '2019-08-23 14:04:08'),
(158, 89, 6, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-23 14:04:08', NULL, '2019-08-23 14:04:08'),
(159, 89, 6, 3, 'Water Treatment', 3, 44444, 133332, NULL, '2019-08-23 14:04:08', NULL, '2019-08-23 14:04:08'),
(160, 89, 6, 6, 'Easy pure', 3, 456456, 1369370, NULL, '2019-08-23 14:04:08', NULL, '2019-08-23 14:04:08'),
(161, 90, 7, 1, 'Demo product', 1, 22222, 22222, NULL, '2019-08-26 18:37:19', NULL, '2019-08-26 18:37:19'),
(162, 90, 7, 2, 'Water purifier', 1, 66666, 66666, NULL, '2019-08-26 18:37:19', NULL, '2019-08-26 18:37:19'),
(163, 90, 7, 3, 'Water Treatment', 1, 44444, 44444, NULL, '2019-08-26 18:37:19', NULL, '2019-08-26 18:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`, `position`, `page_order`) VALUES
(1, 1, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-04-18 22:21:40', '2019-06-14 13:29:11', 'Corporation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ratoncse24@gmail.com', '$2y$10$s53jG/Gd54c2P6Dt37XBduJXqu0//FvaJZMpjVYviFJLO5mSL.Cfe', '2019-06-21 13:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(2, 'browse_bread', NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(3, 'browse_database', NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(4, 'browse_media', NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(5, 'browse_compass', NULL, '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(6, 'browse_menus', 'menus', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(7, 'read_menus', 'menus', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(8, 'edit_menus', 'menus', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(9, 'add_menus', 'menus', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(10, 'delete_menus', 'menus', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(11, 'browse_roles', 'roles', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(12, 'read_roles', 'roles', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(13, 'edit_roles', 'roles', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(14, 'add_roles', 'roles', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(15, 'delete_roles', 'roles', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(16, 'browse_users', 'users', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(17, 'read_users', 'users', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(18, 'edit_users', 'users', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(19, 'add_users', 'users', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(20, 'delete_users', 'users', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(21, 'browse_settings', 'settings', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(22, 'read_settings', 'settings', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(23, 'edit_settings', 'settings', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(24, 'add_settings', 'settings', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(25, 'delete_settings', 'settings', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(26, 'browse_hooks', NULL, '2019-04-18 22:21:27', '2019-04-18 22:21:27'),
(27, 'browse_categories', 'categories', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(28, 'read_categories', 'categories', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(29, 'edit_categories', 'categories', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(30, 'add_categories', 'categories', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(31, 'delete_categories', 'categories', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(32, 'browse_posts', 'posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(33, 'read_posts', 'posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(34, 'edit_posts', 'posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(35, 'add_posts', 'posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(36, 'delete_posts', 'posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(37, 'browse_pages', 'pages', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(38, 'read_pages', 'pages', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(39, 'edit_pages', 'pages', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(40, 'add_pages', 'pages', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(41, 'delete_pages', 'pages', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(42, 'browse_configuration', 'configuration', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(43, 'read_configuration', 'configuration', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(44, 'edit_configuration', 'configuration', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(45, 'add_configuration', 'configuration', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(46, 'delete_configuration', 'configuration', '2019-04-22 00:54:27', '2019-04-22 00:54:27'),
(47, 'browse_configurations', 'configurations', '2019-04-22 01:00:04', '2019-04-22 01:00:04'),
(48, 'read_configurations', 'configurations', '2019-04-22 01:00:04', '2019-04-22 01:00:04'),
(49, 'edit_configurations', 'configurations', '2019-04-22 01:00:04', '2019-04-22 01:00:04'),
(50, 'add_configurations', 'configurations', '2019-04-22 01:00:05', '2019-04-22 01:00:05'),
(51, 'delete_configurations', 'configurations', '2019-04-22 01:00:05', '2019-04-22 01:00:05'),
(52, 'browse_product_categories', 'product_categories', '2019-04-22 02:11:01', '2019-04-22 02:11:01'),
(53, 'read_product_categories', 'product_categories', '2019-04-22 02:11:01', '2019-04-22 02:11:01'),
(54, 'edit_product_categories', 'product_categories', '2019-04-22 02:11:01', '2019-04-22 02:11:01'),
(55, 'add_product_categories', 'product_categories', '2019-04-22 02:11:01', '2019-04-22 02:11:01'),
(56, 'delete_product_categories', 'product_categories', '2019-04-22 02:11:01', '2019-04-22 02:11:01'),
(57, 'browse_sliders', 'sliders', '2019-04-22 12:59:36', '2019-04-22 12:59:36'),
(58, 'read_sliders', 'sliders', '2019-04-22 12:59:36', '2019-04-22 12:59:36'),
(59, 'edit_sliders', 'sliders', '2019-04-22 12:59:36', '2019-04-22 12:59:36'),
(60, 'add_sliders', 'sliders', '2019-04-22 12:59:36', '2019-04-22 12:59:36'),
(61, 'delete_sliders', 'sliders', '2019-04-22 12:59:36', '2019-04-22 12:59:36'),
(62, 'browse_brands', 'brands', '2019-04-23 09:19:37', '2019-04-23 09:19:37'),
(63, 'read_brands', 'brands', '2019-04-23 09:19:37', '2019-04-23 09:19:37'),
(64, 'edit_brands', 'brands', '2019-04-23 09:19:37', '2019-04-23 09:19:37'),
(65, 'add_brands', 'brands', '2019-04-23 09:19:37', '2019-04-23 09:19:37'),
(66, 'delete_brands', 'brands', '2019-04-23 09:19:38', '2019-04-23 09:19:38'),
(67, 'browse_banners', 'banners', '2019-04-23 10:08:20', '2019-04-23 10:08:20'),
(68, 'read_banners', 'banners', '2019-04-23 10:08:20', '2019-04-23 10:08:20'),
(69, 'edit_banners', 'banners', '2019-04-23 10:08:20', '2019-04-23 10:08:20'),
(70, 'add_banners', 'banners', '2019-04-23 10:08:20', '2019-04-23 10:08:20'),
(71, 'delete_banners', 'banners', '2019-04-23 10:08:20', '2019-04-23 10:08:20'),
(72, 'browse_products', 'products', '2019-04-23 11:37:45', '2019-04-23 11:37:45'),
(73, 'read_products', 'products', '2019-04-23 11:37:45', '2019-04-23 11:37:45'),
(74, 'edit_products', 'products', '2019-04-23 11:37:45', '2019-04-23 11:37:45'),
(75, 'add_products', 'products', '2019-04-23 11:37:45', '2019-04-23 11:37:45'),
(76, 'delete_products', 'products', '2019-04-23 11:37:45', '2019-04-23 11:37:45'),
(82, 'browse_reviews', 'reviews', '2019-05-15 22:19:20', '2019-05-15 22:19:20'),
(83, 'read_reviews', 'reviews', '2019-05-15 22:19:20', '2019-05-15 22:19:20'),
(84, 'edit_reviews', 'reviews', '2019-05-15 22:19:20', '2019-05-15 22:19:20'),
(85, 'add_reviews', 'reviews', '2019-05-15 22:19:20', '2019-05-15 22:19:20'),
(86, 'delete_reviews', 'reviews', '2019-05-15 22:19:20', '2019-05-15 22:19:20'),
(87, 'browse_user_details', 'user_details', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(88, 'read_user_details', 'user_details', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(89, 'edit_user_details', 'user_details', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(90, 'add_user_details', 'user_details', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(91, 'delete_user_details', 'user_details', '2019-07-17 10:26:29', '2019-07-17 10:26:29'),
(92, 'browse_orders', 'orders', '2019-07-23 11:06:05', '2019-07-23 11:06:05'),
(93, 'read_orders', 'orders', '2019-07-23 11:06:05', '2019-07-23 11:06:05'),
(94, 'edit_orders', 'orders', '2019-07-23 11:06:05', '2019-07-23 11:06:05'),
(95, 'add_orders', 'orders', '2019-07-23 11:06:05', '2019-07-23 11:06:05'),
(96, 'delete_orders', 'orders', '2019-07-23 11:06:05', '2019-07-23 11:06:05'),
(97, 'browse_order_items', 'order_items', '2019-07-23 11:06:22', '2019-07-23 11:06:22'),
(98, 'read_order_items', 'order_items', '2019-07-23 11:06:22', '2019-07-23 11:06:22'),
(99, 'edit_order_items', 'order_items', '2019-07-23 11:06:22', '2019-07-23 11:06:22'),
(100, 'add_order_items', 'order_items', '2019-07-23 11:06:22', '2019-07-23 11:06:22'),
(101, 'delete_order_items', 'order_items', '2019-07-23 11:06:22', '2019-07-23 11:06:22'),
(102, 'browse_transactions', 'transactions', '2019-07-25 02:42:14', '2019-07-25 02:42:14'),
(103, 'read_transactions', 'transactions', '2019-07-25 02:42:14', '2019-07-25 02:42:14'),
(104, 'edit_transactions', 'transactions', '2019-07-25 02:42:14', '2019-07-25 02:42:14'),
(105, 'add_transactions', 'transactions', '2019-07-25 02:42:14', '2019-07-25 02:42:14'),
(106, 'delete_transactions', 'transactions', '2019-07-25 02:42:14', '2019-07-25 02:42:14'),
(107, 'browse_offer_coupons', 'offer_coupons', '2019-08-03 10:39:10', '2019-08-03 10:39:10'),
(108, 'read_offer_coupons', 'offer_coupons', '2019-08-03 10:39:10', '2019-08-03 10:39:10'),
(109, 'edit_offer_coupons', 'offer_coupons', '2019-08-03 10:39:10', '2019-08-03 10:39:10'),
(110, 'add_offer_coupons', 'offer_coupons', '2019-08-03 10:39:10', '2019-08-03 10:39:10'),
(111, 'delete_offer_coupons', 'offer_coupons', '2019-08-03 10:39:10', '2019-08-03 10:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visit_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`, `visit_count`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-04-18 22:21:40', '2019-06-14 13:30:48', 3),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', '1', 0, '2019-04-18 22:21:40', '2019-04-18 22:21:40', 4),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', '1', 0, '2019-04-18 22:21:40', '2019-04-18 22:21:40', 2),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', '1', 0, '2019-04-18 22:21:40', '2019-04-18 22:21:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `upper_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `is_special` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_new` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_hot` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `sell` int(11) DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_special_deal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_order` int(11) DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `is_promotion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_percentage` float DEFAULT NULL,
  `is_enabled` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discount`, `stock`, `short_description`, `long_description`, `upper_text`, `images`, `category_id`, `is_special`, `is_new`, `is_home`, `is_hot`, `views`, `sell`, `tags`, `created_at`, `updated_at`, `is_special_deal`, `product_order`, `slug`, `is_promotion`, `discount_percentage`, `is_enabled`, `brand`, `visitor`, `sold`) VALUES
(1, 'Demo product', 22222, 22221, 55, 'ssss', '<p><strong>Long description</strong></p>', 'New', '[\"products\\/May2019\\/rmCDzMVo01jMQ7fnjMim.jpg\"]', 2, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'product tags', '2019-05-15 10:52:00', '2019-05-18 11:25:15', 'yes', 6, 'demo-product', 'no', NULL, 'yes', 'Apple', NULL, NULL),
(2, 'Water purifier', 66666, 77777, 88, 'sdf', '<p>sdfs</p>', 'Hot', '[\"products\\/May2019\\/uHEjXvhlKLwBkNOBvTDO.jpg\"]', 1, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'dfdf', '2019-05-15 10:53:00', '2019-05-18 11:25:08', 'yes', 5, 'water-purifier', 'no', NULL, 'yes', 'Apple', NULL, NULL),
(3, 'Water Treatment', 44444, 55555, 66, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '<p><span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p>', 'Special', '[\"products\\/May2019\\/uAWn0P1OTnLbUV8KwUBj.jpg\",\"products\\/May2019\\/Y9KNWGuXZzyuI6iUGizW.png\",\"products\\/May2019\\/qK228njkjcLsgFtnTVWg.jpg\",\"products\\/May2019\\/y3v7aNIF1uQ103op1Vve.png\"]', 2, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'aa', '2019-05-15 10:54:00', '2019-06-11 08:42:59', 'yes', 4, 'water-treatment', 'no', NULL, 'yes', 'Sony', NULL, NULL),
(4, 'Easy Pure it', 3333, 44444, 11, 'sdf', '<p>sdfsf</p>', 'New', '[\"products\\/May2019\\/jdRONfQbXMw46i97lRbP.png\"]', NULL, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'aass', '2019-05-15 10:55:00', '2019-05-18 11:24:45', 'yes', 3, 'easy-pure-it', 'no', NULL, 'yes', 'Sony', NULL, NULL),
(5, 'Pureit', 1112, 1212, 13, 'sf', '<p>sdfs</p>', NULL, '[\"products\\/May2019\\/L68x7zaXEeEqvkbd9qDA.png\"]', 1, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'sdf', '2019-05-15 10:56:00', '2019-05-18 11:24:36', 'yes', 2, 'pureit', 'yes', 20, 'yes', 'HP', NULL, NULL),
(6, 'Easy pure', 456456, 456456, 65, 'gd', '<p>ddg</p>', 'Hot', '[\"products\\/May2019\\/EtBGZguCQDqqn5dLWCn4.jpg\",\"products\\/May2019\\/kTpvFjyn6hJZg0BzVmCM.png\",\"products\\/May2019\\/9Gju5wpjlmGHcHdGmXGG.png\",\"products\\/May2019\\/U3QqhRNHsJuLw5WfP4C4.jpg\"]', 2, 'yes', 'yes', 'yes', 'yes', NULL, NULL, 'dg', '2019-05-15 10:57:00', '2019-05-18 11:24:27', 'yes', 1, 'easy-pure', 'yes', 60, 'yes', 'HP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_tag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_mainmenu` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_sidemenu` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `has_parent` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stick_home` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_item` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `menu_tag`, `menu_order`, `category_image`, `is_mainmenu`, `is_sidemenu`, `is_home`, `category_description`, `slug`, `created_at`, `updated_at`, `product_category_id`, `has_parent`, `submenu_heading`, `icon_name`, `stick_home`, `display_item`) VALUES
(1, 'Filter', NULL, 1, 'product-categories/April2019/FEXOAvXS5gVFm09TBMVA.jpg', 'yes', 'yes', 'yes', NULL, 'filter', '2019-04-27 02:50:00', '2019-08-22 22:58:47', NULL, 'no', 'All Product', 'shopping-bag', 'no', NULL),
(2, 'Water purifier', 'Hot', 2, 'product-categories/April2019/VeUbEQiAEXir59COC8G8.jpg', 'yes', 'yes', 'yes', NULL, 'water-purifier', '2019-04-27 02:51:00', '2019-08-31 06:37:53', NULL, 'no', 'Our Water purifier', 'shopping-bag', 'yes', 'yes'),
(3, 'Filter 1', 'New', 3, 'product-categories/April2019/fNYs1xqJQokfhzJUQA2J.jpg', 'no', 'yes', 'no', NULL, 'filter-1', '2019-04-27 09:21:55', '2019-04-27 09:21:55', 1, 'yes', NULL, NULL, NULL, NULL),
(4, 'Filter 2', 'Hot', 4, 'product-categories/April2019/v2cBkuzbFe4O0XNAkdLt.jpg', 'no', 'yes', 'yes', 'New one', 'filter-2', '2019-04-27 09:22:37', '2019-04-27 09:22:37', 1, 'yes', NULL, NULL, NULL, NULL),
(5, 'Purifier', 'Hot', 7, 'product-categories/April2019/vw83DNAmwi1POkIv7tet.jpg', 'no', 'yes', 'no', NULL, 'purifier', '2019-04-27 09:23:23', '2019-04-27 09:23:23', 2, 'yes', NULL, NULL, NULL, NULL),
(7, 'Fruit', 'new', 3, 'product-categories/July2019/x0XkRtbhhmGxiyLSBgT0.jpeg', 'yes', 'yes', 'no', NULL, 'frout', '2019-07-23 09:11:00', '2019-07-23 09:11:42', NULL, 'no', 'All Fruit', 'shopping-bag', 'no', NULL),
(8, 'Mango', 'hot', 5, NULL, 'yes', 'no', 'no', NULL, 'mango', '2019-07-23 09:13:00', '2019-08-26 09:32:36', 7, 'yes', NULL, NULL, 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `summery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_text` text COLLATE utf8mb4_unicode_ci,
  `is_enabled` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `quality`, `price`, `value`, `summery`, `review_text`, `is_enabled`, `product_id`, `created_at`, `updated_at`, `customer_id`) VALUES
(1, 'Raton', 3, 4, 3, 'Nice nish', 'This is really good product so far', 'yes', 1, '2019-05-15 22:24:25', '2019-05-15 22:24:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-04-18 22:21:26', '2019-04-18 22:21:26'),
(2, 'user', 'Normal User', '2019-04-18 22:21:26', '2019-04-18 22:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Eco Safe Water', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Eco Safe Water', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Eco Safe Water', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Summit Water', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', 'UA-131745969-1', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_enabled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `top_title`, `mid_title`, `bottom_title`, `button_title`, `button_link`, `slider_image`, `is_enabled`, `created_at`, `updated_at`) VALUES
(1, 'Top title', 'mid title', 'bottom tittle', 'shop now', 'go.com', 'sliders/May2019/j6pqkNO6oEsOKXeYcwdo.jpg', 'yes', '2019-05-15 09:52:53', '2019-05-15 09:52:53'),
(2, 'top title two', 'mid two', 'bottom two', 'button two', 'link.com', 'sliders/May2019/fXm2fx10FDudUN6X1qPv.jpg', 'yes', '2019-05-15 09:53:18', '2019-05-15 09:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `sub_email`, `updated_at`, `created_at`) VALUES
(1, 'raton@gmail.com', '2019-08-26 15:58:02', '2019-08-26 15:58:02'),
(6, 'raton1212@gmail.com', '2019-08-26 16:02:44', '2019-08-26 16:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `transaction_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(22, 'menu_items', 'title', 13, 'pt', 'Publicações', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(24, 'menu_items', 'title', 12, 'pt', 'Categorias', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(25, 'menu_items', 'title', 14, 'pt', 'Páginas', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-04-18 22:21:40', '2019-04-18 22:21:40'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-04-18 22:21:40', '2019-04-18 22:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `phone`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', '01757236912', 'users/April2019/8sxQAliBXn8LodpquAv3.png', '$2y$10$00vXkm2ppkycQFRzVmBHL..6yJPW1fcbMFAkDmXPio8MtJVXw.E5O', 'gFfzHrmBpKm0HJOW46tqInysysXUuL19juUcs2Tm8jbxZG7cKfTRkZxUA0az', '{\"locale\":\"en\"}', '2019-04-18 22:21:40', '2019-07-23 10:01:18'),
(4, 2, 'Raton', 'admindd@gmail.com', '01757236912', 'users/default.png', '$2y$10$dT5F3mDd61/lqfhDZjfBeeReJIYjQ6VSRbLTJ0Iu.VkyTriT7ZOEW', NULL, NULL, '2019-06-21 12:32:39', '2019-06-21 12:32:39'),
(7, 1, 'Raton Hosen', 'ratoncse24@gmail.com', '+8801757236912', 'users/default.png', '$2y$10$IOzJhf9XYgIgPmkABMYDH.UygARsxWv96SwKDMMPu6wErDzW73d7K', NULL, NULL, '2019-08-26 09:29:55', '2019-08-26 09:29:55'),
(8, 2, 'raton', 'rrr@gmail.com', '353485345', 'users/default.png', '$2y$10$00vXkm2ppkycQFRzVmBHL..6yJPW1fcbMFAkDmXPio8MtJVXw.E5O', 'NxAtnRnvPPfoVr50sbKk1S1PAEGrFjFNXgDgfY8xlK1DIFZPGxjOfXBoxjxK', NULL, '2019-09-10 10:43:54', '2019-09-10 10:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_coupons`
--
ALTER TABLE `offer_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_order_number_index` (`order_number`(191)),
  ADD KEY `orders_order_customer_id_index` (`order_customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_index` (`order_id`),
  ADD KEY `order_items_customer_id_index` (`customer_id`),
  ADD KEY `order_items_item_id_index` (`item_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_category_id_index` (`product_category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_sub_email_index` (`sub_email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_index` (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `offer_coupons`
--
ALTER TABLE `offer_coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
