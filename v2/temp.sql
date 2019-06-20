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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;