<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>体験作成</title>
    <!-- css -->
    <link rel="stylesheet" href="../../css/experience.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" type="text/css" media="all">
</head>
<body>
    <ul class="tab">
        <li class="tab-item">
            <a href="#">
                <span>基本設定</span>
            </a>
        </li>
        <li class="tab-item">
            <a href="#">
                <span>高度設定</span>
            </a>
        </li>
    </ul>
    <div class="segment">
        <div class="segment-contents">
            <div class="mypage-edit-layout">
                <h3>開催エリア</h3>
                <p>体験を開催する場所、またはオンライン開催を選択してください。</p>
                <div class="radio">
                    <label for="">
                        <input type="radio" name="area" checked>
                        <span>開催場所</span>
                    </label>
                </div>
                <div class="radio-item">
                    <p>より細かいエリアを設定すると検索されやすくなります。</p>
                    <div class="select-item">
                        <select name="prefacutere" id="">
                            <option value="" selected>都道府県</option>
                            <option value="1">北海道</option>
                                <option value="2">青森県</option>
                                <option value="3">岩手県</option>
                                <option value="4">宮城県</option>
                                <option value="5">秋田県</option>
                                <option value="6">山形県</option>
                                <option value="7">福島県</option>
                                <option value="8">茨城県</option>
                                <option value="9">栃木県</option>
                                <option value="10">群馬県</option>
                                <option value="11">埼玉県</option>
                                <option value="12">千葉県</option>
                                <option value="13">東京都</option>
                                <option value="14">神奈川県</option>
                                <option value="15">新潟県</option>
                                <option value="16">富山県</option>
                                <option value="17">石川県</option>
                                <option value="18">福井県</option>
                                <option value="19">山梨県</option>
                                <option value="20">長野県</option>
                                <option value="21">岐阜県</option>
                                <option value="22">静岡県</option>
                                <option value="23">愛知県</option>
                                <option value="24">三重県</option>
                                <option value="25">滋賀県</option>
                                <option value="26">京都府</option>
                                <option value="27">大阪府</option>
                                <option value="28">兵庫県</option>
                                <option value="29">奈良県</option>
                                <option value="30">和歌山県</option>
                                <option value="31">鳥取県</option>
                                <option value="32">島根県</option>
                                <option value="33">岡山県</option>
                                <option value="34">広島県</option>
                                <option value="35">山口県</option>
                                <option value="36">徳島県</option>
                                <option value="37">香川県</option>
                                <option value="38">愛媛県</option>
                                <option value="39">高知県</option>
                                <option value="40">福岡県</option>
                                <option value="41">佐賀県</option>
                                <option value="42">長崎県</option>
                                <option value="43">熊本県</option>
                                <option value="44">大分県</option>
                                <option value="45">宮崎県</option>
                                <option value="46">鹿児島県</option>
                                <option value="47">沖縄県</option>
                        </select>
                    </div>
                    <div class="select-item">
                        <input type="text" placeholder="市区町村">
                    </div>
                    <div class="select-item">
                        <input type="text" placeholder="駅名">
                    </div>
                </div>
                <div class="radio-hide">
                    <hr>
                    <div class="radio-title">
                        <h4>集合場所の設定</h4>
                        <p>体験を開催する際にゲストに集合してほしい場所を設定してください</p>
                    </div>
                    <div>
                        住所
                        <span class="mark"></span>
                    </div>
                    <div>
                        <input type="text" placeholder="住所を記入してください">
                    </div>
                    <button type="submit">
                        <i class="fas fa-map-marked-alt"></i>
                        地図を設定する
                    </button>
                </div>
                <div class="online">
                    <label for="">
                        <input type="radio" name="area" checked>
                        <span>オンライン開催</span>
                    </label>
                    <div class="onlin-item">
                        <p>体験当日にゲストがアクセスするZoomなどのURLを記入してください。</p>
                        <input type="text" placeholder="体験当日にがストがアクセスするＵＲＬを記入ください">
                    </div>
                </div>
            </div>
        </div>
        <div class="experience-main-contents">
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    体験名
                </dt>
                <dd>
                    <textarea name="" id="" cols="30" rows="10" placehorder="体験名を記入してください"></textarea>
                </dd>
            </dl>
            <dl>
                <dt>体験のイメージ画像</dt>
                <dd>
                    <lavel class="filelabel">
                        <span class="filelabel">
                            <img src="../../img/img.png" alt="アイコン画像" id="file-preview">
                        </span>
                        <input type="file" name="datafile" id="filesend" multiple accept=".jpg,.gif,.png,image/gif,image/jpeg,image/png">
                    </lavel>
                    <p><span class="mark">必須</span>メイン</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    
                </dt>
            </dl>
        </div>
    </div>
    <script>
        document.getElementById('filesend').addEventListener('change', function (e) {
            // 1枚だけ表示する
            var file = e.target.files[0];

            // ファイルのブラウザ上でのURLを取得する
            var blobUrl = window.URL.createObjectURL(file);

            // img要素に表示
            var img = document.getElementById('file-preview');
            img.src = blobUrl;
        });
    </script>
</body>
</html>