-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraryms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(13) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookIsbn` varchar(191) NOT NULL,
  `bookTitle` varchar(191) NOT NULL,
  `bookAuthor` varchar(191) NOT NULL,
  `bookCategory` int(11) NOT NULL,
  `bookYrPub` int(11) NOT NULL,
  `bookCopies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookIsbn`, `bookTitle`, `bookAuthor`, `bookCategory`, `bookYrPub`, `bookCopies`) VALUES
(1, '9789814352871', 'Introduction to Programming with Java', 'Diane Zak', 2, 2011, 10),
(2, '9716560419', 'Turbo C/C++', 'Herbert Schildt', 2, 1992, 9),
(3, '9789814246910', 'Java Programming (From Problem Analysis to Program Design) 3rd Edition', 'D.S. Malik', 2, 2008, 10),
(4, '9789814392976', 'Java Programming (From Problem Analysis to Program Design) 3rd Edition', 'D.S. Malik', 2, 2012, 10),
(5, '9789814253116', 'Java: Data Structures and Algorithm', 'Adam Drozdek', 2, 2008, 10),
(6, '9781285856919', 'Java Programming 8th Edition', 'Joyce Farrell', 2, 2016, 10),
(7, '9781305273764', 'C Programming for the Absolute Beginner 3rd Edition', 'Keith Davenport, Michael Vine', 2, 2015, 10),
(8, '9789810697921', 'Modern Database Management 9th Edition', 'Jeffrey A. Hoffer, Mary B. Prescottz, Heikki Topi', 2, 2009, 10),
(9, '9713700449', 'PASCAL A New Introduction to Computer Science', 'Terrence Pratt', 2, 1990, 10),
(10, '9781138583894', 'Introduction to Python for Science and Engineering', 'David J. Pine', 2, 2019, 10),
(11, '9781118891452', 'Beginning Programming with Python for Dummies', 'John Paul Mueller', 2, 2014, 10),
(12, '9781118910139', 'Computing Fundamentals', 'Faithe Wemper', 2, 2014, 10),
(13, '9788188458813', 'Data Structures and Algorithm using C', 'Nitin Upadhyay', 2, 2015, 10),
(14, '19947060', 'Data Structures for Gujarat Technological University', 'Reema Thareja', 2, 2016, 8),
(15, '9789814352345', 'PHP with MYSQL', 'Don Gosselin, Diana Kokoska, Robert Easterbrooks', 2, 2011, 10),
(16, '9781423901501', 'Javascript 4th Edition', 'Don Gosselin', 2, 2008, 10),
(17, '9781683921660', 'Software Testing (A Self Teaching Introduction)', 'Rajiv Chupra PhD', 2, 2018, 10),
(18, '9789386314697', 'Programming with C++', 'Anju Gautam', 2, 2017, 10),
(19, '9780672336843', 'SamsTeachYourself C# 5.0', 'Scott J. Dorman', 2, 2013, 10),
(20, '9789810697464', 'C How to Program 5th Edition', 'P.J. Deitel, H.M. Deitel', 2, 2009, 10),
(21, '9781682514267', 'Cyber Security', '3G E-Learning LLC, USA', 2, 2018, 10),
(22, '9781119174219', 'Software Technology 10 years of Innovation in IEEE Computer', 'Mike Hinchey', 2, 2018, 10),
(23, '9781680956825', 'Object Oriented Programming', '3G E-Learning LLC, USA', 2, 2017, 10),
(24, '9781119161837', 'The Complete Software Project Manager', 'Anna P. Murray', 2, 2016, 10),
(25, '9781733518215', 'More Effective Agile (A Roadmap for Software Leader)', 'Steve McConell', 2, 2019, 10),
(26, '9780367263225', 'Gender and Rights ', 'G.N. Devy', 2, 2021, 10),
(27, '9780071085786', 'Understanding Psychology 9th Edition', 'Robert S. Feldman', 2, 2009, 10),
(28, '9780071315753', 'Psychology (An Introduction) 11th Edition', 'Benjamin B. Lahey', 2, 2012, 10),
(29, '9781680955545', 'Child Psychology', '3G E-Learning LLC, USA', 2, 2017, 10),
(30, '791448789', 'Immemorial Silence', 'Karmen MacKendrick', 2, 2001, 10),
(31, '9781119255437', 'Philosophy and Science Fiction', 'Peter A. French, Howard K. Wettstein', 2, 2015, 10),
(32, '9781119067078', 'Thinking Philosophically (An Intoduction to the Great Debates)', 'David Roochnik', 2, 2016, 10),
(33, '9781483356853', 'journalism NEXT (A Practical Guide to Digital Reporting and Publishing) 3rd Edition ', 'Mark Briggs', 2, 2016, 10),
(34, '9781682514191', 'Web Engineering', '3G E-Learning LLC, USA', 2, 2018, 10),
(35, '9781682855539', 'Behavioral Science', 'Clyde Johnson', 2, 2018, 10),
(36, '9781412928816', 'Understanding Cognitive Development', 'Maggie McGonigle', 2, 2015, 10),
(37, '9781547206988', 'Think Smart Not Hard', 'Roy Huff', 2, 2017, 10),
(38, '9781118468111', 'Counseling Psychology', 'Ruth Chu-Lien Chao', 2, 2015, 10),
(39, '9781544393995', 'The Psychology of Sex and Gender', 'Jennifer K. Bosson, Camille E. Buckner, Joseph A. Bandello', 2, 2019, 10),
(40, '9781260083538', 'Theories of Personality 9th Edition', 'Jess Feist, Gregory J. Feist, Tomi-Ann Roberts', 2, 2018, 10),
(41, '9781635498271', 'Cognitive Psychology', 'Albert Kelly', 2, 2018, 10),
(42, '9781138670457', 'Fundamentals of Cognition 3rd Edition', 'Michael W. Eysenek, Marc Brysbaert', 2, 2018, 10),
(43, '9781305582088', 'Business Ethics 9th Edition', 'William H. Shaw', 2, 2017, 10),
(44, '9781635494136', 'Data Mining', 'Julio Bolton', 2, 2017, 10),
(45, '9781337277938', 'Web Design Introductory', 'Jennifer T. Campbell', 2, 2018, 10),
(46, '9780071311748', 'Computer Graphics', 'Dr. A.N.Sinha, Arun Dayal Udai', 2, 2008, 10),
(47, '9789810695958', 'Artificial Intellegence 6th Edition', 'George F. Luger', 2, 2009, 10),
(48, '9781119650669', 'Security Fundamentals', 'Crystal Panek', 2, 2020, 10),
(49, '9789352694945', 'Android Development', 'Anjo Gautam', 2, 2020, 10),
(50, '9780128498903', 'Parallel Programming Concepts and Practice', 'Bertil Schmidt, Jorge Gonzales-Dominguez, Christian Hundt, Moritz Schlarb', 2, 2018, 10),
(51, '9789351154075', 'Marketing Specialist', '3G E-Learning FZ LLC', 2, 2015, 10),
(52, '9781412961578', 'Special Marketing 4th Edition', 'Nancy R. Lee, Philip Kotler', 2, 2011, 10),
(53, '9789814296694', 'Principles of Marketing', 'Kurtz Boone', 2, 2011, 10),
(54, '9781260092127', 'Essentials of Marketing 16th Edition', 'William D. Perreault PhD, Joseph P. Cannon PhD, E. Jerome McCarthy PhD', 2, 2019, 10),
(55, '9780071271080', 'Operations Management', 'William J. Stevenson', 2, 2010, 10),
(56, '9789814441001', 'Total Quality Management 2nd Edition', 'James R. Evans, William M. Lindsay', 2, 2013, 10),
(57, '256092486', 'Motion and Time Study 9th Edition', 'Benjamin Niebel', 2, 1993, 10),
(58, '9781138181854', 'Business Process Management', 'Akhil Kumar', 2, 2018, 10),
(59, '9789814416351', 'The Manufacturing Advantage', 'Nigel Slack', 2, 1991, 10),
(60, '9781680940404', 'Service Marketing', 'Prof. Long Y?ng', 2, 2015, 10),
(61, '9789812533142', 'Introduction to Management 10th Edition', 'John R. Schermerhorn', 2, 2010, 10),
(62, '9780273779773', 'Management 11th Edition', 'Stephen P. Robbins, Mary Coulter', 2, 2013, 10),
(63, '9781260092424', 'Service Management 9th Edition', 'Sanjeev Bordoloi, James A. Fitzsimmons, Mona J. Fitzsimmons', 2, 2019, 10),
(64, '71202315', 'Business Research Methods', 'Cooper Schindler', 2, 2001, 10),
(65, '9781285866383', 'Small Business Management', 'Timothy S. Hatter', 2, 2016, 10),
(66, '9789814670944', 'Fundamentals of Corporate Finance', 'Richard A. Brealey, Stewart C. Myers, Alan J. Marcus', 2, 2015, 10),
(67, '9781133485933', 'Global Business', 'Mike W. Peng Ph.D', 2, 2014, 10),
(68, '9781631578434', 'Moving into the Express Lane', 'Rick Pay', 2, 2018, 10),
(69, '9780857087829', 'Entrepreneur Revolution', 'Daniel Priestley', 2, 2018, 10),
(70, '9781285922065', 'Marketing', 'O.C.Ferell, G. Tomas M. Hult, William Pride', 2, 2013, 10),
(71, '9780749497576', 'The End of Marketing', 'Carlos Gil', 2, 2020, 10),
(72, '9789814626040', 'Marketing in Asia 2nd Edition', 'Roger A. Kerin, Law Geok Theng, Steven W. Hartley, William Rudelius', 2, 2013, 10),
(73, '9781680940008', 'Supply Chain Management', 'Prof. Shui Choo', 2, 2015, 10),
(74, '9781680954531', 'Contemporary Global Marketing', '3G E-Learning LLC, USA', 2, 2017, 10),
(75, '9781984624048', 'Business Finding and Finances 2nd Edition', '3G E-Learning LLC, USA', 2, 2019, 10),
(76, '9788126163533', 'Meat Technology', 'Savita Sinha', 2, 2014, 10),
(77, '9382226214', 'Fish Handling and Processing', 'Erasmus Haan', 2, 2021, 10),
(78, '9789351118862', 'Meat Hygiene and Technology', 'Lakshmi Prasanna Jakka', 2, 2016, 10),
(79, '9789351152347', 'Food Technology', '3G E-Learning FZ LLC', 2, 2014, 10),
(80, '9780749478414', 'Design Management', 'Dr. David Hands', 2, 2018, 10),
(81, '9781984623232', 'Hotel and Restaurant Design', '3G E-Learning LLC, USA', 2, 2019, 10),
(82, '9781285859293', 'Understanding Art', 'Lois Fichner-Rathus', 2, 2017, 10),
(83, '9789386372208', 'Food Packaging Technology', 'Umesh Kumar', 2, 2019, 10),
(84, '9781337554053', 'Graphic Design Solutions', 'Robin Landa', 2, 2019, 10),
(85, '9780190932053', 'First Instruments', 'Nicholas Banman', 2, 2017, 10),
(86, '9781260597738', 'Music an Appreciation 13th Edition', 'Roger Kamien', 2, 2022, 10),
(87, '9781111313234', 'Floral Designing', 'Norah T. Hunter', 2, 2013, 10),
(88, '9789351150312', 'Food Preparation', '3G E-Learning LLC, USA', 2, 2014, 10),
(89, '71168522', 'Thermodynanics', 'Kenneth Wark, Donald E. Richards', 2, 2017, 10),
(90, '9781913029555', 'Dialectic of Pop', 'Agnes Gayraud', 2, 1999, 10),
(91, '9781118990940', 'Music Theory for Dummies', 'Michael Pilhofer', 2, 2019, 10),
(92, '9781405192415', 'Why Music Matters', 'David Hesmondhalgh', 2, 2015, 10),
(93, '9780736060356', 'History of Dance', 'Gayle Kassing', 2, 2013, 10),
(94, '9781118383810', 'The Chemistry of Food', 'Wiley Blackwell', 2, 2007, 10),
(95, '9781635491258', 'Food Safety and Quality', 'Edmund Parker', 2, 2014, 10),
(96, '9781680948769', 'Bakery and Contemporary StartUp', '3G E-Learning FZ LLC', 2, 2017, 10),
(97, '9781285176819', 'Exploring Typography 2nd Edition', 'Rabinowitz Deer', 2, 2018, 10),
(98, '9781631573217', 'Entrepreneurial Selling', 'Vincent Onyenah, Martha Rivera-Pesquera', 2, 2016, 10),
(99, '9780128118160', 'Food Science', 'Mark Gibson', 2, 2017, 10),
(100, '9781645495546', 'Foid Microbiology', 'Garrett Copper', 2, 2018, 10),
(101, '9789814239707', 'Human-Computer Interaction', 'Serengul Smith-Atakan', 2, 2008, 10),
(102, '1972612345120', 'How to Create own Application', 'Zeroone Technologies', 2, 2022, 19),
(105, '1754212506', 'How to Create an Vector', 'Maku', 3, 2022, 10);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id` int(13) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `dateBorrowed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id`, `userID`, `bookID`, `dateBorrowed`) VALUES
(2, 1, 102, '2022-12-19 02:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `bookCategory` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `bookCategory`) VALUES
(1, 'Microsoft Programming C#'),
(2, 'Programming'),
(3, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `pending_book_requests`
--

CREATE TABLE `pending_book_requests` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `dateRequested` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Approved, 2 = Declined'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pending_book_requests`
--

INSERT INTO `pending_book_requests` (`id`, `userID`, `bookID`, `dateRequested`, `status`) VALUES
(1, 1, 72, '2022-12-17 21:34:36', 1),
(2, 1, 14, '2022-12-17 21:53:48', 1),
(3, 1, 14, '2022-12-18 18:47:02', 1),
(4, 1, 102, '2022-12-18 18:56:25', 1),
(5, 1, 102, '2022-12-18 19:04:34', 2),
(6, 5, 14, '2022-12-19 02:27:52', 0),
(7, 5, 2, '2022-12-19 02:27:59', 0),
(8, 5, 14, '2022-12-19 02:33:22', 0),
(9, 1, 14, '2022-12-20 18:54:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `returned_books`
--

CREATE TABLE `returned_books` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `dateReturned` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `returned_books`
--

INSERT INTO `returned_books` (`id`, `userID`, `bookID`, `dateReturned`) VALUES
(1, 1, 72, '2022-12-17 21:41:06'),
(2, 1, 14, '2022-12-17 21:54:28'),
(3, 1, 14, '2022-12-18 18:47:46'),
(4, 1, 14, '2022-12-20 18:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `wbsiteTitle` varchar(160) NOT NULL,
  `wbsiteDesc` varchar(1000) NOT NULL,
  `wbsiteHeadColor` varchar(160) NOT NULL,
  `wbsiteFavIcon` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `wbsiteTitle`, `wbsiteDesc`, `wbsiteHeadColor`, `wbsiteFavIcon`) VALUES
(1, 'Library Management System', 'Library Management System (LMS) is a software used to manage the catalog of a library. It helps to organize library items, keep track of borrowed and returned items, and allow users to search for items in the library catalog. It can also be used to store digital files and provide access to them. LMS can automate everyday tasks, such as tracking overdue items, calculating late fees, and recording statistics. By streamlining library operations, LMS can help libraries save time and money.<br><br>Made by: Mark Glen Sadang Miguel', '#0f2e66', 'Test.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `studentID` varchar(191) NOT NULL,
  `firstName` varchar(191) NOT NULL,
  `lastName` varchar(191) NOT NULL,
  `coursesec` varchar(191) NOT NULL,
  `birthday` varchar(191) NOT NULL,
  `emailAddress` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `studentID`, `firstName`, `lastName`, `coursesec`, `birthday`, `emailAddress`, `password`) VALUES
(1, 'C21101173', 'Mark Glen', 'Miguel', 'BSIT 2A', '2003-07-27', 'mamiguel@my.cspc.edu.ph', 'makuguren2707'),
(2, 'C21101183', 'Jenny', 'Talamor', 'BSIT 2A', '2022-12-23', 'jetalamor@my.cspc.edu.ph', 'shalashala'),
(3, 'C21101172', 'Mark Glen', 'Sadang Miguel', 'BSIT 2A', '2003-07-27', 'markgmiguel@outlook.com', 'markglen0727'),
(4, 'C21101171', 'Mark Glen', 'Miguel', 'BSIT 2A', '2003-07-27', 'markgmiguel@outlook.com', 'markglen0727'),
(5, 'C21101189', 'Jenny', 'Talamor', 'BSIT 2A', '2022-12-05', 'jetalamor@my.cspc.edu.ph', 'hinatashoyo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookCategory` (`bookCategory`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_book_requests`
--
ALTER TABLE `pending_book_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bookID` (`bookID`);

--
-- Indexes for table `returned_books`
--
ALTER TABLE `returned_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_book_requests`
--
ALTER TABLE `pending_book_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `returned_books`
--
ALTER TABLE `returned_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `bookCategory` FOREIGN KEY (`bookCategory`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pending_book_requests`
--
ALTER TABLE `pending_book_requests`
  ADD CONSTRAINT `bookID` FOREIGN KEY (`bookID`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
