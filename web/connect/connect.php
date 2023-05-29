<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DB</title>
</head>
<body>
    <?php
        try {
            $pdo = new PDO('mysql:host="localhost"; dbname=harch;charset=utf8mb4','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            echo '接続に成功しました。';
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            echo '接続に失敗しました。';
            exit();
        }
    ?>
</body>
</html>
