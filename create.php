<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
};

function print_content()
{
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello World";
    }
};

function print_list()
{
    $list = scandir('./data');
    $i = 0;
    while ($i < count($list)) {
        if ($list[$i] != '.') {
            if ($list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
        $i = $i + 1;
    }
}
?>

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
        <?php
        print_list();
        ?>
    </ol>
    <a href="create.php">Create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>

        <p>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
        </p>

        <p>
            <input type="submit">
        </p>
    </form>

</body>

</html>