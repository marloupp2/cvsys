-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2020 at 01:22 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpsu_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flp_candidates`
--

CREATE TABLE IF NOT EXISTS `flp_candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `party_list` varchar(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `flp_candidates`
--

INSERT INTO `flp_candidates` (`id`, `name`, `image`, `position`, `party_list`, `date`) VALUES
(1, 'Pepito Sama', 'pp.png', 'President', 'Team Kusgan', '2020'),
(2, 'Paulo Lumanog', '67654752_2525311517699619_6188154735086796800_o.jpg', 'Vice President', 'Team Kusgan', '2020'),
(3, 'Joar Nicole', '71501058_358529561696289_8590458114153644032_o.jpg', 'Secretary', 'Team Kusgan', '2020'),
(4, 'Brian Nikon', '75279287_2689767037970865_7898556981760229376_o.jpg', 'Treasurer', 'Team Kusgan', '2020'),
(5, 'Ronil Piala Lim', '78249559_133872854700105_5735087250736152576_o.jpg', 'Auditor', 'Team Kusgan', '2020'),
(6, 'Cylo The Aillene show', '79299404_168901864497360_7860210122172137472_o.jpg', 'PIO', 'Team Kusgan', '2020'),
(7, 'Choco Milk Esnaldo', '80980871_2608466716054645_2666573180646195200_o.jpg', 'Business Manager', 'Team Kusgan', '2020'),
(8, 'Rochelle Dela Torre', '82725735_2240588352914400_2044903203153117184_n.jpg', 'Muse', 'Team Kusgan', '2020'),
(9, 'Mark Anthony Fernandez', 'IMG_20190803_170133.JPG', 'Sentinel', 'Team Kusgan', '2020'),
(10, 'Leo Sortigosa', '81299236_147345383366795_7924376791840456704_o.jpg', 'President', 'CPSU Master', '2020'),
(11, 'Xiano Santiago', 'qwrty.jpg', 'Vice President', 'CPSU Master', '2020'),
(12, 'Krisaleen Villarosa', '30515577_1269759666489175_4452693888271908864_n.jpg', 'Secretary', 'CPSU Master', '2020'),
(13, 'Lab Love (gwapa)', '75237538_1469732566514311_1870589391349481472_o.jpg', 'Treasurer', 'CPSU Master', '2020'),
(14, 'Joan Quilequite Altoveros', '82128422_2898755926841621_7996056819598360576_n.jpg', 'Auditor', 'CPSU Master', '2020'),
(15, 'Wendie Rose Cawag Camoresta', '80461950_2555719048019723_7650136863633571840_n.jpg', 'PIO', 'CPSU Master', '2020'),
(16, 'Edda Fritz Belarmino', '74624042_145516686798423_5521205648991191040_o.jpg', 'Business Manager', 'CPSU Master', '2020'),
(17, 'Jimelyn Gadiane Engasta', '82155196_2419565298148142_2886649405132242944_o.jpg', 'Muse', 'CPSU Master', '2020'),
(18, 'John Lymwin Librado(bayaw)', '26233113_866527363517080_6649196442488209490_o.jpg', 'Sentinel', 'CPSU Master', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `flp_submit_votes`
--

CREATE TABLE IF NOT EXISTS `flp_submit_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidates` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `partylist` varchar(255) NOT NULL,
  `voters_name` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL,
  `voters_course` varchar(255) NOT NULL,
  `voters_year` varchar(255) NOT NULL,
  `voters_section` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `flp_submit_votes`
--

INSERT INTO `flp_submit_votes` (`id`, `candidates`, `position`, `partylist`, `voters_name`, `voters_id`, `voters_course`, `voters_year`, `voters_section`) VALUES
(1, 'Pepito Sama', 'President', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(2, 'Paulo Lumanog', 'Vice President', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(3, 'Krisaleen Villarosa', 'Secretary', 'CPSU Master', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(4, 'Brian Nikon', 'Treasurer', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(5, 'Ronil Piala Lim', 'Auditor', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(6, 'Wendie Rose Cawag Camoresta', 'PIO', 'CPSU Master', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(7, 'Choco Milk Esnaldo', 'Business Manager', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(8, 'Rochelle Dela Torre', 'Muse', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(9, 'Mark Anthony Fernandez', 'Sentinel', 'Team Kusgan', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `timestart` varchar(255) NOT NULL,
  `timeend` varchar(255) NOT NULL,
  `electionkind` varchar(255) NOT NULL,
  `timerequest` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `start`, `end`, `timestart`, `timeend`, `electionkind`, `timerequest`) VALUES
(1, 'October 22 2019', 'October 10 2019', '2019-10-22 00:55:41', '2019-10-10 03:10:42', 'flpssg', '2019-10-22 04:53:28'),
(2, 'October 22 2019', 'October 23 2019', '2019-10-22 13:20:54', '2019-10-23 07:10:09', 'flpssg', '05,21,06,10,22,2019'),
(3, 'October 22 2019', 'October 31 2019', '2019-10-22 13:35:08', '2019-10-31 00:00:08', 'flpssg', '2019-10-22 05:31:31'),
(4, 'October 23 2019', 'October 30 2019', '2019-10-23 00:00:33', '2019-10-30 00:00:33', 'flpssg', '2019-10-22 13:44:41'),
(5, 'October 25 2019', 'October 30 2019', '2019-10-25 00:00:43', '2019-10-30 13:45:43', 'flpssg', '2019-10-22 13:45:56'),
(6, 'October 21 2019', 'October 31 2019', '2019-10-21 12:00:58', '2019-10-31 14:25:58', 'flpssg', '2019-10-22 13:47:28'),
(7, 'October 22 2019', 'October 30 2019', '2019-10-22 13:50:11', '2019-10-30 00:00:07', 'flpssg', '2019-10-22 13:50:16'),
(8, 'October 1 2019', 'October 31 2019', '2019-10-01 01:50:17', '2019-10-31 21:10:17', 'flpssg', '2019-10-22 13:50:50'),
(9, 'October 22 2019', 'October 30 2019', '2019-10-22 17:55:51', '2019-10-30 14:10:51', 'flpssg', '2019-10-22 13:51:08'),
(10, 'October 22 2019', 'October 31 2019', '2019-10-22 13:55:10', '2019-10-31 13:45:10', 'flpssg', '2019-10-22 13:51:36'),
(11, 'October 22 2019', 'October 31 2019', '2019-10-22 14:00:37', '2019-10-31 14:25:38', 'flpssg', '2019-10-22 13:56:27'),
(12, 'October 22 2019', 'October 22 2019', '2019-10-22 14:01:00', '2019-10-22 14:05:29', 'flpssg', '2019-10-22 14:01:15'),
(13, 'October 23 2019', 'October 15 2019', '2019-10-23 20:00:17', '2019-10-15 00:00:17', 'flpssg', '2019-10-22 14:05:50'),
(14, 'October 22 2019', 'October 23 2019', '2019-10-22 14:10:52', '2019-10-23 20:45:52', 'flpssg', '2019-10-22 14:08:27'),
(15, 'October 21 2019', 'October 22 2019', '2019-10-21 14:05:29', '2019-10-22 14:15:29', 'flpssg', '2019-10-22 14:11:41'),
(16, 'October 22 2019', 'October 31 2019', '2019-10-22 14:26:03', '2019-10-31 00:00:00', 'ssg', '2019-10-22 14:26:08'),
(17, 'October 22 2019', 'October 31 2019', '2019-10-22 21:10:57', '2019-10-31 00:00:55', 'flpssg', '2019-10-22 21:11:03'),
(18, 'October 24 2019', 'October 30 2019', '2019-10-24 08:05:13', '2019-10-30 14:25:13', 'flpssg', '2019-10-24 21:46:25'),
(19, 'October 24 2019', 'October 31 2019', '2019-10-24 07:25:58', '2019-10-31 15:50:58', 'flpssg', '2019-10-27 12:51:09'),
(20, 'October 27 2019', 'October 31 2019', '2019-10-27 12:51:18', '2019-10-31 14:45:11', 'flpssg', '2019-10-27 12:51:24'),
(21, 'January 13 2020', 'January 20 2020', '2020-01-13 20:22:06', '2020-01-20 12:00:01', 'flpssg', '2020-01-13 20:22:15'),
(22, 'January 15 2020', 'January 15 2020', '2020-01-15 12:00:32', '2020-01-15 00:00:33', 'flpssg', '2020-01-13 20:22:50'),
(23, 'January 14 2020', 'January 22 2020', '2020-01-14 20:25:43', '2020-01-22 07:25:38', 'flpssg', '2020-01-14 20:25:52'),
(24, 'January 15 2020', 'January 20 2020', '2020-01-15 19:26:47', '2020-01-20 06:20:39', 'flp', '2020-01-15 19:26:53'),
(25, 'January 15 2020', 'January 16 2020', '2020-01-15 19:36:38', '2020-01-16 15:50:34', 'ssg', '2020-01-15 19:36:50'),
(26, 'January 15 2020', 'January 23 2020', '2020-01-15 19:52:52', '2020-01-23 20:45:46', 'flp', '2020-01-15 19:53:04'),
(27, 'January 15 2020', 'January 22 2020', '2020-01-15 19:55:29', '2020-01-22 08:25:25', 'flpssg', '2020-01-15 19:55:34'),
(28, 'January 15 2020', 'January 15 2020', '2020-01-15 20:09:29', '2020-01-15 20:10:21', 'flpssg', '2020-01-15 20:09:47'),
(29, 'January 15 2020', 'January 21 2020', '2020-01-15 20:10:38', '2020-01-21 13:40:35', 'flpssg', '2020-01-15 20:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `ssg_candidates`
--

CREATE TABLE IF NOT EXISTS `ssg_candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `party_list` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `ssg_candidates`
--

INSERT INTO `ssg_candidates` (`id`, `name`, `image`, `position`, `party_list`, `date`) VALUES
(16, 'Kiti Fuerzas', '81465097_2770560789673315_9174119976129265664_n.jpg', 'President', 'CPSU Original Coffee', '2020'),
(2, 'Yoks Sama(bayaw)', '81299236_147345383366795_7924376791840456704_o.jpg', 'President', 'Master Imba Moves', '2020'),
(3, 'Gerbie Ledamo', '81460551_187327985720247_3849346095234678784_o.jpg', 'Vice President', 'Master Imba Moves', '2020'),
(4, 'Estrella Cecille Estrecho', '81693026_2889840011110479_1417346019498131456_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(5, 'Jaybee Balansag', '82710868_1098552513809542_5188610086032900096_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(6, 'Prince Essentials', 'IMG_20190721_104707.jpg', 'Senator', 'Master Imba Moves', '2020'),
(7, 'Tanz Tenebroso', 'IMG_20190803_175944.JPG', 'Senator', 'Master Imba Moves', '2020'),
(8, 'Carlito Esconde', '71887843_2353308954934131_3492742768898342912_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(9, 'Leo CaÃ±ete', '80994508_968409986885879_6280563769663815680_n.jpg', 'Senator', 'Master Imba Moves', '2020'),
(10, 'Daryl Balasabas', '75653346_2688719501191411_7125896750371438592_n.jpg', 'Senator', 'Master Imba Moves', '2020'),
(11, 'Jay R Oceja', '81275876_1512941458855315_1770268052055654400_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(12, 'John Carlo Langyon', '81447854_1305475539624083_8635587513081135104_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(13, 'Aillene Agabon(uyab cylo)', '74422025_142694410451439_1792282980673126400_n.jpg', 'Senator', 'Master Imba Moves', '2020'),
(14, 'Tristan Flores', '74235580_775588416212198_1849341290488004608_o.jpg', 'Senator', 'Master Imba Moves', '2020'),
(15, 'Jypsie Joy Mahinay(Sexy)', '82064951_168091024538024_7142445220708220928_n.jpg', 'Senator', 'Master Imba Moves', '2020'),
(17, 'John Christopher L. Cacayan', '80575746_2655706194505029_6692223800731238400_o.jpg', 'Vice President', 'CPSU Original Coffee', '2020'),
(18, 'Cherry Mae Tambien Bacalso', '83008113_3900414876639079_2445891022174027776_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(19, 'Dhexter G. Dandan', '79271412_2845374215513556_444134781303652352_o.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(20, 'Vincent Diaz', '82264185_3442011032537733_3930433110688137216_o.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(21, 'John Brix Camingao', '48415702_1117998531718308_6716301052385165312_o.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(22, 'Janessa Reducto', '79926539_1274843662718182_1596558567920369664_o.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(23, 'Jonathan Pahamtang', '74666174_805059286594299_8624994908253454336_o.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(24, 'Emil Malinis', '67641302_2553964391306662_954380628395032576_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(25, 'Gee Ai Hubakon', '39289158_2116736301730778_6111525878506717184_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(26, 'Gelyn Lorimas', '37657481_2092870840966952_1818679531846762496_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(27, 'Jay Boy', '75282387_1252202004988231_8965795705583042560_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(28, ' Jayr Baroa', '81016849_514827006045589_152706943733989376_n.jpg', 'Senator', 'CPSU Original Coffee', '2020'),
(29, 'Rinalyn X Mercado(bossing)', '78216974_3156909894336643_1754704550863831040_o.jpg', 'Senator', 'CPSU Original Coffee', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `ssg_submit_votes`
--

CREATE TABLE IF NOT EXISTS `ssg_submit_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidates` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `partylist` varchar(255) NOT NULL,
  `voters_name` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL,
  `voters_course` varchar(255) NOT NULL,
  `voters_year` varchar(255) NOT NULL,
  `voters_section` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ssg_submit_votes`
--

INSERT INTO `ssg_submit_votes` (`id`, `candidates`, `position`, `partylist`, `voters_name`, `voters_id`, `voters_course`, `voters_year`, `voters_section`) VALUES
(1, 'Kiti Fuerzas', 'President', 'CPSU Original Coffee', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(2, 'John Christopher L. Cacayan', 'Vice President', 'CPSU Original Coffee', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(3, 'Tanz Tenebroso', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(4, 'Prince Essentials', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(5, 'Jypsie Joy Mahinay(Sexy)', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(6, 'John Carlo Langyon', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(7, 'Jaybee Balansag', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(8, 'Janessa Reducto', 'Senator', 'CPSU Original Coffee', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(9, 'Gelyn Lorimas', 'Senator', 'CPSU Original Coffee', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(10, 'Estrella Cecille Estrecho', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(11, 'Dhexter G. Dandan', 'Senator', 'CPSU Original Coffee', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(12, 'Daryl Balasabas', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(13, 'Carlito Esconde', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C'),
(14, 'Aillene Agabon(uyab cylo)', 'Senator', 'Master Imba Moves', 'Badodo flores', '123456', 'CTE', '3rd year', 'Section C');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `full_name`, `school_id`, `course`, `year`, `section`, `status`, `date_year`) VALUES
(1, 'Badodo', '111111', 'CTE', '1st year', 'Section A', '', '2020'),
(2, 'Jhiecille Estrecho', '222222', 'CCJE', 'CTE', 'Section B', '', '2020'),
(3, 'Cylo Aillene', '333333', 'CBM', 'BSIT', 'Section C', '', '2020'),
(4, 'Tanz', '444444', 'BSIT', '4th year', 'Section A', '', '2020'),
(5, 'Sandoval', '555555', 'CCJE', '1st year', 'Section C', '', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `voters_registered`
--

CREATE TABLE IF NOT EXISTS `voters_registered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_and_section` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `date_year` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `step` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voters_registered`
--

INSERT INTO `voters_registered` (`id`, `full_name`, `phone`, `school_id`, `course`, `year_and_section`, `section`, `qrcode`, `date_year`, `profile_picture`, `step`) VALUES
(1, 'Badodo flores', '09176196962', '123456', 'CTE', '3rd year', 'Section C', 'e10adc3949ba59abbe56e057f20f883e', '2020', '36388709_1045255222307363_5829790497928904704_n.jpg', 'finish');
