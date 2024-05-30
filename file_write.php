<?php 

$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age'   => 25,
    'hobbies' => array('tennis', 'reading', 'movies','singing', 'football'),

);

$personstring = json_encode($person);
echo $personstring ."\n";

file_put_contents('person.txt', "\n". $personstring, FILE_APPEND);
