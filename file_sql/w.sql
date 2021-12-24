CREATE DATABASE  IF NOT EXISTS `web_rao_vat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `web_rao_vat`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: web_rao_vat
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chat_ssion`
--

DROP TABLE IF EXISTS `chat_ssion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_ssion` (
  `idchat_ssion` int NOT NULL,
  `idUser` int DEFAULT NULL,
  `chat_ssioncol` varchar(45) DEFAULT NULL,
  `Messege` varchar(45) DEFAULT NULL,
  `Ngay` datetime DEFAULT NULL,
  PRIMARY KEY (`idchat_ssion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_ssion`
--

LOCK TABLES `chat_ssion` WRITE;
/*!40000 ALTER TABLE `chat_ssion` DISABLE KEYS */;
INSERT INTO `chat_ssion` VALUES (1,NULL,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `chat_ssion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_users`
--

DROP TABLE IF EXISTS `custom_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `custom_users` (
  `idUsers` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Brithday` varchar(45) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Sex` varchar(5) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Active` varchar(45) DEFAULT NULL,
  `Note` varchar(45) DEFAULT NULL,
  `idGroup` int DEFAULT NULL,
  `idchat_ssion` int DEFAULT NULL,
  `idSanPham` int DEFAULT NULL,
  PRIMARY KEY (`idUsers`),
  KEY `fk_use_guse_idx` (`idGroup`),
  KEY `fk_use_sp_idx` (`idSanPham`) /*!80000 INVISIBLE */,
  CONSTRAINT `fk_use_guse` FOREIGN KEY (`idGroup`) REFERENCES `group_user` (`idGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_users`
--

LOCK TABLES `custom_users` WRITE;
/*!40000 ALTER TABLE `custom_users` DISABLE KEYS */;
INSERT INTO `custom_users` VALUES (1,'Nam','2000',NULL,'nam','0797678','dangnam','dangnam',NULL,NULL,1,1,1),(2,'Hoa','2000',NULL,'nữ','0697679','hoa','hoa',NULL,NULL,2,2,2),(3,'Nghia','2000',NULL,'nam','068568','nghia','nghia',NULL,NULL,2,1,3),(4,'Long','2000',NULL,'nam','0965856','long','long',NULL,NULL,2,1,4);
/*!40000 ALTER TABLE `custom_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_san_pham`
--

DROP TABLE IF EXISTS `group_san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_san_pham` (
  `idNhomSp` int NOT NULL,
  `TenNhomSP` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `GhiChu` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`idNhomSp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_san_pham`
--

LOCK TABLES `group_san_pham` WRITE;
/*!40000 ALTER TABLE `group_san_pham` DISABLE KEYS */;
INSERT INTO `group_san_pham` VALUES (1,'Điện Thoại',NULL,NULL),(2,'Quần áo',NULL,NULL),(3,'Máy tính/Latop',NULL,NULL),(4,'Máy tính bảng',NULL,NULL),(5,'Xe cộ',NULL,NULL),(6,'Phụ kiện',NULL,NULL);
/*!40000 ALTER TABLE `group_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_user`
--

DROP TABLE IF EXISTS `group_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_user` (
  `idGroup` int NOT NULL,
  `TenNhomUser` varchar(45) DEFAULT NULL,
  `Note` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_user`
--

LOCK TABLES `group_user` WRITE;
/*!40000 ALTER TABLE `group_user` DISABLE KEYS */;
INSERT INTO `group_user` VALUES (1,NULL,NULL),(2,NULL,NULL);
/*!40000 ALTER TABLE `group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order` (
  `idOrder` int NOT NULL,
  `NameOrders` varchar(45) DEFAULT NULL,
  `idSanPham` int DEFAULT NULL,
  `Ngay` datetime DEFAULT NULL,
  `idUsers` int DEFAULT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `fk_order_use_idx` (`idUsers`),
  KEY `fk_order_sp_idx` (`idSanPham`),
  CONSTRAINT `fk_order_use` FOREIGN KEY (`idUsers`) REFERENCES `custom_users` (`idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,NULL,1,NULL,NULL),(2,NULL,2,NULL,NULL);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `idOrder_details` int NOT NULL,
  `TenOrders` varchar(45) DEFAULT NULL,
  `SoLuong` int DEFAULT NULL,
  `ThanhTien` int DEFAULT NULL,
  `TrangThai` varchar(20) DEFAULT NULL,
  `Ngay` datetime DEFAULT NULL,
  `ThanhToan` varchar(45) DEFAULT NULL,
  `idOrder` int DEFAULT NULL,
  PRIMARY KEY (`idOrder_details`),
  KEY `fk_ordertital_order_idx` (`idOrder`),
  CONSTRAINT `fk_ordertital_order` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanpham` (
  `idSanPham` int NOT NULL AUTO_INCREMENT,
  `TenSPham` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `MoTa1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Mota2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Mota3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Anh1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Anh2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Anh3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `price_promotion` int DEFAULT NULL,
  `GhiChu` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `SoLuong` int DEFAULT NULL,
  `idNhomSp` int DEFAULT NULL,
  `idUsers` int DEFAULT NULL,
  `idOrder` int DEFAULT NULL,
  PRIMARY KEY (`idSanPham`),
  KEY `fk_sp_gsp_idx` (`idNhomSp`),
  KEY `fk_sp_order_idx` (`idOrder`),
  KEY `fk_sp_use_idx` (`idUsers`),
  CONSTRAINT `fk_sp_gsp` FOREIGN KEY (`idNhomSp`) REFERENCES `group_san_pham` (`idNhomSp`),
  CONSTRAINT `fk_sp_order` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` VALUES (22,'Iphone 8 Plus','Thiết kế sang trọng, hiện đại','Cấu hình mạnh mẽ','Camera chất lượng','Iphone8Plus.jpg','Iphone8Plus-1.jpg','Iphone8Plus-2.jpg',7000000,6800000,NULL,3,1,1,NULL),(23,'Samsung Galaxy A71 8GB/128GB Bạc','Điện thoại Samsung Galaxy A71 8GB/128GB Bạc','Màn hình lớn, trải nghiệm tràn viền cực đã.Kích thước màn hình lên đến 6.7 inch, được \"phóng lớn\" so với Galaxy A51 (6.5 inch), cho không gian trải nghiệm thoải mái và đã mắt.','Bộ 4 camera chuyên nghiệp, camera macro đột phá. Hiệu năng mạnh mẽ, lưu trữ thoải mái','samsunga71.png','samsunga71-1.png','samsunga71-2.png',8000000,0,NULL,3,1,2,NULL),(24,'Áo thun nam dài tay, áo giữ nhiệt','THÔNG TIN SẢN PHẨM: Thiết kế: thiết kế theo form chuẩn mới nhất, phù hợp với dáng người Việt Nam','  HƯỚNG DẪN CHỌN SIZE: Size M:cân nặng từ 50 - 60 kg, chiều cao từ 1m55 đến 1m65',' Quý khách nếu thích mặc form thoải mái nên lấy tăng 1 size','ao_thun.jpg','ao_thun2.jpg','ao_thun3.jpg',140000,120000,NULL,4,2,2,NULL),(25,'Bộ Đồ Nam - Bộ Nỉ Nam Thu Đông','Thông tin sản phẩm:- Bộ thể thao nỉ dài tay có khóa áo là mẫu được ưa chuộng nhất năm nay','ƯU ĐIỂM:Mẫu mã, màu sắc đa dạng, dễ dàng phối với bất kỳ trang phục nào.','Màu sắc: Đen, Đỏ, Trắng','do_nam_thudong1.jpg','do_nam_thudong.jpg','do_nam_thudong2.jpg',300000,250000,NULL,2,2,5,NULL);
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopcart`
--

DROP TABLE IF EXISTS `shopcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shopcart` (
  `idShopCart` int NOT NULL,
  `idSanPham` int DEFAULT NULL,
  `SoLuong` int DEFAULT NULL,
  `Ngay` datetime DEFAULT NULL,
  PRIMARY KEY (`idShopCart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopcart`
--

LOCK TABLES `shopcart` WRITE;
/*!40000 ALTER TABLE `shopcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shopcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slide` (
  `idsilde` int NOT NULL AUTO_INCREMENT,
  `Name_img` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idsilde`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` VALUES (1,'banner1.jpg',NULL),(2,'banner2.jpg',NULL),(3,'banner3.jpg',NULL),(4,'banner4.jpg',NULL);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'web_rao_vat'
--

--
-- Dumping routines for database 'web_rao_vat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-24 16:59:26
