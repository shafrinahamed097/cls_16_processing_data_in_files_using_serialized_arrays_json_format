<?php
$date = strtotime('today');

echo date('Y-m-d H:i:s', $date);

$dateafter10days = strtotime('+10 days');
echo date('Y-m-d H:i:s', $dateafter10days);