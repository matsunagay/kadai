<?php

session_start();
if(!isset($_SESSION["NAME"]))
{header('Location:loginform.php');
exit;}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>投稿画面</title>
</head>

<body>
   <div id="wrapper">

<?php include("header.php"); ?>
    
    <div id="content">

    <div id="form">
    <form action="insert.php" method="post">
       <table>
       <?php echo $_SESSION["NAME"]."さんこんにちは" ?>
        <tr><td>書籍名</td><td><input type="text" name="bookname"></td>
        </tr>
        <tr><td>URL</td><td>
        <input type="text" name="bookURL">
        </td>
        </tr>
        <tr><td>コメント</td><td>
        <textarea cols="35" rows="10" name="comment"></textarea>
        </td></tr>
        </table>
        <div id="button">
        <input type="submit" id="toukou" name="toukou" value="投稿する">
        <input type="reset" id="reset" name="reset" value="リセット">
        </div>
    </form>
    </div>
    </div>


    
    <div id="footer"></div>

</body>
</html>