<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
<?php
function max_number($n1, $n2) {
  return max($n1,$n2);
  }


$a = "9";
$b = "21";
$result = max_number($a,$b);

echo "\$a = $a"."<br>";
echo "\$b = $b"."<br>";
echo "\$aと\$bのうち最大値は$result です";


?>

</body>
</html>
