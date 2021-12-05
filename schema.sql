CREATE DATABASE IF NOT EXISTS `bugme`;

USE `bugme`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(48) NOT NULL ,
  `lastname` varchar(48) NOT NULL,
  `password` varchar(48) NOT NULL ,
  `email` varchar(48) NOT NULL ,
  `date_joined` DATETIME NOT NULL,
  PRIMARY KEY  (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `password`, `email`, `date_joined`) VALUES
(1, 'Raniel', 'Johnson', 'password123', 'admin@project2.com',  NOW());

DROP TABLE IF EXISTS `issues`;
CREATE TABLE `issues` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(48) NOT NULL ,
  `description` text NOT NULL,
  `type` varchar(48) NOT NULL ,
  `priority` varchar(48) NOT NULL ,
  `status` varchar(48) NOT NULL,
  `assigned_to` int(48) NOT NULL,
  `created_by` int(48) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARSET=latin1;