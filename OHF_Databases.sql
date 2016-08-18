-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 11:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hair_studios`
--
CREATE DATABASE IF NOT EXISTS `hair_studios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hair_studios`;

-- --------------------------------------------------------

--
-- Table structure for table `all_studios`
--
-- in use(#1932 - Table 'hair_studios.all_studios' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'hair_studios.all_studios' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `hair_categories`
--

CREATE TABLE `hair_categories` (
  `CategoryID` int(2) NOT NULL,
  `Category_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_categories`
--

INSERT INTO `hair_categories` (`CategoryID`, `Category_Description`) VALUES
(1, 'Hair Cut'),
(2, 'Cornrows and Braiding'),
(3, 'Chemicals and Hair Wash'),
(4, 'Dreadlocks'),
(5, 'Hair Extensions'),
(6, 'Weaves'),
(7, 'Wigs');

-- --------------------------------------------------------

--
-- Table structure for table `hair_category`
--
-- in use(#1932 - Table 'hair_studios.hair_category' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'hair_studios.hair_category' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `hair_styles`
--
-- in use(#1932 - Table 'hair_studios.hair_styles' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'hair_studios.hair_styles' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `hairstyles`
--

CREATE TABLE `hairstyles` (
  `Style_ID` int(255) NOT NULL,
  `Style_Description` varchar(255) NOT NULL,
  `CategoryID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairstyles`
--

INSERT INTO `hairstyles` (`Style_ID`, `Style_Description`, `CategoryID`) VALUES
(1, 'Chiskop', 1),
(2, 'Fade', 1),
(3, 'Fine Cut', 1),
(4, 'Brush', 1),
(5, 'Mohawk', 1),
(6, 'Trim', 1),
(7, 'Shave', 1),
(8, 'Cornrows(without Hairpiece)', 2),
(9, 'Straight Back', 2),
(10, 'Cornrows with Hairpiece', 2),
(11, 'Box Braids', 2),
(12, 'Faux Locs', 2),
(13, 'Crochet', 2),
(14, 'Havannah', 2),
(15, 'Braids Removal or Styling', 2),
(16, 'Single Twist ', 2),
(17, 'S-curl', 3),
(18, 'Hair Relaxer', 3),
(19, 'Hair Wash and Blow', 3),
(20, 'Hair Wash Only', 3),
(21, 'Colour(DYE) and/or Highlights', 3),
(22, 'Dreadlocks Waxing', 4),
(23, 'Dreadlocks Braiding ', 4),
(24, 'Brazilian ', 6),
(25, 'Indian', 6),
(26, 'Peruvian', 6),
(27, 'Malaysian', 6),
(28, 'Maintenance and Oiling', 6),
(29, 'Maintenance and Oiling', 7),
(30, 'Full Lace Wigs', 7),
(31, 'Front Lace Closure', 7),
(32, 'Tape In Extensions', 5),
(33, 'Clip-in or clip-on hair extensions', 5),
(34, 'Bonding and sealing Extensions', 5),
(35, 'Fusion Extensions', 5),
(36, 'Weave and Track Extensions', 5),
(37, 'Hidden Crown Extensions', 5);

-- --------------------------------------------------------

--
-- Table structure for table `price_ranges`
--

CREATE TABLE `price_ranges` (
  `Price_ID` int(255) NOT NULL,
  `Studio_ID` int(255) NOT NULL,
  `Style_ID` int(255) NOT NULL,
  `Price Range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_ranges`
--

INSERT INTO `price_ranges` (`Price_ID`, `Studio_ID`, `Style_ID`, `Price Range`) VALUES
(1, 1, 1, 'R20 - R50'),
(2, 1, 2, 'R35 - R50'),
(3, 1, 3, 'R35 - R50'),
(4, 1, 4, 'R30 - R50'),
(5, 1, 5, 'R30 - R80'),
(6, 1, 6, 'R30 - R50'),
(7, 1, 7, 'R30 - R50'),
(8, 2, 1, 'R20 - R50'),
(9, 2, 2, 'R35 - R50'),
(10, 2, 3, 'R35 - R50'),
(11, 2, 4, 'R30 - R50'),
(12, 2, 5, 'R30 - R80'),
(13, 2, 6, 'R30 - R50'),
(14, 2, 7, 'R30 - R50'),
(15, 3, 1, 'R25 - R50'),
(16, 3, 2, 'R30 - R60'),
(17, 3, 3, 'R35 - R60'),
(18, 3, 4, 'R30 - R50'),
(19, 3, 5, 'R30 - R80'),
(20, 3, 6, 'R40 - R50'),
(21, 3, 7, 'R30 - R60'),
(22, 4, 1, 'R25 - R50'),
(23, 4, 2, 'R30 - R60'),
(24, 4, 3, 'R35 - R60'),
(25, 4, 4, 'R30 - R50'),
(26, 4, 5, 'R30 - R80'),
(27, 4, 6, 'R40 - R50'),
(28, 4, 7, 'R30 - R60'),
(29, 5, 1, 'R25 - R50'),
(30, 5, 2, 'R30 - R60'),
(31, 5, 3, 'R35 - R60'),
(32, 5, 4, 'R30 - R50'),
(33, 5, 5, 'R30 - R80'),
(34, 5, 6, 'R40 - R50'),
(35, 5, 7, 'R30 - R60'),
(36, 6, 1, 'R25 - R50'),
(37, 6, 2, 'R30 - R60'),
(38, 6, 3, 'R35 - R60'),
(39, 6, 4, 'R30 - R50'),
(40, 6, 5, 'R35 - R80'),
(41, 6, 6, 'R40 - R50'),
(42, 6, 7, 'R30 - R60');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--
-- in use(#1932 - Table 'hair_studios.pricing' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'hair_studios.pricing' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `studio_list`
--

CREATE TABLE `studio_list` (
  `Studio_ID` int(255) NOT NULL,
  `Studio_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `Facebook_Page` varchar(255) NOT NULL,
  `Salon_Website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_list`
--

INSERT INTO `studio_list` (`Studio_ID`, `Studio_Name`, `Address`, `Region`, `Latitude`, `Longitude`, `Telephone`, `Facebook_Page`, `Salon_Website`) VALUES
(1, 'Skydiva Beauty Works', 'Ntemi Piliso str,Newtown,Johannesburg', 'Newtown', '-26.2002', '28.0357', '011056499', 'facebook.com/skydivahair', ''),
(2, 'Generale Hair Zone', '11 De Beer str,Cnr De Korte str,Braamfontein,Johhannesburg', 'Braamfontein', '-26.1936', '28.0349', '0837176540', 'www.facebook.com/Generale-Hair-Zone-247268912078527/', 'www.generalehairzone.co.za'),
(3, 'FM Hair and Nail Salon', 'Biccard str,Braamfontein.Johannesburg', 'Braamfontein', '-26.1953', '28.0376', '0115608663', 'www.facebook.com/fmhairnail/', 'fmhairnail.co.za'),
(4, 'Glamour Hair and Beauty Salon', '580 Jules Str,Johannesburg', 'Bedford Gardens', '-26.2012', '28.1178', '0764776530', '', ''),
(5, 'Turning Heads Hair Salon', '17 Maare Str,Johannesburg', 'Pimville,Soweto', '-26.2742', '27.9015', '0730977162', '', ''),
(6, 'Celeb Style Hair and Cosmetics', 'Ntemi PIliso Str,Newtown,Johannesburg', 'Newtown', '-26.2002', '28.0355', '0810499666', 'https://www.facebook.com/pages/Celeb-Style-Hair-Cosmetics-Hair-Salon-New-Town/101373273366742', ''),
(7, 'Queens Hair Paradise Salon', '42 Biccard str,Braamfontein,Johannesburg', 'Braamfontein', '-26.1920', '28.0370', '0110793649', 'https://www.facebook.com/queenshairparadisesalon/', ''),
(8, 'Ebenezar & J First Class Hair and Beauty Salon', '52 De Korte str,Braanfontein,Johannesburg', 'Braanfontein', '-26.1941', '28.0328', '0838861203', '', ''),
(9, 'Chama Unisex Hairdressing salon', '99 Juta str,Braamfontein,Johannesbiurg', 'Braamfontein', '-26.1945', '28.0364', '0849046262', '', ''),
(10, 'Buyi''s Hair Salon', '80 Jorissen str, Braamfontein,Johannesburg', 'Braamfontein', '-26.1930', '28.0351', '0113395065', 'www.facebook.com/buyishairsalon/', ''),
(11, 'Nelly''s Hair Salon', '52 De Korte str,Braamfontein,Johannesburg', 'Braamfontein', '-26.1941', '28.0328', '0780464541', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hair_categories`
--
ALTER TABLE `hair_categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `hairstyles`
--
ALTER TABLE `hairstyles`
  ADD PRIMARY KEY (`Style_ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `price_ranges`
--
ALTER TABLE `price_ranges`
  ADD PRIMARY KEY (`Price_ID`),
  ADD KEY `Studio_ID` (`Studio_ID`,`Style_ID`);

--
-- Indexes for table `studio_list`
--
ALTER TABLE `studio_list`
  ADD PRIMARY KEY (`Studio_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hair_categories`
--
ALTER TABLE `hair_categories`
  MODIFY `CategoryID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hairstyles`
--
ALTER TABLE `hairstyles`
  MODIFY `Style_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `price_ranges`
--
ALTER TABLE `price_ranges`
  MODIFY `Price_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `studio_list`
--
ALTER TABLE `studio_list`
  MODIFY `Studio_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `User_ID` int(255) NOT NULL,
  `User_Email` varchar(320) NOT NULL,
  `User_Full_Name` varchar(255) NOT NULL,
  `State` int(1) NOT NULL DEFAULT '1',
  `User_Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is the first draft';

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`User_ID`, `User_Email`, `User_Full_Name`, `State`, `User_Password`) VALUES
(1, 'lbokgoshi@gmail.com', 'Laura Bokgoshi', 1, 'abc'),
(2, 'l@g.com', 'Lebone', 1, 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_Email` (`User_Email`(255));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
