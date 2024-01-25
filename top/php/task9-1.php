<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせページ</title>
  <link rel="stylesheet" href="../contact/reset.css">
  <link rel="stylesheet" href="../contact/stylesheet.css">
</head>
<body>

<div class="container">
  <header>
    <div class="logo">
      <h1>ここには会社名が入ります</h1>
    </div>
    <nav class="menu">
      <a href="#">ボタン01</a>
      <a href="#">ボタン02</a>
    </nav>
  </header>

  <main>
    <section class="menu-section">
      <ul>
        <li><a href="\php">メニュー01</a></li>
        <li><a href="#">メニュー02</a></li>
        <li><a href="#">メニュー03</a></li>
      </ul>
      <img src="../contact/mv.png" alt="Main Visual">
    </section> 


<?php
date_default_timezone_set('Asia/Tokyo');
session_start();

try {
  
  $pdo = new PDO('mysql:host=localhost;charset=utf8mb4', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("CREATE DATABASE IF NOT EXISTS consumer");
  $pdo->exec("USE consumer");
  $pdo->exec("CREATE TABLE IF NOT EXISTS consumer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    furigana VARCHAR(30),
    email VARCHAR(50),
    tel VARCHAR(15),
    inquiry TEXT,
    message TEXT,
    privacyPolicy VARCHAR(10),
    date TIMESTAMP
)");

  if ($_SERVER["REQUEST_METHOD"]=="POST"){ 
    
    $name = $_POST["name"];
    $furigana = $_POST["furigana"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $inquiry = $_POST["inquiry"];
    $message = $_POST["message"];
    $privacyPolicy = $_POST["privacypolicy"];
    $date = date('Y-m-d H:i:s');

    
    $stmt = $pdo->prepare("INSERT INTO consumer (name, furigana, email, tel, inquiry, message, privacyPolicy, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    
    $stmt->execute([$name, $furigana, $email, $tel, $inquiry, $message, $privacyPolicy, $date]);

    
    session_unset();
?>
  <div class="kanryou">
  <p >送信完了しました。</p>
  </div>

<?php
  }
} catch(PDOException $e) {
  echo "データベース接続エラー: " . $e->getMessage();
}
?>
 <section class="section05">
    <div class="sec05_wrapper">
      <div class="link01">
      <h3>こちらからご購入ください</h3>
      <nav class="shop">
      <a href="#">ネットショップ</a>
      </nav>
      </div>
      <div class="link02">
      <h3>お気軽にお問い合わせください。</h3>
      <nav class="contact">
      <a href="../contact/index.html">お問い合わせ</a>
      </nav>
      </div>
    </div>
  </section>

    <section class="section06">
      <h4>ここには会社名が入ります</h4>
      <p>住所が入ります</p>
      <p>03-1234-5678</p>
      <p>営業時間:9:00～18:00</p>
    </section>
  </main>

  <footer>
    <ul class="linklist">
      <li><a href="#">リンク01</a></li>
      <li><a href="#">リンク02</a></li>
      <li><a href="#">リンク03</a></li>
      <li><a href="#">リンク04</a></li>
      <li><a href="#">リンク05</a></li>
      <li><a href="#">リンク06</a><br><br><a  href="#">リンク07</a></li>
    </ul>  
    <p>ここには会社名が入ります&copy; Copylight</p>

  </footer>
  </div>
</body>
</html>