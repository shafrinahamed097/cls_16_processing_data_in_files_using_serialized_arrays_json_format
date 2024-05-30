<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$allfruits1 = implode(', ', $fruits);
echo $allfruits1 ."\n";
// apple, banana, orange, plum, dates, mango

// serialize
$allfruits2 = serialize($fruits);
echo $allfruits2 ."\n";
// a:6:{i:0;s:5:"apple";i:1;s:6:"banana";i:2;s:6:"orange";i:3;s:4:"plum";i:4;s:5:"dates";i:5;s:5:"mango";}


// json
$allfruits3 = json_encode($fruits);
echo $allfruits3 ."\n";
// ["apple","banana","orange","plum","dates","mango"]

// json reverse
$allfruits4 = explode(', ', $allfruits3);
print_r($allfruits4);