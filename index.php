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
                <h1>メンバー・在室状況</h1>
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
              
                    echo "<p><a href='http://buturi.heteml.jp/student/2015/$lnRuby/' target='_blank'>\n<img src=http://buturi.heteml.jp/student/2015/images/profile/$lnRuby.jpg class=' profile' width=100 height=100 alt='$name'><img src=images/situation/$situation.gif class='situ' width=60 height=60 alt='$situation'><br /><name>$name</name></a></p>\n\n";
                }
                
                ?>
            </section>
            
            <section id="schedule">
                <h1>予定</h1>
                <!--卒研支援ページで過ぎた予定を消すのをやめて記録・表示-->
            
            </section>

            <section id="sns">
                <h1>ツイッター</h1>
                <a class="twitter-timeline" href="https://twitter.com/j_b_2015" data-widget-id="611469774460051457">@j_b_2015さんのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

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