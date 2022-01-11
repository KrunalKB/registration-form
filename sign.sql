-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2022 at 12:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(255) NOT NULL,
  `firstname` varchar(11) DEFAULT NULL,
  `lastname` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `country` varchar(11) DEFAULT NULL,
  `state` varchar(11) DEFAULT NULL,
  `city` varchar(11) DEFAULT NULL,
  `zip` int(8) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `gender`, `country`, `state`, `city`, `zip`, `register_date`) VALUES
(1, 'krunal', 'bhimajiyani', 'krunal@gmai', 'krunal@123', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-06 18:30:00'),
(75, '', '', '', '$2y$10$eBmaOLLqMjo8Slrn86hd6.d4GF4WwLrmC6OVFmddghoIWIm12yfRm', '', '', '', '', '', 0, '2022-01-06 18:30:00'),
(76, 'Krunal', 'Bhimajiyani', 'xyz13451@gmail.com', '$2y$10$FyuU8bzbhGmP03RN9mhIB.v70WfenfMoHCLco6/zH1nPHqvxC7X2e', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(77, 'Krunal', 'Bhimajiyani', 'xyz1351@gmail.com', '$2y$10$rOMc40oXkRmq2Wgi6e27Q.c3KsU.sAeLOGvysj/OLp1ZHay7zIriG', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(88, 'Krunal', 'Bhimajiyani', 'xyz01@gmail.com', '$2y$10$GxKrbDGPhEd8N178nax64ePbvnRwpxgmTTGM2yj1GJ7jbvtcXnTzG', 'chital road, giriraj nagar street no-4,', '', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(95, 'Mahek', 'Kalola', 'mk28@gmail.com', '$2y$10$ln/39v82HmJ10qhUaMjC5e5L70RzNs.IhMiMfTHmkdGvzBw5/N3cq', 'chital road, giriraj nagar street no-4,', 'female', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(96, 'Krunal', 'Bhimajiyani', 'xi11@gmail.com', '$2y$10$HDRv4YfOjRssvL6DEPM4V.lgal81LBexWqoatQIlbxovnaIJetlI6', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(97, 'Krunal', 'Bhimajiyani', 'xpz11@gmail.com', '$2y$10$W1qg0WXPQ/LF3zkkVYq5ROppzpC.F1rjuFYstbqu58foRYjTcqRYS', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(98, 'Krunal', 'Bhimajiyani', 'xyz156@gmail.com', '$2y$10$C1uRL3g1VdOIL58Z3oVMbuLXzvhNqgtQBL8tOd07SidatHriXWZKa', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-06 18:30:00'),
(99, 'Krunal', 'Bhimajiyani', 'xyz11@hmcom.pk', '$2y$10$EeL34JudiXSOO9NXvjwEU.b9R89FiKff9i7aYQ67fd/oXHZ8fTJRG', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-07 07:40:05'),
(100, 'Krunal', 'Bhimajiyani', 'xyhdbvhd11@gmail.com', '$2y$10$M7r1KKL2g11hC6d/VYG9p.MHVTJNMtHf6B23pUCbddvuiRlbs.DKe', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-07 08:42:59'),
(101, 'Krunal', 'Bhimajiyani', 'xyz11@gmujdnail.com', '$2y$10$Lmu6dO6opR5RG86as9TsAenTXSFIAtcYEVEc6hzTqtVdoVoPWkmHC', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-07 10:00:16'),
(102, 'hello', 'hii', 'hello@gmail.com', '$2y$10$0zI8osd8R1xQJk5EX5HHJ.dprRggZ3VqLQ.d.cGYJHRLzM1yQkSgW', 'xjbcschnc', 'female', 'India', 'Gujarat', 'Baroda', 256321, '2022-01-08 14:47:09'),
(103, 'abc', 'Bhimajiyani', 'abc@gmail.com', '$2y$10$RBVv3zqzZUzoUqQkim25heQyut70ALT1C/P0kyf2nIoLlmVm4kfM2', 'chital road, giriraj nagar street no-4,', 'female', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-09 14:58:32'),
(104, 'Krunal', 'Bhimajiyani', 'xyz11@gmail.on', '$2y$10$oJKPCgmh9weVLzioZ7U9oevAQIsN75Uqp2c4uR3/3Xa09d22vlYGu', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-09 19:00:55'),
(105, 'Krunal', 'Bhimajiyani', 'xyz11@gmail.com', '$2y$10$Y5Igh0M7F3TMP48jzKEc0eAFjBGiYgTp1F2zV5d4fMqbvznJ.L/Y6', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-10 04:23:09'),
(106, 'Krunal', 'Bhimajiyani', 'xy90@gmail.com', '$2y$10$RyV8tzKEVOqrsIbI1l9HQOsKQ5T8CHLX1XYDJgw.hV7oGqWzU9ieG', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-10 05:16:43'),
(107, 'krunal', 'bhimajiyani', 'krunal265@gmail.com', '$2y$10$ndfRPlZf8cxDgK77IypX5uMlxkU80Fq7dxcsmyP8b8wP362TxLuYK', 'Amreli,gujarat', '', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-10 10:23:02'),
(108, 'krunal', 'bhimajiyani', 'krunal26895@gmail.com', '$2y$10$wnxBM6WUlWKSvCxmmJwute4wn18Tl5TB86t/4JyOLlo4IjzKmS3xi', 'Amreli,gujarat', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-10 10:23:23'),
(109, 'Krunal', 'Bhimajiyani', 'abcd11@gmail.com', '$2y$10$poSN1sFF8YHuHUu4oESm5e9UZEea3xA8s24XZAxxOC4HVLMni.ZfS', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-11 07:11:19'),
(110, 'Krunal', 'Bhimajiyani', 'xyz171@gmail.com', '$2y$10$C91jzQBLEhnPb1f5b.FdkOa35lijoM3BS/YjDo8ulL3YfITvu71kS', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-11 07:19:41'),
(111, 'Krunal', 'Bhimajiyani', 'xyz1081@gmail.com', '$2y$10$DLgprBm/wQw6pzHJN5NdZuI37jh5IqAxyWb/FBz5qRfCPb5.dDsPu', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-11 07:21:25'),
(112, 'Krunal', 'Bhimajiyani', 'xuhdj11@gmail.com', '$2y$10$iIfWPAnf/xq0sOkYWZHQqOczpiWXg91ulYQwok..Iu/MbIjWxtxIu', 'chital road, giriraj nagar street no-4,', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-11 08:35:04'),
(113, 'Krunal', 'Bhimajiyani', 'django@gmail.com', '$2y$10$1N2esKBtQ7VC/aAONmoBj.fJABAXMbepSKtfNhiSW3Kk2/AfJnKHC', 'pune', 'male', 'India', 'Gujarat', 'Ahmedabad', 365601, '2022-01-11 09:08:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
