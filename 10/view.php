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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="style.css" rel="stylesheet" type="text/css">
<title>Airticle!</title>
</head>

<body>
   <div id="wrapper">
   
<?php include("header.php"); ?>
    

        <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6 col-xs-offset-3">
              <div class="panel panel-primary">
                <div class="panel-body">
                  <table class="table">
                    <thead>
                        <tr>
                        <td><?php echo $_SESSION["NAME"]."さんこんにちは" ?></td>
                        <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php echo $view; ?>
                    </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>
                </div>

    <div id="footer"></div>
   </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>

</html>
