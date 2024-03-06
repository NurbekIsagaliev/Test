<?php

function countTuesdaysBetweenDates($startDate, $endDate)
{
    $startDate = new DateTime($startDate);
    $endDate = new DateTime($endDate);
    $interval = new DateInterval('P1D');
    $period = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

    $tuesdays = 0;
    foreach ($period as $date) {
        if ($date->format('N') == 2) {
            $tuesdays++;
        }
    }

    return $tuesdays;
}


$startDate = '2024-01-01';
$endDate = '2024-12-31';
echo "Количество вторников между $startDate и $endDate: " . countTuesdaysBetweenDates($startDate, $endDate);
