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
    $title = $_POST["title"];
    $img = $_POST["img"];
    $time = $_POST["time"];
    $age = $_POST["age"];
    $place = $_POST["place"];

    try {
        $pdo = new PDO('mysql:host=localhost; dbname=harch;charset=utf8mb4','root','Pa$$w0rd');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        $msg = $e->getMessage();
        echo '接続に失敗しました。';
        exit();
    }

    $sql = "INSERT INTO `post`(`title`, `img`, `time`, `age`, `place`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $img);
    $stmt->bindParam(3, $time);
    $stmt->bindParam(4, $age);
    $stmt->bindParam(5, $place);
    $stmt->execute();  
    header('Location: ../harch2.php')

?>
</body>
</html>