-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 06:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `HirerId` varchar(50) DEFAULT NULL,
  `HirerName` varchar(30) DEFAULT NULL,
  `BidderName` varchar(30) DEFAULT NULL,
  `BidderId` varchar(50) DEFAULT NULL,
  `BidData` varchar(500) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `FinalDate` date DEFAULT NULL,
  `ProjectId` int(11) DEFAULT NULL,
  `HireStatus` tinyint(1) DEFAULT 0,
  `BiddingId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`HirerId`, `HirerName`, `BidderName`, `BidderId`, `BidData`, `Amount`, `FinalDate`, `ProjectId`, `HireStatus`, `BiddingId`) VALUES
('erfaizankhan04@gmail.com', 'faizankhan', 'Rajat', 'rajatgoyal376@gmail.com', 'I am experieced and worked in amazon for 5 years ', 1000, '2021-11-19', 25, 1, 39),
('erfaizankhan04@gmail.com', 'faizankhan', 'Rajat', 'rajatgoyal376@gmail.com', 'I will do this project in $200', 0, '0000-00-00', 25, 0, 41),
('abcd@gmail.com', 'abcd', 'Rajat', 'rajatgoyal376@gmail.com', 'I will do this project in $200', 200, '2021-11-13', 28, 1, 42);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectId` int(11) NOT NULL,
  `ProjectName` varchar(50) DEFAULT NULL,
  `ProjectDescription` varchar(500) DEFAULT NULL,
  `HirerId` varchar(30) DEFAULT NULL,
  `HirerName` varchar(30) DEFAULT NULL,
  `LogoDesign` tinyint(1) DEFAULT NULL,
  `Photoshop` tinyint(1) DEFAULT NULL,
  `AddsDesign` tinyint(1) DEFAULT NULL,
  `SocialMediaDesign` tinyint(1) DEFAULT NULL,
  `LogoAnimation` tinyint(1) DEFAULT NULL,
  `VideoEditing` tinyint(1) DEFAULT NULL,
  `AnimatedGIF` tinyint(1) DEFAULT NULL,
  `ContentWriting` tinyint(1) DEFAULT NULL,
  `Translation` tinyint(1) DEFAULT NULL,
  `WebDevelopment` tinyint(1) DEFAULT NULL,
  `GameDevelopment` tinyint(1) DEFAULT NULL,
  `Wordpress` tinyint(1) DEFAULT NULL,
  `AppDevelopment` tinyint(1) DEFAULT NULL,
  `Voiceover` tinyint(1) DEFAULT NULL,
  `Remix_Mashup` tinyint(1) DEFAULT NULL,
  `SocialMediaMarketing` tinyint(1) DEFAULT NULL,
  `Sales_Marketing` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectId`, `ProjectName`, `ProjectDescription`, `HirerId`, `HirerName`, `LogoDesign`, `Photoshop`, `AddsDesign`, `SocialMediaDesign`, `LogoAnimation`, `VideoEditing`, `AnimatedGIF`, `ContentWriting`, `Translation`, `WebDevelopment`, `GameDevelopment`, `Wordpress`, `AppDevelopment`, `Voiceover`, `Remix_Mashup`, `SocialMediaMarketing`, `Sales_Marketing`) VALUES
(1, 'jk', 'jk brand', 'rg@gmail.com', 'rajat goyal', 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0),
(2, 'App Development', 'Here is the app for fun ', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(3, 'ChatBook', 'Here you can chat with any your friend the world', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0),
(4, 'Song for all', 'Here you can save any of your playlist of song hear it at any time and any place', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0),
(5, 'Calligraphy', 'It is used to make your presentation attractive an awesome.', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'VK', 'A audio and video recording application.', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0),
(7, 'Socratic', 'A fun game for your entertainment and with full of Adventure.', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0),
(8, 'Chithi', 'Formal text editing app with attractive features.', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0),
(10, 'StickerZ', 'A logo and animation design app.', 'erfaizankhan04@gmail.com', 'faizankhan', 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(11, 'WP', 'A most useful word calculator spell checker and  daily notes box', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0),
(12, 'Pikachu', 'A photo editor with different filters and many sticker and gifs.', 'erfaizankhan04@gmail.com', 'faizankhan', 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0),
(13, 'PickUp', 'It is attractive game for children ', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0),
(14, 'Mixture', 'A music remix app and listen song wherever you want to listen', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0),
(15, 'KKK', 'A multi tasking app with share market updates and all updated employment field..', 'erfaizankhan04@gmail.com', 'faizankhan', 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1),
(22, 'Make a forum', 'make a forum using wordpress ', 'rajatgoyal376@gmail.com', 'Rajat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Make a forum', 'make a forum using wordpress ', 'rajatgoyal376@gmail.com', 'Rajat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(25, 'RSG Design', 'Make Logo Designs for RSG Production', 'RSG123@gmail.com', 'Robin Singh', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Video Editor', 'Video Editor with templates ,croping ,modifing ,etc', 'rajatgoyal376@gmail.com', 'Rajat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(28, 'logo maker', 'make a logo maker', 'abcd@gmail.com', 'abcd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `keyword` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`keyword`, `link`) VALUES
(' Music & Audio', 'music.php/#Voiceover'),
('Adds Design', 'graphics.php/#AddsDesign'),
('Animated GIF\'s', 'video.php/#AnimatedGIF'),
('App Development', 'tech.php/#AppDevelopment'),
('Business & Marketing', 'bussiness.php/#SocialMediaMarketing'),
('Content Writing', 'writing.php/#ContentWriting'),
('Game Development', 'tech.php/#GameDevelopment'),
('Graphics & Design', 'graphics.php/#LogoDesign'),
('Logo Animation', 'video.php/#LogoAnimation'),
('Logo Design', 'graphics.php/#LogoDesign'),
('Photoshop', 'graphics.php/#Photoshop'),
('Remix & Mashup', 'music.php/#Remix_Mashup'),
('Sales & Marketing', 'bussiness.php/#Sales_Marketing'),
('Social Media Design', 'graphics.php/#SocialMediaDesign'),
('Social Media Marketing', 'bussiness.php/#SocialMediaMarketing'),
('Tech & Programming', 'tech.php/#WebDevelopment'),
('Translation', 'writing.php/#Translation'),
('Video & Animation', 'video.php/#LogoAnimation'),
('Video Editing', 'video.php/#VideoEditing'),
('Voice Over', 'music.php/#Voiceover'),
('Web Development', 'tech.php/#WebDevelopment'),
('Wordpress', 'tech.php/#WordPress'),
('Writing & Translation', 'writing.php/#ContentWriting');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `your_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`your_name`, `username`, `email`, `password`) VALUES
('', '', '', ''),
('abcd', 'abcd', 'abcd@gmail.com', 'abcd'),
(' Rajat', '20bcs175', 'as@gmail.com', 'asdfg'),
('faizankhan', 'faizan124', 'erfaizankhan04@gmail.com', 'faizan'),
('Rajat', 'Rajat', 'rajatgoyal376@gmail.com', 'abcdef'),
('Robin Singh', 'RSG', 'RSG123@gmail.com', 'RSG123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`BiddingId`),
  ADD KEY `ProjectId` (`ProjectId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`keyword`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `BiddingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidding`
--
ALTER TABLE `bidding`
  ADD CONSTRAINT `bidding_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `project` (`ProjectId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
