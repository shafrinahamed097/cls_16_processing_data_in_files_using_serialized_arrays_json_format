<?php 

$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age'   => 25

);

$personstring = json_encode($person);
echo $personstring ."\n";

file_put_contents('person.txt', $personstring);