-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 11:16 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `re_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `username`, `password`, `description`, `profile_image`, `status`, `re_date`, `update_on`) VALUES
(1, 'users', 2147483647, 'test@gmail.com', 'test1', '202cb962ac59075b964b07152d234b70', 'sdfsdfsdf', '0e658a8381be04daafedadf61125f862', 1, '2018-04-13 16:38:25', '2018-04-19'),
(5, 'dfgdfg', 1234567890, 'gfgfg@fgdfg.fghfgh', 'dfgdfg', '202cb962ac59075b964b07152d234b70', 'dfgdg gfdfg', NULL, 0, '2018-04-16 12:55:42', NULL),
(10, 'test2', 1234567890, 'test2@gmail.com', 'testing2', '202cb962ac59075b964b07152d234b70', 'This is the tesing part 2', 'e207f3d7fd55412d3a3c79cba68127af', 1, '2018-04-17 10:06:30', NULL),
(11, 'test345', 1234567890, 'testing3@gmail.com', 'testing3', '202cb962ac59075b964b07152d234b70', 'this is testing 3', 'f573b9f7062298a530b0e5b7d230ea16', 0, '2018-04-17 12:47:15', NULL),
(13, 'tesigndfsf', 1234567890, 'tesigndfsf@gmiail.com', 'tesigndfsf@gmiail.com', '202cb962ac59075b964b07152d234b70', 'This standards compliant, simple, fixed width website template is released as an \'open source\' design (under a Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the \'design from HTML5webtemplates.co.uk\' link in the footer of the template, but other than that...', 'f6a57f5d23ea6f8204ec6bbb5b6d9bc6', 0, '2018-04-17 18:12:33', NULL),
(16, 'ggggggggggg', 1234567890, 'ggggggggggggggg@gggggggggg.hhhhhhhhh', 'gggggggggggggg', '202cb962ac59075b964b07152d234b70', '', 'f2f3553ef02a269cb0c2529be7823a59', 0, '2018-04-18 10:07:47', NULL),
(19, 'testetestfffffffffffffffffffffffffffffffffffeeeee', 1234567890, 'testing55555555@gmail.com', 'dfgdfhhhhhhhhhhhhhhhhhhhhhh', '202cb962ac59075b964b07152d234b70', ' this is testinf and updating', 'c1c086b537b76e04015874044777ebe3', 1, '2018-04-18 10:22:05', NULL),
(20, 'teestsssssssssss', 1234567890, 'teestsssssssssss@gmail.com', 'teestsssssssssss@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lorem ipsum dolor sit amet, ad qui prompta laboramus, sonet ornatus ei usu. Ut sit dico solum facili', '2d228295cd1d5034220c4b20f70d9a52', 0, '2018-04-18 15:27:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
