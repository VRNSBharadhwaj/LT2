-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 11:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gfg`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `header` text NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `header`, `content`, `time`, `creator_id`) VALUES
(2, 'Must Do Coding Questions for Product Based Companies', 'As the placement season is back, GeeksforGeeks is here to help you crack the interview. We have selected some most commonly asked and MUST DO practice problems to crack Product-based Company Interviews.\r\n\r\nYou can also take part in our mock placement contests which will help you learn different topics and practice at the same time, simulating the feeling of a real placement test environment.\r\n\r\nMust-Do-Coding-Questions-for-Product-Based-Companies\r\n\r\nIf you are looking for Old MUST DO list, please refer MUST DO Coding Problems for Companies like Amazon, Microsoft, Adobe, &hellip;\r\n\r\nIn case you are a new user, we strongly recommend you to go through the below Improved list.\r\n\r\nNote: Now you can track your progress of these questions Must Do Interview Preparation ', '2021-03-29 14:45:56', 13),
(3, 'Socket Programming in C/C++', 'What is socket programming?\r\nSocket programming is a way of connecting two nodes on a network to communicate with each other. One socket(node) listens on a particular port at an IP, while other socket reaches out to the other to form a connection. Server forms the listener socket while client reaches out to the server.\r\n\r\nState diagram for server and client model\r\nSocket Programming in C-C++\r\n\r\nStages for server\r\n\r\n    Socket creation:\r\n\r\n    int sockfd = socket(domain, type, protocol)\r\n\r\n    sockfd: socket descriptor, an integer (like a file-handle)\r\n    domain: integer, communication domain e.g., AF_INET (IPv4 protocol) , AF_INET6 (IPv6 protocol)\r\n    type: communication type\r\n    SOCK_STREAM: TCP(reliable, connection oriented)\r\n    SOCK_DGRAM: UDP(unreliable, connectionless)\r\n    protocol: Protocol value for Internet Protocol(IP), which is 0. This is the same number which appears on protocol field in the IP header of a packet.(man protocols for more details)\r\n    Setsockopt:\r\n\r\n    int setsockopt(int sockfd, int level, int optname,  \r\n                       const void *optval, socklen_t optlen);\r\n\r\n    This helps in manipulating options for the socket referred by the file descriptor sockfd. This is completely optional, but it helps in reuse of address and port. Prevents error such as: &ldquo;address already in use&rdquo;.\r\n    Bind:\r\n\r\n    int bind(int sockfd, const struct sockaddr *addr, \r\n                              socklen_t addrlen);\r\n\r\n    After creation of the socket, bind function binds the socket to the address and port number specified in addr(custom data structure). In the example code, we bind the server to the localhost, hence we use INADDR_ANY to specify the IP address.\r\n    Listen:\r\n\r\n    int listen(int sockfd, int backlog);\r\n\r\n    It puts the server socket in a passive mode, where it waits for the client to approach the server to make a connection. The backlog, defines the maximum length to which the queue of pending connections for sockfd may grow. If a connection request arrives when the queue is full, the client may receive an error with an indication of ECONNREFUSED.', '2021-03-29 15:11:10', 13),
(4, 'How to prepare for Govt Exams', 'Like every year, as of February - March, the season of exams begins -- be it Secondary School, Higher Secondary, CAT, CET, JEE, government exams or any other competitive exams. This year that&rsquo;s not the case.\r\n\r\nMost of the exams have been cancelled or postponed due to the unforeseeable Coronavirus pandemic that has the entire world in its grip. Therefore, the period from May to June is crucial for students and candidates chasing success.\r\n\r\nThere are typically two distinct types of students and candidates: The perfect student/candidate who starts preparation well in advance so as to achieve the desired score and the last minute risers who start late and yet aim to achieve the same perfect score as the early birds.\r\n\r\nGenerally speaking, the average duration of starting exam preparation is said to be at least 4 to 5 months before the exam.\r\n\r\n    A survey suggests that the average number of years spent in competitive exam preparation is 3 years and 3 months. However, one can cut this time with the right approach.\r\n\r\nWith the right ingredients, anyone can cook the perfect recipe for success in the exam!\r\n\r\nPatience and perseverance in the current grim situation can help students focus on their syllabus better. The pandemic is bound to discourage students and fill them with plenty of doubts but they have to realize that this has also offered them extra time for preparation.\r\n\r\nLooking on the brighter side of every situation will help them rise better. While it\'s important to begin preparation well in advance if you are a late riser the suggestions below will help you to gain speed and come at par with the early birds.', '2021-03-29 17:08:16', 13);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_on` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `comment`, `comment_on`, `type`, `time`) VALUES
(13, 'comment by lokesh', 4, 'art', '2021-03-29 17:55:29'),
(8, 'Another comment by Lokesh', 4, 'art', '2021-03-29 18:13:22'),
(8, 'Checking comment', 4, 'art', '2021-03-29 18:14:23'),
(8, 'comment on socket program by user', 3, 'art', '2021-03-30 03:49:05'),
(8, 'Another comment on socket program', 3, 'art', '2021-03-30 03:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `descq`
--

CREATE TABLE `descq` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `descq`
--

INSERT INTO `descq` (`q_id`, `question`, `answer`, `creator_id`) VALUES
(9, 'creating new descriptive question', 'Answer to the descritptive quesion', 8);

-- --------------------------------------------------------

--
-- Table structure for table `done`
--

CREATE TABLE `done` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `done`
--

INSERT INTO `done` (`user_id`, `id`, `type`) VALUES
(8, 4, 'art');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `user_id`, `feed`, `time`) VALUES
(0, 8, 'This is a feed back', '2021-03-29 18:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`user_id`, `id`, `type`) VALUES
(8, 4, 'art'),
(1, 4, 'art'),
(2, 4, 'art'),
(3, 4, 'art'),
(4, 4, 'art'),
(5, 4, 'art'),
(6, 4, 'art'),
(7, 3, 'art');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_1` text NOT NULL,
  `option_2` text NOT NULL,
  `option_3` text NOT NULL,
  `option_4` text NOT NULL,
  `answer` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`q_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `creator_id`) VALUES
(1, 'mcq all tags question', 'option 1', 'option 2', 'option 3', 'option 4', 1, 13),
(2, 'mcq question 2', '1', '2', '3', '4', 2, 13),
(3, 'all tags mcq 2', 'op 1', 'op 2', 'op 3', 'op 4', 2, 13),
(4, 'no tags', 'op1', 'op2', 'op3', 'op4', 4, 13),
(5, 'quesion 1', '1', '23', '3', '4', 4, 13),
(6, 'geography', '1', '2', '3', '4', 1, 13),
(7, 'quion2', '1', '1', '1', '1', 1, 13),
(8, 'df', '1', '2', '2', '2', 1, 13),
(9, 'da', '1', '1', '1', '1', 1, 13),
(10, '1', '1', '1', '1', '1', 1, 13),
(11, '1', '1', '1', '1', '1', 1, 13),
(12, 'mcq Question', 'option 1', 'option 2', 'option 3', 'option 4', 2, 13),
(13, 'Is True = True', 'True', 'False', '', '', 1, 13),
(14, 'True of False from user', 'True', 'False', '', '', 1, 8),
(15, 'As you can see, online businesses are becoming more and more concerned about the UI of their respective websites to provide a better user experience and generate better ROI ', 'True', 'False', '', '', 1, 8),
(16, 'As you can see, online businesses are becoming more and more concerned about the UI of their respective websites to provide a better user experience and generate better ROI ', 'True', 'False', '', '', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `user_id` int(11) NOT NULL,
  `number` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `q_id` int(11) NOT NULL,
  `q_type` varchar(20) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`q_id`, `q_type`, `tag`) VALUES
(12, 'mcq', 'Geography'),
(12, 'mcq', 'Maths'),
(12, 'mcq', 'Physics'),
(12, 'mcq', 'History'),
(13, 'mcq', 'General_Science'),
(13, 'mcq', 'Literature'),
(13, 'mcq', 'PrevYearQuestion'),
(13, 'mcq', 'Reasoning'),
(13, 'mcq', 'Aptitude'),
(1, 'art', 'Geography'),
(1, 'art', 'Maths'),
(1, 'art', 'Physics'),
(2, 'art', 'Geography'),
(2, 'art', 'Maths'),
(2, 'art', 'Physics'),
(2, 'art', 'English'),
(3, 'art', 'General_Science'),
(3, 'art', 'Literature'),
(3, 'art', 'PrevYearQuestion'),
(3, 'art', 'Reasoning'),
(3, 'art', 'Aptitude'),
(4, 'art', 'General_Science'),
(4, 'art', 'Literature'),
(4, 'art', 'PrevYearQuestion'),
(4, 'art', 'Reasoning'),
(14, 'mcq', 'Geography'),
(14, 'mcq', 'English'),
(9, 'descq', 'Geography'),
(9, 'descq', 'Maths'),
(15, 'mcq', 'Geography'),
(15, 'mcq', 'Maths'),
(15, 'mcq', 'Physics'),
(16, 'tf', 'English'),
(16, 'tf', 'Economy');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`user_id`, `id`, `type`) VALUES
(8, 4, 'art');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `description` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`description`, `time`, `creator_id`) VALUES
('A third update from Lokesh', '2021-03-29 17:04:25', 13),
('Fourth update from admin', '2021-03-29 17:04:34', 13),
('This is new update from admin 12', '2021-03-29 10:27:48', 13),
('Yet Another update from lokesh (2)', '2021-03-29 17:04:14', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` char(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `biodata` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `city`, `state`, `zipcode`, `email`, `dob`, `biodata`, `password`, `user_type`, `age`) VALUES
(8, 'Lokesh', '', 'Chikkula', 'avpally', 'Tel', '506349', 'lokeshchikkula2000@gmail.com', '2019-03-03', 'IIT kharagpur', 'Kfc@7890', 'creator', 2),
(13, 'Lokesh', '', 'Chikkula', 'avp', 'Tel', '506349', 'lokeshchikkula2000a@gmail.com', '2000-02-04', 'amdin', 'Kfc@7890', 'admin', 21),
(15, 'lokesh1', '', 'chikkula2', 'avp2', 'df2', '506349', 'lokeshchikkula2001@gmail.com', '2000-02-03', 'aflkhjda', 'Kfc@7890', 'user', 21),
(16, 'dkf', '', 'kasdj', 'kasf', 'ka', '506349', 'a@b.gmail.com', '2019-02-01', 'daf', 'Kfc@7890', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `descq`
--
ALTER TABLE `descq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`user_id`,`number`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`description`,`time`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `descq`
--
ALTER TABLE `descq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
