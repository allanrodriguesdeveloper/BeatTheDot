<?php

/**
 * @throws Exception
 */
function getDateAsDateTime($date) {
    return is_string($date) ? new DateTime($date) : $date;
}

/**
 * @throws Exception
 */
function isWeekend($date) {
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >= 6;
}

/**
 * @throws Exception
 */
function isBefore($date1, $date2) {
    $inputDate1 = getDateAsDateTime($date1);
    $inputDate2 = getDateAsDateTime($date2);

    return $inputDate1 <= $inputDate2;
}

/**
 * @throws Exception
 */
function getNextDay($date) {
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}