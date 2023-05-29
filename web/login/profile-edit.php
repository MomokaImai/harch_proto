<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>農家プロフィール</title>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="js/ajaxzip3.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        // $header = array();
        // $icon = array();
        // $name = array();
        // $from = array();
        // $follow_id
        // $follower_id
        // DB接続

    ?>
    <div class="relative">
        <img class="heder" src="../../img/リンゴ1.jpg"><br>
        <img class="prof-icon" class="absolute" src="../../img/くまさん1.jpg">
    </div>
    
    <!-- <img src="../../img/hart.png"> -->
    <!-- <a href="../privateChat\home.php"> -->
    <!-- <img src="../../img/吹き出し.jpg"> -->
    </a>
        <form action="profile-check.php" method="post">
        <input type='hidden' name='mail' value=<?php echo $mail ?>>
        <input type='hidden' name='name' value=<?php echo $name ?>>
        <input type='hidden' name='pass' value=<?php echo $pass ?>>
    <p class="profile_a">
        <?php echo $name; ?> ｜ <input type="text" name="plantation"><br>
<br>
        <!-- レビュー　☆☆☆☆☆<br> -->
        <img src="../../img/iti4.png"><input type="text" name="address"><br>

        <a href="">
            <!-- <img src="../../img/link_1.png"> -->
        </a>
        <!-- <a href="../../web/cal/cal.php"> -->
            <!-- <img src="../../img/cal_3.png"> -->
        </a>
    </p>
    <div class="flex">
        <!-- <p class="prof-flex">
            これまでの受け入れ人数<br>        
            0 
        </p>
        <p>
            受け入れ可能人数<br>
            5
        </p> -->
    </div>
    <div class="flex">
        <div calss="profile-box">
            <p class="txt1">
                主な生産物<br>
                <!-- 生産開始日<br> -->
                <!-- 主な出荷先<br> -->
                PR<br><br>
                <!-- 体験受け入れ条件<br> -->
                <!-- プラン一覧<br> -->
                <!-- 交通一覧<br> -->
            </p>
        </div>
        <div calss="profile-box">
            <p class="txt2">
                <!-- 🍅・🥒<br>
                2002年5月～<br>
                イオンモール<br>
                農薬の使用を極力減らすため<br>対策を行っています。<br>
                とまとが大好きな方<br>
                交通費・作業着貸出費<br>
                送迎あり<br> -->

                <select name="crops">
                <option value="tomato">とまと</option>
                <option value="onion">玉ねぎ</option>
                <option value="corn">とうもろこし</option>
                </select>
                <br>
                <textarea name="PR" cols="20" rows="5"></textarea><br>
            </p>
        </div>
    </div>
    <!-- <button onclick="location.href='../harch.php'" class="button" role="button">戻る</button> -->
    <button type="submit" class="button">確認</button>
    </form>
</body>
</html>