<?php
    require_once('func.php');
    $method = $_SERVER["REQUEST_METHOD"];//POST/GET通信の判定
    $data = array();
    if($method == 'POST') {
        $TodoName = filter_input(INPUT_POST,'TodoName');//入力されたデータの読み込み
        $comment = filter_input(INPUT_POST,'comment');
        $sql = "INSERT INTO `task`(`TodoName`, `comment`) VALUES ('$TodoName','$comment')";//INSERTクエリの実行
        setDB($host,$username,$password,$dbname,$sql);//データの読み込み
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>追加</h1>
    <form method="post">
        タスク: <input type="text" name = "TodoName"><br>
        詳細: <input type="text" name = "comment"><br>
        <button type = "submit">登録</button>
    </form>
</body>
</html>