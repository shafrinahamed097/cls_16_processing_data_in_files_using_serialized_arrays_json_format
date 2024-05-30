<?php
$start_time = microtime(true);
$websitedata = file_get_contents('https://postman-echo.com/get?form=ostad');

$endTime = microtime(true);
echo $websitedata;
print_r (json_decode($websitedata, true));
echo "\n\n\n";
$execution_time = $endTime - $start_time;
echo $execution_time;