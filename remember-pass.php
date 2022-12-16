<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="24-infor.php" method="post">
        <div>Username : <input type="text" name="uname"></div>
        <div>Password : <input type="password" name="pword"></div>
        <div><input type="checkbox" name="rem" value="remem">remember password</div>
        <div><input type="submit" value="Login"></div>
    </form>
    <?php
        if(isset($_POST['uname'])){
            $username = $_POST['uname'];
            $password = $_POST['pword'];
            $remember = $_POST['remember'];
            if($remember=='admin' && $password =='123'){
            echo "Login Successfully";
                if ($remember == 'admin') {
                    setcookie('admin','1234',time()+(86400*30));
                }
            }
        }
    ?>
</body>
</html>