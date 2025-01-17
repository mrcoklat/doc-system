-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 08:20 AM
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
(1, 'F-1737032583', '2025-01-16 13:03:03', 'Dieuwke Sarah', 'Sir', 'Lorem', '<p>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</p><p class=\"ql-indent-1\"><br></p><p class=\"ql-indent-1\">Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</p><p class=\"ql-indent-1\"><br></p><p><strong>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</strong></p><p><br></p><p><em>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</em></p><p><br></p><p><u>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</u></p><p><br></p><p><s>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</s></p><p><br></p><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</li></ol><p><br></p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</li></ol><p><br></p><ol><li data-list=\"unchecked\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</li></ol><p><br></p><ol><li data-list=\"checked\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lorem ipsum odor amet, consectetuer adipiscing elit. Quisque leo elementum commodo mattis libero nostra. Dis leo netus primis volutpat augue. Sed phasellus leo quisque eu congue conubia vulputate donec potenti. Ante quam convallis neque viverra vehicula nisl. Pellentesque a at, eget inceptos etiam quis. Curabitur auctor molestie ante eleifend; enim laoreet suscipit. Ante cubilia imperdiet ligula himenaeos posuere. Aptent egestas ac sit suscipit placerat odio!</li></ol><p><br></p><p><a href=\"https://loremipsum.io/generator?n=1&t=p\" rel=\"noopener noreferrer\" target=\"_blank\">Lorem ipsum odor amet, consectetuer adipiscing elit.</a></p><p><br></p><p><img src=\"http://localhost/sg77/doc-system/doc_img/F-1737032583_1.png\"></p><p><br></p><iframe class=\"ql-video\" frameborder=\"0\" allowfullscreen=\"true\" src=\"https://www.youtube.com/embed/jTJvyKZDFsY?showinfo=0\"></iframe><p><br></p><p>Lorem ipsum odor amet, consectetuer adipiscing elit.</p><p class=\"ql-align-center\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p><p class=\"ql-align-right\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p><p class=\"ql-align-justify\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p><p class=\"ql-align-justify\"><br></p><table class=\"ql-table-better\"><temporary class=\"ql-table-temporary\" data-class=\"ql-table-better\"><br></temporary><tbody><tr><td data-row=\"row-pi31\" width=\"72\" class=\"\"><p class=\"ql-table-block\" data-cell=\"cell-fp99\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p></td><td data-row=\"row-pi31\" width=\"72\" class=\"\"><p class=\"ql-table-block\" data-cell=\"cell-m8lr\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p></td></tr><tr><td data-row=\"row-gnlc\" width=\"72\" colspan=\"2\" rowspan=\"1\" class=\"\"><p class=\"ql-table-block ql-align-center\" data-cell=\"cell-metp\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p></td></tr></tbody></table><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span class=\"ql-size-small\">Lorem ipsum odor amet, consectetuer adipiscing elit.</span></p><p class=\"ql-align-justify\">Lorem ipsum odor amet, consectetuer adipiscing elit.</p><p class=\"ql-align-justify\"><span class=\"ql-size-large\">Lorem ipsum odor amet, consectetuer adipiscing elit.</span></p><p class=\"ql-align-justify\"><span class=\"ql-size-huge\">Lorem ipsum odor amet, consectetuer adipiscing elit.</span></p>', 'Sincerely');

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
