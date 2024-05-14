-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecorise`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `postid`, `img_file`, `time`) VALUES
(1, 1, 'fries.PNG', '14:27:52'),
(2, 2, 'Girl.PNG', '14:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(600) NOT NULL,
  `timestamp` datetime NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `timestamp`, `image`) VALUES
(23, '3', ' Green over gains: A journey to sustainable well-being', 'heyy everyone! Started working on living a more sustainable life. I have been rethinking my diet plan and decided to embrace a plant-based diet. The food is so delicious, and let me tell you, it feels so refreshing 🤩', '2024-05-14 10:39:54', 'post_2024.05.14_08.39.54am.png'),
(24, '8', 'Thrift score: My sustainable style saga 👒', 'I have been on a mission to revamp my wardrobe and thrift stores are the perfect way to go. It\'s like fasion recycling program, and it\'s pretty fun!! ', '2024-05-14 10:44:03', 'post_2024.05.14_08.44.03am.jpg'),
(25, '9', 'Sustainability challenge accepted', 'Hello people! I tried doing some fun challenges on ecorise quest 🍀. It\'s like a real-life game, every challenge has something new in it like who knew that saving planet would be this easy. Follow along if you want to know more about the challenges.', '2024-05-14 10:48:10', 'post_2024.05.14_08.48.10am.png'),
(26, '10', 'Bagging it right 🛍', 'Helllooo!! \r\nso i\'ve recently started using paper bags and believe me they\'re way more fashionable. Yeah I know plastic is convenient but paper bags are like the cool cousins that shows up at family gatherings and everyones loves it 😂. ', '2024-05-14 10:51:14', 'post_2024.05.14_08.51.14am.png'),
(27, '11', 'Ecorise Quest: My Go-To for Green Goals', 'Hiii!! I came across this website that is all about sustainable living ♻\r\nWe share our daily progress and cheer each other on and it\'s super fun doing the challenges. I highly recommend this website if you\'re new to sustainable living!', '2024-05-14 10:58:51', 'post_2024.05.14_08.58.51am.png'),
(28, '12', 'Trying Out Sustainable Goods', 'Heyy!! Just wanted to share my experience as a beginner, trying out sustainable products. Honestly, I was a bit skeptical about whether eco-friendly products could truly stand up to their conventional counterparts. But wow they work wonders! To anyone on the fence about trying sustainable products, I say go for it!', '2024-05-14 11:00:43', 'post_2024.05.14_09.00.43am.jpeg'),
(29, '12', 'Cycling my way through sustainable life', 'I swapped out my car for my dusty bike this week! It\'s a bit of a workout, especially these hills, but the fresh air and knowing I\'m reducing my carbon footprint make it worth it. Maybe I\'ll even convince some friends to join me on a weekend ride!', '2024-05-14 11:02:15', 'post_2024.05.14_09.02.15am.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(9) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `price`, `status`, `user_id`) VALUES
(1, '4.99', 'completed', 1),
(12, '4.99', 'completed', 7),
(13, '4.99', 'completed', 4),
(14, '4.99', 'completed', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bio` varchar(700) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `image`, `password`, `bio`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'Drinkbot', 'relay@gmail.com', '', '1601b28af4889d7ca7af3ca61bb69a14', '', NULL, NULL),
(2, 'madie', 'menace@gmail.com', '', '9da8218bceacdde38b0fced3ed0ad0ba', '', NULL, NULL),
(3, 'Amina Mohammad', 'aminamohd56348@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocIfl_97KL3vNkEORha224TO4nS-9Ef_9rFEYXqwfrOQ4EPgSg=s96-c', '827ccb0eea8a706c4c34a16891f84e7b', 'sakuna tera mouh kala', '17a3eb19b2f40d262227a7edfd80ff4f14687183f742699829c9272d0dc53b5f', '2024-05-14 08:27:06'),
(4, 'silver', 'silver123@gmail.com', 'silver - 2024.05.01 - 08.24.10pm.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 'Hello, this is Silver Novochrono! 💖🦋', NULL, NULL),
(5, 'xielian', 'hua@gmail.com', 'xielian - 2024.05.02 - 11.36.46am.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, NULL),
(6, 'noname', 'noname@gmail.com', 'profile.png', '4a7d1ed414474e4033ac29ccb8653d9b', '', NULL, NULL),
(7, 'amina', 'aminamohammad56348@gmail.com', 'profile.png', '6562c5c1f33db6e05a082a88cddab5ea', '', 'b039aa446622e6a8be7ab0689809edef88768c5a9e5dd8f390d291621fdaaedb', '2024-05-13 21:05:04'),
(8, 'Nandana Byju', 'nandanaaaah@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocKp4k5-W7aURw24MIb7IdjGWiWwkjHSWvBYtp09SndaYYv6qw=s96-c', '', '', NULL, NULL),
(9, 'Warda', 'wardazeeshan51@gmail.com', 'Warda - 2024.05.14 - 08.45.58am.jpg', 'ac09737983421e9715e15b88a23ad1a6', '', NULL, NULL),
(10, 'yumnaa', 'yumyamx@gmail.com', 'yumnaa - 2024.05.14 - 08.50.23am.png', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, NULL),
(11, 'haniyaa', 'hanihere@gmail.com', 'haniyaa - 2024.05.14 - 08.57.49am.jpg', 'd09c83439b6aaf9739eef4ee029078c8', '', NULL, NULL),
(12, 'warshiah', 'warshi@gmail.com', 'warshiah - 2024.05.14 - 09.01.09am.jpg', '8f90982c2c9fb4d8e6a398514d348b90', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `product_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
