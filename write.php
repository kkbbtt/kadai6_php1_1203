<?php
$name = $_POST['name'];
$address = $_POST['address'];
$genre = $_POST['genre'];
$stars = $_POST['stars'];

// aモードでファイルをオーブン
$file = fopen('data/kadai.txt', 'a');

//ファイルへの書き込み
fwrite($file,$name .$address .$genre . $stars . "\n");

//ファイルを閉じる
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <style type="text/css">
    body {
    background-color: #d7003a ;
    color: #ffffff ;
    }
    </style>
    <title>クボシュラン・ガイド</title>
</head>

<body>
<div style="text-align:center;">
<h1>レビュー完了</h1>
<table style="margin:auto;">
<tr>
<td>店名</td>
<td><?php echo $name ?></td>
</tr>
<tr>
<td>住所</td>
<td><?php echo $address ?></td>
</tr>
<tr>
<td>ジャンル</td>
<td><?php echo $genre ?></td>
</tr>
<tr>
<td>評価</td>
<td><?php echo $stars ?></td>
</tr>
<tr>
</table>

<p><a href="read.php">・アーカイブを見る</a></p>
<p><a href="input.php">・戻る</a></p>

</div>
</body>

</html>
