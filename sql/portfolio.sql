-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2013 at 12:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `datecreated` date NOT NULL,
  `path` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `datecreated`, `path`, `category`, `description`) VALUES
(1, 'Welcome to my Corner of the Web', '2012-12-26', 'posts/welcome.html', 'miscellaneous', 'Hi, my name is Christopher McLean and I am both a web developer and a web designer living in Orlando Florida. The University of Central Florida has been my home for the past four years and its where I learned all that I know about design and development, as well as where I decided to major in Digital Media with a specialization in web design. Since starting in the program, I have studied topics in computer science, graphic design, classical art, game design, as well as history & culture.'),
(2, 'HTML5 Canvas Tutorial', '2012-12-30', 'posts/canvas.html', 'programming', 'The release of HTML5 brought a myriad of changes to the web development community, but the canvas element, combined with some clever JavaScript is what allows us to create complex and dynamic graphical content for the web. We will be focusing on it specifically to build a basic control system for a car in a top down browser based game. ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `parentId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `commentname` varchar(50) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `parentId`, `postId`, `commentname`, `datecreated`) VALUES
(84, 'hello ', 0, 2, 'hane', '2013-01-07 06:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(120) NOT NULL,
  `datesent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `message`, `email`, `subject`, `datesent`, `name`) VALUES
(21, 'this is a test of the post system', 'havok2905@gmail.com', 'hello', '2013-01-07 03:52:21', 'hello'),
(22, 'this is a test of the post system', 'havok2905@gmail.com', 'hello', '2013-01-07 03:52:54', 'hello'),
(23, 'hello things', 'havok2905@gmail.com', 'hello', '2013-01-07 04:30:53', 'hello'),
(24, 'hello things', 'havok2905@gmail.com', 'hello', '2013-01-07 04:31:48', 'hello');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
