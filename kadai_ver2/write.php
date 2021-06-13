<?php

// POSTデータ取得
$name = $_POST["name"];
$name_kana = $_POST["name_kana"];
$email = $_POST["email"];
$mil = $_POST["mil"];
$reason = $_POST["reason"];
$business_area = $_POST["business_area"];
$money = $_POST["money"];

//文字列作成（日付）
// 申込時間取得
$date = date("Y/m/d H:i:s");


// //配列を定義する
// $ary = array($date, $name, $name_kana, $email, $mil);
// //ファイルを読み込む
// $file = fopen("data/data.csv","w");
// foreach($ary as $line){
//     fputcsv($file, $line);
// }

// if($file){
//     foreach($ary as $line){
//         fputcsv($file, $line);
//     }
// }
//ファイルを閉じる
// fclose($file);

//登録文字列
$str = $date . ',' . $name . ',' . $name_kana . ',' . $email . ',' . $mil . ',' . $reason . ',' . $business_area . ',' . $money;

// ファイルを読み込む
$file = fopen("data/data.csv","a");
// ファイルに書き込む
fwrite($file, $str. "\n");
// ファイルを閉じる
fclose($file);

// // read.phpにリダイレクト
// // header("Location: read.php");
// // exit();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<ul>
    <li><a href="read.php">登録内容の確認</a></li>
</ul>

</body>
</html>