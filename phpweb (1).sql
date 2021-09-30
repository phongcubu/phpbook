-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2021 lúc 10:35 AM
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
(3, 'phong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'phongngonngon');

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
(3, 'Sách Hướng Nghiệp & Phát Triển Bản Thân'),
(4, 'Sách Ngoại Ngữ & Từ Điển');

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
(1, 'Sức khỏe ra đình'),
(2, 'Chiêm tinh học'),
(3, 'Góc chuyện trò');

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
(10, 28, 7, '3060', 1, '2021-09-18 02:24:14', 1, 0),
(11, 28, 4, '3060', 1, '2021-09-18 02:47:13', 0, 0);

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
(3, 'Sách - Thay Đổi Tư Duy Hãy Cứ Phi Lý Đi', 28, '79000', 'test1.jpeg', 1);

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
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `names`, `phone`, `addresss`, `note`, `email`, `passwords`, `giaohang`) VALUES
(1, 'son', '123456', 'asas', '123', 'son@gmail.com', '4297f44b13955235245b2497399d7a93', 1);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `hienthi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`tintuc_id`, `tintuc_name`, `tomtat`, `img_dautrang`, `noidung_tin`, `danhmuctin_id`, `hienthi`) VALUES
(1, 'JORDAN PETERSON, NIETZSCHE VÀ VIỆC KHÔNG CHỈ SỐNG ĐỂ HẠNH PHÚC', '\r\n\r\nCon người phải đấu tranh cho từng mảnh sự thật, và phải trả giá cho nó gần như tất cả mọi thứ mà con tim, tình yêu, niềm tin của chúng ta bám víu vào. Vấn đề này cần tới sự vĩ đại của linh hồn: phụng sự cho sự thật là nhiệm vụ khó khăn nhất.” –  Friedrich Nietzsche (The Antichrist)', 'test1.jpeg', '\r\ntest.txt\r\n', 1, 1),
(2, 'NGHĨ KHÁC ĐỂ SỐNG KHÁC', '\r\nLàm sao bạn có được bình an khi đôi mắt của bạn chất đầy những tiêu cực bi quan về cuộc sống?', 'test2.jpeg', '\r\nĐây là một cuốn sách đem lại cho mình là các bài học triết lý sâu sắc về sự bình an, giận dữ, khó khăn, biến cố và cơ hội…Nội dung không rườm rà, lan man mà được viết như một lời an ủi, thủ thỉ của tác giả Phi Tuyết. Giữa lúc mình như một chiếc điện thoại hết pin cần được sạc đầy, những thông điệp trong sách lại đến thật đúng lúc, mình biết rằng tìm kiếm bình an cũng không phải tìm kiếm ở bên ngoài mà là tìm kiếm ở bên trong bạn. Và sự bất an được tạo ra bởi những cơn sóng cuộn trào bên trong tâm trí bạn chứ không phải là do những cơn sóng bên ngoài. Vì thế, khi đọc “Nghĩ khác để sống khác”, mình cảm thấy như được xoa dịu và chữa lành.', 2, 0),
(10, 'aa', ' Đầu tiên, tôi xin nêu rõ ràng, tôi không tranh luận nhằm loại bỏ hoan lạc hay chỉ trích quá mức những người lựa chọn chủ nghĩa khoái lạc; tôi chỉ không khuyến nghị việc này. Cũng như là hạnh phúc thì chẳng có gì sai trái, nếu chúng xuất hiện trên đường đời của bạn thì chắc chắn không nên phớt lờ đi. Nhưng tôi cũng muốn nói rõ ràng, việc coi hạnh phúc là mục đích duy nhất sẽ khiến bất cứ thứ gì (hoặc bất kỳ ai) cản đường mục tiêu đó trở thành kẻ thù, đặc biệt là những người hoài nghi về nó như một số trí thức của công chúng đang ngày một phổ biến ngày nay. Ví dụ như Jordan B. Peterson gọi đó là quá trình tự rút gọn cuộc đời còn Slavoj Žižek thì mô tả hạnh phúc phù hợp với tầng lớp nô lệ. Bạn có thể căm ghét họ (hoặc tôi) bao nhiêu tùy ý vì đã phá hủy mục đích căn bản cuộc đời của bạn, nhưng hãy cho tôi lý giải chi tiết hơn về việc tại sao tôi tin rằng hạnh phúc không phải là thứ bạn nên hướng tới.', 'danh-thuc-con-nguoi.jpg', 'Đây là một cuốn sách đem lại cho mình là các bài học triết lý sâu sắc về sự bình an, giận dữ, khó khăn, biến cố và cơ hội…Nội dung không rườm rà, lan man mà được viết như một lời an ủi, thủ thỉ của tác giả Phi Tuyết. Giữa lúc mình như một chiếc điện thoại hết pin cần được sạc đầy, những thông điệp trong sách lại đến thật đúng lúc, mình biết rằng tìm kiếm bình an cũng không phải tìm kiếm ở bên ngoài mà là tìm kiếm ở bên trong bạn. Và sự bất an được tạo ra bởi những cơn sóng cuộn trào bên trong tâm trí bạn chứ không phải là do những cơn sóng bên ngoài. Vì thế, khi đọc “Nghĩ khác để sống khác”, mình cảm thấy như được xoa dịu và chữa lành.', 3, 1),
(11, 'fff', '<p>sfsffs</p>\r\n', 'cs-bao-dieu-hay.jpg', '<p>gefgeege</p>\r\n', 2, 1),
(13, 'ggg', '<p>qwddqw</p>\r\n', 'hay-khien-tuong-lai-biet-on.jpg', '<p>qwdqwd</p>\r\n', 3, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`tintuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `tintuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
