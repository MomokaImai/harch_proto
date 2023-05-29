<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/harch.css">
</head>
<body>
<?php
    session_start();

    try {
        $pdo = new PDO('mysql:host=localhost; dbname=harch;charset=utf8mb4','root','Pa$$w0rd');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        $msg = $e->getMessage();
        echo '接続に失敗しました。';
        exit();
    }

    $different = $_POST["different"];
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $mail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


    if($different == 1) {
        $sql = "SELECT * FROM user_list WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':mail', $email);
        $stmt->execute();
        $member = $stmt->fetch();
        if ($member['mail'] === $email) {
            $msg =  '同じメールアドレスが存在します。';
        
        // メールアドレスの形式チェック
        }elseif ($mail === false) {
            $msg = 'メールアドレスの形式が正しくありません。';
        }else {
            $sql = "INSERT INTO user_list(`name`, `mail`, `pass`) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $mail);
            $stmt->bindParam(3, $pass);
            $stmt->execute(); 
            $_SESSION['mail'] = $email;
            $_SESSION['name'] = $name; 
            $msg = "登録完了しました。";
        }
        echo "<h3>$msg</h3>";
        echo "<a href='../harch2.php'><button type=button>メイン画面へ</button></a>";
    }elseif($different == 2){
        $sql = "SELECT * FROM farmer_list WHERE mail = :mail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':mail', $email);
        $stmt->execute();
        $member = $stmt->fetch();
        if ($member['mail'] == $email) {
            $msg =  '同じメールアドレスが存在します。';
        
        // メールアドレスの形式チェック
        }elseif($mail === false) {
            $msg = 'メールアドレスの形式が正しくありません。';
        }else{
            echo '<form action="profile-edit.php" method="post">';
            echo "<input type='hidden' name='mail' value=" . $mail . ">";
            echo "<input type='hidden' name='name' value=" . $name . ">";
            echo "<input type='hidden' name='pass' value=" . $pass . ">"; 
            echo '<input type="submit" value="次へ">';
            echo "</form>";
            $_SESSION['mail'] = $email;
            $_SESSION['name'] = $name; 
            $msg = "お間違いなければ次にお進みください。";
        }
        echo "<h3>$msg</h3>";
    }

?>
</body>
</html>