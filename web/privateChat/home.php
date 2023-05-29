<?php
/*
Template Name: チャット
*/
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>WATSUNCHAT</title>
	<meta name="Author" content=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <header>
    <div class="chat-header">
        <div class="chat-clear">
            <div class="chat-header-title">
        <h1>WATSUNCHAT</h1>
            </div>
         <!--ヘッダーメニュー-->
        <div class="chat-float chat-header-menu">
        <div id="chat-nav-drawer">
      <input id="chat-nav-input" type="checkbox" class="chat-nav-unshown">
      <label id="chat-nav-open" for="chat-nav-input"><span></span></label>
      <label class="chat-nav-unshown" id="chat-nav-close" for="chat-nav-input"></label>
      <div id="chat-nav-content">
    <form action="" method="post">
        名前
        <div><input type="text" name="n"></div>
        メッセージ
        <div><textarea name="m"></textarea></div>
        
        <div class="chat-submit">
        <input type="submit" value="送信">
        </div>
    </form> 
            </div>
        </div>
        </div>
      <!--ヘッダーメニュー-->
        </div> 
    </div>
    </header>
    
    
    <div class="chat-contain">
        

    <!--DBに書き込み-->
    <?php
    if(isset($_POST['n'])) {
        
$my_nam=htmlspecialchars($_POST["n"], ENT_QUOTES);
$my_mes=htmlspecialchars($_POST["m"], ENT_QUOTES);
$dsn= "mysql:host=localhost;port=3306;dbname=harch;charset=utf8";   
    
    try{
        
$db = new PDO($dsn,"root",'Pa$$w0rd');
$db->query("INSERT INTO chat_tb (ban,nam,mes,dat)
            VALUES (NULL,'$my_nam','$my_mes',NOW())");
        
    }catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
              
header("Location: {$_SERVER['PHP_SELF']}");
exit;
    
    }
?>
    
    
    
    
    
    <?php
    // DB接続
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=chat_tb; charset=utf8mb4','root','Pa$$w0rd');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        $msg = $e->getMessage();
        echo '接続に失敗しました。';
        exit();
    }
   
    $ps = $pdo->query("SELECT * FROM chat_tb ORDER BY ban DESC");
        
     
    while($r = $ps->fetch()){ 
        
    ?>
        
        <div class="chat-list">
        <div class="chat-name">
    <?php
    print "{$r['nam']} {$r['dat']}";?>
        </div>
        
        <div class="chat-message">
    <?php    
    print nl2br($r['mes']); ?> 
        </div> 
        
        </div><hr>
    <?php } ?>
       
        

    </div>
    
    <footer>
    <!--フッター固定ナビ-->
    <div id="footerFloatingMenu">
        <div class="ffm">
        <a href="home.php"><p>ホーム</p></a>
        <a href="search.php"><p>検索</p></a>
        <a href="home.php"><p>掲示板</p></a>
        <a href="https://watsunblog.com/"><p>ブログ</p></a>
        </div>
    </div>
    <!--フッター固定ナビ終わり-->
    </footer>
</body>
</html>