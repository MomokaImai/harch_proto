<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION = array();//セッションの中身をすべて削除
        session_destroy();//セッションを破壊
    ?>

    <p>ログアウトしました。</p>
    <a href="../harch2.php">ログインへ</a>
    <?php header("Location: ../harch2.php"); ?>
</body>
</html>