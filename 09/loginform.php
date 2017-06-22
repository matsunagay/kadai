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

    <form action="login.php" method="post" id="login">
       <table>
        <p style="text-align:center">ログインフォーム</p>
        <tr><td>ログインID</td><td><input type="text" name="loginid"></td>
        </tr>
        <tr><td>パスワード</td><td>
        <input type="password" name="password">
        </td>
        </tr>
        </table>
        <div id="button">
        <input type="submit">
        <input type="reset">
        </div>
              <p style="text-align:center"><a href="user.php">会員登録まだの方はこちら</a></p>
    </form>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>