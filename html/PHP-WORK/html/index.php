<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
$message = '今日の日付：'.date('Y/m/d');
define('TITLE','定数とは');
?>
  <h1>Hello PHP World!</h1>
  <p><?= $message ?></p>
  <p><?= TITLE; ?></p>
</body>
</html>