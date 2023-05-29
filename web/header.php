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
    <!-- css -->
    <link rel="stylesheet" href="../css/header.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="box1">
                <!--ロゴ-->
                <img src="../img/rogo.png" class="rogo1" alt="ロゴ">
                <img src="../img/harch.png" class="rogo2" alt="harch ロゴ">
            </div>
            <div class="login-flex">
                <div class="login">
                    <?php
                        session_start();
                            if (isset($_SESSION['id']) && ($_SESSION['mail']))://ログインしているとき
                            $user = $_SESSION['name'];
                    ?>      <ul>
                            <div class="box2">
                            <!--ユーザー情報-->
                        
                                <li>
                                    <a href="#"><img src="../img/user.png" alt="" class="icon"><?php echo $_SESSION['name'];?></a>
                                </li>
                                <li>
                                    <!--ログアウト-->
                                    <button onclick="location.href='./login/logout.php'" class="button" role="button">ログアウト</button>
                                </li>
                            </div>
                    <?php
                        else ://ログインしていない時
                    ?>
                            <div class="box2">
                                <li>
                                    <!--ログインボタン-->
                                    <button onclick="location.href='./login/login_form.php'" class="login-btn" role="button">ログイン</button>
                                </li>
                                <li>
                                    <!--新規登録ボタン-->
                                    <button onclick="location.href='./login/jobselect.php'" class="button" role="button">新規登録</button>
                                </li>
                            
                            </div>
                            </ul>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php echo $_SESSION['name'];
                 echo $_SESSION['id'];
                 echo $_SESSION['mail'];
                    ?>
        <hr class="hr">
    </header>
</body>
</html>