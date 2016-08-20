-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2016 at 11:50 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hlcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_keyword`
--

CREATE TABLE `article_keyword` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `keyword_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_picture`
--

CREATE TABLE `article_picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `picture_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `activated`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'یبیب', 1, 2, '2016-08-17 04:17:02', '2016-08-17 04:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `province_id`, `name`) VALUES
(1, 31, 'سمیرم'),
(2, 31, 'نائین'),
(3, 31, 'نجف آباد'),
(4, 31, 'نطنز'),
(5, 31, 'زرین شهر ـ لنجان'),
(6, 31, 'زیبا شهر'),
(7, 31, 'مبارکه'),
(8, 31, 'شهرضا'),
(9, 31, 'دهاقان'),
(10, 31, 'داران'),
(11, 31, 'فریدون شهر'),
(12, 31, 'فلاورجان'),
(13, 31, 'دریجان'),
(14, 31, 'کاشان'),
(15, 31, 'قمصر'),
(16, 31, 'جوشقان و کامو'),
(17, 31, 'گلپایگان'),
(18, 31, 'زاینده رود'),
(19, 31, 'سده لنجان'),
(20, 31, 'فولادشهر'),
(21, 31, 'باغ بهادران'),
(22, 31, 'آران وبیدگل'),
(23, 31, 'اردستان'),
(24, 31, 'اصفهان'),
(25, 31, 'شاهین دژ'),
(26, 31, 'میمه'),
(27, 31, 'تیران'),
(28, 31, 'رضوان شهر'),
(29, 31, 'چادگان'),
(30, 31, 'خمینی شهر'),
(31, 31, 'خوانسار'),
(32, 71, 'شیراز'),
(33, 71, 'اردکان'),
(34, 71, 'ارسنجان'),
(35, 71, 'استهبان'),
(36, 71, 'اقلید'),
(37, 71, 'اوز'),
(38, 71, 'آباده'),
(39, 71, 'بوانات'),
(40, 71, 'جهرم'),
(41, 71, 'گله دار'),
(42, 71, 'لار ـ لارستان'),
(43, 71, 'لامرد'),
(44, 71, 'مرودشت'),
(45, 71, 'نورآباد ـ ممسنی'),
(46, 71, 'نی ریز'),
(47, 71, 'مهر'),
(48, 71, 'گراش'),
(49, 71, 'کازرون'),
(50, 71, 'حاجی آباد'),
(51, 71, 'خنج'),
(52, 71, 'خور'),
(53, 71, 'داراب'),
(54, 71, 'داریان'),
(55, 71, 'سروستان'),
(56, 71, 'سعادت شهر ـ پاسارگاد'),
(57, 71, 'سیدان'),
(58, 71, 'صفاشهر ـ خرم بید'),
(59, 71, 'فراشبند'),
(60, 71, 'فسا'),
(61, 71, 'فیروزآباد'),
(62, 71, 'قیر'),
(63, 71, 'کارزین'),
(64, 61, 'آبادان'),
(65, 61, 'امیدیه'),
(66, 61, 'اندیمشک'),
(67, 61, 'اهواز'),
(68, 61, 'حمیدیه'),
(69, 61, 'شادگان'),
(70, 61, 'دارخوین'),
(71, 61, 'شوش'),
(72, 61, 'شوشتر'),
(73, 61, 'گتوند'),
(74, 61, 'مسجد سلیمان'),
(75, 61, 'قلعه خواجه'),
(76, 61, 'لالی'),
(77, 61, 'هندیجان'),
(78, 61, 'رامشیر'),
(79, 61, 'هفتگل'),
(80, 61, 'ایذه'),
(81, 61, 'باغ ملک'),
(82, 61, 'بهبهان'),
(83, 61, 'آغاجاری'),
(84, 61, 'بندر ماهشهر'),
(85, 61, 'چمران'),
(86, 61, 'بندر امام خمینی'),
(87, 61, 'خرمشهر'),
(88, 61, 'مینوشهر'),
(89, 61, 'دزفول'),
(90, 61, 'سوسنگرد'),
(91, 61, 'بستان'),
(92, 61, 'هویزه'),
(93, 61, 'رامهرمز'),
(94, 15, 'بهشهر'),
(95, 15, 'تنکابن'),
(96, 15, 'جویبار'),
(97, 15, 'چالوس'),
(98, 15, 'چمستان'),
(99, 15, 'خرم آباد'),
(100, 15, 'رامسر'),
(101, 15, 'رویان'),
(102, 15, 'ساری'),
(103, 15, 'سلمانشهر'),
(104, 15, 'عباس آباد'),
(105, 15, 'فریدونکنار'),
(106, 15, 'قایم شهر'),
(107, 15, 'کلار آباد'),
(108, 15, 'بلده'),
(109, 15, 'بابلسر'),
(110, 15, 'آلاشت'),
(111, 15, 'آمل'),
(112, 15, 'ایزد شهر'),
(113, 15, 'بابل'),
(114, 15, 'کلاردشت'),
(115, 15, 'کیاسر'),
(116, 15, 'گلوگاه'),
(117, 15, 'محمود آباد'),
(118, 15, 'مرزن آباد'),
(119, 15, 'نشتارود'),
(120, 15, 'نکا'),
(121, 15, 'نور'),
(122, 15, 'نوشهر'),
(123, 13, 'آستارا'),
(124, 13, 'آستانه اشرفیه'),
(125, 13, 'اسالم'),
(126, 13, 'املش'),
(127, 13, 'بره سر'),
(128, 13, 'بندر انزلی'),
(129, 13, 'توتکابن'),
(130, 13, 'چابکسر'),
(131, 13, 'خشکبیجار'),
(132, 13, 'لاهیجان'),
(133, 13, 'لشت نشاء'),
(134, 13, 'لنگرود'),
(135, 13, 'لوشان'),
(136, 13, 'ماسال'),
(137, 13, 'ماسوله'),
(138, 13, 'منجیل'),
(139, 13, 'هشتپر'),
(140, 13, 'کیاشهر'),
(141, 13, 'کوچصفهان'),
(142, 13, 'خمام'),
(143, 13, 'دیلمان'),
(144, 13, 'رحیم آباد'),
(145, 13, 'رشت'),
(146, 13, 'رضوان شهر'),
(147, 13, 'رودبار'),
(148, 13, 'رودینه'),
(149, 13, 'رودسر'),
(150, 13, 'سنگر'),
(151, 13, 'سیاهکل'),
(152, 13, 'شفت'),
(153, 13, 'صومعه سرا'),
(154, 13, 'فومن'),
(155, 13, 'کلاچای'),
(156, 51, 'بردسکن'),
(157, 51, 'تایباد'),
(158, 51, 'تربت جام'),
(159, 51, 'صالح آباد'),
(160, 51, 'نصرآباد'),
(161, 51, 'تربت حیدریه'),
(162, 51, 'فیض آباد'),
(163, 51, 'چناران'),
(164, 51, 'کلات'),
(165, 51, 'نیشابور'),
(166, 51, 'فیروزه'),
(167, 51, 'شاندیز'),
(168, 51, 'طرقبه'),
(169, 51, 'خواف'),
(170, 51, 'درگز'),
(171, 51, 'رشتخوار'),
(172, 51, 'سبزوار'),
(173, 51, 'سرخس'),
(174, 51, 'فریمان'),
(175, 51, 'قوچان'),
(176, 51, 'کاشمر'),
(177, 51, 'خلیل آباد'),
(178, 51, 'گناباد'),
(179, 51, 'بجستان'),
(180, 51, 'مشهد'),
(181, 51, 'ملک آباد'),
(182, 51, 'رضویه'),
(183, 41, 'اسکو'),
(184, 41, 'مرند'),
(185, 41, 'ملکان'),
(186, 41, 'میانه'),
(187, 41, 'ترکمانچای'),
(188, 41, 'ورزقان'),
(189, 41, 'هریس'),
(190, 41, 'هشترود'),
(191, 41, 'نظرکهریزی'),
(192, 41, 'مراغه'),
(193, 41, 'کلیبر'),
(194, 41, 'آذرشهر'),
(195, 41, 'ممقان'),
(196, 41, 'اهر'),
(197, 41, 'هوراند'),
(198, 41, 'بستان آباد'),
(199, 41, 'بناب'),
(200, 41, 'تبریز'),
(201, 41, 'جلفا'),
(202, 41, 'سراب'),
(203, 41, 'خامنه'),
(204, 41, 'شبستر'),
(205, 41, 'تسوج'),
(206, 41, 'صوفیان'),
(207, 41, 'عجب شیر'),
(208, 44, 'ارومیه'),
(209, 44, 'قوشچی'),
(210, 44, 'اشنویه'),
(211, 44, 'بوکان'),
(212, 44, 'پیرانشهر'),
(213, 44, 'تکاب'),
(214, 44, 'خوی'),
(215, 44, 'قره ضیاالدین'),
(216, 44, 'سردشت'),
(217, 44, 'سلماس'),
(218, 44, 'شاهین دژ'),
(219, 44, 'ماکو'),
(220, 44, 'بازرگان'),
(221, 44, 'پلدشت'),
(222, 44, 'مهاباد'),
(223, 44, 'میاندوآب'),
(224, 44, 'نقده'),
(225, 76, 'بندر عباس'),
(226, 76, 'بندر لنگه'),
(227, 76, 'چارک'),
(228, 76, 'حاجی آباد'),
(229, 76, 'خمیر'),
(230, 76, 'درگهان'),
(231, 76, 'دهبارز'),
(232, 76, 'سیریک'),
(233, 76, 'قشم'),
(234, 76, 'کیش'),
(235, 76, 'میناب'),
(236, 76, 'هرمز'),
(237, 76, 'ابوموسی'),
(238, 76, 'بستک'),
(239, 76, 'بندر جاسک'),
(240, 34, 'اختیار آباد'),
(241, 34, 'انار'),
(242, 34, 'بافت'),
(243, 34, 'بردسیر'),
(244, 34, 'بم'),
(245, 34, 'بهرمان'),
(246, 34, 'جیرفت'),
(247, 34, 'راور'),
(248, 34, 'رفسنجان'),
(249, 34, 'رودبار'),
(250, 34, 'زرند'),
(251, 34, 'سیرجان'),
(252, 34, 'شهر بابک'),
(253, 34, 'کرمان'),
(254, 34, 'عنبر آباد'),
(255, 34, 'قلعه گنج'),
(256, 34, 'کوهبنان'),
(257, 34, 'کهنوج'),
(258, 34, 'کیانشهر'),
(259, 34, 'محمد آباد'),
(260, 34, 'مس سرچشمه'),
(261, 34, 'ملوجان'),
(262, 34, 'نجف آباد'),
(263, 34, 'نودژ'),
(264, 34, 'هجدک'),
(265, 34, 'یزدان شهر'),
(266, 77, 'بوشهر'),
(267, 77, 'خارک'),
(268, 77, 'دلوار'),
(269, 77, 'جم'),
(270, 77, 'برازجان'),
(271, 77, 'کلمه'),
(272, 77, 'خورموج'),
(273, 77, 'بندردیر'),
(274, 77, 'بندر دیلم'),
(275, 77, 'بندر کنگان'),
(276, 77, 'عسلویه'),
(277, 77, 'بندر گناوه'),
(278, 77, 'بندر ریگ'),
(279, 35, 'طبس'),
(280, 35, 'مروست'),
(281, 35, 'مهریز'),
(282, 35, 'میبد'),
(283, 35, 'ندوشن'),
(284, 35, 'نیر'),
(285, 35, 'هرات'),
(286, 35, 'یزد'),
(287, 35, 'زارچ'),
(288, 35, 'تفت'),
(289, 35, 'اردکان'),
(290, 35, 'اشکذر'),
(291, 35, 'بافق'),
(292, 26, 'اندیشه'),
(293, 26, 'اشتهارد'),
(294, 26, 'صباشهر'),
(295, 26, 'رباط کریم'),
(296, 26, 'شاهد شهر'),
(297, 26, 'صفادشت'),
(298, 26, 'طالقان'),
(299, 26, 'قدس'),
(300, 26, 'کرج'),
(301, 26, 'گلستان'),
(302, 26, 'ملارد'),
(303, 26, 'نظرآباد'),
(304, 26, 'هشتگرد'),
(305, 26, 'فردیس'),
(306, 26, 'مهرشهر'),
(307, 17, 'کلاله'),
(308, 17, 'گالیکش'),
(309, 17, 'گرگان'),
(310, 17, 'گمیش تپه'),
(311, 17, 'گنبد کاووس'),
(312, 17, 'مراوه تپه'),
(313, 17, 'مینو دشت'),
(314, 17, 'کرد کوی'),
(315, 17, 'علی آباد'),
(316, 17, 'اینچه برون'),
(317, 17, 'آزادشهر'),
(318, 17, 'آق قلا'),
(319, 17, 'بندر ترکمن'),
(320, 17, 'بندر گز'),
(321, 17, 'خان ببین'),
(322, 17, 'دلند'),
(323, 17, 'رامیان'),
(324, 17, 'سیمین شهر'),
(325, 25, 'جعفریه'),
(326, 25, 'دستجرد'),
(327, 25, 'سلفچگان'),
(328, 25, 'قم'),
(329, 25, 'قنوات'),
(330, 25, 'کهک'),
(331, 54, 'زهک'),
(332, 54, 'زاهدان'),
(333, 54, 'میرجاوه'),
(334, 54, 'نصرت آباد'),
(335, 54, 'سراوان'),
(336, 54, 'سوران'),
(337, 54, 'راسک'),
(338, 54, 'نیک شهر'),
(339, 54, 'زابل'),
(340, 54, 'خاش'),
(341, 54, 'ایرانشهر'),
(342, 54, 'چابهار'),
(343, 54, 'کنارک'),
(344, 86, 'شازند'),
(345, 86, 'کمیجان'),
(346, 86, 'محلات'),
(347, 86, 'ساوه'),
(348, 86, 'دلیجان'),
(349, 86, 'آستانه'),
(350, 86, 'اراک'),
(351, 86, 'آشتیان'),
(352, 86, 'پرندک'),
(353, 86, 'تفرش'),
(354, 86, 'خمین'),
(355, 86, 'خنداب'),
(356, 83, 'روانسر'),
(357, 83, 'سر پل ذهاب'),
(358, 83, 'سنقر'),
(359, 83, 'سومار'),
(360, 83, 'صحنه'),
(361, 83, 'قصر شیرین'),
(362, 83, 'کرمانشاه'),
(363, 83, 'کرند غرب'),
(364, 83, 'کنگاور'),
(365, 83, 'گیلانغرب'),
(366, 83, 'هرسین'),
(367, 83, 'جوانرود'),
(368, 83, 'تازه آباد'),
(369, 83, 'اسلام آباد غرب'),
(370, 83, 'پاوه'),
(371, 81, 'همدان'),
(372, 81, 'اسد آباد'),
(373, 81, 'بهار'),
(374, 81, 'تویسرکان'),
(375, 81, 'جورقان'),
(376, 81, 'رزن'),
(377, 81, 'قهاوند'),
(378, 81, 'کبودرآهنگ'),
(379, 81, 'ملایر'),
(380, 81, 'نهاوند'),
(381, 66, 'ازنا'),
(382, 66, 'اشترینان'),
(383, 66, 'الشتر'),
(384, 66, 'الیگودرز'),
(385, 66, 'بروجرد'),
(386, 66, 'پلدختر'),
(387, 66, 'چالانچولان'),
(388, 66, 'چغلوندی'),
(389, 66, 'خرم آباد'),
(390, 66, 'دورود'),
(391, 66, 'زاغه'),
(392, 66, 'سپیدشت'),
(393, 66, 'سراب دوره'),
(394, 66, 'فیروزآباد'),
(395, 66, 'کوهدشت'),
(396, 66, 'معمولان'),
(397, 66, 'نورآباد ـ دلفان'),
(398, 66, 'ویسیان'),
(399, 28, 'ضیا آباد'),
(400, 28, 'قزوین'),
(401, 28, 'اقبالیه'),
(402, 28, 'الوند'),
(403, 28, 'آبگرم'),
(404, 28, 'آبیک'),
(405, 28, 'آوج'),
(406, 28, 'بوئین زهرا'),
(407, 28, 'تاکستان'),
(408, 28, 'خرمدشت'),
(409, 23, 'دامغان'),
(410, 23, 'سمنان'),
(411, 23, 'سرخه'),
(412, 23, 'مهدی شهر'),
(413, 23, 'شهمیرزاد'),
(414, 23, 'شاهرود'),
(415, 23, 'بسطام'),
(416, 23, 'میامی'),
(417, 23, 'گرمسار'),
(418, 23, 'آرادان'),
(419, 23, 'ایوانکی'),
(420, 87, 'قروه'),
(421, 87, 'کامیاران'),
(422, 87, 'مریوان'),
(423, 87, 'صاحب'),
(424, 87, 'سنندج'),
(425, 87, 'بانه'),
(426, 87, 'بیجار'),
(427, 87, 'دزج'),
(428, 87, 'دلبران'),
(429, 87, 'دهگلان'),
(430, 87, 'دیواندره'),
(431, 87, 'سرو آباد'),
(432, 87, 'سقز'),
(433, 45, 'گرمی'),
(434, 45, 'مشگین شهر'),
(435, 45, 'رضی'),
(436, 45, 'نمین'),
(437, 45, 'نیر'),
(438, 45, 'گیوی'),
(439, 45, 'خلخال'),
(440, 45, 'اردبیل'),
(441, 45, 'سرعین'),
(442, 45, 'بیله سوار'),
(443, 45, 'پارس آباد'),
(444, 45, 'اصلان دوز'),
(445, 24, 'ماه نشان'),
(446, 24, 'ابهر'),
(447, 24, 'زرین آباد'),
(448, 24, 'قیدار'),
(449, 24, 'سهرورد'),
(450, 24, 'خرمدره'),
(451, 24, 'زنجان'),
(452, 38, 'اردل'),
(453, 38, 'بروجن'),
(454, 38, 'شهرکرد'),
(455, 38, 'فارسان'),
(456, 38, 'چلگرد'),
(457, 38, 'لردگان'),
(458, 74, 'دهدشت'),
(459, 74, 'دیشموک'),
(460, 74, 'سی سخت'),
(461, 74, 'قلعه رئیسی'),
(462, 74, 'لیکک'),
(463, 74, 'یاسوج'),
(464, 74, 'باشت'),
(465, 74, 'چرام'),
(466, 74, 'دوگنبدان'),
(467, 56, 'نهبندان'),
(468, 56, 'قائن'),
(469, 56, 'اسفدن'),
(470, 56, 'حاجی آباد'),
(471, 56, 'سرایان'),
(472, 56, 'اسلامیه'),
(473, 56, 'فردوس'),
(474, 56, 'بشرویه'),
(475, 56, 'سربیشه'),
(476, 56, 'بیرجند'),
(477, 58, 'بجنورد'),
(478, 58, 'گرمه جاجرم'),
(479, 58, 'شیروان'),
(480, 58, 'اسفراین'),
(481, 58, 'آشخانه'),
(482, 58, 'قاضی'),
(483, 58, 'پیش قلعه'),
(484, 58, 'فاروج'),
(485, 84, 'آبدانان'),
(486, 84, 'ایلام'),
(487, 84, 'ایوان'),
(488, 84, 'دره شهر'),
(489, 84, 'دهلران'),
(490, 84, 'سرابله'),
(491, 84, 'مهران'),
(492, 21, 'اسلامشهر'),
(493, 21, 'آبعلی'),
(494, 21, 'باقر شهر'),
(495, 21, 'بومهن'),
(496, 21, 'پاکدشت'),
(497, 21, 'پردیس'),
(498, 21, 'ورامین'),
(499, 21, 'لواسان'),
(500, 21, 'کهریزک'),
(501, 21, 'پیشوا'),
(502, 21, 'تجریش'),
(503, 21, 'تهران'),
(504, 21, 'چهاردانگه'),
(505, 21, 'حسن آباد'),
(506, 21, 'دماوند'),
(507, 21, 'رودهن'),
(508, 21, 'ری'),
(509, 21, 'فشم'),
(510, 21, 'فیروزکوه'),
(511, 21, 'قرچک'),
(512, 21, 'آبسرد'),
(513, 21, 'شهریار'),
(514, 21, 'رباط کریم'),
(515, 31, 'شاهین شهر'),
(516, 44, 'شوط');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `title`, `activated`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'غعغع', 1, 2, '2016-08-17 05:54:16', '2016-08-17 05:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_15_104346_add_newsletter_to_users_table', 2),
('2016_07_17_121241_create_city_table', 3),
('2016_07_18_074850_create_province_table', 3),
('2016_07_26_050921_create_keywords_table', 3),
('2016_07_26_051157_create_article_keyword_table', 3),
('2016_07_26_051758_create_categories_table', 3),
('2016_07_26_051825_create_article_categories_table', 3),
('2016_07_26_052818_create_articles_table', 3),
('2016_07_26_092752_create_pictures_table', 3),
('2016_07_26_093954_create_article_picture_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `title`, `picture`, `activated`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'yfu', 'D:\\xampp\\tmp\\php6685.tmp', 1, 2, '2016-08-17 06:22:12', '2016-08-17 06:22:12'),
(6, 'uiui', 'D:\\xampp\\tmp\\phpB7F8.tmp', 1, 2, '2016-08-17 06:24:44', '2016-08-17 06:24:44'),
(7, 'fsff', 'D:\\xampp\\tmp\\php7E6.tmp', 1, 2, '2016-08-17 06:30:32', '2016-08-17 06:30:32'),
(8, 'ffh', 'D:\\xampp\\tmp\\php1D6D.tmp', 1, 2, '2016-08-17 06:31:43', '2016-08-17 06:31:43'),
(9, 'dfyhdfyh', 'D:\\xampp\\tmp\\php97AB.tmp', 1, 2, '2016-08-17 06:33:20', '2016-08-17 06:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(13, 'گیلان'),
(15, 'مازندران'),
(17, 'گلستان'),
(21, 'تهران'),
(23, 'سمنان'),
(24, 'زنجان'),
(25, 'قم'),
(26, 'البرز'),
(28, 'قزوین'),
(31, 'اصفهان'),
(34, 'كرمان'),
(35, 'یزد'),
(38, 'چهارمحال بختیاری'),
(41, 'آذربایجان شرقی'),
(44, 'آذربایجان غربی'),
(45, 'اردبیل'),
(51, 'خراسان رضوی'),
(54, 'سیستان و بلوچستان'),
(56, 'خراسان جنوبی'),
(58, 'خراسان شمالی'),
(61, 'خوزستان'),
(66, 'لرستان'),
(71, 'فارس'),
(74, 'كهكیلویه وبویراحمد'),
(76, 'هرمزگان'),
(77, 'بوشهر'),
(81, 'همدان'),
(83, 'كرمانشاه'),
(84, 'ایلام'),
(86, 'مركزی'),
(87, 'كردستان');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `birthday` timestamp NULL DEFAULT NULL,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `birthday`, `newsletter`) VALUES
(1, 'leili', 'salam@gmail.com', '$2y$10$2/ZTQHNYV.xi2KHPxjewv./w79MwxOlShfzADRa/GOXlkE/NqlB2.', 'tWYCMqQTgKcqH80BGBkAiEEirQYgkzwnFr9aJJpIrr2WPU4mRjpgblT0wcL3', '2016-08-14 08:35:52', '2016-08-15 06:10:55', NULL, 0),
(2, 'tyy', 'sa7lam@gmail.com', '$2y$10$tOVkK75O.iQz4PRyaoyKAe6sUFkIuE.bG6vImnxOaEszuxwdRLPUa', 'KBGloY801ywi2bVihKC9c3aXDuxdnCqfovkn6acFiPbCqMdsADeYl5LJwvXD', '2016-08-16 07:14:26', '2016-08-16 07:25:03', '1981-04-21 19:30:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_keyword`
--
ALTER TABLE `article_keyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_picture`
--
ALTER TABLE `article_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_keyword`
--
ALTER TABLE `article_keyword`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_picture`
--
ALTER TABLE `article_picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
