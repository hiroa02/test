<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=php16;host=localhost;" ,"root" ,"");
$pdo ->exec("insert into phpkadai(name,mail,tosi,coment)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['tosi']."','".$_POST['coment']."');");
?>

<DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css" href="php2.css">
    </head>
    
    <body>
        <h1>お問い合わせフォーム</h1>
        
        <div class="confirm">
            <P>お問い合わせ有難うございました。<br>3営業日以内にご連絡差し上げます。</P>
        </div>
    </body>
</html>
