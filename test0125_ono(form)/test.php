<?php

$no = $_POST['no'];

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=git-test', 'root', 'aoikokoro');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql = "SELECT no, name, message FROM comments WHERE no = ?";
$stmt = ($pdo->prepare($sql));
$stmt->execute(array($no));

$memberList = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 $memberList[]=array(
  'no' =>$row['no'],
  'name'=>$row['name'],
  'message'=>$row['message']
 );
}

header('Content-type: application/json');
echo json_encode($memberList,JSON_UNESCAPED_UNICODE);

    /*
PDOオブジェクト生成は省略
*/

// if(isset($_GET['no'])){
//   $no = $_GET['no']; //ナンバーを取得
//   $name = $_GET['name']; //名前を取得
//   $message = $_GET['message']; //コメントを取得
//   $created = $_GET['created']; //日時を取得
  
//   $sql = "SELECT * FROM comments";
//   $sth = $pdo -> prepare($sql);
//   $sth -> bindValue(':no', $no, PDO::PARAM_STR);
//   $sth -> bindValue(':name', $name, PDO::PARAM_STR);
//   $sth -> bindValue(':message', $message, PDO::PARAM_STR);
//   $sth -> bindValue(':created', $created, PDO::PARAM_STR);
//   $sth -> execute();
//   $aryResult = $sth -> fetchAll(PDO::FETCH_COLUMN);
//   //データベースの取得結果配列をjson形式に変換
//   echo json_encode($aryResult);
// }else{
//   echo [];
// }

$conn = null;

?>