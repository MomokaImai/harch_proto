<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録確認</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        // サニタイズ
        require("../connect/sanitize.php");

        $_POST = sanitize($_POST);

        // 値受け取り
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $mail = filter_var($email, FILTER_VALIDATE_EMAIL);
        //$birthday = $_POST['birthday'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $code = $_POST['zip01'];
        // $pref = $_POST['pref01'];
        // $addr = $_POST['addr01'];
        // $block = $_POST['block'];
        // $build = $_POST['building'];

        $msg = null;

        // DB接続
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=harch;charset=utf8mb4','root','Pa$$w0rd');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            echo '接続に失敗しました。';
            exit();
            
        }

        //フォームに入力されたmailがすでに登録されていないかチェック
        $sql = "SELECT * FROM user_list WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':mail', $email);
        $stmt->execute();
        $member = $stmt->fetch();
        if ($member['mail'] === $email) {
            $msg =  '同じメールアドレスが存在します。';
        
        // メールアドレスの形式チェック
        } elseif($mail === false) {
            $msg = 'メールアドレスの形式が正しくありません。';

        } else {
            //メールアドレスの形式が正しければ
            //$sql = "INSERT INTO user_list(name, mail, birthday, pass, code, pref, addr, block, build) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = "INSERT INTO user_list(name, mail, pass) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $mail);
            // $stmt->bindValue(3, $birthday);
            $stmt->bindValue(4, $pass);
            // $stmt->bindValue(5, $code);
            // $stmt->bindValue(6, $pref);
            // $stmt->bindValue(7, $addr);
            // $stmt->bindValue(8, $block);
            // $stmt->bindValue(9, $build);
            $stmt->execute();
            session_start();
            $_SESSION['mail'] = $member['mail'];
            $_SESSION['name'] = $_POST['name'];
            $msg =  '会員登録が完了しました';
        }
    ?>
    <h2>ご登録内容確認</h2>
    <table border="1" class="table">
        <tr>
            <td>お名前</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo $email;?></td>
        </tr>
        <!--<tr>
            <td>生年月日</td>
            <td><?php // echo $birthday;?></td>
        </tr>
        <tr>
            <td>郵便番号</td>
            <td><?php // echo "〒",$code;?></td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?php // echo $pref,$addr,$block,$build;?></td>
        </tr>-->
    </table><br>
    <form action="register.php" method="post">
        <!--<button type="button" name="add" class="button">登録</button>-->
        <button type="button" onclick="history.back()" class="button">戻る</button>
    </form>
    <!--メッセージの出力-->
    <h3><?php echo $msg; ?></h3>
</body>
</html>