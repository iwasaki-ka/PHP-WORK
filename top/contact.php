
<?php
$title = 'お問い合わせページ';
$mv_image = 'img\contact_mv.png';
include 'header.php';
include 'menu.php';
?>

  <main>

    <section class="contact-form-section">
      <h1>お問い合わせ</h1>
      <form action="php/task8-1.php" method="post">
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="furigana">フリガナ</label>
            <input type="text" id="furigana" name="furigana">
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="tel">電話番号</label>
            <input type="tel" id="tel" name="tel">
        </div>
        <div class="form-group">
            <label for="inquiry">お問い合わせ項目</label>
            <select id="inquiry" name="inquiry">
                <option value="選択してください">選択してください</option>
                <option value="商品について">商品について</option>
                <option value="支払いについて">支払いについて</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">お問い合わせ内容</label>
            <textarea id="message" name="message" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="privacypolicy">個人情報保護方針</label>
                <input type="checkbox" id="privacypolicy" name="privacypolicy" >
                個人情報保護方針に同意します
            
        </div>
        <div class="submit">
        <button type="submit">確認</button>
        </div>
    </form>
  </section>
  </main>

  <?php 
  include 'bottom.php';
  include 'footer.php';
   ?>
