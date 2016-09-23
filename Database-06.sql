-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2016 at 08:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

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
(9, 'Chama Unisex Hairdressing Salon', '99 Juta Str,Johannesburg', 'https://www.google.co.za/maps/place/Chama+Salon/@-26.194518,28.0341633,17z/data=!3m1!4b1!4m5!3m4!1s0x168265ace257609:0x138566d4af9ec5dc!8m2!3d-26.194518!4d28.036352', 'Braamfontein', -26.1945, 28.0364, '0849046262', '', '');

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
  `Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_styles`
--

INSERT INTO `hair_styles` (`Style_ID`, `Style_Description`, `Category_ID`) VALUES
(1, 'Hair Dye', 4),
(5, 'Fusion Hair Extensions', 6),
(6, 'Hidden Crown', 6),
(7, 'Clip On Extensions', 6),
(8, 'Chiskop', 1),
(9, 'Fade', 1),
(10, 'Fine Cut', 1),
(11, 'Brush', 1),
(12, 'Mohawk', 1),
(13, 'Trim', 1),
(14, 'Shave', 1),
(15, 'Cut & Style', 1),
(16, 'Cornrows', 2),
(17, 'Straight Back', 2),
(18, 'Regular Cornrows', 2),
(19, 'Thick Cornrows', 2),
(21, 'Box Braids', 3),
(24, 'Faux Locs', 3),
(25, 'Faux Locs Styling', 3),
(26, 'Crochet', 3),
(27, 'Havannah', 3),
(28, 'Braids Removal', 3),
(29, 'Braids Styling', 3),
(30, 'Single Twist', 3),
(31, 'Full Lace Wigs', 8),
(32, 'Front Lace Closure', 8),
(33, 'S-Curl', 4),
(34, 'Hair Relaxer', 4),
(38, 'Wash and Blow', 4),
(39, 'Hair Wash Only', 4),
(40, 'Color(Dye) and Highlights', 4),
(41, 'Dreadlock Braiding', 5),
(42, 'Dreadlock Waxing', 5),
(44, 'Brazilian Weave', 7),
(46, 'Indian Weave', 7),
(48, 'Peruvian Weave', 7),
(50, 'Malaysian Weave', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `Price_ID` int(255) NOT NULL,
  `Studio_ID` int(255) NOT NULL,
  `Style_ID` int(255) NOT NULL,
  `Hairstyle_Picture` mediumtext NOT NULL,
  `Min_Price` int(255) NOT NULL,
  `Max_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`Price_ID`, `Studio_ID`, `Style_ID`, `Hairstyle_Picture`, `Min_Price`, `Max_Price`) VALUES
(1, 3, 8, 'Chiskop-03.jpg', 20, 40),
(2, 4, 8, 'Chiskop-04.jpeg', 25, 45),
(3, 8, 8, 'Chiskop-08.jpeg', 25, 30),
(4, 3, 9, 'Fade-03.jpg', 30, 45),
(5, 4, 9, 'Fade-04.jpeg', 25, 40),
(6, 8, 9, 'Fade-08.jpg', 30, 50),
(7, 1, 8, 'Chiskop-01.jpeg', 20, 30),
(8, 2, 8, 'Chiskop-02.jpg', 20, 30),
(9, 5, 8, 'Chiskop-05.jpg', 20, 30),
(10, 6, 8, 'Chiskop-06.jpg', 20, 30),
(12, 9, 8, 'Chiskop.jpg', 20, 30),
(15, 1, 9, 'Fade-01.jpg', 30, 45),
(16, 2, 9, 'Fade-02.jpeg', 30, 40),
(17, 5, 9, 'Fade-05.jpeg', 35, 45),
(18, 6, 9, 'Fade-06.jpeg', 25, 40),
(19, 7, 9, 'Fade-07.jpg', 30, 45),
(20, 9, 9, 'Fade.jpg', 30, 40),
(23, 1, 10, 'Fine-Cut-01.jpg', 20, 50),
(24, 2, 10, 'Fine-Cut-02.jpg', 20, 50),
(25, 3, 10, 'Fine-Cut-03.jpg', 20, 50),
(26, 4, 10, 'Fine-Cut-04.jpg', 20, 50),
(27, 5, 10, 'Fine-Cut-05.jpg', 20, 50),
(28, 6, 10, 'Fine-Cut-06.jpg', 20, 50),
(29, 7, 10, 'Fine-Cut-07.jpg', 25, 50),
(30, 8, 10, 'Fine-Cut-08.jpeg', 30, 45),
(31, 9, 10, 'FineCut.jpg', 20, 50),
(34, 1, 11, 'Brush-01.jpe', 20, 45),
(35, 2, 11, 'Brush-00.jpg', 20, 40),
(36, 3, 11, 'Brush-01.jpe', 20, 40),
(37, 4, 11, 'Brush-00.jpg', 20, 40),
(38, 5, 11, 'Brush-01.jpe', 20, 40),
(39, 6, 11, 'Brush-00.jpg', 20, 40),
(40, 7, 11, 'Brush-01.jpe', 20, 40),
(41, 8, 11, 'Brush-00.jpg', 20, 40),
(42, 9, 11, 'Brush-01.jpe', 20, 40),
(46, 2, 12, 'Mohawk-02.jpg', 40, 50),
(47, 5, 12, 'Mohawk-05.jpg', 40, 50),
(48, 6, 12, 'Mohawk-06.jpg', 40, 50),
(49, 7, 12, 'Mohawk-07.jpeg', 40, 50),
(50, 8, 12, 'Mohawk.jpg', 40, 50),
(51, 9, 12, 'Mohawk-04.jpeg', 40, 50),
(54, 1, 13, 'Trim-01.jpe', 20, 35),
(55, 2, 13, 'Trim-02.jpe', 20, 35),
(56, 3, 13, 'Trim-03.jpeg', 20, 40),
(58, 5, 13, 'Trim-05.jpeg', 20, 35),
(59, 6, 13, 'Trim-06.jpg', 20, 40),
(68, 4, 13, 'Trim-04.jpeg', 20, 35),
(71, 9, 13, 'Trim-01.jpeg', 20, 40),
(74, 7, 13, 'Trim-07.jpeg', 20, 30),
(75, 8, 13, 'Trim-08.jpg', 20, 35),
(76, 1, 14, 'Shave-01.jpeg', 15, 35),
(77, 2, 14, 'Shave-02.jpg', 15, 30),
(78, 3, 14, 'Shave-03.jpeg', 15, 30),
(79, 4, 14, 'Shave.jpg', 15, 35),
(80, 5, 14, 'Shave-05.jpg', 15, 30),
(81, 6, 14, 'Shave-06.jpeg', 15, 30),
(82, 7, 14, 'Shave-07.jpeg', 15, 30),
(83, 8, 14, 'Shave.jpg', 15, 30),
(84, 9, 14, 'Shave.jpg', 15, 30),
(87, 1, 15, 'Cut-and_Style-01.jpg', 50, 65),
(88, 2, 15, 'Cut-and_Style-02.jpg', 50, 70),
(89, 3, 15, 'Cut-and_Style-03.jpg', 50, 60),
(90, 4, 15, 'Cut-and_Style-04.jpg', 50, 70),
(91, 6, 15, 'Cut-and_Style-06.jpg', 50, 70),
(92, 7, 15, 'Cut-and_Style-07.jpeg', 50, 70),
(93, 8, 15, 'Cut-and_Style-08.jpg', 50, 75),
(94, 9, 15, 'Cut-and_Style-00.jpe', 40, 70),
(97, 5, 15, 'Cut-and_Style-05.jpg', 40, 70),
(98, 1, 16, 'Cornrows-01.jpg', 80, 120),
(99, 2, 16, 'Cornrows-02.jpg', 80, 120),
(100, 3, 16, 'Cornrows-03.jpeg', 80, 120),
(101, 4, 16, 'Cornrows-04.jpeg', 80, 120),
(102, 5, 16, 'Cornrows-05.jpeg', 80, 120),
(103, 6, 16, 'Cornrows-06.jpeg', 90, 120),
(104, 7, 16, 'Cornrows-07.jpg', 90, 120),
(105, 8, 16, 'Cornrows-08.jpeg', 90, 150),
(106, 9, 16, 'Cornrows.jpg', 90, 120),
(109, 1, 17, 'Straight-Back-01.jpg', 110, 150),
(110, 2, 17, 'Straight-Back-02.jpg', 110, 170),
(111, 3, 17, 'Straight-Back-03.jpg', 120, 150),
(112, 4, 17, 'Straight-Back-04.jpg', 120, 170),
(113, 5, 17, 'Straight-Back-05.jpg', 100, 150),
(114, 6, 17, 'Straight-Back-06.jpeg', 120, 140),
(115, 7, 17, 'Straight-Back-07.jpeg', 95, 150),
(116, 8, 17, 'Straight-Back-08.jpeg', 120, 160),
(117, 9, 17, 'StraightBack.jpg', 110, 150),
(164, 1, 21, 'BoxBraids.jpg', 150, 250),
(165, 2, 21, 'BoxBraids-02.jpg', 170, 250),
(166, 3, 21, 'BoxBraids-03.jpg', 180, 250),
(167, 4, 21, 'BoxBraids-04.jpg', 180, 250),
(168, 5, 21, 'BoxBraids-05.jpg', 190, 250),
(169, 6, 21, 'BoxBraids-02.jpg', 150, 250),
(170, 7, 21, 'BoxBraids-03.jpg', 180, 250),
(171, 8, 21, 'BoxBraids-05.jpg', 170, 250),
(173, 9, 21, 'BoxBraids.jpg', 160, 300),
(175, 1, 24, 'faux-Locs-01.jpeg', 200, 350),
(176, 2, 24, 'faux-Locs-02.jpg', 200, 300),
(177, 3, 24, 'faux-Locs-03.jpg', 200, 300),
(178, 4, 24, 'faux-Locs-04.jpg', 200, 300),
(179, 5, 24, 'faux-Locs-05.jpg', 250, 350),
(180, 6, 24, 'faux-Locs-06.jpeg', 200, 350),
(181, 7, 24, 'faux-Locs-07.jpg', 200, 300),
(183, 8, 24, 'faux-Locs.jpg', 250, 350),
(184, 9, 24, 'faux-Locs-03.jpg', 250, 350),
(186, 1, 25, 'Faux-Locs-styling-00.jpe', 50, 60),
(187, 2, 25, 'Faux-Locs-styling-01.jpe', 50, 65),
(188, 3, 25, 'Faux-Locs-styling-00.jpe', 50, 60),
(189, 4, 25, 'Faux-Locs-styling-01.jpe', 50, 65),
(190, 5, 25, 'Faux-Locs-styling-00.jpe', 50, 60),
(191, 6, 25, 'Faux-Locs-styling-01.jpe', 50, 60),
(192, 7, 25, 'Faux-Locs-styling-00.jpe', 50, 60),
(193, 8, 25, 'Faux-Locs-styling-01.jpe', 50, 60),
(195, 9, 25, 'Faux-Locs-styling-00.jpe', 50, 65),
(197, 1, 26, 'Crochet-01.jpg', 250, 370),
(198, 2, 26, 'Crochet-02.jpg', 250, 350),
(199, 3, 26, 'Crochet-03.jpg', 250, 350),
(200, 4, 26, 'Crochet-04.jpeg', 200, 350),
(201, 5, 26, 'Crochet-05.png', 250, 350),
(202, 6, 26, 'Crochet-06.jpg', 250, 350),
(203, 7, 26, 'Crochet-07.jpg', 250, 350),
(204, 8, 26, 'Crochet-08.jpg', 250, 350),
(206, 9, 26, 'Crochet.jpg', 250, 350),
(208, 1, 27, 'Havana-01.jpg', 250, 350),
(209, 2, 27, 'Havana-02.jpg', 270, 350),
(210, 3, 27, 'Havana-03.jpeg', 250, 320),
(211, 4, 27, 'Havana-04.jpg', 270, 360),
(212, 5, 27, 'Havana-05.jpg', 270, 350),
(213, 6, 27, 'Havana-06.jpeg', 270, 350),
(214, 7, 27, 'Havana-07.jpeg', 250, 320),
(215, 8, 27, 'Havana-08.jpg', 250, 350),
(217, 9, 27, 'HavanaTwist.jpg', 280, 390),
(219, 1, 28, 'Braids_Removal00.jpg', 50, 60),
(220, 2, 28, 'Braids_Removal00.jpg', 50, 60),
(221, 3, 28, 'Braids_Removal00.jpg', 50, 60),
(222, 4, 28, 'Braids_Removal00.jpg', 50, 60),
(223, 5, 28, 'Braids_Removal00.jpg', 50, 60),
(224, 6, 28, 'Braids_Removal00.jpg', 50, 60),
(225, 7, 28, 'Braids_Removal00.jpg', 50, 60),
(226, 8, 28, 'Braids_Removal00.jpg', 50, 60),
(227, 9, 28, 'Braids_Removal00.jpg', 50, 60),
(230, 1, 29, 'Braids-Styling-01.jpg', 50, 60),
(231, 2, 29, 'Braids_Styling-00.jpg', 50, 60),
(232, 3, 29, 'Braids-Styling-01.jpg', 50, 60),
(233, 4, 29, 'Braids_Styling-00.jpg', 50, 70),
(234, 5, 29, 'Braids-Styling-01.jpg', 50, 60),
(235, 6, 29, 'Braids_Styling-00.jpg', 50, 70),
(236, 7, 29, 'Braids-Styling-01.jpg', 50, 60),
(237, 8, 29, 'Braids_Styling-00.jpg', 50, 60),
(238, 9, 29, 'Braids-Styling-01.jpg', 50, 60),
(241, 1, 30, 'Single-Twist-01.jpeg', 180, 250),
(242, 2, 30, 'Single-Twist-02.jpeg', 180, 250),
(243, 3, 30, 'Single-Twist-03.jpeg', 180, 250),
(244, 4, 30, 'Single-Twist-04.jpeg', 180, 250),
(245, 5, 30, 'Single-Twist-05.jpg', 180, 250),
(246, 6, 30, 'Single-Twist-06.jpeg', 150, 250),
(247, 7, 30, 'Single-Twist-07.jpeg', 180, 250),
(248, 8, 30, 'Single_Twist00.jpg', 180, 250),
(249, 9, 30, 'Single_Twist01.jpg', 200, 280),
(274, 1, 33, 'S-curl-01.jpg', 50, 80),
(275, 2, 33, 'S-curl-02.jpg', 50, 90),
(276, 3, 33, 'S-curl-03.jpg', 50, 80),
(277, 4, 33, 'S-curl-04.jpg', 50, 100),
(278, 5, 33, 'S-curl-05.jpg', 50, 90),
(279, 6, 33, 'S-curl-06.jpg', 50, 80),
(280, 7, 33, 'S-curl-07.jpg', 60, 90),
(281, 8, 33, 'S-curl-01.jpg', 60, 80),
(282, 9, 33, 'S-curl-03.jpg', 60, 90),
(285, 1, 34, 'Hair_Relaxing00.jpg', 60, 80),
(286, 2, 34, 'Hair_Relaxing01.jpg', 60, 90),
(287, 3, 34, 'Hair_Relaxing00.jpg', 60, 80),
(288, 4, 34, 'Hair_Relaxing01.jpg', 60, 80),
(289, 5, 34, 'Hair_Relaxing00.jpg', 50, 90),
(290, 6, 34, 'Hair_Relaxing01.jpg', 50, 90),
(291, 7, 34, 'Hair_Relaxing00.jpg', 60, 90),
(292, 8, 34, 'Hair_Relaxing01.jpg', 60, 90),
(293, 9, 34, 'Hair_Relaxing00.jpg', 60, 90),
(296, 1, 38, 'Hair-Wash-and-Blow-01.jpeg', 70, 100),
(297, 2, 38, 'Hair-Wash-and-Blow-02.jpeg', 70, 100),
(298, 3, 38, 'Hair-Wash-and-Blow-01.jpeg', 70, 100),
(299, 4, 38, 'Hair-Wash-and-Blow-02.jpeg', 70, 100),
(300, 5, 38, 'Hair-Wash-and-Blow-01.jpeg', 70, 100),
(301, 6, 38, 'Hair-Wash-and-Blow-02.jpeg', 70, 100),
(302, 7, 38, 'Hair-Wash-and-Blow-01.jpeg', 70, 100),
(303, 8, 38, 'Hair-Wash-and-Blow-02.jpeg', 70, 100),
(304, 9, 38, 'Hair-Wash-and-Blow-01.jpeg', 70, 100),
(307, 1, 39, 'Hair-Wash-01.jpg', 50, 80),
(308, 2, 39, 'Hair-Wash-02.jpg', 50, 70),
(309, 3, 39, 'Hair-Wash-01.jpg', 50, 70),
(310, 4, 39, 'Hair-Wash-02.jpg', 50, 70),
(311, 5, 39, 'Hair-Wash-01.jpg', 50, 70),
(312, 6, 39, 'Hair-Wash-02.jpg', 50, 70),
(313, 7, 39, 'Hair-Wash-01.jpg', 50, 70),
(314, 8, 39, 'Hair-Wash-02.jpg', 50, 80),
(315, 9, 39, 'Hair-Wash-01.jpg', 50, 80),
(318, 1, 40, 'Hair-Dye-01.jpg', 50, 90),
(319, 2, 40, 'Hair-Dye-02.jpeg', 40, 80),
(320, 3, 40, 'Hair-Dye-03.jpg', 40, 60),
(321, 4, 40, 'Hair-Dye-04.jpeg', 50, 90),
(322, 5, 40, 'Hair-Dye-05.jpg', 50, 80),
(323, 6, 40, 'Hair-Dye-06.jpeg', 50, 80),
(324, 7, 40, 'Hair-Dye-07.jpeg', 50, 80),
(325, 8, 40, 'Dye_and_Highlights03.jpg', 50, 90),
(326, 9, 40, 'Dye_and_Highlights00.jpg', 50, 80),
(329, 1, 41, 'Dreadlocks-Braiding-01.jpg', 50, 60),
(330, 2, 41, 'Dreadlocks-Braiding-02.jpg', 50, 60),
(331, 3, 41, 'Dreadlocks-Braiding-03.jpg', 50, 70),
(332, 4, 41, 'Dreadlocks-Braiding-04.jpg', 50, 60),
(333, 5, 41, 'Dreadlocks-Braiding-05.jpg', 50, 60),
(334, 6, 41, 'Dreadlocks-Braiding-06.jpg', 50, 60),
(335, 7, 41, 'Dreadlocks-Braiding-07.jpg', 50, 60),
(336, 8, 41, 'Dreadlocks-Braiding-08.jpg', 50, 60),
(337, 9, 41, 'Dreadlocks-Braiding-09.jpeg', 50, 60),
(340, 1, 42, 'Dreadlocks-Waxing-01.jpeg', 50, 60),
(341, 2, 42, 'Dreadlocks-Waxing-02.jpg', 50, 60),
(342, 3, 42, 'Dreadlocks-Waxing-03.jpeg', 60, 70),
(343, 4, 42, 'Dreadlocks-Waxing-04.png', 50, 60),
(346, 1, 44, 'Brazilian-01.jpg', 1500, 2100),
(347, 2, 44, 'Brazilian-02.jpg', 1500, 2200),
(348, 3, 44, 'Brazilian-03.jpg', 1500, 2100),
(349, 4, 44, 'Brazilian-04.jpg', 1500, 2200),
(352, 5, 44, 'Brazilian-05.jpg', 1500, 2100),
(353, 6, 44, 'Brazilian-06.jpg', 1500, 2400),
(354, 7, 44, 'Brazilian-07.jpeg', 1500, 1900),
(355, 8, 44, 'Brazilian-01.jpg', 1100, 1900),
(356, 9, 44, 'Brazilian-03.jpg', 1200, 2400),
(368, 1, 46, 'Indian-01.jpg', 1900, 2500),
(369, 2, 46, 'Indian-02.jpeg', 2000, 2500),
(370, 3, 46, 'Indian-03.jpeg', 1900, 2700),
(371, 4, 46, 'Indian-04.jpeg', 2000, 2800),
(374, 5, 46, 'Indian-05.jpeg', 2000, 2700),
(375, 6, 46, 'Indian-06.jpeg', 2000, 2600),
(376, 7, 46, 'Indian-07.jpeg', 1900, 2500),
(377, 8, 46, 'Indian-08.jpg', 2000, 2700),
(378, 9, 46, 'Indian_Weaves02.jpg', 2000, 2800),
(391, 2, 48, 'Peruvian-02.jpg', 2500, 0),
(392, 3, 48, 'Peruvian-03.jpg', 2500, 0),
(393, 4, 48, 'Peruvian-04.jpg', 2300, 3200),
(397, 6, 48, 'Peruvian-06.jpg', 2400, 3100),
(398, 7, 48, 'Peruvian-07.jpeg', 2500, 3000),
(400, 9, 48, 'Peruvian-07.jpeg', 2600, 3300),
(412, 1, 48, 'Peruvian-01.jpeg', 2800, 3200),
(418, 5, 48, 'Peruvian-05.jpg', 2400, 3000),
(421, 8, 48, 'Peruvian-05.jpg', 2300, 3000),
(423, 1, 50, 'Malaysian-01.jpg', 2800, 3500),
(424, 2, 50, 'Malaysian-02.jpeg', 2900, 3800),
(425, 3, 50, 'Malaysian-03.jpg', 2750, 3800),
(426, 4, 50, 'Malaysian-04.jpeg', 2800, 3500),
(427, 5, 50, 'Malaysian-05.jpeg', 2800, 3600),
(429, 6, 50, 'Malaysian-06.jpeg', 2700, 3500),
(430, 7, 50, 'Malaysian-07.jpeg', 2900, 3600),
(431, 8, 50, 'Malaysian-04.jpeg', 3000, 4000),
(432, 9, 50, 'Malaysian-01.jpg', 2950, 3600),
(433, 1, 31, 'Full-lace-01.jpg', 350, 650),
(434, 2, 31, 'Full-lace-02.jpg', 350, 600),
(435, 3, 31, 'Full-lace-03.jpg', 350, 550),
(436, 4, 31, 'Full-lace-04.jpg', 350, 650),
(437, 5, 31, 'Full-lace-05.jpeg', 350, 600),
(438, 6, 31, 'Full-lace-06.jpeg', 350, 550),
(439, 7, 31, 'Full-lace-07.jpeg', 350, 500),
(440, 8, 31, 'Full-lace-08.jpg', 350, 600),
(441, 9, 31, 'Full_lace_wigs02.jpg', 350, 500),
(442, 1, 32, 'Front-lace-01.jpg', 400, 700),
(443, 2, 32, 'Front-lace-02.jpg', 400, 700),
(444, 3, 32, 'Front-lace-03.jpg', 450, 650),
(445, 4, 32, 'Front-lace-04.jpeg', 450, 700),
(446, 5, 32, 'Front-lace-05.jpg', 400, 700),
(447, 6, 32, 'Front-lace-06.jpg', 400, 700),
(448, 7, 32, 'Front-lace-07.jpeg', 400, 650),
(449, 8, 32, 'Front_Lace_Closure01.jpg', 450, 600),
(450, 9, 32, 'Front_Lace_Closure00.jpg', 400, 750),
(469, 1, 7, 'Clip-In-01.jpeg', 350, 550),
(470, 2, 7, 'Clip-In-02.jpg', 300, 550),
(471, 3, 7, 'Clip-In-03.jpg', 360, 650),
(472, 4, 7, 'Clip-In-04.jpg', 300, 600),
(473, 5, 7, 'Clip-In-05.jpeg', 400, 450),
(474, 6, 7, 'Clip-In-06.jpg', 450, 650),
(475, 7, 7, 'Clip-In-07.jpg', 400, 600),
(476, 8, 7, 'Clip-In-02.jpg', 350, 550),
(477, 9, 7, 'Clip-In-01.jpeg', 400, 600),
(478, 1, 6, 'Hidden-Crown-01.jpg', 350, 650),
(479, 2, 6, 'Hidden-Crown-02.jpg', 450, 700),
(480, 3, 6, 'Hidden-Crown-03.jpg', 300, 600),
(481, 4, 6, 'Hidden-Crown-04.jpg', 350, 550),
(482, 5, 6, 'Hidden-Crown-05.jpeg', 400, 700),
(483, 6, 6, 'Hidden-Crown-06.jpeg', 400, 650),
(484, 7, 6, 'Hidden-Crown-07.jpg', 450, 650),
(485, 8, 6, 'Hidden-Crown-08.jpg', 300, 650),
(486, 9, 6, 'Hidden-Crown-02.jpg', 350, 550),
(487, 1, 5, 'Fusion-01.jpeg', 250, 500),
(488, 2, 5, 'Fusion-02.jpeg', 300, 550),
(489, 3, 5, 'Fusion-03.jpg', 250, 550),
(490, 4, 5, 'Fusion-04.jpg', 300, 600),
(491, 5, 5, 'Fusion-05.jpg', 300, 600),
(492, 6, 5, 'Fusion-06.jpg', 300, 600),
(493, 7, 5, 'Fusion-07.jpg', 300, 650),
(494, 8, 5, 'Fusion-08.jpeg', 400, 600),
(495, 9, 5, 'fusion_extension00.jpg', 400, 600);

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
  MODIFY `Studio_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hair_category`
--
ALTER TABLE `hair_category`
  MODIFY `Category_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hair_styles`
--
ALTER TABLE `hair_styles`
  MODIFY `Style_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `Price_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;
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
