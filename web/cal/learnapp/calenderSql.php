<?php
// テーブルに予定と日付を登録（insert）する関数をつくる
function insertSchedule($date , $schedule){
try{
    $dsn = 'mysql:dbname=learnapp;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'Pa$$w0rd';
    $result =true;

    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO dateschedule(date, schedule) VALUES (?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt -> bindValue(1,$date);
    $stmt -> bindValue(2,$schedule);
    $stmt -> execute();
    $dbh = null;

    return $result;
    }catch(PDOException $e){
    print 'エラーが発生しました';
    var_dump($e);
    $result = false;
    return $result;
}
}

// function insertSchedule($date,$schedule){
//     //フィールド定義
//     $dsn = 'mysql:dbname=learnapp;host=localhost;charset=utf8';
//     $user = 'root';
//     $password = 'Pa$$w0rd';
//     $result = true;

//     //接続
//     try{
//         $dbh = new PDO($dsn, $user, $password);
//         $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//         //insert処理
//         $sql = "INSERT INTO `dateschedule`(`date`, `schedule`) VALUES (?,?)";
//         $stmt = $dbh->prepare($sql);
//         $stmt -> bindValue(1,$date); //SQLの?に値を設定
//         $stmt -> bindValue(2,$schedule);
//         $stmt -> execute();
//         $dbh = null;
        
//         return $result;
//     }catch (PDOException $e){
//         print 'エラーが発生しました';
//         var_dump($e);
//         $result = false;
//         return $result;
//     }
// }

function selectSchedule($date){
    //フィールド定義
    $dsn = 'mysql:dbname=learnapp;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'Pa$$w0rd';
    $arraySchedule = array();

    //接続
    try{
        $dbh = new PDO($dsn, $user, $password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //select処理
        $sql = "SELECT schedule FROM dateschedule WHERE date = ?";
        $stmt = $dbh->prepare($sql);
        $stmt -> bindValue(1,$date);
        
        $stmt -> execute();
        $dbh = null;
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $result){
            array_push($arraySchedule,$result['schedule']);
        }
        
        return $arraySchedule;
    }catch (PDOException $e){
        print 'エラーが発生しました';
        var_dump($e);
        $arraySchedule = null;
        return $arraySchedule;
    }
}

?>