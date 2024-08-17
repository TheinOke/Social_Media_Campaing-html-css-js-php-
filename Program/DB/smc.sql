-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 05:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPhone` varchar(30) NOT NULL,
  `adminAddress` varchar(50) NOT NULL,
  `adminPass` varchar(50) NOT NULL,
  `adminPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminPhone`, `adminAddress`, `adminPass`, `adminPhoto`) VALUES
(2, 'Thein Oke ', 'theinokepaingsoe@gmail.com', '09455554003', 'YGN', 'Yuto#2004', 'img/admin_User.png');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `CampaignID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `PostedDate` date NOT NULL,
  `Description` text NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `UploadedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`CampaignID`, `Title`, `PostedDate`, `Description`, `Photo`, `UploadedBy`) VALUES
(15, ' #ShotOniPhone (Apple)', '2024-07-10', 'Concept: Apple launched #ShotOniPhone in 2010, transforming social media into a massive user-generated content gallery showcasing the impressive cameras on iPhones. \r\n', 'img/Campaigns/_cmp1.jpg', 'Thein Oke '),
(16, 'Ice Bucket Challenge', '2024-07-10', 'Description: A viral campaign aimed at raising awareness and funds for ALS (Amyotrophic Lateral Sclerosis). Participants dumped buckets of ice water over their heads and nominated others to do the same, sharing videos on social media. <b>July 29, 2014 and August 2014</b>', 'img/Campaigns/_p1.jpeg', 'Thein Oke '),
(17, '#ShareACoke', '2024-07-10', '<p>Description: Coca-Cola replaced its iconic logo with popular names on bottles and cans. The campaign encouraged people to share a Coke with friends and share their personalized bottles on social media. <b>Summer 2014 and Ongoing</b></p>', 'img/Campaigns/_p2.jpg', 'Thein Oke '),
(18, '#LikeAGirl', '2024-07-10', '<p>Description: Always launched this campaign to challenge and change the negative connotations associated with the phrase \"like a girl.\" It featured videos of young girls confidently performing various activities. <b>June 2014 and Ongoing</b></p>', 'img/Campaigns/_p3.jpeg', 'Thein Oke '),
(19, '#OptOutside', '2024-07-10', '<p>Description: REI closed its stores on Black Friday, encouraging employees and customers to spend time outdoors instead. The campaign promoted the hashtag #OptOutside to share their outdoor experiences. <b>November 2015 and Ongoing (annual)</b></p>', 'img/Campaigns/_p4.jpeg', 'Thein Oke ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FbID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularapplication`
--

CREATE TABLE `popularapplication` (
  `AppID` int(11) NOT NULL,
  `AppName` varchar(50) NOT NULL,
  `AppPhoto` varchar(255) NOT NULL,
  `AppDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popularapplication`
--

INSERT INTO `popularapplication` (`AppID`, `AppName`, `AppPhoto`, `AppDesc`) VALUES
(3, 'Facebook', 'img/Applications_app1.png', '<p>Description: Facebook is a social media platform that allows users to connect with friends and family, share updates, photos, and videos, and join communities. It offers features like News Feed, Groups, Events, and Marketplace, making it a versatile tool for personal and business networking.</p>'),
(4, 'Twitter', 'img/Applications_app2.jpeg', 'Description: Twitter is a microblogging platform where users post and interact with messages known as \"tweets.\" It allows users to follow others, share thoughts, news, and multimedia, and engage in real-time conversations. Hashtags and trending topics help users discover and join popular discussions.'),
(5, 'Instagram', 'img/Applications_app3.jpeg', 'Description: Instagram is a social media platform for sharing photos and videos. Users can apply filters, tag locations, and share their posts with followers. It also features Stories, Reels, and IGTV for longer videos, making it a versatile tool for personal expression and brand marketing.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserFirstName` varchar(50) NOT NULL,
  `UserSurName` varchar(50) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPhone` varchar(30) NOT NULL,
  `UserAddress` varchar(50) NOT NULL,
  `UserPass` varchar(30) NOT NULL,
  `UserPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserFirstName`, `UserSurName`, `UserEmail`, `UserPhone`, `UserAddress`, `UserPass`, `UserPhoto`) VALUES
(2, 'Thein Oke', 'Paing Soe', 'theinokepaingsoe@gmail.com', '09455554003', 'YGN', 'Oke#2004', 'img/Users/_User.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`CampaignID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`FbID`);

--
-- Indexes for table `popularapplication`
--
ALTER TABLE `popularapplication`
  ADD PRIMARY KEY (`AppID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `FbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popularapplication`
--
ALTER TABLE `popularapplication`
  MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
