<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿画面</title>
    <link rel="stylesheet" href="../../css/post.css">
</head>
<body>
<?php
    $title = $_POST["title"];
    $img = $_POST["img"];
    $time = $_POST["time"];
    $age = $_POST["age"];
    $place = $_POST["place"];
?>
<div clacc="center">
<form action="post-register.php" method="post">
    <?php echo $title ?>

    <!-- 横並び -->
    <div class="flex">
        <div class="left-box">
        <?php echo $img ?>
        </div>
    <div class="right-box">
        <div class="border border-solid">
        <h4>所要時間</h4>
        <?php echo $time; ?>
        <h4>対象年齢</h4>
        <?php echo $age ?>
        <h4>体験場所</h4>
        <?php echo $place ?>
        </div>
    </div>
</div>
    <input type="hidden" name="title" value="<?php echo $title ?>">
    <input type="hidden" name="img" value="<?php echo $img ?>">
    <input type="hidden" name="time" value="<?php echo $time ?>">
    <input type="hidden" name="age" value="<?php echo $age ?>">
    <input type="hidden" name="place" value="<?php echo $place ?>">
    <input type="submit" value="作成">
</form>
</body>
</html>