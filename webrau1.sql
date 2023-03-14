-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webrau1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `Id_chitietdonhang` int(4) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `Id_sanpham` int(4) NOT NULL,
  `soluongmua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`Id_chitietdonhang`, `madonhang`, `Id_sanpham`, `soluongmua`) VALUES
(196, '4425', 1, 3),
(197, '4891', 3, 3),
(198, '5312', 2, 2),
(199, '3748', 2, 2),
(200, '5584', 2, 2),
(201, '2427', 2, 2),
(202, '2427', 5, 2),
(203, '943', 1, 3),
(204, '1309', 7, 3),
(205, '3157', 7, 3),
(206, '4758', 7, 3),
(207, '4758', 1, 3),
(208, '6842', 7, 3),
(209, '6842', 1, 3),
(210, '6842', 8, 4),
(211, '5845', 11, 3),
(212, '5845', 10, 2),
(213, '6154', 1, 3),
(214, '6090', 16, 2),
(215, '6090', 15, 3),
(216, '4683', 2, 3),
(217, '4683', 1, 3),
(218, '7529', 9, 3),
(219, '7922', 13, 2),
(220, '5623', 1, 3),
(221, '4502', 2, 2),
(222, '9670', 1, 3),
(223, '5254', 3, 3),
(224, '9338', 1, 2),
(225, '395', 1, 25),
(226, '5203', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `Id_danhmuc` int(4) NOT NULL,
  `tendanhmuc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`Id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Rau các loại'),
(2, 'Củ, quả các loại');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` varchar(10) NOT NULL,
  `Id_khachhang` int(4) NOT NULL,
  `tinhtrangdh` int(11) NOT NULL,
  `date_donhang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `Id_khachhang`, `tinhtrangdh`, `date_donhang`) VALUES
('1309', 18, 0, '2022-11-18 01:48:01'),
('2427', 17, 0, '2022-11-15 20:31:22'),
('3157', 15, 0, '2022-11-18 01:56:56'),
('3748', 17, 0, '2022-11-15 20:27:51'),
('395', 15, 0, '2022-11-28 08:28:56'),
('4425', 15, 0, '2022-11-13 19:20:59'),
('4502', 15, 1, '2022-11-27 18:51:11'),
('4683', 19, 0, '2022-11-26 01:35:08'),
('4758', 15, 0, '2022-11-18 01:57:13'),
('4891', 16, 0, '2022-11-14 12:55:39'),
('5203', 15, 1, '2023-03-14 00:12:46'),
('5254', 15, 1, '2022-11-27 18:54:28'),
('5312', 15, 0, '2022-11-15 20:12:27'),
('5584', 17, 0, '2022-11-15 20:28:04'),
('5623', 15, 1, '2022-11-27 18:50:41'),
('5845', 20, 0, '2022-11-22 02:47:35'),
('6090', 19, 0, '2022-11-22 20:01:27'),
('6154', 19, 0, '2022-11-22 19:25:01'),
('6842', 15, 0, '2022-11-18 01:57:23'),
('7529', 16, 0, '2022-11-27 02:16:49'),
('7922', 20, 0, '2022-11-27 02:58:41'),
('9338', 15, 1, '2022-11-28 08:28:18'),
('943', 15, 0, '2022-11-17 00:29:03'),
('9670', 15, 1, '2022-11-27 18:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `Id_khachhang` int(4) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`Id_khachhang`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(15, 'Thanh Hiếu', 'thanhhieu@gmail.com', 'Phường 5, thành phố Cà Mau', 'e10adc3949ba59abbe56e057f20f883e', '0914549857'),
(16, 'Phương Linh', 'phuonglinh@gmail.com', 'Phường 5, thành phố Cà Mau', 'e10adc3949ba59abbe56e057f20f883e', '0916276475'),
(17, 'Trọng Nhân', 'trongnhan@gmail.com', 'Phường 9, thành phố Cà Mau', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(18, 'Nhựt Duy', 'nhutduy@gmail.com', 'Châu Đốc , An Giang', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(19, 'Huỳnh Định', 'huynhdinh@gmail.com', 'Quận Ninh Kiều, thành phố Cần Thơ', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(20, 'Nguyên Anh', 'nguyenanh@gmail.com', 'Phường 5, thành phố Cà Mau', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(21, 'Trung Hậu', 'trunghau@gmail.com', 'Phường 9, thành phố Cà Mau', 'e10adc3949ba59abbe56e057f20f883e', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `kho`
--

CREATE TABLE `kho` (
  `Id_sanpham` int(4) NOT NULL,
  `tensanphamnhap` varchar(250) NOT NULL,
  `nhacungcap` varchar(250) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `gianhap` int(11) NOT NULL,
  `donvitinh` varchar(200) NOT NULL,
  `ngaynhap` varchar(100) NOT NULL,
  `soluongconlai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kho`
--

INSERT INTO `kho` (`Id_sanpham`, `tensanphamnhap`, `nhacungcap`, `soluongnhap`, `gianhap`, `donvitinh`, `ngaynhap`, `soluongconlai`) VALUES
(1, 'Rau dền tía', 'Trang trại rau Organic', 50, 21000, 'kilogam', '2022-10-11', -1),
(2, 'Bông cải xanh', 'Trang trại rau Organic', 50, 19600, 'kilogam', '2022-10-11', 30),
(3, 'Xà lách', 'Trang trại rau Organic', 50, 17500, 'kilogam', '2022-10-11', 44),
(4, 'Cải bẹ xanh', 'Trang trại rau Organic', 50, 10500, 'kilogam', '2022-10-11', 50),
(5, 'Bắp cải thảo', 'Trang trại rau Organic', 50, 16800, 'kilogam', '2022-10-11', 48),
(6, 'Mồng tơi', 'Trang trại rau Organic', 50, 10500, 'kilogam', '2022-10-11', 50),
(7, 'Tần ô', 'Trang trại rau Organic', 50, 17500, 'kilogam', '2022-10-11', 38),
(8, 'Cải thìa', 'Trang trại rau Organic', 50, 10500, 'kilogam', '2022-10-11', 46),
(9, 'Bí đỏ', 'Trang trại rau Organic', 50, 28000, 'kilogam', '2022-10-11', 47),
(10, 'Dưa leo', 'Trang trại rau Organic', 50, 7000, 'kilogam', '2022-10-11', 48),
(11, 'Khổ qua', 'Trang trại rau Organic', 50, 18900, 'kilogam', '2022-10-11', 47),
(12, 'Cà rốt', 'Trang trại rau Organic', 50, 21000, 'kilogam', '2022-10-11', 50),
(13, 'Su su', 'Trang trại rau Organic', 50, 31500, 'kilogam', '2022-10-11', 48),
(14, 'Cà chua', 'Trang trại rau Organic', 50, 14000, 'kilogam', '2022-10-11', 50),
(15, 'Củ dền', 'Trang trại rau Organic', 50, 15400, 'kilogam', '2022-10-11', 47),
(16, 'Khoai tây', 'Trang trại rau Organic', 50, 24500, 'kilogam', '2022-10-11', 48);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Id_sanpham` int(4) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `Id_danhmuc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Id_sanpham`, `tensanpham`, `masp`, `giasp`, `hinhanh`, `tomtat`, `noidung`, `Id_danhmuc`) VALUES
(1, 'Rau dền tía', '001', '30000', '1665683342_raudentia.jpg', '               Một vài nghiên cứu gần đây đã đưa ra được những dẫn chứng về chuỗi peptid trong rau dền có tác dụng làm giảm tình trạng viêm sưng trên người, và thậm chí nó còn có vai trò trong việc ngăn chặn hoạt động của gốc tự do tấn công các tế bào khỏe mạnh của cơ thể.\r\nCác triệu chứng viêm khớp, bệnh gút hay các vấn đề liên quan đến tình trạng viêm khác được những phân tử chống viêm có trong rau dền tác động tích cực và giảm thiểu nguy cơ.               ', '               Rau dền là một loại thực vật. Hạt, dầu và lá được dùng làm thực phẩm. Toàn bộ bộ phận của rau dền được sử dụng để làm thuốc. Rau dền được sử dụng để chữa loét, tiêu chảy, sưng miệng hoặc cổ họng và cholesterol cao, nhưng không có bằng chứng khoa học tốt để hỗ trợ những công dụng này.               ', 1),
(2, 'Bông cải xanh', '002', '28000', '1665683374_bongcaixanh.jpg', '         Một nghiên cứu của Anh cho thấy bông cải xanh có chứa một hợp chất gọi là Sulforaphane có thể giúp chống lại viêm xương khớp (osteoarthritis) - sulforaphane có thể chặn các enzyme phá hủy sụn bằng cách chặn một phân tử gây viêm.         ', '          Bông cải xanh (hoặc súp lơ xanh, cải bông xanh, Broccoli) là một loại cây thuộc loài Cải bắp dại, có hoa lớn ở đầu, thường được dùng như rau. Bông cải xanh thường được chế biến bằng cách luộc hoặc hấp, nhưng cũng có thể được ăn sống như là rau sống trong những đĩa đồ nguội khai vị.                ', 1),
(3, 'Xà lách', '003', '25000', '1665683454_xalach.jpg', 'Rau xà lách được biết đến là một loại rau chứa năng lượng thấp chỉ 15 calo/ 100 g. Do vậy đây là sự lựa chọn tốt cho các món salad xà lách giảm cân tuyệt vời. Trong 100 g rau xà lách khi ăn, cơ thể bạn sẽ được cung cấp vitamin A gấp 2 lần nhu cầu vitamin mà cơ thể cần. Ngoài ra, beta carotene cũng được cung cấp đủ với nhu cầu hàng ngày của cơ thể.', 'Rau xà lách hay còn gọi là rau diếp có vị hơi ngăm ngăm xuất hiện quanh năm và phát triển khá tốt ở vùng đất có mùn hay nhiều hợp chất hữu cơ. HIện nay, dựa vào cấu trúc người ta phát ra có 6 loại xà lách khác nhau. Sự khác nhau đó được dựa trên đặc điểm về ngọn và lá của cây xà lách.', 1),
(4, 'Cải bẹ xanh', '004', '15000', '1665683514_caibexanh.jpg', 'Cải bẹ xanh được biết đến với nhiều tên gọi như: cải xanh, cải đắng, cải canh, cải cay… Nó có tên khoa học là Brassica juncea (L.) Cải bẹ xanh có màu xanh, vị đắng nhẹ, cay mạnh. Loại cải này thường được dùng để luộc, nấu canh hoặc xào, dùng làm rau sống ăn kèm.', 'Rau cải xanh, hay cải bẹ xanh là một trong những thực phẩm bổ dưỡng nhất mà bạn nên bổ sung vào thực đơn ăn uống lành mạnh. Cải xanh là một nguồn cung cấp vitamin A, C và K dồi đào. Không chỉ thế, loại cải đắng này còn chứa nhiều hợp chất thực vật và chất chống oxy hóa có lợi cho sức khỏe.', 1),
(5, 'Bắp cải thảo', '005', '24000', '1665683553_bapcaithao.png', 'Bắp cải thảo (Chinese Cabbage) còn có tên gọi khác là bắp cải tây, cải cuốn – thuộc họ cải, có xuất xứ từ Trung Quốc. Cải thảo được nhiều người yêu thích bởi vị ngọt mát, được dùng để chế biến thành nhiều món ăn ngon.', 'Bắp cải thảo có 14 loại chất chống ung thư. Trong đó có glucosinolate – một hợp chất có khả năng chống lại chất gây ung thư hoặc chất thúc đẩy tiến triển của bệnh ung thư vượt trội. (Trong 1 gam bắp cải thảo có chứa đến 2,31 mg glucosinolate).', 1),
(6, 'Mồng tơi', '006', '15000', '1665683584_mongtoi.jpg', 'Trong rau mồng tơi có các chất như: Vitamin C, A, PP, B1, B2; Pectin; Saponin; Polysaccharide; Tinh bột; Chất đạm và béo; canxi; Sắt; Nước và Folate rất tốt cho cơ thể con người và giàu dinh dưỡng.', 'Rau mồng tơi có 2 loại dây trắng và tía, tuy nhiên, loại tía được đánh giá là tốt hơn. Đây là một loại thực vật thân leo, có hoa, thân mọng nước, bên ngoài vỏ màu xanh thẫm hoặc tía, trong thân chứa nhiều chất nhớt, lá mồng tơi màu xanh, dày. Hoa mọc xen ở các kẽ lá, có màu trắng hoặc tím đỏ, quả mồng tơi hình cầu, mọng nước, rễ chùm và ăn sâu vào lòng đất.\n\n', 1),
(7, 'Tần ô', '007', '25000', '1665683661_tano.jpg', 'Theo Đông y, rau tần ô (cải cúc) có vị ngọt, hơi đắng, the, thơm, tính hơi mát, lành không độc, có tính năng tiêu thực, thanh đàm hỏa, yên tâm khí.', 'Rau tần ô (cải cúc) sống quanh năm, cây có thể cao tới 1,2 m, lá ôm vào thân, xẻ thành hình lông chim. Cụm hoa ở nách lá, bông hoa màu trắng vàng, mùi thơm. Mùa hoa tần ô (cải cúc) thường rơi vào khoảng tháng 1 đến tháng 3.', 1),
(8, 'Cải thìa', '008', '15000', '1665683695_cai-thia.jpg', 'Cải thìa có khả năng phòng ngừa ung thư, giúp tiêu hoá tốt, tăng cường hệ miễn dịch, tốt cho mắt và tốt cho phụ nữ mang thai. Ngoài những công dụng đó thì cải thìa còn là một loại rau được nhiều người yêu thích. Ngày hôm nay hãy cùng chúng mình tìm hiểu một số món ngon từ cải thìa nhé!', 'Cải thìa là một loại rau vừa dễ ăn lại còn tốt cho sức khỏe. Ngày hôm nay hãy cùng Bách hoá XANH tổng hợp 8 món ngon từ cải thìa thơm ngon dễ làm nhé. Cùng chuẩn bị nguyên liệu với chúng mình nào.', 1),
(9, 'Bí đỏ', '009', '40000', '1665683902_bido.jpg', 'Trong các loại quả chứa hàm lượng dinh dưỡng cao, bí đỏ được xếp ở vị trí đầu tiên. Trong bí đỏ có chứa sắt, kali, phosphor, nước, protein thực vật, gluxit,.. các axit béo linoleic, cùng các vitamin C, vitamin B1, B2, B5, B6, PP. Ăn bí đỏ rất tốt cho não bộ, làm tăng cường miễn dịch, giúp tim khỏe mạnh, mắt sáng, cho giấc ngủ ngon hơn và hỗ trợ cho việc chăm sóc da cũng như làm đẹp, giúp giảm cân...', 'Bí ngô chưa được xác định tuy nhiên nhiều người cho rằng bí ngô có nguồn gốc ở Bắc Mỹ. Bằng chứng cổ nhất là các hạt bí ngô có trong niên đại từ năm 7000 đến 5500 trước Công nguyên đã được tìm thấy ở Mexico. Đây là loại quả lớn nhất trên thế giới.', 2),
(10, 'Dưa leo', '010', '10000', '1665684011_dualeo2.jpg', 'Dưa chuột chứa tới 95 - 97% nước, 0,8% protit, 3% gluxit, 0,7% xenlulozo, 0,5% tro, trong đó 23 mg% canxi, 27mg%P, 1mg% Fe. Dưa chuột còn chứa vitamin A (caroten) với tỷ lệ 0,3mg%, vitamin B1 0,03mg%, B2 với tỷ lệ 0,04mg%, vitamin PP 0,1mg% và vitamin C 5mg%. Ngoài viatamin A và C, trong dưa chuột còn chứa một lượng quan trọng sắt, mangan, iot và thiamin.', 'Dưa leo (tên khoa học Cucumis sativus L.) là một cây trồng phổ biến trong họ bầu bí (Cucurbitaceae), là loại rau ăn quả thương mại quan trọng, nó được trồng lâu đời trên thế giới và trở thành thực phẩm của nhiều nước.', 2),
(11, 'Khổ qua', '011', '27000', '1665684068_kho-qua-270.png', 'Theo Đông y, khổ qua có vị đắng, tính hàn, công dụng thanh nhiệt, giải độc. Trẻ em bị chứng rôm sảy hoặc nhọt lâu ngày không vỡ, khi lấy khổ qua thái miếng mỏng xoa nhẹ và đều lên vùng da bị bệnh sẽ cho hiệu quả khá tốt.', 'Khổ qua là loại rau củ có tác dụng giải cảm, tăng cường sức đề kháng, an thần, giảm mỡ máu... Đặc biệt, công dụng điều trị đái tháo đường (ĐTĐ) của nó ngày càng được chứng minh.', 2),
(12, 'Cà rốt', '012', '30000', '1665684115_carot.jpg', 'Cà rốt màu vàng có chứa lutein, cũng rất tốt cho đôi mắt của bạn. Các nghiên cứu đã phát hiện ra rằng dưỡng chất này có thể ngăn ngừa thoái hóa điểm vàng liên quan đến tuổi tác - nguyên nhân hàng đầu gây giảm thị lực ở Hoa Kỳ.', 'Cà rốt (bắt nguồn từ tiếng Pháp carotte /kaʁɔt/, danh pháp khoa học: Daucus carota subsp. sativus) là một loại cây có củ, thường có màu đỏ, vàng, trắng hay tía. Phần ăn được của cà rốt là củ, thực chất là rễ cái của nó, chứa nhiều tiền tố của vitamin A tốt cho mắt.', 2),
(13, 'Su su', '013', '45000', '1665684162_susu.png', 'Chất xơ trong su su giúp cho dạ dày hoạt động khỏe mạnh và hiệu quả hơn. Nhờ vào đặc tính hút nước, chất xơ sẽ có xu hướng trương lên khi ở trong ruột làm phân giãn nở và mềm ra. Từ đó, kích thích thành ruột đẩy chất ra ngoài dễ dàng hơn và giúp đẩy lùi, hạn chế chứng táo bón.', 'Su su hay su le trong phương ngữ miền Trung Việt Nam (danh pháp hai phần: Sechium edule) là một loại cây lấy quả ăn, thuộc họ Bầu bí, cùng với dưa hấu, dưa chuột và bí. Cây này có lá rộng, thân cây dây leo trên mặt đất hoặc trên giàn.', 2),
(14, 'Cà chua', '014', '20000', '1665684194_cachua.jpg', 'Hàm lượng chiếm tỷ lệ cao nhất trong cà chua là 95% nước, 5% còn lại chủ yếu bao gồm carbohydrate và chất xơ. Trong 100 gam cà chua sống bao gồm thành phần dinh dưỡng sau: 18 kcal, 0,9 gam đạm, 3,9 gam carb, 2,6 gam đường, 1,2 gam chất xơ, 0,2 gam chất béo...  ', 'Cà chua (danh pháp hai phần: Solanum lycopersicum), thuộc họ Cà (Solanaceae), là một loại rau quả làm thực phẩm. Quả ban đầu có màu xanh, chín ngả màu từ vàng đến đỏ. Cà chua có vị hơi chua và là một loại thực phẩm bổ dưỡng, tốt cho cơ thể, giàu vitamin C và A, đặc biệt là giàu lycopeme tốt cho sức khỏe.', 2),
(15, 'Củ dền', '015', '22000', '1665684237_cuden.jpg', 'Củ dền là loại rau củ có chứa đa dạng các loại vitamin A, vitamin C, acid folic. Đây là một trong các loại thực phẩm tuyệt vời đem lại nhiều lợi ích cho cơ thể như giảm nguy cơ nhồi máu cơ tim, giảm sự mệt mỏi.', 'Củ dền, thuộc loại củ cải ngọt (tên gọi tiếng Anh là Beetroot) hay được gọi là củ dền đỏ (Red beet), thường được trồng nhiều nhất ở các khu vực tại Anh Quốc, Trung Mỹ và Bắc Mỹ.', 2),
(16, 'Khoai tây', '016', '35000', '1665684271_khoaitay.jpg', 'Khoai tây nấu chín ở trạng thái còn nguyên vỏ là một nguồn thực phẩm cung cấp nhiều loại vitamin và khoáng chất thiết yếu cho cơ thể, ví dụ như vitamin C hoặc kali.', 'Khoai tây (danh pháp hai phần: Solanum tuberosum), thuộc họ Cà (Solanaceae). Khoai tây là loài cây nông nghiệp ngắn ngày, trồng lấy củ chứa tinh bột. Chúng là loại cây trồng lấy củ rộng rãi nhất thế giới và là loại cây trồng phổ biến thứ tư về mặt sản lượng tươi – xếp sau lúa, lúa mì và ngô. Lưu trữ khoai tây dài ngày đòi hỏi bảo quản trong điều kiện lạnh.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `Id_thongke` int(4) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `thoigiantk` varchar(30) NOT NULL DEFAULT current_timestamp(),
  `sldonhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (`Id_thongke`, `madonhang`, `thoigiantk`, `sldonhang`, `doanhthu`, `soluongban`) VALUES
(30, '4425', '2022-11-13 19:11:09', 1, '90000', 3),
(31, '4891', '2022-11-14 12:11:51', 1, '75000', 3),
(32, '2427', '2022-11-15 20:11:48', 4, '272000', 10),
(33, '943', '2022-11-17 00:11:32', 1, '90000', 3),
(34, '1309', '2022-11-18 01:11:31', 4, '540000', 22),
(35, '6090', '2022-11-22 02:11:42', 3, '327000', 13),
(36, '4683', '2022-11-26 01:11:07', 1, '174000', 6),
(37, '7922', '2022-11-27 02:11:04', 2, '210000', 5),
(38, '395', '2022-11-28 08:11:15', 1, '750000', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`Id_chitietdonhang`,`madonhang`,`Id_sanpham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`Id_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `Id_khachhang` (`Id_khachhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Id_khachhang`);

--
-- Indexes for table `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`Id_sanpham`),
  ADD UNIQUE KEY `Id_sanpham` (`Id_sanpham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Id_sanpham`),
  ADD KEY `Id_danhmuc` (`Id_danhmuc`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`Id_thongke`),
  ADD KEY `madonhang` (`madonhang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_Admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `Id_chitietdonhang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `Id_danhmuc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Id_khachhang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Id_sanpham` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `Id_thongke` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`Id_sanpham`) REFERENCES `sanpham` (`Id_sanpham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`Id_khachhang`) REFERENCES `khachhang` (`Id_khachhang`);

--
-- Constraints for table `kho`
--
ALTER TABLE `kho`
  ADD CONSTRAINT `kho_ibfk_1` FOREIGN KEY (`Id_sanpham`) REFERENCES `sanpham` (`Id_sanpham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Id_danhmuc`) REFERENCES `danhmuc` (`Id_danhmuc`);

--
-- Constraints for table `thongke`
--
ALTER TABLE `thongke`
  ADD CONSTRAINT `thongke_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
