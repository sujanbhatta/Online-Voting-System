-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 05:23 AM
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
-- Database: `electronicvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(8, 'sujan', 'sujan', 'sujanbhatta249@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `votes` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `position`, `party`, `votes`, `image`) VALUES
(6, 'à¤¦à¤¿à¤¨à¤¨à¤¾à¤¥ à¤¥à¤°à¥', 'à¤µà¤¾à¤°à¥à¤¡ à¤…à¤§à¥à¤¯à¤•à¥à¤·', 'à¤¸à¤‚à¤˜à¥€à¤¯ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦à¥€ à¤«à¥‹à¤°à¤®', 2, '220px-Md._Lal_babu_Raut.jpg'),
(7, 'à¤¸à¥à¤¹à¥‡à¤¨à¥€ à¤§à¤¿à¤¤à¤²', 'à¤µà¤¾à¤°à¥à¤¡ à¤¸à¤¦à¤¸à¥à¤¯', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤¤à¤¾ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 4, 'kirti-personal-photo-1.jpg'),
(8, 'à¤¹à¤¿à¤¨à¤¾ à¤¶à¥‡à¤–', 'à¤µà¤¾à¤°à¥à¤¡ à¤¸à¤¦à¤¸à¥à¤¯', 'à¤¨à¥‡à¤ªà¤¾à¤² à¤•à¤®à¥à¤¯à¥à¤¨à¤¿à¤·à¥à¤Ÿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€ (à¤®à¤¾à¤“à¤µà¤¾à¤¦à¥€)', 1, '308490_425758844126059_1520595967_n.jpg'),
(10, 'à¤¸à¥à¤§à¤¾ à¤¨à¥à¤¯à¥Œà¤ªà¤¾à¤¨à¥‡', 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°', 'à¤¨à¤¯à¤¾à¤ à¤¶à¤•à¥à¤¤à¤¿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 3, 'index.jpeg'),
(11, 'à¤­à¥à¤·à¤£ à¤•à¥à¤®à¤¾à¤°', 'à¤µà¤¾à¤°à¥à¤¡ à¤¸à¤¦à¤¸à¥à¤¯', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤®à¥‹à¤°à¥à¤šà¤¾', 0, 'DSC-2958Blue-Blue-p-0.jpg'),
(12, 'à¤•à¤¬à¤¿à¤¨à¥à¤¦ à¤¶à¥à¤°à¥‡à¤·à¥à¤ ', 'à¤µà¤¾à¤°à¥à¤¡ à¤¸à¤¦à¤¸à¥à¤¯', 'à¤¨à¥‡à¤ªà¤¾à¤²à¥€ à¤•à¤¾à¤‚à¤—à¥à¤°à¥‡à¤¸', 0, '300x3001509979443.IMG_4594_1.jpg'),
(13, 'à¤¯à¤œà¥à¤ž à¤¬à¤¹à¤¾à¤¦à¥à¤° à¤¥à¤¾à¤ªà¤¾', 'à¤µà¤¾à¤°à¥à¤¡ à¤…à¤§à¥à¤¯à¤•à¥à¤·', 'à¤¨à¥‡à¤ªà¤¾à¤² à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤¦à¤²', 1, 'cv-plshrestha.jpg'),
(14, 'à¤¬à¥€à¤¨à¤¾ à¤•à¥‡à¤¸à¥€', 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°', 'à¤¨à¥‡à¤ªà¤¾à¤²à¥€ à¤•à¤¾à¤‚à¤—à¥à¤°à¥‡à¤¸', 2, 'tumblr_inline_nxwecqe5DF1tqw1p5_500.jpg'),
(15, 'à¤¯à¥à¤¨à¤¾ à¤®à¤—à¤¾à¤°', 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°', 'à¤¸à¤‚à¤˜à¥€à¤¯ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦à¥€ à¤«à¥‹à¤°à¤®', 0, 'Isa-new2016-620x973.jpg'),
(16, 'à¤—à¤œà¥‡à¤¨à¥à¤¦à¥à¤° à¤–à¤¡à¥à¤•à¤¾', 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°', 'à¤¨à¥‡à¤ªà¤¾à¤² à¤•à¤®à¥à¤¯à¥à¤¨à¤¿à¤·à¥à¤Ÿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€ (à¤®à¤¾à¤“à¤µà¤¾à¤¦à¥€)', 0, 'aa.jpeg'),
(17, 'à¤¹à¤°à¤¿ à¤²à¥à¤‡à¤Ÿà¥‡à¤²', 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤¤à¤¾ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 0, 'ff.jpeg'),
(18, 'à¤•à¤¿à¤°à¤£ à¤¶à¥à¤°à¥‡à¤·à¥à¤ ', 'à¤®à¥‡à¤¯à¤°', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤ªà¥à¤°à¤œà¤¾à¤¤à¤¨à¥à¤¤à¥à¤° à¤ªà¤¾à¤°à¥à¤Ÿà¥€ à¤¨à¥‡à¤ªà¤¾à¤²', 3, 'ee.jpeg'),
(19, 'à¤¸à¥à¤¦à¤°à¥à¤¶à¤¨ à¤—à¤¿à¤°à¥€', 'à¤®à¥‡à¤¯à¤°', 'à¤¨à¥‡à¤ªà¤¾à¤²à¥€ à¤•à¤¾à¤‚à¤—à¥à¤°à¥‡à¤¸', 2, 'BP_Koirala.jpg'),
(20, 'à¤¹à¤°à¤¿à¤¯à¤¾à¤¯à¤¾ à¤®à¤—à¤°', 'à¤®à¥‡à¤¯à¤°', 'à¤¨à¥‡à¤ªà¤¾à¤² à¤•à¤®à¥à¤¯à¥à¤¨à¤¿à¤·à¥à¤Ÿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€ (à¤®à¤¾à¤“à¤µà¤¾à¤¦à¥€)', 0, 'DJAfFy6UQAEFhct.jpg'),
(21, 'à¤¸à¥à¤®à¤¨ à¤¬à¥€à¤•à¥‡', 'à¤®à¥‡à¤¯à¤°', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤¤à¤¾ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 0, 'staff-5b509ea18bbce.[400].jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`id`, `status`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `symbol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `name`, `description`, `symbol`) VALUES
(1, 'à¤¨à¥‡à¤ªà¤¾à¤²à¥€ à¤•à¤¾à¤‚à¤—à¥à¤°à¥‡à¤¸', 'The Nepali Congress is a social-democratic political party in Nepal. It is the largest opposition party in the House of Representatives and the National Assembly. The party was formed in 1950 by the merger of Nepali National Congress and Nepal Democratic Congress', 'nepali-congress-flag-04102017072936-1000x0.jpg'),
(2, 'à¤¨à¥‡à¤ªà¤¾à¤² à¤•à¤®à¥à¤¯à¥à¤¨à¤¿à¤·à¥à¤Ÿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€ (à¤®à¤¾à¤“à¤µà¤¾à¤¦à¥€)', 'The Communist Party of Nepal (Maoist Centre) was a communist political party in Nepal. The party was founded in 1994 after breaking away from the Communist Party of Nepal.', 'maiost.jpeg'),
(3, 'à¤¨à¥‡à¤ªà¤¾à¤² à¤•à¤®à¥à¤¯à¥à¤¨à¤¿à¤·à¥à¤Ÿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€ (à¤à¤®à¤¾à¤°à¥à¤²à¥‡)', 'The Communist Party of Nepal (Unified Marxistâ€“Leninist) was one of the two major communist parties in Nepal. The party was formed in January 1991 with the unification of the Communist Party of Nepal and the Communist Party of Nepal', 'uml.jpg'),
(4, 'à¤µà¤¿à¤µà¥‡à¤•à¤¶à¥€à¤² à¤¸à¤¾à¤à¤¾ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 'Bibeksheel Sajha Party is a political party in Nepal. It was founded on 26 July 2017, after the merger of Bibeksheel Nepali Dal and Sajha Party.', 'download.png'),
(5, 'à¤¨à¥‡à¤ªà¤¾à¤² à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤¦à¤²', 'In the 2008 Constituent Assembly election, the party won one seat through the Proportional Representation vote.The party selected Ek Nath Dhakal as its representative in the assembly. Party leader Ek Nath Dhakal was discussed to become Prime Minister to lead Nepal\'s consensus government.', 'Nepal_Pariwar_Dal_Symbol.png'),
(6, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤ªà¥à¤°à¤œà¤¾à¤¤à¤¨à¥à¤¤à¥à¤° à¤ªà¤¾à¤°à¥à¤Ÿà¥€ à¤¨à¥‡à¤ªà¤¾à¤²', 'Rastriya Prajatantra Party Nepal (Nepali: à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤ªà¥à¤°à¤œà¤¾à¤¤à¤¨à¥à¤¤à¥à¤° à¤ªà¤¾à¤°à¥à¤Ÿà¥€ à¤¨à¥‡à¤ªà¤¾à¤²; translation: National Democratic Party Nepal) was a Hindu right-wing, cultural conservative and royalist political party in Nepal', '20141013rpp-n-joins-nc-faction-in-quest-for-hindu-state.jpg'),
(7, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤¤à¤¾ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 'The Rastriya Janata Party Nepal is a Nepali Political Party formed after the merger of Tarai Madhes Loktantrik Party, led by the Mahantha Thakur, Sadbhavana Party, led by the Rajendra Mahato, Nepal.', 'rastriya janta party.jpeg'),
(8, 'à¤¸à¤‚à¤˜à¥€à¤¯ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦à¥€ à¤«à¥‹à¤°à¤®', 'The Federal Socialist Forum, Nepal (Nepali: à¤¸à¤‚à¤˜à¥€à¤¯ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦à¥€ à¤«à¥‹à¤°à¤®, à¤¨à¥‡à¤ªà¤¾à¤²; abbreviated FSFN) is a democratic socialist political party in Nepal. The party was formed on 15 June 2015 from the merger of the Madhesi Jana Adhikar Forum, Nepal, the Federal Socialist Party Nepal and the Khas Samabeshi Party', 'download (3).jpg'),
(9, 'à¤¨à¤¯à¤¾à¤ à¤¶à¤•à¥à¤¤à¤¿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€', 'Naya Shakti Party, Nepal (Nepali: à¤¨à¤¯à¤¾à¤ à¤¶à¤•à¥à¤¤à¤¿ à¤ªà¤¾à¤°à¥à¤Ÿà¥€, à¤¨à¥‡à¤ªà¤¾à¤², translation: New Force Party, Nepal) is a democratic socialist political party in Nepal formed by former Prime Minister Baburam Bhattarai. ', 'images.png'),
(10, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤®à¥‹à¤°à¥à¤šà¤¾', 'Rastriya Janamorcha (Nepali: à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤¿à¤¯ à¤œà¤¨à¤®à¥‹à¤°à¥à¤šà¤¾; translation: National People\'s Front) is a communist political party in Nepal. It was originally founded in 1995 as the legal front of Communist Party of Nepal (Masal).', 'rastriya_janamorcha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'à¤®à¥‡à¤¯à¤°'),
(2, 'à¤‰à¤ª-à¤®à¥‡à¤¯à¤°'),
(3, 'à¤µà¤¾à¤°à¥à¤¡ à¤…à¤§à¥à¤¯à¤•à¥à¤·'),
(4, 'à¤µà¤¾à¤°à¥à¤¡ à¤¸à¤¦à¤¸à¥à¤¯');

-- --------------------------------------------------------

--
-- Table structure for table `votedetails`
--

CREATE TABLE `votedetails` (
  `id` int(10) NOT NULL,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votedetails`
--

INSERT INTO `votedetails` (`id`, `candidate`, `voters`) VALUES
(1, 'Sudarshan Giri', '01-2000'),
(2, 'Bina Simkhada', '01-2000'),
(3, 'Sumina Ghatri Magar', '01-2000'),
(4, 'Hina Sheikh', '01-2000'),
(5, 'Kiran Shrestha', '01-3000'),
(6, 'Sudha Neupane', '01-3000'),
(7, 'Prajol Sapkota', '01-3000'),
(8, 'Pumpha Bhusal', '01-3000'),
(9, 'Kiran Shrestha', '01-200'),
(10, 'Sudha Neupane', '01-200'),
(11, 'Yagya Bahadur Chettri', '01-200'),
(12, 'Pumpha Bhusal', '01-200'),
(13, 'Kiran Shrestha', '01-000'),
(14, 'Sudha Neupane', '01-000'),
(15, 'Dayanath mb', '01-000'),
(16, 'Pumpha Bhusal', '01-000'),
(17, 'à¤¸à¥à¤¦à¤°à¥à¤¶à¤¨ à¤—à¤¿à¤°à¥€', '01-0001'),
(18, 'à¤¬à¥€à¤¨à¤¾ à¤•à¥‡à¤¸à¥€', '01-0001'),
(19, 'à¤¦à¤¿à¤¨à¤¨à¤¾à¤¥ à¤¥à¤°à¥', '01-0001'),
(20, 'à¤¸à¥à¤¹à¥‡à¤¨à¥€ à¤§à¤¿à¤¤à¤²', '01-0001');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(10) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `nid`, `name`, `username`, `password`, `status`) VALUES
(16, '01-0001', 'Sujan  Bhatta', 'sujan', '93e05a041435c083504c986de85caba1', 'voted');

-- --------------------------------------------------------

--
-- Table structure for table `voter_list`
--

CREATE TABLE `voter_list` (
  `id` int(10) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `father` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_list`
--

INSERT INTO `voter_list` (`id`, `nid`, `name`, `dob`, `address`, `father`, `status`, `img`) VALUES
(32, '01-0001', 'Sujan  Bhatta', '1996-12-30', 'Jirrauna, Chitwan, Nepal', 'Tanka Prasad Bhatta', 'Registered', 0x73756a616e2e6a7067),
(33, '01-0002', 'Vaskar  Ojha', '1996-12-12', 'Jirrauna, Chitwan, Nepal', 'Surya Prasad Ojha', 'notRegistered', 0x7661736b6172312e6a7067),
(34, '01-0003', 'Manoj  Sharma', '1997-12-12', 'Jirrauna, Chitwan, Nepal', 'Hari Prasad Subedi', 'notRegistered', 0x38303070785f434f4c4f5552424f5831313031363938302e6a7067),
(35, '01-0004', 'Kewal Prasad Mahto', '1994-12-12', 'Chormara, Chitwan, Nepal', 'Manohar Mahato', 'notRegistered', 0x696d616765732e6a706567),
(36, '01-0005', 'Roshan  Dangal', '1995-12-30', 'Jirrauna, Chitwan, Nepal', 'Ram Krishna Dangal', 'notRegistered', 0x6d616e2d696e2d73756974322e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votedetails`
--
ALTER TABLE `votedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter_list`
--
ALTER TABLE `voter_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logintbl`
--
ALTER TABLE `logintbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votedetails`
--
ALTER TABLE `votedetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `voter_list`
--
ALTER TABLE `voter_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
