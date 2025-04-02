-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 04:52 PM
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
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diemdien` varchar(255) NOT NULL,
  `nguoilon` int(255) NOT NULL,
  `treem` int(255) NOT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `ten`, `email`, `sdt`, `diemdien`, `nguoilon`, `treem`, `ngaydi`, `ngayve`) VALUES
(1, 'Ta Bao', 'emailcayacc@gmail.com', '0774132514', 'Phú Quốc', 2, 1, '2023-11-23', '2023-11-29'),
(2, 'Nan ngu', 'nanngu@gmail.com', '37982178', 'Phú Quốc', 2, 1, '2023-11-23', '2023-11-29'),
(3, 'dsa', 't321321@gmail.com', '321321', 'Phú Quốc', 3, 1, '2023-11-23', '2023-12-07'),
(4, 'James Maldonado', 'emailcayasdacc@gmail.com', '0705284321', 'Phú Quốc', 3, 2, '2023-11-10', '2023-12-01'),
(5, 'James Maldonado', 'emailcayasdacc@gmail.com', '0705284321', 'Phú Quốc', 3, 2, '2023-11-10', '2023-12-01'),
(6, '1321321', 'sewqewq@gmail.com', '0705284770', 'Phú Quốc', 3, 1, '2023-12-04', '2023-12-15'),
(7, '231', 'sewqewq@gmail.com', '0705284770', 'Phú Quốc', 3, 1, '2023-12-21', '2023-12-30'),
(8, 'phuc va nan', 'phucnanngu@gmail.com', '327189732', 'Phú Quốc', 3, 1, '2023-12-06', '2023-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `gioithieu` text NOT NULL,
  `ngaydem` varchar(255) NOT NULL,
  `songuoi` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `giatour` varchar(255) NOT NULL,
  `hinhanh` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `tieude`, `gioithieu`, `ngaydem`, `songuoi`, `diadiem`, `giatour`, `hinhanh`) VALUES
(7, 'Tour Hạ Long Teambuilding 3 ngày 2 đêm từ Hà Nội', ' Đến với Vịnh Hạ Long, du khách không chỉ được thưởng ngoạn vẻ đẹp tuyệt mỹ của mây trời, non nước, mà còn có cơ hội hòa mình vào không gian bao la, hùng vĩ của biển cả...', '3D/2N', '40', 'VietNam', '2.980.000', 0x746f757268616c6f6e672e6a706567),
(8, 'DU LỊCH PHÚ QUỐC - CA NÔ THAM QUAN ĐẢO - LẶN NGẮM SAN HÔ', 'Du ngoạn 4 hòn đảo còn hoang sơ tuyệt đẹp, chiêm ngưỡng trọn vẹn cảnh sắc thiên nhiên hữu tình và khám phá những bãi biển đẹp nhất đảo ngọc...', '3D/2N', '5', 'VietNam', '6,379,000', 0x746f757270687571756f632e706e67),
(9, 'Tour Ninh Thuận 3 ngày 2 đêm: TP.HCM - Ninh Thuận - Vĩnh Hy', 'Người ta nói, Ninh Thuận là vùng đất ‘nắng như rang, gió như phan’. Nhưng ít ai biết rằng, nơi đây mang vẻ đẹp hút hồn với những điểm đến trứ danh như Tháp Chăm Po Klong Garai, làng gốm Bàu Trúc, vịnh Vĩnh Hy...', '3D/2N', '20', 'VietNam', '3.180.000', 0x746f75726e696e68746875616e2e6a7067),
(10, 'Tour Hạ Long Teambuilding 3 ngày 2 đêm từ Hà Nội', ' Đến với Vịnh Hạ Long, du khách không chỉ được thưởng ngoạn vẻ đẹp tuyệt mỹ của mây trời, non nước, mà còn có cơ hội hòa mình vào không gian bao la, hùng vĩ của biển cả...', '3D/2N', '40', 'VietNam', '2.980.000', 0x746f757268616c6f6e672e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `role`) VALUES
(1, 'ta bao', 'admin@gmail.com', '123', 1),
(2, 'hong phuc', 'user@gmail.com', '123', 0),
(3, 'nan ngu', 'user2@gmail.com', '123', 0),
(4, 'nan ngu', 'ngulam@gmail.com', '123', 0),
(5, 'hjaha', 'cc@gmail.com', '123', 0),
(6, 'phuc va nan ngu vcl', 'phucnanngu@gmail.com', '123', 0),
(7, 'tabao2', 'admin2@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
