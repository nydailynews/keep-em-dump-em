CREATE TABLE `kd_TEAMNAME` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(10) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `keep` int(10) DEFAULT NULL,
  `dump` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `kd_TEAMNAME`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `year` (`year`),
  ADD KEY `name` (`name`),
  ADD KEY `section` (`section`);
