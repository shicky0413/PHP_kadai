<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>

<table border='1'> 
<tr>
    <th>日時</th>
    <th>名前</th>
    <th>カナ</th>
    <th>Eメール</th>
    <th>MILを知ったきっかけ</th>
    <th>志望動機</th>
    <th>事業領域</th>    
    <th>想定事業規模</th>
</tr>

<?php
//data.csvを開いて読み込みモードにする
// $file = fopen("data.csv","r");

// //テーブルタグを作成し、テーブルヘッダーで見出しを作る
// echo'<table border="1">
//     <tr>
//         <th>日時</th>
//         <th>名前</th>
//         <th>カナ</th>
//         <th>Eメール</th>
//         <th>理由</th>
//     </tr>';

// //while文でCSVファイルのデータを１つずつ繰り返し読み込む
// while($data = fgetcsv($file)){
//     //テーブルセルに配列の値を格納
//     echo'<tr>';
//     echo'<td>'.$data[0].'</td>';
//     echo'<td>'.$data[1].'</td>';
//     echo'<td>'.$data[2].'</td>';
//     echo'<td>'.$data[3].'</td>';
//     echo'<td>'.$data[4].'</td>';
//     echo'</tr>';
// }
// echo'</table>';

if(($file = fopen("data/data.csv","r"))===false ){
    die("CSVファイル読み込みエラー");
}
while(($array = fgetcsv($file))!== FALSE){
    if(!array_diff($array,array(''))){
        continue;
    }
    echo "<tr>";
    for($i = 0; $i < count($array); ++$i){
        $elem = nl2br(mb_convert_encoding($array[$i], 'UTF-8','UTF-8'));
        $elem = $elem === "" ? "&nbsp;" : $elem;
        echo("<td>".$elem."</td>");
    }
    echo "</tr>";
}
fclose($file);

// //ファイルを変数に格納
// $file = 'data/data.txt';

// //readfileでファイルの全文出力
// readfile($file);

// //配列を出力
// print_r($lines);

// // //ファイルを開く
// // $file = fopen('/data/data.txt','r');


// // //ファイル内容を一行ずつ読み込んで出力
// // //whileデータの数だけ行う
// // while($str = fget($file)){
// //     echo nl2br($str);
// // }
// //ファイルを閉じる

?>

</table>
 
</body>
</html>