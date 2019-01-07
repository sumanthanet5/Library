-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 12:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `id` int(11) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(20) NOT NULL,
  `books_price` varchar(20) NOT NULL,
  `books_qty` varchar(20) NOT NULL,
  `available_qty` varchar(20) NOT NULL,
  `librarian_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(7, 't', './books_images/d1263eab6f8d92e8e259c2fb32abbc74black-wallpaper-to-set-as-background-22.jpg', 't', 't', '1-3-2018', '450', '45', '45', ' kewal');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `student_enrollment` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_sem` varchar(50) NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_issue_date` varchar(50) NOT NULL,
  `books_return_date` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`) VALUES
(36, '4563', 'rajumahato', '5', '9844710791', 'raju@gmail,com', 'k', '03-12-18', '', 'raju'),
(37, '777', 'harilama', '5', '9847512663', 'hari@gmail.com', 'p', '03-12-18', '', 'hari');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

CREATE TABLE `librarian_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'kewal prasad', 'mahato', 'kewal', 'kewal', 'kewal@gmail.com', '9844710791');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `read1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dname`, `title`, `msg`, `read1`) VALUES
(1, 'kewal', ' hari', 'hiiiiiiiiiiiiiiiiiiiii', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'n'),
(2, 'kewal', ' hari', 'zsdfg', 'xcvbnm', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollmentno` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollmentno`, `status`) VALUES
(1, 'hari', 'lama', 'hari', 'hari', 'hari@gmail.com', '9847512663', '5', '777', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
