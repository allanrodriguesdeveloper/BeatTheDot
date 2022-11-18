<?php

session_start();
requireValidSession();

loadModel('workingHours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

loadTemplateView('day_records', [
    'today' => $today,
]);