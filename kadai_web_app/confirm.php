<?php


session_start();


// POSTリクエストから入力データを取得
$name= $_POST['user_name'];
$age=$_POST['user_age'];
$category=$_POST['category'];


// エラーメッセージを格納する配列
$errors =[];

// お名前のバリデーション
if(empty($name)){
    $errors[]='社員名を入力して下さい';

}

// メールアドレスのバリデーション
if(empty($age)){
    $errors[]='年齢を入力して下さい';
}




if(empty($errors)){
    $_SESSION['name']=$name;
    $_SESSION['age']=$age;
    
    $_SESSION['category']=$category;
   
    setcookie('name',$name,time()+3600);
    setcookie('age',$age,time()+3600);

}


?>

<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>入力内容をご確認ください</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックください</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>

        </tr>

        <tr>
            <td>社員名</td>
            <td><?php echo $name;?></td>
        </tr>

        <tr>
            <td>年齢</td>
            <td><?php echo $age;?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $category;?></td>
        </tr>

        
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>


    <?php
    // 入力項目にエラーがある場合の処理
    if(!empty($errors)){
     // 配列内のエラーメッセージを順番に出力
        foreach($errors as $error){
            echo '<font color="red">'. $error . '</font>' . '<br>';
        }

        echo '<script> document.getElementById("confirm-btn").disabled =true; </script>';

    }
    ?>

</body>

</html>