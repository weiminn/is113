SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `sis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sis`;

CREATE TABLE `contact` (
  `email` varchar(256) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `tel` char(16) NOT NULL,
  `address` varchar(2058) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `contact` (`email`, `name`, `tel`, `address`) VALUES
('ace@gmail.com', 'Ace Ang', '-', '-'),
('bay@live.com', 'Bay Ming Chun', '91234567', '-'),
('chan@smu.edu.sg', 'Chan Lay Keng', '98765432', 'Catnip Park'),
('dan@smu.edu.sg', 'Danny Fong', '95566798', '80 Stamford Rd');


ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
