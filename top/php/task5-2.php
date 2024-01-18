<!DOCTYPE html>
<html>
<head>
    <title>1週間の配列</title>
</head>
<body>
        <?php
        $week = array("月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日", "日曜日");
        $i = 0;
        while ($i < count($week)) {
            echo "<li>" . $week[$i] . "</li>";

            $i++;
        }
        ?>
</body>
</html>
