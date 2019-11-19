<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loop</title>
</head>
<body>
    <h1>Loop</h1>

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
    
</body>
</html>