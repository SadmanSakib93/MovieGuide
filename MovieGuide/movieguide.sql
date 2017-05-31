-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2015 at 06:40 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movieguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
`AdminID` int(11) NOT NULL,
  `AdminName` varchar(25) NOT NULL,
  `AdminPassword` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`AdminID`, `AdminName`, `AdminPassword`) VALUES
(1, 'EMA', 'EMA'),
(2, 'EMU', 'EMU');

-- --------------------------------------------------------

--
-- Table structure for table `moviecovertable`
--

CREATE TABLE IF NOT EXISTS `moviecovertable` (
`CoverID` int(11) NOT NULL,
  `CoverName` varchar(50) NOT NULL,
  `MovieID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `moviecovertable`
--

INSERT INTO `moviecovertable` (`CoverID`, `CoverName`, `MovieID`) VALUES
(1, 'CoverImages/mos1.jpg', 1),
(2, 'CoverImages/mos2.jpg', 1),
(3, 'CoverImages/mos3.jpg', 1),
(4, 'CoverImages/frz1.jpg', 2),
(5, 'CoverImages/frz2.jpg', 2),
(6, 'CoverImages/frz3.jpg', 2),
(7, 'CoverImages/frz4.jpg', 2),
(8, 'CoverImages/z1.jpg', 3),
(9, 'CoverImages/z2.jpg', 3),
(10, 'CoverImages/z3.jpg', 3),
(11, 'CoverImages/z4.jpg', 3),
(12, 'CoverImages/cnj1.jpg', 4),
(13, 'CoverImages/cnj2.jpg', 4),
(14, 'CoverImages/cnj3.jpg', 4),
(15, 'CoverImages/nw1.jpg', 5),
(16, 'CoverImages/nw2.jpg', 2),
(17, 'CoverImages/nw3.jpg', 5),
(18, 'CoverImages/nw4.jpg', 5),
(19, 'CoverImages/nw5.jpg', 5),
(20, 'CoverImages/dhm3.jpg', 6),
(21, 'CoverImages/dhm2.png', 6),
(22, 'CoverImages/dhm1.png', 6),
(23, 'CoverImages/ash1.jpg', 7),
(24, 'CoverImages/ash2.jpg', 7),
(25, 'CoverImages/sp1.jpg', 8),
(26, 'CoverImages/sp2.jpg', 8),
(27, 'CoverImages/x1.jpg', 9),
(28, 'CoverImages/x2.jpg', 9),
(29, 'CoverImages/x3.jpg', 9),
(30, 'CoverImages/x4.jpg', 9),
(31, 'CoverImages/gg1.jpg', 10),
(32, 'CoverImages/gg2.jpg', 10),
(33, 'CoverImages/gg3.jpg', 10),
(34, 'CoverImages/gg4.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE IF NOT EXISTS `movietable` (
`ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `DIRECTOR` varchar(30) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `YEAR` varchar(30) NOT NULL,
  `PRODUCTION COMPANY` varchar(50) NOT NULL,
  `RATING` int(11) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `LOGO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`ID`, `NAME`, `Region`, `DIRECTOR`, `TYPE`, `YEAR`, `PRODUCTION COMPANY`, `RATING`, `DESCRIPTION`, `LOGO`) VALUES
(1, 'Man of Steel ', 'Hollywood', 'Zack Snyder', 'Action', '2013', 'DC Entertainment', 7, 'Man of Steel is a 2013 American superhero film based on the DC Comics character Superman, co-produced by Legendary Pictures and Syncopy Films, and distributed by Warner Bros. Pictures.Man of Steel was released to the general public on June 14, 2013, in conventional, 3D, and IMAX theaters. The film became a box office success, grossing $668,045,518 worldwide, but received mixed reviews. ', 'image/MOS.jpg'),
(2, 'Frozen ', 'Hollywood', 'Chris Buck  , Jennifer Lee', 'Animation', '2013', 'Walt Disney', 8, 'Frozen is a 2013 American 3D computer-animated musical fantasy film produced by Walt Disney Animation Studios and released by Walt Disney Pictures.[4] It is the 53rd animated feature in the Walt Disney Animated Classics series. Inspired by Hans Christian Andersen''s fairy tale The Snow Queen, the film tells the story of a fearless princess who sets off on an epic journey alongside a rugged iceman, his loyal pet reindeer, and a naïve snowman to find her estranged sister, whose icy powers have inad', 'image/frz.jpg'),
(3, 'World War Z ', 'Hollywood', 'Marc Forster', 'Adventure', '2013', 'Skydance Productions', 7, 'World War Z is a 2013 American apocalyptic action horror film directed by Marc Forster. The screenplay by Matthew Michael Carnahan, Drew Goddard, and Damon Lindelof is from a screen story by Carnahan and J. Michael Straczynski, based on the 2006 novel of the same name by Max Brooks.', 'image/warz.jpg'),
(4, 'The Conjuring', 'Hollywood', 'James Wan', 'Horror', '2013', 'New Line Cinema', 8, 'In 1970, paranormal investigators and demonologists Lorraine (Vera Farmiga) and Ed (Patrick Wilson) Warren are summoned to the home of Carolyn (Lili Taylor) and Roger (Ron Livingston) Perron. The Perrons and their five daughters have recently moved into a secluded farmhouse, where a supernatural presence has made itself known', 'image/conj.jpg'),
(5, 'Now You See Me ', 'Hollywood', 'Louis Leterrier', 'Thriller', '2013', 'K/O Paper Products', 8, 'Now You See Me is a 2013 American caper thriller film directed by Louis Leterrier. The film stars Jesse Eisenberg, Mark Ruffalo, Woody Harrelson, Mélanie Laurent, Isla Fisher, Dave Franco, Michael Caine, and Morgan Freeman.\r\nReleased on May 31, 2013, the film received mixed reviews from critics, who criticized the scattershot plot and ending, but praised its cast, acting and script. Despite mixed reviews, the film was a box office success, and a sequel is set for release on June 10, 2016.', 'image/nysm.jpg'),
(6, 'Dhoom 3', 'Bollywood', 'Vijay Krishna Acharya', 'Action', '2013', 'Yash Raj Films7', 7, 'The third installment of the Dhoom series, it features Aamir Khan as the antagonist and Katrina Kaif, with Abhishek Bachchan in the lead role reprising his role of Jai and Uday Chopra reprising his role as Ali Akbar, as in the previous films of the franchise. Made on a budget of ₹175 billion (US$2.6 billion),the most expensive Indian film of all time,[9] until it was beaten by Baahubali: The Beginning. Dhoom 3 was released on 20 December 2013, marking itself as the first Indian film to b', 'image/dhm3.jpg'),
(7, 'Aashiqui 2', 'Bollywood', 'Mohit Suri', 'Romantic', '2013', 'T-Series Films', 6, 'Aashiqui 2 is a 2013 Bollywood romantic musical drama film directed by Mohit Suri. Starring Aditya Roy Kapoor and Shraddha Kapoor in the lead roles, it was produced by Bhushan Kumar and Mukesh Bhatt under the T-Series and Vishesh Films banners. Set in the early 2010s, Aashiqui 2 is a love story centering around the turbulent relationship between musicians Rahul and Arohi, a relationship which is affected by Rahul''s issues with alcohol abuse and temperament.', 'image/ash.jpg'),
(8, 'Special 26', 'Bollywood', 'Neeraj Pandey', 'Thriller', '2013', 'Friday Filmworks', 7, 'Special 26, also known as Special Chabbis, is a 2013 Indian thriller heist film directed by Neeraj Pandey. It stars Akshay Kumar in the lead role with Manoj Bajpayee, Anupam Kher, Kajal Aggarwal, Jimmy Shergill and Divya Dutta in supporting roles. The film is inspired by the 1987 Opera House heist where a group posing as Central Bureau of Investigation (CBI) officers executed an income tax raid on the jeweler in Mumbai. Special 26 released on February 5, 2013 to widespread critical acclaim and w', 'image/26.jpg'),
(9, 'X-Men: Days of Future Past', 'Hollywood', 'Bryan Singer', 'Action', '2014', 'Marvel Entertainment', 8, 'X-Men: Days of Future Past is a 2014 American superhero film based on the fictional X-Men characters that appear in Marvel Comics. Directed by Bryan Singer, it is the seventh installment of the X-Men film series and acts as a sequel to both 2006''s X-Men: The Last Stand and 2011''s X-Men: First Class.', 'image/xman.jpg'),
(10, 'Guardians of the Galaxy', 'Hollywood', 'James Gunn', 'Action', '2014', 'Marvel Studios', 8, 'Guardians of the Galaxy is a 2014 American superhero film based on the Marvel Comics superhero team of the same name, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the tenth installment in the Marvel Cinematic Universe.', 'image/gog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE IF NOT EXISTS `reviewtable` (
`ReviewID` int(11) NOT NULL,
  `MovieID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewMSG` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`ReviewID`, `MovieID`, `UserID`, `ReviewMSG`) VALUES
(1, 1, 1, 'awesome'),
(2, 6, 2, 'Nice movie'),
(3, 4, 1, 'Horror at its best '),
(4, 8, 1, 'nice movie...'),
(5, 1, 1, 'nice movie...'),
(6, 2, 2, 'Awesome movie 10 on 10');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
`UserID` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPassword` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserID`, `UserName`, `UserEmail`, `UserPassword`) VALUES
(1, 'MAHZABEEN', 'M@GMAIL.COM', 'M'),
(2, 'MAHZABEEN', 'M@YAHOO.COM', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
 ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `moviecovertable`
--
ALTER TABLE `moviecovertable`
 ADD PRIMARY KEY (`CoverID`), ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviewtable`
--
ALTER TABLE `reviewtable`
 ADD PRIMARY KEY (`ReviewID`), ADD KEY `MovieID` (`MovieID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
 ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `UserEmail` (`UserEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `moviecovertable`
--
ALTER TABLE `moviecovertable`
MODIFY `CoverID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reviewtable`
--
ALTER TABLE `reviewtable`
MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `moviecovertable`
--
ALTER TABLE `moviecovertable`
ADD CONSTRAINT `moviecovertable_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movietable` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviewtable`
--
ALTER TABLE `reviewtable`
ADD CONSTRAINT `reviewtable_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movietable` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reviewtable_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `usertable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
