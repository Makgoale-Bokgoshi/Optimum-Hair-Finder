-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2016 at 10:40 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hair_studios`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_studios`
--

CREATE TABLE `all_studios` (
  `Studio_ID` int(255) NOT NULL,
  `Studio_Name` text NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Address_link` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Facebook_Page` varchar(500) DEFAULT NULL,
  `Salon_Website` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_studios`
--

INSERT INTO `all_studios` (`Studio_ID`, `Studio_Name`, `Address`, `Address_link`, `Region`, `Latitude`, `Longitude`, `Telephone`, `Facebook_Page`, `Salon_Website`) VALUES
(1, 'Skydiva Beauty Works', 'Ntemi Piliso str,Newtown,Johannesburg', 'www.google.co.za/maps/place/Sky+Diva+Beauty+Works/', 'Newtown', -26.2002, 28.0357, '011056499', 'http://www.facebook.com/skydivahair', ''),
(2, 'Celeb Style Hair and Cosmetics', 'Kaunda St, Johannesburg, 1431', 'https://www.google.co.za/maps/place/Celeb+Style+Hair+%26+Cosmetics/@-26.407197,28.1717203,17z/data=!3m1!4b1!4m5!3m4!1s0x168264233d5ef2b:0x552e3048ac014bf9!8m2!3d-26.407197!4d28.173909', 'Newtown', -26.2002, 28.0355, '0810499666', 'http://www.facebook.com/pages/celeb-Style-Hair-Cosmetics-Hair-salon-Newtown/101373273366742', ''),
(3, 'Generale Hair Zone', '11 De Beer Str & Cnr De Korte str,Braamfontein,Johannesburg', 'https://www.google.co.za/maps/place/Generale+Hair+Zone/@-26.193583,28.0327413,17z/data=!3m1!4b1!4m5!3m4!1s0x1e950c1bc0119e19:0xc62e5b231120b480!8m2!3d-26.193583!4d28.03493', 'Braamfontein', -26.1936, 28.0349, '0837176540', 'http://www.facebook.com/Generale-Hair-Zone-247268912078527', 'generalehairzone.co.za'),
(4, 'FM Hair & Nail Salon', ' Biccard Str,Braamfontein,Johannesburg', 'https://www.google.co.za/maps/place/F.M+Hair+%26+Nails+Studio/@-26.1952909,28.0353983,17z/data=!3m1!4b1!4m5!3m4!1s0x16826452ab6456f:0x65c0c421792e1ca5!8m2!3d-26.1952909!4d28.037587', 'Braamfontein', -26.1953, 28.0376, '0785608663', 'http://www.facebook.com/fmhairnail/', 'fmhairnail.co.za'),
(5, 'Queens Hair Paradise Salon', '42 Biccard Str,Braamfontein,Johannesburg', 'https://www.google.co.za/maps/place/Queens+Hair+Paradise+Salon+(CHARLESJUMMY+PTY)/@-26.191985,28.0348583,17z/data=!3m1!4b1!4m5!3m4!1s0x1e950c1971274ddf:0x42508f045c98d25c!8m2!3d-26.191985!4d28.037047', 'Braamfontein', -26.192, 28.037, '0110793649', 'http://www.facebook.com/Queens-hair-paradise-salon-476183542527000/', ''),
(6, 'Glamour Hair & Beauty Salon', '580 Jules Str,Johannesburg', 'https://www.google.co.za/maps/place/Glamour+Hair+%26+Beauty+Salon/@-26.201213,28.1156083,17z/data=!3m1!4b1!4m5!3m4!1s0x1e9511e12d936cbf:0x3c6cefa28d6f76f3!8m2!3d-26.201213!4d28.117797', 'Braamfontein', -26.2012, 28.1178, '0764776530', '', ''),
(7, 'Turning Heads Hair Salon', '17 Maare Str,Johannesburg', 'https://www.google.co.za/maps/place/Turning+Heads+Hair+Salon/@-26.2741759,27.8993013,17z/data=!3m1!4b1!4m5!3m4!1s0x1e95a79f87649b97:0x68a8dd1209d61f04!8m2!3d-26.2741759!4d27.90149', 'Johannesburg', -26.2742, 27.9015, '0730977162', '', ''),
(8, 'Ebenezar & J First Class hair and Beauty salon', '52 De Korte Str,Johannesburg', 'https://www.google.co.za/maps/place/52+De+Korte+St,+Johannesburg,+2000/@-26.19415,28.0306313,17z/data=!3m1!4b1!4m5!3m4!1s0x1e950c1b0cb310b7:0xdd87a7aee87b79b0!8m2!3d-26.19415!4d28.03282', 'Braamfontein', -26.1941, 28.0328, '0838861203', '', ''),
(9, 'Chama Unisex Hairdressing Salon', '99 Juta Str,Johannesburg', 'https://www.google.co.za/maps/place/Chama+Salon/@-26.194518,28.0341633,17z/data=!3m1!4b1!4m5!3m4!1s0x168265ace257609:0x138566d4af9ec5dc!8m2!3d-26.194518!4d28.036352', 'Braamfontein', -26.1945, 28.0364, '0849046262', '', ''),
(10, 'Buyi''s Hair Salon', '80 Jorissen Str,Johannesburg', 'https://www.google.co.za/maps?q=Buyi%27s+Hair+Salon&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjqjY7FuoXPAhVOGsAKHdZFAvUQ_AUICCgB', 'Braamfontein', -26.193, 28.0351, '0113395065', 'http://www.facebook.com/buyishairsalon/', ''),
(11, 'Nelly''s Hair Salon', '52 De Korte Street, Braamfontein, Johannesburg, 2000', 'https://www.google.co.za/maps/place/52+De+Korte+St,+Johannesburg,+2000/@-26.19415,28.0306313,17z/data=!3m1!4b1!4m5!3m4!1s0x1e950c1b0cb310b7:0xdd87a7aee87b79b0!8m2!3d-26.19415!4d28.03282!6m1!1e1', 'Braamfontein', -26.1941, 28.0328, '0780464541', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hair_category`
--

CREATE TABLE `hair_category` (
  `Category_ID` int(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_category`
--

INSERT INTO `hair_category` (`Category_ID`, `Category_Description`) VALUES
(1, 'Hair Cut'),
(2, 'Cornrows'),
(3, 'Braids'),
(4, 'Chemicals and Hair Wash'),
(5, 'Dreadlocks'),
(6, 'Hair Extensions'),
(7, 'Weaves'),
(8, 'Wigs');

-- --------------------------------------------------------

--
-- Table structure for table `hair_styles`
--

CREATE TABLE `hair_styles` (
  `Style_ID` int(11) NOT NULL,
  `Style_Description` varchar(255) NOT NULL,
  `Picture` varchar(5000) NOT NULL,
  `Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_styles`
--

INSERT INTO `hair_styles` (`Style_ID`, `Style_Description`, `Picture`, `Category_ID`) VALUES
(1, 'Hair Dye', 'Dye_and_Highlights02.jpg', 4),
(2, 'S Curl', 'S_Curl00.jpg', 4),
(3, 'Dreadlock styling', 'Dreadlocks_Braiding01.jpg', 5),
(4, 'Dreadlock Braiding', 'Dreadlocks_Braiding00.jpg', 5),
(5, 'Fusion Hair Extensions', 'fusion_extension01.jpg', 6),
(6, 'HiddenCrown', 'hidden_Crown_Extensions01.jpg', 6),
(7, 'Clip On Extensions', 'Clip_In_or_Clip_On_Hair_Extensions01.jpg', 6),
(8, 'Chiskop', 'Chiskop.jpg', 1),
(9, 'Fade', 'fade2.jpg', 1),
(10, 'Fine Cut', 'FineCut2.jpg', 1),
(11, 'Brush', 'Brush-01.jpe', 1),
(12, 'Mohawk', 'Mohawk.jpg', 1),
(13, 'Trim', 'Trim-00.jpe', 1),
(14, 'Shave', 'Shave.jpg', 1),
(15, 'Cut & Style', 'Cut-and_Style-00.jpe', 1),
(16, 'Cornrows', 'Cornrows2.jpg', 2),
(17, 'Straight Back', 'StraightBack.jpg', 2),
(18, 'Regular Cornrows', 'Cornrows3.jpg', 2),
(19, 'Thick Cornrows', 'Cornrows.jpg', 2),
(21, 'Box Braids', 'BoxBraids.jpg', 3),
(24, 'Faux Locs', 'FauxLocs.jpg', 3),
(25, 'Faux Locs Styling', 'Faux-Locs-styling-01.jpe', 3),
(26, 'Crochet', 'Crochet.jpg', 3),
(27, 'Havannah', 'Havannah02.jpg', 3),
(28, 'Braids Removal', 'Braids_Removal00.jpg', 3),
(29, 'Braids Styling', 'Braids_Styling.jpg', 3),
(30, 'Single Twist', 'Single_Twist00.jpg', 3),
(31, 'Full Lace Wigs', 'Full_lace_wigs02.jpg', 8),
(32, 'Front Lace Closure', 'Front_Lace_Closure00.jpg', 8),
(33, 'S-Curl', 'S_Curl01.jpg', 4),
(34, 'Hair Relaxer', 'Hair_Relaxing02.jpg', 4),
(36, 'Highlights', 'Dye_and_Highlights00.jpg', 4),
(38, 'Wash and Blow', 'Hair_Wash_and_Blow00.jpg', 4),
(39, 'Hair Wash Only', 'Hair_Wash02.jpg', 4),
(40, 'Color(Dye) and Highlights', 'Dye_and_Highlights01.jpg', 4),
(41, 'Dreadlock Braiding', 'Dreadlocks_Braiding02.jpg', 5),
(42, 'Dreadlock Waxing', 'Dreadlocks_Waxing00.jpg', 5),
(44, 'Brazilian Weave', 'Brazilian_Weave02.JPG', 7),
(46, 'Indian Weave', 'Indian_Weaves02.jpg', 7),
(48, 'Peruvian Weave', 'Peruvian_weaves03.jpg', 7),
(50, 'Malaysian Weave', 'Malaysian_Weaves00.jpg', 7),
(54, 'Full lace Wigs', 'Full_lace_wigs01.jpg', 8),
(56, 'Front lace Closure', 'Front_Lace_Closure01.jpg', 8),
(58, 'Fusion', 'fusion_extension00.jpg', 6),
(59, 'Weave and Track Extension', 'Weave_and_Track_Extenstion00.jpg', 6),
(61, 'Clip In or Clip On Hair Extensions', 'Clip_In_or_Clip_On_Hair_Extensions02.jpg', 6),
(62, 'Tape_In_Extensions', 'Tape_In_Extensions01.jpg', 6),
(63, 'Hidden Crown Extensions', 'hidden_Crown_Extensions00.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `Price_ID` int(255) NOT NULL,
  `Studio_ID` int(255) NOT NULL,
  `Style_ID` int(255) NOT NULL,
  `Price Range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`Price_ID`, `Studio_ID`, `Style_ID`, `Price Range`) VALUES
(1, 3, 8, 'R20 - R30'),
(2, 4, 8, 'R20 - R30'),
(3, 8, 8, 'R20 - R30'),
(4, 3, 9, 'R50 - R70'),
(5, 4, 9, 'R50 - R70'),
(6, 8, 9, 'R50 - R70'),
(7, 1, 8, 'R15 - R30'),
(8, 2, 8, 'R20 - R30'),
(9, 5, 8, 'R15 - R30'),
(10, 6, 8, 'R15 - R30'),
(11, 7, 8, ''),
(12, 9, 8, 'R15 - R30'),
(13, 10, 8, 'R15 - R30'),
(14, 11, 8, 'R10 - R25'),
(15, 1, 9, 'R70 - R105'),
(16, 2, 9, 'R60 - R100'),
(17, 5, 9, 'R50 - R90'),
(18, 6, 9, 'R70 - R100'),
(19, 7, 9, 'R75 - R110'),
(20, 9, 9, 'R65 - R100'),
(21, 10, 9, 'R70 - R100'),
(22, 11, 9, 'R70 - R100'),
(23, 1, 10, 'R50 - R70'),
(24, 2, 10, 'R50 - R70'),
(25, 3, 10, 'R50 - R70'),
(26, 4, 10, 'R50 - R70'),
(27, 5, 10, 'R50 - R70'),
(28, 6, 10, 'R50 - R70'),
(29, 7, 10, 'R50 - R70'),
(30, 8, 10, 'R50 - R70'),
(31, 9, 10, 'R50 - R70'),
(32, 10, 10, 'R50 - R70'),
(33, 11, 10, 'R50 - R70'),
(34, 1, 11, 'R30 - R50'),
(35, 2, 11, 'R30 - R50'),
(36, 3, 11, 'R30 - R50'),
(37, 4, 11, 'R30 - R50'),
(38, 5, 11, 'R30 - R50'),
(39, 6, 11, 'R30 - R50'),
(40, 7, 11, 'R30 - R50'),
(41, 8, 11, 'R35 - R50'),
(42, 9, 11, 'R25 - R50'),
(43, 10, 11, 'R30 - R50'),
(44, 11, 11, 'R30 - R50'),
(46, 2, 12, 'R50 - R100'),
(47, 5, 12, 'R50 - R100'),
(48, 6, 12, 'R50 - R100'),
(49, 7, 12, 'R50 - R100'),
(50, 8, 12, 'R50 - R100'),
(51, 9, 12, 'R50 - R100'),
(52, 10, 12, 'R50 - R100'),
(53, 11, 12, 'R50 - R100'),
(54, 1, 13, 'R50'),
(55, 2, 13, 'R50'),
(56, 3, 13, 'R50'),
(58, 5, 13, 'R50'),
(59, 6, 13, 'R50'),
(64, 11, 13, 'R40'),
(68, 4, 13, 'R50'),
(71, 9, 13, 'R50'),
(72, 10, 13, 'R50'),
(74, 7, 13, 'R50'),
(75, 8, 13, 'R50'),
(76, 1, 14, 'R30'),
(77, 2, 14, 'R30'),
(78, 3, 14, 'R30'),
(79, 4, 14, 'R35'),
(80, 5, 14, 'R30'),
(81, 6, 14, 'R30'),
(82, 7, 14, 'R30'),
(83, 8, 14, 'R35'),
(84, 9, 14, 'R30'),
(85, 10, 14, 'R30'),
(86, 11, 14, 'R30'),
(87, 1, 15, 'R70'),
(88, 2, 15, 'R70'),
(89, 3, 15, 'R70'),
(90, 4, 15, 'R70'),
(91, 6, 15, 'R70'),
(92, 7, 15, 'R70'),
(93, 8, 15, 'R70'),
(94, 9, 15, 'R70'),
(95, 10, 15, 'R70'),
(96, 11, 15, 'R70'),
(97, 5, 15, 'R70'),
(98, 1, 16, 'R100'),
(99, 2, 16, 'R100'),
(100, 3, 16, 'R100'),
(101, 4, 16, 'R100'),
(102, 5, 16, 'R100'),
(103, 6, 16, 'R100'),
(104, 7, 16, 'R100'),
(105, 8, 16, 'R100'),
(106, 9, 16, 'R100'),
(107, 10, 16, 'R100'),
(108, 11, 16, 'R100'),
(109, 1, 17, 'R110'),
(110, 2, 17, 'R100'),
(111, 3, 17, 'R150'),
(112, 4, 17, 'R120'),
(113, 5, 17, 'R130'),
(114, 6, 17, 'R100'),
(115, 7, 17, 'R120'),
(116, 8, 17, 'R150'),
(117, 9, 17, 'R130'),
(118, 10, 17, 'R130'),
(119, 11, 17, 'R130'),
(164, 1, 21, 'R250-R300'),
(165, 2, 21, 'R250-R300'),
(166, 3, 21, 'R250-R300'),
(167, 4, 21, 'R250-R300'),
(168, 5, 21, 'R250-R300'),
(169, 6, 21, 'R250-R300'),
(170, 7, 21, 'R250-R300'),
(171, 8, 21, 'R250-R300'),
(172, 8, 21, 'R250-R300'),
(173, 9, 21, 'R250-R300'),
(174, 11, 21, 'R250-R300'),
(175, 1, 24, 'R250-R300'),
(176, 2, 24, 'R250-R300'),
(177, 3, 24, 'R350-R400'),
(178, 4, 24, 'R300-R350'),
(179, 5, 24, 'R250-R300'),
(180, 6, 24, 'R250-R300'),
(181, 7, 24, 'R250-R300'),
(182, 8, 24, 'R300-R400'),
(183, 8, 24, 'R250-R350'),
(184, 9, 24, 'R300-R350'),
(185, 11, 24, 'R250-R350'),
(186, 1, 25, 'R50'),
(187, 2, 25, 'R50'),
(188, 3, 25, 'R50'),
(189, 4, 25, 'R50'),
(190, 5, 25, 'R50'),
(191, 6, 25, 'R50'),
(192, 7, 25, 'R50'),
(193, 8, 25, 'R50'),
(195, 9, 25, 'R50'),
(196, 11, 25, 'R50'),
(197, 1, 26, 'R200'),
(198, 2, 26, 'R200'),
(199, 3, 26, 'R240'),
(200, 4, 26, 'R200-R250'),
(201, 5, 26, 'R200'),
(202, 6, 26, 'R200'),
(203, 7, 26, 'R200'),
(204, 8, 26, 'R250'),
(205, 10, 26, 'R250'),
(206, 9, 26, 'R220'),
(207, 11, 26, 'R200'),
(208, 1, 27, 'R200'),
(209, 2, 27, 'R200'),
(210, 3, 27, 'R240'),
(211, 4, 27, 'R200-R250'),
(212, 5, 27, 'R200'),
(213, 6, 27, 'R200'),
(214, 7, 27, 'R200'),
(215, 8, 27, 'R250'),
(216, 10, 27, 'R250'),
(217, 9, 27, 'R220'),
(218, 11, 27, 'R200'),
(219, 1, 28, 'R50'),
(220, 2, 28, 'R50'),
(221, 3, 28, 'R50'),
(222, 4, 28, 'R50'),
(223, 5, 28, 'R50'),
(224, 6, 28, 'R50'),
(225, 7, 28, 'R50'),
(226, 8, 28, 'R50'),
(227, 9, 28, 'R50'),
(228, 10, 28, 'R50'),
(229, 11, 28, 'R60'),
(230, 1, 29, 'R50'),
(231, 2, 29, 'R50'),
(232, 3, 29, 'R50'),
(233, 4, 29, 'R50'),
(234, 5, 29, 'R50'),
(235, 6, 29, 'R50'),
(236, 7, 29, 'R50'),
(237, 8, 29, 'R50'),
(238, 9, 29, 'R50'),
(239, 10, 29, 'R50'),
(240, 11, 29, 'R60'),
(241, 1, 30, 'R200'),
(242, 2, 30, 'R200'),
(243, 3, 30, 'R200'),
(244, 4, 30, 'R200'),
(245, 5, 30, 'R200'),
(246, 6, 30, 'R200'),
(247, 7, 30, 'R200'),
(248, 8, 30, 'R200'),
(249, 9, 30, 'R200'),
(250, 10, 30, 'R200'),
(251, 11, 30, 'R200'),
(274, 1, 33, 'R50'),
(275, 2, 33, 'R50'),
(276, 3, 33, 'R50'),
(277, 4, 33, 'R50'),
(278, 5, 33, 'R50'),
(279, 6, 33, 'R50'),
(280, 7, 33, 'R50'),
(281, 8, 33, 'R50'),
(282, 9, 33, 'R50'),
(283, 10, 33, 'R50'),
(284, 11, 33, 'R50'),
(285, 1, 34, 'R50-R100'),
(286, 2, 34, 'R50-R100'),
(287, 3, 34, 'R50-R100'),
(288, 4, 34, 'R50-R100'),
(289, 5, 34, 'R50-R100'),
(290, 6, 34, 'R50-R100'),
(291, 7, 34, 'R50-R100'),
(292, 8, 34, 'R50-R100'),
(293, 9, 34, 'R50-R100'),
(294, 10, 34, 'R50-R100'),
(295, 11, 34, 'R50-R100'),
(296, 1, 38, 'R50-R100'),
(297, 2, 38, 'R50-R100'),
(298, 3, 38, 'R50-R100'),
(299, 4, 38, 'R50-R100'),
(300, 5, 38, 'R50-R100'),
(301, 6, 38, 'R50-R100'),
(302, 7, 38, 'R50-R100'),
(303, 8, 38, 'R50-R100'),
(304, 9, 38, 'R50-R100'),
(305, 10, 38, 'R50-R100'),
(306, 11, 38, 'R50-R100'),
(307, 1, 39, 'R50'),
(308, 2, 39, 'R50'),
(309, 3, 39, 'R50'),
(310, 4, 39, 'R50'),
(311, 5, 39, 'R50'),
(312, 6, 39, 'R50'),
(313, 7, 39, 'R50'),
(314, 8, 39, 'R50'),
(315, 9, 39, 'R50'),
(316, 10, 39, 'R50'),
(317, 11, 39, 'R50'),
(318, 1, 40, 'R50'),
(319, 2, 40, 'R50'),
(320, 3, 40, 'R50'),
(321, 4, 40, 'R50'),
(322, 5, 40, 'R50'),
(323, 6, 40, 'R50'),
(324, 7, 40, 'R50'),
(325, 8, 40, 'R50'),
(326, 9, 40, 'R50'),
(327, 10, 40, 'R50'),
(328, 11, 40, 'R50'),
(329, 1, 41, 'R150'),
(330, 2, 41, 'R150'),
(331, 3, 41, 'R150'),
(332, 4, 41, 'R150'),
(333, 5, 41, 'R150'),
(334, 6, 41, 'R150'),
(335, 7, 41, 'R150'),
(336, 8, 41, 'R150'),
(337, 9, 41, 'R150'),
(338, 10, 41, 'R150'),
(339, 11, 41, 'R150'),
(340, 1, 42, 'R100'),
(341, 2, 42, 'R100'),
(342, 3, 42, 'R100'),
(343, 4, 42, 'R100'),
(344, 10, 42, 'R100'),
(345, 11, 42, 'R100'),
(346, 1, 44, 'R1000-R2000'),
(347, 2, 44, 'R1000-R2000'),
(348, 3, 44, 'R1000-R2000'),
(349, 4, 44, 'R1000-R2000'),
(350, 10, 44, 'R1000-R2000'),
(351, 11, 44, 'R1000-R2000'),
(352, 5, 44, 'R1000-R2000'),
(353, 6, 44, 'R1000-R2000'),
(354, 7, 44, 'R1000-R2000'),
(355, 8, 44, 'R1000-R2000'),
(356, 9, 44, 'R1000-R2000'),
(368, 1, 46, 'R1000-R2000'),
(369, 2, 46, 'R1000-R2000'),
(370, 3, 46, 'R1000-R2000'),
(371, 4, 46, 'R1000-R2000'),
(372, 10, 46, 'R1000-R2000'),
(373, 11, 46, 'R1000-R2000'),
(374, 5, 46, 'R1000-R2000'),
(375, 6, 46, 'R1000-R2000'),
(376, 7, 46, 'R1000-R2000'),
(377, 8, 46, 'R1000-R2000'),
(378, 9, 46, 'R1000-R2000'),
(391, 2, 48, 'R900-R1500'),
(392, 3, 48, 'R900-R1500'),
(393, 4, 48, 'R900-R1500'),
(394, 10, 48, 'R900-R1500'),
(395, 11, 48, 'R900-R1500'),
(397, 6, 48, 'R900-R1500'),
(398, 7, 48, 'R900-R1500'),
(400, 9, 48, 'R900-R1500'),
(412, 1, 48, 'R1000-R1500'),
(418, 5, 48, 'R1000-R1500'),
(421, 8, 48, 'R1000-R1500'),
(423, 1, 50, 'R900 - R1,500'),
(424, 2, 50, 'R900 - R1,500'),
(425, 3, 50, 'R900 - R2,000'),
(426, 4, 50, 'R900 - R1,500'),
(427, 5, 50, 'R900 - R1,500'),
(429, 6, 50, 'R950 - R1,500'),
(430, 7, 50, 'R900 - R1,500'),
(431, 8, 50, 'R1,000 - R1,500'),
(432, 9, 50, 'R900 - R1,500'),
(433, 10, 50, 'R900 - R1,500'),
(434, 11, 50, 'R900 - R1,500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_studios`
--
ALTER TABLE `all_studios`
  ADD PRIMARY KEY (`Studio_ID`);

--
-- Indexes for table `hair_category`
--
ALTER TABLE `hair_category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `hair_styles`
--
ALTER TABLE `hair_styles`
  ADD PRIMARY KEY (`Style_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`Price_ID`),
  ADD KEY `Studio_ID` (`Studio_ID`,`Style_ID`),
  ADD KEY `Style_ID` (`Style_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_studios`
--
ALTER TABLE `all_studios`
  MODIFY `Studio_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hair_category`
--
ALTER TABLE `hair_category`
  MODIFY `Category_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hair_styles`
--
ALTER TABLE `hair_styles`
  MODIFY `Style_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `Price_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hair_styles`
--
ALTER TABLE `hair_styles`
  ADD CONSTRAINT `Cat_ID` FOREIGN KEY (`Category_ID`) REFERENCES `hair_category` (`Category_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pricing`
--
ALTER TABLE `pricing`
  ADD CONSTRAINT `Stud_ID` FOREIGN KEY (`Studio_ID`) REFERENCES `all_studios` (`Studio_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Sty_ID` FOREIGN KEY (`Style_ID`) REFERENCES `hair_styles` (`Style_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
