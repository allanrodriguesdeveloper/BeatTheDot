<?php

function getDayTemplateByOdds($regularRate, $extraRate, $lazyRate) {
    $regularDayTemplate = [
        'time1' => '08:00',
        'time2' => '12:00',
        'time3' => '13:00',
        'time4' => '17:00',
        'worked_time' => DAILY_TIME
    ];

    $extraHourDayTemplate = [
        'time1' => '08:00',
        'time2' => '12:00',
        'time3' => '13:00',
        'time4' => '18:00',
        'worked_time' => DAILY_TIME + 3600
    ];

    $lazyDayTemplate = [
        'time1' => '08:30',
        'time2' => '12:00',
        'time3' => '13:00',
        'time4' => '17:00',
        'worked_time' => DAILY_TIME - 1800
    ];

    $value = rand(0, 100);

    if ($value <= $regularRate) {
        return $regularDayTemplate;
    }

    if ($value <= $regularRate + $extraRate) {
        return $extraHourDayTemplate;
    }

    return $lazyDayTemplate;
}

print_r(getDayTemplateByOdds(90, 5, 5));