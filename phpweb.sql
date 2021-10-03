-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 11:07 AM
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
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `giaodich_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL COMMENT 'thành viên thanh toán',
  `money` varchar(255) NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `giaodich_id`, `khachhang_id`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(7, 2704, 0, '89000', 'Noi dung thanh toan', '00', '13595253', 'NCB', '2021-10-02 14:00:00'),
(8, 4930, 45, '219997', 'Noi dung thanh toan', '00', '13595254', 'NCB', '2021-10-02 14:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(2, 'son@gmail.com', '731982a033a5cc815ac03c8504abb748', 'son'),
(3, 'phuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'phuong'),
(4, 'phong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'phongngonngon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'Bài 1 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'a4.jpg'),
(2, 'Bài 2: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'm3.jpg'),
(3, 'Bài 3: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, 'k2.jpg'),
(4, 'Bài 4 :Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'b4.jpg'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Bài 5 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'm8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'NXB Kim Đồng'),
(2, 'Nhiều tác giả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Sách Hướng Nghiệp & Phát Triển Bản Thân'),
(2, 'Sách Văn Kinh Điển'),
(3, 'Truyện Tranh'),
(4, 'Sách Ngoại Ngữ & Từ Điển'),
(20, 'Sách Y Học'),
(21, 'Sách Thiếu Nhi'),
(22, 'Sách Nghệ Thuật ,Thiết kế  & Nhiếp Ảnh'),
(23, 'Sách Kinh Tế - Kinh Doanh'),
(24, 'Sách Khoa Học Thiếu Nhi'),
(25, 'Sách Giáo Dục '),
(26, 'Sách Dạy Nấu Ăn '),
(27, 'Lịch Sử & Văn Hóa'),
(28, 'Khoa Học Toán Học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuctin`
--

CREATE TABLE `tbl_danhmuctin` (
  `danhmuctin_id` int(11) NOT NULL,
  `danhmuctin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuctin`
--

INSERT INTO `tbl_danhmuctin` (`danhmuctin_id`, `danhmuctin_name`) VALUES
(1, 'Sách'),
(2, 'Sức Khỏe'),
(3, 'Giáo Dục'),
(4, 'Kinh Doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0,
  `ngaythang` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `tinhtrang`, `huydon`, `ngaythang`) VALUES
(80, 30, 3, '633', 45, 0, 0, '2021-10-01'),
(81, 48, 9, '633', 45, 0, 0, '2021-10-01'),
(82, 44, 3, '6281', 45, 0, 0, '2021-10-01'),
(83, 30, 3, '1203', 45, 0, 0, '2021-10-01'),
(84, 28, 3, '3475', 45, 0, 0, '2021-10-01'),
(85, 30, 1, '9294', 45, 0, 0, '2021-10-02'),
(86, 28, 1, '9294', 45, 0, 0, '2021-10-02'),
(87, 28, 1, '2704', 45, 0, 0, '2021-10-02'),
(88, 52, 3, '4930', 45, 0, 0, '2021-10-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tong_tien` varchar(255) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tong_tien`, `tinhtrangdon`, `huydon`) VALUES
(57, 30, 3, '633', '2021-10-01 07:06:33', 45, '445000', 0, 0),
(58, 48, 9, '633', '2021-10-01 07:06:33', 45, '445000', 0, 0),
(59, 44, 3, '6281', '2021-10-01 07:07:49', 45, '85000', 0, 0),
(60, 30, 3, '1203', '2021-10-01 07:17:41', 45, '220000', 0, 0),
(61, 28, 3, '3475', '2021-10-01 07:20:06', 45, '247000', 0, 0),
(62, 30, 1, '9294', '2021-10-02 07:03:01', 45, '159000', 0, 0),
(63, 28, 1, '9294', '2021-10-02 07:03:01', 45, '159000', 0, 0),
(64, 28, 1, '2704', '2021-10-02 07:13:42', 45, '89000', 0, 0),
(65, 52, 3, '4930', '2021-10-02 07:19:17', 45, '219997', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addresss` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL,
  `timee` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `names`, `phone`, `addresss`, `note`, `email`, `passwords`, `giaohang`, `timee`) VALUES
(41, 'phạm thanh hoa', '0814515062', 'yên mô', 'dg', 'hoa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2021-09-30'),
(45, 'phạm thanh phong', '0814515062', 'yên mô', 'sadfg', 'phong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-09-30'),
(46, 'phuong', '0814515062', 'vĩnh phúc', 'xcfvgbh', 'phuong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-10-01');

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
  `sanpham_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `brand_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`, `sanpham_time`) VALUES
(28, 2, 2, 'Sách - Thay Đổi Tư Duy Hãy Cứ Phi Lý Đi', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', '79000', '45000', 1, 1, 10, 'thay-doi-tu-duy.jpg', '2021-09-29'),
(30, 2, 2, 'Sách Hay Lời Từ Chối Hoàn Hảo', 'Sách Hay Lời Từ Chối Hoàn Hảo', 'Sách Hãy Làm Viêc Thông Minh', '70000', '50000', 1, 1, 10, 'hay-lam-viec-thong-minh.jpg', '2021-09-29'),
(44, 4, 2, '301 Câu Đàm Thoại Tiếng Hoa', '', '', '25000', '20000', 1, 0, 2, '301 Câu Đàm Thoại Tiếng Hoa.png', '2021-09-29'),
(46, 4, 2, '5000 Từ Vựng Tiếng Trung Bỏ Túi', '', '', '50000', '39000', 1, 0, 10, '5000 Từ Vựng Tiếng Trung Bỏ Túi.png', '2021-09-29'),
(48, 3, 1, 'DRAGON BALL(SON GOKU và Những Người Bạn)', '', '', '25000', '20000', 1, 1, 10, 'DRAGON BALL ( SON GOKU và NHỮNG NGƯỜI BẠN).png', '2021-09-29'),
(50, 2, 2, 'Hiện Thực Hóa Sự Ngiệp', '', '', '80000', '56000', 1, 0, 10, 'Hiện Thực Hóa Sự Nghiệp.png', '2021-09-29'),
(52, 4, 2, 'Tiếng Hàn Tổng Hợp', '', '', '69999', '45000', 1, 1, 15, 'Tiếng Hàn Tổng Hợp.png', '2021-09-29'),
(56, 2, 2, 'Thôi Miên Bằng Ngôn Từ', '', '', '56000', '45000', 0, 0, 10, 'thoi_mien_bang_ngon_tu.png', '2021-09-29'),
(59, 2, 2, 'Sách Đắc Nhân Tâm', '<p>S&aacute;ch Đắc Nh&acirc;n T&acirc;m</p>\r\n', '<p>S&aacute;ch Đắc Nh&acirc;n T&acirc;m</p>\r\n', '90000', '82000', 1, 0, 20, 'dac-nhan-tam.jpg', '2021-09-29'),
(60, 2, 2, 'Sách Hãy Sống Cuộc Đời Như Bạn Muốn', '<p>S&aacute;ch H&atilde;y L&agrave;m Vi&ecirc;c Th&ocirc;ng Minh</p>\r\n', '<p>S&aacute;ch H&atilde;y L&agrave;m Vi&ecirc;c Th&ocirc;ng Minh</p>\r\n', '40000', '30000', 1, 1, 20, 'hay-lam-viec-thong-minh.jpg', '2021-09-29'),
(62, 3, 2, 'Bách khoa thiếu nhi - Ai cập cổ đại', '<p>B&aacute;ch khoa thiếu nhi - Ai cập cổ đại (b&igrave;a cứng) Vương triều Ai Cập ở Đ&ocirc;ng Bắc ch&acirc;u Phi hơn 3.000 năm trước để lại cho ch&uacute;ng ta những vị vua cổ đại, những kim tự th&aacute;p kỳ b&iacute; v&agrave; ph&aacute;t minh ra giấy. H&atilde;y c&ugrave;ng t&igrave;m hiểu về đất nước cổ đại n&agrave;y - những bộ luật, những vị thần hay cuộc sống dọc bờ s&ocirc;ng Nin - tất cả c&oacute; trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về c&aacute;c vị vua Ai Cập cổ đại, c&aacute;c vị thần v&agrave; những di t&iacute;ch cổ T&aacute;i hiện c&aacute;c c&ocirc;ng tr&igrave;nh, c&aacute;c kho b&aacute;u khảo cổ qua những h&igrave;nh ảnh sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức khoa học, kỷ lục th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cổ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:&nbsp;</strong>100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh:</strong>&nbsp;Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản:</strong>&nbsp;2020</p>\r\n\r\n<p><strong>Dịch giả:&nbsp;</strong>L&ecirc; Hải Dạng</p>\r\n\r\n<p><strong>B&igrave;a:</strong>&nbsp;b&igrave;a mềm</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;13,5x16,5cm</p>\r\n', '100000', '80000', 1, 1, 20, 'Bách khoa thiếu nhi - Ai cập cổ đại91.jpeg', '2021-09-29'),
(63, 3, 1, 'Bách khoa thiếu nhi - Trái Đất', '<p><em><strong>------------------Giới thiệu s&aacute;ch-------------</strong></em></p>\r\n\r\n<p>B&aacute;ch khoa thiếu nhi - Tr&aacute;i Đất (b&igrave;a cứng) Tr&aacute;i Đất, h&agrave;nh tinh xanh, ng&ograve;i nh&agrave; của những sa mạc kh&ocirc; cằn, những đ&igrave;nh n&uacute;i chọc trời, những đại dương s&acirc;u thẳm v&agrave; những rừng rậm m&ecirc;nh m&ocirc;ng. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; v&eacute; Tr&aacute;i Đất - c&ugrave;ng t&igrave;m hiểu nguy&ecirc;n nh&acirc;n của động đất; t&igrave;m xem d&ograve;ng s&ograve;ng băng rộng nhất nằm ở đ&acirc;u hay tại sao kh&iacute; hậu Tr&aacute;i Đất lại đang thay đổi - trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về Tr&aacute;i Đất như n&uacute;i lửa, s&ocirc;ng ng&ograve;i v&agrave; thời tiết H&igrave;nh &agrave;nh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức, mốc lịch sử bất ngờ, th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cồ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK&nbsp;</p>\r\n\r\n<p>NXB: NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh: Minh Thắng</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Dạng b&igrave;a: b&igrave;a cứng</p>\r\n\r\n<p>Số trang: 160 trang</p>\r\n\r\n<p>K&iacute;ch thước: 13,5 x 16,5cm</p>\r\n', '100000', '80000', 1, 0, 20, 'Bách khoa thiếu nhi - Trái Đất12.jpeg', '2021-09-29'),
(65, 20, 2, 'How Food Works - Hiểu Hết Về Thức Ăn', '<p><strong>GIỚI THIỆU S&Aacute;CH</strong></p>\r\n\r\n<p>How Food Works - Hiểu Hết Về Thức Ăn Hướng dẫn đơn giản nhất v&agrave; trực quan nhất từ trước đến nay về thức ăn v&agrave; dinh dưỡng! C&oacute; chế độ ăn n&agrave;o l&agrave; ho&agrave;n hảo kh&ocirc;ng? Ch&uacute;ng ta c&oacute; cần uống 8 cốc nước mỗi ng&agrave;y? Ch&iacute;nh x&aacute;c th&igrave; gluten l&agrave; g&igrave; v&agrave; tại sao nhiều người muốn tr&aacute;nh xa n&oacute; đến vậy? Truyền th&ocirc;ng ngập tr&agrave;n những kh&aacute;m ph&aacute; v&agrave; những lời khuy&ecirc;n mới mẻ về những thứ ch&uacute;ng ta nạp v&agrave;o cơ thể nhưng c&oacute; cơ sở khoa học n&agrave;o cho bất kỳ tuy&ecirc;n bố đ&oacute; kh&ocirc;ng? Với những h&igrave;nh minh họa r&otilde; r&agrave;ng, dễ hiểu, cuốn s&aacute;ch Hiểu hết về thức ăn sẽ mang lại những th&ocirc;ng tin l&yacute; th&uacute; li&ecirc;n quan đến thức ăn, từ c&ocirc;ng đoạn sản xuất đến &iacute;ch lợi/t&aacute;c hại của ch&uacute;ng với sức khỏe.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK</p>\r\n\r\n<p><strong>Người dịch:&nbsp;</strong>Trần Trương Ph&uacute;c Hạnh</p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;Nxb Thế giới</p>\r\n\r\n<p><strong>Nh&agrave; ph&aacute;t h&agrave;nh:&nbsp;</strong>Nh&atilde; Nam</p>\r\n\r\n<p><strong>Định dạng:&nbsp;</strong>B&igrave;a cứng</p>\r\n\r\n<p><strong>K&iacute;ch thước</strong>: 19.5 x 23 cm</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh:</strong>&nbsp;12/2018</p>\r\n', '201000', '180000', 1, 0, 15, 'How Food Works - Hiểu Hết Về Thức Ăn.jpeg', '2021-09-29'),
(66, 21, 2, 'Bách khoa thiếu nhi Vũ trụ', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ---------------Giới thiệu s&aacute;ch------------------</p>\r\n\r\n<p>S&aacute;ch bản quyền - B&aacute;ch khoa thiếu nhi vũ trụ (b&igrave;a cứng) Vũ trụ chứa vạn vật đang tồn tại như c&aacute;c h&agrave;nh tinh, mặt trăng, c&aacute;c ng&ocirc;i sao v&agrave; những dải thi&ecirc;n h&agrave;. H&atilde;y c&ugrave;ng nhau kh&aacute;m ph&aacute; về Vũ trụ - c&ugrave;ng trả lời c&acirc;u hỏi tinh v&acirc;n l&agrave; g&igrave;, tại sao lại c&oacute; nhật thực, nguyệt thực v&agrave; c&ograve;n k&iacute;nh thi&ecirc;n văn hoạt động như thế n&agrave;o - tất cả những c&acirc;u trả lời đều nằm trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. - Hơn 170 điều th&uacute; vị về c&aacute;c h&agrave;nh tinh, v&igrave; sao, t&agrave;u vũ trụ v&agrave; những chuyến du h&agrave;nh ngo&agrave;i kh&ocirc;ng gian - H&igrave;nh ảnh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao - C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học - Những tri thức khoa học, kỷ lục th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m #sachthieunhi #khoahoc #khampha #sachthieunhihay #bachkhoa</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -------------------Ưu điểm khi mua s&aacute;ch tại shopee nh&agrave; s&aacute;ch Minh Thắng--------------&nbsp;</p>\r\n\r\n<p>Được đ&oacute;ng g&oacute;i bao nilong b&ecirc;n ngo&agrave;i tr&aacute;nh bị hỏng s&aacute;ch, vở, truyện... - Được hỗ trợ, tư vấn v&agrave; chăm s&oacute;c tất cả những s&aacute;ch, vỏ, truyện... mua b&ecirc;n gian h&agrave;ng online - Hướng dẫn chi tiết tải file nghe (đối với s&aacute;ch c&oacute; k&egrave;m file nghe s&aacute;ch, video) - C&aacute;m ơn Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; gh&eacute; thăm v&agrave; ủng hộ nh&agrave; s&aacute;ch Minh Thắng</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:&nbsp;</strong>DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh:</strong>&nbsp;Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản:&nbsp;</strong>2019 (ISBN: 9786045670743)(M&atilde; s&aacute;ch: 8935236417648)</p>\r\n\r\n<p><strong>Dịch giả:&nbsp;</strong>L&ecirc; Thị Thu Ngọc Dạng</p>\r\n\r\n<p><strong>b&igrave;a:</strong>&nbsp;b&igrave;a cứng</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:&nbsp;</strong>13,5 x16,5cm</p>\r\n', '180000', '150000', 1, 0, 10, 'Bách khoa thiếu nhi Vũ trụ.jpeg', '2021-09-29'),
(68, 22, 2, 'Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn', '<p>S&aacute;ch do C&ocirc;ng ty Cổ phần Văn h&oacute;a Đ&ocirc;ng A v&agrave; NXB D&acirc;n tr&iacute; li&ecirc;n kết ấn h&agrave;nh Điều g&igrave; l&agrave;m n&ecirc;n một t&aacute;c phẩm nghệ thuật? Người Hy Lạp cổ đại tạo h&igrave;nh vẻ đẹp l&yacute; tưởng như thế n&agrave;o? M&agrave;u sắc c&oacute; g&acirc;y ảnh hưởng trực tiếp đến t&acirc;m hồn kh&ocirc;ng? Cuốn s&aacute;ch n&agrave;y khảo x&eacute;t những c&acirc;u hỏi đ&oacute; v&agrave; nhiều c&acirc;u hỏi kh&aacute;c bằng c&aacute;ch kh&aacute;m ph&aacute; c&aacute;c tr&agrave;o lưu, chủ đề v&agrave; phong c&aacute;ch nghệ thuật then chốt qua hơn 200 t&aacute;c phẩm thuộc nhiều thể loại đa dạng. Bằng ng&ocirc;n từ giản dị, Nghệ thuật &ndash; Kh&aacute;i lược những tư tưởng lớn sẽ đưa bạn xuy&ecirc;n qua l&yacute; thuyết v&agrave; lịch sử nghệ thuật bằng những h&igrave;nh ảnh về c&aacute;c t&aacute;c phẩm vĩ đại nhất tr&ecirc;n thế giới c&ugrave;ng nhiều sơ đồ h&oacute;m hỉnh gi&uacute;p kh&aacute;m ph&aacute; c&aacute;c &yacute; tưởng đằng sau. Từ tượng phồn thực thời tiền sử đến sắp đặt video đương đại, đ&acirc;y l&agrave; cuốn s&aacute;ch vỡ l&ograve;ng ho&agrave;n hảo về nghệ thuật thế giới. D&ugrave; l&agrave; người học nghệ thuật hay chỉ đơn giản l&agrave; th&iacute;ch ngắm ngh&iacute;a c&aacute;c t&aacute;c phẩm, bạn cũng sẽ t&igrave;m thấy trong đ&acirc;y nhiều hiểu biết khơi gợi suy tư về những kiệt t&aacute;c được ưa th&iacute;ch từ l&acirc;u v&agrave; cả những vi&ecirc;n ngọc mới được ph&aacute;t hiện.</p>\r\n', '<p>Nghệ Thuật - Kh&aacute;i Lược Những Tư Tưởng Lớn</p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK Người dịch: Thanh Loan</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;19,3 cm x 23,5 cm</p>\r\n\r\n<p><strong>Số trang:&nbsp;</strong>352</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;390.000đ</p>\r\n\r\n<p><strong>H&igrave;nh thức b&igrave;a:</strong>&nbsp;B&igrave;a cứng, c&oacute; &aacute;o, in m&agrave;u to&agrave;n bộ</p>\r\n\r\n<p><strong>M&atilde; sản phẩm:</strong>&nbsp;8936203360523</p>\r\n\r\n<p><strong>M&atilde; ISBN:</strong>&nbsp;978-604-314-455-0</p>\r\n', '280000', '237000', 1, 0, 15, 'Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn.jpeg', '2021-09-29'),
(69, 23, 2, 'Hiểu hết về kinh doanh - How business works', '<p>Một trong những cuốn cẩm nang về Kinh doanh dễ h&igrave;nh dung nhất từ trước tới nay! Tại sao d&ograve;ng tiền lại quan trọng? Sản xuất tinh gọn l&agrave; g&igrave;? Marketing kỹ thuật số hoạt động ra sao? Th&agrave;nh vi&ecirc;n hội đồng quản trị gồm những ai? Mua b&aacute;n doanh nghiệp l&agrave; g&igrave;? Cấu tr&uacute;c doanh nghiệp ra sao? Khấu hao l&agrave; g&igrave;? Tr&aacute;ch nhiệm x&atilde; hội của doanh nghiệp ra sao? L&agrave;m thế n&agrave;o để c&oacute; thể th&agrave;nh c&ocirc;ng trong thị trường to&agrave;n cầu của thế kỷ 21? Với những h&igrave;nh ảnh bắt mắt, đơn giản, kh&ocirc;ng sử dụng thuật ngữ, How business works - Hiểu hết về kinh doanh giải th&iacute;ch mọi kh&aacute;i niệm li&ecirc;n quan đến lĩnh vực kinh doanh, biến những kh&aacute;i niệm kh&oacute; hiểu nhất trở n&ecirc;n dễ hiểu. Mọi kh&iacute;a cạnh của hoạt động kinh doanh sẽ được xem x&eacute;t, ph&acirc;n t&iacute;ch gi&uacute;p độc giả hiểu r&otilde; hơn về kinh doanh, v&agrave; c&aacute;ch c&aacute;c h&igrave;nh th&aacute;i kinh doanh định h&igrave;nh x&atilde; hội hiện đại. D&ugrave; bạn đang muốn thăng tiến trong c&ocirc;ng việc, khởi sự doanh nghiệp của ri&ecirc;ng m&igrave;nh hay chỉ đơn giản l&agrave; muốn hiểu r&otilde; hơn thế giới kinh doanh v&agrave; t&agrave;i ch&iacute;nh, How business works - Hiểu hết về kinh doanh ch&iacute;nh l&agrave; cuốn cẩm nang kh&ocirc;ng thể bỏ qua!!!</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;Thế Giới</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;351</p>\r\n\r\n<p><strong>K&iacute;ch thước:&nbsp;</strong>19.5x23 cm</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh:</strong>&nbsp;08-01-2020</p>\r\n', '304000', '280000', 1, 0, 15, 'Hiểu hết về kinh doanh - How business works.jpeg', '2021-09-29'),
(70, 23, 2, 'Kinh tế học - Khái lược những tư tưởng lớn', '<p>Kinh tế học - Kh&aacute;i lược những tư tưởng lớn Điều g&igrave; xảy ra trong giai đoạn khủng hoảng kinh tế? Tiền tệ vận h&agrave;nh ra sao? V&igrave; sao ch&uacute;ng ta phải đ&oacute;ng thuế? Kinh tế học ảnh hưởng đến từng kh&iacute;a cạnh của đời sống của ch&uacute;ng ta, từ việc đi l&agrave;m đến c&aacute;ch ti&ecirc;u tiền &ndash; v&agrave; c&aacute;c &yacute; tưởng kinh tế lớn vẫn đang tiếp tục định h&igrave;nh thế giới ng&agrave;y nay. Kinh tế học - Kh&aacute;i lược những tư tưởng lớn được viết với văn phong đơn giản k&egrave;m theo c&aacute;c biểu đồ giải th&iacute;ch ngắn gọn, dễ hiểu c&aacute;c l&iacute; thuyết quan trọng. Ngo&agrave;i ra c&ograve;n c&oacute; c&aacute;c c&acirc;u tr&iacute;ch dẫn kinh điển dễ nhớ v&agrave; c&aacute;c h&igrave;nh minh họa d&iacute; dỏm, mang lại niềm hứng th&uacute; khi t&igrave;m hiểu về kinh tế học.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;</strong>C&ocirc;ng ty Cổ phần Văn h&oacute;a Đ&ocirc;ng A</p>\r\n\r\n<p><strong>T&aacute;c giả:&nbsp;</strong>DK</p>\r\n\r\n<p><strong>Năm xuất bản:&nbsp;</strong>2019</p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;NXB D&acirc;n Tr&iacute;</p>\r\n\r\n<p><strong>Số trang:&nbsp;</strong>352</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;19,3 x 23,5 cm</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:&nbsp;</strong>390.000đ</p>\r\n', '370000', '350000', 1, 0, 15, 'Kinh tế học - Khái lược những tư tưởng lớn47.jpeg', '2021-09-29'),
(71, 24, 2, 'Bách khoa thiếu nhi - Trái Đất', '<p>------------------Giới thiệu s&aacute;ch-------------</p>\r\n\r\n<p>B&aacute;ch khoa thiếu nhi - Tr&aacute;i Đất (b&igrave;a cứng) Tr&aacute;i Đất, h&agrave;nh tinh xanh, ng&ograve;i nh&agrave; của những sa mạc kh&ocirc; cằn, những đ&igrave;nh n&uacute;i chọc trời, những đại dương s&acirc;u thẳm v&agrave; những rừng rậm m&ecirc;nh m&ocirc;ng. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; v&eacute; Tr&aacute;i Đất - c&ugrave;ng t&igrave;m hiểu nguy&ecirc;n nh&acirc;n của động đất; t&igrave;m xem d&ograve;ng s&ograve;ng băng rộng nhất nằm ở đ&acirc;u hay tại sao kh&iacute; hậu Tr&aacute;i Đất lại đang thay đổi - trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về Tr&aacute;i Đất như n&uacute;i lửa, s&ocirc;ng ng&ograve;i v&agrave; thời tiết H&igrave;nh &agrave;nh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức, mốc lịch sử bất ngờ, th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cồ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả</strong>: DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh</strong>: Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản</strong>: 2020</p>\r\n\r\n<p><strong>Dịch giả:</strong>&nbsp;L&ecirc; Hải Dạng</p>\r\n\r\n<p><strong>B&igrave;a:</strong>&nbsp;b&igrave;a cứng</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;13,5 x 16,5cm</p>\r\n', '60000', '50000', 1, 0, 10, 'Bách khoa thiếu nhi - Trái Đất96.jpeg', '2021-09-29'),
(72, 1, 2, 'Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn', '<p>Ta c&oacute; thực sự l&agrave; những c&aacute; nh&acirc;n tự do với bản sắc ri&ecirc;ng&hellip; hay tất cả ch&uacute;ng ta đều chỉ biết tu&acirc;n phục số đ&ocirc;ng?</p>\r\n\r\n<p>Thi&ecirc;n t&agrave;i l&agrave; nhờ dưỡng dục hay tự nhi&ecirc;n? V&ocirc; thức điều khiển ch&uacute;ng ta như thế n&agrave;o?</p>\r\n\r\n<p>Những c&acirc;u hỏi như tr&ecirc;n ch&iacute;nh l&agrave; tiền đề cho c&aacute;c c&ocirc;ng tr&igrave;nh của nhiều tư tưởng gia v&agrave; khoa học gia lớn của thế giới, trong một lĩnh vực gi&agrave;u sức l&ocirc;i cuốn, đ&oacute; l&agrave; t&acirc;m l&iacute; học.</p>\r\n\r\n<p>Với văn phong dễ hiểu v&agrave; s&aacute;ng sủa, T&acirc;m l&iacute; học &ndash; Kh&aacute;i lược những tư tưởng lớn l&agrave; tập hợp những b&agrave;i viết ngắn gọn h&agrave;m s&uacute;c giải th&iacute;ch r&otilde; những điều kh&oacute; hiểu, những sơ đồ gi&uacute;p l&agrave;m s&aacute;ng tỏ những l&iacute; thuyết rối rắm, những tr&iacute;ch dẫn dễ nhớ, c&ugrave;ng những minh họa d&iacute; dỏm gi&uacute;p ch&uacute;ng ta chơi đ&ugrave;a với những kiến thức nền tảng về t&acirc;m l&iacute; học.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong><em>C&ocirc;ng ty ph&aacute;t h&agrave;nh</em></strong>:Đ&ocirc;ng A</p>\r\n\r\n<p><strong>T&aacute;c giả</strong>:DK NXB:NXB D&acirc;n tr&iacute;</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh</strong>:2019</p>\r\n\r\n<p><strong>Loại b&igrave;a</strong>:B&igrave;a cứng Số trang:352 K&iacute;ch thước:19,3*23,5</p>\r\n', '35000', '27000', 1, 0, 10, 'Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn.jpeg', '2021-09-29'),
(73, 1, 2, 'How The Body Works - Hiểu Hết Về Cơ Thể', '<p><strong>GIỚI THIỆU</strong></p>\r\n\r\n<p>How The Body Works - Hiểu Hết Về Cơ Thể Tuyệt đối đừng bỏ qua cuốn s&aacute;ch n&agrave;y nếu bạn l&agrave; người ham học hỏi, t&igrave;m t&ograve;i v&agrave; mong muốn kh&aacute;m ph&aacute; ch&iacute;nh cơ thể của m&igrave;nh! Hướng dẫn Đơn giản nhất v&agrave; Trực quan nhất về Cơ Thể Người! Xe m&aacute;y, xe &ocirc; t&ocirc;, tr&ograve; chơi điện tử đều k&egrave;m theo hướng dẫn sử dụng. Cuốn s&aacute;ch tựa như một cuốn cẩm nang gi&uacute;p bạn hiểu được ch&iacute;nh cơ thể của bản th&acirc;n m&igrave;nh. Với những đ&aacute;p &aacute;n được minh họa dễ hiểu, hấp dẫn th&uacute; vị, cuốn s&aacute;ch HOW THE BODY WORKS - Hiểu hết về cơ thể sẽ l&agrave;m s&aacute;ng tỏ qu&aacute; tr&igrave;nh phức tạp đang giữ cho ch&uacute;ng ta tồn tại v&agrave; ph&aacute;t triển. Mời bạn đ&oacute;n đọc.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Người dịch: Phạm Hằng Nguy&ecirc;n</p>\r\n\r\n<p>Nh&agrave; xuất bản: Nxb Thế giới</p>\r\n\r\n<p>Nh&agrave; ph&aacute;t h&agrave;nh: Nh&atilde; Nam</p>\r\n\r\n<p>Định dạng: B&igrave;a cứng</p>\r\n\r\n<p>K&iacute;ch thước: 19.5 x 23 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh: 26/07/2019</p>\r\n\r\n<p>Số trang: 256</p>\r\n', '250000', '235000', 1, 1, 10, 'How The Body Works - Hiểu Hết Về Cơ Thể.jpeg', '2021-09-29'),
(76, 26, 2, 'The Story Of Food - Câu Chuyện Thực Phẩm', '<p><strong><em>GIỚI THIỆU S&Aacute;CH</em></strong></p>\r\n\r\n<p>The Story Of Food - C&acirc;u Chuyện Thực Phẩm Từ lo&agrave;i c&aacute; khơi nguồn cho cả một cuộc chiến tranh cho đến loại rau gia vị từng được coi l&agrave; biểu tượng của sự căm gh&eacute;t để rồi nhiều thế kỷ sau lại trở th&agrave;nh biểu tượng cho t&igrave;nh y&ecirc;u, thực phẩm đ&atilde; lu&ocirc;n l&agrave; một phần kh&ocirc;ng thể thiếu của văn h&oacute;a nh&acirc;n loại. Những c&acirc;u chuyện về nguồn gốc, truyền thống nu&ocirc;i trồng v&agrave; nấu nướng của gần hai trăm loại thực phẩm được truyền tải sống động qua những trang s&aacute;ch minh họa của The Story of Food &ndash; C&acirc;u chuyện thực phẩm sẽ mang lại một bữa đại tiệc bổ &iacute;ch cho những người say m&ecirc; ẩm thực ở khắp mọi nơi. Hơn cả những mẩu th&ocirc;ng tin đơn lẻ về từng loại thực phẩm, cuốn s&aacute;ch x&acirc;u chuỗi ch&uacute;ng th&agrave;nh từng nh&oacute;m thực phẩm, khiến th&ocirc;ng tin biến th&agrave;nh một c&acirc;u chuyện (c&oacute; minh họa) dễ theo d&otilde;i, c&oacute; diễn biến qua thời gian v&agrave; v&ugrave;ng miền.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&ecirc;n Nh&agrave; Cung Cấp Nh&atilde; Nam</p>\r\n\r\n<p>T&aacute;c Giả DK</p>\r\n\r\n<p>Dịch Giả Trần Trương Ph&uacute;c Hạnh</p>\r\n\r\n<p>Năm XB 02-2021</p>\r\n\r\n<p>Số trang 362</p>\r\n\r\n<p>NXB NXB Thế Giới</p>\r\n\r\n<p>H&igrave;nh Thức B&igrave;a mềm</p>\r\n', '350000', '342000', 1, 0, 10, 'The Story Of Food - Câu Chuyện Thực Phẩm.jpeg', '2021-09-29'),
(77, 1, 2, 'Chính trị - Khái lược những tư tưởng lớn', '<p>C&oacute; đ&uacute;ng chăng khi ch&uacute;ng ta lật đổ một nh&agrave; cai trị bất c&ocirc;ng? Liệu nền d&acirc;n chủ c&oacute; thực sự l&agrave; h&igrave;nh thức ch&iacute;nh quyền tốt nhất? V&agrave; chiến tranh c&oacute; thể được biện minh hay kh&ocirc;ng? Xuy&ecirc;n suốt chiều d&agrave;i lịch sử, lo&agrave;i người đ&atilde; tự hỏi m&igrave;nh những điều n&agrave;y c&ugrave;ng những c&acirc;u hỏi lớn lao kh&aacute;c về c&aacute;ch thức tốt nhất để ch&uacute;ng ta cai trị ch&iacute;nh m&igrave;nh &ndash; v&agrave; c&aacute;c tư tưởng gia vĩ đại đ&atilde; đưa ra những lời giải đ&aacute;p m&agrave; cho đến nay vẫn đang tiếp tục định h&igrave;nh thế giới. Với văn phong dễ hiểu v&agrave; s&aacute;ng sủa, Ch&iacute;nh trị - Kh&aacute;i lược những tư tưởng lớn l&agrave; tập hợp những b&agrave;i viết ngắn gọn h&agrave;m s&uacute;c giải th&iacute;ch r&otilde; những điều kh&oacute; hiểu, những sơ đồ từng bước gi&uacute;p l&agrave;m s&aacute;ng tỏ những l&iacute; thuyết rối rắm, v&agrave; những h&igrave;nh ảnh minh họa d&iacute; dỏm gi&uacute;p ch&uacute;ng ta &yacute; thức r&otilde; hơn về vai tr&ograve; của m&igrave;nh trong c&aacute;ch thức tổ chức x&atilde; hội.&nbsp;#sachdonga #donga #khailuoc #khailuocnhungtutuonglon #khailuoctutuong #chinhtri #tongiao #tamlyhoc #kinhdoanh #triethoc #kinhtehoc</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Dịch giả: B&iacute;ch Thu dịch, L&ecirc; Ngọc T&acirc;n hiệu đ&iacute;nh</p>\r\n\r\n<p>Năm xuất bản: 2019</p>\r\n\r\n<p>Nh&agrave; xuất bản D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Số trang: 352</p>\r\n\r\n<p>K&iacute;ch thước: 19,3 x 23,5 cm</p>\r\n\r\n<p>Trọng lượng: 700gr</p>\r\n', '320000', '300000', 1, 0, 20, 'Chính trị - Khái lược những tư tưởng lớn.jpeg', '2021-09-29'),
(81, 28, 2, 'Chinh Phục Không Gian – Hành Trình Kỳ Diệu', '<p><strong>Giới thiệu s&aacute;ch:</strong></p>\r\n\r\n<p>Chinh phục kh&ocirc;ng gian c&oacute; lẽ l&agrave; cuộc chinh phục k&igrave; diệu v&agrave; vĩ đại nhất m&agrave; con người đ&atilde; v&agrave; đang thực hiện. Kh&aacute;m ph&aacute; vũ trụ bao la l&agrave; ước mơ từ h&agrave;ng ng&agrave;n năm nhưng cho đến thế kỷ thứ 20 n&oacute; mới trở n&ecirc;n s&ocirc;i động hơn bao giờ hết. Nga &ndash; Mỹ hai cường quốc đ&atilde; tạo ra một cuộc chạy đua v&agrave;o kh&ocirc;ng gian hết sức ngoạn mục, kết quả l&agrave; h&agrave;ng loạt cột mốc đ&atilde; được tạo ra, đ&aacute;nh dấu những bước tiến hết sức quan trọng trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian của con người. Nội dung s&aacute;ch t&aacute;i hiện lại những cột mốc quan trọng trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian của con người : Từ việc chế tạo những con t&agrave;u vũ trụ đầu ti&ecirc;n, lần đầu ti&ecirc;n con người bay v&ograve;ng quanh Tr&aacute;i Đất, lần đầu ti&ecirc;n con người đặt ch&acirc;n l&ecirc;n Mặt Trăng, x&acirc;y dựng trạm vũ trụ quốc tế, &hellip; C&ugrave;ng với việc t&aacute;i hiện lại h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian cuốn s&aacute;ch c&ograve;n đề cập đến những hiệu ứng t&iacute;ch cực của qu&aacute; tr&igrave;nh chinh phục kh&ocirc;ng gian l&ecirc;n cuộc sống thường ng&agrave;y tr&ecirc;n Tr&aacute;i Đất cũng như những bước đi tiếp theo của con người trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian tương lai. Ng&agrave;y nay, với sự ph&aacute;t triển của khoa học kỹ thuật, liệu con người sẽ hiện thực h&oacute;a ước mơ sống tr&ecirc;n sao Hỏa? Con người sẽ ph&aacute;t triển ng&agrave;nh du lịch kh&ocirc;ng gian? Con người sẽ t&igrave;m ra những nền văn minh ngo&agrave;i Tr&aacute;i Đất? V&agrave; sẽ c&ograve;n những cột mốc phi thường n&agrave;o m&agrave; con người sẽ đạt được?</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: 1980 Books</p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Nh&agrave; xuất bản: NXB D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Số trang: 192</p>\r\n', '100000', '80000', 1, 0, 15, 'Chinh Phục Không Gian – Hành Trình Kỳ Diệu.jpeg', '2021-09-29'),
(82, 28, 2, 'Hiểu hết về tâm lý học - How Psychology Works', '<p><em><strong>MỘT TRONG NHỮNG CUỐN S&Aacute;CH MỞ KH&Oacute;A HỮU &Iacute;CH NHẤT VỀ TƯ DUY, K&Yacute; ỨC V&Agrave; CẢM X&Uacute;C CỦA CON NGƯỜI!</strong></em></p>\r\n\r\n<p>&Aacute;m sợ l&agrave; g&igrave;, &aacute;m sợ c&oacute; thực sự đ&aacute;ng sợ kh&ocirc;ng? Rối loạn t&acirc;m l&yacute; l&agrave; g&igrave;, l&agrave;m thế n&agrave;o để tho&aacute;t khỏi t&igrave;nh trạng suy nhược v&agrave; x&aacute;o trộn đ&oacute;? Trầm cảm l&agrave; g&igrave;, v&igrave; sao con người hiện đại thường xuy&ecirc;n gặp v&agrave; chống chọi với t&igrave;nh trạng u uất, mệt mỏi v&agrave; tuyệt vọng n&agrave;y? T&igrave;m hiểu về c&aacute;c vấn đề t&acirc;m tr&iacute; của con người lu&ocirc;n đầy sức hấp dẫn v&agrave; l&ocirc;i cuốn, v&igrave; vậy m&agrave; t&acirc;m l&yacute; học ra đời, h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển rất nhiều c&aacute;c học thuyết v&agrave; trường ph&aacute;i. Cuốn s&aacute;ch n&agrave;y dẫn dắt bạn đọc qua h&agrave;nh tr&igrave;nh t&igrave;m hiểu c&aacute;c học thuyết v&agrave; trường ph&aacute;i đ&oacute;, về c&aacute;ch c&aacute;c nh&agrave; t&acirc;m l&yacute; diễn giải h&agrave;nh xử v&agrave; t&acirc;m tr&iacute; con người. Tại sao ch&uacute;ng ta c&oacute; những h&agrave;nh vi, suy nghĩ v&agrave; cảm x&uacute;c như vậy, ch&uacute;ng diễn ra v&agrave; kết th&uacute;c như thế n&agrave;o, ch&uacute;ng ảnh hưởng l&acirc;u d&agrave;i, gi&aacute;n đoạn hay ngắn ngủỉ đến đời sống của ch&uacute;ng ta ra sao, l&agrave;m thế n&agrave;o để ch&uacute;ng ta tho&aacute;t khỏi những t&aacute;c động ti&ecirc;u cực của ch&uacute;ng? Cuốn s&aacute;ch c&oacute; cấu tr&uacute;c khoa học, tr&igrave;nh b&agrave;y dễ hiểu, s&uacute;c t&iacute;ch, thiết kế v&agrave; minh họa đẹp mắt n&agrave;y sẽ mang đến cho bạn những hiểu biết về c&aacute;c học thuyết t&acirc;m l&yacute; v&agrave; c&aacute;c phương ph&aacute;p trị liệu, từ c&aacute;c vấn đề c&aacute; nh&acirc;n đến những ứng dụng thực tế.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Cố vấn bi&ecirc;n tập: Jo Hemmings</p>\r\n\r\n<p>Dịch giả: Trần Trương Ph&uacute;c Hạnh , Phương Ho&agrave;i Nga hiệu đ&iacute;nh</p>\r\n\r\n<p>Nh&agrave; xuất bản: Thế Giới</p>\r\n\r\n<p>Số trang: 247</p>\r\n\r\n<p>K&iacute;ch thước: 19.5x23 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh: 11-2020</p>\r\n', '90000', '80000', 1, 1, 10, 'Hiểu hết về tâm lý học - How Psychology Works.jpeg', '2021-09-29'),
(84, 27, 2, 'Lịch Sử Thế Giới: Chân Dung Nhân Loại Theo Dòng Sự Kiện', '<p><em><strong>Lịch Sử Thế Giới:</strong></em>&nbsp;Ch&acirc;n Dung Nh&acirc;n Loại Theo D&ograve;ng Sự Kiện Với lượng th&ocirc;ng tin v&agrave; h&igrave;nh ảnh đồ sộ, cuốn s&aacute;ch l&agrave; h&agrave;nh tr&igrave;nh hấp dẫn gi&uacute;p bạn kh&aacute;m ph&aacute; c&aacute;c bước tiến lịch sử đ&atilde; l&agrave;m n&ecirc;n ch&acirc;n dung nh&acirc;n loại ng&agrave;y nay.</p>\r\n\r\n<p><em><strong>TO&Agrave;N DIỆN V&Agrave; ĐỘC Đ&Aacute;O</strong></em>&nbsp;Mở đầu từ sự xuất hiện lo&agrave;i người, cuốn s&aacute;ch đưa bạn qua tiến tr&igrave;nh ph&aacute;t triển v&agrave; suy t&agrave;n của c&aacute;c nền văn minh tr&ecirc;n to&agrave;n thế giới, m&agrave; trọng t&acirc;m l&agrave; c&aacute;c sự kiện chiến tranh, thương mại v&agrave; th&aacute;m hiểm, c&aacute;c cuộc c&aacute;ch mạng v&agrave; đổi thay c&ocirc;ng nghệ&hellip; Đặc biệt, nội dung s&aacute;ch kh&ocirc;ng chia theo chủ đề hay khu vực m&agrave; được tr&igrave;nh b&agrave;y theo diễn tiến thời gian nhằm gi&uacute;p bạn c&oacute; c&aacute;i nh&igrave;n to&agrave;n cảnh v&agrave; so s&aacute;nh về sự ph&aacute;t triển của c&aacute;c quốc gia, d&acirc;n tộc tại c&ugrave;ng một thời điểm trong qu&aacute; khứ.</p>\r\n\r\n<p><em><strong>MINH HỌA SỐNG ĐỘNG</strong></em>&nbsp;B&ecirc;n cạnh lượng th&ocirc;ng tin dồi d&agrave;o, cuốn s&aacute;ch c&ograve;n cung cấp hơn 1000 h&igrave;nh minh họa độc đ&aacute;o bao gồm c&aacute;c hiện vật, t&aacute;c phẩm nghệ thuật, ảnh tư liệu nhằm t&aacute;i hiện ch&acirc;n dung c&aacute;c nền văn h&oacute;a, sự kiện v&agrave; nh&acirc;n vật. Ngo&agrave;i ra, cuốn s&aacute;ch c&ograve;n c&oacute; h&agrave;ng trăm biểu đồ, bản đồ v&agrave; số liệu phản &aacute;nh quy m&ocirc;, t&iacute;nh chất v&agrave; diễn biến của c&aacute;c sự kiện, thời k&igrave; lịch sử.</p>\r\n\r\n<p><em><strong>ĐỘI NGŨ BI&Ecirc;N SOẠN UY T&Iacute;N</strong></em>&nbsp;Đ&acirc;y l&agrave; c&ocirc;ng tr&igrave;nh bi&ecirc;n soạn của nhiều giảng vi&ecirc;n, nh&agrave; nghi&ecirc;n cứu từ c&aacute;c trường đại học danh tiếng của Anh quốc như Oxford, Cambridge, Edinburgh c&ugrave;ng sự đ&oacute;ng g&oacute;p của đội ngũ chuy&ecirc;n gia từ Viện Smithsonian, một hệ thống bao gồm gần 20 bảo t&agrave;ng v&agrave; trung t&acirc;m nghi&ecirc;n cứu cấp quốc gia của Hoa Kỳ, nơi lưu giữ 138 triệu hiện vật c&ugrave;ng c&aacute;c tư liệu qu&yacute; gi&aacute; về lịch sử nh&acirc;n loại.</p>\r\n\r\n<p><em><strong>ĐẶC BIỆT BỔ SUNG</strong></em>&nbsp;Với mong muốn tiếp cận tốt hơn sự quan t&acirc;m của độc giả trong nước, nh&oacute;m bi&ecirc;n dịch v&agrave; hiệu đ&iacute;nh đ&atilde; bổ sung một số sự kiện lịch sử ti&ecirc;u biểu của Việt Nam v&agrave;o ấn bản tiếng Việt. C&aacute;c sự kiện n&agrave;y được chọn lọc một c&aacute;ch cẩn trọng, tu&acirc;n thủ tinh thần chung của bản gốc để đảm bảo t&iacute;nh nhất qu&aacute;n với tổng thể. Qua đ&oacute;, bạn đọc sẽ c&oacute; c&aacute;i nh&igrave;n đối s&aacute;nh về tr&igrave;nh độ ph&aacute;t triển, c&aacute;c bước tiến của lịch sử Việt Nam so với c&aacute;c quốc gia trong khu vực v&agrave; tr&ecirc;n thế giới.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: C&ocirc;ng Ty Cổ Phần Văn H&oacute;a Đ&ocirc;ng A</p>\r\n\r\n<p>T&aacute;c giả: DK &amp; Viện Smithsonian (bi&ecirc;n soạn)</p>\r\n\r\n<p>Ng&agrave;y xuất bản: 02-2017</p>\r\n\r\n<p>K&iacute;ch thước: 25 x 30 cm</p>\r\n\r\n<p>Nh&agrave; xuất bản: Nh&agrave; Xuất Bản D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Loại b&igrave;a: B&igrave;a cứng</p>\r\n\r\n<p>Số trang: 512</p>\r\n', '90000', '80000', 1, 0, 15, 'lich_su_The_Gioi.png', '2021-09-29'),
(86, 25, 2, 'Tri Thức Về Vạn Vật - Một Thế Giới Trực Quan Chưa Từng Thấy', '<p>Cu&ocirc;́n sách được làm theo phi&ecirc;n bản c&acirc;̣p nh&acirc;̣t mới nh&acirc;́t của DK năm 2018. Cuốn s&aacute;ch n&agrave;y sẽ cho bạn thấy những điều b&aacute;ch khoa thư th&ocirc;ng thường chỉ n&oacute;i. KH&Aacute;M PH&Aacute; b&iacute; ẩn lăng mộ vua Tutankhamun, sức mạnh khủng khiếp của s&oacute;ng thần, động đất, v&ograve;i rồng v&agrave; l&ograve; phản ứng hạt nh&acirc;n b&ecirc;n trong Mặt trời. NH&Igrave;N THẤY sự h&igrave;nh th&agrave;nh một ng&ocirc;i sao, b&ecirc;n trong cơ thể khủng long bạo ch&uacute;a v&agrave; b&iacute; mật ADN. DU H&Agrave;NH ngược thời gian về thời x&acirc;y Vạn L&yacute; Trường Th&agrave;nh, đền Pantheon của Athens cổ đại v&agrave; hai cuộc chiến tranh thế giới t&agrave;n khốc. KHẢO S&Aacute;T t&iacute;n hiệu từ kh&ocirc;ng gian, lực từ trường v&ocirc; h&igrave;nh v&agrave; tri thức khoa học ẩn giấu trong ph&aacute;o hoa. Sử dụng c&aacute;c t&aacute;c phẩm đồ họa m&aacute;y t&iacute;nh ngoạn mục, Tri thức về vạn vật sẽ h&eacute; lộ những chi tiết kỳ diệu chưa từng thấy về vũ trụ, Tr&aacute;i đất, thi&ecirc;n nhi&ecirc;n, cơ thể người, khoa học v&agrave; lịch sử. Trọn vẹn những sự thật kinh ngạc, d&ograve;ng thời gian sinh động v&agrave; h&igrave;nh ảnh ấn tượng, cuốn b&aacute;ch khoa thư gia đ&igrave;nh đầy hấp dẫn n&agrave;y sẽ biến những chủ đề phức tạp nhất h&oacute;a dễ d&agrave;ng chỉ trong nh&aacute;y mắt. Được th&agrave;nh lập năm 1974, DK nổi tiếng với d&ograve;ng s&aacute;ch m&igrave;nh họa tranh k&egrave;m nội dung ch&uacute; th&iacute;ch b&oacute;ng bẩy hấp dẫn người đọc. DK được bảo trợ bởi rất nhiều c&aacute;c tổ chức h&agrave;n l&acirc;m cũng như nh&acirc;n đạo nổi tiếng v&agrave; danh gi&aacute;, như Hiệp hội Y khoa Vương quốc Anh, Hội L&agrave;m vườn Ho&agrave;ng gia v&agrave; Tổ chức Chữ thập Đỏ Anh. Ngo&agrave;i s&aacute;ch truyền thống, DK c&ograve;n sở hữu một lượng lớn c&aacute;c phần mềm gi&aacute;o dục v&agrave; s&aacute;ch điện tử tương t&aacute;c c&oacute; nh&atilde;n hiệu DK Online (tiền th&acirc;n l&agrave; DK Multimedia, 1990). V&agrave;o năm 2010, DK th&agrave;nh lập một chợ phần mềm điện thoại nhằm đưa c&aacute;c sản phẩm s&aacute;ch của h&atilde;ng đến với đ&ocirc;ng đảo độc giả sử dụng thiết bị th&ocirc;ng m&igrave;nh. Hiện DK đang sở hữu 411 đầu s&aacute;ch, 30 giải thưởng c&aacute;c loại cho c&aacute;c s&aacute;ch. Những đầu s&aacute;ch cực kỳ nổi tiếng như The Way Things Work (Vạn vật Vận h&agrave;nh Như thế n&agrave;o?) v&agrave; The Way We Work của t&aacute;c giả David Macaulay đều được đ&oacute;n nhận rất nồng nhiệt v&agrave; được c&aacute;c độc giả tr&ecirc;n thế giới t&igrave;m đọc từ trước tới nay.</p>\r\n\r\n<p>#Nh&agrave;_s&aacute;ch_Alpha_Books #OmegaPlus_Books #ETS_Books #Gamma_Books</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh Alphabooks</p>\r\n\r\n<p>T&aacute;c giả DK</p>\r\n\r\n<p>Ng&agrave;y xuất bản 05-2019</p>\r\n\r\n<p>K&iacute;ch thước 25,2 x 30,1cm</p>\r\n\r\n<p>Loại b&igrave;a B&igrave;a cứng</p>\r\n\r\n<p>Số trang 362&nbsp;</p>\r\n', '100000', '80000', 1, 0, 10, 'Sách_giao_duc2.png', '2021-09-29'),
(87, 28, 2, '1000 Từ Tiếng Anh Hữu Ích (Song Ngữ Việt - Anh) - Xây Dựng Vốn Từ Vựng Và Kỹ Năng Ngôn Ngữ Cho Trẻ', '<p>Cuốn 1000 từ tiếng Anh hữu &iacute;ch d&agrave;nh cho c&aacute;c b&eacute; bắt đầu l&agrave;m quen với tiếng Anh. Mỗi trang đều được minh họa đầy m&agrave;u sắc để phụ huynh v&agrave; b&eacute; c&ugrave;ng đọc s&aacute;ch thật vui, đồng thời gi&uacute;p b&eacute; ph&aacute;t triển hệ từ vựng v&agrave; kỹ năng ng&ocirc;n ngữ. Với c&aacute;c từ vựng được chọn lọc kỹ c&agrave;ng v&agrave; tham khảo &yacute; kiến của chuy&ecirc;n gia tư vấn gi&aacute;o dục h&agrave;ng đầu, cuốn s&aacute;ch n&agrave;y sẽ gi&uacute;p trẻ mở rộng vốn từ cũng như bồi đắp cho trẻ khả năng đọc v&agrave; viết từ sớm. C&aacute;c từ vựng trong s&aacute;ch được sắp xếp theo những chủ đề thường nhật, li&ecirc;n hệ với đời sống m&agrave; trẻ đ&atilde; quen thuộc, từ động vật hoang d&atilde;, nghề nghiệp đến m&agrave;u sắc, h&igrave;nh dạng v&agrave; con số&hellip; S&aacute;ch cũng bao gồm năm truyện tranh đơn giản được minh họa ngộ nghĩnh, đ&aacute;ng y&ecirc;u. C&aacute;c c&acirc;u chuyện n&agrave;y giới thiệu những từ th&ocirc;ng dụng, đặt từ vựng v&agrave;o trong ngữ cảnh để gi&uacute;p b&eacute; ph&aacute;t triển kỹ năng đặt c&acirc;u cũng như kỹ năng kể chuyện. Sở hữu cuốn s&aacute;ch tuyệt vời n&agrave;y, c&aacute;c bạn nhỏ sẽ tha hồ vừa học những từ vựng bổ &iacute;ch vừa thư gi&atilde;n với những tranh vẽ v&agrave; ảnh chụp đầy sống động cũng như c&aacute;c tr&ograve; chơi tương t&aacute;c th&uacute; vị. Về Dorling Kindersley: Dorling Kindersley (hay DK) l&agrave; nh&agrave; xuất bản uy t&iacute;n h&agrave;ng đầu, từng đạt nhiều giải thưởng ở mảng s&aacute;ch h&igrave;nh ảnh d&agrave;nh cho thiếu nhi, được c&aacute;c bậc phụ huynh cũng như c&aacute;c thầy c&ocirc; tin tưởng v&agrave; được trẻ em tr&ecirc;n to&agrave;n thế giới y&ecirc;u mến. C&aacute;c s&aacute;ch của DK lu&ocirc;n kết hợp t&agrave;i t&igrave;nh những h&igrave;nh ảnh minh họa đặc sắc với nội dung được bi&ecirc;n soạn mạch lạc, r&otilde; r&agrave;ng bởi c&aacute;c chuy&ecirc;n gia trong từng lĩnh vực.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: Đ&ocirc;ng A</p>\r\n\r\n<p>Nh&agrave; xuất bản: D&acirc;n Tr&iacute;&nbsp;</p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Dịch giả: Th&ugrave;y Dương</p>\r\n\r\n<p>K&iacute;ch thước: 21.6 x 27.6 cm</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Số trang: 61 trang</p>\r\n\r\n<p>H&igrave;nh thức: B&igrave;a cứng c&oacute; b&igrave;a &aacute;o metalize, in m&agrave;u to&agrave;n bộ</p>\r\n', '90000', '75000', 1, 0, 20, 'Sách_giao_duc1.png', '2021-09-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `tintuc_id` int(11) NOT NULL,
  `tintuc_name` varchar(100) DEFAULT NULL,
  `tomtat` text DEFAULT NULL,
  `img_dautrang` varchar(50) DEFAULT NULL,
  `noidung_tin` text DEFAULT NULL,
  `danhmuctin_id` int(11) DEFAULT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaythang` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`tintuc_id`, `tintuc_name`, `tomtat`, `img_dautrang`, `noidung_tin`, `danhmuctin_id`, `hienthi`, `ngaythang`) VALUES
(16, 'Giảng viên tạo thiết bị diệt nCoV trong phòng kín', '<p>Thiết bị do TS Nguyễn Phan Ki&ecirc;n ph&aacute;t triển tự động tạo ozone để bất hoạt nCoV c&ugrave;ng c&aacute;c vi khuẩn kh&aacute;c trong kh&ocirc;ng kh&iacute; v&agrave; bề mặt ph&ograve;ng.</p>\r\n', 'may-diet-virus-9245-1632971235.jpg', '<p>Thiết bị do TS Nguyễn Phan Ki&ecirc;n, Đại học B&aacute;ch khoa H&agrave; Nội chế tạo nh&igrave;n bề ngo&agrave;i giống điều h&ograve;a kh&ocirc;ng kh&iacute;. M&aacute;y được thiết kế gồm b&agrave;n ph&iacute;m, m&agrave;n h&igrave;nh hiển thị, hệ thống vi điều khiển, modul tạo ozone, hệ thống tạo nhiệt, c&ograve;i, đ&egrave;n cảnh b&aacute;o v&agrave; m&agrave;ng lọc kh&iacute;. Thiết bị đặt tr&ecirc;n gi&aacute; n&ecirc;n c&oacute; thể di chuyển từ ph&ograve;ng n&agrave;y sang ph&ograve;ng kh&aacute;c hoặc tới c&aacute;c khu vực mới ph&aacute;t hiện người nhiễm Covid-19. Một ph&ograve;ng khử khuẩn cần thời gian khoảng hai giờ.</p>\r\n\r\n<p>Khi hoạt động, m&aacute;y d&ugrave;ng một chiết &aacute;p xoay để nhập dữ liệu k&iacute;ch thước ph&ograve;ng, sau đ&oacute; sẽ tự động t&iacute;nh to&aacute;n nồng độ ozone cần tạo tương ứng. Hệ thống vi điều khiển khi đ&oacute; sẽ truyền c&aacute;c dữ liệu đến c&aacute;c modul để tạo ozone. Tiếp theo, quạt gi&oacute; sẽ được bật để tạo luồng kh&iacute; ozone phun v&agrave;o trong ph&ograve;ng. Hệ thống vi điều khiển sẽ khống chế thời gian phun v&agrave; nồng độ tạo ozone trong ph&ograve;ng.</p>\r\n\r\n<p>Khi hết thời gian diệt khuẩn, thiết bị sẽ hạ nồng độ ozone trong ph&ograve;ng xuống bằng c&ocirc;ng nghệ nhiệt, biến đổi ozone th&agrave;nh oxy trước khi b&aacute;o hiệu kết th&uacute;c chu tr&igrave;nh khử khuẩn.</p>\r\n\r\n<p>M&aacute;y c&oacute; thể d&ugrave;ng trong c&aacute;c bệnh viện, ph&ograve;ng học, xe kh&aacute;ch, m&aacute;y bay, khu vệ sinh c&ocirc;ng cộng, khử khuẩn thiết bị y tế... Tuy nhi&ecirc;n, &quot;nhược điểm của thiết bị l&agrave; kh&ocirc;ng thể khử khuẩn khi c&oacute; người trong ph&ograve;ng&quot;, TS Ki&ecirc;n n&oacute;i.</p>\r\n\r\n<p>Thiết bị hiện được đặt thử nghiệm tại Bệnh viện Qu&acirc;n y 103. Ng&agrave;y 23/9 Bộ m&ocirc;n - Khoa Vi sinh, Bệnh viện Qu&acirc;n y 103 đ&atilde; thử nghiệm khả năng diệt khuẩn của m&aacute;y bằng c&aacute;ch d&ugrave;ng tăm b&ocirc;ng v&ocirc; tr&ugrave;ng lăn to&agrave;n bộ bề mặt của một vị tr&iacute; tr&ecirc;n mỗi đĩa petri rồi đưa v&agrave;o ống nghiệm. C&aacute;c đĩa n&agrave;y đặt tr&ecirc;n b&agrave;n l&agrave;m việc.</p>\r\n\r\n<p>Sau 24 v&agrave; 48 giờ m&aacute;y l&agrave;m việc, nh&oacute;m nghi&ecirc;n cứu kiểm tra thấy kh&ocirc;ng c&ograve;n bất kỳ loại vi khuẩn n&agrave;o sống s&oacute;t trong c&aacute;c mẫu. Kiểm tra sự c&oacute; mặt của vi khuẩn trong c&aacute;c mẫu kh&ocirc;ng kh&iacute; sau thử nghiệm khử nhiễm bằng m&aacute;y tạo ozone cho thấy kh&ocirc;ng c&oacute; bất cứ loại vi khuẩn n&agrave;o tồn tại, chỉ c&ograve;n một số nấm mốc nhỏ.</p>\r\n\r\n<p>PGS.TS Nguyễn Th&aacute;i Sơn, Trường Bộ m&ocirc;n - Khoa Vi sinh, Bệnh viện Qu&acirc;n y 103 cho biết, mục đ&iacute;ch của m&aacute;y n&agrave;y l&agrave; diệt nCoV - virus kh&ocirc;ng c&oacute; b&agrave;o tử n&ecirc;n c&aacute;c virus chỉ điểm đưa v&agrave;o thử nghiệm được chọn theo nh&oacute;m n&agrave;y (chọn virus c&oacute; sức đề kh&aacute;ng cao nhất). &quot;M&aacute;y đ&atilde; diệt được virus chỉ điểm đồng nghĩa cũng diệt được nCoV&quot;, &ocirc;ng n&oacute;i.</p>\r\n\r\n<p>PGS Sơn cho biết, m&aacute;y c&oacute; thể đưa ngay v&agrave;o ứng dụng để diệt virus tr&ecirc;n c&aacute;c thiết bị y tế l&agrave; đồ bảo hộ y tế, khẩu trang, k&iacute;nh chắn giọt bắn, mũ... Thay v&igrave; thải bỏ ra m&ocirc;i trường, chỉ cần đưa c&aacute;c đồ d&ugrave;ng n&agrave;y v&agrave;o ph&ograve;ng k&iacute;n, bật m&aacute;y diệt virus l&ecirc;n l&agrave; c&oacute; thể t&aacute;i sử dụng an to&agrave;n. Sau dịch Covid-19, c&oacute; thể sử dụng thiết bị để diệt khuẩn ở c&aacute;c cơ sở y tế, nơi c&oacute; nguy cơ nhiễm khuẩn...</p>\r\n\r\n<p>&Ocirc;ng Sơn cũng n&ecirc;u điểm yếu của m&aacute;y l&agrave; chưa diệt sạch được nấm mốc do cấu tạo v&aacute;ch nấm rất kh&oacute; xuy&ecirc;n thấu. &quot;Muốn diệt cả nấm mốc th&igrave; phải tăng lượng ozone l&ecirc;n, nhưng tăng qu&aacute; cao sẽ ảnh hưởng đến c&aacute;c thiết bị kh&aacute;c&quot;, &ocirc;ng Sơn n&oacute;i.</p>\r\n\r\n<p>TS Nguyễn Phan Ki&ecirc;n cho biết, sau khi c&oacute; kết quả thử nghiệm sẽ gia c&ocirc;ng ho&agrave;n thiện mẫu m&atilde;, k&ecirc;u gọi đầu tư để thương mại h&oacute;a sản phẩm, sớm đưa ra thị trường phục vụ c&ocirc;ng t&aacute;c ph&ograve;ng chống Covid-19.</p>\r\n\r\n<p>Hiện c&aacute;c c&ocirc;ng bố khoa học chứng minh khả năng bất hoạt được nCoV c&oacute; c&aacute;c c&ocirc;ng nghệ bao gồm ozone, UVC, plasma v&agrave; một số nguy&ecirc;n l&yacute; m&aacute;y lọc kh&ocirc;ng kh&iacute; c&oacute; khả năng diệt virus.</p>\r\n\r\n<p>C&aacute;c thiết bị lọc kh&ocirc;ng kh&iacute; v&agrave; khử khuẩn của một số h&atilde;ng đang c&oacute; tr&ecirc;n thị trường hoạt động tr&ecirc;n nguy&ecirc;n l&yacute; h&uacute;t kh&ocirc;ng kh&iacute; bẩn v&agrave;o, lọc giữ lại virus v&agrave; diệt bằng c&aacute;c c&ocirc;ng nghệ kh&aacute;c nhau trong đ&oacute; c&oacute; sử dụng tia UV hoặc ho&aacute; chất. Một số thiết bị d&ugrave;ng để khử tr&ugrave;ng ph&ograve;ng phẫu thuật v&agrave; thiết bị tại c&aacute;c bệnh viện cũng d&ugrave;ng ho&aacute; chất.</p>\r\n\r\n<p>Thiết bị n&agrave;y của nh&oacute;m nghi&ecirc;n cứu kh&ocirc;ng d&ugrave;ng h&oacute;a chất phun l&ecirc;n bề mặt, v&igrave; thế, sau khi khử khuẩn kh&ocirc;ng cần phải lau ch&ugrave;i lại bề mặt thiết bị v&agrave; kh&ocirc;ng ảnh hưởng đến thiết bị y tế đắt tiền trong c&aacute;c bệnh viện.</p>\r\n', 4, 1, '2021-09-30'),
(17, 'Ý tưởng fintech có cơ hội nhận đầu tư nước ngoài', '<p>Sinh vi&ecirc;n, doanh nghiệp Việt khi tham gia cuộc thi khởi nghiệp về c&ocirc;ng nghệ t&agrave;i ch&iacute;nh (fintech) c&oacute; thể nhận đầu tư, hỗ trợ t&agrave;i ch&iacute;nh từ c&aacute;c quỹ, vườn ươm tạo.</p>\r\n', 'be96f78186c36f9d36d2.jpg', '<p>S&aacute;ng 30/9, cuộc thi &quot;T&igrave;m kiếm t&agrave;i năng khởi nghiệp trong lĩnh vực c&ocirc;ng nghệ t&agrave;i ch&iacute;nh&quot; được khởi động trong khu&ocirc;n khổ Techfest 2021 để t&igrave;m ra những &yacute; tưởng, sản phẩm c&ocirc;ng nghệ hỗ trợ trong hoạt động thanh to&aacute;n, cho vay ng&acirc;n h&agrave;ng, quản l&yacute; t&agrave;i ch&iacute;nh c&aacute; nh&acirc;n v&agrave; c&ocirc;ng ty...</p>\r\n\r\n<p>PGS.TS Phạm Thị Tuyết, Học viện Ng&acirc;n h&agrave;ng, Trưởng l&agrave;ng Fintech cho biết, tham gia cuộc thi, c&aacute;c nh&oacute;m được kết nối với cố vấn, chuy&ecirc;n gia c&ocirc;ng nghệ t&agrave;i ch&iacute;nh trong c&aacute;c vườn ươm, quỹ đầu tư trong nước v&agrave; quốc tế để từng bước hiện thực &yacute; tưởng. Ngo&agrave;i ra, chương tr&igrave;nh tổ chức buổi học về kỹ năng khởi nghiệp đổi mới s&aacute;ng tạo v&agrave; quản trị vận h&agrave;nh để ph&aacute;t triển bền vững c&aacute;c dự &aacute;n.</p>\r\n\r\n<p>Theo b&agrave; Tuyết, những đội thi &yacute; tưởng cần n&ecirc;u r&otilde; t&iacute;nh khả thi, điểm mới v&agrave; bản demo của sản phẩm trong thời gian tới. Đối với đội c&oacute; sẵn sản phẩm, cần đưa ra c&aacute;c mốc cụ thể về kế hoạch thương mại h&oacute;a v&agrave; kinh doanh.</p>\r\n\r\n<p>C&aacute;c startup bắt đầu đăng k&yacute; dự thi từ 15/9 đến hết ng&agrave;y 12/10, qua c&aacute;c v&ograve;ng chọn top 20, top 10 v&agrave; top 3. Giải thưởng cho đội c&oacute; &yacute; tưởng xuất sắc l&agrave; 30 triệu đồng v&agrave; đội c&oacute; sản phẩm l&agrave; 50 triệu đồng. Ngo&agrave;i ra, sản phẩm nhận giải Nhất, Nh&igrave; v&agrave; &yacute; tưởng xuất sắc được&nbsp;gửi thi top 60&nbsp;Cuộc thi &quot;T&igrave;m kiếm t&agrave;i năng khởi nghiệp đổi mới s&aacute;ng tạo quốc gia Techfest 2021&quot;.</p>\r\n\r\n<p>&Ocirc;ng Phạm Hồng Quất, Cục trưởng Cục Ph&aacute;t triển Thị trường v&agrave; Doanh nghiệp Khoa học c&ocirc;ng nghệ kỳ vọng, cuộc thi sẽ gi&uacute;p L&agrave;ng Fintech ph&aacute;t huy vai tr&ograve; cầu nồi giữa c&aacute;c th&agrave;nh phần trong hệ sinh th&aacute;i c&ocirc;ng nghệ t&agrave;i ch&iacute;nh từ sinh vi&ecirc;n đến doanh nghiệp, tổ chức đầu tư, cơ quan quản l&yacute;.</p>\r\n\r\n<p>Ngo&agrave;i cuộc thi, L&agrave;ng Fintech sẽ tổ chức c&aacute;c buổi hội thảo, diễn đ&agrave;n với mục đ&iacute;ch ch&iacute;nh l&agrave; kết nối đầu tư từ c&aacute;c vườm ươm v&agrave; đề xuất c&aacute;c cơ chế ch&iacute;nh s&aacute;ch về c&ocirc;ng nghệ t&agrave;i ch&iacute;nh trong nước thời gian tới.</p>\r\n\r\n<p>Fintech l&agrave; một trong số c&aacute;c L&agrave;ng c&ocirc;ng nghệ được h&igrave;nh th&agrave;nh trong khu&ocirc;n khổ Techfest Việt Nam như: L&agrave;ng Y tế, Gi&aacute;o dục... Năm nay Techfest h&igrave;nh th&agrave;nh một số l&agrave;ng mới gồm: L&agrave;ng C&ocirc;ng nghệ Logistic, L&agrave;ng C&ocirc;ng nghệ Du lịch-Ẩm thực v&agrave; N&ocirc;ng nghiệp Bản địa, L&agrave;ng Nền tảng v&agrave; Hạ tầng Techfest Vietnam 2021.</p>\r\n\r\n<p>Ng&agrave;y hội Techfest năm nay sẽ được tổ chức tại TP HCM v&agrave; kết hợp với Tuần lễ khởi nghiệp v&agrave; đổi mới s&aacute;ng tạo của (WHISE) của th&agrave;nh phố. Ngo&agrave;i sự kiện ch&iacute;nh sẽ c&oacute; chuỗi hội thảo nhiều lĩnh vực, triển l&atilde;m thực tế ảo v&agrave; hoạt động từ c&aacute;c l&agrave;ng c&ocirc;ng nghệ như tập huấn, giải đ&aacute;p thắc mắc, chiến dịch g&acirc;y quỹ cộng đồng.</p>\r\n\r\n<p>Ng&agrave;y hội Khởi nghiệp s&aacute;ng tạo quốc gia Techfest l&agrave; sự kiện thường ni&ecirc;n lớn nhất d&agrave;nh cho doanh nghiệp khởi nghiệp đổi mới s&aacute;ng tạo Việt Nam dưới sự chỉ đạo của Bộ Khoa học v&agrave; C&ocirc;ng nghệ phối hợp Bộ Ngoại giao, Ủy ban Nh&acirc;n d&acirc;n TP HCM v&agrave; Ph&ograve;ng thương mại c&ocirc;ng nghiệp Việt Nam (VCCI).</p>\r\n', 4, 1, '2021-09-30'),
(18, 'Kỹ sư Việt dùng cáp quang biển dự báo sóng thần', '<p>L&ecirc; Th&aacute;i Sơn (34 tuổi) đang c&ugrave;ng cộng sự tại Nokia Bell Labs (Mỹ) biến tuyến c&aacute;p quang biển nối c&aacute;c lục địa với nhau th&agrave;nh mạng cảm biến lớn nhất thế giới.</p>\r\n', 'le-thai-son-vnexpress.jpg', '<p>Chia sẻ với&nbsp;<em>VnExpress&nbsp;</em>từ Mỹ, Sơn tiết lộ dự &aacute;n anh đang theo đuổi được kỳ vọng gi&uacute;p tăng tốc độ nh&agrave; mạng, ph&aacute;t triển hệ thống SOS, cảnh b&aacute;o sớm động đất, s&oacute;ng thần m&agrave; kh&ocirc;ng cần d&ugrave;ng th&ecirc;m thiết bị đặc biệt n&agrave;o.</p>\r\n\r\n<p>Hiện nay c&aacute;c hệ thống thăm d&ograve; địa chấn đại dương v&agrave; tr&ecirc;n bờ chỉ c&oacute; thể cung cấp một c&aacute;ch kh&ocirc;ng đầy đủ, kh&ocirc;ng tức thời về động đất hay s&oacute;ng thần. C&aacute;c trận s&oacute;ng xung k&iacute;ch di chuyển gần với tốc độ &acirc;m thanh n&ecirc;n phải mất một khoảng thời gian nhất định (c&oacute; thể cả giờ) để ph&aacute;t hiện được ch&uacute;ng.</p>\r\n\r\n<p>&Yacute; tưởng biến hệ thống mạng c&aacute;p ngầm dưới đ&aacute;y biển th&agrave;nh mạng địa chấn theo d&otilde;i cảnh b&aacute;o động đất s&oacute;ng thần đ&atilde; được nhiều người trong ng&agrave;nh nghĩ tới nhưng cần lắp đặt th&ecirc;m mạng c&aacute;p quang độc lập với c&aacute;p viễn th&ocirc;ng. Tức l&agrave; nếu một c&aacute;p quang được d&ugrave;ng để cảm biến th&igrave; kh&ocirc;ng thể d&ugrave;ng để truyền th&ocirc;ng tin. C&aacute;ch n&agrave;y rất đắt đỏ. V&igrave; vậy, giải ph&aacute;p của Sơn v&agrave; nh&oacute;m nghi&ecirc;n cứu tận dụng khai th&aacute;c mạng c&aacute;p quang đặt ngầm c&oacute; sẵn, kh&ocirc;ng cần d&ugrave;ng th&ecirc;m thiết bị đặc biệt n&agrave;o do nh&oacute;m triển khai được cho l&agrave; đột ph&aacute;. &quot;Mạng c&aacute;p ngầm truyền dữ liệu với tốc độ &aacute;nh s&aacute;ng, những cảnh b&aacute;o thu nhận sẽ được ph&aacute;t v&agrave;o bờ trong khoảng v&agrave;i phần ngh&igrave;n gi&acirc;y&quot;, anh n&oacute;i.</p>\r\n\r\n<p>Sơn cho biết, sợi c&aacute;p quang rất nhạy cảm với những rung động cơ học, &acirc;m thanh, sự thay đổi về nhiệt độ hay &aacute;p suất đồng thời c&oacute; tốc độ truyền t&iacute;n hiệu v&ocirc; c&ugrave;ng nhanh. &quot;Ch&iacute;nh v&igrave; vậy mạng c&aacute;p quang c&oacute; thể được d&ugrave;ng như một mạng cảm biến thời gian thực v&agrave; c&oacute; thể dự b&aacute;o động đất, s&oacute;ng thần&quot;, anh n&oacute;i.</p>\r\n\r\n<p>Mạng c&aacute;p quang th&ocirc;ng thường bao gồm bộ ph&aacute;t, vật truyền dẫn trung gian (c&aacute;p quang) v&agrave; bộ thu. Qua việc xử l&yacute; t&iacute;n hiệu truyền th&ocirc;ng tin trong c&aacute;p quang, nh&oacute;m nghi&ecirc;n cứu của Sơn đ&atilde; ph&aacute;t triển một c&ocirc;ng nghệ cho ph&eacute;p đo đạc, ph&acirc;n loại được sự rung lắc của đường truyền, qua đ&oacute; gi&uacute;p gi&aacute;m s&aacute;t, thu thập được th&ocirc;ng tin về m&ocirc;i trường xung quanh.</p>\r\n\r\n<p>&quot;Việc xử l&yacute; t&iacute;n hiệu qua sự rung lắc của đường truyền sẽ gi&uacute;p c&aacute;c nh&agrave; nghi&ecirc;n cứu nhận biết được vị tr&iacute; điểm đứt, điểm khởi nguồn hay gi&aacute;m s&aacute;t c&aacute;c chuyển động địa chấn, ph&aacute;t hiện động đất, s&oacute;ng thần, thậm ch&iacute; l&agrave; s&eacute;t&quot;, anh n&oacute;i.</p>\r\n\r\n<p>Nh&oacute;m nghi&ecirc;n cứu đ&atilde; thử nghiệm với sợi c&aacute;p quang của Google, chạy qua biển nối từ New York đến Ph&aacute;p, sử dụng bộ thu ph&aacute;t quang đ&atilde; đo được c&aacute;c hoạt động về địa chất đ&aacute;y biển v&agrave; x&aacute;c định được c&aacute;c trận động đất ở v&ugrave;ng c&oacute; tuyến đường c&aacute;p quang đi qua.</p>\r\n\r\n<p>Bước tiếp theo, nh&oacute;m nghi&ecirc;n cứu ph&aacute;t triển hệ thống mạng cảm biến tương tự trong m&ocirc;i trường th&agrave;nh phố - nơi kh&oacute; khăn hơn rất nhiều so với sự y&ecirc;n tĩnh của đ&aacute;y đại dương. Nếu ph&aacute;t triển được, hệ thống mạng cảm biến c&oacute; thể đọc được &acirc;m thanh trong bối cảnh kh&ocirc;ng thể kết nối được bất cứ t&iacute;n hiệu n&agrave;o. &quot;Trong trường hợp đ&oacute; mạng c&aacute;p quang c&oacute; thể được sử dụng như một mạng SOS trong trường hợp thi&ecirc;n tai, b&atilde;o lũ&quot;, anh Sơn n&oacute;i.</p>\r\n\r\n<p>Mạng c&aacute;p quang cảm biến l&agrave; &yacute; tưởng nối d&agrave;i trong h&agrave;nh tr&igrave;nh nghi&ecirc;n cứu truyền dữ liệu qua c&aacute;p quang của ch&agrave;ng kỹ sư người Việt. Trước đ&oacute;, Sơn g&acirc;y ấn tượng bởi những dự &aacute;n l&agrave;m thay đổi ng&agrave;nh viễn th&ocirc;ng thế giới, trong đ&oacute; c&oacute; &quot;xem video HD tr&ecirc;n thiết bị di động, robot phẫu thuật được kiểm so&aacute;t qua Internet bởi b&aacute;c sĩ giải phẫu từ xa&quot; bằng kết nối c&aacute;p quang. Đ&acirc;y l&agrave; s&aacute;ng chế gi&uacute;p anh được vinh danh trong danh s&aacute;ch Nh&agrave; s&aacute;ng tạo dưới 35 tuổi.</p>\r\n\r\n<p>Ngo&agrave;i nghi&ecirc;n cứu tận dụng hệ thống c&aacute;p quang biển để biến th&agrave;nh cảm biến dự b&aacute;o động đất, s&oacute;ng thần, Sơn c&ograve;n theo đuổi dự &aacute;n tăng tốc độ truyền dẫn qua sợi quang gi&uacute;p tăng tốc độ Internet l&ecirc;n gấp 10 lần m&agrave; kh&ocirc;ng cần chi ph&iacute; bổ sung v&agrave;o năm 2025.</p>\r\n\r\n<p>Dariusz Nachyla, doanh nh&acirc;n, nh&agrave; đầu tư v&agrave; nh&agrave; tư vấn quản l&yacute; tại TMT Industry, th&agrave;nh vi&ecirc;n ban gi&aacute;m khảo Innovators Under 35 ch&acirc;u &Acirc;u 2020 đ&aacute;nh gi&aacute;, dự &aacute;n của L&ecirc; Th&aacute;i Sơn l&agrave; &quot;sự ti&ecirc;n phong về c&ocirc;ng nghệ&quot;. Đ&acirc;y l&agrave; ph&aacute;t minh c&oacute; thể l&agrave;m &quot;thay đổi ng&agrave;nh viễn th&ocirc;ng với những t&aacute;c động l&ecirc;n tới h&agrave;ng tỷ USD&quot;, Dariusz Nachyla n&oacute;i.</p>\r\n\r\n<p>Th&agrave;nh c&ocirc;ng được ghi nhận khi c&ograve;n rất trẻ nhưng Th&aacute;i Sơn ngại n&oacute;i về m&igrave;nh. Anh tự nhận bản th&acirc;n mang &quot;t&acirc;m hồn tự do&quot;. L&agrave;m việc trong lĩnh vực nghi&ecirc;n cứu đ&ograve;i hỏi sự tập trung v&agrave; sự ki&ecirc;n tr&igrave;, Sơn cho biết đ&atilde; chọn c&aacute;ch kh&ocirc;ng tạo &aacute;p lực l&ecirc;n bản th&acirc;n để giữ đầu &oacute;c c&acirc;n bằng. &quot;C&aacute;ch n&agrave;y gi&uacute;p bạn theo đuổi ho&agrave;i b&atilde;o, mục ti&ecirc;u một c&aacute;ch nhẹ nh&agrave;ng, c&oacute; được sức bền để đi đường xa hơn&quot;, Sơn chia sẻ.</p>\r\n\r\n<p>Nhiều năm trước, anh chưa từng nghĩ một ng&agrave;y sẽ trở th&agrave;nh người Việt đầu ti&ecirc;n l&agrave;m việc cho c&ocirc;ng ty Nokia Bell Labs - trung t&acirc;m nghi&ecirc;n cứu h&agrave;ng đầu thế giới trong lĩnh vực điện tử, c&ocirc;ng nghệ, th&ocirc;ng tin.</p>\r\n\r\n<p>Ch&agrave;ng trai qu&ecirc; Vĩnh Ph&uacute;c vốn l&agrave; cựu học sinh THPT chuy&ecirc;n To&aacute;n của Đại học Khoa học Tự nhi&ecirc;n (ĐHQG H&agrave; Nội), sau đ&oacute; được tuyển thẳng v&agrave;o lớp Kỹ sư T&agrave;i năng của Trường Đại học B&aacute;ch khoa H&agrave; Nội. Đang l&agrave; sinh vi&ecirc;n năm nhất (năm 2006), Sơn nhận học bổng du học to&agrave;n phần tại th&agrave;nh phố Rostov on Don (Nga) nhưng khi đ&oacute; vẫn kh&aacute; mơ hồ về định hướng tương lai. Phải tới khi trở th&agrave;nh nghi&ecirc;n cứu sinh tiến sĩ tại Anh, Sơn mới t&igrave;m được niềm đam m&ecirc; trong nghi&ecirc;n cứu truyền dữ liệu qua c&aacute;p quang v&agrave; quyết t&acirc;m theo đuổi. Năm 2018, anh được vinh danh Nh&agrave; s&aacute;ng tạo dưới 35 tuổi tr&ecirc;n thế giới do tạp ch&iacute; c&ocirc;ng nghệ&nbsp;<em>MIT Technology Review</em>&nbsp;của Mỹ b&igrave;nh chọn.</p>\r\n\r\n<p>L&agrave; một người Việt, Sơn mong muốn g&oacute;p sức m&igrave;nh tạo ra sản phẩm n&agrave;o đ&oacute; mang thương hiệu Việt chất lượng quốc tế. Anh đang cộng t&aacute;c với một số đại học tại Việt Nam để x&acirc;y dựng mạng c&aacute;p quang tốc độ cao, th&ocirc;ng minh. &quot;T&ocirc;i cảm nhận được tiềm năng của người Việt xứng đ&aacute;ng c&oacute; vị tr&iacute; tốt hơn tr&ecirc;n bản đồ c&ocirc;ng nghệ thế giới&quot;, anh n&oacute;i v&agrave; cho biết rất vui khi thấy một số doanh nghiệp, tập đo&agrave;n lớn ở Việt Nam đ&atilde; ch&uacute; trọng hơn tới việc hỗ trợ nghi&ecirc;n cứu khoa học tại c&aacute;c trường đại học.</p>\r\n', 4, 1, '2021-09-30'),
(19, 'Vệ tinh của Việt Nam sẵn sàng phóng vào đầu tháng 10', '<p>Vệ tinh NanoDragon do Việt Nam chế tạo l&agrave; một trong số 38 nhiệm vụ nghi&ecirc;n cứu ứng dụng c&ocirc;ng nghệ vũ trụ v&agrave;o đời sống, giai đoạn 2016-2020.</p>\r\n', 've-tinh-nano.jpg', '<p>Tại cuộc họp tổng kết Chương tr&igrave;nh khoa học v&agrave; c&ocirc;ng nghệ cấp quốc gia về c&ocirc;ng nghệ Vũ trụ giai đoạn 2016-2020 (Chương tr&igrave;nh), s&aacute;ng 27/9, PGS.TS Do&atilde;n Minh Chung, Chủ nhiệm Chương tr&igrave;nh, Viện H&agrave;n l&acirc;m Khoa học v&agrave; C&ocirc;ng nghệ Việt Nam cho biết, đ&atilde; c&oacute; 38 đề t&agrave;i nghi&ecirc;n cứu được triển khai. Trong số n&agrave;y c&oacute; 26 nhiệm vụ nghi&ecirc;n cứu ứng dụng c&ocirc;ng nghệ vũ trụ v&agrave;o ph&aacute;t triển kinh tế - x&atilde; hội, ứng dụng c&aacute;c m&ocirc; h&igrave;nh, thuật to&aacute;n ph&acirc;n t&iacute;ch giải đo&aacute;n c&aacute;c dữ liệu vệ tinh phục vụ gi&aacute;m s&aacute;t, quản l&yacute; t&agrave;i nguy&ecirc;n thi&ecirc;n nhi&ecirc;n, m&ocirc;i trường, biển đảo, thi&ecirc;n tai bảo đảm quốc ph&ograve;ng an ninh...</p>\r\n\r\n<p>Trong đ&oacute;, đề t&agrave;i nghi&ecirc;n cứu, thiết kế, chế tạo, ph&oacute;ng v&agrave; vận h&agrave;nh vệ tinh si&ecirc;u nhỏ cỡ nano với sản phẩm l&agrave; vệ tinh NanoDragon do Trung t&acirc;m vũ trụ Việt Nam chế tạo th&agrave;nh c&ocirc;ng đ&atilde; chuyển sang Nhật Bản, sẵn s&agrave;ng cho lịch ph&oacute;ng v&agrave;o đầu th&aacute;ng 10 tới tại Trung t&acirc;m Vũ trụ Uchinoura, tỉnh Kagoshima.</p>\r\n\r\n<p>Vệ tinh NanoDragon c&oacute; khối lượng khoảng 4 kg, c&oacute; k&iacute;ch thước 3U (100x100 x340,5mm) được ph&aacute;t triển với mục đ&iacute;ch chứng minh c&oacute; thể d&ugrave;ng c&ocirc;ng nghệ ch&ugrave;m vệ tinh cỡ si&ecirc;u nhỏ để thu t&iacute;n hiệu nhận dạng tự động t&agrave;u thủy sử dụng cho mục đ&iacute;ch theo d&otilde;i, gi&aacute;m s&aacute;t phương tiện tr&ecirc;n biển.</p>\r\n\r\n<p>Vệ tinh NanoDragon cũng được thiết kế để nhằm x&aacute;c minh chất lượng của hệ thống điều khiển v&agrave; x&aacute;c định tư thế vệ tinh v&agrave; một m&aacute;y t&iacute;nh ti&ecirc;n tiến mới được ph&aacute;t triển ri&ecirc;ng d&agrave;nh cho vệ tinh cỡ nhỏ. Vệ tinh NanoDragon dự kiến sẽ hoạt động ở quỹ đạo đồng bộ mặt trời ở độ cao khoảng 560 km.</p>\r\n\r\n<p>Ngo&agrave;i sản xuất vệ tinh, Chương tr&igrave;nh đ&atilde; x&acirc;y dựng được cơ sở dữ liệu viễn th&aacute;m quốc gia, trong đ&oacute; c&oacute; phương ph&aacute;p định danh ảnh VNREDSat-1 tr&ecirc;n to&agrave;n thế giới. C&oacute; 24 bộ số liệu v&agrave; cơ sở dữ liệu (CSDL) chuy&ecirc;n đề ảnh vệ tinh đ&atilde; được ph&aacute;t triển, phục vụ cho nhu cầu gi&aacute;m s&aacute;t t&agrave;i nguy&ecirc;n thi&ecirc;n nhi&ecirc;n, m&ocirc;i trường, v&agrave; thi&ecirc;n tai của Việt Nam. Tr&ecirc;n 20 m&ocirc; h&igrave;nh ứng dụng khoa học v&agrave; c&ocirc;ng nghệ vũ trụ phục vụ ph&aacute;t triển kinh tế x&atilde; hội, trong đ&oacute; sử dụng vệ tinh Việt Nam, gi&aacute;m s&aacute;t v&agrave; dự b&aacute;o thi&ecirc;n tai được triển khai.</p>\r\n\r\n<p>C&aacute;c m&ocirc; h&igrave;nh v&agrave; quy tr&igrave;nh sử dụng dữ liệu ảnh vệ tinh v&agrave; c&aacute;c nguồn dữ liệu kh&aacute;c để x&aacute;c định nồng độ c&aacute;c chất &ocirc; nhiễm nước, t&iacute;nh to&aacute;n ph&aacute;t thải kh&iacute; carbon, cảnh b&aacute;o nhanh sự cố m&ocirc;i trường biển, đ&aacute;nh gi&aacute; h&igrave;nh th&aacute;i v&agrave; quy m&ocirc; bố tr&iacute; cơ sở, trận địa qu&acirc;n sự, gi&aacute;m s&aacute;t h&agrave;nh lang bảo vệ bờ biển... Hệ thống WebGIS sử dụng trong quản l&yacute; v&agrave; gi&aacute;m s&aacute;t t&agrave;i nguy&ecirc;n, m&ocirc;i trường, thi&ecirc;n tai, chất lượng nước, lớp phủ rừng, mức độ &ocirc; nhiễm kh&ocirc;ng kh&iacute;... cũng l&agrave; th&agrave;nh tựu đ&aacute;ng n&oacute;i của c&ocirc;ng nghệ vũ trụ thời gian qua.</p>\r\n\r\n<p>C&aacute;c nh&oacute;m nghi&ecirc;n cứu trong Chương tr&igrave;nh đ&atilde; x&acirc;y dựng phần mềm phục vụ điều khiển vệ tinh, xử l&yacute; n&acirc;ng cao chất lượng ảnh vệ tinh; phần mềm m&ocirc; phỏng c&ocirc;ng nghệ chế tạo, thử nghiệm vệ tinh v&agrave; Trạm mặt đất, phương tiện ph&oacute;ng vệ tinh;</p>\r\n\r\n<p>C&aacute;c hệ thống phần mềm hỗ trợ t&iacute;ch hợp th&ocirc;ng tin gi&aacute;m s&aacute;t một số mục ti&ecirc;u, đối tượng (t&agrave;u thuyền v&agrave; gi&agrave;n khoan) tr&ecirc;n v&ugrave;ng biển Việt Nam; m&ocirc; phỏng c&ocirc;ng nghệ chế tạo, thử nghiệm vệ tinh cỡ Nano; Phần mềm m&ocirc; phỏng c&ocirc;ng nghệ chế tạo, thử nghiệm t&ecirc;n lửa đẩy... đ&atilde; được triển khai.</p>\r\n\r\n<p>PGS.TS Do&atilde;n Minh Chung nhận định, Chương tr&igrave;nh đ&atilde; ho&agrave;n th&agrave;nh c&aacute;c chỉ ti&ecirc;u đặt ra. C&aacute;c nhiệm vụ khoa học được lựa chọn để thực hiện đều c&oacute; h&agrave;m lượng khoa học c&ocirc;ng nghệ cao, đ&aacute;p ứng được c&aacute;c nhu cầu cấp thiết về nghi&ecirc;n cứu triển khai, ứng dụng c&ocirc;ng nghệ vũ trụ giải quyết c&aacute;c vấn đề cấp b&aacute;ch của khoa học, c&ocirc;ng nghệ, kinh tế - x&atilde; hội, quốc ph&ograve;ng - an ninh.</p>\r\n\r\n<p>&Ocirc;ng Chung cũng chỉ ra một số điểm c&ograve;n tồn tại của Chương tr&igrave;nh đ&oacute; l&agrave; chưa bao qu&aacute;t được hết c&aacute;c nội dung được ph&ecirc; duyệt. Trong đ&oacute;, ứng dụng vệ tinh viễn th&ocirc;ng kết nối với hạ tầng quốc gia, nghi&ecirc;n cứu cơ bản về vật liệu trong m&ocirc;i trường vũ trụ... chưa được nghi&ecirc;n cứu tới do nội dung qu&aacute; rộng, chưa c&oacute; đủ kinh ph&iacute; v&agrave; thời gian triển khai tr&ecirc;n thực tế.</p>\r\n\r\n<p>Trong giai đoạn đến năm 2030, c&aacute;c nh&agrave; khoa học kiến nghị c&aacute;c cơ quan quản l&yacute; tiếp tục cải tiến thủ tục h&agrave;nh ch&iacute;nh, quy tr&igrave;nh đề xuất v&agrave; x&aacute;c định nhiệm vụ khoa học v&agrave; c&ocirc;ng nghệ. C&aacute;c đề t&agrave;i nghi&ecirc;n cứu n&acirc;ng cao chất lượng v&agrave; tăng t&iacute;nh ứng dụng thực tiễn.</p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học cũng mong muốn tăng mức đầu tư, r&uacute;t ngắn thời gian ph&ecirc; duyệt c&aacute;c đề t&agrave;i, đặc biệt l&agrave; c&aacute;c đề t&agrave;i nghi&ecirc;n cứu ph&aacute;t triển c&ocirc;ng nghệ, tạo điều kiện cho việc ho&agrave;n th&agrave;nh c&aacute;c sản phẩm chất lượng cao.</p>\r\n', 4, 1, '2021-09-30'),
(20, 'Cảm biến phát hiện khí amoniac trong 30 giây', '<p>Thiết bị được nh&oacute;m nghi&ecirc;n cứu Đại học C&ocirc;ng nghệ ph&aacute;t triển dựa tr&ecirc;n m&agrave;ng nano, c&oacute; thể ph&aacute;t hiện nồng độ amoniac từ mức 10 ppm.</p>\r\n', 'anh-cam-bien-9025-1632566951.jpg', '<p>Cảm biến ph&aacute;t hiện amoniac do GS.TS Nguyễn Năng Định, khoa Vật l&yacute; Kỹ thuật v&agrave; C&ocirc;ng nghệ Nano, trường Đại học C&ocirc;ng nghệ (Đại học Quốc gia H&agrave; Nội) c&ugrave;ng c&aacute;c cộng sự nghi&ecirc;n cứu v&agrave; chế tạo.</p>\r\n\r\n<p>Amoniac (NH<sub>3</sub>) l&agrave; loại kh&iacute; độc kh&ocirc;ng m&agrave;u, kh&oacute; nhận biết trong kh&ocirc;ng kh&iacute;.Tr&ecirc;n thực tế, kh&iacute; n&agrave;y c&oacute; thể tồn tại với nồng độ thấp trong m&ocirc;i trường sống, lao động h&agrave;ng ng&agrave;y. Nếu nồng độ (t&iacute;nh theo ppm) vượt qu&aacute; ngưỡng cho ph&eacute;p (50 ppm), chỉ trong 15 ph&uacute;t, NH<sub>3</sub>&nbsp;g&acirc;y nhiễm độc cho cơ thể con người.</p>\r\n\r\n<p>Vốn c&oacute; kinh nghiệm ph&aacute;t triển linh kiện b&aacute;n dẫn từ vật liệu nano như đi&ocirc;t ph&aacute;t quang hữu cơ (OLED), pin mặt trời hữu cơ (OSC), khi nghe th&ocirc;ng tin những vụ ngộ độc kh&iacute; thải amoniac, năm 2018, GS Định bắt tay nghi&ecirc;n cứu, chế tạo cảm biến.</p>\r\n\r\n<p>GS Nguyễn Năng Định cho biết, cảm biến do nh&oacute;m nghi&ecirc;n cứu chế tạo c&oacute; thể ph&aacute;t hiện nồng độ amoniac từ mức dưới 10 ppm trong thời gian phản hồi dưới 30 gi&acirc;y.</p>\r\n\r\n<p>Cảm biến amoniac được chế tạo kết hợp ba loại vật liệu, gồm polymer dẫn điện, oxit graphene v&agrave; ống nanocarbon. C&aacute;c vật liệu n&agrave;y c&oacute; ưu điểm về khả năng hấp phụ, t&iacute;nh truyền hạt tải v&agrave; cơ học tốt, để l&agrave;m lớp m&agrave;ng si&ecirc;u nhạy với amoniac.</p>\r\n\r\n<p>Nh&oacute;m thử nghiệm c&aacute;c tỷ lệ phối trộn kh&aacute;c nhau cho ba vật liệu v&agrave; t&igrave;m ra c&ocirc;ng thức, tạo lớp m&agrave;ng tổng hợp c&oacute; khả năng hấp phụ amoniac cao tới 95%.</p>\r\n\r\n<p>Theo GS Định, cảm biến n&agrave;y ph&aacute;t hiện amoniac theo nguy&ecirc;n l&yacute;, khi lớp m&agrave;ng nano tiếp x&uacute;c với kh&iacute; amoniac, nồng độ kh&iacute; c&agrave;ng cao, điện trở cảm biến c&agrave;ng tăng l&ecirc;n. Với độ nhạy tương đối đạt 0,031%/ppm, nh&oacute;m nghi&ecirc;n cứu dự định t&iacute;ch hợp t&iacute;nh năng ph&aacute;t quang của vật liệu nano, chấm lượng tử đưa v&agrave;o cảm biến, c&oacute; thể hiển thị khi ph&aacute;t hiện lượng kh&iacute; độc vượt qu&aacute; ngưỡng. Ngo&agrave;i ra, nh&oacute;m c&oacute; thể ph&aacute;t triển phần mềm server gi&aacute;m s&aacute;t từ xa dữ liệu thu nhận được từ c&aacute;c thiết bị cảm biến.</p>\r\n\r\n<p>GS Định cho biết, trong sản xuất c&ocirc;ng nghiệp hoặc trang trại nu&ocirc;i gia s&uacute;c, gia cầm, cảm biến n&agrave;y c&oacute; thể lắp c&aacute;ch nhau khoảng 1 m để ph&aacute;t hiện nhanh kh&iacute; amoniac ph&acirc;n t&aacute;n trong m&ocirc;i trường. &Ocirc;ng cũng hy vọng trong tương lai gần c&oacute; thể phối hợp c&ugrave;ng c&aacute;c nh&oacute;m nghi&ecirc;n cứu trong nước về cảm biến kh&iacute; để sớm thương mai h&oacute;a sản phẩm, giảm phụ thuộc nguồn thiết bị nhập ngoại.</p>\r\n', 4, 1, '2021-09-30'),
(21, 'Ra mắt Làng sáng chế tại Techfest 2021', '<p>&quot;L&agrave;ng S&aacute;ng chế v&agrave; Doanh nghiệp Đổi mới s&aacute;ng tạo&quot; h&igrave;nh th&agrave;nh trong khu&ocirc;n khổ Techfest 2021 để hỗ trợ c&aacute;c startup thương mại h&oacute;a kết quả nghi&ecirc;n cứu.</p>\r\n', 'ong-tran-giang-khue1.jpg', '<p>Tại sự kiện c&ocirc;ng bố s&aacute;ng 25/9, TS Phạm Hồng Quất, Cục trưởng Cục Ph&aacute;t triển Thị trường v&agrave; Doanh nghiệp C&ocirc;ng nghệ (Bộ Khoa học v&agrave; C&ocirc;ng nghệ) cho biết một thực trạng, sau cấp bằng sở hữu tr&iacute; tuệ, việc kết nối tổ chức v&agrave; doanh nghiệp để chuyển giao, đầu tư v&agrave;o s&aacute;ng chế chưa được thực hiện nhiều v&agrave; thường xuy&ecirc;n. V&igrave; vậy cần c&oacute; tổ chức lan tỏa ra cộng đồng biến c&aacute;c s&aacute;ng chế th&agrave;nh sản phẩm dịch vụ cụ thể.</p>\r\n\r\n<p>&Ocirc;ng Quất kỳ vọng, L&agrave;ng S&aacute;ng chế sẽ g&oacute;p phần đưa t&agrave;i sản tr&iacute; tuệ được đ&oacute;ng g&oacute;p nhiều hơn, c&oacute; nhiều s&aacute;ng chế được thương mại h&oacute;a; gi&uacute;p thế hệ trẻ tiếp cận nhiều hơn với khoa học c&ocirc;ng nghệ v&agrave; lĩnh vực s&aacute;ng chế.</p>\r\n\r\n<p>L&agrave;ng S&aacute;ng chế v&agrave; Doanh nghiệp Đổi mới s&aacute;ng tạo ra đời để kết nối cộng đồng s&aacute;ng chế cả nước với c&aacute;c doanh nghiệp, viện trường, chuyển giao c&ocirc;ng nghệ. &Ocirc;ng Trần Giang Khu&ecirc;, Ph&oacute; tổng Thư k&yacute; Thường trực, Hội S&aacute;ng chế Việt Nam giữ vị tr&iacute; Trưởng l&agrave;ng. Đ&acirc;y l&agrave; l&agrave;ng mới lần đầu ti&ecirc;n được th&agrave;nh lập tại Techfest Việt Nam.</p>\r\n\r\n<p>&Ocirc;ng Khu&ecirc; cho biết, L&agrave;ng s&aacute;ng chế tập trung 5 hoạt động ch&iacute;nh: vinh danh &quot;Ng&ocirc;i sao s&aacute;ng chế IPStart&quot;, tổ chức cuộc thi Giải ph&aacute;p thương mại h&oacute;a s&aacute;ng chế, tổ chức c&aacute;c hội thảo, tập huấn v&agrave; triển l&atilde;m c&ocirc;ng nghệ, c&aacute;c kết quả được vinh danh.</p>\r\n\r\n<p>Qua c&aacute;c hoạt động của L&agrave;ng sẽ ghi nhận vinh danh c&aacute;c c&aacute; nh&acirc;n c&oacute; nhiều bằng s&aacute;ng chế nhất trong giai đoạn 2016-2021, t&igrave;m ra những giải ph&aacute;p, m&ocirc; h&igrave;nh mới, khả thi v&agrave; đem lại hiệu quả đời sống để lan tỏa rộng hơn.</p>\r\n\r\n<p>Trong khu&ocirc;n khổ Techfest năm nay (từ 16/9-25/12), một số l&agrave;ng mới cũng được ra mắt như: L&agrave;ng C&ocirc;ng nghệ Logistic, L&agrave;ng C&ocirc;ng nghệ Du lịch-Ẩm thực v&agrave; N&ocirc;ng nghiệp Bản địa, L&agrave;ng Nền tảng v&agrave; Hạ tầng Techfest Vietnam 2021.</p>\r\n\r\n<p>Ng&agrave;y hội Techfest năm nay sẽ được tổ chức tại TP HCM v&agrave; kết hợp với Tuần lễ khởi nghiệp v&agrave; đổi mới s&aacute;ng tạo của (WHISE) của th&agrave;nh phố. Ngo&agrave;i sự kiện ch&iacute;nh sẽ c&oacute; chuỗi hội thảo nhiều lĩnh vực, triển l&atilde;m thực tế ảo v&agrave; hoạt động từ c&aacute;c l&agrave;ng c&ocirc;ng nghệ như tập huấn, giải đ&aacute;p thắc mắc, chiến dịch g&acirc;y quỹ cộng đồng.</p>\r\n\r\n<p>Ng&agrave;y hội Khởi nghiệp s&aacute;ng tạo quốc gia Techfest l&agrave; sự kiện thường ni&ecirc;n lớn nhất d&agrave;nh cho doanh nghiệp khởi nghiệp đổi mới s&aacute;ng tạo Việt Nam dưới sự chỉ đạo của Bộ Khoa học v&agrave; C&ocirc;ng nghệ phối hợp Bộ Ngoại giao, Ủy ban Nh&acirc;n d&acirc;n TP HCM v&agrave; Ph&ograve;ng thương mại c&ocirc;ng nghiệp Việt Nam (VCCI).</p>\r\n', 4, 0, '2021-09-30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`tintuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `tintuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
