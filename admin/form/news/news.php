<?php
    require_once "./../../DB/config.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>お知らせ追加</h1>
    <form action="./news_insert.php" method="POST">
    <table border="1">
        <tr>
            <th>お知らせ内容</th>
            <td><input type="text" name="news" required></td>
        </tr>
    </table>
    <button type="submit">追加</button>
    </form>

    <h1>お知らせ削除</h1>
    <?php
        try{
            $dsn = 'mysql:dbname=admin;host=localhost;charset=utf8';
            $user = 'root';
            $password = 'Pa$$w0rd';
            $dbh = new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = 'SELECT id,news,create_date FROM news';
            $stmt = $dbh->prepare($sql);
            $stmt -> execute();
            $dbh = null;
            while(true){
                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                if($rec == false){
                    break;
                }
                $rec['id'];
                $id[] = $rec['id'];
                print '<br>';
                $rec['news'];
                $news[] = $rec['news'];
                $rec['create_date'];
                $date[] = $rec['create_date'];
            }
        }catch(Exception $e){
            print 'エラーを取得';
            var_dump($e);
            exit();
        }
    ?>
        <table border="1">
            <?php
                $num = 0;
                foreach ($id as $key => $value) {
                    echo "<tr>";
                    echo "<td>$news[$key]</td>"; 
                    echo "<td>$date[$key]</td>";
                    echo "<td>";
                    echo "<form action='./news_delete.php' method='POST'>";
                    echo "<button type='submit' name='id' value='$id[$key]'>削除</button>";
                    echo "<input type='hidden' name='news' value='$news[$key]'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
            
        </table>
        <button type="submit">送信</button>
</body>
</html>