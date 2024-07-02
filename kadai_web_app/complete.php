<?php
//セッションを開始
session_start();

$name=isset($_SESSION['name'])? $_SESSION['name']:'名無し';

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>登録が完了しました</h2>
    <!-- <h2>お問い合わせを承りました。</h2> -->
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn" onclick="location.href='form.php';">戻る</button>

    <?php
    // セッション変数を初期化
    $_SESSION=array();

    session_destroy();
    ?>
</body>

</html>