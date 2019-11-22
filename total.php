<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Total reStudy</title>
</head>
    <body>
        <h2>1==1</h2>
        <?php
            var_dump(1==1);
        ?>

        <h2>1 > 2</h2>
        <?php
            var_dump(1 > 2)
        ?>

        <h2>1 >= 1</h2>
        <?php
            var_dump(1 >= 1)
        ?>
        <?php
            $i = 1;

            while($i < 11) {
                echo $i++."<br>";
            }
        ?>

        <?php
            for($j = 0; $j < 11; $j++){
                echo $j."<br>";
            }
        ?>

        <?php
            for($k = 1; $k <= 9; $k++){
                for($l = 1; $l <= 9; $l++){
                    echo "$k X $l =".$k*$l."<br>";
                }
            }
        ?>
        <?php
        $a = 1;

        echo $a + 1;
        ?>

        <?php
        
            echo "Hello".$_GET["id"];
            
        ?>

    <h1>1+1</h1>

        <?php
        echo 1 + 1;
        ?>
        <h1>2-1</h1>
        <?php
        echo 2 - 1;
        ?>

    <?php
        $arr = array('a','b','c','d','e','f');
        echo $arr[0].'<br>';
        echo $arr[1].'<br>';

        array_push($arr,"ABC");

        var_dump(count($arr));
    ?>
        
    </body>
</html>