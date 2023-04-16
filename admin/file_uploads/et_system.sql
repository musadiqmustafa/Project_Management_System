-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `et_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `storage_a` int(11) NOT NULL,
  `storage_b` int(11) NOT NULL,
  `Project_id` int(255) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `time`, `user_id`, `receiver`, `storage_a`, `storage_b`, `Project_id`, `status`) VALUES
(1, '[photoAttachment-1661767552bg3_new.png]', 1661767584, 1, 2, 1, 2, 1, 'read'),
(2, 'ok', 1661767668, 2, 1, 2, 1, 1, 'read'),
(3, '[photoAttachment-1661767552file.docx]', 1661767705, 1, 2, 1, 2, 1, 'read'),
(4, '[photoAttachment-1661767652zip.zip]', 1661767764, 2, 1, 2, 1, 1, 'read'),
(5, '[photoAttachment-1661767652institutional-members0909.php]', 1661767820, 2, 1, 2, 1, 1, 'read'),
(6, 'Hello', 1662526708, 2, 3, 2, 3, 2, 'read'),
(7, '[photoAttachment-1663670066shobi.zip]', 1663670113, 1, 2, 1, 2, 2, 'read'),
(8, 'sdad', 1663670120, 1, 3, 1, 3, 2, 'read'),
(9, 'hi', 1672414072, 3, 1, 3, 1, 0, 'read'),
(10, 'ok', 1672414152, 3, 1, 3, 1, 0, 'read'),
(11, 'This is admin', 1672414446, 1, 3, 1, 3, 0, 'read'),
(12, 'this is client', 1672415080, 2, 1, 2, 1, 1, 'read'),
(13, 'client here', 1672415099, 2, 3, 2, 3, 1, 'read'),
(14, 'testing', 1672415704, 3, 1, 3, 1, 0, 'read'),
(15, 'ok', 1672415757, 1, 3, 1, 3, 0, 'read'),
(16, 'project 2 message ', 1672415913, 2, 1, 2, 1, 2, 'read'),
(17, 'adas', 1672415988, 3, 1, 3, 1, 2, 'read');

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `releaseDate` date DEFAULT NULL,
  `budget` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `p_id`, `title`, `deadline`, `releaseDate`, `budget`, `status`) VALUES
(1, 2, 'Project-2', '2022-08-31', '2022-08-29', '500', 1),
(2, 3, 'Project-3', '2022-08-31', '2022-08-29', '1000', 1),
(3, 4, 'milestone 1', '2022-12-31', '1970-01-01', '1300', 0),
(4, 5, '20', '0000-00-00', '0000-00-00', '20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile_pics`
--

CREATE TABLE `profile_pics` (
  `id` int(11) NOT NULL,
  `fkUserId` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_pics`
--

INSERT INTO `profile_pics` (`id`, `fkUserId`, `filename`, `type`, `size`, `createdDate`) VALUES
(1, 1, '1663065717.0838.jpg', 'image/jpeg', '106307', '2022-09-07 09:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_ids` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_desc` varchar(1200) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `archive` int(10) NOT NULL,
  `trash` int(10) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `revisions` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `c_id`, `s_ids`, `project_title`, `project_desc`, `budget`, `status`, `archive`, `trash`, `start_time`, `end_time`, `revisions`, `file`, `days`) VALUES
(1, 2, '1,2,4,3', 'Project-1', 'Social', '10', '1', 1, 0, '2022-08-29', '2022-08-31', 0, '', 0),
(2, 2, '1,2,4,3', 'Project-2', 'sw', '500', '0', 0, 0, '2022-08-29', '2022-08-31', 0, '', 0),
(3, 2, '1,2,4,3', 'Project-3', 'dsd', '1000', '0', 0, 0, '2022-08-29', '2022-08-31', 0, '', 0),
(4, 2, '1,2,3', 'Project 4', 'None', '3200', '0', 0, 0, '2022-12-08', '2022-12-07', 0, '', 0),
(5, 2, '1,2,4', 'musadiq mustafa', '15020', '1500', '0', 0, 0, '2023-03-05', '2023-03-06', 50, '../admin/file_uploads/esolacet_et.sql', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `syatem_title` varchar(255) NOT NULL,
  `login_page_title` varchar(255) NOT NULL,
  `copy_rights` varchar(255) NOT NULL,
  `system_currency` varchar(10) NOT NULL,
  `time_zone` varchar(255) NOT NULL,
  `favicon_image` varchar(255) NOT NULL,
  `login_page_logo` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `mobile_logo` varchar(255) NOT NULL,
  `stripe_sk` varchar(1000) NOT NULL,
  `stripe_pk` varchar(1000) NOT NULL,
  `paypal_email` varchar(1000) NOT NULL,
  `checkout_id` varchar(1000) NOT NULL,
  `checkout_pk` varchar(1000) NOT NULL,
  `system_email` varchar(150) NOT NULL,
  `forget_email` text NOT NULL,
  `create_account_email` text NOT NULL,
  `project_assign_email` text NOT NULL,
  `assign_staff_email` text NOT NULL,
  `project_update_email` text NOT NULL,
  `system_language` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `purchase_code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `url`, `company_name`, `syatem_title`, `login_page_title`, `copy_rights`, `system_currency`, `time_zone`, `favicon_image`, `login_page_logo`, `logo`, `mobile_logo`, `stripe_sk`, `stripe_pk`, `paypal_email`, `checkout_id`, `checkout_pk`, `system_email`, `forget_email`, `create_account_email`, `project_assign_email`, `assign_staff_email`, `project_update_email`, `system_language`, `version`, `purchase_code`) VALUES
(1, 'http://localhost/ET-Management-System%202/et-system/', 'Esolace Tech', 'Esolace Tech- Project Management System', 'Please Login', '© Copyright 2022 by Esolace Tech.<br/> All Rights Reserved', 'USD,$', 'Asia/Karachi', '', '1663046116_login_login-logo.png', '1663045985_logo_client-side-logo.png', '1663045985_mlogo_teameyo-mobile-logo.png', '', '', '', '', '', 'no-reply@et.com', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#f3f2f0\" align=\"center\">\r\n<tbody><tr><td height=\"40\"> </td></tr>\r\n<tr><td height=\"20\"> </td></tr>\r\n  <tr>\r\n    <td>\r\n  <table style=\"margin:0 auto\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\r\n  <tbody><tr>\r\n    <td>\r\n    <table style=\"margin:0 auto\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n   <tbody><tr>\r\n    <td height=\"60\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Hi, {USER_NAME} </font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"6\" face=\"Arial, Helvetica, sans-serif\" color=\"#5fbaff\"><b>You requested your ET password be reset.</b></font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"40\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td> <table width=\"450\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n  <tbody><tr>\r\n<td width=\"200\" height=\"40\" bgcolor=\"#5fbaff\" align=\"center\">\r\n    <a href=\"{RESET_URL}\"><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\" style=\"text-decoration:none;\"><b>Reset your password</b></font></a> \r\n    </td><td width=\"200\">&nbsp;</td>  </tr>\r\n</tbody></table>\r\n</td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"30\"></td>\r\n  </tr>\r\n    <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">You will then be able to log into your account and change your password.</font></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">If you <b> did not request your password be reset</b> then ignore this email.</font></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Kind Regards,<br>{SIGNATURE}</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"60\"></td>\r\n  </tr>\r\n</tbody></table>\r\n    </td>\r\n  </tr>\r\n</tbody></table>\r\n    </td></tr><tr><td height=\"50\"> </td></tr>\r\n</tbody></table>', '<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#f3f2f0\" align=\"center\">\r\n<tbody><tr><td height=\"40\"> </td></tr>\r\n<tr><td height=\"20\"> </td></tr>\r\n  <tr>\r\n    <td>\r\n  <table style=\"margin:0 auto\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\r\n  <tbody><tr>\r\n    <td>\r\n    <table style=\"margin:0 auto\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n   <tbody><tr>\r\n    <td height=\"60\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"6\" face=\"Arial, Helvetica, sans-serif\" color=\"#5fbaff\"><b>Welcome to the ET community!</b></font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"40\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Hi {USER_NAME},</font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"20\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">You are free to login with followed details</font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"30\"></td>\r\n  </tr>\r\n   <tr>\r\n    <td><table width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n  <tbody><tr>\r\n<td width=\"100\" height=\"40\" bgcolor=\"#5fbaff\" align=\"center\">\r\n    <a href=\"{DASHBOARD_URL}\"><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\" style=\"text-decoration:none;\"><b>Login</b></font></a> \r\n    </td><td width=\"300\">&nbsp;</td>  </tr>\r\n</tbody></table></td>\r\n  </tr>\r\n   <tr>\r\n    <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n      <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">\r\nEmail : {USER_LOGIN_EMAIL}<br>\r\n Password: {USER_LOGIN_PASSWORD}</font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Kind Regards,<br>\r\n{SIGNATURE}</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"60\"></td>\r\n  </tr>\r\n</tbody></table>\r\n    </td>\r\n  </tr>\r\n</tbody></table>\r\n    </td></tr><tr><td height=\"60\"> </td></tr>\r\n</tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#f3f2f0\" align=\"center\">\r\n<tbody><tr><td height=\"40\"> </td></tr>\r\n<tr><td height=\"20\"> </td></tr>\r\n  <tr>\r\n    <td>\r\n  <table style=\"margin:0 auto\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\r\n  <tbody><tr>\r\n    <td>\r\n    <table style=\"margin:0 auto\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n   <tbody><tr>\r\n    <td height=\"60\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"6\" face=\"Arial, Helvetica, sans-serif\" color=\"#5fbaff\"><b>A new project has been created in the Et community!</b></font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"40\"></td>\r\n  </tr>\r\n    <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Hi, {USER_NAME}</font></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Project name: {PROJECT_NAME}</font></td>\r\n  </tr>\r\n   <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Please login your account to view status and updates of the project.</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n    <tr>\r\n  <td><table width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n  <tbody><tr>\r\n<td width=\"100\" height=\"40\" bgcolor=\"#5fbaff\" align=\"center\">\r\n    <a href=\"{DASHBOARD_URL}\"><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\" style=\"text-decoration:none;\"><b>Login</b></font></a> \r\n    </td><td width=\"300\">&nbsp;</td>  </tr>\r\n</tbody></table></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Kind Regards,<br>{SIGNATURE}</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"60\"></td>\r\n  </tr>\r\n</tbody></table>\r\n    </td>\r\n  </tr>\r\n</tbody></table>\r\n    </td></tr><tr><td height=\"50\"> </td></tr>\r\n</tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#f3f2f0\" align=\"center\">\r\n<tbody><tr><td height=\"40\"> </td></tr>\r\n<tr><td height=\"20\"> </td></tr>\r\n  <tr>\r\n    <td>\r\n  <table style=\"margin:0 auto\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\r\n  <tbody><tr>\r\n    <td>\r\n    <table style=\"margin:0 auto\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n   <tbody><tr>\r\n    <td height=\"60\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"6\" face=\"Arial, Helvetica, sans-serif\" color=\"#5fbaff\"><b>Admin assigned you in a project</b></font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"40\"></td>\r\n  </tr>\r\n    <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Hi, {USER_NAME}</font></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Project name: {PROJECT_NAME}</font></td>\r\n  </tr>\r\n   <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Please login your account to view status and updates of the project.</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n    <tr>\r\n  <td><table width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n  <tbody><tr>\r\n<td width=\"100\" height=\"40\" bgcolor=\"#5fbaff\" align=\"center\">\r\n    <a href=\"{DASHBOARD_URL}\"><font style=\"text-decoration:none;\" size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\"><b>Login</b></font></a> \r\n    </td><td width=\"300\">Â </td>  </tr>\r\n</tbody></table></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Kind Regards,<br>{SIGNATURE}</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"60\"></td>\r\n  </tr>\r\n</tbody></table>\r\n    </td>\r\n  </tr>\r\n</tbody></table>\r\n    </td></tr><tr><td height=\"50\"> </td></tr>\r\n</tbody></table>', '<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#f3f2f0\" align=\"center\">\r\n<tbody><tr><td height=\"40\"> </td></tr>\r\n<tr><td height=\"20\"> </td></tr>\r\n  <tr>\r\n    <td>\r\n  <table style=\"margin:0 auto\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\r\n  <tbody><tr>\r\n    <td>\r\n    <table style=\"margin:0 auto\" width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n   <tbody><tr>\r\n    <td height=\"60\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"6\" face=\"Arial, Helvetica, sans-serif\" color=\"#5fbaff\"><b>Admin update the project information <br></b></font></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"40\"></td>\r\n  </tr>\r\n    <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Hi, {USER_NAME}</font></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Project name: {PROJECT_NAME}</font></td>\r\n  </tr>\r\n   <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n      <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Please login your account to view status and updates of the project.</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"20\"></td>\r\n  </tr>\r\n    <tr>\r\n  <td><table width=\"400\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n  <tbody><tr>\r\n<td width=\"100\" height=\"40\" bgcolor=\"#5fbaff\" align=\"center\">\r\n    <a href=\"{DASHBOARD_URL}\"><font style=\"text-decoration:none;\" size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\"><b>Login</b></font></a> \r\n    </td><td width=\"300\">&nbsp;</td>  </tr>\r\n</tbody></table></td>\r\n  </tr>\r\n    <tr>\r\n  <td height=\"30\"></td>\r\n  </tr>\r\n  <tr>\r\n    <td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\" color=\"#000000\">Kind Regards,<br>{SIGNATURE}</font></td>\r\n  </tr>\r\n  <tr>\r\n  <td height=\"60\"></td>\r\n  </tr>\r\n</tbody></table>\r\n    </td>\r\n  </tr>\r\n</tbody></table>\r\n    </td></tr><tr><td height=\"50\"> </td></tr>\r\n</tbody></table>', 'en', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `Projects_ids` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accountStatus` tinyint(1) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `skype_id` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `regDate` datetime NOT NULL,
  `type_status` varchar(300) NOT NULL,
  `last_seen` int(255) NOT NULL,
  `session_status` varchar(7) NOT NULL,
  `status` int(10) NOT NULL,
  `note` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `user_language` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Projects_ids`, `password`, `email`, `accountStatus`, `firstName`, `title`, `address`, `phone`, `website`, `skype_id`, `fb`, `regDate`, `type_status`, `last_seen`, `session_status`, `status`, `note`, `city`, `state`, `zip`, `user_language`, `country`) VALUES
(1, '', 'faisal123', 'admin@gmail.com', 1, 'Admin', 'Project Manager', '', '', '', '', '', '2022-08-29 10:01:14', 'stopped', 1679607475, 'online', 1, 'Test\r\nTeam Chat Staff Box Error Check \r\nOff\r\nTesting', '', '', '', 'en', ''),
(2, '', 'client-123', 'muhammadfaisal12@hotmail.com', 2, 'Client', '', '2/13 Servey green town', '00000000000', '', '', '', '2022-08-29 15:02:49', 'stopped', 1672509246, 'offline', 0, 'fddd', 'Karachi', '', '75200', 'en', 'Pakistan'),
(3, '', 'faisal-123', 'muhammadfaisal0606@gmail.com', 3, 'Muhammad Faisal', 'Project Manager', '', '', '', '', '', '2022-08-29 15:03:39', 'stopped', 1672509243, 'offline', 0, '', '', '', '', 'en', ''),
(4, '', 'ali-123', 'ali@gmail.com', 3, 'Ali', 'Developer', '', '', '', '', '', '2022-08-29 15:04:12', '', 1661767452, 'offline', 0, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `profile_pics`
--
ALTER TABLE `profile_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkUserId` (`fkUserId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile_pics`
--
ALTER TABLE `profile_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `milestones`
--
ALTER TABLE `milestones`
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`p_id`) REFERENCES `projects` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile_pics`
--
ALTER TABLE `profile_pics`
  ADD CONSTRAINT `profile_pics_ibfk_1` FOREIGN KEY (`fkUserId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fkClientId` FOREIGN KEY (`c_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
