create database lilychat
character set 'utf8'
collate 'utf8_general_ci';


CREATE TABLE `_posts` (
 `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `post_title` text NOT NULL,
 `post_content` longtext NOT NULL,
 `post_author` int(10) unsigned NOT NULL DEFAULT '0',
 `post_category` int(10) unsigned NOT NULL DEFAULT '0',
 `post_status` int(1) NOT NULL DEFAULT '0',
 `post_parent` int(10) unsigned NOT NULL DEFAULT '0',
 `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 PRIMARY KEY (`ID`),
 KEY `post_parent` (`post_parent`),
 KEY `post_author` (`post_author`),
 KEY `post_category` (`post_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8