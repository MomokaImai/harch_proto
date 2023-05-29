<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お支払い方法</title>
    <link rel="stylesheet" href="../../css/reserve.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" type="text/css" media="all">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- フリガナ自動入力 -->
    <script type="text/javascript" src="./jquery.autoKana.js"></script>
</head>
<body class="reserve-body">
    <form action="reserveCheke.php" method="post">
        <!-- <p class="text">
            <span class="title">体験予約</span>
            予約内容入力 ▸ <span class="mark">支払い情報入力</span> ▸ 最終確認 ▸ 予約完了
        </p><br> -->
        <div class="reserve-top">
            <h1>体験予約</h1>
            <img src="../../img/sen.jpg" alt="飾り線" width="100%"><br>
            <!-- 体験タイトル -->
            <a href="#"><h2><span class="reserve-title">稲刈りを体験しよう<span></h2></a>
            <div class="reserve-user">
                <img src="../../img/user.png" alt="ユーザーアイコン" class="user-icon">
                <a href="../profile/profile.php"><span class="farmer-name">米村農園</span></a>
                <!-- 体験内容表示 -->
                <div class="read-more">
                    <button><span>続きを表示</span></button>
                </div>
            </div>
        </div><br>
        <div class="reserve-date">
            <h2>参加日時</h2>
            <hr class="reserve-line">
            <div class="order-reserve-date">
                <div class="order-reserve-date-left"></div>
                <div class="order-reserve-date-center">
                    <p>2022/12/30(金）</p>
                </div>
                <div class="order-reserve-date-right">
                    <a href="#" class="next">
                        <p>
                            <span>次へ <i class="fa fa-angle-right "></i></span> 
                        </p>
                    </a>
                </div>
            </div>
            <label class="date-checkbox">
                <ul>
                    <li>
                        <input type="checkbox" name="date">
                        <div class="reserve-list">
                            <div class="reserve-list-item">
                                <p class="reserve-list-time1">
                                    <i class="fa fa-check"></i> 
                                    10:00
                                    開始
                                    <i class="far fa-bell"></i>
                                    満員
                                </p>
                                <p class="reserve-list-time2">
                                    2,000円
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </label>
            <a href="#" class="other-date">
                <span><i class="fas fa-calendar-alt"></i>他の日程を探す</span>
            </a><br><br>
            <div class="reserve-data-list">
                <h2>予約期限</h2>
                <p>2022/12/28(水) 18:00</p>
            </div><br>
            <div class="reserve-data-list">
                <h2>開催成立人数</h2>
                <p>3人 (2022/12/28(水) 15:00に判断)</p> 
            </div><br>
            <div class="reserve-data-list">
                <h2>参加予定ゲスト</h2>
                <?php
                    $userIcom = '<img src="../../img/user.png" alt="ユーザーアイコン" class="user-icon-list">';
                    for ($i=0; $i < 9; $i++) { 
                        echo $userIcom;
                    }
                ?>
            </div><br>
        </div><br>
        <div class="reserve-date-body">
            <h2>予約情報</h2>
            <hr class="reserve-line">
            <div class="reserve-date-contents">
                <div class="counter-cotegory">
                    <p>
                        <span class="mark">必須</span>
                        大人
                    </p>
                    <p class="price">2,000円</p>
                </div>
                <div class="counter-container">
                    <label class="number-spinner-wrap">
                        <span class="spinner spinner-down">
                            <img src="../../img/minus2.png" alt="−ボタン" width="30px">
                        </span>
                        <input type="number" value="" placeholder="1"
                        data-max="10" data-min="0" requiredd>人
                        <span class="spinner spinner-up">
                            <img src="../../img/plus.png" alt="−ボタン" width="30px">
                        </span>
                    </label>
                </div>
            </div>
            <div class="price-contents">
                <div class="price-left">
                    <p>サービス手数料</p>
                    <h3>合計金額</h3>
                </div>
                <div class="price-right">
                    <p>100円</p>
                    <h3>2,100円</h3>
                </div>
            </div>
        </div>
        <div class="contact-body">
            <h2>連絡事項</h2>
            <hr class="reserve-line">
            <div class="table">
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        名前
                    </dt>
                    <dd>
                        <input type="text" name="name" value="" placeholder="ハーチ" required> 
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        フリガナ
                    </dt>
                    <dd>
                        <input type="text" name="kana" value="" placeholder="ハーチタロウ" required> 
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        電話番号（緊急連絡先）
                    </dt>
                    <dd>
                        <input type="tel" name="tel" value="" placeholder="09099999999" required> 
                    </dd>
                </dl>
            <!-- </div> -->
                <!-- <dl class="contact-area"> -->
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        ホストへのメッセージ <br>
                        <textarea name="msg" cols="80" rows="20" placeholder="こんにちは。「稲刈り体験をしよう！」に参加させていただきます。当日を楽しみにしております！よろしくお願いいたします。"></textarea>
                    </dt>
                    <!-- <dd>
                        <textarea name="msg" cols="80" rows="20" placeholder="こんにちは。「稲刈り体験をしよう！」に参加させていただきます。当日を楽しみにしております！よろしくお願いいたします。"></textarea>
                    </dd> -->
                </dl>
            </div>
        </div>
        <div class="payment-body">
            <h2>お支払い方法</h2>
            <hr class="reserve-line">
            <div class="table">
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        カード番号
                    </dt>
                    <dd>
                        <input type="text" name="num" value="" placeholder="3528 5702 3921 4001" required>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <span class="mark">必須</span>
                        有効期限
                    </dt>
                    <dd>
                        <input type="text" name="num" value="" placeholder="09 / 27" required>
                    </dd>
                </dl>
                <dl>
                    <dt>
                    <span class="mark">必須</span>
                        セキュリティコード
                    </dt>
                    <dd>
                    <input type="text" name="num" value="" placeholder="723" required>
                    </dd>
                </dl>
            </div>
            <label class="container">
                <input id="box1" type="checkbox" checked="checked" name="retention" value="1">
                <div class="checkmark"></div>
                <p>カードを登録して次回も利用する</p>
            </label> 
            <div class="card">
                <div class="card-icon">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-jcb"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-amex"></i>
                </div>
                <ul>
                    <li>VISA、Mastercard、American Express、JCBカードをご利用いただけます。</li>
                    <li>お客様のクレジットカード情報は当サービスを経由せずに決済されるためご安心ください。</li>
                </ul>
            </div>
        </div><br>
        <!-- 予約前確認事項 -->
        <div class="caution">
            <p class="caution-text">
                <i class="fas fa-exclamation-circle"></i>予約前に必ず確認お願いします。<br>
                ・2022/12/28/(水)15:00以降にお客様の都合によりキャンセルされた場合手数料として前額のご負担いただきます。<br>
                ・ホストの都合で開催が中止になった場合は全額返金いたします。<br>
                ・天災など特別な理由によるキャンセルの場合は返金をすることがございます。<br>
                ・notice@helloaini.comからのメールを受信できるように設定をお願いします。<br>
            </p>
        </div>
        <div class="btn-flex">
            <input type="submit" value="予約する" class="reserve-btn">
    </form>
            <button onclick="location.href='../harch2.php'" class="reserve-btn" role="button">キャンセル</button>
        </div>
    <?php include("../footer.php") ;?>
    <script>
        const $wrap = document.querySelector('.number-spinner-wrap')
        const $input = $wrap.querySelector('input')

        $wrap.querySelector('.spinner-down').onclick = ()=> {
            $input.stepDown()
        }
        $wrap.querySelector('.spinner-up').onclick = ()=> {
            $input.stepUp()
        }
        $(function() {
            //name属性で判別する場合
            $.fn.autoKana('input[name="name"] ', 'input[name="kana"]', {katakana:true});
        });
        const textarea = document.getElementById('textarea');
        const btn = document.getElementById('btn');

        textarea.addEventListener('keyup', (e) => {
            if (e.target.value.length > 100) {
                alert("100文字以内で記述してください。");
                btn.disabled = true;
            };
            if (e.target.value.length <= 100) {
                btn.disabled = false;
            };
        });
    </script>
</body>
</html>