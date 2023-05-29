<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
<?php
    function pdo() {
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=icon; charset=utf8mb4','root','Pa$$w0rd');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // echo "DB接続完了";
            return $pdo;
        } catch (PDOException $e) {
            echo '接続に失敗しました';
        }
    }
    function id($id) {#idをから検索して
        $pdo = pdo();
        $statement = $pdo->prepare("SELECT * FROM icon WHERE id = :id");
        $statement->bindparam(':id', $id, PDO::PARAM_STR);
        $statement->execute();
        $a = $statement->fetch(PDO::FETCH_ASSOC);

        return $a;
    }
    $id = 8;
    $takumi = id($id);
    $takumi["image"];
    // $takumi["name"];
    // $takumi["mail"];
    // $takumi["pref"];
    // $takumi["addr"];
    // $takumi["block"]
?>
<img src="./img/<?php echo $takumi['image'];?>">
</body>
</html>