<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/post.css">
</head>
<body>
<?php
    try{
        $dsn = 'mysql:dbname=harch;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'Pa$$w0rd';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT * FROM post ORDER BY id DESC LIMIT 1';
        $stmt = $dbh->prepare($sql);
        $stmt -> execute();

        $dbh = null;

        $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rec as $result) {
            array_push($num,$result['num']);
            array_push($name,$result['name']);
            array_push($message,$result['message']);
            array_push($date,$result['date']);
        }
    }catch(Exception $e){
        echo $e;
        exit();
    }

    for($i = 0; $i < count($num); $i++){
        echo "<div class='box23'>";
        echo "<p>";
        echo "<h3>".$num[$i]."&nbsp".$name[$i]."&nbsp".$date[$i]."</h3>";
        echo $message[$i];
        echo "<p>";
        echo "</div>";
    }
    echo '<a href="index.html"><button>最初の画面に戻る</button></a>';        

?>
</body>
</html>