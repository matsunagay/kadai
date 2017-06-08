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
   
    <div id="header">
    
    <div id="nav">
     <nav>
      <div>
      <ul id="ul">
          <li><a href="index.php">書評を投稿する</a></li>
          <li><a href="view.php">書評を見る</a></li>
      </ul>
      </div>
       </nav>
    </div>
    </div>
    
    <div id="content">
    
    <div id="form">
    <form action="insert.php" method="post">
       <table>
        <tr><td>書籍名</td><td><input type="text" name="bookname"></td>
        </tr>
        <tr><td>URL</td><td>
        <input type="text" name="bookURL">
        </td>
        </tr>
        <tr><td>コメント</td><td>
        <input type="textarea" cols="50" rows="10" name="comment">
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
   </div>

</body>
</html>