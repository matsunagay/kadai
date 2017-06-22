<?php
$id = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE book_id = $id ");
$status = $stmt->execute();

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
    <title>投稿画面</title>
</head>

<body>
   <div id="wrapper">
   
<?php include("header.php"); ?>
    
    <div id="content">
    
    <div id="form">
    <form action="bookupdata.php" method="post">
    <input type="hidden" name="id" value="<?=$id;?>">
       <table>
        <tr><td>書籍名</td><td><input type="text" name="bookname" value="<?=$row["bookname"]; ?>" ></td>
        </tr>
        <tr><td>URL</td><td>
        <input type="text" name="bookURL"
        value="<?=$row["bookURL"]; ?>">
        </td>
        </tr>
        <tr><td>コメント</td><td>
        <input type="textarea" cols="50" rows="10" name="comment" value="<?=$row["comment"]; ?>">
        </td></tr>
        </table>
        <div id="button">
        <input type="submit" id="toukou" name="toukou" value="投稿する">
        <input type="reset" id="reset" name="reset" value="リセット">
        </div>
    </form>
    <form method="get" action="bookdelete.php">
        <input type=hidden name="id" value="<?=$id;?>">
        <input type="submit" value="削除">
    </form>
    </div>

    </div>
    
    <div id="footer"></div>
   </div>

</body>
</html>