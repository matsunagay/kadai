<?php

session_start();
if(!isset($_SESSION["NAME"]))
{$_SESSION["NAME"]='名無し';}

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table INNER JOIN gs_user_table on gs_user_table.user_id=gs_bm_table.user_id ");

$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr><td rowspan="6"><a href="kousin.php?id='.$result["book_id"].'">';
    $view .= $result["book_id"];
    $view .= '</td></tr>';
    $view .= '<tr><td>';
    $view .= "投稿者：".$result["name"]."さん";
    $view .= '</td></tr>';
    $view .= '<tr><td>';
    $view .= "書名：".$result["bookname"];
    $view .= '</td></tr>';
    $view .= '<tr><td>';
    $view .= "URL：".$result["bookURL"];
    $view .= '</td></tr>';
    $view .= '<tr><td>';
    $view .= "投稿日時：".$result["indate"];
    $view .= '</td></tr>';
    $view .= '<tr><td>';
    $view .= "コメント：<br>".$result["comment"];
    $view .='</td></tr>';
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<link href="style.css" rel="stylesheet" type="text/css">
<base target="_self">

</head>

<body>
   <div id="wrapper">
   
<?php include("header.php"); ?>
    

    
    <div id="content">
    <?php echo $_SESSION["NAME"]."さんこんにちは" ?>
    
    <table border="1">
    <?php echo $view; ?>
    </table>
    </div>
    
    <div id="footer"></div>
   </div>

</body>




</html>
