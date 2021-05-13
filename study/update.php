<?php
require_once('func.php');
$method = $_SERVER["REQUEST_METHOD"];//POST/GET通信の判定

if($method === 'GET'){
    //編集する情報の取得
    $id = filter_input(INPUT_GET,'id');//idデータの読み込み
    $sql ="SELECT * FROM `task` WHERE `id` = '$id'";
    $data = updDB($host,$username,$password,$dbname,$sql);//配列の取得
}elseif($method === 'POST'){
    //編集内容の登録
    $id = filter_input(INPUT_GET,'id');//データの読み込み
    $TodoName = filter_input(INPUT_POST,'TodoName');
    $comment = filter_input(INPUT_POST,'comment');
    $sql = "UPDATE `task` SET `TodoName`= '$TodoName',`comment`= '$comment' WHERE `id` = $id ";
    setDB($host,$username,$password,$dbname,$sql);
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