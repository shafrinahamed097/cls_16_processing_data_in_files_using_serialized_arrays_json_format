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


// add 2 Years 10 Month 4 Days

$date2->add(new DateInterval('P2Y10M4D'));
echo $date2->format('d-m-Y g:i:s a') ."\n";

// Substract 2Years 10 Month 4 Days

$date3 = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
echo $date3->format('d-m-Y g:i:s a') ."\n";

$date3->sub(new DateInterval('P2Y10M4D'));
echo $date3->format('d-m-Y g:i:s a') ."\n";




