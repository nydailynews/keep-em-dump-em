# For when adding a new team to the keep 'em dump 'em
CREATE TABLE `kd_TEAM` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `keep` int(10) DEFAULT NULL,
  `dump` int(10) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `year` (`year`),
  KEY `name` (`name`),
  KEY `section` (`section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
