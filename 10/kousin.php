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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
<link href="style.css" rel="stylesheet" type="text/css">

<title>Modify!</title>
</head>

<body>
   <div id="wrapper">
   
<?php include("header.php"); ?>

<div class="container">
    
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6 col-xs-offset-3">
              <div class="panel panel-primary">
                <div class="panel-body">
                 <p><?php echo $_SESSION["NAME"]."さんこんにちは" ?></p>
                  <table class="table">
                <form action="bookupdata.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id;?>">
                    <thead>
                        <tr>
                        <th></th>
                        <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="success"><th>書籍名</th><td><input type="text" name="bookname" value="<?=$row["bookname"]; ?>" ></td>
                    </tr>
                    <tr class="success"><th>URL</th><td>
                    <input type="text" name="bookURL"
                    value="<?=$row["bookURL"]; ?>">
                    </td>
                    </tr>
                    <tr class="success"><th>コメント</th><td>
                    <textarea cols="35" rows="10" name="comment">
                    <?= $row["comment"]; ?></textarea>
                    </td></tr>
                    <tr class="success">
                    <th></th>
                    <td>
                    <div>
                    <input type="submit" id="submit" class="btn btn-primary btn-sm" id="toukou" name="toukou">
                    <input type="reset" id="reset" class="btn btn-primary btn-sm" name="reset">
                    </div>
                    </td>
                    </tr>
                </form>
                </tbody>
                </table>
                   <form method="get" action="bookdelete.php">
                    <input type=hidden name="id" value="<?=$id;?>">
                       <span class="input-group-addon"><input type="submit" class="btn btn-warning btn-sm" value="削除"></span>
                    </form>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

    <div id="footer"></div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>