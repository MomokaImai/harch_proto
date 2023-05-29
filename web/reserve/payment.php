<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お支払い方法</title>
    <link rel="stylesheet" href="../../css/reserve.css">
</head>
<body class="payment-body">
    <?php
        // サニタイズ
        require("../connect/sanitize.php");
        $_POST = sanitize($_POST);

        // 予約内容受け取り
        $_POST['num'];
    ?>
    <p class="text">
        <span class="title">体験予約</span>
        予約内容入力 ▸ <span class="mark">支払い情報入力</span> ▸ 最終確認 ▸ 予約完了
    </p><br>
    <div class="reserve-main">
    <h2>お支払い方法</h2>
    <form action="reserveCheke.php" method="post">
        <div class="table">
            <dl>
                <dt>
                    <span>必須</span>
                    カード番号
                </dt>
                <dd>
                    <input type="text" name="num" value="" placeholder="3528 5702 3921 4001" require>
                </dd>
            </dl>
            <dl>
                <dt>
                    <span>必須</span>
                    有効期限
                </dt>
                <dd>
                    <input type="text" name="num" value="" placeholder="09 / 27" require>
                </dd>
            </dl>
            <dl>
                <dt>
                <span>必須</span>
                    CVCコード
                </dt>
                <dd>
                <input type="text" name="num" value="" placeholder="723" require>
                </dd>
            </dl>
        </div>
        <input type="submit" value="登録" class="reserve-btn">
    </form>
    </div>
</body>
</html>