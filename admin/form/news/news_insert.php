<?php   require_once "./../../DB/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        DB_insert($_POST["news"]);
    ?>
    <table>
        <tr>
            <th>お知らせ内容</th>
            <td><?php echo $_POST["news"];?></td>
        </tr>
    </table>
    <h2>追加しました。</h2>
    <a href="./../shopping/shop/shopping.php">メインメニューに戻る</a>
</body>
</html>