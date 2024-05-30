<?php 

$date= new DateTime('now');


$string = $date->format('Y-m-d H:i:s');

// echo $string;




// unix epoch
$timestamp = strtotime('now');
echo $timestamp ."\n";

// date from timestamp
$date = date('Y-m-d H:i:s', $timestamp);
echo $date ."\n";

$date2 = new DateTime('@' .$timestamp);
echo $date2->format('Y-m-d H:i:s');
echo "\n";

// add 10 days

$date2->add(new DateInterval('P2Y10M4D'));
echo $date2->format('d-m-Y g:i:s a');


