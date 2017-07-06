<?php

session_start();
if(!isset($_SESSION["NAME"]))
{header('Location:loginform.php');
exit;}

 try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_user_table");

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
    $view .= '<tr><td><a href="userhenkou.php?id='.$result["user_id"].'">';
    $view .= $result["name"];
    $view .= '</a></td><td>';
    $view .= $result["lid"];
    $view .= '</td><td>';
    $view .= $result["lpw"];
    $view .= '</td></tr>';
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
<title>Users!</title>
</head>

<body>
   <div id="wrapper">
   
<?php include("header.php"); ?>
    
    
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6 col-xs-offset-3">
              <div class="panel panel-primary">
                <div class="panel-body">
                 <p><?php echo $_SESSION["NAME"]."さんこんにちは" ?></p>
                  <table class="table">
                    <thead>
                        <tr>
                        <td></td>
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
