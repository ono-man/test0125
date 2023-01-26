-- DELETE DATABASE Git-test;
--既にデータベースがない状態の人を想定しているので
--その方がインポートするとエラーが出ます。
--DELETEはデータを消すもので、database消すものではないです、正しくはDROP

CREATE DATABASE `Git-test`;
USE `Git-test`;

--エスケープがなかったのでハイフンがでエラーが出ました

CREATE TABLE `comments` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created` datetime NOT NULL
)
--;入らないです。
DEFAULT CHARSET=utf8;

-- INSERT INTO `comments` (`no`, `name`, `address`, `message`, `created`) VALUES
--何かデータ登録しましたか？