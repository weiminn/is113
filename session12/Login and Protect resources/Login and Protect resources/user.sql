SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `user` (
  `username` char(8) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `active` char(1) NOT NULL DEFAULT 'y',
  `usertype` char(8) NOT NULL DEFAULT 'normal'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `password_hash`, `active`, `usertype`) VALUES
('zack', '$2y$10$EKPRz0VyZPumX63D7Z768ORzQMPNO4wg00AChOMUwKi/wOp1f7SlK', 'y', 'admin'),
('yew', '$2y$10$bs3aXFCJyYfP7jWljcRjxukiVbhRBLWNSJgTOD/CHWQVgV7hCd0t.', 'y', 'normal'),
('wong', '$2y$10$wD9/9pDxg3/JSavLqszwxuGZ1odhUBCGos8LOlYu0Y4NVuIQEmq1e', 'n', 'admin'),
('tan', '$2y$10$ys8PC5qrBElBGtkU3wwrMOiIQdBkgyQibOzDZRQv1EQrJ6H1YtnYy', 'n', 'normal');


ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
