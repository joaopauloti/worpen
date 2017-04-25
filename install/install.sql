
CREATE TABLE IF NOT EXISTS `worpen_sys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text NOT NULL,
  `template` text NOT NULL,
  `default_language` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `worpen_platforms` (`id`, `project_name`, `template`, `default_language`) VALUES
(1, 'worpen', 'default', 'en');

-- --------------------------------------------------------
