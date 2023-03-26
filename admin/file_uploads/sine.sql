-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinomaxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articlecomplexityparameters`
--

CREATE TABLE `articlecomplexityparameters` (
  `ArticleComplexityParameterID` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ComplexityParameterID` int(11) NOT NULL,
  `ArticleProcessingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articlefigurerecord`
--

CREATE TABLE `articlefigurerecord` (
  `ArticleFigureRecordID` int(11) NOT NULL,
  `FigurePath` varchar(245) DEFAULT NULL,
  `FigureName` varchar(45) DEFAULT NULL,
  `FigureDate` timestamp NULL DEFAULT current_timestamp(),
  `ArticleProcessingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articleprocessdetails`
--

CREATE TABLE `articleprocessdetails` (
  `ArticleProcessDetailID` int(11) NOT NULL,
  `ArticleProcessingDetailDate` timestamp NULL DEFAULT current_timestamp(),
  `ArticleProcessingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articleprocessing`
--

CREATE TABLE `articleprocessing` (
  `ArticleProcessingID` int(11) NOT NULL,
  `ArticleProcessingIndicator` varchar(45) DEFAULT NULL,
  `ArticleProcessingStatus` varchar(45) DEFAULT NULL COMMENT 'InProgress, Completed, Rejected',
  `ArticleProcessingDate` timestamp NULL DEFAULT current_timestamp(),
  `UserAssignedArticleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articleprocessingscores`
--

CREATE TABLE `articleprocessingscores` (
  `ArticleProcessingScoreID` int(11) NOT NULL,
  `ApplicableScore` int(11) DEFAULT NULL,
  `TotalQuantity` int(11) DEFAULT NULL,
  `ScoreSummary` varchar(45) DEFAULT NULL,
  `ArticleProcessingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articlereferenceextractions`
--

CREATE TABLE `articlereferenceextractions` (
  `ArticleProcessingID` int(11) NOT NULL,
  `ReferenceFileName` varchar(45) DEFAULT NULL,
  `ReferenceFileDate` timestamp NULL DEFAULT current_timestamp(),
  `UserID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `ArticleTitle` varchar(45) DEFAULT NULL,
  `ArticleCode` varchar(50) DEFAULT NULL COMMENT 'Example: CMC-29-42-6335',
  `ArticleJMSCode` varchar(50) DEFAULT NULL COMMENT 'Example: BMS-THAN-2022-HT1-4064-1',
  `ArticleAuthors` varchar(45) DEFAULT NULL,
  `ArticleKeywords` varchar(255) DEFAULT NULL,
  `ArticleDOI` varchar(45) DEFAULT NULL,
  `ArticleProcessingType` varchar(15) NOT NULL DEFAULT 'published' COMMENT 'published, accepted',
  `ArticleType` varchar(45) DEFAULT NULL,
  `ArticleLastPage` varchar(45) DEFAULT NULL,
  `ArticleFirstPage` varchar(45) DEFAULT NULL,
  `Elocator` varchar(45) DEFAULT NULL,
  `ArticleIssue` int(11) NOT NULL,
  `ArticleVolume` int(11) NOT NULL,
  `ArticleYear` int(11) NOT NULL,
  `ArticleAbstract` varchar(1000) DEFAULT NULL,
  `EPubDate` timestamp NULL DEFAULT current_timestamp(),
  `JournalID` int(11) NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active' COMMENT 'Active,Archive',
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articlesfilesrecord`
--

CREATE TABLE `articlesfilesrecord` (
  `ArticlesFilesRecordID` int(11) NOT NULL,
  `FileType` varchar(45) DEFAULT NULL COMMENT 'PDF, Word, XML Converted, XML Valid, EPUB, HTML',
  `Quantity` varchar(45) DEFAULT NULL,
  `FileName` varchar(50) DEFAULT NULL,
  `FilePath` varchar(300) DEFAULT NULL,
  `ArticleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assignmenttypes`
--

CREATE TABLE `assignmenttypes` (
  `AssignmentTypeID` int(11) NOT NULL,
  `AssignmentTypeName` varchar(45) DEFAULT NULL,
  `AssignmentTypeCode` varchar(15) NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CAT_ID` int(11) NOT NULL,
  `HOURS` int(11) DEFAULT NULL,
  `J_CODE_NAME` varchar(191) DEFAULT NULL,
  `J_CODE_VALUES` int(11) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` varchar(191) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CAT_ID`, `HOURS`, `J_CODE_NAME`, `J_CODE_VALUES`, `DATE`, `STATUS`) VALUES
(1, 6, 'M1', 60, '2022-10-17 00:32:12', 'Active'),
(2, 3, 'P1', 30, '2022-10-17 00:32:14', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `complexityparameters`
--

CREATE TABLE `complexityparameters` (
  `ComplexityParameterID` int(11) NOT NULL,
  `ComplexityParameterName` varchar(45) DEFAULT NULL,
  `ComplexityParameterScore` int(11) DEFAULT NULL,
  `ComplexityParameterStatus` varchar(45) DEFAULT 'Active',
  `ComplexityParameterDate` datetime DEFAULT current_timestamp(),
  `AddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emailrecord`
--

CREATE TABLE `emailrecord` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `time` varchar(191) DEFAULT NULL,
  `J_CODE` int(11) DEFAULT NULL,
  `In_Queue` int(11) DEFAULT NULL,
  `In_Running` int(11) DEFAULT NULL,
  `In_Remaining` int(11) DEFAULT NULL,
  `Feedback_One` text DEFAULT NULL,
  `Feedback_Two` text DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(191) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailrecord`
--

INSERT INTO `emailrecord` (`id`, `cat_id`, `user_id`, `name`, `time`, `J_CODE`, `In_Queue`, `In_Running`, `In_Remaining`, `Feedback_One`, `Feedback_Two`, `size`, `Date`, `Status`) VALUES
(45, 1, 1, 'AED', '6-AM', 60, 50, 50, 10, '10', '1.1', 'King', '2023-02-17 11:30:22', 'Active'),
(46, 1, 1, 'AED', '6-AM', 60, 50, 50, 10, '10', '1.1', 'King', '2023-02-17 16:15:02', 'Active'),
(47, 1, 1, 'AED', '7-AM', NULL, 50, 100, 20, '2', '1.2', 'Queen', '2023-02-17 16:15:56', 'Active'),
(48, 1, 1, 'AED', '8-AM', NULL, 30, 130, 50, '10', '1.3', 'King', '2023-02-17 16:16:11', 'Active'),
(49, 1, 1, 'AED', '9-AM', NULL, 20, 150, 110, '5', '1.7', 'King', '2023-02-17 16:16:29', 'Active'),
(50, 1, 1, 'AED', '10-AM', NULL, 10, 160, 170, '10', '1.1', 'Twin', '2023-02-17 16:16:47', 'Active'),
(51, 1, 1, 'Hero', '6-AM', 60, 50, 50, 10, '10', '1.6', '', '2023-02-25 16:35:38', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `issuearticles`
--

CREATE TABLE `issuearticles` (
  `IssueArticleID` int(11) NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp(),
  `ArticleID` int(11) NOT NULL,
  `IssueID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `IssueID` int(11) NOT NULL,
  `Issue` int(11) DEFAULT NULL,
  `Volume` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT current_timestamp(),
  `Journals_JournalID` int(11) NOT NULL,
  `AddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `JournalID` int(11) NOT NULL,
  `JournalAddedBy` varchar(45) NOT NULL,
  `JournalCode` varchar(45) DEFAULT NULL,
  `JournalTitle` varchar(225) DEFAULT NULL,
  `JournalType` varchar(50) DEFAULT NULL,
  `ISSNOnline` varchar(45) DEFAULT NULL,
  `ISSNPrint` varchar(45) DEFAULT NULL,
  `JournalImpactFactor` varchar(45) DEFAULT NULL,
  `JournalStatus` varchar(45) DEFAULT 'Active',
  `JournalURL` varchar(200) NOT NULL,
  `JournalAimsandScope` varchar(5000) NOT NULL,
  `JournalDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `processingstages`
--

CREATE TABLE `processingstages` (
  `ProcessingStageID` int(11) NOT NULL,
  `ProcessingStageName` varchar(45) DEFAULT NULL,
  `ProcessingStageCode` varchar(15) DEFAULT NULL,
  `ProcessingStageDescription` varchar(200) DEFAULT NULL,
  `ScoreCalculationStatus` varchar(45) DEFAULT NULL,
  `ScoreCalculationRationale` varchar(45) DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roleprocessingstages`
--

CREATE TABLE `roleprocessingstages` (
  `RoleProcessingStageID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `ProcessingStageID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(45) DEFAULT NULL,
  `RoleDescription` varchar(300) DEFAULT NULL,
  `Status` varchar(45) DEFAULT 'Active',
  `AddedBy` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleName`, `RoleDescription`, `Status`, `AddedBy`) VALUES
(1, 'Admin', 'Test', 'Active', NULL),
(2, 'Super Admin', 'Super', 'Active', NULL),
(5, 'Production leads', 'feed data Activity', 'Active', 'henry'),
(6, 'Production Report', 'Production Report', 'Active', 'henry');

-- --------------------------------------------------------

--
-- Table structure for table `rolesystemactivities`
--

CREATE TABLE `rolesystemactivities` (
  `RoleSystemActivityID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `SystemActivityID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rolesystemactivities`
--

INSERT INTO `rolesystemactivities` (`RoleSystemActivityID`, `RoleID`, `SystemActivityID`, `Date`) VALUES
(1, 2, 1, '2022-10-14 15:25:17'),
(2, 2, 2, '2022-10-14 15:25:17'),
(3, 2, 4, '2022-10-14 15:35:30'),
(4, 2, 3, '2022-10-14 15:35:30'),
(5, 2, 6, '2022-10-14 15:47:41'),
(6, 2, 5, '2022-10-14 15:47:41'),
(7, 2, 10, '2022-10-14 15:55:33'),
(8, 2, 9, '2022-10-14 15:55:33'),
(9, 2, 8, '2022-10-14 15:55:33'),
(10, 2, 7, '2022-10-14 15:56:48'),
(15, 5, 12, '2022-10-15 12:49:09'),
(21, 2, 12, '2022-10-15 16:58:54'),
(22, 5, 16, '2022-10-15 17:12:56'),
(23, 5, 17, '2022-10-15 17:17:36'),
(24, 5, 18, '2022-10-15 17:23:57'),
(26, 2, 16, '2022-10-15 17:30:10'),
(28, 2, 20, '2022-10-15 17:48:09'),
(29, 2, 21, '2022-10-15 19:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `sechedule_set`
--

CREATE TABLE `sechedule_set` (
  `sechedule_id` int(11) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `target_no` varchar(255) NOT NULL,
  `added_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sechedule_set`
--

INSERT INTO `sechedule_set` (`sechedule_id`, `Product_name`, `target_no`, `added_by`) VALUES
(2, 'EZTOTE K', '100', 'henry'),
(3, 'EZTOTE Q', '200', 'henry'),
(4, 'EZTOTE F', '150', 'henry'),
(6, 'faisai', '500', 'admin'),
(7, 'Test', '10', 'admin'),
(8, 'abc', '500', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `systemactivities`
--

CREATE TABLE `systemactivities` (
  `SystemActivityID` int(11) NOT NULL,
  `SystemActivityName` varchar(45) DEFAULT NULL,
  `SystemActivityCode` varchar(15) NOT NULL,
  `SystemActivityDescription` varchar(200) DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `systemactivities`
--

INSERT INTO `systemactivities` (`SystemActivityID`, `SystemActivityName`, `SystemActivityCode`, `SystemActivityDescription`, `AddedBy`, `Date`) VALUES
(1, 'Register Users', 'RU', NULL, NULL, '2022-10-14 15:18:49'),
(2, 'View Users', 'VU', 'Testsss', NULL, '2022-10-14 15:18:49'),
(3, 'View Role', 'VR', 'View Role Access', NULL, '2022-10-14 15:33:10'),
(4, 'Add Role', 'AR', 'Add Role Access', NULL, '2022-10-14 15:34:29'),
(5, 'Edit Role System Activities', 'ERSA', NULL, NULL, '2022-10-14 15:44:22'),
(6, 'Edit Role Processing Stages', 'ERPS', NULL, NULL, '2022-10-14 15:44:48'),
(7, 'View System Activities', 'VSA', NULL, NULL, '2022-10-14 15:51:50'),
(8, 'Edit System Activities', 'ESA', NULL, NULL, '2022-10-14 15:52:32'),
(9, 'Delete System Activities', 'DSA', NULL, NULL, '2022-10-14 15:52:32'),
(10, 'Add System Activities', 'ASA', NULL, NULL, '2022-10-14 15:54:00'),
(11, 'Wallet Balance', 'WB', 'test', 1, '2022-10-14 16:15:18'),
(12, 'Production page 1', 'prodp', 'Production page Display', 1, '2022-10-15 12:48:37'),
(15, 'widgets', 'wg', 'widgets Display Or Not', 1, '2022-10-15 17:08:29'),
(16, 'Status Panel', 'status_panel', 'Status Panel widgets', 1, '2022-10-15 17:12:29'),
(17, 'AB/CD/EEE SCHEDULE', 'AB_CD_EE_SCHEDU', 'AB/CD/EEE SCHEDULE widgets', 1, '2022-10-15 17:15:39'),
(18, 'Lead Form', 'lead_form', 'Lead Form widgets', 1, '2022-10-15 17:23:47'),
(19, 'Counter Widget Display', 'counter_widget', 'Counter Widge', 1, '2022-10-15 17:26:55'),
(20, 'Schedule Set', 'SCHEDULE_set', 'Schedule Set Activity', 1, '2022-10-15 17:37:32'),
(21, 'Production Report', 'pro_report', 'Production Report Activity', 1, '2022-10-15 19:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `systemsettings`
--

CREATE TABLE `systemsettings` (
  `SystemSettingID` int(11) NOT NULL,
  `StageRejectionTimeout` int(11) DEFAULT NULL,
  `InProcessThreshold` varchar(45) DEFAULT NULL,
  `PositiveIndicatorScore` varchar(45) DEFAULT NULL,
  `NegativeIndicatorScore` varchar(45) DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userassignedarticles`
--

CREATE TABLE `userassignedarticles` (
  `UserAssignedArticleID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL,
  `ProcessingStageID` int(11) NOT NULL,
  `AssignmentTypeID` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'Assigned' COMMENT 'Not Assigned,	Assigned,	InProgress,	Holded,	Completed,	Reassigned',
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usermonthlyprocessingscore`
--

CREATE TABLE `usermonthlyprocessingscore` (
  `UserMonthlyProcessingScoreID` int(11) NOT NULL,
  `ArticlesQuantity` varchar(45) DEFAULT NULL,
  `ArticlesScore` varchar(45) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `MonthlyScoreDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userprocessingstages`
--

CREATE TABLE `userprocessingstages` (
  `UserProcessingStageID` int(11) NOT NULL,
  `InProcessThreshold` varchar(45) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `ProcessingStageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userreassignedarticles`
--

CREATE TABLE `userreassignedarticles` (
  `UserReassignedArticleID` int(11) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `UserReassignedArticleStatus` varchar(45) DEFAULT NULL,
  `UserAssignedArticleID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `UserRoleID` int(11) NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp(),
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`UserRoleID`, `Date`, `UserID`, `RoleID`) VALUES
(1, '2022-10-14 10:16:46', 1, 2),
(2, '2022-10-15 07:36:32', 8, 5),
(3, '2023-02-25 17:40:40', 9, 5),
(4, '2023-02-25 17:40:40', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `UserEmail` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UserLogInDate` timestamp NULL DEFAULT current_timestamp(),
  `UserLogOutDate` timestamp NULL DEFAULT current_timestamp(),
  `Token` varchar(255) DEFAULT NULL,
  `UserStatus` varchar(45) DEFAULT 'Active',
  `AddedBy` varchar(100) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserEmail`, `Password`, `UserLogInDate`, `UserLogOutDate`, `Token`, `UserStatus`, `AddedBy`, `Date`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$vC41AOMLc.nfBlZFOwukkuN/44tpQIlIjnGdRMMOVdlzOTf5fT5zq', '2022-09-26 05:31:11', '2022-09-26 05:31:11', '754bcf4b23f6b6f887e30182f22ac0b7bd577256d26e7e744546ac8403ee855a3aa236909dd98571731913e85f8dd1b1e7c9', 'Active', NULL, '2020-09-24 12:53:37'),
(8, 'faisal', 'faisal@yahoo.com', '$2y$10$vC41AOMLc.nfBlZFOwukkuN/44tpQIlIjnGdRMMOVdlzOTf5fT5zq', '2022-10-15 07:36:32', '2022-10-15 07:36:32', 'c46cfab94d3716025904f1d56a5c94675caa51b576509f68f585ad72604487e624705aa5f152d76225351d4a1c9b6b3c42de', 'Active', NULL, '2022-10-15 07:36:32'),
(9, 'hammad', 'hammad@gmail.com', '$2y$10$ygcup.6tv46BOSmBtuIfy.NPAjbPzbh3x4shDIbgI8nVAlhjsOmdK', '2023-02-25 17:40:40', '2023-02-25 17:40:40', 'ab3537574be9cef186c65f760dfe0a8764c81e92b0334d17971c7cb58b386f3f17af17a9cc9cc4931fdc4ab7005dcbeb04f7', 'Active', NULL, '2023-02-25 17:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `usersystemactivities`
--

CREATE TABLE `usersystemactivities` (
  `UserSystemActivityID` int(11) NOT NULL,
  `UserSystemActivityDate` timestamp NULL DEFAULT current_timestamp(),
  `UserID` int(11) NOT NULL,
  `SystemActivityID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articlecomplexityparameters`
--
ALTER TABLE `articlecomplexityparameters`
  ADD PRIMARY KEY (`ArticleComplexityParameterID`),
  ADD KEY `fk_ArticleComplexityParameters_ComplexityParameters_idx` (`ComplexityParameterID`),
  ADD KEY `fk_ArticleComplexityParameters_ArticleProcessing1_idx` (`ArticleProcessingID`);

--
-- Indexes for table `articlefigurerecord`
--
ALTER TABLE `articlefigurerecord`
  ADD PRIMARY KEY (`ArticleFigureRecordID`),
  ADD KEY `fk_ArticleFigureRecord_ArticleProcessing1_idx` (`ArticleProcessingID`);

--
-- Indexes for table `articleprocessdetails`
--
ALTER TABLE `articleprocessdetails`
  ADD PRIMARY KEY (`ArticleProcessDetailID`),
  ADD KEY `fk_ArticleProcessDetails_ArticleProcessing1_idx` (`ArticleProcessingID`);

--
-- Indexes for table `articleprocessing`
--
ALTER TABLE `articleprocessing`
  ADD PRIMARY KEY (`ArticleProcessingID`),
  ADD KEY `fkey_user_assign_articles` (`UserAssignedArticleID`);

--
-- Indexes for table `articleprocessingscores`
--
ALTER TABLE `articleprocessingscores`
  ADD PRIMARY KEY (`ArticleProcessingScoreID`),
  ADD KEY `fk_ArticleProcessingScores_ArticleProcessing1_idx` (`ArticleProcessingID`);

--
-- Indexes for table `articlereferenceextractions`
--
ALTER TABLE `articlereferenceextractions`
  ADD PRIMARY KEY (`ArticleProcessingID`),
  ADD KEY `fk_ArticleReferenceExtractions_Users1_idx` (`UserID`),
  ADD KEY `fk_ArticleReferenceExtractions_Articles1_idx` (`ArticleID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`),
  ADD KEY `fk_Articles_Journals1_idx` (`JournalID`),
  ADD KEY `fk_Article_AddedBy` (`AddedBy`);

--
-- Indexes for table `articlesfilesrecord`
--
ALTER TABLE `articlesfilesrecord`
  ADD PRIMARY KEY (`ArticlesFilesRecordID`),
  ADD KEY `fk_ArticlesFilesRecord_Articles1_idx` (`ArticleID`);

--
-- Indexes for table `assignmenttypes`
--
ALTER TABLE `assignmenttypes`
  ADD PRIMARY KEY (`AssignmentTypeID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indexes for table `complexityparameters`
--
ALTER TABLE `complexityparameters`
  ADD PRIMARY KEY (`ComplexityParameterID`);

--
-- Indexes for table `emailrecord`
--
ALTER TABLE `emailrecord`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat_id` (`cat_id`);

--
-- Indexes for table `issuearticles`
--
ALTER TABLE `issuearticles`
  ADD PRIMARY KEY (`IssueArticleID`),
  ADD KEY `fk_IssueArticles_Articles1_idx` (`ArticleID`),
  ADD KEY `fk_IssueArticles_Issues1_idx` (`IssueID`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`IssueID`),
  ADD KEY `fk_Issues_Journals1_idx` (`Journals_JournalID`),
  ADD KEY `fk_Issues_Users1` (`AddedBy`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`JournalID`);

--
-- Indexes for table `processingstages`
--
ALTER TABLE `processingstages`
  ADD PRIMARY KEY (`ProcessingStageID`),
  ADD KEY `fkey1_admin_id_process` (`AddedBy`);

--
-- Indexes for table `roleprocessingstages`
--
ALTER TABLE `roleprocessingstages`
  ADD PRIMARY KEY (`RoleProcessingStageID`),
  ADD KEY `fk_RoleProcessingStages_Roles1_idx` (`RoleID`),
  ADD KEY `fk_RoleProcessingStages_ProcessingStages1_idx` (`ProcessingStageID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `rolesystemactivities`
--
ALTER TABLE `rolesystemactivities`
  ADD PRIMARY KEY (`RoleSystemActivityID`),
  ADD KEY `fk_RoleSystemActivities_Roles1_idx` (`RoleID`),
  ADD KEY `fk_RoleSystemActivities_SystemActivities` (`SystemActivityID`);

--
-- Indexes for table `sechedule_set`
--
ALTER TABLE `sechedule_set`
  ADD PRIMARY KEY (`sechedule_id`);

--
-- Indexes for table `systemactivities`
--
ALTER TABLE `systemactivities`
  ADD PRIMARY KEY (`SystemActivityID`),
  ADD KEY `fk_user` (`AddedBy`);

--
-- Indexes for table `systemsettings`
--
ALTER TABLE `systemsettings`
  ADD PRIMARY KEY (`SystemSettingID`);

--
-- Indexes for table `userassignedarticles`
--
ALTER TABLE `userassignedarticles`
  ADD PRIMARY KEY (`UserAssignedArticleID`),
  ADD KEY `fk_UserAssignedArticles_Users1_idx` (`UserID`),
  ADD KEY `fk_UserAssignedArticles_Articles1_idx` (`ArticleID`),
  ADD KEY `fk_UserAssignedArticles_ProcessingStages1_idx` (`ProcessingStageID`),
  ADD KEY `fk_UserAssignedArticles_AssignmentTypes1_idx` (`AssignmentTypeID`);

--
-- Indexes for table `usermonthlyprocessingscore`
--
ALTER TABLE `usermonthlyprocessingscore`
  ADD PRIMARY KEY (`UserMonthlyProcessingScoreID`),
  ADD KEY `fk_UserMonthlyProcessingScore_Users1_idx` (`UserID`);

--
-- Indexes for table `userprocessingstages`
--
ALTER TABLE `userprocessingstages`
  ADD PRIMARY KEY (`UserProcessingStageID`),
  ADD KEY `fk_UserProcessingStages_Users1_idx` (`UserID`),
  ADD KEY `fk_UserProcessingStages_ProcessingStages1_idx` (`ProcessingStageID`);

--
-- Indexes for table `userreassignedarticles`
--
ALTER TABLE `userreassignedarticles`
  ADD PRIMARY KEY (`UserReassignedArticleID`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`UserRoleID`),
  ADD KEY `fk_UserRoles_Users1_idx` (`UserID`),
  ADD KEY `fk_UserRoles_Roles1_idx` (`RoleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `UserEmail` (`UserEmail`);

--
-- Indexes for table `usersystemactivities`
--
ALTER TABLE `usersystemactivities`
  ADD PRIMARY KEY (`UserSystemActivityID`),
  ADD KEY `fk_UserSystemActivities_Users1_idx` (`UserID`),
  ADD KEY `fk_UserSystemActivities_SystemActivities1_idx` (`SystemActivityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articlecomplexityparameters`
--
ALTER TABLE `articlecomplexityparameters`
  MODIFY `ArticleComplexityParameterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlefigurerecord`
--
ALTER TABLE `articlefigurerecord`
  MODIFY `ArticleFigureRecordID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articleprocessdetails`
--
ALTER TABLE `articleprocessdetails`
  MODIFY `ArticleProcessDetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articleprocessing`
--
ALTER TABLE `articleprocessing`
  MODIFY `ArticleProcessingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articleprocessingscores`
--
ALTER TABLE `articleprocessingscores`
  MODIFY `ArticleProcessingScoreID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlereferenceextractions`
--
ALTER TABLE `articlereferenceextractions`
  MODIFY `ArticleProcessingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlesfilesrecord`
--
ALTER TABLE `articlesfilesrecord`
  MODIFY `ArticlesFilesRecordID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignmenttypes`
--
ALTER TABLE `assignmenttypes`
  MODIFY `AssignmentTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complexityparameters`
--
ALTER TABLE `complexityparameters`
  MODIFY `ComplexityParameterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailrecord`
--
ALTER TABLE `emailrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `issuearticles`
--
ALTER TABLE `issuearticles`
  MODIFY `IssueArticleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `IssueID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `JournalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processingstages`
--
ALTER TABLE `processingstages`
  MODIFY `ProcessingStageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roleprocessingstages`
--
ALTER TABLE `roleprocessingstages`
  MODIFY `RoleProcessingStageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rolesystemactivities`
--
ALTER TABLE `rolesystemactivities`
  MODIFY `RoleSystemActivityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sechedule_set`
--
ALTER TABLE `sechedule_set`
  MODIFY `sechedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `systemactivities`
--
ALTER TABLE `systemactivities`
  MODIFY `SystemActivityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `systemsettings`
--
ALTER TABLE `systemsettings`
  MODIFY `SystemSettingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userassignedarticles`
--
ALTER TABLE `userassignedarticles`
  MODIFY `UserAssignedArticleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userprocessingstages`
--
ALTER TABLE `userprocessingstages`
  MODIFY `UserProcessingStageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userreassignedarticles`
--
ALTER TABLE `userreassignedarticles`
  MODIFY `UserReassignedArticleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `UserRoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usersystemactivities`
--
ALTER TABLE `usersystemactivities`
  MODIFY `UserSystemActivityID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articlecomplexityparameters`
--
ALTER TABLE `articlecomplexityparameters`
  ADD CONSTRAINT `fk_ArticleComplexityParameters_ArticleProcessing1` FOREIGN KEY (`ArticleProcessingID`) REFERENCES `articleprocessing` (`ArticleProcessingID`),
  ADD CONSTRAINT `fk_ArticleComplexityParameters_ComplexityParameters` FOREIGN KEY (`ComplexityParameterID`) REFERENCES `complexityparameters` (`ComplexityParameterID`);

--
-- Constraints for table `articlefigurerecord`
--
ALTER TABLE `articlefigurerecord`
  ADD CONSTRAINT `fk_ArticleFigureRecord_ArticleProcessing1` FOREIGN KEY (`ArticleProcessingID`) REFERENCES `articleprocessing` (`ArticleProcessingID`);

--
-- Constraints for table `articleprocessdetails`
--
ALTER TABLE `articleprocessdetails`
  ADD CONSTRAINT `fk_ArticleProcessDetails_ArticleProcessing1` FOREIGN KEY (`ArticleProcessingID`) REFERENCES `articleprocessing` (`ArticleProcessingID`);

--
-- Constraints for table `articleprocessing`
--
ALTER TABLE `articleprocessing`
  ADD CONSTRAINT `fkey_user_assign_articles` FOREIGN KEY (`UserAssignedArticleID`) REFERENCES `userassignedarticles` (`UserAssignedArticleID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articleprocessingscores`
--
ALTER TABLE `articleprocessingscores`
  ADD CONSTRAINT `fk_ArticleProcessingScores_ArticleProcessing1` FOREIGN KEY (`ArticleProcessingID`) REFERENCES `articleprocessing` (`ArticleProcessingID`);

--
-- Constraints for table `articlereferenceextractions`
--
ALTER TABLE `articlereferenceextractions`
  ADD CONSTRAINT `fk_ArticleReferenceExtractions_Articles1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`),
  ADD CONSTRAINT `fk_ArticleReferenceExtractions_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_Article_AddedBy` FOREIGN KEY (`AddedBy`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `fk_Articles_Journals1` FOREIGN KEY (`JournalID`) REFERENCES `journals` (`JournalID`);

--
-- Constraints for table `articlesfilesrecord`
--
ALTER TABLE `articlesfilesrecord`
  ADD CONSTRAINT `fk_ArticlesFilesRecord_Articles1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`) ON DELETE CASCADE;

--
-- Constraints for table `emailrecord`
--
ALTER TABLE `emailrecord`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`CAT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `issuearticles`
--
ALTER TABLE `issuearticles`
  ADD CONSTRAINT `fk_IssueArticles_Articles1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`),
  ADD CONSTRAINT `fk_IssueArticles_Issues1` FOREIGN KEY (`IssueID`) REFERENCES `issues` (`IssueID`);

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `fk_Issues_Journals1` FOREIGN KEY (`Journals_JournalID`) REFERENCES `journals` (`JournalID`),
  ADD CONSTRAINT `fk_Issues_Users1` FOREIGN KEY (`AddedBy`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `processingstages`
--
ALTER TABLE `processingstages`
  ADD CONSTRAINT `fkey1_admin_id_process` FOREIGN KEY (`AddedBy`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `roleprocessingstages`
--
ALTER TABLE `roleprocessingstages`
  ADD CONSTRAINT `fk_RoleProcessingStages_Roles1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);

--
-- Constraints for table `rolesystemactivities`
--
ALTER TABLE `rolesystemactivities`
  ADD CONSTRAINT `fk_RoleSystemActivities_Roles1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`),
  ADD CONSTRAINT `fk_RoleSystemActivities_SystemActivities` FOREIGN KEY (`SystemActivityID`) REFERENCES `systemactivities` (`SystemActivityID`) ON DELETE CASCADE;

--
-- Constraints for table `systemactivities`
--
ALTER TABLE `systemactivities`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`AddedBy`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `userassignedarticles`
--
ALTER TABLE `userassignedarticles`
  ADD CONSTRAINT `fk_UserAssignedArticles_Articles1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`),
  ADD CONSTRAINT `fk_UserAssignedArticles_AssignmentTypes1` FOREIGN KEY (`AssignmentTypeID`) REFERENCES `assignmenttypes` (`AssignmentTypeID`),
  ADD CONSTRAINT `fk_UserAssignedArticles_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `usermonthlyprocessingscore`
--
ALTER TABLE `usermonthlyprocessingscore`
  ADD CONSTRAINT `fk_UserMonthlyProcessingScore_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `userprocessingstages`
--
ALTER TABLE `userprocessingstages`
  ADD CONSTRAINT `fk_UserProcessingStages_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `fk_UserRoles_Roles1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`),
  ADD CONSTRAINT `fk_UserRoles_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `usersystemactivities`
--
ALTER TABLE `usersystemactivities`
  ADD CONSTRAINT `fk_UserSystemActivities_SystemActivities` FOREIGN KEY (`SystemActivityID`) REFERENCES `systemactivities` (`SystemActivityID`),
  ADD CONSTRAINT `fk_UserSystemActivities_Users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
