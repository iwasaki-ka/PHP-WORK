<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
<?php
function showString($num, $str) {
  for ($i = 0; $i < $num; $i++) {
      echo $str . "<br>"; 
  }
}

$num = 3;
$str = "気合いだ！";
showString($num, $str);

?>

</body>
</html>
