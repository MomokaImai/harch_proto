<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    ?>
<?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $plantation = $_POST['plantation'];
    $address = $_POST['address'];
    $crops = $_POST['crops'];
    $PR = $_POST['PR'];
    // try {
    //     $pdo = new PDO('mysql:host=localhost; dbname=harch;charset=utf8mb4','root','Pa$$w0rd');
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // } catch (PDOException $e) {
    //     $msg = $e->getMessage();
    //     echo '接続に失敗しました。';
    //     exit();
    // }
    // $sql = "INSERT INTO profile('plantation', 'address', 'crops', 'PR') VALUES (?, ?, ?, ?)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindValue(1, $plantation);
    // $stmt->bindValue(2, $address);
    // $stmt->bindValue(3, $crops);
    // $stmt->bindValue(4, $PRS);
    // $stmt->execute();
?>
    <div class="relative">
        <img class="heder" src="../../img/リンゴ1.jpg"><br>
        <img class="prof-icon" class="absolute" src="../../img/くまさん1.jpg">
    </div>
    
    <!-- <img src="../../img/hart.png"> -->
    <!-- <a href="../privateChat\home.php"> -->
    <!-- <img src="../../img/吹き出し.jpg"> -->
    </a>
    <!-- <img src="img/"> -->
    <p class="profile_a">
        <?php echo $name ?> ｜ <?php echo $plantation ?>
<br>
        <!-- レビュー　☆☆☆☆☆<br> -->
        <img src="../../img/iti4.png"><?php echo $address ?><br>

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

                <?php echo $crops ?><br>
                <?php echo $PR ?><br>
            </p>
        </div>
    </div>
    <form action="./profile-register.php" method="POST">
    <!-- <button onclick="location.href='../harch.php'" class="button" role="button">戻る</button> -->
    <button type="submit" class="button">確認</button>
    <input type="hidden" name="plantation" value=<?php echo $plantation ?>>
    <input type="hidden" name="address" value=<?php echo $address ?>>
    <input type="hidden" name="crops" value=<?php echo $crops ?>>
    <input type="hidden" name="PR" value=<?php echo $PR ?>>
    <input type='hidden' name='mail' value=<?php echo $mail ?>>
    <input type='hidden' name='name' value=<?php echo $name ?>>
    <input type='hidden' name='pass' value=<?php echo $pass ?>>
    </form>
    <button type="button" onclick="history.back()" class="button">戻る</button>
</body>
</html>