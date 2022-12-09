<html>

<head>
    <meta charset="utf-8">
    <title>クボシュラン・ガイド</title>
    <style type="text/css">
    body {
    background-color: #d7003a ;
    color: #ffffff ;
    }
    </style>
</head>

<body>
    <div style="text-align:center;">
    <h2>クボシュラン・ガイド</h2>
    <form action="write.php" method="post">
        <p>店名　　: <input type="text" name="name"></p>
        <p>住所　　: <input type="text" name="address"></p>
        <p>ジャンル: <input type="text" name="genre"></p>
        <p>評価　　: <select name='stars'></p>
        <option value='★'>★</option>
        <option value='★★'>★★</option>
        <option value='★★★'>★★★</option>
        </select>
        <input type="submit" value="送信">
    </form>
    <img src="img/bib-michelin-man-footer.svg" width="15%">
    </div>
</body>

</html>
