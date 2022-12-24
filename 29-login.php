<?php 
session_start();
if(isset($_POST['username'])){
    $user = $_POST['username'];
    $passwd = $_POST['password'];

    if($user=='System' && $passwd="abc@123"){
        $_SESSION['username'] = 'System';
        header('refresh:0,URL=30-main.php');
    }else{
        echo "<h2>loading...</h2>";
    }
}
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
    <form action="" method="post">
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="login" >
    </form>
</body>
</html>