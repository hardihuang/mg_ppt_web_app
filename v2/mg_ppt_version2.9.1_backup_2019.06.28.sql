-- MySQL dump 10.13  Distrib 5.6.20, for Win32 (x86)
--
-- Host: localhost    Database: mg_ppt
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `mg_class`
--

DROP TABLE IF EXISTS `mg_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mg_class` (
  `aid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `mode` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mg_class`
--

LOCK TABLES `mg_class` WRITE;
/*!40000 ALTER TABLE `mg_class` DISABLE KEYS */;
INSERT INTO `mg_class` VALUES (30,42,0,1),(1,43,0,1);
/*!40000 ALTER TABLE `mg_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mg_course`
--

DROP TABLE IF EXISTS `mg_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mg_course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `thumbnail` varchar(64) NOT NULL,
  `summary` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `slides` varchar(64) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mg_course`
--

LOCK TABLES `mg_course` WRITE;
/*!40000 ALTER TABLE `mg_course` DISABLE KEYS */;
INSERT INTO `mg_course` VALUES (42,'刷子机器人','幻灯片1.jpg','来用你的刷子和别人比赛吧！',3,'de9cff2234a0df5063f60e682cb9db8b'),(43,'四足越野机器人','幻灯片1.jpg','一起翻越障碍物吧！',3,'fe23915bca9c7355ed9ee8c491122f72');
/*!40000 ALTER TABLE `mg_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mg_student`
--

DROP TABLE IF EXISTS `mg_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mg_student` (
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mg_student`
--

LOCK TABLES `mg_student` WRITE;
/*!40000 ALTER TABLE `mg_student` DISABLE KEYS */;
INSERT INTO `mg_student` VALUES (25,30,0),(31,30,0);
/*!40000 ALTER TABLE `mg_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mg_user`
--

DROP TABLE IF EXISTS `mg_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mg_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `regTime` datetime NOT NULL,
  `avatar` varchar(64) NOT NULL,
  `isAdmin` int(11) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mg_user`
--

LOCK TABLES `mg_user` WRITE;
/*!40000 ALTER TABLE `mg_user` DISABLE KEYS */;
INSERT INTO `mg_user` VALUES (1,'黄昊','dddb1b27f1a7d7601a6a0f7e2ca92926','2019-06-19 13:29:05','5d7ee874c08e0a014eefbc35e1cb604d.jpg',1),(25,'测试人员','fc0b619014b62c6840149f9338b10995','2019-06-19 12:05:34','9a634230a92d73dc46b068518d398e1d.jpg',0),(27,'test','098f6bcd4621d373cade4e832627b4f6','2019-06-19 13:39:24','696640340a709bb39bcbf5b53c957b82.png',0),(28,'Sivan','e10adc3949ba59abbe56e057f20f883e','2019-06-20 16:34:09','aa35fd5dfac6908d38840a95e1cac2c0.jpg',1),(29,'Lingyu Yue','b0602b5b2fb855c9843328cebe7c6aaf','2019-06-20 19:54:35','a4500fac56c4efbdef56b3d96e59b6d6.png',1),(30,'admin','21232f297a57a5a743894a0e4a801fc3','2019-06-26 09:57:12','53756790a7fd082b5e54ab6065496b03.jpg',1),(31,'哈利波特','bffd564a315e31b8e84ffb77f6ff2c12','2019-06-27 09:26:51','4da36481d7b4b5c257769b5f3acd9470.jpg',0),(32,'学生','1a2617ff99ccf1e1481e806e249c5a44','2019-06-28 11:43:40','ea8cfd7d80a2973c3d203122901798c1.jpg',0);
/*!40000 ALTER TABLE `mg_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mg_version`
--

DROP TABLE IF EXISTS `mg_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mg_version` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(30) NOT NULL,
  `dateTime` datetime NOT NULL,
  `content` varchar(128) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mg_version`
--

LOCK TABLES `mg_version` WRITE;
/*!40000 ALTER TABLE `mg_version` DISABLE KEYS */;
INSERT INTO `mg_version` VALUES (43,'1.0.0','2019-06-13 10:17:00','测试想法，将网页中常见的slider用作ppt放映幻灯片功能'),(44,'1.1.0','2019-06-14 17:28:00','老师可以通过ajax、php和mysql的数据交换，实现教师端控制学生端的功能'),(45,'2.0.0','2019-06-17 10:00:00','重构网站底层代码，将php版本降低为5.x，xampp降为v3.2.1板，并且开始使用之前自画像项目的库文件'),(46,'2.1.0','2019-06-19 12:40:00','增加了注册 & 登录功能'),(47,'2.2.0','2019-06-19 20:30:00','添加了课程列表页面 '),(48,'2.3.0','2019-06-20 10:00:00','添加了新建课程页面 '),(49,'2.3.1','2019-06-20 10:22:00','解决了上传文件表格出错问题'),(50,'2.3.2','2019-06-20 10:42:00','在课程列表右下角增加了新建课程页面的入口按钮，并且只有管理员可见'),(51,'2.4.0','2019-06-20 11:35:00','增加了只有老师账号才能访问新建课程页面的检查逻辑'),(52,'2.5.0','2019-06-20 12:32:00','现在我们可以通过新建课程页面新建课程缩略图和名称解释'),(53,'2.5.1','2019-06-20 17:14:00','去上课按钮可检测当前账户是学生还是老师，并且自动打开对应上课页面'),(54,'2.6.0','2019-06-20 19:14:00','增加了版本更新列表页面，并且从数据库中获取版本信息'),(55,'2.6.1','2019-06-21 10:00:00','课程列表页面的课程card可自动换行'),(56,'2.6.2','2019-06-21 10:33:00','优化新建课程页面的界面'),(57,'2.6.3','2019-06-21 17:54:00','实现老师一键上传ppt所有页面功能，并兼容中文字符文件名，还可根据文件名中数字自动排序'),(58,'2.6.4','2019-06-21 18:13:00','添加了前端增加版本更新的信息表格提交功能'),(59,'2.6.5','2019-06-21 18:44:36','将所有版本更新记录翻译为中文'),(60,'2.6.6','2019-06-21 19:07:53','将顶部导航栏固定，下拉时会始终固定在浏览器顶端'),(61,'2.6.7','2019-06-24 18:38:42','修复管理员界面下一张幻灯片预览不随主幻灯片翻页bug'),(62,'2.7.0','2019-06-24 19:00:29','点击不同课程，可打开该课程对应的ppt内容'),(63,'2.7.1','2019-06-24 20:13:02','为新建课程页面添加【ppt上传规范】页面，帮助不熟悉操作的老师快速上手'),(64,'2.8.0','2019-06-24 21:29:40','更改打开ppt页面逻辑，老师显示“开课”按钮和“课程详情”按钮，学生只有课程详情，若此时有老师正在上课，才能点击右上角的我要上课进入课堂，如果有多节课正在上，怎需要选择进入哪个课堂'),(65,'2.8.1','2019-06-25 20:30:03','如果老师新建课堂前还有一堂课没有下，自动删除该课堂记录，新建新课堂'),(66,'2.8.2','2019-06-25 21:24:36','新增学生右侧边栏（当前课堂）'),(67,'2.8.3','2019-06-26 10:03:39','实现学生账号课程列表右侧进入课堂按键功能'),(68,'2.8.4','2019-06-27 09:50:57','重新调通老师控制学生ppt翻页功能'),(69,'2.8.5','2019-06-27 10:33:38','加入结束课程功能，当老师结束课程后，所有学生端自动断开'),(70,'2.8.6','2019-06-27 10:50:35','检测当前课堂内容，若没有课堂，则提示“这里什么也没有”，优化mysql fetch函数的逻辑，发现无内容则返回0'),(71,'2.8.7','2019-06-27 11:33:14','当老师或学生在上课中直接关闭浏览器，自动执行结束课堂，或离开课堂'),(72,'2.8.8','2019-06-27 12:41:02','老师ppt页面，增加自由模式切换按钮'),(73,'2.9.0','2019-06-28 09:37:38','学员ppt页面右下角【当前课堂学员】栏目可实时动态获取显示当前学员列表'),(74,'2.9.1','2019-06-28 09:44:05','修复修改fetch json data array结构后，老师点击下课，学生端无法提示的bug'),(75,'2.10.0','2019-06-28 11:36:50','课堂列表右侧的【当前课堂】栏目利用ajax动态更新');
/*!40000 ALTER TABLE `mg_version` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-28 16:44:54
