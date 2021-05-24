-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 10:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id` varchar(50) NOT NULL,
  `tenbaihat` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `casy` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `theloai` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `duongdan` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `luotnghe` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `casy`, `theloai`, `duongdan`, `luotnghe`) VALUES
(1, 'Chạm khẽ tim anh một chút thôi', 'Noo phước thịnh', 'saab', 'nhac/Cham-Khe-Tim-Anh-Mot-Chut-Thoi-Noo-Phuoc-Thinh.mp3', 0),
(2, 'Ánh Nắng Của Anh', 'Đức Phúc', 'volvo', 'nhac/Anh-Nang-Cua-Anh-Cho-Em-Den-Ngay-Mai-OST-Duc-Phuc.mp3', 0),
(3, 'Ai Là Người Thương Em', 'Quân AP', 'Việt Nam', 'nhac/Ai-La-Nguoi-Thuong-Em-Quan-A-P.mp3', 0),
(4, 'Liệu Giờ', '2T', 'Việt Nam', 'nhac/Lieu-Gio-2T-Van.mp3',0),
(5, 'SimpleLove', 'Obito-Seachains-Davis', 'Việt Nam', 'nhac/Simple-Love-Obito-Seachains-Davis.mp3',0),
(6, 'Lời Yêu Ngây Dại', 'Kha', 'Việt Nam', 'nhac/Loi-Yeu-Ngay-Dai-Kha.mp3',0),
(7, 'Ngày Khác Lạ', 'Đen-Giang Phạm-TripleD', 'Việt Nam', 'nhac/Ngay-Khac-La-Den-Giang-Pham-Triple-D-3D.mp3',0),
(8, 'Âm Thầm Bên Em', 'Sơn Tùng MTP', 'Việt Nam', 'nhac/Am-Tham-Ben-Em-Son-Tung-M-TP.mp3',0),
(9, 'Không Phải Dạng Vừa Đâu', 'Sơn Tùng MTP', 'Việt Nam', 'nhac/Khong-Phai-Dang-Vua-Dau-Son-Tung-M-TP.mp3',0),
(10, 'Lạc Trôi', 'Sơn Tùng MTP', 'Việt Nam', 'nhac/Lac-Troi-Son-Tung-M-TP.mp3',0),

(11 ,'Havana','CamilaCabello-YoungThug','Âu Mỹ','nhac/Havana-CamilaCabelloYoungThug-5817730.mp3',0),
(12 ,'Titanium','DavidGuetta-Sia','Âu Mỹ','nhac/Titanium-DavidGuettaSia-3293909.mp3',0),
(13 ,'IDo','911','Âu Mỹ','nhac/IDo-911-2757427.mp3',0),
(14, 'Señorita', 'Shawn Mendes-Camila Cabello', 'Âu Mỹ', 'nhac/Seorita-ShawnMendesCamilaCabello-6007813.mp3', 0),
(15, 'Hopeful','AJ Mitchell' , 'Âu Mỹ' ,'nhac/Hopeful-AJMitchell-5530737.mp3',0),
(16, 'Way Back Home','Marc Sway', 'Âu Mỹ','nhac/WayBackHome-MarcSway-5964288.mp3',0),
(17 ,'Find U Again','MarkRonson-CamilaCabello','Âu Mỹ','nhac/FindUAgain-MarkRonsonCamilaCabello-6032902.mp3',0),
(18 ,'Symphony','CleanBandit-ZaraLarsson','Âu Mỹ','nhac/Symphony-CleanBanditZaraLarsson-4822950.mp3',0),
(19 ,'Until You','ShayneWard','Âu Mỹ','nhac/UntilYou-ShayneWard-1979790.mp3',0),
(20 ,'TheRiver','AxelJohansson','Âu Mỹ','nhac/TheRiver-AxelJohansson-5280558.mp3',0),

(21 ,'Cabinet','Hyomin(Tara)-JustaTee','Hàn Quốc','nhac/Cabinet-HyominTaraJustaTee-6025809.mp3',0),
(22 ,'Adios','Everglow','Hàn Quốc','nhac/Adios-Everglow-6056006.mp3',0),
(23 ,'Bang Bang Bang','BIGBANG','Hàn Quốc','nhac/BangBangBang-BIGBANG-3989059.mp3',0),
(24 ,'No One','LeeHiBI','Hàn Quốc','nhac/NoOne-LeeHiBI-5986434.mp3',0),
(25 ,'Goblin','SulliChoi','Hàn Quốc','nhac/Goblin-SulliChoi-6010937.mp3',0),
(26 ,'Me & You','EXID','Hàn Quốc','nhac/MeYou-EXID-6026293.mp3',0),
(27 ,'Ddu-Du Ddu-Du','BlackPink','Hàn Quốc','nhac/DduDuDduDu-BlackPink-5508696.mp3',0),
(28 ,'Kill This Love','BlackPink','Hàn Quốc','nhac/KillThisLove-BlackPink-5935546.mp3',0),
(29 ,'Loser','BIGBANG','Hàn Quốc','nhac/Loser-BIGBANG-3888875.mp3',0),
(30 ,'U Got It','Produce X 101','Hàn Quốc','nhac/UGotIt-ProduceX101-6021811.mp3',0);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
