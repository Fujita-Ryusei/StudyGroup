<?php
require_once('func.php');
$data = array();
$name = filter_input(INPUT_POST,'name');
$sql = "SELECT * FROM `users` WHERE `name`=:name ";//ここがおかしいです
$data = allList($host,$username,$passwd,$dbname,$sql);
/*
db構造
php->users->id,name,allergy,kcal
*/
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8"> 
    <title>栄養管理システム</title>
  </head>
  <body>
    <h1>12歳以上の栄養管理</h1>
    <form name="gender">
      <input type="radio" name="gen" value="800kcal" checked /> 男性
      <input type="radio" name="gen" value="600kcal" /> 女性
    </form>
    <input type="button" value="実行" onclick="clickBtn1()"/>
    <p>一食当たりの適正カロリー <span id="span1"></span></p>
    <script>
      function clickBtn1() {
        let str = "";
        const gen = document.gender.gen;

        for (let i = 0; i < gen.length; i++) {
          if (gen[i].checked) {//(gen[i].checked === true)と同じ
            str = gen[i].value;
            break;
          }
        }
        document.getElementById("span1").textContent = str;
      }
    </script>
    <table border = "1">//個々の機能は未実装です。、
      <tr>
        <td>アレルギー</td>
        <td>甲殻類<input type="checkbox"></td>
        <td>海鮮<input type="checkbox"></td>
        <td>牛肉<input type="checkbox"></td>
        <td>乳<input type="checkbox"></td>
        <td>鶏卵<input type="checkbox"></td>
        <td>大豆<input type="checkbox"></td>
      </tr>
    </table>
    <h1>キーワード検索</h1>
    <form method="post">
      ID: <input type="text" name="id">
      <input type="submit">
    </form>
     <form method="post">
      料理名: <input type="text" name="name">
      <input type="submit">
    </form>
    <table border = "1">
      <tr>
        <td>id</td>
        <td>料理名</td>
        <td>アレルギー</td>
        <td>カロリー</td>
      </tr>
      <?php foreach($data as $val): ?>
      <tr>
        <td><?php echo $val['id'] ?></td>
        <td><?php echo $val['name'] ?></td>
        <td><?php echo $val['allergy'] ?></td>
        <td><?php echo $val['kcal'] ?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>
