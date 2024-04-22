-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 07:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(10) NOT NULL,
  `admin_user_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_user_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `book_description` longtext NOT NULL,
  `book_price` int(4) NOT NULL,
  `book_img` varchar(50) NOT NULL,
  `book_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`book_id`, `book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES
(1, 'PHP and MySQL Web Development', 'Programming Books', 'This book covers PHP and MySQL web development from basics to advanced topics.', 35, 'book_img/php_mysql_web_dev.jpg', 2147483647),
(2, 'Learning PHP, MySQL & JavaScript', 'Programming Books', 'A comprehensive guide to learning PHP, MySQL, and JavaScript for web development.', 40, 'book_img/learning_php_mysql_js.jpg', 2147483647),
(3, 'PHP and MySQL for Dynamic Web Sites', 'Programming Books', 'This book teaches PHP and MySQL for creating dynamic web sites with practical examples.', 38, 'book_img/php_mysql_dynamic_web_sites.jpg', 2147483647),
(4, 'MySQL Cookbook', 'Programming Books', 'A collection of solutions and examples for MySQL database administration, development, and optimization.', 45, 'book_img/mysql_cookbook.jpg', 2147483647),
(5, 'High Performance MySQL', 'Programming Books', 'This book focuses on techniques for optimizing MySQL databases and achieving high performance.', 50, 'book_img/high_performance_mysql.jpg', 2147483647),
(6, 'To Kill a Mockingbird', 'Literature Books', 'A classic novel by Harper Lee that explores racial injustice and moral growth in the American South.', 20, 'book_img/to_kill_a_mockingbird.jpg', 2147483647),
(7, '1984', 'Literature Books', 'George Orwell\'s dystopian novel that explores themes of totalitarianism, surveillance, and manipulation of truth.', 22, 'book_img/1984.jpg', 2147483647),
(8, 'Pride and Prejudice', 'Literature Books', 'Jane Austen\'s romantic comedy novel that follows the lives of Elizabeth Bennet and Mr. Darcy.', 18, 'book_img/pride_and_prejudice.jpg', 2147483647),
(9, 'The Great Gatsby', 'Literature Books', '\"The Great Gatsby\" is a classic novel written by F. Scott Fitzgerald and published in 1925. Set in the prosperous Jazz Age of the 1920s, the story takes place in the fictional towns of West Egg and East Egg on Long Island, New York.\n\nNarrated by Nick Carraway, a young man from the Midwest, the novel follows his experiences in the lavish and decadent world of the wealthy elite. Nick becomes acquainted with his mysterious neighbor, Jay Gatsby, a self-made millionaire who throws extravagant parties in the hopes of rekindling a romance with his former love, Daisy Buchanan.\n\nAs Nick becomes drawn into Gatsby\'s world of opulence and illusion, he observes the hollow pursuit of the American Dream and the emptiness that lies beneath the glittering facade. Through Gatsby\'s obsession with Daisy and his relentless pursuit of wealth and status, Fitzgerald explores themes of love, ambition, illusion, and the corruption of the American Dream.\n\nThe novel delves into the contrasts between old money and new money, the reckless pursuit of pleasure, and the disillusionment that follows. As the story unfolds, secrets are revealed, relationships unravel, and tragedy strikes, leading to a poignant and tragic conclusion.\n\n\"The Great Gatsby\" is celebrated for its lyrical prose, vivid imagery, and evocative portrayal of the Roaring Twenties. It remains a timeless masterpiece that captures the essence of an era and continues to resonate with readers for its profound exploration of the human condition.', 25, 'book_img/the_great_gatsby.jpg', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`) VALUES
(2, 'Architecture'),
(3, 'Competitive Exam'),
(4, 'Programming'),
(5, 'Web Design'),
(6, 'Business'),
(7, 'Comics'),
(8, 'Sport'),
(9, 'Management'),
(10, 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `contact_id` int(10) NOT NULL,
  `contact_full_name` varchar(100) NOT NULL,
  `contact_actual_id` varchar(100) NOT NULL,
  `contact_mobile_number` varchar(15) NOT NULL,
  `contact_email` varchar(60) NOT NULL,
  `contact_message` longtext NOT NULL,
  `contact_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`contact_id`, `contact_full_name`, `contact_actual_id`, `contact_mobile_number`, `contact_email`, `contact_message`, `contact_time`) VALUES
(1, 'Alan Batr', '', '77470000000', 'alanbatr@gmail.com', 'Awesome Books.', '1554092678'),
(2, 'Mergen Altai', '', '77470000000', 'mergenaltai@gmail.com', 'Best Books', '1554201509'),
(3, 'Saq Kipchak', '', '77470000000', 'saqkipchak@gmail.com', 'Looking For New Books', '1554219813');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(10) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `order_address` varchar(200) NOT NULL,
  `order_pincode` int(20) NOT NULL,
  `order_city` varchar(30) NOT NULL,
  `order_state` varchar(30) NOT NULL,
  `order_mobile` varchar(15) NOT NULL,
  `order_register_id` int(8) NOT NULL,
  `order_total_price` int(50) NOT NULL,
  `order_list_books` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_name`, `order_address`, `order_pincode`, `order_city`, `order_state`, `order_mobile`, `order_register_id`, `order_total_price`, `order_list_books`) VALUES
(1, 'Ulan Batr', 'St. Astana 51', 0, 'Akmola', 'Astana', '77470000000', 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10'),
(2, 'Mete Khan', 'St. Astana 21', 0, 'Akmola', 'Astana', '77470000000', 1, 540000, 'book_id-amout: 15-12, book_id-amout: 16-10');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `register_id` int(10) NOT NULL,
  `register_full_name` varchar(100) NOT NULL,
  `register_user_name` varchar(50) NOT NULL,
  `register_password` varchar(30) NOT NULL,
  `register_contact_number` varchar(15) NOT NULL,
  `register_email` varchar(60) NOT NULL,
  `register_question` varchar(100) NOT NULL,
  `register_answer` varchar(50) NOT NULL,
  `register_profile_picture` varchar(50) NOT NULL DEFAULT 'profile_img/profile_default_picture.png',
  `register_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`register_id`, `register_full_name`, `register_user_name`, `register_password`, `register_contact_number`, `register_email`, `register_question`, `register_answer`, `register_profile_picture`, `register_time`) VALUES
(1, 'Asl Khan', 'Aslkhan', 'asl123', '77470000000', 'aslturkkhan77@gmail.com', 'Which is your Favourite Movie ?', 'redemption', 'profile_img/profile_default_picture.png', ''),
(2, 'Tatar Batr', 'Tatar', 'tatar12345', '77470000000', 'tatarbatr@gmail.com', 'Which is your Favourite Movie ?', '123', 'profile_img/profile_default_picture.png', ''),
(3, 'Xasak Ata', 'Ata', 'ataxasak000', '77470000000', 'xasakata@gmail.com', 'Which is your Favourite Movie ?', 'prometheus', 'profile_img/profile_default_picture.png', ''),
(4, 'MOHAMED', 'sa3doni', '12345678', '01098001021', 'sa3doni@gmail.com', '', 'qqqqqqqq', 'profile_img/profile_default_picture.png', '1713545402'),
(5, 'saad', 'sa3doni', '123456789', '01098001024', 'esraa@gmail.com', '', 'qqqqqqqq', 'profile_img/profile_default_picture.png', '1713547701');

-- --------------------------------------------------------

--
-- Table structure for table `support_team_table`
--

CREATE TABLE `support_team_table` (
  `support_id` int(10) NOT NULL,
  `support_user_name` varchar(30) NOT NULL,
  `support_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_team_table`
--

INSERT INTO `support_team_table` (`support_id`, `support_user_name`, `support_password`) VALUES
(1, 'support', 'support'),
(2, 'support1', 'support2');

-- --------------------------------------------------------

--
-- Table structure for table `user_support_table`
--

CREATE TABLE `user_support_table` (
  `user_support_id` int(10) NOT NULL,
  `user_support_actual_id` int(10) NOT NULL,
  `user_support_email` varchar(255) NOT NULL,
  `user_support_subject` varchar(255) NOT NULL,
  `user_support_message` text NOT NULL,
  `user_support_status` enum('Open','Closed') DEFAULT 'Open',
  `user_support_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_support_table`
--

INSERT INTO `user_support_table` (`user_support_id`, `user_support_actual_id`, `user_support_email`, `user_support_subject`, `user_support_message`, `user_support_status`, `user_support_created_at`) VALUES
(1, 0, 'turkkhan@gmail.com', 'User error', 'Help with with error login system', 'Open', '2024-04-18 18:20:16'),
(2, 0, 'tatar@gmail.com', 'Delivery problem', 'Hi there, help me with delivery', 'Open', '2024-04-18 18:20:16'),
(3, 0, 'aslkhan@gmail.com', 'How to search books', 'Hello, I can not find books', 'Open', '2024-04-18 18:20:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `support_team_table`
--
ALTER TABLE `support_team_table`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `user_support_table`
--
ALTER TABLE `user_support_table`
  ADD PRIMARY KEY (`user_support_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `register_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_team_table`
--
ALTER TABLE `support_team_table`
  MODIFY `support_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_support_table`
--
ALTER TABLE `user_support_table`
  MODIFY `user_support_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
