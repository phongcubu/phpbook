-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2021 lúc 10:31 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL,
  `sanpham_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `brand_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`, `sanpham_time`) VALUES
(28, 2, 2, 'Sách - Thay Đổi Tư Duy Hãy Cứ Phi Lý Đi', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', '79000', '45000', 1, 1, 10, 'test1.jpeg', '2021-09-26 09:31:55'),
(29, 4, 1, 'Sách - 10 Vạn Câu Hỏi Vì Sao Trẻ Hay Hỏi Nhất ', 'Sách - 10 Vạn Câu Hỏi Vì Sao Trẻ Hay Hỏi Nhất ', 'Sách - 10 Vạn Câu Hỏi Vì Sao Trẻ Hay Hỏi Nhất ', '53000', '32000', 1, 0, 10, 'test2.jpeg', '2021-09-26 09:31:55'),
(41, 4, 2, 'Đàn ông sao hỏa', '<p>Chất lương điểm 10 cho sản phẩm :</p>\r\n\r\n<p>n&ecirc;n mua mua</p>\r\n', '<p>M&Ocirc; tả sản phảm &ocirc; c&ecirc;:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;ổn nh&agrave; mọi ng</p>\r\n', '123789', '45634', 1, 0, 3, 'dan-ong-sao-hoa.jpg', '2021-09-26 15:13:34'),
(43, 1, 2, 'dd', '<p>scsdcs</p>\r\n', '<p>dgdd</p>\r\n', '111', '222', 1, 0, 4, '2d4f85545f5aaf6f2329419afe01e02b.jpeg', '2021-09-26 09:31:55'),
(44, 3, 1, 'sách hay cho em', '<p>t&aacute;c giả cuốn truyện n&agrave;y ::&nbsp;</p>\r\n\r\n<p>rất hay l&agrave; v&agrave;o l&ocirc;i cuốn</p>\r\n', '<p>m&ocirc; tả :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>chi tiết ổn</p>\r\n', '12345', '6543', 1, 0, 123, 'khac-biet-hay-la-chet.jpg', '2021-09-26 09:31:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
