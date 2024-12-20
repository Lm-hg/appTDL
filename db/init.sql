CREATE TABLE `task` (
  `task_id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`task_id`)
);

INSERT INTO `task` (`task`, `status`) VALUES ('Test', 'En attente');

ALTER TABLE `task` AUTO_INCREMENT = 3