<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        session_start();

        $process = $_POST['submit'];
        $img = $_POST['addImage'];
        $message = null;

        try{
            $dsn = 'mysql:dbname=icon;host=localhost;charset=utf8';
            $user = 'root';
            $password = 'Pa$$w0rd';
            $dbh = new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            if($process == "追加") {

                $sql = 'INSERT INTO `icon`(`image`) VALUES(?)';
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(1,$img);
                $res = $stmt -> execute();
                if($res == true){
                    $message = "追加できました";
                }elseif($res == false){
                    $message = "追加できませんでした";
                }
                echo $message;
                $dbh = null;
                }
        } catch(Exception $e) {
            echo 'エラーが発生しました';
            // var_dump($e);
            exit();
        }
    ?>
    <form action="view.php" method="post">
        <input type="submit" name="submit" value="表示">
        <input type="hidden" name="nameid" value="">

    </form>
    <button type="button" onclick="history.back()">戻る</button>
</body>
</html>