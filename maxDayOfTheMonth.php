<?php
function getMaxDay($month, $year) {
    if ($month == '01' || $month == '03' || $month == '05' || $month == '07' || $month == '08' || $month == '10' || $month == '12') {
        return 31;
    } elseif ($month != '02') {
        return 30;
    } else {
        if (($year % 100 == 0) && ($year % 400 != 0) || $year % 4 != 0) {
            return 28;
        }

        return 29;
    }
}

function getMaxDayUsingDateFormat($month, $year) {
    $date = new \DateTime($year . "-" . $month . "-31");
    if ($date->format('m') == $month && $date->format('Y') == $year) {
        return 31;
    }

    $date = new \DateTime($year . "-" . $month . "-30");
    if ($date->format('m') == $month && $date->format('Y') == $year) {
        return 30;
    }

    $date = new \DateTime($year . "-" . $month . "-29");
    if ($date->format('m') == $month && $date->format('Y') == $year) {
        return 29;
    }

    return 28;
}
