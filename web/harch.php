<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メイン画面</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
</head>
<body>
    <?php require('header.php'); ?>

    <main>
        <div class="example">
            <img src="../img/24726001_l.jpg">
            <p class="center">次世代と農家をつなぐ、架け橋へ</p>
        </div>
        <div class="text">
            <form action="user_list.php" method="post">
            <input type="text" name="word">
            <input type="submit" value="検索">
            </form>
            <p>人気</p>
            <p><img src="../img/iti4.png">マップで探す</p>

            <!--広告-->
            <p>広告</p>
            <div class="container">
                <img class="img" src="../img/kensyu.jpg">
                <img class="img" src="../img/koukoku.jpg">
            </div>

            <!--農家アイコン→プロフィールに飛ぶ-->
            <p>あなたへのおすすめ・・・　もっと見る</p>
           <a href="profile/profile_a.php"><img src="../img/くまさん.jpg" class="icon"></a>
            <a href="no.php"><img src="../img/わんこ.jpg" class="icon"></a> 
            <a href="no.php"><img src="../img/フェネックさん.jpg" class="icon"></a>
            <!--カテゴリー-->
            <p>あなたへのおすすめ・・・　もっと見る</p>
            <div class="category">
                <ul>
                   <a href="no.php"><li>🍇ぶどう</li></a> 
                    <li>🍑もも</li>
                    <li>🍓いちご</li>
                    <li>🍈めろん</li>
                </ul>
                <ul>
                    <li>🍅とまと</li>
                    <li>🥒きゅうり</li>
                    <li>🥔じゃがいも</li>
                    <li>🍆なす</li>
                </ul><br><br>
            </div>
        </div>
        
        <!--新着情報-->
        <b class="news">NEWS | 新着情報</b><br>
        <div class="new">
            <ul>
                <li>2022/09/12 稲刈りの季節がやってきました！</li><br>
                <li>2022/05/26 クレジット決済の不具合が治りました。</li><br>
                <li>2022/04/16 いよいよ春作業が本格化して参りました。繫忙期に入るため、体験申し込みはお早めに！</li><br>
                <li>2022/01/15 無事メンテナンス終了いたしました。ご協力ありがとうございました。</li><br>
                <li>2022/01/09 勝手ながらサイトメンテナンスのため１月10日～１月15日までお休みさせていただきます。</li><br>
            </ul><br>
        </div>
        
        <!--もっと見る-->
        <button class="button">more</button>
    </main>

    <footer>
        <hr>
        <div class="flex">
            <ul class="tagu-footer">
                <li class="footer-box"><a href="harch.php">HOME</a></li>
                <li class="footer-box"><a href="no.php">ご利用ガイド</a></li>
                <li class="footer-box"><a href="no.php">プライバシーポリシー</a></li>
                <li class="footer-box"><a href="../web/form/form.php">お問い合わせ</a></li>
            </ul>
        </div>
        <p>@harch</p>
        <!--トップへ戻るボタン-->
        <div id="js-pagetop">
            <span>Top</span>
        </div>
    </footer>
    
    <script>
        jQuery(function () {
            var pagetop = $('#js-pagetop');
            pagetop.hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 60) { //100pxスクロールしたら表示
                    pagetop.fadeIn();
                } else {
                    pagetop.fadeOut();
                }
            });
            pagetop.click(function () {
                $('body, html').animate({
                    scrollTop: 0
                }, 500); //0.5秒かけてトップへ移動
                return false;
            });
        });
    </script>
</body>
</html>