/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : codeto_news

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-27 21:28:59
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `create_at` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Event', 'Event', null, null);
INSERT INTO `category` VALUES ('2', 'Social', 'Social', null, null);
INSERT INTO `category` VALUES ('3', 'Sports', 'Sport', null, null);
INSERT INTO `category` VALUES ('4', 'Education', 'Education Infomation', null, null);
INSERT INTO `category` VALUES ('5', 'Love&Care', 'Love you', null, null);
INSERT INTO `category` VALUES ('6', 'Thể Thao 12121212', 'Thông tin thể thao, cập nhật liên tục ', null, null);

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('5', 'Thuong', 'thuong123@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('6', ' Simon Ha Ha', 'simon@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('7', 'Dung', 'dung@gmail.com', null, null);
INSERT INTO `member` VALUES ('9', 'simon', 'hason61vn@gmail.com', 'admi44444n', '12');
INSERT INTO `member` VALUES ('10', 'alex', 'hason61vn@gmail.com', 'admi44444n', '12');
INSERT INTO `member` VALUES ('11', 'thuonga', 'hason61vn@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('12', 'thanh', 'thanh@gmail.conm', 'admi44444n', '12');
INSERT INTO `member` VALUES ('13', 'dfdfdf', 'hason61vn@gmail.com', 'admi44444n', '12');
INSERT INTO `member` VALUES ('14', 'hieue', 'hieu@gmail.com', 'admi44444n', '12');
INSERT INTO `member` VALUES ('15', 'sdsdsd', 'hason61vn@gmail.com', 'admi44444n', '12');
INSERT INTO `member` VALUES ('16', 'hason61vn@gmail.com', 'hason61vn@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('17', 'sdsdsd', 'hason61vn@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('18', 'Simon', 'hason61vn@gmail.com', '1222222222', '12');
INSERT INTO `member` VALUES ('19', 'Thuon', 'thuong@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('20', 'Cuong Dep Trai', 'hason61vn@gmail.com', '1234563333', '12');
INSERT INTO `member` VALUES ('21', 'dfdfdfdfdf', 'hason61vn@gmail.com', '1234563333', '12');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `author` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `create_at` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'Xuất hiện thủ khoa cả 3 khối thi', 'Đó chính là thí sinh Trần Bùi Xuân Dự, học sinh lớp 12B1, trường THPT Kim Sơn A, huyện Kim Sơn, Ninh Bình. Tổng điểm 5 môn thi của Dự là 45.03. Trong đó, Toán: 9.75, Văn: 8.25; Lí: 9.4; Hóa: 9.2; Tiếng Anh: 8.43.', 'Nghiêm Huê', '1', null, null);
INSERT INTO `news` VALUES ('2', 'Tại sao sinh viên chọn học ngôn ngữ Anh tại Hutech?', 'Ngôn ngữ Anh luôn lọt vào “top” ngành học không bao giờ lỗi thời. Việc chọn trường đào tạo ngành Ngôn ngữ Anh uy tín là khởi điểm quan trọng quyết định mức độ thành công sau này. Với nhiều ưu điểm, HUTECH đang là lựa chọn của rất nhiều sinh viên ngành Ngôn ngữ Anh.', 'HUTECH', '2', null, null);
INSERT INTO `news` VALUES ('3', 'day la title', 'day la content', 'day la author', '4', null, null);
INSERT INTO `news` VALUES ('4', 'title ', 'content ar2', 'autho2', '3', null, null);
INSERT INTO `news` VALUES ('7', 'dangvancuong', 'day la content12121', 'cuongdeptrai', '1', null, null);
INSERT INTO `news` VALUES ('8', 'dangvancuong', 'day ladfdf', 'simon', '1', null, null);
INSERT INTO `news` VALUES ('9', 'dangvancuong', 'day la content12121', 'simon', '2', null, null);
INSERT INTO `news` VALUES ('10', '', 'day la content12121', 'simon', '3', null, null);
INSERT INTO `news` VALUES ('11', '', 'day la content12121', 'simon', '2', null, null);
INSERT INTO `news` VALUES ('12', null, 'day la content12121', 'simon', '2', null, null);
INSERT INTO `news` VALUES ('13', 'Truyền thông thế giới chú ý tới các hợp đồng \"khủng\" trong chuyến thăm của Tổng thống Pháp', 'Các hãng thông tấn lớn trên thế giới đã đồng loạt đăng tải thông tin về chuyến thăm Việt Nam của Tổng thống Pháp Francois Hollande, trong đó đặc biệt chú ý tới mối quan hệ kinh tế giữa hai nước và các hợp đồng mua 40 máy bay Airbus trị giá 6,5 tỷ USD được ký kết ngày 6/9.', 'An Bình', '5', null, null);
INSERT INTO `news` VALUES ('14', 'Marion Cotillard chính thức lên tiếng chuyện dan díu với Brad Pitt và có thai', '<p>Sau khi truyền th&ocirc;ng tung ra nhiều&nbsp;<a href=\"http://kenh14.vn/bi-to-la-ke-thu-ba-xen-vao-brad-pitt-va-angelina-jolie-marion-cotillard-cam-thay-the-nao-20160921074339626.chn\" target=\"_blank\">tin đồn Marion Cotillard l&agrave; &quot;kẻ thứ ba&quot;</a>&nbsp;xen v&agrave;o cuộc h&ocirc;n nh&acirc;n của Brad Pitt v&agrave; Angelina Jolie, nữ minh tinh người Ph&aacute;p đ&atilde; ch&iacute;nh thức l&ecirc;n tiếng về chuyện n&agrave;y tr&ecirc;n Instagram. Đồng thời, c&ocirc; cũng x&aacute;c nhận m&igrave;nh đang mang thai đứa con thứ hai với bạn trai - Guillaume Canet.</p>\r\n\r\n<p>Ng&ocirc;i sao đoạt giải Oscar ghi: &quot;Đ&acirc;y sẽ l&agrave; phản ứng đầu ti&ecirc;n v&agrave; duy nhất của t&ocirc;i về c&aacute;i tin tức lan truyền c&aacute;ch đ&acirc;y 24 giờ v&agrave; t&ocirc;i đ&atilde; bị cuốn v&agrave;o. T&ocirc;i kh&ocirc;ng quen với việc b&igrave;nh luận về những chuyện n&agrave;y hay xem ch&uacute;ng l&agrave; vấn đề nghi&ecirc;m trọng, nhưng bởi chuyện n&agrave;y đang g&acirc;y ảnh hưởng đến những người th&acirc;n của t&ocirc;i, n&ecirc;n t&ocirc;i phải l&ecirc;n tiếng&quot;.</p>\r\n\r\n<p><img alt=\"Marion Cotillard chính thức lên tiếng chuyện dan díu với Brad Pitt và có thai - Ảnh 1.\" src=\"http://kenh14cdn.com/thumb_w/650/2016/capture-1474510451388.jpg\" /></p>\r\n\r\n<p>Marion Cotillard bức x&uacute;c l&ecirc;n tiếng về tin đồn tr&ecirc;n Instagram</p>\r\n\r\n<p>&quot;Đầu ti&ecirc;n, nhiều năm về trước, t&ocirc;i đ&atilde; gặp người đ&agrave;n &ocirc;ng của đời m&igrave;nh, cha của con trai t&ocirc;i v&agrave; của đứa con m&agrave; ch&uacute;ng t&ocirc;i đang chuẩn bị ch&agrave;o đ&oacute;n. Anh ấy l&agrave; t&igrave;nh y&ecirc;u của t&ocirc;i, l&agrave; bạn tốt nhất của t&ocirc;i, người duy nhất m&agrave; t&ocirc;i cần.</p>\r\n', 'Dang Van Cuong', '2', null, null);
INSERT INTO `news` VALUES ('15', 'Truyền thông thế giới chú ý tới các hợp đồng \"khủng\" trong chuyến thăm của Tổng thống Pháp', '<p>Truyền th&ocirc;ng thế giới ch&uacute; &yacute; tới c&aacute;c hợp đồng &quot;khủng&quot; trong chuyến thăm của Tổng thống Ph&aacute;p</p>\r\n', 'An Bình', '2', null, null);

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '1', '2016-08-18');
INSERT INTO `orders` VALUES ('2', '1', '2016-08-18');
INSERT INTO `orders` VALUES ('3', '2', '2016-08-18');
INSERT INTO `orders` VALUES ('4', '3', '2016-08-18');
INSERT INTO `orders` VALUES ('5', '2', '2016-08-18');
INSERT INTO `orders` VALUES ('6', '4', '2016-08-18');
INSERT INTO `orders` VALUES ('7', '7', '2016-08-18');
