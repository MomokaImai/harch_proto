<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="js/ajaxzip3.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>新規会員登録</h1>
    <form action="register.php" method="post">
        <input type="text" name="name"  placeholder="名前" value="" required><br><br>
        <input type="text" name="mail"  placeholder="メールアドレス" value="" required><br><br>
        <!--<input type="text" name="birthday"  placeholder="年/月/日" value="" required><br><br>-->
        <input type="password" name="password"  placeholder="パスワード" value="" required><br>
        <!-- 郵便番号入力(7桁) --><br>
        <!--<input type="text" name="zip01" placeholder="郵便番号" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this, '', 'pref01', 'addr01'); " value="" require><br>-->
        <!-- 住所入力(都道府県) --><br>
        <!--<input type="text" name="pref01" placeholder="都道府県" value=""><br>-->
        <!-- 住所入力(市町村) --><br>
        <!--<input type="text" name="addr01" placeholder="市町村" value=""><br>-->
        <!-- 住所入力(番地) --><br>
        <!--<input type="text" name="block" placeholder="番地" value=""><br>-->
        <!-- 住所入力(建物名・部屋番号) --><br>
        <!--<input type="text" name="building" placeholder="建物名・部屋番号" value=""><br><br>-->
        <input class="button" type="submit" value="次へ">
        <button type="button" onclick="history.back()" class="button">戻る</button>
    </form>
    <p>すでに登録済みの方は<a href="login_form.php">こちら</a></p>
</body>
</html>