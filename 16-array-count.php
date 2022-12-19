<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$a = count($arr);
var_dump($a);
for ($i = 0; $i < $a; $i++) {
    echo $arr[$i] . "<br>";
}

$arr[5] = 100;
for ($i = 0; $i < $a; $i++) {
    # code...
    echo $arr[$i] . "<br>";
}
//arry push
array_push($arr, 105, 400);
for ($i = 0; $i < count($arr); $i++) {
    # code...
    echo $arr[$i], "<br>";
}
?>