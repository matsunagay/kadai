<?php

$id=$_GET["id"];

 try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE user_id = $id ");

$status = $stmt->execute();

//３．データ表示

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>ユーザー変更</title>
</head>

<body>
   <div id="wrapper">

<?php include("header.php"); ?>
    
    <div id="content">

    <div id="form">
    <form action="userhenkouconfirm.php" method="post">
    
    <input type="hidden"
    name="id" value="<?= $id ?>">
      
       <table>
        <tr><td>ユーザー名</td><td><input type="text" name="username" value="<?= $row['name'] ?>"></td>
        </tr>
        <tr><td>ログインID</td><td><input type="text" name="loginid" value="<?=$row['lid']?>"></td>
        </tr>
        <tr><td>パスワード</td><td>
        <input type="text" name="password" value="<?= $row['lpw'] ?>">
        </td>
        </tr>
        </table>
        <div id="button">
        <input type="submit" name="touroku" value="登録する">
        <input type="reset" name="reset" value="リセット">
        </div>
    </form>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>