<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET METHOD</title>
</head>
<body>
    <form action="" method="get">
        <input type="hidden" name="id" value="1">
        <br>
        text : <textarea name="txt" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="GET">
    </form>
    <?php
        if(isset( $_GET['id'])){
            $information = $_GET['id'];
            $text =$_GET['txt'];
            echo $information . "<br>".$text;
        }
    ?>
</body>
</html>