<?php
 if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $name = $_POST["name"];
  $furigana = $_POST["furigana"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $inquiry = $_POST["inquiry"];
  $message = $_POST["message"];
  $privacyPolicy = $_POST["privacyPolicy"];

 $errors =[];
 if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $errors[]="メールアドレスが正しくありません。";
 }
 if(!preg_match("/^\d{10,11}$/",$tel)){
  $errors[]="電話番号は10桁または11桁で入力してください。";
 }
 if($inquiry=="選択してください"){
  $errors[]="お問い合わせ項目を選択してください。";
 }
 if(empty($message)){
  $errors[]="お問い合わせ内容が空白です。";
 }
 if(empty($name)){
  $errors[]="名前が入力されていません。";
 }
 if(empty($furigana)){
  $errors[]="フリガナが入力されていません。";
 }
 if(empty($privacyPolicy)){
  $errors[]="個人情報保護方針にチェックが入っていません。";
 }

if(empty($errors)){
  header("Location:C:\work\html\PHP-WORK\top\php\task8-2.php");
  exit;
}

 }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOPページ</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="C:\work\html\PHP-WORK\top\contact\stylesheet.css">
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
        <li><a href="#">メニュー01</a></li>
        <li><a href="#">メニュー02</a></li>
        <li><a href="#">メニュー03</a></li>
      </ul>
      <img src="mv.png" alt="Main Visual">
    </section> 

    <?php if(!empty($errors)):?>
      <div class="error">
       <?php foreach($errors as $error):?>
       <p><?php echo $error;?></p>
       <?php endforeach;?>
      </div>
    <?php endif;?>  

    <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOPページ</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
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
        <li><a href="#">メニュー01</a></li>
        <li><a href="#">メニュー02</a></li>
        <li><a href="#">メニュー03</a></li>
      </ul>
      <img src="mv.png" alt="Main Visual">
    </section> 

    <section class="contact-form-section">
      <h1>お問い合わせ</h1>
      <form action="C:\work\html\PHP-WORK\top\php\task8-1.php" method="post">
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="furigana">フリガナ</label>
            <input type="text" id="furigana" name="furigana" required>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">電話番号</label>
            <input type="tel" id="tel" name="tel">
        </div>
        <div class="form-group">
            <label for="inquiry">お問い合わせ項目</label>
            <select id="inquiry" name="inquiry" required>
                <option value="選択してください">選択してください</option>
                <option value="商品について">商品について</option>
                <option value="支払いについて">支払いについて</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">お問い合わせ内容</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="privacy">個人情報保護方針</label>
                <input type="checkbox" name="privacyPolicy" required>
                個人情報保護方針に同意します
            
        </div>
        <div class="submit">
        <input type="submit" value="<?php echo empty($errors) ? '送信' : '確認'; ?>">
        </div>
    </form>
  </section>
    
