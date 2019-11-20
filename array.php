<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>

    <?php
        $arr = array('a','b','c','d','e','f');
        echo $arr[0].'<br>';
        echo $arr[1].'<br>';

        array_push($arr,"ABC");

        var_dump(count($arr));
    ?>
</body>
</html>