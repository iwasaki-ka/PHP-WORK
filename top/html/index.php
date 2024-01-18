<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
define('TITLE','Hello PHP World!');
$message = '演算子とは';
$a = 3;
$b = 2;

?>
  <h1><?= TITLE; ?></h1>
  <p><?= $message ?></p>
  <p>
    <?php
    //echo $a + $b .'<br>';
    //echo $a - $b .'<br>';
    //echo $a * $b .'<br>';
    //echo $a / $b .'<br>';
    //echo $a % $b .'<br>';
    //echo $a ** $b .'<br>';
    $a = 'PHP ';
    $b = 'World';
    $a  .= $b;
    echo $a;
    ?>
  </p>

</body>
</html>