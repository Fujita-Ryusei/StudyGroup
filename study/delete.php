<?php
require_once('dbconnect.php');
$id = $_GET["id"];
if($id){
//deleteクエリの実行
    $dbh = "DELETE FROM `task` WHERE `id` = '$id'";
    addTodo($host,$username,$password,$dbname,$dbh);//データの読み込み
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>削除</h1>
</body>
</html>