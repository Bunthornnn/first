<?php 
    setcookie('ABC','Hello World',time()+(86400*30));
    echo $_COOKIE['ABC'];
?>