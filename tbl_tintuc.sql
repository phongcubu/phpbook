-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 29, 2021 lúc 05:24 PM
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
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`tintuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `tintuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
