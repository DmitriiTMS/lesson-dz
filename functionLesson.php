<?php
// Functions

// 1------------

$x = 3;
$y = 4;
function add_square($a,$b):int
{
    return $a * $b;
}

$square_result = add_square($x,$y);
echo $square_result;






// 2----------------
$count_day = cal_days_in_month(CAL_GREGORIAN, 2, 2024);
echo "Всего {$count_day}";







// 3--------------
// Не совсем понял задание???????
$text = 'Lorem';

$my_echo = function() use($text)
{
    return $text;
};

$result = $my_echo();
echo $result;






// 4-----------------
$newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$sec = (int) $newyear - (int) time();
$days = floor($sec / (60*60*24));
echo "До нового года осталось дней: {$days}";





// 5-------------------
$start_date = strtotime("2024-02-06");
$end_date = strtotime("2024-02-01");

function between_dates($startDate, $endDate)
{
    return ($startDate - $endDate)/60/60/24;
};

$result = between_dates($start_date, $end_date);
echo $result;

