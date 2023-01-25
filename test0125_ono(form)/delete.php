<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>削除確認画面</title>
</head>
<body>
<div id="toukou">

<?php
if(isset($_POST['ID'])){

  try {
    $pdo = new PDO('mysql:dbname=git-test;host=127.0.0.1', 'root', 'aoikokoro');
    $stmt = $pdo->query('SET NAMES utf8');
  if (!$stmt) {
    $info = $pdo->errorinfo();
    exit($info[2]);
  }

  $delete = $_REQUEST['reset'];
  $n = $_REQUEST['ID'];

  $stmt = $pdo->prepare("DELETE FROM comments WHERE no = :ID");
  $stmt->bindValue(":ID", $n);
  $stmt->execute();

    $pdo = null;

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
}

?>

<h1>削除しました！</h1>
    
    <h2><a href="index.php">投稿板へ戻る</a></h2>
    
</div>

</body>
</html>