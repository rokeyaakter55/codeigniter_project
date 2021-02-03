-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 12:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `logo`, `heading`, `paragraph`, `video`, `image`, `logo_2`) VALUES
(1, 'bab5a3a706de6c08ce5b7b760fb97d25.png', 'Dance With you heart <br>We Can Dance  ', '     Established in 1940, Dancerio Dance Studio has become a center for dance students <br> with professional aspirations with   ', '   https://www.youtube.com/watch?v=_sI_Ps7JSEk                                ', 'f447a836ce00a88e0f64ea656ef46867.jpg', '6cfea7614a07afc2d5e2e15108a04def.png');

-- --------------------------------------------------------

--
-- Table structure for table `best_dance`
--

CREATE TABLE `best_dance` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `icon_1` varchar(255) NOT NULL,
  `icon_2` varchar(255) NOT NULL,
  `heading_2` varchar(255) NOT NULL,
  `paragraph_2` varchar(255) NOT NULL,
  `trainer` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `winner` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `heading_3` varchar(255) NOT NULL,
  `paragraph_3` varchar(255) NOT NULL,
  `trainer_number` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `winner_number` varchar(255) NOT NULL,
  `features_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_dance`
--

INSERT INTO `best_dance` (`id`, `heading`, `paragraph`, `icon_1`, `icon_2`, `heading_2`, `paragraph_2`, `trainer`, `client`, `winner`, `features`, `heading_3`, `paragraph_3`, `trainer_number`, `client_number`, `winner_number`, `features_number`) VALUES
(1, '  Last year we proved that we’re the best Dance Services        ', ' Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.        ', ' flaticon-007-ballet        ', '  flaticon-008-ballet-1        ', ' Dance Schedule        ', '  Find out what\'s happening by viewing our full schedule of classes.        ', '  Certified Trainer        ', ' Verified Happy Client     ', '  Time Award Winner        ', ' Features added        ', ' Professional dance        ', ' Find out what\'s happening by viewing our full schedule of classes.        ', '  200       ', ' 1300        ', ' 1500      ', ' 2280        ');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `title`, `photo`, `details`, `video`) VALUES
(1, '    Senior Performing Arts Classes I & II    ', '805247f35e92669277e6090b7ab5a876.jpg', '    Classes are designed for senior high school students. Our most advanced dancers strive to reach     ', '        '),
(2, ' Arts Classes I & II ', 'a9b47ba2d65a5d3d773628c201c32b80.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach  ', '  '),
(3, ' Contemporary/Lyrical ', '6a900045d4eec6ac063224d32e497211.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach  ', '  '),
(4, ' Senior Performing ', 'b387fe5298b6dbd35d7842ddfc8b4deb.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach  ', '  '),
(5, ' Contemporary/Lyrical ', '427f581220bd039fabdfd64298822c50.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach ', '  '),
(6, ' Senior Performing ', 'ab1ef13d2d4bd28cb9ff9ca0a4430048.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach ', '  '),
(7, ' Hip-hop dance refers to street dance ', '6a6226330382d3404b75bc88dbb2a2fe.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach ', '  '),
(8, ' Arts Classes I & II ', 'c1a04b3eb841b1b9495e6c6301818716.jpg', ' Classes are designed for senior high school students. Our most advanced dancers strive to reach ', '  ');

-- --------------------------------------------------------

--
-- Table structure for table `class_booking`
--

CREATE TABLE `class_booking` (
  `id` int(11) NOT NULL,
  `slotID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `time` varchar(200) NOT NULL,
  `trainer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `organizer_trainer` varchar(255) NOT NULL,
  `organizer_phone` varchar(25) NOT NULL,
  `organizer_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `details`, `photo`, `fee`, `start_time`, `end_time`, `category`, `address`, `venue`, `organizer_name`, `organizer_trainer`, `organizer_phone`, `organizer_email`) VALUES
(1, ' Classical Odissi Friday performance with rokeya', ' Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh ', 'a40fe3c108a4e643bee53259530156f3.png', '  ', '2020-09-26 08:00:00', '2020-09-10 05:00:00', ' Life Style dance ', ' 504 Lavaca Street, Suite 1000 Austin, TX 78701 ', ' Austin Center Park ', ' Mahfuz Riad ', ' Evan Jack ', ' 02 9292162 ', ' Event@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_designation` varchar(255) NOT NULL,
  `p_sign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`id`, `name`, `heading`, `paragraph`, `image`, `p_name`, `p_image`, `p_designation`, `p_sign`) VALUES
(1, '  We Provie service since 1940 with rokeya ', '  Join A Global Dance Community with rokeya ', '  Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu update_global', '224a33bedb99042921fd78e538de17ce.jpg', '  Mahfuz Riad with rokeya ', 'c0522f3acc030c5652c484473d720f23.jpg', '  CEO & Founder of Phanic with rokeya ', 'ed2f2fe984c098ff3dc49331304b0e0f.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `website_url`, `message`) VALUES
(1, 'juliush ahmed', 'juli@email.com', 'juli.com', 'ok'),
(2, 'juli', 'milu@email.com', 'mili.com', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `online_dance`
--

CREATE TABLE `online_dance` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_dance`
--

INSERT INTO `online_dance` (`id`, `heading`, `image`, `link`, `image_2`) VALUES
(1, '  Online Dance Classes With The <br>World\'s Best Instructors  ', 'c3143450bbfc269e02f7b3ddcf07a51b.png', 'https://www.facebook.com/juliush.ahmed', 'a1ab3aeb2a1dfda26a192d209c39ac72.png');

-- --------------------------------------------------------

--
-- Table structure for table `outstanding`
--

CREATE TABLE `outstanding` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `ballet` varchar(255) NOT NULL,
  `paragraph` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `theatre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outstanding`
--

INSERT INTO `outstanding` (`id`, `name`, `heading`, `ballet`, `paragraph`, `image`, `theatre`) VALUES
(1, 'OUTSTANDING PERFORMANCE ', 'Afiyana Star Academy offers quality dance instruction done with care ', 'Pre-Ballet with ', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.', 'af5627eb9a033366e81b0b1bf335877c.png', 'Musical Theatre ');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `heading`, `paragraph`, `icon`, `number`) VALUES
(1, 'Creative Movement ', ' Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam. ', '  flaticon-006-ballerina icon  ', ' 01 '),
(2, ' Musical Theatre ', ' Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam. ', ' flaticon-005-gymnast icon ', ' 02 '),
(3, '     Hip-Hop with ', '     Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam.     ', 'flaticon-004-men-dancing icon     ', '03');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `pinter` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `facebook`, `pinter`, `skype`, `twitter`, `name`, `designation`) VALUES
(1, 'ea37b605d74a51d6c57882d458125057.jpg', ' https://www.facebook.com/ ', ' fa fa-pinterest ', ' fa fa-skype ', ' fa fa-twitter ', ' Mahfuz Riad ', ' Dance MANAGER '),
(2, 'ddf75e28e2f73a9552003c5278c460fc.jpg', 'https://www.facebook.com/  ', 'https://www.pinterest.com/', 'https://www.skype.com/en/', 'https://twitter.com/?lang=en ', '  Alex Srri  ', '  Hip-Hop  Expert  '),
(3, 'bd7deb4098c03440009934ad3a7db212.jpg', ' fa fa-facebook ', ' fa fa-pinterest ', ' fa fa-skype ', ' fa fa-twitter ', ' Malik Arman ', ' Pre-Ballet Expert '),
(4, 'ac927fd44bf3555e289a406d0a19922d.jpg', ' fa fa-facebook ', ' fa fa-pinterest ', ' fa fa-skype ', ' fa fa-twitter ', ' Smiy Akrom ', ' Hip-Hop Expert ');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `paragraph`, `p_image`, `p_name`, `p_designation`) VALUES
(2, '  “My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!” ', '4b97ecc680e6c6780f4d6f25ce779d6d.jpg', '  Mahfuz RIad  ', '      Founder      '),
(3, ' “My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!”    ', '55a64308e17fa40de066484e2a074c41.jpg', ' Mahfuz RIad ', '    Founder    '),
(4, '  “My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!”  ', 'd63691380f3281bf8816e8a751902230.jpg', '  Mahfuz RIad  ', '  Founder  ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `id`) VALUES
(' juliush  ', '  m@gmail.com  ', '12345 ', 10),
('  abc  ', '  a@gmail.com  ', '  12345 ', 11),
('Coyon', 'c@email.com', '12345', 12),
(' sohel ', ' mhsohel017@gmail.com ', ' 12345 ', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_dance`
--
ALTER TABLE `best_dance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_dance`
--
ALTER TABLE `online_dance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outstanding`
--
ALTER TABLE `outstanding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_dance`
--
ALTER TABLE `best_dance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `global`
--
ALTER TABLE `global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online_dance`
--
ALTER TABLE `online_dance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outstanding`
--
ALTER TABLE `outstanding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
