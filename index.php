<?php require "spheader.php";//データベース読み込み用 ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta  charset="UTF-8">
        <title>2015年度情報物理研究室</title>
        <link rel="stylesheet" href="base.css">
        <link rel="shortcut icon" href="images/favi.gif">

    </head>
    <body>
        <header>
            <h1><a href="index.php">2015年度情報物理研究室</a></h1>
        </header>
        
        <nav id="menu">
            <a href="#member_state">メンバー</a>
            <a href="#schedule">予定</a>
            <a href="#sns">ツイッター</a>
            <a href="#event">イベント</a>
            <a href="#history">沿革</a>
            <a href="#link" >リンク</a>
        </nav>
        
        <section id="page_body">
            
            <section id="member_state">
                <h1>メンバー</h1>
                <?php
                $pdo = new PDO("mysql:dbname={$_SESSION['dbname']}", "{$_SESSION['dbusername']}", "{$_SESSION['dbpass']}");

                /*-------------------未下校登録処理---------------------*/
                $yesterday = date("Y-m-d", strtotime("- 1 day"));//昨日の日付取得
                $st = $pdo->query("UPDATE member SET situation = 'kitaku' WHERE id IN (SELECT id FROM user_logs WHERE date = '$yesterday' AND end_time IS NULL)");
                $st = $pdo->query("UPDATE user_logs SET end_time = '00:00:00' WHERE date = '$yesterday' AND end_time IS NULL");
                
                /*-------------------現状取得・メンバー表示---------------------*/
                $st = $pdo->query("SELECT * FROM member WHERE NOT id = 999");
                while ($row = $st->fetch()) {
                    $id = htmlspecialchars($row['id']);
                    $pass = htmlspecialchars($row['pass']);
                    $name = htmlspecialchars($row['name']);
                    $lnRuby = htmlspecialchars($row['lnRuby']);
                    $situation = htmlspecialchars($row['situation']);
              
                    echo "<p><a href='http://buturi.heteml.jp/student/2015/$lnRuby/' target='_blank'><img src=http://buturi.heteml.jp/student/2015/images/profile/$lnRuby.jpg class=' profile' width=100 height=100 alt='No image'><img src=images/situation/$situation.gif class='situ' width=60 height=60 alt='$situation'><br /><name>$name</name></a></p>";
                }
                
                
                
                ?>
                

            </section>
            
            <section id="schedule">
                <h1>予定</h1>
            
            </section>

            <section id="sns">
                <h1>ツイッター</h1>

            </section>

            <section id="event">
                <h1>イベント</h1>

            </section>

            <section id="history">
                <h1>沿革</h1>

            </section>
            
            <section id="link">
                <h1>リンク</h1>
            
            </section>
        
        
        
        
        
        
        
        
        
        
        
      </section>   
    </body>
</html>