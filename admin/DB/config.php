<?php
    function pdo() {
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=admin; charset=utf8mb4','root','Pa$$w0rd');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            echo "DB接続完了";
            return $pdo;
        } catch (PDOException $e) {
            echo '接続に失敗しました';
        }
    }

    function DB_insert(String $news) {
        $pdo = pdo();
        $statement = $pdo->prepare("INSERT INTO news(news) VALUES(:news)");
        $statement->bindParam('news', $news, PDO::PARAM_STR);
        $statement->execute();
    }

    function DB_delete($id) {
        $pdo = pdo();
        $statement = $pdo->prepare("DELETE FROM news WHERE id = :id");
        $statement->bindparam(':id', $id, PDO::PARAM_STR);
        $statement->execute();
    }

    function news() {
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

    }
?>