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
        <li><a href="index.php?id=KIM">KIM</a></li>
    </ol>

    <h2>
        <?php
           if(isset($_GET['id'])) {
               echo $_GET['id'];
           } else {
               echo "Welcome";
           }
        ?>
    </h2>
    <p>
        <?php
            if(isset($_GET['id'])){
                echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello World";
            }
        ?>
    </p>



</body>

</html>