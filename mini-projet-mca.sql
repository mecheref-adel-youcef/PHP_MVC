-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 04:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-projet-mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article_date` date NOT NULL,
  `content` text NOT NULL,
  `categorie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `article_date`, `content`, `categorie`) VALUES
(1, 'Find an Opp Java Tutor', '2019-01-19', 'My projects include many aerodynamic simulations, web-based distributed radar system, ActiveX Controls, and multi-threaded applications.', 'Computer Science'),
(2, 'The term and its various definitions', '2019-01-20', 'The discipline was renamed in the late 19th century, primarily due to Alfred Marshall, from \"political economy\" to \"economics\" as a shorter term for \"economic science\". At that time, it became more open to rigorous thinking and made increased use of mathe', 'Economics '),
(3, 'Inspiration, pure and applied mathematics, and aesthetics', '2019-01-21', 'Mathematics arises from many different kinds of problems. At first these were found in commerce, land measurement, architecture and later astronomy; today, all sciences suggest problems studied by mathematicians, and many problems arise within mathematics itself.', 'Mathematics '),
(4, 'What is cybersecurity all about?', '2019-01-23', 'A successful cybersecurity approach has multiple layers of protection spread across the computers, networks, programs, or data that one intends to keep safe. In an organization, the people, processes, and technology must all complement one another to create an effective defense from cyber attacks.', 'Cybersecurity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
