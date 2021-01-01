-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 09:42 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accommodation`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_application`
--

CREATE TABLE IF NOT EXISTS `tbl_accommodation_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `joining_date_dept` date NOT NULL,
  `joining_date_present` date NOT NULL,
  `joining_letter` varchar(255) NOT NULL,
  `pay_scale` text NOT NULL,
  `present_salary` varchar(255) NOT NULL,
  `special_pay` varchar(255) NOT NULL,
  `marital_status` text NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `number_of_family_members` int(11) NOT NULL,
  `house_owned_by` varchar(255) NOT NULL,
  `legally_separated` varchar(255) NOT NULL,
  `date_of_completion_of_letting_unit` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `loan_obtained_from_govt` text NOT NULL,
  `loan_obtained_from_govt_amount` varchar(255) NOT NULL,
  `loan_obtained_from_govt_date` date NOT NULL,
  `loan_obtained_house_building` text NOT NULL,
  `loan_obtained_house_building_amount` varchar(255) NOT NULL,
  `loan_obtained_house_building_date` date NOT NULL,
  `allotted_flat` text NOT NULL,
  `accommodation_arraignment` varchar(255) NOT NULL,
  `areas` varchar(255) NOT NULL,
  `get_house_one` varchar(255) NOT NULL,
  `get_house_two` varchar(255) NOT NULL,
  `get_house_three` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `executive_engineer` varchar(255) NOT NULL,
  `superintending_engineer` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `evicted_resident` text NOT NULL,
  `remarks` text NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_accommodation_application`
--

INSERT INTO `tbl_accommodation_application` (`id`, `name`, `email`, `nid`, `designation`, `password`, `confirm_password`, `fathers_name`, `mothers_name`, `joining_date_dept`, `joining_date_present`, `joining_letter`, `pay_scale`, `present_salary`, `special_pay`, `marital_status`, `mobile_number`, `spouse_name`, `number_of_family_members`, `house_owned_by`, `legally_separated`, `date_of_completion_of_letting_unit`, `photo`, `loan_obtained_from_govt`, `loan_obtained_from_govt_amount`, `loan_obtained_from_govt_date`, `loan_obtained_house_building`, `loan_obtained_house_building_amount`, `loan_obtained_house_building_date`, `allotted_flat`, `accommodation_arraignment`, `areas`, `get_house_one`, `get_house_two`, `get_house_three`, `date`, `executive_engineer`, `superintending_engineer`, `signature`, `evicted_resident`, `remarks`, `comment`, `status`, `update_date`) VALUES
(10, 'নাম', 'shatabdi.iceiu@gmail.com', '৬৫৪৩২৩৪২৩৪', '1', '123456', '123456', 'পিতার নাম', 'মাতার নাম ', '2020-12-08', '2020-12-23', '', '11', '23500', '25500', 'married', '01670012704', 'স্বামী / স্ত্রী নাম ', 0, 'Him/Her', '', '2020-12-11', 'assets/files/Syed_Mahfuz_Ahmed.jpg', 'no', '', '0000-00-00', 'no', '', '0000-00-00', 'on', 'তার বর্তমান থাকার ব্যবস্থার বিবরণ', '1', 'SDE-Bhovon. Bashundhara', 'SDE-Bhovon-2. Bashundhara', 'SDE-Bhovon-3. Bashundhara', '2020-12-29', '', '', 'assets/files/signature.jpg', 'no', '', '', 0, '2020-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_type`
--

CREATE TABLE IF NOT EXISTS `tbl_application_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_application_type`
--

INSERT INTO `tbl_application_type` (`ID`, `type`) VALUES
(1, 'New Application'),
(2, 'Pending Application'),
(3, 'Approved Application'),
(4, 'Archived Application');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  `area_name_bn` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`id`, `area_name`, `area_name_bn`, `order_id`) VALUES
(1, 'Badda, Dhaka', 'বাড্ডা, ঢাকা', '1'),
(2, 'Kuril, Dhaka', 'কুড়িল, ঢাকা', '2'),
(3, 'Khilkhet, Dhaka', 'খিলক্ষেত, ঢাকা', '1'),
(4, 'Bashundhara, Dhaka', 'বসুন্ধরা, ঢাকা', '1'),
(5, 'Norda, Dhaka', 'নর্দা, ঢাকা', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `application_id`, `comments`, `date`) VALUES
(2, 9, 'Transferred to new application.', '2020-12-08'),
(3, 9, 'Transferred to approved application.', '2020-12-08'),
(4, 2, 'Transferred to pending application.', '2020-12-09'),
(5, 9, 'Transferred to archived application.', '2020-12-09'),
(6, 2, 'It is approved!', '2020-12-09'),
(7, 8, 'à¦à¦Ÿà¦¾ à¦à¦•à¦Ÿà¦¾ à¦¨à¦¤à§à¦¨ à¦…à§à¦¯à¦¾à¦ªà§à¦²à¦¿à¦•à§‡à¦¶à¦¾à¦¨ à¦¦à§Ÿà¦¾ à¦•à¦°à§‡ à¦¦à§‡à¦–à§à¦¨ à¦•à¦¿à¦›à§ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦•à¦¿à¦¨à¦¾', '2020-12-11'),
(8, 8, 'à¦…à§à¦¯à¦¾à¦ªà§à¦²à¦¿à¦•à§‡à¦¶à¦¾à¦¨ à¦Ÿà¦¿ à¦¦à§‡à¦–à¦¾ à¦¹à§Ÿà§‡à¦›à§‡, à¦¸à¦¦à§Ÿ à¦…à¦¨à§à¦®à§‹à¦¦à¦¨ à¦¦à§‡à§Ÿà¦¾ à¦œà§‡à¦¤à§‡ à¦ªà¦¾à¦°à§‡', '2020-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile_no` text NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `mobile_no`, `comments`) VALUES
(1, 'Deepta Barua', '01773182803', 'okay');
