<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
<?php
echo "<table>";
for($i = 1; $i <= 9; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= 9; $j++) {
    echo "<td>" . $i . " x " . $j . " = " . ($i * $j) . " </td>";
  }
  echo "</tr>";
}
echo "</table>";

?>
</body>
</html>