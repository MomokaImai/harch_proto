<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>入力確認</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>お問い合わせを受け付けました。<br>入力内容は以下の通りです。</h1>
    <?php
        $name = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['mail']);
        $area = htmlspecialchars($_POST['area']);
        if (isset($_POST['type']) && is_array($_POST['type'])) {
            $type = implode($_POST["type"]);
        }
        if (!empty($_POST['message'])) {
            $message = htmlspecialchars($_POST['message']);
        }
        if (isset($_POST["news"])) {
            $news = implode($_POST["news"]);
        }
    ?>
    <table border="1" class="table">
        <tr>
            <td>お名前</td>
            <td><?php 
                if (isset($name)) {
                    echo $name;
                } else {
                    echo "未入力です。";
                }
            ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php 
                    if (isset($mail)) {
                        echo $mail;
                    } else {
                        echo "未入力です。";
                    }
            ?></td>
        </tr>
        <tr>
            <td>地域</td>
            <td><?php
                    if (isset($area)) {
                        echo $area;
                    } else {
                        echo "未入力です。";
                    }
            ?></td>
        </tr>
        <tr>
            <td>お問い合わせ種別</td>
            <td><?php
                    if (isset($type)) {
                        echo $type;
                    } else {
                        echo "未入力です。";
                    }
            ?></td>
        </tr>
        <tr>
            <td>お問い合わせ内容</td>
            <td><?php
                    if (isset($message)) {
                        echo $message;
                    } else {
                        echo "未入力です。";
                    }
            ?></td>
        </tr>
        <tr>
            <td>お得な情報の受け取り</td>
            <td><?php
                    if (isset($news)) {
                        echo $news;
                    } else {
                        echo "未入力です。";
                    }
           ?></td>
        </tr>
    </table><br>
    <button class="button" onclick="location.href='../harch.php'" class="button" role="button">メイン画面へ</button>
    <button type="button" onclick="history.back()" class="button">戻る</button>
</body>
</html>