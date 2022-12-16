<?php 
$array = array(80,90,70,50,100,85);
// array_shift($array);
// array_shift($array);

for ($i=0; $i <2 ; $i++) { 
    array_shift($array);
}
array_pop($array);
foreach ($array as $key => $newarray) {
    echo ($newarray. "<br>");
}
?>