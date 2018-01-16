-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 09:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_answer` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `a_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `user` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `view` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic`, `user`, `comment`, `view`, `reply`, `datetime`) VALUES
(5, 'How do i reply to a comment on the forum?', 'Andrew21', 'Can someone show me how to reply to a topic on the forum?', 3, 0, '2017-06-05 16:21:55'),
(3, 'product page?', 'NoelFielding', 'Where is the product page?', 13, 0, '2017-06-04 15:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(7) NOT NULL DEFAULT 'normal'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `password`, `usertype`) VALUES
(1, 'OliverP', 'Oliver20@gmail.com', 0, 'kk', 'admin'),
(2, 'ElliotS', 'elliot@gmail.com', 0, 'abc123', 'normal'),
(3, 'Andrew21', 'andreww@wow.com', 21, 'wow12', 'normal'),
(4, 'Joshw', 'josh@cs.com', 0, 'csgo4go', 'normal'),
(5, 'Robin1', 'robin1@hotmail.co.uk', 0, 'HND2', 'normal'),
(6, 'Colin31', 'colinrutherford@gmail.com', 0, 'PassKeep', 'normal'),
(7, 'RichardAyoade', 'RichardAyoade@hotmail.com', 0, 'It4me21', 'normal'),
(8, 'KatherineP', 'Katherine.Parkinson@gmail.com', 0, 'RI1', 'normal'),
(9, 'MattBerry', 'MattBerry@btinternet.co.uk', 0, 'MB1', 'normal'),
(10, 'Chris Morris', 'Chris@Avenal.com', 0, 'Morris1', 'normal'),
(11, 'NoelFielding', 'NoelFielding@21baker.co.uk', 0, 'baker1', 'normal'),
(12, 'OliverC', 'OliverChris@5050.com', 0, '5d4b', 'normal'),
(13, 'JosephRayWatkins', 'JosephRW@worlds.co.uk', 0, 'JRW', 'normal'),
(14, 'MaryVenetiaJames', 'MaryV@postoffice.co.uk', 0, 'post123', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
