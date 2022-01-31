-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2022 at 08:23 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CandidateID` int(11) NOT NULL AUTO_INCREMENT,
  `abc` varchar(1) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Party` varchar(100) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  PRIMARY KEY (`CandidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=194 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateID`, `abc`, `Position`, `Party`, `FirstName`, `LastName`, `MiddleName`, `Gender`, `Year`, `Photo`) VALUES
(95, 'a', 'President', 'PDP', 'Olusegun', 'Fayose', 'Tunde', 'Male', 'Kwara', 'upload/NO NAME.jpg'),
(191, 'a', 'Governor', 'APC', 'Tunde', 'Fashola', 'Akeem', 'Male', 'Lagos', 'upload/OKENNA.JPG'),
(192, 'a', 'President', 'Labour Party', 'Hakeem', 'Abdulsalam', 'Gafa', 'Male', 'Kaduna', 'upload/RICHARD.jpg'),
(193, 'b', 'Governor', 'APGA', 'Peter', 'Obi', 'Charles', 'Male', 'Anambra', 'upload/BRIGHT  WILLIAMS.jpg'),
(128, 'b', 'Governor', 'PDP', 'Chima', 'Okoro', 'Festus', 'Male', 'Enugu', 'upload/4.jpg'),
(129, 'b', 'Governor', 'PDP', 'Ifeanyi', 'Azodo', 'Noble', 'Male', 'Ebonyi', 'upload/Copy of KINGSLEY.jpg'),
(190, 'a', 'President', 'APGA', 'Obinna', 'Anuruo', 'Francis', 'Male', 'Anambra', 'upload/1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=781 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `data`, `action`, `date`, `user`) VALUES
(571, 'Cora Okpara', 'Added Voter', '5/29/2014 13:15:46', 'admin'),
(575, 'Amara Okoli', 'Added Voter', '5/29/2014 13:38:21', 'admin'),
(577, 'Onyinye Okoli', 'Added Voter', '5/29/2014 13:54:17', 'regularuser'),
(605, 'Olusegin Agagu', 'Edit Candidate', '2014-05-29 17:28:30', 'admin'),
(599, 'Adaora Obiora', 'Added Voter', '5/29/2014 14:29:34', 'regularuser'),
(597, 'Chika Okpara', 'Added Voter', '5/29/2014 14:13:6', 'regularuser'),
(642, 'Victor Jacobo', 'Deleted Candidate', '5/29/2014 18:25:2', 'Admin'),
(756, 'admin admin', 'Login', '2014-11-26 15:08:09', 'admin'),
(755, 'admin admin', 'Logout', '2014-11-15 15:44:46', 'admin'),
(754, 'admin admin', 'Login', '2014-11-15 15:23:22', 'admin'),
(753, 'admin admin', 'Logout', '2014-11-15 14:39:54', 'admin'),
(752, 'admin admin', 'Login', '2014-11-15 14:38:06', 'admin'),
(750, 'Alex Ogbonaya', 'Added Voter', '2014-11-15 14:30:41', 'regularuser'),
(751, 'Alex Ogbonaya', 'Added Voter', '2014-11-15 14:36:52', 'regularuser'),
(654, 'Olusegun Agagu', 'Edit Candidate', '2014-05-29 18:27:55', 'admin'),
(655, 'Olusegun Agagu', 'Edit Candidate', '2014-05-29 18:31:29', 'admin'),
(656, 'Obinna Anuruo', 'Edit Candidate', '2014-05-29 18:32:19', 'admin'),
(657, 'Chima Okoro', 'Edit Candidate', '2014-05-29 18:33:13', 'admin'),
(658, 'Ifeanyi Azodo', 'Edit Candidate', '2014-05-29 18:34:10', 'admin'),
(659, 'Olusegun Agagu', 'Edit Candidate', '2014-05-29 18:34:39', 'admin'),
(660, 'Olusegun Agagu', 'Edit Candidate', '2014-05-29 18:34:52', 'admin'),
(747, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:46:9', 'regularuser'),
(663, 'Olusegun Fayose', 'Edit Candidate', '2014-05-29 18:43:58', 'admin'),
(664, 'Olusegun Fayose', 'Edit Candidate', '2014-05-29 18:44:35', 'admin'),
(746, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:33:11', 'regularuser'),
(745, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:33:11', 'regularuser'),
(744, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:33:11', 'regularuser'),
(743, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:23:6', 'regularuser'),
(742, 'Alex Ogbonaya', 'Added Voter', '11/14/2014 18:23:6', 'regularuser'),
(741, 'admin admin', 'Login', '2014-11-14 18:03:51', 'admin'),
(740, 'admin admin', 'Logout', '2014-11-03 14:09:14', 'admin'),
(739, 'admin admin', 'Login', '2014-11-03 14:07:30', 'admin'),
(738, 'Chioma Okoli', 'Added Voter', '11/3/2014 14:5:29', 'regularuser'),
(737, 'admin admin', 'Login', '2014-10-31 11:49:22', 'admin'),
(736, 'admin admin', 'Logout', '2014-09-08 14:38:07', 'admin'),
(735, 'admin admin', 'Login', '2014-09-08 14:29:00', 'admin'),
(734, 'Amadi Emeka', 'Added Voter', '9/8/2014 14:27:15', 'regularuser'),
(733, 'admin admin', 'Logout', '2014-09-08 14:27:07', 'admin'),
(732, 'admin admin', 'Login', '2014-09-08 14:25:29', 'admin'),
(731, 'admin admin', 'Login', '2014-08-02 16:15:17', 'admin'),
(730, 'admin admin', 'Login', '2014-07-29 11:42:19', 'admin'),
(729, 'admin admin', 'Login', '2014-07-28 10:54:13', 'admin'),
(728, 'admin admin', 'Login', '2014-07-22 13:51:09', 'admin'),
(727, 'admin admin', 'Login', '2014-07-18 15:12:44', 'admin'),
(726, 'admin admin', 'Login', '2014-07-10 17:41:04', 'admin'),
(725, 'admin admin', 'Login', '2014-06-12 15:35:44', 'admin'),
(724, 'admin admin', 'Login', '2014-06-12 15:19:56', 'admin'),
(723, 'admin admin', 'Logout', '2014-06-10 12:17:00', 'admin'),
(722, 'admin admin', 'Login', '2014-06-10 12:16:49', 'admin'),
(721, 'admin admin', 'Login', '2014-06-10 11:51:47', 'admin'),
(720, 'admin admin', 'Login', '2014-06-10 11:04:46', 'admin'),
(719, 'admin admin', 'Logout', '2014-06-05 17:26:46', 'admin'),
(718, 'admin admin', 'Login', '2014-06-05 17:25:47', 'admin'),
(698, 'Tunde Fashola', 'Added Candidate', '2014-05-30 07:37:30', 'admin'),
(699, 'Hakeem Abdulsalam', 'Added Candidate', '2014-05-30 07:44:00', 'admin'),
(715, 'admin admin', 'Login', '2014-06-05 17:19:24', 'admin'),
(714, 'admin admin', 'Logout', '2014-06-05 17:15:28', 'admin'),
(702, 'Peter Obi', 'Added Candidate', '2014-05-30 18:15:26', 'admin'),
(711, 'Ifeanyi Nwankpa', 'Added Voter', '6/5/2014 13:40:21', 'admin'),
(717, 'Chioma Ogbuji', 'Added Voter', '6/5/2014 17:21:36', 'regularuser'),
(716, 'admin admin', 'Logout', '2014-06-05 17:21:21', 'admin'),
(707, 'Philip Ogbuji', 'Added Voter', '6/5/2014 13:25:40', 'regularuser'),
(757, 'admin admin', 'Login', '2015-10-16 15:24:33', 'admin'),
(758, 'admin admin', 'Logout', '2015-10-16 15:32:52', 'admin'),
(759, 'admin admin', 'Login', '2015-10-16 15:38:22', 'admin'),
(760, 'admin admin', 'Logout', '2015-10-16 15:39:41', 'admin'),
(761, 'admin admin', 'Login', '2015-10-27 19:33:50', 'admin'),
(762, 'admin admin', 'Login', '2015-11-11 07:57:04', 'admin'),
(763, 'admin admin', 'Logout', '2015-11-11 07:58:08', 'admin'),
(764, 'admin admin', 'Login', '2016-03-06 08:53:48', 'admin'),
(765, 'admin admin', 'Login', '2016-08-13 05:10:10', 'admin'),
(766, 'admin admin', 'Login', '2017-06-01 14:41:48', 'admin'),
(767, 'admin admin', 'Logout', '2017-06-01 14:43:09', 'admin'),
(768, 'Peter Okoli', 'Added Voter', '2017-06-06 14:31:14', 'regularuser'),
(769, 'admin admin', 'Login', '2017-06-06 14:33:41', 'admin'),
(770, 'Ifeanyi Ajoku', 'Added Voter', '2017-06-09 12:22:38', 'regularuser'),
(771, 'Chuka Okeke', 'Added Voter', '2017-06-15 03:09:58', 'regularuser'),
(772, 'admin admin', 'Login', '2019-11-19 13:12:20', 'admin'),
(773, 'admin admin', 'Logout', '2019-11-19 13:12:33', 'admin'),
(774, 'admin admin', 'Login', '2022-01-10 08:45:01', 'admin'),
(775, 'admin admin', 'Logout', '2022-01-10 08:48:54', 'admin'),
(776, 'admin admin', 'Login', '2022-01-10 08:53:49', 'admin'),
(777, 'admin admin', 'Logout', '2022-01-10 09:17:37', 'admin'),
(778, 'Okechukwu Adaukwu', 'Added Voter', '2022-01-10 09:18:54', 'regularuser'),
(779, 'admin admin', 'Login', '2022-01-10 09:19:58', 'admin'),
(780, 'admin admin', 'Logout', '2022-01-10 09:20:32', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `FirstName`, `LastName`, `UserName`, `Password`, `User_Type`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', 'admin'),
(5, 'adminsec', 'adminsec', 'jkev', 'jkev', 'Admin'),
(4, 'Stephnanie', 'Villanueva', 'teph', 'teph', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `VoterID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  PRIMARY KEY (`VoterID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`VoterID`, `FirstName`, `LastName`, `MiddleName`, `Username`, `Password`, `Year`, `Status`, `Photo`) VALUES
(73, 'Philip', 'Ogbuji', 'Michael', 'philip', 'philip', 'Abuja', 'Voted', 'upload/PEBAH.jpg'),
(74, 'Ifeanyi', 'Nwankpa', 'samuel', 'sam', 'sam', 'Abuja', 'Voted', 'upload/SAMUEL.jpg'),
(75, 'Chioma', 'Ogbuji', 'Jessica', 'chioma', 'chioma', 'Enugu', 'Unvoted', 'upload/by.jpg'),
(76, 'Amadi', 'Emeka', 'Prince', 'emy01', 'emy01', 'Imo', 'Unvoted', 'upload/scan0004.jpg'),
(77, 'Chioma', 'Okoli', 'Process', 'chy123', 'chy123', 'Imo', 'Voted', 'upload/CGIRL0001.jpg'),
(49, 'Cora', 'Okpara', 'Mike', 'cora', 'cora', 'Anambra', 'Voted', 'upload/TOBINS B.YT.jpg'),
(50, 'Amara', 'Okoli', 'Jessica', 'amara', 'amara', 'Imo', 'Unvoted', 'upload/IFE.jpg'),
(51, 'Onyinye', 'Okoli', 'Peace', 'peace', 'peace', 'Abia', 'Unvoted', 'upload/sarah1.jpg'),
(72, 'Adaora', 'Obiora', 'Joy', 'joy', 'joy', 'Anambra', 'Unvoted', 'upload/MAGARET TORKA.jpg'),
(71, 'Chika', 'Okpara', 'Samuel', 'chika', 'chika', 'Imo', 'Unvoted', 'upload/UYI COLLINS.jpg'),
(87, 'Alex', 'Ogbonaya', 'Francis', 'alex', 'alex', 'Abuja', 'Unvoted', 'upload/YIRAMUE.jpg'),
(88, 'Peter', 'Okoli', 'Charles', 'peter01', 'peter01', 'Abia', 'Voted', 'upload/TOBINS B.YT.jpg'),
(89, 'Ifeanyi', 'Ajoku', 'George', 'ifeanyi123', 'ifeanyi123', 'Kaduna', 'Unvoted', 'upload/BRIGHT  WILLIAMS.jpg'),
(90, 'Chuka', 'Okeke', 'Charles', 'chuka123', 'chuka123', 'Abuja', 'Unvoted', 'upload/OKENNA.JPG'),
(91, 'Okechukwu', 'Adaukwu', 'Charles', 'charles123', 'charles123', 'Abuja', 'Unvoted', 'upload/14.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateID` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=226 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`ID`, `CandidateID`, `votes`) VALUES
(205, 0, 0),
(204, 0, 0),
(203, 153, 0),
(202, 129, 0),
(201, 95, 0),
(206, 95, 0),
(207, 128, 0),
(208, 102, 0),
(209, 131, 0),
(210, 137, 0),
(211, 95, 0),
(212, 128, 0),
(213, 0, 0),
(214, 0, 0),
(215, 0, 0),
(216, 190, 0),
(217, 129, 0),
(218, 95, 0),
(219, 191, 0),
(220, 190, 0),
(221, 129, 0),
(222, 95, 0),
(223, 193, 0),
(224, 95, 0),
(225, 191, 0);
