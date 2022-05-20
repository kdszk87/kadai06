<?php
// ファイルを開く
$opebFile = fopen('data/data.txt', 'r');
//''内のアルファベットはどのようにファイルを開くかを表す
//rはread

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($opebFile)){ //一行ずつ読み込んでstrに入れる
    echo nl2br($str); //改行があったら
}

// ファイルを閉じる
fclose($opebFile);