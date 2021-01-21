-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:57 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'shahrukh', 'shahrukh@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_image` varchar(500) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_edition` varchar(50) NOT NULL,
  `book_pdf` varbinary(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_title`, `cat_id`, `book_image`, `book_author`, `book_price`, `book_edition`, `book_pdf`) VALUES
(3, 'Abc', 'unknown', 14, 'banner4.jpg', 'John', 2500, 'First', 0x526576696577446f63756d656e74202831292e646f6378),
(9, 'You see', 'Let us D', 10, '12.jpg', 'Larkin', 3500, '3rd', 0x50726f66696c6520416c706861203035204d617920323031362e706466);

-- --------------------------------------------------------

--
-- Table structure for table `books_on_membership`
--

CREATE TABLE `books_on_membership` (
  `b_o_m_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `memb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(500) NOT NULL,
  `cat_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`, `cat_image`) VALUES
(10, 'Historical Fiction', 'abc d', 'banner3.jpg'),
(13, 'History', 'lorum ipsem', 'download (1).jfif'),
(14, 'Horror', 'abcd', 'download (2).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `city2`
--

CREATE TABLE `city2` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city2`
--

INSERT INTO `city2` (`city_id`, `city_name`) VALUES
(1, 'karachi'),
(2, 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `comp_id` int(11) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_description` varchar(200) NOT NULL,
  `comp_startDate` date NOT NULL,
  `comp_endDate` date NOT NULL,
  `comp_duration` varchar(50) NOT NULL,
  `comp_prize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`comp_id`, `comp_title`, `comp_description`, `comp_startDate`, `comp_endDate`, `comp_duration`, `comp_prize`) VALUES
(1, 'Essay', 'abcd', '2021-01-16', '2021-01-27', '3 hours', '20000'),
(2, 'Story writting', 'demo', '2021-01-18', '2021-01-26', '3 hours', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_password` varchar(50) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `cus_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_address`, `city_id`, `cus_contact`) VALUES
(1, 'ali', 'ali@gmail.com', '98878', 'NJKHUKH                       \r\n                        ', 1, 2147483647),
(2, 'Aisar', 'AISAR@GMAIL.COM', '987878', 'jkhujhuh                       \r\n                        ', 1, 2147483647),
(3, 'Hassan Kamal', 'hassan@gmail.com', '98988787', 'nkjhjh                       \r\n                        ', 1, 2147483647),
(4, 'shahrukh', 'ahmed@gmil.com', 'mkjiu897', 'nbjhgjhyg                       \r\n                        ', 2, 2147483647),
(5, 'Shumail', 'shumail@gmail.com', 'shuamii123', 'House #401 Sec. 7/F Al-Muslimabad', 2, 2147483647),
(6, 'Shumail', 'shumail@gmail.com', 'shuamii123', 'House #401 Sec. 7/F Al-Muslimabad', 2, 2147483647),
(7, 'Shumail', 'shumail@gmail.com', 'shuamii123', 'House #401 Sec. 7/F Al-Muslimabad', 2, 2147483647),
(8, 'Asher', 'asher@gmail.com', 'asher123', '     house 123                  \r\n                        ', 2, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `o_id`, `book_id`, `book_name`, `book_price`, `book_quantity`) VALUES
(1, 1, 3, 'Abc', 2500, 3),
(2, 1, 9, 'You see', 3500, 4),
(3, 7, 3, 'Abc', 2500, 3),
(4, 7, 9, 'You see', 3500, 4);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `memb_id` int(11) NOT NULL,
  `memb_name` varchar(100) NOT NULL,
  `memb_discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`memb_id`, `memb_name`, `memb_discount`) VALUES
(1, 'Gold', '70%'),
(2, 'Silver', '50%'),
(3, 'Bronze', '25%');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `o_totalPrice` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `cus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_totalPrice`, `o_date`, `cus_id`) VALUES
(1, 0, '2021-01-21', 1),
(7, 21500, '2021-01-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `parti_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `fileUploaded` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `win_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE;

--
-- Indexes for table `books_on_membership`
--
ALTER TABLE `books_on_membership`
  ADD PRIMARY KEY (`b_o_m_id`),
  ADD UNIQUE KEY `book_id` (`book_id`),
  ADD UNIQUE KEY `memb_id` (`memb_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city2`
--
ALTER TABLE `city2`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `invoice_orders_fk` (`o_id`),
  ADD KEY `invoice_books_fk` (`book_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`memb_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `cus_id` (`cus_id`) USING BTREE;

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`parti_id`),
  ADD KEY `comp_fk` (`comp_id`),
  ADD KEY `cus_fk` (`cus_id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`win_id`),
  ADD KEY `parti_fk` (`part_id`),
  ADD KEY `compId_fk` (`comp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books_on_membership`
--
ALTER TABLE `books_on_membership`
  MODIFY `b_o_m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `city2`
--
ALTER TABLE `city2`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer2`
--
ALTER TABLE `customer2`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `memb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `parti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `win_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books_on_membership`
--
ALTER TABLE `books_on_membership`
  ADD CONSTRAINT `bom_books_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bom_memb_fk` FOREIGN KEY (`memb_id`) REFERENCES `membership` (`memb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer2`
--
ALTER TABLE `customer2`
  ADD CONSTRAINT `customer2_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city2` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_books_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_orders_fk` FOREIGN KEY (`o_id`) REFERENCES `orders` (`o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk` FOREIGN KEY (`cus_id`) REFERENCES `customer2` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_compId` FOREIGN KEY (`comp_id`) REFERENCES `competition` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_custId` FOREIGN KEY (`cus_id`) REFERENCES `customer2` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `compId_fk` FOREIGN KEY (`comp_id`) REFERENCES `competition` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parti_fk` FOREIGN KEY (`part_id`) REFERENCES `participants` (`parti_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
