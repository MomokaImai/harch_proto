<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アイコン</title>
</head>
<body>
    <?php
        try {
            $pdo = new PDO('mysql:host="localhost"; dbname=harch;charset=utf8mb4','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // echo '接続に成功しました。';
                
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            // echo '接続に失敗しました。';
            exit();
        }
    ?>
</body>
</html>