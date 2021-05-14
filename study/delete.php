<?php
require_once('func.php');
$id = filter_input(INPUT_GET,'id');
if($id){
//deleteクエリの実行
    $dbh = "DELETE FROM `task` WHERE `id` = '$id'";
    setDB($host,$username,$password,$dbname,$dbh);//データの読み込み
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