<?php 
    setcookie('ABC',100,time()+(86400*30));
    echo $_COOKIE['ABC'];
?>