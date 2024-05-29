<?php

$date1 = new DateTime('2025-05-04');
$date2 = new DateTime('2025-04-04');

$difference = $date1->diff($date2);
echo $difference->format('%Y Years %m months %d days') . "\n";
