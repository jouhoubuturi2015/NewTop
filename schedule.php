<?php require "spheader.php";//データベース読み込み用 ?>
<?php 
                $today = date("Y-m-d");//本日の日付取得
                $pdo = new PDO("mysql:dbname={$_SESSION['dbname']}", "{$_SESSION['dbusername']}", "{$_SESSION['dbpass']}");
                $st = $pdo->query("SELECT * FROM task WHERE date >= '$today' AND id IS NULL ORDER BY date ASC");//今日以降の予定を表示

                while ($row = $st->fetch()) {
                    $date = htmlspecialchars($row['date']);
                    $time = htmlspecialchars($row['time']);
                    $place = htmlspecialchars($row['place']);
                    $content = htmlspecialchars($row['content']);
                    echo "<tr><td>$date</td><td>$time</td><td>$place</td><td>$content</td></tr>";  
                }

                ?>