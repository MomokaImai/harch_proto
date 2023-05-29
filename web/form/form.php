<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="../../css/harch.css">

</head>
<body>
    <h1>お問い合わせ画面</h1>
    <form action="submit.php" method="POST"> 
        <table border="1" class="form-table">
            <tr>
                <th>お名前</th>
                <td>
                    <input type="form-text" name="name" required value="" class="form-text">
                </td>
            </tr> 
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="form-text" name="mail" required value="" class="form-text">
                </td>
            </tr> 
            <tr>
                <th>地域</th>
                <td>
                    <select name="area">
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
                </td>
            </tr> 
            <tr>
                <th>お問い合わせ種別</th>
                <td>
                    <label><input type="checkbox" name="type[]"  value="ユーザー登録について" class="form-text">ユーザー登録について<br></label>
                    <label><input type="checkbox" name="type[]"  value="農業体験について" class="form-text">農業体験について<br></label>
                    <label><input type="checkbox" name="type[]"  value="返金ついて" class="form-text">返金について<br></label>
                </td>
            </tr> 
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <form-textarea type="inquiry" name="message" required value="" row="3" cols="50"></form-textarea>
                </td>
            </tr>
            <tr>
                <th>お得な情報をEメールで受け取りますか</th>
                <td>
                    <label><input type="radio" name="news[]" value="受け取ります">受け取ります<br></label>
                    <label><input type="radio" name="news[]" value="受け取りません">受け取りません<br></label>
                </td>
            </tr>
        </table><br>
        <input type="submit" value="送信" class="button">
        <button type="button" onclick="history.back()" class="button">戻る</button>
    </form>
</body>
</html>