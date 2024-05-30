<?php

$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age'   => 25

);


$personString = serialize($person);
echo $personString ."\n";


// Associative Array to Json Convertion

$personJson = json_encode($person); 
echo $personJson ."\n";