<?php

$date1 = new DateTime();
echo $date1->getTimestamp() . "\n";
echo $date1->format('Y-m-d H:i:s') . "\n";

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('PT10H30S'));
echo $date->format('Y-m-d H:i:s') . "\n";

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P7Y5M4DT4H3M2S'));
echo $date->format('Y-m-d H:i:s') . "\n";
?>
