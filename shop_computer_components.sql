-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2022 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_computer_components`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_status` tinyint(4) NOT NULL DEFAULT 1,
  `a_author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `a_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_name_slug`, `a_description`, `a_content`, `a_status`, `a_author_id`, `a_image`, `a_view`, `created_at`, `updated_at`) VALUES
(2, 'Hướng dẫn cách check bảo hành ổ cứng SSD Samsung chính hãng', 'huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang', 'Samsung là một hãng công nghệ nổi tiếng trên thế giới. Và trong phân khúc SSD thì Samsung chính là biểu tượng của chất lượng cũng như giá thành đắt đỏ. Vì vậy, việc bảo hành cũng như xem thông tin của chiếc ổ cứng này là rất cần thiết. Bài viết nè sẽ hướng dẫn các bạn cách check bảo hành SSD Samsung chính hãng.', '<h3><strong>1. Bước 1 :Truy cập trang web bảo h&agrave;nh của Seagate</strong></h3>\r\n\r\n<p>Bạn truy cập&nbsp;<strong><a href=\"http://support.seagate.com/apps/customer/en-US/warranty_validation.jsp\" target=\"_blank\">Tại đ&acirc;y</a></strong></p>\r\n\r\n<p><img alt=\"Truy cập trang web bảo hành SEAGATE\" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-10.jpg\" title=\"Truy cập trang web bảo hành SEAGATE\" /></p>\r\n\r\n<p><img alt=\"Điền thông tin tại trang web \" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-11.jpg\" title=\"Điền thông tin tại trang web \" /></p>\r\n\r\n<p>( Bạn chỉ cần thực hiện như hướng dẫn ở h&igrave;nh)</p>\r\n\r\n<h3><strong>2. Bước 2: G&otilde; Serial Number v&agrave; số Model để tiến h&agrave;nh check thời hạn bảo h&agrave;nh</strong></h3>\r\n\r\n<p>Sản phẩm lu&ocirc;n ghi r&otilde;&nbsp;<strong>Serial Number</strong>&nbsp;v&agrave; số&nbsp;<strong>Model</strong>&nbsp;ở th&acirc;n n&ecirc;n bạn chỉ việc đọc v&agrave; điền v&agrave;o đ&uacute;ng những &ocirc; y&ecirc;u cầu.</p>\r\n\r\n<p><img alt=\" Ghi rõ Serial Number và số Model\" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-110.jpg\" title=\" Ghi rõ Serial Number và số Model\" /></p>\r\n\r\n<p>Sau khi đ&atilde; điền đầy đủ th&ocirc;ng tin bạn chỉ cần&nbsp;<strong>Submit</strong>&nbsp;l&agrave; trang chủ đ&atilde; cho bạn kết bản t&igrave;nh trạng bảo h&agrave;nh của SSD.</p>\r\n\r\n<h3><strong>3. Bước 3: Đọc kết quả v&agrave; kiểm tra thời hạn bảo h&agrave;nh</strong></h3>\r\n\r\n<p>Sau khi đ&atilde; thực hiện bước thứ 2 th&igrave; bạn chỉ việc đọc kết quả v&agrave; kiểm tra thời gian bảo h&agrave;nh của chiếc SSD của m&igrave;nh. Nếu c&oacute; vấn đề g&igrave; bạn c&oacute; thể đem chiếc SSD đến với c&aacute;c trung t&acirc;m bảo h&agrave;nh Samsung ở Việt Nam.</p>\r\n\r\n<p><img alt=\"Tình trạng bảo hành \" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-6.jpg\" title=\"Tình trạng bảo hành \" /></p>\r\n\r\n<h3><strong>4. C&aacute;c trung t&acirc;m bảo h&agrave;nh ổ cứng Samsung</strong></h3>\r\n\r\n<p><strong>1.</strong>&nbsp;<strong>Hồ Ch&iacute; Minh:</strong>&nbsp;Seacare Centre - 028 3914 326731</p>\r\n\r\n<p>Hồ Hảo Hớn, Phường C&ocirc; Giang, Quận 1</p>\r\n\r\n<p>Thứ 2 - 6 từ 8.30AM - 5PM</p>\r\n\r\n<p><strong>2. H&agrave; Nội:</strong>&nbsp;Seacare Centre - 04 3747 6470111</p>\r\n\r\n<p>Nguyễn Ch&iacute; Thanh, Phường L&aacute;ng Hạ, Quận Đống Đa</p>\r\n\r\n<p>Thứ 2 - 6 từ 8.30AM - 5PM</p>\r\n\r\n<p>Hy vọng b&agrave;i viết n&agrave;y bổ &iacute;ch với bạn v&agrave; gi&uacute;p kiểm tra được th&ocirc;ng tin bảo h&agrave;nh chiếc ổ cứng Samsung của m&igrave;nh.</p>', 1, NULL, 'mVc_huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-thumb.jpg', 0, '2021-12-03 06:07:39', '2022-01-13 11:17:29'),
(3, 'Cách thêm và cài đặt tiện ích thời tiết trên điện thoại Samsung', 'cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-samsung', 'Nếu bạn đang sử dụng điện thoại Samsung, chắc hẳn đôi khi bạn cũng sẽ nhận được thông báo về điều kiện thời tiết hiện tại. Nhấn vào đó sẽ vào một ứng dụng thời tiết độc quyền của Samsung nhưng sẽ không thể tìm kiếm được nó đó trong kho ứng dụng. Bài viết này sẽ giúp bạn tạo phím tắt ứng dụng thời tiết một cách đơn giản nhất!', '<h3><strong>1. Th&ecirc;m tiện &iacute;ch thời tiết v&agrave;o m&agrave;n h&igrave;nh chủ</strong></h3>\r\n\r\n<p>Ch&uacute;ng ta sẽ c&oacute; hai c&aacute;ch để th&ecirc;m tiện &iacute;ch v&agrave;o m&agrave;n h&igrave;nh chủ.</p>\r\n\r\n<h4><strong>C&aacute;ch 1:&nbsp;</strong>V&agrave;o phần c&agrave;i đặt của m&aacute;y</h4>\r\n\r\n<p>- Bước 1:<strong>&nbsp;Vuốt cạnh m&agrave;n h&igrave;nh ph&iacute;a tr&ecirc;n xuống</strong>&nbsp;=&gt; nhấn v&agrave;o biểu tượng h&igrave;nh&nbsp;<strong>b&aacute;nh răng</strong>&nbsp;(phần c&agrave;i đặt) =&gt; ch&uacute;ng ta t&igrave;m đến phần&nbsp;<strong>ứng dụng</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>​​</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Bước 2: V&agrave;o phần&nbsp;<strong>t&igrave;m kiếm</strong>&nbsp;của phần&nbsp;<strong>ứng dụng&nbsp;</strong>để t&igrave;m<strong>&nbsp;ứng dụng thời tiết&nbsp;</strong>=&gt; nhấn v&agrave;o biểu tượng&nbsp;<strong>răng cưa</strong>&nbsp;(phần c&agrave;i đặt của ứng dụng thời tiết) =&gt; t&igrave;m đến phần&nbsp;<strong>th&ecirc;m biểu tượng Thời tiết</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Bước 3: Nhấn v&agrave;o c&aacute;i n&uacute;t cạnh phần&nbsp;<strong>th&ecirc;m biểu tượng thời tiết&nbsp;</strong>cho n&oacute; chuyển sang&nbsp;<strong>m&agrave;u xanh&nbsp;</strong>như h&igrave;nh minh họa dưới đ&acirc;y =&gt; v&agrave; thế l&agrave; ứng dụng&nbsp;<strong>thời tiết</strong>&nbsp;đ&atilde; xuất hiện trong kho ứng dụng</p>\r\n\r\n<p><img alt=\"Bước 3\" src=\"//cdn.tgdd.vn/hoi-dap/1251271/cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-3.jpg\" title=\"Bước 3\" /></p>\r\n\r\n<h4><strong>C&aacute;ch 2:&nbsp;</strong>Nhấn giữ m&agrave;n h&igrave;nh ch&iacute;nh</h4>\r\n\r\n<p>Bước 1:&nbsp;<strong>Nhấn giữ m&agrave;n h&igrave;nh ch&iacute;nh</strong>&nbsp;để được giao diện như h&igrave;nh minh họa v&agrave; nhấn v&ocirc; phần&nbsp;<strong>Widget</strong>&nbsp;=&gt; vuốt từ cạnh phải qua để kiếm phần&nbsp;<strong>Thời tiết&nbsp;</strong>=&gt; nhấn v&agrave;o&nbsp;<strong>widget Thời tiết</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bước 2: giao diện&nbsp;<strong>widget thời tiết&nbsp;</strong>hiện ra =&gt;&nbsp;<strong>chạm v&agrave; giữ&nbsp;</strong>một widget bất k&igrave; m&agrave; bạn muốn =&gt;&nbsp;<strong>k&eacute;o v&agrave; thả</strong>&nbsp;widget ra m&agrave;n h&igrave;nh ch&iacute;nh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Ứng dụng sẽ tự động chọn vị tr&iacute; hiện tại của bạn nếu bạn bật vị tr&iacute;, để ứng dụng sẽ tự cập nhật th&ocirc;ng tin thời tiết nơi bạn đang ở hiện tại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>2. C&agrave;i đặt tiện &iacute;ch thời tiết</strong></h3>\r\n\r\n<p>-&nbsp;<strong>Đơn vị:</strong>&nbsp;Bạn c&oacute; thể chọn đơn vị nhiệt độ m&agrave; bạn muốn hiển thị (độ C hoặc độ F).</p>\r\n\r\n<p>-&nbsp;<strong>Sử dụng vị tr&iacute; hiện tại:</strong>&nbsp;Nếu bật n&oacute; l&ecirc;n sẽ gi&uacute;p nh&agrave; cung cấp dịch vụ dự b&aacute;o thời tiết đưa đến cho bạn th&ocirc;ng tin thời tiết của vị tr&iacute; hiện tại (việc n&agrave;y đ&ograve;i hỏi phải bật vị tr&iacute; m&aacute;y).</p>\r\n\r\n<p>-&nbsp;<strong>Tự động l&agrave;m mới</strong>: C&oacute; nhiều t&ugrave;y chọn mốc thời gian để m&aacute;y cập nhật th&ocirc;ng tin mới nhất (việc n&agrave;y đ&ograve;i hỏi kết nối mạng).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-<strong>&nbsp;L&agrave;m mới khi mở ứng dụng:</strong>&nbsp;Bật phần n&agrave;y l&ecirc;n sẽ gi&uacute;p m&aacute;y tự cập nhật th&ocirc;ng tin thời tiết mới nhất khi ứng dụng đang mở.</p>\r\n\r\n<p>-&nbsp;<strong>Th&ocirc;ng b&aacute;o:</strong>&nbsp;B&aacute;n sẽ nhận những th&ocirc;ng tin thay đổi thời tiết tr&ecirc;n th&ocirc;ng b&aacute;o của điện thoại.</p>\r\n\r\n<p>-&nbsp;<strong>Th&ocirc;ng tin thời tiết:&nbsp;</strong>Th&ocirc;ng tin về ứng dụng thời tiết (phi&ecirc;n bản mới nhất được cập nhật của ứng dụng).</p>\r\n\r\n<h3><strong>3. Một số lưu &yacute; khi sử dụng tiện &iacute;ch thời tiết</strong></h3>\r\n\r\n<p>- Phải c&oacute; mạng mới cập nhật thời tiết dc, v&iacute; dụ bạn c&agrave;i l&agrave;m mới sau 1h m&agrave; l&uacute;c đ&oacute; bạn ko mở mạng th&igrave; sẽ ko update dc th&ocirc;ng tin mới</p>\r\n\r\n<p>- Thời tiết chỉ mang t&iacute;nh tham khảo</p>\r\n\r\n<p>- Nếu m&aacute;y hiển thị sai vị tr&iacute; của bạn, h&atilde;y bật GPS l&agrave; load lại app thời tiết hoặc c&agrave;i đặt lại th&agrave;nh phố, khu vực trong app thời tiết (Use current location - ON)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mong l&agrave; những th&ocirc;ng tin n&agrave;y đ&atilde; gi&uacute;p bạn l&agrave;m được những thứ m&igrave;nh muốn!</p>', 1, NULL, '46Q_cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-3.jpg', 0, '2021-12-03 06:33:20', '2021-12-03 06:33:20'),
(4, 'Top 5 ứng dụng hẹn hò giúp bạn thoát ế dễ dàng nhất!', 'top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat', 'Trong thời đại công nghệ hiện nay, những ứng dụng hẹn hò đang ngày càng phổ biến trên điện thoại và laptop. Bài viết dưới đây sẽ giới thiệu cho bạn top 5 phần mềm hẹn hò qua mạng giúp bạn thoát ế và tìm kiếm được người yêu phù hợp với mình.', '<h3><strong>1. TInder - Ứng dụng hẹn h&ograve; phổ biến nhất tr&ecirc;n to&agrave;n thế giới</strong></h3>\r\n\r\n<p><strong><img alt=\"Tinder\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat.jpg\" title=\"Tinder\" /></strong></p>\r\n\r\n<p><a href=\"http://tinder.com/\" target=\"_blank\"><strong>Tinder</strong></a>&nbsp;l&agrave; ứng dụng hẹn h&ograve; hiện đang c&oacute; số lượng người d&ugrave;ng lớn nhất tr&ecirc;n to&agrave;n thế giới. Chỉ v&agrave;i thao t&aacute;c dễ đ&agrave;ng bạn đ&atilde; c&oacute; thể đăng k&yacute; th&ocirc;ng tin để sử dụng ứng dụng n&agrave;y.</p>\r\n\r\n<p><img alt=\"Giao diện tinder\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-2.jpg\" title=\"Giao diện tinder\" /></p>\r\n\r\n<p><strong>Giao diện</strong>&nbsp;của ứng dụng n&agrave;y<strong>&nbsp;th&acirc;n thiện v&agrave; dễ sử dụng</strong>. Người d&ugrave;ng chỉ cần vuốt th&iacute;ch hoặc kh&ocirc;ng th&iacute;ch dựa tr&ecirc;n h&igrave;nh ảnh, tiểu sử v&agrave; những sở th&iacute;ch của người kh&aacute;c. Nếu hai bạn ph&ugrave; hợp với nhau, hai bạn c&oacute; thể bắt đầu trao đổi bằng tin nhắn.</p>\r\n\r\n<h3><strong>2. Ứng dụng hẹn h&ograve; của Facebook - Facebook Dating</strong></h3>\r\n\r\n<p>​<img alt=\"Facebook Dating\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-4.jpg\" title=\"Facebook Dating\" /></p>\r\n\r\n<p><a href=\"http://www.facebook.com/dating\" target=\"_blank\"><strong>Facebook Dating</strong></a>&nbsp;l&agrave; một c&ocirc;ng cụ được Facebook cho ra mắt v&agrave;o th&aacute;ng 5 năm 2019 v&agrave; nhận được sự đ&oacute;n nhận t&iacute;ch cực từ người d&ugrave;ng. Đ&acirc;y l&agrave; một c&ocirc;ng cụ v&ocirc; c&ugrave;ng hữu &iacute;ch v&agrave; được t&iacute;ch hợp trong mạng x&atilde; hội của&nbsp;<strong><a href=\"http://www.facebook.com/\" target=\"_blank\">Facebook</a></strong>. T&iacute;nh năng nay dựa tr&ecirc;n những sở th&iacute;ch, hoạt động, nh&oacute;m v&agrave; sự kiện để đưa ra những gợi &yacute; c&oacute; thể ph&ugrave; hợp với bạn.</p>\r\n\r\n<p><img alt=\"Secret Crush\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-5.jpg\" title=\"Secret Crush\" /></p>\r\n\r\n<p><strong>Secret Crush</strong>&nbsp;cũng l&agrave; một t&iacute;nh năng kh&aacute; hay của Facebook Dating. Bạn sẽ th&ecirc;m những người bạn quan t&acirc; nhất v&agrave;o danh s&aacute;ch n&agrave;y. Nếu &quot;Crush&quot; cũng th&ecirc;m bạn v&agrave;o danh s&aacute;ch th&igrave; hai người sẽ nhận được th&ocirc;ng b&aacute;o v&agrave; v&agrave;o ph&ograve;ng chat ri&ecirc;ng tư với nhau. Tuy vậy t&iacute;nh năng n&agrave;y vẫn c&ograve;n hạn chế đ&oacute; l&agrave; chỉ &aacute;p dụng được với những người trong danh s&aacute;ch bạn b&egrave; v&agrave; c&oacute; sử dụng&nbsp;<strong>Facebook Dating</strong>.</p>\r\n\r\n<h3><strong>3. Ymeetme - Ứng dụng hẹn h&ograve; d&agrave;nh ri&ecirc;ng cho người Việt</strong></h3>\r\n\r\n<p><strong>​<img alt=\"YmeetMe\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-6.jpg\" title=\"YmeetMe\" /></strong></p>\r\n\r\n<p><a href=\"http://m.ymeet.me/\" target=\"_blank\"><strong>Ymeetme</strong></a>&nbsp;l&agrave; ứng dụng hẹn h&ograve; được thiết kế d&agrave;nh ri&ecirc;ng cho người Việt. Ứng dụng sẽ ph&acirc;n t&iacute;ch hồ sơ, hoạt động của c&aacute;c th&agrave;nh vi&ecirc;n từ đ&oacute; đề xuất những ứng vi&ecirc;n tiềm năng ph&ugrave; hợp với nhu cầu của người d&ugrave;ng..&nbsp;<strong>Ymeetme</strong>&nbsp;đ&atilde; chứng tỏ m&igrave;nh dẫn đầu trong c&aacute;c ứng dụng hẹn h&ograve; trực tuyến, tạo ra một m&ocirc;i trường hẹn h&ograve; nghi&ecirc;m t&uacute;c cho người d&ugrave;ng.</p>\r\n\r\n<h3><strong>4. Grindr &ndash; Ứng dụng hẹn h&ograve; cho LGBT</strong></h3>\r\n\r\n<p><strong><img alt=\"Grindr\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-7.jpg\" title=\"Grindr\" />​</strong></p>\r\n\r\n<p><strong><a href=\"http://www.grindr.com/\" target=\"_blank\">Grindr</a></strong>&nbsp;l&agrave; ứng dụng kh&ocirc;ng xa lạ với&nbsp;<a href=\"http://en.wikipedia.org/wiki/LGBT\" target=\"_blank\"><strong>LGBT</strong></a>. Kể từ khi ra mắt,&nbsp;<strong>Grindr</strong>&nbsp;thu h&uacute;t nhiều sự ch&uacute; &yacute; của người d&ugrave;ng v&agrave; số lượng th&agrave;nh vi&ecirc;n của ứng dụng n&agrave;y l&ecirc;n tới hơn 6 triệu th&agrave;nh vi&ecirc;n. Hiện nay cộng đồng&nbsp;<strong>LGBT</strong>&nbsp;vẫn bị sự kỳ thị ở nhiều khu vực tr&ecirc;n thế giới ch&iacute;nh v&igrave; vậy sự ra mắt của ứng dụng n&agrave;y gi&uacute;p cho cộng đồng&nbsp;<strong>LGBT</strong>&nbsp;c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm đối tượng ph&ugrave; hợp hơn m&agrave; kh&ocirc;ng nhận sự k&igrave; thi hay ph&acirc;n biệt đối xử của những người kh&aacute;c.</p>\r\n\r\n<h3><strong>5. Jack&rsquo;d &ndash; Ứng dụng hẹn h&ograve; cho người đồng t&iacute;nh v&agrave; lưỡng t&iacute;nh</strong></h3>\r\n\r\n<p><img alt=\"Jack\'D\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-8.jpg\" title=\"Jack\'D\" /></p>\r\n\r\n<p><a href=\"http://www.jackd.com/\" target=\"_blank\"><strong>Jack&rsquo;d</strong></a>&nbsp;l&agrave; nơi quy tụ của hơn 5 triệu th&agrave;nh vi&ecirc;n tr&ecirc;n to&agrave;n thế giới v&agrave; l&agrave; một trong 4 ứng dụng hẹn h&ograve; tốt nhất d&agrave;nh cho cộng đồng&nbsp;<strong>LGBT</strong>. Người d&ugrave;ng khi tham gia ứng dụng n&agrave;y sẽ biết được ai vừa đọc qua hồ sơ của m&igrave;nh để từ đ&oacute; chủ động li&ecirc;n lạc nếu c&oacute; cảm t&igrave;nh.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; top&nbsp;<strong><a href=\"http://www.thegioididong.com/hoi-dap/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-1237761\" target=\"_blank\">5 ứng dụng gi&uacute;p bạn &#39;tho&aacute;t ế&#39;</a></strong>. Hy vọng b&agrave;i viết sẽ mang lại th&ocirc;ng tin hữu &iacute;ch cho bạn.</p>', 1, NULL, '5Wl_top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat.jpg', 0, '2021-12-03 06:34:52', '2021-12-03 06:34:52'),
(5, 'Cách bật tính năng giữ chờ cuộc gọi trên Samsung Galaxy J7 Prime', 'cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-galaxy-j7-prime', 'Trong khi bạn đang nói chuyện điện thoại với một người, nhưng lại có một người khác gọi đến bạn, bạn sẽ không thể biết được nếu không bật tính năng chờ cuộc gọi. Vậy thì bài viết này mình sẽ hướng dẫn bạn cách bật tính năng giữ chờ cuộc gọi trên Samsung Galaxy J7 Prime nhé!', '<h3><strong>1. Lợi &iacute;ch của việc bật t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n điện thoại</strong></h3>\r\n\r\n<p>- Để bạn kh&ocirc;ng phải bỏ lỡ cuộc gọi đến.</p>\r\n\r\n<h3><strong>2. Hướng dẫn c&aacute;ch bật t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n Samsung Galaxy</strong><strong>&nbsp;J7 Prime</strong></h3>\r\n\r\n<p><strong>Hướng dẫn nhanh:&nbsp;</strong>Điện thoại &gt; Biểu tượng 3 chấm &gt; C&agrave;i đặt &gt; Nhiều c&agrave;i đặt hơn &gt; Bật Chờ cuộc gọi.</p>\r\n\r\n<h4><strong>- Bước 1: Chọn Điện thoại</strong></h4>\r\n\r\n<p>Đầu ti&ecirc;n tại m&agrave;n h&igrave;nh ch&iacute;nh bạn chọn&nbsp;<strong>Điện thoại.</strong></p>\r\n\r\n<p><img alt=\"Chọn Điện thoại\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-01.jpg\" title=\"Chọn Điện thoại\" /></p>\r\n\r\n<h4><strong>- Bước 2: Chọn biểu tượng 3 chấm</strong></h4>\r\n\r\n<p>Tiếp theo bạn chọn<strong>&nbsp;biểu tượng 3 chấm</strong>&nbsp;ở g&oacute;c tr&ecirc;n b&ecirc;n phải.</p>\r\n\r\n<p><img alt=\"Chọn biểu tượng 3 chấm\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-02.jpg\" title=\"Chọn biểu tượng 3 chấm\" /></p>\r\n\r\n<h4><strong>- Bước 3: Chọn C&agrave;i đặt</strong></h4>\r\n\r\n<p>L&uacute;c n&agrave;y bạn chọn v&agrave;o mục&nbsp;<strong>C&agrave;i đặt</strong>&nbsp;như h&igrave;nh b&ecirc;n dưới để tiếp tục.</p>\r\n\r\n<p><img alt=\"Chọn Cài đặt\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-03.jpg\" title=\"Chọn Cài đặt\" /></p>\r\n\r\n<h4><strong>- Bước 4: Chọn Nhiều c&agrave;i đặt hơn</strong></h4>\r\n\r\n<p>Sau đ&oacute; bạn k&eacute;o xuống v&agrave; chọn&nbsp;<strong>Nhiều hơn c&agrave;i đặt.</strong></p>\r\n\r\n<p><img alt=\"Chọn Nhiều cài đặt hơn\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-04.jpg\" title=\"Chọn Nhiều cài đặt hơn\" /></p>\r\n\r\n<h4><strong>- Bước 5: Bật Chờ cuộc gọi</strong></h4>\r\n\r\n<p>Cuối c&ugrave;ng bạn bật&nbsp;<strong>Chờ cuộc gọi&nbsp;</strong>l&ecirc;n.</p>\r\n\r\n<p><img alt=\"Bật Chờ cuộc gọi\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-05.jpg\" title=\"Bật Chờ cuộc gọi\" />​</p>\r\n\r\n<p>Như vậy với v&agrave;i thao t&aacute;c đơn giản bạn c&oacute; thể sử dụng t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n Samsung Galaxy​ J7 Prime rồi. Hy vọng b&agrave;i viết n&agrave;y sẽ gi&uacute;p &iacute;ch cho bạn.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng.</p>', 1, NULL, 'Nei_galaxy-note-10-plus_800x450.jpg', 0, '2021-12-03 06:35:46', '2021-12-03 06:35:46'),
(6, 'Công nghệ JTech Inverter trên máy lạnh SHARP là gì? Có lợi ích gì?12', 'cong-nghe-jtech-inverter-tren-may-lanh-sharp-la-gi-co-loi-ich-gi12', 'Sharp là thương hiệu nổi tiếng, các sản phảm máy lạnh của Sharp được đánh giá cao về chất lượng tích hợp với những công nghệ thông minh. Đặc biệt, công nghệ J-Tech đem lại cho người dùng những trãi nghiệm hữu ích. Hãy cùng theo dõi bài viết để tìm hiểu rõ hơn về công nghệ J-Tech nhé.', '<h3><strong>1. C&ocirc;ng nghệ J-Tech Inverter tr&ecirc;n m&aacute;y lạnh Sharp</strong></h3>\r\n\r\n<h4><strong>- C&ocirc;ng nghệ J-Tech l&agrave; g&igrave;?</strong></h4>\r\n\r\n<p>C&ocirc;ng nghệ J-Tech l&agrave; c&ocirc;ng nghệ được t&iacute;ch hợp tr&ecirc;n những d&ograve;ng m&aacute;y lạnh của Sharp, gi&uacute;p&nbsp;<strong>tự động điều chỉnh nhiệt độ&nbsp;</strong>ph&ograve;ng ph&ugrave; hợp,<strong>&nbsp;tiết kiệm điện năng tối đa</strong>.</p>\r\n\r\n<p><img alt=\"Công nghệ J-Tech là gì?\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-1.jpg\" title=\"Công nghệ J-Tech là gì?\" /></p>\r\n\r\n<p><em>C&ocirc;ng nghệ J-Tech - tự động điều chỉnh nhiệt độ ph&ugrave; hợp, tiết kiệm điển tối đa</em></p>\r\n\r\n<h4><strong>- Cơ chế hoạt động</strong></h4>\r\n\r\n<p>Kh&ocirc;ng giống như những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường để điều chỉnh nhiệt độ m&aacute;y sẽ chuyển chế độ bật, tắt. C&ocirc;ng nghệ J-Tech gi&uacute;p m&aacute;y lạnh c&oacute; thể&nbsp;<strong>tự động điều chỉnh nhiệt độ</strong>&nbsp;<strong>ph&ograve;ng bằng c&aacute;ch chuyển bộ phận n&eacute;n giữa chế độ hoạt động cao v&agrave; thấp nhờ v&agrave;o mạch điện đổi chiều.</strong></p>\r\n\r\n<p>Việc&nbsp;<strong>hạn chế được hoạt động bật/tắt</strong>&nbsp;gi&uacute;p m&aacute;y lạnh<strong>&nbsp;tiết kiệm điện năng&nbsp;</strong>vượt trội hơn.</p>\r\n\r\n<p><img alt=\"Cơ chế hoạt động\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-02.jpg\" title=\"Cơ chế hoạt động\" /></p>\r\n\r\n<p><em>Tự điều chỉnh nhiệt độ nhờ mạch điện đổi chiều</em></p>\r\n\r\n<h3><strong>2. C&aacute;c lợi &iacute;ch m&agrave; c&ocirc;ng nghện J-Tech mang lại</strong></h3>\r\n\r\n<h4><strong>- Tiết kiệm điện năng</strong></h4>\r\n\r\n<p><strong>C&ocirc;ng nghệ J-Tech Inverter t&iacute;ch hợp với chế độ Eco</strong>&nbsp;th&ocirc;ng minh gi&uacute;p m&aacute;y&nbsp;<strong>vận h&agrave;nh &ecirc;m, tiết kiệm điện năng ti&ecirc;u thụ đến tận 60%</strong>&nbsp;so với m&aacute;y lạnh th&ocirc;ng thường.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; ti&ecirc;u ch&iacute; được nhiều người ti&ecirc;u d&ugrave;ng đ&aacute;nh gi&aacute; cao, bạn sẽ kh&ocirc;ng phải lo về chi ph&iacute; chi trả điện h&agrave;ng th&aacute;ng khi sử dụng m&aacute;y lạnh.</p>\r\n\r\n<p><img alt=\"Tiết kiệm điện năng\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-03.jpg\" title=\"Tiết kiệm điện năng\" /></p>\r\n\r\n<p><em>C&ocirc;ng nghệ J-Tech Inverter + Chế độ Eco gi&uacute;p tiết kiệm điện năng tới 60%</em></p>\r\n\r\n<h4><strong>- L&agrave;m lạnh cực mạnh</strong></h4>\r\n\r\n<p>Ngo&agrave;i ra, c&ocirc;ng nghệ J-Tech inverter gi&uacute;p thiết bị c&oacute; thể<strong>&nbsp;thay đổi c&ocirc;ng suất l&agrave;m lạnh với 15 cấp độ&nbsp;</strong>kh&aacute;c nhau trong khi những d&ograve;ng c&ocirc;ng nghệ inverter th&ocirc;ng thường chỉ c&oacute; 7 cấp độ.</p>\r\n\r\n<p><img alt=\"Làm lạnh cực mạnh\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-4.jpg\" title=\"Làm lạnh cực mạnh\" /></p>\r\n\r\n<p><em>Chế độ l&agrave;m lạnh với c&ocirc;ng suất 15 cấp độ kh&aacute;c nhau</em></p>\r\n\r\n<h4><strong>- Tiện nghi, thoải m&aacute;i</strong></h4>\r\n\r\n<p>Những d&ograve;ng m&aacute;y lạnh Sharp t&iacute;ch hợp c&ocirc;ng nghệ -Tech Inverter đem lại cho bạn sự tiện nghi v&agrave; thoải m&aacute;i khi c&oacute; thể sử dụng nhiều chế độ kh&aacute;c nhau t&ugrave;y theo nhu cầu sử dụng.</p>\r\n\r\n<p><strong>Chế độ Comfort</strong>&nbsp;gi&uacute;p m&aacute;y lạnh sẽ&nbsp;<strong>hoạt động ở c&ocirc;ng suất tối đa&nbsp;</strong>gi&uacute;p căn ph&ograve;ng được&nbsp;<strong>l&agrave;m lạnh nhanh ch&oacute;ng v&agrave; duy tr&igrave; nhiệt độ ở mức ổn định</strong>. Từ đ&oacute; c&oacute; thể l&agrave;m&nbsp;<strong>giảm thất tho&aacute;t nhiệt độ 20% v&agrave; giảm thời gian bật/tắt 30%</strong>&nbsp;so với những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường.</p>\r\n\r\n<p><img alt=\"duy trì nhiệt độ ổn định\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-05.jpg\" title=\"duy trì nhiệt độ ổn định\" /></p>\r\n\r\n<p><em>Giảm thất tho&aacute;t nhiệt 20%, giảm 30% thời gian bật/tắt</em></p>\r\n\r\n<p><strong>Chế độ Best Sleep:</strong>&nbsp;gi&uacute;p<strong>&nbsp;tự điều chỉnh nhiệt độ ph&ograve;ng khi bạn ngủ&nbsp;</strong>một c&aacute;ch ph&ugrave; hợp, gi&uacute;p bạn ngủ ngon v&agrave; s&acirc;u hơn trong một kh&ocirc;ng kh&iacute; dịu m&aacute;t.</p>\r\n\r\n<p><strong>Chế độ Baby Mode</strong>&nbsp;gi&uacute;p<strong>&nbsp;điều chỉnh luồng gi&oacute; kh&ocirc;ng thổi trực tiếp v&agrave;o em b&eacute;, nhiệt độ ph&ugrave; hợp với cơ thể của b&eacute;</strong>. Gi&uacute;p b&eacute; ngủ ngon, cảm gi&aacute;c dễ chịu v&agrave; m&aacute;t mẻ.</p>\r\n\r\n<p><img alt=\"Nhiều chế độ tùy chọn\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-7.jpg\" title=\"Nhiều chế độ tùy chọn\" /></p>\r\n\r\n<p><em>Chế độ Baby Mode gi&uacute;p điều chỉnh nhiệt độ ph&ugrave; hợp cho cơ thể b&eacute;</em></p>\r\n\r\n<h4><strong>- Vận h&agrave;nh bền bỉ</strong></h4>\r\n\r\n<p>M&aacute;y lạnh J-Tech Inverter vận h&agrave;nh trong&nbsp;<strong>dải điện &aacute;p rộng từ 130V đến 264V</strong>,<strong>&nbsp;</strong>đem đến cho bạn&nbsp;<strong>độ an to&agrave;n cao</strong>, kh&ocirc;ng phải lo lắng về việc<strong>&nbsp;tăng giảm điện &aacute;p đột ngột</strong>. Nhờ vậy&nbsp;<strong>m&aacute;y vận h&agrave;nh &ecirc;m v&agrave; bền bỉ, duy tr&igrave; tuổi thọ cao.</strong></p>\r\n\r\n<p><strong>Chế độ vận h&agrave;nh &ecirc;m &aacute;i:</strong>&nbsp;<strong>Độ ồn chỉ 21 dB</strong>, người d&ugrave;ng sẽ kh&ocirc;ng kh&oacute; chịu bởi tiếng ồn của động cơ khi vận h&agrave;nh so với những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Vận hành bền bỉ\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-8.jpg\" title=\"Vận hành bền bỉ\" /></p>\r\n\r\n<p><em>Vận h&agrave;nh &ecirc;m, bền bỉ, tuổi thọ m&aacute;y cao</em></p>\r\n\r\n<p>Sau b&agrave;i viết n&agrave;y, bạn c&oacute; thể hiểu hơn về C&ocirc;ng nghệ J-Tech Inverter tr&ecirc;n m&aacute;y lạnh SHARP va những lợi &iacute;ch m&agrave; J-Tech đem lại. Hẹn gặp bạn ở những b&agrave;i viết sau.</p>', 1, NULL, 'QvD_cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-1.jpg', 0, '2021-12-03 06:37:29', '2021-12-11 13:07:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `at_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `at_name`, `at_name_slug`, `at_type`, `at_value`, `created_at`, `updated_at`) VALUES
(14, 'Số nhân', 'so-nhan', 'number', NULL, '2020-06-11 18:04:02', '2020-06-11 18:04:02'),
(15, 'Số luồng', 'so-luong', 'number', NULL, '2020-06-11 18:04:11', '2020-06-11 18:04:11'),
(16, 'Tốc độ xử lý', 'toc-do-xu-ly', 'text', NULL, '2020-06-11 18:04:24', '2020-06-11 18:04:24'),
(17, 'Nhà sản xuất', 'nha-san-xuat', 'text', NULL, '2020-06-11 18:04:34', '2020-06-11 18:04:46'),
(18, 'Bộ nhớ RAM', 'bo-nho-ram', 'select', '2 GB;4 GB;6 GB;8 GB;16 GB;32 GB', '2020-06-11 19:02:19', '2020-06-11 19:28:41'),
(19, 'Độ phân giải', 'do-phan-giai', 'text', NULL, '2020-06-11 19:03:45', '2020-06-11 19:03:45'),
(20, 'Kích thước', 'kich-thuoc', 'text', NULL, '2020-06-11 19:04:02', '2020-06-11 19:04:02'),
(21, 'Socket', 'socket', 'text', NULL, '2020-06-20 00:57:40', '2020-06-20 00:57:40'),
(22, 'Khe cắm RAM', 'khe-cam-ram', 'text', NULL, '2020-06-20 00:58:09', '2020-06-20 00:58:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `atv_attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `atv_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `atv_attribute_id`, `atv_value`, `created_at`, `updated_at`) VALUES
(54, 14, '4', '2020-06-11 18:16:24', '2020-06-11 18:16:24'),
(55, 15, '4', '2020-06-11 18:16:24', '2020-06-11 18:16:24'),
(56, 16, '3.6 GHz', '2020-06-11 18:16:24', '2020-06-11 18:16:24'),
(57, 17, 'Advanced Micro Devices (AMD)', '2020-06-11 18:16:24', '2020-06-11 18:16:24'),
(58, 17, 'Intel', '2020-06-11 18:45:21', '2020-06-11 18:45:21'),
(59, 14, '8', '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(60, 15, '8', '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(61, 16, '3.8 GHz', '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(62, 14, '24', '2020-06-11 18:55:36', '2020-06-11 18:55:36'),
(63, 15, '48', '2020-06-11 18:55:36', '2020-06-11 18:55:36'),
(64, 16, '4.5 GHz', '2020-06-11 18:55:36', '2020-06-11 18:55:36'),
(65, 14, '10', '2020-06-11 18:57:53', '2020-06-11 18:57:53'),
(66, 15, '20', '2020-06-11 18:57:53', '2020-06-11 18:57:53'),
(67, 16, '5.2 GHz', '2020-06-11 18:57:53', '2020-06-11 18:57:53'),
(68, 17, 'MSI', '2020-06-11 19:06:50', '2020-06-11 19:06:50'),
(69, 18, '8 GB', '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(70, 19, 'Digital Max Resolution:7680x4320', '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(71, 20, '231 x 128x 42 mm', '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(72, 17, 'ASUS', '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(73, 19, '7680x4320', '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(74, 20, 'Chưa xác định', '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(75, 20, '269 x 125 x 38 mm', '2020-06-11 19:14:01', '2020-06-11 19:14:01'),
(76, 17, 'EVGA', '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(77, 20, 'Height: 4.38 in - 111.15 mm  Length: 10.62 in - 269.83 mm', '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(78, 18, '2 GB', '2020-06-11 19:30:32', '2020-06-11 19:30:32'),
(79, 20, '297 x 58 x 140 mm', '2020-06-11 19:30:32', '2020-06-11 19:30:32'),
(80, 20, 'm-ATX', '2020-06-20 01:01:11', '2020-06-20 01:01:11'),
(81, 21, '1151 hỗ trợ CPU intel thế hệ 9 và thế hệ 8', '2020-06-20 01:01:11', '2020-06-20 01:01:11'),
(82, 22, '2 khe (Tối đa 32GB)', '2020-06-20 01:01:11', '2020-06-20 01:01:11'),
(83, 21, 'AMD B450', '2020-06-20 01:07:07', '2020-06-20 01:07:07'),
(85, 21, 'AM4 hỗ trợ AMD Ryzen và AMD thế hệ 7', '2020-06-20 01:09:26', '2020-06-20 01:09:26'),
(86, 21, 'LGA1200', '2020-06-20 01:11:04', '2020-06-20 01:11:04'),
(87, 21, 'AM4', '2020-06-20 01:12:54', '2020-06-20 01:12:54'),
(88, 22, '4 khe (Tối đa 64GB)', '2020-06-23 00:49:32', '2020-06-23 00:49:32'),
(89, 17, 'GIGABYTE', '2020-06-24 11:07:20', '2020-06-24 11:07:20'),
(90, 18, '6 GB', '2020-06-26 11:58:07', '2020-06-26 11:58:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_name_slug`, `c_status`, `created_at`, `updated_at`) VALUES
(25, 'CPU - Bộ vi xử lý', 'cpu-bo-vi-xu-ly', 1, '2020-06-11 14:27:20', '2020-06-24 14:18:32'),
(26, 'VGA - Card màn hình', 'vga-card-man-hinh', 1, '2020-06-11 14:27:59', '2020-06-11 15:07:34'),
(27, 'Mainbroad - Bo mạch chủ', 'mainbroad-bo-mach-chu', 1, '2020-06-11 14:29:31', '2020-06-20 01:13:32'),
(28, 'RAM - Bộ nhớ', 'ram-bo-nho', 1, '2020-06-11 14:29:52', '2020-06-11 15:08:53'),
(29, 'Ổ cứng', 'o-cung', 1, '2020-06-11 14:30:49', '2020-06-11 15:09:08'),
(30, 'PSU - Nguồn máy tính', 'psu-nguon-may-tinh', 1, '2020-06-11 14:30:56', '2020-06-11 15:10:14'),
(31, 'Tai nghe', 'tai-nghe', 1, '2020-06-11 14:31:01', '2020-06-11 15:10:47'),
(32, 'Chuột - Bàn phím', 'chuot-ban-phim', 1, '2020-06-11 14:32:10', '2020-06-11 15:10:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_attribute`
--

CREATE TABLE `category_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_a_category_id` int(10) UNSIGNED DEFAULT NULL,
  `c_a_attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_attribute`
--

INSERT INTO `category_attribute` (`id`, `c_a_category_id`, `c_a_attribute_id`, `created_at`, `updated_at`) VALUES
(66, 26, 17, '2020-06-18 09:58:08', '2020-06-18 09:58:08'),
(67, 26, 18, '2020-06-18 09:58:08', '2020-06-18 09:58:08'),
(68, 26, 19, '2020-06-18 09:58:08', '2020-06-18 09:58:08'),
(72, 27, 21, '2020-06-20 01:02:52', '2020-06-20 01:02:52'),
(73, 27, 22, '2020-06-20 01:02:52', '2020-06-20 01:02:52'),
(74, 25, 14, '2020-06-24 14:17:50', '2020-06-24 14:17:50'),
(75, 25, 15, '2020-06-24 14:17:50', '2020-06-24 14:17:50'),
(76, 25, 16, '2020-06-24 14:17:50', '2020-06-24 14:17:50'),
(77, 25, 17, '2020-06-24 14:17:50', '2020-06-24 14:17:50'),
(80, NULL, 19, '2020-06-26 05:27:51', '2020-06-26 05:27:51'),
(81, NULL, 20, '2020-06-26 05:27:51', '2020-06-26 05:27:51'),
(82, NULL, NULL, '2020-06-26 05:27:51', '2020-06-26 05:27:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite_product`
--

CREATE TABLE `favorite_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `fp_product_id` int(10) UNSIGNED DEFAULT NULL,
  `fp_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `favorite_product`
--

INSERT INTO `favorite_product` (`id`, `fp_product_id`, `fp_user_id`, `created_at`, `updated_at`) VALUES
(34, 19, 1, '2020-06-11 19:53:23', '2020-06-11 19:53:23'),
(35, 26, 1, '2020-06-11 19:53:28', '2020-06-11 19:53:28'),
(36, 28, 1, '2020-06-13 08:20:14', '2020-06-13 08:20:14'),
(37, 25, 1, '2020-06-13 08:20:25', '2020-06-13 08:20:25'),
(38, 24, 1, '2020-06-18 10:18:59', '2020-06-18 10:18:59'),
(40, 31, 6, '2020-06-23 02:10:33', '2020-06-23 02:10:33'),
(41, 33, 1, '2020-06-24 12:42:59', '2020-06-24 12:42:59'),
(42, 34, 1, '2020-06-26 05:18:53', '2020-06-26 05:18:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_23_163504_create_categories_table', 1),
(5, '2020_03_24_152140_create_attributes_table', 2),
(7, '2020_03_25_145934_create_category_attribute_table', 3),
(8, '2020_03_26_150518_create_products_table', 4),
(9, '2020_03_27_162530_create_attribute_value', 5),
(10, '2020_03_29_161236_create_product_attribute_table', 6),
(12, '2020_04_02_130001_create_articles_table', 7),
(13, '2020_04_09_143103_create_transactions_table', 8),
(14, '2020_04_09_143511_create_orders_table', 9),
(15, '2020_04_23_141548_create_ratings_table', 10),
(16, '2020_04_26_140729_create_favorite_product', 11),
(17, '2020_05_04_132355_alter_column_table_user', 12),
(18, '2020_05_23_140221_create_nofitication_table', 13),
(19, '2020_06_10_135520_create_slides_table', 14),
(20, '2020_06_23_202047_create_warehouse_table', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nofitication`
--

CREATE TABLE `nofitication` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nof_sender` bigint(20) UNSIGNED DEFAULT NULL,
  `nof_receiver` bigint(20) UNSIGNED DEFAULT NULL,
  `nof_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nofitication`
--

INSERT INTO `nofitication` (`id`, `nof_sender`, `nof_receiver`, `nof_content`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 'Giao dịch mã số 37 với ghi chú \"aaaaa\" <b>đã bị hủy</b> ! Có thể do thiếu số lượng sản phẩm bạn yêu cầu, liên hệ lại chủ cửa hàng để biết thêm chi tiết !!!', '2020-06-23 03:36:53', NULL),
(10, 1, 1, 'Giao dịch <b>mã số 38</b> đã giao dịch thành công !! Bạn có thể đánh giá các sản phẩm trong giao dịch này bằng cách tìm sản phẩm hoặc kiểm tra tại Lịch sử mua hàng !!!', '2020-06-24 01:44:21', NULL),
(11, 1, 1, 'Giao dịch <b>mã số 39</b> đã <b>giao dịch thành công</b> !! Bạn có thể đánh giá các sản phẩm trong giao dịch này bằng cách tìm sản phẩm hoặc kiểm tra tại Lịch sử mua hàng !!!', '2020-06-24 11:13:53', NULL),
(12, 1, 1, 'Giao dịch <b>mã số 43</b> đã <b>GIAO DỊCH THÀNH CÔNG</b> !! Bạn có thể đánh giá các sản phẩm trong giao dịch này bằng cách tìm sản phẩm hoặc kiểm tra tại Lịch sử mua hàng !!!', '2020-06-26 00:48:59', NULL),
(13, 1, 1, 'Giao dịch <b>mã số 46</b> với ghi chú \"1211\" <b>ĐÃ BỊ HỦY</b> ! Có thể do thiếu số lượng sản phẩm bạn yêu cầu, liên hệ lại chủ cửa hàng để biết thêm chi tiết !!!', '2020-06-26 06:08:34', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(10) UNSIGNED DEFAULT NULL,
  `or_product_id` int(10) UNSIGNED DEFAULT NULL,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` bigint(20) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(35, NULL, 28, 1, 8899000, 10, '2020-06-11 19:33:12', '2020-06-11 19:33:12'),
(36, 27, 27, 2, 19299000, 0, '2020-06-11 19:42:31', '2020-06-11 19:42:31'),
(38, 29, 28, 1, 8899000, 10, '2020-06-12 02:07:35', '2020-06-12 02:07:35'),
(39, 29, 19, 1, 2580000, 0, '2020-06-12 02:07:35', '2020-06-12 02:07:35'),
(40, 29, 20, 1, 2949000, 0, '2020-06-12 02:07:35', '2020-06-12 02:07:35'),
(41, 30, 27, 1, 19299000, 0, '2020-06-12 02:07:57', '2020-06-12 02:07:57'),
(42, 31, 20, 1, 2949000, 0, '2020-06-12 02:08:25', '2020-06-12 02:08:25'),
(43, 32, 23, 1, 12699000, 0, '2020-06-12 02:08:48', '2020-06-12 02:08:48'),
(44, 33, 26, 1, 4999000, 0, '2020-06-12 10:01:37', '2020-06-12 10:01:37'),
(45, 33, 27, 2, 19299000, 0, '2020-06-12 10:01:37', '2020-06-12 10:01:37'),
(46, 34, 28, 1, 8899000, 10, '2020-06-23 00:46:09', '2020-06-23 00:46:09'),
(47, 35, 29, 1, 1699000, 10, '2020-06-23 02:08:03', '2020-06-23 02:08:03'),
(50, 38, 22, 1, 36599000, 0, '2020-06-24 01:44:04', '2020-06-24 01:44:04'),
(51, 39, 31, 1, 1499000, 0, '2020-06-24 11:13:48', '2020-06-24 11:13:48'),
(52, 40, 33, 1, 1699000, 0, '2020-06-24 14:11:50', '2020-06-24 14:11:50'),
(53, 41, 22, 1, 36599000, 0, '2020-06-25 04:48:53', '2020-06-25 04:48:53'),
(54, 42, 22, 1, 36599000, 20, '2020-06-25 04:50:07', '2020-06-25 04:50:07'),
(55, 43, 33, 1, 1699000, 0, '2020-06-26 00:44:19', '2020-06-26 00:44:19'),
(56, 44, 19, 1, 2580000, 0, '2020-06-26 03:42:39', '2020-06-26 03:42:39'),
(57, 45, 24, 1, 10999000, 0, '2020-06-26 05:19:55', '2020-06-26 05:19:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(10) UNSIGNED DEFAULT NULL,
  `pro_price` bigint(20) NOT NULL DEFAULT 0,
  `pro_author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pro_sale` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `pro_status` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_pay` int(11) NOT NULL DEFAULT 0,
  `pro_number` int(11) NOT NULL DEFAULT 0,
  `pro_number_of_reviewers` int(11) NOT NULL DEFAULT 0,
  `pro_total_star` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_name_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_status`, `pro_hot`, `pro_description`, `pro_content`, `pro_image`, `pro_pay`, `pro_number`, `pro_number_of_reviewers`, `pro_total_star`, `created_at`, `updated_at`) VALUES
(19, 'AMD Ryzen 3 3200G', 'amd-ryzen-3-3200g', 25, 2580000, NULL, 0, 1, 0, 'AMD RYZEN tích hợp card đồ họa : dư sức cân các tựa game eSport', '<table border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Năm 2017 l&agrave; năm rất th&agrave;nh c&ocirc;ng cho AMD&nbsp;với d&ograve;ng sản phẩm Ryzen,&nbsp;AMD đ&atilde; gi&agrave;nh được sự đ&oacute;n nhận nồng nhiệt từ thị trường,&nbsp;h&igrave;nh ảnh c&aacute;c sản&nbsp;</p>\r\n\r\n			<p>&nbsp;phẩm Ryzen ngập c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng v&agrave; số lượng người d&ugrave;ng thực tế tại việt nam rất đ&ocirc;ng đảo.&nbsp;Nối tiếp th&agrave;nh c&ocirc;ng của Ryzen,&nbsp;</p>\r\n\r\n			<p>AMD đ&atilde; giới thiệu 2 sản phẩm CPU mới với t&ecirc;n gọi Ryzen APU l&agrave; Ryzen 5 2400G v&agrave; Ryzen 3 2200G với nh&acirc;n đồ họa Vega t&iacute;ch hợp, hướng tới đối</p>\r\n\r\n			<p>tượng kh&aacute;ch h&agrave;ng&nbsp;game thủ chủ yếu chơi game online v&agrave; một v&agrave;i game eSport&nbsp;c&oacute; thể tiết kiệm được kh&aacute;&nbsp;nhiều chi ph&iacute; cho chiếc PC của bản th&acirc;n.</p>\r\n\r\n			<p>C&ugrave;ng điểm qua 1 số điểm đ&aacute;ng ch&uacute; &yacute; của d&ograve;ng CPU AMD RYZEN mới n&agrave;y:&nbsp;</p>\r\n\r\n			<p><strong>1. D&ograve;ng vi xử l&yacute; đầu ti&ecirc;n dưới thương hiệu RYZEN c&oacute; đồ họa t&iacute;ch hợp</strong></p>\r\n\r\n			<p>Điểm nhấn đầu ti&ecirc;n của sản phẩm mới ra mắt l&agrave; nh&acirc;n đồ họa t&iacute;ch hợp AMD Radeon VEGA,&nbsp;nh&acirc;n đồ họa trong Ryzen 5 2400G&nbsp;v&agrave; Ryzen 3 2200G</p>\r\n\r\n			<p>đều cho hiệu năng xử l&yacute; rất cao.&nbsp;</p>\r\n\r\n			<p>D&ugrave; l&agrave;&nbsp; Vega t&iacute;ch hợp nhưng d&ograve;ng vi xử l&yacute; mới đều hỗ trợ đầy đủ c&aacute;c t&iacute;nh năng như HDR, FreeSync 2, khả năng tr&igrave;nh xuất từ&nbsp;đến 4K, đa m&agrave;n h&igrave;nh.</p>\r\n\r\n			<p>Đ&acirc;y sẽ l&agrave; 1 lựa chọn v&ocirc; c&ugrave;ng kinh tế cho kh&aacute;ch h&agrave;ng để vừa c&oacute; được sức mạnh t&iacute;nh to&aacute;n vừa c&oacute; trải nghiệm đồ họa tốt.</p>\r\n\r\n			<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/41162_76955-ryzen3-vega-1920x400.jpg\" width=\"800\" /></p>\r\n\r\n			<p><strong>2. Vẫn tiếp tục sử dụng Socket AM4 v&agrave; tương th&iacute;ch tốt với c&aacute;c thế hệ Chipset đ&atilde; ra mắt</strong></p>\r\n\r\n			<p>&nbsp;AMD lưu &yacute; với người d&ugrave;ng rằng Ryzen APU 2000 series sẽ tương th&iacute;ch với thế hệ chipset 300 series hiện tạị&nbsp;với c&ugrave;ng socket AM4 nhưng sẽ cần cập</p>\r\n\r\n			<p>nhập BIOS để nhận biết ch&iacute;nh x&aacute;c. Điều tương tự cũng xảy ra khi phi&ecirc;n bản AMD RYZEN mới ra mắt cũng c&oacute; 1 số trường hợp tượng tự. V&agrave; tất nhi&ecirc;n&nbsp;</p>\r\n\r\n			<p>c&aacute;c sản xuất bo mạch chủ cũng sẽ sớm n&acirc;ng cấp to&agrave;n bộ BIOS để đ&oacute;n nhận d&ograve;ng sản phẩm mới.&nbsp;</p>\r\n\r\n			<p>D&ograve;ng CPU&nbsp;mới được AMD định hướng đến ph&acirc;n kh&uacute;c gi&aacute; rẻ,&nbsp;người d&ugrave;ng c&oacute; thể khai th&aacute;c sức mạnh với&nbsp;c&aacute;c bo mạch chủ A320/B350 để đạt hiệu&nbsp;</p>\r\n\r\n			<p>năng tốt nhất.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_untitled-2.png\" width=\"800\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;<strong>3. Trang bị đầy đủ c&ocirc;ng nghệ đến từ h&atilde;ng AMD</strong></p>\r\n\r\n			<table border=\"0\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_37343_74420-storemi-generic-disk-patrick-lindenberg-1260x709.jpg\" width=\"380\" /></p>\r\n\r\n						<p><strong>C&ocirc;ng nghệ Enmotus Driver</strong></p>\r\n\r\n						<p>Tăng tốc PC với c&ocirc;ng nghệ lưu trữ nhanh, th&ocirc;ng minh,dễ d&agrave;ng.</p>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n						<td>\r\n						<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_37343_10788-sensemi-icons-1260x709-3d.jpg\" width=\"380\" /></p>\r\n\r\n						<p><strong>C&ocirc;ng nghệ AMD SenseMi</strong></p>\r\n\r\n						<p>G&oacute;i c&ocirc;ng nghệ được t&iacute;ch hợp v&agrave;o Ryzen&nbsp;với h&agrave;ng loạt&nbsp;c&ocirc;ng nghệ được</p>\r\n\r\n						<p>t&iacute;ch hợp để tối đa hiệu năng</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_37343_10788-ryzen-master-image-1260x709.jpg\" width=\"380\" /></p>\r\n\r\n						<p><strong>C&ocirc;ng cụ AMD Ryzen Master</strong></p>\r\n\r\n						<p>Ứng dụng đơn giản, tối ưu cho việc &eacute;p xung bộ vi xử l&yacute;&nbsp;AMD RYZEN&nbsp;</p>\r\n\r\n						<p>Đồng thời với việc mở hệ số nh&acirc;n cho ph&eacute;p người d&ugrave;ng&nbsp;&nbsp;ham t&igrave;m hiểu</p>\r\n\r\n						<p>c&oacute; thể &eacute;p xung thủ c&ocirc;ng để tăng hiệu năng</p>\r\n						</td>\r\n						<td>\r\n						<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_62878-radeon-adrenalin-red-background-1260x709.png\" width=\"380\" /></p>\r\n\r\n						<p><strong>Phần mềm RADEON ADRENALIN</strong></p>\r\n\r\n						<p>Thiết kế trang nh&atilde;. Được l&agrave;m tỉ mỉ. V&ocirc; c&ugrave;ng trực quan.</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;<strong>&nbsp;Đ&aacute;nh gi&aacute; hiệu năng</strong></p>\r\n\r\n			<p>&nbsp;- Với c&aacute;c tựa game phổ biến</p>\r\n\r\n			<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_009_o.jpg\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_untitled-2.jpg\" width=\"800\" /></p>\r\n\r\n			<p>- Với c&aacute;c b&agrave;i benmark quen thuộc</p>\r\n\r\n			<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_ryzen-2200g-performance3.jpg\" width=\"800\" /></p>\r\n\r\n			<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37342_ryzen-2200g-performance.jpg\" width=\"800\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;Tổng kết : qua c&aacute;c b&agrave;i đ&aacute;nh gi&aacute;&nbsp;Ryzen 3 2200G sẽ l&agrave; d&ograve;ng APU c&oacute; thể mang lại trải nghiệm game đồ họa cao cấp ở độ ph&acirc;n giải FHD với mức chi&nbsp;</p>\r\n\r\n			<p>ph&iacute; ph&ugrave; hợp với đối tượng game thủ tập trung v&agrave;o c&aacute;c d&ograve;ng game eSport v&agrave; c&oacute; thể vươn tới c&aacute;c tựa game offline ở cấu h&igrave;nh vừa phải.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '4Rm_2.jpg', 1, 101, 0, 0, '2020-06-11 18:16:24', '2020-06-24 07:09:38'),
(20, 'CPU Intel Core i3-8100', 'cpu-intel-core-i3-8100', 25, 2949000, NULL, 0, 1, 1, 'aaaaaaaaaaaaaaa', '<h2>Đặc điểm nổi bật của CPU Intel Core i3-8100 (3.6GHz, 4 nh&acirc;n, 4 luồng, 6MB Cache, 65W) - Socket Intel LGA 1151-v2</h2>\r\n\r\n<p>&nbsp;<strong>Intel Core i3-8100: Hiệu năng tăng hơn so với đời cũ &ndash; Gi&aacute; kh&ocirc;ng đổi.</strong></p>\r\n\r\n<p><strong>Giới Thiệu</strong></p>\r\n\r\n<p>C&aacute;c bộ xử l&yacute; Intel Coffee Lake đang tạo cơn s&oacute;ng lớn trong cộng đồng người d&ugrave;ng m&aacute;y t&iacute;nh. Tất cả c&aacute;c ph&acirc;n kh&uacute;c Core i3, i5, i7 đều được tăng số nh&acirc;n xử l&yacute; l&ecirc;n gấp rưỡi, hứa hẹn hiệu năng cũng tăng &iacute;t nhất 50% d&ugrave; gi&aacute; kh&ocirc;ng đổi. Trước nay người d&ugrave;ng vẫn lu&ocirc;n hiểu ngầm với nhau rằng CPU 4 nh&acirc;n Intel l&agrave; ho&agrave;n hảo nhất cho người d&ugrave;ng th&ocirc;ng thường: chạy mượt tất cả t&aacute;c vụ, bật được</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_intel-8th-gen-core-i3-980px-v1.jpg\" /></p>\r\n\r\n<p>nhiều ứng dụng c&ugrave;ng l&uacute;c, chơi game max setting thoải m&aacute;i với c&aacute;c card đồ họa cao cấp nhất m&agrave; kh&ocirc;ng sợ nghẽn cổ chai&hellip; V&igrave; thế nhận được nhiều quan t&acirc;m nhất l&uacute;c n&agrave;y l&agrave; ch&uacute; ngựa &ocirc; Core i3-8100.</p>\r\n\r\n<p><strong>Hiệu năng.</strong></p>\r\n\r\n<p>Đi thẳng v&agrave;o vấn đề cho mọi người đỡ h&aacute;o hức. Như ta biết th&igrave; AMD R3 1200 c&oacute; 4 nh&acirc;n 4 luồng xung nhịp 3.1Ghz v&agrave; 8MB cache. C&ograve;n&nbsp;R3 1300X&nbsp;cũng vậy nhưng xung nhịp được n&acirc;ng l&ecirc;n 3.5Ghz. Gi&aacute; b&aacute;n khởi điểm 2 CPU n&agrave;y l&agrave; 110$ v&agrave; 130$. Nhưng b&agrave;i n&agrave;y sẽ tập trung v&agrave;o&nbsp;R3 1300Xc&oacute; gi&aacute;<em>&nbsp;130$ xung nhịp cũng gần bằng I3-8100 cho c&ocirc;ng bằng. Gi&aacute; b&aacute;n khởi điểm của&nbsp;Core i3-8100 l&agrave; 120$. Như vậy nếu chỉ x&eacute;t về CPU th&igrave; Intel rẻ hơn 10$ nhưng t&iacute; ch&uacute;ng ta x&eacute;t p/p cả của bo mạch chủ nữa sẽ c&ocirc;ng bằng.</em></p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_maxresdefault.jpg\" /><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_maxresdefault1.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_VeraCrypt.png\" /><img alt=\"\" height=\"740\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Premiere.png\" width=\"653\" /><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_PCMark.png\" /><img alt=\"\" height=\"604\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Memory.png\" width=\"629\" /><img alt=\"\" height=\"740\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Excel.png\" width=\"653\" /><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Civ.png\" /><img alt=\"\" height=\"738\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Corona.png\" width=\"629\" /><img alt=\"\" src=\"https://www.hanoicomputer.vn/media/lib/37771_Cinebench.png\" /></p>\r\n\r\n<p><strong><em>Ưu điểm:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Core i3-8100 mang lại kết quả chơi game tốt v&agrave; m&atilde; ho&aacute; tốt.</li>\r\n	<li>Nhiệt độ tốt</li>\r\n	<li>Kết quả đ&aacute;nh bại AMD R3 c&oacute; khi gần bằng R5</li>\r\n</ul>\r\n\r\n<p><strong><em>Nhược điểm:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Hiện tại chưa c&oacute; nhiều bo mạch gi&aacute; rẻ.</li>\r\n</ul>', 'jgd_37771_hnc_intel_i3_8100_right_face_850x850.jpg', 4, 94, 1, 5, '2020-06-11 18:45:21', '2022-01-12 16:03:48'),
(21, 'CPU Intel Core i7-9700', 'cpu-intel-core-i7-9700', 25, 8599000, NULL, 0, 1, 0, 'bỏ qua trường này', '<h2>Đặc điểm nổi bật của CPU Intel Core i7-9700 (3.0GHz turbo up to 4.7Ghz, 8 nh&acirc;n 8 luồng, 12MB Cache, 65W) - Socket Intel LGA 1151-v2</h2>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45157_HNC_Intel_Banner_3.jpg\" width=\"1000\" /></p>\r\n\r\n<h3>Hiệu suất ở cấp độ mới</h3>\r\n\r\n<p>CPU Intel Core i7-9700 (8C/8T, 3.00 GHz up to 4.70 GHz, 12MB) - 1151-V2 thế hệ thứ 9 đưa hiệu năng m&aacute;y t&iacute;nh để b&agrave;n ch&iacute;nh l&ecirc;n một cấp độ ho&agrave;n to&agrave;n mới. i7-9700 với bộ nhớ cache 12MB v&agrave; c&ocirc;ng nghệ Intel Turbo Boost 2.0 điều chỉnh tần số turbo tối đa l&ecirc;n tới 4.70 GHz. Hỗ trợ đa nhiệm với 8 luồng hiệu suất cao được cung cấp bởi 8 l&otilde;i với c&ocirc;ng nghệ si&ecirc;u ph&acirc;n luồng Intel (C&ocirc;ng nghệ Intel HT) để giải quyết khối lượng c&ocirc;ng việc đ&ograve;i hỏi khắt khe nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45157_hnc_intel_gaming-powered-3.jpg\" width=\"1000\" /></p>\r\n\r\n<h3>C&aacute;c t&iacute;nh năng ch&iacute;nh tr&ecirc;n Intel Core i7-9700</h3>\r\n\r\n<p>Intel Core i7-9700 c&oacute; khả năng tăng tốc dữ liệu khi được gh&eacute;p nối với bộ nhớ Intel Optane để truy xuất dữ liệu bạn sử dụng nhiều nhất một c&aacute;ch nhanh ch&oacute;ng. Hỗ trợ c&ocirc;ng nghệ bộ nhớ RAM DDR4, cho ph&eacute;p c&aacute;c hệ thống c&oacute; thể n&acirc;ng cấp l&ecirc;n tới 64GB v&agrave; tốc độ truyền tải l&ecirc;n tới 2666 MT/s.</p>\r\n\r\n<p>Hỗ trợ chipset Intel Z390 bao gồm khả năng kết nối chưa từng c&oacute; với tất cả c&aacute;c thiết bị của bạn c&oacute; t&iacute;ch hợp USB 3.1 Gen 2, Intel Wireless-AC v&agrave; hỗ trợ tốc độ Gigabit Wi-Fi. Ngo&agrave;i ra thiết bị c&ograve;n tương th&iacute;ch với chipset Intel 300 series.</p>\r\n\r\n<h3><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45157_HNC_Shadow_TR_Banner.jpg\" width=\"1000\" />Cung cấp sức mạnh xử l&yacute; tối ưu</h3>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Intel Core i7-9700 c&ograve;n cung cấp sức mạnh xử l&yacute; mạnh mẽ để chơi game, ghi h&igrave;nh hoặc livestream vượt trội hơn so với c&aacute;c thế hệ trước. C&ocirc;ng nghệ Intel Quick Sync Video để ph&aacute;t livestream trực tuyến, ghi h&igrave;nh v&agrave; xử l&yacute; đa nhiệm m&agrave; kh&ocirc;ng bị gi&aacute;n đoạn. Khởi động hệ thống với c&ocirc;ng nghệ bộ nhớ Intel Optane gi&uacute;p tăng tốc tải v&agrave; khởi chạy c&aacute;c ứng dụng v&agrave; tr&ograve; chơi chỉ trong v&agrave;i gi&acirc;y.</p>', 'b0U_48603_hnc_intel_i7_9700_right_facing_850x850.jpg', 0, 100, 0, 0, '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(22, 'Ryzen Threadripper 3960X', 'ryzen-threadripper-3960x', 25, 36599000, NULL, 20, 1, 0, 'Bỏ quaBỏ qua', '<h2>Đặc điểm nổi bật của CPU AMD Ryzen Threadripper 3960X (3.8GHz turbo up to 4.5GHz, 24 nh&acirc;n 48 luồng, 140MB Cache, 280W) - Socket sTRX4</h2>\r\n\r\n<h3>CPU-Z Screenshots</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X1.png\" /><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X2.png\" /></p>\r\n\r\n<p>V&agrave; ở đ&acirc;y ch&uacute;ng ta c&oacute; c&aacute;c ảnh chụp m&agrave;n h&igrave;nh CPU-Z của bộ xử l&yacute; Ryzen Threadripper đang ngồi, được trang bị, sẵn s&agrave;ng v&agrave; chờ trong bo mạch chủ, h&atilde;y c&ugrave;ng xem. V&igrave; vậy, đ&oacute; l&agrave; tất cả nh&igrave;n ổn. Nếu quan t&acirc;m, bạn c&oacute; thể tải xuống CPU-Z tại đ&acirc;y. Ch&uacute;ng t&ocirc;i sử dụng bản cập nhật BIOS mới nhất với phần sụn (AGESA) mới nhất c&oacute; sẵn cho ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<h3>Sự ti&ecirc;u thụ năng lượng</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X3.png\" /><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X4.png\" /></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i hiển thị mức ti&ecirc;u thụ năng lượng dựa tr&ecirc;n to&agrave;n bộ PC (bo mạch chủ / bộ xử l&yacute; / card đồ họa / bộ nhớ / SSD). Con số n&agrave;y phụ thuộc v&agrave; sẽ kh&aacute;c nhau tr&ecirc;n mỗi bo mạch chủ (th&ecirc;m IC / bộ điều khiển / wifi / Bluetooth) v&agrave; PSU (hiệu quả). H&atilde;y nhớ rằng ch&uacute;ng t&ocirc;i đo PC ENTIRE, kh&ocirc;ng chỉ mức ti&ecirc;u thụ năng lượng của bộ xử l&yacute;. PC trung b&igrave;nh của bạn c&oacute; thể kh&aacute;c với số của ch&uacute;ng t&ocirc;i nếu bạn th&ecirc;m ổ đĩa quang, ổ cứng, soundcard, v.v.</p>\r\n\r\n<h3>Nhiệt độ</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X5.png\" /></p>\r\n\r\n<p>L&yacute; do ch&uacute;ng t&ocirc;i kh&ocirc;ng lập bảng kết quả nhiệt độ l&agrave; v&igrave; ch&uacute;ng t&ocirc;i cần &aacute;p dụng c&ugrave;ng một lần l&agrave;m m&aacute;t tr&ecirc;n tất cả c&aacute;c nền tảng. Ngo&agrave;i ra, bộ l&agrave;m m&aacute;t (RPM) phản ứng kh&aacute;c nhau với TDP v&agrave; c&aacute;c biến như BIOS.</p>\r\n\r\n<p>Kh&ocirc;ng thể phủ nhận điều đ&oacute;, 24 l&otilde;i (32 dưới mui xe thực sự) tạo ra rất nhiều nhiệt. Dưới tải trọng qu&aacute; lớn tr&ecirc;n tất cả c&aacute;c l&otilde;i (wPRIME), ch&uacute;ng t&ocirc;i di chuột trong v&ugrave;ng đồng bằng 80 đến 85 độ C. Điều n&agrave;y l&agrave; với một đơn vị Enermax LXS 240mm được đặt ở c&agrave;i đặt RPM của quạt mặc định. Bạn sẽ cần l&agrave;m m&aacute;t th&iacute;ch hợp để chế ngự con th&uacute;.</p>\r\n\r\n<h3>CineBench 20</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X6.png\" /><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X7.png\" /></p>\r\n\r\n<p>Maxon đ&atilde; ph&aacute;t h&agrave;nh điểm chuẩn Cinebench R20 của họ, c&oacute; khả năng xử l&yacute; c&aacute;c bộ xử l&yacute; nhiều luồng hơn. Bạn cần một PC c&oacute; &iacute;t nhất 4 GB bộ nhớ v&agrave; hỗ trợ tập lệnh SSE3. Maxon tuy&ecirc;n bố Cinebench R20 hiện đang sử dụng bốn lần bộ nhớ v&agrave; t&aacute;m lần c&ocirc;ng suất t&iacute;nh to&aacute;n của CPU so với Cinebench R15.</p>\r\n\r\n<h3>Benchmarks: De/Compression - 7-Zip Multi-threaded</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X8.png\" /><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X9.png\" /></p>\r\n\r\n<p>Trong phần điểm chuẩn n&agrave;y, ch&uacute;ng ta sẽ t&igrave;m hiểu c&aacute;c ứng dụng phần mềm n&eacute;n. Ch&uacute;ng t&ocirc;i sẽ sử dụng 7-ZIP v&agrave; xem x&eacute;t cả hiệu suất n&eacute;n v&agrave; khử. 7-Zip l&agrave; một tr&igrave;nh lưu trữ đa luồng, đặc biệt l&agrave; trong qu&aacute; tr&igrave;nh khử n&eacute;n cho thấy đặc biệt tốt.</p>\r\n\r\n<h3>Performance - V-Ray</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X10.png\" /><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X11.png\" /></p>\r\n\r\n<p>V-Ray l&agrave; một ứng dụng độc lập để kiểm tra tốc độ của phần cứng của bạn. C&aacute;c kết quả được hiển thị trong chế độ thời gian kết xuất. Ứng dụng độc lập bao gồm một cảnh GPU đơn v&agrave; một cảnh CPU đơn. V-Ray l&agrave; một ứng dụng phần mềm kết xuất h&igrave;nh ảnh do m&aacute;y t&iacute;nh tạo ra được ph&aacute;t triển bởi c&ocirc;ng ty Chaos Group của Bulgaria. N&oacute; l&agrave; một tr&igrave;nh cắm thương mại cho c&aacute;c ứng dụng phần mềm đồ họa m&aacute;y t&iacute;nh 3D của b&ecirc;n thứ ba v&agrave; được sử dụng để trực quan h&oacute;a v&agrave; đồ họa m&aacute;y t&iacute;nh trong c&aacute;c ng&agrave;nh như truyền th&ocirc;ng, giải tr&iacute;, sản xuất tr&ograve; chơi điện ảnh v&agrave; video, thiết kế c&ocirc;ng nghiệp, thiết kế sản phẩm v&agrave; kiến tr&uacute;c. Phần mềm hỗ trợ đa luồng v&agrave; luồng lớn, n&oacute; kh&ocirc;ng bị giới hạn bởi 64 luồng.</p>\r\n\r\n<h3>Corona Ray Tracing</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X12.png\" /></p>\r\n\r\n<p>C&ocirc;ng cụ n&agrave;y rất dễ sử dụng, chỉ cần lưu, tr&iacute;ch xuất v&agrave; chạy tệp c&oacute; thể tải xuống từ trang web của họ v&agrave; bạn sẽ bắt đầu v&agrave; n&oacute; sẽ tự động cung cấp cho bạn kết quả khi ch&uacute;ng ta c&oacute; thể sử dụng để so s&aacute;nh hiệu suất giữa c&aacute;c CPU. C&aacute;c hệ thống loại m&aacute;y trạm c&oacute; tới 72 luồng CPU c&oacute; thể được sử dụng trong điểm chuẩn n&agrave;y, c&oacute; nghĩa l&agrave; n&oacute; được tạo ra với luồng nặng, khiến n&oacute; ph&ugrave; hợp để kiểm tra CPU với cả số lượng l&otilde;i CPU nhỏ v&agrave; lớn.</p>\r\n\r\n<h3>Performance - Video Creation - Vegas PRO</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X13.png\" /></p>\r\n\r\n<p>Magix Vegas Pro - Phần mềm chỉnh sửa video chuy&ecirc;n nghiệp Vegas Pro n&agrave;y l&agrave; g&oacute;i phần mềm chỉnh sửa video để chỉnh sửa phi tuyến t&iacute;nh. Ban đầu được ph&aacute;t triển như một tr&igrave;nh chỉnh sửa &acirc;m thanh, cuối c&ugrave;ng n&oacute; đ&atilde; ph&aacute;t triển th&agrave;nh NLE cho video v&agrave; &acirc;m thanh từ phi&ecirc;n bản 2.0. Ban đầu được ph&aacute;t triển như một tr&igrave;nh chỉnh sửa &acirc;m thanh, cuối c&ugrave;ng n&oacute; đ&atilde; ph&aacute;t triển th&agrave;nh NLE cho video v&agrave; &acirc;m thanh từ phi&ecirc;n bản 2.0. Vegas c&oacute; t&iacute;nh năng chỉnh sửa video v&agrave; &acirc;m thanh đa thời gian thực tr&ecirc;n c&aacute;c bản nhạc kh&ocirc;ng giới hạn, tr&igrave;nh tự video độc lập với độ ph&acirc;n giải, c&aacute;c c&ocirc;ng cụ tổng hợp v&agrave; hiệu ứng phức tạp, hỗ trợ &acirc;m thanh 24 bit / 192 kHz, hỗ trợ hiệu ứng bổ trợ VST v&agrave; DirectX v&agrave; trộn &acirc;m thanh v&ograve;m Dolby Digital . L&ecirc;n đến phi&ecirc;n bản 10, Vegas Pro chạy tr&ecirc;n Windows 7, Windows 8 v&agrave; Windows 10 v&agrave; đa luồng. Đối với phi&ecirc;n điểm chuẩn của ch&uacute;ng t&ocirc;i, ch&uacute;ng t&ocirc;i xuất ra XAVC S Long 3840x2160 - 59.94p, một m&atilde; h&oacute;a rất nặng. M&atilde; h&oacute;a hỗ trợ thẻ video bị v&ocirc; hiệu h&oacute;a.</p>\r\n\r\n<p>Phần mềm n&agrave;y hỗ trợ 16&nbsp;luồng<br />\r\nĐ&acirc;y l&agrave; một thử nghiệm trong thế giới thực, kh&ocirc;ng phải l&agrave; một thử nghiệm tổng hợp v&agrave; dựa tr&ecirc;n nội dung v&agrave; sở th&iacute;ch ri&ecirc;ng của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i ghi &acirc;m tr&ograve; chơi hai ph&uacute;t, th&ecirc;m một đoạn &acirc;m thanh. Nội dung được tạo ra với đoạn &acirc;m thanh mới được trộn lẫn trong đ&oacute; cũng như &aacute;p dụng hai bộ lọc tăng cường video fp32 để tương phản v&agrave; l&agrave;m sắc n&eacute;t.</p>\r\n\r\n<p>Xem x&eacute;t Vegas Pro sử dụng tối đa 16 luồng v&agrave; 3960X c&oacute; đồng hồ cơ bản tất cả l&otilde;i nhanh hơn một ch&uacute;t, n&oacute; chiến thắng với một lề nhỏ.</p>\r\n\r\n<h3>3DMark Time Spy CPU score</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/50230_CPUAMDRyzenThreadripper3960X14.png\" /></p>\r\n\r\n<p>3DMark tập trung v&agrave;o hai lĩnh vực quan trọng nhất đối với hiệu năng chơi game: CPU v&agrave; GPU. Với sự xuất hiện của c&aacute;c cấu h&igrave;nh đa g&oacute;i v&agrave; đa l&otilde;i ở cả ph&iacute;a CPU v&agrave; GPU, quy m&ocirc; hiệu suất của c&aacute;c khu vực n&agrave;y đ&atilde; được mở rộng, v&agrave; c&aacute;c hiệu ứng h&igrave;nh ảnh v&agrave; chơi tr&ograve; chơi được thực hiện bởi c&aacute;c cấu h&igrave;nh n&agrave;y c&oacute; phạm vi rộng.</p>\r\n\r\n<p>Kiểm tra CPU Time Spy mặc định kh&ocirc;ng vượt qu&aacute; bộ xử l&yacute; với 10 luồng trở l&ecirc;n.<br />\r\nĐiều n&agrave;y l&agrave;m cho việc bao qu&aacute;t to&agrave;n bộ phổ của tr&ograve; chơi 3D l&agrave; một nhiệm vụ kh&oacute; khăn. Đ&oacute; l&agrave; nhận thức đa l&otilde;i v&agrave; đa luồng.</p>', 'Xbg_50230_hnc_ryzen_threadripper_3960x_right_facing_850x850.jpg', 1, 99, 1, 4, '2020-06-11 18:55:36', '2020-06-25 04:49:45'),
(23, 'CPU Intel Core i9-10900 ASUS', 'cpu-intel-core-i9-10900-asus', 25, 12699000, NULL, 0, 1, 0, 'Bỏ quaBỏ quaBỏ qua', '<h2>Đặc điểm nổi bật của CPU Intel Core i9-10900 (2.8GHz turbo up to 5.2GHz, 10 nh&acirc;n 20 luồng, 20MB Cache, 65W) - Socket Intel LGA 1200</h2>\r\n\r\n<h2>Intel Core i9-10900 &ndash; Ho&agrave;n hảo cho nhu cầu &quot;Cắm &amp; Chạy&quot;</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trang bị nh&acirc;n đồ hoạ t&iacute;ch hợp, xung đơn nh&acirc;n ở mức kh&aacute; tốt, cực ph&ugrave; hợp cho nhu cầu gaming v&agrave; l&agrave;m việc. Điểm trừ chỉ l&agrave; kh&ocirc;ng mở kho&aacute; hệ số nh&acirc;n, nhưng như vậy đ&atilde; l&agrave; qu&aacute; ho&agrave;n hảo cho một chiếc i9 được nhiều người mong chờ.</p>\r\n\r\n<h3>Đ&ocirc;i điều về Intel Core i9-10900</h3>\r\n\r\n<p>Cuộc đua song m&atilde; giữa Intel v&agrave; AMD vẫn đang hết sức khốc liệt, 10900 kh&ocirc;ng g&igrave; kh&aacute;c l&agrave; c&acirc;u trả lời của Intel d&agrave;nh cho đối thủ Ryzen 9. Chia sẻ nhiều điểm tương đồng với c&aacute;c đối thủ AMD từ số nh&acirc;n số luồng cho đến mức gi&aacute; hấp dẫn. 10900 sẽ đ&aacute;nh mạnh v&agrave;o ph&acirc;n kh&uacute;c m&agrave; c&aacute;c CPU của AMD đang nắm giữ khi tỏ ra vượt trội trong vấn đề phục vụ s&aacute;ng tạo nội dung khi c&oacute; trong m&igrave;nh c&ocirc;ng nghệ Intel Quick Sync.</p>\r\n\r\n<p>Hoạt động tốt nhất, ổn định nhất tr&ecirc;n những chiếc Z490 cao cấp, tuy kh&ocirc;ng thể &eacute;p xung nhưng người d&ugrave;ng vẫn phải ch&uacute; &yacute; về số tiền bỏ ra để trang bị nền tảng cho chiếc CPU n&agrave;y, v&agrave; cả giải ph&aacute;p tản nhiệt cũng cần được ch&uacute; trọng rất nhiều.</p>\r\n\r\n<h3>Kh&ocirc;ng &eacute;p xung kh&ocirc;ng phải l&agrave; thảm họa</h3>\r\n\r\n<p>Trừ khi bạn l&agrave; một vọc thủ ham muốn thử th&aacute;ch những giới hạn của bản th&acirc;n, c&ograve;n nếu kh&ocirc;ng những g&igrave; m&agrave; 10900 mang lại vẫn đủ để tạo ra kh&aacute;c biệt so với phần c&ograve;n lại, livestream, cắm nhiều acc game l&agrave; chuyện nhỏ với 10900, chỉ cần ch&uacute; &yacute; trang bị k&egrave;m cho n&oacute; VGA xứng tầm l&agrave; được !</p>\r\n\r\n<h3>Lựa chọn ho&agrave;n hảo cho những nh&agrave; s&aacute;ng tạo nội dung</h3>\r\n\r\n<p>Chi ph&iacute; bỏ ra để sở hữu được 10900 l&agrave; rất hợp v&iacute; trong số những chiếc Core i9 năm nay của Intel, với số tiền tiết kiệm được bạn c&oacute; thể đầu tư v&agrave;o bộ nhớ RAM, card đồ họa rời v&agrave; giải ph&aacute;p lưu trữ, một lựa chọn kh&ocirc;ng thể tốt hơn khi vừa đỡ chi ph&iacute; lại vừa c&oacute; thể đạt được mục đ&iacute;ch của m&igrave;nh. Nhất l&agrave; đối với c&aacute;c designer / editor mới v&agrave;o nghề, đ&acirc;y sẽ l&agrave; m&oacute;n đầu tư c&oacute; thể đi theo bạn trong suốt nhiều năm nữa</p>\r\n\r\n<h3>IHS h&agrave;n trực tiếp</h3>\r\n\r\n<p>Qu&ecirc;n đi nỗi lo về tản nhiệt, 100% c&aacute;c CPU 10900 đều được kết nối với IHS bằng thiếc, kh&ocirc;ng cần trải qua qu&aacute; tr&igrave;nh delid phức tạp v&agrave; đầy rủi ro, bạn chỉ cần đầu tư hệ thống tản nhiệt xứng tầm l&agrave; c&oacute; thể y&ecirc;n t&acirc;m về nhiệt độ mỗi khi sử dụng.</p>\r\n\r\n<h3>Biến m&aacute;y t&iacute;nh th&agrave;nh trung t&acirc;m giải tr&iacute;</h3>\r\n\r\n<p>Giống như 10900K ,sở hữu 10900 đồng nghĩa với việc sở hữu một trung t&acirc;m giải tr&iacute; tuyệt vời: ph&aacute;t trực tuyến video 4K UHD, game thực tế ảo v&agrave; chơi c&aacute;c tr&ograve; chơi đ&ograve;i hỏi khắt khe nhất. Với số lượng điểm ảnh tr&ecirc;n m&agrave;n h&igrave;nh nhiều hơn gấp 4 lần so với HD truyền thống, bạn c&oacute; thể tận hưởng h&igrave;nh ảnh sắc n&eacute;t v&agrave; ch&acirc;n thực, đổ b&oacute;ng phức hợp v&agrave; tốc độ khung h&igrave;nh cao ho&agrave;n to&agrave;n kh&ocirc;ng gi&aacute;n đoạn, kh&ocirc;ng ngắt chừng hay giật/lag. H&atilde;y c&ugrave;ng chuẩn bị đ&oacute;n nhận những trải nghiệm đắm ch&igrave;m mang t&iacute;nh c&aacute;ch mạng sắp tới.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_i910900Poster.png\" width=\"1200\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700-2.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700-4.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700-5.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700-6.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/52654_Intel-Core-i7-10700-7.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>', '7uy_52654_intel_i9_10900.jpg', 1, 99, 0, 0, '2020-06-11 18:57:53', '2020-06-12 10:07:21'),
(24, 'MSI RTX 2060 Super', 'msi-rtx-2060-super', 26, 10999000, NULL, 0, 1, 0, 'Bỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh MSI RTX 2060 Super VENTUS GP OC (8GB GDDR6, 256-bit, HDMI+DP, 1x8-pin)</h2>\r\n\r\n<h2>Giới thiệu card m&agrave;n h&igrave;nh MSI RTX 2060 Super VENTUS OC</h2>\r\n\r\n<p>RTX Super l&agrave; đ&ograve;n đ&aacute;p trả của NVIDIA trước thế hệ GPU mới của AMD dựa tr&ecirc;n kiến tr&uacute;c Navi. RTX 2060 Super l&agrave; 1 trong 2 đại diện đầu ti&ecirc;n của d&ograve;ng GPU mới n&agrave;y, với hiệu năng chơi game tương đương với RTX 2070. Kết hợp với thiết kế tối ưu của MSI, RTX 2060 Super VENTUS OC l&agrave; một chiếc card m&agrave;n h&igrave;nh cao cấp mới, hứa hẹn l&agrave; một lựa chọn mới rất hấp dẫn cho game thủ.</p>\r\n\r\n<h3>Thiết kế</h3>\r\n\r\n<p>RTX 2060 Super VENTUS OC được thiết kế kh&aacute; đơn giản nhưng vẫn đem lại c&aacute;i nh&igrave;n cứng g&aacute;p, g&oacute;c cạnh với t&ocirc;ng m&agrave;u đen, bạc cực k&igrave; dễ d&agrave;ng khi phối m&agrave;u phần cứng với nhau.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-1.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Ở mặt sau của RTX 2060 Super VENTUS OC l&agrave; một tấm backplate lớn, gi&uacute;p tăng độ cứng cấp cho cấu tr&uacute;c của card.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-2.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>Tản nhiệt</h3>\r\n\r\n<p>RTX 2060 Super VENTUS OC sử dụng thiết kế gồm 2 quạt tản nhiệt TORX FAN 2.0 độc quyền của MSI gi&uacute;p tối ưu cho việc di chuyển luồng gi&oacute;, cũng như hạn chế tối đa độ ồn khi hoạt động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-3.jpg\" width=\"100%\" /></p>\r\n\r\n<p>B&ecirc;n dưới hệ thống quạt l&agrave;m m&aacute;t của RTX 2060 Super VENTUS OC l&agrave; một lớp tản nhiệt lớn, với h&agrave;ng loạt c&aacute;c l&aacute; nh&ocirc;m xen kẽ với nhau gi&uacute;p tận dụng tối đa diện t&iacute;ch tiếp x&uacute;c với kh&ocirc;ng kh&iacute;. Kết nối bằng 4 ống dẫn nhiệt bằng đồng tiếp x&uacute;c trực tiếp với bộ xử l&yacute; đồ họa (GPU) b&ecirc;n dưới nhằm đem lại nhiệt độ hoạt động tốt nhất cho bộ xử l&yacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-4.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Thậm ch&iacute; cả ở b&ecirc;n tr&ecirc;n chip nhớ, bộ điều khiển nguồn tr&ecirc;n RTX 2060 Super VENTUS OC đều được d&aacute;n l&ecirc;n một lớp pad dẫn nhiệt gi&uacute;p việc tho&aacute;t nhiệt cực k&igrave; tốt, đồng đều cả mặt trước lẫn mặt sau.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-5.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>AfterBurner</h3>\r\n\r\n<p>Với phần m&ecirc;m AfterBurner của MSI, bạn c&oacute; thể thỏa sức điều chỉnh RTX 2060 Super VENTUS OC hoạt động theo &yacute; muốn của m&igrave;nh, từ điều chỉnh d&ograve;ng điện, c&ocirc;ng suất, tốc độ quạt v&agrave; &eacute;p xung. Thậm ch&iacute; c&ograve;n c&oacute; th&ecirc;m t&iacute;nh năng OC Scanner gi&uacute;p cho việc &eacute;p xung trở n&ecirc;n cực k&igrave; đơn giản chỉ với 1 c&uacute; click chuột.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-6.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>G-Sync</h3>\r\n\r\n<p>Với RTX 2060 Super VENTUS OC, bạn sẽ c&oacute; được trải nghiệm chơi game tốt nhất với c&ocirc;ng nghệ G-Sync của NVIDIA, gi&uacute;p loại bỏ ho&agrave;n to&agrave;n hiện tượng r&aacute;ch h&igrave;nh &quot;tearing&quot; phiền phức khi chơi game.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49798_Card-mn-hnh-MSI-RTX-2060-Super-VENTUS-GP-OC-7.jpg\" width=\"100%\" /></p>', 'lU0_49798_msi_rtx_2060_super_ventus_gp_oc_01.jpg', 0, 3, 1, 4, '2020-06-11 19:06:50', '2020-06-18 10:17:31'),
(25, 'ASUS DUAL RTX 2060 Super-8G EVO', 'asus-dual-rtx-2060-super-8g-evo', 26, 11099000, NULL, 0, 1, 0, 'Bỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh ASUS DUAL RTX 2060 Super-8G EVO (8GB GDDR6, 256-bit, DVI+HDMI+DP, 1x8-pin)</h2>\r\n\r\n<h3>Giới thiệu Card m&agrave;n h&igrave;nh Asus Dual RTX 2060 Super EVO 8GB GDDR6 (DUAL-RTX2060S-8G-EVO)</h3>\r\n\r\n<p>RTX 2060 Super EVO 8GB GDDR6 l&agrave; 1 trong những d&ograve;ng card m&agrave;n h&igrave;nh cao cấp mới nhất của ASUS, sử dụng bộ xử l&yacute; đồ họa RTX 2060 với hiệu năng chơi game tuyệt vời cộng th&ecirc;m với khả năng hỗ trợ c&aacute;c c&ocirc;ng nghệ h&igrave;nh ảnh mới nhất hiện nay như DLSS, Ray tracing VRS của NVIDIA v&agrave; thiết kế tản nhiệt tối ưu của ASUS.</p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_asus_geforce_rtx_20_series_images_1024x512.jpg\" /></p>\r\n\r\n<h3>Tản nhiệt</h3>\r\n\r\n<p>RTX 2060 Super EVO 8GB GDDR6 sử dụng thiết kế quạt hướng trục, được thiết kế cho card đồ họa ROG cao cấp mới nhất, những chiếc quạt n&agrave;y c&oacute; một phần trục nhỏ hơn tạo cho c&aacute;c lưỡi dao d&agrave;i hơn v&agrave; chắc chắc để tăng &aacute;p suất kh&iacute; đi xuống.</p>\r\n\r\n<p>Tận dụng thiết kế 2,7 khe để c&oacute; được diện t&iacute;ch bề mặt tản nhiệt nhiều hơn, khoảng trống tăng th&ecirc;m khả năng &eacute;p xung v&agrave; cho ph&eacute;p người sử dụng chạy ở tốc độ thấp hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-1.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, để tối ưu hiệu năng tản nhiệt, cả 2 quạt l&agrave;m m&aacute;t đều ngừng hoạt động khi nhiệt độ thấp hơn 55 độ C nhằm giảm thiểu tối đa độ ồn đối với c&aacute;c nhu cầu giải tr&iacute; nhẹ nh&agrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-2.gif\" width=\"100%\" /></p>\r\n\r\n<h3>Thiết kế</h3>\r\n\r\n<p>Mặt sau của card l&agrave; 1 tấm backplate lớn bằng nh&ocirc;m, gi&uacute;p tho&aacute;t 1 phần nhiệt từ card đồng thời tăng độ cứng c&aacute;p cho bo mạch v&agrave; tạo điểm nhấn trong thiết kế.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-3.png\" width=\"100%\" /></p>\r\n\r\n<p>RTX 2060 Super EVO 8GB GDDR6 được sản xuất dựa tr&ecirc;n d&acirc;y chuyền tự động c&ocirc;ng nghệ cao của ASUS gi&uacute;p giảm thiểu tối đa tỉ lệ lỗi sản phẩm cũng như tăng cường tuổi thọ hoạt động của c&aacute;c linh kiện.</p>\r\n\r\n<p>Hơn thế nữa tất cả những chiếc card RTX 2060 Super EVO 8GB GDDR6 đều được kiểm định với quy tr&igrave;nh nghi&ecirc;m ngặt l&ecirc;n tới 144 tiếng của ASUS nhằm đem lại trải nghiệm tốt nhất đến tay game thủ.</p>\r\n\r\n<h3>Đ&egrave;n</h3>\r\n\r\n<p>RTX 2060 Super EVO 8GB GDDR6 được thiết kế rất đơn giản, kh&ocirc;ng m&agrave;u m&egrave; như nhiều d&ograve;ng card m&agrave;n h&igrave;nh kh&aacute;c. Chỉ với 1 dải đ&egrave;n LED b&ecirc;n h&ocirc;ng nhằm tạo điểm nhấn nổi bật v&agrave; dễ phối m&agrave;u.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-4.png\" width=\"100%\" /></p>\r\n\r\n<h3>G-Sync</h3>\r\n\r\n<p>Với b&ocirc;̣ xử lý mạnh mẽ RTX 2060, game thủ sẽ được trải nghi&ecirc;̣m ch&acirc;́t lượng hình ảnh t&ocirc;́t nh&acirc;́t th&ocirc;ng qua c&ocirc;ng ngh&ecirc;̣ G-Sync của NVIDIA giúp loại bỏ hi&ecirc;̣n tượng rách hình khi chơi game.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-5.png\" width=\"100%\" /></p>\r\n\r\n<h3>Phần mềm</h3>\r\n\r\n<p>RTX 2060 Super EVO 8GB GDDR6, game thủ có th&ecirc;̉ thỏa sức tùy chỉnh th&acirc;̣m chí ép xung card theo ý thích đ&ecirc;̉ đạt được hi&ecirc;̣u năng cao nh&acirc;́t có th&ecirc;̉.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47501_Card-mn-hnh-ASUS-DUAL-RTX-2060-Super-8G-EVO-6.png\" width=\"100%\" /></p>', 'qHJ_49798_msi_rtx_2060_super_ventus_gp_oc_01.jpg', 0, 100, 0, 0, '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(26, 'MSI RX 580 ARMOR 8G OC', 'msi-rx-580-armor-8g-oc', 26, 4999000, NULL, 0, 1, 0, 'Bỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh MSI RX 580 ARMOR 8G OC (8GB GDDR5, 256-bit, DVI+HDMI+DP, 1x8-pin)</h2>\r\n\r\n<h2>Những điểm nổi bật của MSI RX 580 ARMOR 8G OC</h2>\r\n\r\n<h3><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51491_RX580Amor.png\" width=\"100%\" />THIẾT KẾ ĐEN &amp; TRẮNG</h3>\r\n\r\n<p>Chơi game l&agrave; phải phong c&aacute;ch, phải kh&aacute;c biệt với card đồ họa độc nhất MSI&rsquo;s ARMOR. Thiết kế ti&ecirc;n tiến với gi&aacute;p che sang trọng cứng c&aacute;p. Card đồ họa ARMOR l&agrave; lựa chọn ho&agrave;n hảo cho game thủ hay c&aacute;c modder đang cần t&igrave;m kiếm những điều kh&aacute;c biệt.</p>\r\n\r\n<h3>QUẠT K&Eacute;P</h3>\r\n\r\n<p>ARMOR 2X sử dụng thiết kế tản nhiệt của quạt MSI TORX. Với thiết kế c&aacute;nh quạt l&aacute; l&uacute;a, quạt MSI TORX mang lại hiệu suất l&agrave;m m&aacute;t mạnh mẽ với độ ồn thấp nhất.</p>\r\n\r\n<h3>C&Ocirc;NG NGHỆ ZERO FROZR-STAY</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51491_HNC580Amor2.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Lần đầu được giới thiệu v&agrave;o năm 2008 bởi MSI, c&ocirc;ng nghệ ZeroFrozr đ&atilde; tạo được dấu ấn của ri&ecirc;ng n&oacute; v&agrave; giờ đ&acirc;y trở th&agrave;nh chuẩn c&ocirc;ng nghiệp chung giữa c&aacute;c card đồ họa. N&oacute; gi&uacute;p loại bỏ tiếng ồn của card bằng c&aacute;ch giảm hoạt động quạt trong những t&igrave;nh huống tải thấp. Điều n&agrave;y nghĩa l&agrave; bạn c&oacute; thể tập trung chơi game m&agrave; kh&ocirc;ng bị l&agrave;m phiền bởi tiếng quạt quay.</p>\r\n\r\n<h3>QUẠT TH&Ocirc;NG MINH</h3>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51491_HNC580Amor.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Dưới vỏ ốp l&aacute;t sang trọng v&agrave; hệ thống quạt k&eacute;p l&agrave; một tản nhiệt khổng lồ với v&ocirc; số v&acirc;y nh&ocirc;m gi&uacute;p giải t&aacute;n nhiệt từ GPU. C&aacute;c ống dẫn bằng đồng được truyền v&agrave;o l&aacute; nh&ocirc;m để đảm bảo l&agrave;m m&aacute;t hiệu quả. V&acirc;y nh&ocirc;m được trang bị c&ocirc;ng nghệ Airflow Control để tối đa h&oacute;a luồng kh&ocirc;ng kh&iacute; hướng về ống dẫn nhiệt.</p>\r\n\r\n<p>Mang lại cảm gi&aacute;c chơi game mượt nhất, th&uacute; vị nhất bằng c&aacute;ch loại bỏ x&eacute; h&igrave;nh, lag h&igrave;nh v&agrave; tăng cao tốc độ m&agrave;n trập.</p>\r\n\r\n<p>Độ ph&acirc;n giải cực cao (UHD) tăng l&ecirc;n 4x độ ph&acirc;n giải so với 1080p, cho ph&eacute;p mang lại h&igrave;nh ảnh sắc n&eacute;t v&agrave; sinh động hơn cho c&aacute;c chi tiết trong game.</p>\r\n\r\n<h3>CHUẨN BỊ CHO TRẢI NGHIỆM VR VỚI MSI</h3>\r\n\r\n<p>Để tận hưởng thể giới ảo một c&aacute;ch ch&acirc;n thật nhất, hiệu suất phần cứng l&agrave; một yếu tố kh&ocirc;ng thể thiếu. MSI, thương hiệu h&agrave;ng đầu thế giới về game v&agrave; esport, mang lại những hỗ trợ tuyệt vời cho hệ thống VR Ready. Với c&aacute;c t&iacute;ch hợp phần cứng tốt nhất v&agrave; ti&ecirc;n tiến gi&uacute;p cho MSI VR hoạt động trơn tru nhất. C&ugrave;ng với c&aacute;c đối t&aacute;c, MSI mang đến cho game thủ một trải nghiệm thực tế ảo sống động đến kh&oacute; tin.</p>\r\n\r\n<h3>AFTERBURNER</h3>\r\n\r\n<p>MSI Afterburner đứng đầu thế giới&rsquo;s l&agrave; card đồ họa được c&ocirc;ng nhận v&agrave; sử dụng rộng r&atilde;i về t&iacute;nh năng cho ph&eacute;p bạn kiểm so&aacute;t to&agrave;n bộ card đồ họa trong qu&aacute; tr&igrave;nh &eacute;p xung. N&oacute; mạng lại một c&aacute;i nh&igrave;n tổng quan v&agrave; chi tiết về phần cứng card đồ họa, hơn nữa c&ograve;n đi k&egrave;m với một số t&iacute;nh năng t&ugrave;y biến quạt tản nhiệt, quay video v&agrave; benchmarking.</p>', 'xwX_51491_msi_rx_580_armor_8g_oc_01.jpg', 1, 99, 0, 0, '2020-06-11 19:14:01', '2020-06-12 10:07:12'),
(27, 'EVGA GeForce RTX 2080 XC BLACK EDITION GAMING-8GB', 'evga-geforce-rtx-2080-xc-black-edition-gaming-8gb', 26, 19299000, NULL, 0, 1, 1, 'Bỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh EVGA GeForce RTX 2080 XC BLACK EDITION GAMING-8GB (8GB GDDR6, 256-bit, HDMI+DP+Type C, 1x6-pin+1x8-pin)&nbsp;</h2>\r\n\r\n<h2><strong>Giới thiệu card đồ họa&nbsp;EVGA GeForce RTX 2080 XC BLACK EDITION GAMING 8GB&nbsp;</strong></h2>\r\n\r\n<p><strong><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB002.jpg\" width=\"100%\" /></strong></p>\r\n\r\n<p><strong>EVGA GeForce RTX 2080 XC BLACK EDITION GAMING 8GB</strong>&nbsp;mang trong m&igrave;nh rất nhiều cải tiến so với d&ograve;ng card GTX 10 Series trước đ&oacute;. Ch&uacute;ng ta sẽ c&oacute; một chiếc card đồ hoạ mang kiến tr&uacute;c mới Turing, c&oacute; tới 4352 nh&acirc;n Cuda Core, 8Gb bộ nhớ đệm DDR6 với tốc độ của bộ nhớ l&ecirc;n tới 14Gbps, giao diện bộ nhớ 256bit v&agrave; tốc độ băng th&ocirc;ng đạt 448 Gb/s.&nbsp;<strong>RTX2080</strong>&nbsp;hỗ trợ l&ecirc;n tới 4 m&agrave;n h&igrave;nh c&ugrave;ng l&uacute;c với độ ph&acirc;n giải tối đa l&agrave; 7680x4320.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITION001.jpg\" width=\"100%\" /></p>\r\n\r\n<p><strong>Real-Time Ray Tracing</strong>: Đổ b&oacute;ng v&agrave; tăng khả năng tương phản giữa c&aacute;c vật, đem lại trải nghiệm ch&acirc;n thực.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB.jpg\" width=\"100%\" /></p>\r\n\r\n<p><strong>Nvidia Geforce Experience</strong>: Hỗ trợ người d&ugrave;ng Record, Stream Game&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_NvidiaGeforceExperience004.jpg\" width=\"100%\" /></p>\r\n\r\n<p><strong>Nvidia Ansel</strong>: Hỗ trợ chụp ảnh 360 khi chơi game VR v&agrave; c&oacute; hỗ trợ tới cả HDR</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB005.jpg\" width=\"100%\" /></p>\r\n\r\n<p><strong>Nvidia Highlight</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB006.jpg\" width=\"100%\" /></strong></p>\r\n\r\n<p><strong>Nvidia G-Sync Compatible</strong>: Hỗ trợ đồng bộ khung h&igrave;nh đạt được c&ugrave;ng với tần số qu&eacute;t cao của m&agrave;n h&igrave;nh để cho trải nghiệm tốt nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB006.png\" width=\"100%\" /></p>\r\n\r\n<p><strong>Nvidia NVLink (SLI ready)</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB007.gif\" width=\"100%\" /></strong></p>\r\n\r\n<p><strong>VR Ready:&nbsp;</strong>Hỗ trợ chơi game thực tế ảo VR</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB008.png\" width=\"100%\" /></p>\r\n\r\n<p><strong>Microsoft&reg; DirectX&reg; 12 API, Vulkan API, OpenGL 4/5</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47192_EVGAGeForceRTX2080XCBLACKEDITIONGAMING8GB009.jpg\" width=\"100%\" /></strong></p>', 'YGH_47192_evga_geforce_rtx_2080_xc_black_edition_gaming___8gb_____01.jpg', 5, 99, 1, 4, '2020-06-11 19:16:28', '2020-06-24 05:48:05'),
(28, 'MSI RX 5600 XT GAMING X', 'msi-rx-5600-xt-gaming-x', 26, 8899000, NULL, 10, 1, 1, 'Bỏ quaBỏ quaBỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh MSI RX 5600 XT GAMING X (6GB GDDR6, 192-bit, HDMI+DP, 2x8-pin)</h2>\r\n\r\n<h3>Thiết kế cao cấp</h3>\r\n\r\n<p>Sự trở lại rất được mong đợi đến từ card đồ họa&nbsp;<strong><a href=\"https://www.hanoicomputer.vn/card-man-hinh-msi-rx-5600-xt-gaming-x-6gd/p51709.html\" title=\"MSI RX 5600 XT GAMING X - 6GD\">MSI RX 5600 XT GAMING X - 6GD</a></strong>&nbsp;với thiết kế quạt tản nhiệt k&eacute;p mang t&iacute;nh biểu tượng của MSI. Kết hợp ho&agrave;n h&atilde;o giữa m&agrave;u đen v&agrave; m&agrave;u x&aacute;m gunmetal với tấm ốp kim loại được thiết kế phay xước, sự ho&agrave;n hảo n&agrave;y mang đến cho bạn thiết kế cao cấp với hiệu ứng &aacute;nh s&aacute;ng RGB tuyệt đẹp v&agrave; mượt m&agrave; ở lớp vỏ, đảm bảo đem lại sự ấn tượng mạnh mẽ cho bạn v&agrave; mọi người xung quanh.</p>\r\n\r\n<p><img alt=\"Thiet Ke Card Man Hinh MSI RX 5600 XT GAMING X - 6GD\" height=\"813\" src=\"https://hanoicomputercdn.com/media/lib/51709_ThietKeCardManHinhMSIRX5600XTGAMINGX-6GD.jpg\" width=\"1650\" /></p>\r\n\r\n<h3>Tản nhiệt độc quyền</h3>\r\n\r\n<p>Thế hệ thứ 7 của tản nhiệt MSI TWIN FROZR Thermal Design nổi tiếng mang đến c&ocirc;ng nghệ ti&ecirc;n tiến nhất cho hiệu suất l&agrave;m m&aacute;t tuyệt đỉnh.&nbsp;MSI RX 5600 XT GAMING X - 6GD được trang bị TORX FAN 3.0 mới kết hợp với c&aacute;c cơ chế kh&iacute; động học đột ph&aacute;. Điều n&agrave;y sẽ đem lại cho hệ thống PC một hiệu suất ổn định v&agrave; hoạt động y&ecirc;n tĩnh nhờ nhiệt độ được đảm bảo ở mức thấp nhất.</p>\r\n\r\n<p><img alt=\"Tan Nhiet Card Man Hinh MSI RX 5600 XT GAMING X - 6GD\" height=\"511\" src=\"https://hanoicomputercdn.com/media/lib/51709_TanNhietCardManHinhMSIRX5600XTGAMINGX-6GD.png\" width=\"1650\" /></p>\r\n\r\n<h3>Đường v&acirc;n nổi bật</h3>\r\n\r\n<p>B&ecirc;n dưới tất cả c&aacute;c tấm kim loại l&agrave; c&aacute;c đường v&acirc;n bo mạch xen kẽ nhiều lớp tạo n&ecirc;n bảng mạch in ho&agrave;n chỉnh tr&ecirc;n&nbsp;MSI RX 5600 XT GAMING X - 6GD. Ch&uacute;ng kết nối tất cả c&aacute;c th&agrave;nh phần quan trọng tr&ecirc;n bo mạch v&agrave; cho ph&eacute;p giao tiếp với tốc độ cực nhanh.</p>\r\n\r\n<p><img alt=\"Bo Mach Card Man Hinh MSI RX 5600 XT GAMING X - 6GD\" height=\"773\" src=\"https://hanoicomputercdn.com/media/lib/51709_BoMachCardManHinhMSIRX5600XTGAMINGX-6GD.jpg\" width=\"1650\" /></p>\r\n\r\n<h3>Trải nghiệm chơi game tối đa</h3>\r\n\r\n<p>Tận dụng tối đa&nbsp;<strong><a href=\"https://www.hanoicomputer.vn/vga-card-man-hinh/c34.html\" title=\"card đồ họa\">card đồ họa</a></strong>&nbsp;MSI RX 5600 XT GAMING X - 6GD của bạn về hiệu suất xử đồ họa v&agrave; trải nghiệm c&aacute;c t&ugrave;y chọn t&ugrave;y chỉnh gần như kh&ocirc;ng giới hạn với phần mềm hỗ trợ đi k&egrave;m như: t&ugrave;y chỉnh thiết lập với Dragon Center, t&ugrave;y chỉnh &aacute;nh s&aacute;ng với Mystic Light, &eacute;p xung xử l&yacute; với MSI Afterburner...</p>\r\n\r\n<p><img alt=\"Trai Nghiem Card Man Hinh MSI RX 5600 XT GAMING X - 6GD\" height=\"773\" src=\"https://hanoicomputercdn.com/media/lib/51709_TraiNghiemCardManHinhMSIRX5600XTGAMINGX-6GD.jpg\" width=\"1650\" /></p>', 'Ji0_51709_vo_hop_card_man_hinh_msi_rx_5600_xt_gaming_x___6gd.jpg', 3, 99, 1, 5, '2020-06-11 19:30:32', '2020-06-26 03:43:43');
INSERT INTO `products` (`id`, `pro_name`, `pro_name_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_status`, `pro_hot`, `pro_description`, `pro_content`, `pro_image`, `pro_pay`, `pro_number`, `pro_number_of_reviewers`, `pro_total_star`, `created_at`, `updated_at`) VALUES
(29, 'Mainboard ASUS PRIME B365M-K', 'mainboard-asus-prime-b365m-k', 27, 1699000, NULL, 10, 1, 0, 'Bỏ quaBỏ qua', '<h2>Đặc điểm nổi bật của Mainboard ASUS PRIME B365M-K (Intel B365, Socket 1151, m-ATX, 2 khe RAM DDR4)</h2>\r\n\r\n<p>Giới thi&ecirc;̣u mainboard ASUS PRIME B365M-K</p>\r\n\r\n<p>PRIME B365M-K là chi&ecirc;́c mainboard t&acirc;̀m trung sử dụng socket 1151-v2 mới nh&acirc;́t đ&ecirc;́n từ ASUS, h&ocirc;̃ trợ các dòng CPU Intel th&ecirc;́ h&ecirc;̣ 8 và 9 của cùng với b&ocirc;̣ chipset B365 h&ocirc;̃ trợ đ&acirc;̀y đủ các linh ki&ecirc;̣n mới nh&acirc;́t hi&ecirc;̣n nay.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_1.jpg\" /></p>\r\n\r\n<p>T&acirc;́t cả các mainboard của ASUS trước khi xu&acirc;́t xưởng đ&ecirc;̀u được trải qua quy trình ki&ecirc;̉m định ch&acirc;́t lượng chặt chẽ, từ nhi&ecirc;̣t đ&ocirc;̣ hoạt đ&ocirc;̣ng, tác đ&ocirc;̣ng của đ&ocirc;̣ &acirc;̉m, tác đ&ocirc;̣ng v&acirc;̣t lý, chạy thử...... nhằm đem lại trải nghi&ecirc;̣m sử dụng t&ocirc;́t nh&acirc;́t tới tay người dùng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_2.jpg\" /></p>\r\n\r\n<p>Tr&ecirc;n ASUS PRIME B365M-K là ch&acirc;n mở r&ocirc;̣ng h&ocirc;̃ trợ 2 c&ocirc;̉ng USB 3.1 Gen 1 5Gb/s ra mặt trước của case, đảm bảo k&ecirc;́t n&ocirc;́i &ocirc;̉n định đ&ocirc;́i với các thi&ecirc;́t bị ngoại vi y&ecirc;u c&acirc;̀u t&ocirc;́c đ&ocirc;̣ k&ecirc;́t n&ocirc;́i cao.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_3.jpg\" /></p>\r\n\r\n<p>V&ecirc;̀ lưu trữ, PRIME B365M-K được trang bị 1 khe cắm M.2 với t&ocirc;́c đ&ocirc;̣ t&ocirc;́i đa l&ecirc;n tới 32Gb/s, sẵn sàng h&ocirc;̃ trợ &ocirc;̉ cứng NVMe t&ocirc;́c đ&ocirc;̣ cao khi có y&ecirc;u c&acirc;̀u từ người dùng. Kh&ocirc;ng những v&acirc;̣y, khe cắm M.2 này còn h&ocirc;̃ trợ b&ocirc;̣ nhớ Intel Optane giúp tăng t&ocirc;́c đ&ocirc;̣ truy xu&acirc;́t dữ li&ecirc;̣u bằng cách di chuy&ecirc;̉n các dữ li&ecirc;̣u hay sử dụng từ &ocirc;̉ cứng SATA sang b&ocirc;̣ nhớ Intel Optane.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_4.jpg\" /></p>\r\n\r\n<p>Được trang bị 2 ch&acirc;n 4pin (PWM) và 3 cảm bi&ecirc;́n nhi&ecirc;̣t đ&ocirc;̣, người dùng có th&ecirc;̉ y&ecirc;n t&acirc;m v&ecirc;̀ vi&ecirc;̣c đi&ecirc;̀u chỉnh quạt làm mát và theo dõi nhi&ecirc;̣t đ&ocirc;̣ của h&ecirc;̣ th&ocirc;́ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_5.jpg\" /></p>\r\n\r\n<p>Sử dụng b&ocirc;̣ giãi mã &acirc;m thanh ALC887 của Realtek, k&ecirc;́t hợp với thi&ecirc;́t k&ecirc;́ mạch xử lý &acirc;m thanh t&ocirc;́i ưu và được tách bi&ecirc;̣t hoàn toàn so với ph&acirc;̀n còn lại của bo mạch, giúp đảm bảo tín hi&ecirc;̣u &acirc;m thanh lu&ocirc;n ở trạng thái &ocirc;̉n định nh&acirc;́t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_6.jpg\" /></p>\r\n\r\n<p>ASUS PRIME B365M-K đi kèm với giao di&ecirc;̣n BIOS UEFI th&acirc;n thi&ecirc;̣n, giúp người sử dụng có th&ecirc;̉ đi&ecirc;̀u chỉnh h&ecirc;̣ th&ocirc;́ng theo ý mình m&ocirc;̣t cách hi&ecirc;̣u quả nh&acirc;́t th&ocirc;ng qua 2 ch&ecirc;́ đ&ocirc;̣ EZ mode và Advance mode.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/45499_mainboard-asus-b365m-k_7.jpg\" /></p>', 'feS_45499_mainboard_asus_b365m_k_0005_6.jpg', 1, 100, 1, 5, '2020-06-20 01:01:11', '2020-06-23 11:27:28'),
(30, 'Mainboard GIGABYTE B450 AORUS PRO', 'mainboard-gigabyte-b450-aorus-pro', 27, 3199000, NULL, 10, 1, 0, 'Bỏ quaBỏ qua', '<p>Chưa c&oacute; nhiều th&ocirc;ng tin !!!</p>', 'F64_43782_mainboard_gigabyte_b450_aorus_pro_0000_1.jpg', 0, 100, 0, 0, '2020-06-20 01:07:07', '2020-06-23 00:49:32'),
(31, 'Mainboard GIGABYTE A320M-S2H', 'mainboard-gigabyte-a320m-s2h', 27, 1499000, NULL, 0, 1, 0, 'Bỏ qua', '<p>Chưa c&oacute; nhiều th&ocirc;ng tin</p>', 'kMV_44458_mainboard_gigabyte_a320m_s2h_0001_2.jpg', 1, 99, 1, 5, '2020-06-20 01:09:26', '2020-06-26 03:43:19'),
(32, 'Mainboard ASUS EX-B460M-V5', 'mainboard-asus-ex-b460m-v5', 27, 2199000, NULL, 0, 1, 0, 'Bỏ qua', '<p>Chưa c&oacute; nhiều th&ocirc;ng tin !!!</p>', 'X0l_52871_ex_b460m_v5_01.jpg', 0, 102, 1, 5, '2020-06-20 01:11:04', '2020-06-24 07:27:40'),
(33, 'Mainboard GIGABYTE B450M-Gaming', 'mainboard-gigabyte-b450m-gaming', 27, 1699000, NULL, 0, 1, 0, 'Bỏ qua', '<p>Chưa c&oacute; nhiều th&ocirc;ng tin !!!</p>', 'GFa_44459_mainboard_gigabyte_b450m_gaming_0000_20190131151052345017b456c76bbcab49d74b18210fd1f5_src.jpg', 1, 89, 1, 5, '2020-06-20 01:12:53', '2020-06-26 05:24:20'),
(34, 'GIGABYTE RTX 2070 Super AORUS-8G', 'gigabyte-rtx-2070-super-aorus-8g', 26, 16399000, NULL, 0, 1, 0, 'Bỏ qua', '<h3>Giới thiệu VGA&nbsp;GIGABYTE RTX 2070 Super AORUS - 8GC</h3>\r\n\r\n<h3>Thiết kế mạnh mẽ, c&aacute; t&iacute;nh</h3>\r\n\r\n<p>VGA Gigabyte AORUS RTX 2070 SUPER 8G l&agrave; card đ&ocirc;̀ họa c&acirc;̣n cao c&acirc;́p mới của GIGABYTE, sử dụng b&ocirc;̣ xử lý đ&ocirc;̀ họa GeForce RTX 2070 mạnh mẽ với nhi&ecirc;̀u c&ocirc;ng ngh&ecirc;̣ mới như DLSS, Ray tracing, VRS đem lại trải nghi&ecirc;̣m chơi game mượt mà và ch&acirc;n thực nh&acirc;́t.</p>\r\n\r\n<p>Thi&ecirc;́t k&ecirc;́ của AORUS RTX 2070 SUPER 8G được l&acirc;́y ý tưởng từ đ&ocirc;i cánh của chim ưng với các đường nét góc cạnh, sắc bén và cứng cáp dem lại cái nhìn đ&ocirc;̣c đáo, c&aacute; t&iacute;nh mạnh mẽ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-1.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>Tản nhiệt hiệu quả</h3>\r\n\r\n<p>Card màn hình với h&ecirc;̣ th&ocirc;́ng tản nhi&ecirc;̣t đ&ocirc;̀ s&ocirc;̣, đảm bảo ti&ecirc;́p xúc với toàn b&ocirc;̣ linh ki&ecirc;̣n quan trọng b&ecirc;n dưới như b&ocirc;̣ nhớ, b&ocirc;̣ xử lý đ&ocirc;̀ họa, b&ocirc;̣ c&acirc;́p ngu&ocirc;̀n, đi kèm với 3 quạt làm mát lớn có kích thước 100mm t&ocirc;́i ưu lu&ocirc;̀ng gió t&ocirc;́i ưu th&ocirc;̉i xu&ocirc;́ng tản nhi&ecirc;̣t. Gigabyte thi&ecirc;́t k&ecirc;́ cho chi&ecirc;́c quạt làm mát ở giữa quay theo hướng ngược lại so với 2 chi&ecirc;́c quạt ở phía ngoài. Đi&ecirc;̀u này giúp ngăn chặn hi&ecirc;̣n tượng đứng gió thường gặp phải ở trường hợp đặt 2 chi&ecirc;́c quạt làm mát quay cùng chi&ecirc;̀u cạnh nhau, làm suy giảm lực ép của lu&ocirc;̀ng khí xu&ocirc;́ng tản nhi&ecirc;̣t khá nhi&ecirc;̀u.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-2.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Kh&ocirc;ng chỉ dựa vào thi&ecirc;́t k&ecirc;́ hướng gió th&ocirc;ng minh, mà m&ocirc;̃i chi&ecirc;́c quạt làm tr&ecirc;n AORUS RTX 2070 SUPER 8G đ&ecirc;̀u có thi&ecirc;́t k&ecirc;́ cánh quạt giúp tăng lưu lượng và lực ép của kh&ocirc;ng khí đi qua quạt làm mát, đem lại lu&ocirc;̀ng gió t&ocirc;́i ưu hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-3.jpg\" width=\"100%\" /></p>\r\n\r\n<p>Đ&ecirc;̉ c&acirc;n bằng hi&ecirc;̣u năng tản nhi&ecirc;̣t, toàn b&ocirc;̣ quạt làm mát sẽ được dừng lại đ&ecirc;̉ đảm bảo tu&ocirc;̉i thọ hoạt đ&ocirc;̣ng cũng như đ&ocirc;̣ &ocirc;̀n khi được sử dụng với các tác vụ nhẹ nhàng. Lớp tản nhi&ecirc;̣t của&nbsp;AORUS RTX 2070 SUPER 8G được thi&ecirc;́t k&ecirc;́ tỉ mỉ với c&aacute;c &ocirc;́ng d&acirc;̃n nhi&ecirc;̣t bằng đ&ocirc;̀ng nguy&ecirc;n ch&acirc;́t lớn và mặt đ&ecirc;́ có di&ecirc;̣n tích lớn ti&ecirc;́p xúc trực ti&ecirc;́p với các linh ki&ecirc;̣n quan trọng b&ecirc;n dưới, đảm bảo khả năng d&acirc;̃n nhi&ecirc;̣t lu&ocirc;n đạt hi&ecirc;̣u năng t&ocirc;́i ưu nh&acirc;́t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-4.jpg\" width=\"100%\" /></p>\r\n\r\n<p>B&ecirc;n trong m&ocirc;̃i ống d&acirc;̃n nhi&ecirc;̣t là dung dịch làm mát và hợp ch&acirc;́t d&acirc;̃n nhi&ecirc;̣t giúp cho càng giúp cho vi&ecirc;̣c d&acirc;̃n nhi&ecirc;̣t tới các lá nh&ocirc;m tản nhi&ecirc;̣t nhanh hơn r&acirc;́t nhi&ecirc;̀u.</p>\r\n\r\n<p>Ngoài ra, AORUS RTX 2070 SUPER 8G còn được trang bị th&ecirc;m m&ocirc;̣t t&acirc;́m &quot;back plate&quot; nhằm tăng đ&ocirc;̣ cứng cáp cũng như bảo v&ecirc;̣ bo mạch khỏi các tác đ&ocirc;̣ng ngoài ý mu&ocirc;́n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-5.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>Thi&ecirc;́t k&ecirc;́ mạch và b&ocirc;̣ c&acirc;́p ngu&ocirc;̀n</h3>\r\n\r\n<p>Toàn b&ocirc;̣ b&ecirc;̀ mặt bo mạch của AORUS RTX 2070 SUPER 8G được phủ m&ocirc;̣t lớp bảo v&ecirc;̣, giúp ngăn ngừa bụi, ăn mòn, đ&ocirc;̣ &acirc;̉m đ&ocirc;̀ng thời giảm thi&ecirc;̉u thi&ecirc;̣t hại g&acirc;y ra trong các tình hu&ocirc;́ng v&ocirc; tình va chạm với các thi&ecirc;́t bị khác.</p>\r\n\r\n<p>Kh&ocirc;ng những v&acirc;̣y AORUS RTX 2070 SUPER 8G được sản xu&acirc;́t hoàn toàn tr&ecirc;n d&acirc;y chuy&ecirc;̀n tự đ&ocirc;̣ng của GIGABYTE, nhằm đem lại sự chính xác trong các chi ti&ecirc;́t được gia c&ocirc;ng đ&ocirc;̀ng thời giúp cho vi&ecirc;̣c c&acirc;̀m tr&ecirc;n tay trở n&ecirc;n d&ecirc;̃ dàng hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-6.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>Hiệu năng ổn định</h3>\r\n\r\n<p>AORUS RTX 2070 SUPER 8G sử dụng h&ecirc;̣ th&ocirc;́ng c&acirc;́p ngu&ocirc;̀n l&ecirc;n tới 10+2 &quot;phase&quot; đem lại khả năng hoạt đ&ocirc;̣ng &ocirc;̉n định và nhi&ecirc;̣t đ&ocirc;̣ th&acirc;́p cho dàn &quot;mosfet&quot;, đ&ocirc;̀ng thời đảm bảo cung c&acirc;́p dòng đi&ecirc;̣n &ocirc;̉n định cho vi&ecirc;̣c ép xung.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-7.jpg\" width=\"100%\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đó, tr&ecirc;n hai đ&acirc;̀u c&acirc;́p ngu&ocirc;̀n của AORUS RTX 2070 SUPER 8G là hai bóng LED th&ocirc;ng báo trạng thái dòng đi&ecirc;̣n đ&acirc;̀u vào. Với đèn sáng tức là ngu&ocirc;̀n phụ chưa được k&ecirc;́t n&ocirc;́i, đèn tắt tức là dòng đi&ecirc;̣n đang ở trạn thái &ocirc;̉n định và nh&acirc;́p nháy báo hi&ecirc;̣u dòng đi&ecirc;̣n đ&acirc;̀u vào đang gặp sự c&ocirc;́.</p>\r\n\r\n<h3>K&ecirc;́t n&ocirc;́i đa dạng</h3>\r\n\r\n<p>AORUS RTX 2070 SUPER 8G được trang bị th&ecirc;m 2 c&ocirc;̉ng HDMI n&acirc;ng t&ocirc;̉ng s&ocirc;́ c&ocirc;̉ng cắm l&ecirc;n tới 7 c&ocirc;̉ng (3 DisplayPort, 3 HDMI và 1 USB Type C) giúp cho người sử dụng thoải thi&ecirc;́t l&acirc;̣p s&ocirc;́ lượng màn hình theo ý mu&ocirc;́n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-8.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>RGB c&aacute; nh&acirc;n h&oacute;a</h3>\r\n\r\n<p>VGA Gigabyte AORUS RTX 2070 SUPER 8G được trang bị h&ecirc;̣ th&ocirc;́ng ánh sáng RGB với khả năng hi&ecirc;̉n thị 16.7 tri&ecirc;̣u màu, có khả năng đ&ocirc;̀ng b&ocirc;̣ với các thi&ecirc;́t bị AORUS khác th&ocirc;ng qua b&ocirc;̣ ph&acirc;̀n m&ecirc;̀m RGB Fusion 2.0.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-9.jpg\" width=\"100%\" /></p>\r\n\r\n<h3>Ph&acirc;̀n m&ecirc;̀m AORUS Engine</h3>\r\n\r\n<p>AORUS RTX 2070 SUPER 8G được h&ocirc;̃ trợ bởi ph&acirc;̀n mềm AORUS Engine, cho phép người sử dụng có th&ecirc;̉ theo dõi, tùy chỉnh cũng như ép xung ph&acirc;̀n cứng theo ý thích cũng như y&ecirc;u c&acirc;̀u sử dụng của mình.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/47495_GIGABYTE-RTX-2070-Super-AORUS-8GC-10.jpg\" width=\"100%\" /></p>', 'JHQ_47495_gigabyte_rtx_2070_super_aorus_1.jpg', 0, 0, 0, 0, '2020-06-24 11:07:20', '2020-06-24 11:07:20'),
(37, 'GIGABYTE GTX 1660 Super OC-6G', 'gigabyte-gtx-1660-super-oc-6g', 26, 5899000, NULL, 5, 1, 0, 'Bỏ qua', '<p>GTX 1660 Super 6GB GDDR5 OC là chi&ecirc;́c&nbsp;<a href=\"https://www.hanoicomputer.vn/vga-card-man-hinh/c34.html\" title=\"card đồ họa\">card đ&ocirc;̀ họa</a>&nbsp;t&acirc;̀m trung mới nh&acirc;́t đ&ecirc;́n từ GIGABYTE, sử dụng b&ocirc;̣ xử lý đ&ocirc;̀ họa GTX 1660 mạnh mẽ, với hi&ecirc;̣u năng vượt tr&ocirc;̣i hơn th&ecirc;́ h&ecirc;̣ đàn anh GTX 1060 và là đ&ocirc;́i thủ cạnh tranh trực ti&ecirc;́p với b&ocirc;̣&nbsp;<a href=\"https://www.hanoicomputer.vn/vga-card-gigabyte-rx580-gaming-8gd-mi/p47241.html\" target=\"_blank\" title=\"RX 580\">RX 580</a>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-1.jpg\" /></p>\r\n\r\n<h3>Thi&ecirc;́t k&ecirc;́</h3>\r\n\r\n<p><strong>GTX 1660 Super</strong>&nbsp;6GB GDDR5 OC có hi&ecirc;̣u năng tản nhi&ecirc;̣t r&acirc;́t t&ocirc;́t nhờ vào thi&ecirc;́t k&ecirc;́ tản nhi&ecirc;̣t của GIGABYTE, k&ecirc;́t hợp với vi&ecirc;̣c sử dụng ki&ecirc;́n trúc Turing, đem lại m&ocirc;̣t chi&ecirc;́c card đ&ocirc;̀ họa có hi&ecirc;̣u năng chơi game xu&acirc;́t sắc tr&ecirc;n đ&ocirc;̣ ph&acirc;n giải 1080p với mức c&ocirc;ng su&acirc;́t ti&ecirc;u thụ và nhi&ecirc;̣t đ&ocirc;̣ hoạt đ&ocirc;̣ng th&acirc;́p.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-2.jpg\" /></p>\r\n\r\n<p>M&ocirc;̣t đi&ecirc;̉m n&ocirc;̉i b&acirc;̣t của GIGABYTE GTX 1660 Super&nbsp;6GB GDDR5 OC là t&acirc;́m &quot;back plate&quot; ở ph&acirc;̀n mặt sau của card, vừa giúp tăng đ&ocirc;̣ cứng cáp cho bo mạch vừa tăng tính th&acirc;̉m mỹ trong thi&ecirc;́t k&ecirc;́.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-3.jpg\" /></p>\r\n\r\n<h3>Tản nhi&ecirc;̣t</h3>\r\n\r\n<p>GIGABYTE GTX 1660 Super&nbsp;6GB GDDR5 OC có thi&ecirc;́t k&ecirc;́ quạt tản nhi&ecirc;̣t khá đặc bi&ecirc;̣t, với hướng chuy&ecirc;̉n đ&ocirc;̣ng ngược chi&ecirc;̀u nhau loại bỏ hi&ecirc;̣n tượng nhi&ecirc;̃u loạn kh&ocirc;ng khí b&ecirc;n tr&ecirc;n tản nhi&ecirc;̣t giúp cải thi&ecirc;̣n hi&ecirc;̣u năng tản nhi&ecirc;̣t đáng k&ecirc;̉.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-4.jpg\" /></p>\r\n\r\n<p>Với vi&ecirc;̣c sử dụng b&ocirc;̣ xử lý đ&ocirc;̣ họa t&acirc;̀m trung có c&ocirc;ng su&acirc;́t th&acirc;́p như GTX 1660, chi&ecirc;́c card đ&ocirc;̀ họa này có th&ecirc;̉ hoạt đ&ocirc;̣ng hoàn toàn &ocirc;̉n định ngay cả khi sử dụng tản nhi&ecirc;̣t có kích thước nhỏ gọn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-5.jpg\" /></p>\r\n\r\n<h3>B&ocirc;̣ c&acirc;́p ngu&ocirc;̀n</h3>\r\n\r\n<p>Dựa tr&ecirc;n thi&ecirc;́t k&ecirc;́ nguy&ecirc;n bản của GTX 1660, các kĩ sư của GIGABYTE đã thi&ecirc;́t k&ecirc;́ lại&nbsp;<strong>GTX 1660 Super&nbsp;6GB GDDR5 OC</strong>&nbsp;với b&ocirc;̣ c&acirc;́p ngu&ocirc;̀n 4+2 &quot;phase&quot; so với 3+1 &quot;phase&quot; tr&ecirc;n thi&ecirc;́t k&ecirc;́ của NVIDIA, giúp cải thi&ecirc;̣n khả năng c&acirc;́p ngu&ocirc;̀n và tu&ocirc;̉i thọ của card.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-6.jpg\" /></p>\r\n\r\n<h3>Ph&acirc;̀n m&ecirc;̀m</h3>\r\n\r\n<p>Game thủ hoàn toàn có th&ecirc;̉ tùy chỉnh, ép xung GIGABYTE&nbsp;<strong>GTX 1660 Super&nbsp;6GB GDDR5 OC</strong>&nbsp;th&ocirc;ng qua b&ocirc;̣ ph&acirc;̀n m&ecirc;̀m AORUS Engine đ&ecirc;̉ có được hi&ecirc;̣u năng t&ocirc;́t nh&acirc;́t m&ocirc;̣t cách cực kì d&ecirc;̃ dàng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/49667_Card-mn-hnh-Gigabyte-GTX-1660-Super-O6C-7.jpg\" /></p>\r\n\r\n<p><a href=\"javascript:void(0)\">Thu gọn&nbsp;</a></p>\r\n\r\n<p>Video</p>', 'TOJ_49667_gigabyte_1660_super_oc.png', 0, 0, 0, 0, '2020-06-26 11:58:07', '2020-06-26 11:58:07'),
(38, 'ASUS ROG STRIX RX 5600 XT-O6G GAMING', 'asus-rog-strix-rx-5600-xt-o6g-gaming', 26, 8599000, NULL, 5, 1, 0, 'Bỏ qua', '<h2>Đặc điểm nổi bật của Card m&agrave;n h&igrave;nh ASUS ROG STRIX RX 5600 XT-O6G GAMING (6GB GDDR6, 192-bit,HDMI+DP, 1x6-pin + 1x8-pin)</h2>\r\n\r\n<h3><strong>Giới thiệu&nbsp;VGA ASUS</strong><strong>&nbsp;</strong><strong>ROG-STRIX-RX5600XT-O6G-GAMING</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"https://hanoicomputercdn.com/media/product/51851_asus_radeon_rx_5600_xt_rog_strix_top_packs_14gbps_gddr6_2.jpg\" width=\"100%\" /></strong></p>\r\n\r\n<h3><strong>Khả năng l&agrave;m m&aacute;t</strong></h3>\r\n\r\n<p>Thiết kế quạt hướng trục</p>\r\n\r\n<p>C&ocirc;ng nghệ 0dB&nbsp;cho ph&eacute;p bạn thưởng thức c&aacute;c game nhẹ ở trạng th&aacute;i tương đối tĩnh lặng.</p>\r\n\r\n<p>C&ocirc;ng tắc&nbsp;<strong>BIOS k&eacute;p</strong>&nbsp;cho ph&eacute;p bạn chuyển đổi giữa c&aacute;c thiết lập Quiet v&agrave; Performance BIOS</p>\r\n\r\n<p>Thiết kế 2,7 khe với độ d&agrave;y 2.7 để c&oacute; thể chứa được một bộ tản nhiệt lớn hơn v&igrave; tản nhiệt c&agrave;ng lớn c&agrave;ng tốt hơn.&nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_Explode.png\" />&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ Auto-Extreme</strong></h3>\r\n\r\n<p>Được sản xuất bằng c&ocirc;ng nghệ Auto-Extreme- quy tr&igrave;nh sản xuất tự động h&oacute;a đề ra những ti&ecirc;u chuẩn mới trong ng&agrave;nh c&ocirc;ng nghiệp, giảm được biến dạng do nhiệt l&ecirc;n c&aacute;c linh kiện v&agrave; tr&aacute;nh được phải sử dụng c&aacute;c h&oacute;a chất tẩy rửa mạnh&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_asus-auto-extreme-technology.jpg\" />&nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<h3>GPU Tweak II</h3>\r\n\r\n<p>Tiện &iacute;ch ASUS GPU Tweak II hỗ trợ điều chỉnh hiệu năng card đồ họa v&agrave; n&acirc;ng l&ecirc;n một đẳng cấp mới. Tiện &iacute;ch n&agrave;y cho ph&eacute;p bạn tinh chỉnh c&aacute;c tham số quan trọng bao gồm c&aacute;c thiết lập xung l&otilde;i GPU, tần suất bộ nhớ, điện &aacute;p,...</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_product-gpu-TweakII.png\" /></p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ MaxContact</strong></h3>\r\n\r\n<p>MaxContact l&agrave; một c&ocirc;ng nghệ đầu ng&agrave;nh ứng dụng gia c&ocirc;ng ch&iacute;nh x&aacute;c để tạo một bề mặt tản nhiệt tiếp x&uacute;c nhiều hơn 2 lần với chip GPU, gi&uacute;p cải thiện truyền nhiệt.&nbsp; &nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_cooling-pic4.jpg\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<h3><strong>Điều khiển quạt th&ocirc;ng minh</strong></h3>\r\n\r\n<p>ASUS FanConnect II c&oacute; hai đầu cắm 4 ch&acirc;n điều khiển kết hợp được kết nối với c&aacute;c quạt hệ thống PWM v&agrave; DC để l&agrave;m m&aacute;t hệ thống tối ưu. C&aacute;c quạt được kết nối phản ứng với nhiệt độ của GPU v&agrave; CPU để hệ thống của bạn được l&agrave;m m&aacute;t tối ưu bất kể bạn l&agrave;m g&igrave;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>AMD Radeon FreeSync&nbsp;&trade;</h3>\r\n\r\n<p>Trải nghiệm chơi game kh&ocirc;ng bị r&aacute;ch, kh&ocirc;ng bị r&aacute;ch với c&ocirc;ng nghệ AMD Radeon FreeSync &trade;&nbsp;<sup>1</sup>&nbsp;v&agrave; FreeSync &trade; 2 HDR&nbsp;<sup>2</sup>&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_amd_radeon_freesync_on.png\" /></p>\r\n\r\n<h3><strong>Aura Sync</strong></h3>\r\n\r\n<p>Trang bị phần mềm Aura Sync để kết nối c&aacute;c sản phẩm tương th&iacute;ch, gi&uacute;p c&agrave;i đặt t&ugrave;y chỉnh game được ho&agrave;n to&agrave;n. Bạn c&oacute; thể đồng bộ với nhạc, thay m&agrave;u dựa tr&ecirc;n nhiệt độ hoặc chọn từ một số lượng mẫu v&agrave; t&ugrave;y chọn m&agrave;u tĩnh lớn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://hanoicomputercdn.com/media/lib/51851_Aura-Sync.png\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', 'X4q_51851_asus_radeon_rx_5600_xt_rog_strix_top_packs_14gbps_gddr6_2.jpg', 0, 0, 0, 0, '2020-06-26 12:00:57', '2020-06-26 12:00:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `pa_product_id` int(10) UNSIGNED DEFAULT NULL,
  `pa_attribute_value_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `pa_product_id`, `pa_attribute_value_id`, `created_at`, `updated_at`) VALUES
(57, 19, 54, '2020-06-11 18:26:56', '2020-06-11 18:26:56'),
(58, 19, 55, '2020-06-11 18:26:56', '2020-06-11 18:26:56'),
(59, 19, 56, '2020-06-11 18:26:56', '2020-06-11 18:26:56'),
(60, 19, 57, '2020-06-11 18:26:56', '2020-06-11 18:26:56'),
(61, 20, 54, '2020-06-11 18:45:21', '2020-06-11 18:45:21'),
(62, 20, 55, '2020-06-11 18:45:21', '2020-06-11 18:45:21'),
(63, 20, 56, '2020-06-11 18:45:21', '2020-06-11 18:45:21'),
(64, 20, 58, '2020-06-11 18:45:21', '2020-06-11 18:45:21'),
(65, 21, 59, '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(66, 21, 60, '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(67, 21, 61, '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(68, 21, 58, '2020-06-11 18:52:24', '2020-06-11 18:52:24'),
(77, 24, 68, '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(78, 24, 69, '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(79, 24, 70, '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(80, 24, 71, '2020-06-11 19:06:51', '2020-06-11 19:06:51'),
(85, 23, 65, '2020-06-11 19:09:42', '2020-06-11 19:09:42'),
(86, 23, 66, '2020-06-11 19:09:42', '2020-06-11 19:09:42'),
(87, 23, 67, '2020-06-11 19:09:42', '2020-06-11 19:09:42'),
(88, 23, 58, '2020-06-11 19:09:42', '2020-06-11 19:09:42'),
(89, 25, 72, '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(90, 25, 69, '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(91, 25, 73, '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(92, 25, 74, '2020-06-11 19:11:54', '2020-06-11 19:11:54'),
(93, 26, 68, '2020-06-11 19:14:01', '2020-06-11 19:14:01'),
(94, 26, 69, '2020-06-11 19:14:01', '2020-06-11 19:14:01'),
(95, 26, 73, '2020-06-11 19:14:01', '2020-06-11 19:14:01'),
(96, 26, 75, '2020-06-11 19:14:01', '2020-06-11 19:14:01'),
(97, 27, 76, '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(98, 27, 69, '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(99, 27, 70, '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(100, 27, 77, '2020-06-11 19:16:28', '2020-06-11 19:16:28'),
(109, 28, 68, '2020-06-18 10:15:04', '2020-06-18 10:15:04'),
(110, 28, 78, '2020-06-18 10:15:04', '2020-06-18 10:15:04'),
(111, 28, 73, '2020-06-18 10:15:04', '2020-06-18 10:15:04'),
(115, 29, 81, '2020-06-20 01:03:31', '2020-06-20 01:03:31'),
(116, 29, 82, '2020-06-20 01:03:31', '2020-06-20 01:03:31'),
(119, 31, 85, '2020-06-20 01:09:26', '2020-06-20 01:09:26'),
(120, 31, 82, '2020-06-20 01:09:26', '2020-06-20 01:09:26'),
(121, 32, 86, '2020-06-20 01:11:04', '2020-06-20 01:11:04'),
(122, 32, 82, '2020-06-20 01:11:04', '2020-06-20 01:11:04'),
(123, 33, 87, '2020-06-20 01:12:54', '2020-06-20 01:12:54'),
(124, 33, 82, '2020-06-20 01:12:54', '2020-06-20 01:12:54'),
(125, 30, 83, '2020-06-23 00:49:32', '2020-06-23 00:49:32'),
(126, 30, 88, '2020-06-23 00:49:32', '2020-06-23 00:49:32'),
(127, 34, 89, '2020-06-24 11:07:20', '2020-06-24 11:07:20'),
(128, 34, 69, '2020-06-24 11:07:20', '2020-06-24 11:07:20'),
(129, 34, 73, '2020-06-24 11:07:20', '2020-06-24 11:07:20'),
(138, 22, 62, '2020-06-25 04:49:45', '2020-06-25 04:49:45'),
(139, 22, 63, '2020-06-25 04:49:45', '2020-06-25 04:49:45'),
(140, 22, 64, '2020-06-25 04:49:45', '2020-06-25 04:49:45'),
(141, 22, 57, '2020-06-25 04:49:45', '2020-06-25 04:49:45'),
(145, 37, 89, '2020-06-26 11:58:07', '2020-06-26 11:58:07'),
(146, 37, 90, '2020-06-26 11:58:07', '2020-06-26 11:58:07'),
(147, 37, 73, '2020-06-26 11:58:07', '2020-06-26 11:58:07'),
(148, 38, 72, '2020-06-26 12:00:57', '2020-06-26 12:00:57'),
(149, 38, 90, '2020-06-26 12:00:57', '2020-06-26 12:00:57'),
(150, 38, 73, '2020-06-26 12:00:57', '2020-06-26 12:00:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_product_id` int(10) UNSIGNED DEFAULT NULL,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `ra_product_id`, `ra_number`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(14, 22, 4, 'Chất lượng tốt !! Nhưng giá hơi cao', 5, '2021-12-12 02:25:03', '2021-12-12 02:25:03'),
(15, 27, 4, 'â', 7, '2021-12-12 10:00:09', '2021-12-12 10:00:09'),
(16, 24, 4, 'aaa', 1, '2021-12-18 10:17:31', '2021-12-18 10:17:31'),
(17, 32, 5, 'Sản phẩm được', 6, '2021-12-23 01:12:11', '2021-12-23 01:12:11'),
(19, 29, 5, 'aaaa', 6, '2021-12-23 02:43:53', '2021-12-23 02:43:53'),
(23, 33, 5, 'sản phẩm này rất tuyệt', 1, '2021-12-26 00:50:38', '2021-12-26 00:50:38'),
(24, 31, 5, 'aaa', 1, '2021-12-26 03:43:19', '2021-12-26 03:43:19'),
(25, 28, 5, 'aa', 1, '2021-12-26 03:43:43', '2021-12-26 03:43:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `s_name`, `s_avatar`, `s_url`, `created_at`, `updated_at`) VALUES
(7, 'Slide 2', 'dGK_05_Junad16456fc2ebd829b98169b97937ab9f.png', NULL, '2021-12-12 04:09:19', '2021-12-12 04:14:48'),
(8, 'slide 1', 'kHq_qiR_07_Feb1c15ebe667d6b08c1e6e2a71c773d523.jpg', NULL, '2021-12-12 08:51:17', '2021-12-12 08:51:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tr_total` bigint(20) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(27, 1, 38598000, '123123', 'Hà Nội', '0942674663', 2, '2021-12-11 19:42:31', '2021-12-11 19:42:43'),
(29, 1, 13538100, '1123', 'Ba vì', '0942674663', 2, '2021-12-12 02:07:35', '2021-12-13 08:40:23'),
(30, 1, 19299000, '123123', 'Hà Nội', '0942674663', 2, '2021-12-12 02:07:57', '2021-12-21 14:29:40'),
(31, 1, 2949000, '2131321', 'Hà Nội', '0942674663', 2, '2021-12-12 02:08:25', '2021-12-20 00:56:07'),
(32, 1, 12699000, '1231232', 'Thôn Vân Động Nam', '0942674663', 2, '2021-12-12 02:08:48', '2021-12-12 10:07:21'),
(33, 7, 43597000, 'Hà Nội', 'ba vì', '1', 2, '2021-12-12 10:01:37', '2021-12-12 10:07:12'),
(34, 6, 8009100, '123', 'Hà Nội', '0913752666', 2, '2021-12-23 00:46:09', '2021-12-23 00:46:17'),
(35, 6, 1529100, '111231', 'Thôn Minh Quang', '0942674663', 2, '2021-12-23 02:08:03', '2021-12-23 02:43:49'),
(38, 1, 36599000, 'aaaa', ' Tỉnh Thái Bình', '0942674663', 2, '2021-12-24 01:44:04', '2021-12-24 01:44:21'),
(39, 1, 1499000, '123123', 'Đông Anh', '0942674663', 2, '2021-12-24 11:13:48', '2021-12-24 11:13:53'),
(40, 8, 1699000, 'aaa', 'Hà Nội', '0942674663', 1, '2021-12-24 14:11:50', '2021-12-26 05:24:20'),
(41, 1, 36599000, 'trung', ' Xã Vũ Lạc', '0942674663', 0, '2021-12-25 04:48:53', '2021-12-25 04:48:53'),
(42, 1, 29279200, '12312', 'Thôn Vân Động Nam,  Tỉnh Thái Bình', '0942674663', 0, '2021-12-25 04:50:07', '2021-12-25 04:50:07'),
(43, 1, 1699000, 'trung', 'Hòa Bình', '0942674663', 2, '2021-12-26 00:44:19', '2021-12-26 00:48:59'),
(44, 1, 2580000, 'aaaaaa', 'Bắc Ninh', '0942674663', 0, '2021-12-26 03:42:39', '2021-12-26 03:42:39'),
(45, 1, 10999000, 'Cần mua', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '0942674663', 0, '2021-12-26 05:19:55', '2021-12-26 05:19:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `avatar`, `role`, `code`, `time_code`) VALUES
(1, 'Ngô Long', 'long1234@gmail.com', NULL, '$2y$10$piIAQvkWeuG32y1YK5GHU.ICYQnKBv1rrMaa2lKd9xQaUf.lW1ScS', NULL, '2022-01-05 06:41:31', '2022-01-06 15:59:32', '03922422012', NULL, 0, NULL, '2022-01-10 03:37:40'),
(2, 'Ngô Đình Long', 'longdinhngo98@gmail.com', NULL, '$2y$10$OiNYfMmLXVb3wPsawU5Zwe.9/auLQgUex0.OV1lCsv7dXNxp5r4F2', NULL, '2022-01-13 11:27:33', '2022-01-13 11:27:33', '0392242010', NULL, 1, '$2a$12$m4wXjQJFJtNQI7fx/o15.egWg/n71vHd7ICWYBo699/ZVfFTAeI4u', '2022-01-12 03:37:40'),
(3, 'Nguyễn Trang', 'trang98@gmail.com', NULL, '$2a$12$3zNbkZ0bwGaSyUTcMZMoI.wjezxPUig0VyRCaxd95pInQINuAep6C', NULL, '2022-01-05 07:40:42', '2022-01-13 11:19:23', '0913752662', NULL, 0, NULL, NULL),
(5, 'Đức Trưởng', 'truong@gmail.com', NULL, '$2y$10$m9.UPffMrxLZIaHZGkffwOFFyybBzhFKhNHBgBlR8xqORfi5IA2NG', NULL, '2022-01-06 08:04:27', '2022-01-07 02:24:46', '0964277131', NULL, 0, NULL, NULL),
(6, 'khách 1', 'khach1@gmail.com', NULL, '$2y$10$41TaQRRVXy7HDAw9lTKsvuoxGnpWgYhfRqdQ0syJGZaF1BOcffS8S', NULL, '2022-01-06 20:55:11', '2022-01-07 17:00:00', '0913752662', NULL, 0, NULL, NULL),
(7, 'khách 2', 'khach2@gmail.com', NULL, '$2y$10$9XVMJE3yaU2fC/vK4.txz.Smdl7PpvCOy.K4RKQapd0jdaPhVSzPa', NULL, '2022-01-07 09:57:45', '2022-01-08 02:24:58', '097536162', NULL, 0, NULL, NULL),
(8, 'khách 3', 'khách3@gmail.com', NULL, '$2y$10$koRBHXvjctAboeMZXCqaJuuKSY2Sywqr5.SfV.w1bw2KheoV9qTBG', NULL, '2022-01-08 14:10:42', '2022-01-09 02:25:08', '09562781332', NULL, 0, NULL, NULL),
(9, 'khách 4', 'khach4@gmail.com', NULL, '$2y$10$CwOhValYR6KAawU3HSUn2.JQqCB4UDyK.1gzSTsZrzedy.s/n8Eq2', NULL, '2022-01-09 02:24:19', '2022-01-13 10:43:05', '0962457883', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouse`
--

CREATE TABLE `warehouse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wh_product_id` int(10) UNSIGNED DEFAULT NULL,
  `wh_number_import` int(11) NOT NULL,
  `time_import` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `warehouse`
--

INSERT INTO `warehouse` (`id`, `wh_product_id`, `wh_number_import`, `time_import`) VALUES
(1, 27, 1, '2022-01-09 13:41:54'),
(2, 27, 3, '2022-01-09 13:54:15'),
(3, 19, 1, '2022-01-10 05:56:04'),
(4, 19, 1, '2022-01-10 07:09:38'),
(5, 33, 1, '2022-01-11 07:26:51'),
(6, 32, 1, '2022-01-11 07:27:40'),
(7, 33, -10, '2022-01-11 09:03:02'),
(8, NULL, 20, '2022-01-12 05:34:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_author_id_foreign` (`a_author_id`);

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_at_name_unique` (`at_name`);

--
-- Chỉ mục cho bảng `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_value_atv_attribute_id_foreign` (`atv_attribute_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`);

--
-- Chỉ mục cho bảng `category_attribute`
--
ALTER TABLE `category_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_attribute_c_a_category_id_foreign` (`c_a_category_id`),
  ADD KEY `category_attribute_c_a_attribute_id_foreign` (`c_a_attribute_id`);

--
-- Chỉ mục cho bảng `favorite_product`
--
ALTER TABLE `favorite_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_product_fp_product_id_foreign` (`fp_product_id`),
  ADD KEY `favorite_product_fp_user_id_foreign` (`fp_user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nofitication`
--
ALTER TABLE `nofitication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nofitication_nof_sender_foreign` (`nof_sender`),
  ADD KEY `nofitication_nof_receiver_foreign` (`nof_receiver`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_foreign` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_foreign` (`or_product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_category_id_foreign` (`pro_category_id`),
  ADD KEY `products_pro_author_id_foreign` (`pro_author_id`);

--
-- Chỉ mục cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_pa_product_id_foreign` (`pa_product_id`),
  ADD KEY `product_attribute_pa_attribute_value_id_foreign` (`pa_attribute_value_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_foreign` (`ra_product_id`),
  ADD KEY `ratings_ra_user_id_foreign` (`ra_user_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_foreign` (`tr_user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouse_wh_product_id_foreign` (`wh_product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `category_attribute`
--
ALTER TABLE `category_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `favorite_product`
--
ALTER TABLE `favorite_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `nofitication`
--
ALTER TABLE `nofitication`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_a_author_id_foreign` FOREIGN KEY (`a_author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD CONSTRAINT `attribute_value_atv_attribute_id_foreign` FOREIGN KEY (`atv_attribute_id`) REFERENCES `attributes` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `category_attribute`
--
ALTER TABLE `category_attribute`
  ADD CONSTRAINT `category_attribute_c_a_attribute_id_foreign` FOREIGN KEY (`c_a_attribute_id`) REFERENCES `attributes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `category_attribute_c_a_category_id_foreign` FOREIGN KEY (`c_a_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `favorite_product`
--
ALTER TABLE `favorite_product`
  ADD CONSTRAINT `favorite_product_fp_product_id_foreign` FOREIGN KEY (`fp_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `favorite_product_fp_user_id_foreign` FOREIGN KEY (`fp_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `nofitication`
--
ALTER TABLE `nofitication`
  ADD CONSTRAINT `nofitication_nof_receiver_foreign` FOREIGN KEY (`nof_receiver`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `nofitication_nof_sender_foreign` FOREIGN KEY (`nof_sender`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_or_product_id_foreign` FOREIGN KEY (`or_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_or_transaction_id_foreign` FOREIGN KEY (`or_transaction_id`) REFERENCES `transactions` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_pro_author_id_foreign` FOREIGN KEY (`pro_author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_pro_category_id_foreign` FOREIGN KEY (`pro_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_pa_attribute_value_id_foreign` FOREIGN KEY (`pa_attribute_value_id`) REFERENCES `attribute_value` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_attribute_pa_product_id_foreign` FOREIGN KEY (`pa_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ra_product_id_foreign` FOREIGN KEY (`ra_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `ratings_ra_user_id_foreign` FOREIGN KEY (`ra_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_tr_user_id_foreign` FOREIGN KEY (`tr_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_wh_product_id_foreign` FOREIGN KEY (`wh_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
