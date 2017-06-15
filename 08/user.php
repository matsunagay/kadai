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
    <form action="usertourokuconfirm.php" method="post">
      <p style="text-align:center">会員情報登録</p>
       <table>
        <tr><td>ユーザー名</td><td><input type="text" name="username"></td>
        </tr>
        <tr><td>ログインID</td><td><input type="text" name="loginid"></td>
        </tr>
        <tr><td>パスワード</td><td>
        <input type="password" name="password">
        </td>
        </tr>
        </table>
        <div id="button">
        <input type="submit" name="touroku" value="登録する">
        <input type="reset" name="reset" value="リセット">
        </div>
    <P style="text-align:center"><a href="loginform.php">会員登録済みの方はこちら</a></P>
    </form>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>