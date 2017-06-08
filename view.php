<?php

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");

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
    $view .= '<tr><td rowspan="2">';
    $view .= $result["id"];
    $view .= '</td><td>';
    $view .= $result["bookname"];
    $view .= '</td><td>';
    $view .= $result["bookURL"];
    $view .= '</td><td>';
    $view .= $result["indate"];
    $view .= '</td></tr>';
    $view .= '<tr><td colspan="3">';
    $view .= $result["comment"];
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
<script>
window.onload=function(){
document.getElementById("siborikomi").onclick=function(){
 var from =
     document.getElementById("from").value;
 var to = document.getElementById("to").value;
 if(from>to){
    alert("入力値を確認してください");
 }
};
};
</script>


</head>

<body>
   <div id="wrapper">
   
    <div id="header">
    
    <div id="nav">
     <nav>
      <ul id="ul">
          <li><a href="index.php">書評を投稿する</a></li>
          <li><a href="view.php">書評を見る</a></li>
      </ul>
       </nav>
    </div>
    </div>
    
    <div id="content">
    
    
    <table border="1">
    <?php echo $view; ?>
    </table>
    </div>
    
    <div id="footer"></div>
   </div>

</body>




</html>
