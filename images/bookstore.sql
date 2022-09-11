-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2022 lúc 03:05 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `binhluan_id` int(11) UNSIGNED NOT NULL,
  `sach_id` int(11) NOT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `chitietdonhang_id` int(11) UNSIGNED NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `sach_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsach`
--

CREATE TABLE `danhmucsach` (
  `danhmucsach_id` int(11) UNSIGNED NOT NULL,
  `danhmucsach_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsach`
--

INSERT INTO `danhmucsach` (`danhmucsach_id`, `danhmucsach_ten`) VALUES
(1, 'Sách Thiếu Nhi'),
(2, 'Sách Văn Học'),
(3, 'Sách Kỹ Năng Sống'),
(4, 'Sách Ngoại Ngữ'),
(5, 'Sách Chính Trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `sach_id` int(11) NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `sach_id` int(11) NOT NULL,
  `danhmucsach_id` int(11) NOT NULL,
  `tensach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dichgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigianxuatban` datetime NOT NULL,
  `congtyphathanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nxb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotrang` int(11) NOT NULL,
  `loaibia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `giakm` int(11) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongton` int(11) NOT NULL,
  `soluongdaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`sach_id`, `danhmucsach_id`, `tensach`, `tacgia`, `dichgia`, `thoigianxuatban`, `congtyphathanh`, `nxb`, `kichthuoc`, `sotrang`, `loaibia`, `mota`, `gia`, `giakm`, `anh`, `soluongton`, `soluongdaban`) VALUES
(1, 1, 'PHẨM CHẤT NHÀ LÃNH ĐẠO NHÍ - THIẾT KẾ ƯỚC MƠ - TÔI LÀ PHI CÔNG NHỎ', 'Se-Sil Kim', 'Trần Bảo Trân', '2022-08-22 12:47:42', 'NXB Trẻ', 'NXB Trẻ', '19x26cm', 32, 'Bìa mềm', 'Bộ sách “Phẩm chất nhà lãnh đạo nhí” là bộ sách gồm nhiều câu chuyện không chỉ đem đến niềm vui đọc sách cho các bạn nhỏ, mà còn giúp khơi dậy và phát triển những phẩm chất tốt đẹp và tố chất của người dẫn đầu ở bạn đọc nhỏ tuổi. Với minh họa sống động, câu chuyện thú vị, bộ sách sẽ mang lại những giây phút hứng khởi cho người đọc, từ đó góp phần xây dựng tình yêu đọc sách cho các bạn đọc nhỏ. \r\nHơn thế nữa, bộ sách còn có những trang mở rộng rất thiết thực, giúp bạn đọc nhỏ tuổi suy nghĩ sâu hơn về câu chuyện và vận dụng vào cuộc sống của bản thân, từ đó rèn luyện những đức tính tốt, phát triển những tố chất của người dẫn đầu. ', 30000, 24000, 'sach-pham-chat-nha-lanh-dao-nhi-thiet-ke-uoc-mo-toi-la-phi-cong-nho.jpg', 1, 0),
(2, 1, '5 PHÚT ĐỌC TRUYỆN CÙNG CON YÊU - NHỮNG CÂU CHUYỆN THÚ VỊ DÀNH CHO BÉ TRAI', 'Gemma Barder, Louise Angelicas', 'Bích Lộc', '2022-08-28 10:49:55', 'Tân Việt', 'NXB Mỹ Thuật', '22.5 x 19cm', 48, 'Bìa mềm', 'Bộ sách “5 phút đọc truyện cùng con yêu” sẽ đưa bố mẹ và bé bước vào giờ kể chuyện đầy lôi cuốn. Những phút giây đọc truyện cùng con không chỉ giúp nuôi dưỡng tâm hồn trẻ thơ, mà còn giúp gắn kết tình cảm giữa bố mẹ và bé. Ngoài ra, những câu chuyện thú vị cũng sẽ giúp bé phát triển trí tưởng tượng, tăng khả năng cảm nhận về cái đẹp, cái thiện trong cuộc sống. Bố mẹ và bé hãy cùng khám phá bộ sách tuyệt vời này nhé!\r\n\r\nKhông gì hay hơn được bố mẹ kể cho một câu chuyện thật hấp dẫn trước khi đi ngủ và trong cuốn sách tuyệt vời dành riêng cho các bé trai này có bảy câu chuyện cho bé chọn lựa đấy! Bé có muốn gặp gỡ Jasper, cậu bé luôn sợ bóng tối, hay Max và Toby, hai cướp biển nhí, cùng các nhân vật khác không?\r\n\r\nHãy nằm xuống và thưởng thức tất cả những nhân vật thú vị trong tuyển tập truyện kể đầy mộng mơ, cực kì phù hợp để đọc trước giờ đi ngủ nào!', 79000, 63000, 'nhung-cau-chuyen-thu-vi-danh-cho-be-trai.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) UNSIGNED NOT NULL,
  `slider_anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_active` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_anh`, `slider_mota`, `slider_active`) VALUES
(1, 'slider_1.jpg', 'Book Store - Đảm bảo mang đến cho khách hàng trải nghiệm tốt nhất', 1),
(2, 'slider_2.jpg', 'Để cho con một hòm vàng không bằng dạy cho con một quyển sách hay', 1),
(3, 'slider_3.jpg', '\"Good books, like good friends, are few and chosen; the more select, the more enjoyable.\" \r\n- \"Sách hay, cũng như bạn tốt, ít và được chọn lựa; chọn lựa càng nhiều,...\"\r\n\r\n', 1),
(4, 'slider_4.jpg', '\"Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn.” - Barack Obama', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hodem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `hodem`, `ten`, `email`, `diachi`, `sdt`, `role`) VALUES
(1, 'loc2102', 'Loc21022001', 'Pham', 'Loc', 'thiloc21022001@gmail.com', '45/1 đường số 19, Hiệp Bình Chánh, Thủ Đức, TP. Hồ Chi Minh', '0775542821', '0'),
(2, 'taiphuong', '123', 'Tran Thi Phuong', 'Tai', 'phuongtai@gmail.com', '45/1 đường số 19, Hiệp Bình Chánh, Thủ Đức, TP. Hồ Chi Minh', '0905738431', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`binhluan_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`chitietdonhang_id`);

--
-- Chỉ mục cho bảng `danhmucsach`
--
ALTER TABLE `danhmucsach`
  ADD PRIMARY KEY (`danhmucsach_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`sach_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `binhluan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `chitietdonhang_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsach`
--
ALTER TABLE `danhmucsach`
  MODIFY `danhmucsach_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `sach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
