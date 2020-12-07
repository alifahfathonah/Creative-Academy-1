-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 03:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_category`
--

CREATE TABLE `class_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_category`
--

INSERT INTO `class_category` (`id`, `name`, `des`, `title`, `img`) VALUES
(23, 'Changes in laravel 8', 'Study over laravel features according to laravel official', 'Changes in laravel 8', 'images/laravel_fundamental.png'),
(24, 'Laravel-Fundamental', 'Study over laravel features according to laravel official', 'Laravel Fundamental', 'images/laravel_fundamental.png'),
(25, 'Lumen-Fundamental', 'Study over lumen features according to laravel official', 'Lumen API Fundamental', 'images/lumen.png'),
(26, 'Website-Project', 'First portfolio website project as beginner.', 'Beginner Website Project', 'images/portfolio_website.png'),
(27, 'Laravel-SEO', 'Laravel SEO', 'Laravel SEO', 'images/laravel_fundamental.png'),
(28, 'multipul-file-upload', 'Uploading Progress,Axios Multipul Request Simultaneously', 'Axios Multipul File Upload', 'images/ajaxmultipulfile.png'),
(29, 'Laravel-Social-Login', 'Laravel Social Login', 'Laravel Social Login', 'images/laravel_fundamental.png'),
(30, 'Laravel-Application-Installer-Project ', 'Laravel Advance ', 'Laravel Application Installer Project ', 'images/laravel_fundamental.png'),
(31, 'Laravel-React-Online-Course-Site ', 'Laravel React Online Course Site ', 'Laravel React Online Course Site ', 'images/laravel_fundamental.png'),
(32, 'Laravel-Troubleshooting-Tips', 'Small Troubleshooting Tips For Laravel Application  ', 'Laravel Troubleshooting & Tips', 'images/ajaxmultipulfile.png'),
(33, 'Laravel-Advance', 'Laravel Advance ', 'Laravel Advance', 'images/laravel_fundamental.png');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `serial_no`, `topic`, `title`, `source`, `video_link`, `category`) VALUES
(1, '1', 'Getting started', 'Laravel Introduction', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(5, '2', 'Getting started', 'Tools', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(6, '3', 'Getting started', 'Create New Project & Run', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/0b0af7261ad0207ee3bd30e4ae1845450878dc97', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(7, '4', 'Getting started', 'Project Structure ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(8, '5', 'Getting started', 'MVC Concept', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(74, '6', 'Getting started', 'Essential PHP Artisan command \r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/5d2ac5ec2b23b1f0cd054f700845b12dcf0fd0a2', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(75, '7', 'Routing', 'Basic Routing \r\n\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/3ca84313725e5c37a0d8babc00cb1620ade78196', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(76, '8', 'Routing', 'Basic Routing With View\r\n\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/de52e9fb49480fb38427e9d5c935346cab367988', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(77, '9', 'Routing', 'Basic Routing With Controller', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/2f402da262aeeedea4f289661ba65919d8d0f1ae', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(78, '10', 'Routing', 'Basic Routing With Controller And View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/8bb4179673e0f5d23ef3a9896008d0c068910a4a', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(79, '11', 'Routing', 'Basic Routing With href Link', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/3d056c8748e5f3486cccb9a18e267fabb4c05098', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(80, '12', 'Routing', 'Basic Routing With Parameter', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/b170cd08fd06d065dff36f7753f85b1eda0d6dcd', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(81, '13', 'Routing', 'Basic Routing With Multiple Parameter\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/4a9a2321547496c3a8b0a79a6c2bfb9b6fb40922', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(82, '14', 'Routing', 'Basic Routing Parameter Controller To View\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/b0b91053d79a8b639f4e2c174f472e9033c04815', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(83, '15', 'Routing', 'Basic Routing Group\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/98582d7a8d9c179453becf6d535c761cc92fe3bf', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(84, '16', 'Controller', 'Controller Overview\r\n', 'na', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(85, '17', 'Controller', 'Controller Structure\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/1a4faf6e8c3f3bc2cab95687f9f3936f5707fb76', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(86, '18', 'Controller', 'Types of Laravel Controller \r\n', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(87, '19', 'Controller', 'Single Action Controller\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/d5ba4e48f6ad390a7cc7b9f89cf5eafeb4a2d6e7', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(88, '20', 'Controller', 'Resource Controller\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/180c003a817b8d0524e250b97e073210508ae377', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(89, '21', 'Controller', 'Custom Controller\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/54a7a6c4165c3adf17114f8ebff1edd1f087fb36', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(90, '22', 'View', 'Laravel View', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(91, '23', 'View', 'First Blade View\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/1c69dcc007d300003b4b06c1066a87c26537f4fd', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(92, '24', 'View', 'Pass And Display Data In Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/fb2d4ffa8853e95871b300ecf62af42afd5b6caf', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(93, '25', 'View', 'For Loop Blade View\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/4572c1248a76e3ecd453470a7f1b125308ef1545', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(94, '26', 'View', 'Foreach Loop Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/a24d96fe00e93a696ea1c1355e16b53976b3e3ac', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(95, '27', 'View', 'ForElse Loop Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/3b77470cd632c7db32c3683fe1f94ebc79ccd073\r\n', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(96, '28', 'View', 'If else condition Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/ebf9ff6424f3540d509f67960efa5b0f67e63a6b', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(97, '29', 'View', 'Loop Properties Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/eea9e91f67430f70e47c3fc7ac654fe1a7e40e88', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(98, '30', 'View', 'Php inside blade view', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/848d9b5a3cc019f4916932c83bee3157f812ae86', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(100, '31', 'View', 'Including subview Blade View', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/e835ee1bb7b96c07e041df84902cdc824907eef9', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(101, '32', 'View', 'Data Passing to subview', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/6b6b3a705969eb9f54cef582d1e98f00971f222b', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(102, '33', 'View', 'Including SubView Advance \r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/6b6b3a705969eb9f54cef582d1e98f00971f222b', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(103, '34', 'View', 'Including SubView Advance \r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commits/master', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(104, '35', 'View', 'Template Inheritance Master layout\r\n', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(105, '36', 'View', 'Template Inheritance Master layout\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/747ef367a36b29e55d238d482611c23892b80685', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(106, '37', 'View', 'Template Inheritance Master layout\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/d61c7a273b55e734635c938c7989f907f78f0087', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(107, '38', 'View', 'Template Inheritance Master layout\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/feb3a1febb700f17fc181ee467cf11b5c014904f', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(108, '39', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(109, '40', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(110, '41', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(111, '42', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(112, '43', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(113, '44', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(114, '45', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(115, '46', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(116, '47', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(117, '48', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(118, '49', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(119, '50', 'View', 'My First Laravel Website', 'https://github.com/rupomsoft/Your-First-Laravel-Website-', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(120, '51', 'Migration', 'Migration Introduction', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(121, '52', 'Migration', 'Migration Structure', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(122, '53', 'Migration', 'My First Migration Table (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(123, '54', 'Migration', 'Creating Columns (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(124, '55', 'Migration', 'Creating Columns (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(125, '56', 'Migration', 'Modifying Columns (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(126, '57', 'Migration', 'Modifying Columns (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Migration/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(127, '58', 'Migration', 'Modifying Table (Migration Up)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/5a0d4ca86e30197c814d82769295b3e7adc3939c', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(128, '59', 'Migration', 'Migration History And Batch', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/5a0d4ca86e30197c814d82769295b3e7adc3939c', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(129, '60', 'Migration', 'Migration Rolling Back (Migration Down)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/5a0d4ca86e30197c814d82769295b3e7adc3939c', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(130, '61', 'Migration', 'Migration Rolling Back (Migration Down)', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/5a0d4ca86e30197c814d82769295b3e7adc3939c', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(131, '62', 'Raw Queries', 'Raw SQL Queries CURD', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(132, '63', 'Raw Queries', 'Raw SQL Queries Select Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(133, '64', 'Raw Queries', 'Raw SQL Queries Ajax Insert Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(134, '65', 'Raw Queries', 'Raw SQL Queries Ajax Insert Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(135, '66', 'Raw Queries', 'Raw SQL Queries Ajax Delete Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(136, '67', 'Raw Queries', 'Raw SQL Queries Ajax Update Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Raw%20Query/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(137, '68', 'Query Builder', 'Query Builder Retrieve Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(138, '69', 'Query Builder', 'Query Builder Retrieve Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(139, '70', 'Query Builder', 'Query Builder Aggregates', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(140, '71', 'Query Builder', 'Query Builder Selects', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(141, '72', 'Query Builder ', 'Query Builder Merge', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(142, '73', 'Query Builder', 'Query Builder Left-join Right-join', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(143, '74', 'Query Builder', 'Query Builder Insert Row', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(144, '75', 'Query Builder', 'Query Builder Insert Row', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(145, '76', 'Query Builder', 'Query Builder Delete Data', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(146, '77', 'Query Builder', 'Query Builder Update', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Query%20Builder/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(147, '78', 'Model', 'Eloquent ORM (Model) Start\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/ORM/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(148, '79', 'Model', 'Eloquent ORM Create New Model\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/ORM/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(149, '80', 'Model', 'Eloquent ORM Set Model Properties', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/ORM/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(150, '81', 'Model', 'Eloquent ORM Uses Basic, First Use', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/ORM/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(151, '82', 'Model', ' Model Uses ', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/ORM/blog', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(152, '83', 'Seeder', 'Database Seeder Class', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/seeding/database', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(153, '84', 'Seeder', 'Database Multiple Seeder Class', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/seeding/database', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(154, '85', 'Http Request ', 'Laravel Http Client ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(155, '86', 'Http Request ', 'Laravel Http Client ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(156, '87', 'Http Request ', 'Laravel Http Client ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(157, '88', 'Http Request ', 'Laravel Http Client ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(158, '89', 'Http Request ', 'Laravel Http Client ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(159, '90', 'Frontend Scaffolding', 'Bootstrap Node Package scaffolding', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(160, '91', 'Frontend Scaffolding', 'Bootstrap scaffolding SASS, SCSS ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(161, '92', 'Frontend Scaffolding', 'Bootstrap scaffolding JavaScript', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(162, '93', 'Frontend Scaffolding', 'Laravel React Scafolding ', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(163, '94', 'Frontend Scaffolding', 'React Saffolding Using React Bootstrap', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(164, '95', 'Frontend Scaffolding', 'React Scaffolding Using CSS File', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(165, '96', 'Frontend Scaffolding', 'React Scaffolding SASS/SCSS', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(166, '97', 'Frontend Scaffolding', 'Complete Laravel Bootstrap Project Boiler Plate', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(167, '98', 'Frontend Scaffolding', 'Complete Laravel React Project Boiler Plate', '', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(168, '99', 'Laravel File Storage ', 'File Upload Start', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(169, '100', 'Laravel File Storage ', ' File Upload JS File Properties', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(170, '101', 'Laravel File Storage ', 'File Upload Axios Preparation', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(172, '102', 'Laravel File Storage ', 'File Upload Complete', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(173, '103', 'Laravel File Storage ', 'File Upload Axios Upload Message & Loader', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(174, '104', 'Laravel File Storage ', 'File Upload Percentage Progress', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(175, '105', 'Laravel File Storage ', 'Upload Megabyte (MB) Calculation Progress.mp4', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(176, '1', 'getting started', 'Laravel Lumen Introduction', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/c38d754ddcbee7a7882cd67bd0cba4b624775502\r\n', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(177, '2', 'getting started', 'Laravel Lumen Tools', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/6f567c8d102574b1b74a060e1f7e1948019c13ef', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(178, '3', 'getting started', 'Create And Run New Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/89836c015a97b2d4383dc8771a10652ce95ad700', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(179, '4', 'getting started', 'Lumen API File Structure', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/4816e7de00a0303c0220af32aee9055ec194c32b', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(180, '5', 'Routing', 'Lumen API Basic Routing', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/078de3a33a77a2234902ca896613299c491575f7', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(181, '6', 'Routing', 'Route Prameter\r\n', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/85d262228752736921f191513d28ad12efd9ad5a', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(182, '7', 'Routing', 'What is Rest API & History', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/a0766f13371aca5de2f2fe4ae8eaf876d51a9522', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(183, '8', 'Controller', 'Laravel Lumen API Controller', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/b2a7ae77b519a8d39ac90225a1f0382a2eda8869', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(184, '9', 'Controller', 'Laravel Lumen API Controller', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/5f623974773021ae8974d3bf8118a8d6948df59a', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(185, '10', 'Response', 'API Response', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/1e38f6fa0470cd239eb14203b32e2359176d92e7', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(186, '11', 'Response', 'String Response Body And Header', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/1ca76a2a1e840c34780fd4a59de632afe19e1fa6', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(187, '12', 'Response', 'JSON Response Body', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/0e9306045599d5948ac9e5bb61e08dd90fdd5730', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(188, '13', 'Response', 'Response Redirect And Download', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/319662c5710c640a462429e98760ebc285317817', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(189, '14', 'Request', 'Sending And Catching Request Data', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/f10779125ac650fa0bc724da578f4bc86c34fe08', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(190, '15', 'Request', 'Request Data Send From Client', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/21e0e54aabfca24242f90acb084c709beafc7a2a', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(191, '16', 'API DOC', 'API Documentation (Please Skip This Part)', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/c3cce7887b7fa4b907902b6218bbd0788bf0af8f', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(192, '17', 'API DOC', 'Redoc Swagger (Please Skip This Part)', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/a80c140895113dcfd64519d6bf7298c3c81860c1', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(193, '18', 'API DOC', 'API Documentation JSON File (Please Skip This Part)', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/e380eab501848b5688f231cf80d2700fa5a59624', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(194, '19', 'Database', 'Create New DB And Connect', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/09cc75ac2595a42b79a026b912e5b90ba3cc0ef8', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(195, '20', 'Database', 'Check DB Connection', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/0ef029314169177494ff7997fb56dec7e74e63c5', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(196, '21', 'Database', 'Basic CURD Select', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/9ff4044135ed0b6c8afd05d8c493c9aca34f8d4a', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(197, '22', 'Database', 'Basic CURD Insert', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/eb9189d701ebbaf95fa9a324f6e94bd4af7d149f', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(198, '23', 'Database', 'Basic CURD Delete', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/8a9efccdd4738216b795abf2c5336ab224bc0eec', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(199, '24', 'Database', 'Basic CURD Update', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/990d5a61b6eb532808d47a2243d12e7eb51790f7', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(200, '25', 'Query Builder', 'Query Builder', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/990d5a61b6eb532808d47a2243d12e7eb51790f7', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(201, '26', 'Query Builder', 'Query Builder ', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/b81df7c2be8a843fbd342ceaa0577d1ae7c84357', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(202, '27', 'Query Builder', 'Query Builder ', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/9155807cfe2d4d42eafc734c182970fa3084e706', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(203, '28', 'Query Builder', 'Query Builder ', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/9155807cfe2d4d42eafc734c182970fa3084e706', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(204, '29', 'Query Builder', 'Query Builder ', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/02e6bea9a8daf377b00f7b1e2e7b28bf345c3763', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(205, '30', 'Query Builder', 'Query Builder ', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/2952045fecbd9fffd5095586e36727e6d0cf1621', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(206, '31', 'Third Party', 'Lumen Generator', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/ff6b461d77954f6848b8505c147821728715b475', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(207, '32', 'Model', 'Model Basic', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/31c1f34c30ef52c37235c3b7eb98c8a66987287f', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(208, '33', 'Model', 'Model Properties', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/cb8f1a4e377646f87c650d3dd1f8eca64188001d', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(209, '34', 'Model', 'Select Data Using Model', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/03456b6869139086140af91769a772840380e944', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(210, '35', 'Model', 'Aggregates Using Model', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/106ec704ab98fcbbe569a6205b6c1e3b82d1e24b', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(211, '36', 'Model', 'Insert Using Model', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/787e70839403a2eaec6947da45ffb048ff5985b6', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(212, '37', 'Model', 'Delete Using Model', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/787e70839403a2eaec6947da45ffb048ff5985b6', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(213, '38', 'Model', 'Update Using Model', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/787e70839403a2eaec6947da45ffb048ff5985b6', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(214, '39', 'Migration', 'Database Migration', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/787e70839403a2eaec6947da45ffb048ff5985b6', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(215, '40', 'Migration', 'Database Migration', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/7c26d1c46fb23c720cf2830aa4cf3ffe2ea97c87', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(216, '41', 'Authentication', 'Authentication Basic', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commits/master', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(217, '42', 'Authentication', 'Github Source Code Run', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(218, '43', 'Authentication', 'Lumen Authentication Architecture', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/be2a3fae3c4bfa9790d46b33982aa04aeca89314', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(219, '44', 'Authentication', 'Basic Authentication Apply', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/579aef568fd21afe8b9185b71f5ed316d49cc9e9', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(220, '45', 'Authentication', 'JWT Basic', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/ead4ad5dee241bc15b8f2561bec9c8ffeb468499', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(221, '46', 'Authentication', 'JWT Website Tour', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/ead4ad5dee241bc15b8f2561bec9c8ffeb468499', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(222, '47', 'Authentication', 'JWT Encode Decode', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/commit/ead4ad5dee241bc15b8f2561bec9c8ffeb468499', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(223, '48', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(224, '49', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(225, '50', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(226, '51', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(227, '52', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(228, '53', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(229, '54', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(230, '55', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(231, '56', 'Tiny Project', 'Phone Book Project', 'https://github.com/rupomsoft/Laravel-Rest-API-Bangla-Tutorial-/tree/master/Simple%20Project/phonebook', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(232, '57', 'This video imported from react.js series ', 'How to deploy Lumen API (Linux Cpanel)', '', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(233, '58', 'This video imported from react.js series ', 'How to deploy Lumen API (Linux Cpanel)', '', 'https://player.vimeo.com/video/481386833', 'Lumen-Fundamental'),
(234, '1', 'Getting Started V.1', 'Laravel Website Project Start ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(235, '2', 'Getting Started V.1', 'Create new project and push GitHub ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(236, '3', 'Getting Started V.1', 'Create Master Layout ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(237, '4', 'Getting Started V.1', 'Set navigation menu and run', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(238, '5', 'Getting Started V.1', 'Setting Up Database', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(239, '6', 'Insert Visitor Data From Website V.1', 'Visitor Analytics -Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(240, '7', 'Manage Visitor Data From Admin V.1', 'Visitor Analytics -Admin Panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(241, '8', 'Manage Visitor Data From Admin V.1', 'Visitor Analytics -Admin Panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(242, '9', 'Adding Services and banner section in website V.1', 'Services Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(243, '10', 'Select services from database in website V.1', 'Services Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(244, '11', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(245, '12', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(246, '13', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(247, '14', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(248, '15', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(249, '16', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(250, '17', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(251, '18', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(252, '19', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(253, '20', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(254, '21', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(255, '22', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(256, '23', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(257, '24', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(258, '25', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(259, '26', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(260, '27', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(261, '28', 'Manage services data from admin V.1', 'Services Section- Admin panel ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(262, '29', 'Courses Section website V.1', 'Home Courses Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(263, '30', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(264, '31', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(265, '32', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(266, '33', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(267, '34', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(268, '35', 'Manage courses data from admin V.1', 'Courses Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(269, '36', 'Data table admin V.1', 'Set table pagination,search  ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(270, '37', 'Data table admin V.1', 'Set table Descending order ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(271, '38', 'Project Section website V.1', 'Home Page Projects Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(272, '39', 'Manage Project data from admin V.1', 'Projects Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(273, '40', 'Contact Section website V.1', 'Home Contact Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(274, '41', 'Courses Section website V.1', 'Home Contact Section- Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(275, '42', 'Manage Contact data from admin V.1', 'Contact Section- Admin panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(276, '1', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(277, '2', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(278, '1', 'Getting Started ', 'Laravel+React Online Course Site', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(279, '2', 'Getting Started ', 'Laravel+React Online Course Site', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(280, '3', 'Getting Started ', 'Laravel+React Online Course Site', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(281, '4', 'Getting Started ', 'React Front End Assets', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(282, '5', 'Router ', 'Laravel+React Setting Router', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(283, '6', 'Router ', 'Laravel+React Setting Router', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(284, '7', 'Router ', 'Laravel+React Setting Router', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(285, '3', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(286, '4', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(287, '5', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(288, '6', 'Multipul File Upload', 'Laravel Ajax Multipul File Upload', 'https://github.com/rupomsoft/Laravel-Axios-Multipul-File-Uploader', 'https://player.vimeo.com/video/481386833', 'multipul-file-upload'),
(289, '8', 'Component ', 'Home Page Banner', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(290, '9', 'Component Data', 'Home Course Features Section From Database', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(291, '10', 'npm run watch', 'Important terminal Command npm run watch', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(292, '11', 'CSRF', 'Ensuring CSRF Security In Route', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(293, '12', 'CSRF', 'Ensuring CSRF Security In Route', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(294, '01', 'Troubleshooting', 'Remove Unnecessary Route Before Deploy', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Troubleshooting-Tips'),
(295, '106', 'Laravel File Storage ', 'File Download Request', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(296, '107', 'Laravel File Storage ', 'File Download Request', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(297, '108', 'Laravel File Storage ', 'File Download Request', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(298, '1', 'Social Login ', 'Laravel Social Login Basic ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(299, '2', 'Social Login ', 'Laravel Sign in Sign Up With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(300, '3', 'Social Login ', 'Laravel Login With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(301, '4', 'Social Login ', 'Laravel Sign in Sign Up With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(302, '5', 'Social Login ', 'Laravel Sign in Sign Up With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(303, '6', 'Social Login ', 'Laravel Sign in Sign Up With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(304, '7', 'Social Login ', 'Laravel Sign in Sign Up With Github ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Social-Login'),
(305, '1', 'Laravel-Advance', 'Laravel Events Basic', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(306, '2', 'Laravel-Advance', 'Observer System Architecture Pattern', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(307, '3', 'Laravel-Advance', 'Request Response System Architecture  Pattern', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(308, '4', 'Laravel-Advance', 'Pub Sub System Architecture Pattern', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(309, '5', 'Laravel-Advance', 'Broadcast Channels for Pub-Sub', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(310, '6', 'Laravel-Advance', 'Http And FTP Understanding ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(311, '7', 'Laravel-Advance', 'Web Socket Protocol', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(312, '8', 'Socket Channel Event', 'My First Real-Time Pusher Application', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(313, '9', 'Socket Channel Event ', 'My First Real-Time Pusher Application', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(314, '10', 'Socket Channel Event', 'My First Real-Time Pusher Application', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(315, '11', 'Socket Channel Event ', 'My First Real-Time Pusher Application', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance');
INSERT INTO `class_list` (`id`, `serial_no`, `topic`, `title`, `source`, `video_link`, `category`) VALUES
(316, '12', 'Socket Channel Event', 'My First Real-Time Pusher Application', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Advance'),
(317, '43', 'Review Section Website V.1', 'Review Section - Website ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(318, '44', 'Review Section Admin V.1', 'Review Section - Admin Panel', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(319, '45', 'Footer Section - Website V.1', 'Footer Section - Website', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(320, '46', 'Other\'s - Website V.1', 'Other\'s Controller, Route, Page Creation', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(321, '47', 'Website V.1', 'Course Page, Project Page (Web site )', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(322, '48', 'Website V.1', 'Policy Page, Terms Page (Website)', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(323, '49', 'Website V.1', 'Contact Page (Website)', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(324, '50', 'Website V.1', 'Web page title (Website)', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(325, '51', 'Admin V.1', 'Admin Dashboard Summary ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(326, '52', 'Admin V.1', 'Admin Login', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(327, '53', 'Admin V.1', 'Admin Login', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(328, '54', 'Admin V.1', 'Admin Login', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(329, '109', 'Laravel File Storage ', 'File Download Request', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(330, '110', 'Laravel File Storage ', 'File Delete Request', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(331, '111', 'Laravel File Storage ', 'Working With Public Disk ', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/File%20Download', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(332, '1', 'App Installer ', 'Why And How Application Installer ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(333, '2', 'App Installer ', 'Create And Run Migration Form Controller', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(334, '3', 'App Installer ', 'App Cache Clear From Controller ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(336, '4', 'App Installer ', 'Environment variable changing from controller', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(337, '5', 'App Installer ', 'Environment variable changing from controller', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(338, '6', 'App Installer ', 'Laravel Server Requirement Checking ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(339, '7', 'App Installer ', 'Laravel Server Requirement Checking ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-Application-Installer-Project'),
(340, '13', 'Image File ', 'Image From Public Disk', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(341, '14', 'Image File ', 'Image From Public Disk', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(342, '15', 'component', 'Course Feature Component ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(343, '16', 'component', 'Loading And Went Wrong Component ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(344, '17', 'component', 'Course Feature Component ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(345, '18', 'component', 'Course Feature Component ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(346, '19', 'component', 'Course Plan Component', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(347, '20', 'component', 'Course Plan Component', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(348, '21', 'component', 'Payment Guide Component', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(349, '22', 'component', 'More Series ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(350, '23', 'component', 'Footer Component ', 'https://CodeSilicon.com/paidvideos/Laravel/Sources/OnlineCourse.zip', 'https://player.vimeo.com/video/481386833', 'Laravel-React-Online-Course-Site '),
(351, '112', 'Middleware', 'Laravel Middleware Class', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/690dde8eb00e6f82bdb0722567a93bd9e52138f9', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(352, '113', 'Middleware', 'Laravel Middleware Class', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/690dde8eb00e6f82bdb0722567a93bd9e52138f9', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(353, '114', 'Middleware', 'Laravel Middleware Class', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/commit/690dde8eb00e6f82bdb0722567a93bd9e52138f9', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(354, '115', 'session and cookies\r\n', 'Laravel session and cookies\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Session%20And%20Cookies', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(355, '116', 'session and cookies\r\n', 'Laravel session and cookies\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Session%20And%20Cookies', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(356, '117', 'session and cookies\r\n', 'Laravel session and cookies\r\n', 'https://github.com/rupomsoft/Laravel-Web-Development-Bangla-Tutorial/tree/master/Session%20And%20Cookies', 'https://player.vimeo.com/video/481386833', 'Laravel-Fundamental'),
(357, '1', 'Laravel-SEO', 'Laravel Search Engine Optimization Intro', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(358, '2', 'Laravel-SEO', 'Understanding Search Engine Scrapping', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(359, '3', 'Laravel-SEO', 'Understanding Server Side Rendering', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(360, '4', 'Laravel-SEO', 'Larave SEO Open Graph, twitter card and others meta tag', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(361, '5', 'Laravel-SEO', 'Set Dynamic SEO Properties From Database', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(362, '6', 'Laravel-SEO', 'Set Essential SEO Meta Properties', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(363, '7', 'Laravel-SEO', 'Robots txt file configuration', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(364, '8', 'Laravel-SEO', 'SEO Friendly Route And URL', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(365, '9', 'Laravel-SEO', 'SEO Meta For Dynamic Details Page ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(366, '10', 'Laravel-SEO', 'SEO Meta For Dynamic Details Page ', '#', 'https://player.vimeo.com/video/481386833', 'Laravel-SEO'),
(367, '55', 'Admin V.1', 'Photo Gallery ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(368, '56', 'Admin V.1', 'Photo Gallery ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(369, '57', 'Admin V.1', 'Photo Gallery ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(370, '58', 'Admin V.1', 'Photo Gallery ', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(371, '59', 'Admin V.1', 'Load Photo Gradually Load More Pagination', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(372, '60', 'Admin V.1', 'Load Photo Gradually Load More Pagination', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(373, '61', 'Admin V.1', 'Load Photo Gradually Load More Pagination', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(374, '62', 'Admin V.1', 'Load Photo Gradually Load More Pagination', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(375, '63', 'Admin V.1', 'Load Photo Gradually Load More Pagination', 'https://github.com/rupomsoft/Laravel-Portfolio-website', 'https://player.vimeo.com/video/481386833', 'Website-Project'),
(376, '1', 'Laravel 8 ', 'Whats new in laravel 8', '', 'https://player.vimeo.com/video/481386833', 'Changes in laravel 8'),
(377, '2', 'Laravel 8 ', 'Changes in model folder', '', 'https://player.vimeo.com/video/481386833', 'Changes in laravel 8'),
(378, '3', 'Laravel 8 ', 'Changes in routing ', '', 'https://player.vimeo.com/video/481386833', 'Changes in laravel 8'),
(379, ' 4', 'Laravel 8 ', 'Changes in react scaffolding.', '', 'https://player.vimeo.com/video/481386833', 'Changes in laravel 8');

-- --------------------------------------------------------

--
-- Table structure for table `completed_class`
--

CREATE TABLE `completed_class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phn` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completed_class`
--

INSERT INTO `completed_class` (`id`, `phn`, `ip_address`, `date`, `time`, `video_link`, `title`) VALUES
(45134, '01785388919', '127.0.0.1', '04-12-2020', '08:22:16pm', 'https://player.vimeo.com/video/481386833', 'Laravel session and cookies');

-- --------------------------------------------------------

--
-- Table structure for table `course_feature`
--

CREATE TABLE `course_feature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_feature`
--

INSERT INTO `course_feature` (`id`, `img`, `title`, `des`) VALUES
(1, 'images/basic.svg', 'About Academy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'),
(2, 'images/webpage.svg', 'About Academy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'),
(3, 'images/cube.svg', 'About Academy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'),
(4, 'images/nucleus.svg', 'About Academy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry');

-- --------------------------------------------------------

--
-- Table structure for table `course_plan`
--

CREATE TABLE `course_plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_points` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_plan`
--

INSERT INTO `course_plan` (`id`, `title`, `short_des`, `key_points`, `video`) VALUES
(1, 'How Creative Academy Works', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '<ul>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>          \r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n<li class=\"des-text\">Lorem Ipsum is simply dummy text</li>\r\n</ul>', 'https://www.w3schools.com/html/mov_bbb.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `file_doc`
--

CREATE TABLE `file_doc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_doc`
--

INSERT INTO `file_doc` (`id`, `title`, `doc_url`) VALUES
(1, 'Laravel Web Development Presentation Slide', 'http://codesilicon.com/paidvideos/Laravel/Sources/Laravel.pptx'),
(2, 'Laravel Rest API Presentation Slide', 'http://lumen.rabbil.com/student/Lumen.pptx'),
(3, 'Laravel Migration Excel File', 'http://codesilicon.com/paidvideos/Laravel/Sources/Migration.xlsx'),
(4, 'Query Builder Excel File', 'http://codesilicon.com/paidvideos/Laravel/Sources/QueryBuilder.xlsx'),
(5, 'Model Uses Excel File', 'http://codesilicon.com/paidvideos/Laravel/Sources/ModelUses.xlsx'),
(6, 'Laravel Social Login Registration ', 'http://codesilicon.com/paidvideos/Laravel/Sources/LaravelSocialLogin.pptx'),
(7, 'Laravel Front End Scaffolding ', 'http://codesilicon.com/paidvideos/Laravel/Sources/FrontEndScafolding.pptx'),
(8, 'Laravel Http Client ', 'http://codesilicon.com/paidvideos/Laravel/Sources/HttpClinet.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `free_class`
--

CREATE TABLE `free_class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_class`
--

INSERT INTO `free_class` (`id`, `img`, `title`, `video`) VALUES
(1, 'images/class1.svg', 'Laravel Introduction', 'http://codesilicon.com/paidvideos/Laravel/Video/1.mp4'),
(2, 'images/class2.svg', 'Tools For Laravel', 'http://codesilicon.com/paidvideos/Laravel/Video/2.mp4'),
(3, 'images/class3.svg', 'Create New Project & Run', 'http://codesilicon.com/paidvideos/Laravel/Video/3.mp4'),
(4, 'images/class4.svg', 'Laravel Project Structure', 'http://codesilicon.com/paidvideos/Laravel/Video/4.mp4'),
(5, 'images/class5.svg', 'Laravel MVC Concept', 'http://codesilicon.com/paidvideos/Laravel/Video/5.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `login_fail`
--

CREATE TABLE `login_fail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logtime` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logdate` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logtime` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logdate` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `mobile`, `ip_address`, `logtime`, `logdate`, `course_name`) VALUES
(7728, '01785388919', '127.0.0.1', '08:21:50pm', '04-12-2020', 'Laravel');

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
(1, '2020_04_30_223436_notice_table', 1),
(2, '2020_04_30_223448_all_class_table', 1),
(3, '2020_04_30_223506_class_category_table', 1),
(4, '2020_04_30_223521_course_feature_table', 1),
(5, '2020_04_30_223529_course_plan_table', 1),
(6, '2020_04_30_223537_file_doc_table', 1),
(7, '2020_04_30_223545_free_class_table', 1),
(8, '2020_04_30_223552_more_series_table', 1),
(9, '2020_04_30_223600_payment_guide_table', 1),
(10, '2020_04_30_223608_refund_table', 1),
(11, '2020_04_30_223637_student_table', 1),
(12, '2020_04_30_223713_login_infromation_table', 1),
(13, '2020_04_30_223725_admin_table', 1),
(14, '2020_04_30_225705_terms_table', 1),
(15, '2020_04_30_225841_login_fail_table', 1),
(16, '2020_04_30_225914_visitor_table', 1),
(18, '2020_05_03_001001_completed_class_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `more_series`
--

CREATE TABLE `more_series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `more_series`
--

INSERT INTO `more_series` (`id`, `img`, `title`, `des`, `code`, `fee`) VALUES
(1, 'images/asp.png', 'ASP.NET', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C1', '2000 TK'),
(2, 'images/laravellogo.png', 'Lumen', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C2', '2000 TK'),
(3, 'images/androidlogo.png', 'Android', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C3', '2000 TK'),
(4, 'images/dartlogo.png', 'Dart', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C4', '2000 TK'),
(5, 'images/javalogo.png', 'Java', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C5', '2000 TK'),
(6, 'images/reactlogo.png', 'React js', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C6', '2000 TK'),
(7, 'images/reactlogo.png', 'React Native', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'C7', '2000 TK');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `des`) VALUES
(1, 'আপডেট পেতে , প্রশ্ন কিংবা আলোচনার জন্যে ফেছবুক গ্রুপে জয়েন করুন। আপনি যে কোনো বিষয়ে প্রশ্ন করতে পারেন। তবে প্রতি সপ্তাহের শুক্র-শনিবার সারাদিন আমাকে ONLINE এ পাবেন। এছাড়া সপ্তাহের বাকি দিনে রাত ১০টার পরে ONLINE এ পাবেন। API DEVELOPMENT অংশে আপলোড সম্পূর্ণ হয়েছে। WEB DEVELOPMENT অংশে দ্রুত আপলোড চলছে ।'),
(2, 'সম্পুর্ন কোর্স শেষ হওয়ার সম্ভাব্য সময় ১৬ মে ২০২০ , কোর্স শেষেও আপনার রেজিঃ আজীবন ');

-- --------------------------------------------------------

--
-- Table structure for table `payment_guide`
--

CREATE TABLE `payment_guide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_guide`
--

INSERT INTO `payment_guide` (`id`, `des`, `price`, `banner`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not on', '5', 'images/offer.png');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`id`, `des`) VALUES
(1, '<ul>\r\n<li >After tutorial account activation money back is not available.</p></li>\r\n<li><p>THIS IS NOT A BUY-AND-TRY PRODUCT</p></li>\r\n<li >Refund is applicable for software and plugins, if the products aren\'t functioning, producing errors or you haven\'t received access to them at any time during the first 7 days after purchase, please get in touch with our support team immediately. If we are unable to provide you a working solution within 3 business days, simply delete all digital files and license keys you obtained from us, and ask for a full refund. You will get your refund processed within 7 days or early. That\'s a firm promise and commitment.</li>\r\n<li><p> To serve you and others better in the future, we require that you tell us why you want a refund and provide us with an opportunity to help you fix the issue. We want satisfied customers.</p></li>	\r\n<li><p> Please remember that asking for a refund but continuing to use products purchased from us is the same thing as stealing and also violate applicable intellectual property rights law.</p></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `name`, `email`, `pass`, `phn`, `status`) VALUES
(356, 'Rabbil', 'Rabbil@Rabbil.com', '01785388919', '01785388919', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `des`) VALUES
(1, '		<ul>\r\n				<li class=\"des-text\"><p>BY ACCESSING OR USING THIS SITE YOU REPRESENT THAT YOU HAVE THE FULL AUTHORITY TO ACT TO BIND YOURSELF, ANY THIRD PARTY, COMPANY, OR LEGAL ENTITY, AND THAT YOUR USE AND/OR INTERACTION, AS WELL AS CONTINUING TO USE OR INTERACT, WITH THE SITE CONSTITUTES YOUR HAVING READ AND AGREED TO THESE TERMS OF USE AS WELL AS OTHER AGREEMENTS THAT WE MAY POST ON THE SITE.</p></li>\r\n				<li class=\"des-text\"><p>BY VIEWING, VISITING, USING, OR INTERACTING WITH THIS SITE OR WITH ANY BANNER, POP-UP, OR ADVERTISING THAT APPEARS ON IT, YOU ARE AGREEING TO ALL THE PROVISIONS OF THIS TERMS OF USE POLICY AND THE PRIVACY POLICY OF this site.</p></li>\r\n				<li class=\"des-text\"><p>THIS SITE SPECIFICALLY DENIES ACCESS TO ANY INDIVIDUAL THAT IS COVERED BY THE CHILDREN\'S ONLINE PRIVACY PROTECTION ACT (COPPA) OF 1998.</p></li>\r\n				<li class=\"des-text\"><p>THIS SITE RESERVES THE RIGHT TO DENY ACCESS TO ANY PERSON OR VIEWER FOR ANY LAWFUL REASON. UNDER THE TERMS OF THE PRIVACY POLICY, WHICH YOU ACCEPT AS A CONDITION FOR VIEWING, THIS SITE IS ALLOWED TO COLLECT AND STORE DATA AND INFORMATION FOR THE PURPOSE OF EXCLUSION AND FOR MANY OTHER USES.</p></li>\r\n				<li class=\"des-text\"><p>THIS TERMS OF USE AGREEMENT MAY CHANGE FROM TIME TO TIME. VISITORS HAVE AN AFFIRMATIVE DUTY, AS PART OF THE CONSIDERATION FOR PERMISSION TO ACCESS this site, TO KEEP THEMSELVES INFORMED OF SUCH CHANGES BY REVIEWING THIS TERMS OF USE PAGE EACH TIME THEY VISIT THIS SITE.</p></li>	\r\n			</ul>\r\n			<ul> \r\n				<h5>PARTIES TO THE TERMS OF USE AGREEMENT</h5>\r\n				<li class=\"des-text\"><p>Visitors, viewers, users, subscribers, members, affiliates, or customers, collectively referred to herein as “Visitors,” are parties to this agreement. The website and its owners and/or operators are parties to this agreement, herein referred to as “Website.” </p></li>\r\n				<h5>USE OF INFORMATION FROM THIS WEBSITE </h5>\r\n				<li class=\"des-text\"><p>Unless you have entered into an express written contract with thi');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_time` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_date` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `visit_time`, `visit_date`) VALUES
(24995, '127.0.0.1', '07:33:02pm', '04-12-2020'),
(24996, '127.0.0.1', '07:33:54pm', '04-12-2020'),
(24997, '127.0.0.1', '07:33:57pm', '04-12-2020'),
(24998, '127.0.0.1', '07:34:01pm', '04-12-2020'),
(24999, '127.0.0.1', '07:37:14pm', '04-12-2020'),
(25000, '127.0.0.1', '07:37:40pm', '04-12-2020'),
(25001, '127.0.0.1', '07:37:51pm', '04-12-2020'),
(25002, '127.0.0.1', '07:38:31pm', '04-12-2020'),
(25003, '127.0.0.1', '07:39:01pm', '04-12-2020'),
(25004, '127.0.0.1', '07:39:06pm', '04-12-2020'),
(25005, '127.0.0.1', '07:39:27pm', '04-12-2020'),
(25006, '127.0.0.1', '07:39:58pm', '04-12-2020'),
(25007, '127.0.0.1', '07:40:27pm', '04-12-2020'),
(25008, '127.0.0.1', '07:40:46pm', '04-12-2020'),
(25009, '127.0.0.1', '07:41:12pm', '04-12-2020'),
(25010, '127.0.0.1', '07:42:06pm', '04-12-2020'),
(25011, '127.0.0.1', '07:42:30pm', '04-12-2020'),
(25012, '127.0.0.1', '07:44:50pm', '04-12-2020'),
(25013, '127.0.0.1', '07:44:58pm', '04-12-2020'),
(25014, '127.0.0.1', '07:45:13pm', '04-12-2020'),
(25015, '127.0.0.1', '07:45:21pm', '04-12-2020'),
(25016, '127.0.0.1', '07:45:28pm', '04-12-2020'),
(25017, '127.0.0.1', '07:53:25pm', '04-12-2020'),
(25018, '127.0.0.1', '07:53:53pm', '04-12-2020'),
(25019, '127.0.0.1', '07:54:42pm', '04-12-2020'),
(25020, '127.0.0.1', '07:57:31pm', '04-12-2020'),
(25021, '127.0.0.1', '07:58:20pm', '04-12-2020'),
(25022, '127.0.0.1', '08:18:58pm', '04-12-2020'),
(25023, '127.0.0.1', '08:19:15pm', '04-12-2020'),
(25024, '127.0.0.1', '08:23:16pm', '04-12-2020'),
(25025, '127.0.0.1', '08:24:03pm', '04-12-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_category`
--
ALTER TABLE `class_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_class`
--
ALTER TABLE `completed_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_feature`
--
ALTER TABLE `course_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_plan`
--
ALTER TABLE `course_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_doc`
--
ALTER TABLE `file_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_class`
--
ALTER TABLE `free_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_fail`
--
ALTER TABLE `login_fail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_series`
--
ALTER TABLE `more_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_guide`
--
ALTER TABLE `payment_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_category`
--
ALTER TABLE `class_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `class_list`
--
ALTER TABLE `class_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT for table `completed_class`
--
ALTER TABLE `completed_class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45135;

--
-- AUTO_INCREMENT for table `course_feature`
--
ALTER TABLE `course_feature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_plan`
--
ALTER TABLE `course_plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `file_doc`
--
ALTER TABLE `file_doc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `free_class`
--
ALTER TABLE `free_class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_fail`
--
ALTER TABLE `login_fail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1682;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7729;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `more_series`
--
ALTER TABLE `more_series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_guide`
--
ALTER TABLE `payment_guide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25026;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
