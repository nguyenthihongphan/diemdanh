-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 08:51 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` int(10) unsigned NOT NULL auto_increment,
  `tenadmin` varchar(255) collate utf8_unicode_ci NOT NULL,
  `adminuser` int(10) NOT NULL,
  `adminpass` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phanquyen` int(10) NOT NULL,
  PRIMARY KEY  (`admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `tenadmin`, `adminuser`, `adminpass`, `phanquyen`) VALUES
(1, 'A', 12345, '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `ten` varchar(255) collate utf8_unicode_ci NOT NULL,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `location` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `idhd` int(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`id`, `ten`, `name`, `location`, `date`, `idhd`) VALUES
(1, ' Huỳnh Thị Xuân Đào', 'about-img.jpg', 'upload/about-img.jpg', '2022-05-27', 7);

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh`
--

CREATE TABLE `diemdanh` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `masv` int(10) NOT NULL,
  `ten` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lop` varchar(10) collate utf8_unicode_ci NOT NULL,
  `thoigian` datetime NOT NULL,
  `trangthai` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`,`masv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `diemdanh`
--


-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `user` int(11) NOT NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  `ten` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phanquyen` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`user`),
  KEY `ten` (`ten`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`id`, `user`, `password`, `ten`, `email`, `phanquyen`) VALUES
(1, 12345, '12345', 'Phan Thị Bảo Trân', 'tran@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `tenhd` varchar(255) collate utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) collate utf8_unicode_ci NOT NULL,
  `han` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `tenhd`, `noidung`, `han`) VALUES
(6, 'BKAP FIRE CAMP 2020', 'Trai he cong nghe, tu tin, buc pha', '2022-06-11'),
(7, 'Nghien cuu ', 'Tham gia xay dung cac do an nghien cuu thuc te danh cho sinh vien IT', '2022-07-07'),
(10, 'TECHTRONS - THINK IN A BLINK', 'Cuoc thi online dua tren cong nghe danh cho tat ca cac sinh vien tren toan cau. Thi dau theo dang Quiz (Multiple Choice Questions) ve cac mang kien thuc sau: Cac y tuong va thong tin ve IT,, Hieu biet ve nganh, Do vui/ kien thuc pho thong', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `lhp`
--

CREATE TABLE `lhp` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `mahp` varchar(255) collate utf8_unicode_ci NOT NULL,
  `monhoc` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tenhp` varchar(255) collate utf8_unicode_ci NOT NULL,
  `giangvien` varchar(255) collate utf8_unicode_ci NOT NULL,
  `ngayhoc` date NOT NULL,
  `tiethoc` varchar(255) collate utf8_unicode_ci NOT NULL,
  `hocki` varchar(255) character set latin1 NOT NULL,
  `namhoc` varchar(255) character set latin1 NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `giangvien` (`giangvien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lhp`
--

INSERT INTO `lhp` (`id`, `mahp`, `monhoc`, `tenhp`, `giangvien`, `ngayhoc`, `tiethoc`, `hocki`, `namhoc`) VALUES
(4, '420300350102', 'PhÃ¡t triá»ƒn á»©ng dá»¥ng', 'DHHTTT15B', 'Phan Thá»‹ Báº£o TrÃ¢n', '2022-02-15', '1-3', 'II', '2021-2022'),
(9, '12234556', 'Ká»¹ Thuáº­t Láº­p TrÃ¬nh', 'HTTT15A', 'Nguyá»…n An', '2022-04-30', '12-12', 'I', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `matkhau`
--

CREATE TABLE `matkhau` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `matkhau`
--

INSERT INTO `matkhau` (`id`, `password`) VALUES
(1, '1111');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `masv` int(10) NOT NULL,
  `hoten` varchar(255) collate utf8_unicode_ci NOT NULL,
  ` ngaysinh` date NOT NULL,
  `lop` varchar(10) collate utf8_unicode_ci NOT NULL,
  `phatbieu` int(100) NOT NULL,
  `trangthai` varchar(255) collate utf8_unicode_ci NOT NULL,
  `id_tk` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `masv` (`masv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `masv`, `hoten`, ` ngaysinh`, `lop`, `phatbieu`, `trangthai`, `id_tk`) VALUES
(1, 19445321, 'Huỳnh Thị Xuân Đào', '2001-03-06', 'DHHTTT15A', 7, '', 1),
(2, 19438171, 'Nguyễn Thị Hồng Phấn', '2001-10-05', 'DHHTTT15A', 17, '', 2),
(3, 19447221, 'Lê Thị Thương', '2001-06-21', 'DHHTTT15A', 9, '', 3),
(4, 19527911, 'Vũ Ngọc Tuấn ', '2022-05-28', 'DHKHMT15A', 11, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `username` varchar(100) collate utf8_unicode_ci NOT NULL,
  `password` varchar(100) collate utf8_unicode_ci NOT NULL,
  `ten` varchar(100) collate utf8_unicode_ci NOT NULL,
  `lop` varchar(10) collate utf8_unicode_ci NOT NULL,
  `trangthai` varchar(10) collate utf8_unicode_ci NOT NULL,
  `thoigian` datetime NOT NULL,
  `phanquyen` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `phanquyen` (`phanquyen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `ten`, `lop`, `trangthai`, `thoigian`, `phanquyen`) VALUES
(1, '19445321', '19445321', ' Huỳnh Thị Xuân Đào', 'DHHTTT15A', 'Có mặt', '0000-00-00 00:00:00', 2),
(2, '19438171', '19438171', 'Nguyễn Thị Hồng Phấn', 'DHHTTT15A', 'Vắng', '2022-04-25 19:48:00', 1),
(3, '19447221', '19447221', 'Lê Thị Thương', 'DHHTTT15A', 'Vắng', '0000-00-00 00:00:00', 1),
(4, '19527911', '19527911', 'Vũ Ngọc Tuấn', 'DHKHMT15A', 'Vắng', '0000-00-00 00:00:00', 1);
