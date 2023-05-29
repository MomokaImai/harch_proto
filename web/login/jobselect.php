<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/signup.css">
  <script type="text/javascript" src="login.js"></script>
  <title>Document</title>
</head>
<body>
  <form action="mail-check.php" method="POST">
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">一般</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">農家</label>
      <div class="login-form">
        <div class="sign-in-htm">
          <div class="group">
            <label for="user" class="label">名前</label>
            <input id="user" type="text" name="name" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <label for="pass" class="label">メールアドレス</label>
            <input id="pass" type="text" name="mail" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <label for="pass" class="label">パスワード</label>
            <input id="pass" type="password" name="password" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <input type="hidden" name="different" value="1">
            <input type="submit" class="button" value="新規登録" name="">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="#forgot">Forgot Password?</a>
          </div>
        </div>
  </form>
  <form action="mail-check.php" method="POST">
        <div class="sign-up-htm">
          <div class="group">
          <label for="user" class="label">農家名前</label>
            <input id="user" type="text" name="name" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <label for="pass" class="label">メールアドレス</label>
            <input id="pass" type="text" name="mail" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <label for="pass" class="label">パスワード</label>
            <input id="pass" type="password" name="password" class="input" autocomplete="off" required>
          </div>
          <div class="group">
            <input type="hidden" name="different" value="2">
            <input type="submit" class="button" value="新規登録">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1">Already Member?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
</html>
