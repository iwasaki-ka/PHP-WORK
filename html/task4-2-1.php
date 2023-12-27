<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
  <?php $month = rand(1, 12);

  switch ($month) {
    case 3;
    case 4;
    case 5;
      $season = "春";
      break;
    case 6;
    case 7;
    case 8;
      $season = "夏";
      break;
    case 9;
    case 10;
    case 11;
      $season = "秋";
      break;
   default:
     $season = "冬";
      break;
      
  }
  ?>

  <h1><?php echo $month; ?>月は<?php echo $season; ?> です。</h1>
  
</body>
</html>