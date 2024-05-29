<?php

$date1 = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
$date2 = new DateTime('1997-05-04');

$difference = $date1->diff($date2);
echo $difference->format('%Y Years %m month(s) %d days') . "\n";
echo $date1->format('d-m-y g:i:s a');
