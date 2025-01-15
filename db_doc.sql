-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 08:15 AM
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
-- Database: `db_doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `id_doc` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(255) NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` mediumtext NOT NULL,
  `closing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`id_doc`, `unique_id`, `date`, `name`, `salutation`, `title`, `paragraph`, `closing`) VALUES
(1, 'F-1736849949', '2025-01-14 10:22:10', 'Dieuwke Sarah', 'Sir', 'New logo suggestion', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><br></p><p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></p><p><br></p><p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p><p><br></p><p><u>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</u></p><p><br></p><p><s>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</s></p><p><br></p><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n</li><li data-list=\"unchecked\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li data-list=\"checked\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li></ol><p><a href=\"link\" rel=\"noopener noreferrer\" target=\"_blank\">link</a></p><p><img src=\"http://localhost/sg77/doc-system/doc_img/F-1736849949_1.png\"></p><p>Lorem </p><p class=\"ql-align-center\">Lorem </p><p class=\"ql-align-right\">Lorem </p><p class=\"ql-align-justify\">Lorem </p><table class=\"ql-table-better\"><temporary class=\"ql-table-temporary\" data-class=\"ql-table-better\"><br></temporary><tbody><tr><td data-row=\"row-n6gi\" width=\"72\" class=\"\"><p class=\"ql-table-block\" data-cell=\"cell-0p31\">Lorem </p></td><td data-row=\"row-n6gi\" width=\"72\" class=\"\"><p class=\"ql-table-block\" data-cell=\"cell-btha\">Lorem </p></td></tr><tr><td data-row=\"row-vp5k\" width=\"72\" colspan=\"2\" rowspan=\"1\" class=\"ql-cell-focused\"><p class=\"ql-table-block ql-align-center\" data-cell=\"cell-q500\">Lorem </p></td></tr></tbody></table><p class=\"ql-align-justify\"><br></p>', 'Sincerely');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`id_doc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
