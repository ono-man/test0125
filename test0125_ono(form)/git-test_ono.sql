CREATE DATABASE `Git-test`;
USE `Git-test`;

CREATE TABLE `comments` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created` datetime NOT NULL
)

-- DEFAULT CHARSET=utf8;

ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `comments` (`no`, `name`, `address`, `message`, `created`, `db_subject`) VALUES
(1, '小野', 'aoi@kokoro', 'つながった！', '2023-01-19 07:11:48', 'かっぱ太郎'),
(2, '小野', 'aoi@kokoro', '本日もよろしくお願いします！', '2023-01-24 06:02:17', NULL),
(3, '小野', 'aoi@kokoro', '今日はテスト！！！', '2023-01-25 02:38:35', NULL),
(4, '小野', 'aoi@kokoro', 'なかなかに混乱', '2023-01-25 04:22:20', NULL),
(5, '小野', 'aoi@kokoro', 'なぞなぞなぞ！', '2023-01-25 04:23:12', NULL),
(6, '小野', 'aoi@kokoro', '道のりは険しい、、、', '2023-01-25 04:31:58', NULL),
(7, '小野', 'aoi@kokoro', '道のりは長い！', '2023-01-25 04:43:21', NULL),
(8, '小野', 'aoi@kokoro', '難しい', '2023-01-25 04:54:37', NULL),
(9, '小野', 'aoi@kokoro', 'ナンバーを検索したらば～出てほしい～～～～～', '2023-01-25 06:30:06', NULL),
(10, '小野', 'aoi@kokoro', '険しき難題\r\n一度、記述の仕組みが自作できれば、シンプルなことだとは思うのですが、、、、', '2023-01-25 07:32:26', NULL),
(11, '木村', 'aoi@kokoro', 'なんかつながった？', '2023-01-25 07:33:10', NULL),
(12, '岡田', 'aoi@kokoro', 'これは！？！？！？！', '2023-01-25 07:39:45', NULL);


ALTER TABLE `comments`
  ADD PRIMARY KEY (`no`);

ALTER TABLE `comments`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

