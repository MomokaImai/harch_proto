<?php

//パラメータ定義
$date = $_GET['date'];
echo "<p>".$date."の予定</p>";
$arraySchedule = array();

//予定を追加する処理
//テーブルに予定を登録する関数を使いたい
//外部ファイルの読み込み
require("calenderSql.php");

//select処理をして予定を読み込む
$arraySchedule = selectSchedule($date);

//画面表示
//$arrayScheduleがnullならば「予定はありません」。中身があれば表示
if($arraySchedule == null){
    echo '予定はありません';
}else{
    foreach($arraySchedule as $arSchedule){
        echo $arSchedule . "<br>";
    };
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //POST通信の値を受け取る
    $schedule = $_POST['dailySchedule'];

    //関数の呼び出し
    $result = insertSchedule($date,$schedule);

    if($result){
        echo '予定を登録できました';
    }else{
        echo '予定の登録に失敗しました';
    }
}
?>
<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <title>予定</title>
    </header>
    <body>
        <p>予定を追加する</p>
        <form action="" method="post">
            <input type="text" name="dailySchedule">
            <input type="hidden" name="daily" value=<?php echo $date; ?>>
            <input type="submit">
        </form>
    </body>
</html>