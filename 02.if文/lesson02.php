<?php
// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、下記のフォーマットで出力するプログラムを作ってください。
// ○○点は「○」です。

$score = 100; //いくつかのケースで動作確認を行ってください。

if ($score >= 80){
    echo $str='優';
}elseif($score< 80 && $score >= 60){
    echo $str='良';
}elseif($score<60 && $score >= 40){
    echo $str='可';
}elseif($score < 40){
    echo $str='不可';
}

echo "{$score}点は{$str}です。";
?>
