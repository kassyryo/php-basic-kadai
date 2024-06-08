<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF=8"> 
    <title>PHP課題基礎</title>
</head>

<body>
    <p>
        <?php

        $num=[15,4,18,23,10];

        function sort_2way($array,$order){

            if($order===true){
                sort($array);
                echo "昇順にソートします<br>";

                foreach($array as $array){
                    echo $array.'<br>';
                }
            }
            else{
                rsort($array);
                echo "降順にソートします<br>";

                foreach($array as $array){
                    echo $array.'<br>';
                }

            }
        }

        sort_2way($num,true);

        sort_2way($num,false);
        ?>
    </p>
</body>
</html>