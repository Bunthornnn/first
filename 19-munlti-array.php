<?php 
    $cars = array(
        array(array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9),),
        array('Toyota','Camry','Mecezdel',2022,'$6000'),
        array('Ford','Ranger','Mecezdel',2023,'$10000'),
        array('Lexus','LX570','Mecezdel',2024,'$70000'),
        array('BMW','I8','Mecezdel',2025,'$40000')
    );
echo $cars[3][3]."<br/>";
echo $cars[0][2][2];
?>