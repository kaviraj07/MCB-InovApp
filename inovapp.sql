-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 06:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inovapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `titleincreole` varchar(55) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `category` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `imagename` varchar(55) DEFAULT NULL,
  `hasvideo` varchar(10) NOT NULL,
  `videoname` varchar(55) NOT NULL,
  `createdby` varchar(30) DEFAULT NULL,
  `createdon` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `titleincreole`, `content`, `category`, `description`, `imagename`, `hasvideo`, `videoname`, `createdby`, `createdon`) VALUES
(45, 'Sega', 'Segae', 'Sega', 'music', 'Sega hit song', 'sega.jpg', '1', 'sega.mp4', 'yuvraj', '2019-03-31'),
(46, 'Geet Gawai', 'Geet Gawai', 'Geet Gawai', 'music', 'Geet Gawai', 'geet.jpg', '0', '', 'yuvraj', '2019-03-31'),
(47, 'Singing', 'sante', 'Singing', 'music', 'Singing', 'jane.jpg', '0', '', 'yuvraj', '2019-03-31'),
(48, 'Ganga Talao', 'grand bassin', 'Not far from Mare aux Vacoas reservoir is Grand Bassin, also known as Ganga Talao. It is one of the rare natural lakes in Mauritius, formed inside the crater o', 'places', 'History of ganga talao', 'gangatalao.jpg', '0', '', 'yuvraj', '2019-03-31'),
(49, 'Le morne brabant', 'lemorne', 'Le Morne Cultural Landscape contains the giant basaltic monolith of Le Morne Brabant, a mountain on the Le Morne Peninsula in the extreme south west of Mauritius', 'places', 'History of Le morne brabant', 'le-morne.jpg', '0', '', 'yuvraj', '2019-03-31'),
(50, 'Dholl puri recipe', 'dalpuri', '### Ingredients:\r\n- 250g dholl gram\r\n\r\n- 3 cups all purpose flour\r\n\r\n- 1 table spoon of salt\r\n\r\n- 1 cup of cold water\r\n\r\n- Yellow food coloring or turmeric\r\n\r\n- 3-4 table spoons of oil \r\n\r\n### Method:\r\n- Remove any impurities from the dholl gram on a whit', 'food', 'How to make dholl puri?', 'dholl-puri.jpg', '0', '', 'yuvraj', '2019-03-31'),
(51, 'Alouda recipe', 'alouda', 'TEst', 'food', 'How to make alouda?', 'alouda.jpg', '0', '', 'yuvraj', '2019-03-31'),
(52, 'Independence day', 'lindependance', 'When is Mauritian National Day?\r\n\r\nNational Day in Mauritius is a public holiday that is celebrated annually on 12 March.\r\n\r\nThis holiday is the national day of Mauritius and it marks two key events in the recent history of the country that both took plac', 'festivals', 'Description of the independence day', 'flag.jpg', '1', 'hyme.mp4', 'yuvraj', '2019-03-31'),
(53, 'Abolition of slavery', 'abolition esclavaze', 'Slavery came to Mauritius in the mid-1600â€™s with colonisation by the Netherlands. About 100 slaves from Madagascar were brought to Mauritius by the Dutch in the earliest days of colonisation, and many more followed. They were harshly treated, and whenev', 'festivals', 'Abolition of slavery history', 'slave.jpg', '0', '', 'yuvraj', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(3, 'Yuvraj', 'Seegolam', 'yuvraj108c@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(5, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(6, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(7, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(8, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(9, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(10, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(11, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(12, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(13, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5'),
(14, 'Yuvraj', 'Seegolam', 'yuvraj@gmail.com', '2e2aa7cafc02bf2b0c4712f793e1e1c5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
