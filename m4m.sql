-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: m4m
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objects`
--

DROP TABLE IF EXISTS `objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `device_id` int(11) DEFAULT NULL,
  `mac` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objects`
--

LOCK TABLES `objects` WRITE;
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` VALUES (15,5,'Умное здоровье','smarthealth',1,'1111','kharkiv-city-water','2017-05-22 08:25:25','2017-05-22 10:25:25'),(16,5,'1221212','Smart homeSmart carSmart health',1,'1212','kharkiv-city-water','2017-05-22 08:26:54','2017-05-22 10:26:54'),(18,12,'131231231','Smart car',1,'121212','kharkiv-city-water','2017-05-22 12:23:53','2017-05-22 14:23:53'),(20,18,'Счетчик электричества','Smart home',1,'11-dd-cc-aa-ff','kharkiv-city-electricity','2017-05-23 09:51:15','2017-05-23 11:51:15'),(21,19,'3221312','Smart home',1,NULL,'kharkiv-city-water','2017-05-23 11:21:11','2017-05-23 13:21:11'),(22,20,'a','Smart home',1,'1','kharkiv-city-water','2017-05-24 10:51:26','2017-05-24 12:51:26'),(24,20,'as','Smart health',1,'1','kharkiv-city-water','2017-05-24 10:53:01','2017-05-24 12:53:01'),(25,20,'ass','Smart car',1,'1','kharkiv-city-water','2017-05-24 10:53:18','2017-05-24 12:53:18'),(26,20,'fff','Smart health',1,'1','kharkiv-city-water','2017-05-24 10:56:57','2017-05-24 12:56:57'),(27,20,'mmm','Smart car',1,'1','kharkiv-city-water','2017-05-24 10:57:40','2017-05-24 12:57:40'),(28,20,'f','Smart car',1,'1','kharkiv-city-water','2017-05-24 11:10:43','2017-05-24 13:10:43'),(35,17,'335','Умный дом',3,'535324','kharkiv-city-electricity','2017-05-24 20:26:03','2017-05-24 22:26:03'),(36,17,'34234','Умный дом',0,'4543','kharkiv-city-water','2017-05-24 20:26:49','2017-05-24 22:26:49'),(37,17,'45235','Умный дом',0,'325235','kharkiv-city-water','2017-05-24 20:38:20','2017-05-24 22:38:20'),(38,19,'ывываываыва','Умный дом',0,NULL,'kharkiv-city-water','2017-05-25 06:14:25','2017-05-25 08:14:25'),(39,18,'Контроллер','Умный дом',0,NULL,'kharkiv-city-water','2017-05-25 12:02:46','2017-05-25 14:02:46'),(40,18,'тест','Умная машина',0,NULL,'kharkiv-city-electricity','2017-05-30 11:13:50','2017-05-30 13:13:50'),(41,18,'Дача','Умный дом',0,'ровыавы','kharkiv-city-water','2017-06-04 16:56:01','2017-06-04 18:56:01'),(42,22,'Дача','Умный дом',0,'123123123','kharkiv-city-water','2017-06-24 09:00:03','2017-06-24 11:00:03');
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Владимир','Гуцал','deleted93@yandex.ua','$2y$10$5LwyWEjL1LgezTIpNDZ7Nui3mdZCrNitpgc8OVem56XfqxImfJXJa','hbvKKkeYFNb1HWolxXzfdawbGXuoAano4exhHtBDbSknTIINsknXK8QRjDc2','2017-05-15 14:52:45','2017-05-15 14:52:45'),(2,'Vova',NULL,'qwqw@we.er','$2y$10$ErKyuZE4Bblj/haAk.DC8e88k9UbmpCIRXgCy.3hlR2DVXOMOnm.C','ai50yoATE4Ngo1BaQMSkz6z4KVXYKPc3fwISHSOV3a195WYoIjGTi5Bqztg4','2017-05-17 15:34:58','2017-05-17 15:34:58'),(3,'qwqw','qwqwqw','qwqwwwqw@qwqw.ry','$2y$10$4BCl7smEWP7PRqZVcYBZuOUe46L9TFUmqtGh.FUEWVD4V/DZRc6E.','MYh5MyRaZ9LOMpwCokNMfWRcxGJ7rZPs0Eoq4fd1r4r3l2FD5b2M86gnjebL','2017-05-17 15:35:58','2017-05-17 15:35:58'),(4,'qweqwe','qweqweqwe','deleteqd93@yandex.ua','$2y$10$DE86.rsZ6hEag8xGO/H8nOheIMtwAmv.LmA7VoS1/p/UnfERh/Pzq','MrCprYGS06FpmyZTZW4qlHBIqTqCY1EFHzS3mSMA9xFA3iukCf5m80YDRgv8','2017-05-18 07:14:18','2017-05-18 07:14:18'),(5,'wewqeqe','jkljlklkjk','kljjlkjlk@ererer.ru','$2y$10$T2BiLgKnz7vP3X1pKev77uOyf.q.IHRa0Lx4Au4heRYUOqAe.jtDe','cOXgHty9AtlmJJsq76hnBy9uKEZbmSRU1gje8AYfGYfULqXizYzB9JrvrQMg','2017-05-18 15:16:59','2017-05-18 15:16:59'),(6,'asdasd','qweqweqwe','deletqqed93@yandex.ua','$2y$10$lqrQY410Oiy.nOQoYJA/FO6HhNylCCHW6IKL7Pgfdu22eXExQhAhu','aM4Kp3kwN7yOe7nl8cP8loOWFlyymKhobBq6fBvrHKEfxvIRMYNbM89VIddk','2017-05-18 15:29:10','2017-05-18 15:29:10'),(7,'iiiii','iiiii','hh@de.rt','$2y$10$XbRt3v.sEHhcPhF6ppfdreZLUJC9YhIQ02nDON7g2ymm2rS1VGtOG','rHkkTJyCF5OZAgmknnFnmU6SVvqV5NDvg281uikORBeNAEhXvTAfzOFFaOJm','2017-05-18 15:30:07','2017-05-18 15:30:07'),(8,'uuuu','uuuuu','se@we.rt','$2y$10$GlZEieILU08plxGcqa/YP.zfbftEiTnH9jxLDHBooRgrFSzi0V4ou','7nbgPdJbjbkrhhNCJbtcn7uaHSej8jiHV7W9sEzP5WrcuIYkfiBhslTHS41g','2017-05-18 15:30:55','2017-05-18 15:30:55'),(9,'yyy','yyyy','uuu@we.ru','$2y$10$Ksh/M6/bPJemRS6jFAF8GuwLZu4cVuWOk7DluLLcr/e6.b6AOrxjK','wXhm4LVkQe6P4sveBXdNuRT0Bc2ao4A7dP6b5kEnPxHxAeWiACwq5ANYIsVM','2017-05-18 15:32:13','2017-05-18 15:32:13'),(10,'uuuu','uuuuuu','uuuu@uuu.ru','$2y$10$/Zl1KVQiowIq.7L8lQ40POKOtr0/uqvNnwj4pMcL3q.YSSCt1GeNS',NULL,'2017-05-18 15:33:04','2017-05-18 15:33:04'),(11,'ppppp','pppppp','pppp@ppp.pp','$2y$10$FP96f0ePGpT.cGPEhZunzONESfdS202IE8UIG1xsMKsRgr4jSAP9.',NULL,'2017-05-18 15:37:18','2017-05-18 15:37:18'),(12,'poooooOOOOO','oooooo','ooo@ooo.ri','$2y$10$ld3X95eP6F/OrSBT/h28DeDjbseVVcyuYocxm.vz46bndr4u2p/F.',NULL,'2017-05-18 15:37:51','2017-05-18 15:37:51'),(13,'wewerwerwerwerw','fffrfdfdfdfki','qqqqqqqq@wwwww.et','$2y$10$w9GnYg5kXXWtz8zZSyJ5F.1m/RyhFver8gfGU.B/xHt9lOOks0jUG',NULL,'2017-05-18 15:50:12','2017-05-18 15:50:12'),(14,'kjsfksdkflsdklfj','jflkjsdlkfjsdkljf','fdklsjflksdjf@kfjksljfklsdjf.ru','$2y$10$DDptFtS2Oi/Fj74r9E/Hs.pxEptAK7IJEuigfPB2TIfCZrYmOKhSG',NULL,'2017-05-18 15:51:35','2017-05-18 15:51:35'),(15,'kjjkljlkj','gjhgjhgjhgj','jhdkjahfdkjhfd@fdfsdfsdf.ru','$2y$10$2OE6HO2LyFyb5LVWK3510uOpkEwfCHDiK8WoZ1SceMOA1zBvtN8li',NULL,'2017-05-18 15:51:57','2017-05-18 15:51:57'),(16,'wejrhfksehrkjsehrfjkw','jfsdfjsdlkfjsdlfjlsdkflk','ggdflkgdlkfgjdklf@wrwerwrwer.ru','$2y$10$5uPTEBZWyg8aqJrkvQfw2eGneZf9gmxwnBML/lh3UW5X747nLXqgq',NULL,'2017-05-22 06:38:38','2017-05-22 06:38:38'),(17,'Роман','Бовда','r.bovda@barbatec.com','$2y$10$aLyD1pBdRxMBO.O2Xqb69OJW/7YBFAc3vRka8yPHXqXIyE.Mlt0Gu','k6ERQRiRcWVS4XpP8SHOY3m08dEDrcx8FQdg38u3ytjNPJQ24g4PRaBiNWle','2017-05-22 13:07:28','2017-05-22 13:07:28'),(18,'Демо','пользователь','test@test.ru','$2y$10$bjN.BYssyQzLgA9J7sHZbuOI6zDOW01.eETIzUGBs/rgJwqqXxGra','vqeMaQdAYDKN5Z28mJ1ewHqGJUSmpApqhAPJnhk3QTJb5y4Hp1O60hXGDjN3','2017-05-23 09:38:19','2017-05-23 09:38:19'),(19,'Роман','Сиренко','romeo.sirenko@gmail.com','$2y$10$QzQnp29GHin9JNaiQ.MKqeLgZnON2MRp9ZzWCrtAcuFD9FQGF9P/G','nSlnowUqf8d5wEMDvJZms2o7XP6bXcE3HkUMAln44rotCBh6wCFM4T5lwTYS','2017-05-23 11:20:00','2017-05-23 11:20:00'),(20,'vasya','test','test@gmail.com','$2y$10$3xha2Nv4AlicEQqk29fp1OjQ19ydtkgXzZZtEfGpJtpyaGwyYa5E.','GItA97HV4y6BNMiKZmDn6SG97A6sQre2lTSHixnEd56qYDht9jPVU8YJtndN','2017-05-24 10:46:37','2017-05-24 10:46:37'),(21,'Вова','Гуцал','qwerty2@qwerty.qwerty','$2y$10$FR.JlJ/va0ILyMJ7RyYCU./zamqCB0BS8.Ahomuxld2yVwgpiZ4BW',NULL,'2017-05-24 14:04:41','2017-05-24 14:04:41'),(22,'btest','btest','btest@btest.ru','$2y$10$9g6E0YdpyzI1jOMU28dic./ldm//HfU/NRRPG9jXmkAn3Z5Adj7Wm',NULL,'2017-06-24 08:58:06','2017-06-24 08:58:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-29 14:26:56
