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
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
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

      
<div class="container">
    
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6 col-xs-offset-3">
              <div class="panel panel-primary">
                <div class="panel-body">
                <form action="login.php" method="post" id="login">
                  <table class="table">
                    <thead>
                        <tr>
                        <td></td>
                        <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="success">
                    <th>ユーザー名</th><td><input type="text" name="username" value="<?= $row['name'] ?>"></td>
                    </tr>
                    <tr class="success">
                    <th>パスワード</th><td>
                    <input type="text" name="password" value="<?= $row['lpw'] ?>">
                    </td>
                    </tr>
                    <tr class="success">
                    <th>ログインID</th><td><input type="text" name="loginid" value="<?=$row['lid']?>"></td>
                    </tr>
                    <tr class="success">
                    <th></th>
                    <td>
                    <div>
                    <input type="submit" id="submit" class="btn btn-primary btn-sm" id="toukou" name="toukou">
                    <input type="reset" id="reset" class="btn btn-primary btn-sm" name="reset">
                    </div>
                    </td>
                    </tr>
                </tbody>
                </table>
                </form>
                </div>
              </div>

        </div>
            
        </div>
        </div>
      </div>

    <div id="footer"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>