<?php
$book_id = $_GET["id"];



try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE book_id = :book_id ");

$stmt ->bindValue(':book_id', $book_id , PDO::PARAM_INT);

$status = $stmt->execute();

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    header("Location: view.php");
    exit;
  }


?>