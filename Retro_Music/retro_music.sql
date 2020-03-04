-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2020 at 09:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retro_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_number` int(3) NOT NULL,
  `song` varchar(50) CHARACTER SET utf8 NOT NULL,
  `artist` varchar(100) CHARACTER SET utf8 NOT NULL,
  `album` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` int(10) NOT NULL,
  `artwork` varchar(50) CHARACTER SET utf8 NOT NULL,
  `country` varchar(10) CHARACTER SET utf8 NOT NULL,
  `audio` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_number`, `song`, `artist`, `album`, `year`, `artwork`, `country`, `audio`) VALUES
(1, 'One Step Ahead', 'Aretha Franklin', 'A Bit of Soul', 1965, '01.jpg', 'America', '01.mp3'),
(2, 'Don\'t Take Your Time', 'Roger Nichols & The Small Circle of Friends', 'Roger Nichols & The Small Circle of Friends', 1968, '02.jpg', 'America', '02.mp3'),
(3, 'Say You Love Me', 'Patti Austin', 'End of a Rainbow', 1976, '03.jpg', 'America', '03.mp3'),
(4, 'Sandy', 'Carpenters', 'A Kind of Hush', 1976, '04.jpg', 'America', '04.mp3'),
(5, 'How Deep Is Your Love', 'Bee Gees', 'Saturday Night Fever (The Original Movie Sound Track)', 1977, '05.jpg', 'Australia', '05.mp3'),
(6, 'September', 'Earth, Wind & Fire', 'The Best of Earth, Wind & Fire, Vol. 1', 1978, '06.jpg', 'America', '06.mp3'),
(7, 'Carnaval', 'Taeko Ohnuki', 'Romantique', 1980, '07.jpg', 'Japan', '07.mp3'),
(8, 'Your Eyes', 'Tatsuro Yamashita', 'GREATEST HITS! OF TATSURO YAMASHITA', 1982, '08.jpg', 'Japan', '08.mp3'),
(9, 'Smooth Operator', 'Sade', 'Diamond Life', 1984, '09.jpg', 'Nigeria', '09.mp3'),
(10, '搖擺口紅', 'Sandy Lam', '林憶蓮', 1985, '10.jpg', 'China', '10.mp3'),
(11, '零時十分', 'Sally Yeh', '零時十分', 1986, '11.jpg', 'China', '11.mp3'),
(12, 'Kitakaze To Taiyo', 'Toshinobu Kubota', 'Groovin\'', 1989, '12.jpg', 'Japan', '12.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
