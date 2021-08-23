-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 11:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instapost`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_caption` varchar(500) NOT NULL,
  `p_tags` varchar(500) NOT NULL,
  `p_location` varchar(500) NOT NULL,
  `p_htags` varchar(500) NOT NULL,
  `p_other` varchar(500) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` time NOT NULL,
  `p_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_caption`, `p_tags`, `p_location`, `p_htags`, `p_other`, `p_date`, `p_time`, `p_img`) VALUES
(1, 'Caption1', 'akshay', 'Bhopal', '#hello #world', 'facebook,twitter,tumblr', '2021-03-05', '15:23:00', 'http://localhost/intern/images/Task.png'),
(2, 'Caption 2', 'ranveer,dipika,rani', 'Bhopal', '#hello#world', 'no other media', '2021-02-14', '15:24:00', 'http://localhost/intern/images/Task.png'),
(3, 'ghjk', 'ranveer,akshay,rani', 'Indore', 'fds', 'facebook,twitter', '2021-02-13', '18:21:00', 'http://localhost/intern/images/Task.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
