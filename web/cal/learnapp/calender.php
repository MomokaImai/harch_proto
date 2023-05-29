<?php
// タイムゾーンの指定
date_default_timezone_set('Asia/Tokyo');

// 前月・次月リンクが選択された場合に、GETパラメータから年月を取得（前月と次月の値を取得）
if(isset($_GET['ym'])){
    $ym = $_GET['ym']; // 年月に値を設定
}else{
    // カレンダーを開いたときに今月の年月を取得
    $ym = date('Y-m');
}

// 現在を基準として、先月の1日もしくは来月の１日の日付データを取得
$timestamp = strtotime($ym . '-01'); //Y-,-01という形を作っている

// 今日の日付を取得
$today = date('Y-m-j'); // 2022-9-8となる

// カレンダーのタイトルを作成
$html_title = date('Y年n月', $timestamp); // date(表示する内容、基準)

// 前月・字月の年月を取得
$prev = date('Y-m', strtotime('-1 month', $timestamp)); // strtotime(基準月-1、基準)
$next = date('Y-m', strtotime('+1 month', $timestamp)); // 次月の値

//該当月の日数を取得する
$day_count = date('t', $timestamp); // カレンダーで表示している月の日数

// 該当月の初日が何曜日か？
$youbi = date('w', $timestamp); // 日：０　月：１～～土：６

// カレンダー作成の準備
$weeks = []; // 一か月分の配列データ
$week = ''; //一週間分の空文字データ

// １週目：空のセルを追加
$week .= str_repeat('<td></td>' , $youbi);

// 月の日数分繰り返し表示させる
for($day = 1; $day <= $day_count; $day++, $youbi++){// 曜日の値も増やすこと注意

    $date = $ym . '-' . $day;// 年月日を取得。 2022-9-1

    // 日付リンクの作成
    $link = '<a href="dateSchedule.php?date=' . $date . '">' . $day . '</a>';

    // 「今日」オレンジに染めたい
    if($today == $date){
        $week .= '<td class="today">' . $link; // 今日の時はオレンジ(classつきのタグ)
    }else{
        $week .= '<td>' . $link; // 今日以外の日は、ただのtdタグ
    }

    $week .= '</td>'; // tagの終わりタグは共通でつける

    if($youbi % 7 == 6 || $day == $day_count){ // 週終わり（土曜日）or 月終わり
        //月末の時の処理
        if($day == $day_count){
            $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>'; // weeks配列にtrタグと一週間分のデータを入れておく
        $week = ''; // 週終わりなので、一週間分のデータをリセット
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
    <style>
        .today{
            background:orange;
        }
    </style>
</head>
<body>
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a>&nbsp;<?php echo $html_title; ?>&nbsp;<a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
    <table>
        <tr>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
        </tr>
        <?php
            foreach($weeks as $week){
                echo $week;
            }
        ?>
    </table>
</body>
</html>