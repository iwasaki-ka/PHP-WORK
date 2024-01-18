<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Document</title>
</head>
<body>
<?php
$random_number = rand(0, 99);

if ($random_number < 5) {
    $fortune = "大凶";
} elseif ($random_number < 20) {
    $fortune = "凶";
} elseif ($random_number < 50) {
    $fortune = "吉";
} elseif ($random_number < 80) {
    $fortune = "中吉";
} else {
    $fortune = "大吉";
}
?>

<h1>今日の運勢は"<?php echo $fortune; ?> "です。</h1>

</body>
</html>

