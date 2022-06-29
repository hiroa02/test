<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="di3.css">
    </head>

    <body>
       <p><img src="diblog_logo.jpg"></p>
       <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.IBlogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
                <li><a href="file:///C:/Users/yoda/Desktop/workspace/workspace-yoda/test/di.blog/di2.html">アカウント登録</a></li>
            </ul>
       </header>

       <main>
            <h1>アカウント登録確認画面</h1>

            <div class="aka">
                <label>名前(姓)</label>
                <p1><?php echo $_POST['last name'];?></p1>

                <label>名前(名)</label>
                <p1><?php echo $_POST['first name'];?></p1>

                <label>カナ(姓)</label>
                <p1><?php echo $_POST['kana last'];?></p1>

                <label>カナ(名)</label>
                <p1><?php echo $_POST['kana first'];?></p1>

                <label>メールアドレス</label>
                <p1><?php echo $_POST['mail'];?></p1>

                <label>パスワード</label>
                <p1><?php echo $_POST['pass'];?></p1>

                <label>性別</label>
                <p1><?php echo $_POST['man'];?></p1>

                <label>郵便番号</label>
                <p1><?php echo $_POST['post code'];?></p1>

                <label>住所(都道府県)</label>
                <p1><?php echo $_POST['address'];?></p1>

                <label>住所(市区町村)</label>
                <p1><?php echo $_POST['municipalities'];?></p1>

                <label>住所(番地)</label>
                <p1><?php echo $_POST['banti'];?></p1>

                <label>アカウント権限</label>
                <p1><?php echo $_POST['authority'];?></p1>

                <form action="php16.html">
                    <input type="submit" class="button1" value="戻って修正する">
                </form>
                
                <form action="insert.php" method="post">
                    <input type="submit" class="button2" value="登録する">
                    <input type="hidden" value="<?php echo $_POST['last name'];?>" name="last name">
                    <input type="hidden" value="<?php echo $_POST['first name'];?>" name="first name">
                    <input type="hidden" value="<?php echo $_POST['kana last'];?>" name="kana last">
                    <input type="hidden" value="<?php echo $_POST['kana first'];?>" name="kana first">
                    <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['pass'];?>" name="pass">
                    <input type="hidden" value="<?php echo $_POST['man'];?>" name="man">
                    <input type="hidden" value="<?php echo $_POST['post code'];?>" name="post code">
                    <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                    <input type="hidden" value="<?php echo $_POST['municipalities'];?>" name="municipalities">
                    <input type="hidden" value="<?php echo $_POST['banti'];?>" name="banti">
                    <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
                </form>
            </div>
       </main>

       <footer>
            Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
       </footer>

    </body>
</html>