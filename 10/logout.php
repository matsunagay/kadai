<?php

session_start();

$_SESSION=array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,'/');}

session_destroy();

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

<p>ログアウトしました</p>
<P><a href="loginform.php">ログインする方はこちら</a></P>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>