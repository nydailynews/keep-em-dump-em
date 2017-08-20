# Initial tables

CREATE TABLE `kd_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` TIMESTAMP NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL,
  `keep` int(10) DEFAULT NULL,
  `dump` int(10) DEFAULT NULL,
  `keep_percent` FLOAT DEFAULT NULL,
  UNIQUE `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `kd_answers`
  ADD KEY `year` (`year`),
  ADD KEY `team` (`team`);

CREATE TABLE `kd_answers_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` TIMESTAMP NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `keep` int(10) DEFAULT NULL,
  `dump` int(10) DEFAULT NULL,
  `keep_percent` FLOAT DEFAULT NULL,
  UNIQUE `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `kd_answers_section`
  ADD KEY `year` (`year`),
  ADD KEY `team` (`team`),
  ADD KEY `section` (`section`);
