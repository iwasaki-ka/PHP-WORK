<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOPページ</title>
  <link rel="stylesheet" href="../contact/reset.css">
  <link rel="stylesheet" href="../contact/stylesheet.css">
</head>
<body>
  <div class="container">
  <header>
    <div class="logo">
      <h1>ここには会社名が入ります</h1>
    </div>
    <nav>
      <a href="#">ボタン01</a>
      <a href="#">ボタン02</a>
    </nav>
  </header>

  <main>
    <section class="menu-section">
      <ul>
        <li><a href="#">メニュー01</a></li>
        <li><a href="#">メニュー02</a></li>
        <li><a href="#">メニュー03</a></li>
      </ul>
      <img src="../contact/mv.png" alt="Main Visual">
    </section> 

<?php
session_start();

try {
  
  $pdo = new PDO('mysql:host=localhost;dbname=consumer;charset=utf8mb4', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($_SERVER["REQUEST_METHOD"]=="POST"){ 
    
    $name = $_SESSION["form_data"]["name"];
    $furigana = $_SESSION["form_data"]["furigana"];
    $email = $_SESSION["form_data"]["email"];
    $tel = $_SESSION["form_data"]["tel"];
    $inquiry = $_SESSION["form_data"]["inquiry"];
    $message = $_SESSION["form_data"]["message"];
    $privacyPolicy = $_SESSION["form_data"]["privacypolicy"];
    $date = date('Y-m-d H:i:s');

    
    $stmt = $pdo->prepare("INSERT INTO consumer (name, furigana, email, tel, inquiry, message, privacyPolicy, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    
    $stmt->execute([$name, $furigana, $email, $tel, $inquiry, $message, $privacyPolicy, $date]);

    
    session_unset();
?>
  <p class="kanryou">送信完了しました。</p>";

<?php
  }
} catch(PDOException $e) {
  echo "データベース接続エラー: " . $e->getMessage();
  exit;
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
