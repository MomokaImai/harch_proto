<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>検索結果</div>
    <?php
        $dsn = 'mysql:dbname=user;host=localhost;charset=utf8';
        $username = 'root';
        $password = 'Pa$$w0rd';
        if ($_POST) {
            try {
                $dbh = new PDO($dsn, $username, $password);
                $search_word = $_POST['word'];
                if ($search_word == "") {
                }
                else {
                    $sql ="SELECT * FROM user_list WHERE Name like '".$search_word."%'";
                    $sth = $dbh->prepare($sql);
                    $sth->execute();
                    $result = $sth->fetchAll();
                    if($result) {
                        foreach ($result as $row) {
                            echo $row['ID']." ";
                            echo $row['Name'];
                            echo "<br>";
                        }
                    }
                    else {
                        echo "見つかりませんでした";
                    }
                }
            }catch (PDOException $e) {
                echo  "<p>Failed : " . $e->getMessage()."</p>";
                exit();
            }
        }
    ?><br>
    <button type="button" onclick="history.back()">戻る</button>
</body>
</html>
