<?php
require_once('dbconnect.php');
$id = filter_input(INPUT_POST,'id');
if($id){
    $dbh = "DELETE FROM `task` WHERE id = $id";
    $data = addTodo($host,$username,$password,$dbname,$dbh);//データの読み込み
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