<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/harch.css">
</head>
<body>
<?php
    // try {
    //     $pdo = new PDO('mysql:host=localhost; dbname=harch;charset=utf8mb4','root','Pa$$w0rd');
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // } catch (PDOException $e) {
    //     $msg = $e->getMessage();
    //     echo '接続に失敗しました。';
    //     exit();
    // }

    // $different = $_POST["different"];
    // $name = $_POST["name"];
    // $email = $_POST["mail"];
    // $mail = filter_var($email, FILTER_VALIDATE_EMAIL);
    // $pass = $_POST["password"];
    // //フォームに入力されたmailがすでに登録されていないかチェック
    // $sql = "SELECT * FROM user_list WHERE mail = :mail";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindValue(':mail', $email);
    // $stmt->execute();
    // $member = $stmt->fetch();
    // var_dump($member['mail']);
    // if ($member['mail'] === $email) {
    //     $msg =  '同じメールアドレスが存在します。';
    
    // // メールアドレスの形式チェック
    // }elseif($mail === false) {
    //     $msg = 'メールアドレスの形式が正しくありません。';
    // }else{
    //     $msg = "ご確認ください。";
    //     echo "<h2>ご登録内容確認</h2>";
    //     echo '<table border="1" class="table">';
    //     echo "<tr>";
    //     echo "<td>お名前</td>";
    //     echo "<td>$name</td>";
    //     echo "</tr>";香西静かにして
    //     echo "<tr>";香西
    //     echo "<td>メールアドレス</td>";
    //     echo "<td>$email</td>";
    //     echo "</tr>";
    //     if($different == 1) {
    //         $sql = "INSERT INTO `user_list`(`name`, `mail`, `pass`) VALUES (?, ?, ?)";
    //         $stmt = $pdo->prepare($sql);
    //         $stmt->bindParam(1, $name);
    //         $stmt->bindParam(2, $mail);
    //         echo "<h3>登録完了しました。</h3>";
    //     }elseif($different == 2){
    //         echo '<form action="plofile-edit.php" method="post">';
    //         echo '<input type="submit" value="次へ">';
    //         echo "</form>";
    //         echo "<h3>$msg</h3>";
    //     }
    // }

    function pdo() {
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=shop; charset=utf8mb4','root','Pa$$w0rd');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // echo "DB接続完了";
            return $pdo;
        } catch (PDOException $e) {
            echo '接続に失敗しました';
        }
    }
    
    //SELECT COUNT(*) AS cnt FROM members WHERE email="POSTされたメールアドレス"
?>
</body>
</html>