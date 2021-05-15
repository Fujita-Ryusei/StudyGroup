<?php
require_once('dbconnect.php');
$method = $_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] === "GET")//POST/GET通信の判定
{
    //編集する情報の取得
    $id = $_GET["id"];//idデータの読み込み
    $dbh ="SELECT * FROM `task` WHERE `id` = '$id'";
    $data = updateTodo($host,$username,$password,$dbname,$dbh);//配列の取得
}elseif($method === 'POST'){
    //編集内容の登録
    $id = $_GET["id"];//データの読み込み
    $TodoName = $_POST["TodoName"];
    $comment = $_POST["comment"];
    $dbh = "UPDATE `task` SET `TodoName`= '$TodoName',`comment`= '$comment' WHERE `id` = $id ";
    addTodo($host,$username,$password,$dbname,$dbh);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>編集</h1>
    <?php 
    foreach((array)$data as $val): ?><!--配列の配置 -->
        <form method="post">
        タスク: <input type="text" name = "TodoName" value = "<?php echo $val['TodoName']?>"><br>
        詳細: <textarea name="comment"><?php echo $val['comment']?></textarea><br>
        <button type = "submit">登録</button>
    </form>
  <?php endforeach?>


</body>
</html>