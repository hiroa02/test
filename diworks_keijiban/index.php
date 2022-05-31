<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="ss.css">
    </head>
    
    <body>
        <?php

        mb_internal_encoding("UTF-8");
        $pdo = new PDO("mysql:dbname=php17;host=localhost;" ,"root" ,"");
        $stmt = $pdo->query("select*from diworks_keijiban");

        

        ?>

        <p><img src="diblog_logo.jpg"><p>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.IBlogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせフォーム</li>
                <li>その他</li>
            </ul>
        </header>
        
        <main>
            <div class="main-a">
                <div class="left">
                <h1>プログラミングに役立つ書籍</h1>
                    <form method="post" action="insert.php">
                        <div>
                            <h2>入力フォーム</h2>
                            <label>ハンドルネーム</label><br>
                            <input type="text" class="text" size="35" name="handlename"/>
                        </div>
                        <div>
                            <label>タイトル</label><br>
                            <input type="text" class="text" size="35" name="title"/>
                        </div>
                        <div>
                            <label>コメント</label><br>
                            <textarea cols="68" rows="7" size="35" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="送信する">
                        </div>
                    </form>
                
                    
                        <!-- <?php
                        echo"<form>";
                        echo "<div class='kizi'>";
                            echo "<h3>タイトル</h3>";
                            echo "<div class='contents'>";
                                echo "<script>";
                                    echo "for(var i = 0 ; i < 24 ; i++){
                                        document.write(\"記事の中身\");
                                        if(i==11||i==17||i==23){
                                            document.write(\"<br>\");
                                        }
                                    }";         
                                echo "</script>";
                                echo "<p1>posted by 通りすがり</p1>";
                            echo "</div>";
                        echo "</div>";
                        echo"</form>";    
                        ?>    
                     -->

                    <?php

                    while($row = $stmt->fetch()){
                        echo "<form>";
                        echo "<div class='kizi'>";
                        echo "<h3>".$row["title"]."</h3>";
                        echo "<div class='contents'>";
                        echo $row["comments"];
                        echo "<br>";
                        echo "<br>";
                        echo "<p1>posted by".$row["handlename"]."</p1>";
                        echo "</div>";
                        echo "</div>";
                        echo "</form>";
                    }
                    ?>
                    
                    <!-- <?php
                        echo"<form>";
                        echo "<div class='kizi'>";
                            echo "<h3>タイトル</h3>";
                            echo "<div class='contents'>";
                                echo "<script>";
                                    echo "for(var i = 0 ; i < 24 ; i++){
                                        document.write(\"記事の中身\");
                                        if(i==11||i==17||i==23){
                                            document.write(\"<br>\");
                                        }
                                    }";         
                                echo "</script>";
                                echo "<p1>posted by 通りすがり</p1>";
                            echo "</div>";
                        echo "</div>";
                        echo"</form>";    
                        ?>    
                     -->

                     <?php

                    while($row = $stmt->fetch()){
                        echo "<form>";
                        echo "<div class='kizi'>";
                        echo "<h3>".$row["title"]."</h3>";
                        echo "<div class='contents'>";
                        echo $row["comments"];
                        echo "<br>";
                        echo "<br>";
                        echo "<p1>posted by".$row["handlename"]."</p1>";
                        echo "</div>";
                        echo "</div>";
                        echo "</form>";
                    }
                    ?>
                </div>
            
                <div class="right">
                    <div class="a">人気の記事</div>
                    <p>
                        PHPオススメの本<br>
                        PHP MyAdminの使い方<br>
                        今人気のエディタTops<br>
                        HTMLの基礎<br>
                    </p>
                    <div class="a">オススメリンク</div>
                    <p>
                        ディーアイワークス株式会社<br>
                        XAMPPのダウンロード<br>
                        Eclipseのダウンロード<br>
                        Braketsのダウンロード<br>
                    </p>
                    <div class="a">カテゴリ</div>
                    <p>
                        HTML<br>
                        PHP<br>
                        MySQL<br>
                        JavaScript
                    </p>
                </div>
            </div>
        </main>
        
        <footer>
            Copyright D.I.works|D.I.blog is the one which provides AtoZ about programming
        </footer>
    </body>
</html>