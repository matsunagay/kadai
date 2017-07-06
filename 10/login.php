<?php

require 'password.php';
session_start();

// ログインボタンが押された場合
if (isset($_POST["loginid"])) {
    // 1. ユーザIDの入力チェック
    if (empty($_POST["loginid"])) {  // emptyは値が空のとき
        echo 'ログインIDが未入力です。';
    } else if (empty($_POST["password"])) {
        echo 'パスワードが未入力です。';
    }
}
    if (!empty($_POST["loginid"]) && !empty($_POST["password"])) {
    // 入力したユーザIDを格納
    $loginid = $_POST["loginid"];
  
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
     
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid = '$loginid' ");
$stmt->execute(array($loginid));

$password = $_POST["password"];

 if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

if (password_verify($password, $row['lpw'])) {session_regenerate_id(true);
                                              
// 入力したIDのユーザー名を取得
$id = $row['lid'];
$sql = "SELECT * FROM gs_user_table WHERE lid = '$id' ";  //入力したIDからユーザー名を取得
$stmt = $pdo->query($sql);
foreach ($stmt as $row) {
$row['user_id'];
$row['name'];  // ユーザー名
}
$_SESSION["user_id"] = $row['user_id'];
$_SESSION["NAME"] = $row['name'];
header("Location: index.php");  // メイン画面へ遷移
exit();  // 処理終了
}
else {
// 認証失敗
$errorMessage = 'ユーザーIDあるいはパスワードに誤りがあります。';
echo $errorMessage; }
}
else{
echo 'ユーザーIDあるいはパスワードに誤りがあります。';
}
}
catch (PDOException $e) {
var_dump($e);
print('エラー:'.$e->getMessage());
}
}

?>