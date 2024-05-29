<?php
$date = strtotime('today');

// echo date('d-m-Y H:i:s', $date);

$dateafter10days = strtotime('+10 days');
// echo date('d-m-Y H:i:s', $dateafter10days);

// number of week in current year
$week = date('W');
echo $week ."\n";

// tomorrow date
$tomorrow = strtotime('tomorrow');
echo date('d-m-Y H:i:s', $tomorrow) ."\n";

$date = strtotime('22nd June 2024');
echo date('d-m-Y', $date);

