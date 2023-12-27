<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
  <?php
  $month = rand(1,12);
  
  if($month >= 3 && $month <=5 ){
    $season = "春"; 
  } elseif($month >= 6 && $month <= 8){
    $season = "夏";
  } elseif($month >= 9 && $month <=11){
    $season = "秋";
  } else{
    $season = "冬";
  }
  ?>

  <h1><?php echo $month;?>月は<?php echo $season; ?>です。</h1>
  
</body>
</html>