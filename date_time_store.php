<?php 

$date= new DateTime('now');

$string = $date->format('Y-m-d H:i:s');

// echo $string;




// unix epoch
$timestamp = strtotime('now');
echo $timestamp ."\n";

// date from timestamp
$date = date('Y-m-d H:i:s', $timestamp);
echo $date;

