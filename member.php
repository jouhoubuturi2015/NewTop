<?php require "spheader.php";//データベース読み込み用 ?>

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
              
                    echo "<span class='memberImg'><a href='http://buturi.heteml.jp/student/2015/$lnRuby/' target='_blank'><img src=http://buturi.heteml.jp/student/2015/images/profile/$lnRuby.jpg class='profile' width=100 height=100 alt='$name'><img src=images/situation/$situation.gif class='situ' width=60 height=60 alt='$situation'></a></span>";
                    echo "<name>$name</name>";
                }
                
                ?>
