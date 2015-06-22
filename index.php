<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta  charset="UTF-8">
        <title>2015年度情報物理研究室</title>
        <link rel="stylesheet" href="base.css">
        <link rel="shortcut icon" href="images/favi.gif">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        <script src="move.js"></script>

    </head>
    <body>
        <header>
            <h1><a href="index.php" id="top">2015年度情報物理研究室</a></h1>
        </header>
        
        <nav id="menu">
            <a href="#top">トップ</a>
            <a href="#member">メンバー</a>
            <a href="#schedule">予定</a>
            <a href="#products">制作物</a>
            <a href="#sns">ツイッター</a>
            <a href="#event">イベント</a>
            <a href="#history">沿革</a>
            <a href="#link" >リンク</a>
        </nav>
        
        <article id="page_body">
            
            <section id="member">
                <h1>メンバー・在室状況</h1>
                <?php
                $files=fopen("http://buturi.heteml.jp/student/2015/member.php","r");
                fpassthru($files);
                ?>
            </section>
            
            <section id="schedule">
                <h1>予定</h1>
                <!--卒研支援ページで過ぎた予定を消すのをやめて記録・表示-->
                <table><tr><th>日付</th><th>時間</th><th>場所</th><th>内容</th></tr>
                <?php
                $files=fopen("http://buturi.heteml.jp/student/2015/schedule.php","r");
                fpassthru($files);
                ?>
                </table>
            
            </section>
            
            <section id="products">
                <h1>制作物</h1>
            
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
                <h2>通年</h2>
                <table>
                    <tr><td>毎週月・木曜日</td><td>ランチミーティング</td></tr>
                
                </table>
                <h2>2月</h2>
                <table>
                    <tr><td><time>2/5</time></td><td>企業情報・就活情報の交換</td></tr>
                    <tr><td><time>2/5</time></td><td>企業情報・就活情報の交換</td></tr>
                    <tr><td><time>2/6</time></td><td>企業情報・就活情報の交換</td></tr>
                    <tr><td><time>2/17</time></td><td>先輩の卒研発表練習を聴く</td></tr>
                    <tr><td><time>2/18</time></td><td>卒研発表</td></tr>
                </table>
                
                <h2>5月</h2>
                <table>
                    <tr><td><time>5/9</time></td><td>公開講座補助</td></tr>
                    <tr><td><time>5/22</time></td><td>今年度初　福山大ミーティング</td></tr>
                </table>
                
                <h2>6月</h2>
                <table>
                
                </table>
                
                <?php//データベースから沿革取得
                //今月を取得しそこまで
                
                
                
                
                ?>

            </section>
            
            <section id="link">
                <h1>リンク</h1>
                <ul>
                   <li ><input type="checkbox" id="1" /><label for="1">情報物理研究室</label>
                    <ul >
                        <li><a href="http://buturi.heteml.jp/student/2015/misawa/test/attendance/index.php" target="blank">2015年度情報物理教室卒研支援ページ</a></li>
                        <li><a href="https://twitter.com/j_b_2015" target="blank">2015年度情報物理教室Twitter</a></li>
                        <li><a href="http://buturi.heteml.jp/student/2014/" target="blank">2014年度情報物理教室</a></li>
                        <li><a href="http://buturi.heteml.jp/student/2013/" target="blank">2013年度情報物理教室</a></li>
                        <li><a href="http://buturi.heteml.jp/student/2012/" target="blank">2012年度情報物理教室</a></li>
                        <li><a href="http://buturi.heteml.jp/student/2011/" target="blank">2011年度情報物理教室</a></li>
                        <li><a href="http://buturi.heteml.jp/js/" target="blank">JavaScript</a></li>
                        <li><a href="http://buturi.heteml.jp/sotuken" target="blank">情報物理研究室</a></li>
                        <li><a href="http://buturi.heteml.jp/buturi" target="blank">物理学（徐）</a></li>
                        <li><a href="http://buturi.heteml.jp" target="blank">科学的教育知：学習と教育を考える足場 </a></li>
                        <li><a href="http://buturi.hiro.kindai.ac.jp/" target="blank">物理教育</a></li>
                        <li><a href="https://webftp.heteml.jp" target="blank">hetemlログイン</a></li>
                        <li><a href="http://www.hiro.kindai.ac.jp/" target="blank">近畿大学工学部</a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="2" /><label for="2">IT系ニュース</label>
                    <ul >
                        <li><a href="http://www.atmarkit.co.jp/" target="blank">＠IT</a></li>
                        <li><a href="http://ggsoku.com/" target="blank">GGSOKU - ガジェット速報</a></li>
                        <li><a href="http://blog.livedoor.jp/itsoku/" target="blank">IT速報</a></li>
                        <li><a href="http://gigazine.net/" target="blank">GIGAZINE（ギガジン）</a></li>
                        <li><a href="http://weekly.ascii.jp/" target="blank">週アスPLUS - 週刊アスキーのITニュースサイト</a></li>
                        <li><a href="http://deviceplus.jp/" target="blank">Device Plus : エンジニアライフにプラス1の情報を</a></li>
                        <li><a href="http://coliss.com/" target="blank">コリス | サイト制作に関する最新の情報をご紹介</a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="3" /><label for="3">IT系</label>
                    <ul >
                        <li><a href="http://paiza.hatenablog.com/" target="blank">paiza開発日誌</a></li>
                        <li><a href="https://www.google.com/calendar/embed?src=5udlp7brhcnbuv0mq7t0jcmh04@group.calendar.google.com" target="blank">広島IT勉強会カレンダー(仮) </a></li>
                        <li><a href="https://www.google.com/calendar/embed?src=ZnZpanZvaG05MXVpZnZkOWhyYXRlaGY2NWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" target="blank">IT 勉強会カレンダー </a></li>
                        <li><a href="https://qiita.com/" target="blank">Qiita - プログラマの技術情報共有サービス </a></li>
                        <li><a href="http://プログラマが知るべき97のこと.com/" target="blank">プログラマが知るべき97のこと</a></li>
                        <li><a href="http://www.ic.is.tohoku.ac.jp/~swk/lecture/yaruodsp/main.html" target="blank">
            やる夫で学ぶディジタル信号処理</a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="4" /><label for="4">WEB　IDE</label>
                    <ul >
                        <li><a href="https://paiza.io/?locale=ja-jp" target="blank">paiza.IO</a></li>
                        <li><a href="http://jsdo.it/" target="blank">jsdo.it</a></li>
                        <li><a href="http://www.tutorialspoint.com/codingground.htm" target="blank">CodingGround</a></li>
                        <li><a href="http://runnable.com/" target="blank">Runnable</a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="5" /><label for="5">HP作成の時に便利</label>
                    <ul >
                        <li><a href="http://www.htmq.com/index.htm" target="blank">HTMLクイックリファレンス</a></li>
                        <li><a href="http://jsdo.it/" target="blank">jsdo.it</a></li>
                        <li><a href="http://css.uka-p.com/" target="blank">CSSレイアウト実践講座</a></li>
                        <li><a href="http://dotinstall.com/" target="blank">ドットインストール</a></li>
                        <li><a href="http://www.dspt.net/" target="blank">HTMLタグボード</a></li>
                        <li><a href="http://html-linksyuu.com/" target="blank">HTMLリンク集</a></li>
                        <li><a href="http://weboook.blog22.fc2.com/blog-entry-268.html" target="blank">意外と知らない!?CSSセレクタ20個のおさらい</a></li>
                        <li><a href="https://qiita.com/tags" target="blank">Qiita - プログラマの技術情報共有サービス </a></li>
                        <li><a href="http://codepen.io/" target="blank">CodePen  </a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="6"/><label for="6">プログラミング勉強</label>
                    <ul >
                        <li><a href="http://dotinstall.com/" target="blank">ドットインストール</a></li>
                        <li><a href="http://prog-8.com/" target="blank">Progate | プログラミングの入門なら、基礎から学べるProgate (プロゲート)</a></li>
                        <li><a href="http://libro.tuyano.com/" target="blank">libro</a></li>
                        <li><a href="http://allabout.co.jp/netpc/" target="blank">AllAbout デジタル</a></li>
                        <li><a href="http://coreblog.org/ats/stuff/minpy_web/" target="blank">Pythonで学ぶWebアプリ開発のABC みんなのPython Webアプリ編 HTML版</a></li>
                        <li><a href="https://progit-ja.github.io/" target="blank">Pro Git 日本語版電子書籍公開サイト</a></li>
                    </ul>
                   </li>

                   <li ><input type="checkbox" id="7"/><label for="7">職業サイト</label>
                    <ul >
                        <li><a href="http://www.kansyuken.com/" target="blank">関就研｜関西学生就職指導研究会</a></li>
                        <li><a href="https://www.ac-lab.jp/" target="blank">就活ラボ</a></li>
                        <li><a href="http://www.s-walker.net/" target="blank">朝日学情ナビ</a></li>
                        <li><a href="http://dotinstall.com/" target="blank">就職ウォーカーNet</a></li>
                        <li><a href="https://navi16.shukatsu.jp/16/" target="blank">ダイヤモンド就活ナビ</a></li>
                        <li><a href="https://job.nikkei.co.jp/" target="blank">日経就職ナビ</a></li>
                        <li><a href="http://bunnabi.jp/" target="blank">ブンナビ！（文化放送就職ナビ）</a></li>
                        <li><a href="http://job.mynavi.jp/" target="blank">マイナビ</a></li>
                        <li><a href="hhttp://www.rikunabi.com/" target="blank">リクナビ</a></li>
                    </ul>
                   </li>


                   <li ><input type="checkbox" id="8"/><label for="8">フリー素材</label>
                    <ul >
                        <li><a href="http://musmus.main.jp/" target="blank">フリーBGM・音楽素材 MusMus</a></li>
                        <li><a href="http://free-texture.net/" target="blank">フリーテクスチャ素材館</a></li>
                    </ul>
                   </li>
                </ul>
            </section>
        
        
        
        
        
        
        
        
        
        
        
      </article>   
    </body>
</html>