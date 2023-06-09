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
    <title>プロフィール設定</title>
    <link rel="stylesheet" href="../../css/profile.css">
</head>
<body class="profile-body">
    <h2>プロフィール設定</h2>
    <hr>
    <form action="">
        <dl>
            <dt>
                プロフィール画像
            </dt>
            <dd>
                <label>
                    <span class="filelabel">
                        <img src="../../img/icon.png" alt="アイコン画像" id="file-preview">
                    </span>
                    <input type="file" name="datafile" id="filesend" multiple accept=".jpg,.gif,.png,image/gif,image/jpeg,image/png">
                </label>
            </dd>
        </dl>
        <div class="table">
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    名前
                </dt>
                <dd>
                    <label>
                        <input type="text" name="name" placeholder="ハーチ太郎" require value="" class="common-input">
                    </label>
                    <p class="remit">残り30文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    名前(フリガナ)
                </dt>
                <dd>
                    <label>
                        <input type="text" name="namekana" placeholder="ハーチタロウ" require value="" class="common-input">
                    </label>
                    <p class="remit">残り30文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    ニックネーム
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="harch" require value="" class="common-input">
                    </label>
                    <p class="remit">残り10文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    自己紹介
                </dt>
                <dd>
                    <label>
                        <textarea name="introduce" placeholder="harch" require value=""></textarea>
                    </label>
                    <p class="remit">残り4000文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    FaceBook URL
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="https://www.facebook.com/helloharch" require value="" class="common-input">
                    </label>
                    <p class="remit">残り120文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    Twitter URL
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="https://www.twitter.com/helloharch" require value="" class="common-input">
                    </label>
                    <p class="remit">残り120文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    Instagram URL
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="https://www.instagram.com/helloharch" require value="" class="common-input">
                    </label>
                    <p class="remit">残り120文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    ホームページ URL
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="https://www.harch.com/helloharch" require value="" class="common-input">
                    </label>
                    <p class="remit">残り120文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="mark">必須</span>
                    活動地域
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="お住いの地域のエリア、普段活動しているエリアを入力ください" require value="" class="common-input">
                    </label>
                    <p class="remit">残り20文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    お住いの地域[郵便番号](非公開)
                </dt>
                <dd>
                    <label>
                        <input type="text" name="nickname" placeholder="100-0001" require value="" class="common-input">
                    </label>
                    <p class="remit">残り20文字</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    性別(非公開)
                </dt>
                <dd>
                    <label><input type="radio" name="sex" value="none" class="sex">指定しない</label><br>
                    <label><input type="radio" name="sex" value="woman" class="sex">女性</label><br>
                    <label><input type="radio" name="sex" value="men" class="sex">男性</label><br>
                    <label><input type="radio" name="sex" value="other" class="sex">その他</label><br>
                </dd>
            </dl>
            <dl>
                <dt>
                    誕生日(非公開)
                </dt>
                <dd>
                    <label>
                        <select name="year">
                            <option value="placeholder" disabled selected style="display:none;">西暦</option>
                            <option value="1900">1900</option>
                            <option value="1901">1901</option>
                            <option value="1902">1902</option>
                            <option value="1903">1903</option>
                            <option value="1904">1904</option>
                            <option value="1905">1905</option>
                            <option value="1906">1906</option>
                            <option value="1907">1907</option>
                            <option value="1908">1908</option>
                            <option value="1909">1909</option>
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>　年
                        <select name="month">
                            <option value="placeholder" disabled selected style="display:none;">1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>　月
                        <select name="day">
                            <option value="placeholder" disabled selected style="display:none;">1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>　日<br>
                    </label>
                </dd>
            </dl>
            <dl>
                <dt>
                    参加地域
                </dt>
                <dd>
                    <label>
                        <select name="pref_id">
                            <option value="" selected><?php 
                                if(isset($_SESSION['area'])):
                                    $are = $_SESSION['area'];
                                    echo $area;
                                else:
                                    echo "北海道";
                                endif;
                            ?></option>
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
                    </label>
                </dd>
            </dl>
        </div>
        <button type="submit" calss="profile-btn">変更</button>
    </form>
    
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