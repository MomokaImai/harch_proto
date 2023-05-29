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
<div clacc="center">
    <form action="post-check.php" method="post">
        タイトル<input type="text" name="title">

        <!-- 横並び -->
    <div class="flex">
        <div class="left-box">
            画像<input type="file" name="img">
        </div>
        <div class="right-box">
            <div class="border border-solid">
            <h4>所要時間</h4>
            <input type="text" name="time"><br>
            <h4>対象年齢</h4>
            <input type="text" name="age"><br>
            <h4>体験場所</h4>
            <input type="text" name="place"><br>
            </div>
        </div>
    </div>
        <input type="submit" value="確認">
        <!-- <button location.href = "URL">予約へ</buttom> -->
    </form>
</div>
</body>
</html>