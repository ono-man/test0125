CREATE DATABASE Git-test;
USE Git-test;

CREATE TABLE `comments` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created` datetime NOT NULL
);

INSERT INTO `comments` (`no`, `name`, `address`, `message`, `created`) VALUES
