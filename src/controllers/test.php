<?php

loadModel('WorkingHours');

$load = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
$interval = $load->getWorkedInterval()->format('%H:%I:%S');
print_r($interval);

echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';


$intervalBreak = $load->getLunchInterval()->format('%H:%I:%S');
print_r($intervalBreak);


echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';


print_r($load->getExitTime());