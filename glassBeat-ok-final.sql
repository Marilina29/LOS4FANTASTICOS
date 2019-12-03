-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: glassbeat1
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `adress`
--

DROP TABLE IF EXISTS `adress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adress` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` smallint(6) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adress`
--

LOCK TABLES `adress` WRITE;
/*!40000 ALTER TABLE `adress` DISABLE KEYS */;
/*!40000 ALTER TABLE `adress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Collares','2019-11-14 16:50:52','2019-11-14 16:50:52'),(2,'Pulseras','2019-11-14 16:50:52','2019-11-14 16:50:52'),(3,'Aros','2019-11-14 16:50:52','2019-11-14 16:50:52'),(4,'Otros','2019-11-14 16:50:52','2019-11-14 16:50:52');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'2019_11_12_124546_add_img_to_products',2),(34,'2014_10_12_100000_create_password_resets_table',3),(35,'2019_11_07_001259_create_adress_table',3),(36,'2019_11_07_001500_create_categories_table',3),(37,'2019_11_07_001529_create_styles_table',3),(38,'2019_11_07_001530_create_products_table',3),(39,'2019_11_07_012510_create_roles_table',3),(40,'2019_11_07_012511_create_users_table',3),(41,'2019_11_07_012512_create_orders_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_number` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cant` bigint(20) DEFAULT '1',
  `orderscol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_product_id_foreign_idx` (`product_id`),
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (14,0,0,7,250,'2019-11-21 19:45:40','2019-11-26 06:48:29',1,'Dalaila','ut','0010-A-bluefish.jpg',14,NULL,NULL),(17,0,0,7,350,'2019-11-21 20:23:01','2019-11-26 06:48:17',3,'BlueMoon','pariatur','AA-004B.jpg',9,NULL,NULL),(19,25,1,6,200,'2019-11-21 21:03:14','2019-11-26 06:21:50',4,'Roxy','et','0029-B-SkyBlues.jpg',6,NULL,NULL),(21,23,1,6,205,'2019-11-21 21:03:33','2019-11-26 06:01:31',8,'Multi Black','sint','prod_3-blackSil.jpg',6,NULL,NULL),(37,23,1,6,350,'2019-11-26 04:54:40','2019-11-26 05:55:38',15,'Argolla Dona 15',NULL,'nIWWrUXePni13f5IisJeKZeQT3xxS5itJCgDf0Pe.jpeg',2,NULL,NULL),(38,23,1,6,293,'2019-11-26 04:54:47','2019-11-26 15:17:24',7,'Constructo',NULL,'AB-006.jpg',2,NULL,NULL),(39,23,1,6,280,'2019-11-26 05:06:20','2019-11-26 05:15:18',9,'Lines',NULL,'prod_6-fusion.jpg',2,NULL,NULL),(40,23,1,6,350,'2019-11-26 05:09:12','2019-11-26 06:01:36',12,'Argollas Dona 22',NULL,'gCGce3fDdyHc0Nr5neGoY09BYobBLIpqZMH0tk4d.jpeg',2,NULL,NULL),(41,23,1,6,252,'2019-11-26 05:16:03','2019-11-26 05:16:03',6,'Redish',NULL,'0003-B-redish.jpg',1,NULL,NULL),(42,26,1,6,250,'2019-11-26 05:58:34','2019-11-26 06:48:23',2,'Orangine',NULL,'0053-A-orangeSpice.jpg',7,NULL,NULL),(43,26,1,6,279,'2019-11-26 05:58:42','2019-11-26 06:22:47',5,'Narangine',NULL,'prod_4-primavera.jpg',2,NULL,NULL),(44,26,1,6,200,'2019-11-26 06:01:58','2019-11-26 06:51:37',13,'Pulsera Celle',NULL,'sZNxEbDoPoFP8eiNlqcQi2uDAk3Ycpy0lNY0Lmmz.jpeg',5,NULL,NULL),(45,26,1,6,250,'2019-11-26 06:05:13','2019-11-26 06:07:01',16,'Colins',NULL,'mSAnr2pJmxrsh0TpUcaTQ1pkpUepxhW3LmZwvvFU.jpeg',1,NULL,NULL),(46,27,1,6,220,'2019-11-26 06:21:27','2019-11-26 06:21:30',14,'Petal Key',NULL,'DPzbi0nXvpfCd4QUq2C2M06WBAUuAqTX3qgmjZdB.jpeg',1,NULL,NULL),(47,28,1,6,250,'2019-11-26 06:29:25','2019-11-26 06:29:30',11,'Rosie',NULL,'SVgBJjR104YNo5W9HXyuEd3eNJ483NZ9lfCSObNU.jpeg',1,NULL,NULL),(48,NULL,0,8,250,'2019-11-26 06:46:06','2019-11-26 06:46:06',17,'Hello',NULL,'ZzTWDsdONQAlZfS6z4tudp0cuSs5zxbnQzAtR8tQ.jpeg',1,NULL,NULL),(50,34,1,6,250,'2019-11-26 15:58:46','2019-11-26 16:49:25',1,'Dalaila',NULL,'0010-A-bluefish.jpg',2,NULL,NULL),(51,29,1,11,250,'2019-11-26 16:00:16','2019-11-26 16:00:51',2,'Orangine',NULL,'0053-A-orangeSpice.jpg',3,NULL,NULL),(52,29,1,11,350,'2019-11-26 16:00:43','2019-11-26 16:01:06',3,'BlueMoon',NULL,'AA-004B.jpg',4,NULL,NULL),(53,30,1,11,280,'2019-11-26 16:01:12','2019-11-26 16:01:15',9,'Lines',NULL,'prod_6-fusion.jpg',1,NULL,NULL),(54,31,1,11,293,'2019-11-26 16:01:28','2019-11-26 16:01:30',7,'Constructo',NULL,'AB-006.jpg',1,NULL,NULL),(55,32,1,11,252,'2019-11-26 16:01:46','2019-11-26 16:02:02',6,'Redish',NULL,'0003-B-redish.jpg',1,NULL,NULL),(56,33,1,11,250,'2019-11-26 16:02:37','2019-11-26 16:03:00',1,'Dalaila',NULL,'0010-A-bluefish.jpg',3,NULL,NULL),(58,35,1,6,250,'2019-11-26 17:19:18','2019-11-26 17:32:36',20,'UlaUla',NULL,'ndPQOL2xxI6qIx8hfnpuItlwestrQYSgx9RV6tRM.jpeg',2,NULL,NULL),(59,35,1,6,279,'2019-11-26 17:26:45','2019-11-26 17:32:36',5,'Narangine',NULL,'prod_4-primavera.jpg',2,NULL,NULL),(60,35,1,6,350,'2019-11-26 17:32:31','2019-11-26 17:32:36',22,'RosiePossie',NULL,'a9Ug53WR43HWhCM1rEWdY8BHggBEro45r66wvF1I.jpeg',1,NULL,NULL),(61,36,1,11,350,'2019-11-26 17:33:33','2019-11-26 17:33:41',15,'Argolla Dona 15',NULL,'nIWWrUXePni13f5IisJeKZeQT3xxS5itJCgDf0Pe.jpeg',1,NULL,NULL),(62,36,1,11,250,'2019-11-26 17:33:39','2019-11-26 17:33:41',21,'Platarata',NULL,'3bx8lTcWRJTjaxwVP4NrHXEwTNtOJMJw8IkQtLl5.jpeg',1,NULL,NULL),(63,NULL,0,11,250,'2019-11-26 17:40:11','2019-11-26 17:40:11',20,'UlaUla',NULL,'ndPQOL2xxI6qIx8hfnpuItlwestrQYSgx9RV6tRM.jpeg',1,NULL,NULL),(64,NULL,0,6,200,'2019-11-28 14:54:58','2019-11-28 14:54:58',4,'Roxy',NULL,'0029-B-SkyBlues.jpg',1,NULL,NULL),(65,NULL,0,6,250,'2019-11-28 15:01:06','2019-11-28 15:01:06',26,'Blink',NULL,'y9RC5VDOwPiauEvUXjogz2dnxW9Lp84rAAHhvscy.jpeg',1,NULL,NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `style_id` bigint(20) unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_code_unique` (`code`),
  KEY `products_category_id_foreign_idx` (`category_id`),
  KEY `products_style_id_foreign_idx` (`style_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `products_style_id_foreign` FOREIGN KEY (`style_id`) REFERENCES `styles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Dalaila','aut','Collar de vidrio con tanza acerada \\n y fornituras de fundición. No mojar, los componentes metálicos, así como la tanza podrían dañarse. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Lila',250,1,'0010-A-bluefish.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',1,NULL),(2,'Orangine','quia','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Naranja',250,1,'0053-A-orangeSpice.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',1,NULL),(3,'BlueMoon','eaque','Aros de vidrio y plata 925. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Celeste',350,3,'AA-004B.jpg','2019-11-14 16:50:52','2019-11-26 17:14:14',3,'2019-11-26 17:14:14'),(4,'Roxy','officiis','Pulsera de vidrio y plata 925. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Azul',200,2,'0029-B-SkyBlues.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',2,NULL),(5,'Narangine','est','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Naranja',279,6,'prod_4-primavera.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',1,NULL),(6,'Redish','iusto','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Red',252,6,'0003-B-redish.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',1,NULL),(7,'Constructo','voluptas','Aros de vidrio y plata 925. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Tan',293,7,'AB-006.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',3,NULL),(8,'Multi Black','qui','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','SteelBlue',205,5,'prod_3-blackSil.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',1,NULL),(9,'Lines','similique','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','MistyRose',280,8,'prod_6-fusion.jpg','2019-11-14 16:50:52','2019-11-14 16:50:52',4,NULL),(11,'Rosie','asdasdfu','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Rosa',250,1,'SVgBJjR104YNo5W9HXyuEd3eNJ483NZ9lfCSObNU.jpeg','2019-11-19 17:33:45','2019-11-19 17:33:45',1,NULL),(12,'Argollas Dona 22','AAD002','Argollas de plata 925 con dona de vidrio','Naranja',350,3,'gCGce3fDdyHc0Nr5neGoY09BYobBLIpqZMH0tk4d.jpeg','2019-11-21 01:14:39','2019-11-21 01:14:39',3,NULL),(13,'Pulsera Celle','P0003','pulsera de cordón de gamuza y vidrio','Blanco y Azul',200,2,'sZNxEbDoPoFP8eiNlqcQi2uDAk3Ycpy0lNY0Lmmz.jpeg','2019-11-21 01:20:08','2019-11-21 01:20:08',2,NULL),(14,'Petal Key','LL0001','Llavero con cuenta de vidrio y gamuza','lila',220,4,'DPzbi0nXvpfCd4QUq2C2M06WBAUuAqTX3qgmjZdB.jpeg','2019-11-21 01:21:10','2019-11-21 01:21:10',4,NULL),(15,'Argolla Dona 15','AAD0015','Argollas de plata 925 con dona de vidrio','Celeste y plateado',350,3,'nIWWrUXePni13f5IisJeKZeQT3xxS5itJCgDf0Pe.jpeg','2019-11-21 01:22:08','2019-11-21 01:22:08',3,NULL),(16,'Colins','C010012','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Negro',250,1,'mSAnr2pJmxrsh0TpUcaTQ1pkpUepxhW3LmZwvvFU.jpeg','2019-11-21 01:24:05','2019-11-21 01:24:05',1,NULL),(17,'Hello','CC010017','Collar de vidrio con tanza acerada y fornituras de fundición.\nNo mojar, los componentes metálicos, así como la tanza podrían dañarse.\nCada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.\n\nMateriales: Vidrio, Tanza acerada y Fornituras metálicas.','Naranja y Azul',250,1,'ZzTWDsdONQAlZfS6z4tudp0cuSs5zxbnQzAtR8tQ.jpeg','2019-11-21 01:27:33','2019-11-21 01:27:33',1,NULL),(20,'UlaUla','A00345','Anillo de vidrio','Azul',250,8,'ndPQOL2xxI6qIx8hfnpuItlwestrQYSgx9RV6tRM.jpeg','2019-11-26 17:16:59','2019-11-26 17:16:59',4,NULL),(21,'Platarata','A002323','Anillo de vidrio','Azul y Naranja',250,8,'3bx8lTcWRJTjaxwVP4NrHXEwTNtOJMJw8IkQtLl5.jpeg','2019-11-26 17:18:08','2019-11-26 17:18:08',4,NULL),(22,'RosiePossie','AA002343','Argollas de plata 925 con dona de vidrio','Lila',350,3,'a9Ug53WR43HWhCM1rEWdY8BHggBEro45r66wvF1I.jpeg','2019-11-26 17:19:07','2019-11-26 17:19:07',3,NULL),(23,'Burbujas','CC500012','Collar de vidrio con tanza acerada y fornituras de fundición. No mojar, los componentes metálicos, así como la tanza podrían dañarse. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Azul, Negro y Verde',650,6,'saATg6Zf8rcoAZJ5J0HpZwrIP8kpSX8byR3jEu0o.jpeg','2019-11-26 17:20:24','2019-11-26 17:20:24',1,NULL),(24,'Flor Es Genial','CC5091203','Collar de vidrio con tanza acerada y fornituras de fundición. No mojar, los componentes metálicos, así como la tanza podrían dañarse. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Violeta y Azul',650,6,'J8Re9cRZpbaH8Tu4QeLE0fiKVYVlh3jEb2ZPvyvt.jpeg','2019-11-28 14:54:44','2019-11-28 14:54:44',1,NULL),(25,'Estrella','PP120439','Pulsera de vidrio con cordón de gamuza y fornituras de fundición. No mojar, los componentes metálicos, así como la tanza podrían dañarse. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Rojo y Negro',250,2,'0NpPVXrlkOouzYy7rtslJ8xcUgh6tgDrPf5wnkVy.jpeg','2019-11-28 14:56:57','2019-11-28 14:56:57',2,NULL),(26,'Blink','PP01293','Pulsera de vidrio con cordón de gamuza y fornituras de fundición. No mojar, los componentes metálicos, así como la tanza podrían dañarse. Cada pieza de vidrio GlassBeat fue realizada a mano y por ello, el producto final puede tener variaciones respecto a la imagen. Siempre se respetará tamaño y colores, así como el diseño seleccionado.  Materiales: Vidrio, Tanza acerada y Fornituras metálicas.','Negro',250,2,'y9RC5VDOwPiauEvUXjogz2dnxW9Lp84rAAHhvscy.jpeg','2019-11-28 14:58:06','2019-11-28 14:58:06',2,NULL),(27,'Blister','AA3456','Aros de argolla de plata 925 y donas de vidrio.','Negro',350,3,'O3Wx0VFdr6uZl7htrL0NYqpWOduFE3wNhYRNuZwz.jpeg','2019-11-28 14:59:43','2019-11-28 14:59:43',3,NULL),(28,'Rosete','P389120','Anillo de vidrio','Celeste y Blanco',200,2,'PwhVoZ3xtw2zUkNzeNOhIQJGPBLH3sXuQK1qNzMp.jpeg','2019-11-28 15:16:04','2019-11-28 15:16:04',2,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `styles`
--

DROP TABLE IF EXISTS `styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `styles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `units` int(11) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `styles_name_unique` (`name`),
  KEY `styles_category_id_foreign` (`category_id`),
  CONSTRAINT `styles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `styles`
--

LOCK TABLES `styles` WRITE;
/*!40000 ALTER TABLE `styles` DISABLE KEYS */;
INSERT INTO `styles` VALUES (1,'Collar 1 cuenta',250,1,1,'2019-11-14 16:50:52','2019-11-14 16:50:52'),(2,'Pulsera',250,1,2,'2019-11-14 16:50:52','2019-11-14 16:50:52'),(3,'Aros Argolla',450,3,3,'2019-11-14 16:50:52','2019-11-14 16:50:52'),(4,'Llavero',250,4,4,'2019-11-14 16:50:52','2019-11-14 16:50:52'),(5,'Collar 3 cuentas',450,5,1,'2019-11-14 16:50:52','2019-11-14 16:50:52'),(6,'Collar 5 cuentas',650,2,1,NULL,NULL),(7,'Aros de plata',400,4,3,NULL,NULL),(8,'Anillo',250,1,4,NULL,NULL),(9,'Collar Largo',650,3,1,NULL,NULL);
/*!40000 ALTER TABLE `styles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Birdie Keeling','sint','gerhold.kurt@example.net',42421757,703845,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2019-11-14 16:50:52','2019-11-14 16:50:52','GlGxVGvHsc','0'),(2,'Bette Thompson','sed','zita93@example.net',72423768,257345,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2019-11-14 16:50:52','2019-11-14 16:50:52','UOy6miEecV','0'),(3,'Vladimir Mertz','dolores','loy86@example.net',78571011,328988,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2019-11-14 16:50:52','2019-11-14 16:50:52','ldSV6q7khOTwop2ehPvXxz2wQgEJQFMQIwOLkdMtVvmy0ERB4MUna5x024Pk','0'),(4,'Buck Maggio','molestiae','viva.dibbert@example.net',19446904,593558,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2019-11-14 16:50:52','2019-11-14 16:50:52','bXrdl4wv9J','0'),(5,'Jack Macejkovic DVM','et','jessika29@example.com',16438668,215406,'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2019-11-14 16:50:52','2019-11-14 16:50:52','7M40F15j7d','0'),(6,'Marilina','Rozenberg','marilina_29@hotmail.com',25096464,1553399494,'$2y$10$gnq6WvyGNhdsYO6FNAJLaulHIQ6JagP9OEh/oc4QQnZO3Ocj9Jxw6','2019-11-19 07:11:46','2019-11-19 07:11:46','iYOvrPoKjIUmMJa21wmcoZxH1Ok9XVOi3dGYiBkKi4uVeynSXY15bJ6E0H4U','100'),(7,'flor','ki','florki@gmail.com',2334,46544578,'$2y$10$Hd944Hc3jNUOuCz84cfQ2OgRi.tEw/n3wK.rax1mffDJB/i0U3DM2','2019-11-21 17:20:27','2019-11-21 17:20:27',NULL,'100'),(8,'juana','gon','juana@gmail.com',456789,456789,'$2y$10$KJVyX5NveLlWlPEXiz3fX.DCLzPDTcYD6vdx5pDrXi3.QHWG4OUdS','2019-11-25 16:14:18','2019-11-25 16:14:18','ytJVMsBOJXYkH4vt6wQWH1UM2fdWEg53PekvuFWRApWCWbjbkdu7etG9ctub','100'),(9,'maria','cha','maria@gmail.com',23456,34567,'$2y$10$zuQUgdJThoHXuXAlFYx3cOqp3ypO8ERs0yC4lJVqt08J0kTj5BT6C','2019-11-25 16:14:53','2019-11-25 16:14:53',NULL,'100'),(10,'Maru','Ru','info@lumia.com.ar',23232323,1122222222,'$2y$10$DmzAfIH/5H9mrkHbw85pn.QaccOXSPEPfednyxqnDIXu7cOjmwlsa','2019-11-26 04:52:36','2019-11-26 04:52:36','I8cIbXBNDuuahIn5PJjQNYTCG7y0HY1dBDxCNGbJPzuiJF7iaPgHcDMRUOSt','0'),(11,'LULI','KASIDA','alal@hot.com',24242424,115555555,'$2y$10$CZE85OtEruhdotfv8tdljuEqSWVJRRkbpvKL68kFT9RfVpYm7ZRGq','2019-11-26 16:00:08','2019-11-26 16:00:08','FEAB605b7FQwIo6gzpSyDSrVGEoHph0p3vjwKr8GJPG0SvAL0BvWYZYaMAiE','0');
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

-- Dump completed on 2019-11-28 11:04:36
