<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メイン画面</title>
    <link rel="stylesheet" href="../../css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
</head>
<body>
    <header>
        <div class="flex-header">
            <div class="box1">
                <!--ロゴ-->
                <img src="../img/" class="rogo1">
                <img src="../../img/harch.png" class="rogo2">
            </div>
            <div class="box2">
                <!--ログインボタン-->
                <button onclick="location.href='../login/login_form.php'" class="button" role="button">ログイン</button>
                <!--新規登録ボタン-->
                <button onclick="location.href='../login/singup.php'" class="button" role="button">新規登録</button>
            </div>
            <!--右上にログイン情報-->
            <div class="login">
                <p class="login">
                    <a href="no.php"><img src="../img/.jpg" class="icon"></a> 
                    <?php
                        session_start();
                        $user = $_SESSION['name'];
                        if (isset($_SESSION['id'])) {//ログインしているとき
                           echo htmlspecialchars($user, \ENT_QUOTES, 'UTF-8') . 'さん';
                        } else {//ログインしていない時
                            echo  'ログインしていません';
                        }
                    ?>
                </p>
            </div>
        </div>
        <!--タグ-->
        <div class="flex">
            <ul class="tagu">
                <li class="list"><a href="../harch.php">HOME</a></li>
                <li class="list"><a href="../../web/community/community.php">コミュニティ</a></li>
                <li class="list"><a href="../saite.php">サイト概要</a></li>
                <li class="list"><a href="no.php">ご利用ガイド</a></li> 
                <li class="list"><a href="../../web/form/form.php">お問い合わせ</a></li>
            </ul>
        </div>
            <div class="example">
                <img src="../../img/24726001_l.jpg">
                <p class="center">次世代と農家をつなぐ、架け橋へ</p>
            </div>
    </header>
</body>
</html>