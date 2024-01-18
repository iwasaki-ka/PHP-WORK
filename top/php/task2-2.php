<!DOCTYPE html>
<html>
<head>
    <title>PHP練習</title>
</head>
<body>

    <?php
    $products = array(
      "鉛筆" => array("価格" => 100,"税込価格" => 110),
      "消しゴム" => array("価格" => 200,"税込価格" => 220),
      "定規" => array("価格" => 300,"税込価格" => 330),
    );
    ?>

    <table border="1" style="border-collapse: collapse">
     <tr>
      <th>商品名</th>
      <th>価格</th>
      <th>税込価格</th>
     </tr>
    
     <?php 
     foreach ($products as $productsname => $productsinfo){
      echo "<tr>";
      echo "<td>{$productsname}</td>";
      echo "<td>{$productsinfo['価格']}円</td>";
      echo "<td>{$productsinfo['税込価格']}円</td>";
      echo "<tr>";
     }
     ?>

    </table>
</body>
</html>
