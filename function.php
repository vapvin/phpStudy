<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>

    <?php
        $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Aut minima velit voluptatibus accusantium.
        
        
        Mollitia quasi ducimus obcaecati ullam! A perspiciatis voluptas placeat numquam modi nulla, eveniet vitae vel iure enim.";
        echo $str;
    ?>

    <h2>strlen</h2>
    <?php
        echo strlen($str);
    ?>

    <h2>nl2br()</h2>

    <?php
        echo nl2br($str);
    ?>
</body>
</html>