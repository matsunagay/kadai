<?php
$username=$_POST["username"];
$loginid=$_POST["loginid"];
$password=$_POST["password"];
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

    <div id="form">
       <table>
        <tr><td>ユーザー名</td><td>
        <?php echo $username ?>
        </td>
        </tr>
        <tr><td>ログインID</td><td>
        <?php echo $loginid ?>
        </td>
        </tr>
        <tr><td>パスワード</td><td>
        <?php echo $password ?>
        </td>
        </tr>
        </table>
        
        
        <form action="usertouroku.php" method="post">
        <input type="hidden"
        name="username"
          value="<?= $username ?>">
        <input type="hidden"
        name="loginid"
          value="<?= $loginid ?>">
        <input type="hidden"
        name="password"
          value="<?=  $password ?>">
        <input type="submit" value="touroku" value="登録する">
        </form>
        <form action="user.php" method="post">
        <input type="submit" name="modoru" value="戻る">
        </form>
    </div>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>