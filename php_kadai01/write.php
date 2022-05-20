<?php

$work = $_Post['work'];
$type = $_Post['type'];
$time = $_Post['time'];


//記入時間を取得
$date = date('Y/m/d H:i:s');

//ファイルに書き込み(ファイルを開く→書き込む→ファイルを閉じる)
//ファイルオープン
$file = fopen('data/data.txt', 'a');
//''内のアルファベットはどのようにファイルを開くかを表す
//aはadd

//ファイルに書き込み
fwrite($file, $date . $work . $type . $time . "\n");
// \n：テキストファイルの中で改行して保存される

//ファイルを閉じる
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
