<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'todo';
function alllist($host,$username,$password,$dbname,$dbh){

    //DBへ接続
    $db = mysqli_connect($host,$username,$password,$dbname);

    //文字コード設定
    mysqli_set_charset($db,"utf8");

    //クエリの送信
    $query = "SELECT * FROM `task`";
    $result = mysqli_query($db , $query);

    if($result){
        //echo'クエリ成功';
        while ($row = mysqli_fetch_array($result)){
            $data[] = $row;//配列の取得
        }
    }else{
        '失敗';
    }

    if(!mysqli_close($db)){
        echo"切断に失敗";
    }
    return $data;//配列を帰す
}

//alllist関数の複製
function addTodo($host,$username,$password,$dbname,$dbh){

    //DBへ接続
    $db = mysqli_connect($host,$username,$password,$dbname);

    //文字コード設定
    mysqli_set_charset($db,"utf8");

    //クエリの送信
    $query = $dbh;//上からデータの取得
    $result = mysqli_query($db , $query);

    if($result){
    }else{
        '失敗';
    }

    if(!mysqli_close($db)){
        echo"切断に失敗";
    }else{
        header('Location: http://localhost/basic/study/index.php');
    }
    //dataの取得が必要ないのでreturnは消す。
}

//alllist関数の複製
function updDB($host,$username,$password,$dbname,$dbh){

    //DBへ接続
    $db = mysqli_connect($host,$username,$password,$dbname);

    //文字コード設定
    mysqli_set_charset($db,"utf8");

    //クエリの送信
    $query = $dbh;
    $result = mysqli_query($db , $query);

    if($result){
        //echo'クエリ成功';
        while ($row = mysqli_fetch_array($result)){
            $data[] = $row;//配列の取得
        }
    }else{
        '失敗';
    }

    if(!mysqli_close($db)){
        echo"切断に失敗";
    }
    return $data;//配列を帰す
}