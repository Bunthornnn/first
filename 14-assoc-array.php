<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
$students  = array('name' => 'Dara', 'sex' => 'Male', 'phone' => '012345678', 'address' => 'Siem Reap',);
foreach ($students as $key => $student){
    echo $key . ": ", $student, "<br>";
}
?>