<?php 
    $person = array('name' => 'Heng Sina', 'age' =>18,
                    'sex' => 'M','address' =>'Siem Reap',
                    'salary' =>20000,'dob'=>2001);
                    
                    unset($person['name']);
echo ("Name: ". $person['name']."<br>".
        "Sex: ". $person['sex']."<br>".
        "Age: ". $person['age']."<br>");
    // foreach ($person as $key => $value) {
    // echo $key . ': ' . $value . "<br>";
    // }
// $person = array('name' => 'Dara');
    
?>