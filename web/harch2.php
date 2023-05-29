<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topページ</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/harch.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" type="text/css" media="all">
</head>
<body>
    <!-- ヘッダー -->
    <?php include('header.php');?>
    <!-- パンくずリスト -->
    <nav>
        <ol class="breadcrumbs">
            <!-- おうちの画像 -->
            <!-- <li>
                <a href="harch2.php"><i class="fa fa-home"></i></a>
            </li> -->
        </ol>
    </nav>
    <div class="example">
        <img src="../img/24726001_l.jpg" alt="トップ画像">
        <p class="center">次世代と農家をつなぐ、架け橋へ</p>
    </div>
    <img src="../img/event.png" alt="イベント画像" class="i_img">
    <main>
        <section>
            <div class="event-flex">
                <a href="reserve/reserve.php" class="group">
                    <div class="group-content">
                        <img src="../img/24596495_s.jpg" class="group-img" alt=""><br>
                        <h2 class="group-title">稲刈りを体験しよう!!</h2>
                        <p class="text">
                            ■ 開催日：2022/009/23～20221/11/27<br>
                            ■ 応募締め切り：2022/11/05<br>
                            ■ 場所：米村農園｜新潟県新潟市〇〇ー〇<br>
                        </p><br>
                    </div>
                    <button class="group-btn">詳しく見る ➢</button>
                </a>
                <a href="reserve/reserve.php" class="group">
                    <div class="group-content">
                        <img src="../img/24622382_s.jpg" class="group-img" alt=""><br>
                        <h2 class="group-title">トマトを１から育てよう</h2>
                        <p class="text">
                            ■ 開催日：2022/04/23～20221/11/27<br>
                            ■ 応募締め切り：2022/11/05<br>
                            ■ 場所：トマト農園｜熊本県熊本市〇〇ー〇<br>
                        </p><br>
                    </div>
                    <button class="group-btn">詳しく見る ➢</button>
                </a>
            </div>
            <div class="event-flex">
                <a href="reserve/reserve.php" class="group">
                    <div class="group-content">
                        <img src="../img/24810905_s.jpg" class="group-img" alt=""><br>
                        <h2 class="group-title">なし狩りを体験しよう！！</h2>
                        <p class="text">
                            ■ 開催日：2022/04/23～20221/11/27<br>
                            ■ 応募締め切り：2022/11/05<br>
                            ■ 場所：なし農園｜山梨県甲府市〇〇ー〇<br>
                        </p><br>
                    </div>
                    <button class="group-btn">詳しく見る ➢</button>
                </a>
                <a href="reserve/reserve.php" class="group">
                    <div class="group-content">
                        <img src="../img/677038_s.jpg" class="group-img" alt=""><br>
                        <h2 class="group-title">秋の味覚収穫祭！！</h2>
                        <p class="text">
                            ■ 開催日：2022/009/23～20221/11/27<br>
                            ■ 応募締め切り：2022/11/05<br>
                            ■ 場所：農園｜鹿児島県鹿児島市〇〇ー〇<br>
                        </p><br>
                    </div>
                    <button class="group-btn">詳しく見る ➢</button>
                </a>  
            </div>
            <div class="map">
                <h1 class="faa-bounce animated-hover"> 
                    <i class="fas fa-map-marker-alt map-marker" ></i><span>地域</span>から探そう
                </h1>
            </div>
        </section>
        <!-- 日本地図 -->
        <div id="map">
            <?php include('map/JapanMap.php') ?>
        </div>
        
        <!-- harch使い方 -->
        <section>
            <img src="../img/step_title.png" alt=""><br>
            <p class="step-title-text">
                農業に興味があると感じたら、まずは農業体験をしてみましょう。特に職業として農業を意識されている方にとっては、ご自身の描いている農業のイメージとミスマッチを防ぐためにもぜひ、積極的に体験に参加してください！！初めての体験の先には、初めての世界が、そして新しい自分との出会いが待っているかもしれません。
            </p><br>
            <div class="step-flex"> 
                <!-- 探す -->
                <div class="step">
                    <img src="../img/search.png" alt=""><br>
                    <p class="step-content">
                        行き先、カテゴリ、日付など、お好みの条件から体験を探します。おすすめ順、開催順などで並び変えたり、地図表示で探すことも可能です。
                    </p>
                </div>
                <h1 class="arrow">▷</h1>
                <!-- 申し込む -->
                <div class="step">
                    <img src="../img/form.png" alt=""><br>
                    <p class="step-content">
                        気になる体験を見つけたら予約しましょう。決済方法はクレジットカード。期限までなら無料でキャンセルが可能です。
                    </p>
                </div>
                <h1 class="arrow">▷</h1>
                <!-- 体験する -->
                <div class="step">
                    <img src="../img/experience.png" alt=""><br>
                    <p class="step-content">
                        体験は原則、現地集合・現地解散になります。会場までの移動の計画も立てた上で当日を迎えましょう。
                    </p>
                </div>
            </div>
        </section>
        <div id="js-pagetop">
            <span class="arrow_top">
                <i class="fas fa-angle-double-up faa-float animated"></i>
                <br>1番上へ戻る
            </span>
        </div>
    </main>
    <!-- フッター -->
    <?php include('footer.php'); ?>

    <!--トップへ戻るボタン-->
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
