<?php
require_once('dbconnect.php');
$data = array();//配列の入ったデータの取得
$dbh = "";
$data = alllist($host,$username,$password,$dbname,$dbh);//配列の引き渡し
// var_dump($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
<h1>タスク</h1>
  <a href="create.php">新規追加</a>
  <table border = 1>
    <tr>
      <td>id</td>
      <td>タスク</td>
      <td>詳細</td>
      <td>編集削除</td>
    </tr>
    <?php foreach($data as $val): ?><!--配列の配置 -->
    <tr>
    　<td><?php echo $val['id']?></td>
      <td><?php echo $val['TodoName']?></td>
      <td><?php echo $val['comment']?></td>
      <td>
        <a href="update.php?id=<?php echo $val['id']?>">編集</a><!-- idをupdateに渡す -->
        <a href="delete.php?id=<?php echo $val['id']?>">削除</a><!-- idをdeleteに渡す -->
      </td>
    </tr>
  <?php endforeach?>
  </table>
</body>
</html>