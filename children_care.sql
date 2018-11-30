-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 06:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `children_care`
--
CREATE DATABASE IF NOT EXISTS `children_care` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `children_care`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_post` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `post`, `img`, `img_post`) VALUES
(1, 'Baby Food', 'Baby Food', 'Baby food is any soft, easily consumed food other than breastmilk or infant formula that is made specifically for human babies between four to six months and two years old. The food comes in many varieties and flavors that are purchased ready-made from producers.', './image/images (5).jpeg', './image/images (7).jpeg'),
(2, 'More Common Diseases', 'Keep your Baby ', 'Babies are most vulnerable just after birth. They pick up infections easily or may be born with certain congenital conditions. Every new mother needs to know what to look out for and when the condition of the baby is serious.', './image/233134306-H.jpg', './image/233134306-H.jpg'),
(3, 'Baby Vaccinations', 'Protect Your Child at Every Ages', 'Keep Your Child Up-to-Date Every dose of a vaccine is important for best protection against infectious diseases that are threats today and can be especially serious for infants and very young children. Help your child maintain immunity against potentially harmful diseases by staying on track with the recommended vaccine schedule.', './image/images (3).jpeg', './image/images (2).jpeg'),
(4, 'Baby Normal Weight', 'Understanding baby size', 'Babies come in all shapes and sizes, and weight ranges can vary drastically.<br>As your baby grows, their rate of weight gain will be an important indicator for overall health and development. Your baby’s pediatrician will monitor weight, length, and head size at each well-child appointment to determine if your baby is progressing as they should.', './image/images (6).jpeg', './image/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `post_id`, `title`, `ref`, `type`) VALUES
(1, 1, 'video', 'https://www.youtube.com/embed/bhw28w0YLV0', '1'),
(2, 1, 'search', 'https://www.youtube.com/results?search_query=baby+food+to+age+3', '2'),
(3, 2, 'video', 'https://www.youtube.com/embed/lHc1_mMi2oU', '1'),
(4, 2, 'search', 'https://www.youtube.com/results?search_query=baby+common+diseases', '2'),
(5, 1, 'Wiki books', 'https://ar.wikibooks.org/wiki/ويكي_الأطفال', '3'),
(6, 1, 'Asks Doctors', 'https://www.altibbi.com/اسئلة-طبية/امراض-الاطفال', '3'),
(7, 1, 'Food for babies up to the age of three', 'https://www.google.com/search?q=الطعام+المفروض+للاطفال+الرضع+حتى+سن+الثالثة&oq=الطعام+المفروض+للاطفال+لرضع+حتى+سن+الثلاثه&gs_l=psy-ab.3...0.0..66045...0.0..0.0.0.......0......gws-wiz.DBx2c8Y6noQ', '4'),
(11, 2, 'Asks Doctors', 'https://www.altibbi.com/اسئلة-طبية/امراض-الاطفال', '3'),
(12, 2, 'More pictures', 'https://www.google.com/search?q=babies+common+diseases&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjLj_-9yfXeAhVB_qQKHcTiAQYQ_AUIDigB&biw=1366&bih=632', '4'),
(13, 2, 'More Information', 'https://www.google.com/search?q=babies+diseases&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjm0OeGp-3eAhWGyqQKHd4oB3UQ_AUIDigB&biw=1326&bih=627', '4'),
(14, 3, 'Asks Doctors', 'https://www.altibbi.com/اسئلة-طبية/امراض-الاطفال', '3'),
(15, 3, 'More pictures', 'https://www.google.com/search?biw=1366&bih=632&tbm=isch&sa=1&ei=h779W-mTD8eakwW2irKoCg&q=baby+Vaccinations+up+to+3+years&oq=baby+Vaccinations+up+to+3+years&gs_l=img.3...65.2296..2692...1.0..0.246.632.0j1j2......0....1..gws-wiz-img.GJ-SmN8PdjY', '4'),
(16, 3, 'More Information', 'https://www.google.com/search?ei=7b79W4vrB6nkkgXRiqm4Bw&q=baby+Vaccinations+up+to+3+years&oq=baby+Vaccinations+up+to+3+years&gs_l=psy-ab.3..0i71l8.0.0..882...0.0..0.0.0.......0......gws-wiz.7XuT6g5Hspw', '4'),
(17, 3, 'video', 'https://www.youtube.com/embed/eMrFV2rnHlo', '1'),
(18, 3, 'search', 'https://www.youtube.com/results?search_query=baby+vaccinations+up+to+3+year', '2'),
(19, 4, 'video', 'https://www.youtube.com/embed/JDVQDB2mkks', '1'),
(20, 4, 'search', 'https://www.youtube.com/results?search_query=baby+normal+weight+at+birth+in+kg', '2'),
(21, 4, 'Asks Doctors', 'https://www.altibbi.com/اسئلة-طبية/امراض-الاطفال', '3'),
(22, 4, 'Download books', 'https://www.jarir.com/arabic-books/baby-child-care.html', '3'),
(23, 4, 'Your child\'s size and growth.....', 'https://www.babycenter.com/0_your-childs-size-and-growth-timeline_10357633.bc', '4'),
(24, 4, 'height and weight calculator', '#', '4'),
(25, 4, 'Baby Weight Chart: Is Your Baby On Track?', '#', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_reference_posts` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `FK_reference_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
