<?php 
session_start();

 if ($_SERVER["REQUEST_METHOD"]=="POST"){ 
  unset($_SESSION["form_data"]["confirm"]);
$_SESSION["form_data"]["name"] = $_POST["name"];
$_SESSION["form_data"]["furigana"] = $_POST["furigana"];
$_SESSION["form_data"]["email"] = $_POST["email"];
$_SESSION["form_data"]["tel"] = $_POST["tel"];
$_SESSION["form_data"]["inquiry"] = $_POST["inquiry"];
$_SESSION["form_data"]["message"] = $_POST["message"];
$_SESSION["form_data"]["privacypolicy"] = $_POST["privacypolicy"];

 $errors =[];
 if(empty($_SESSION["form_data"]["name"] )){
  $errors[]="名前が入力されていません。";
 }
 if(empty($_SESSION["form_data"]["furigana"])){
  $errors[]="フリガナが入力されていません。";
 }
 if (!filter_var($_SESSION["form_data"]["email"],FILTER_VALIDATE_EMAIL)){
  $errors[]="メールアドレスが正しくありません。";
 }
 if(!preg_match("/^\d{10,11}$/",$_SESSION["form_data"]["tel"])){
  $errors[]="電話番号は10桁または11桁で入力してください。";
 }
 if($_SESSION["form_data"]["inquiry"]=="選択してください"){
  $errors[]="お問い合わせ項目を選択してください。";
 }
 if(empty($_SESSION["form_data"]["message"])){
  $errors[]="お問い合わせ内容が空白です。";
 }

 if(empty($_SESSION["form_data"]["privacypolicy"])){
  $errors[]="個人情報保護方針にチェックが入っていません。";
 }

 
if(empty($errors)){


   if (isset($_SESSION["form_data"]["confirm"])) {
     header("Location:task8-2.php");
     
     
   } else {

    if (!empty($_SESSION["form_data"]["name"]) && !empty($_SESSION["form_data"]["furigana"]) && !empty($_SESSION["form_data"]["email"]) && !empty($_SESSION["form_data"]["tel"]) && !empty($_SESSION["form_data"]["inquiry"]) && !empty($_SESSION["form_data"]["message"]) && !empty($_SESSION["form_data"]["privacypolicy"])) {
       $_SESSION["form_data"]["confirm"] = true;
      }
   }
   

} else{
    $_SESSION["form_data"]["errors"] =$errors;
    $_SESSION["form_data"]["name"] = $_POST["name"];
    $_SESSION["form_data"]["furigana"] = $_POST["furigana"];
    $_SESSION["form_data"]["email"] = $_POST["email"];
    $_SESSION["form_data"]["tel"] = $_POST["tel"];
    $_SESSION["form_data"]["inquiry"] = $_POST["inquiry"];
    $_SESSION["form_data"]["message"] = $_POST["message"];
    $_SESSION["form_data"]["privacypolicy"] = $_POST["privacypolicy"];
    header("Location: task8-1.php");
    exit;
}

 }


?>

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
      $name = isset($_SESSION["form_data"]["name"])?$_SESSION["form_data"]["name"]:"";
      $furigana = isset($_SESSION["form_data"]["furigana"]) ? $_SESSION["form_data"]["furigana"] : "";
      $email = isset($_SESSION["form_data"]["email"]) ? $_SESSION["form_data"]["email"] : "";
      $tel = isset($_SESSION["form_data"]["tel"]) ? $_SESSION["form_data"]["tel"] : "";
      $inquiry = isset($_SESSION["form_data"]["inquiry"]) ? $_SESSION["form_data"]["inquiry"] : "";
      $message = isset($_SESSION["form_data"]["message"]) ? $_SESSION["form_data"]["message"] : "";
      $privacyPolicyChecked = isset($_SESSION["form_data"]["privacypolicy"]) ? "checked" : "";
      $errors = isset($_SESSION["form_data"]["errors"])?$_SESSION["form_data"]["errors"] : [];
      ?>
    

    <?php if(!empty($errors)):?>
      <div class="error">
       <?php foreach($errors as $error):?>
       <p><?php echo $error;?></p>
       <?php endforeach;?>
      </div>
    <?php 
    unset($_SESSION["form_data"]["errors"]);  
    $errors =[];
    endif;?>  

    <section class="contact-form-section">
      <h1>お問い合わせ</h1>
      <form action="<?php echo isset($_SESSION["form_data"]["confirm"]) ? 'task8-2.php' : 'task8-1.php'; ?>" method="post">
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" name="name"  value="<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>">
        </div>
        <div class="form-group">
            <label for="furigana">フリガナ</label>
            <input type="text" id="furigana" name="furigana" value="<?php echo htmlspecialchars($furigana, ENT_QUOTES, 'UTF-8'); ?>" >
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="tel">電話番号</label>
            <input type="tel" id="tel" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="inquiry">お問い合わせ項目</label>
            <select id="inquiry" name="inquiry">>
                <option value="選択してください">選択してください</option>
                <option value="商品について"<?php echo $inquiry === "商品について" ? "selected" : ""; ?>>商品について</option>
                <option value="支払いについて" <?php echo $inquiry === "支払いについて" ? "selected" : ""; ?>>支払いについて</option>
                <option value="その他" <?php echo $inquiry === "その他" ? "selected" : ""; ?>>その他</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">お問い合わせ内容</label>
            <textarea id="message" name="message" rows="4"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div class="form-group">
            <label for="privacypolocy">個人情報保護方針</label>
                <input type="checkbox" id="privacypolicy"  name="privacypolicy"<?php echo $privacyPolicyChecked; ?>>
                個人情報保護方針に同意します
            
        </div>
        <div class="submit">
        <button type="submit"><?php echo isset($_SESSION["form_data"]["confirm"]) ? '送信' : '確認'; ?></button>
    </div>
    </form>
  </section>

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