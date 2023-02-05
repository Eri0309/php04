<?php
// SESSIONスタート
session_start();

// SESSIONのidを取得
// 空の変数を作る
$sid= session_id();

echo $sid;

// SESSION変数にデータを保存（登録）
$_SESSION['name'] = '中野';
$_SESSION['age'] = 28;

?>

<!-- php-4 -->