<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>一言</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="sousin">
<?php

if ($_REQUEST['name'] == '' or $_POST['message'] == '') {
  exit('error');
}

$con = mysqli_connect('127.0.0.1', 'root', 'aoikokoro');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysqli_select_db($con,'git-test');
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysqli_query($con,'SET NAMES utf8');
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$name    = $_REQUEST['name'];
$address = $_REQUEST['address'];
$message = $_REQUEST['message'];
$created = date('Y-m-d H:i:s');

$result = mysqli_query($con,"INSERT INTO comments(name, address, message, created) VALUES('$name', '$address', '$message', '$created')");
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysqli_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
    <h1>メッセージの投稿ありがとうございました！</h1>
    
    <h2><a href="index.php">一覧へ戻る</a></h2>
    
</div>

</body>
</html>