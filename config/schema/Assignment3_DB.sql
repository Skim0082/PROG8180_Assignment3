-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 10:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Assignment3`
--
CREATE DATABASE IF NOT EXISTS `Assignment3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Assignment3`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(1, 'The title', 'This is the article body.', '2015-10-21 15:24:01', '2015-11-22 08:56:08', 1),
(2, 'A title once again', 'And the article body follows.', '2015-10-21 15:24:01', '2015-11-22 09:29:38', 1),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-10-21 15:24:01', '2015-11-22 09:22:11', 1),
(58, 'wwwwwwwwwwwwww', 'wqqqqqqqqqqqqqqqqqq', '2015-11-21 04:11:34', '2015-11-22 09:28:28', 8);

-- --------------------------------------------------------

--
-- Table structure for table `articles_tags`
--

CREATE TABLE IF NOT EXISTS `articles_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `articles_tags`
--

INSERT INTO `articles_tags` (`id`, `article_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 3),
(5, 3, 3),
(6, 3, 4),
(35, 58, 3),
(36, 58, 5),
(39, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(20) NOT NULL,
  `article_id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `article_id`, `approved`) VALUES
(1, 'kkkk', 1, 0),
(5, 'hhhhh7777', 3, 1),
(8, 'yyyyyy', 1, 1),
(9, 'bvgfytygg', 2, 1),
(11, '333333', 3, 1),
(12, 'yyyyyyyyy', 3, 0),
(19, 'affafaf', 2, 1),
(29, 'faefadfadfaf77777777', 58, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'Food'),
(2, 'Fun'),
(3, 'Family'),
(4, 'Fiction'),
(5, 'Documentary'),
(6, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'kkk', '$2y$10$ssziUl89CoV8LVCGQO.lFe.STVTjDRHMbFh88ccvYl1djNIBUZWea', 'author', '2015-10-22 00:21:37', '2015-10-22 00:21:37'),
(2, 'bb', '$2y$10$/Nd54kEvxmfIfBk5sH6A7Ozaf7uyOCRRjgE0MV/1ZG5bxNH/nRkYW', 'author', '2015-10-22 00:22:23', '2015-10-22 00:22:23'),
(3, 'mm', '$2y$10$8WbEVG.QhtSeuH.0TRjgouVFLRijqQRcWxMrcPXUGwyvJhMEydDsS', 'author', '2015-10-22 00:40:52', '2015-10-22 00:40:52'),
(4, 'ddd', '$2y$10$2IDwcKjj.2IscLW.cDfC9.Thrru8wWik2KRFR/OswWW61dXfwIpNW', 'author', '2015-10-23 00:00:03', '2015-10-23 00:00:03'),
(5, 'mm', '$2y$10$zG9HOusRSCQ91IAIm0bqCOQgynLqXkW3SmG3HB2oUu.0kmne0Y3Q2', 'author', '2015-11-13 20:05:07', '2015-11-13 20:05:07'),
(6, 'oo', '$2y$10$nzcZ9q1/QqMHVLoj4uOl7.1KpkCWbfqLek5C1I0cySWdm90z16X/y', 'author', '2015-11-13 20:06:57', '2015-11-13 20:06:57'),
(7, 'admin', '$2y$10$LWi.zFEqDvp01UKsjunb3OLBjf.fou9RGcSK9wg/3wjbz.lCYQ5ky', 'admin', '2015-11-20 19:29:24', '2015-11-20 19:29:24'),
(8, 'rrr', '$2y$10$g.hB6J.SYNEsQZngbOdf4.QBXHUOPa40zPUYUU4vgFEeSZWxPYuSW', 'author', '2015-11-20 22:46:15', '2015-11-20 22:46:15'),
(9, 'ttt', '$2y$10$P8ylg8NbmzfzHdf6DSfC1Ous.IayuG6MeCG239XQ9V3kR2Aa24lrS', 'author', '2015-11-20 22:50:47', '2015-11-20 22:50:47'),
(10, 'cc', '$2y$10$YEabFh.rRl5bXj1cEbe.lOsnbI4.DgLx8RI62vfLlTO.m3H5H.Ace', 'author', '2015-11-22 05:16:11', '2015-11-22 05:16:11'),
(11, 'cc', '$2y$10$zHZoepd.hPyCz/WaMHpquednfzVf/JSGbOKCg71gCr7hLhJl5A2QO', 'author', '2015-11-22 05:22:55', '2015-11-22 05:22:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
