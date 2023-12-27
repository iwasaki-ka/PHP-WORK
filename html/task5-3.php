<!DOCTYPE html>
<html>
<head>
    <title>PHP練習</title>
</head>
<body>

<?php
    $product = array(
        "鉛筆" => 100,
        "消しゴム" => 200,
        "定規" => 300
    );

    ?>

    <table border="1" style="border-collapse: collapse">
     <tr>
      <th>商品名</th>
      <th>価格</th>
      <th>税込価格</th>
     </tr>
    
     <?php
        foreach ($product as $name => $price) {
            $taxprice = $price * 1.1; 
            echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>{$price}円</td>";
            echo "<td>{$taxprice}円</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
