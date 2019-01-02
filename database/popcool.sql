-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2018 lúc 10:49 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `popcool`
--
use popcool;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `idphim` int(11) NOT NULL,
  `tenphim` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `thoiluong` int(3) DEFAULT NULL,
  `theloai` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `daodien` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dienvien` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `mota` varchar(5000) COLLATE utf8_bin DEFAULT NULL,
  `trailer` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `khoichieu` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `poster` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `trangthai` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`idphim`, `tenphim`, `thoiluong`, `theloai`, `daodien`, `dienvien`, `mota`, `trailer`, `khoichieu`, `poster`, `trangthai`) VALUES
(13, 'SINH VẬT HUYỀN BÍ: TỘI ÁC CỦA GRINDELWALD', 140, 'Phiêu Lưu, Thần thoại', 'David Yates', 'Johnny Depp, Ezra Miller, Katherine Waterston', '<p>Sau thành công của phần đầu tiên, \"Sinh Vật Huyền Bí: Tội Ác Của Grindelwald\" tiếp tục mang đến cho người xem cái nhìn sâu sắc về một thế giới phù thủy đen tối và dữ dội hơn cùng cuộc chiến nảy lửa giữa vị pháp sư đáng kính Albus Dumbledore (Jude Law) và phù thủy bóng tối xấu xa Gellert Grindelwald (Johnny Depp). Bộ phim xoay quanh cuộc chiến giữa hai phe để truy tìm và tranh giành các Bảo bối Tử thần. Các phù thủy sẽ phải làm gì khi đứng giữa 2 sự lựa chọn: hòa bình hay chiến tranh với thế giới người phàm?</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TiblmGnet2Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '16-11-2018', 'svhb.jpg', 'Đang chiếu'),
(14, 'AQUAMAN: ĐẾ VƯƠNG ATLANTIS', 145, 'Hành Động', 'James Wan', 'Jason Momoa, Amber Heard, Patrick Wilson,...', '<p>Câu chuyện của Đế Vương Atlantis tiếp nối sau những sự kiện xảy ra trong Justice League – Liên Minh Công Lý. Theo đó, Arthur Curry/Aquaman bắt đầu trị vì vương quốc dưới biển sâu Atlantics, và đứng trong tình thế khó xử là những cư dân trên cạn luôn gây ô nhiễm môi trường toàn cầu trong khi người dân Atlantics luôn sẵn sàng để chiếm lấy đất liền. Bên cạnh đó, hải vương Aquaman còn phải đối mặt với những kẻ thù lăm le đe đọa nền hòa bình và yên ổn của vương quốc mình.</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WDkg3h8PCVU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '13-12-2018', 'aqm.jpg', 'Đang chiếu'),
(15, 'CHIẾN DỊCH OVERLORD', 112, 'Hành Động, Kịch Tính', 'Julius Avery', 'Jovan Adepo, Wyatt Russell, Pilou Asbæk,...', 'Vào đêm trước ngày đổ bộ tấn công (D-Day), đội lính Mỹ bị tụt lại phía sau các để thực hiện nhiệm vụ quan trọng đối với sự thành công của chiến dịch. Khi họ tiếp cận mục tiêu của mình, họ bắt đầu nhận ra rằng có nhiều điều kì lạ đang diễn ra trong ngôi làng bị chiếm đóng bởi Quốc xã này hơn là một hoạt động quân sự đơn giản. Họ phải chiến đấu chống lại một lực lượng siêu nhiên - đội quân ngàn năm, một sản phẩm của thí nghiệm Đức quốc xã.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qDTzgON0ebA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '23-11-2018', 'cdol.jpg', 'Đang chiếu'),
(16, 'Wreck-It Ralph 2: Phá đảo thế giới ảo', 115, 'Phiêu Lưu, Hài Hước', 'Rick Moore', 'Jack Mc Brayer, Jane Lynch, John C. Reilly, ', '<p>Bom tấn hoạt hình mới nhất của xưởng Walt Disney tiếp tục chiếm ngôi đầu phòng vé Bắc Mỹ cuối tuần qua với ước tính 25,8 triệu USD từ 4.017 rạp. Sau hơn 10 ngày có mặt tại phòng vé, <i>Ralph Breaks the Internet</i> hiện thu gần 119,3 triệu USD từ riêng Bắc Mỹ, cũng như 87,7 triệu USD từ các thị trường quốc tế.</p><p>Doanh thu toàn cầu 207 triệu USD cho thấy tốc độ bán vé của tác phẩm không quá nhanh. Lý do bởi Disney chọn phát hành bộ phim rải rác bên ngoài Bắc Mỹ. <i>Ralph Breaks the Internet </i>vẫn còn đến 23 thị trường quan trọng chưa ra quân, trong đó có Nhật Bản, Australia (cuối tháng 12), Italy, Brazil, Pháp và Đức (tháng 1/2019).</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KHQhp2cGZtE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '12-12-2018', 'rpdp2.jpg', 'Đang chiếu'),
(17, 'GÁI GIÀ LẮM CHIÊU 2', 108, 'Hài, Tình cảm', 'Bảo Nhân, Namcito', 'Ninh Dương Lan Ngọc, Lê Xuân Tiền', 'Bộ phim xoay quanh hành trình tìm kiếm sự cân bằng trong công việc và tình yêu của gái già Ms. Q 34 tuổi (Ninh Dương Lan Ngọc đóng) – một mẫu phụ nữ độc lập, sang chảnh với phong cách sống thành thị. Cô rơi vào cuộc chơi “phi công trẻ - máy bay bà già” với anh chàng male escort bảnh bao, có thân hình vạm vỡ tên Jack, 25 tuổi (Lê Xuân Tiền đóng). Từ đó xảy ra nhiều câu chuyện dở khóc dở cười khiến cuộc sống và sự nghiệp của gái già Ms. Q thay đổi hoàn toàn.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KBEMrMrTgBg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '14-12-2018', 'gglc2.jpg', 'Đang chiếu'),
(18, 'ROBIN HOOD', 118, 'Hành Động, Lịch Sử', 'Otto Bathurst', 'Jamie Foxx, Taron Egerton, Jamie Dornan, Eve Hewson', 'ROBIN xứ Loxley (Taron Egerton), chàng chiến binh mạnh mẽ cùng chỉ huy người Moor (Jamie Foxx) khởi đầu cuộc nổi dậy táo bạo chống lại Vương triều Anh đã ngập tràn nhiễu nhương. Một cuộc phiêu lưu hành động ly kỳ mở ra những chiến trường khốc liệt, những trận chiến đấu hùng tráng và một mối tình vượt thời gian.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zwPn9ZnbCo0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '30-11-2018', 'rbh.jpg', 'Đang chiếu'),
(19, 'THE GRINCH', 95, 'Hoạt Hình', 'Yarrow Cheney, Scott Mosier', 'Benedict Cumberbatch', 'The Grinch là một kẻ cô độc, suốt ngày cau có. Hắn không sống chung với bất kỳ ai mà ở trong hang núi với một chú chó. Bị bỏ rơi từ nhỏ, hắn luôn ganh tị với niềm hạnh phúc của tất cả mọi người. Cũng chính vì thế, The Grinch đã âm mưu phá hoại lễ giáng sinh của dân làng.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Bf6D-i8YpHg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '19-11-2018', 'tg.jpg', 'Đang chiếu'),
(20, 'ĐƯỜNG VỀ NHÀ CỦA CÚN CON', 95, 'Gia đình, Phiêu Lưu', 'Charles Martin Smith', 'Ashley Judd, Alexandra Shipp, Barry Watson,...', 'Trong một lần mải mê đuổi sóc, nàng cún Bella đi lạc rất xa khỏi căn nhà của mình. Cô nàng được một gia đình tìm thấy và đưa về nơi ở mới. Nhưng những thứ lạ lẫm kia chẳng hề có hình bóng quen thuộc của Lucas. Sợ rằng cậu chủ đang đợi chờ mình trong cô đơn, nàng cún bất chấp mọi rủi ro để tự tìm đường về nhà và chuẩn bị đối mặt với bao gian khó trước mắt.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XLQsPEVbqZ4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '11-1-2019', 'dvnccc.jpg', 'Sắp chiếu'),
(21, 'MARY POPPINS TRỞ LẠI', 120, 'Bí ẩn, Gia đình', 'Rob Marshall', 'Emily Blunt, Lin-Manuel Miranda, Meryl Streep,...', 'Trong bối cảnh ở thời hậu đại suy thoái của London - nước Anh, Marry Popins, cô bảo mẫu với khả năng phép thuật bí ẩn, quay trở về để giúp đỡ thế hệ sau của gia đình Banks tìm thấy niềm vui và điều kì diệu trong cuộc sống mà họ đang dần đánh mất.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BMw62jgTI-E\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '28-12-2018', 'mptl.jpg', 'Sắp chiếu'),
(22, 'CẬU BÉ VÀ SỨ MỆNH THIÊN TỬ', 145, 'Gia đình, Hài, Phiêu Lưu', 'Joe Cornish', 'Louis Ashbourne Serkis, Dean Chaumoo, Tom Taylor, Rhianna Doris, Angus Imrie, Rebecca Ferguson, Patr', 'Dựa trên huyền thoại về vị vua được chọn lựa khi là người duy nhất rút được thanh gươm huyền bí trong đá đồng thời nắm giữ vận mệnh thiên tử. Bối cảnh phim diễn ra tại Anh và nhân vật chính của chúng ta là một cậu bé, hay bị bạn bè ăn hiếp. Nhưng một ngày nọ cậu phát hiện thanh gươm trong đá như trong truyền thuyết, khi cậu bé rút thanh gươm ra khỏi tảng đá cũng là lúc thế lực hắc ám bắt đầu xâm chiếm trái đất và hành trình hoàn thành sứ mệnh thiên tử của cậu bé cũng bắt đầu.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xKDuS2XFE4U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '18-1-2019', 'cbvsmtt.jpg', 'Sắp chiếu'),
(23, 'CON NUÔI BẤT ĐẮC DĨ', 112, 'Gia đình, Hài', 'Sean Anders', 'Mark Wahlberg, John Morris, Stephen Levinson, Sean Anders', 'Câu chuyện hài hước về cặp vợ chồng Pete và Ellie khi quyết định trở thành ba mẹ nuôi của 3 đứa trẻ với 3 độ tuổi và tính cách khác nhau: Cô gái tuổi teen Lizzy, cậu bé ngốc nghếch Juan và cô út luôn la hét Lita.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Dsa_kSJCXZ8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '11-1-2019', 'cnbdd.jpg', 'Sắp chiếu'),
(24, 'MORE THAN BLUE', 140, 'Tâm Lý, Tình cảm', 'Gavin Lin', 'Jasper Liu Ivy Chen Bryan Chang Shu-Hao Annie Chen', 'More Than Blue 2019 là khúc tình ca mới xứ Đài, kể về tình yêu cảm động của K và Cream. Họ gặp nhau năm 16 tuổi tại trường trung học và dần thân thiết như người trong gia đình. Năm tháng thôi qua, K đi làm cho một hãng thu âm và Cream trở thành nhạc sĩ, họ vẫn sống với nhau dù không phải là một đôi. Một ngày kia, K bị chẩn đoán mắc bệnh bạch cầu, K do dự không tiết lộ bệnh tình của mình cũng như thổ lộ tình yêu với Cream vì sợ cô tổn thương. Trước khi không còn thời gian, K phải làm mọi thứ để Cream có thể ổn định và hạnh phúc.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aQSSjYm8Aws\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '11-1-2018', 'mtb.jpg', 'Sắp chiếu'),
(25, 'TRẠNG QUỲNH', 95, 'Hài, Lịch Sử', 'Đỗ Đức Thịnh', 'Trần Quốc Anh, Nhã Phương, Trấn Thành, Công Dương, Khả Như, …', '<p>Trạng Quỳnh xoay quanh hành trình gian truân nhưng cũng nhiều tiếng cười của Trạng Quỳnh (Quốc Anh), Điềm (Nhã Phương) và Xẩm (Trấn Thành) đi giải cứu thầy Đoàn (Tùng Yuki) - cha của Điềm. Họ là những con người nhỏ bé trong xã hội phong kiến, dù luôn bị chèn ép bởi tầng lớp quan lại bất công như Trịnh Bá (Công Dương) - công tử con quan lớn dùng quyền lực vu oan giá họa cho thầy Đoàn, Ả Liễu (Khả Như) - một người phụ nữ vô cùng mưu mô, xảo quyệt, nhưng Trạng Quỳnh và hai người bạn đồng hành chưa bao giờ bỏ cuộc.</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gNX-eYbm7Jc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '5-2-2019', 'tq.jpg', 'Sắp chiếu'),
(26, 'BÍ KÍP LUYỆN RỒNG: VÙNG ĐẤT BÍ ẨN', 125, 'Hoạt Hình, Phiêu Lưu', 'Dean DeBlois', 'Jay Baruchel, America Ferrera, Cate Blanchett, Craig Ferguson, Jonah Hill', 'Sau khi Hiccup tạo ra một thế giới hòa bình cho loài rồng, Răng Sún phát hiện ra một người bạn mới đầy bí hiểm. Lúc này Hiccup đã trở thành người lãnh đạo của cả làng gánh trên vai trọng trách gìn giữ sự an nguy cho mọi người. Vì vậy, cậu không thể mãi bị cuốn theo những cuộc phiêu lưu bất tận với Răng Sún. Và khi nguy hiểm ập đến ngôi làng, cả Hiccup và Răng Sún đều đã đứng lên, anh dũng bảo vệ giống loài của mình.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Siqw8k05D4g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '6-2-2018', 'bklr.jpg', 'Sắp chiếu'),
(27, 'ALITA THIÊN THẦN CHIẾN BINH', 125, 'Hành Động, Phiêu Lưu', 'Robert Rodriguez', 'Rosa Salazar, Christoph Waltz, Jennifer Connelly, Mahershala Ali, Ed Skrein, Jackie Earle Haley, Kee', 'Tác phẩm live-action chuyển thể từ manga cùng tên của Yukito Kishiro. ALITA: BATTLE ANGEL (Thiên Thần Chiến Binh) hứa hẹn là một tác phẩm hành động viễn tưởng đỉnh cao qua bàn tay nhào nặn của những tên tuổi huyền thoại - James Cameron, Jon Landau và đạo diễn Robert Rodriguez. Phim lấy bối cảnh ở thế kỷ 26, xoay quanh nữ cyborg Alita do nữ diễn viên Rosa Salazar thủ vai. Cô bị bỏ rơi ở một bãi rác thải của Iron City và được cứu chữa bởi tiến sĩ Dyson Ido (Christoph Waltz thủ vai). Sau khi tỉnh dậy, cô không còn nhớ mình là ai và thế giới của cô đang sống như thế nào. Trong khi bác sĩ Ido ra sức che giấu quá khứ phức tạp của Alita thì người bạn mới là Hugo tìm cách giúp cô lấy lại ký ức. Alita dần phát hiện ra người cha nuôi của mình là một thợ săn tiền thưởng và sau đó, cô tham gia cùng với ông để tìm hiểu về quá khứ của mình. Cô dần phát hiện khả năng chiến đấu siêu phàm cũng như vai trò của cô giữa thế giới bị bao phủ bởi nhiều thế lực bóng tối.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/woH27gk2Ptc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '14-2-2019', 'attcb.jpg', 'Sắp chiếu'),
(28, 'ĐẠI ÚY MARVEL', 130, 'Hành Động, Phiêu Lưu', 'Anna Boden, Ryan Fleck', 'Brie Larson, Samuel L Jackson, Ben Mendelsohn,...', 'Lấy bối cảnh những năm 90s, Captain Marvel là một cuộc phiêu lưu hoàn toàn mới đến với một thời kỳ chưa từng xuất hiện trong vũ trụ điện ảnh Marvel. Bộ phim kể về con đường trở thành siêu anh hùng mạnh mẽ nhất vũ trụ của Carol Danvers. Bên cạnh đó, trận chiến ảnh hưởng đến toàn vũ trụ giữa tộc Kree và tộc Skrull đã lan đến Trái Đất, liệu Danvers và các đồng minh có thể ngăn chặn binh đoàn Skrull cũng như các thảm họa tương lai?', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lUrKcXN2cBk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '8-3-2019', 'dumv.jpg', 'Sắp chiếu'),
(29, 'HỒN PAPA DA CON GÁI', 110, 'Hài, Tâm Lý', 'Ken Ochiai', 'Thái Hòa, Kaity Nguyễn, Vân Trang, Chí Tài', 'Hồn Papa, Da Con Gái là phim điện ảnh thứ 2 của đạo diễn Ken Ochiai thực hiện tại Việt Nam. Bộ phim là câu chuyện tréo ngoe, bi hài của của hai cha con Hải (Thái Hoà) và Châu (Kaity Nguyễn). Mối quan hệ của hai người ngày càng xa cách từ khi người mẹ của Châu qua đời. Châu là một cô gái độc lập và tài năng luôn muốn khiến mẹ mình tự hào, trong khi Hải lại là ông bố mê chơi, hay dựa dẫm. Vì một trận cãi nhau mà linh hồn người mẹ đã chuyển đổi thân xác của người cha và con gái. Từ đó, họ mới cảm thấy thông cảm hơn cho đối phương khi người này sống trong cuộc đời của người kia.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N5wiORvWnZw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '28-12-2018', 'hppdcg.jpg', 'Sắp chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongchieu`
--

CREATE TABLE `phongchieu` (
  `idphong` int(3) NOT NULL,
  `soghe` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `phongchieu`
--

INSERT INTO `phongchieu` (`idphong`, `soghe`) VALUES
(111, 20),
(222, 10),
(333, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `id_sc` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `idphong` int(3) DEFAULT NULL,
  `idphim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`id_sc`, `date`, `time`, `idphong`, `idphim`) VALUES
(1, 'Tue', '9:00', 111, 19),
(2, 'Mon', '11:11', 111, 13),
(3, 'Mon', '21:30', 111, 17),
(4, 'Mon', '15:15', 111, 18),
(5, 'Thu', '17:40', 111, 16),
(6, 'Wed', '19:15', 111, 15),
(7, 'Mon', '13:15', 111, 17),
(8, 'Mon', '9:30', 222, 13),
(9, 'Wed', '10:11', 222, 15),
(10, 'Mon', '12:00', 111, 17),
(11, 'Tue', '10:00', 111, 19),
(12, 'Tue', '17:30', 333, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `uname` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(6) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`email`, `password`, `uname`, `phone`, `type`) VALUES
('PCMRoot@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Root', '', 'admin'),
('rokbinn@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyen Minh Khoi', '0969069589', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `idve` int(11) NOT NULL,
  `id_sc` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`idphim`);

--
-- Chỉ mục cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD PRIMARY KEY (`idphong`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`id_sc`),
  ADD KEY `FK_suatchieu_phim` (`idphim`),
  ADD KEY `FK_suatchieu_phongchieu` (`idphong`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`idve`),
  ADD KEY `FK_ve_thanhvien` (`email`),
  ADD KEY `FK_ve_suatchieu` (`id_sc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `idphim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  MODIFY `id_sc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `idve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD CONSTRAINT `FK_suatchieu_phim` FOREIGN KEY (`idphim`) REFERENCES `phim` (`idphim`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_suatchieu_phongchieu` FOREIGN KEY (`idphong`) REFERENCES `phongchieu` (`idphong`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `FK_ve_suatchieu` FOREIGN KEY (`id_sc`) REFERENCES `suatchieu` (`id_sc`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ve_thanhvien` FOREIGN KEY (`email`) REFERENCES `thanhvien` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
