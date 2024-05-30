<?php

$person = array(
    'fname' => 'John',
    'lname' => 'Doe',
    'age'   => 25

);


$personString = serialize($person);
echo $personString ."\n";
// Output: a:3:{s:4:"fname";s:4:"John";s:5:"lname";s:3:"Doe";s:3:"age";i:25;}


// Associative Array to Json Convert

$personJson = json_encode($person); 
echo $personJson ."\n";
// Output: {"fname":"John","lname":"Doe","age":25}

// Json Decode

$personDecode = json_decode($personJson,true);   
print_r($personDecode);
/*
  Output:

  Array
(
    [fname] => John
    [lname] => Doe
    [age] => 25
)   
*/