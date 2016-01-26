-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2016 at 08:29 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `my_mvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image_name`, `content`, `file_name`) VALUES
(3, 'Trekking in Nepal', '3.jpg', 'A trek in Nepal is a special and rewarding mountain holiday. If you have the time and energy to trek don’t miss the opportunity to leave Kathmandu and see the country’s spectacular beauty and unique culture. Fortunately for the visitor, there are still only a few roads extending ...', 'issue.pdf'),
(4, 'Tibet Tour with Everest Base Camp', '7.jpg', 'This adventure takes you to the historical city of Lhasa – the roof of the world – and then overland across the spectacular Tibetan Plateau to Mount Everest Base Camp. You will begin by exploring the magnificent city of Lhasa, situated in a stunning valley surrounded by mountains...', 'issue.pdf'),
(5, 'Nepal Cooking Schools in Nepal', '6.jpg', 'Your guide to the best online cooking schools and " hands on" cooking classes. If you want to really understand a countries culture... take a cooking class! Book online for a great selection  of cooking classes, food and general interest tours with knowlegeable local tour guides...', 'issue.pdf'),
(6, '5 Reasons Why Choosing Healthy Food Seems Hard', '1.jpg', 'Most people want to eat better, feel better, and live longer. However, it seems that manufactured food is geared toward convenience and taste, regardless of the nutrient value. According to www.worldheart.org,...', 'issue.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`) VALUES
(3, 'Sarthak', 'sarthakjoshi977@gmail.com', 'c0288a8410353bd12cb3486092076984', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
