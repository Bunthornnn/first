<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
<table>
        <form method="POST">
            <tr>
                <td><label>Username</label></td>
                <td></td>
                <td></td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>
                <label>Password</label>
                <td></td>
                <td></td>
                </td><td><input type="password" name="passwd"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" />
                </td>
            </tr>
        </form>
    </table>
    <?php 
    if(isset($_POST["user"])){
        $username = $_POST["user"];
        $password = $_POST["passwd"];
        echo $username . " and " . $password  ;
    }
    ?>
</body>
</html>
