<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Web</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>

    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus natus illo accusantium ipsa. Itaque velit fugiat, laudantium iure harum illum quis omnis blanditiis quibusdam libero esse voluptatem consectetur temporibus quia!</p>

</body>

</html>