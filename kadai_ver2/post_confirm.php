<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST["name"];
$mail = $_POST["email"];
//受け取る場合はPOST,urlに情報乗らないので安心

//XSS対策関数 
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}



?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>

    <ul>
        <li> お名前：<?= h($name); ?> </li>
        <li> Mail：<?= h($email); ?> </li>
    </ul>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>