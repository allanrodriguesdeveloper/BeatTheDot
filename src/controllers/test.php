<?php

loadModel('WorkingHours');

$load = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
$interval = $load->getWorkedInterval()->format('%H:%I:%S');
print_r($interval);


$intervalBreak = $load->getLunchInterval()->format('%H:%I:%S');
print_r($intervalBreak);