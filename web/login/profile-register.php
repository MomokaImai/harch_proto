<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>登録完了しました！</h1>
    <br>
    <a href="../harch2.php"><button type="button"  class="button">メイン画面</button></a>
</body>
</html>

<?php
    $plantation = $_POST['plantation'];
    $address = $_POST['address'];
    $crops = $_POST['crops'];
    $PR = $_POST['PR'];
    $name = $_POST["name"];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

        // try {
        //     $pdo = new PDO('mysql:host=localhost; dbname=harch; charset=utf8mb4','root','Pa$$w0rd');
        //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        //     // echo "DB接続完了";
        //     return $pdo;
        // } catch (PDOException $e) {
        //     echo '接続に失敗しました';
        // }
        // // $sql = "UPDATE user_list SET plantation = :plantation, address = :address, crop = :crops, PR = :PR WHERE mail = $mail";
        // $sql = "INSERT INTO `user_list`(`name`, `mail`, `pass`, `plantation`, `address`, `crops`, `PR`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->bindParam(1, $name);
        // $stmt->bindParam(2, $mail);
        // $stmt->bindParam(3, $pass);
        // $stmt->bindParam(4, $plantation);
        // $stmt->bindParam(5, $address);
        // $stmt->bindParam(6, $crops);
        // $stmt->bindParam(7, $PR);
        // $stmt -> execute();

        function pdo() {
            try {
                $pdo = new PDO('mysql:host=localhost; dbname=harch; charset=utf8mb4','root','Pa$$w0rd');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                // echo "DB接続完了";
                return $pdo;
            } catch (PDOException $e) {
                echo '接続に失敗しました';
            }
        }

        function DB_insert(String $name, String $mail, String $pass, String $plantation, string $address, string $crops, String $PR) {
            $pdo = pdo();
            $statement = $pdo->prepare("INSERT INTO farmer_list(`name`, `mail`, `pass`, `plantation`, `address`, `crops`, `PR`) VALUES(:name, :mail, :pass, :plantation, :address, :crops, :PR)");
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->bindParam(':mail', $mail, PDO::PARAM_STR);
            $statement->bindParam(':pass', $pass, PDO::PARAM_STR);
            $statement->bindParam(':plantation', $plantation, PDO::PARAM_STR);
            $statement->bindParam(':address', $address, PDO::PARAM_STR);
            $statement->bindParam(':crops', $crops, PDO::PARAM_STR);
            $statement->bindParam(':PR', $PR, PDO::PARAM_STR);
            $statement->execute();
        }
        DB_insert($name, $mail, $pass, $plantation, $address, $crops, $PR);
    
    
        

?>
