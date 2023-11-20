<?php
namespace andreterceiro;

/**
 * A function that returns the maximum day of a month and its year,
 * you need to specify the year because in febuary we have 28 or
 * 29 days depending of the year
 * 
 * @param int|string $month The month
 * @param int|string $year  The year
 * 
 * @throws \InvalidArgumentException If the month was not an integer or a string
 * @throws \InvalidArgumentException If the year was not an integer or a string
 * 
 * @return int The maximum day of the month
 */
function getMaxDay($month, $year) {
    if (gettype($month) != "string" && gettype($month) != "integer") {
        throw new \InvalidArgumentException("the first parameter needs to be a string or an integer");
    }
    if (gettype($year) != "string" && gettype($year) != "integer") {
        throw new \InvalidArgumentException("the second parameter needs to be a string or an integer");
    }
    $year = (int) $year;

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

/**
 * The same of the getMaxDay(), but use \dateformat (or $date->format)
 * to do the job
 * 
 * @param int|string $month The month
 * @param int|string $year  The year
 * 
 * @throws \InvalidArgumentException If the month was not an integer or a string
 * @throws \InvalidArgumentException If the year was not an integer or a string
 * 
 * @return int The maximum day of the month
 */
function getMaxDayUsingDateFormat($month, $year) {
    if (gettype($month) != "string" && gettype($month) != "integer") {
        throw new \InvalidArgumentException("the first parameter needs to be a string or an integer");
    }
    if (gettype($year) != "string" && gettype($year) != "integer") {
        throw new \InvalidArgumentException("the second parameter needs to be a string or an integer");
    }
    
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
