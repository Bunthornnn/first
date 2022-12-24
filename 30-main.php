<?php
session_start();
if(!isset($_SESSION['username'])){
    header('refresh:0, URL=29-login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="31-logout.php">LOGOUT</a>
    <h1>Welcome USER<?php echo $_SESSION['username']; ?></h1>
</body>
</html>