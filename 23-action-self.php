<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        Title: <input type="text" name="title">
        <br>
        Content : <textarea name="content" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Save">
        <br>
    </form>
    <?php
    if (isset($_POST['title'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        echo "<h1>".$title."</h1>";
        echo $content;
    }
    ?>
</body>
</html>