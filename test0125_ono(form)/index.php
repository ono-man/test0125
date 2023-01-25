<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セルフインフォ</title>
</head>
<body>
    <h1>「Git・PHP・SQLテスト課題」</h1>
    <section id="intro">
        <h2>＜プロフィール＞</h2>
        <h2>かっぱ太郎</h2>
        <div id="chara">
        <img src="images/chara01.jpg" alt="kappa" width="100" height="100">
        </div>
        <p>遠野市公式キャラクターである「カリンちゃん」は遠野物語にも登場する「カッパ」をモチーフとしており、名所である「めがね橋」と市の花である「やまゆり」を取り入れています。カリンちゃんの「カリン」はカッパの「カ」と旧遠野市の市の花である「りんどう」の「りん」から来ています。

            　長年、遠野市民のみならず、遠野市外の皆様にも親しまれている事から、様々なイベントや結婚式にも登場しています。
            
            　平成21年1月25日に岩手県内で行われた「第１回岩手のご当地キャラクターコンテスト」では、雫石町の「しずくちゃん」とともに1位に選ばれた事もあります。</p>
        <h2>自己紹介</h2>
        <p>土淵町の常堅寺裏を流れる小川の淵にはカッパが多く住んでいて、人々を驚かし、いたずらをしたといわれています。
            澄んだ水がさらさらと流れるカッパ淵は、うっそうとした茂みに覆われ、今にもカッパが現れそうです。淵の岸辺には、カッパ神を祀った小さな祠があり、子持ちの女性がお乳が出るようにと願ををかけるとかなうといわれています、願かけには、赤い布で乳の形を作り、この祠に納めるのが習いとされています。</p>
    </section>

    <section id="toukou">
        <h2>＜お手紙フォーム＞</h2>
        <form action="regist.php" method="post" require>
            <h3>氏名</h3>
            <input type="text" name="name" placeholder="お名前をどうぞ～" size="20" value="" requir><br>
            <h3>連絡先</h3>
            <input type="email" name="address" placeholder="xxxxxxxx@ooo.oo.oo" size="" value="" requir><br>
            <h3>メッセージ</h3>
            <textarea name="message" cols="50" rows="10" placeholder="メッセージをどうぞ～" requir></textarea><br>
            <input type="submit" value="投稿する！">
        </form>
    </section>

    <section id="comment">
        <h2>↓みんなのコメント↓</h2>

<?php

try {
  $pdo = new PDO('mysql:dbname=git-test;host=127.0.0.1', 'root', 'aoikokoro');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->query('SET NAMES utf8');
if (!$stmt) {
  $info = $pdo->errorinfo();
  exit($info[2]);
}

$stmt = $pdo->query('SELECT * FROM comments ORDER BY no DESC LIMIT 15');
if (!$stmt) {
  $info = $pdo->errorinfo();
  exit($info[2]);
}

while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
  echo "<form action='delete.php' method='post'>\n";
  echo '<strong>[No.' . $data['no'] . '] ' . $data['created'] . "</strong><br />\n";
  echo "<p>\n";
  echo nl2br(htmlspecialchars($data['message'], ENT_QUOTES));
  echo "</p><input type='submit' name='reset' value='削除'>↑該当記事の削除↑</input>\n";
  echo "</p><input type='hidden' name='ID' value='".$data['no']."'></input>\n";
  echo "</form><br />\n";
}

$pdo = null;

?>

        
    </section>    

    <h2><a href="index.php">Topへ戻る</a></h2>
</body>
</html>