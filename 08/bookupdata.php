<?php
//1.POSTでParamを取得
$id = $_POST["id"];
$bookname = $_POST["bookname"];
$bookURL = $_POST["bookURL"];
$comment = $_POST["comment"];

//2.DB接続など

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。

$update = $pdo->prepare("UPDATE gs_bm_table SET bookname=:bookname,bookURL=:bookURL,comment=:comment WHERE id=:id");

$update->bindValue(':id', $id, PDO::PARAM_INT);
$update->bindValue(':bookname', $bookname, PDO::PARAM_STR);
$update->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);
$update->bindValue(':comment', $comment, PDO::PARAM_STR);

$status = $update->execute();

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $update->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    header("Location: index.php");
    exit;
  }

?>
