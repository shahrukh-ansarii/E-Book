-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 08:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(10, 'Divergent', 'divergent', 15, 'divergent.jpg', 'Veronica Roth', 4999, 'first', 0x446976657267656e742e706466),
(11, 'The Bourne Identity', 'the bourne identity', 15, 'the bourne identity.jpg', 'Robert Ludlum', 6999, 'second', 0x54686520426f75726e65204964656e746974795f2041204e6f76656c202820504446447269766520292e706466),
(12, 'The Princess Bride', 'the princess bride', 15, 'the princess bride.jpg', 'William Goldman', 4999, 'first', 0x5468655f5072696e636573735f42726964652e706466),
(13, 'Mockingjay', 'mockingjay', 15, 'Mockingjay.jpg', 'Suzanne Collins', 7999, 'fourth', 0x6d6f636b696e675f6a61792e706466),
(14, 'Ready Player One', 'ready player one', 15, 'ready player one.jpg', 'Ernest Cline', 4999, 'fifth', 0x72656164795f706c617965725f6f6e652e706466),
(15, 'American Gods', 'american gods', 16, 'American_gods.jpg', 'Bryan Fuller & Michael Green', 1999, 'first', 0x416d65726963616e20476f64732e706466),
(16, 'Bring Up the Bodies', 'Bring Up the Bodies', 17, 'bring up the bodies.jpg', 'Hilary Mantel', 3999, 'third', 0x4272696e672055702074686520426f646965732e706466),
(17, 'Dracula', 'dracula', 18, 'dracula.jpg', 'Bram Stoker', 5999, 'fourth', 0x64726163756c612e706466),
(18, 'Bloodline', 'bloodline', 19, 'Bloodline.jpg', 'Todd Kessler & Glenn Kessler', 4999, 'first', 0x426c6f6f646c696e652e706466),
(19, 'Gone-girl', 'gone-girl', 19, 'gone-girl..jpg', 'Gillian Flynn', 4999, 'first', 0x676f6e652d6769726c2e2e6a7067),
(20, 'In The Woods', 'In_the_woods', 19, 'In_the_woods.jpg', 'Rob Marshall', 5999, 'second', 0x496e5f7468655f776f6f64732e706466),
(21, 'The Silent Patient', 'The silent patient', 19, 'The silent patient.jpg', 'Alex Michaelides', 4999, 'third', 0x5468652073696c656e742070617469656e742e706466),
(22, 'The Big Sleep', 'the_big_sleep', 19, 'the_big_sleep.jpg', 'Howard Hawks', 4999, 'first', 0x7468655f6269675f736c6565702e706466),
(23, 'The Hobbit', 'the hobbit', 16, 'The Hobbit.jpg', 'Peter Jackson', 4999, 'second', 0x54686520486f626269742e706466),
(24, 'The Way of Kings', 'The Way of Kings', 16, 'The Way of Kings.jpg', 'Brandon Sanderson', 4999, 'first', 0x54686520576179206f66204b696e67732e706466),
(25, 'Game Of Thrones', 'game of thrones', 16, 'game of thrones.jpg', 'David Benioff', 9999, 'sixth', 0x67616d65206f66207468726f6e65732e706466),
(26, 'The Lord of the Rings', 'The Lord of the Rings', 16, 'lord of the rings.jpg', 'Peter Jackson', 8999, 'fifth', 0x546865204c6f7264206f66207468652052696e67732e706466),
(27, 'The Red Tent', 'The_red_tent', 17, 'The_red_tent.jpg', 'Roger Young', 6999, 'second', 0x5468655f7265645f74656e742e747874),
(28, 'War And Peace', 'War_and_Peace', 17, 'War_and_Peace.jpg', 'Leo Tolstoy', 7999, 'first', 0x5761725f616e645f50656163652e706466),
(29, 'Frankenstein', 'frankenstein', 18, 'frankenstein.jpg', 'Mary Shelley', 5999, 'first', 0x6672616e6b656e737465696e2e706466),
(30, 'Pet Sematary', 'Pet Sematary', 18, 'Pet Sematary.jpg', 'Stephen King', 4999, 'second', 0x5065742d53656d61746172792e706466),
(31, 'The Shining', 'The-shining', 18, 'The Shining.jpg', 'Stephen King', 4999, 'second', 0x5468652d5368696e696e672e706466),
(32, 'Bird Box', 'Bird Box', 18, 'Bird Box.jpg', 'singer Josh Malerman', 4999, 'first', 0x4269726420426f782e706466),
(33, 'Karacahi Lingo', 'karachi Lingo', 17, 'fiction.jpg', 'Война и мир  (Voyna i mir)', 4999, 'first', 0x5761725f616e645f50656163652e706466),
(34, 'Wolf Hall', 'Wolf Hall', 17, 'Wolf Hall.jpg', 'Hilary Mantel', 9999, 'eight', 0x576f6c662048616c6c2e706466),
(35, 'A Tale of Two Cities', 'A Tale of Two Cities', 17, 'A Tale of Two Cities.jpg', 'Talha Anjum & Talhah Yunus', 24999, 'first', 0x412054616c65206f662054776f204369746965732e706466),
(36, 'Karachi Mera ', 'karachi mera', 15, 'karachi mera.jpg', 'Talha Anjum aka  (King of Melody)', 84999, 'second', 0x6b6172616368692d6d6572612e706466);

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
(15, 'Action ', 'Action fiction is a form of genre fiction whose subject matter is characterized by emphasis on exciting action sequences. ... It includes martial arts action, extreme sports action, car chases and vehicles, suspense action, and action comedy, with each focusing in more detail on its own type and flavor of action.', 'action.jpg'),
(16, 'Fantasy', 'Another description of a Fantasy Novel is any book that contains unrealistic settings, or magic, often set in a medieval universe, or possibly involving mythical beings or supernatural forms as a primary element of the plot, theme, or setting. ... Fantasy usually describes those stories that could not happen in real life.', 'fantasy.jpg'),
(17, 'Historical Fiction', 'Historical fiction is a literary genre that reconstructs past events in fictional stories. Common characteristics of this writing genre are the inclusion of historical events or historical people, invented scenes and dialogue,', 'fiction.jpg'),
(18, 'Horror', 'Horror story, a story in which the focus is on creating a feeling of fear. Such tales are of ancient origin and form a substantial part of the body of folk literature. They can feature supernatural elements such as ghosts, witches, or vampires, or they can address more realistic psychological fears.', 'horror.jpg'),
(19, 'Mystery', 'Mystery fiction is a genre of fiction that usually involves a mysterious death or a crime to be solved. ... \"Mystery fiction\" can be detective stories in which the emphasis is on the puzzle or suspense element and its logical solution such as a whodunit.', 'mystery.jpg');

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
(2, 'Story writting', 'demo', '2021-01-18', '2021-01-26', '3 hours', '25000');

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
(3, 'Hassan ', 'hassan@gmail.com', '98988787', 'nkjhjh                                               ', 1, 2147483647),
(4, 'shahrukh', 'ahmed@gmil.com', 'mkjiu897', 'nbjhgjhyg                       \r\n                        ', 2, 2147483647),
(5, 'Shumail', 'shumail@gmail.com', 'shuamii123', 'House #405', 2, 2147483647);

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
(5, 8, 11, 'The Bourne Identity', 6999, 2),
(6, 8, 12, 'The Princess Bride', 4999, 1),
(7, 8, 15, 'American Gods', 1999, 0),
(8, 9, 11, 'The Bourne Identity', 6999, 1),
(9, 10, 11, 'The Bourne Identity', 6999, 1),
(10, 10, 13, 'Mockingjay', 7999, 0),
(11, 13, 11, 'The Bourne Identity', 6999, 1),
(12, 14, 11, 'The Bourne Identity', 6999, 1),
(13, 15, 15, 'American Gods', 1999, 1),
(14, 16, 11, 'The Bourne Identity', 6999, 1),
(15, 18, 12, 'The Princess Bride', 4999, 1),
(16, 19, 12, 'The Princess Bride', 4999, 1),
(17, 21, 12, 'The Princess Bride', 4999, 1),
(18, 22, 11, 'The Bourne Identity', 6999, 1);

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
(7, 21500, '2021-01-21', 1),
(8, 18997, '2021-01-21', 1),
(9, 6999, '2021-01-22', 1),
(10, 6999, '2021-01-22', 1),
(11, 0, '2021-01-22', 1),
(12, 0, '2021-01-22', 1),
(13, 6999, '2021-01-22', 1),
(14, 6999, '2021-01-22', 1),
(15, 1999, '2021-01-22', 1),
(16, 6999, '2021-01-22', 1),
(17, 0, '2021-01-22', 1),
(18, 4999, '2021-01-22', 1),
(19, 4999, '2021-01-22', 1),
(20, 0, '2021-01-22', 1),
(21, 4999, '2021-01-22', 1),
(22, 6999, '2021-01-22', 1);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `books_on_membership`
--
ALTER TABLE `books_on_membership`
  MODIFY `b_o_m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `memb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
