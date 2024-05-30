<?php

// Performance Check in ms

$start_time = microtime(true);

for($i=0; $i <100000; $i++){
    $j = sqrt($i);
}

$end_time = microtime(true);

$execution_time = $end_time - $start_time;
echo $execution_time;