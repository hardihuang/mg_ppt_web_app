CREATE TABLE `mg_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `regTime` datetime NOT NULL,
  `avatar` varchar(64) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO `mg_user` VALUES (1,'黄昊','dddb1b27f1a7d7601a6a0f7e2ca92926','2015-08-13 18:56:31','hardi_avatar.jpg',1);



CREATE TABLE `mg_course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

ALTER TABLE  mg_course ADD content INT NOT NULL；

CREATE TABLE `mg_version` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(30) NOT NULL,
  `dateTime` datetime NOT NULL,
  `content` varchar(64) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;




insert into mg_version(version,dateTime,content) values('1.0.0','2019-06-13 10:17:00','测试想法，将网页中常见的slider用作ppt放映幻灯片功能');
insert into mg_version(version,dateTime,content) values('1.1.0','2019-06-14 17:28:00','老师可以通过ajax、php和mysql的数据交换，实现教师端控制学生端的功能');

insert into mg_version(version,dateTime,content) values('2.0.0','2019-06-17 10:00:00','重构网站底层代码，将php版本降低为5.x，xampp降为v3.2.1板，并且开始使用之前自画像项目的库文件');
insert into mg_version(version,dateTime,content) values('2.1.0','2019-06-19 12:40:00','增加了注册 & 登录功能');
insert into mg_version(version,dateTime,content) values('2.2.0','2019-06-20 20:30:00','添加了课程列表页面 ');
insert into mg_version(version,dateTime,content) values('2.3.0','2019-06-20 10:00:00','添加了新建课程页面 ');
insert into mg_version(version,dateTime,content) values('2.3.1','2019-06-20 10:22:00','解决了上传文件表格出错问题');
insert into mg_version(version,dateTime,content) values('2.3.2','2019-06-20 10:42:00','在课程列表右下角增加了新建课程页面的入口按钮，并且只有管理员可见');
insert into mg_version(version,dateTime,content) values('2.3.3','2019-06-20 11:04:00','优化了登录前首页外观 ')
insert into mg_version(version,dateTime,content) values('2.3.4','2019-06-20 11:14:00','优化了导航栏外观 ');
insert into mg_version(version,dateTime,content) values('2.4.0','2019-06-20 11:35:00','增加了只有老师账号才能访问新建课程页面的检查逻辑');
insert into mg_version(version,dateTime,content) values('2.5.0','2019-06-20 12:32:00','现在我们可以通过新建课程页面新建课程缩略图和名称解释');
insert into mg_version(version,dateTime,content) values('2.5.1','2019-06-20 17:14:00','去上课按钮可检测当前账户是学生还是老师，并且自动打开对应上课页面');
insert into mg_version(version,dateTime,content) values('2.6.0','2019-06-20 19:14:00','增加了版本更新列表页面，并且从数据库中获取版本信息');

insert into mg_version(version,dateTime,content) values('2.6.1','2019-06-21 10:00:00','课程列表页面的课程card可自动换行');
insert into mg_version(version,dateTime,content) values('2.6.2','2019-06-21 10:33:00','优化新建课程页面的界面');
insert into mg_version(version,dateTime,content) values('2.6.3','2019-06-21 17:54:00','实现老师一键上传ppt所有页面功能，并兼容中文字符文件名，还可根据文件名中数字自动排序');
insert into mg_version(version,dateTime,content) values('2.6.4','2019-06-21 18:13:00','添加了前端增加版本更新的信息表格提交功能');


CREATE TABLE `mg_class` (
  `aid` int(11) NOT NULL, //admin id
  `cid` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `mode` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `mg_student` (
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;