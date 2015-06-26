<?php require "spheader.php";//ヘッダー読み込み ※通常時は必ずコメントアウト！開発時のみ ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="state.css">
        <title>在室状況</title>
    </head>
    <body>       
        <h1>現在の在室状況</h1>
        <ul>
        <?php
        $yesterday = date("Y-m-d", strtotime("- 1 day"));//本日の日付取得
        $pdo = new PDO("mysql:dbname={$_SESSION['dbname']}", "{$_SESSION['dbusername']}", "{$_SESSION['dbpass']}");

        //未下校登録処理
        $st = $pdo->query("UPDATE member SET situation = 'kitaku' WHERE id IN (SELECT id FROM user_logs WHERE date = '$yesterday' AND end_time IS NULL)");

        $st = $pdo->query("UPDATE user_logs SET end_time = '00:00:00' WHERE date = '$yesterday' AND end_time IS NULL");

        //現状取得
        $st = $pdo->query("SELECT * FROM member WHERE NOT id = 999");//SQL文の発行
        while ($row = $st->fetch()) {
            $id = htmlspecialchars($row['id']);
            $pass = htmlspecialchars($row['pass']);
            $name = htmlspecialchars($row['name']);
            $lnRuby = htmlspecialchars($row['lnRuby']);
            $situation = htmlspecialchars($row['situation']);
                    
            if($situation == "kitaku")
                $situation = "帰宅";
            else if($situation == "zaishitsu")
                $situation = "在室";
            else if($situation == "kisei")
                $situation = "帰省";
            else if($situation == "kounai")
                $situation = "校内";
            else if($situation == "syokuji")
                $situation = "食事";
            else if($situation == "syuukatsu")
                $situation = "就活";
            else
                $situation = "授業";
                        
              
            echo "<li>$name $situation</li>";
        }
        ?>
        </ul>             
    </body>
</html>
        
        