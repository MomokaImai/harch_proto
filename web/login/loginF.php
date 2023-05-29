<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン確認</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        session_start();

        // サニタイズ
        require("../connect/sanitize.php");

        $_POST = sanitize($_POST);
        $mail = $_POST['mail'];
        $pas1 = $_POST['password1'];
        $pas2 = $_POST['password2'];
        
        $msg = null;

        // DB接続
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=harch; charset=utf8mb4','root','Pa$$w0rd');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            echo '接続に失敗しました。';
            exit();
        }

        $sql = 'SELECT * FROM farmer_list WHERE mail = :mail';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':mail', $mail);
        $stmt->execute();
        $member = $stmt->fetch();


        // パスワード入力チェック
        if($pass1 != $pass2){ //もしパスワード1とパスワード2の値が異なるなら
            echo  'パスワードが一致しません。<br />';
        } else {
            //指定したハッシュがパスワードにマッチしているかチェック
            $pass = filter_input(INPUT_POST, 'password1');

            if (password_verify($pass, $member['pass'])) {
                //DBのユーザー情報をセッションに保存
                $_SESSION['id'] = $member['id'];
                $_SESSION['name'] = $member['name'];
                $_SESSION['mail'] = $member['mail'];
                header('Location: ../harch2.php');
            } else {
                $msg = 'メールアドレスもしくは<br>パスワードが間違っています。';
            }
        }


        
    ?>
    <h1><?php echo $msg; ?></h1>
    <button onclick="location.href='../login/login_form.php'" class="button" role="button">戻る</button>
</body>
</html>