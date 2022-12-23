<?php 
    // setcookie('ABC',100,time()+(86400*30));
    setcookie('abc',"Hello my girl",time()+(86400*7));
    setcookie('abcd',"Hello my girl",time()-1);
    echo $_COOKIE['abcd'];
?>