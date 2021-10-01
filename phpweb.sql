-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 29, 2021 lúc 05:13 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

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
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `thanh_vien`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(1, '742874161', 'abc', 100000, 'chinh chuyển khoản', '00', '13401455', 'NCB', '2020-10-10 01:00:00'),
(2, '608324672', 'abc', 1000000, 'test chuyển khoản', '00', '13401811', 'NCB', '2020-10-11 21:00:00'),
(3, '1134065293', 'CT2', 150000, 'học phí', '00', '13407163', 'NCB', '2020-10-22 23:00:00'),
(4, '596509313', 'CT2', 5000000, 'học phí', '00', '13407176', 'NCB', '2020-10-23 00:00:00'),
(5, '70267166', 'CT2', 5000000, 'học phí', '00', '13407178', 'NCB', '2020-10-23 00:00:00'),
(6, '1672349048', 'CT1', 150000, 'học phí', '00', '13407729', 'NCB', '2020-10-23 21:00:00');

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
(3, 'phuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'phuong');

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
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(5, 2, 2, '444', 5, '2021-09-24 05:13:55', 1, 0);

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
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(3, 21, 2, '5737', '2019-10-04 02:57:00', 23, 0, 0),
(4, 26, 1, '6219', '2019-10-04 02:58:34', 24, 0, 0),
(5, 25, 3, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(6, 22, 5, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(7, 27, 2, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(8, 21, 1, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(9, 20, 3, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(10, 20, 3, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(11, 26, 1, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(12, 25, 2, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(13, 26, 3, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(14, 27, 1, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(15, 22, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(16, 24, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(17, 20, 1, '555', '2019-10-09 09:50:08', 27, 0, 2);

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

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`giohang_id`, `tensanpham`, `sanpham_id`, `giasanpham`, `hinhanh`, `soluong`) VALUES
(15, 'Nozaki Và Truyện Tranh Thiếu Nữ 4\r\n', 32, '28000', 'cs-bao-dieu-hay.jpg', 2),
(16, 'Sách Hay Lời Từ Chối Hoàn Hảo', 30, '70000', 'hay-lam-viec-thong-minh.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(37, 'Phùng Văn Phương', '0976961375', 'Vĩnh Sơn', 'ok', 'phuong10a2vs1522001@gmail.com', '123456', 1),
(39, 'phung van phuong', '012233', 'vs', 'ok', 'phuong@gmail.com', '', 0);

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
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `brand_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(28, 2, 2, 'Sách - Thay Đổi Tư Duy Hãy Cứ Phi Lý Đi', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', 'Nhà Phát Hành\r\nBloom Books\r\nNgôn ngữ\r\nTiếng Việt\r\nNhập khẩu/ trong nước\r\nTrong nước\r\nISBN\r\n9786047777631\r\nLoại phiên bản\r\nPhiên bản thông thường\r\nLoại nắp\r\nBìa mềm\r\nNăm\r\n2020\r\nKho hàng\r\n39\r\nGửi từ\r\nQuận Tây Hồ, Hà Nộ', '79000', '45000', 1, 1, 10, 'thay-doi-tu-duy.jpg'),
(30, 2, 2, 'Sách Hay Lời Từ Chối Hoàn Hảo', 'Sách Hay Lời Từ Chối Hoàn Hảo', 'Sách Hãy Làm Viêc Thông Minh', '70000', '50000', 1, 1, 10, 'hay-lam-viec-thong-minh.jpg'),
(44, 4, 2, '301 Câu Đàm Thoại Tiếng Hoa', '', '', '25000', '20000', 1, 0, 2, '301 Câu Đàm Thoại Tiếng Hoa.png'),
(46, 4, 2, '5000 Từ Vựng Tiếng Trung Bỏ Túi', '', '', '50000', '39000', 1, 0, 10, '5000 Từ Vựng Tiếng Trung Bỏ Túi.png'),
(48, 3, 1, 'DRAGON BALL(SON GOKU và Những Người Bạn)', '', '', '25000', '20000', 1, 0, 10, 'DRAGON BALL ( SON GOKU và NHỮNG NGƯỜI BẠN).png'),
(50, 2, 2, 'Hiện Thực Hóa Sự Ngiệp', '', '', '80000', '56000', 1, 0, 10, 'Hiện Thực Hóa Sự Nghiệp.png'),
(52, 4, 2, 'Tiếng Hàn Tổng Hợp', '', '', '69999', '45000', 1, 0, 15, 'Tiếng Hàn Tổng Hợp.png'),
(56, 2, 2, 'Thôi Miên Bằng Ngôn Từ', '', '', '56000', '45000', 0, 0, 10, 'thoi_mien_bang_ngon_tu.png'),
(59, 2, 2, 'Sách Đắc Nhân Tâm', '<p>S&aacute;ch Đắc Nh&acirc;n T&acirc;m</p>\r\n', '<p>S&aacute;ch Đắc Nh&acirc;n T&acirc;m</p>\r\n', '90000', '82000', 1, 0, 20, 'dac-nhan-tam.jpg'),
(60, 2, 2, 'Sách Hãy Sống Cuộc Đời Như Bạn Muốn', '<p>S&aacute;ch H&atilde;y L&agrave;m Vi&ecirc;c Th&ocirc;ng Minh</p>\r\n', '<p>S&aacute;ch H&atilde;y L&agrave;m Vi&ecirc;c Th&ocirc;ng Minh</p>\r\n', '40000', '30000', 1, 0, 20, 'hay-lam-viec-thong-minh.jpg'),
(62, 3, 2, 'Bách khoa thiếu nhi - Ai cập cổ đại', '<p>B&aacute;ch khoa thiếu nhi - Ai cập cổ đại (b&igrave;a cứng) Vương triều Ai Cập ở Đ&ocirc;ng Bắc ch&acirc;u Phi hơn 3.000 năm trước để lại cho ch&uacute;ng ta những vị vua cổ đại, những kim tự th&aacute;p kỳ b&iacute; v&agrave; ph&aacute;t minh ra giấy. H&atilde;y c&ugrave;ng t&igrave;m hiểu về đất nước cổ đại n&agrave;y - những bộ luật, những vị thần hay cuộc sống dọc bờ s&ocirc;ng Nin - tất cả c&oacute; trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về c&aacute;c vị vua Ai Cập cổ đại, c&aacute;c vị thần v&agrave; những di t&iacute;ch cổ T&aacute;i hiện c&aacute;c c&ocirc;ng tr&igrave;nh, c&aacute;c kho b&aacute;u khảo cổ qua những h&igrave;nh ảnh sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức khoa học, kỷ lục th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cổ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:&nbsp;</strong>100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh:</strong>&nbsp;Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản:</strong>&nbsp;2020</p>\r\n\r\n<p><strong>Dịch giả:&nbsp;</strong>L&ecirc; Hải Dạng</p>\r\n\r\n<p><strong>B&igrave;a:</strong>&nbsp;b&igrave;a mềm</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;13,5x16,5cm</p>\r\n', '100000', '80000', 1, 0, 20, 'Bách khoa thiếu nhi - Ai cập cổ đại91.jpeg'),
(63, 3, 1, 'Bách khoa thiếu nhi - Trái Đất', '<p><em><strong>------------------Giới thiệu s&aacute;ch-------------</strong></em></p>\r\n\r\n<p>B&aacute;ch khoa thiếu nhi - Tr&aacute;i Đất (b&igrave;a cứng) Tr&aacute;i Đất, h&agrave;nh tinh xanh, ng&ograve;i nh&agrave; của những sa mạc kh&ocirc; cằn, những đ&igrave;nh n&uacute;i chọc trời, những đại dương s&acirc;u thẳm v&agrave; những rừng rậm m&ecirc;nh m&ocirc;ng. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; v&eacute; Tr&aacute;i Đất - c&ugrave;ng t&igrave;m hiểu nguy&ecirc;n nh&acirc;n của động đất; t&igrave;m xem d&ograve;ng s&ograve;ng băng rộng nhất nằm ở đ&acirc;u hay tại sao kh&iacute; hậu Tr&aacute;i Đất lại đang thay đổi - trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về Tr&aacute;i Đất như n&uacute;i lửa, s&ocirc;ng ng&ograve;i v&agrave; thời tiết H&igrave;nh &agrave;nh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức, mốc lịch sử bất ngờ, th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cồ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK&nbsp;</p>\r\n\r\n<p>NXB: NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh: Minh Thắng</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Dạng b&igrave;a: b&igrave;a cứng</p>\r\n\r\n<p>Số trang: 160 trang</p>\r\n\r\n<p>K&iacute;ch thước: 13,5 x 16,5cm</p>\r\n', '100000', '80000', 1, 0, 20, 'Bách khoa thiếu nhi - Trái Đất12.jpeg'),
(65, 20, 2, 'How Food Works - Hiểu Hết Về Thức Ăn', '<p><strong>GIỚI THIỆU S&Aacute;CH</strong></p>\r\n\r\n<p>How Food Works - Hiểu Hết Về Thức Ăn Hướng dẫn đơn giản nhất v&agrave; trực quan nhất từ trước đến nay về thức ăn v&agrave; dinh dưỡng! C&oacute; chế độ ăn n&agrave;o l&agrave; ho&agrave;n hảo kh&ocirc;ng? Ch&uacute;ng ta c&oacute; cần uống 8 cốc nước mỗi ng&agrave;y? Ch&iacute;nh x&aacute;c th&igrave; gluten l&agrave; g&igrave; v&agrave; tại sao nhiều người muốn tr&aacute;nh xa n&oacute; đến vậy? Truyền th&ocirc;ng ngập tr&agrave;n những kh&aacute;m ph&aacute; v&agrave; những lời khuy&ecirc;n mới mẻ về những thứ ch&uacute;ng ta nạp v&agrave;o cơ thể nhưng c&oacute; cơ sở khoa học n&agrave;o cho bất kỳ tuy&ecirc;n bố đ&oacute; kh&ocirc;ng? Với những h&igrave;nh minh họa r&otilde; r&agrave;ng, dễ hiểu, cuốn s&aacute;ch Hiểu hết về thức ăn sẽ mang lại những th&ocirc;ng tin l&yacute; th&uacute; li&ecirc;n quan đến thức ăn, từ c&ocirc;ng đoạn sản xuất đến &iacute;ch lợi/t&aacute;c hại của ch&uacute;ng với sức khỏe.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK</p>\r\n\r\n<p><strong>Người dịch:&nbsp;</strong>Trần Trương Ph&uacute;c Hạnh</p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;Nxb Thế giới</p>\r\n\r\n<p><strong>Nh&agrave; ph&aacute;t h&agrave;nh:&nbsp;</strong>Nh&atilde; Nam</p>\r\n\r\n<p><strong>Định dạng:&nbsp;</strong>B&igrave;a cứng</p>\r\n\r\n<p><strong>K&iacute;ch thước</strong>: 19.5 x 23 cm</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh:</strong>&nbsp;12/2018</p>\r\n', '201000', '180000', 1, 0, 15, 'How Food Works - Hiểu Hết Về Thức Ăn.jpeg'),
(66, 21, 2, 'Bách khoa thiếu nhi Vũ trụ', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ---------------Giới thiệu s&aacute;ch------------------</p>\r\n\r\n<p>S&aacute;ch bản quyền - B&aacute;ch khoa thiếu nhi vũ trụ (b&igrave;a cứng) Vũ trụ chứa vạn vật đang tồn tại như c&aacute;c h&agrave;nh tinh, mặt trăng, c&aacute;c ng&ocirc;i sao v&agrave; những dải thi&ecirc;n h&agrave;. H&atilde;y c&ugrave;ng nhau kh&aacute;m ph&aacute; về Vũ trụ - c&ugrave;ng trả lời c&acirc;u hỏi tinh v&acirc;n l&agrave; g&igrave;, tại sao lại c&oacute; nhật thực, nguyệt thực v&agrave; c&ograve;n k&iacute;nh thi&ecirc;n văn hoạt động như thế n&agrave;o - tất cả những c&acirc;u trả lời đều nằm trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. - Hơn 170 điều th&uacute; vị về c&aacute;c h&agrave;nh tinh, v&igrave; sao, t&agrave;u vũ trụ v&agrave; những chuyến du h&agrave;nh ngo&agrave;i kh&ocirc;ng gian - H&igrave;nh ảnh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao - C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học - Những tri thức khoa học, kỷ lục th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m #sachthieunhi #khoahoc #khampha #sachthieunhihay #bachkhoa</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -------------------Ưu điểm khi mua s&aacute;ch tại shopee nh&agrave; s&aacute;ch Minh Thắng--------------&nbsp;</p>\r\n\r\n<p>Được đ&oacute;ng g&oacute;i bao nilong b&ecirc;n ngo&agrave;i tr&aacute;nh bị hỏng s&aacute;ch, vở, truyện... - Được hỗ trợ, tư vấn v&agrave; chăm s&oacute;c tất cả những s&aacute;ch, vỏ, truyện... mua b&ecirc;n gian h&agrave;ng online - Hướng dẫn chi tiết tải file nghe (đối với s&aacute;ch c&oacute; k&egrave;m file nghe s&aacute;ch, video) - C&aacute;m ơn Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; gh&eacute; thăm v&agrave; ủng hộ nh&agrave; s&aacute;ch Minh Thắng</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả:&nbsp;</strong>DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh:</strong>&nbsp;Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản:&nbsp;</strong>2019 (ISBN: 9786045670743)(M&atilde; s&aacute;ch: 8935236417648)</p>\r\n\r\n<p><strong>Dịch giả:&nbsp;</strong>L&ecirc; Thị Thu Ngọc Dạng</p>\r\n\r\n<p><strong>b&igrave;a:</strong>&nbsp;b&igrave;a cứng</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:&nbsp;</strong>13,5 x16,5cm</p>\r\n', '180000', '150000', 1, 0, 10, 'Bách khoa thiếu nhi Vũ trụ.jpeg'),
(68, 22, 2, 'Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn', '<p>S&aacute;ch do C&ocirc;ng ty Cổ phần Văn h&oacute;a Đ&ocirc;ng A v&agrave; NXB D&acirc;n tr&iacute; li&ecirc;n kết ấn h&agrave;nh Điều g&igrave; l&agrave;m n&ecirc;n một t&aacute;c phẩm nghệ thuật? Người Hy Lạp cổ đại tạo h&igrave;nh vẻ đẹp l&yacute; tưởng như thế n&agrave;o? M&agrave;u sắc c&oacute; g&acirc;y ảnh hưởng trực tiếp đến t&acirc;m hồn kh&ocirc;ng? Cuốn s&aacute;ch n&agrave;y khảo x&eacute;t những c&acirc;u hỏi đ&oacute; v&agrave; nhiều c&acirc;u hỏi kh&aacute;c bằng c&aacute;ch kh&aacute;m ph&aacute; c&aacute;c tr&agrave;o lưu, chủ đề v&agrave; phong c&aacute;ch nghệ thuật then chốt qua hơn 200 t&aacute;c phẩm thuộc nhiều thể loại đa dạng. Bằng ng&ocirc;n từ giản dị, Nghệ thuật &ndash; Kh&aacute;i lược những tư tưởng lớn sẽ đưa bạn xuy&ecirc;n qua l&yacute; thuyết v&agrave; lịch sử nghệ thuật bằng những h&igrave;nh ảnh về c&aacute;c t&aacute;c phẩm vĩ đại nhất tr&ecirc;n thế giới c&ugrave;ng nhiều sơ đồ h&oacute;m hỉnh gi&uacute;p kh&aacute;m ph&aacute; c&aacute;c &yacute; tưởng đằng sau. Từ tượng phồn thực thời tiền sử đến sắp đặt video đương đại, đ&acirc;y l&agrave; cuốn s&aacute;ch vỡ l&ograve;ng ho&agrave;n hảo về nghệ thuật thế giới. D&ugrave; l&agrave; người học nghệ thuật hay chỉ đơn giản l&agrave; th&iacute;ch ngắm ngh&iacute;a c&aacute;c t&aacute;c phẩm, bạn cũng sẽ t&igrave;m thấy trong đ&acirc;y nhiều hiểu biết khơi gợi suy tư về những kiệt t&aacute;c được ưa th&iacute;ch từ l&acirc;u v&agrave; cả những vi&ecirc;n ngọc mới được ph&aacute;t hiện.</p>\r\n', '<p>Nghệ Thuật - Kh&aacute;i Lược Những Tư Tưởng Lớn</p>\r\n\r\n<p><strong>T&aacute;c giả:</strong>&nbsp;DK Người dịch: Thanh Loan</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;19,3 cm x 23,5 cm</p>\r\n\r\n<p><strong>Số trang:&nbsp;</strong>352</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;390.000đ</p>\r\n\r\n<p><strong>H&igrave;nh thức b&igrave;a:</strong>&nbsp;B&igrave;a cứng, c&oacute; &aacute;o, in m&agrave;u to&agrave;n bộ</p>\r\n\r\n<p><strong>M&atilde; sản phẩm:</strong>&nbsp;8936203360523</p>\r\n\r\n<p><strong>M&atilde; ISBN:</strong>&nbsp;978-604-314-455-0</p>\r\n', '280000', '237000', 1, 0, 15, 'Nghệ Thuật - Khái Lược Những Tư Tưởng Lớn.jpeg'),
(69, 23, 2, 'Hiểu hết về kinh doanh - How business works', '<p>Một trong những cuốn cẩm nang về Kinh doanh dễ h&igrave;nh dung nhất từ trước tới nay! Tại sao d&ograve;ng tiền lại quan trọng? Sản xuất tinh gọn l&agrave; g&igrave;? Marketing kỹ thuật số hoạt động ra sao? Th&agrave;nh vi&ecirc;n hội đồng quản trị gồm những ai? Mua b&aacute;n doanh nghiệp l&agrave; g&igrave;? Cấu tr&uacute;c doanh nghiệp ra sao? Khấu hao l&agrave; g&igrave;? Tr&aacute;ch nhiệm x&atilde; hội của doanh nghiệp ra sao? L&agrave;m thế n&agrave;o để c&oacute; thể th&agrave;nh c&ocirc;ng trong thị trường to&agrave;n cầu của thế kỷ 21? Với những h&igrave;nh ảnh bắt mắt, đơn giản, kh&ocirc;ng sử dụng thuật ngữ, How business works - Hiểu hết về kinh doanh giải th&iacute;ch mọi kh&aacute;i niệm li&ecirc;n quan đến lĩnh vực kinh doanh, biến những kh&aacute;i niệm kh&oacute; hiểu nhất trở n&ecirc;n dễ hiểu. Mọi kh&iacute;a cạnh của hoạt động kinh doanh sẽ được xem x&eacute;t, ph&acirc;n t&iacute;ch gi&uacute;p độc giả hiểu r&otilde; hơn về kinh doanh, v&agrave; c&aacute;ch c&aacute;c h&igrave;nh th&aacute;i kinh doanh định h&igrave;nh x&atilde; hội hiện đại. D&ugrave; bạn đang muốn thăng tiến trong c&ocirc;ng việc, khởi sự doanh nghiệp của ri&ecirc;ng m&igrave;nh hay chỉ đơn giản l&agrave; muốn hiểu r&otilde; hơn thế giới kinh doanh v&agrave; t&agrave;i ch&iacute;nh, How business works - Hiểu hết về kinh doanh ch&iacute;nh l&agrave; cuốn cẩm nang kh&ocirc;ng thể bỏ qua!!!</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;Thế Giới</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;351</p>\r\n\r\n<p><strong>K&iacute;ch thước:&nbsp;</strong>19.5x23 cm</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh:</strong>&nbsp;08-01-2020</p>\r\n', '304000', '280000', 1, 0, 15, 'Hiểu hết về kinh doanh - How business works.jpeg'),
(70, 23, 2, 'Kinh tế học - Khái lược những tư tưởng lớn', '<p>Kinh tế học - Kh&aacute;i lược những tư tưởng lớn Điều g&igrave; xảy ra trong giai đoạn khủng hoảng kinh tế? Tiền tệ vận h&agrave;nh ra sao? V&igrave; sao ch&uacute;ng ta phải đ&oacute;ng thuế? Kinh tế học ảnh hưởng đến từng kh&iacute;a cạnh của đời sống của ch&uacute;ng ta, từ việc đi l&agrave;m đến c&aacute;ch ti&ecirc;u tiền &ndash; v&agrave; c&aacute;c &yacute; tưởng kinh tế lớn vẫn đang tiếp tục định h&igrave;nh thế giới ng&agrave;y nay. Kinh tế học - Kh&aacute;i lược những tư tưởng lớn được viết với văn phong đơn giản k&egrave;m theo c&aacute;c biểu đồ giải th&iacute;ch ngắn gọn, dễ hiểu c&aacute;c l&iacute; thuyết quan trọng. Ngo&agrave;i ra c&ograve;n c&oacute; c&aacute;c c&acirc;u tr&iacute;ch dẫn kinh điển dễ nhớ v&agrave; c&aacute;c h&igrave;nh minh họa d&iacute; dỏm, mang lại niềm hứng th&uacute; khi t&igrave;m hiểu về kinh tế học.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;</strong>C&ocirc;ng ty Cổ phần Văn h&oacute;a Đ&ocirc;ng A</p>\r\n\r\n<p><strong>T&aacute;c giả:&nbsp;</strong>DK</p>\r\n\r\n<p><strong>Năm xuất bản:&nbsp;</strong>2019</p>\r\n\r\n<p><strong>Nh&agrave; xuất bản:</strong>&nbsp;NXB D&acirc;n Tr&iacute;</p>\r\n\r\n<p><strong>Số trang:&nbsp;</strong>352</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;19,3 x 23,5 cm</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:&nbsp;</strong>390.000đ</p>\r\n', '370000', '350000', 1, 0, 15, 'Kinh tế học - Khái lược những tư tưởng lớn47.jpeg'),
(71, 24, 2, 'Bách khoa thiếu nhi - Trái Đất', '<p>------------------Giới thiệu s&aacute;ch-------------</p>\r\n\r\n<p>B&aacute;ch khoa thiếu nhi - Tr&aacute;i Đất (b&igrave;a cứng) Tr&aacute;i Đất, h&agrave;nh tinh xanh, ng&ograve;i nh&agrave; của những sa mạc kh&ocirc; cằn, những đ&igrave;nh n&uacute;i chọc trời, những đại dương s&acirc;u thẳm v&agrave; những rừng rậm m&ecirc;nh m&ocirc;ng. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; v&eacute; Tr&aacute;i Đất - c&ugrave;ng t&igrave;m hiểu nguy&ecirc;n nh&acirc;n của động đất; t&igrave;m xem d&ograve;ng s&ograve;ng băng rộng nhất nằm ở đ&acirc;u hay tại sao kh&iacute; hậu Tr&aacute;i Đất lại đang thay đổi - trong cuốn B&aacute;ch khoa thiếu nhi th&uacute; vị n&agrave;y. Hơn 180 điều th&uacute; vị về Tr&aacute;i Đất như n&uacute;i lửa, s&ocirc;ng ng&ograve;i v&agrave; thời tiết H&igrave;nh &agrave;nh minh họa sắc n&eacute;t, độ ph&acirc;n giải cao C&aacute;c kiến thức được minh họa bằng ảnh m&ocirc; h&igrave;nh khoa học Những tri thức, mốc lịch sử bất ngờ, th&uacute; vị v&agrave; đ&aacute;ng quan t&acirc;m C&ugrave;ng t&igrave;m đọc trong bộ B&aacute;ch khoa thiếu nhi: Ai Cập cồ đại * Động vật * Cơ thể người * Động vật c&oacute; v&uacute; * Khoa học * Vũ trụ * Tr&aacute;i đất</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong>T&aacute;c giả</strong>: DK</p>\r\n\r\n<p><strong>Gi&aacute; b&igrave;a:</strong>&nbsp;100.000 ₫</p>\r\n\r\n<p><strong>NXB:</strong>&nbsp;NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p><strong>Ph&aacute;t h&agrave;nh</strong>: Minh Thắng</p>\r\n\r\n<p><strong>Năm xuất bản</strong>: 2020</p>\r\n\r\n<p><strong>Dịch giả:</strong>&nbsp;L&ecirc; Hải Dạng</p>\r\n\r\n<p><strong>B&igrave;a:</strong>&nbsp;b&igrave;a cứng</p>\r\n\r\n<p><strong>Số trang:</strong>&nbsp;160 trang</p>\r\n\r\n<p><strong>K&iacute;ch thước:</strong>&nbsp;13,5 x 16,5cm</p>\r\n', '60000', '50000', 1, 0, 10, 'Bách khoa thiếu nhi - Trái Đất96.jpeg'),
(72, 1, 2, 'Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn', '<p>Ta c&oacute; thực sự l&agrave; những c&aacute; nh&acirc;n tự do với bản sắc ri&ecirc;ng&hellip; hay tất cả ch&uacute;ng ta đều chỉ biết tu&acirc;n phục số đ&ocirc;ng?</p>\r\n\r\n<p>Thi&ecirc;n t&agrave;i l&agrave; nhờ dưỡng dục hay tự nhi&ecirc;n? V&ocirc; thức điều khiển ch&uacute;ng ta như thế n&agrave;o?</p>\r\n\r\n<p>Những c&acirc;u hỏi như tr&ecirc;n ch&iacute;nh l&agrave; tiền đề cho c&aacute;c c&ocirc;ng tr&igrave;nh của nhiều tư tưởng gia v&agrave; khoa học gia lớn của thế giới, trong một lĩnh vực gi&agrave;u sức l&ocirc;i cuốn, đ&oacute; l&agrave; t&acirc;m l&iacute; học.</p>\r\n\r\n<p>Với văn phong dễ hiểu v&agrave; s&aacute;ng sủa, T&acirc;m l&iacute; học &ndash; Kh&aacute;i lược những tư tưởng lớn l&agrave; tập hợp những b&agrave;i viết ngắn gọn h&agrave;m s&uacute;c giải th&iacute;ch r&otilde; những điều kh&oacute; hiểu, những sơ đồ gi&uacute;p l&agrave;m s&aacute;ng tỏ những l&iacute; thuyết rối rắm, những tr&iacute;ch dẫn dễ nhớ, c&ugrave;ng những minh họa d&iacute; dỏm gi&uacute;p ch&uacute;ng ta chơi đ&ugrave;a với những kiến thức nền tảng về t&acirc;m l&iacute; học.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p><strong><em>C&ocirc;ng ty ph&aacute;t h&agrave;nh</em></strong>:Đ&ocirc;ng A</p>\r\n\r\n<p><strong>T&aacute;c giả</strong>:DK NXB:NXB D&acirc;n tr&iacute;</p>\r\n\r\n<p><strong>Ng&agrave;y ph&aacute;t h&agrave;nh</strong>:2019</p>\r\n\r\n<p><strong>Loại b&igrave;a</strong>:B&igrave;a cứng Số trang:352 K&iacute;ch thước:19,3*23,5</p>\r\n', '35000', '27000', 1, 0, 10, 'Tâm Lí Học - Khái Lược Những Tư Tưởng Lớn.jpeg'),
(73, 1, 2, 'How The Body Works - Hiểu Hết Về Cơ Thể', '<p><strong>GIỚI THIỆU</strong></p>\r\n\r\n<p>How The Body Works - Hiểu Hết Về Cơ Thể Tuyệt đối đừng bỏ qua cuốn s&aacute;ch n&agrave;y nếu bạn l&agrave; người ham học hỏi, t&igrave;m t&ograve;i v&agrave; mong muốn kh&aacute;m ph&aacute; ch&iacute;nh cơ thể của m&igrave;nh! Hướng dẫn Đơn giản nhất v&agrave; Trực quan nhất về Cơ Thể Người! Xe m&aacute;y, xe &ocirc; t&ocirc;, tr&ograve; chơi điện tử đều k&egrave;m theo hướng dẫn sử dụng. Cuốn s&aacute;ch tựa như một cuốn cẩm nang gi&uacute;p bạn hiểu được ch&iacute;nh cơ thể của bản th&acirc;n m&igrave;nh. Với những đ&aacute;p &aacute;n được minh họa dễ hiểu, hấp dẫn th&uacute; vị, cuốn s&aacute;ch HOW THE BODY WORKS - Hiểu hết về cơ thể sẽ l&agrave;m s&aacute;ng tỏ qu&aacute; tr&igrave;nh phức tạp đang giữ cho ch&uacute;ng ta tồn tại v&agrave; ph&aacute;t triển. Mời bạn đ&oacute;n đọc.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Người dịch: Phạm Hằng Nguy&ecirc;n</p>\r\n\r\n<p>Nh&agrave; xuất bản: Nxb Thế giới</p>\r\n\r\n<p>Nh&agrave; ph&aacute;t h&agrave;nh: Nh&atilde; Nam</p>\r\n\r\n<p>Định dạng: B&igrave;a cứng</p>\r\n\r\n<p>K&iacute;ch thước: 19.5 x 23 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh: 26/07/2019</p>\r\n\r\n<p>Số trang: 256</p>\r\n', '250000', '235000', 1, 0, 10, 'How The Body Works - Hiểu Hết Về Cơ Thể.jpeg'),
(76, 26, 2, 'The Story Of Food - Câu Chuyện Thực Phẩm', '<p><strong><em>GIỚI THIỆU S&Aacute;CH</em></strong></p>\r\n\r\n<p>The Story Of Food - C&acirc;u Chuyện Thực Phẩm Từ lo&agrave;i c&aacute; khơi nguồn cho cả một cuộc chiến tranh cho đến loại rau gia vị từng được coi l&agrave; biểu tượng của sự căm gh&eacute;t để rồi nhiều thế kỷ sau lại trở th&agrave;nh biểu tượng cho t&igrave;nh y&ecirc;u, thực phẩm đ&atilde; lu&ocirc;n l&agrave; một phần kh&ocirc;ng thể thiếu của văn h&oacute;a nh&acirc;n loại. Những c&acirc;u chuyện về nguồn gốc, truyền thống nu&ocirc;i trồng v&agrave; nấu nướng của gần hai trăm loại thực phẩm được truyền tải sống động qua những trang s&aacute;ch minh họa của The Story of Food &ndash; C&acirc;u chuyện thực phẩm sẽ mang lại một bữa đại tiệc bổ &iacute;ch cho những người say m&ecirc; ẩm thực ở khắp mọi nơi. Hơn cả những mẩu th&ocirc;ng tin đơn lẻ về từng loại thực phẩm, cuốn s&aacute;ch x&acirc;u chuỗi ch&uacute;ng th&agrave;nh từng nh&oacute;m thực phẩm, khiến th&ocirc;ng tin biến th&agrave;nh một c&acirc;u chuyện (c&oacute; minh họa) dễ theo d&otilde;i, c&oacute; diễn biến qua thời gian v&agrave; v&ugrave;ng miền.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&ecirc;n Nh&agrave; Cung Cấp Nh&atilde; Nam</p>\r\n\r\n<p>T&aacute;c Giả DK</p>\r\n\r\n<p>Dịch Giả Trần Trương Ph&uacute;c Hạnh</p>\r\n\r\n<p>Năm XB 02-2021</p>\r\n\r\n<p>Số trang 362</p>\r\n\r\n<p>NXB NXB Thế Giới</p>\r\n\r\n<p>H&igrave;nh Thức B&igrave;a mềm</p>\r\n', '350000', '342000', 1, 0, 10, 'The Story Of Food - Câu Chuyện Thực Phẩm.jpeg'),
(77, 1, 2, 'Chính trị - Khái lược những tư tưởng lớn', '<p>C&oacute; đ&uacute;ng chăng khi ch&uacute;ng ta lật đổ một nh&agrave; cai trị bất c&ocirc;ng? Liệu nền d&acirc;n chủ c&oacute; thực sự l&agrave; h&igrave;nh thức ch&iacute;nh quyền tốt nhất? V&agrave; chiến tranh c&oacute; thể được biện minh hay kh&ocirc;ng? Xuy&ecirc;n suốt chiều d&agrave;i lịch sử, lo&agrave;i người đ&atilde; tự hỏi m&igrave;nh những điều n&agrave;y c&ugrave;ng những c&acirc;u hỏi lớn lao kh&aacute;c về c&aacute;ch thức tốt nhất để ch&uacute;ng ta cai trị ch&iacute;nh m&igrave;nh &ndash; v&agrave; c&aacute;c tư tưởng gia vĩ đại đ&atilde; đưa ra những lời giải đ&aacute;p m&agrave; cho đến nay vẫn đang tiếp tục định h&igrave;nh thế giới. Với văn phong dễ hiểu v&agrave; s&aacute;ng sủa, Ch&iacute;nh trị - Kh&aacute;i lược những tư tưởng lớn l&agrave; tập hợp những b&agrave;i viết ngắn gọn h&agrave;m s&uacute;c giải th&iacute;ch r&otilde; những điều kh&oacute; hiểu, những sơ đồ từng bước gi&uacute;p l&agrave;m s&aacute;ng tỏ những l&iacute; thuyết rối rắm, v&agrave; những h&igrave;nh ảnh minh họa d&iacute; dỏm gi&uacute;p ch&uacute;ng ta &yacute; thức r&otilde; hơn về vai tr&ograve; của m&igrave;nh trong c&aacute;ch thức tổ chức x&atilde; hội.&nbsp;#sachdonga #donga #khailuoc #khailuocnhungtutuonglon #khailuoctutuong #chinhtri #tongiao #tamlyhoc #kinhdoanh #triethoc #kinhtehoc</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Dịch giả: B&iacute;ch Thu dịch, L&ecirc; Ngọc T&acirc;n hiệu đ&iacute;nh</p>\r\n\r\n<p>Năm xuất bản: 2019</p>\r\n\r\n<p>Nh&agrave; xuất bản D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Số trang: 352</p>\r\n\r\n<p>K&iacute;ch thước: 19,3 x 23,5 cm</p>\r\n\r\n<p>Trọng lượng: 700gr</p>\r\n', '320000', '300000', 1, 0, 20, 'Chính trị - Khái lược những tư tưởng lớn.jpeg'),
(81, 28, 2, 'Chinh Phục Không Gian – Hành Trình Kỳ Diệu', '<p><strong>Giới thiệu s&aacute;ch:</strong></p>\r\n\r\n<p>Chinh phục kh&ocirc;ng gian c&oacute; lẽ l&agrave; cuộc chinh phục k&igrave; diệu v&agrave; vĩ đại nhất m&agrave; con người đ&atilde; v&agrave; đang thực hiện. Kh&aacute;m ph&aacute; vũ trụ bao la l&agrave; ước mơ từ h&agrave;ng ng&agrave;n năm nhưng cho đến thế kỷ thứ 20 n&oacute; mới trở n&ecirc;n s&ocirc;i động hơn bao giờ hết. Nga &ndash; Mỹ hai cường quốc đ&atilde; tạo ra một cuộc chạy đua v&agrave;o kh&ocirc;ng gian hết sức ngoạn mục, kết quả l&agrave; h&agrave;ng loạt cột mốc đ&atilde; được tạo ra, đ&aacute;nh dấu những bước tiến hết sức quan trọng trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian của con người. Nội dung s&aacute;ch t&aacute;i hiện lại những cột mốc quan trọng trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian của con người : Từ việc chế tạo những con t&agrave;u vũ trụ đầu ti&ecirc;n, lần đầu ti&ecirc;n con người bay v&ograve;ng quanh Tr&aacute;i Đất, lần đầu ti&ecirc;n con người đặt ch&acirc;n l&ecirc;n Mặt Trăng, x&acirc;y dựng trạm vũ trụ quốc tế, &hellip; C&ugrave;ng với việc t&aacute;i hiện lại h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian cuốn s&aacute;ch c&ograve;n đề cập đến những hiệu ứng t&iacute;ch cực của qu&aacute; tr&igrave;nh chinh phục kh&ocirc;ng gian l&ecirc;n cuộc sống thường ng&agrave;y tr&ecirc;n Tr&aacute;i Đất cũng như những bước đi tiếp theo của con người trong h&agrave;nh tr&igrave;nh chinh phục kh&ocirc;ng gian tương lai. Ng&agrave;y nay, với sự ph&aacute;t triển của khoa học kỹ thuật, liệu con người sẽ hiện thực h&oacute;a ước mơ sống tr&ecirc;n sao Hỏa? Con người sẽ ph&aacute;t triển ng&agrave;nh du lịch kh&ocirc;ng gian? Con người sẽ t&igrave;m ra những nền văn minh ngo&agrave;i Tr&aacute;i Đất? V&agrave; sẽ c&ograve;n những cột mốc phi thường n&agrave;o m&agrave; con người sẽ đạt được?</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: 1980 Books</p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Nh&agrave; xuất bản: NXB D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Số trang: 192</p>\r\n', '100000', '80000', 1, 0, 15, 'Chinh Phục Không Gian – Hành Trình Kỳ Diệu.jpeg'),
(82, 28, 2, 'Hiểu hết về tâm lý học - How Psychology Works', '<p><em><strong>MỘT TRONG NHỮNG CUỐN S&Aacute;CH MỞ KH&Oacute;A HỮU &Iacute;CH NHẤT VỀ TƯ DUY, K&Yacute; ỨC V&Agrave; CẢM X&Uacute;C CỦA CON NGƯỜI!</strong></em></p>\r\n\r\n<p>&Aacute;m sợ l&agrave; g&igrave;, &aacute;m sợ c&oacute; thực sự đ&aacute;ng sợ kh&ocirc;ng? Rối loạn t&acirc;m l&yacute; l&agrave; g&igrave;, l&agrave;m thế n&agrave;o để tho&aacute;t khỏi t&igrave;nh trạng suy nhược v&agrave; x&aacute;o trộn đ&oacute;? Trầm cảm l&agrave; g&igrave;, v&igrave; sao con người hiện đại thường xuy&ecirc;n gặp v&agrave; chống chọi với t&igrave;nh trạng u uất, mệt mỏi v&agrave; tuyệt vọng n&agrave;y? T&igrave;m hiểu về c&aacute;c vấn đề t&acirc;m tr&iacute; của con người lu&ocirc;n đầy sức hấp dẫn v&agrave; l&ocirc;i cuốn, v&igrave; vậy m&agrave; t&acirc;m l&yacute; học ra đời, h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển rất nhiều c&aacute;c học thuyết v&agrave; trường ph&aacute;i. Cuốn s&aacute;ch n&agrave;y dẫn dắt bạn đọc qua h&agrave;nh tr&igrave;nh t&igrave;m hiểu c&aacute;c học thuyết v&agrave; trường ph&aacute;i đ&oacute;, về c&aacute;ch c&aacute;c nh&agrave; t&acirc;m l&yacute; diễn giải h&agrave;nh xử v&agrave; t&acirc;m tr&iacute; con người. Tại sao ch&uacute;ng ta c&oacute; những h&agrave;nh vi, suy nghĩ v&agrave; cảm x&uacute;c như vậy, ch&uacute;ng diễn ra v&agrave; kết th&uacute;c như thế n&agrave;o, ch&uacute;ng ảnh hưởng l&acirc;u d&agrave;i, gi&aacute;n đoạn hay ngắn ngủỉ đến đời sống của ch&uacute;ng ta ra sao, l&agrave;m thế n&agrave;o để ch&uacute;ng ta tho&aacute;t khỏi những t&aacute;c động ti&ecirc;u cực của ch&uacute;ng? Cuốn s&aacute;ch c&oacute; cấu tr&uacute;c khoa học, tr&igrave;nh b&agrave;y dễ hiểu, s&uacute;c t&iacute;ch, thiết kế v&agrave; minh họa đẹp mắt n&agrave;y sẽ mang đến cho bạn những hiểu biết về c&aacute;c học thuyết t&acirc;m l&yacute; v&agrave; c&aacute;c phương ph&aacute;p trị liệu, từ c&aacute;c vấn đề c&aacute; nh&acirc;n đến những ứng dụng thực tế.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Cố vấn bi&ecirc;n tập: Jo Hemmings</p>\r\n\r\n<p>Dịch giả: Trần Trương Ph&uacute;c Hạnh , Phương Ho&agrave;i Nga hiệu đ&iacute;nh</p>\r\n\r\n<p>Nh&agrave; xuất bản: Thế Giới</p>\r\n\r\n<p>Số trang: 247</p>\r\n\r\n<p>K&iacute;ch thước: 19.5x23 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh: 11-2020</p>\r\n', '90000', '80000', 1, 0, 10, 'Hiểu hết về tâm lý học - How Psychology Works.jpeg'),
(84, 27, 2, 'Lịch Sử Thế Giới: Chân Dung Nhân Loại Theo Dòng Sự Kiện', '<p><em><strong>Lịch Sử Thế Giới:</strong></em>&nbsp;Ch&acirc;n Dung Nh&acirc;n Loại Theo D&ograve;ng Sự Kiện Với lượng th&ocirc;ng tin v&agrave; h&igrave;nh ảnh đồ sộ, cuốn s&aacute;ch l&agrave; h&agrave;nh tr&igrave;nh hấp dẫn gi&uacute;p bạn kh&aacute;m ph&aacute; c&aacute;c bước tiến lịch sử đ&atilde; l&agrave;m n&ecirc;n ch&acirc;n dung nh&acirc;n loại ng&agrave;y nay.</p>\r\n\r\n<p><em><strong>TO&Agrave;N DIỆN V&Agrave; ĐỘC Đ&Aacute;O</strong></em>&nbsp;Mở đầu từ sự xuất hiện lo&agrave;i người, cuốn s&aacute;ch đưa bạn qua tiến tr&igrave;nh ph&aacute;t triển v&agrave; suy t&agrave;n của c&aacute;c nền văn minh tr&ecirc;n to&agrave;n thế giới, m&agrave; trọng t&acirc;m l&agrave; c&aacute;c sự kiện chiến tranh, thương mại v&agrave; th&aacute;m hiểm, c&aacute;c cuộc c&aacute;ch mạng v&agrave; đổi thay c&ocirc;ng nghệ&hellip; Đặc biệt, nội dung s&aacute;ch kh&ocirc;ng chia theo chủ đề hay khu vực m&agrave; được tr&igrave;nh b&agrave;y theo diễn tiến thời gian nhằm gi&uacute;p bạn c&oacute; c&aacute;i nh&igrave;n to&agrave;n cảnh v&agrave; so s&aacute;nh về sự ph&aacute;t triển của c&aacute;c quốc gia, d&acirc;n tộc tại c&ugrave;ng một thời điểm trong qu&aacute; khứ.</p>\r\n\r\n<p><em><strong>MINH HỌA SỐNG ĐỘNG</strong></em>&nbsp;B&ecirc;n cạnh lượng th&ocirc;ng tin dồi d&agrave;o, cuốn s&aacute;ch c&ograve;n cung cấp hơn 1000 h&igrave;nh minh họa độc đ&aacute;o bao gồm c&aacute;c hiện vật, t&aacute;c phẩm nghệ thuật, ảnh tư liệu nhằm t&aacute;i hiện ch&acirc;n dung c&aacute;c nền văn h&oacute;a, sự kiện v&agrave; nh&acirc;n vật. Ngo&agrave;i ra, cuốn s&aacute;ch c&ograve;n c&oacute; h&agrave;ng trăm biểu đồ, bản đồ v&agrave; số liệu phản &aacute;nh quy m&ocirc;, t&iacute;nh chất v&agrave; diễn biến của c&aacute;c sự kiện, thời k&igrave; lịch sử.</p>\r\n\r\n<p><em><strong>ĐỘI NGŨ BI&Ecirc;N SOẠN UY T&Iacute;N</strong></em>&nbsp;Đ&acirc;y l&agrave; c&ocirc;ng tr&igrave;nh bi&ecirc;n soạn của nhiều giảng vi&ecirc;n, nh&agrave; nghi&ecirc;n cứu từ c&aacute;c trường đại học danh tiếng của Anh quốc như Oxford, Cambridge, Edinburgh c&ugrave;ng sự đ&oacute;ng g&oacute;p của đội ngũ chuy&ecirc;n gia từ Viện Smithsonian, một hệ thống bao gồm gần 20 bảo t&agrave;ng v&agrave; trung t&acirc;m nghi&ecirc;n cứu cấp quốc gia của Hoa Kỳ, nơi lưu giữ 138 triệu hiện vật c&ugrave;ng c&aacute;c tư liệu qu&yacute; gi&aacute; về lịch sử nh&acirc;n loại.</p>\r\n\r\n<p><em><strong>ĐẶC BIỆT BỔ SUNG</strong></em>&nbsp;Với mong muốn tiếp cận tốt hơn sự quan t&acirc;m của độc giả trong nước, nh&oacute;m bi&ecirc;n dịch v&agrave; hiệu đ&iacute;nh đ&atilde; bổ sung một số sự kiện lịch sử ti&ecirc;u biểu của Việt Nam v&agrave;o ấn bản tiếng Việt. C&aacute;c sự kiện n&agrave;y được chọn lọc một c&aacute;ch cẩn trọng, tu&acirc;n thủ tinh thần chung của bản gốc để đảm bảo t&iacute;nh nhất qu&aacute;n với tổng thể. Qua đ&oacute;, bạn đọc sẽ c&oacute; c&aacute;i nh&igrave;n đối s&aacute;nh về tr&igrave;nh độ ph&aacute;t triển, c&aacute;c bước tiến của lịch sử Việt Nam so với c&aacute;c quốc gia trong khu vực v&agrave; tr&ecirc;n thế giới.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: C&ocirc;ng Ty Cổ Phần Văn H&oacute;a Đ&ocirc;ng A</p>\r\n\r\n<p>T&aacute;c giả: DK &amp; Viện Smithsonian (bi&ecirc;n soạn)</p>\r\n\r\n<p>Ng&agrave;y xuất bản: 02-2017</p>\r\n\r\n<p>K&iacute;ch thước: 25 x 30 cm</p>\r\n\r\n<p>Nh&agrave; xuất bản: Nh&agrave; Xuất Bản D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Loại b&igrave;a: B&igrave;a cứng</p>\r\n\r\n<p>Số trang: 512</p>\r\n', '90000', '80000', 1, 0, 15, 'lich_su_The_Gioi.png'),
(86, 25, 2, 'Tri Thức Về Vạn Vật - Một Thế Giới Trực Quan Chưa Từng Thấy', '<p>Cu&ocirc;́n sách được làm theo phi&ecirc;n bản c&acirc;̣p nh&acirc;̣t mới nh&acirc;́t của DK năm 2018. Cuốn s&aacute;ch n&agrave;y sẽ cho bạn thấy những điều b&aacute;ch khoa thư th&ocirc;ng thường chỉ n&oacute;i. KH&Aacute;M PH&Aacute; b&iacute; ẩn lăng mộ vua Tutankhamun, sức mạnh khủng khiếp của s&oacute;ng thần, động đất, v&ograve;i rồng v&agrave; l&ograve; phản ứng hạt nh&acirc;n b&ecirc;n trong Mặt trời. NH&Igrave;N THẤY sự h&igrave;nh th&agrave;nh một ng&ocirc;i sao, b&ecirc;n trong cơ thể khủng long bạo ch&uacute;a v&agrave; b&iacute; mật ADN. DU H&Agrave;NH ngược thời gian về thời x&acirc;y Vạn L&yacute; Trường Th&agrave;nh, đền Pantheon của Athens cổ đại v&agrave; hai cuộc chiến tranh thế giới t&agrave;n khốc. KHẢO S&Aacute;T t&iacute;n hiệu từ kh&ocirc;ng gian, lực từ trường v&ocirc; h&igrave;nh v&agrave; tri thức khoa học ẩn giấu trong ph&aacute;o hoa. Sử dụng c&aacute;c t&aacute;c phẩm đồ họa m&aacute;y t&iacute;nh ngoạn mục, Tri thức về vạn vật sẽ h&eacute; lộ những chi tiết kỳ diệu chưa từng thấy về vũ trụ, Tr&aacute;i đất, thi&ecirc;n nhi&ecirc;n, cơ thể người, khoa học v&agrave; lịch sử. Trọn vẹn những sự thật kinh ngạc, d&ograve;ng thời gian sinh động v&agrave; h&igrave;nh ảnh ấn tượng, cuốn b&aacute;ch khoa thư gia đ&igrave;nh đầy hấp dẫn n&agrave;y sẽ biến những chủ đề phức tạp nhất h&oacute;a dễ d&agrave;ng chỉ trong nh&aacute;y mắt. Được th&agrave;nh lập năm 1974, DK nổi tiếng với d&ograve;ng s&aacute;ch m&igrave;nh họa tranh k&egrave;m nội dung ch&uacute; th&iacute;ch b&oacute;ng bẩy hấp dẫn người đọc. DK được bảo trợ bởi rất nhiều c&aacute;c tổ chức h&agrave;n l&acirc;m cũng như nh&acirc;n đạo nổi tiếng v&agrave; danh gi&aacute;, như Hiệp hội Y khoa Vương quốc Anh, Hội L&agrave;m vườn Ho&agrave;ng gia v&agrave; Tổ chức Chữ thập Đỏ Anh. Ngo&agrave;i s&aacute;ch truyền thống, DK c&ograve;n sở hữu một lượng lớn c&aacute;c phần mềm gi&aacute;o dục v&agrave; s&aacute;ch điện tử tương t&aacute;c c&oacute; nh&atilde;n hiệu DK Online (tiền th&acirc;n l&agrave; DK Multimedia, 1990). V&agrave;o năm 2010, DK th&agrave;nh lập một chợ phần mềm điện thoại nhằm đưa c&aacute;c sản phẩm s&aacute;ch của h&atilde;ng đến với đ&ocirc;ng đảo độc giả sử dụng thiết bị th&ocirc;ng m&igrave;nh. Hiện DK đang sở hữu 411 đầu s&aacute;ch, 30 giải thưởng c&aacute;c loại cho c&aacute;c s&aacute;ch. Những đầu s&aacute;ch cực kỳ nổi tiếng như The Way Things Work (Vạn vật Vận h&agrave;nh Như thế n&agrave;o?) v&agrave; The Way We Work của t&aacute;c giả David Macaulay đều được đ&oacute;n nhận rất nồng nhiệt v&agrave; được c&aacute;c độc giả tr&ecirc;n thế giới t&igrave;m đọc từ trước tới nay.</p>\r\n\r\n<p>#Nh&agrave;_s&aacute;ch_Alpha_Books #OmegaPlus_Books #ETS_Books #Gamma_Books</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh Alphabooks</p>\r\n\r\n<p>T&aacute;c giả DK</p>\r\n\r\n<p>Ng&agrave;y xuất bản 05-2019</p>\r\n\r\n<p>K&iacute;ch thước 25,2 x 30,1cm</p>\r\n\r\n<p>Loại b&igrave;a B&igrave;a cứng</p>\r\n\r\n<p>Số trang 362&nbsp;</p>\r\n', '100000', '80000', 1, 0, 10, 'Sách_giao_duc2.png'),
(87, 25, 2, '1000 Từ Tiếng Anh Hữu Ích (Song Ngữ Việt - Anh) - Xây Dựng Vốn Từ Vựng Và Kỹ Năng Ngôn Ngữ Cho Trẻ', '<p>Cuốn 1000 từ tiếng Anh hữu &iacute;ch d&agrave;nh cho c&aacute;c b&eacute; bắt đầu l&agrave;m quen với tiếng Anh. Mỗi trang đều được minh họa đầy m&agrave;u sắc để phụ huynh v&agrave; b&eacute; c&ugrave;ng đọc s&aacute;ch thật vui, đồng thời gi&uacute;p b&eacute; ph&aacute;t triển hệ từ vựng v&agrave; kỹ năng ng&ocirc;n ngữ. Với c&aacute;c từ vựng được chọn lọc kỹ c&agrave;ng v&agrave; tham khảo &yacute; kiến của chuy&ecirc;n gia tư vấn gi&aacute;o dục h&agrave;ng đầu, cuốn s&aacute;ch n&agrave;y sẽ gi&uacute;p trẻ mở rộng vốn từ cũng như bồi đắp cho trẻ khả năng đọc v&agrave; viết từ sớm. C&aacute;c từ vựng trong s&aacute;ch được sắp xếp theo những chủ đề thường nhật, li&ecirc;n hệ với đời sống m&agrave; trẻ đ&atilde; quen thuộc, từ động vật hoang d&atilde;, nghề nghiệp đến m&agrave;u sắc, h&igrave;nh dạng v&agrave; con số&hellip; S&aacute;ch cũng bao gồm năm truyện tranh đơn giản được minh họa ngộ nghĩnh, đ&aacute;ng y&ecirc;u. C&aacute;c c&acirc;u chuyện n&agrave;y giới thiệu những từ th&ocirc;ng dụng, đặt từ vựng v&agrave;o trong ngữ cảnh để gi&uacute;p b&eacute; ph&aacute;t triển kỹ năng đặt c&acirc;u cũng như kỹ năng kể chuyện. Sở hữu cuốn s&aacute;ch tuyệt vời n&agrave;y, c&aacute;c bạn nhỏ sẽ tha hồ vừa học những từ vựng bổ &iacute;ch vừa thư gi&atilde;n với những tranh vẽ v&agrave; ảnh chụp đầy sống động cũng như c&aacute;c tr&ograve; chơi tương t&aacute;c th&uacute; vị. Về Dorling Kindersley: Dorling Kindersley (hay DK) l&agrave; nh&agrave; xuất bản uy t&iacute;n h&agrave;ng đầu, từng đạt nhiều giải thưởng ở mảng s&aacute;ch h&igrave;nh ảnh d&agrave;nh cho thiếu nhi, được c&aacute;c bậc phụ huynh cũng như c&aacute;c thầy c&ocirc; tin tưởng v&agrave; được trẻ em tr&ecirc;n to&agrave;n thế giới y&ecirc;u mến. C&aacute;c s&aacute;ch của DK lu&ocirc;n kết hợp t&agrave;i t&igrave;nh những h&igrave;nh ảnh minh họa đặc sắc với nội dung được bi&ecirc;n soạn mạch lạc, r&otilde; r&agrave;ng bởi c&aacute;c chuy&ecirc;n gia trong từng lĩnh vực.</p>\r\n', '<p><strong>M&Ocirc; TẢ SẢN PHẨM</strong></p>\r\n\r\n<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: Đ&ocirc;ng A</p>\r\n\r\n<p>Nh&agrave; xuất bản: D&acirc;n Tr&iacute;&nbsp;</p>\r\n\r\n<p>T&aacute;c giả: DK</p>\r\n\r\n<p>Dịch giả: Th&ugrave;y Dương</p>\r\n\r\n<p>K&iacute;ch thước: 21.6 x 27.6 cm</p>\r\n\r\n<p>Năm xuất bản: 2020</p>\r\n\r\n<p>Số trang: 61 trang</p>\r\n\r\n<p>H&igrave;nh thức: B&igrave;a cứng c&oacute; b&igrave;a &aacute;o metalize, in m&agrave;u to&agrave;n bộ</p>\r\n', '90000', '75000', 1, 0, 20, 'Sách_giao_duc1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `slider_active`) VALUES
(1, 'banner1.jpg', 1),
(2, 'banner2.jpg', 1),
(3, 'banner3.jpg', 1);

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
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
