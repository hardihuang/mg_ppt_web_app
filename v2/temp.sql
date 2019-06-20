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


insert into mg_version(version,dateTime,content) values('2.2.0','2019-06-20 20:30:00','added courseList page ');
insert into mg_version(version,dateTime,content) values('2.3.0','2019-06-20 10:00:00','added addCourse page ');
insert into mg_version(version,dateTime,content) values('2.3.1','2019-06-20 10:22:00','fixed upload form check error ');
insert into mg_version(version,dateTime,content) values('2.3.2','2019-06-20 10:42:00','added button open addCourse in courseList page ');
insert into mg_version(version,dateTime,content) values('2.3.3','2019-06-20 11:04:00','added index.php banner ')
insert into mg_version(version,dateTime,content) values('2.3.4','2019-06-20 11:14:00','improved header style ');
insert into mg_version(version,dateTime,content) values('2.4.0','2019-06-20 11:35:00','only admin account can access the addCourse page ');
insert into mg_version(version,dateTime,content) values('2.5.0','2019-06-20 12:32:00','now we can add a new course with addCourse page ');
insert into mg_version(version,dateTime,content) values('2.5.1','2019-06-20 17:14:00','"go to class" button now can open different view based on the user level(teacher go to admin.php, student go to student.php) and with cid in the link ');
insert into mg_version(version,dateTime,content) values('2.6.0','2019-06-20 19:14:00','added version.php and get data from the database');

insert into mg_version(version,dateTime,content) values('1.1.0','2019-06-14 17:28:00','admin page now can sync the page number to the student page');

insert into mg_version(version,dateTime,content) values('1.0.0','2019-06-13 10:17:00','testing web AD slider as powerpoint view port');
