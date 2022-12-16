<?php 
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    if($username== 'admin'&& $password=='admin'){
        echo 'login admin';
    }else{
        echo 'login not admin';
    } 
?> ..