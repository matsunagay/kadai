<?php
$id=$_POST["id"];
$username=$_POST["username"];
$loginid=$_POST["loginid"];
$password=$_POST["password"];

var_dump($_POST);

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_user_table SET name=:name, lid=:lid, lpw=:lpw WHERE id=:id ");

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $username, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $loginid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
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

<?php include("header.php"); ?>
    
    <div id="content">

<p>登録情報を変更しました</p>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>