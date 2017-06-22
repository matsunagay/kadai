<?php

require 'password.php';

$username=$_POST["username"];
$loginid=$_POST["loginid"];
$password=$_POST["password"];

$options=array('cost'=>10);
$hash=password_hash($password,PASSWORD_DEFAULT,$options);
$password=$hash;


try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(user_id, name, lid, lpw )VALUES(NULL, :name, :lid, :lpw)");
$stmt->bindValue(':name', $username, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $loginid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
    
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>ユーザー登録</title>
</head>

<body>
   <div id="wrapper">

<?php include("loginmaeheader.php"); ?>
    
    <div id="content">

<p>ご登録ありがとうございました。</p>
<P><a href="loginform.php">続けてログインする方はおちら</a></P>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>