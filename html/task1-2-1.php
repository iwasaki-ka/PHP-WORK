<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
 <?php
define("CONSUMPITION_TAX","10");

$Name1 ="鉛筆";
$Name2 ="消しゴム";

$price1 =100;
$price2 =200;

$price1tax = 110;
$price2tax = 220;

 ?>

  <?php 
  echo "現在、消費税は",CONSUMPITION_TAX,"%です。<br>";
  echo $Name1,"が",$price1,"円で税込",$price1tax,"円です。<br>";
  echo $Name2,"が",$price2,"円で税込",$price2tax,"円です。<br>";

  ?>
</body>
</html>