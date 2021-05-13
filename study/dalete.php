<?php
require_once('func.php');
$id = filter_input(INPUT_POST,'id');
if($id){
    $sql = "DELETE FROM `task` WHERE id = $id";
    $data = setDB($host,$username,$password,$dbname,$sql);//データの読み込み
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