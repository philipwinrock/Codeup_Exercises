<?php

// function nameOfFunction($parameters, $default = 'somevalue') {

// 	// execute code here
// 	// return $someValue;

// }



date_default_timezone_set('America/Chicago');

$monthName=date('F');
$monthNum = date('n');


 function days_of_month($monthName , $monthNum) {
 	$numDays = cal_days_in_month(CAL_GREGORIAN, $monthNum, 2014);
 	return "$monthName has $numDays days.";

 }


echo days_of_month($monthName , $monthNum) . PHP_EOL;











?>